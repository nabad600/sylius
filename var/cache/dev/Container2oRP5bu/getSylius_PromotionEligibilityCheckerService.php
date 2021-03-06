<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionEligibilityCheckerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_eligibility_checker' shared service.
     *
     * @return \Sylius\Component\Promotion\Checker\Eligibility\CompositePromotionEligibilityChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionEligibilityCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/CompositePromotionEligibilityChecker.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionDurationEligibilityChecker.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionUsageLimitEligibilityChecker.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionSubjectCouponEligibilityChecker.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Eligibility/PromotionRulesEligibilityChecker.php';

        return $container->services['sylius.promotion_eligibility_checker'] = new \Sylius\Component\Promotion\Checker\Eligibility\CompositePromotionEligibilityChecker([0 => new \Sylius\Component\Promotion\Checker\Eligibility\PromotionDurationEligibilityChecker(), 1 => new \Sylius\Component\Promotion\Checker\Eligibility\PromotionUsageLimitEligibilityChecker(), 2 => new \Sylius\Component\Promotion\Checker\Eligibility\PromotionSubjectCouponEligibilityChecker(($container->services['sylius.promotion_coupon_eligibility_checker'] ?? $container->load('getSylius_PromotionCouponEligibilityCheckerService'))), 3 => new \Sylius\Component\Promotion\Checker\Eligibility\PromotionRulesEligibilityChecker(($container->services['sylius.registry_promotion_rule_checker'] ?? $container->load('getSylius_RegistryPromotionRuleCheckerService')))]);
    }
}
