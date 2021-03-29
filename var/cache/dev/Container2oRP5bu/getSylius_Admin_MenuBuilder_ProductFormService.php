<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Admin_MenuBuilder_ProductFormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.admin.menu_builder.product_form' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Menu\ProductFormMenuBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Menu/ProductFormMenuBuilder.php';

        return $container->services['sylius.admin.menu_builder.product_form'] = new \Sylius\Bundle\AdminBundle\Menu\ProductFormMenuBuilder(($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
