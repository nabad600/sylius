<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_CustomerGroupService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.customer_group' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sylius.factory.customer_group'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Customer\\CustomerGroup');
    }
}
