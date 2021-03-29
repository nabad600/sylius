<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_ZoneCannotContainItselfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.zone_cannot_contain_itself' shared service.
     *
     * @return \Sylius\Bundle\AddressingBundle\Validator\Constraints\ZoneCannotContainItselfValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Validator/Constraints/ZoneCannotContainItselfValidator.php';

        return $container->services['sylius.validator.zone_cannot_contain_itself'] = new \Sylius\Bundle\AddressingBundle\Validator\Constraints\ZoneCannotContainItselfValidator();
    }
}