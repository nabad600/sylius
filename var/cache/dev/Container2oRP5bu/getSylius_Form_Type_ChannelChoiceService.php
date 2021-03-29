<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ChannelChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.channel_choice' shared service.
     *
     * @return \Sylius\Bundle\ChannelBundle\Form\Type\ChannelChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ChannelBundle/Form/Type/ChannelChoiceType.php';

        return $container->services['sylius.form.type.channel_choice'] = new \Sylius\Bundle\ChannelBundle\Form\Type\ChannelChoiceType(($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()));
    }
}
