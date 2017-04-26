# OrderHeader

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

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


