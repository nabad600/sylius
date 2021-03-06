<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotionCouponFactoryInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Promotion\Factory\PromotionCouponFactoryInterface' shared service.
     *
     * @return \Sylius\Component\Promotion\Factory\PromotionCouponFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Factory/PromotionCouponFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Factory/PromotionCouponFactory.php';

        return $container->services['Sylius\\Component\\Promotion\\Factory\\PromotionCouponFactoryInterface'] = new \Sylius\Component\Promotion\Factory\PromotionCouponFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Promotion\\PromotionCoupon'));
    }
}
