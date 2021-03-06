<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_CreateClientCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_oauth_server.create_client_command' shared service.
     *
     * @return \FOS\OAuthServerBundle\Command\CreateClientCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Command/CreateClientCommand.php';

        $container->privates['fos_oauth_server.create_client_command'] = $instance = new \FOS\OAuthServerBundle\Command\CreateClientCommand(($container->services['sylius.oauth_server.client_manager'] ?? $container->load('getSylius_OauthServer_ClientManagerService')));

        $instance->setName('fos:oauth-server:create-client');

        return $instance;
    }
}
