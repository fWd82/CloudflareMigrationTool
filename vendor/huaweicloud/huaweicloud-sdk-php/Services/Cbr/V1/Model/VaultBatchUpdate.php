<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VaultBatchUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VaultBatchUpdate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * smnNotify  存储库smn消息通知开关
    * threshold  存储库容量阈值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'smnNotify' => 'bool',
            'threshold' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * smnNotify  存储库smn消息通知开关
    * threshold  存储库容量阈值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'smnNotify' => null,
        'threshold' => 'int32'
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
    * smnNotify  存储库smn消息通知开关
    * threshold  存储库容量阈值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'smnNotify' => 'smn_notify',
            'threshold' => 'threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * smnNotify  存储库smn消息通知开关
    * threshold  存储库容量阈值
    *
    * @var string[]
    */
    protected static $setters = [
            'smnNotify' => 'setSmnNotify',
            'threshold' => 'setThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * smnNotify  存储库smn消息通知开关
    * threshold  存储库容量阈值
    *
    * @var string[]
    */
    protected static $getters = [
            'smnNotify' => 'getSmnNotify',
            'threshold' => 'getThreshold'
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
        $this->container['smnNotify'] = isset($data['smnNotify']) ? $data['smnNotify'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['threshold']) && ($this->container['threshold'] > 100)) {
                $invalidProperties[] = "invalid value for 'threshold', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['threshold']) && ($this->container['threshold'] < 1)) {
                $invalidProperties[] = "invalid value for 'threshold', must be bigger than or equal to 1.";
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
    * Gets smnNotify
    *  存储库smn消息通知开关
    *
    * @return bool|null
    */
    public function getSmnNotify()
    {
        return $this->container['smnNotify'];
    }

    /**
    * Sets smnNotify
    *
    * @param bool|null $smnNotify 存储库smn消息通知开关
    *
    * @return $this
    */
    public function setSmnNotify($smnNotify)
    {
        $this->container['smnNotify'] = $smnNotify;
        return $this;
    }

    /**
    * Gets threshold
    *  存储库容量阈值
    *
    * @return int|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param int|null $threshold 存储库容量阈值
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
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

