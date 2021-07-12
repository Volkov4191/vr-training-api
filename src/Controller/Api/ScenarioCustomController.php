<?php


namespace App\Controller\Api;

use App\Entity\Scenario;
use App\Service\ScenarioJsonBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Exception\JsonException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

/**
 * Class ScenarioCustomController
 * @package App\Controller\Api
 *
 */
class ScenarioCustomController extends AbstractController
{
    public static function getEntityFqcn(): string
    {
        return Scenario::class;
    }

    /**
     * Сгенерировать конфиг для тренажера
     *
     * @Route ("/api/scenarios/{scenarioId}", name="api_scenarios_detail")
     *
     * @param int $scenarioId
     * @param ScenarioJsonBuilder $builder
     * @return JsonResponse
     */

    public function detail(int $scenarioId, ScenarioJsonBuilder $builder): JsonResponse
    {
        if ($scenarioId == 0){
            return $this->generateTestResponse();
        }
        /** @var ?Scenario $scenario */
        $scenario = $this->getDoctrine()->getRepository(self::getEntityFqcn())->find($scenarioId);
        if (!$scenario) {
            throw new JsonException('Искомый сценарий не найден', Response::HTTP_NOT_FOUND);
        }

        $builder->setScenario($scenario);

        $tmpResponse = $builder->generate();
        $response = new JsonResponse($tmpResponse);
        $response->setEncodingOptions(JSON_UNESCAPED_UNICODE);
        return $response;
    }

    /**
     * Сгенерировать тестовый для дебага
     *
     * @return JsonResponse
     */
    private function generateTestResponse(): JsonResponse
    {
        $tmpResponse = array(
            'LocationCache' =>
                array(
                    0 => 'В101 /',
                    1 => 'Операторная',
                ),
            'Stages' =>
                array(
                    0 =>
                        array(
                            'Steps' =>
                                array(
                                    0 =>
                                        array(
                                            'BriefingMessage' => 'Описание что нужно сделать в шаге',
                                            'ConfigJson' => '{
  "Phrases": [
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    },
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    },
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    }
  ]
}',
                                            'Type' => 'Chat',
                                            'VideoID' => '0f8fad5b-d9cb-469f-a165-70867728950e',
                                            'Name' => 'Тестовый шаг',
                                            'ErrorMessage' => 'Описание ошибки шага',
                                        ),
                                    1 =>
                                        array(
                                            'BriefingMessage' => 'Описание что нужно сделать в шаге',
                                            'ConfigJson' => '{
  "Questions": [
    {
      "Answers": [
        {
          "Text": "Текст ответа с типом Correct",
          "Type": "Correct"
        },
        {
          "Text": "Текст ответа с типом Incorrect",
          "Type": "Incorrect"
        }
      ],
      "QuestionText": "Текст вопроса"
    }
  ]
}',
                                            'Type' => 'Question',
                                            'VideoID' => '0f8fad5b-d9cb-469f-a165-70867728950e',
                                            'Name' => 'Тестовый шаг',
                                            'ErrorMessage' => 'Описание ошибки шага',
                                        ),
                                    2 =>
                                        array(
                                            'BriefingMessage' => 'Описание что нужно сделать в шаге',
                                            'ConfigJson' => '{
  "Phrases": [
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    },
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    },
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    }
  ]
}',
                                            'Type' => 'Chat',
                                            'VideoID' => '0f8fad5b-d9cb-469f-a165-70867728950e',
                                            'Name' => 'Тестовый шаг',
                                            'ErrorMessage' => 'Описание ошибки шага',
                                        ),
                                ),
                            'Name' => 'Имя этапа',
                            'ErrorMessage' => 'Описание ошибки выполнения этапа',
                        ),
                    1 =>
                        array(
                            'Steps' =>
                                array(
                                    0 =>
                                        array(
                                            'BriefingMessage' => 'Описание что нужно сделать в шаге',
                                            'ConfigJson' => '{
  "Phrases": [
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    },
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    },
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    }
  ]
}',
                                            'Type' => 'Chat',
                                            'VideoID' => '0f8fad5b-d9cb-469f-a165-70867728950e',
                                            'Name' => 'Тестовый шаг',
                                            'ErrorMessage' => 'Описание ошибки шага',
                                        ),
                                    1 =>
                                        array(
                                            'BriefingMessage' => 'Описание что нужно сделать в шаге',
                                            'ConfigJson' => '{
  "Questions": [
    {
      "Answers": [
        {
          "Text": "Текст ответа с типом Correct",
          "Type": "Correct"
        },
        {
          "Text": "Текст ответа с типом Incorrect",
          "Type": "Incorrect"
        }
      ],
      "QuestionText": "Текст вопроса"
    }
  ]
}',
                                            'Type' => 'Question',
                                            'VideoID' => '0f8fad5b-d9cb-469f-a165-70867728950e',
                                            'Name' => 'Тестовый шаг',
                                            'ErrorMessage' => 'Описание ошибки шага',
                                        ),
                                    2 =>
                                        array(
                                            'BriefingMessage' => 'Описание что нужно сделать в шаге',
                                            'ConfigJson' => '{
  "Phrases": [
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    },
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    },
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    }
  ]
}',
                                            'Type' => 'Chat',
                                            'VideoID' => '0f8fad5b-d9cb-469f-a165-70867728950e',
                                            'Name' => 'Тестовый шаг',
                                            'ErrorMessage' => 'Описание ошибки шага',
                                        ),
                                ),
                            'Name' => 'Имя этапа',
                            'ErrorMessage' => 'Описание ошибки выполнения этапа',
                        ),
                    2 =>
                        array(
                            'Steps' =>
                                array(
                                    0 =>
                                        array(
                                            'BriefingMessage' => 'Описание что нужно сделать в шаге',
                                            'ConfigJson' => '{
  "Phrases": [
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    },
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    },
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    }
  ]
}',
                                            'Type' => 'Chat',
                                            'VideoID' => '0f8fad5b-d9cb-469f-a165-70867728950e',
                                            'Name' => 'Тестовый шаг',
                                            'ErrorMessage' => 'Описание ошибки шага',
                                        ),
                                    1 =>
                                        array(
                                            'BriefingMessage' => 'Описание что нужно сделать в шаге',
                                            'ConfigJson' => '{
  "Questions": [
    {
      "Answers": [
        {
          "Text": "Текст ответа с типом Correct",
          "Type": "Correct"
        },
        {
          "Text": "Текст ответа с типом Incorrect",
          "Type": "Incorrect"
        }
      ],
      "QuestionText": "Текст вопроса"
    }
  ]
}',
                                            'Type' => 'Question',
                                            'VideoID' => '0f8fad5b-d9cb-469f-a165-70867728950e',
                                            'Name' => 'Тестовый шаг',
                                            'ErrorMessage' => 'Описание ошибки шага',
                                        ),
                                    2 =>
                                        array(
                                            'BriefingMessage' => 'Описание что нужно сделать в шаге',
                                            'ConfigJson' => '{
  "Phrases": [
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    },
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    },
    {
      "ChoiceSubject": "Кто отвечает",
      "CorrectPhrase": "Правильный ответ",
      "IncorrectPhrase": "Неправильный ответ",
      "Message": "Сообщение",
      "Subject": "От кого"
    }
  ]
}',
                                            'Type' => 'Chat',
                                            'VideoID' => '0f8fad5b-d9cb-469f-a165-70867728950e',
                                            'Name' => 'Тестовый шаг',
                                            'ErrorMessage' => 'Описание ошибки шага',
                                        ),
                                ),
                            'Name' => 'Имя этапа',
                            'ErrorMessage' => 'Описание ошибки выполнения этапа',
                        ),
                ),
            'Tags' =>
                array(
                    0 => 'Компрессор В',
                    1 => 'В101',
                ),
            'Name' => 'Имя сценария',
            'ErrorMessage' => 'Описание ошибки при выполнении сценария',
        );

        $response = new JsonResponse($tmpResponse);
        $response->setEncodingOptions(JSON_UNESCAPED_UNICODE);
        return $response;
    }
}