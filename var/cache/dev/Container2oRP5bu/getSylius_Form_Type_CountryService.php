<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_CountryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.country' shared service.
     *
     * @return \Sylius\Bundle\AddressingBundle\Form\Type\CountryType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Form/Type/CountryType.php';

        return $container->services['sylius.form.type.country'] = new \Sylius\Bundle\AddressingBundle\Form\Type\CountryType('App\\Entity\\Addressing\\Country', $container->parameters['sylius.form.type.country.validation_groups']);
    }
}
