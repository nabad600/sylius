<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_CollectionDataProvider_PaymentMethodService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.api.collection_data_provider.payment_method' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataProvider\CartPaymentMethodsSubresourceDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/DataProvider/CartPaymentMethodsSubresourceDataProvider.php';

        return $container->privates['sylius.api.collection_data_provider.payment_method'] = new \Sylius\Bundle\ApiBundle\DataProvider\CartPaymentMethodsSubresourceDataProvider(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), ($container->services['sylius.repository.payment'] ?? $container->load('getSylius_Repository_PaymentService')), ($container->services['sylius.payment_methods_resolver.channel_based'] ?? $container->getSylius_PaymentMethodsResolver_ChannelBasedService()));
    }
}
