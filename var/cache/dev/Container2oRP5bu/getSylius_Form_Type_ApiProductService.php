<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ApiProductService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.api_product' shared service.
     *
     * @return \Sylius\Bundle\AdminApiBundle\Form\Type\ProductType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminApiBundle/Form/Type/ProductType.php';

        return $container->services['sylius.form.type.api_product'] = new \Sylius\Bundle\AdminApiBundle\Form\Type\ProductType();
    }
}
