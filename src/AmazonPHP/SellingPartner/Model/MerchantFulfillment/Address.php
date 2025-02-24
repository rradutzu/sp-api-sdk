<?php
/**
 * Address
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
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'district_or_county' => 'string',
        'email' => 'string',
        'city' => 'string',
        'state_or_province_code' => 'string',
        'postal_code' => 'string',
        'country_code' => 'string',
        'phone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'district_or_county' => null,
        'email' => null,
        'city' => null,
        'state_or_province_code' => null,
        'postal_code' => null,
        'country_code' => null,
        'phone' => null
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
        'name' => 'Name',
        'address_line1' => 'AddressLine1',
        'address_line2' => 'AddressLine2',
        'address_line3' => 'AddressLine3',
        'district_or_county' => 'DistrictOrCounty',
        'email' => 'Email',
        'city' => 'City',
        'state_or_province_code' => 'StateOrProvinceCode',
        'postal_code' => 'PostalCode',
        'country_code' => 'CountryCode',
        'phone' => 'Phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'district_or_county' => 'setDistrictOrCounty',
        'email' => 'setEmail',
        'city' => 'setCity',
        'state_or_province_code' => 'setStateOrProvinceCode',
        'postal_code' => 'setPostalCode',
        'country_code' => 'setCountryCode',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'district_or_county' => 'getDistrictOrCounty',
        'email' => 'getEmail',
        'city' => 'getCity',
        'state_or_province_code' => 'getStateOrProvinceCode',
        'postal_code' => 'getPostalCode',
        'country_code' => 'getCountryCode',
        'phone' => 'getPhone'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['address_line3'] = $data['address_line3'] ?? null;
        $this->container['district_or_county'] = $data['district_or_county'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state_or_province_code'] = $data['state_or_province_code'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['name'] === null) {
            throw new AssertionException("'name' can't be null");
        }

        if ((mb_strlen($this->container['name']) > 30)) {
            throw new AssertionException("invalid value for 'name', the character length must be smaller than or equal to 30.");
        }

        if ($this->container['address_line1'] === null) {
            throw new AssertionException("'address_line1' can't be null");
        }

        if ((mb_strlen($this->container['address_line1']) > 180)) {
            throw new AssertionException("invalid value for 'address_line1', the character length must be smaller than or equal to 180.");
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) > 60)) {
            throw new AssertionException("invalid value for 'address_line2', the character length must be smaller than or equal to 60.");
        }

        if (!is_null($this->container['address_line3']) && (mb_strlen($this->container['address_line3']) > 60)) {
            throw new AssertionException("invalid value for 'address_line3', the character length must be smaller than or equal to 60.");
        }

        if ($this->container['email'] === null) {
            throw new AssertionException("'email' can't be null");
        }

        if ($this->container['city'] === null) {
            throw new AssertionException("'city' can't be null");
        }

        if ((mb_strlen($this->container['city']) > 30)) {
            throw new AssertionException("invalid value for 'city', the character length must be smaller than or equal to 30.");
        }

        if (!is_null($this->container['state_or_province_code']) && (mb_strlen($this->container['state_or_province_code']) > 30)) {
            throw new AssertionException("invalid value for 'state_or_province_code', the character length must be smaller than or equal to 30.");
        }

        if ($this->container['postal_code'] === null) {
            throw new AssertionException("'postal_code' can't be null");
        }

        if ((mb_strlen($this->container['postal_code']) > 30)) {
            throw new AssertionException("invalid value for 'postal_code', the character length must be smaller than or equal to 30.");
        }

        if ($this->container['country_code'] === null) {
            throw new AssertionException("'country_code' can't be null");
        }

        if ($this->container['phone'] === null) {
            throw new AssertionException("'phone' can't be null");
        }

        if ((mb_strlen($this->container['phone']) > 30)) {
            throw new AssertionException("invalid value for 'phone', the character length must be smaller than or equal to 30.");
        }

    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the addressee, or business name.
     *
     * @return self
     */
    public function setName($name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 The street address information.
     *
     * @return self
     */
    public function setAddressLine1($address_line1) : self
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 Additional street address information.
     *
     * @return self
     */
    public function setAddressLine2($address_line2) : self
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_line3
     *
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3
     *
     * @param string|null $address_line3 Additional street address information.
     *
     * @return self
     */
    public function setAddressLine3($address_line3) : self
    {
        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets district_or_county
     *
     * @return string|null
     */
    public function getDistrictOrCounty()
    {
        return $this->container['district_or_county'];
    }

    /**
     * Sets district_or_county
     *
     * @param string|null $district_or_county The district or county.
     *
     * @return self
     */
    public function setDistrictOrCounty($district_or_county) : self
    {
        $this->container['district_or_county'] = $district_or_county;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The email address.
     *
     * @return self
     */
    public function setEmail($email) : self
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city.
     *
     * @return self
     */
    public function setCity($city) : self
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_or_province_code
     *
     * @return string|null
     */
    public function getStateOrProvinceCode()
    {
        return $this->container['state_or_province_code'];
    }

    /**
     * Sets state_or_province_code
     *
     * @param string|null $state_or_province_code The state or province code. **Note.** Required in the Canada, US, and UK marketplaces. Also required for shipments originating from China.
     *
     * @return self
     */
    public function setStateOrProvinceCode($state_or_province_code) : self
    {
        $this->container['state_or_province_code'] = $state_or_province_code;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code The zip code or postal code.
     *
     * @return self
     */
    public function setPostalCode($postal_code) : self
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The country code. A two-character country code, in ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setCountryCode($country_code) : self
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone The phone number.
     *
     * @return self
     */
    public function setPhone($phone) : self
    {
        $this->container['phone'] = $phone;

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
