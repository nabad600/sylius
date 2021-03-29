<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSellerWebhookRegistrarInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sylius\PayPalPlugin\Registrar\SellerWebhookRegistrarInterface' shared service.
     *
     * @return \Sylius\PayPalPlugin\Registrar\SellerWebhookRegistrar
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Registrar/SellerWebhookRegistrarInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Registrar/SellerWebhookRegistrar.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Api/WebhookApiInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/paypal-plugin/src/Api/WebhookApi.php';
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';

        return $container->privates['Sylius\\PayPalPlugin\\Registrar\\SellerWebhookRegistrarInterface'] = new \Sylius\PayPalPlugin\Registrar\SellerWebhookRegistrar(($container->privates['Sylius\\PayPalPlugin\\Api\\AuthorizeClientApiInterface'] ?? $container->load('getAuthorizeClientApiInterfaceService')), ($container->services['router'] ?? $container->getRouterService()), new \Sylius\PayPalPlugin\Api\WebhookApi(($container->privates['sylius.http_client'] ?? ($container->privates['sylius.http_client'] = new \GuzzleHttp\Client())), 'https://api.sandbox.paypal.com/'));
    }
}
