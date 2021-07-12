<?php

namespace App\Service\Step;

use App\Entity\Question;
use App\Entity\QuestionAnswer;
use App\Entity\Step;
use App\Entity\StepQuestion;
use App\Repository\StepQuestionRepository;
use JetBrains\PhpStorm\ArrayShape;
use Symfony\Bridge\Doctrine\ManagerRegistry;

/**
 * Билдер для формирования JSON шага с ответом на вопрос
 * https://gitlab.com/aft-vr/virtual-reality-constructor/-/wikis/%D0%94%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B8%D1%8F/%D0%92%D0%BE%D0%BF%D1%80%D0%BE%D1%81
 *
 * Class QuestionJsonBuilder
 * @package App\Service\Step
 */
class QuestionJsonBuilder extends DefaultJsonBuilder
{
    /**
     * @var array|null
     */
    protected ?array $stepQuestions = null;

    #[ArrayShape(['Questions' => "array"])]
    public function generateConfigJson(): array
    {
        $stepQuestions = $this->getStepQuestions();
        $jsonQuestions = [];
        foreach ($stepQuestions as $stepQuestion) {
            /** @var Question $question */
            $question = $stepQuestion->getQuestion();
            $questionId = $question->getId();
            $jsonQuestions[$questionId] = $this->convertQuestionToJson($question);
        }

        return [
            'Questions' => array_values($jsonQuestions),
        ];
    }

    /**
     * Конвертировать вопрос в JSON
     *
     * @param Question $question
     * @return array
     */
    #[ArrayShape(['Answers' => "array", 'QuestionText' => "string"])]
    protected function convertQuestionToJson(Question $question): array
    {
        /** @var QuestionAnswer[] $answers */
        $answers = $question->getQuestionAnswers();
        $jsonAnswers = [];
        foreach ($answers as $answer){
            $jsonAnswers[] = [
                'Text' => strip_tags($answer->getText()),
                'Type' => $answer->getIsCorrect() ? 'Correct' : 'Incorrect',
            ];
        }
        return [
            'Answers' => $jsonAnswers,
            'QuestionText' => $question->getName(),
        ];
    }

    /**
     * Получить вопросы для шага
     *
     * @return StepQuestion[]
     */
    protected function getStepQuestions(): array
    {
        if (is_array($this->stepQuestions)){
            return  $this->stepQuestions;
        }
        /** @var StepQuestionRepository $stepQuestionRepository */
        $stepQuestionRepository = $this->registry->getRepository(StepQuestion::class);
        $this->stepQuestions = $stepQuestionRepository->findByStep( $this->step) ?: [];
        return  $this->stepQuestions;
    }
}