<?php

namespace App\Form;

use App\Entity\Utilisateur;
use App\Entity\Service;
use App\Entity\Admin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class CreerUtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('mail')
            ->add('telephone')
            ->add('login')
            ->add('mdp', PasswordType::class)
            ->add('idDiriger',
                EntityType::class,
                array('class'=>Admin::class,
                'choice_label'=>'id',
                'multiple'=>false,
                'expanded'=>true,
                'query_builder'=>function(EntityRepository $er){
                    return $er->createQueryBuilder('Admin')->orderBy('Admin.id', 'ASC');
                }
            ))
            ->add('idAppartenir', EntityType::class, [
                'class' => Service::class,
                'choice_label' => function ($service) {
                    return $service->getLibelle();
                }
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
