<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ApiClientService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.api_client' shared service.
     *
     * @return \Sylius\Bundle\AdminApiBundle\Form\Type\ClientType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/AbstractResourceType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AdminApiBundle/Form/Type/ClientType.php';

        return $container->services['sylius.form.type.api_client'] = new \Sylius\Bundle\AdminApiBundle\Form\Type\ClientType('App\\Entity\\AdminApi\\Client', $container->parameters['sylius.form.type.api_client.validation_groups']);
    }
}
