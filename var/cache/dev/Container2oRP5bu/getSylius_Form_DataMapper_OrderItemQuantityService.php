<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_DataMapper_OrderItemQuantityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.data_mapper.order_item_quantity' shared service.
     *
     * @return \Sylius\Bundle\OrderBundle\Form\DataMapper\OrderItemQuantityDataMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataMapperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/OrderBundle/Form/DataMapper/OrderItemQuantityDataMapper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/DataMapper/PropertyPathMapper.php';

        return $container->services['sylius.form.data_mapper.order_item_quantity'] = new \Sylius\Bundle\OrderBundle\Form\DataMapper\OrderItemQuantityDataMapper(($container->services['sylius.order_item_quantity_modifier.limiting'] ?? $container->load('getSylius_OrderItemQuantityModifier_LimitingService')), new \Symfony\Component\Form\Extension\Core\DataMapper\PropertyPathMapper(($container->privates['property_accessor'] ?? $container->getPropertyAccessorService())));
    }
}
