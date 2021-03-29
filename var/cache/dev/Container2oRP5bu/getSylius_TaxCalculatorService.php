<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_TaxCalculatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.tax_calculator' shared service.
     *
     * @return \Sylius\Component\Taxation\Calculator\DelegatingCalculator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Taxation/Calculator/CalculatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Taxation/Calculator/DelegatingCalculator.php';

        return $container->services['sylius.tax_calculator'] = new \Sylius\Component\Taxation\Calculator\DelegatingCalculator(($container->services['sylius.registry.tax_calculator'] ?? $container->load('getSylius_Registry_TaxCalculatorService')));
    }
}
