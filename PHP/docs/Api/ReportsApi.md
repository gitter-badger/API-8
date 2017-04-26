# Swagger\Client\ReportsApi

All URIs are relative to *https://api.beezup.com/v2/user/catalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteReportFilter**](ReportsApi.md#deleteReportFilter) | **DELETE** /v2/user/analytics/{storeId}/reports/filters/{reportFilterId} | Delete the report filter
[**exportStoreReportByCategory**](ReportsApi.md#exportStoreReportByCategory) | **POST** /v2/user/analytics/{storeId}/reports/bycategory/export | Export the report by category
[**exportStoreReportByChannel**](ReportsApi.md#exportStoreReportByChannel) | **POST** /v2/user/analytics/{storeId}/reports/bychannel/export | Export the report by channel
[**exportStoreReportByProduct**](ReportsApi.md#exportStoreReportByProduct) | **POST** /v2/user/analytics/{storeId}/reports/byproduct/export | Export the report by product
[**getReportFilter**](ReportsApi.md#getReportFilter) | **GET** /v2/user/analytics/{storeId}/reports/filters/{reportFilterId} | Get the report filter description
[**getReportFilters**](ReportsApi.md#getReportFilters) | **GET** /v2/user/analytics/{storeId}/reports/filters | Get report filter list for the given store
[**getStoreReportByCategory**](ReportsApi.md#getStoreReportByCategory) | **POST** /v2/user/analytics/{storeId}/reports/bycategory | Get the report by category
[**getStoreReportByChannel**](ReportsApi.md#getStoreReportByChannel) | **POST** /v2/user/analytics/{storeId}/reports/bychannel | Get the report by channel
[**getStoreReportByDay**](ReportsApi.md#getStoreReportByDay) | **POST** /v2/user/analytics/{storeId}/reports/byday | Get the report by day
[**getStoreReportByDayExport**](ReportsApi.md#getStoreReportByDayExport) | **POST** /v2/user/analytics/{storeId}/reports/byday/export | Get the report by day
[**getStoreReportByProduct**](ReportsApi.md#getStoreReportByProduct) | **POST** /v2/user/analytics/{storeId}/reports/byproduct | Get the report by product
[**saveReportFilter**](ReportsApi.md#saveReportFilter) | **PUT** /v2/user/analytics/{storeId}/reports/filters/{reportFilterId} | Save the report filter


# **deleteReportFilter**
> deleteReportFilter($store_id, $report_filter_id)

Delete the report filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsApi();
$store_id = "store_id_example"; // string | Your store identifier
$report_filter_id = "report_filter_id_example"; // string | Your report filter identifier

try {
    $api_instance->deleteReportFilter($store_id, $report_filter_id);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->deleteReportFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **report_filter_id** | **string**| Your report filter identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportStoreReportByCategory**
> \Swagger\Client\Model\BeezUPCommonLink2[] exportStoreReportByCategory($store_id, $format, $request)

Export the report by category

Export the report by category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsApi();
$store_id = "store_id_example"; // string | Your store identifier
$format = "format_example"; // string | 
$request = new \Swagger\Client\Model\ReportByCategoryRequest(); // \Swagger\Client\Model\ReportByCategoryRequest | 

try {
    $result = $api_instance->exportStoreReportByCategory($store_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->exportStoreReportByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **format** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReportByCategoryRequest**](../Model/\Swagger\Client\Model\ReportByCategoryRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportStoreReportByChannel**
> \Swagger\Client\Model\BeezUPCommonLink2[] exportStoreReportByChannel($store_id, $format, $request)

Export the report by channel

Export the report by channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsApi();
$store_id = "store_id_example"; // string | Your store identifier
$format = "format_example"; // string | 
$request = new \Swagger\Client\Model\ReportByChannelRequest(); // \Swagger\Client\Model\ReportByChannelRequest | 

try {
    $result = $api_instance->exportStoreReportByChannel($store_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->exportStoreReportByChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **format** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReportByChannelRequest**](../Model/\Swagger\Client\Model\ReportByChannelRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportStoreReportByProduct**
> \Swagger\Client\Model\BeezUPCommonLink2[] exportStoreReportByProduct($store_id, $format, $request)

Export the report by product

Export the report by product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsApi();
$store_id = "store_id_example"; // string | Your store identifier
$format = "format_example"; // string | 
$request = new \Swagger\Client\Model\ReportByProductRequest(); // \Swagger\Client\Model\ReportByProductRequest | 

try {
    $result = $api_instance->exportStoreReportByProduct($store_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->exportStoreReportByProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **format** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReportByProductRequest**](../Model/\Swagger\Client\Model\ReportByProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportFilter**
> \Swagger\Client\Model\ReportFilter getReportFilter($store_id, $report_filter_id)

Get the report filter description

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsApi();
$store_id = "store_id_example"; // string | Your store identifier
$report_filter_id = "report_filter_id_example"; // string | Your report filter identifier

try {
    $result = $api_instance->getReportFilter($store_id, $report_filter_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **report_filter_id** | **string**| Your report filter identifier |

### Return type

[**\Swagger\Client\Model\ReportFilter**](../Model/ReportFilter.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportFilters**
> \Swagger\Client\Model\ReportFilters getReportFilters($store_id)

Get report filter list for the given store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsApi();
$store_id = "store_id_example"; // string | Your store identifier

try {
    $result = $api_instance->getReportFilters($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |

### Return type

[**\Swagger\Client\Model\ReportFilters**](../Model/ReportFilters.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByCategory**
> \Swagger\Client\Model\ReportByCategoryResponse getStoreReportByCategory($store_id, $request)

Get the report by category

Get the report by category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ReportByCategoryRequest(); // \Swagger\Client\Model\ReportByCategoryRequest | 

try {
    $result = $api_instance->getStoreReportByCategory($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getStoreReportByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ReportByCategoryRequest**](../Model/\Swagger\Client\Model\ReportByCategoryRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportByCategoryResponse**](../Model/ReportByCategoryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByChannel**
> \Swagger\Client\Model\ReportByChannelResponse getStoreReportByChannel($store_id, $request)

Get the report by channel

Get the report by channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ReportByChannelRequest(); // \Swagger\Client\Model\ReportByChannelRequest | 

try {
    $result = $api_instance->getStoreReportByChannel($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getStoreReportByChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ReportByChannelRequest**](../Model/\Swagger\Client\Model\ReportByChannelRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportByChannelResponse**](../Model/ReportByChannelResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByDay**
> \Swagger\Client\Model\ReportByDayResponse getStoreReportByDay($store_id, $request)

Get the report by day

Get the report by day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ReportByDayRequest(); // \Swagger\Client\Model\ReportByDayRequest | 

try {
    $result = $api_instance->getStoreReportByDay($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getStoreReportByDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ReportByDayRequest**](../Model/\Swagger\Client\Model\ReportByDayRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportByDayResponse**](../Model/ReportByDayResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByDayExport**
> \Swagger\Client\Model\BeezUPCommonLink2[] getStoreReportByDayExport($store_id, $format, $request)

Get the report by day

Get the report by day

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsApi();
$store_id = "store_id_example"; // string | Your store identifier
$format = "format_example"; // string | 
$request = new \Swagger\Client\Model\ReportByDayRequest(); // \Swagger\Client\Model\ReportByDayRequest | 

try {
    $result = $api_instance->getStoreReportByDayExport($store_id, $format, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getStoreReportByDayExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **format** | **string**|  |
 **request** | [**\Swagger\Client\Model\ReportByDayRequest**](../Model/\Swagger\Client\Model\ReportByDayRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BeezUPCommonLink2[]**](../Model/BeezUPCommonLink2.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreReportByProduct**
> \Swagger\Client\Model\ReportByProductResponse getStoreReportByProduct($store_id, $request)

Get the report by product

Get the report by product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsApi();
$store_id = "store_id_example"; // string | Your store identifier
$request = new \Swagger\Client\Model\ReportByProductRequest(); // \Swagger\Client\Model\ReportByProductRequest | 

try {
    $result = $api_instance->getStoreReportByProduct($store_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getStoreReportByProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **request** | [**\Swagger\Client\Model\ReportByProductRequest**](../Model/\Swagger\Client\Model\ReportByProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportByProductResponse**](../Model/ReportByProductResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveReportFilter**
> saveReportFilter($store_id, $report_filter_id, $report_filter)

Save the report filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ReportsApi();
$store_id = "store_id_example"; // string | Your store identifier
$report_filter_id = "report_filter_id_example"; // string | Your report filter identifier
$report_filter = new \Swagger\Client\Model\SaveReportFilterRequest(); // \Swagger\Client\Model\SaveReportFilterRequest | 

try {
    $api_instance->saveReportFilter($store_id, $report_filter_id, $report_filter);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->saveReportFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **report_filter_id** | **string**| Your report filter identifier |
 **report_filter** | [**\Swagger\Client\Model\SaveReportFilterRequest**](../Model/\Swagger\Client\Model\SaveReportFilterRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

