# TrackedExternalOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**utc_date** | [**\DateTime**](\DateTime.md) | The utc date of the external order. | 
**merchant_order_id** | **string** | The merchant order identifier | 
**visitor_id** | **string** | Can be null. The visitor identifier related to this external order | [optional] 
**total_amount** | **float** | The total amount related to the external order. | 
**currency_code** | [**\Swagger\Client\Model\BeezUPCommonCurrencyCode**](BeezUPCommonCurrencyCode.md) |  | 
**payment_validated** | **bool** | Indicate if the payment of this external order has been validated or not. | 
**products** | [**\Swagger\Client\Model\TrackedExternalOrderProduct[]**](TrackedExternalOrderProduct.md) | Can be null. the product list related to this external order. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


