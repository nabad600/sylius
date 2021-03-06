<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_PromotionAction_ShippingPercentageDiscountService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.promotion_action.shipping_percentage_discount' shared service.
     *
     * @return \Sylius\Component\Core\Promotion\Action\ShippingPercentageDiscountPromotionActionCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Action/PromotionActionCommandInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Action/ShippingPercentageDiscountPromotionActionCommand.php';

        return $container->services['sylius.promotion_action.shipping_percentage_discount'] = new \Sylius\Component\Core\Promotion\Action\ShippingPercentageDiscountPromotionActionCommand(($container->services['Sylius\\Component\\Order\\Factory\\AdjustmentFactoryInterface'] ?? $container->load('getAdjustmentFactoryInterfaceService')));
    }
}
