<?php

namespace App\Form;

use App\Entity\Person;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class PersonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('sex', ChoiceType::class, [
                'choices'=>[
                    'Male'=> 'male',
                    'Female'=> 'female',
                    'Neuvádět'=>null
                ]
            ])
            ->add('age')
            ->add('mother', EntityType::class,
                ['class'=>Person::class, 'choice_label' => 'name'])
            ->add('father', EntityType::class,
                ['class'=>Person::class, 'choice_label' => 'name'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Person::class,
        ]);
    }
}
