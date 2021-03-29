<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Api_PaymentStateMachineTransitionApplicatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.api.payment_state_machine_transition_applicator' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Applicator\PaymentStateMachineTransitionApplicator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Applicator/PaymentStateMachineTransitionApplicatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Applicator/PaymentStateMachineTransitionApplicator.php';

        return $container->services['sylius.api.payment_state_machine_transition_applicator'] = new \Sylius\Bundle\ApiBundle\Applicator\PaymentStateMachineTransitionApplicator(($container->services['SM\\Factory\\FactoryInterface'] ?? $container->getFactoryInterfaceService()));
    }
}