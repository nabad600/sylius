<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Form_ShopService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.listener.form.shop' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/UsernamePasswordFormAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Authentication/AuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Authentication/AuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $b = ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService'));

        $container->privates['security.authentication.listener.form.shop'] = $instance = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.authentication.manager'] ?? $container->getSecurity_Authentication_ManagerService()), ($container->privates['security.authentication.session_strategy'] ?? ($container->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), $a, 'shop', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(new \Sylius\Bundle\UserBundle\Authentication\AuthenticationSuccessHandler($a, []), ['login_path' => 'sylius_shop_login', 'default_target_path' => 'sylius_shop_homepage', 'use_referer' => true, 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path'], 'shop'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(new \Sylius\Bundle\UserBundle\Authentication\AuthenticationFailureHandler(($container->services['http_kernel'] ?? $container->getHttpKernelService()), $a, [], $b), ['login_path' => 'sylius_shop_login', 'failure_path' => 'sylius_shop_login', 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']), ['login_path' => 'sylius_shop_login', 'check_path' => 'sylius_shop_login_check', 'use_forward' => false, 'csrf_parameter' => '_csrf_shop_security_token', 'csrf_token_id' => 'shop_authenticate', 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'enable_csrf' => false, 'post_only' => true], $b, ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['.container.private.security.csrf.token_manager'] ?? $container->load('get_Container_Private_Security_Csrf_TokenManagerService')));

        $instance->setRememberMeServices(($container->privates['security.authentication.rememberme.services.simplehash.shop'] ?? $container->load('getSecurity_Authentication_Rememberme_Services_Simplehash_ShopService')));

        return $instance;
    }
}
