<?php

namespace App\Form;

use App\Entity\Admin;
use App\Entity\Superadmin;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Doctrine\ORM\EntityRepository;

class ModifAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('mail')
            ->add('telephone')
            ->add('portable')
            ->add('nblicence')
            ->add('verrounblicence')
            ->add('login')
            ->add('mdp', PasswordType::class)
            ->add('societe')
            ->add('idControler',
            EntityType::class,
            array('class'=>Superadmin::class,
            'choice_label'=>'id',
            'multiple'=>false,
            'expanded'=>true,
            'query_builder'=>function(EntityRepository $er){
                return $er->createQueryBuilder('Superadmin')->orderBy('Superadmin.id', 'ASC');
            }));
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Admin::class,
        ]);
    }
}
