<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMetricDataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMetricDataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datapoints  指标数据列表。由于查询数据时，云监控会根据所选择的聚合粒度向前取整from参数，所以datapoints中包含的数据点有可能会多于预期。
    * metricName  指标名称，例如弹性云服务器监控指标中的cpu_util。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datapoints' => '\HuaweiCloud\SDK\Ces\V1\Model\Datapoint[]',
            'metricName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datapoints  指标数据列表。由于查询数据时，云监控会根据所选择的聚合粒度向前取整from参数，所以datapoints中包含的数据点有可能会多于预期。
    * metricName  指标名称，例如弹性云服务器监控指标中的cpu_util。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datapoints' => null,
        'metricName' => null
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
    * datapoints  指标数据列表。由于查询数据时，云监控会根据所选择的聚合粒度向前取整from参数，所以datapoints中包含的数据点有可能会多于预期。
    * metricName  指标名称，例如弹性云服务器监控指标中的cpu_util。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datapoints' => 'datapoints',
            'metricName' => 'metric_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datapoints  指标数据列表。由于查询数据时，云监控会根据所选择的聚合粒度向前取整from参数，所以datapoints中包含的数据点有可能会多于预期。
    * metricName  指标名称，例如弹性云服务器监控指标中的cpu_util。
    *
    * @var string[]
    */
    protected static $setters = [
            'datapoints' => 'setDatapoints',
            'metricName' => 'setMetricName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datapoints  指标数据列表。由于查询数据时，云监控会根据所选择的聚合粒度向前取整from参数，所以datapoints中包含的数据点有可能会多于预期。
    * metricName  指标名称，例如弹性云服务器监控指标中的cpu_util。
    *
    * @var string[]
    */
    protected static $getters = [
            'datapoints' => 'getDatapoints',
            'metricName' => 'getMetricName'
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
        $this->container['datapoints'] = isset($data['datapoints']) ? $data['datapoints'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
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
    * Gets datapoints
    *  指标数据列表。由于查询数据时，云监控会根据所选择的聚合粒度向前取整from参数，所以datapoints中包含的数据点有可能会多于预期。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\Datapoint[]|null
    */
    public function getDatapoints()
    {
        return $this->container['datapoints'];
    }

    /**
    * Sets datapoints
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\Datapoint[]|null $datapoints 指标数据列表。由于查询数据时，云监控会根据所选择的聚合粒度向前取整from参数，所以datapoints中包含的数据点有可能会多于预期。
    *
    * @return $this
    */
    public function setDatapoints($datapoints)
    {
        $this->container['datapoints'] = $datapoints;
        return $this;
    }

    /**
    * Gets metricName
    *  指标名称，例如弹性云服务器监控指标中的cpu_util。
    *
    * @return string|null
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string|null $metricName 指标名称，例如弹性云服务器监控指标中的cpu_util。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
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

