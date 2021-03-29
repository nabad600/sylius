<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSyncControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Payum\Bundle\PayumBundle\Controller\SyncController' shared service.
     *
     * @return \Payum\Bundle\PayumBundle\Controller\SyncController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Controller/PayumController.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Controller/SyncController.php';

        $container->services['Payum\\Bundle\\PayumBundle\\Controller\\SyncController'] = $instance = new \Payum\Bundle\PayumBundle\Controller\SyncController();

        $instance->setContainer($container);

        return $instance;
    }
}