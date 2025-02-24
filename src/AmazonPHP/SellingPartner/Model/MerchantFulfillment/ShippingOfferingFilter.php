<?php
/**
 * ShippingOfferingFilter
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

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
class ShippingOfferingFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingOfferingFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'include_packing_slip_with_label' => 'bool',
        'include_complex_shipping_options' => 'bool',
        'carrier_will_pick_up' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\CarrierWillPickUpOption',
        'delivery_experience' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\DeliveryExperienceOption'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'include_packing_slip_with_label' => null,
        'include_complex_shipping_options' => null,
        'carrier_will_pick_up' => null,
        'delivery_experience' => null
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
        'include_packing_slip_with_label' => 'IncludePackingSlipWithLabel',
        'include_complex_shipping_options' => 'IncludeComplexShippingOptions',
        'carrier_will_pick_up' => 'CarrierWillPickUp',
        'delivery_experience' => 'DeliveryExperience'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'include_packing_slip_with_label' => 'setIncludePackingSlipWithLabel',
        'include_complex_shipping_options' => 'setIncludeComplexShippingOptions',
        'carrier_will_pick_up' => 'setCarrierWillPickUp',
        'delivery_experience' => 'setDeliveryExperience'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'include_packing_slip_with_label' => 'getIncludePackingSlipWithLabel',
        'include_complex_shipping_options' => 'getIncludeComplexShippingOptions',
        'carrier_will_pick_up' => 'getCarrierWillPickUp',
        'delivery_experience' => 'getDeliveryExperience'
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
        $this->container['include_packing_slip_with_label'] = $data['include_packing_slip_with_label'] ?? null;
        $this->container['include_complex_shipping_options'] = $data['include_complex_shipping_options'] ?? null;
        $this->container['carrier_will_pick_up'] = $data['carrier_will_pick_up'] ?? null;
        $this->container['delivery_experience'] = $data['delivery_experience'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
    }


    /**
     * Gets include_packing_slip_with_label
     *
     * @return bool|null
     */
    public function getIncludePackingSlipWithLabel()
    {
        return $this->container['include_packing_slip_with_label'];
    }

    /**
     * Sets include_packing_slip_with_label
     *
     * @param bool|null $include_packing_slip_with_label When true, include a packing slip with the label.
     *
     * @return self
     */
    public function setIncludePackingSlipWithLabel($include_packing_slip_with_label) : self
    {
        $this->container['include_packing_slip_with_label'] = $include_packing_slip_with_label;

        return $this;
    }

    /**
     * Gets include_complex_shipping_options
     *
     * @return bool|null
     */
    public function getIncludeComplexShippingOptions()
    {
        return $this->container['include_complex_shipping_options'];
    }

    /**
     * Sets include_complex_shipping_options
     *
     * @param bool|null $include_complex_shipping_options When true, include complex shipping options.
     *
     * @return self
     */
    public function setIncludeComplexShippingOptions($include_complex_shipping_options) : self
    {
        $this->container['include_complex_shipping_options'] = $include_complex_shipping_options;

        return $this;
    }

    /**
     * Gets carrier_will_pick_up
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CarrierWillPickUpOption|null
     */
    public function getCarrierWillPickUp()
    {
        return $this->container['carrier_will_pick_up'];
    }

    /**
     * Sets carrier_will_pick_up
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\CarrierWillPickUpOption|null $carrier_will_pick_up carrier_will_pick_up
     *
     * @return self
     */
    public function setCarrierWillPickUp($carrier_will_pick_up) : self
    {
        $this->container['carrier_will_pick_up'] = $carrier_will_pick_up;

        return $this;
    }

    /**
     * Gets delivery_experience
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\DeliveryExperienceOption|null
     */
    public function getDeliveryExperience()
    {
        return $this->container['delivery_experience'];
    }

    /**
     * Sets delivery_experience
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\DeliveryExperienceOption|null $delivery_experience delivery_experience
     *
     * @return self
     */
    public function setDeliveryExperience($delivery_experience) : self
    {
        $this->container['delivery_experience'] = $delivery_experience;

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
