<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_SecurityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.controller.security' shared service.
     *
     * @return \Sylius\Bundle\UiBundle\Controller\SecurityController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Controller/SecurityController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationUtils.php';

        return $container->services['sylius.controller.security'] = new \Sylius\Bundle\UiBundle\Controller\SecurityController(new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), ($container->services['.container.private.form.factory'] ?? $container->get_Container_Private_Form_FactoryService()), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['security.authorization_checker'] ?? $container->getSecurity_AuthorizationCheckerService()), ($container->services['router'] ?? $container->getRouterService()));
    }
}