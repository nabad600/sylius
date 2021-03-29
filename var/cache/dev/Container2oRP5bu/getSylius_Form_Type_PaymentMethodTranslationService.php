<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_PaymentMethodTranslationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.payment_method_translation' shared service.
     *
     * @return \Sylius\Bundle\PaymentBundle\Form\Type\PaymentMethodTranslationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Form/Type/PaymentMethodTranslationType.php';

        return $container->services['sylius.form.type.payment_method_translation'] = new \Sylius\Bundle\PaymentBundle\Form\Type\PaymentMethodTranslationType('App\\Entity\\Payment\\PaymentMethodTranslation', $container->parameters['sylius.form.type.payment_method_translation.validation_groups']);
    }
}
