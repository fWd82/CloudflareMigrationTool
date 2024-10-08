<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConfigurationsAuditRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConfigurationsAuditRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID
    * actionTime  任务时间
    * filterBy  过滤配置信息
    * filter  过滤条件
    * limit  查询条数
    * offset  偏移量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'actionTime' => 'int',
            'filterBy' => 'string',
            'filter' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID
    * actionTime  任务时间
    * filterBy  过滤配置信息
    * filter  过滤条件
    * limit  查询条数
    * offset  偏移量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'actionTime' => 'int64',
        'filterBy' => null,
        'filter' => null,
        'limit' => null,
        'offset' => null
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
    * clusterId  集群ID
    * actionTime  任务时间
    * filterBy  过滤配置信息
    * filter  过滤条件
    * limit  查询条数
    * offset  偏移量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'actionTime' => 'action_time',
            'filterBy' => 'filter_by',
            'filter' => 'filter',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID
    * actionTime  任务时间
    * filterBy  过滤配置信息
    * filter  过滤条件
    * limit  查询条数
    * offset  偏移量
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'actionTime' => 'setActionTime',
            'filterBy' => 'setFilterBy',
            'filter' => 'setFilter',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID
    * actionTime  任务时间
    * filterBy  过滤配置信息
    * filter  过滤条件
    * limit  查询条数
    * offset  偏移量
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'actionTime' => 'getActionTime',
            'filterBy' => 'getFilterBy',
            'filter' => 'getFilter',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['actionTime'] = isset($data['actionTime']) ? $data['actionTime'] : null;
        $this->container['filterBy'] = isset($data['filterBy']) ? $data['filterBy'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
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
    * Gets clusterId
    *  集群ID
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets actionTime
    *  任务时间
    *
    * @return int|null
    */
    public function getActionTime()
    {
        return $this->container['actionTime'];
    }

    /**
    * Sets actionTime
    *
    * @param int|null $actionTime 任务时间
    *
    * @return $this
    */
    public function setActionTime($actionTime)
    {
        $this->container['actionTime'] = $actionTime;
        return $this;
    }

    /**
    * Gets filterBy
    *  过滤配置信息
    *
    * @return string|null
    */
    public function getFilterBy()
    {
        return $this->container['filterBy'];
    }

    /**
    * Sets filterBy
    *
    * @param string|null $filterBy 过滤配置信息
    *
    * @return $this
    */
    public function setFilterBy($filterBy)
    {
        $this->container['filterBy'] = $filterBy;
        return $this;
    }

    /**
    * Gets filter
    *  过滤条件
    *
    * @return string|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param string|null $filter 过滤条件
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets limit
    *  查询条数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询条数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

