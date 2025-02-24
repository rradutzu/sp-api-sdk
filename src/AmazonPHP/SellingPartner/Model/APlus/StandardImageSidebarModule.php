<?php
/**
 * StandardImageSidebarModule
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
class StandardImageSidebarModule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'StandardImageSidebarModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'headline' => '\AmazonPHP\SellingPartner\Model\APlus\TextComponent',
        'image_caption_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageCaptionBlock',
        'description_text_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock',
        'description_list_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock',
        'sidebar_image_text_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock',
        'sidebar_list_block' => '\AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'headline' => null,
        'image_caption_block' => null,
        'description_text_block' => null,
        'description_list_block' => null,
        'sidebar_image_text_block' => null,
        'sidebar_list_block' => null
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
        'headline' => 'headline',
        'image_caption_block' => 'imageCaptionBlock',
        'description_text_block' => 'descriptionTextBlock',
        'description_list_block' => 'descriptionListBlock',
        'sidebar_image_text_block' => 'sidebarImageTextBlock',
        'sidebar_list_block' => 'sidebarListBlock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'headline' => 'setHeadline',
        'image_caption_block' => 'setImageCaptionBlock',
        'description_text_block' => 'setDescriptionTextBlock',
        'description_list_block' => 'setDescriptionListBlock',
        'sidebar_image_text_block' => 'setSidebarImageTextBlock',
        'sidebar_list_block' => 'setSidebarListBlock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'headline' => 'getHeadline',
        'image_caption_block' => 'getImageCaptionBlock',
        'description_text_block' => 'getDescriptionTextBlock',
        'description_list_block' => 'getDescriptionListBlock',
        'sidebar_image_text_block' => 'getSidebarImageTextBlock',
        'sidebar_list_block' => 'getSidebarListBlock'
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
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['image_caption_block'] = $data['image_caption_block'] ?? null;
        $this->container['description_text_block'] = $data['description_text_block'] ?? null;
        $this->container['description_list_block'] = $data['description_list_block'] ?? null;
        $this->container['sidebar_image_text_block'] = $data['sidebar_image_text_block'] ?? null;
        $this->container['sidebar_list_block'] = $data['sidebar_list_block'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['headline'] !== null) {
            $this->container['headline']->validate();
            }

            if ($this->container['image_caption_block'] !== null) {
            $this->container['image_caption_block']->validate();
            }

            if ($this->container['description_text_block'] !== null) {
            $this->container['description_text_block']->validate();
            }

            if ($this->container['description_list_block'] !== null) {
            $this->container['description_list_block']->validate();
            }

            if ($this->container['sidebar_image_text_block'] !== null) {
            $this->container['sidebar_image_text_block']->validate();
            }

            if ($this->container['sidebar_list_block'] !== null) {
            $this->container['sidebar_list_block']->validate();
            }

    }


    /**
     * Gets headline
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\TextComponent|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\TextComponent|null $headline headline
     *
     * @return self
     */
    public function setHeadline($headline) : self
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets image_caption_block
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardImageCaptionBlock|null
     */
    public function getImageCaptionBlock()
    {
        return $this->container['image_caption_block'];
    }

    /**
     * Sets image_caption_block
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardImageCaptionBlock|null $image_caption_block image_caption_block
     *
     * @return self
     */
    public function setImageCaptionBlock($image_caption_block) : self
    {
        $this->container['image_caption_block'] = $image_caption_block;

        return $this;
    }

    /**
     * Gets description_text_block
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock|null
     */
    public function getDescriptionTextBlock()
    {
        return $this->container['description_text_block'];
    }

    /**
     * Sets description_text_block
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardTextBlock|null $description_text_block description_text_block
     *
     * @return self
     */
    public function setDescriptionTextBlock($description_text_block) : self
    {
        $this->container['description_text_block'] = $description_text_block;

        return $this;
    }

    /**
     * Gets description_list_block
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock|null
     */
    public function getDescriptionListBlock()
    {
        return $this->container['description_list_block'];
    }

    /**
     * Sets description_list_block
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock|null $description_list_block description_list_block
     *
     * @return self
     */
    public function setDescriptionListBlock($description_list_block) : self
    {
        $this->container['description_list_block'] = $description_list_block;

        return $this;
    }

    /**
     * Gets sidebar_image_text_block
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock|null
     */
    public function getSidebarImageTextBlock()
    {
        return $this->container['sidebar_image_text_block'];
    }

    /**
     * Sets sidebar_image_text_block
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardImageTextBlock|null $sidebar_image_text_block sidebar_image_text_block
     *
     * @return self
     */
    public function setSidebarImageTextBlock($sidebar_image_text_block) : self
    {
        $this->container['sidebar_image_text_block'] = $sidebar_image_text_block;

        return $this;
    }

    /**
     * Gets sidebar_list_block
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock|null
     */
    public function getSidebarListBlock()
    {
        return $this->container['sidebar_list_block'];
    }

    /**
     * Sets sidebar_list_block
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\StandardTextListBlock|null $sidebar_list_block sidebar_list_block
     *
     * @return self
     */
    public function setSidebarListBlock($sidebar_list_block) : self
    {
        $this->container['sidebar_list_block'] = $sidebar_list_block;

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
