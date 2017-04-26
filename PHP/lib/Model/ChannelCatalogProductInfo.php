<?php
/**
 * ChannelCatalogProductInfo
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
 * ChannelCatalogProductInfo Class Doc Comment
 *
 * @category    Class
 * @description The channel catalog product information
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChannelCatalogProductInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'channelCatalogProductInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => '\Swagger\Client\Model\BeezUPCommonProductId',
        'overrides' => '\Swagger\Client\Model\ProductOverrides',
        'disabled' => 'bool',
        'category_mapped' => 'bool',
        'excluded' => 'bool',
        'excluded_by' => '\Swagger\Client\Model\ExclusionFilterName[]',
        'links' => '\Swagger\Client\Model\ChannelCatalogProductInfoLinks'
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
        'product_id' => 'productId',
        'overrides' => 'overrides',
        'disabled' => 'disabled',
        'category_mapped' => 'categoryMapped',
        'excluded' => 'excluded',
        'excluded_by' => 'excludedBy',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'overrides' => 'setOverrides',
        'disabled' => 'setDisabled',
        'category_mapped' => 'setCategoryMapped',
        'excluded' => 'setExcluded',
        'excluded_by' => 'setExcludedBy',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'overrides' => 'getOverrides',
        'disabled' => 'getDisabled',
        'category_mapped' => 'getCategoryMapped',
        'excluded' => 'getExcluded',
        'excluded_by' => 'getExcludedBy',
        'links' => 'getLinks'
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['overrides'] = isset($data['overrides']) ? $data['overrides'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : false;
        $this->container['category_mapped'] = isset($data['category_mapped']) ? $data['category_mapped'] : null;
        $this->container['excluded'] = isset($data['excluded']) ? $data['excluded'] : false;
        $this->container['excluded_by'] = isset($data['excluded_by']) ? $data['excluded_by'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['product_id'] === null) {
            $invalid_properties[] = "'product_id' can't be null";
        }
        if ($this->container['overrides'] === null) {
            $invalid_properties[] = "'overrides' can't be null";
        }
        if ($this->container['disabled'] === null) {
            $invalid_properties[] = "'disabled' can't be null";
        }
        if ($this->container['category_mapped'] === null) {
            $invalid_properties[] = "'category_mapped' can't be null";
        }
        if ($this->container['excluded'] === null) {
            $invalid_properties[] = "'excluded' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalid_properties[] = "'links' can't be null";
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

        if ($this->container['product_id'] === null) {
            return false;
        }
        if ($this->container['overrides'] === null) {
            return false;
        }
        if ($this->container['disabled'] === null) {
            return false;
        }
        if ($this->container['category_mapped'] === null) {
            return false;
        }
        if ($this->container['excluded'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets product_id
     * @return \Swagger\Client\Model\BeezUPCommonProductId
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param \Swagger\Client\Model\BeezUPCommonProductId $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets overrides
     * @return \Swagger\Client\Model\ProductOverrides
     */
    public function getOverrides()
    {
        return $this->container['overrides'];
    }

    /**
     * Sets overrides
     * @param \Swagger\Client\Model\ProductOverrides $overrides
     * @return $this
     */
    public function setOverrides($overrides)
    {
        $this->container['overrides'] = $overrides;

        return $this;
    }

    /**
     * Gets disabled
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     * @param bool $disabled Indicates if the product has been disabled or not
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets category_mapped
     * @return bool
     */
    public function getCategoryMapped()
    {
        return $this->container['category_mapped'];
    }

    /**
     * Sets category_mapped
     * @param bool $category_mapped Indicates if the product's category has been mapped to a channel category
     * @return $this
     */
    public function setCategoryMapped($category_mapped)
    {
        $this->container['category_mapped'] = $category_mapped;

        return $this;
    }

    /**
     * Gets excluded
     * @return bool
     */
    public function getExcluded()
    {
        return $this->container['excluded'];
    }

    /**
     * Sets excluded
     * @param bool $excluded Indicates if the product has been excluded by a exclusion filter
     * @return $this
     */
    public function setExcluded($excluded)
    {
        $this->container['excluded'] = $excluded;

        return $this;
    }

    /**
     * Gets excluded_by
     * @return \Swagger\Client\Model\ExclusionFilterName[]
     */
    public function getExcludedBy()
    {
        return $this->container['excluded_by'];
    }

    /**
     * Sets excluded_by
     * @param \Swagger\Client\Model\ExclusionFilterName[] $excluded_by
     * @return $this
     */
    public function setExcludedBy($excluded_by)
    {
        $this->container['excluded_by'] = $excluded_by;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\ChannelCatalogProductInfoLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\ChannelCatalogProductInfoLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


