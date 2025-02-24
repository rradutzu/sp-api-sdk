<?php
/**
 * TaxRegistrationDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TaxRegistrationDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TaxRegistrationDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'tax_registration_type' => 'string',
        'tax_registration_number' => 'string',
        'tax_registration_address' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\Address',
        'tax_registration_messages' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'tax_registration_type' => null,
        'tax_registration_number' => null,
        'tax_registration_address' => null,
        'tax_registration_messages' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'tax_registration_type' => 'taxRegistrationType',
        'tax_registration_number' => 'taxRegistrationNumber',
        'tax_registration_address' => 'taxRegistrationAddress',
        'tax_registration_messages' => 'taxRegistrationMessages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'tax_registration_type' => 'setTaxRegistrationType',
        'tax_registration_number' => 'setTaxRegistrationNumber',
        'tax_registration_address' => 'setTaxRegistrationAddress',
        'tax_registration_messages' => 'setTaxRegistrationMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'tax_registration_type' => 'getTaxRegistrationType',
        'tax_registration_number' => 'getTaxRegistrationNumber',
        'tax_registration_address' => 'getTaxRegistrationAddress',
        'tax_registration_messages' => 'getTaxRegistrationMessages'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    const TAX_REGISTRATION_TYPE_VAT = 'VAT';
    const TAX_REGISTRATION_TYPE_GST = 'GST';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxRegistrationTypeAllowableValues() : array
    {
        return [
            self::TAX_REGISTRATION_TYPE_VAT,
            self::TAX_REGISTRATION_TYPE_GST,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['tax_registration_type'] = $data['tax_registration_type'] ?? null;
        $this->container['tax_registration_number'] = $data['tax_registration_number'] ?? null;
        $this->container['tax_registration_address'] = $data['tax_registration_address'] ?? null;
        $this->container['tax_registration_messages'] = $data['tax_registration_messages'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        $allowedValues = $this->getTaxRegistrationTypeAllowableValues();
        if (!is_null($this->container['tax_registration_type']) && !in_array($this->container['tax_registration_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'tax_registration_type', must be one of '%s'",
                    $this->container['tax_registration_type'],
                    implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['tax_registration_number'] === null) {
            throw new AssertionException("'tax_registration_number' can't be null");
        }

            if ($this->container['tax_registration_address'] !== null) {
            $this->container['tax_registration_address']->validate();
            }

    }


    /**
     * Gets tax_registration_type
     *
     * @return string|null
     */
    public function getTaxRegistrationType()
    {
        return $this->container['tax_registration_type'];
    }

    /**
     * Sets tax_registration_type
     *
     * @param string|null $tax_registration_type Tax registration type for the entity.
     *
     * @return self
     */
    public function setTaxRegistrationType($tax_registration_type) : self
    {
        $this->container['tax_registration_type'] = $tax_registration_type;

        return $this;
    }

    /**
     * Gets tax_registration_number
     *
     * @return string
     */
    public function getTaxRegistrationNumber()
    {
        return $this->container['tax_registration_number'];
    }

    /**
     * Sets tax_registration_number
     *
     * @param string $tax_registration_number Tax registration number for the party. For example, VAT ID.
     *
     * @return self
     */
    public function setTaxRegistrationNumber($tax_registration_number) : self
    {
        $this->container['tax_registration_number'] = $tax_registration_number;

        return $this;
    }

    /**
     * Gets tax_registration_address
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\Address|null
     */
    public function getTaxRegistrationAddress()
    {
        return $this->container['tax_registration_address'];
    }

    /**
     * Sets tax_registration_address
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\Address|null $tax_registration_address tax_registration_address
     *
     * @return self
     */
    public function setTaxRegistrationAddress($tax_registration_address) : self
    {
        $this->container['tax_registration_address'] = $tax_registration_address;

        return $this;
    }

    /**
     * Gets tax_registration_messages
     *
     * @return string|null
     */
    public function getTaxRegistrationMessages()
    {
        return $this->container['tax_registration_messages'];
    }

    /**
     * Sets tax_registration_messages
     *
     * @param string|null $tax_registration_messages Tax registration message that can be used for additional tax related details.
     *
     * @return self
     */
    public function setTaxRegistrationMessages($tax_registration_messages) : self
    {
        $this->container['tax_registration_messages'] = $tax_registration_messages;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize() : string
    {
       return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString() : string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
