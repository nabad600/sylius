<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotionRuleFactoryInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Component\Core\Factory\PromotionRuleFactoryInterface' shared service.
     *
     * @return \Sylius\Component\Core\Factory\PromotionRuleFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Factory/PromotionRuleFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Factory/PromotionRuleFactory.php';

        return $container->services['Sylius\\Component\\Core\\Factory\\PromotionRuleFactoryInterface'] = new \Sylius\Component\Core\Factory\PromotionRuleFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Promotion\\PromotionRule'));
    }
}
