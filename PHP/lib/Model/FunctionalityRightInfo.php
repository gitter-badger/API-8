<?php
/**
 * FunctionalityRightInfo
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
 * FunctionalityRightInfo Class Doc Comment
 *
 * @category    Class
 * @description Describe the rights for a functionality
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FunctionalityRightInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'functionalityRightInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'functionality_code' => 'string',
        'max_value_interger' => 'int',
        'unlimited' => 'bool'
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
        'functionality_code' => 'functionalityCode',
        'max_value_interger' => 'maxValueInterger',
        'unlimited' => 'unlimited'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'functionality_code' => 'setFunctionalityCode',
        'max_value_interger' => 'setMaxValueInterger',
        'unlimited' => 'setUnlimited'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'functionality_code' => 'getFunctionalityCode',
        'max_value_interger' => 'getMaxValueInterger',
        'unlimited' => 'getUnlimited'
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
        $this->container['functionality_code'] = isset($data['functionality_code']) ? $data['functionality_code'] : null;
        $this->container['max_value_interger'] = isset($data['max_value_interger']) ? $data['max_value_interger'] : null;
        $this->container['unlimited'] = isset($data['unlimited']) ? $data['unlimited'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['functionality_code'] === null) {
            $invalid_properties[] = "'functionality_code' can't be null";
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

        if ($this->container['functionality_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets functionality_code
     * @return string
     */
    public function getFunctionalityCode()
    {
        return $this->container['functionality_code'];
    }

    /**
     * Sets functionality_code
     * @param string $functionality_code The functionality code
     * @return $this
     */
    public function setFunctionalityCode($functionality_code)
    {
        $this->container['functionality_code'] = $functionality_code;

        return $this;
    }

    /**
     * Gets max_value_interger
     * @return int
     */
    public function getMaxValueInterger()
    {
        return $this->container['max_value_interger'];
    }

    /**
     * Sets max_value_interger
     * @param int $max_value_interger The max value for this functionality code considering your rights
     * @return $this
     */
    public function setMaxValueInterger($max_value_interger)
    {
        $this->container['max_value_interger'] = $max_value_interger;

        return $this;
    }

    /**
     * Gets unlimited
     * @return bool
     */
    public function getUnlimited()
    {
        return $this->container['unlimited'];
    }

    /**
     * Sets unlimited
     * @param bool $unlimited If you can use this functionality unlimitedly
     * @return $this
     */
    public function setUnlimited($unlimited)
    {
        $this->container['unlimited'] = $unlimited;

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


