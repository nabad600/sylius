<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_PromotionCouponToCodeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.promotion_coupon_to_code' shared service.
     *
     * @return \Sylius\Bundle\PromotionBundle\Form\Type\PromotionCouponToCodeType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PromotionBundle/Form/Type/PromotionCouponToCodeType.php';

        return $container->services['sylius.form.type.promotion_coupon_to_code'] = new \Sylius\Bundle\PromotionBundle\Form\Type\PromotionCouponToCodeType(($container->services['sylius.repository.promotion_coupon'] ?? $container->load('getSylius_Repository_PromotionCouponService')));
    }
}
