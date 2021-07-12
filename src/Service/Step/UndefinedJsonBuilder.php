<?php

namespace App\Service\Step;

use App\Entity\Step;
use JetBrains\PhpStorm\ArrayShape;
use Symfony\Bridge\Doctrine\ManagerRegistry;

/**
 * Билдер для типа шага, который еще не запрограмирован, но уже занесен в БД
 *
 * Class UndefinedJsonBuilder
 * @package App\Service\Step
 */
class UndefinedJsonBuilder extends DefaultJsonBuilder
{
    #[ArrayShape(['ErrorMessage' => "string"])]
    public function generateConfigJson(): array
    {
        return ['ErrorMessage' => 'Undefined type of step'];
    }
}