<?php
/**
 * ChannelInfoDetails
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
 * ChannelInfoDetails Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChannelInfoDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'channelInfo_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'costs' => 'string',
        'business_model' => 'string',
        'channel_type' => 'string',
        'category' => 'string',
        'home_url' => 'string',
        'subscription_link' => 'string'
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
        'costs' => 'costs',
        'business_model' => 'businessModel',
        'channel_type' => 'channelType',
        'category' => 'category',
        'home_url' => 'homeUrl',
        'subscription_link' => 'subscriptionLink'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'costs' => 'setCosts',
        'business_model' => 'setBusinessModel',
        'channel_type' => 'setChannelType',
        'category' => 'setCategory',
        'home_url' => 'setHomeUrl',
        'subscription_link' => 'setSubscriptionLink'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'costs' => 'getCosts',
        'business_model' => 'getBusinessModel',
        'channel_type' => 'getChannelType',
        'category' => 'getCategory',
        'home_url' => 'getHomeUrl',
        'subscription_link' => 'getSubscriptionLink'
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
        $this->container['costs'] = isset($data['costs']) ? $data['costs'] : null;
        $this->container['business_model'] = isset($data['business_model']) ? $data['business_model'] : null;
        $this->container['channel_type'] = isset($data['channel_type']) ? $data['channel_type'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['home_url'] = isset($data['home_url']) ? $data['home_url'] : null;
        $this->container['subscription_link'] = isset($data['subscription_link']) ? $data['subscription_link'] : null;
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
     * Gets costs
     * @return string
     */
    public function getCosts()
    {
        return $this->container['costs'];
    }

    /**
     * Sets costs
     * @param string $costs The cost's description of the channel
     * @return $this
     */
    public function setCosts($costs)
    {
        $this->container['costs'] = $costs;

        return $this;
    }

    /**
     * Gets business_model
     * @return string
     */
    public function getBusinessModel()
    {
        return $this->container['business_model'];
    }

    /**
     * Sets business_model
     * @param string $business_model The business model of the channel
     * @return $this
     */
    public function setBusinessModel($business_model)
    {
        $this->container['business_model'] = $business_model;

        return $this;
    }

    /**
     * Gets channel_type
     * @return string
     */
    public function getChannelType()
    {
        return $this->container['channel_type'];
    }

    /**
     * Sets channel_type
     * @param string $channel_type The channel type
     * @return $this
     */
    public function setChannelType($channel_type)
    {
        $this->container['channel_type'] = $channel_type;

        return $this;
    }

    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category The channel category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets home_url
     * @return string
     */
    public function getHomeUrl()
    {
        return $this->container['home_url'];
    }

    /**
     * Sets home_url
     * @param string $home_url The home url of the channel
     * @return $this
     */
    public function setHomeUrl($home_url)
    {
        $this->container['home_url'] = $home_url;

        return $this;
    }

    /**
     * Gets subscription_link
     * @return string
     */
    public function getSubscriptionLink()
    {
        return $this->container['subscription_link'];
    }

    /**
     * Sets subscription_link
     * @param string $subscription_link The subscription link to the channel
     * @return $this
     */
    public function setSubscriptionLink($subscription_link)
    {
        $this->container['subscription_link'] = $subscription_link;

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


