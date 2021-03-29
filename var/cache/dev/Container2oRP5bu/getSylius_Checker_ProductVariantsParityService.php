<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Checker_ProductVariantsParityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.checker.product_variants_parity' shared service.
     *
     * @return \Sylius\Component\Product\Checker\ProductVariantsParityChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Product/Checker/ProductVariantsParityCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Product/Checker/ProductVariantsParityChecker.php';

        return $container->services['sylius.checker.product_variants_parity'] = new \Sylius\Component\Product\Checker\ProductVariantsParityChecker();
    }
}