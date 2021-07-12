<?php

namespace App\Controller\Admin;

use App\Entity\Scenario;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

/**
 * Управление сценариями
 *
 * Class ScenarioCrudController
 * @package App\Controller\Admin
 */
class ScenarioCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Scenario::class;
    }

    /**
     * @param string $pageName
     * @return iterable
     */
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('client')->setRequired(true),
            TextField::new('name'),
            TextField::new('code'),
            AssociationField::new('status')->setRequired(true),
        ];
    }
}
