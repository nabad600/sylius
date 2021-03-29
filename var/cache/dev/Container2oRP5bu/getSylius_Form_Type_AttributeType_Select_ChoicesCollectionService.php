<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_AttributeType_Select_ChoicesCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.attribute_type.select.choices_collection' shared service.
     *
     * @return \Sylius\Bundle\AttributeBundle\Form\Type\AttributeType\Configuration\SelectAttributeChoicesCollectionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Form/Type/AttributeType/Configuration/SelectAttributeChoicesCollectionType.php';

        return $container->services['sylius.form.type.attribute_type.select.choices_collection'] = new \Sylius\Bundle\AttributeBundle\Form\Type\AttributeType\Configuration\SelectAttributeChoicesCollectionType(($container->services['sylius.translation_locale_provider.admin'] ?? $container->load('getSylius_TranslationLocaleProvider_AdminService')));
    }
}
