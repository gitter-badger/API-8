# Swagger\Client\RightsApi

All URIs are relative to *https://api.beezup.com/v2/user/catalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRights**](RightsApi.md#getRights) | **POST** /v2/user/customer/stores/{storeId}/rights | Get store&#39;s rights


# **getRights**
> \Swagger\Client\Model\FunctionalityRightInfo[] getRights($store_id, $functionality_code_list)

Get store's rights

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\RightsApi();
$store_id = "store_id_example"; // string | Your store identifier
$functionality_code_list = array(new string[]()); // string[] | The functionality code list you want to check

try {
    $result = $api_instance->getRights($store_id, $functionality_code_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RightsApi->getRights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **functionality_code_list** | **string[]**| The functionality code list you want to check |

### Return type

[**\Swagger\Client\Model\FunctionalityRightInfo[]**](../Model/FunctionalityRightInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

