<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('metaKeyWord')
            ->add('metaDescription')
            ->add('newUrl')
            ->add('ifInStock')
            ->add('ifPreOrder')
            ->add('commande')
            ->add('disponibilityDate')
            ->add('addDate')
            ->add('displayPrice')
            ->add('image')
            ->add('imageTexte')
            ->add('deleteExistingImage')
            ->add('caracteristic')
            ->add('onlineOnly')
            ->add('conditionProduct')
            ->add('customisable')
            ->add('download')
            ->add('textArea')
            ->add('deadStock')
            ->add('dematerialize')
            ->add('fileUrl')
            ->add('downloadAutorize')
            ->add('expirationDate')
            ->add('dayNumber')
            ->add('shopName')
            ->add('avancedStock')
            ->add('stockFunction')
            ->add('stockPlace')
            ->add('accessories')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
