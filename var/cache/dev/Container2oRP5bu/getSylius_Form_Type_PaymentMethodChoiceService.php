<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_PaymentMethodChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.payment_method_choice' shared service.
     *
     * @return \Sylius\Bundle\PaymentBundle\Form\Type\PaymentMethodChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/PaymentBundle/Form/Type/PaymentMethodChoiceType.php';

        return $container->services['sylius.form.type.payment_method_choice'] = new \Sylius\Bundle\PaymentBundle\Form\Type\PaymentMethodChoiceType(($container->services['Sylius\\Component\\Payment\\Resolver\\PaymentMethodsResolverInterface'] ?? $container->getPaymentMethodsResolverInterfaceService()), ($container->services['sylius.repository.payment_method'] ?? $container->getSylius_Repository_PaymentMethodService()));
    }
}