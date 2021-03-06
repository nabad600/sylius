<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_ArchivingShippingMethodApplicatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.api.archiving_shipping_method_applicator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Applicator\ArchivingShippingMethodApplicator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Applicator/ArchivingShippingMethodApplicatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Applicator/ArchivingShippingMethodApplicator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Provider/DateTimeProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Provider/Calendar.php';

        return $container->services['sylius.api.archiving_shipping_method_applicator'] = new \Sylius\Bundle\ApiBundle\Applicator\ArchivingShippingMethodApplicator(($container->services['sylius.calendar'] ?? ($container->services['sylius.calendar'] = new \Sylius\Bundle\ShippingBundle\Provider\Calendar())));
    }
}
