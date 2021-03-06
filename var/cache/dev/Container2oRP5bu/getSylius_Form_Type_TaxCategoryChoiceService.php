<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_TaxCategoryChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.tax_category_choice' shared service.
     *
     * @return \Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/TaxationBundle/Form/Type/TaxCategoryChoiceType.php';

        return $container->services['sylius.form.type.tax_category_choice'] = new \Sylius\Bundle\TaxationBundle\Form\Type\TaxCategoryChoiceType(($container->services['sylius.repository.tax_category'] ?? $container->load('getSylius_Repository_TaxCategoryService')));
    }
}
