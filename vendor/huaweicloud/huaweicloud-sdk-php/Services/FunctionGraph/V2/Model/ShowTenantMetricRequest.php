<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTenantMetricRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTenantMetricRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * period  时间段，单位为分钟
    * startTime  开始时间，精确到ms的时间戳
    * endTime  结束时间，精确到ms的时间戳
    * metricType  指标类型，为空或不在取值范围内时，查询所有指标。取值范围：totalCount 调用次数；errorCount 错误次数； averageDuration 运行时间；running 运行中个数；rejectCount  拒绝个数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'period' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'metricType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * period  时间段，单位为分钟
    * startTime  开始时间，精确到ms的时间戳
    * endTime  结束时间，精确到ms的时间戳
    * metricType  指标类型，为空或不在取值范围内时，查询所有指标。取值范围：totalCount 调用次数；errorCount 错误次数； averageDuration 运行时间；running 运行中个数；rejectCount  拒绝个数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'period' => null,
        'startTime' => null,
        'endTime' => null,
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
    * period  时间段，单位为分钟
    * startTime  开始时间，精确到ms的时间戳
    * endTime  结束时间，精确到ms的时间戳
    * metricType  指标类型，为空或不在取值范围内时，查询所有指标。取值范围：totalCount 调用次数；errorCount 错误次数； averageDuration 运行时间；running 运行中个数；rejectCount  拒绝个数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'period' => 'period',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'metricType' => 'metric_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * period  时间段，单位为分钟
    * startTime  开始时间，精确到ms的时间戳
    * endTime  结束时间，精确到ms的时间戳
    * metricType  指标类型，为空或不在取值范围内时，查询所有指标。取值范围：totalCount 调用次数；errorCount 错误次数； averageDuration 运行时间；running 运行中个数；rejectCount  拒绝个数。
    *
    * @var string[]
    */
    protected static $setters = [
            'period' => 'setPeriod',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'metricType' => 'setMetricType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * period  时间段，单位为分钟
    * startTime  开始时间，精确到ms的时间戳
    * endTime  结束时间，精确到ms的时间戳
    * metricType  指标类型，为空或不在取值范围内时，查询所有指标。取值范围：totalCount 调用次数；errorCount 错误次数； averageDuration 运行时间；running 运行中个数；rejectCount  拒绝个数。
    *
    * @var string[]
    */
    protected static $getters = [
            'period' => 'getPeriod',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
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
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    * Gets period
    *  时间段，单位为分钟
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 时间段，单位为分钟
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，精确到ms的时间戳
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间，精确到ms的时间戳
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间，精确到ms的时间戳
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间，精确到ms的时间戳
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets metricType
    *  指标类型，为空或不在取值范围内时，查询所有指标。取值范围：totalCount 调用次数；errorCount 错误次数； averageDuration 运行时间；running 运行中个数；rejectCount  拒绝个数。
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
    * @param string|null $metricType 指标类型，为空或不在取值范围内时，查询所有指标。取值范围：totalCount 调用次数；errorCount 错误次数； averageDuration 运行时间；running 运行中个数；rejectCount  拒绝个数。
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

