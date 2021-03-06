<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_Form_Type_ResourceAutocompleteChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.form.type.resource_autocomplete_choice' shared service.
     *
     * @return \Sylius\Bundle\ResourceBundle\Form\Type\ResourceAutocompleteChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/resource-bundle/src/Bundle/Form/Type/ResourceAutocompleteChoiceType.php';

        $a = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Resource\\Repository\\RepositoryInterface', 'resource repository');
        $a->register('sylius.adjustment', ($container->services['sylius.repository.adjustment'] ?? $container->load('getSylius_Repository_AdjustmentService')));
        $a->register('sylius.order', ($container->services['sylius.repository.order'] ?? $container->getSylius_Repository_OrderService()));
        $a->register('sylius.order_item', ($container->services['sylius.repository.order_item'] ?? $container->load('getSylius_Repository_OrderItemService')));
        $a->register('sylius.order_item_unit', ($container->services['sylius.repository.order_item_unit'] ?? $container->load('getSylius_Repository_OrderItemUnitService')));
        $a->register('sylius.order_sequence', ($container->services['sylius.repository.order_sequence'] ?? $container->load('getSylius_Repository_OrderSequenceService')));
        $a->register('sylius.currency', ($container->services['sylius.repository.currency'] ?? $container->load('getSylius_Repository_CurrencyService')));
        $a->register('sylius.exchange_rate', ($container->services['sylius.repository.exchange_rate'] ?? $container->getSylius_Repository_ExchangeRateService()));
        $a->register('sylius.locale', ($container->services['sylius.repository.locale'] ?? $container->load('getSylius_Repository_LocaleService')));
        $a->register('sylius.product', ($container->services['sylius.repository.product'] ?? $container->load('getSylius_Repository_ProductService')));
        $a->register('sylius.product_translation', ($container->services['sylius.repository.product_translation'] ?? $container->load('getSylius_Repository_ProductTranslationService')));
        $a->register('sylius.product_variant', ($container->services['sylius.repository.product_variant'] ?? $container->load('getSylius_Repository_ProductVariantService')));
        $a->register('sylius.product_variant_translation', ($container->services['sylius.repository.product_variant_translation'] ?? $container->load('getSylius_Repository_ProductVariantTranslationService')));
        $a->register('sylius.product_option', ($container->services['sylius.repository.product_option'] ?? $container->load('getSylius_Repository_ProductOptionService')));
        $a->register('sylius.product_option_translation', ($container->services['sylius.repository.product_option_translation'] ?? $container->load('getSylius_Repository_ProductOptionTranslationService')));
        $a->register('sylius.product_association_type', ($container->services['sylius.repository.product_association_type'] ?? $container->load('getSylius_Repository_ProductAssociationTypeService')));
        $a->register('sylius.product_association_type_translation', ($container->services['sylius.repository.product_association_type_translation'] ?? $container->load('getSylius_Repository_ProductAssociationTypeTranslationService')));
        $a->register('sylius.product_option_value', ($container->services['sylius.repository.product_option_value'] ?? $container->load('getSylius_Repository_ProductOptionValueService')));
        $a->register('sylius.product_option_value_translation', ($container->services['sylius.repository.product_option_value_translation'] ?? $container->load('getSylius_Repository_ProductOptionValueTranslationService')));
        $a->register('sylius.product_association', ($container->services['sylius.repository.product_association'] ?? $container->load('getSylius_Repository_ProductAssociationService')));
        $a->register('sylius.channel', ($container->services['sylius.repository.channel'] ?? $container->getSylius_Repository_ChannelService()));
        $a->register('sylius.product_attribute', ($container->services['sylius.repository.product_attribute'] ?? $container->load('getSylius_Repository_ProductAttributeService')));
        $a->register('sylius.product_attribute_translation', ($container->services['sylius.repository.product_attribute_translation'] ?? $container->load('getSylius_Repository_ProductAttributeTranslationService')));
        $a->register('sylius.product_attribute_value', ($container->services['sylius.repository.product_attribute_value'] ?? $container->load('getSylius_Repository_ProductAttributeValueService')));
        $a->register('sylius.tax_rate', ($container->services['sylius.repository.tax_rate'] ?? $container->load('getSylius_Repository_TaxRateService')));
        $a->register('sylius.tax_category', ($container->services['sylius.repository.tax_category'] ?? $container->load('getSylius_Repository_TaxCategoryService')));
        $a->register('sylius.shipment', ($container->services['sylius.repository.shipment'] ?? $container->load('getSylius_Repository_ShipmentService')));
        $a->register('sylius.shipment_unit', ($container->services['sylius.repository.shipment_unit'] ?? $container->load('getSylius_Repository_ShipmentUnitService')));
        $a->register('sylius.shipping_method', ($container->services['sylius.repository.shipping_method'] ?? $container->getSylius_Repository_ShippingMethodService()));
        $a->register('sylius.shipping_method_translation', ($container->services['sylius.repository.shipping_method_translation'] ?? $container->load('getSylius_Repository_ShippingMethodTranslationService')));
        $a->register('sylius.shipping_category', ($container->services['sylius.repository.shipping_category'] ?? $container->load('getSylius_Repository_ShippingCategoryService')));
        $a->register('sylius.shipping_method_rule', ($container->services['sylius.repository.shipping_method_rule'] ?? $container->load('getSylius_Repository_ShippingMethodRuleService')));
        $a->register('sylius.payment', ($container->services['sylius.repository.payment'] ?? $container->load('getSylius_Repository_PaymentService')));
        $a->register('sylius.payment_method', ($container->services['sylius.repository.payment_method'] ?? $container->getSylius_Repository_PaymentMethodService()));
        $a->register('sylius.payment_method_translation', ($container->services['sylius.repository.payment_method_translation'] ?? $container->load('getSylius_Repository_PaymentMethodTranslationService')));
        $a->register('sylius.promotion_subject', ($container->services['sylius.repository.promotion_subject'] ?? $container->load('getSylius_Repository_PromotionSubjectService')));
        $a->register('sylius.promotion', ($container->services['sylius.repository.promotion'] ?? $container->load('getSylius_Repository_PromotionService')));
        $a->register('sylius.promotion_coupon', ($container->services['sylius.repository.promotion_coupon'] ?? $container->load('getSylius_Repository_PromotionCouponService')));
        $a->register('sylius.promotion_rule', ($container->services['sylius.repository.promotion_rule'] ?? $container->load('getSylius_Repository_PromotionRuleService')));
        $a->register('sylius.promotion_action', ($container->services['sylius.repository.promotion_action'] ?? $container->load('getSylius_Repository_PromotionActionService')));
        $a->register('sylius.address', ($container->services['sylius.repository.address'] ?? $container->load('getSylius_Repository_AddressService')));
        $a->register('sylius.country', ($container->services['sylius.repository.country'] ?? $container->load('getSylius_Repository_CountryService')));
        $a->register('sylius.province', ($container->services['sylius.repository.province'] ?? $container->getSylius_Repository_ProvinceService()));
        $a->register('sylius.zone', ($container->services['sylius.repository.zone'] ?? $container->getSylius_Repository_ZoneService()));
        $a->register('sylius.zone_member', ($container->services['sylius.repository.zone_member'] ?? $container->load('getSylius_Repository_ZoneMemberService')));
        $a->register('sylius.address_log_entry', ($container->services['sylius.repository.address_log_entry'] ?? $container->load('getSylius_Repository_AddressLogEntryService')));
        $a->register('sylius.inventory_unit', ($container->services['sylius.repository.inventory_unit'] ?? $container->load('getSylius_Repository_InventoryUnitService')));
        $a->register('sylius.taxon', ($container->services['sylius.repository.taxon'] ?? $container->load('getSylius_Repository_TaxonService')));
        $a->register('sylius.taxon_translation', ($container->services['sylius.repository.taxon_translation'] ?? $container->load('getSylius_Repository_TaxonTranslationService')));
        $a->register('sylius.admin_user', ($container->services['sylius.repository.admin_user'] ?? $container->load('getSylius_Repository_AdminUserService')));
        $a->register('sylius.shop_user', ($container->services['sylius.repository.shop_user'] ?? $container->load('getSylius_Repository_ShopUserService')));
        $a->register('sylius.oauth_user', ($container->services['sylius.repository.oauth_user'] ?? $container->load('getSylius_Repository_OauthUserService')));
        $a->register('sylius.customer', ($container->services['sylius.repository.customer'] ?? $container->load('getSylius_Repository_CustomerService')));
        $a->register('sylius.customer_group', ($container->services['sylius.repository.customer_group'] ?? $container->load('getSylius_Repository_CustomerGroupService')));
        $a->register('sylius.product_review', ($container->services['sylius.repository.product_review'] ?? $container->load('getSylius_Repository_ProductReviewService')));
        $a->register('sylius.product_reviewer', ($container->services['sylius.repository.product_reviewer'] ?? $container->load('getSylius_Repository_ProductReviewerService')));
        $a->register('sylius.product_taxon', ($container->services['sylius.repository.product_taxon'] ?? $container->load('getSylius_Repository_ProductTaxonService')));
        $a->register('sylius.product_image', ($container->services['sylius.repository.product_image'] ?? $container->load('getSylius_Repository_ProductImageService')));
        $a->register('sylius.taxon_image', ($container->services['sylius.repository.taxon_image'] ?? $container->load('getSylius_Repository_TaxonImageService')));
        $a->register('sylius.channel_pricing', ($container->services['sylius.repository.channel_pricing'] ?? $container->load('getSylius_Repository_ChannelPricingService')));
        $a->register('sylius.avatar_image', ($container->services['sylius.repository.avatar_image'] ?? $container->load('getSylius_Repository_AvatarImageService')));
        $a->register('sylius.shop_billing_data', ($container->services['sylius.repository.shop_billing_data'] ?? $container->load('getSylius_Repository_ShopBillingDataService')));
        $a->register('sylius.payment_security_token', ($container->services['sylius.repository.payment_security_token'] ?? $container->load('getSylius_Repository_PaymentSecurityTokenService')));
        $a->register('sylius.gateway_config', ($container->services['sylius.repository.gateway_config'] ?? $container->load('getSylius_Repository_GatewayConfigService')));
        $a->register('sylius.api_user', ($container->services['sylius.repository.api_user'] ?? $container->load('getSylius_Repository_ApiUserService')));
        $a->register('sylius.api_client', ($container->services['sylius.repository.api_client'] ?? $container->load('getSylius_Repository_ApiClientService')));
        $a->register('sylius.api_access_token', ($container->services['sylius.repository.api_access_token'] ?? $container->load('getSylius_Repository_ApiAccessTokenService')));
        $a->register('sylius.api_refresh_token', ($container->services['sylius.repository.api_refresh_token'] ?? $container->load('getSylius_Repository_ApiRefreshTokenService')));
        $a->register('sylius.api_auth_code', ($container->services['sylius.repository.api_auth_code'] ?? $container->load('getSylius_Repository_ApiAuthCodeService')));

        return $container->services['sylius.form.type.resource_autocomplete_choice'] = new \Sylius\Bundle\ResourceBundle\Form\Type\ResourceAutocompleteChoiceType($a);
    }
}
