<?php
/**
 * BatchesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalogs
 *
 * This API allows you to manage your catalogs
 *
 * OpenAPI spec version: 2.0
 * Contact: support@beezup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * BatchesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatchesApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return BatchesApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation changeOrderList
     *
     * Batches the change order operation.
     *
     * @param string $change_order_type The order change type (required)
     * @param string $user_name Sometimes the user in the e-commerce application is not the same than the subscription key you indicate in your settings. We recommand you to indicate the login of the user in your appplication. (required)
     * @param \Swagger\Client\Model\ChangeOrderListRequest $request  (required)
     * @param bool $test_mode If true, the operation will be be commited. But the validation will be taken in account. (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function changeOrderList($change_order_type, $user_name, $request, $test_mode = null)
    {
        list($response) = $this->changeOrderListWithHttpInfo($change_order_type, $user_name, $request, $test_mode);
        return $response;
    }

    /**
     * Operation changeOrderListWithHttpInfo
     *
     * Batches the change order operation.
     *
     * @param string $change_order_type The order change type (required)
     * @param string $user_name Sometimes the user in the e-commerce application is not the same than the subscription key you indicate in your settings. We recommand you to indicate the login of the user in your appplication. (required)
     * @param \Swagger\Client\Model\ChangeOrderListRequest $request  (required)
     * @param bool $test_mode If true, the operation will be be commited. But the validation will be taken in account. (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function changeOrderListWithHttpInfo($change_order_type, $user_name, $request, $test_mode = null)
    {
        // verify the required parameter 'change_order_type' is set
        if ($change_order_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $change_order_type when calling changeOrderList');
        }
        // verify the required parameter 'user_name' is set
        if ($user_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_name when calling changeOrderList');
        }
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling changeOrderList');
        }
        // parse inputs
        $resourcePath = "/v2/user/marketplaces/orders/batches/changeOrders/{changeOrderType}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($user_name !== null) {
            $queryParams['userName'] = $this->apiClient->getSerializer()->toQueryValue($user_name);
        }
        // query params
        if ($test_mode !== null) {
            $queryParams['testMode'] = $this->apiClient->getSerializer()->toQueryValue($test_mode);
        }
        // path params
        if ($change_order_type !== null) {
            $resourcePath = str_replace(
                "{" . "changeOrderType" . "}",
                $this->apiClient->getSerializer()->toPathValue($change_order_type),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2/user/marketplaces/orders/batches/changeOrders/{changeOrderType}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation clearMerchantOrderInfoList
     *
     * Batches the clear merchant order info operation.
     *
     * @param \Swagger\Client\Model\ClearMerchantOrderInfoListRequest $request  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function clearMerchantOrderInfoList($request)
    {
        list($response) = $this->clearMerchantOrderInfoListWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation clearMerchantOrderInfoListWithHttpInfo
     *
     * Batches the clear merchant order info operation.
     *
     * @param \Swagger\Client\Model\ClearMerchantOrderInfoListRequest $request  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clearMerchantOrderInfoListWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling clearMerchantOrderInfoList');
        }
        // parse inputs
        $resourcePath = "/v2/user/marketplaces/orders/batches/clearMerchantOrderInfos";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2/user/marketplaces/orders/batches/clearMerchantOrderInfos'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setMerchantOrderInfoList
     *
     * Batches the set merchant order info operation.
     *
     * @param \Swagger\Client\Model\SetMerchantOrderInfoListRequest $request  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function setMerchantOrderInfoList($request)
    {
        list($response) = $this->setMerchantOrderInfoListWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation setMerchantOrderInfoListWithHttpInfo
     *
     * Batches the set merchant order info operation.
     *
     * @param \Swagger\Client\Model\SetMerchantOrderInfoListRequest $request  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function setMerchantOrderInfoListWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling setMerchantOrderInfoList');
        }
        // parse inputs
        $resourcePath = "/v2/user/marketplaces/orders/batches/setMerchantOrderInfos";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2/user/marketplaces/orders/batches/setMerchantOrderInfos'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
