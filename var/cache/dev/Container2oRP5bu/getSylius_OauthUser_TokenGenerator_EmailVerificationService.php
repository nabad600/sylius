<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OauthUser_TokenGenerator_EmailVerificationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.oauth_user.token_generator.email_verification' shared service.
     *
     * @return \Sylius\Component\User\Security\Generator\UniqueTokenGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/Generator/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/Generator/UniqueTokenGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/Checker/UniquenessCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/User/Security/Checker/TokenUniquenessChecker.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Generator/RandomnessGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Component/Generator/RandomnessGenerator.php';

        return $container->services['sylius.oauth_user.token_generator.email_verification'] = new \Sylius\Component\User\Security\Generator\UniqueTokenGenerator(($container->services['sylius.random_generator'] ?? ($container->services['sylius.random_generator'] = new \Sylius\Component\Resource\Generator\RandomnessGenerator())), new \Sylius\Component\User\Security\Checker\TokenUniquenessChecker(($container->services['sylius.repository.oauth_user'] ?? $container->load('getSylius_Repository_OauthUserService')), 'emailVerificationToken'), 16);
    }
}
