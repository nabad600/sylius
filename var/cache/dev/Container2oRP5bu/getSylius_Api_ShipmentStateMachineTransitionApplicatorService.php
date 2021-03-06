<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_ShipmentStateMachineTransitionApplicatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.api.shipment_state_machine_transition_applicator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Applicator\ShipmentStateMachineTransitionApplicator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Applicator/ShipmentStateMachineTransitionApplicatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Applicator/ShipmentStateMachineTransitionApplicator.php';

        return $container->services['sylius.api.shipment_state_machine_transition_applicator'] = new \Sylius\Bundle\ApiBundle\Applicator\ShipmentStateMachineTransitionApplicator(($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
