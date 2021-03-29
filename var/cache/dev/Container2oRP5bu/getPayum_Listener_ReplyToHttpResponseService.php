<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayum_Listener_ReplyToHttpResponseService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'payum.listener.reply_to_http_response' shared service.
     *
     * @return \Payum\Bundle\PayumBundle\EventListener\ReplyToHttpResponseListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/EventListener/ReplyToHttpResponseListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/payum/payum/src/Payum/Core/Bridge/Symfony/ReplyToSymfonyResponseConverter.php';

        return $container->services['payum.listener.reply_to_http_response'] = new \Payum\Bundle\PayumBundle\EventListener\ReplyToHttpResponseListener(($container->services['payum.converter.reply_to_http_response'] ?? ($container->services['payum.converter.reply_to_http_response'] = new \Payum\Core\Bridge\Symfony\ReplyToSymfonyResponseConverter())));
    }
}
