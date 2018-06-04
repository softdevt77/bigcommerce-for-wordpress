<?php
/**
 * Widget
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
 * Widget Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BigCommerce\Api\v3
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Widget implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Widget';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'uuid' => 'string',
        'name' => 'string',
        'description' => 'string',
        'widget_configuration' => 'object',
        'widget_template' => '\BigCommerce\Api\v3\Model\WidgetTemplate',
        'date_created' => 'string',
        'date_modified' => 'string'
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
        'uuid' => 'uuid',
        'name' => 'name',
        'description' => 'description',
        'widget_configuration' => 'widget_configuration',
        'widget_template' => 'widget_template',
        'date_created' => 'date_created',
        'date_modified' => 'date_modified'
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
        'uuid' => 'setUuid',
        'name' => 'setName',
        'description' => 'setDescription',
        'widget_configuration' => 'setWidgetConfiguration',
        'widget_template' => 'setWidgetTemplate',
        'date_created' => 'setDateCreated',
        'date_modified' => 'setDateModified'
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
        'uuid' => 'getUuid',
        'name' => 'getName',
        'description' => 'getDescription',
        'widget_configuration' => 'getWidgetConfiguration',
        'widget_template' => 'getWidgetTemplate',
        'date_created' => 'getDateCreated',
        'date_modified' => 'getDateModified'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['uuid'] = array_key_exists('uuid', $data) ? $data['uuid'] : new \stdClass();
        $this->container['name'] = array_key_exists('name', $data) ? $data['name'] : new \stdClass();
        $this->container['description'] = array_key_exists('description', $data) ? $data['description'] : new \stdClass();
        $this->container['widget_configuration'] = array_key_exists('widget_configuration', $data) ? $data['widget_configuration'] : new \stdClass();
        $this->container['widget_template'] = array_key_exists('widget_template', $data) ? $data['widget_template'] : new \stdClass();
        $this->container['date_created'] = array_key_exists('date_created', $data) ? $data['date_created'] : new \stdClass();
        $this->container['date_modified'] = array_key_exists('date_modified', $data) ? $data['date_modified'] : new \stdClass();
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
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid The primary identifier.
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The user-friendly name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $description The user-friendly description.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets widget_configuration
     * @return object
     */
    public function getWidgetConfiguration()
    {
        return $this->container['widget_configuration'];
    }

    /**
     * Sets widget_configuration
     * @param object $widget_configuration The JSON data that populates the template.
     * @return $this
     */
    public function setWidgetConfiguration($widget_configuration)
    {
        $this->container['widget_configuration'] = $widget_configuration;

        return $this;
    }

    /**
     * Gets widget_template
     * @return \BigCommerce\Api\v3\Model\WidgetTemplate
     */
    public function getWidgetTemplate()
    {
        return $this->container['widget_template'];
    }

    /**
     * Sets widget_template
     * @param \BigCommerce\Api\v3\Model\WidgetTemplate $widget_template
     * @return $this
     */
    public function setWidgetTemplate($widget_template)
    {
        $this->container['widget_template'] = $widget_template;

        return $this;
    }

    /**
     * Gets date_created
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param string $date_created The date on which this object was initially created.
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_modified
     * @return string
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     * @param string $date_modified The date on which this object was last updated.
     * @return $this
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

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


