<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_ZppNQ1iService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.zppNQ1i' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/CommandHandler/ChangeShopUserPasswordHandler.php';

        return $container->privates['.messenger.handler_descriptor.zppNQ1i'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Sylius\Bundle\ApiBundle\CommandHandler\ChangeShopUserPasswordHandler(($container->services['sylius.security.password_updater'] ?? $container->load('getSylius_Security_PasswordUpdaterService')), ($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService'))), []);
    }
}
