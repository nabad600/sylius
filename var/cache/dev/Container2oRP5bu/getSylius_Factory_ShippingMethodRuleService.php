<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_ShippingMethodRuleService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.shipping_method_rule' shared service.
     *
     * @return \Sylius\Component\Resource\Factory\Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sylius.factory.shipping_method_rule'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Shipping\\Model\\ShippingMethodRule');
    }
}
