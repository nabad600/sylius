<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_CommandLoaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

        return $container->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => ['privates', 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'getRunSqlCommandService', true],
            'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => ['privates', 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand', 'getDebugBlocksCommandService', true],
            'Sylius\\Bundle\\AdminApiBundle\\Command\\CreateClientCommand' => ['services', 'Sylius\\Bundle\\AdminApiBundle\\Command\\CreateClientCommand', 'getCreateClientCommandService', true],
            'Sylius\\Bundle\\CoreBundle\\Command\\CancelUnpaidOrdersCommand' => ['services', 'Sylius\\Bundle\\CoreBundle\\Command\\CancelUnpaidOrdersCommand', 'getCancelUnpaidOrdersCommandService', true],
            'Sylius\\Bundle\\CoreBundle\\Command\\CheckRequirementsCommand' => ['services', 'Sylius\\Bundle\\CoreBundle\\Command\\CheckRequirementsCommand', 'getCheckRequirementsCommandService', true],
            'Sylius\\Bundle\\CoreBundle\\Command\\InformAboutGUSCommand' => ['services', 'Sylius\\Bundle\\CoreBundle\\Command\\InformAboutGUSCommand', 'getInformAboutGUSCommandService', true],
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallAssetsCommand' => ['services', 'Sylius\\Bundle\\CoreBundle\\Command\\InstallAssetsCommand', 'getInstallAssetsCommandService', true],
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallCommand' => ['services', 'Sylius\\Bundle\\CoreBundle\\Command\\InstallCommand', 'getInstallCommandService', true],
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallDatabaseCommand' => ['services', 'Sylius\\Bundle\\CoreBundle\\Command\\InstallDatabaseCommand', 'getInstallDatabaseCommandService', true],
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallSampleDataCommand' => ['services', 'Sylius\\Bundle\\CoreBundle\\Command\\InstallSampleDataCommand', 'getInstallSampleDataCommandService', true],
            'Sylius\\Bundle\\CoreBundle\\Command\\SetupCommand' => ['services', 'Sylius\\Bundle\\CoreBundle\\Command\\SetupCommand', 'getSetupCommandService', true],
            'Sylius\\Bundle\\CoreBundle\\Command\\ShowAvailablePluginsCommand' => ['services', 'Sylius\\Bundle\\CoreBundle\\Command\\ShowAvailablePluginsCommand', 'getShowAvailablePluginsCommandService', true],
            'Sylius\\Bundle\\OrderBundle\\Command\\RemoveExpiredCartsCommand' => ['services', 'Sylius\\Bundle\\OrderBundle\\Command\\RemoveExpiredCartsCommand', 'getRemoveExpiredCartsCommandService', true],
            'Sylius\\Bundle\\PromotionBundle\\Command\\GenerateCouponsCommand' => ['services', 'Sylius\\Bundle\\PromotionBundle\\Command\\GenerateCouponsCommand', 'getGenerateCouponsCommandService', true],
            'Sylius\\Bundle\\UiBundle\\Command\\DebugTemplateEventCommand' => ['privates', 'Sylius\\Bundle\\UiBundle\\Command\\DebugTemplateEventCommand', 'getDebugTemplateEventCommandService', true],
            'Sylius\\Bundle\\UserBundle\\Command\\DemoteUserCommand' => ['services', 'Sylius\\Bundle\\UserBundle\\Command\\DemoteUserCommand', 'getDemoteUserCommandService', true],
            'Sylius\\Bundle\\UserBundle\\Command\\PromoteUserCommand' => ['services', 'Sylius\\Bundle\\UserBundle\\Command\\PromoteUserCommand', 'getPromoteUserCommandService', true],
            'Sylius\\PayPalPlugin\\Command\\CompletePaidPaymentsCommand' => ['privates', 'Sylius\\PayPalPlugin\\Command\\CompletePaidPaymentsCommand', 'getCompletePaidPaymentsCommandService', true],
            'api_platform.swagger.command.swagger_command' => ['privates', 'api_platform.swagger.command.swagger_command', 'getApiPlatform_Swagger_Command_SwaggerCommandService', true],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', true],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', true],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', true],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', true],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', true],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', true],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', true],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', true],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', true],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', true],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', true],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', true],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', true],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', true],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', true],
            'console.command.messenger_consume_messages' => ['privates', 'console.command.messenger_consume_messages', 'getConsole_Command_MessengerConsumeMessagesService', true],
            'console.command.messenger_debug' => ['privates', 'console.command.messenger_debug', 'getConsole_Command_MessengerDebugService', true],
            'console.command.messenger_setup_transports' => ['privates', 'console.command.messenger_setup_transports', 'getConsole_Command_MessengerSetupTransportsService', true],
            'console.command.messenger_stop_workers' => ['privates', 'console.command.messenger_stop_workers', 'getConsole_Command_MessengerStopWorkersService', true],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', true],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', true],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', true],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', true],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', true],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', true],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', true],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', true],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', true],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', true],
            'console.command.validator_debug' => ['privates', 'console.command.validator_debug', 'getConsole_Command_ValidatorDebugService', true],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', true],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', true],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', true],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', true],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', true],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', true],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', true],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', true],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', true],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', true],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', true],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', true],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', true],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', true],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', true],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', true],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', true],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', true],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', true],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', true],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', true],
            'doctrine_migrations.current_command' => ['privates', 'doctrine_migrations.current_command', 'getDoctrineMigrations_CurrentCommandService', true],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', true],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', true],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', true],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', true],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', true],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', true],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', true],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', true],
            'doctrine_migrations.sync_metadata_command' => ['privates', 'doctrine_migrations.sync_metadata_command', 'getDoctrineMigrations_SyncMetadataCommandService', true],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', true],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', true],
            'doctrine_migrations.versions_command' => ['privates', 'doctrine_migrations.versions_command', 'getDoctrineMigrations_VersionsCommandService', true],
            'fos_oauth_server.clean_command' => ['privates', 'fos_oauth_server.clean_command', 'getFosOauthServer_CleanCommandService', true],
            'fos_oauth_server.create_client_command' => ['privates', 'fos_oauth_server.create_client_command', 'getFosOauthServer_CreateClientCommandService', true],
            'knp_gaufrette.command.filesystem_keys' => ['privates', 'knp_gaufrette.command.filesystem_keys', 'getKnpGaufrette_Command_FilesystemKeysService', true],
            'lexik_jwt_authentication.check_config_command' => ['privates', 'lexik_jwt_authentication.check_config_command', 'getLexikJwtAuthentication_CheckConfigCommandService', true],
            'lexik_jwt_authentication.generate_keypair_command' => ['privates', 'lexik_jwt_authentication.generate_keypair_command', 'getLexikJwtAuthentication_GenerateKeypairCommandService', true],
            'lexik_jwt_authentication.generate_token_command' => ['services', 'lexik_jwt_authentication.generate_token_command', 'getLexikJwtAuthentication_GenerateTokenCommandService', true],
            'liip_imagine.command.cache_remove' => ['privates', 'liip_imagine.command.cache_remove', 'getLiipImagine_Command_CacheRemoveService', true],
            'liip_imagine.command.cache_resolve' => ['privates', 'liip_imagine.command.cache_resolve', 'getLiipImagine_Command_CacheResolveService', true],
            'monolog.command.server_log' => ['privates', 'monolog.command.server_log', 'getMonolog_Command_ServerLogService', true],
            'payum.command.create_capture_token' => ['privates', 'payum.command.create_capture_token', 'getPayum_Command_CreateCaptureTokenService', true],
            'payum.command.create_notify_token' => ['privates', 'payum.command.create_notify_token', 'getPayum_Command_CreateNotifyTokenService', true],
            'payum.command.debug_gateway' => ['privates', 'payum.command.debug_gateway', 'getPayum_Command_DebugGatewayService', true],
            'payum.command.status' => ['privates', 'payum.command.status', 'getPayum_Command_StatusService', true],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', true],
            'swiftmailer.command.debug' => ['privates', 'swiftmailer.command.debug', 'getSwiftmailer_Command_DebugService', true],
            'swiftmailer.command.new_email' => ['privates', 'swiftmailer.command.new_email', 'getSwiftmailer_Command_NewEmailService', true],
            'swiftmailer.command.send_email' => ['privates', 'swiftmailer.command.send_email', 'getSwiftmailer_Command_SendEmailService', true],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', true],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', true],
            'var_dumper.command.server_dump' => ['privates', 'var_dumper.command.server_dump', 'getVarDumper_Command_ServerDumpService', true],
            'winzou\\Bundle\\StateMachineBundle\\Command\\winzouStateMachineDebugCommand' => ['privates', 'winzou\\Bundle\\StateMachineBundle\\Command\\winzouStateMachineDebugCommand', 'getWinzouStateMachineDebugCommandService', true],
        ], [
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand',
            'Sonata\\BlockBundle\\Command\\DebugBlocksCommand' => 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand',
            'Sylius\\Bundle\\AdminApiBundle\\Command\\CreateClientCommand' => 'Sylius\\Bundle\\AdminApiBundle\\Command\\CreateClientCommand',
            'Sylius\\Bundle\\CoreBundle\\Command\\CancelUnpaidOrdersCommand' => 'Sylius\\Bundle\\CoreBundle\\Command\\CancelUnpaidOrdersCommand',
            'Sylius\\Bundle\\CoreBundle\\Command\\CheckRequirementsCommand' => 'Sylius\\Bundle\\CoreBundle\\Command\\CheckRequirementsCommand',
            'Sylius\\Bundle\\CoreBundle\\Command\\InformAboutGUSCommand' => 'Sylius\\Bundle\\CoreBundle\\Command\\InformAboutGUSCommand',
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallAssetsCommand' => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallAssetsCommand',
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallCommand' => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallCommand',
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallDatabaseCommand' => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallDatabaseCommand',
            'Sylius\\Bundle\\CoreBundle\\Command\\InstallSampleDataCommand' => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallSampleDataCommand',
            'Sylius\\Bundle\\CoreBundle\\Command\\SetupCommand' => 'Sylius\\Bundle\\CoreBundle\\Command\\SetupCommand',
            'Sylius\\Bundle\\CoreBundle\\Command\\ShowAvailablePluginsCommand' => 'Sylius\\Bundle\\CoreBundle\\Command\\ShowAvailablePluginsCommand',
            'Sylius\\Bundle\\OrderBundle\\Command\\RemoveExpiredCartsCommand' => 'Sylius\\Bundle\\OrderBundle\\Command\\RemoveExpiredCartsCommand',
            'Sylius\\Bundle\\PromotionBundle\\Command\\GenerateCouponsCommand' => 'Sylius\\Bundle\\PromotionBundle\\Command\\GenerateCouponsCommand',
            'Sylius\\Bundle\\UiBundle\\Command\\DebugTemplateEventCommand' => 'Sylius\\Bundle\\UiBundle\\Command\\DebugTemplateEventCommand',
            'Sylius\\Bundle\\UserBundle\\Command\\DemoteUserCommand' => 'Sylius\\Bundle\\UserBundle\\Command\\DemoteUserCommand',
            'Sylius\\Bundle\\UserBundle\\Command\\PromoteUserCommand' => 'Sylius\\Bundle\\UserBundle\\Command\\PromoteUserCommand',
            'Sylius\\PayPalPlugin\\Command\\CompletePaidPaymentsCommand' => 'Sylius\\PayPalPlugin\\Command\\CompletePaidPaymentsCommand',
            'api_platform.swagger.command.swagger_command' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle\\Command\\SwaggerCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.messenger_consume_messages' => 'Symfony\\Component\\Messenger\\Command\\ConsumeMessagesCommand',
            'console.command.messenger_debug' => 'Symfony\\Component\\Messenger\\Command\\DebugCommand',
            'console.command.messenger_setup_transports' => 'Symfony\\Component\\Messenger\\Command\\SetupTransportsCommand',
            'console.command.messenger_stop_workers' => 'Symfony\\Component\\Messenger\\Command\\StopWorkersCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.validator_debug' => 'Symfony\\Component\\Validator\\Command\\DebugCommand',
            'console.command.xliff_lint' => 'Symfony\\Component\\Translation\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine_migrations.current_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\CurrentCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand',
            'doctrine_migrations.sync_metadata_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\SyncMetadataCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand',
            'doctrine_migrations.versions_command' => 'Doctrine\\Migrations\\Tools\\Console\\Command\\ListCommand',
            'fos_oauth_server.clean_command' => 'FOS\\OAuthServerBundle\\Command\\CleanCommand',
            'fos_oauth_server.create_client_command' => 'FOS\\OAuthServerBundle\\Command\\CreateClientCommand',
            'knp_gaufrette.command.filesystem_keys' => 'Knp\\Bundle\\GaufretteBundle\\Command\\FilesystemKeysCommand',
            'lexik_jwt_authentication.check_config_command' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\CheckConfigCommand',
            'lexik_jwt_authentication.generate_keypair_command' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\GenerateKeyPairCommand',
            'lexik_jwt_authentication.generate_token_command' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\GenerateTokenCommand',
            'liip_imagine.command.cache_remove' => 'Liip\\ImagineBundle\\Command\\RemoveCacheCommand',
            'liip_imagine.command.cache_resolve' => 'Liip\\ImagineBundle\\Command\\ResolveCacheCommand',
            'monolog.command.server_log' => 'Symfony\\Bridge\\Monolog\\Command\\ServerLogCommand',
            'payum.command.create_capture_token' => 'Payum\\Bundle\\PayumBundle\\Command\\CreateCaptureTokenCommand',
            'payum.command.create_notify_token' => 'Payum\\Bundle\\PayumBundle\\Command\\CreateNotifyTokenCommand',
            'payum.command.debug_gateway' => 'Payum\\Bundle\\PayumBundle\\Command\\DebugGatewayCommand',
            'payum.command.status' => 'Payum\\Bundle\\PayumBundle\\Command\\StatusCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'swiftmailer.command.debug' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\DebugCommand',
            'swiftmailer.command.new_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\NewEmailCommand',
            'swiftmailer.command.send_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
            'var_dumper.command.server_dump' => 'Symfony\\Bundle\\DebugBundle\\Command\\ServerDumpPlaceholderCommand',
            'winzou\\Bundle\\StateMachineBundle\\Command\\winzouStateMachineDebugCommand' => 'winzou\\Bundle\\StateMachineBundle\\Command\\winzouStateMachineDebugCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'messenger:consume' => 'console.command.messenger_consume_messages', 'messenger:setup-transports' => 'console.command.messenger_setup_transports', 'debug:messenger' => 'console.command.messenger_debug', 'messenger:stop-workers' => 'console.command.messenger_stop_workers', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'debug:validator' => 'console.command.validator_debug', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'security:encode-password' => 'security.command.user_password_encoder', 'debug:swiftmailer' => 'swiftmailer.command.debug', 'swiftmailer:email:send' => 'swiftmailer.command.new_email', 'swiftmailer:spool:send' => 'swiftmailer.command.send_email', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'dbal:run-sql' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'sylius:remove-expired-carts' => 'Sylius\\Bundle\\OrderBundle\\Command\\RemoveExpiredCartsCommand', 'sylius:promotion:generate-coupons' => 'Sylius\\Bundle\\PromotionBundle\\Command\\GenerateCouponsCommand', 'sylius:user:demote' => 'Sylius\\Bundle\\UserBundle\\Command\\DemoteUserCommand', 'sylius:user:promote' => 'Sylius\\Bundle\\UserBundle\\Command\\PromoteUserCommand', 'sylius:debug:template-event' => 'Sylius\\Bundle\\UiBundle\\Command\\DebugTemplateEventCommand', 'sylius:cancel-unpaid-orders' => 'Sylius\\Bundle\\CoreBundle\\Command\\CancelUnpaidOrdersCommand', 'sylius:install:check-requirements' => 'Sylius\\Bundle\\CoreBundle\\Command\\CheckRequirementsCommand', 'sylius:install:assets' => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallAssetsCommand', 'sylius:install' => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallCommand', 'sylius:install:database' => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallDatabaseCommand', 'sylius:install:sample-data' => 'Sylius\\Bundle\\CoreBundle\\Command\\InstallSampleDataCommand', 'sylius:install:setup' => 'Sylius\\Bundle\\CoreBundle\\Command\\SetupCommand', 'sylius:show-available-plugins' => 'Sylius\\Bundle\\CoreBundle\\Command\\ShowAvailablePluginsCommand', 'sylius:inform-about-gus' => 'Sylius\\Bundle\\CoreBundle\\Command\\InformAboutGUSCommand', 'debug:winzou:state-machine' => 'winzou\\Bundle\\StateMachineBundle\\Command\\winzouStateMachineDebugCommand', 'debug:sonata:block' => 'Sonata\\BlockBundle\\Command\\DebugBlocksCommand', 'gaufrette:filesystem:keys' => 'knp_gaufrette.command.filesystem_keys', 'liip:imagine:cache:remove' => 'liip_imagine.command.cache_remove', 'liip:imagine:cache:resolve' => 'liip_imagine.command.cache_resolve', 'payum:security:create-capture-token' => 'payum.command.create_capture_token', 'payum:security:create-notify-token' => 'payum.command.create_notify_token', 'debug:payum:gateway' => 'payum.command.debug_gateway', 'payum:status' => 'payum.command.status', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:sync-metadata-storage' => 'doctrine_migrations.sync_metadata_command', 'doctrine:migrations:list' => 'doctrine_migrations.versions_command', 'doctrine:migrations:current' => 'doctrine_migrations.current_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'fos:oauth-server:clean' => 'fos_oauth_server.clean_command', 'fos:oauth-server:create-client' => 'fos_oauth_server.create_client_command', 'sylius:oauth-server:create-client' => 'Sylius\\Bundle\\AdminApiBundle\\Command\\CreateClientCommand', 'server:dump' => 'var_dumper.command.server_dump', 'server:log' => 'monolog.command.server_log', 'api:swagger:export' => 'api_platform.swagger.command.swagger_command', 'api:openapi:export' => 'api_platform.swagger.command.swagger_command', 'lexik:jwt:check-config' => 'lexik_jwt_authentication.check_config_command', 'lexik:jwt:generate-token' => 'lexik_jwt_authentication.generate_token_command', 'lexik:jwt:generate-keypair' => 'lexik_jwt_authentication.generate_keypair_command', 'sylius:pay-pal-plugin:complete-payments' => 'Sylius\\PayPalPlugin\\Command\\CompletePaidPaymentsCommand']);
    }
}