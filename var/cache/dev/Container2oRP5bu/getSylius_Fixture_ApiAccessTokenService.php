<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ApiAccessTokenService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.api_access_token' shared service.
     *
     * @return \Sylius\Bundle\AdminApiBundle\Fixture\ApiAccessTokenFixture
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/AbstractResourceFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminApiBundle/Fixture/ApiAccessTokenFixture.php';

        return $container->services['sylius.fixture.api_access_token'] = new \Sylius\Bundle\AdminApiBundle\Fixture\ApiAccessTokenFixture(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sylius.fixture.example_factory.api_access_token'] ?? $container->load('getSylius_Fixture_ExampleFactory_ApiAccessTokenService')));
    }
}
