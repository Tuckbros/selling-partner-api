<?php
/**
 * StandardSingleImageHighlightsModule
 *
 * PHP version 5
 *
 * @category Class
 * @package  Evers\SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * OpenAPI spec version: 2020-11-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Evers\SellingPartnerApi\Model;

use \ArrayAccess;
use \Evers\SellingPartnerApi\ObjectSerializer;

/**
 * StandardSingleImageHighlightsModule Class Doc Comment
 *
 * @category Class
 * @description A standard image with several paragraphs and a bulleted list.
 * @package  Evers\SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StandardSingleImageHighlightsModule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StandardSingleImageHighlightsModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'image' => '\Evers\SellingPartnerApi\Model\ImageComponent',
        'headline' => '\Evers\SellingPartnerApi\Model\TextComponent',
        'text_block1' => '\Evers\SellingPartnerApi\Model\StandardTextBlock',
        'text_block2' => '\Evers\SellingPartnerApi\Model\StandardTextBlock',
        'text_block3' => '\Evers\SellingPartnerApi\Model\StandardTextBlock',
        'bulleted_list_block' => '\Evers\SellingPartnerApi\Model\StandardHeaderTextListBlock'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'image' => null,
        'headline' => null,
        'text_block1' => null,
        'text_block2' => null,
        'text_block3' => null,
        'bulleted_list_block' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'image' => 'image',
        'headline' => 'headline',
        'text_block1' => 'textBlock1',
        'text_block2' => 'textBlock2',
        'text_block3' => 'textBlock3',
        'bulleted_list_block' => 'bulletedListBlock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image' => 'setImage',
        'headline' => 'setHeadline',
        'text_block1' => 'setTextBlock1',
        'text_block2' => 'setTextBlock2',
        'text_block3' => 'setTextBlock3',
        'bulleted_list_block' => 'setBulletedListBlock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image' => 'getImage',
        'headline' => 'getHeadline',
        'text_block1' => 'getTextBlock1',
        'text_block2' => 'getTextBlock2',
        'text_block3' => 'getTextBlock3',
        'bulleted_list_block' => 'getBulletedListBlock'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['text_block1'] = isset($data['text_block1']) ? $data['text_block1'] : null;
        $this->container['text_block2'] = isset($data['text_block2']) ? $data['text_block2'] : null;
        $this->container['text_block3'] = isset($data['text_block3']) ? $data['text_block3'] : null;
        $this->container['bulleted_list_block'] = isset($data['bulleted_list_block']) ? $data['bulleted_list_block'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets image
     *
     * @return \Evers\SellingPartnerApi\Model\ImageComponent
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \Evers\SellingPartnerApi\Model\ImageComponent $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return \Evers\SellingPartnerApi\Model\TextComponent
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param \Evers\SellingPartnerApi\Model\TextComponent $headline headline
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets text_block1
     *
     * @return \Evers\SellingPartnerApi\Model\StandardTextBlock
     */
    public function getTextBlock1()
    {
        return $this->container['text_block1'];
    }

    /**
     * Sets text_block1
     *
     * @param \Evers\SellingPartnerApi\Model\StandardTextBlock $text_block1 text_block1
     *
     * @return $this
     */
    public function setTextBlock1($text_block1)
    {
        $this->container['text_block1'] = $text_block1;

        return $this;
    }

    /**
     * Gets text_block2
     *
     * @return \Evers\SellingPartnerApi\Model\StandardTextBlock
     */
    public function getTextBlock2()
    {
        return $this->container['text_block2'];
    }

    /**
     * Sets text_block2
     *
     * @param \Evers\SellingPartnerApi\Model\StandardTextBlock $text_block2 text_block2
     *
     * @return $this
     */
    public function setTextBlock2($text_block2)
    {
        $this->container['text_block2'] = $text_block2;

        return $this;
    }

    /**
     * Gets text_block3
     *
     * @return \Evers\SellingPartnerApi\Model\StandardTextBlock
     */
    public function getTextBlock3()
    {
        return $this->container['text_block3'];
    }

    /**
     * Sets text_block3
     *
     * @param \Evers\SellingPartnerApi\Model\StandardTextBlock $text_block3 text_block3
     *
     * @return $this
     */
    public function setTextBlock3($text_block3)
    {
        $this->container['text_block3'] = $text_block3;

        return $this;
    }

    /**
     * Gets bulleted_list_block
     *
     * @return \Evers\SellingPartnerApi\Model\StandardHeaderTextListBlock
     */
    public function getBulletedListBlock()
    {
        return $this->container['bulleted_list_block'];
    }

    /**
     * Sets bulleted_list_block
     *
     * @param \Evers\SellingPartnerApi\Model\StandardHeaderTextListBlock $bulleted_list_block bulleted_list_block
     *
     * @return $this
     */
    public function setBulletedListBlock($bulleted_list_block)
    {
        $this->container['bulleted_list_block'] = $bulleted_list_block;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


