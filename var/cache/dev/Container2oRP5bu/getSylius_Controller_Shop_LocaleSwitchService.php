<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Controller_Shop_LocaleSwitchService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.controller.shop.locale_switch' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\Controller\LocaleSwitchController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Controller/LocaleSwitchController.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Locale/LocaleSwitcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Locale/UrlBasedLocaleSwitcher.php';

        return $container->services['sylius.controller.shop.locale_switch'] = new \Sylius\Bundle\ShopBundle\Controller\LocaleSwitchController(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), ($container->services['Sylius\\Component\\Locale\\Context\\LocaleContextInterface'] ?? $container->getLocaleContextInterfaceService()), ($container->services['sylius.locale_provider.channel_based'] ?? $container->getSylius_LocaleProvider_ChannelBasedService()), new \Sylius\Bundle\ShopBundle\Locale\UrlBasedLocaleSwitcher(($container->services['router'] ?? $container->getRouterService())));
    }
}
