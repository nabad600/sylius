<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_ShippingMethodIntegrityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.shipping_method_integrity' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Validator\Constraints\OrderShippingMethodEligibilityValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Validator/Constraints/OrderShippingMethodEligibilityValidator.php';

        return $container->services['sylius.validator.shipping_method_integrity'] = new \Sylius\Bundle\CoreBundle\Validator\Constraints\OrderShippingMethodEligibilityValidator(($container->services['sylius.shipping_method_eligibility_checker'] ?? $container->getSylius_ShippingMethodEligibilityCheckerService()));
    }
}
