<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_ProductSlugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.controller.product_slug' shared service.
     *
     * @return \Sylius\Bundle\ProductBundle\Controller\ProductSlugController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Controller/ProductSlugController.php';

        $container->services['sylius.controller.product_slug'] = $instance = new \Sylius\Bundle\ProductBundle\Controller\ProductSlugController();

        $instance->setContainer($container);

        return $instance;
    }
}
