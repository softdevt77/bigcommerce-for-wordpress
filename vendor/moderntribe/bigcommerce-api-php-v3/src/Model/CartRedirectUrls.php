<?php
/**
 * CartRedirectUrls
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Data Model for BigCommerce's v3 Server-to-Server Cart API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v0.0.1
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

/**
 * CartRedirectUrls Class Doc Comment
 *
 * @category    Class */
 // @description The object that contains the &#x60;redirect_urls&#x60;.
/**
 * @package     BigCommerce\Api\v3
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CartRedirectUrls implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CartRedirectUrls';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cart_url' => 'string',
        'checkout_url' => 'string',
        'embedded_checkout_url' => 'string'
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
        'cart_url' => 'cart_url',
        'checkout_url' => 'checkout_url',
        'embedded_checkout_url' => 'embedded_checkout_url'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'cart_url' => 'setCartUrl',
        'checkout_url' => 'setCheckoutUrl',
        'embedded_checkout_url' => 'setEmbeddedCheckoutUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'cart_url' => 'getCartUrl',
        'checkout_url' => 'getCheckoutUrl',
        'embedded_checkout_url' => 'getEmbeddedCheckoutUrl'
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
        $this->container['cart_url'] = isset($data['cart_url']) ? $data['cart_url'] : null;
        $this->container['checkout_url'] = isset($data['checkout_url']) ? $data['checkout_url'] : null;
        $this->container['embedded_checkout_url'] = isset($data['embedded_checkout_url']) ? $data['embedded_checkout_url'] : null;
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
     * Gets cart_url
     * @return string
     */
    public function getCartUrl()
    {
        return $this->container['cart_url'];
    }

    /**
     * Sets cart_url
     * @param string $cart_url
     * @return $this
     */
    public function setCartUrl($cart_url)
    {
        $this->container['cart_url'] = $cart_url;

        return $this;
    }

    /**
     * Gets checkout_url
     * @return string
     */
    public function getCheckoutUrl()
    {
        return $this->container['checkout_url'];
    }

    /**
     * Sets checkout_url
     * @param string $checkout_url
     * @return $this
     */
    public function setCheckoutUrl($checkout_url)
    {
        $this->container['checkout_url'] = $checkout_url;

        return $this;
    }

    /**
     * Gets embedded_checkout_url
     * @return string
     */
    public function getEmbeddedCheckoutUrl()
    {
        return $this->container['embedded_checkout_url'];
    }

    /**
     * Sets embedded_checkout_url
     * @param string $embedded_checkout_url
     * @return $this
     */
    public function setEmbeddedCheckoutUrl($embedded_checkout_url)
    {
        $this->container['embedded_checkout_url'] = $embedded_checkout_url;

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


