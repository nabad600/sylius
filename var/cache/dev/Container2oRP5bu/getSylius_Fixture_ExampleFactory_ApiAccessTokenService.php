<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Fixture_ExampleFactory_ApiAccessTokenService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.fixture.example_factory.api_access_token' shared service.
     *
     * @return \Sylius\Bundle\AdminApiBundle\Fixture\Factory\ApiAccessTokenExampleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminApiBundle/Fixture/Factory/ApiAccessTokenExampleFactory.php';

        return $container->services['sylius.fixture.example_factory.api_access_token'] = new \Sylius\Bundle\AdminApiBundle\Fixture\Factory\ApiAccessTokenExampleFactory(($container->services['sylius.factory.api_access_token'] ?? ($container->services['sylius.factory.api_access_token'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\AdminApi\\AccessToken'))), ($container->services['sylius.repository.admin_user'] ?? $container->load('getSylius_Repository_AdminUserService')), ($container->services['sylius.repository.api_client'] ?? $container->load('getSylius_Repository_ApiClientService')));
    }
}
