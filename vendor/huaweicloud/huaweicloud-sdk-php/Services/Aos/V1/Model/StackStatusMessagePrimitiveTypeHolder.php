<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StackStatusMessagePrimitiveTypeHolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StackStatusMessagePrimitiveTypeHolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * statusMessage  当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'statusMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * statusMessage  当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'statusMessage' => null
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
    * statusMessage  当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'statusMessage' => 'status_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * statusMessage  当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    *
    * @var string[]
    */
    protected static $setters = [
            'statusMessage' => 'setStatusMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * statusMessage  当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    *
    * @var string[]
    */
    protected static $getters = [
            'statusMessage' => 'getStatusMessage'
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
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
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
    * Gets statusMessage
    *  当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    *
    * @return string|null
    */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
    * Sets statusMessage
    *
    * @param string|null $statusMessage 当资源栈的状态为任意失败状态（即以 `FAILED` 结尾时），将会展示简要的错误信息总结以供debug
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
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

