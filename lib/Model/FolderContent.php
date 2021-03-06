<?php
/**
 * FolderContent
 *
 * PHP version 5
 *
 * @category Class
 * @package  Caplinked
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CapLinked API v1.0
 *
 * Core information security endpoints for managing files/folders, users/groups, uploads/downloads, and more.
 *
 * OpenAPI spec version: 2017-05-23
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Caplinked\Model;

use \ArrayAccess;

/**
 * FolderContent Class Doc Comment
 *
 * @category    Class
 * @description Get folder information
 * @package     Caplinked
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FolderContent implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FolderContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'folder' => '\Caplinked\Model\FolderMeta',
        'immediate_subfolders' => '\Caplinked\Model\FolderMeta',
        'immediate_subfiles' => '\Caplinked\Model\FileInfoCompact'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'folder' => null,
        'immediate_subfolders' => null,
        'immediate_subfiles' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'folder' => 'folder',
        'immediate_subfolders' => 'immediate_subfolders',
        'immediate_subfiles' => 'immediate_subfiles'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'folder' => 'setFolder',
        'immediate_subfolders' => 'setImmediateSubfolders',
        'immediate_subfiles' => 'setImmediateSubfiles'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'folder' => 'getFolder',
        'immediate_subfolders' => 'getImmediateSubfolders',
        'immediate_subfiles' => 'getImmediateSubfiles'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['immediate_subfolders'] = isset($data['immediate_subfolders']) ? $data['immediate_subfolders'] : null;
        $this->container['immediate_subfiles'] = isset($data['immediate_subfiles']) ? $data['immediate_subfiles'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets folder
     * @return \Caplinked\Model\FolderMeta
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     * @param \Caplinked\Model\FolderMeta $folder
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets immediate_subfolders
     * @return \Caplinked\Model\FolderMeta
     */
    public function getImmediateSubfolders()
    {
        return $this->container['immediate_subfolders'];
    }

    /**
     * Sets immediate_subfolders
     * @param \Caplinked\Model\FolderMeta $immediate_subfolders
     * @return $this
     */
    public function setImmediateSubfolders($immediate_subfolders)
    {
        $this->container['immediate_subfolders'] = $immediate_subfolders;

        return $this;
    }

    /**
     * Gets immediate_subfiles
     * @return \Caplinked\Model\FileInfoCompact
     */
    public function getImmediateSubfiles()
    {
        return $this->container['immediate_subfiles'];
    }

    /**
     * Sets immediate_subfiles
     * @param \Caplinked\Model\FileInfoCompact $immediate_subfiles
     * @return $this
     */
    public function setImmediateSubfiles($immediate_subfiles)
    {
        $this->container['immediate_subfiles'] = $immediate_subfiles;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Caplinked\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Caplinked\ObjectSerializer::sanitizeForSerialization($this));
    }
}


