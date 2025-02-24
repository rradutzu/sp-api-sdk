<?php
/**
 * ContentModule
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
class ContentModule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ContentModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'content_module_type' => '\AmazonPHP\SellingPartner\Model\APlus\ContentModuleType',
        'standard_company_logo' => '\AmazonPHP\SellingPartner\Model\APlus\StandardCompanyLogoModule',
        'standard_comparison_table' => '\AmazonPHP\SellingPartner\Model\APlus\StandardComparisonTableModule',
        'standard_four_image_text' => '\AmazonPHP\SellingPartner\Model\APlus\StandardFourImageTextModule',
        'standard_four_image_text_quadrant' => '\AmazonPHP\SellingPartner\Model\APlus\StandardFourImageTextQuadrantModule',
        'standard_header_image_text' => '\AmazonPHP\SellingPartner\Model\APlus\StandardHeaderImageTextModule',
        'standard_image_sidebar' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageSidebarModule',
        'standard_image_text_overlay' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageTextOverlayModule',
        'standard_multiple_image_text' => '\AmazonPHP\SellingPartner\Model\APlus\StandardMultipleImageTextModule',
        'standard_product_description' => '\AmazonPHP\SellingPartner\Model\APlus\StandardProductDescriptionModule',
        'standard_single_image_highlights' => '\AmazonPHP\SellingPartner\Model\APlus\StandardSingleImageHighlightsModule',
        'standard_single_image_specs_detail' => '\AmazonPHP\SellingPartner\Model\APlus\StandardSingleImageSpecsDetailModule',
        'standard_single_side_image' => '\AmazonPHP\SellingPartner\Model\APlus\StandardSingleSideImageModule',
        'standard_tech_specs' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTechSpecsModule',
        'standard_text' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextModule',
        'standard_three_image_text' => '\AmazonPHP\SellingPartner\Model\APlus\StandardThreeImageTextModule'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'content_module_type' => null,
        'standard_company_logo' => null,
        'standard_comparison_table' => null,
        'standard_four_image_text' => null,
        'standard_four_image_text_quadrant' => null,
        'standard_header_image_text' => null,
        'standard_image_sidebar' => null,
        'standard_image_text_overlay' => null,
        'standard_multiple_image_text' => null,
        'standard_product_description' => null,
        'standard_single_image_highlights' => null,
        'standard_single_image_specs_detail' => null,
        'standard_single_side_image' => null,
        'standard_tech_specs' => null,
        'standard_text' => null,
        'standard_three_image_text' => null
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
        'content_module_type' => 'contentModuleType',
        'standard_company_logo' => 'standardCompanyLogo',
        'standard_comparison_table' => 'standardComparisonTable',
        'standard_four_image_text' => 'standardFourImageText',
        'standard_four_image_text_quadrant' => 'standardFourImageTextQuadrant',
        'standard_header_image_text' => 'standardHeaderImageText',
        'standard_image_sidebar' => 'standardImageSidebar',
        'standard_image_text_overlay' => 'standardImageTextOverlay',
        'standard_multiple_image_text' => 'standardMultipleImageText',
        'standard_product_description' => 'standardProductDescription',
        'standard_single_image_highlights' => 'standardSingleImageHighlights',
        'standard_single_image_specs_detail' => 'standardSingleImageSpecsDetail',
        'standard_single_side_image' => 'standardSingleSideImage',
        'standard_tech_specs' => 'standardTechSpecs',
        'standard_text' => 'standardText',
        'standard_three_image_text' => 'standardThreeImageText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'content_module_type' => 'setContentModuleType',
        'standard_company_logo' => 'setStandardCompanyLogo',
        'standard_comparison_table' => 'setStandardComparisonTable',
        'standard_four_image_text' => 'setStandardFourImageText',
        'standard_four_image_text_quadrant' => 'setStandardFourImageTextQuadrant',
        'standard_header_image_text' => 'setStandardHeaderImageText',
        'standard_image_sidebar' => 'setStandardImageSidebar',
        'standard_image_text_overlay' => 'setStandardImageTextOverlay',
        'standard_multiple_image_text' => 'setStandardMultipleImageText',
        'standard_product_description' => 'setStandardProductDescription',
        'standard_single_image_highlights' => 'setStandardSingleImageHighlights',
        'standard_single_image_specs_detail' => 'setStandardSingleImageSpecsDetail',
        'standard_single_side_image' => 'setStandardSingleSideImage',
        'standard_tech_specs' => 'setStandardTechSpecs',
        'standard_text' => 'setStandardText',
        'standard_three_image_text' => 'setStandardThreeImageText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'content_module_type' => 'getContentModuleType',
        'standard_company_logo' => 'getStandardCompanyLogo',
        'standard_comparison_table' => 'getStandardComparisonTable',
        'standard_four_image_text' => 'getStandardFourImageText',
        'standard_four_image_text_quadrant' => 'getStandardFourImageTextQuadrant',
        'standard_header_image_text' => 'getStandardHeaderImageText',
        'standard_image_sidebar' => 'getStandardImageSidebar',
        'standard_image_text_overlay' => 'getStandardImageTextOverlay',
        'standard_multiple_image_text' => 'getStandardMultipleImageText',
        'standard_product_description' => 'getStandardProductDescription',
        'standard_single_image_highlights' => 'getStandardSingleImageHighlights',
        'standard_single_image_specs_detail' => 'getStandardSingleImageSpecsDetail',
        'standard_single_side_image' => 'getStandardSingleSideImage',
        'standard_tech_specs' => 'getStandardTechSpecs',
        'standard_text' => 'getStandardText',
        'standard_three_image_text' => 'getStandardThreeImageText'
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
        $this->container['content_module_type'] = $data['content_module_type'] ?? null;
        $this->container['standard_company_logo'] = $data['standard_company_logo'] ?? null;
        $this->container['standard_comparison_table'] = $data['standard_comparison_table'] ?? null;
        $this->container['standard_four_image_text'] = $data['standard_four_image_text'] ?? null;
        $this->container['standard_four_image_text_quadrant'] = $data['standard_four_image_text_quadrant'] ?? null;
        $this->container['standard_header_image_text'] = $data['standard_header_image_text'] ?? null;
        $this->container['standard_image_sidebar'] = $data['standard_image_sidebar'] ?? null;
        $this->container['standard_image_text_overlay'] = $data['standard_image_text_overlay'] ?? null;
        $this->container['standard_multiple_image_text'] = $data['standard_multiple_image_text'] ?? null;
        $this->container['standard_product_description'] = $data['standard_product_description'] ?? null;
        $this->container['standard_single_image_highlights'] = $data['standard_single_image_highlights'] ?? null;
        $this->container['standard_single_image_specs_detail'] = $data['standard_single_image_specs_detail'] ?? null;
        $this->container['standard_single_side_image'] = $data['standard_single_side_image'] ?? null;
        $this->container['standard_tech_specs'] = $data['standard_tech_specs'] ?? null;
        $this->container['standard_text'] = $data['standard_text'] ?? null;
        $this->container['standard_three_image_text'] = $data['standard_three_image_text'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['content_module_type'] === null) {
            throw new AssertionException("'content_module_type' can't be null");
        }

            if ($this->container['standard_company_logo'] !== null) {
            $this->container['standard_company_logo']->validate();
            }

            if ($this->container['standard_comparison_table'] !== null) {
            $this->container['standard_comparison_table']->validate();
            }

            if ($this->container['standard_four_image_text'] !== null) {
            $this->container['standard_four_image_text']->validate();
            }

            if ($this->container['standard_four_image_text_quadrant'] !== null) {
            $this->container['standard_four_image_text_quadrant']->validate();
            }

            if ($this->container['standard_header_image_text'] !== null) {
            $this->container['standard_header_image_text']->validate();
            }

            if ($this->container['standard_image_sidebar'] !== null) {
            $this->container['standard_image_sidebar']->validate();
            }

            if ($this->container['standard_image_text_overlay'] !== null) {
            $this->container['standard_image_text_overlay']->validate();
            }

            if ($this->container['standard_multiple_image_text'] !== null) {
            $this->container['standard_multiple_image_text']->validate();
            }

            if ($this->container['standard_product_description'] !== null) {
            $this->container['standard_product_description']->validate();
            }

            if ($this->container['standard_single_image_highlights'] !== null) {
            $this->container['standard_single_image_highlights']->validate();
            }

            if ($this->container['standard_single_image_specs_detail'] !== null) {
            $this->container['standard_single_image_specs_detail']->validate();
            }

            if ($this->container['standard_single_side_image'] !== null) {
            $this->container['standard_single_side_image']->validate();
            }

            if ($this->container['standard_tech_specs'] !== null) {
            $this->container['standard_tech_specs']->validate();
            }

            if ($this->container['standard_text'] !== null) {
            $this->container['standard_text']->validate();
            }

            if ($this->container['standard_three_image_text'] !== null) {
            $this->container['standard_three_image_text']->validate();
            }

    }


    /**
     * Gets content_module_type
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\ContentModuleType
     */
    public function getContentModuleType()
    {
        return $this->container['content_module_type'];
    }

    /**
     * Sets content_module_type
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\ContentModuleType $content_module_type content_module_type
     *
     * @return self
     */
    public function setContentModuleType($content_module_type) : self
    {
        $this->container['content_module_type'] = $content_module_type;

        return $this;
    }

    /**
     * Gets standard_company_logo
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardCompanyLogoModule|null
     */
    public function getStandardCompanyLogo()
    {
        return $this->container['standard_company_logo'];
    }

    /**
     * Sets standard_company_logo
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardCompanyLogoModule|null $standard_company_logo standard_company_logo
     *
     * @return self
     */
    public function setStandardCompanyLogo($standard_company_logo) : self
    {
        $this->container['standard_company_logo'] = $standard_company_logo;

        return $this;
    }

    /**
     * Gets standard_comparison_table
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardComparisonTableModule|null
     */
    public function getStandardComparisonTable()
    {
        return $this->container['standard_comparison_table'];
    }

    /**
     * Sets standard_comparison_table
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardComparisonTableModule|null $standard_comparison_table standard_comparison_table
     *
     * @return self
     */
    public function setStandardComparisonTable($standard_comparison_table) : self
    {
        $this->container['standard_comparison_table'] = $standard_comparison_table;

        return $this;
    }

    /**
     * Gets standard_four_image_text
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardFourImageTextModule|null
     */
    public function getStandardFourImageText()
    {
        return $this->container['standard_four_image_text'];
    }

    /**
     * Sets standard_four_image_text
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardFourImageTextModule|null $standard_four_image_text standard_four_image_text
     *
     * @return self
     */
    public function setStandardFourImageText($standard_four_image_text) : self
    {
        $this->container['standard_four_image_text'] = $standard_four_image_text;

        return $this;
    }

    /**
     * Gets standard_four_image_text_quadrant
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardFourImageTextQuadrantModule|null
     */
    public function getStandardFourImageTextQuadrant()
    {
        return $this->container['standard_four_image_text_quadrant'];
    }

    /**
     * Sets standard_four_image_text_quadrant
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardFourImageTextQuadrantModule|null $standard_four_image_text_quadrant standard_four_image_text_quadrant
     *
     * @return self
     */
    public function setStandardFourImageTextQuadrant($standard_four_image_text_quadrant) : self
    {
        $this->container['standard_four_image_text_quadrant'] = $standard_four_image_text_quadrant;

        return $this;
    }

    /**
     * Gets standard_header_image_text
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardHeaderImageTextModule|null
     */
    public function getStandardHeaderImageText()
    {
        return $this->container['standard_header_image_text'];
    }

    /**
     * Sets standard_header_image_text
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardHeaderImageTextModule|null $standard_header_image_text standard_header_image_text
     *
     * @return self
     */
    public function setStandardHeaderImageText($standard_header_image_text) : self
    {
        $this->container['standard_header_image_text'] = $standard_header_image_text;

        return $this;
    }

    /**
     * Gets standard_image_sidebar
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardImageSidebarModule|null
     */
    public function getStandardImageSidebar()
    {
        return $this->container['standard_image_sidebar'];
    }

    /**
     * Sets standard_image_sidebar
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardImageSidebarModule|null $standard_image_sidebar standard_image_sidebar
     *
     * @return self
     */
    public function setStandardImageSidebar($standard_image_sidebar) : self
    {
        $this->container['standard_image_sidebar'] = $standard_image_sidebar;

        return $this;
    }

    /**
     * Gets standard_image_text_overlay
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardImageTextOverlayModule|null
     */
    public function getStandardImageTextOverlay()
    {
        return $this->container['standard_image_text_overlay'];
    }

    /**
     * Sets standard_image_text_overlay
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardImageTextOverlayModule|null $standard_image_text_overlay standard_image_text_overlay
     *
     * @return self
     */
    public function setStandardImageTextOverlay($standard_image_text_overlay) : self
    {
        $this->container['standard_image_text_overlay'] = $standard_image_text_overlay;

        return $this;
    }

    /**
     * Gets standard_multiple_image_text
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardMultipleImageTextModule|null
     */
    public function getStandardMultipleImageText()
    {
        return $this->container['standard_multiple_image_text'];
    }

    /**
     * Sets standard_multiple_image_text
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardMultipleImageTextModule|null $standard_multiple_image_text standard_multiple_image_text
     *
     * @return self
     */
    public function setStandardMultipleImageText($standard_multiple_image_text) : self
    {
        $this->container['standard_multiple_image_text'] = $standard_multiple_image_text;

        return $this;
    }

    /**
     * Gets standard_product_description
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardProductDescriptionModule|null
     */
    public function getStandardProductDescription()
    {
        return $this->container['standard_product_description'];
    }

    /**
     * Sets standard_product_description
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardProductDescriptionModule|null $standard_product_description standard_product_description
     *
     * @return self
     */
    public function setStandardProductDescription($standard_product_description) : self
    {
        $this->container['standard_product_description'] = $standard_product_description;

        return $this;
    }

    /**
     * Gets standard_single_image_highlights
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardSingleImageHighlightsModule|null
     */
    public function getStandardSingleImageHighlights()
    {
        return $this->container['standard_single_image_highlights'];
    }

    /**
     * Sets standard_single_image_highlights
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardSingleImageHighlightsModule|null $standard_single_image_highlights standard_single_image_highlights
     *
     * @return self
     */
    public function setStandardSingleImageHighlights($standard_single_image_highlights) : self
    {
        $this->container['standard_single_image_highlights'] = $standard_single_image_highlights;

        return $this;
    }

    /**
     * Gets standard_single_image_specs_detail
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardSingleImageSpecsDetailModule|null
     */
    public function getStandardSingleImageSpecsDetail()
    {
        return $this->container['standard_single_image_specs_detail'];
    }

    /**
     * Sets standard_single_image_specs_detail
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardSingleImageSpecsDetailModule|null $standard_single_image_specs_detail standard_single_image_specs_detail
     *
     * @return self
     */
    public function setStandardSingleImageSpecsDetail($standard_single_image_specs_detail) : self
    {
        $this->container['standard_single_image_specs_detail'] = $standard_single_image_specs_detail;

        return $this;
    }

    /**
     * Gets standard_single_side_image
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardSingleSideImageModule|null
     */
    public function getStandardSingleSideImage()
    {
        return $this->container['standard_single_side_image'];
    }

    /**
     * Sets standard_single_side_image
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardSingleSideImageModule|null $standard_single_side_image standard_single_side_image
     *
     * @return self
     */
    public function setStandardSingleSideImage($standard_single_side_image) : self
    {
        $this->container['standard_single_side_image'] = $standard_single_side_image;

        return $this;
    }

    /**
     * Gets standard_tech_specs
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardTechSpecsModule|null
     */
    public function getStandardTechSpecs()
    {
        return $this->container['standard_tech_specs'];
    }

    /**
     * Sets standard_tech_specs
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardTechSpecsModule|null $standard_tech_specs standard_tech_specs
     *
     * @return self
     */
    public function setStandardTechSpecs($standard_tech_specs) : self
    {
        $this->container['standard_tech_specs'] = $standard_tech_specs;

        return $this;
    }

    /**
     * Gets standard_text
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardTextModule|null
     */
    public function getStandardText()
    {
        return $this->container['standard_text'];
    }

    /**
     * Sets standard_text
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardTextModule|null $standard_text standard_text
     *
     * @return self
     */
    public function setStandardText($standard_text) : self
    {
        $this->container['standard_text'] = $standard_text;

        return $this;
    }

    /**
     * Gets standard_three_image_text
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardThreeImageTextModule|null
     */
    public function getStandardThreeImageText()
    {
        return $this->container['standard_three_image_text'];
    }

    /**
     * Sets standard_three_image_text
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardThreeImageTextModule|null $standard_three_image_text standard_three_image_text
     *
     * @return self
     */
    public function setStandardThreeImageText($standard_three_image_text) : self
    {
        $this->container['standard_three_image_text'] = $standard_three_image_text;

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
