<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_ProductReviewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.product_review' shared service.
     *
     * @return \Sylius\Component\Review\Factory\ReviewFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Review/Factory/ReviewFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Review/Factory/ReviewFactory.php';

        return $container->services['sylius.factory.product_review'] = new \Sylius\Component\Review\Factory\ReviewFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Product\\ProductReview'));
    }
}
