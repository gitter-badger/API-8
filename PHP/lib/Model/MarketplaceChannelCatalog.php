<?php
/**
 * MarketplaceChannelCatalog
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
 * MarketplaceChannelCatalog Class Doc Comment
 *
 * @category    Class
 * @description This object indicates you the association between a channel catalog and a marketplace. The account identifier will be automatically defined based on your marketplace merchant identfier.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MarketplaceChannelCatalog implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'marketplaceChannelCatalog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_technical_code' => '\Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode',
        'marketplace_business_code' => '\Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode',
        'marketlace_market_place_id' => 'string',
        'marketplace_iso_country_code_alpha2' => 'string',
        'beez_up_channel_id' => 'string',
        'beez_up_channel_catalog_id' => 'string',
        'beez_up_store_id' => 'string',
        'beez_up_store_name' => 'string',
        'marketplace_merchant_identifiers' => 'map[string,string]',
        'marketplace_account_id' => '\Swagger\Client\Model\BeezUPCommonMarketplaceAccountId',
        'links' => '\Swagger\Client\Model\BeezUPCommonLink2[]'
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
        'marketplace_technical_code' => 'marketplaceTechnicalCode',
        'marketplace_business_code' => 'marketplaceBusinessCode',
        'marketlace_market_place_id' => 'marketlaceMarketPlaceId',
        'marketplace_iso_country_code_alpha2' => 'marketplaceIsoCountryCodeAlpha2',
        'beez_up_channel_id' => 'beezUPChannelId',
        'beez_up_channel_catalog_id' => 'beezUPChannelCatalogId',
        'beez_up_store_id' => 'beezUPStoreId',
        'beez_up_store_name' => 'beezUPStoreName',
        'marketplace_merchant_identifiers' => 'marketplaceMerchantIdentifiers',
        'marketplace_account_id' => 'marketplaceAccountId',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'marketplace_technical_code' => 'setMarketplaceTechnicalCode',
        'marketplace_business_code' => 'setMarketplaceBusinessCode',
        'marketlace_market_place_id' => 'setMarketlaceMarketPlaceId',
        'marketplace_iso_country_code_alpha2' => 'setMarketplaceIsoCountryCodeAlpha2',
        'beez_up_channel_id' => 'setBeezUpChannelId',
        'beez_up_channel_catalog_id' => 'setBeezUpChannelCatalogId',
        'beez_up_store_id' => 'setBeezUpStoreId',
        'beez_up_store_name' => 'setBeezUpStoreName',
        'marketplace_merchant_identifiers' => 'setMarketplaceMerchantIdentifiers',
        'marketplace_account_id' => 'setMarketplaceAccountId',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'marketplace_technical_code' => 'getMarketplaceTechnicalCode',
        'marketplace_business_code' => 'getMarketplaceBusinessCode',
        'marketlace_market_place_id' => 'getMarketlaceMarketPlaceId',
        'marketplace_iso_country_code_alpha2' => 'getMarketplaceIsoCountryCodeAlpha2',
        'beez_up_channel_id' => 'getBeezUpChannelId',
        'beez_up_channel_catalog_id' => 'getBeezUpChannelCatalogId',
        'beez_up_store_id' => 'getBeezUpStoreId',
        'beez_up_store_name' => 'getBeezUpStoreName',
        'marketplace_merchant_identifiers' => 'getMarketplaceMerchantIdentifiers',
        'marketplace_account_id' => 'getMarketplaceAccountId',
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
        $this->container['marketplace_technical_code'] = isset($data['marketplace_technical_code']) ? $data['marketplace_technical_code'] : null;
        $this->container['marketplace_business_code'] = isset($data['marketplace_business_code']) ? $data['marketplace_business_code'] : null;
        $this->container['marketlace_market_place_id'] = isset($data['marketlace_market_place_id']) ? $data['marketlace_market_place_id'] : null;
        $this->container['marketplace_iso_country_code_alpha2'] = isset($data['marketplace_iso_country_code_alpha2']) ? $data['marketplace_iso_country_code_alpha2'] : null;
        $this->container['beez_up_channel_id'] = isset($data['beez_up_channel_id']) ? $data['beez_up_channel_id'] : null;
        $this->container['beez_up_channel_catalog_id'] = isset($data['beez_up_channel_catalog_id']) ? $data['beez_up_channel_catalog_id'] : null;
        $this->container['beez_up_store_id'] = isset($data['beez_up_store_id']) ? $data['beez_up_store_id'] : null;
        $this->container['beez_up_store_name'] = isset($data['beez_up_store_name']) ? $data['beez_up_store_name'] : null;
        $this->container['marketplace_merchant_identifiers'] = isset($data['marketplace_merchant_identifiers']) ? $data['marketplace_merchant_identifiers'] : null;
        $this->container['marketplace_account_id'] = isset($data['marketplace_account_id']) ? $data['marketplace_account_id'] : null;
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

        if ($this->container['marketplace_technical_code'] === null) {
            $invalid_properties[] = "'marketplace_technical_code' can't be null";
        }
        if ($this->container['marketplace_business_code'] === null) {
            $invalid_properties[] = "'marketplace_business_code' can't be null";
        }
        if ($this->container['marketlace_market_place_id'] === null) {
            $invalid_properties[] = "'marketlace_market_place_id' can't be null";
        }
        if ($this->container['marketplace_iso_country_code_alpha2'] === null) {
            $invalid_properties[] = "'marketplace_iso_country_code_alpha2' can't be null";
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

        if ($this->container['marketplace_technical_code'] === null) {
            return false;
        }
        if ($this->container['marketplace_business_code'] === null) {
            return false;
        }
        if ($this->container['marketlace_market_place_id'] === null) {
            return false;
        }
        if ($this->container['marketplace_iso_country_code_alpha2'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets marketplace_technical_code
     * @return \Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode
     */
    public function getMarketplaceTechnicalCode()
    {
        return $this->container['marketplace_technical_code'];
    }

    /**
     * Sets marketplace_technical_code
     * @param \Swagger\Client\Model\BeezUPCommonMarketplaceTechnicalCode $marketplace_technical_code
     * @return $this
     */
    public function setMarketplaceTechnicalCode($marketplace_technical_code)
    {
        $this->container['marketplace_technical_code'] = $marketplace_technical_code;

        return $this;
    }

    /**
     * Gets marketplace_business_code
     * @return \Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode
     */
    public function getMarketplaceBusinessCode()
    {
        return $this->container['marketplace_business_code'];
    }

    /**
     * Sets marketplace_business_code
     * @param \Swagger\Client\Model\BeezUPCommonMarketplaceBusinessCode $marketplace_business_code
     * @return $this
     */
    public function setMarketplaceBusinessCode($marketplace_business_code)
    {
        $this->container['marketplace_business_code'] = $marketplace_business_code;

        return $this;
    }

    /**
     * Gets marketlace_market_place_id
     * @return string
     */
    public function getMarketlaceMarketPlaceId()
    {
        return $this->container['marketlace_market_place_id'];
    }

    /**
     * Sets marketlace_market_place_id
     * @param string $marketlace_market_place_id The marketplace identifier in the marketplace
     * @return $this
     */
    public function setMarketlaceMarketPlaceId($marketlace_market_place_id)
    {
        $this->container['marketlace_market_place_id'] = $marketlace_market_place_id;

        return $this;
    }

    /**
     * Gets marketplace_iso_country_code_alpha2
     * @return string
     */
    public function getMarketplaceIsoCountryCodeAlpha2()
    {
        return $this->container['marketplace_iso_country_code_alpha2'];
    }

    /**
     * Sets marketplace_iso_country_code_alpha2
     * @param string $marketplace_iso_country_code_alpha2 The marketplace country iso code alpha 2 (see http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Decoding_table for more details)
     * @return $this
     */
    public function setMarketplaceIsoCountryCodeAlpha2($marketplace_iso_country_code_alpha2)
    {
        $this->container['marketplace_iso_country_code_alpha2'] = $marketplace_iso_country_code_alpha2;

        return $this;
    }

    /**
     * Gets beez_up_channel_id
     * @return string
     */
    public function getBeezUpChannelId()
    {
        return $this->container['beez_up_channel_id'];
    }

    /**
     * Sets beez_up_channel_id
     * @param string $beez_up_channel_id The channel identifier in BeezUP
     * @return $this
     */
    public function setBeezUpChannelId($beez_up_channel_id)
    {
        $this->container['beez_up_channel_id'] = $beez_up_channel_id;

        return $this;
    }

    /**
     * Gets beez_up_channel_catalog_id
     * @return string
     */
    public function getBeezUpChannelCatalogId()
    {
        return $this->container['beez_up_channel_catalog_id'];
    }

    /**
     * Sets beez_up_channel_catalog_id
     * @param string $beez_up_channel_catalog_id The channel catalog identifier
     * @return $this
     */
    public function setBeezUpChannelCatalogId($beez_up_channel_catalog_id)
    {
        $this->container['beez_up_channel_catalog_id'] = $beez_up_channel_catalog_id;

        return $this;
    }

    /**
     * Gets beez_up_store_id
     * @return string
     */
    public function getBeezUpStoreId()
    {
        return $this->container['beez_up_store_id'];
    }

    /**
     * Sets beez_up_store_id
     * @param string $beez_up_store_id The store identifier
     * @return $this
     */
    public function setBeezUpStoreId($beez_up_store_id)
    {
        $this->container['beez_up_store_id'] = $beez_up_store_id;

        return $this;
    }

    /**
     * Gets beez_up_store_name
     * @return string
     */
    public function getBeezUpStoreName()
    {
        return $this->container['beez_up_store_name'];
    }

    /**
     * Sets beez_up_store_name
     * @param string $beez_up_store_name The store name
     * @return $this
     */
    public function setBeezUpStoreName($beez_up_store_name)
    {
        $this->container['beez_up_store_name'] = $beez_up_store_name;

        return $this;
    }

    /**
     * Gets marketplace_merchant_identifiers
     * @return map[string,string]
     */
    public function getMarketplaceMerchantIdentifiers()
    {
        return $this->container['marketplace_merchant_identifiers'];
    }

    /**
     * Sets marketplace_merchant_identifiers
     * @param map[string,string] $marketplace_merchant_identifiers The marketplace merchant identifier list
     * @return $this
     */
    public function setMarketplaceMerchantIdentifiers($marketplace_merchant_identifiers)
    {
        $this->container['marketplace_merchant_identifiers'] = $marketplace_merchant_identifiers;

        return $this;
    }

    /**
     * Gets marketplace_account_id
     * @return \Swagger\Client\Model\BeezUPCommonMarketplaceAccountId
     */
    public function getMarketplaceAccountId()
    {
        return $this->container['marketplace_account_id'];
    }

    /**
     * Sets marketplace_account_id
     * @param \Swagger\Client\Model\BeezUPCommonMarketplaceAccountId $marketplace_account_id
     * @return $this
     */
    public function setMarketplaceAccountId($marketplace_account_id)
    {
        $this->container['marketplace_account_id'] = $marketplace_account_id;

        return $this;
    }

    /**
     * Gets links
     * @return \Swagger\Client\Model\BeezUPCommonLink2[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Swagger\Client\Model\BeezUPCommonLink2[] $links Indicate the actions you can do on a channel catalog
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


