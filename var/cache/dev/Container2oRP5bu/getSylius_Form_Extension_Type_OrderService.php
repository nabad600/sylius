<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Extension_Type_OrderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.extension.type.order' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Form\Extension\OrderTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Extension/OrderTypeExtension.php';

        return $container->services['sylius.form.extension.type.order'] = new \Sylius\Bundle\CoreBundle\Form\Extension\OrderTypeExtension();
    }
}
