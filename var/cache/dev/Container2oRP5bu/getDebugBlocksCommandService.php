<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebugBlocksCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sonata\BlockBundle\Command\DebugBlocksCommand' shared service.
     *
     * @return \Sonata\BlockBundle\Command\DebugBlocksCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Command/DebugBlocksCommand.php';

        $container->privates['Sonata\\BlockBundle\\Command\\DebugBlocksCommand'] = $instance = new \Sonata\BlockBundle\Command\DebugBlocksCommand(($container->services['sonata.block.manager'] ?? $container->getSonata_Block_ManagerService()));

        $instance->setName('debug:sonata:block');

        return $instance;
    }
}
