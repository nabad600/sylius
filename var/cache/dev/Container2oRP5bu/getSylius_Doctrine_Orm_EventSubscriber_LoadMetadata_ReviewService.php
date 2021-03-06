<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Doctrine_Orm_EventSubscriber_LoadMetadata_ReviewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.doctrine.orm.event_subscriber.load_metadata.review' shared service.
     *
     * @return \Sylius\Bundle\ReviewBundle\Doctrine\ORM\Subscriber\LoadMetadataSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ReviewBundle/Doctrine/ORM/Subscriber/LoadMetadataSubscriber.php';

        return $container->services['sylius.doctrine.orm.event_subscriber.load_metadata.review'] = new \Sylius\Bundle\ReviewBundle\Doctrine\ORM\Subscriber\LoadMetadataSubscriber($container->parameters['sylius.review.subjects']);
    }
}
