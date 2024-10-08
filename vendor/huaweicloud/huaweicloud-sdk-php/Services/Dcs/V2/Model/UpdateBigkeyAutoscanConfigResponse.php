<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateBigkeyAutoscanConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateBigkeyAutoscanConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * enableAutoScan  是否开启自动分析
    * scheduleAt  每日分析时间，时间格式为21:00
    * updatedAt  配置更新时间，时间格式为2020-06-15T02:21:18.669Z
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'enableAutoScan' => 'bool',
            'scheduleAt' => 'string[]',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * enableAutoScan  是否开启自动分析
    * scheduleAt  每日分析时间，时间格式为21:00
    * updatedAt  配置更新时间，时间格式为2020-06-15T02:21:18.669Z
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'enableAutoScan' => null,
        'scheduleAt' => null,
        'updatedAt' => null
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
    * instanceId  实例ID
    * enableAutoScan  是否开启自动分析
    * scheduleAt  每日分析时间，时间格式为21:00
    * updatedAt  配置更新时间，时间格式为2020-06-15T02:21:18.669Z
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'enableAutoScan' => 'enable_auto_scan',
            'scheduleAt' => 'schedule_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * enableAutoScan  是否开启自动分析
    * scheduleAt  每日分析时间，时间格式为21:00
    * updatedAt  配置更新时间，时间格式为2020-06-15T02:21:18.669Z
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'enableAutoScan' => 'setEnableAutoScan',
            'scheduleAt' => 'setScheduleAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * enableAutoScan  是否开启自动分析
    * scheduleAt  每日分析时间，时间格式为21:00
    * updatedAt  配置更新时间，时间格式为2020-06-15T02:21:18.669Z
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'enableAutoScan' => 'getEnableAutoScan',
            'scheduleAt' => 'getScheduleAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['enableAutoScan'] = isset($data['enableAutoScan']) ? $data['enableAutoScan'] : null;
        $this->container['scheduleAt'] = isset($data['scheduleAt']) ? $data['scheduleAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets enableAutoScan
    *  是否开启自动分析
    *
    * @return bool|null
    */
    public function getEnableAutoScan()
    {
        return $this->container['enableAutoScan'];
    }

    /**
    * Sets enableAutoScan
    *
    * @param bool|null $enableAutoScan 是否开启自动分析
    *
    * @return $this
    */
    public function setEnableAutoScan($enableAutoScan)
    {
        $this->container['enableAutoScan'] = $enableAutoScan;
        return $this;
    }

    /**
    * Gets scheduleAt
    *  每日分析时间，时间格式为21:00
    *
    * @return string[]|null
    */
    public function getScheduleAt()
    {
        return $this->container['scheduleAt'];
    }

    /**
    * Sets scheduleAt
    *
    * @param string[]|null $scheduleAt 每日分析时间，时间格式为21:00
    *
    * @return $this
    */
    public function setScheduleAt($scheduleAt)
    {
        $this->container['scheduleAt'] = $scheduleAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  配置更新时间，时间格式为2020-06-15T02:21:18.669Z
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 配置更新时间，时间格式为2020-06-15T02:21:18.669Z
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

