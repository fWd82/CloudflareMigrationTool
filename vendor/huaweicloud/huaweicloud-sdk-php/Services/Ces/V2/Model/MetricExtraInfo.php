<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricExtraInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricExtraInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * originMetricName  原始指标名称
    * metricPrefix  指标名称前缀
    * customProcName  用户进程名称
    * metricType  指标类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'originMetricName' => 'string',
            'metricPrefix' => 'string',
            'customProcName' => 'string',
            'metricType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * originMetricName  原始指标名称
    * metricPrefix  指标名称前缀
    * customProcName  用户进程名称
    * metricType  指标类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'originMetricName' => null,
        'metricPrefix' => null,
        'customProcName' => null,
        'metricType' => null
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
    * originMetricName  原始指标名称
    * metricPrefix  指标名称前缀
    * customProcName  用户进程名称
    * metricType  指标类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'originMetricName' => 'origin_metric_name',
            'metricPrefix' => 'metric_prefix',
            'customProcName' => 'custom_proc_name',
            'metricType' => 'metric_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * originMetricName  原始指标名称
    * metricPrefix  指标名称前缀
    * customProcName  用户进程名称
    * metricType  指标类型
    *
    * @var string[]
    */
    protected static $setters = [
            'originMetricName' => 'setOriginMetricName',
            'metricPrefix' => 'setMetricPrefix',
            'customProcName' => 'setCustomProcName',
            'metricType' => 'setMetricType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * originMetricName  原始指标名称
    * metricPrefix  指标名称前缀
    * customProcName  用户进程名称
    * metricType  指标类型
    *
    * @var string[]
    */
    protected static $getters = [
            'originMetricName' => 'getOriginMetricName',
            'metricPrefix' => 'getMetricPrefix',
            'customProcName' => 'getCustomProcName',
            'metricType' => 'getMetricType'
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
        $this->container['originMetricName'] = isset($data['originMetricName']) ? $data['originMetricName'] : null;
        $this->container['metricPrefix'] = isset($data['metricPrefix']) ? $data['metricPrefix'] : null;
        $this->container['customProcName'] = isset($data['customProcName']) ? $data['customProcName'] : null;
        $this->container['metricType'] = isset($data['metricType']) ? $data['metricType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['originMetricName']) && (mb_strlen($this->container['originMetricName']) > 64)) {
                $invalidProperties[] = "invalid value for 'originMetricName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['originMetricName']) && (mb_strlen($this->container['originMetricName']) < 0)) {
                $invalidProperties[] = "invalid value for 'originMetricName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['metricPrefix']) && (mb_strlen($this->container['metricPrefix']) > 8)) {
                $invalidProperties[] = "invalid value for 'metricPrefix', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['metricPrefix']) && (mb_strlen($this->container['metricPrefix']) < 0)) {
                $invalidProperties[] = "invalid value for 'metricPrefix', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['customProcName']) && (mb_strlen($this->container['customProcName']) > 64)) {
                $invalidProperties[] = "invalid value for 'customProcName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['customProcName']) && (mb_strlen($this->container['customProcName']) < 0)) {
                $invalidProperties[] = "invalid value for 'customProcName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['metricType']) && (mb_strlen($this->container['metricType']) > 16)) {
                $invalidProperties[] = "invalid value for 'metricType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['metricType']) && (mb_strlen($this->container['metricType']) < 0)) {
                $invalidProperties[] = "invalid value for 'metricType', the character length must be bigger than or equal to 0.";
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
    * Gets originMetricName
    *  原始指标名称
    *
    * @return string|null
    */
    public function getOriginMetricName()
    {
        return $this->container['originMetricName'];
    }

    /**
    * Sets originMetricName
    *
    * @param string|null $originMetricName 原始指标名称
    *
    * @return $this
    */
    public function setOriginMetricName($originMetricName)
    {
        $this->container['originMetricName'] = $originMetricName;
        return $this;
    }

    /**
    * Gets metricPrefix
    *  指标名称前缀
    *
    * @return string|null
    */
    public function getMetricPrefix()
    {
        return $this->container['metricPrefix'];
    }

    /**
    * Sets metricPrefix
    *
    * @param string|null $metricPrefix 指标名称前缀
    *
    * @return $this
    */
    public function setMetricPrefix($metricPrefix)
    {
        $this->container['metricPrefix'] = $metricPrefix;
        return $this;
    }

    /**
    * Gets customProcName
    *  用户进程名称
    *
    * @return string|null
    */
    public function getCustomProcName()
    {
        return $this->container['customProcName'];
    }

    /**
    * Sets customProcName
    *
    * @param string|null $customProcName 用户进程名称
    *
    * @return $this
    */
    public function setCustomProcName($customProcName)
    {
        $this->container['customProcName'] = $customProcName;
        return $this;
    }

    /**
    * Gets metricType
    *  指标类型
    *
    * @return string|null
    */
    public function getMetricType()
    {
        return $this->container['metricType'];
    }

    /**
    * Sets metricType
    *
    * @param string|null $metricType 指标类型
    *
    * @return $this
    */
    public function setMetricType($metricType)
    {
        $this->container['metricType'] = $metricType;
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

