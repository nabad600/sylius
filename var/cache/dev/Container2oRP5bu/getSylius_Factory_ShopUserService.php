<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Factory_ShopUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.factory.shop_user' shared service.
     *
     * @return \Sylius\Bundle\UserBundle\Factory\UserWithEncoderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Factory/UserWithEncoderFactory.php';

        return $container->services['sylius.factory.shop_user'] = new \Sylius\Bundle\UserBundle\Factory\UserWithEncoderFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\User\\ShopUser'), 'argon2i');
    }
}
