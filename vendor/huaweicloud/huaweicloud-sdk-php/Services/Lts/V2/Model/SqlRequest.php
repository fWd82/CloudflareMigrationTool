<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isTimeRangeRelative  是时间范围相对
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * sql  sql语句
    * sqlRequestTitle  图表名称
    * searchTimeRange  查询执行任务时最近数据的时间范围(当search_time_range_unit为minute，则最大值为60;当search_time_range_unit为hour，则最大值为24)
    * searchTimeRangeUnit  查询时间单位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isTimeRangeRelative' => 'bool',
            'logStreamId' => 'string',
            'logStreamName' => 'string',
            'logGroupId' => 'string',
            'logGroupName' => 'string',
            'sql' => 'string',
            'sqlRequestTitle' => 'string',
            'searchTimeRange' => 'int',
            'searchTimeRangeUnit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isTimeRangeRelative  是时间范围相对
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * sql  sql语句
    * sqlRequestTitle  图表名称
    * searchTimeRange  查询执行任务时最近数据的时间范围(当search_time_range_unit为minute，则最大值为60;当search_time_range_unit为hour，则最大值为24)
    * searchTimeRangeUnit  查询时间单位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isTimeRangeRelative' => null,
        'logStreamId' => null,
        'logStreamName' => null,
        'logGroupId' => null,
        'logGroupName' => null,
        'sql' => null,
        'sqlRequestTitle' => null,
        'searchTimeRange' => 'int32',
        'searchTimeRangeUnit' => null
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
    * isTimeRangeRelative  是时间范围相对
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * sql  sql语句
    * sqlRequestTitle  图表名称
    * searchTimeRange  查询执行任务时最近数据的时间范围(当search_time_range_unit为minute，则最大值为60;当search_time_range_unit为hour，则最大值为24)
    * searchTimeRangeUnit  查询时间单位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isTimeRangeRelative' => 'is_time_range_relative',
            'logStreamId' => 'log_stream_id',
            'logStreamName' => 'log_stream_name',
            'logGroupId' => 'log_group_id',
            'logGroupName' => 'log_group_name',
            'sql' => 'sql',
            'sqlRequestTitle' => 'sql_request_title',
            'searchTimeRange' => 'search_time_range',
            'searchTimeRangeUnit' => 'search_time_range_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isTimeRangeRelative  是时间范围相对
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * sql  sql语句
    * sqlRequestTitle  图表名称
    * searchTimeRange  查询执行任务时最近数据的时间范围(当search_time_range_unit为minute，则最大值为60;当search_time_range_unit为hour，则最大值为24)
    * searchTimeRangeUnit  查询时间单位
    *
    * @var string[]
    */
    protected static $setters = [
            'isTimeRangeRelative' => 'setIsTimeRangeRelative',
            'logStreamId' => 'setLogStreamId',
            'logStreamName' => 'setLogStreamName',
            'logGroupId' => 'setLogGroupId',
            'logGroupName' => 'setLogGroupName',
            'sql' => 'setSql',
            'sqlRequestTitle' => 'setSqlRequestTitle',
            'searchTimeRange' => 'setSearchTimeRange',
            'searchTimeRangeUnit' => 'setSearchTimeRangeUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isTimeRangeRelative  是时间范围相对
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * sql  sql语句
    * sqlRequestTitle  图表名称
    * searchTimeRange  查询执行任务时最近数据的时间范围(当search_time_range_unit为minute，则最大值为60;当search_time_range_unit为hour，则最大值为24)
    * searchTimeRangeUnit  查询时间单位
    *
    * @var string[]
    */
    protected static $getters = [
            'isTimeRangeRelative' => 'getIsTimeRangeRelative',
            'logStreamId' => 'getLogStreamId',
            'logStreamName' => 'getLogStreamName',
            'logGroupId' => 'getLogGroupId',
            'logGroupName' => 'getLogGroupName',
            'sql' => 'getSql',
            'sqlRequestTitle' => 'getSqlRequestTitle',
            'searchTimeRange' => 'getSearchTimeRange',
            'searchTimeRangeUnit' => 'getSearchTimeRangeUnit'
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
    const SEARCH_TIME_RANGE_UNIT_MINUTE = 'minute';
    const SEARCH_TIME_RANGE_UNIT_HOUR = 'hour';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSearchTimeRangeUnitAllowableValues()
    {
        return [
            self::SEARCH_TIME_RANGE_UNIT_MINUTE,
            self::SEARCH_TIME_RANGE_UNIT_HOUR,
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
        $this->container['isTimeRangeRelative'] = isset($data['isTimeRangeRelative']) ? $data['isTimeRangeRelative'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['sqlRequestTitle'] = isset($data['sqlRequestTitle']) ? $data['sqlRequestTitle'] : null;
        $this->container['searchTimeRange'] = isset($data['searchTimeRange']) ? $data['searchTimeRange'] : null;
        $this->container['searchTimeRangeUnit'] = isset($data['searchTimeRangeUnit']) ? $data['searchTimeRangeUnit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logStreamId'] === null) {
            $invalidProperties[] = "'logStreamId' can't be null";
        }
            if ((mb_strlen($this->container['logStreamId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['logStreamId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['logStreamName']) && (mb_strlen($this->container['logStreamName']) > 64)) {
                $invalidProperties[] = "invalid value for 'logStreamName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['logStreamName']) && (mb_strlen($this->container['logStreamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logStreamName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
            if ((mb_strlen($this->container['logGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['logGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sql'] === null) {
            $invalidProperties[] = "'sql' can't be null";
        }
            if ((mb_strlen($this->container['sql']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sql', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['sql']) < 1)) {
                $invalidProperties[] = "invalid value for 'sql', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sqlRequestTitle'] === null) {
            $invalidProperties[] = "'sqlRequestTitle' can't be null";
        }
            if ((mb_strlen($this->container['sqlRequestTitle']) > 64)) {
                $invalidProperties[] = "invalid value for 'sqlRequestTitle', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['sqlRequestTitle']) < 1)) {
                $invalidProperties[] = "invalid value for 'sqlRequestTitle', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['searchTimeRange'] === null) {
            $invalidProperties[] = "'searchTimeRange' can't be null";
        }
            if (($this->container['searchTimeRange'] > 60)) {
                $invalidProperties[] = "invalid value for 'searchTimeRange', must be smaller than or equal to 60.";
            }
            if (($this->container['searchTimeRange'] < 1)) {
                $invalidProperties[] = "invalid value for 'searchTimeRange', must be bigger than or equal to 1.";
            }
        if ($this->container['searchTimeRangeUnit'] === null) {
            $invalidProperties[] = "'searchTimeRangeUnit' can't be null";
        }
            $allowedValues = $this->getSearchTimeRangeUnitAllowableValues();
                if (!is_null($this->container['searchTimeRangeUnit']) && !in_array($this->container['searchTimeRangeUnit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'searchTimeRangeUnit', must be one of '%s'",
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
    * Gets isTimeRangeRelative
    *  是时间范围相对
    *
    * @return bool|null
    */
    public function getIsTimeRangeRelative()
    {
        return $this->container['isTimeRangeRelative'];
    }

    /**
    * Sets isTimeRangeRelative
    *
    * @param bool|null $isTimeRangeRelative 是时间范围相对
    *
    * @return $this
    */
    public function setIsTimeRangeRelative($isTimeRangeRelative)
    {
        $this->container['isTimeRangeRelative'] = $isTimeRangeRelative;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流id
    *
    * @return string
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string $logStreamId 日志流id
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logStreamName
    *  日志流名称
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName 日志流名称
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组id
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId 日志组id
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logGroupName
    *  日志组名称
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName 日志组名称
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets sql
    *  sql语句
    *
    * @return string
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string $sql sql语句
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets sqlRequestTitle
    *  图表名称
    *
    * @return string
    */
    public function getSqlRequestTitle()
    {
        return $this->container['sqlRequestTitle'];
    }

    /**
    * Sets sqlRequestTitle
    *
    * @param string $sqlRequestTitle 图表名称
    *
    * @return $this
    */
    public function setSqlRequestTitle($sqlRequestTitle)
    {
        $this->container['sqlRequestTitle'] = $sqlRequestTitle;
        return $this;
    }

    /**
    * Gets searchTimeRange
    *  查询执行任务时最近数据的时间范围(当search_time_range_unit为minute，则最大值为60;当search_time_range_unit为hour，则最大值为24)
    *
    * @return int
    */
    public function getSearchTimeRange()
    {
        return $this->container['searchTimeRange'];
    }

    /**
    * Sets searchTimeRange
    *
    * @param int $searchTimeRange 查询执行任务时最近数据的时间范围(当search_time_range_unit为minute，则最大值为60;当search_time_range_unit为hour，则最大值为24)
    *
    * @return $this
    */
    public function setSearchTimeRange($searchTimeRange)
    {
        $this->container['searchTimeRange'] = $searchTimeRange;
        return $this;
    }

    /**
    * Gets searchTimeRangeUnit
    *  查询时间单位
    *
    * @return string
    */
    public function getSearchTimeRangeUnit()
    {
        return $this->container['searchTimeRangeUnit'];
    }

    /**
    * Sets searchTimeRangeUnit
    *
    * @param string $searchTimeRangeUnit 查询时间单位
    *
    * @return $this
    */
    public function setSearchTimeRangeUnit($searchTimeRangeUnit)
    {
        $this->container['searchTimeRangeUnit'] = $searchTimeRangeUnit;
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

