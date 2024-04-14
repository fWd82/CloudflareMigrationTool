<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowListPeriodHistoryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowListPeriodHistoryRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * offset  分页页码， 表示从此页开始查询， offset大于等于0
    * limit  每页显示的条目数量，limit小于等于100
    * startTime  区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * endTime  区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * offset  分页页码， 表示从此页开始查询， offset大于等于0
    * limit  每页显示的条目数量，limit小于等于100
    * startTime  区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * endTime  区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'startTime' => null,
        'endTime' => null
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
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * offset  分页页码， 表示从此页开始查询， offset大于等于0
    * limit  每页显示的条目数量，limit小于等于100
    * startTime  区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * endTime  区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * offset  分页页码， 表示从此页开始查询， offset大于等于0
    * limit  每页显示的条目数量，limit小于等于100
    * startTime  区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * endTime  区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * offset  分页页码， 表示从此页开始查询， offset大于等于0
    * limit  每页显示的条目数量，limit小于等于100
    * startTime  区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    * endTime  区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['jobId'])) {
                $invalidProperties[] = "invalid value for 'jobId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if (!preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $this->container['startTime'])) {
                $invalidProperties[] = "invalid value for 'startTime', must be conform to the pattern /^[0-9]{4}-[0-9]{2}-[0-9]{2}$/.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (!preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $this->container['endTime'])) {
                $invalidProperties[] = "invalid value for 'endTime', must be conform to the pattern /^[0-9]{4}-[0-9]{2}-[0-9]{2}$/.";
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
    * Gets jobId
    *  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets offset
    *  分页页码， 表示从此页开始查询， offset大于等于0
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 分页页码， 表示从此页开始查询， offset大于等于0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量，limit小于等于100
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示的条目数量，limit小于等于100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets startTime
    *  区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 区间开始时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
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
    *  区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 区间结束时间，格式yyyy-MM-dd。 开始时间和结束时间间隔不能超过30天
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

