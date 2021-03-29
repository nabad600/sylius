<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ResourceController_EventDispatcherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.resource_controller.event_dispatcher' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Controller\EventDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/EventDispatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/EventDispatcher.php';

        return $container->privates['sylius.resource_controller.event_dispatcher'] = new \Sylius\Bundle\ResourceBundle\Controller\EventDispatcher(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
