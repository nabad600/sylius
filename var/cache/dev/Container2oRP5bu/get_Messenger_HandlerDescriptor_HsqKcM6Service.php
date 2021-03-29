<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_HsqKcM6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.HsqKcM6' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/CommandHandler/Checkout/CompleteOrderHandler.php';

        return $container->privates['.messenger.handler_descriptor.HsqKcM6'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Sylius\Bundle\ApiBundle\CommandHandler\Checkout\CompleteOrderHandler(($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()), ($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()), ($container->privates['debug.traced.sylius_event.bus'] ?? $container->getDebug_Traced_SyliusEvent_BusService())), []);
    }
}
