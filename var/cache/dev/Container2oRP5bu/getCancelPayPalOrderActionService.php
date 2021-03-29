<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCancelPayPalOrderActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\PayPalPlugin\Controller\CancelPayPalOrderAction' shared service.
     *
     * @return \Sylius\PayPalPlugin\Controller\CancelPayPalOrderAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Controller/CancelPayPalOrderAction.php';

        return $container->services['Sylius\\PayPalPlugin\\Controller\\CancelPayPalOrderAction'] = new \Sylius\PayPalPlugin\Controller\CancelPayPalOrderAction(($container->privates['Sylius\\PayPalPlugin\\Provider\\PaymentProviderInterface'] ?? $container->load('getPaymentProviderInterfaceService')), ($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), ($container->privates['session.flash_bag'] ?? $container->load('getSession_FlashBagService')));
    }
}
