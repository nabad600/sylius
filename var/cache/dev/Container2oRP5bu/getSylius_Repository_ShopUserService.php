<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Repository_ShopUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.repository.shop_user' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Doctrine\ORM\UserRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Repository/UserRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Doctrine/ORM/UserRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/UserRepository.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        return $container->services['sylius.repository.shop_user'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\UserRepository($a, $a->getClassMetadata('App\\Entity\\User\\ShopUser'));
    }
}
