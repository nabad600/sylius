<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_EmailManager_ShipmentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.email_manager.shipment' shared service.
     *
     * @return \Sylius\Bundle\AdminBundle\EmailManager\ShipmentEmailManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/EmailManager/ShipmentEmailManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/EmailManager/ShipmentEmailManager.php';

        return $container->services['sylius.email_manager.shipment'] = new \Sylius\Bundle\AdminBundle\EmailManager\ShipmentEmailManager(($container->services['sylius.email_sender'] ?? $container->load('getSylius_EmailSenderService')));
    }
}
