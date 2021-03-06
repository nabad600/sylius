<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_PayumResolveNextRouteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.payum_resolve_next_route' shared service.
     *
     * @return \Sylius\Bundle\PayumBundle\Factory\ResolveNextRouteFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Factory/ResolveNextRouteFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Factory/ResolveNextRouteFactory.php';

        return $container->services['sylius.factory.payum_resolve_next_route'] = new \Sylius\Bundle\PayumBundle\Factory\ResolveNextRouteFactory();
    }
}
