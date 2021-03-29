<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_CustomResourceController_ResourceUpdateHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.custom_resource_controller.resource_update_handler' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\Handler\ResourceUpdateHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ResourceUpdateHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/Handler/ResourceUpdateHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ResourceUpdateHandler.php';

        return $container->privates['sylius.custom_resource_controller.resource_update_handler'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\Handler\ResourceUpdateHandler(new \Sylius\Bundle\ResourceBundle\Controller\ResourceUpdateHandler(($container->privates['sylius.resource_controller.state_machine'] ?? $container->load('getSylius_ResourceController_StateMachineService'))));
    }
}
