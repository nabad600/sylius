<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateClientCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\AdminApiBundle\Command\CreateClientCommand' shared service.
     *
     * @return \Sylius\Bundle\AdminApiBundle\Command\CreateClientCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius-labs/polyfill-symfony-framework-bundle/src/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminApiBundle/Command/CreateClientCommand.php';

        $container->services['Sylius\\Bundle\\AdminApiBundle\\Command\\CreateClientCommand'] = $instance = new \Sylius\Bundle\AdminApiBundle\Command\CreateClientCommand(NULL, ($container->privates['fos_oauth_server.client_manager.default'] ?? $container->load('getFosOauthServer_ClientManager_DefaultService')));

        $instance->setName('sylius:oauth-server:create-client');

        return $instance;
    }
}
