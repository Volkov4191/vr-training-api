<?php

namespace App\Controller\Admin;

use App\Entity\ScenarioStatus;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

/**
 * Управление статусами сценариев
 *
 * Class ScenarioStatusCrudController
 * @package App\Controller\Admin
 */
class ScenarioStatusCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ScenarioStatus::class;
    }
}
