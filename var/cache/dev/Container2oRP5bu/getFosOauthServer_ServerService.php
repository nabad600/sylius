<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_ServerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_oauth_server.server' shared service.
     *
     * @return \OAuth2\OAuth2
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->privates['fos_oauth_server.server'] = $container->createProxy('OAuth2_5885b82', function () use ($container) {
                return \OAuth2_5885b82::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth2-php/lib/OAuth2.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2Storage.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2RefreshTokens.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2GrantUser.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2GrantCode.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2GrantImplicit.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2GrantClient.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2GrantExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Storage/GrantExtensionDispatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth-server-bundle/Storage/OAuthStorage.php';

        return new \OAuth2\OAuth2(new \FOS\OAuthServerBundle\Storage\OAuthStorage(($container->services['sylius.oauth_server.client_manager'] ?? $container->load('getSylius_OauthServer_ClientManagerService')), ($container->privates['fos_oauth_server.access_token_manager.default'] ?? $container->load('getFosOauthServer_AccessTokenManager_DefaultService')), ($container->privates['fos_oauth_server.refresh_token_manager.default'] ?? $container->load('getFosOauthServer_RefreshTokenManager_DefaultService')), ($container->privates['fos_oauth_server.auth_code_manager.default'] ?? $container->load('getFosOauthServer_AuthCodeManager_DefaultService')), ($container->privates['sylius.admin_user_provider.email_or_name_based'] ?? $container->load('getSylius_AdminUserProvider_EmailOrNameBasedService')), ($container->privates['security.encoder_factory.generic'] ?? $container->load('getSecurity_EncoderFactory_GenericService'))), []);
    }
}
