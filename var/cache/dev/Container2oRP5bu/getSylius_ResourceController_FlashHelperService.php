<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ResourceController_FlashHelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.resource_controller.flash_helper' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Controller\FlashHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/FlashHelperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/FlashHelper.php';

        return $container->privates['sylius.resource_controller.flash_helper'] = new \Sylius\Bundle\ResourceBundle\Controller\FlashHelper(($container->services['session'] ?? $container->getSessionService()), ($container->services['translator'] ?? $container->getTranslatorService()), 'en_US');
    }
}
