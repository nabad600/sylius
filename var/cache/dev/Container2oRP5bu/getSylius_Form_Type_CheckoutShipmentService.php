<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_CheckoutShipmentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.checkout_shipment' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShipmentType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/Checkout/ShipmentType.php';

        return $container->services['sylius.form.type.checkout_shipment'] = new \Sylius\Bundle\CoreBundle\Form\Type\Checkout\ShipmentType('App\\Entity\\Shipping\\Shipment', $container->parameters['sylius.form.type.checkout_shipment.validation_groups']);
    }
}
