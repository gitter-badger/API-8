# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_technical_code** | [**\Swagger\Client\Model\MarketplaceTechnicalCode**](MarketplaceTechnicalCode.md) |  | 
**account_id** | [**\Swagger\Client\Model\AccountId**](AccountId.md) |  | 
**beez_up_order_id** | [**\Swagger\Client\Model\BeezUPOrderId**](BeezUPOrderId.md) |  | 
**marketplace_business_code** | [**\Swagger\Client\Model\MarketplaceBusinessCode**](MarketplaceBusinessCode.md) |  | 
**order_marketplace_order_id** | [**\Swagger\Client\Model\MarketplaceOrderId**](MarketplaceOrderId.md) |  | 
**order_status_beez_up_order_status** | [**\Swagger\Client\Model\BeezUPOrderStatus**](BeezUPOrderStatus.md) |  | 
**order_status_marketplace_order_status** | [**\Swagger\Client\Model\MarketplaceOrderStatus**](MarketplaceOrderStatus.md) |  | [optional] 
**order_merchant_order_id** | [**\Swagger\Client\Model\OrderMerchantOrderId**](OrderMerchantOrderId.md) |  | [optional] 
**order_merchant_e_commerce_software_name** | [**\Swagger\Client\Model\OrderMerchantECommerceSoftwareName**](OrderMerchantECommerceSoftwareName.md) |  | [optional] 
**order_merchant_e_commerce_software_version** | [**\Swagger\Client\Model\OrderMerchantECommerceSoftwareVersion**](OrderMerchantECommerceSoftwareVersion.md) |  | [optional] 
**order_purchase_utc_date** | [**\DateTime**](\DateTime.md) | The purchase date of this order | 
**order_last_modification_utc_date** | [**\DateTime**](\DateTime.md) | The last modification UTC date done by BeezUP of this order. | 
**order_marketplace_last_modification_utc_date** | [**\DateTime**](\DateTime.md) | The last modification UTC date done by the marketplace on this order. | 
**order_buyer_name** | [**\Swagger\Client\Model\OrderBuyerName**](OrderBuyerName.md) |  | [optional] 
**order_total_price** | **float** | The total price of this order (corresponding to the amount paid by the customer) | [optional] 
**order_currency_code** | [**\Swagger\Client\Model\BeezUPCommonCurrencyCode**](BeezUPCommonCurrencyCode.md) |  | [optional] 
**processing** | [**\Swagger\Client\Model\Processing**](Processing.md) |  | 
**e_tag** | **string** | ETag value to identify the order. For more details go to this link: http://tools.ietf.org/html/rfc7232#section-2.3 | 
**links** | [**\Swagger\Client\Model\BeezUPCommonLink2[]**](BeezUPCommonLink2.md) |  | 
**order_market_place_channel** | **string** | Useful to identify the origin of the order. For example in Amazon. | [optional] 
**order_total_tax** | **float** | The total tax of this order | [optional] 
**order_total_commission** | **float** | The total commission of this order | [optional] 
**order_payment_method** | **string** | The payment method of this order | [optional] 
**order_paying_utc_date** | [**\DateTime**](\DateTime.md) | The UTC date of the payment of this order | [optional] 
**order_comment** | **string** | The comment associated to this order | [optional] 
**order_shipping_civility** | **string** | The civility of the person in the shipping address for this order | [optional] 
**order_shipping_company_name** | **string** | The company name of the shipping address for this order | [optional] 
**order_shipping_address_name** | **string** | The name of the person in the shipping address for this order | [optional] 
**order_shipping_email** | **string** | The email of the person in the shipping address for this order | [optional] 
**order_shipping_address_line1** | **string** | The shipping address line 1 of this order | [optional] 
**order_shipping_address_line2** | **string** | The shipping address line 2 of this order | [optional] 
**order_shipping_address_line3** | **string** | The shipping address line 3 of this order | [optional] 
**order_shipping_address_postal_code** | **string** | The shipping address postal code of this order | [optional] 
**order_shipping_address_city** | **string** | The shipping address city of this order | [optional] 
**order_shipping_address_state_or_region** | **string** | The shipping address state or region of this order | [optional] 
**order_shipping_address_country_name** | **string** | The shipping address country name | [optional] 
**order_shipping_address_country_iso_code_alpha2** | **string** | The shipping address country iso code alpha 2 (see http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Decoding_table for more details) | [optional] 
**order_shipping_phone** | **string** | The phone number of the person in the shipping address for this order | [optional] 
**order_shipping_mobile_phone** | **string** | The mobile phone number of the person in the shipping address for this order | [optional] 
**order_shipping_price** | **float** | The shipping price of this order | [optional] 
**order_shipping_method** | **string** | The shipping method of this order | [optional] 
**order_shipping_shipping_tax** | **float** | The shipping tax for this order | [optional] 
**order_shipping_earliest_ship_utc_date** | [**\DateTime**](\DateTime.md) | The UTC date of the earliest ship for this order | [optional] 
**order_shipping_latest_ship_utc_date** | [**\DateTime**](\DateTime.md) | The UTC date of the latest ship for this order | [optional] 
**order_buyer_identifier** | **string** | The buyer identifier for this order | [optional] 
**order_buyer_civility** | **string** | The buyer civility for this order | [optional] 
**order_buyer_company_name** | **string** | The buyer company name for this order | [optional] 
**order_buyer_email** | **string** | The email of the buyer for this order | [optional] 
**order_buyer_address_line1** | **string** | The Buyer address line 1 of this order | [optional] 
**order_buyer_address_line2** | **string** | The Buyer address line 2 of this order | [optional] 
**order_buyer_address_line3** | **string** | The Buyer address line 3 of this order | [optional] 
**order_buyer_address_postal_code** | **string** | The Buyer address postal code of this order | [optional] 
**order_buyer_address_city** | **string** | The Buyer address city of this order | [optional] 
**order_buyer_address_state_or_region** | **string** | The Buyer address state or region of this order | [optional] 
**order_buyer_address_country_name** | **string** | The Buyer address country name | [optional] 
**order_buyer_address_country_iso_code_alpha2** | **string** | The Buyer address country iso code alpha 2 (see http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Decoding_table for more details) | [optional] 
**order_buyer_phone** | **string** | The phone number of the buyer for this order | [optional] 
**order_buyer_mobile_phone** | **string** | The mobile phone number of the buyer for this order | [optional] 
**order_order_source_uri** | **string** | Technical information: The url to the source of this order. We received this information from the marketplace. | [optional] 
**order_order_items_source_uri** | **string** | Technical information: The url to the source of this order items. We received this information from the marketplace. | [optional] 
**order_items** | [**\Swagger\Client\Model\OrderItem[]**](OrderItem.md) |  | 
**transition_links** | [**\Swagger\Client\Model\BeezUPCommonLink2[]**](BeezUPCommonLink2.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


