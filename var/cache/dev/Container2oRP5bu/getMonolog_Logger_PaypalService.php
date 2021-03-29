<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_PaypalService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'monolog.logger.paypal' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['monolog.logger.paypal'] = $instance = new \Symfony\Bridge\Monolog\Logger('paypal');

        $instance->pushProcessor(($container->privates['debug.log_processor'] ?? $container->getDebug_LogProcessorService()));
        $instance->pushHandler(($container->privates['monolog.handler.firephp'] ?? $container->getMonolog_Handler_FirephpService()));
        $instance->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));
        $instance->pushHandler(($container->privates['monolog.handler.paypal'] ?? $container->load('getMonolog_Handler_PaypalService')));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }
}
