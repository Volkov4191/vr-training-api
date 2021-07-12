<?php

namespace App\Controller\Admin;

use App\Entity\QuestionAnswer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

/**
 * Управление ответами на вопросы
 *
 * Class QuestionAnswerCrudController
 * @package App\Controller\Admin
 */
class QuestionAnswerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return QuestionAnswer::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('question')->setRequired(true),
            TextEditorField::new('text')->setRequired(true),
            BooleanField::new('is_correct'),
        ];
    }
}
