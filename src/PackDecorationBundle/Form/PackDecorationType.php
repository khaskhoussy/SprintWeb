<?php

namespace PackDecorationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PackDecorationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setAction($options['action'])
            ->add('nomPack')
            ->add('typep',ChoiceType::class,array(
                'choices'=>array(
                    'Packs pour petit bassin'=>'Packs pour petit bassin',
                    'Packs pour ombre ou mi-ombre'=>'Packs pour ombre ou mi-ombre',
                    'Packs de bordure'=>'Packs de bordure',
                    'Packs de phyto-épuration'=>'Packs de phyto-épuration'
                )
            ))
            ->add('descriptionPack',TextareaType::class)
            ->add('prixp',MoneyType::class)
            ->add('imagePack',FileType::class,array('data_class'=>null,'label'=>'Selectionner photo'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BddBundle\Entity\PackDecoration'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'packdecorationbundle_packdecoration';
    }


}
