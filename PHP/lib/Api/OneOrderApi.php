<?php
/**
 * OneOrderApi
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
 * OneOrderApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OneOrderApi
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
     * @return OneOrderApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation changeOrder
     *
     * Change order status
     *
     * @param string $marketplace_technical_code The marketplace technical code (required)
     * @param int $account_id The account identifier (required)
     * @param string $beez_up_order_id The order BeezUP identifier (required)
     * @param string $change_order_type The order change type (required)
     * @param string $user_name Sometimes the user in the e-commerce application is not the same than the subscription key you indicate in your settings. We recommand you to indicate the login of the user in your appplication. (required)
     * @param \Swagger\Client\Model\ChangeOrderRequest $request  (required)
     * @param bool $test_mode If true, the operation will be be commited. But the validation will be taken in account. (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ChangeOrderResponse
     */
    public function changeOrder($marketplace_technical_code, $account_id, $beez_up_order_id, $change_order_type, $user_name, $request, $test_mode = null)
    {
        list($response) = $this->changeOrderWithHttpInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $change_order_type, $user_name, $request, $test_mode);
        return $response;
    }

    /**
     * Operation changeOrderWithHttpInfo
     *
     * Change order status
     *
     * @param string $marketplace_technical_code The marketplace technical code (required)
     * @param int $account_id The account identifier (required)
     * @param string $beez_up_order_id The order BeezUP identifier (required)
     * @param string $change_order_type The order change type (required)
     * @param string $user_name Sometimes the user in the e-commerce application is not the same than the subscription key you indicate in your settings. We recommand you to indicate the login of the user in your appplication. (required)
     * @param \Swagger\Client\Model\ChangeOrderRequest $request  (required)
     * @param bool $test_mode If true, the operation will be be commited. But the validation will be taken in account. (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ChangeOrderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function changeOrderWithHttpInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $change_order_type, $user_name, $request, $test_mode = null)
    {
        // verify the required parameter 'marketplace_technical_code' is set
        if ($marketplace_technical_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_technical_code when calling changeOrder');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling changeOrder');
        }
        // verify the required parameter 'beez_up_order_id' is set
        if ($beez_up_order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $beez_up_order_id when calling changeOrder');
        }
        // verify the required parameter 'change_order_type' is set
        if ($change_order_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $change_order_type when calling changeOrder');
        }
        // verify the required parameter 'user_name' is set
        if ($user_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_name when calling changeOrder');
        }
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling changeOrder');
        }
        // parse inputs
        $resourcePath = "/v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/{changeOrderType}";
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
        if ($marketplace_technical_code !== null) {
            $resourcePath = str_replace(
                "{" . "marketplaceTechnicalCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($marketplace_technical_code),
                $resourcePath
            );
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "accountId" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($beez_up_order_id !== null) {
            $resourcePath = str_replace(
                "{" . "beezUPOrderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($beez_up_order_id),
                $resourcePath
            );
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
                '\Swagger\Client\Model\ChangeOrderResponse',
                '/v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/{changeOrderType}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ChangeOrderResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ChangeOrderResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation clearMerchantOrderInfo
     *
     * Clear the merchant info related to this order
     *
     * @param string $marketplace_technical_code The marketplace technical code (required)
     * @param int $account_id The account identifier (required)
     * @param string $beez_up_order_id The order BeezUP identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function clearMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id)
    {
        list($response) = $this->clearMerchantOrderInfoWithHttpInfo($marketplace_technical_code, $account_id, $beez_up_order_id);
        return $response;
    }

    /**
     * Operation clearMerchantOrderInfoWithHttpInfo
     *
     * Clear the merchant info related to this order
     *
     * @param string $marketplace_technical_code The marketplace technical code (required)
     * @param int $account_id The account identifier (required)
     * @param string $beez_up_order_id The order BeezUP identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function clearMerchantOrderInfoWithHttpInfo($marketplace_technical_code, $account_id, $beez_up_order_id)
    {
        // verify the required parameter 'marketplace_technical_code' is set
        if ($marketplace_technical_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_technical_code when calling clearMerchantOrderInfo');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling clearMerchantOrderInfo');
        }
        // verify the required parameter 'beez_up_order_id' is set
        if ($beez_up_order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $beez_up_order_id when calling clearMerchantOrderInfo');
        }
        // parse inputs
        $resourcePath = "/v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/clearMerchantOrderInfo";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($marketplace_technical_code !== null) {
            $resourcePath = str_replace(
                "{" . "marketplaceTechnicalCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($marketplace_technical_code),
                $resourcePath
            );
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "accountId" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($beez_up_order_id !== null) {
            $resourcePath = str_replace(
                "{" . "beezUPOrderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($beez_up_order_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                '/v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/clearMerchantOrderInfo'
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
     * Operation getOrder
     *
     * Get order details
     *
     * @param string $marketplace_technical_code The marketplace technical code (required)
     * @param int $account_id The account identifier (required)
     * @param string $beez_up_order_id The order BeezUP identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Order
     */
    public function getOrder($marketplace_technical_code, $account_id, $beez_up_order_id)
    {
        list($response) = $this->getOrderWithHttpInfo($marketplace_technical_code, $account_id, $beez_up_order_id);
        return $response;
    }

    /**
     * Operation getOrderWithHttpInfo
     *
     * Get order details
     *
     * @param string $marketplace_technical_code The marketplace technical code (required)
     * @param int $account_id The account identifier (required)
     * @param string $beez_up_order_id The order BeezUP identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Order, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderWithHttpInfo($marketplace_technical_code, $account_id, $beez_up_order_id)
    {
        // verify the required parameter 'marketplace_technical_code' is set
        if ($marketplace_technical_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_technical_code when calling getOrder');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getOrder');
        }
        // verify the required parameter 'beez_up_order_id' is set
        if ($beez_up_order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $beez_up_order_id when calling getOrder');
        }
        // parse inputs
        $resourcePath = "/v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($marketplace_technical_code !== null) {
            $resourcePath = str_replace(
                "{" . "marketplaceTechnicalCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($marketplace_technical_code),
                $resourcePath
            );
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "accountId" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($beez_up_order_id !== null) {
            $resourcePath = str_replace(
                "{" . "beezUPOrderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($beez_up_order_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Order',
                '/v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Order', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Order', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOrderHistory
     *
     * Get the harvest history and the change status operations
     *
     * @param string $marketplace_technical_code The marketplace technical code (required)
     * @param int $account_id The account identifier (required)
     * @param string $beez_up_order_id The order BeezUP identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\OrderHistory
     */
    public function getOrderHistory($marketplace_technical_code, $account_id, $beez_up_order_id)
    {
        list($response) = $this->getOrderHistoryWithHttpInfo($marketplace_technical_code, $account_id, $beez_up_order_id);
        return $response;
    }

    /**
     * Operation getOrderHistoryWithHttpInfo
     *
     * Get the harvest history and the change status operations
     *
     * @param string $marketplace_technical_code The marketplace technical code (required)
     * @param int $account_id The account identifier (required)
     * @param string $beez_up_order_id The order BeezUP identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\OrderHistory, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderHistoryWithHttpInfo($marketplace_technical_code, $account_id, $beez_up_order_id)
    {
        // verify the required parameter 'marketplace_technical_code' is set
        if ($marketplace_technical_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_technical_code when calling getOrderHistory');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getOrderHistory');
        }
        // verify the required parameter 'beez_up_order_id' is set
        if ($beez_up_order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $beez_up_order_id when calling getOrderHistory');
        }
        // parse inputs
        $resourcePath = "/v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/history";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($marketplace_technical_code !== null) {
            $resourcePath = str_replace(
                "{" . "marketplaceTechnicalCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($marketplace_technical_code),
                $resourcePath
            );
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "accountId" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($beez_up_order_id !== null) {
            $resourcePath = str_replace(
                "{" . "beezUPOrderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($beez_up_order_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\OrderHistory',
                '/v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/history'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\OrderHistory', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\OrderHistory', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BeezUPCommonErrorResponseMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation harvestOrder
     *
     * Harvest a specific order from the marketplace
     *
     * @param string $marketplace_technical_code The marketplace technical code (required)
     * @param int $account_id The account identifier (required)
     * @param string $beez_up_order_id The order BeezUP identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function harvestOrder($marketplace_technical_code, $account_id, $beez_up_order_id)
    {
        list($response) = $this->harvestOrderWithHttpInfo($marketplace_technical_code, $account_id, $beez_up_order_id);
        return $response;
    }

    /**
     * Operation harvestOrderWithHttpInfo
     *
     * Harvest a specific order from the marketplace
     *
     * @param string $marketplace_technical_code The marketplace technical code (required)
     * @param int $account_id The account identifier (required)
     * @param string $beez_up_order_id The order BeezUP identifier (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function harvestOrderWithHttpInfo($marketplace_technical_code, $account_id, $beez_up_order_id)
    {
        // verify the required parameter 'marketplace_technical_code' is set
        if ($marketplace_technical_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_technical_code when calling harvestOrder');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling harvestOrder');
        }
        // verify the required parameter 'beez_up_order_id' is set
        if ($beez_up_order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $beez_up_order_id when calling harvestOrder');
        }
        // parse inputs
        $resourcePath = "/v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/harvest";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($marketplace_technical_code !== null) {
            $resourcePath = str_replace(
                "{" . "marketplaceTechnicalCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($marketplace_technical_code),
                $resourcePath
            );
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "accountId" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($beez_up_order_id !== null) {
            $resourcePath = str_replace(
                "{" . "beezUPOrderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($beez_up_order_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                '/v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/harvest'
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
     * Operation setMerchantOrderInfo
     *
     * Associate your merchant order identifier to this order
     *
     * @param string $marketplace_technical_code The marketplace technical code (required)
     * @param int $account_id The account identifier (required)
     * @param string $beez_up_order_id The order BeezUP identifier (required)
     * @param \Swagger\Client\Model\SetMerchantOrderInfoRequest $request  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function setMerchantOrderInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $request)
    {
        list($response) = $this->setMerchantOrderInfoWithHttpInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $request);
        return $response;
    }

    /**
     * Operation setMerchantOrderInfoWithHttpInfo
     *
     * Associate your merchant order identifier to this order
     *
     * @param string $marketplace_technical_code The marketplace technical code (required)
     * @param int $account_id The account identifier (required)
     * @param string $beez_up_order_id The order BeezUP identifier (required)
     * @param \Swagger\Client\Model\SetMerchantOrderInfoRequest $request  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function setMerchantOrderInfoWithHttpInfo($marketplace_technical_code, $account_id, $beez_up_order_id, $request)
    {
        // verify the required parameter 'marketplace_technical_code' is set
        if ($marketplace_technical_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_technical_code when calling setMerchantOrderInfo');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling setMerchantOrderInfo');
        }
        // verify the required parameter 'beez_up_order_id' is set
        if ($beez_up_order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $beez_up_order_id when calling setMerchantOrderInfo');
        }
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling setMerchantOrderInfo');
        }
        // parse inputs
        $resourcePath = "/v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/setMerchantOrderInfo";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($marketplace_technical_code !== null) {
            $resourcePath = str_replace(
                "{" . "marketplaceTechnicalCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($marketplace_technical_code),
                $resourcePath
            );
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "accountId" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($beez_up_order_id !== null) {
            $resourcePath = str_replace(
                "{" . "beezUPOrderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($beez_up_order_id),
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
                '/v2/user/marketplaces/orders/{marketplaceTechnicalCode}/{accountId}/{beezUPOrderId}/setMerchantOrderInfo'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
