# Swagger\Client\FriendsApi

All URIs are relative to *https://api.beezup.com/v2/user/catalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFriendInfo**](FriendsApi.md#getFriendInfo) | **GET** /v2/user/customer/friends/{userId} | Get friend information


# **getFriendInfo**
> \Swagger\Client\Model\UserFriendInfo getFriendInfo($user_id)

Get friend information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\FriendsApi();
$user_id = "user_id_example"; // string | Your friend user id

try {
    $result = $api_instance->getFriendInfo($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FriendsApi->getFriendInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Your friend user id |

### Return type

[**\Swagger\Client\Model\UserFriendInfo**](../Model/UserFriendInfo.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

