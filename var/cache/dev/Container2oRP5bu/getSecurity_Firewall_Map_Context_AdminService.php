<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_AdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.admin' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/FormAuthenticationEntryPoint.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        $a = ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService());
        $b = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $c = new \Symfony\Component\EventDispatcher\EventDispatcher();
        $c->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => function () use ($container) {
            return ($container->privates['security.logout.listener.default.admin'] ?? $container->load('getSecurity_Logout_Listener_Default_AdminService'));
        }, 1 => 'onLogout'], 64);
        $c->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => function () use ($container) {
            return ($container->privates['security.logout.listener.session.admin'] ?? ($container->privates['security.logout.listener.session.admin'] = new \Symfony\Component\Security\Http\EventListener\SessionLogoutListener()));
        }, 1 => 'onLogout'], 0);
        $c->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => function () use ($container) {
            return ($container->privates['security.logout.listener.remember_me.admin'] ?? $container->load('getSecurity_Logout_Listener_RememberMe_AdminService'));
        }, 1 => 'onLogout'], 0);
        $c->addListener('security.interactive_login', [0 => function () use ($container) {
            return ($container->privates['sylius.admin_user.listener.update_user_encoder'] ?? $container->load('getSylius_AdminUser_Listener_UpdateUserEncoderService'));
        }, 1 => 'onSecurityInteractivelogin'], 0);
        $c->addListener('security.interactive_login', [0 => function () use ($container) {
            return ($container->privates['sylius.shop_user.listener.update_user_encoder'] ?? $container->load('getSylius_ShopUser_Listener_UpdateUserEncoderService'));
        }, 1 => 'onSecurityInteractivelogin'], 0);
        $c->addListener('security.interactive_login', [0 => function () use ($container) {
            return ($container->services['sylius.listener.cart_blamer'] ?? $container->load('getSylius_Listener_CartBlamerService'));
        }, 1 => 'onInteractiveLogin'], 0);
        $c->addListener('security.interactive_login', [0 => function () use ($container) {
            return ($container->services['sylius.listener.user_cart_recalculation'] ?? $container->load('getSylius_Listener_UserCartRecalculationService'));
        }, 1 => 'recalculateCartWhileLogin'], 0);
        $c->addListener('security.interactive_login', [0 => function () use ($container) {
            return ($container->privates['sylius.listener.admin_user_last_login'] ?? $container->load('getSylius_Listener_AdminUserLastLoginService'));
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $c->addListener('security.interactive_login', [0 => function () use ($container) {
            return ($container->privates['sylius.listener.shop_user_last_login'] ?? $container->load('getSylius_Listener_ShopUserLastLoginService'));
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $c->addListener('security.interactive_login', [0 => function () use ($container) {
            return ($container->privates['sylius.listener.oauth_user_last_login'] ?? $container->load('getSylius_Listener_OauthUserLastLoginService'));
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $c->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => function () use ($container) {
            return ($container->privates['security.logout.listener.csrf_token_clearing'] ?? $container->load('getSecurity_Logout_Listener_CsrfTokenClearingService'));
        }, 1 => 'onLogout'], 0);

        return $container->privates['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.0'] ?? $container->load('getSecurity_ContextListener_0Service'));
            yield 2 => ($container->privates['security.authentication.listener.form.admin'] ?? $container->load('getSecurity_Authentication_Listener_Form_AdminService'));
            yield 3 => ($container->privates['security.authentication.listener.rememberme.admin'] ?? $container->load('getSecurity_Authentication_Listener_Rememberme_AdminService'));
            yield 4 => ($container->privates['security.authentication.listener.anonymous.admin'] ?? $container->load('getSecurity_Authentication_Listener_Anonymous_AdminService'));
            yield 5 => ($container->privates['security.authentication.switchuser_listener.admin'] ?? $container->load('getSecurity_Authentication_SwitchuserListener_AdminService'));
            yield 6 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 7), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $b, 'admin', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($container->services['http_kernel'] ?? $container->getHttpKernelService()), $b, 'sylius_admin_login', false), NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), false), new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, $c, ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'sylius_admin_logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin', 'security.user_checker', '.security.request_matcher.eZi1fch', true, false, 'sylius.admin_user_provider.email_or_name_based', 'admin', 'security.authentication.form_entry_point.admin', NULL, NULL, [0 => 'switch_user', 1 => 'form_login', 2 => 'remember_me', 3 => 'anonymous'], ['parameter' => '_switch_user', 'role' => 'ROLE_ALLOWED_TO_SWITCH']));
    }
}
