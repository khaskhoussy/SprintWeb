<?php

namespace ProductBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffrePromotionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('pourcentage')->add('dateDebut')->add('dateFin')->add('type')->add('titre')
        ->add('products',EntityType::class,['class'=>'BddBundle\Entity\Produit',
            'choice_label'=>'nomProd',
            'expanded'=>false,
             'multiple'=>true
        ])
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BddBundle\Entity\OffrePromotion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'productbundle_offrepromotion';
    }


}
