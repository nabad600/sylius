<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentProviderInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\PayPalPlugin\Provider\PaymentProviderInterface' shared service.
     *
     * @return \Sylius\PayPalPlugin\Provider\PaymentProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/PaymentProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/PaymentProvider.php';

        return $container->privates['Sylius\\PayPalPlugin\\Provider\\PaymentProviderInterface'] = new \Sylius\PayPalPlugin\Provider\PaymentProvider(($container->services['sylius.repository.payment'] ?? $container->load('getSylius_Repository_PaymentService')));
    }
}
