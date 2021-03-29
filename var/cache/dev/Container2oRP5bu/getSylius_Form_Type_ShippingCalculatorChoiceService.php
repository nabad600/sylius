<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ShippingCalculatorChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.shipping_calculator_choice' shared service.
     *
     * @return \Sylius\Bundle\ShippingBundle\Form\Type\CalculatorChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ShippingBundle/Form/Type/CalculatorChoiceType.php';

        return $container->services['sylius.form.type.shipping_calculator_choice'] = new \Sylius\Bundle\ShippingBundle\Form\Type\CalculatorChoiceType($container->parameters['sylius.shipping_calculators']);
    }
}
