<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Taint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Taint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  键
    * value  值
    * effect  作用效果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'value' => 'string',
            'effect' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  键
    * value  值
    * effect  作用效果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'value' => null,
        'effect' => null
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
    * value  值
    * effect  作用效果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'value' => 'value',
            'effect' => 'effect'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  键
    * value  值
    * effect  作用效果
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'value' => 'setValue',
            'effect' => 'setEffect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  键
    * value  值
    * effect  作用效果
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'value' => 'getValue',
            'effect' => 'getEffect'
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
    const EFFECT_NO_SCHEDULE = 'NoSchedule';
    const EFFECT_PREFER_NO_SCHEDULE = 'PreferNoSchedule';
    const EFFECT_NO_EXECUTE = 'NoExecute';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEffectAllowableValues()
    {
        return [
            self::EFFECT_NO_SCHEDULE,
            self::EFFECT_PREFER_NO_SCHEDULE,
            self::EFFECT_NO_EXECUTE,
        ];
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 63)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 63.";
            }
        if ($this->container['effect'] === null) {
            $invalidProperties[] = "'effect' can't be null";
        }
            $allowedValues = $this->getEffectAllowableValues();
                if (!is_null($this->container['effect']) && !in_array($this->container['effect'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'effect', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 键
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  值
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets effect
    *  作用效果
    *
    * @return string
    */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
    * Sets effect
    *
    * @param string $effect 作用效果
    *
    * @return $this
    */
    public function setEffect($effect)
    {
        $this->container['effect'] = $effect;
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

