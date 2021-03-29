<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ResourceController_ViewHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.resource_controller.view_handler' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Controller\ViewHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ViewHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ViewHandler.php';

        return $container->privates['sylius.resource_controller.view_handler'] = new \Sylius\Bundle\ResourceBundle\Controller\ViewHandler(($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')));
    }
}
