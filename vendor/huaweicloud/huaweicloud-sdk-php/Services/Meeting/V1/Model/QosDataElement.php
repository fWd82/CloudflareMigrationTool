<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QosDataElement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QosDataElement';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  QoS时间点, UTC时间，格式：yyyy-MM-ddTHH:mm:ss.SSSZ。
    * value  QoS值。
    * alarm  该时间点是否有阈值告警。 * true: 阈值告警 * false: 无阈值告警
    * threshold  该时间点的阈值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'string',
            'value' => 'int',
            'alarm' => 'bool',
            'threshold' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  QoS时间点, UTC时间，格式：yyyy-MM-ddTHH:mm:ss.SSSZ。
    * value  QoS值。
    * alarm  该时间点是否有阈值告警。 * true: 阈值告警 * false: 无阈值告警
    * threshold  该时间点的阈值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'value' => null,
        'alarm' => null,
        'threshold' => null
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
    * time  QoS时间点, UTC时间，格式：yyyy-MM-ddTHH:mm:ss.SSSZ。
    * value  QoS值。
    * alarm  该时间点是否有阈值告警。 * true: 阈值告警 * false: 无阈值告警
    * threshold  该时间点的阈值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'value' => 'value',
            'alarm' => 'alarm',
            'threshold' => 'threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  QoS时间点, UTC时间，格式：yyyy-MM-ddTHH:mm:ss.SSSZ。
    * value  QoS值。
    * alarm  该时间点是否有阈值告警。 * true: 阈值告警 * false: 无阈值告警
    * threshold  该时间点的阈值。
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'value' => 'setValue',
            'alarm' => 'setAlarm',
            'threshold' => 'setThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  QoS时间点, UTC时间，格式：yyyy-MM-ddTHH:mm:ss.SSSZ。
    * value  QoS值。
    * alarm  该时间点是否有阈值告警。 * true: 阈值告警 * false: 无阈值告警
    * threshold  该时间点的阈值。
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'value' => 'getValue',
            'alarm' => 'getAlarm',
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['alarm'] = isset($data['alarm']) ? $data['alarm'] : null;
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
    * Gets time
    *  QoS时间点, UTC时间，格式：yyyy-MM-ddTHH:mm:ss.SSSZ。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time QoS时间点, UTC时间，格式：yyyy-MM-ddTHH:mm:ss.SSSZ。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets value
    *  QoS值。
    *
    * @return int|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param int|null $value QoS值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets alarm
    *  该时间点是否有阈值告警。 * true: 阈值告警 * false: 无阈值告警
    *
    * @return bool|null
    */
    public function getAlarm()
    {
        return $this->container['alarm'];
    }

    /**
    * Sets alarm
    *
    * @param bool|null $alarm 该时间点是否有阈值告警。 * true: 阈值告警 * false: 无阈值告警
    *
    * @return $this
    */
    public function setAlarm($alarm)
    {
        $this->container['alarm'] = $alarm;
        return $this;
    }

    /**
    * Gets threshold
    *  该时间点的阈值。
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
    * @param int|null $threshold 该时间点的阈值。
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

