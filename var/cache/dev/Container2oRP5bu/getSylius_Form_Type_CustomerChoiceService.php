<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_CustomerChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.customer_choice' shared service.
     *
     * @return \Sylius\Bundle\CustomerBundle\Form\Type\CustomerChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Form/Type/CustomerChoiceType.php';

        return $container->services['sylius.form.type.customer_choice'] = new \Sylius\Bundle\CustomerBundle\Form\Type\CustomerChoiceType(($container->services['sylius.repository.customer'] ?? $container->load('getSylius_Repository_CustomerService')));
    }
}
