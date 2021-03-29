<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Listener_CanonicalizerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.listener.canonicalizer' shared service.
     *
     * @return \Sylius\Bundle\CoreBundle\EventListener\CanonicalizerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/EventListener/CanonicalizerListener.php';

        return $container->services['sylius.listener.canonicalizer'] = new \Sylius\Bundle\CoreBundle\EventListener\CanonicalizerListener(($container->services['sylius.canonicalizer'] ?? ($container->services['sylius.canonicalizer'] = new \Sylius\Component\User\Canonicalizer\Canonicalizer())));
    }
}
