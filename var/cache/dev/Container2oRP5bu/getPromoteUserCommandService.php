<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromoteUserCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\UserBundle\Command\PromoteUserCommand' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\Command\PromoteUserCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius-labs/polyfill-symfony-framework-bundle/src/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Command/AbstractRoleCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Command/PromoteUserCommand.php';

        $container->services['Sylius\\Bundle\\UserBundle\\Command\\PromoteUserCommand'] = $instance = new \Sylius\Bundle\UserBundle\Command\PromoteUserCommand();

        $instance->setName('sylius:user:promote');

        return $instance;
    }
}
