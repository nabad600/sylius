<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Validator_ChannelDefaultLocaleEnabledService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.validator.channel_default_locale_enabled' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\Validator\Constraints\ChannelDefaultLocaleEnabledValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Validator/Constraints/ChannelDefaultLocaleEnabledValidator.php';

        return $container->services['sylius.validator.channel_default_locale_enabled'] = new \Sylius\Bundle\CoreBundle\Validator\Constraints\ChannelDefaultLocaleEnabledValidator();
    }
}