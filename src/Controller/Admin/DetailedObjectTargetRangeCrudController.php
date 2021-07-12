<?php

namespace App\Controller\Admin;

use App\Entity\DetailedObjectTargetRange;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

/**
 * Управление диапазаном значений задвижек
 *
 * Class DetailedObjectTargetRangeCrudController
 * @package App\Controller\Admin
 */
class DetailedObjectTargetRangeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DetailedObjectTargetRange::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('step')->setRequired(true),
            AssociationField::new('object')->setRequired(true),
            NumberField::new('value_from')->setRequired(false),
            NumberField::new('value_to')->setRequired(true),
        ];
    }
}
