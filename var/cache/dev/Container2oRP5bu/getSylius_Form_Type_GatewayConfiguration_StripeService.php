<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_GatewayConfiguration_StripeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.gateway_configuration.stripe' shared service.
     *
     * @return \Sylius\Bundle\PayumBundle\Form\Type\StripeGatewayConfigurationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Form/Type/StripeGatewayConfigurationType.php';

        return $container->services['sylius.form.type.gateway_configuration.stripe'] = new \Sylius\Bundle\PayumBundle\Form\Type\StripeGatewayConfigurationType();
    }
}
