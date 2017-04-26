<?php
/**
 * CreditCardInfoResponseLinks
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
 * CreditCardInfoResponseLinks Class Doc Comment
 *
 * @category    Class
 * @description The different actions you can make on this offer
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreditCardInfoResponseLinks implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'creditCardInfoResponse_links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'get_credit_card_info_link' => '\Swagger\Client\Model\LinksGetCreditCardInfoLink',
        'save_credit_card_info_link' => '\Swagger\Client\Model\LinksSaveCreditCardInfoLink'
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
        'get_credit_card_info_link' => 'getCreditCardInfoLink',
        'save_credit_card_info_link' => 'saveCreditCardInfoLink'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'get_credit_card_info_link' => 'setGetCreditCardInfoLink',
        'save_credit_card_info_link' => 'setSaveCreditCardInfoLink'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'get_credit_card_info_link' => 'getGetCreditCardInfoLink',
        'save_credit_card_info_link' => 'getSaveCreditCardInfoLink'
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
        $this->container['get_credit_card_info_link'] = isset($data['get_credit_card_info_link']) ? $data['get_credit_card_info_link'] : null;
        $this->container['save_credit_card_info_link'] = isset($data['save_credit_card_info_link']) ? $data['save_credit_card_info_link'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets get_credit_card_info_link
     * @return \Swagger\Client\Model\LinksGetCreditCardInfoLink
     */
    public function getGetCreditCardInfoLink()
    {
        return $this->container['get_credit_card_info_link'];
    }

    /**
     * Sets get_credit_card_info_link
     * @param \Swagger\Client\Model\LinksGetCreditCardInfoLink $get_credit_card_info_link
     * @return $this
     */
    public function setGetCreditCardInfoLink($get_credit_card_info_link)
    {
        $this->container['get_credit_card_info_link'] = $get_credit_card_info_link;

        return $this;
    }

    /**
     * Gets save_credit_card_info_link
     * @return \Swagger\Client\Model\LinksSaveCreditCardInfoLink
     */
    public function getSaveCreditCardInfoLink()
    {
        return $this->container['save_credit_card_info_link'];
    }

    /**
     * Sets save_credit_card_info_link
     * @param \Swagger\Client\Model\LinksSaveCreditCardInfoLink $save_credit_card_info_link
     * @return $this
     */
    public function setSaveCreditCardInfoLink($save_credit_card_info_link)
    {
        $this->container['save_credit_card_info_link'] = $save_credit_card_info_link;

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

