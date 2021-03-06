<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_ThgFk_HService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.thgFk.H' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/EventHandler/OrderCompletedHandler.php';

        return $container->privates['.messenger.handler_descriptor.thgFk.H'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Sylius\Bundle\ApiBundle\EventHandler\OrderCompletedHandler(($container->services['messenger.default_bus'] ?? $container->getMessenger_DefaultBusService()), ($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService())), []);
    }
}
