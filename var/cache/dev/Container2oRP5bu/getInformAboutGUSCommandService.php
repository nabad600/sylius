<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInformAboutGUSCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Sylius\Bundle\CoreBundle\Command\InformAboutGUSCommand' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Command\InformAboutGUSCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Command/InformAboutGUSCommand.php';

        $container->services['Sylius\\Bundle\\CoreBundle\\Command\\InformAboutGUSCommand'] = $instance = new \Sylius\Bundle\CoreBundle\Command\InformAboutGUSCommand();

        $instance->setName('sylius:inform-about-gus');

        return $instance;
    }
}
