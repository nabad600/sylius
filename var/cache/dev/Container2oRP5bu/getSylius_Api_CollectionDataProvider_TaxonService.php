<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_CollectionDataProvider_TaxonService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.api.collection_data_provider.taxon' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\DataProvider\TaxonCollectionDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/DataProvider/TaxonCollectionDataProvider.php';

        return $container->privates['sylius.api.collection_data_provider.taxon'] = new \Sylius\Bundle\ApiBundle\DataProvider\TaxonCollectionDataProvider(($container->services['sylius.repository.taxon'] ?? $container->load('getSylius_Repository_TaxonService')), ($container->privates['sylius.api.context.user'] ?? $container->getSylius_Api_Context_UserService()));
    }
}
