# Swagger\Client\ProductOverridesApi

All URIs are relative to *https://api.beezup.com/v2/user/catalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteChannelCatalogProductValueOverride**](ProductOverridesApi.md#deleteChannelCatalogProductValueOverride) | **DELETE** /v2/user/channelCatalogs/{channelCatalogId}/products/{productId}/overrides/{channelColumnId} | Delete a specific channel catalog product value override
[**overrideChannelCatalogProductOverrides**](ProductOverridesApi.md#overrideChannelCatalogProductOverrides) | **PUT** /v2/user/channelCatalogs/{channelCatalogId}/products/{productId}/overrides | Override channel catalog product values


# **deleteChannelCatalogProductValueOverride**
> deleteChannelCatalogProductValueOverride($channel_catalog_id, $product_id, $channel_column_id)

Delete a specific channel catalog product value override

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductOverridesApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier
$channel_column_id = "8a76f06a-fefc-4c0d-bcfe-b210f1482977"; // string | The channel column identifier

try {
    $api_instance->deleteChannelCatalogProductValueOverride($channel_catalog_id, $product_id, $channel_column_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductOverridesApi->deleteChannelCatalogProductValueOverride: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |
 **channel_column_id** | **string**| The channel column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **overrideChannelCatalogProductOverrides**
> overrideChannelCatalogProductOverrides($channel_catalog_id, $product_id, $request)

Override channel catalog product values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductOverridesApi();
$channel_catalog_id = "6d6b04de-406b-4539-8e7e-bf3e8da5dfb0"; // string | The channel catalog identifier
$product_id = "578419df-1bbf-41a6-96fa-862e42182b67"; // string | The product identifier
$request = new \Swagger\Client\Model\ProductOverrides(); // \Swagger\Client\Model\ProductOverrides | 

try {
    $api_instance->overrideChannelCatalogProductOverrides($channel_catalog_id, $product_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling ProductOverridesApi->overrideChannelCatalogProductOverrides: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_catalog_id** | **string**| The channel catalog identifier |
 **product_id** | **string**| The product identifier |
 **request** | [**\Swagger\Client\Model\ProductOverrides**](../Model/\Swagger\Client\Model\ProductOverrides.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

