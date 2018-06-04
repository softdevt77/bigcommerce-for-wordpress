<?php
/**
 * MetafieldBase
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 API.
 *
 * OpenAPI spec version: 3.0.0b
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

/**
 * MetafieldBase Class Doc Comment
 *
 * @category    Class */
 // @description Common Metafield properties.
/** 
 * @package     BigCommerce\Api\v3
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MetafieldBase implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MetafieldBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'permission_set' => 'string',
        'namespace' => 'string',
        'key' => 'string',
        'value' => 'string',
        'description' => 'string',
        'resource_type' => 'string',
        'resource_id' => 'int'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'permission_set' => 'permission_set',
        'namespace' => 'namespace',
        'key' => 'key',
        'value' => 'value',
        'description' => 'description',
        'resource_type' => 'resource_type',
        'resource_id' => 'resource_id'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'permission_set' => 'setPermissionSet',
        'namespace' => 'setNamespace',
        'key' => 'setKey',
        'value' => 'setValue',
        'description' => 'setDescription',
        'resource_type' => 'setResourceType',
        'resource_id' => 'setResourceId'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'permission_set' => 'getPermissionSet',
        'namespace' => 'getNamespace',
        'key' => 'getKey',
        'value' => 'getValue',
        'description' => 'getDescription',
        'resource_type' => 'getResourceType',
        'resource_id' => 'getResourceId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const PERMISSION_SET_APP_ONLY = 'app_only';
    const PERMISSION_SET_READ = 'read';
    const PERMISSION_SET_WRITE = 'write';
    const RESOURCE_TYPE_CATEGORY = 'category';
    const RESOURCE_TYPE_BRAND = 'brand';
    const RESOURCE_TYPE_PRODUCT = 'product';
    const RESOURCE_TYPE_VARIANT = 'variant';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPermissionSetAllowableValues()
    {
        return [
            self::PERMISSION_SET_APP_ONLY,
            self::PERMISSION_SET_READ,
            self::PERMISSION_SET_WRITE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_CATEGORY,
            self::RESOURCE_TYPE_BRAND,
            self::RESOURCE_TYPE_PRODUCT,
            self::RESOURCE_TYPE_VARIANT,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = [])
    {
        $this->container['permission_set'] = array_key_exists('permission_set', $data) ? $data['permission_set'] : new \stdClass();
        $this->container['namespace'] = array_key_exists('namespace', $data) ? $data['namespace'] : new \stdClass();
        $this->container['key'] = array_key_exists('key', $data) ? $data['key'] : new \stdClass();
        $this->container['value'] = array_key_exists('value', $data) ? $data['value'] : new \stdClass();
        $this->container['description'] = array_key_exists('description', $data) ? $data['description'] : new \stdClass();
        $this->container['resource_type'] = array_key_exists('resource_type', $data) ? $data['resource_type'] : new \stdClass();
        $this->container['resource_id'] = array_key_exists('resource_id', $data) ? $data['resource_id'] : new \stdClass();
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
        $invalid_properties = array();
        $allowed_values = array("app_only", "read", "write");
        if (!in_array($this->container['permission_set'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'permission_set', must be one of #{allowed_values}.";
        }
        if (strlen($this->container['namespace']) > 64) {
            $invalid_properties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
        }
        if (strlen($this->container['namespace']) < 1) {
            $invalid_properties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['key']) > 64) {
            $invalid_properties[] = "invalid value for 'key', the character length must be smaller than or equal to 64.";
        }
        if (strlen($this->container['key']) < 1) {
            $invalid_properties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['value']) > 65535) {
            $invalid_properties[] = "invalid value for 'value', the character length must be smaller than or equal to 65535.";
        }
        if (strlen($this->container['value']) < 1) {
            $invalid_properties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['description']) > 255) {
            $invalid_properties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['description']) < 0) {
            $invalid_properties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
        }
        $allowed_values = array("category", "brand", "product", "variant");
        if (!in_array($this->container['resource_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'resource_type', must be one of #{allowed_values}.";
        }
        if ($this->container['resource_id'] > 10000000000) {
            $invalid_properties[] = "invalid value for 'resource_id', must be smaller than or equal to 10000000000.";
        }
        if ($this->container['resource_id'] < 0) {
            $invalid_properties[] = "invalid value for 'resource_id', must be bigger than or equal to 0.";
        }
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
        $allowed_values = array("app_only", "read", "write");
        if (!in_array($this->container['permission_set'], $allowed_values)) {
            return false;
        }
        if (strlen($this->container['namespace']) > 64) {
            return false;
        }
        if (strlen($this->container['namespace']) < 1) {
            return false;
        }
        if (strlen($this->container['key']) > 64) {
            return false;
        }
        if (strlen($this->container['key']) < 1) {
            return false;
        }
        if (strlen($this->container['value']) > 65535) {
            return false;
        }
        if (strlen($this->container['value']) < 1) {
            return false;
        }
        if (strlen($this->container['description']) > 255) {
            return false;
        }
        if (strlen($this->container['description']) < 0) {
            return false;
        }
        $allowed_values = array("category", "brand", "product", "variant");
        if (!in_array($this->container['resource_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['resource_id'] > 10000000000) {
            return false;
        }
        if ($this->container['resource_id'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets permission_set
     * @return string
     */
    public function getPermissionSet()
    {
        return $this->container['permission_set'];
    }

    /**
     * Sets permission_set
     * @param string $permission_set Determines whether the field is completely private to the app that owns the field (`app_only`), or visible to other API consumers (`read`), or completely open for reading and writing to other apps (`write`).
     * @return $this
     */
    public function setPermissionSet($permission_set)
    {
        $allowed_values = array('app_only', 'read', 'write');
        if (!in_array($permission_set, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'permission_set', must be one of 'app_only', 'read', 'write'");
        }
        $this->container['permission_set'] = $permission_set;

        return $this;
    }

    /**
     * Gets namespace
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     * @param string $namespace Namespace for the metafield, for organizational purposes.
     * @return $this
     */
    public function setNamespace($namespace)
    {
        if (strlen($namespace) > 64) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling MetafieldBase., must be smaller than or equal to 64.');
        }
        if (strlen($namespace) < 1) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling MetafieldBase., must be bigger than or equal to 1.');
        }
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key The name of the field, for example: `location_id`, `color`.
     * @return $this
     */
    public function setKey($key)
    {
        if (strlen($key) > 64) {
            throw new \InvalidArgumentException('invalid length for $key when calling MetafieldBase., must be smaller than or equal to 64.');
        }
        if (strlen($key) < 1) {
            throw new \InvalidArgumentException('invalid length for $key when calling MetafieldBase., must be bigger than or equal to 1.');
        }
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value The value of the field, for example: `1`, `blue`.
     * @return $this
     */
    public function setValue($value)
    {
        if (strlen($value) > 65535) {
            throw new \InvalidArgumentException('invalid length for $value when calling MetafieldBase., must be smaller than or equal to 65535.');
        }
        if (strlen($value) < 1) {
            throw new \InvalidArgumentException('invalid length for $value when calling MetafieldBase., must be bigger than or equal to 1.');
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description for the metafields.
     * @return $this
     */
    public function setDescription($description)
    {
        if (strlen($description) > 255) {
            throw new \InvalidArgumentException('invalid length for $description when calling MetafieldBase., must be smaller than or equal to 255.');
        }
        if (strlen($description) < 0) {
            throw new \InvalidArgumentException('invalid length for $description when calling MetafieldBase., must be bigger than or equal to 0.');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets resource_type
     * @return string
     */
    public function getResourceType()
    {
        return $this->container['resource_type'];
    }

    /**
     * Sets resource_type
     * @param string $resource_type The type of resource with which the metafield is associated.
     * @return $this
     */
    public function setResourceType($resource_type)
    {
        $allowed_values = array('category', 'brand', 'product', 'variant');
        if (!in_array($resource_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'resource_type', must be one of 'category', 'brand', 'product', 'variant'");
        }
        $this->container['resource_type'] = $resource_type;

        return $this;
    }

    /**
     * Gets resource_id
     * @return int
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     * @param int $resource_id The unique identifier for the resource with which the metafield is associated.
     * @return $this
     */
    public function setResourceId($resource_id)
    {

        if ($resource_id > 10000000000) {
            throw new \InvalidArgumentException('invalid value for $resource_id when calling MetafieldBase., must be smaller than or equal to 10000000000.');
        }
        if ($resource_id < 0) {
            throw new \InvalidArgumentException('invalid value for $resource_id when calling MetafieldBase., must be bigger than or equal to 0.');
        }
        $this->container['resource_id'] = $resource_id;

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


