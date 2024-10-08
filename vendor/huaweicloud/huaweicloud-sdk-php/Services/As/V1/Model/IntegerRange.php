<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IntegerRange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IntegerRange';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * max  伸缩组最大实例数
    * min  伸缩组最小实例数
    * desire  伸缩组期望实例数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'max' => 'int',
            'min' => 'int',
            'desire' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * max  伸缩组最大实例数
    * min  伸缩组最小实例数
    * desire  伸缩组期望实例数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'max' => 'int32',
        'min' => 'int32',
        'desire' => 'int32'
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
    * max  伸缩组最大实例数
    * min  伸缩组最小实例数
    * desire  伸缩组期望实例数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'max' => 'max',
            'min' => 'min',
            'desire' => 'desire'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * max  伸缩组最大实例数
    * min  伸缩组最小实例数
    * desire  伸缩组期望实例数
    *
    * @var string[]
    */
    protected static $setters = [
            'max' => 'setMax',
            'min' => 'setMin',
            'desire' => 'setDesire'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * max  伸缩组最大实例数
    * min  伸缩组最小实例数
    * desire  伸缩组期望实例数
    *
    * @var string[]
    */
    protected static $getters = [
            'max' => 'getMax',
            'min' => 'getMin',
            'desire' => 'getDesire'
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
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['desire'] = isset($data['desire']) ? $data['desire'] : null;
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
    * Gets max
    *  伸缩组最大实例数
    *
    * @return int|null
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param int|null $max 伸缩组最大实例数
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
        return $this;
    }

    /**
    * Gets min
    *  伸缩组最小实例数
    *
    * @return int|null
    */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
    * Sets min
    *
    * @param int|null $min 伸缩组最小实例数
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
        return $this;
    }

    /**
    * Gets desire
    *  伸缩组期望实例数
    *
    * @return int|null
    */
    public function getDesire()
    {
        return $this->container['desire'];
    }

    /**
    * Sets desire
    *
    * @param int|null $desire 伸缩组期望实例数
    *
    * @return $this
    */
    public function setDesire($desire)
    {
        $this->container['desire'] = $desire;
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

