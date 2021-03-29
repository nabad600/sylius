<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Extension_Storage_AppEntityOrderOrderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'payum.extension.storage.app_entity_order_order' shared service.
     *
     * @return \Payum\Core\Extension\StorageExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Extension/StorageExtension.php';

        return $container->services['payum.extension.storage.app_entity_order_order'] = new \Payum\Core\Extension\StorageExtension(($container->services['payum.storage.app_entity_order_order'] ?? $container->load('getPayum_Storage_AppEntityOrderOrderService')));
    }
}
