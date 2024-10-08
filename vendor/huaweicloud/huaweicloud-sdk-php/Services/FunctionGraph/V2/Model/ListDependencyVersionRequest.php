<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDependencyVersionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDependencyVersionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dependId  依赖包的ID。
    * marker  上一次查询依赖包的最后记录位置，默认为\"0\"。
    * maxitems  单次查询最大条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dependId' => 'string',
            'marker' => 'string',
            'maxitems' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dependId  依赖包的ID。
    * marker  上一次查询依赖包的最后记录位置，默认为\"0\"。
    * maxitems  单次查询最大条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dependId' => null,
        'marker' => null,
        'maxitems' => null
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
    * dependId  依赖包的ID。
    * marker  上一次查询依赖包的最后记录位置，默认为\"0\"。
    * maxitems  单次查询最大条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dependId' => 'depend_id',
            'marker' => 'marker',
            'maxitems' => 'maxitems'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dependId  依赖包的ID。
    * marker  上一次查询依赖包的最后记录位置，默认为\"0\"。
    * maxitems  单次查询最大条数
    *
    * @var string[]
    */
    protected static $setters = [
            'dependId' => 'setDependId',
            'marker' => 'setMarker',
            'maxitems' => 'setMaxitems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dependId  依赖包的ID。
    * marker  上一次查询依赖包的最后记录位置，默认为\"0\"。
    * maxitems  单次查询最大条数
    *
    * @var string[]
    */
    protected static $getters = [
            'dependId' => 'getDependId',
            'marker' => 'getMarker',
            'maxitems' => 'getMaxitems'
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
        $this->container['dependId'] = isset($data['dependId']) ? $data['dependId'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['maxitems'] = isset($data['maxitems']) ? $data['maxitems'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dependId'] === null) {
            $invalidProperties[] = "'dependId' can't be null";
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
    * Gets dependId
    *  依赖包的ID。
    *
    * @return string
    */
    public function getDependId()
    {
        return $this->container['dependId'];
    }

    /**
    * Sets dependId
    *
    * @param string $dependId 依赖包的ID。
    *
    * @return $this
    */
    public function setDependId($dependId)
    {
        $this->container['dependId'] = $dependId;
        return $this;
    }

    /**
    * Gets marker
    *  上一次查询依赖包的最后记录位置，默认为\"0\"。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一次查询依赖包的最后记录位置，默认为\"0\"。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets maxitems
    *  单次查询最大条数
    *
    * @return string|null
    */
    public function getMaxitems()
    {
        return $this->container['maxitems'];
    }

    /**
    * Sets maxitems
    *
    * @param string|null $maxitems 单次查询最大条数
    *
    * @return $this
    */
    public function setMaxitems($maxitems)
    {
        $this->container['maxitems'] = $maxitems;
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

