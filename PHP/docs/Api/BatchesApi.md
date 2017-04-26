# Swagger\Client\BatchesApi

All URIs are relative to *https://api.beezup.com/v2/user/catalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeOrderList**](BatchesApi.md#changeOrderList) | **POST** /v2/user/marketplaces/orders/batches/changeOrders/{changeOrderType} | Batches the change order operation.
[**clearMerchantOrderInfoList**](BatchesApi.md#clearMerchantOrderInfoList) | **POST** /v2/user/marketplaces/orders/batches/clearMerchantOrderInfos | Batches the clear merchant order info operation.
[**setMerchantOrderInfoList**](BatchesApi.md#setMerchantOrderInfoList) | **POST** /v2/user/marketplaces/orders/batches/setMerchantOrderInfos | Batches the set merchant order info operation.


# **changeOrderList**
> changeOrderList($change_order_type, $user_name, $request, $test_mode)

Batches the change order operation.

The purpose of this  operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BatchesApi();
$change_order_type = "change_order_type_example"; // string | The order change type
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same than the subscription key you indicate in your settings. We recommand you to indicate the login of the user in your appplication.
$request = new \Swagger\Client\Model\ChangeOrderListRequest(); // \Swagger\Client\Model\ChangeOrderListRequest | 
$test_mode = false; // bool | If true, the operation will be be commited. But the validation will be taken in account.

try {
    $api_instance->changeOrderList($change_order_type, $user_name, $request, $test_mode);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->changeOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_order_type** | **string**| The order change type |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same than the subscription key you indicate in your settings. We recommand you to indicate the login of the user in your appplication. |
 **request** | [**\Swagger\Client\Model\ChangeOrderListRequest**](../Model/\Swagger\Client\Model\ChangeOrderListRequest.md)|  |
 **test_mode** | **bool**| If true, the operation will be be commited. But the validation will be taken in account. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearMerchantOrderInfoList**
> clearMerchantOrderInfoList($request)

Batches the clear merchant order info operation.

The purpose of this  operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BatchesApi();
$request = new \Swagger\Client\Model\ClearMerchantOrderInfoListRequest(); // \Swagger\Client\Model\ClearMerchantOrderInfoListRequest | 

try {
    $api_instance->clearMerchantOrderInfoList($request);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->clearMerchantOrderInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ClearMerchantOrderInfoListRequest**](../Model/\Swagger\Client\Model\ClearMerchantOrderInfoListRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMerchantOrderInfoList**
> setMerchantOrderInfoList($request)

Batches the set merchant order info operation.

The purpose of this  operation is to reduce the amount of request to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\BatchesApi();
$request = new \Swagger\Client\Model\SetMerchantOrderInfoListRequest(); // \Swagger\Client\Model\SetMerchantOrderInfoListRequest | 

try {
    $api_instance->setMerchantOrderInfoList($request);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->setMerchantOrderInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SetMerchantOrderInfoListRequest**](../Model/\Swagger\Client\Model\SetMerchantOrderInfoListRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

