<?php
/**
 * StandardFourImageTextQuadrantModule
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\APlus;

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
class StandardFourImageTextQuadrantModule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'StandardFourImageTextQuadrantModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'block1' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock',
        'block2' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock',
        'block3' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock',
        'block4' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'block1' => null,
        'block2' => null,
        'block3' => null,
        'block4' => null
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
        'block1' => 'block1',
        'block2' => 'block2',
        'block3' => 'block3',
        'block4' => 'block4'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'block1' => 'setBlock1',
        'block2' => 'setBlock2',
        'block3' => 'setBlock3',
        'block4' => 'setBlock4'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'block1' => 'getBlock1',
        'block2' => 'getBlock2',
        'block3' => 'getBlock3',
        'block4' => 'getBlock4'
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
        $this->container['block1'] = $data['block1'] ?? null;
        $this->container['block2'] = $data['block2'] ?? null;
        $this->container['block3'] = $data['block3'] ?? null;
        $this->container['block4'] = $data['block4'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['block1'] === null) {
            throw new AssertionException("'block1' can't be null");
        }

            $this->container['block1']->validate();

        if ($this->container['block2'] === null) {
            throw new AssertionException("'block2' can't be null");
        }

            $this->container['block2']->validate();

        if ($this->container['block3'] === null) {
            throw new AssertionException("'block3' can't be null");
        }

            $this->container['block3']->validate();

        if ($this->container['block4'] === null) {
            throw new AssertionException("'block4' can't be null");
        }

            $this->container['block4']->validate();

    }


    /**
     * Gets block1
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock
     */
    public function getBlock1()
    {
        return $this->container['block1'];
    }

    /**
     * Sets block1
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock $block1 block1
     *
     * @return self
     */
    public function setBlock1($block1) : self
    {
        $this->container['block1'] = $block1;

        return $this;
    }

    /**
     * Gets block2
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock
     */
    public function getBlock2()
    {
        return $this->container['block2'];
    }

    /**
     * Sets block2
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock $block2 block2
     *
     * @return self
     */
    public function setBlock2($block2) : self
    {
        $this->container['block2'] = $block2;

        return $this;
    }

    /**
     * Gets block3
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock
     */
    public function getBlock3()
    {
        return $this->container['block3'];
    }

    /**
     * Sets block3
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock $block3 block3
     *
     * @return self
     */
    public function setBlock3($block3) : self
    {
        $this->container['block3'] = $block3;

        return $this;
    }

    /**
     * Gets block4
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock
     */
    public function getBlock4()
    {
        return $this->container['block4'];
    }

    /**
     * Sets block4
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock $block4 block4
     *
     * @return self
     */
    public function setBlock4($block4) : self
    {
        $this->container['block4'] = $block4;

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
