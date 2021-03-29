<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftmailer_Mailer_Default_TransportService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'swiftmailer.mailer.default.transport' shared service.
     *
     * @return \Swift_Transport_NullTransport
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/NullTransport.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php';

        $container->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_NullTransport(new \Swift_Events_SimpleEventDispatcher());

        $instance->registerPlugin(($container->services['swiftmailer.mailer.default.plugin.messagelogger'] ?? ($container->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger())));

        return $instance;
    }
}