<?php

namespace App\Controller\Admin;

use App\Entity\Detailedobjectdata;
use App\Entity\Step;
use App\Repository\DetailedObjectRepository;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\AsciiSlugger;
use function Symfony\Component\String\u;

/**
 * Управление шагами
 *
 * @Route("/admin/steps", "steps")
 *
 * Class StepCrudController
 * @package App\Controller\Admin
 */
class StepCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Step::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('stage')->setRequired(true),
            AssociationField::new('type')->setRequired(true),
            TextField::new('name'),
            ChoiceField::new('title')->setChoices([
                'Машинный зал' => 'Машинный зал',
                'Операторная' => 'Операторная'
            ])->setRequired(true),
            TextEditorField::new('description')->setRequired(true),
            AssociationField::new('video')->setRequired(true),
            AssociationField::new('location'),
            IntegerField::new('sort')->setRequired(true),
        ];
    }
}
