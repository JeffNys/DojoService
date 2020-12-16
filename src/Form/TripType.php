<?php

namespace App\Form;

use App\Entity\City;
use App\Entity\Trip;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TripType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fromCity', EntityType::class, [
                'label' => 'from city',
                'placeholder' => '-- choose a city  --',
                'choice_label' => 'name',
                'class' => City::class
            ])
            ->add('toCity', EntityType::class, [
                'label' => 'to city',
                'placeholder' => '-- choose a city  --',
                'choice_label' => 'name',
                'class' => City::class
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Trip::class,
        ]);
    }
}
