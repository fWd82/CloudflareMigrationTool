<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TuningParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TuningParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paramName  参数名称。
    * paramValue  参数取值。
    * availability  是否可用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paramName' => 'string',
            'paramValue' => 'string',
            'availability' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paramName  参数名称。
    * paramValue  参数取值。
    * availability  是否可用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paramName' => null,
        'paramValue' => null,
        'availability' => null
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
    * paramName  参数名称。
    * paramValue  参数取值。
    * availability  是否可用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paramName' => 'param_name',
            'paramValue' => 'param_value',
            'availability' => 'availability'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paramName  参数名称。
    * paramValue  参数取值。
    * availability  是否可用。
    *
    * @var string[]
    */
    protected static $setters = [
            'paramName' => 'setParamName',
            'paramValue' => 'setParamValue',
            'availability' => 'setAvailability'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paramName  参数名称。
    * paramValue  参数取值。
    * availability  是否可用。
    *
    * @var string[]
    */
    protected static $getters = [
            'paramName' => 'getParamName',
            'paramValue' => 'getParamValue',
            'availability' => 'getAvailability'
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
        $this->container['paramName'] = isset($data['paramName']) ? $data['paramName'] : null;
        $this->container['paramValue'] = isset($data['paramValue']) ? $data['paramValue'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['paramName'] === null) {
            $invalidProperties[] = "'paramName' can't be null";
        }
        if ($this->container['paramValue'] === null) {
            $invalidProperties[] = "'paramValue' can't be null";
        }
        if ($this->container['availability'] === null) {
            $invalidProperties[] = "'availability' can't be null";
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
    * Gets paramName
    *  参数名称。
    *
    * @return string
    */
    public function getParamName()
    {
        return $this->container['paramName'];
    }

    /**
    * Sets paramName
    *
    * @param string $paramName 参数名称。
    *
    * @return $this
    */
    public function setParamName($paramName)
    {
        $this->container['paramName'] = $paramName;
        return $this;
    }

    /**
    * Gets paramValue
    *  参数取值。
    *
    * @return string
    */
    public function getParamValue()
    {
        return $this->container['paramValue'];
    }

    /**
    * Sets paramValue
    *
    * @param string $paramValue 参数取值。
    *
    * @return $this
    */
    public function setParamValue($paramValue)
    {
        $this->container['paramValue'] = $paramValue;
        return $this;
    }

    /**
    * Gets availability
    *  是否可用。
    *
    * @return bool
    */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
    * Sets availability
    *
    * @param bool $availability 是否可用。
    *
    * @return $this
    */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;
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

