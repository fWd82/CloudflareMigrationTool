<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpFrequencyLimitQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpFrequencyLimitQuery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  状态，on：打开，off：关闭。
    * qps  访问阈值，单位：次/秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'qps' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  状态，on：打开，off：关闭。
    * qps  访问阈值，单位：次/秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'qps' => 'int32'
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
    * status  状态，on：打开，off：关闭。
    * qps  访问阈值，单位：次/秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'qps' => 'qps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  状态，on：打开，off：关闭。
    * qps  访问阈值，单位：次/秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'qps' => 'setQps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  状态，on：打开，off：关闭。
    * qps  访问阈值，单位：次/秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'qps' => 'getQps'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['qps'] = isset($data['qps']) ? $data['qps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets status
    *  状态，on：打开，off：关闭。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态，on：打开，off：关闭。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets qps
    *  访问阈值，单位：次/秒。
    *
    * @return int|null
    */
    public function getQps()
    {
        return $this->container['qps'];
    }

    /**
    * Sets qps
    *
    * @param int|null $qps 访问阈值，单位：次/秒。
    *
    * @return $this
    */
    public function setQps($qps)
    {
        $this->container['qps'] = $qps;
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

