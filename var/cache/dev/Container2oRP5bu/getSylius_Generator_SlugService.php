<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Generator_SlugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.generator.slug' shared service.
     *
     * @return \Sylius\Component\Product\Generator\SlugGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Product/Generator/SlugGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Product/Generator/SlugGenerator.php';

        return $container->services['sylius.generator.slug'] = new \Sylius\Component\Product\Generator\SlugGenerator();
    }
}
