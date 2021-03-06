<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionRuleChecker_ContainsProductService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_rule_checker.contains_product' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Checker\Rule\ContainsProductRuleChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Checker/Rule/RuleCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Checker/Rule/ContainsProductRuleChecker.php';

        return $container->services['sylius.promotion_rule_checker.contains_product'] = new \Sylius\Component\Core\Promotion\Checker\Rule\ContainsProductRuleChecker();
    }
}
