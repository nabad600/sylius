<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCancelPayPalPaymentActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\PayPalPlugin\Controller\CancelPayPalPaymentAction' shared service.
     *
     * @return \Sylius\PayPalPlugin\Controller\CancelPayPalPaymentAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Controller/CancelPayPalPaymentAction.php';

        return $container->services['Sylius\\PayPalPlugin\\Controller\\CancelPayPalPaymentAction'] = new \Sylius\PayPalPlugin\Controller\CancelPayPalPaymentAction(($container->privates['Sylius\\PayPalPlugin\\Provider\\PaymentProviderInterface'] ?? $container->load('getPaymentProviderInterfaceService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['session.flash_bag'] ?? $container->load('getSession_FlashBagService')), ($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()), ($container->services['sylius.order_processing.order_payment_processor.checkout'] ?? $container->load('getSylius_OrderProcessing_OrderPaymentProcessor_CheckoutService')));
    }
}