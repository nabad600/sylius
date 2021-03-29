<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ProductAssociationTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.product_association_type' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Fixture\ProductAssociationTypeFixture
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/AbstractResourceFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/ProductAssociationTypeFixture.php';

        return $container->services['sylius.fixture.product_association_type'] = new \Sylius\Bundle\CoreBundle\Fixture\ProductAssociationTypeFixture(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sylius.fixture.example_factory.product_association_type'] ?? $container->load('getSylius_Fixture_ExampleFactory_ProductAssociationTypeService')));
    }
}
