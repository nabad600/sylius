<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OrderItemNamesSetterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.order_item_names_setter' shared service.
     *
     * @return \Sylius\Component\Core\Order\OrderItemNamesSetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Order/OrderItemNamesSetterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Order/OrderItemNamesSetter.php';

        return $container->services['sylius.order_item_names_setter'] = new \Sylius\Component\Core\Order\OrderItemNamesSetter();
    }
}
