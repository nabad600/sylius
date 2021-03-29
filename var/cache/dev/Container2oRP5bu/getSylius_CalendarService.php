<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_CalendarService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.calendar' shared service.
     *
     * @return \Sylius\Bundle\ShippingBundle\Provider\Calendar
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Provider/DateTimeProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Provider/Calendar.php';

        return $container->services['sylius.calendar'] = new \Sylius\Bundle\ShippingBundle\Provider\Calendar();
    }
}
