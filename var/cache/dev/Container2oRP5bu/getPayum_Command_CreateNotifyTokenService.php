<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Command_CreateNotifyTokenService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'payum.command.create_notify_token' shared service.
     *
     * @return \Payum\Bundle\PayumBundle\Command\CreateNotifyTokenCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/Command/CreateNotifyTokenCommand.php';

        $container->privates['payum.command.create_notify_token'] = $instance = new \Payum\Bundle\PayumBundle\Command\CreateNotifyTokenCommand();

        $instance->setContainer($container);
        $instance->setName('payum:security:create-notify-token');

        return $instance;
    }
}
