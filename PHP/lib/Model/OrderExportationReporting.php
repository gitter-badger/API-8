<?php
/**
 * OrderExportationReporting
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * OrderExportationReporting Class Doc Comment
 *
 * @category    Class
 * @description Represent the reporting of the orders exportation.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderExportationReporting implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'orderExportationReporting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'abortion_utc_date' => '\DateTime',
        'begin_utc_date' => '\DateTime',
        'blob_name_uri' => 'string',
        'end_utc_date' => '\DateTime',
        'enqueued_utc_date' => '\DateTime',
        'error_message' => 'string',
        'execution_uuid' => 'string',
        'expiration_utc_date' => '\DateTime',
        'failure_utc_date' => '\DateTime',
        'ip_address' => 'string',
        'json_criteria' => 'string',
        'last_update_utc_date' => '\DateTime',
        'order_count' => 'int',
        'processing_status' => '\Swagger\Client\Model\OrderExportationReportingProcessingStatus',
        'remaining_order_count' => 'int',
        'resumed_utc_date' => '\DateTime',
        'source_type' => '\Swagger\Client\Model\SourceType',
        'source_user_id' => '\Swagger\Client\Model\BeezUPCommonUserId',
        'source_user_name' => 'string',
        'suspended_utc_date' => '\DateTime',
        'timeout_duration' => 'string',
        'warning_message' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'abortion_utc_date' => 'abortionUtcDate',
        'begin_utc_date' => 'beginUtcDate',
        'blob_name_uri' => 'blobNameUri',
        'end_utc_date' => 'endUtcDate',
        'enqueued_utc_date' => 'enqueuedUtcDate',
        'error_message' => 'errorMessage',
        'execution_uuid' => 'executionUUID',
        'expiration_utc_date' => 'expirationUtcDate',
        'failure_utc_date' => 'failureUtcDate',
        'ip_address' => 'ipAddress',
        'json_criteria' => 'jsonCriteria',
        'last_update_utc_date' => 'lastUpdateUtcDate',
        'order_count' => 'orderCount',
        'processing_status' => 'processingStatus',
        'remaining_order_count' => 'remainingOrderCount',
        'resumed_utc_date' => 'resumedUtcDate',
        'source_type' => 'sourceType',
        'source_user_id' => 'sourceUserId',
        'source_user_name' => 'sourceUserName',
        'suspended_utc_date' => 'suspendedUtcDate',
        'timeout_duration' => 'timeoutDuration',
        'warning_message' => 'warningMessage'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'abortion_utc_date' => 'setAbortionUtcDate',
        'begin_utc_date' => 'setBeginUtcDate',
        'blob_name_uri' => 'setBlobNameUri',
        'end_utc_date' => 'setEndUtcDate',
        'enqueued_utc_date' => 'setEnqueuedUtcDate',
        'error_message' => 'setErrorMessage',
        'execution_uuid' => 'setExecutionUuid',
        'expiration_utc_date' => 'setExpirationUtcDate',
        'failure_utc_date' => 'setFailureUtcDate',
        'ip_address' => 'setIpAddress',
        'json_criteria' => 'setJsonCriteria',
        'last_update_utc_date' => 'setLastUpdateUtcDate',
        'order_count' => 'setOrderCount',
        'processing_status' => 'setProcessingStatus',
        'remaining_order_count' => 'setRemainingOrderCount',
        'resumed_utc_date' => 'setResumedUtcDate',
        'source_type' => 'setSourceType',
        'source_user_id' => 'setSourceUserId',
        'source_user_name' => 'setSourceUserName',
        'suspended_utc_date' => 'setSuspendedUtcDate',
        'timeout_duration' => 'setTimeoutDuration',
        'warning_message' => 'setWarningMessage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'abortion_utc_date' => 'getAbortionUtcDate',
        'begin_utc_date' => 'getBeginUtcDate',
        'blob_name_uri' => 'getBlobNameUri',
        'end_utc_date' => 'getEndUtcDate',
        'enqueued_utc_date' => 'getEnqueuedUtcDate',
        'error_message' => 'getErrorMessage',
        'execution_uuid' => 'getExecutionUuid',
        'expiration_utc_date' => 'getExpirationUtcDate',
        'failure_utc_date' => 'getFailureUtcDate',
        'ip_address' => 'getIpAddress',
        'json_criteria' => 'getJsonCriteria',
        'last_update_utc_date' => 'getLastUpdateUtcDate',
        'order_count' => 'getOrderCount',
        'processing_status' => 'getProcessingStatus',
        'remaining_order_count' => 'getRemainingOrderCount',
        'resumed_utc_date' => 'getResumedUtcDate',
        'source_type' => 'getSourceType',
        'source_user_id' => 'getSourceUserId',
        'source_user_name' => 'getSourceUserName',
        'suspended_utc_date' => 'getSuspendedUtcDate',
        'timeout_duration' => 'getTimeoutDuration',
        'warning_message' => 'getWarningMessage'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['abortion_utc_date'] = isset($data['abortion_utc_date']) ? $data['abortion_utc_date'] : null;
        $this->container['begin_utc_date'] = isset($data['begin_utc_date']) ? $data['begin_utc_date'] : null;
        $this->container['blob_name_uri'] = isset($data['blob_name_uri']) ? $data['blob_name_uri'] : null;
        $this->container['end_utc_date'] = isset($data['end_utc_date']) ? $data['end_utc_date'] : null;
        $this->container['enqueued_utc_date'] = isset($data['enqueued_utc_date']) ? $data['enqueued_utc_date'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['execution_uuid'] = isset($data['execution_uuid']) ? $data['execution_uuid'] : null;
        $this->container['expiration_utc_date'] = isset($data['expiration_utc_date']) ? $data['expiration_utc_date'] : null;
        $this->container['failure_utc_date'] = isset($data['failure_utc_date']) ? $data['failure_utc_date'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['json_criteria'] = isset($data['json_criteria']) ? $data['json_criteria'] : null;
        $this->container['last_update_utc_date'] = isset($data['last_update_utc_date']) ? $data['last_update_utc_date'] : null;
        $this->container['order_count'] = isset($data['order_count']) ? $data['order_count'] : null;
        $this->container['processing_status'] = isset($data['processing_status']) ? $data['processing_status'] : null;
        $this->container['remaining_order_count'] = isset($data['remaining_order_count']) ? $data['remaining_order_count'] : null;
        $this->container['resumed_utc_date'] = isset($data['resumed_utc_date']) ? $data['resumed_utc_date'] : null;
        $this->container['source_type'] = isset($data['source_type']) ? $data['source_type'] : null;
        $this->container['source_user_id'] = isset($data['source_user_id']) ? $data['source_user_id'] : null;
        $this->container['source_user_name'] = isset($data['source_user_name']) ? $data['source_user_name'] : null;
        $this->container['suspended_utc_date'] = isset($data['suspended_utc_date']) ? $data['suspended_utc_date'] : null;
        $this->container['timeout_duration'] = isset($data['timeout_duration']) ? $data['timeout_duration'] : null;
        $this->container['warning_message'] = isset($data['warning_message']) ? $data['warning_message'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['enqueued_utc_date'] === null) {
            $invalid_properties[] = "'enqueued_utc_date' can't be null";
        }
        if ($this->container['execution_uuid'] === null) {
            $invalid_properties[] = "'execution_uuid' can't be null";
        }
        if ($this->container['ip_address'] === null) {
            $invalid_properties[] = "'ip_address' can't be null";
        }
        if ($this->container['processing_status'] === null) {
            $invalid_properties[] = "'processing_status' can't be null";
        }
        if ($this->container['source_type'] === null) {
            $invalid_properties[] = "'source_type' can't be null";
        }
        if ($this->container['source_user_name'] === null) {
            $invalid_properties[] = "'source_user_name' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['enqueued_utc_date'] === null) {
            return false;
        }
        if ($this->container['execution_uuid'] === null) {
            return false;
        }
        if ($this->container['ip_address'] === null) {
            return false;
        }
        if ($this->container['processing_status'] === null) {
            return false;
        }
        if ($this->container['source_type'] === null) {
            return false;
        }
        if ($this->container['source_user_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets abortion_utc_date
     * @return \DateTime
     */
    public function getAbortionUtcDate()
    {
        return $this->container['abortion_utc_date'];
    }

    /**
     * Sets abortion_utc_date
     * @param \DateTime $abortion_utc_date
     * @return $this
     */
    public function setAbortionUtcDate($abortion_utc_date)
    {
        $this->container['abortion_utc_date'] = $abortion_utc_date;

        return $this;
    }

    /**
     * Gets begin_utc_date
     * @return \DateTime
     */
    public function getBeginUtcDate()
    {
        return $this->container['begin_utc_date'];
    }

    /**
     * Sets begin_utc_date
     * @param \DateTime $begin_utc_date
     * @return $this
     */
    public function setBeginUtcDate($begin_utc_date)
    {
        $this->container['begin_utc_date'] = $begin_utc_date;

        return $this;
    }

    /**
     * Gets blob_name_uri
     * @return string
     */
    public function getBlobNameUri()
    {
        return $this->container['blob_name_uri'];
    }

    /**
     * Sets blob_name_uri
     * @param string $blob_name_uri
     * @return $this
     */
    public function setBlobNameUri($blob_name_uri)
    {
        $this->container['blob_name_uri'] = $blob_name_uri;

        return $this;
    }

    /**
     * Gets end_utc_date
     * @return \DateTime
     */
    public function getEndUtcDate()
    {
        return $this->container['end_utc_date'];
    }

    /**
     * Sets end_utc_date
     * @param \DateTime $end_utc_date
     * @return $this
     */
    public function setEndUtcDate($end_utc_date)
    {
        $this->container['end_utc_date'] = $end_utc_date;

        return $this;
    }

    /**
     * Gets enqueued_utc_date
     * @return \DateTime
     */
    public function getEnqueuedUtcDate()
    {
        return $this->container['enqueued_utc_date'];
    }

    /**
     * Sets enqueued_utc_date
     * @param \DateTime $enqueued_utc_date
     * @return $this
     */
    public function setEnqueuedUtcDate($enqueued_utc_date)
    {
        $this->container['enqueued_utc_date'] = $enqueued_utc_date;

        return $this;
    }

    /**
     * Gets error_message
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     * @param string $error_message
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets execution_uuid
     * @return string
     */
    public function getExecutionUuid()
    {
        return $this->container['execution_uuid'];
    }

    /**
     * Sets execution_uuid
     * @param string $execution_uuid
     * @return $this
     */
    public function setExecutionUuid($execution_uuid)
    {
        $this->container['execution_uuid'] = $execution_uuid;

        return $this;
    }

    /**
     * Gets expiration_utc_date
     * @return \DateTime
     */
    public function getExpirationUtcDate()
    {
        return $this->container['expiration_utc_date'];
    }

    /**
     * Sets expiration_utc_date
     * @param \DateTime $expiration_utc_date
     * @return $this
     */
    public function setExpirationUtcDate($expiration_utc_date)
    {
        $this->container['expiration_utc_date'] = $expiration_utc_date;

        return $this;
    }

    /**
     * Gets failure_utc_date
     * @return \DateTime
     */
    public function getFailureUtcDate()
    {
        return $this->container['failure_utc_date'];
    }

    /**
     * Sets failure_utc_date
     * @param \DateTime $failure_utc_date
     * @return $this
     */
    public function setFailureUtcDate($failure_utc_date)
    {
        $this->container['failure_utc_date'] = $failure_utc_date;

        return $this;
    }

    /**
     * Gets ip_address
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     * @param string $ip_address
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets json_criteria
     * @return string
     */
    public function getJsonCriteria()
    {
        return $this->container['json_criteria'];
    }

    /**
     * Sets json_criteria
     * @param string $json_criteria Raw representation of the JSON
     * @return $this
     */
    public function setJsonCriteria($json_criteria)
    {
        $this->container['json_criteria'] = $json_criteria;

        return $this;
    }

    /**
     * Gets last_update_utc_date
     * @return \DateTime
     */
    public function getLastUpdateUtcDate()
    {
        return $this->container['last_update_utc_date'];
    }

    /**
     * Sets last_update_utc_date
     * @param \DateTime $last_update_utc_date
     * @return $this
     */
    public function setLastUpdateUtcDate($last_update_utc_date)
    {
        $this->container['last_update_utc_date'] = $last_update_utc_date;

        return $this;
    }

    /**
     * Gets order_count
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     * @param int $order_count
     * @return $this
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets processing_status
     * @return \Swagger\Client\Model\OrderExportationReportingProcessingStatus
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     * @param \Swagger\Client\Model\OrderExportationReportingProcessingStatus $processing_status
     * @return $this
     */
    public function setProcessingStatus($processing_status)
    {
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets remaining_order_count
     * @return int
     */
    public function getRemainingOrderCount()
    {
        return $this->container['remaining_order_count'];
    }

    /**
     * Sets remaining_order_count
     * @param int $remaining_order_count
     * @return $this
     */
    public function setRemainingOrderCount($remaining_order_count)
    {
        $this->container['remaining_order_count'] = $remaining_order_count;

        return $this;
    }

    /**
     * Gets resumed_utc_date
     * @return \DateTime
     */
    public function getResumedUtcDate()
    {
        return $this->container['resumed_utc_date'];
    }

    /**
     * Sets resumed_utc_date
     * @param \DateTime $resumed_utc_date
     * @return $this
     */
    public function setResumedUtcDate($resumed_utc_date)
    {
        $this->container['resumed_utc_date'] = $resumed_utc_date;

        return $this;
    }

    /**
     * Gets source_type
     * @return \Swagger\Client\Model\SourceType
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     * @param \Swagger\Client\Model\SourceType $source_type
     * @return $this
     */
    public function setSourceType($source_type)
    {
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets source_user_id
     * @return \Swagger\Client\Model\BeezUPCommonUserId
     */
    public function getSourceUserId()
    {
        return $this->container['source_user_id'];
    }

    /**
     * Sets source_user_id
     * @param \Swagger\Client\Model\BeezUPCommonUserId $source_user_id
     * @return $this
     */
    public function setSourceUserId($source_user_id)
    {
        $this->container['source_user_id'] = $source_user_id;

        return $this;
    }

    /**
     * Gets source_user_name
     * @return string
     */
    public function getSourceUserName()
    {
        return $this->container['source_user_name'];
    }

    /**
     * Sets source_user_name
     * @param string $source_user_name
     * @return $this
     */
    public function setSourceUserName($source_user_name)
    {
        $this->container['source_user_name'] = $source_user_name;

        return $this;
    }

    /**
     * Gets suspended_utc_date
     * @return \DateTime
     */
    public function getSuspendedUtcDate()
    {
        return $this->container['suspended_utc_date'];
    }

    /**
     * Sets suspended_utc_date
     * @param \DateTime $suspended_utc_date
     * @return $this
     */
    public function setSuspendedUtcDate($suspended_utc_date)
    {
        $this->container['suspended_utc_date'] = $suspended_utc_date;

        return $this;
    }

    /**
     * Gets timeout_duration
     * @return string
     */
    public function getTimeoutDuration()
    {
        return $this->container['timeout_duration'];
    }

    /**
     * Sets timeout_duration
     * @param string $timeout_duration
     * @return $this
     */
    public function setTimeoutDuration($timeout_duration)
    {
        $this->container['timeout_duration'] = $timeout_duration;

        return $this;
    }

    /**
     * Gets warning_message
     * @return string
     */
    public function getWarningMessage()
    {
        return $this->container['warning_message'];
    }

    /**
     * Sets warning_message
     * @param string $warning_message
     * @return $this
     */
    public function setWarningMessage($warning_message)
    {
        $this->container['warning_message'] = $warning_message;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


