<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_0v0gciDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.0v0gciD' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/CommandHandler/Cart/AddItemToCartHandler.php';

        return $container->privates['.messenger.handler_descriptor.0v0gciD'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Sylius\Bundle\ApiBundle\CommandHandler\Cart\AddItemToCartHandler(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), ($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService')), ($container->services['sylius.order_modifier'] ?? $container->load('getSylius_OrderModifierService')), ($container->services['sylius.factory.cart_item'] ?? $container->load('getSylius_Factory_CartItemService')), ($container->services['sylius.order_item_quantity_modifier.limiting'] ?? $container->load('getSylius_OrderItemQuantityModifier_LimitingService'))), []);
    }
}
