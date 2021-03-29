<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_CustomerUniqueAddressAdderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.customer_unique_address_adder' shared service.
     *
     * @return \Sylius\Component\Core\Customer\CustomerUniqueAddressAdder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Customer/CustomerAddressAdderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Core/Customer/CustomerUniqueAddressAdder.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Addressing/Comparator/AddressComparatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Addressing/Comparator/AddressComparator.php';

        return $container->services['sylius.customer_unique_address_adder'] = new \Sylius\Component\Core\Customer\CustomerUniqueAddressAdder(($container->services['sylius.address_comparator'] ?? ($container->services['sylius.address_comparator'] = new \Sylius\Component\Addressing\Comparator\AddressComparator())));
    }
}
