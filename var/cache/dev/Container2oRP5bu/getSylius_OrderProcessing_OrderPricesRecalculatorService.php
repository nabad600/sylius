<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OrderProcessing_OrderPricesRecalculatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.order_processing.order_prices_recalculator' shared service.
     *
     * @return \Sylius\Component\Core\OrderProcessing\OrderPricesRecalculator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Processor/OrderProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/OrderProcessing/OrderPricesRecalculator.php';

        return $container->services['sylius.order_processing.order_prices_recalculator'] = new \Sylius\Component\Core\OrderProcessing\OrderPricesRecalculator(($container->services['sylius.calculator.product_variant_price'] ?? ($container->services['sylius.calculator.product_variant_price'] = new \Sylius\Component\Core\Calculator\ProductVariantPriceCalculator())));
    }
}
