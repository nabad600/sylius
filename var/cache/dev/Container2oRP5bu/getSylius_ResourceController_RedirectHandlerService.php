<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ResourceController_RedirectHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.resource_controller.redirect_handler' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Controller\RedirectHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/RedirectHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/RedirectHandler.php';

        return $container->privates['sylius.resource_controller.redirect_handler'] = new \Sylius\Bundle\ResourceBundle\Controller\RedirectHandler(($container->services['router'] ?? $container->getRouterService()));
    }
}
