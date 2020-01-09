<?php

namespace App\Form;

use App\Entity\Utilisateur;
use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;

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
            ->add('mdp')
            //->add('idDiriger')
           /* ->add('idAppartenir', ChoiceType::class, array(
                'choices' => array(
                    'Commercial' => 1,
                    'Marketing' => 2,
                    'Comptabilité' => 3,
                    'Industriel' => 4,
                    'Ressources humaines' => 5,
                    'Juridique' => 6,
                    'Maintenance' => 7,
                    'Informatique' => 8,
                    'Achat' => 9,
                ),
            ))*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
