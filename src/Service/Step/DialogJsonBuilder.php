<?php

namespace App\Service\Step;

use App\Entity\Dialog;
use App\Entity\DialogMessage;
use App\Entity\DialogRole;
use App\Entity\Step;
use App\Repository\DialogMessageRepository;
use App\Repository\DialogRepository;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;
use phpDocumentor\Reflection\Types\Collection;
use Symfony\Bridge\Doctrine\ManagerRegistry;

/**
 * Билдер для генерации шага типа - Диалог
 * https://gitlab.com/aft-vr/virtual-reality-constructor/-/wikis/%D0%94%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B8%D1%8F/%D0%94%D0%B8%D0%B0%D0%BB%D0%BE%D0%B3
 *
 * Class DialogJsonBuilder
 * @package App\Service\Step
 */
class DialogJsonBuilder extends DefaultJsonBuilder
{

    /**
     * TODO: Обернуть ошибки в генераторах в обших обработчик
     *
     * @return array
     */
    public function generateConfigJson(): array
    {
        /** @var DialogRepository $dialogRepository */
        $dialogRepository = $this->registry->getRepository(Dialog::class);
        /** @var Dialog $dialog */
        $dialog = $dialogRepository->findOneByStep($this->step);
        if (!$dialog) {
            return ['ErrorMessage' => "Dialog is not found"];
        }
        /** @var DialogMessageRepository $messageRepository */
        $messageRepository = $this->registry->getRepository(DialogMessage::class);
        /** @var DialogMessage[] $messages */
        $messages = $messageRepository->findByDialog($dialog);

        $response['Phrases'] = $this->messagesToJson($messages);
        return $response;
    }

    /**
     * Конвертировать сообщения чата в JSON
     *
     * @param array $messages
     * @return array
     */
    #[Pure]
    private function messagesToJson(array $messages): array
    {
        $chatJson = [];
        /**
         * Что спрашивает юзер
         * @var $request
         */
        /**
         * Что отвечают юзеру NPC
         * @var $answer
         */
        /** @var DialogMessage[] $messages */

        $countMessages = sizeof($messages);
        for ($i = 0; $i <= $countMessages; $i += 2) {
            $currentMessage = $messages[$i] ?? null;
            $previousMessage = $messages[$i - 1] ?? null;

            $chatJson[] = [
                'ChoiceSubject' => $currentMessage ? $currentMessage->getAuthorName() : '',
                'CorrectPhrase' => $currentMessage ? $currentMessage->getCorrectPhrase() : '',
                'IncorrectPhrase' => $currentMessage ? $currentMessage->getWrongPhrase() : '',
                'Message' => $previousMessage ? $previousMessage->getCorrectPhrase() : '',
                'Subject' => $previousMessage ? $previousMessage->getAuthorName() : '',
            ];
        }

        return $chatJson;
    }
}