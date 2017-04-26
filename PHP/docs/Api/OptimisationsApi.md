# Swagger\Client\OptimisationsApi

All URIs are relative to *https://api.beezup.com/v2/user/catalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**optimise**](OptimisationsApi.md#optimise) | **POST** /v2/user/analytics/{storeId}/optimisations/{actionName} | Optimise products
[**optimiseByCategory**](OptimisationsApi.md#optimiseByCategory) | **POST** /v2/user/analytics/{storeId}/optimisations/bycategory/{categoryId}/{actionName} | Optimise products&#39;s category
[**optimiseByChannel**](OptimisationsApi.md#optimiseByChannel) | **POST** /v2/user/analytics/{storeId}/optimisations/bychannel/{channelId}/{actionName} | Optimise products&#39;s category
[**optimiseByProduct**](OptimisationsApi.md#optimiseByProduct) | **POST** /v2/user/analytics/{storeId}/optimisations/byproduct/{productId}/{actionName} | Optimise products


# **optimise**
> optimise($store_id, $action_name, $request)

Optimise products

/!\\ WARNING /!\\ \\ Apply the operation on every product related to this request. \\ This operation is used at the bottom of the analytics page result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\OptimisationsApi();
$store_id = "store_id_example"; // string | Your store identifier
$action_name = "action_name_example"; // string | 
$request = new \Swagger\Client\Model\OptimiseRequest(); // \Swagger\Client\Model\OptimiseRequest | 

try {
    $api_instance->optimise($store_id, $action_name, $request);
} catch (Exception $e) {
    echo 'Exception when calling OptimisationsApi->optimise: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **action_name** | **string**|  |
 **request** | [**\Swagger\Client\Model\OptimiseRequest**](../Model/\Swagger\Client\Model\OptimiseRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimiseByCategory**
> optimiseByCategory($store_id, $category_id, $action_name, $request)

Optimise products's category

/!\\ WARNING /!\\ \\ This operation will reenable or disable products's category for every channel indicated in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\OptimisationsApi();
$store_id = "store_id_example"; // string | Your store identifier
$category_id = "category_id_example"; // string | The category identifier concerned by this optimisation
$action_name = "action_name_example"; // string | 
$request = array(new string[]()); // string[] | The channel identifier list concerned by this optimisation

try {
    $api_instance->optimiseByCategory($store_id, $category_id, $action_name, $request);
} catch (Exception $e) {
    echo 'Exception when calling OptimisationsApi->optimiseByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **category_id** | **string**| The category identifier concerned by this optimisation |
 **action_name** | **string**|  |
 **request** | **string[]**| The channel identifier list concerned by this optimisation | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimiseByChannel**
> optimiseByChannel($store_id, $channel_id, $action_name)

Optimise products's category

/!\\ WARNING /!\\ \\ Apply the operation on every product on this channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\OptimisationsApi();
$store_id = "store_id_example"; // string | Your store identifier
$channel_id = "channel_id_example"; // string | The channel identifier concerned by this optimisation
$action_name = "action_name_example"; // string | 

try {
    $api_instance->optimiseByChannel($store_id, $channel_id, $action_name);
} catch (Exception $e) {
    echo 'Exception when calling OptimisationsApi->optimiseByChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **channel_id** | **string**| The channel identifier concerned by this optimisation |
 **action_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimiseByProduct**
> optimiseByProduct($store_id, $product_id, $action_name, $request)

Optimise products

/!\\ WARNING /!\\ \\ This operation will reenable or disable this product for every channel indicated in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\OptimisationsApi();
$store_id = "store_id_example"; // string | Your store identifier
$product_id = "product_id_example"; // string | The product identifier concerned by this optimisation
$action_name = "action_name_example"; // string | 
$request = array(new string[]()); // string[] | The channel identifier list concerned by this optimisation

try {
    $api_instance->optimiseByProduct($store_id, $product_id, $action_name, $request);
} catch (Exception $e) {
    echo 'Exception when calling OptimisationsApi->optimiseByProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **product_id** | **string**| The product identifier concerned by this optimisation |
 **action_name** | **string**|  |
 **request** | **string[]**| The channel identifier list concerned by this optimisation | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

