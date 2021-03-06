<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSyliusDefault_Bus_Middleware_HandleMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius_default.bus.middleware.handle_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/HandleMessageMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlersLocator.php';

        $container->privates['sylius_default.bus.middleware.handle_message'] = $instance = new \Symfony\Component\Messenger\Middleware\HandleMessageMiddleware(new \Symfony\Component\Messenger\Handler\HandlersLocator(['Sylius\\Bundle\\ApiBundle\\Command\\RegisterShopUser' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.kzbm7y.'] ?? $container->load('get_Messenger_HandlerDescriptor_Kzbm7y_Service'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\PickupCart' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.XTv7RBq'] ?? $container->load('get_Messenger_HandlerDescriptor_XTv7RBqService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\AddItemToCart' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.0v0gciD'] ?? $container->load('get_Messenger_HandlerDescriptor_0v0gciDService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\RemoveItemFromCart' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.Ys1N1FM'] ?? $container->load('get_Messenger_HandlerDescriptor_Ys1N1FMService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\AddressOrder' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.U_poKNU'] ?? $container->load('get_Messenger_HandlerDescriptor_UPoKNUService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\ChooseShippingMethod' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.Pelzvzp'] ?? $container->load('get_Messenger_HandlerDescriptor_PelzvzpService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\ChoosePaymentMethod' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.eP3Huwm'] ?? $container->load('get_Messenger_HandlerDescriptor_EP3HuwmService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Checkout\\CompleteOrder' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.HsqKcM6'] ?? $container->load('get_Messenger_HandlerDescriptor_HsqKcM6Service'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Account\\ChangePaymentMethod' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.qMaVuAf'] ?? $container->load('get_Messenger_HandlerDescriptor_QMaVuAfService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\ChangeItemQuantityInCart' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.tYNaVgF'] ?? $container->load('get_Messenger_HandlerDescriptor_TYNaVgFService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\ChangeShopUserPassword' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.zppNQ1i'] ?? $container->load('get_Messenger_HandlerDescriptor_ZppNQ1iService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\Cart\\ApplyCouponToCart' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.Zhkb4Tl'] ?? $container->load('get_Messenger_HandlerDescriptor_Zhkb4TlService'));
        }, 1), 'Sylius\\Bundle\\ApiBundle\\Command\\SendOrderConfirmation' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.KlFbKJ1'] ?? $container->load('get_Messenger_HandlerDescriptor_KlFbKJ1Service'));
        }, 1)]));

        $instance->setLogger(($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));

        return $instance;
    }
}
