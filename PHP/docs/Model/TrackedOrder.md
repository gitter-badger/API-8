# TrackedOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**utc_date** | [**\DateTime**](\DateTime.md) | The utc date of the order. | 
**channel_id** | [**\Swagger\Client\Model\BeezUPCommonChannelId**](BeezUPCommonChannelId.md) |  | 
**merchant_order_id** | **string** | The merchant order identifier | 
**total_amount** | **float** | The total amount related to the order. | 
**currency_code** | [**\Swagger\Client\Model\BeezUPCommonCurrencyCode**](BeezUPCommonCurrencyCode.md) |  | 
**payment_validated** | **bool** | Indicate if the payment of this order has been validated or not. | 
**products** | [**\Swagger\Client\Model\TrackedOrderProduct[]**](TrackedOrderProduct.md) | the product list related to this order. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


