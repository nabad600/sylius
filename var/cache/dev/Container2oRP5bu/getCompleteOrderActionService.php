<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompleteOrderActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\PayPalPlugin\Payum\Action\CompleteOrderAction' shared service.
     *
     * @return \Sylius\PayPalPlugin\Payum\Action\CompleteOrderAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Action/ActionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Payum/Action/CompleteOrderAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Processor/PayPalAddressProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Processor/PayPalAddressProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Updater/PaymentUpdaterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Updater/PayPalPaymentUpdater.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        return $container->services['Sylius\\PayPalPlugin\\Payum\\Action\\CompleteOrderAction'] = new \Sylius\PayPalPlugin\Payum\Action\CompleteOrderAction(($container->privates['Sylius\\PayPalPlugin\\Api\\CacheAuthorizeClientApiInterface'] ?? $container->load('getCacheAuthorizeClientApiInterfaceService')), ($container->privates['Sylius\\PayPalPlugin\\Api\\UpdateOrderApiInterface'] ?? $container->load('getUpdateOrderApiInterfaceService')), ($container->privates['Sylius\\PayPalPlugin\\Api\\CompleteOrderApiInterface'] ?? $container->load('getCompleteOrderApiInterfaceService')), ($container->privates['Sylius\\PayPalPlugin\\Api\\OrderDetailsApiInterface'] ?? $container->load('getOrderDetailsApiInterfaceService')), new \Sylius\PayPalPlugin\Processor\PayPalAddressProcessor($a), new \Sylius\PayPalPlugin\Updater\PayPalPaymentUpdater($a), ($container->services['sylius.state_resolver.order_payment'] ?? $container->load('getSylius_StateResolver_OrderPaymentService')), ($container->privates['Sylius\\PayPalPlugin\\Provider\\PayPalItemDataProviderInterface'] ?? $container->load('getPayPalItemDataProviderInterfaceService')));
    }
}
