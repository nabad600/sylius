<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionUsageModifierService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_usage_modifier' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Modifier\OrderPromotionsUsageModifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Modifier/OrderPromotionsUsageModifierInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Modifier/OrderPromotionsUsageModifier.php';

        return $container->services['sylius.promotion_usage_modifier'] = new \Sylius\Component\Core\Promotion\Modifier\OrderPromotionsUsageModifier(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
