# Swagger\Client\PublicationsApi

All URIs are relative to *https://api.beezup.com/v2/user/catalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPublications**](PublicationsApi.md#getPublications) | **GET** /v2/user/marketplaces/channelcatalogs/publications/{marketplaceTechnicalCode}/{accountId}/history | Fetch the publication history for an account, sorted by descending start date


# **getPublications**
> \Swagger\Client\Model\AccountPublications getPublications($marketplace_technical_code, $account_id, $channel_catalog_id, $count, $publication_types)

Fetch the publication history for an account, sorted by descending start date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\PublicationsApi();
$marketplace_technical_code = "marketplace_technical_code_example"; // string | Marketplace Technical Code to query (required)
$account_id = 56; // int | Account Id to query (required)
$channel_catalog_id = "channel_catalog_id_example"; // string | Channel Catalog Id by which to filter (optional)
$count = 10; // int | Amount of entries to fetch (optional, default set to 10)
$publication_types = array("publication_types_example"); // string[] | Publication types by which to filter (optional)

try {
    $result = $api_instance->getPublications($marketplace_technical_code, $account_id, $channel_catalog_id, $count, $publication_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->getPublications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_technical_code** | **string**| Marketplace Technical Code to query (required) |
 **account_id** | **int**| Account Id to query (required) |
 **channel_catalog_id** | **string**| Channel Catalog Id by which to filter (optional) | [optional]
 **count** | **int**| Amount of entries to fetch (optional, default set to 10) | [optional] [default to 10]
 **publication_types** | [**string[]**](../Model/string.md)| Publication types by which to filter (optional) | [optional]

### Return type

[**\Swagger\Client\Model\AccountPublications**](../Model/AccountPublications.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

