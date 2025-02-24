<?php
/**
 * OfferType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace AmazonPHP\SellingPartner\Model\ProductPricing;

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
class OfferType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OfferType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'offer_type' => '\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCustomerType',
        'buying_price' => '\AmazonPHP\SellingPartner\Model\ProductPricing\PriceType',
        'regular_price' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'business_price' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'quantity_discount_prices' => '\AmazonPHP\SellingPartner\Model\ProductPricing\QuantityDiscountPriceType[]',
        'fulfillment_channel' => 'string',
        'item_condition' => 'string',
        'item_sub_condition' => 'string',
        'seller_sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'offer_type' => null,
        'buying_price' => null,
        'regular_price' => null,
        'business_price' => null,
        'quantity_discount_prices' => null,
        'fulfillment_channel' => null,
        'item_condition' => null,
        'item_sub_condition' => null,
        'seller_sku' => null
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
        'offer_type' => 'offerType',
        'buying_price' => 'BuyingPrice',
        'regular_price' => 'RegularPrice',
        'business_price' => 'businessPrice',
        'quantity_discount_prices' => 'quantityDiscountPrices',
        'fulfillment_channel' => 'FulfillmentChannel',
        'item_condition' => 'ItemCondition',
        'item_sub_condition' => 'ItemSubCondition',
        'seller_sku' => 'SellerSKU'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'offer_type' => 'setOfferType',
        'buying_price' => 'setBuyingPrice',
        'regular_price' => 'setRegularPrice',
        'business_price' => 'setBusinessPrice',
        'quantity_discount_prices' => 'setQuantityDiscountPrices',
        'fulfillment_channel' => 'setFulfillmentChannel',
        'item_condition' => 'setItemCondition',
        'item_sub_condition' => 'setItemSubCondition',
        'seller_sku' => 'setSellerSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'offer_type' => 'getOfferType',
        'buying_price' => 'getBuyingPrice',
        'regular_price' => 'getRegularPrice',
        'business_price' => 'getBusinessPrice',
        'quantity_discount_prices' => 'getQuantityDiscountPrices',
        'fulfillment_channel' => 'getFulfillmentChannel',
        'item_condition' => 'getItemCondition',
        'item_sub_condition' => 'getItemSubCondition',
        'seller_sku' => 'getSellerSku'
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
        $this->container['offer_type'] = $data['offer_type'] ?? null;
        $this->container['buying_price'] = $data['buying_price'] ?? null;
        $this->container['regular_price'] = $data['regular_price'] ?? null;
        $this->container['business_price'] = $data['business_price'] ?? null;
        $this->container['quantity_discount_prices'] = $data['quantity_discount_prices'] ?? null;
        $this->container['fulfillment_channel'] = $data['fulfillment_channel'] ?? null;
        $this->container['item_condition'] = $data['item_condition'] ?? null;
        $this->container['item_sub_condition'] = $data['item_sub_condition'] ?? null;
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['buying_price'] === null) {
            throw new AssertionException("'buying_price' can't be null");
        }

            $this->container['buying_price']->validate();

        if ($this->container['regular_price'] === null) {
            throw new AssertionException("'regular_price' can't be null");
        }

            $this->container['regular_price']->validate();

            if ($this->container['business_price'] !== null) {
            $this->container['business_price']->validate();
            }

        if ($this->container['fulfillment_channel'] === null) {
            throw new AssertionException("'fulfillment_channel' can't be null");
        }

        if ($this->container['item_condition'] === null) {
            throw new AssertionException("'item_condition' can't be null");
        }

        if ($this->container['item_sub_condition'] === null) {
            throw new AssertionException("'item_sub_condition' can't be null");
        }

        if ($this->container['seller_sku'] === null) {
            throw new AssertionException("'seller_sku' can't be null");
        }

    }


    /**
     * Gets offer_type
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\OfferCustomerType|null
     */
    public function getOfferType()
    {
        return $this->container['offer_type'];
    }

    /**
     * Sets offer_type
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\OfferCustomerType|null $offer_type offer_type
     *
     * @return self
     */
    public function setOfferType($offer_type) : self
    {
        $this->container['offer_type'] = $offer_type;

        return $this;
    }

    /**
     * Gets buying_price
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\PriceType
     */
    public function getBuyingPrice()
    {
        return $this->container['buying_price'];
    }

    /**
     * Sets buying_price
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\PriceType $buying_price buying_price
     *
     * @return self
     */
    public function setBuyingPrice($buying_price) : self
    {
        $this->container['buying_price'] = $buying_price;

        return $this;
    }

    /**
     * Gets regular_price
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType
     */
    public function getRegularPrice()
    {
        return $this->container['regular_price'];
    }

    /**
     * Sets regular_price
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType $regular_price regular_price
     *
     * @return self
     */
    public function setRegularPrice($regular_price) : self
    {
        $this->container['regular_price'] = $regular_price;

        return $this;
    }

    /**
     * Gets business_price
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType|null
     */
    public function getBusinessPrice()
    {
        return $this->container['business_price'];
    }

    /**
     * Sets business_price
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType|null $business_price business_price
     *
     * @return self
     */
    public function setBusinessPrice($business_price) : self
    {
        $this->container['business_price'] = $business_price;

        return $this;
    }

    /**
     * Gets quantity_discount_prices
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\QuantityDiscountPriceType[]|null
     */
    public function getQuantityDiscountPrices()
    {
        return $this->container['quantity_discount_prices'];
    }

    /**
     * Sets quantity_discount_prices
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\QuantityDiscountPriceType[]|null $quantity_discount_prices quantity_discount_prices
     *
     * @return self
     */
    public function setQuantityDiscountPrices($quantity_discount_prices) : self
    {
        $this->container['quantity_discount_prices'] = $quantity_discount_prices;

        return $this;
    }

    /**
     * Gets fulfillment_channel
     *
     * @return string
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel
     *
     * @param string $fulfillment_channel The fulfillment channel for the offer listing. Possible values:  * Amazon - Fulfilled by Amazon. * Merchant - Fulfilled by the seller.
     *
     * @return self
     */
    public function setFulfillmentChannel($fulfillment_channel) : self
    {
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }

    /**
     * Gets item_condition
     *
     * @return string
     */
    public function getItemCondition()
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition
     *
     * @param string $item_condition The item condition for the offer listing. Possible values: New, Used, Collectible, Refurbished, or Club.
     *
     * @return self
     */
    public function setItemCondition($item_condition) : self
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }

    /**
     * Gets item_sub_condition
     *
     * @return string
     */
    public function getItemSubCondition()
    {
        return $this->container['item_sub_condition'];
    }

    /**
     * Sets item_sub_condition
     *
     * @param string $item_sub_condition The item subcondition for the offer listing. Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     *
     * @return self
     */
    public function setItemSubCondition($item_sub_condition) : self
    {
        $this->container['item_sub_condition'] = $item_sub_condition;

        return $this;
    }

    /**
     * Gets seller_sku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string $seller_sku The seller stock keeping unit (SKU) of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku) : self
    {
        $this->container['seller_sku'] = $seller_sku;

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
