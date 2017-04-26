# Swagger\Client\OneOrderApi

All URIs are relative to *https://api.beezup.com/v2/user/catalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeOrder**](OneOrderApi.md#changeOrder) | **POST** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/{changeOrderType} | Change order status
[**clearMerchantOrderInfo**](OneOrderApi.md#clearMerchantOrderInfo) | **POST** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/clearMerchantOrderInfo | Clear the merchant info related to this order
[**getOrder**](OneOrderApi.md#getOrder) | **GET** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId} | Get order details
[**getOrderHistory**](OneOrderApi.md#getOrderHistory) | **GET** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/history | Get the harvest history and the change status operations
[**harvestOrder**](OneOrderApi.md#harvestOrder) | **POST** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/harvest | Harvest a specific order from the marketplace
[**setMerchantOrderInfo**](OneOrderApi.md#setMerchantOrderInfo) | **POST** /v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/setMerchantOrderInfo | Associate your merchant order identifier to this order


# **changeOrder**
> \Swagger\Client\Model\ChangeOrderResponse changeOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $change_order_type, $user_name, $request, $test_mode)

Change order status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\OneOrderApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The order BeezUP identifier
$change_order_type = "change_order_type_example"; // string | The order change type
$user_name = "user_name_example"; // string | Sometimes the user in the e-commerce application is not the same than the subscription key you indicate in your settings. We recommand you to indicate the login of the user in your appplication.
$request = new \Swagger\Client\Model\ChangeOrderRequest(); // \Swagger\Client\Model\ChangeOrderRequest | 
$test_mode = false; // bool | If true, the operation will be be commited. But the validation will be taken in account.

try {
    $result = $api_instance->changeOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $change_order_type, $user_name, $request, $test_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OneOrderApi->changeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The order BeezUP identifier |
 **change_order_type** | **string**| The order change type |
 **user_name** | **string**| Sometimes the user in the e-commerce application is not the same than the subscription key you indicate in your settings. We recommand you to indicate the login of the user in your appplication. |
 **request** | [**\Swagger\Client\Model\ChangeOrderRequest**](../Model/\Swagger\Client\Model\ChangeOrderRequest.md)|  |
 **test_mode** | **bool**| If true, the operation will be be commited. But the validation will be taken in account. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ChangeOrderResponse**](../Model/ChangeOrderResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearMerchantOrderInfo**
> clearMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id)

Clear the merchant info related to this order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\OneOrderApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The order BeezUP identifier

try {
    $api_instance->clearMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id);
} catch (Exception $e) {
    echo 'Exception when calling OneOrderApi->clearMerchantOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The order BeezUP identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \Swagger\Client\Model\Order getOrder($marketplace_technical_code, $account_id, $beez_up_order_id)

Get order details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\OneOrderApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The order BeezUP identifier

try {
    $result = $api_instance->getOrder($marketplace_technical_code, $account_id, $beez_up_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OneOrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The order BeezUP identifier |

### Return type

[**\Swagger\Client\Model\Order**](../Model/Order.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderHistory**
> \Swagger\Client\Model\OrderHistory getOrderHistory($marketplace_technical_code, $account_id, $beez_up_order_id)

Get the harvest history and the change status operations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\OneOrderApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The order BeezUP identifier

try {
    $result = $api_instance->getOrderHistory($marketplace_technical_code, $account_id, $beez_up_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OneOrderApi->getOrderHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The order BeezUP identifier |

### Return type

[**\Swagger\Client\Model\OrderHistory**](../Model/OrderHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **harvestOrder**
> harvestOrder($marketplace_technical_code, $account_id, $beez_up_order_id)

Harvest a specific order from the marketplace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\OneOrderApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The order BeezUP identifier

try {
    $api_instance->harvestOrder($marketplace_technical_code, $account_id, $beez_up_order_id);
} catch (Exception $e) {
    echo 'Exception when calling OneOrderApi->harvestOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The order BeezUP identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setMerchantOrderInfo**
> setMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $request)

Associate your merchant order identifier to this order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\OneOrderApi();
$marketplace_technical_code = "Amazon"; // string | The marketplace technical code
$account_id = 1001; // int | The account identifier
$beez_up_order_id = "00000000000000000000000000000000000000000000000"; // string | The order BeezUP identifier
$request = new \Swagger\Client\Model\SetMerchantOrderInfoRequest(); // \Swagger\Client\Model\SetMerchantOrderInfoRequest | 

try {
    $api_instance->setMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling OneOrderApi->setMerchantOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| The marketplace technical code |
 **account_id** | **int**| The account identifier |
 **beez_up_order_id** | **string**| The order BeezUP identifier |
 **request** | [**\Swagger\Client\Model\SetMerchantOrderInfoRequest**](../Model/\Swagger\Client\Model\SetMerchantOrderInfoRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

