<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_ImpersonateUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.controller.impersonate_user' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\Controller\ImpersonateUserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Controller/ImpersonateUserController.php';

        return $container->services['sylius.controller.impersonate_user'] = new \Sylius\Bundle\AdminBundle\Controller\ImpersonateUserController(($container->services['Sylius\\Bundle\\CoreBundle\\Security\\UserImpersonatorInterface'] ?? $container->load('getUserImpersonatorInterfaceService')), ($container->services['security.authorization_checker'] ?? $container->getSecurity_AuthorizationCheckerService()), ($container->privates['sylius.shop_user_provider.email_or_name_based'] ?? $container->load('getSylius_ShopUserProvider_EmailOrNameBasedService')), ($container->services['router'] ?? $container->getRouterService()), 'ROLE_ADMINISTRATION_ACCESS');
    }
}