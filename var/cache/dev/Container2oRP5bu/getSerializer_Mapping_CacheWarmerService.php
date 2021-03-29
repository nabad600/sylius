<?php

namespace Container2oRP5bu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Mapping_CacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php';

        return $container->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService())), 1 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Address.xml')), 2 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Adjustment.xml')), 3 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/AdminUser.xml')), 4 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/AvatarImage.xml')), 5 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Channel.xml')), 6 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ChannelPricing.xml')), 7 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Commands/Account/ChangePasswordShopUser.xml')), 8 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Commands/Account/ChangePaymentMethod.xml')), 9 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Commands/Account/RegisterShopUser.xml')), 10 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Commands/Cart/AddItemToCart.xml')), 11 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Commands/Cart/ApplyCouponToCart.xml')), 12 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Commands/Cart/ChangeItemQuantityInCart.xml')), 13 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Commands/Cart/PickupCart.xml')), 14 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Commands/Cart/RemoveItemFromCart.xml')), 15 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Commands/Checkout/AddressOrder.xml')), 16 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Commands/Checkout/ChoosePaymentMethod.xml')), 17 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Commands/Checkout/ChooseShippingMethod.xml')), 18 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Commands/Checkout/CompleteOrder.xml')), 19 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Country.xml')), 20 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Currency.xml')), 21 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Customer.xml')), 22 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/CustomerGroup.xml')), 23 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ExchangeRate.xml')), 24 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Locale.xml')), 25 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Order.xml')), 26 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/OrderItem.xml')), 27 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/OrderItemUnit.xml')), 28 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Payment.xml')), 29 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/PaymentMethod.xml')), 30 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Product.xml')), 31 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ProductAssociationType.xml')), 32 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ProductAssociationTypeTranslation.xml')), 33 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ProductImage.xml')), 34 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ProductOption.xml')), 35 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ProductOptionTranslation.xml')), 36 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ProductOptionValue.xml')), 37 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ProductOptionValueTranslation.xml')), 38 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ProductReview.xml')), 39 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ProductTaxon.xml')), 40 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ProductTranslation.xml')), 41 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ProductVariant.xml')), 42 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ProductVariantTranslation.xml')), 43 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Promotion.xml')), 44 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Province.xml')), 45 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Shipment.xml')), 46 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ShippingCategory.xml')), 47 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ShippingMethod.xml')), 48 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ShippingMethodTranslation.xml')), 49 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ShopBillingData.xml')), 50 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/TaxCategory.xml')), 51 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Taxon.xml')), 52 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/TaxonTranslation.xml')), 53 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/View/CartShippingMethod.xml')), 54 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/Zone.xml')), 55 => new \Symfony\Component\Serializer\Mapping\Loader\XmlFileLoader((\dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/ApiBundle/Resources/config/serialization/ZoneMember.xml'))], ($container->targetDir.''.'/serialization.php'));
    }
}