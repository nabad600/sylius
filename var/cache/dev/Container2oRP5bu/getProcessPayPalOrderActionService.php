<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessPayPalOrderActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\PayPalPlugin\Controller\ProcessPayPalOrderAction' shared service.
     *
     * @return \Sylius\PayPalPlugin\Controller\ProcessPayPalOrderAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Controller/ProcessPayPalOrderAction.php';

        return $container->services['Sylius\\PayPalPlugin\\Controller\\ProcessPayPalOrderAction'] = new \Sylius\PayPalPlugin\Controller\ProcessPayPalOrderAction(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), ($container->services['sylius.repository.customer'] ?? $container->load('getSylius_Repository_CustomerService')), ($container->services['sylius.factory.customer'] ?? ($container->services['sylius.factory.customer'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Customer\\Customer'))), ($container->services['sylius.factory.address'] ?? $container->load('getSylius_Factory_AddressService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()), ($container->privates['Sylius\\PayPalPlugin\\Manager\\PaymentStateManagerInterface'] ?? $container->load('getPaymentStateManagerInterfaceService')), ($container->privates['Sylius\\PayPalPlugin\\Api\\CacheAuthorizeClientApiInterface'] ?? $container->load('getCacheAuthorizeClientApiInterfaceService')), ($container->privates['Sylius\\PayPalPlugin\\Api\\OrderDetailsApiInterface'] ?? $container->load('getOrderDetailsApiInterfaceService')), ($container->privates['Sylius\\PayPalPlugin\\Provider\\OrderProviderInterface'] ?? $container->load('getOrderProviderInterfaceService')));
    }
}
