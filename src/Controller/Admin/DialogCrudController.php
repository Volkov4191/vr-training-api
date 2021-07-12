<?php

namespace App\Controller\Admin;

use App\Entity\Dialog;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

/**
 * Управление диалогами
 *
 * Class DialogCrudController
 * @package App\Controller\Admin
 */
class DialogCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dialog::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('step')->setRequired(true),
            TextField::new('name'),
            IntegerField::new('sort'),
        ];
    }
}
