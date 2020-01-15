<?php

namespace App\Form;

use App\Entity\Societe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParametresLCMSType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('urllcms')
            //->add('urllms')
            ->add('loginsuperadmin')
            ->add('loginlcms')
            //->add('loginlms')
            ->add('mdplcms')
            //->add('mdplms')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Societe::class,
        ]);
    }
}
