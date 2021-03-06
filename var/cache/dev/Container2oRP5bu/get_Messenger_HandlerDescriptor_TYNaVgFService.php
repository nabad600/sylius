<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_TYNaVgFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.tYNaVgF' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/CommandHandler/Cart/ChangeItemQuantityInCartHandler.php';

        return $container->privates['.messenger.handler_descriptor.tYNaVgF'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Sylius\Bundle\ApiBundle\CommandHandler\Cart\ChangeItemQuantityInCartHandler(($container->services['sylius.repository.order_item'] ?? $container->load('getSylius_Repository_OrderItemService')), ($container->services['sylius.order_item_quantity_modifier.limiting'] ?? $container->load('getSylius_OrderItemQuantityModifier_LimitingService')), ($container->services['sylius.order_processing.order_processor'] ?? $container->load('getSylius_OrderProcessing_OrderProcessorService'))), []);
    }
}
