<?php
/**
 * StandardComparisonTableModule
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
class StandardComparisonTableModule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'StandardComparisonTableModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'product_columns' => '\AmazonPHP\SellingPartner\Model\APlus\StandardComparisonProductBlock[]',
        'metric_row_labels' => '\AmazonPHP\SellingPartner\Model\APlus\PlainTextItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'product_columns' => null,
        'metric_row_labels' => null
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
        'product_columns' => 'productColumns',
        'metric_row_labels' => 'metricRowLabels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'product_columns' => 'setProductColumns',
        'metric_row_labels' => 'setMetricRowLabels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'product_columns' => 'getProductColumns',
        'metric_row_labels' => 'getMetricRowLabels'
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
        $this->container['product_columns'] = $data['product_columns'] ?? null;
        $this->container['metric_row_labels'] = $data['metric_row_labels'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if (!is_null($this->container['product_columns']) && (count($this->container['product_columns']) > 6)) {
            throw new AssertionException("invalid value for 'product_columns', number of items must be less than or equal to 6.");
        }

        if (!is_null($this->container['product_columns']) && (count($this->container['product_columns']) < 0)) {
            throw new AssertionException("invalid value for 'product_columns', number of items must be greater than or equal to 0.");
        }

        if (!is_null($this->container['metric_row_labels']) && (count($this->container['metric_row_labels']) > 10)) {
            throw new AssertionException("invalid value for 'metric_row_labels', number of items must be less than or equal to 10.");
        }

        if (!is_null($this->container['metric_row_labels']) && (count($this->container['metric_row_labels']) < 0)) {
            throw new AssertionException("invalid value for 'metric_row_labels', number of items must be greater than or equal to 0.");
        }

    }


    /**
     * Gets product_columns
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardComparisonProductBlock[]|null
     */
    public function getProductColumns()
    {
        return $this->container['product_columns'];
    }

    /**
     * Sets product_columns
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardComparisonProductBlock[]|null $product_columns product_columns
     *
     * @return self
     */
    public function setProductColumns($product_columns) : self
    {
        $this->container['product_columns'] = $product_columns;

        return $this;
    }

    /**
     * Gets metric_row_labels
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\PlainTextItem[]|null
     */
    public function getMetricRowLabels()
    {
        return $this->container['metric_row_labels'];
    }

    /**
     * Sets metric_row_labels
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\PlainTextItem[]|null $metric_row_labels metric_row_labels
     *
     * @return self
     */
    public function setMetricRowLabels($metric_row_labels) : self
    {
        $this->container['metric_row_labels'] = $metric_row_labels;

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
