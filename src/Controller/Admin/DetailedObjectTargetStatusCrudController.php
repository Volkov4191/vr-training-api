<?php

namespace App\Controller\Admin;

use App\Entity\DetailedObjectTargetStatus;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

/**
 * Управление целевыми статусами объектов
 *
 * Class DetailedObjectTargetStatusCrudController
 * @package App\Controller\Admin
 */
class DetailedObjectTargetStatusCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DetailedObjectTargetStatus::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('step')->setRequired(true),
            AssociationField::new('object')->setRequired(true),
            AssociationField::new('status')->setRequired(true),
            AssociationField::new('video'),
        ];
    }

}
