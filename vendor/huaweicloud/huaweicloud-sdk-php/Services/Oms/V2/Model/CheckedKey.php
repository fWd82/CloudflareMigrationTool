<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckedKey implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckedKey';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  键
    * isEtagMatching  是否电子标签匹配
    * isObjectExisting  是否存在对象
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'isEtagMatching' => 'bool',
            'isObjectExisting' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  键
    * isEtagMatching  是否电子标签匹配
    * isObjectExisting  是否存在对象
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'isEtagMatching' => null,
        'isObjectExisting' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * key  键
    * isEtagMatching  是否电子标签匹配
    * isObjectExisting  是否存在对象
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'isEtagMatching' => 'is_etag_matching',
            'isObjectExisting' => 'is_object_existing'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  键
    * isEtagMatching  是否电子标签匹配
    * isObjectExisting  是否存在对象
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'isEtagMatching' => 'setIsEtagMatching',
            'isObjectExisting' => 'setIsObjectExisting'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  键
    * isEtagMatching  是否电子标签匹配
    * isObjectExisting  是否存在对象
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'isEtagMatching' => 'getIsEtagMatching',
            'isObjectExisting' => 'getIsObjectExisting'
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
        return self::$openAPIModelName;
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['isEtagMatching'] = isset($data['isEtagMatching']) ? $data['isEtagMatching'] : null;
        $this->container['isObjectExisting'] = isset($data['isObjectExisting']) ? $data['isObjectExisting'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 2048)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 0)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 0.";
            }
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
    * Gets key
    *  键
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 键
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets isEtagMatching
    *  是否电子标签匹配
    *
    * @return bool|null
    */
    public function getIsEtagMatching()
    {
        return $this->container['isEtagMatching'];
    }

    /**
    * Sets isEtagMatching
    *
    * @param bool|null $isEtagMatching 是否电子标签匹配
    *
    * @return $this
    */
    public function setIsEtagMatching($isEtagMatching)
    {
        $this->container['isEtagMatching'] = $isEtagMatching;
        return $this;
    }

    /**
    * Gets isObjectExisting
    *  是否存在对象
    *
    * @return bool|null
    */
    public function getIsObjectExisting()
    {
        return $this->container['isObjectExisting'];
    }

    /**
    * Sets isObjectExisting
    *
    * @param bool|null $isObjectExisting 是否存在对象
    *
    * @return $this
    */
    public function setIsObjectExisting($isObjectExisting)
    {
        $this->container['isObjectExisting'] = $isObjectExisting;
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

