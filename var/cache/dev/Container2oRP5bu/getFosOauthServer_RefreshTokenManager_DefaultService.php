<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_RefreshTokenManager_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_oauth_server.refresh_token_manager.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Entity\RefreshTokenManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Model/TokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Model/TokenManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Entity/TokenManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Model/RefreshTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Entity/RefreshTokenManager.php';

        return $container->privates['fos_oauth_server.refresh_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\RefreshTokenManager(($container->privates['fos_oauth_server.entity_manager'] ?? $container->load('getFosOauthServer_EntityManagerService')), 'App\\Entity\\AdminApi\\RefreshToken');
    }
}