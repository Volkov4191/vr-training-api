<?php

namespace App\Controller\Admin;

use App\Entity\StepAnimation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

/**
 * Управление анимацией в шагах
 *
 * Class StepAnimationCrudController
 * @package App\Controller\Admin
 */
class StepAnimationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return StepAnimation::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('step')->setRequired(true),
            AssociationField::new('object')->setRequired(true),
            AssociationField::new('from_status')->setRequired(true),
            AssociationField::new('to_status')->setRequired(true),
            IntegerField::new('duration')->setRequired(true),
        ];
    }

}
