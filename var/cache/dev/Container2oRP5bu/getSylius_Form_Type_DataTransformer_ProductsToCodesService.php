<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_DataTransformer_ProductsToCodesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.data_transformer.products_to_codes' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\DataTransformer\ProductsToCodesTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/DataTransformer/ProductsToCodesTransformer.php';

        return $container->services['sylius.form.type.data_transformer.products_to_codes'] = new \Sylius\Bundle\CoreBundle\Form\DataTransformer\ProductsToCodesTransformer(($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')));
    }
}
