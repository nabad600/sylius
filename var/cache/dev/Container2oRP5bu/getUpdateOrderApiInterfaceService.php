<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateOrderApiInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\PayPalPlugin\Api\UpdateOrderApiInterface' shared service.
     *
     * @return \Sylius\PayPalPlugin\Api\UpdateOrderApi
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Api/UpdateOrderApiInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Api/UpdateOrderApi.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/PaymentReferenceNumberProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/PaymentReferenceNumberProvider.php';

        return $container->privates['Sylius\\PayPalPlugin\\Api\\UpdateOrderApiInterface'] = new \Sylius\PayPalPlugin\Api\UpdateOrderApi(($container->privates['Sylius\\PayPalPlugin\\Client\\PayPalClientInterface'] ?? $container->load('getPayPalClientInterfaceService')), ($container->privates['Sylius\\PayPalPlugin\\Provider\\PaymentReferenceNumberProviderInterface'] ?? ($container->privates['Sylius\\PayPalPlugin\\Provider\\PaymentReferenceNumberProviderInterface'] = new \Sylius\PayPalPlugin\Provider\PaymentReferenceNumberProvider())), ($container->privates['Sylius\\PayPalPlugin\\Provider\\PayPalItemDataProviderInterface'] ?? $container->load('getPayPalItemDataProviderInterfaceService')));
    }
}
