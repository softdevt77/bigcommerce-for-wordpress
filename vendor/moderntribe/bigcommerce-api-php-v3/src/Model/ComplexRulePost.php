<?php
/**
 * ComplexRulePost
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
 * ComplexRulePost Class Doc Comment
 *
 * @category    Class */
 // @description The model for a POST to create a complex rule on a product.
/** 
 * @package     BigCommerce\Api\v3
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ComplexRulePost implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ComplexRulePost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'product_id' => 'int',
        'sort_order' => 'int',
        'enabled' => 'bool',
        'stop' => 'bool',
        'purchasing_disabled' => 'bool',
        'purchasing_disabled_message' => 'string',
        'purchasing_hidden' => 'bool',
        'price_adjuster' => '\BigCommerce\Api\v3\Model\Adjuster',
        'weight_adjuster' => '\BigCommerce\Api\v3\Model\Adjuster',
        'conditions' => '\BigCommerce\Api\v3\Model\ComplexRuleConditionPost[]'
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
        'product_id' => 'product_id',
        'sort_order' => 'sort_order',
        'enabled' => 'enabled',
        'stop' => 'stop',
        'purchasing_disabled' => 'purchasing_disabled',
        'purchasing_disabled_message' => 'purchasing_disabled_message',
        'purchasing_hidden' => 'purchasing_hidden',
        'price_adjuster' => 'price_adjuster',
        'weight_adjuster' => 'weight_adjuster',
        'conditions' => 'conditions'
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
        'product_id' => 'setProductId',
        'sort_order' => 'setSortOrder',
        'enabled' => 'setEnabled',
        'stop' => 'setStop',
        'purchasing_disabled' => 'setPurchasingDisabled',
        'purchasing_disabled_message' => 'setPurchasingDisabledMessage',
        'purchasing_hidden' => 'setPurchasingHidden',
        'price_adjuster' => 'setPriceAdjuster',
        'weight_adjuster' => 'setWeightAdjuster',
        'conditions' => 'setConditions'
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
        'product_id' => 'getProductId',
        'sort_order' => 'getSortOrder',
        'enabled' => 'getEnabled',
        'stop' => 'getStop',
        'purchasing_disabled' => 'getPurchasingDisabled',
        'purchasing_disabled_message' => 'getPurchasingDisabledMessage',
        'purchasing_hidden' => 'getPurchasingHidden',
        'price_adjuster' => 'getPriceAdjuster',
        'weight_adjuster' => 'getWeightAdjuster',
        'conditions' => 'getConditions'
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
        $this->container['product_id'] = array_key_exists('product_id', $data) ? $data['product_id'] : new \stdClass();
        $this->container['sort_order'] = array_key_exists('sort_order', $data) ? $data['sort_order'] : new \stdClass();
        $this->container['enabled'] = array_key_exists('enabled', $data) ? $data['enabled'] : new \stdClass();
        $this->container['stop'] = array_key_exists('stop', $data) ? $data['stop'] : new \stdClass();
        $this->container['purchasing_disabled'] = array_key_exists('purchasing_disabled', $data) ? $data['purchasing_disabled'] : new \stdClass();
        $this->container['purchasing_disabled_message'] = array_key_exists('purchasing_disabled_message', $data) ? $data['purchasing_disabled_message'] : new \stdClass();
        $this->container['purchasing_hidden'] = array_key_exists('purchasing_hidden', $data) ? $data['purchasing_hidden'] : new \stdClass();
        $this->container['price_adjuster'] = array_key_exists('price_adjuster', $data) ? $data['price_adjuster'] : new \stdClass();
        $this->container['weight_adjuster'] = array_key_exists('weight_adjuster', $data) ? $data['weight_adjuster'] : new \stdClass();
        $this->container['conditions'] = array_key_exists('conditions', $data) ? $data['conditions'] : new \stdClass();
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
        if ($this->container['sort_order'] > 2147483647) {
            $invalid_properties[] = "invalid value for 'sort_order', must be smaller than or equal to 2147483647.";
        }
        if ($this->container['sort_order'] < -2147483648) {
            $invalid_properties[] = "invalid value for 'sort_order', must be bigger than or equal to -2147483648.";
        }
        if (strlen($this->container['purchasing_disabled_message']) > 255) {
            $invalid_properties[] = "invalid value for 'purchasing_disabled_message', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['purchasing_disabled_message']) < 0) {
            $invalid_properties[] = "invalid value for 'purchasing_disabled_message', the character length must be bigger than or equal to 0.";
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
        if ($this->container['sort_order'] > 2147483647) {
            return false;
        }
        if ($this->container['sort_order'] < -2147483648) {
            return false;
        }
        if (strlen($this->container['purchasing_disabled_message']) > 255) {
            return false;
        }
        if (strlen($this->container['purchasing_disabled_message']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id The unique numeric ID of the product with which the rule is associated; increments sequentially.
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets sort_order
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     * @param int $sort_order The priority to give this rule when making adjustments to the product properties.
     * @return $this
     */
    public function setSortOrder($sort_order)
    {

        if ($sort_order > 2147483647) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ComplexRulePost., must be smaller than or equal to 2147483647.');
        }
        if ($sort_order < -2147483648) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ComplexRulePost., must be bigger than or equal to -2147483648.');
        }
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool $enabled Flag for determining whether the rule is to be used when adjusting a product's price, weight, image, or availabilty.
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets stop
     * @return bool
     */
    public function getStop()
    {
        return $this->container['stop'];
    }

    /**
     * Sets stop
     * @param bool $stop Flag for determining whether other rules should not be applied after this rule has been applied.
     * @return $this
     */
    public function setStop($stop)
    {
        $this->container['stop'] = $stop;

        return $this;
    }

    /**
     * Gets purchasing_disabled
     * @return bool
     */
    public function getPurchasingDisabled()
    {
        return $this->container['purchasing_disabled'];
    }

    /**
     * Sets purchasing_disabled
     * @param bool $purchasing_disabled Flag for determining whether the rule should disable purchasing of a product when the conditions are applied.
     * @return $this
     */
    public function setPurchasingDisabled($purchasing_disabled)
    {
        $this->container['purchasing_disabled'] = $purchasing_disabled;

        return $this;
    }

    /**
     * Gets purchasing_disabled_message
     * @return string
     */
    public function getPurchasingDisabledMessage()
    {
        return $this->container['purchasing_disabled_message'];
    }

    /**
     * Sets purchasing_disabled_message
     * @param string $purchasing_disabled_message Message displayed on the storefront when a rule disables the purchasing of a product.
     * @return $this
     */
    public function setPurchasingDisabledMessage($purchasing_disabled_message)
    {
        if (strlen($purchasing_disabled_message) > 255) {
            throw new \InvalidArgumentException('invalid length for $purchasing_disabled_message when calling ComplexRulePost., must be smaller than or equal to 255.');
        }
        if (strlen($purchasing_disabled_message) < 0) {
            throw new \InvalidArgumentException('invalid length for $purchasing_disabled_message when calling ComplexRulePost., must be bigger than or equal to 0.');
        }
        $this->container['purchasing_disabled_message'] = $purchasing_disabled_message;

        return $this;
    }

    /**
     * Gets purchasing_hidden
     * @return bool
     */
    public function getPurchasingHidden()
    {
        return $this->container['purchasing_hidden'];
    }

    /**
     * Sets purchasing_hidden
     * @param bool $purchasing_hidden Flag for determining whether the rule should hide purchasing of a product when the conditions are applied.
     * @return $this
     */
    public function setPurchasingHidden($purchasing_hidden)
    {
        $this->container['purchasing_hidden'] = $purchasing_hidden;

        return $this;
    }

    /**
     * Gets price_adjuster
     * @return \BigCommerce\Api\v3\Model\Adjuster
     */
    public function getPriceAdjuster()
    {
        return $this->container['price_adjuster'];
    }

    /**
     * Sets price_adjuster
     * @param \BigCommerce\Api\v3\Model\Adjuster $price_adjuster
     * @return $this
     */
    public function setPriceAdjuster($price_adjuster)
    {
        $this->container['price_adjuster'] = $price_adjuster;

        return $this;
    }

    /**
     * Gets weight_adjuster
     * @return \BigCommerce\Api\v3\Model\Adjuster
     */
    public function getWeightAdjuster()
    {
        return $this->container['weight_adjuster'];
    }

    /**
     * Sets weight_adjuster
     * @param \BigCommerce\Api\v3\Model\Adjuster $weight_adjuster
     * @return $this
     */
    public function setWeightAdjuster($weight_adjuster)
    {
        $this->container['weight_adjuster'] = $weight_adjuster;

        return $this;
    }

    /**
     * Gets conditions
     * @return \BigCommerce\Api\v3\Model\ComplexRuleConditionPost[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \BigCommerce\Api\v3\Model\ComplexRuleConditionPost[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

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


