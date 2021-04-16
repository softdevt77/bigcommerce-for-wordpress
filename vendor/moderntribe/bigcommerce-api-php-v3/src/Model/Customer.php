<?php
/**
 * Customer
 *
 * @package  BigCommerce\Api\v3
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
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

class Customer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'company' => 'string',
        'phone' => 'string',
        'registration_ip_address' => 'string',
        'notes' => 'string',
        'tax_exempt_category' => 'string',
        'customer_group_id' => 'int',
        'id' => 'int',
        'date_modified' => '\DateTime',
        'date_created' => '\DateTime',
        'address_count' => 'int',
        'attribute_count' => 'int',
        'authentication' => '\BigCommerce\Api\v3\Model\CustomerAuthenticationBase',
        'addresses' => '\BigCommerce\Api\v3\Model\Address[]',
        'attributes' => '\BigCommerce\Api\v3\Model\CustomerAttributeValue[]',
        'form_fields' => 'object[]',
        'store_credit_amounts' => '\BigCommerce\Api\v3\Model\StoreCreditAmounts',
        'accepts_product_review_abandoned_cart_emails' => 'bool',
        'channel_ids' => '\BigCommerce\Api\v3\Model\CustomerChannelIds'
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
        'email' => 'email',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'company' => 'company',
        'phone' => 'phone',
        'registration_ip_address' => 'registration_ip_address',
        'notes' => 'notes',
        'tax_exempt_category' => 'tax_exempt_category',
        'customer_group_id' => 'customer_group_id',
        'id' => 'id',
        'date_modified' => 'date_modified',
        'date_created' => 'date_created',
        'address_count' => 'address_count',
        'attribute_count' => 'attribute_count',
        'authentication' => 'authentication',
        'addresses' => 'addresses',
        'attributes' => 'attributes',
        'form_fields' => 'form_fields',
        'store_credit_amounts' => 'store_credit_amounts',
        'accepts_product_review_abandoned_cart_emails' => 'accepts_product_review_abandoned_cart_emails',
        'channel_ids' => 'channel_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'company' => 'setCompany',
        'phone' => 'setPhone',
        'registration_ip_address' => 'setRegistrationIpAddress',
        'notes' => 'setNotes',
        'tax_exempt_category' => 'setTaxExemptCategory',
        'customer_group_id' => 'setCustomerGroupId',
        'id' => 'setId',
        'date_modified' => 'setDateModified',
        'date_created' => 'setDateCreated',
        'address_count' => 'setAddressCount',
        'attribute_count' => 'setAttributeCount',
        'authentication' => 'setAuthentication',
        'addresses' => 'setAddresses',
        'attributes' => 'setAttributes',
        'form_fields' => 'setFormFields',
        'store_credit_amounts' => 'setStoreCreditAmounts',
        'accepts_product_review_abandoned_cart_emails' => 'setAcceptsProductReviewAbandonedCartEmails',
        'channel_ids' => 'setChannelIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'company' => 'getCompany',
        'phone' => 'getPhone',
        'registration_ip_address' => 'getRegistrationIpAddress',
        'notes' => 'getNotes',
        'tax_exempt_category' => 'getTaxExemptCategory',
        'customer_group_id' => 'getCustomerGroupId',
        'id' => 'getId',
        'date_modified' => 'getDateModified',
        'date_created' => 'getDateCreated',
        'address_count' => 'getAddressCount',
        'attribute_count' => 'getAttributeCount',
        'authentication' => 'getAuthentication',
        'addresses' => 'getAddresses',
        'attributes' => 'getAttributes',
        'form_fields' => 'getFormFields',
        'store_credit_amounts' => 'getStoreCreditAmounts',
        'accepts_product_review_abandoned_cart_emails' => 'getAcceptsProductReviewAbandonedCartEmails',
        'channel_ids' => 'getChannelIds'
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
        $this->container['email'] = array_key_exists('email', $data) ? $data['email'] : null;
        $this->container['first_name'] = array_key_exists('first_name', $data) ? $data['first_name'] : null;
        $this->container['last_name'] = array_key_exists('last_name', $data) ? $data['last_name'] : null;
        $this->container['company'] = array_key_exists('company', $data) ? $data['company'] : null;
        $this->container['phone'] = array_key_exists('phone', $data) ? $data['phone'] : null;
        $this->container['registration_ip_address'] = array_key_exists('registration_ip_address', $data) ? $data['registration_ip_address'] : null;
        $this->container['notes'] = array_key_exists('notes', $data) ? $data['notes'] : null;
        $this->container['tax_exempt_category'] = array_key_exists('tax_exempt_category', $data) ? $data['tax_exempt_category'] : null;
        $this->container['customer_group_id'] = array_key_exists('customer_group_id', $data) ? $data['customer_group_id'] : null;
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
        $this->container['date_modified'] = array_key_exists('date_modified', $data) ? $data['date_modified'] : null;
        $this->container['date_created'] = array_key_exists('date_created', $data) ? $data['date_created'] : null;
        $this->container['address_count'] = array_key_exists('address_count', $data) ? $data['address_count'] : null;
        $this->container['attribute_count'] = array_key_exists('attribute_count', $data) ? $data['attribute_count'] : null;
        $this->container['authentication'] = array_key_exists('authentication', $data) ? $data['authentication'] : null;
        $this->container['addresses'] = array_key_exists('addresses', $data) ? $data['addresses'] : null;
        $this->container['attributes'] = array_key_exists('attributes', $data) ? $data['attributes'] : null;
        $this->container['form_fields'] = array_key_exists('form_fields', $data) ? $data['form_fields'] : null;
        $this->container['store_credit_amounts'] = array_key_exists('store_credit_amounts', $data) ? $data['store_credit_amounts'] : null;
        $this->container['accepts_product_review_abandoned_cart_emails'] = array_key_exists('accepts_product_review_abandoned_cart_emails', $data) ? $data['accepts_product_review_abandoned_cart_emails'] : null;
        $this->container['channel_ids'] = array_key_exists('channel_ids', $data) ? $data['channel_ids'] : null;
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
        if (strlen($this->container['email']) > 255) {
            $invalid_properties[] = "invalid value for 'email', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['email']) < 3) {
            $invalid_properties[] = "invalid value for 'email', the character length must be bigger than or equal to 3.";
        }
        if (strlen($this->container['first_name']) > 100) {
            $invalid_properties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 100.";
        }
        if (strlen($this->container['first_name']) < 1) {
            $invalid_properties[] = "invalid value for 'first_name', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['last_name']) > 100) {
            $invalid_properties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 100.";
        }
        if (strlen($this->container['last_name']) < 1) {
            $invalid_properties[] = "invalid value for 'last_name', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['company']) > 255) {
            $invalid_properties[] = "invalid value for 'company', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['company']) < 0) {
            $invalid_properties[] = "invalid value for 'company', the character length must be bigger than or equal to 0.";
        }
        if (strlen($this->container['phone']) > 50) {
            $invalid_properties[] = "invalid value for 'phone', the character length must be smaller than or equal to 50.";
        }
        if (strlen($this->container['phone']) < 0) {
            $invalid_properties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
        }
        if (strlen($this->container['registration_ip_address']) > 30) {
            $invalid_properties[] = "invalid value for 'registration_ip_address', the character length must be smaller than or equal to 30.";
        }
        if (strlen($this->container['registration_ip_address']) < 0) {
            $invalid_properties[] = "invalid value for 'registration_ip_address', the character length must be bigger than or equal to 0.";
        }
        if (strlen($this->container['tax_exempt_category']) > 255) {
            $invalid_properties[] = "invalid value for 'tax_exempt_category', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['tax_exempt_category']) < 0) {
            $invalid_properties[] = "invalid value for 'tax_exempt_category', the character length must be bigger than or equal to 0.";
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
        if (strlen($this->container['email']) > 255) {
            return false;
        }
        if (strlen($this->container['email']) < 3) {
            return false;
        }
        if (strlen($this->container['first_name']) > 100) {
            return false;
        }
        if (strlen($this->container['first_name']) < 1) {
            return false;
        }
        if (strlen($this->container['last_name']) > 100) {
            return false;
        }
        if (strlen($this->container['last_name']) < 1) {
            return false;
        }
        if (strlen($this->container['company']) > 255) {
            return false;
        }
        if (strlen($this->container['company']) < 0) {
            return false;
        }
        if (strlen($this->container['phone']) > 50) {
            return false;
        }
        if (strlen($this->container['phone']) < 0) {
            return false;
        }
        if (strlen($this->container['registration_ip_address']) > 30) {
            return false;
        }
        if (strlen($this->container['registration_ip_address']) < 0) {
            return false;
        }
        if (strlen($this->container['tax_exempt_category']) > 255) {
            return false;
        }
        if (strlen($this->container['tax_exempt_category']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email The email of the customer. Must be unique.
     * @return $this
     */
    public function setEmail($email)
    {
        if (strlen($email) > 255) {
            throw new \InvalidArgumentException('invalid length for $email when calling Customer., must be smaller than or equal to 255.');
        }
        if (strlen($email) < 3) {
            throw new \InvalidArgumentException('invalid length for $email when calling Customer., must be bigger than or equal to 3.');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name The first name of the customer.
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if (strlen($first_name) > 100) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling Customer., must be smaller than or equal to 100.');
        }
        if (strlen($first_name) < 1) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling Customer., must be bigger than or equal to 1.');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name The last name of the customer.
     * @return $this
     */
    public function setLastName($last_name)
    {
        if (strlen($last_name) > 100) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling Customer., must be smaller than or equal to 100.');
        }
        if (strlen($last_name) < 1) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling Customer., must be bigger than or equal to 1.');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param string $company The company of the customer.
     * @return $this
     */
    public function setCompany($company)
    {
        if (strlen($company) > 255) {
            throw new \InvalidArgumentException('invalid length for $company when calling Customer., must be smaller than or equal to 255.');
        }
        if (strlen($company) < 0) {
            throw new \InvalidArgumentException('invalid length for $company when calling Customer., must be bigger than or equal to 0.');
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone The phone number of the customer.
     * @return $this
     */
    public function setPhone($phone)
    {
        if (strlen($phone) > 50) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Customer., must be smaller than or equal to 50.');
        }
        if (strlen($phone) < 0) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Customer., must be bigger than or equal to 0.');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets registration_ip_address
     * @return string
     */
    public function getRegistrationIpAddress()
    {
        return $this->container['registration_ip_address'];
    }

    /**
     * Sets registration_ip_address
     * @param string $registration_ip_address The IP address from which this customer was registered.
     * @return $this
     */
    public function setRegistrationIpAddress($registration_ip_address)
    {
        if (strlen($registration_ip_address) > 30) {
            throw new \InvalidArgumentException('invalid length for $registration_ip_address when calling Customer., must be smaller than or equal to 30.');
        }
        if (strlen($registration_ip_address) < 0) {
            throw new \InvalidArgumentException('invalid length for $registration_ip_address when calling Customer., must be bigger than or equal to 0.');
        }
        $this->container['registration_ip_address'] = $registration_ip_address;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes The customer notes.
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets tax_exempt_category
     * @return string
     */
    public function getTaxExemptCategory()
    {
        return $this->container['tax_exempt_category'];
    }

    /**
     * Sets tax_exempt_category
     * @param string $tax_exempt_category The tax exempt category code for the customer.
     * @return $this
     */
    public function setTaxExemptCategory($tax_exempt_category)
    {
        if (strlen($tax_exempt_category) > 255) {
            throw new \InvalidArgumentException('invalid length for $tax_exempt_category when calling Customer., must be smaller than or equal to 255.');
        }
        if (strlen($tax_exempt_category) < 0) {
            throw new \InvalidArgumentException('invalid length for $tax_exempt_category when calling Customer., must be bigger than or equal to 0.');
        }
        $this->container['tax_exempt_category'] = $tax_exempt_category;

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
     * @param int $customer_group_id Id of the group which this customer belongs to.
     * @return $this
     */
    public function setCustomerGroupId($customer_group_id)
    {
        $this->container['customer_group_id'] = $customer_group_id;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The unique numeric ID of the customer.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets date_modified
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     * @param \DateTime $date_modified The date on which the customer was modified.
     * @return $this
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

        return $this;
    }

    /**
     * Gets date_created
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param \DateTime $date_created The date of which the customer was created.
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets address_count
     * @return int
     */
    public function getAddressCount()
    {
        return $this->container['address_count'];
    }

    /**
     * Sets address_count
     * @param int $address_count Total number of customer addresses
     * @return $this
     */
    public function setAddressCount($address_count)
    {
        $this->container['address_count'] = $address_count;

        return $this;
    }

    /**
     * Gets attribute_count
     * @return int
     */
    public function getAttributeCount()
    {
        return $this->container['attribute_count'];
    }

    /**
     * Sets attribute_count
     * @param int $attribute_count Total number of customer attributes
     * @return $this
     */
    public function setAttributeCount($attribute_count)
    {
        $this->container['attribute_count'] = $attribute_count;

        return $this;
    }

    /**
     * Gets authentication
     * @return \BigCommerce\Api\v3\Model\CustomerAuthenticationBase
     */
    public function getAuthentication()
    {
        return $this->container['authentication'];
    }

    /**
     * Sets authentication
     * @param \BigCommerce\Api\v3\Model\CustomerAuthenticationBase $authentication
     * @return $this
     */
    public function setAuthentication($authentication)
    {
        $this->container['authentication'] = $authentication;

        return $this;
    }

    /**
     * Gets addresses
     * @return \BigCommerce\Api\v3\Model\Address[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     * @param \BigCommerce\Api\v3\Model\Address[] $addresses Array of customer addresses. Limited to 10
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets attributes
     * @return \BigCommerce\Api\v3\Model\CustomerAttributeValue[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     * @param \BigCommerce\Api\v3\Model\CustomerAttributeValue[] $attributes Array of customer attributes. Limited to 10
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets form_fields
     * @return object[]
     */
    public function getFormFields()
    {
        return $this->container['form_fields'];
    }

    /**
     * Sets form_fields
     * @param object[] $form_fields Array of form fields. Controlled by `formfields` parameter.
     * @return $this
     */
    public function setFormFields($form_fields)
    {
        $this->container['form_fields'] = $form_fields;

        return $this;
    }

    /**
     * Gets store_credit_amounts
     * @return \BigCommerce\Api\v3\Model\StoreCreditAmounts
     */
    public function getStoreCreditAmounts()
    {
        return $this->container['store_credit_amounts'];
    }

    /**
     * Sets store_credit_amounts
     * @param \BigCommerce\Api\v3\Model\StoreCreditAmounts $store_credit_amounts
     * @return $this
     */
    public function setStoreCreditAmounts($store_credit_amounts)
    {
        $this->container['store_credit_amounts'] = $store_credit_amounts;

        return $this;
    }

    /**
     * Gets accepts_product_review_abandoned_cart_emails
     * @return bool
     */
    public function getAcceptsProductReviewAbandonedCartEmails()
    {
        return $this->container['accepts_product_review_abandoned_cart_emails'];
    }

    /**
     * Sets accepts_product_review_abandoned_cart_emails
     * @param bool $accepts_product_review_abandoned_cart_emails It determines if the customer is signed up to receive either product review or abandoned cart emails or recieve both emails.
     * @return $this
     */
    public function setAcceptsProductReviewAbandonedCartEmails($accepts_product_review_abandoned_cart_emails)
    {
        $this->container['accepts_product_review_abandoned_cart_emails'] = $accepts_product_review_abandoned_cart_emails;

        return $this;
    }

    /**
     * Gets channel_ids
     * @return \BigCommerce\Api\v3\Model\CustomerChannelIds
     */
    public function getChannelIds()
    {
        return $this->container['channel_ids'];
    }

    /**
     * Sets channel_ids
     * @param \BigCommerce\Api\v3\Model\CustomerChannelIds $channel_ids
     * @return $this
     */
    public function setChannelIds($channel_ids)
    {
        $this->container['channel_ids'] = $channel_ids;

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


