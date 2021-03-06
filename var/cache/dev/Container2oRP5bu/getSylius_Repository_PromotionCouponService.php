<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_PromotionCouponService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.repository.promotion_coupon' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Doctrine\ORM\PromotionCouponRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Repository/PromotionCouponRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Doctrine/ORM/PromotionCouponRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        return $container->services['sylius.repository.promotion_coupon'] = new \Sylius\Bundle\PromotionBundle\Doctrine\ORM\PromotionCouponRepository($a, $a->getClassMetadata('App\\Entity\\Promotion\\PromotionCoupon'));
    }
}
