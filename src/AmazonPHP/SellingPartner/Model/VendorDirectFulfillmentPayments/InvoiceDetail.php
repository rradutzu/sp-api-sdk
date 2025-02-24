<?php
/**
 * InvoiceDetail
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AmazonPHP\SellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Payments
 *
 * The Selling Partner API for Direct Fulfillment Payments provides programmatic access to a direct fulfillment vendor's invoice data.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments;

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
class InvoiceDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InvoiceDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'invoice_number' => 'string',
        'invoice_date' => '\DateTime',
        'reference_number' => 'string',
        'remit_to_party' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification',
        'ship_from_party' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification',
        'bill_to_party' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification',
        'ship_to_country_code' => 'string',
        'payment_terms_code' => 'string',
        'invoice_total' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\Money',
        'tax_totals' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\TaxDetail[]',
        'additional_details' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\AdditionalDetails[]',
        'charge_details' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\ChargeDetails[]',
        'items' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\InvoiceItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'invoice_number' => null,
        'invoice_date' => 'date-time',
        'reference_number' => null,
        'remit_to_party' => null,
        'ship_from_party' => null,
        'bill_to_party' => null,
        'ship_to_country_code' => null,
        'payment_terms_code' => null,
        'invoice_total' => null,
        'tax_totals' => null,
        'additional_details' => null,
        'charge_details' => null,
        'items' => null
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
        'invoice_number' => 'invoiceNumber',
        'invoice_date' => 'invoiceDate',
        'reference_number' => 'referenceNumber',
        'remit_to_party' => 'remitToParty',
        'ship_from_party' => 'shipFromParty',
        'bill_to_party' => 'billToParty',
        'ship_to_country_code' => 'shipToCountryCode',
        'payment_terms_code' => 'paymentTermsCode',
        'invoice_total' => 'invoiceTotal',
        'tax_totals' => 'taxTotals',
        'additional_details' => 'additionalDetails',
        'charge_details' => 'chargeDetails',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'invoice_number' => 'setInvoiceNumber',
        'invoice_date' => 'setInvoiceDate',
        'reference_number' => 'setReferenceNumber',
        'remit_to_party' => 'setRemitToParty',
        'ship_from_party' => 'setShipFromParty',
        'bill_to_party' => 'setBillToParty',
        'ship_to_country_code' => 'setShipToCountryCode',
        'payment_terms_code' => 'setPaymentTermsCode',
        'invoice_total' => 'setInvoiceTotal',
        'tax_totals' => 'setTaxTotals',
        'additional_details' => 'setAdditionalDetails',
        'charge_details' => 'setChargeDetails',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'invoice_number' => 'getInvoiceNumber',
        'invoice_date' => 'getInvoiceDate',
        'reference_number' => 'getReferenceNumber',
        'remit_to_party' => 'getRemitToParty',
        'ship_from_party' => 'getShipFromParty',
        'bill_to_party' => 'getBillToParty',
        'ship_to_country_code' => 'getShipToCountryCode',
        'payment_terms_code' => 'getPaymentTermsCode',
        'invoice_total' => 'getInvoiceTotal',
        'tax_totals' => 'getTaxTotals',
        'additional_details' => 'getAdditionalDetails',
        'charge_details' => 'getChargeDetails',
        'items' => 'getItems'
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
        $this->container['invoice_number'] = $data['invoice_number'] ?? null;
        $this->container['invoice_date'] = $data['invoice_date'] ?? null;
        $this->container['reference_number'] = $data['reference_number'] ?? null;
        $this->container['remit_to_party'] = $data['remit_to_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['bill_to_party'] = $data['bill_to_party'] ?? null;
        $this->container['ship_to_country_code'] = $data['ship_to_country_code'] ?? null;
        $this->container['payment_terms_code'] = $data['payment_terms_code'] ?? null;
        $this->container['invoice_total'] = $data['invoice_total'] ?? null;
        $this->container['tax_totals'] = $data['tax_totals'] ?? null;
        $this->container['additional_details'] = $data['additional_details'] ?? null;
        $this->container['charge_details'] = $data['charge_details'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['invoice_number'] === null) {
            throw new AssertionException("'invoice_number' can't be null");
        }

        if ($this->container['invoice_date'] === null) {
            throw new AssertionException("'invoice_date' can't be null");
        }

        if ($this->container['remit_to_party'] === null) {
            throw new AssertionException("'remit_to_party' can't be null");
        }

            $this->container['remit_to_party']->validate();

        if ($this->container['ship_from_party'] === null) {
            throw new AssertionException("'ship_from_party' can't be null");
        }

            $this->container['ship_from_party']->validate();

            if ($this->container['bill_to_party'] !== null) {
            $this->container['bill_to_party']->validate();
            }

        if ($this->container['invoice_total'] === null) {
            throw new AssertionException("'invoice_total' can't be null");
        }

            $this->container['invoice_total']->validate();

        if ($this->container['items'] === null) {
            throw new AssertionException("'items' can't be null");
        }

    }


    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number The unique invoice number.
     *
     * @return self
     */
    public function setInvoiceNumber($invoice_number) : self
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date Invoice date.
     *
     * @return self
     */
    public function setInvoiceDate($invoice_date) : self
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number An additional unique reference number used for regulatory or other purposes.
     *
     * @return self
     */
    public function setReferenceNumber($reference_number) : self
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets remit_to_party
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification
     */
    public function getRemitToParty()
    {
        return $this->container['remit_to_party'];
    }

    /**
     * Sets remit_to_party
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification $remit_to_party remit_to_party
     *
     * @return self
     */
    public function setRemitToParty($remit_to_party) : self
    {
        $this->container['remit_to_party'] = $remit_to_party;

        return $this;
    }

    /**
     * Gets ship_from_party
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification $ship_from_party ship_from_party
     *
     * @return self
     */
    public function setShipFromParty($ship_from_party) : self
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets bill_to_party
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification|null
     */
    public function getBillToParty()
    {
        return $this->container['bill_to_party'];
    }

    /**
     * Sets bill_to_party
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\PartyIdentification|null $bill_to_party bill_to_party
     *
     * @return self
     */
    public function setBillToParty($bill_to_party) : self
    {
        $this->container['bill_to_party'] = $bill_to_party;

        return $this;
    }

    /**
     * Gets ship_to_country_code
     *
     * @return string|null
     */
    public function getShipToCountryCode()
    {
        return $this->container['ship_to_country_code'];
    }

    /**
     * Sets ship_to_country_code
     *
     * @param string|null $ship_to_country_code Ship-to country code.
     *
     * @return self
     */
    public function setShipToCountryCode($ship_to_country_code) : self
    {
        $this->container['ship_to_country_code'] = $ship_to_country_code;

        return $this;
    }

    /**
     * Gets payment_terms_code
     *
     * @return string|null
     */
    public function getPaymentTermsCode()
    {
        return $this->container['payment_terms_code'];
    }

    /**
     * Sets payment_terms_code
     *
     * @param string|null $payment_terms_code The payment terms for the invoice.
     *
     * @return self
     */
    public function setPaymentTermsCode($payment_terms_code) : self
    {
        $this->container['payment_terms_code'] = $payment_terms_code;

        return $this;
    }

    /**
     * Gets invoice_total
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\Money
     */
    public function getInvoiceTotal()
    {
        return $this->container['invoice_total'];
    }

    /**
     * Sets invoice_total
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\Money $invoice_total invoice_total
     *
     * @return self
     */
    public function setInvoiceTotal($invoice_total) : self
    {
        $this->container['invoice_total'] = $invoice_total;

        return $this;
    }

    /**
     * Gets tax_totals
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\TaxDetail[]|null
     */
    public function getTaxTotals()
    {
        return $this->container['tax_totals'];
    }

    /**
     * Sets tax_totals
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\TaxDetail[]|null $tax_totals Individual tax details per line item.
     *
     * @return self
     */
    public function setTaxTotals($tax_totals) : self
    {
        $this->container['tax_totals'] = $tax_totals;

        return $this;
    }

    /**
     * Gets additional_details
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\AdditionalDetails[]|null
     */
    public function getAdditionalDetails()
    {
        return $this->container['additional_details'];
    }

    /**
     * Sets additional_details
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\AdditionalDetails[]|null $additional_details Additional details provided by the selling party, for tax related or other purposes.
     *
     * @return self
     */
    public function setAdditionalDetails($additional_details) : self
    {
        $this->container['additional_details'] = $additional_details;

        return $this;
    }

    /**
     * Gets charge_details
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\ChargeDetails[]|null
     */
    public function getChargeDetails()
    {
        return $this->container['charge_details'];
    }

    /**
     * Sets charge_details
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\ChargeDetails[]|null $charge_details Total charge amount details for all line items.
     *
     * @return self
     */
    public function setChargeDetails($charge_details) : self
    {
        $this->container['charge_details'] = $charge_details;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\InvoiceItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\InvoiceItem[] $items Provides the details of the items in this invoice.
     *
     * @return self
     */
    public function setItems($items) : self
    {
        $this->container['items'] = $items;

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
