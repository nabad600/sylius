<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_GeographicalService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.geographical' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\GeographicalFixture
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/AbstractFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/GeographicalFixture.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        return $container->services['sylius.fixture.geographical'] = new \Sylius\Bundle\CoreBundle\Fixture\GeographicalFixture(($container->services['sylius.factory.country'] ?? ($container->services['sylius.factory.country'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Addressing\\Country'))), $a, ($container->services['sylius.factory.province'] ?? ($container->services['sylius.factory.province'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Addressing\\Province'))), $a, ($container->services['Sylius\\Component\\Addressing\\Factory\\ZoneFactoryInterface'] ?? $container->load('getZoneFactoryInterfaceService')), $a);
    }
}
