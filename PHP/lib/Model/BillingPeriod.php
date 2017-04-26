<?php
/**
 * BillingPeriod
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
 * BillingPeriod Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingPeriod implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'billingPeriod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_period_in_month' => 'int',
        'discount_percentage' => 'double'
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
        'billing_period_in_month' => 'billingPeriodInMonth',
        'discount_percentage' => 'discountPercentage'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'billing_period_in_month' => 'setBillingPeriodInMonth',
        'discount_percentage' => 'setDiscountPercentage'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'billing_period_in_month' => 'getBillingPeriodInMonth',
        'discount_percentage' => 'getDiscountPercentage'
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
        $this->container['billing_period_in_month'] = isset($data['billing_period_in_month']) ? $data['billing_period_in_month'] : null;
        $this->container['discount_percentage'] = isset($data['discount_percentage']) ? $data['discount_percentage'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['billing_period_in_month'] === null) {
            $invalid_properties[] = "'billing_period_in_month' can't be null";
        }
        if ($this->container['discount_percentage'] === null) {
            $invalid_properties[] = "'discount_percentage' can't be null";
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

        if ($this->container['billing_period_in_month'] === null) {
            return false;
        }
        if ($this->container['discount_percentage'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets billing_period_in_month
     * @return int
     */
    public function getBillingPeriodInMonth()
    {
        return $this->container['billing_period_in_month'];
    }

    /**
     * Sets billing_period_in_month
     * @param int $billing_period_in_month The billing period in month
     * @return $this
     */
    public function setBillingPeriodInMonth($billing_period_in_month)
    {
        $this->container['billing_period_in_month'] = $billing_period_in_month;

        return $this;
    }

    /**
     * Gets discount_percentage
     * @return double
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     * @param double $discount_percentage The discount percentage related to this billing period
     * @return $this
     */
    public function setDiscountPercentage($discount_percentage)
    {
        $this->container['discount_percentage'] = $discount_percentage;

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

