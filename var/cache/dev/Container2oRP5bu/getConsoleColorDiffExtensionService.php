<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsoleColorDiffExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension' shared autowired service.
     *
     * @return \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/Extension/ExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/Extension/ConfigurationExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/Extension/Extension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symplify/console-color-diff/src/DependencyInjection/Extension/ConsoleColorDiffExtension.php';

        return $container->services['Symplify\\ConsoleColorDiff\\DependencyInjection\\Extension\\ConsoleColorDiffExtension'] = new \Symplify\ConsoleColorDiff\DependencyInjection\Extension\ConsoleColorDiffExtension();
    }
}