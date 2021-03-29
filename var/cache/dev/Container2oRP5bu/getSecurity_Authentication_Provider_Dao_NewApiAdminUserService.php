<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Provider_Dao_NewApiAdminUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.provider.dao.new_api_admin_user' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/UserAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/DaoAuthenticationProvider.php';

        return $container->privates['security.authentication.provider.dao.new_api_admin_user'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(($container->privates['sylius.admin_user_provider.email_or_name_based'] ?? $container->load('getSylius_AdminUserProvider_EmailOrNameBasedService')), ($container->privates['SyliusLabs\\Polyfill\\Symfony\\Security\\Core\\User\\UserChecker'] ?? $container->load('getUserCheckerService')), 'new_api_admin_user', ($container->privates['security.encoder_factory.generic'] ?? $container->load('getSecurity_EncoderFactory_GenericService')), true);
    }
}
