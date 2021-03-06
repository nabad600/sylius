<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_NewApiAdminUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.new_api_admin_user' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $container->privates['security.firewall.map.context.new_api_admin_user'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.authentication.listener.guard.new_api_admin_user'] ?? $container->load('getSecurity_Authentication_Listener_Guard_NewApiAdminUserService'));
            yield 2 => ($container->privates['security.authentication.listener.json.new_api_admin_user'] ?? $container->load('getSecurity_Authentication_Listener_Json_NewApiAdminUserService'));
            yield 3 => ($container->privates['security.authentication.listener.anonymous.new_api_admin_user'] ?? $container->load('getSecurity_Authentication_Listener_Anonymous_NewApiAdminUserService'));
            yield 4 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), 'new_api_admin_user', ($container->privates['lexik_jwt_authentication.security.guard.jwt_token_authenticator'] ?? $container->load('getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService')), NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('new_api_admin_user', 'security.user_checker', '.security.request_matcher.zr3F0iv', true, true, 'sylius.admin_user_provider.email_or_name_based', NULL, 'lexik_jwt_authentication.jwt_token_authenticator', NULL, NULL, [0 => 'guard', 1 => 'json_login', 2 => 'anonymous'], NULL));
    }
}
