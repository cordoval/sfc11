<?php

namespace Kinosklad\Bundle\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class GenreType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nameEn', 'text', array('label' => 'Genre name'))
            ->add('nameRu', 'text', array('label' => 'Название жанра'))
        ;
    }

    public function getName()
    {
        return 'genre';
    }
}
