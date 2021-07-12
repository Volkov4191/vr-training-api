<?php

namespace App\Controller\Admin;

use App\Entity\StepQuestion;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

/**
 * Управление вопросами в шагах
 *
 * Class StepQuestionCrudController
 * @package App\Controller\Admin
 */
class StepQuestionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return StepQuestion::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('step')->setRequired(true),
            AssociationField::new('question')->setRequired(true),
            AssociationField::new('object'),
            NumberField::new('sort'),
        ];
    }
}
