# Swagger\Client\AutoTransitionsApi

All URIs are relative to *https://api.beezup.com/v2/user/catalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configureAutomaticTransitions**](AutoTransitionsApi.md#configureAutomaticTransitions) | **POST** /v2/user/marketplaces/orders/automaticTransitions | Configure automatic order status transitions
[**getAutomaticTransitions**](AutoTransitionsApi.md#getAutomaticTransitions) | **GET** /v2/user/marketplaces/orders/automaticTransitions | Get automatic order status transition list


# **configureAutomaticTransitions**
> configureAutomaticTransitions($request)

Configure automatic order status transitions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\AutoTransitionsApi();
$request = new \Swagger\Client\Model\SaveAutomaticTransitionRequest(); // \Swagger\Client\Model\SaveAutomaticTransitionRequest | 

try {
    $api_instance->configureAutomaticTransitions($request);
} catch (Exception $e) {
    echo 'Exception when calling AutoTransitionsApi->configureAutomaticTransitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SaveAutomaticTransitionRequest**](../Model/\Swagger\Client\Model\SaveAutomaticTransitionRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAutomaticTransitions**
> \Swagger\Client\Model\AutomaticTransitionInfos getAutomaticTransitions()

Get automatic order status transition list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\AutoTransitionsApi();

try {
    $result = $api_instance->getAutomaticTransitions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoTransitionsApi->getAutomaticTransitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AutomaticTransitionInfos**](../Model/AutomaticTransitionInfos.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

