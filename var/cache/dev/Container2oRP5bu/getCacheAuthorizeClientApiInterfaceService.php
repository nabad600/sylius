<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCacheAuthorizeClientApiInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\PayPalPlugin\Api\CacheAuthorizeClientApiInterface' shared service.
     *
     * @return \Sylius\PayPalPlugin\Api\CacheAuthorizeClientApi
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Api/CacheAuthorizeClientApiInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Api/CacheAuthorizeClientApi.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/UuidProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Provider/UuidProvider.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        return $container->privates['Sylius\\PayPalPlugin\\Api\\CacheAuthorizeClientApiInterface'] = new \Sylius\PayPalPlugin\Api\CacheAuthorizeClientApi($a, $a->getRepository('Sylius\\PayPalPlugin\\Entity\\PayPalCredentials'), ($container->privates['Sylius\\PayPalPlugin\\Api\\AuthorizeClientApiInterface'] ?? $container->load('getAuthorizeClientApiInterfaceService')), ($container->privates['Sylius\\PayPalPlugin\\Provider\\UuidProviderInterface'] ?? ($container->privates['Sylius\\PayPalPlugin\\Provider\\UuidProviderInterface'] = new \Sylius\PayPalPlugin\Provider\UuidProvider())));
    }
}
