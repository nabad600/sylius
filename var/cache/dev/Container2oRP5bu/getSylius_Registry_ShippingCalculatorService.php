<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Registry_ShippingCalculatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.registry.shipping_calculator' shared service.
     *
     * @return \Sylius\Component\Registry\ServiceRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Shipping/Calculator/CalculatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Shipping/Calculator/FlatRateCalculator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Shipping/Calculator/PerUnitRateCalculator.php';

        $container->services['sylius.registry.shipping_calculator'] = $instance = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Shipping\\Calculator\\CalculatorInterface', 'shipping calculator');

        $instance->register('flat_rate', ($container->services['sylius.shipping_calculator.flat_rate'] ?? ($container->services['sylius.shipping_calculator.flat_rate'] = new \Sylius\Component\Core\Shipping\Calculator\FlatRateCalculator())));
        $instance->register('per_unit_rate', ($container->services['sylius.shipping_calculator.per_unit_rate'] ?? ($container->services['sylius.shipping_calculator.per_unit_rate'] = new \Sylius\Component\Core\Shipping\Calculator\PerUnitRateCalculator())));

        return $instance;
    }
}
