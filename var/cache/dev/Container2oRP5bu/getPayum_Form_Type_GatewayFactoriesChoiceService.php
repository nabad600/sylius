<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Form_Type_GatewayFactoriesChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'payum.form.type.gateway_factories_choice' shared service.
     *
     * @return \Payum\Core\Bridge\Symfony\Form\Type\GatewayFactoriesChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Bridge/Symfony/Form/Type/GatewayFactoriesChoiceType.php';

        return $container->services['payum.form.type.gateway_factories_choice'] = new \Payum\Core\Bridge\Symfony\Form\Type\GatewayFactoriesChoiceType([]);
    }
}
