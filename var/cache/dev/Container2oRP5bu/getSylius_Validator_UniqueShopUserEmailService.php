<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_UniqueShopUserEmailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sylius.validator.unique_shop_user_email' shared service.
     *
     * @return \Sylius\Bundle\ApiBundle\Validator\Constraints\UniqueShopUserEmailValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Validator/Constraints/UniqueShopUserEmailValidator.php';

        return $container->privates['sylius.validator.unique_shop_user_email'] = new \Sylius\Bundle\ApiBundle\Validator\Constraints\UniqueShopUserEmailValidator(($container->services['sylius.canonicalizer'] ?? ($container->services['sylius.canonicalizer'] = new \Sylius\Component\User\Canonicalizer\Canonicalizer())), ($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')));
    }
}
