<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_ResourceController_FormFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.resource_controller.form_factory' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Controller\ResourceFormFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ResourceFormFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Controller/ResourceFormFactory.php';

        return $container->privates['sylius.resource_controller.form_factory'] = new \Sylius\Bundle\ResourceBundle\Controller\ResourceFormFactory(($container->services['.container.private.form.factory'] ?? $container->get_Container_Private_Form_FactoryService()));
    }
}
