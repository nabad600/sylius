<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_ValidProvinceAddressService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.valid_province_address' shared service.
     *
     * @return \Sylius\Bundle\AddressingBundle\Validator\Constraints\ProvinceAddressConstraintValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Validator/Constraints/ProvinceAddressConstraintValidator.php';

        return $container->services['sylius.validator.valid_province_address'] = new \Sylius\Bundle\AddressingBundle\Validator\Constraints\ProvinceAddressConstraintValidator(($container->services['sylius.repository.country'] ?? $container->load('getSylius_Repository_CountryService')), ($container->services['sylius.repository.province'] ?? $container->getSylius_Repository_ProvinceService()));
    }
}
