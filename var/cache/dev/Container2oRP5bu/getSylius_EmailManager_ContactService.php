<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_EmailManager_ContactService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.email_manager.contact' shared service.
     *
     * @return \Sylius\Bundle\ShopBundle\EmailManager\ContactEmailManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/EmailManager/ContactEmailManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/EmailManager/ContactEmailManager.php';

        return $container->services['sylius.email_manager.contact'] = new \Sylius\Bundle\ShopBundle\EmailManager\ContactEmailManager(($container->services['sylius.email_sender'] ?? $container->load('getSylius_EmailSenderService')));
    }
}
