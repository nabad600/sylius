<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_TaxonDeletionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.listener.taxon_deletion' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\TaxonDeletionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/EventListener/TaxonDeletionListener.php';

        return $container->services['sylius.listener.taxon_deletion'] = new \Sylius\Bundle\CoreBundle\EventListener\TaxonDeletionListener(($container->services['session'] ?? $container->getSessionService()), ($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()), ($container->services['sylius.promotion_rule_updater.total_of_items_from_taxon'] ?? $container->load('getSylius_PromotionRuleUpdater_TotalOfItemsFromTaxonService')), ($container->services['sylius.promotion_rule_updater.has_taxon'] ?? $container->load('getSylius_PromotionRuleUpdater_HasTaxonService')));
    }
}
