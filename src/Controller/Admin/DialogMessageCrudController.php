<?php

namespace App\Controller\Admin;

use App\Entity\DialogMessage;
use App\Entity\DialogRole;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

/**
 * Управление сообщениями из диалогов
 *
 * Class DialogMessageCrudController
 * @package App\Controller\Admin
 */
class DialogMessageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DialogMessage::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('dialog'),
            ChoiceField::new('from_role')->setChoices([
                'От игрока' => DialogRole::Player,
                'От компьютера' => DialogRole::NPC,
            ]),
            ChoiceField::new('author_name')->setChoices([
                'Маш.зал' => 'Маш.зал',
                'Операторная' => 'Операторная'
            ]),
            TextField::new('correct_phrase'),
            TextField::new('wrong_phrase'),
            IntegerField::new('sort'),
        ];
    }
}
