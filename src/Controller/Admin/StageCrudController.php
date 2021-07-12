<?php

namespace App\Controller\Admin;

use App\Entity\Stage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

/**
 * Управление этапами
 *
 * Class StageCrudController
 * @package App\Controller\Admin
 */
class StageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Stage::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('scenario')->setRequired(true),
            TextField::new('name'),
        ];
    }

}
