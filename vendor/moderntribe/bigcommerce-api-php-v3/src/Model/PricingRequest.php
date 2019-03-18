<?php
/**
 * PricingRequest
 *
 * @package  BigCommerce\Api\v3
 */

/**
 * Product Pricing API
 *
 * API to provide marketing/display pricing for products, variants, and partially configured selections.
 *
 * OpenAPI spec version: master
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

class PricingRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PricingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_id' => 'int',
        'currency_code' => 'string',
        'customer_group_id' => 'int',
        'items' => '\BigCommerce\Api\v3\Model\PricingRequestItem[]'
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
        'channel_id' => 'channel_id',
        'currency_code' => 'currency_code',
        'customer_group_id' => 'customer_group_id',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'channel_id' => 'setChannelId',
        'currency_code' => 'setCurrencyCode',
        'customer_group_id' => 'setCustomerGroupId',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'channel_id' => 'getChannelId',
        'currency_code' => 'getCurrencyCode',
        'customer_group_id' => 'getCustomerGroupId',
        'items' => 'getItems'
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
    public function __construct(array $data = [])
    {
        $this->container['channel_id'] = array_key_exists('channel_id', $data) ? $data['channel_id'] : null;
        $this->container['currency_code'] = array_key_exists('currency_code', $data) ? $data['currency_code'] : null;
        $this->container['customer_group_id'] = array_key_exists('customer_group_id', $data) ? $data['customer_group_id'] : null;
        $this->container['items'] = array_key_exists('items', $data) ? $data['items'] : null;
    }

    /**
     * returns container
     * @return array
     */
    public function get()
    {
        return $this->container;
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
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets channel_id
     * @return int
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     * @param int $channel_id The channel context that pricing should be evaluated within. The default BC storefront is channel 1
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets currency_code
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     * @param string $currency_code The currency of prices to be returned for this request
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets customer_group_id
     * @return int
     */
    public function getCustomerGroupId()
    {
        return $this->container['customer_group_id'];
    }

    /**
     * Sets customer_group_id
     * @param int $customer_group_id The customer group relevant for any customer group pricing, tax values, etc.
     * @return $this
     */
    public function setCustomerGroupId($customer_group_id)
    {
        $this->container['customer_group_id'] = $customer_group_id;

        return $this;
    }

    /**
     * Gets items
     * @return \BigCommerce\Api\v3\Model\PricingRequestItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \BigCommerce\Api\v3\Model\PricingRequestItem[] $items The items to fetch prices for
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}


