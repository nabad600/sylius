<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_Authorize_FormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_oauth_server.authorize.form' shared service.
     *
     * @return \Symfony\Component\Form\Form
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ClearableErrorsInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Form.php';

        return ($container->services['.container.private.form.factory'] ?? $container->get_Container_Private_Form_FactoryService())->createNamed('fos_oauth_server_authorize_form', 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType', NULL, ['validation_groups' => $container->parameters['fos_oauth_server.authorize.form.validation_groups']]);
    }
}
