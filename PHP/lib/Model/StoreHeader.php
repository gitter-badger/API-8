<?php
/**
 * StoreHeader
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
 * StoreHeader Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StoreHeader implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'storeHeader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => '\Swagger\Client\Model\StoreName',
        'url' => '\Swagger\Client\Model\StoreUrl',
        'country_iso_code_alpha3' => '\Swagger\Client\Model\StoreCountryIsoCodeAlpha3',
        'sectors' => '\Swagger\Client\Model\StoreSectors',
        'store_id' => '\Swagger\Client\Model\BeezUPCommonStoreId',
        'user_role' => '\Swagger\Client\Model\StoreUserRole',
        'status' => '\Swagger\Client\Model\StoreStatus',
        'owner_user_id' => 'string',
        'share_count' => 'int',
        'creation_utc_date' => '\DateTime',
        'links' => '\Swagger\Client\Model\StoreHeaderLinks'
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
        'name' => 'name',
        'url' => 'url',
        'country_iso_code_alpha3' => 'countryIsoCodeAlpha3',
        'sectors' => 'sectors',
        'store_id' => 'storeId',
        'user_role' => 'userRole',
        'status' => 'status',
        'owner_user_id' => 'ownerUserId',
        'share_count' => 'shareCount',
        'creation_utc_date' => 'creationUtcDate',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'url' => 'setUrl',
        'country_iso_code_alpha3' => 'setCountryIsoCodeAlpha3',
        'sectors' => 'setSectors',
        'store_id' => 'setStoreId',
        'user_role' => 'setUserRole',
        'status' => 'setStatus',
        'owner_user_id' => 'setOwnerUserId',
        'share_count' => 'setShareCount',
        'creation_utc_date' => 'setCreationUtcDate',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'url' => 'getUrl',
        'country_iso_code_alpha3' => 'getCountryIsoCodeAlpha3',
        'sectors' => 'getSectors',
        'store_id' => 'getStoreId',
        'user_role' => 'getUserRole',
        'status' => 'getStatus',
        'owner_user_id' => 'getOwnerUserId',
        'share_count' => 'getShareCount',
        'creation_utc_date' => 'getCreationUtcDate',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['country_iso_code_alpha3'] = isset($data['country_iso_code_alpha3']) ? $data['country_iso_code_alpha3'] : null;
        $this->container['sectors'] = isset($data['sectors']) ? $data['sectors'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['user_role'] = isset($data['user_role']) ? $data['user_role'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['share_count'] = isset($data['share_count']) ? $data['share_count'] : null;
        $this->container['creation_utc_date'] = isset($data['creation_utc_date']) ? $data['creation_utc_date'] : null;
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

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalid_properties[] = "'url' can't be null";
        }
        if ($this->container['country_iso_code_alpha3'] === null) {
            $invalid_properties[] = "'country_iso_code_alpha3' can't be null";
        }
        if ($this->container['sectors'] === null) {
            $invalid_properties[] = "'sectors' can't be null";
        }
        if ($this->container['store_id'] === null) {
            $invalid_properties[] = "'store_id' can't be null";
        }
        if ($this->container['user_role'] === null) {
            $invalid_properties[] = "'user_role' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        if ($this->container['owner_user_id'] === null) {
            $invalid_properties[] = "'owner_user_id' can't be null";
        }
        if ($this->container['share_count'] === null) {
            $invalid_properties[] = "'share_count' can't be null";
        }
        if ($this->container['creation_utc_date'] === null) {
            $invalid_properties[] = "'creation_utc_date' can't be null";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['url'] === null) {
            return false;
        }
        if ($this->container['country_iso_code_alpha3'] === null) {
            return false;
        }
        if ($this->container['sectors'] === null) {
            return false;
        }
        if ($this->container['store_id'] === null) {
            return false;
        }
        if ($this->container['user_role'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['owner_user_id'] === null) {
            return false;
        }
        if ($this->container['share_count'] === null) {
            return false;
        }
        if ($this->container['creation_utc_date'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return \Swagger\Client\Model\StoreName
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Swagger\Client\Model\StoreName $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets url
     * @return \Swagger\Client\Model\StoreUrl
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param \Swagger\Client\Model\StoreUrl $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets country_iso_code_alpha3
     * @return \Swagger\Client\Model\StoreCountryIsoCodeAlpha3
     */
    public function getCountryIsoCodeAlpha3()
    {
        return $this->container['country_iso_code_alpha3'];
    }

    /**
     * Sets country_iso_code_alpha3
     * @param \Swagger\Client\Model\StoreCountryIsoCodeAlpha3 $country_iso_code_alpha3
     * @return $this
     */
    public function setCountryIsoCodeAlpha3($country_iso_code_alpha3)
    {
        $this->container['country_iso_code_alpha3'] = $country_iso_code_alpha3;

        return $this;
    }

    /**
     * Gets sectors
     * @return \Swagger\Client\Model\StoreSectors
     */
    public function getSectors()
    {
        return $this->container['sectors'];
    }

    /**
     * Sets sectors
     * @param \Swagger\Client\Model\StoreSectors $sectors
     * @return $this
     */
    public function setSectors($sectors)
    {
        $this->container['sectors'] = $sectors;

        return $this;
    }

    /**
     * Gets store_id
     * @return \Swagger\Client\Model\BeezUPCommonStoreId
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     * @param \Swagger\Client\Model\BeezUPCommonStoreId $store_id
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets user_role
     * @return \Swagger\Client\Model\StoreUserRole
     */
    public function getUserRole()
    {
        return $this->container['user_role'];
    }

    /**
     * Sets user_role
     * @param \Swagger\Client\Model\StoreUserRole $user_role
     * @return $this
     */
    public function setUserRole($user_role)
    {
        $this->container['user_role'] = $user_role;

        return $this;
    }

    /**
     * Gets status
     * @return \Swagger\Client\Model\StoreStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Swagger\Client\Model\StoreStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets owner_user_id
     * @return string
     */
    public function getOwnerUserId()
    {
        return $this->container['owner_user_id'];
    }

    /**
     * Sets owner_user_id
     * @param string $owner_user_id The user id of the owner of the store
     * @return $this
     */
    public function setOwnerUserId($owner_user_id)
    {
        $this->container['owner_user_id'] = $owner_user_id;

        return $this;
    }

    /**
     * Gets share_count
     * @return int
     */
    public function getShareCount()
    {
        return $this->container['share_count'];
    }

    /**
     * Sets share_count
     * @param int $share_count The share count related to this store
     * @return $this
     */
    public function setShareCount($share_count)
    {
        $this->container['share_count'] = $share_count;

        return $this;
    }

    /**
     * Gets creation_utc_date
     * @return \DateTime
     */
    public function getCreationUtcDate()
    {
        return $this->container['creation_utc_date'];
    }

    /**
     * Sets creation_utc_date
     * @param \DateTime $creation_utc_date The creation date of the store
     * @return $this
     */
    public function setCreationUtcDate($creation_utc_date)
    {
        $this->container['creation_utc_date'] = $creation_utc_date;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\StoreHeaderLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\StoreHeaderLinks $links
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


