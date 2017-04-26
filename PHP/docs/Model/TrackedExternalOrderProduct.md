# TrackedExternalOrderProduct

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_sku** | **string** | The product sku received related to the external order. | 
**product_title** | **string** | We tried to get the catalog product title based on the product SKU. This property can be null, if we cannot found the product. This is possible if the product is not referenced in the imported catalog. | [optional] 
**product_image_url** | **string** | We tried to get the catalog product image Url based on the product SKU. This property can be null, if we cannot found the product. This is possible if the product is not referenced in the imported catalog. | [optional] 
**product_active** | **bool** | We tried to get the catalog product if it&#39;s still active based on the product SKU. This property can be null, if we cannot found the product. This is possible if the product is not referenced in the imported catalog. | [optional] 
**product_id** | **string** | We tried to get the catalog product identifier based on the product SKU. This property can be null, if we cannot found the product. This is possible if the product is not referenced in the imported catalog. | [optional] 
**unit_price** | **string** | The product&#39;s unit price related to this external order. This property is voluntarily a string because the value could be an invalid one. | [optional] 
**quantity** | **string** | Indicate the product&#39;s quantity ordered. This property is voluntarily a string because the value could be an invalid one | [optional] 
**margin** | **string** | Indicate the product&#39;s margin related to this order. This property is voluntarily a string because the value could be an invalid one | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


