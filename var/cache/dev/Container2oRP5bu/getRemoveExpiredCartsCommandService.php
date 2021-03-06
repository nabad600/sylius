<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRemoveExpiredCartsCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\OrderBundle\Command\RemoveExpiredCartsCommand' shared service.
     *
     * @return \Sylius\Bundle\OrderBundle\Command\RemoveExpiredCartsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius-labs/polyfill-symfony-framework-bundle/src/Command/ContainerAwareCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Command/RemoveExpiredCartsCommand.php';

        $container->services['Sylius\\Bundle\\OrderBundle\\Command\\RemoveExpiredCartsCommand'] = $instance = new \Sylius\Bundle\OrderBundle\Command\RemoveExpiredCartsCommand();

        $instance->setName('sylius:remove-expired-carts');

        return $instance;
    }
}
