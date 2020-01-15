<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class AjoutUtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('mail')
            ->add('telephone')
            //->add('portable')
            //->add('nblicence')
            //->add('verrounblicence')
            //->add('societe')
            //->add('role')
            ->add('login')
            ->add('mdp', PasswordType::class)
            ->add('idAppartenir', EntityType::class, [
                'class' => Service::class,
                'choice_label' => function ($service) {
                    return $service->getLibelle();
                }
            ])
            //->add('idDiriger')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
