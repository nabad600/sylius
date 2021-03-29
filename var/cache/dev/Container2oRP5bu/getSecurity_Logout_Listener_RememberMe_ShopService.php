<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_RememberMe_ShopService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.logout.listener.remember_me.shop' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\RememberMeLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/RememberMeLogoutListener.php';

        return $container->privates['security.logout.listener.remember_me.shop'] = new \Symfony\Component\Security\Http\EventListener\RememberMeLogoutListener(($container->privates['security.authentication.rememberme.services.simplehash.shop'] ?? $container->load('getSecurity_Authentication_Rememberme_Services_Simplehash_ShopService')));
    }
}
