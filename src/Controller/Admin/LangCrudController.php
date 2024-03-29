<?php

namespace App\Controller\Admin;

use App\Entity\Lang;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class LangCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Lang::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            ChoiceField::new('name')
        ];
    }

}
