<?php declare(strict_types=1);
/**
 * OrderItem.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Orders.
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderItem implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'OrderItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'item_sequence_number' => 'string',
        'buyer_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'title' => 'string',
        'ordered_quantity' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\ItemQuantity',
        'scheduled_delivery_shipment' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\ScheduledDeliveryShipment',
        'gift_details' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\GiftDetails',
        'net_price' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Money',
        'tax_details' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\TaxItemDetails',
        'total_price' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Money',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'item_sequence_number' => null,
        'buyer_product_identifier' => null,
        'vendor_product_identifier' => null,
        'title' => null,
        'ordered_quantity' => null,
        'scheduled_delivery_shipment' => null,
        'gift_details' => null,
        'net_price' => null,
        'tax_details' => null,
        'total_price' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'item_sequence_number' => 'itemSequenceNumber',
        'buyer_product_identifier' => 'buyerProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'title' => 'title',
        'ordered_quantity' => 'orderedQuantity',
        'scheduled_delivery_shipment' => 'scheduledDeliveryShipment',
        'gift_details' => 'giftDetails',
        'net_price' => 'netPrice',
        'tax_details' => 'taxDetails',
        'total_price' => 'totalPrice',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
        'buyer_product_identifier' => 'setBuyerProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'title' => 'setTitle',
        'ordered_quantity' => 'setOrderedQuantity',
        'scheduled_delivery_shipment' => 'setScheduledDeliveryShipment',
        'gift_details' => 'setGiftDetails',
        'net_price' => 'setNetPrice',
        'tax_details' => 'setTaxDetails',
        'total_price' => 'setTotalPrice',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
        'buyer_product_identifier' => 'getBuyerProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'title' => 'getTitle',
        'ordered_quantity' => 'getOrderedQuantity',
        'scheduled_delivery_shipment' => 'getScheduledDeliveryShipment',
        'gift_details' => 'getGiftDetails',
        'net_price' => 'getNetPrice',
        'tax_details' => 'getTaxDetails',
        'total_price' => 'getTotalPrice',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['item_sequence_number'] = $data['item_sequence_number'] ?? null;
        $this->container['buyer_product_identifier'] = $data['buyer_product_identifier'] ?? null;
        $this->container['vendor_product_identifier'] = $data['vendor_product_identifier'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['ordered_quantity'] = $data['ordered_quantity'] ?? null;
        $this->container['scheduled_delivery_shipment'] = $data['scheduled_delivery_shipment'] ?? null;
        $this->container['gift_details'] = $data['gift_details'] ?? null;
        $this->container['net_price'] = $data['net_price'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
        $this->container['total_price'] = $data['total_price'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['item_sequence_number'] === null) {
            $invalidProperties[] = "'item_sequence_number' can't be null";
        }

        if ($this->container['ordered_quantity'] === null) {
            $invalidProperties[] = "'ordered_quantity' can't be null";
        }

        if ($this->container['net_price'] === null) {
            $invalidProperties[] = "'net_price' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets item_sequence_number.
     */
    public function getItemSequenceNumber() : string
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number.
     *
     * @param string $item_sequence_number Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     */
    public function setItemSequenceNumber(string $item_sequence_number) : self
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets buyer_product_identifier.
     */
    public function getBuyerProductIdentifier() : ?string
    {
        return $this->container['buyer_product_identifier'];
    }

    /**
     * Sets buyer_product_identifier.
     *
     * @param null|string $buyer_product_identifier buyer's standard identification number (ASIN) of an item
     */
    public function setBuyerProductIdentifier(?string $buyer_product_identifier) : self
    {
        $this->container['buyer_product_identifier'] = $buyer_product_identifier;

        return $this;
    }

    /**
     * Gets vendor_product_identifier.
     */
    public function getVendorProductIdentifier() : ?string
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier.
     *
     * @param null|string $vendor_product_identifier the vendor selected product identification of the item
     */
    public function setVendorProductIdentifier(?string $vendor_product_identifier) : self
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets title.
     */
    public function getTitle() : ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param null|string $title title for the item
     */
    public function setTitle(?string $title) : self
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets ordered_quantity.
     */
    public function getOrderedQuantity() : ItemQuantity
    {
        return $this->container['ordered_quantity'];
    }

    /**
     * Sets ordered_quantity.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\ItemQuantity $ordered_quantity ordered_quantity
     */
    public function setOrderedQuantity(ItemQuantity $ordered_quantity) : self
    {
        $this->container['ordered_quantity'] = $ordered_quantity;

        return $this;
    }

    /**
     * Gets scheduled_delivery_shipment.
     */
    public function getScheduledDeliveryShipment() : ?ScheduledDeliveryShipment
    {
        return $this->container['scheduled_delivery_shipment'];
    }

    /**
     * Sets scheduled_delivery_shipment.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\ScheduledDeliveryShipment $scheduled_delivery_shipment scheduled_delivery_shipment
     */
    public function setScheduledDeliveryShipment(?ScheduledDeliveryShipment $scheduled_delivery_shipment) : self
    {
        $this->container['scheduled_delivery_shipment'] = $scheduled_delivery_shipment;

        return $this;
    }

    /**
     * Gets gift_details.
     */
    public function getGiftDetails() : ?GiftDetails
    {
        return $this->container['gift_details'];
    }

    /**
     * Sets gift_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\GiftDetails $gift_details gift_details
     */
    public function setGiftDetails(?GiftDetails $gift_details) : self
    {
        $this->container['gift_details'] = $gift_details;

        return $this;
    }

    /**
     * Gets net_price.
     */
    public function getNetPrice() : Money
    {
        return $this->container['net_price'];
    }

    /**
     * Sets net_price.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Money $net_price net_price
     */
    public function setNetPrice(Money $net_price) : self
    {
        $this->container['net_price'] = $net_price;

        return $this;
    }

    /**
     * Gets tax_details.
     */
    public function getTaxDetails() : ?TaxItemDetails
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\TaxItemDetails $tax_details tax_details
     */
    public function setTaxDetails(?TaxItemDetails $tax_details) : self
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets total_price.
     */
    public function getTotalPrice() : ?Money
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Money $total_price total_price
     */
    public function setTotalPrice(?Money $total_price) : self
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
