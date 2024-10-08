<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteHotkeyScanTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteHotkeyScanTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  热key分析记录ID
    * instanceId  实例ID
    * status  分析任务状态
    * scanType  分析方式
    * createdAt  分析任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * startedAt  分析任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * finishedAt  分析任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * num  热key的数量
    * keys  热key记录
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'status' => 'string',
            'scanType' => 'string',
            'createdAt' => 'string',
            'startedAt' => 'string',
            'finishedAt' => 'string',
            'num' => 'int',
            'keys' => '\HuaweiCloud\SDK\Dcs\V2\Model\HotkeysBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  热key分析记录ID
    * instanceId  实例ID
    * status  分析任务状态
    * scanType  分析方式
    * createdAt  分析任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * startedAt  分析任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * finishedAt  分析任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * num  热key的数量
    * keys  热key记录
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceId' => null,
        'status' => null,
        'scanType' => null,
        'createdAt' => null,
        'startedAt' => null,
        'finishedAt' => null,
        'num' => null,
        'keys' => null
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
    * id  热key分析记录ID
    * instanceId  实例ID
    * status  分析任务状态
    * scanType  分析方式
    * createdAt  分析任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * startedAt  分析任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * finishedAt  分析任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * num  热key的数量
    * keys  热key记录
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'status' => 'status',
            'scanType' => 'scan_type',
            'createdAt' => 'created_at',
            'startedAt' => 'started_at',
            'finishedAt' => 'finished_at',
            'num' => 'num',
            'keys' => 'keys'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  热key分析记录ID
    * instanceId  实例ID
    * status  分析任务状态
    * scanType  分析方式
    * createdAt  分析任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * startedAt  分析任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * finishedAt  分析任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * num  热key的数量
    * keys  热key记录
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'scanType' => 'setScanType',
            'createdAt' => 'setCreatedAt',
            'startedAt' => 'setStartedAt',
            'finishedAt' => 'setFinishedAt',
            'num' => 'setNum',
            'keys' => 'setKeys'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  热key分析记录ID
    * instanceId  实例ID
    * status  分析任务状态
    * scanType  分析方式
    * createdAt  分析任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * startedAt  分析任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * finishedAt  分析任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"
    * num  热key的数量
    * keys  热key记录
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'scanType' => 'getScanType',
            'createdAt' => 'getCreatedAt',
            'startedAt' => 'getStartedAt',
            'finishedAt' => 'getFinishedAt',
            'num' => 'getNum',
            'keys' => 'getKeys'
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
    const STATUS_WAITING = 'waiting';
    const STATUS_RUNNING = 'running';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
    const SCAN_TYPE_MANUAL = 'manual';
    const SCAN_TYPE_AUTO = 'auto';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_RUNNING,
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScanTypeAllowableValues()
    {
        return [
            self::SCAN_TYPE_MANUAL,
            self::SCAN_TYPE_AUTO,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['startedAt'] = isset($data['startedAt']) ? $data['startedAt'] : null;
        $this->container['finishedAt'] = isset($data['finishedAt']) ? $data['finishedAt'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
        $this->container['keys'] = isset($data['keys']) ? $data['keys'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getScanTypeAllowableValues();
                if (!is_null($this->container['scanType']) && !in_array($this->container['scanType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scanType', must be one of '%s'",
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
    * Gets id
    *  热key分析记录ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 热key分析记录ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
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
    * Gets status
    *  分析任务状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 分析任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets scanType
    *  分析方式
    *
    * @return string|null
    */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
    * Sets scanType
    *
    * @param string|null $scanType 分析方式
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
        return $this;
    }

    /**
    * Gets createdAt
    *  分析任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 分析任务创建时间,格式为：\"2020-06-15T02:21:18.669Z\"
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets startedAt
    *  分析任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"
    *
    * @return string|null
    */
    public function getStartedAt()
    {
        return $this->container['startedAt'];
    }

    /**
    * Sets startedAt
    *
    * @param string|null $startedAt 分析任务开始时间,格式为：\"2020-06-15T02:21:18.669Z\"
    *
    * @return $this
    */
    public function setStartedAt($startedAt)
    {
        $this->container['startedAt'] = $startedAt;
        return $this;
    }

    /**
    * Gets finishedAt
    *  分析任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"
    *
    * @return string|null
    */
    public function getFinishedAt()
    {
        return $this->container['finishedAt'];
    }

    /**
    * Sets finishedAt
    *
    * @param string|null $finishedAt 分析任务结束时间,格式为：\"2020-06-15T02:21:18.669Z\"
    *
    * @return $this
    */
    public function setFinishedAt($finishedAt)
    {
        $this->container['finishedAt'] = $finishedAt;
        return $this;
    }

    /**
    * Gets num
    *  热key的数量
    *
    * @return int|null
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int|null $num 热key的数量
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets keys
    *  热key记录
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\HotkeysBody[]|null
    */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
    * Sets keys
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\HotkeysBody[]|null $keys 热key记录
    *
    * @return $this
    */
    public function setKeys($keys)
    {
        $this->container['keys'] = $keys;
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

