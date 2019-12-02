<?php

namespace GesteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GesteDuMoisType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setAction($options['action'])
            ->add('nomGeste')
            ->add('moisGeste',ChoiceType::class,array(
                'choices'=>array(
                    'Janvier'=>'Janvier',
                    'Fevrier'=>'Fevrier',
                    'Mars'=>'Mars',
                    'Avril'=>'Avril',
                    'Mai'=>'Mai',
                    'Juin'=>'Juin',
                    'Juillet'=>'Juillet',
                    'Aout'=>'Aout',
                    'Septembre'=>'Septembre',
                    'Octobre'=>'Octobre',
                    'Novembre'=>'Novembre',
                    'Décembre'=>'Décembre',

                )
            ))
            ->add('descGeste')
            ->add('imageGeste',FileType::class,array('data_class'=>null,'label'=>'Selectionner photo'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GesteBundle\Entity\GesteDuMois'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestebundle_gestedumois';
    }


}
