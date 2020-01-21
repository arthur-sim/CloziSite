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
            ->add('actif', null, 
                ['data' => '1']
            )
            ->add('title')
            ->add('categorie')
            ->add('price')
            ->add('taxRules', null, 
                ['data' => '1']
            )
            ->add('shoppedPrice')
            ->add('discount')
            ->add('discountPrice')
            ->add('discountPercent')
            ->add('dicsountFor')
            ->add('dicsountTo')
            ->add('reference')
            ->add('referenceShopper', null, 
                ['data' => ' ']
            )
            ->add('shopper', null, 
                ['data' => ' ']
            )
            ->add('brand')
            ->add('ean13', null, 
                ['data' => ' ']
            )
            ->add('upc', null, 
                ['data' => ' ']
            )
            ->add('ecoPart', null, 
                ['data' => '1']
            )
            ->add('width')
            ->add('height')
            ->add('depth')
            ->add('weight')
            ->add('deliveryProduct')
            ->add('deliveryproductSoldOut', null, 
                ['data' => ' ']
            )
            ->add('quantity', null, 
                ['data' => '1']
            )
            ->add('minimalQuantity', null, 
                ['data' => '1']
            )
            ->add('levelMinimalStock', null, 
                ['data' => '1']
            )
            ->add('levelMinimalStockForMail', null, 
                ['data' => '0']
            )
            ->add('visibility', null, 
                ['data' => 'both']
            )
            ->add('shippingPrice')
            ->add('unity', null, 
                ['data' => ' ']
            )
            ->add('unityPrice', null, 
                ['data' => ' ']
            )
            ->add('summary')
            ->add('description')
            ->add('keyWord')
            ->add('tagTitle')
            ->add('metaKeyWord')
            ->add('metaDescription')
            ->add('newUrl')
            ->add('ifInStock', null, 
                ['data' => 'En stock']
            )
            ->add('ifPreOrder', null, 
                ['data' => 'Sur pré-commande']
            )
            ->add('commande', null, 
                ['data' => '1']
            )
            ->add('disponibilityDate', null, 
                ['data' => ' ']
            )
            ->add('addDate', null, 
                ['data' => ' ']
            )
            ->add('displayPrice', null, 
                ['data' => '1']
            )
            ->add('image')
            ->add('imageTexte')
            ->add('deleteExistingImage', null, 
                ['data' => '0']
            )
            ->add('caracteristic')
            ->add('onlineOnly', null, 
                ['data' => '1']
            )
            ->add('conditionProduct', null, 
                ['data' => ' ']
            )
            ->add('customisable', null, 
                ['data' => '0']
            )
            ->add('download', null, 
                ['data' => '0']
            )
            ->add('textArea', null, 
                ['data' => '0']
            )
            ->add('deadStock', null, 
                ['data' => ' ']
            )
            ->add('dematerialize', null, 
                ['data' => '0']
            )
            ->add('fileUrl', null, 
                ['data' => ' ']
            )
            ->add('downloadAutorize', null, 
                ['data' => '0']
            )
            ->add('expirationDate', null, 
                ['data' => ' ']
            )
            ->add('dayNumber', null, 
                ['data' => '0']
            )
            ->add('shopName', null, 
                ['data' => ' ']
            )
            ->add('avancedStock', null, 
                ['data' => '0']
            )
            ->add('stockFunction', null, 
                ['data' => '0']
            )
            ->add('stockPlace', null, 
                ['data' => ' ']
            )
            ->add('accessories', null, 
                ['data' => ' ']
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
