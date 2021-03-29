<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_ClientManager_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_oauth_server.client_manager.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Entity\ClientManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Model/ClientManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Model/ClientManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Entity/ClientManager.php';

        return $container->privates['fos_oauth_server.client_manager.default'] = new \FOS\OAuthServerBundle\Entity\ClientManager(($container->privates['fos_oauth_server.entity_manager'] ?? $container->load('getFosOauthServer_EntityManagerService')), 'App\\Entity\\AdminApi\\Client');
    }
}