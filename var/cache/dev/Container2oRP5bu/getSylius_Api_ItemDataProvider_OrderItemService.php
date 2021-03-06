<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_ItemDataProvider_OrderItemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.api.item_data_provider.order_item' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataProvider\OrderItemItemDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/DataProvider/OrderItemItemDataProvider.php';

        return $container->privates['sylius.api.item_data_provider.order_item'] = new \Sylius\Bundle\ApiBundle\DataProvider\OrderItemItemDataProvider(($container->services['sylius.repository.order_item'] ?? $container->load('getSylius_Repository_OrderItemService')), ($container->privates['sylius.api.context.user'] ?? $container->getSylius_Api_Context_UserService()));
    }
}
