<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_GridDriver_Doctrine_OrmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.grid_driver.doctrine.orm' shared service.
     *
     * @return \Sylius\Bundle\GridBundle\Doctrine\ORM\Driver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Component/Data/DriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/grid-bundle/src/Bundle/Doctrine/ORM/Driver.php';

        return $container->services['sylius.grid_driver.doctrine.orm'] = new \Sylius\Bundle\GridBundle\Doctrine\ORM\Driver(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
