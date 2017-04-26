# Swagger\Client\ImportationCatalogInfoApi

All URIs are relative to *https://api.beezup.com/v2/user/catalogs*

Method | HTTP request | Description
------------- | ------------- | -------------
[**importationConfigureCatalogColumn**](ImportationCatalogInfoApi.md#importationConfigureCatalogColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId} | Configure catalog column
[**importationDeleteCustomColumn**](ImportationCatalogInfoApi.md#importationDeleteCustomColumn) | **DELETE** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId} | Delete Custom Column
[**importationGetCustomColumnExpression**](ImportationCatalogInfoApi.md#importationGetCustomColumnExpression) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId}/expression | Get the encrypted custom column expression in this importation
[**importationGetCustomColumns**](ImportationCatalogInfoApi.md#importationGetCustomColumns) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns | Get custom columns currently place in this importation
[**importationGetDetectedCatalogColumns**](ImportationCatalogInfoApi.md#importationGetDetectedCatalogColumns) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns | Get detected catalog columns during this importation.
[**importationGetProductSample**](ImportationCatalogInfoApi.md#importationGetProductSample) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/productSamples/{productSampleIndex} | Get the product sample related to this importation with all columns (catalog and custom)
[**importationGetProductSampleCustomColumnValue**](ImportationCatalogInfoApi.md#importationGetProductSampleCustomColumnValue) | **GET** /v2/user/catalogs/{storeId}/importations/{executionId}/productSamples/{productSampleIndex}/customColumns/{columnId} | Get product sample custom column value related to this importation.
[**importationIgnoreColumn**](ImportationCatalogInfoApi.md#importationIgnoreColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/ignore | Ignore Column
[**importationMapCatalogColumn**](ImportationCatalogInfoApi.md#importationMapCatalogColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/map | Map catalog column to a BeezUP column
[**importationMapCustomColumn**](ImportationCatalogInfoApi.md#importationMapCustomColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId}/map | Map custom column to a BeezUP column
[**importationReattendColumn**](ImportationCatalogInfoApi.md#importationReattendColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/reattend | Reattend Column
[**importationSaveCustomColumn**](ImportationCatalogInfoApi.md#importationSaveCustomColumn) | **PUT** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId} | Create or replace a custom column
[**importationUnmapCatalogColumn**](ImportationCatalogInfoApi.md#importationUnmapCatalogColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/catalogColumns/{columnId}/unmap | Unmap catalog column
[**importationUnmapCustomColumn**](ImportationCatalogInfoApi.md#importationUnmapCustomColumn) | **POST** /v2/user/catalogs/{storeId}/importations/{executionId}/customColumns/{columnId}/unmap | Unmap custom column


# **importationConfigureCatalogColumn**
> importationConfigureCatalogColumn($store_id, $execution_id, $column_id, $request)

Configure catalog column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\ConfigureCatalogColumnCatalogRequest(); // \Swagger\Client\Model\ConfigureCatalogColumnCatalogRequest | 

try {
    $api_instance->importationConfigureCatalogColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationConfigureCatalogColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\ConfigureCatalogColumnCatalogRequest**](../Model/\Swagger\Client\Model\ConfigureCatalogColumnCatalogRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationDeleteCustomColumn**
> importationDeleteCustomColumn($store_id, $execution_id, $column_id)

Delete Custom Column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->importationDeleteCustomColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationDeleteCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetCustomColumnExpression**
> string importationGetCustomColumnExpression($store_id, $execution_id, $column_id)

Get the encrypted custom column expression in this importation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $result = $api_instance->importationGetCustomColumnExpression($store_id, $execution_id, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationGetCustomColumnExpression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetCustomColumns**
> \Swagger\Client\Model\CustomColumns[] importationGetCustomColumns($store_id, $execution_id)

Get custom columns currently place in this importation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $result = $api_instance->importationGetCustomColumns($store_id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationGetCustomColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

[**\Swagger\Client\Model\CustomColumns[]**](../Model/CustomColumns.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetDetectedCatalogColumns**
> \Swagger\Client\Model\DetectedCatalogColumns importationGetDetectedCatalogColumns($store_id, $execution_id)

Get detected catalog columns during this importation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation

try {
    $result = $api_instance->importationGetDetectedCatalogColumns($store_id, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationGetDetectedCatalogColumns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |

### Return type

[**\Swagger\Client\Model\DetectedCatalogColumns**](../Model/DetectedCatalogColumns.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetProductSample**
> \Swagger\Client\Model\ProductSample importationGetProductSample($store_id, $execution_id, $product_sample_index)

Get the product sample related to this importation with all columns (catalog and custom)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$product_sample_index = 56; // int | Index of the product sample. Starting from 0 to 99.

try {
    $result = $api_instance->importationGetProductSample($store_id, $execution_id, $product_sample_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationGetProductSample: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **product_sample_index** | **int**| Index of the product sample. Starting from 0 to 99. |

### Return type

[**\Swagger\Client\Model\ProductSample**](../Model/ProductSample.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationGetProductSampleCustomColumnValue**
> string importationGetProductSampleCustomColumnValue($store_id, $execution_id, $product_sample_index, $column_id)

Get product sample custom column value related to this importation.

/!\\ Use this operation only when you just changed the custom column expression and you want to get a precise the property value. Otherwise use the operation Importation_GetProductSample which will give you all property values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$product_sample_index = 56; // int | Index of the product sample. Starting from 0 to 99.
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $result = $api_instance->importationGetProductSampleCustomColumnValue($store_id, $execution_id, $product_sample_index, $column_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationGetProductSampleCustomColumnValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **product_sample_index** | **int**| Index of the product sample. Starting from 0 to 99. |
 **column_id** | **string**| The custom column identifier |

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationIgnoreColumn**
> importationIgnoreColumn($store_id, $execution_id, $column_id)

Ignore Column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->importationIgnoreColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationIgnoreColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationMapCatalogColumn**
> importationMapCatalogColumn($store_id, $execution_id, $column_id, $request)

Map catalog column to a BeezUP column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The catalog column identifier
$request = new \Swagger\Client\Model\MapBeezUPColumnRequest(); // \Swagger\Client\Model\MapBeezUPColumnRequest | 

try {
    $api_instance->importationMapCatalogColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationMapCatalogColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The catalog column identifier |
 **request** | [**\Swagger\Client\Model\MapBeezUPColumnRequest**](../Model/\Swagger\Client\Model\MapBeezUPColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationMapCustomColumn**
> importationMapCustomColumn($store_id, $execution_id, $column_id, $request)

Map custom column to a BeezUP column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\MapBeezUPColumnRequest(); // \Swagger\Client\Model\MapBeezUPColumnRequest | 

try {
    $api_instance->importationMapCustomColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationMapCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\MapBeezUPColumnRequest**](../Model/\Swagger\Client\Model\MapBeezUPColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationReattendColumn**
> importationReattendColumn($store_id, $execution_id, $column_id)

Reattend Column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->importationReattendColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationReattendColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationSaveCustomColumn**
> importationSaveCustomColumn($store_id, $execution_id, $column_id, $request)

Create or replace a custom column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier
$request = new \Swagger\Client\Model\ChangeCustomColumnRequest(); // \Swagger\Client\Model\ChangeCustomColumnRequest | 

try {
    $api_instance->importationSaveCustomColumn($store_id, $execution_id, $column_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationSaveCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |
 **request** | [**\Swagger\Client\Model\ChangeCustomColumnRequest**](../Model/\Swagger\Client\Model\ChangeCustomColumnRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationUnmapCatalogColumn**
> importationUnmapCatalogColumn($store_id, $execution_id, $column_id)

Unmap catalog column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The catalog column identifier

try {
    $api_instance->importationUnmapCatalogColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationUnmapCatalogColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The catalog column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importationUnmapCustomColumn**
> importationUnmapCustomColumn($store_id, $execution_id, $column_id)

Unmap custom column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\ImportationCatalogInfoApi();
$store_id = "store_id_example"; // string | Your store identifier
$execution_id = "execution_id_example"; // string | The execution identifier of you catalog importation
$column_id = "column_id_example"; // string | The custom column identifier

try {
    $api_instance->importationUnmapCustomColumn($store_id, $execution_id, $column_id);
} catch (Exception $e) {
    echo 'Exception when calling ImportationCatalogInfoApi->importationUnmapCustomColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Your store identifier |
 **execution_id** | **string**| The execution identifier of you catalog importation |
 **column_id** | **string**| The custom column identifier |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

