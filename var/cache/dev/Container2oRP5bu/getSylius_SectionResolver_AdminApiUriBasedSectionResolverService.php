<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_SectionResolver_AdminApiUriBasedSectionResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.section_resolver.admin_api_uri_based_section_resolver' shared service.
     *
     * @return \Sylius\Bundle\AdminApiBundle\SectionResolver\AdminApiUriBasedSectionResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/SectionResolver/UriBasedSectionResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminApiBundle/SectionResolver/AdminApiUriBasedSectionResolver.php';

        return $container->services['sylius.section_resolver.admin_api_uri_based_section_resolver'] = new \Sylius\Bundle\AdminApiBundle\SectionResolver\AdminApiUriBasedSectionResolver('/api');
    }
}
