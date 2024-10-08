<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMaintainWindowsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMaintainWindowsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maintainWindows  支持的维护时间窗列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maintainWindows' => '\HuaweiCloud\SDK\Kafka\V2\Model\MaintainWindowsEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maintainWindows  支持的维护时间窗列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maintainWindows' => null
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
    * maintainWindows  支持的维护时间窗列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maintainWindows' => 'maintain_windows'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maintainWindows  支持的维护时间窗列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'maintainWindows' => 'setMaintainWindows'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maintainWindows  支持的维护时间窗列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'maintainWindows' => 'getMaintainWindows'
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
        $this->container['maintainWindows'] = isset($data['maintainWindows']) ? $data['maintainWindows'] : null;
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
    * Gets maintainWindows
    *  支持的维护时间窗列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\MaintainWindowsEntity[]|null
    */
    public function getMaintainWindows()
    {
        return $this->container['maintainWindows'];
    }

    /**
    * Sets maintainWindows
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\MaintainWindowsEntity[]|null $maintainWindows 支持的维护时间窗列表。
    *
    * @return $this
    */
    public function setMaintainWindows($maintainWindows)
    {
        $this->container['maintainWindows'] = $maintainWindows;
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

