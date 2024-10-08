<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  部署任务ID。
    * instanceId  应用组件实例ID。
    * limit  指定查询的个数，可用于分页查询。
    * offset  指定查询的偏移量，可用于分页查询。
    * desc  是否降序。true表示desc, false表示asc。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'instanceId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'desc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  部署任务ID。
    * instanceId  应用组件实例ID。
    * limit  指定查询的个数，可用于分页查询。
    * offset  指定查询的偏移量，可用于分页查询。
    * desc  是否降序。true表示desc, false表示asc。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'instanceId' => null,
        'limit' => null,
        'offset' => null,
        'desc' => null
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
    * jobId  部署任务ID。
    * instanceId  应用组件实例ID。
    * limit  指定查询的个数，可用于分页查询。
    * offset  指定查询的偏移量，可用于分页查询。
    * desc  是否降序。true表示desc, false表示asc。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'instanceId' => 'instance_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'desc' => 'desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  部署任务ID。
    * instanceId  应用组件实例ID。
    * limit  指定查询的个数，可用于分页查询。
    * offset  指定查询的偏移量，可用于分页查询。
    * desc  是否降序。true表示desc, false表示asc。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'instanceId' => 'setInstanceId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'desc' => 'setDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  部署任务ID。
    * instanceId  应用组件实例ID。
    * limit  指定查询的个数，可用于分页查询。
    * offset  指定查询的偏移量，可用于分页查询。
    * desc  是否降序。true表示desc, false表示asc。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'instanceId' => 'getInstanceId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'desc' => 'getDesc'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
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
    *  部署任务ID。
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
    * @param string $jobId 部署任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets instanceId
    *  应用组件实例ID。
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
    * @param string|null $instanceId 应用组件实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets limit
    *  指定查询的个数，可用于分页查询。
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
    * @param int|null $limit 指定查询的个数，可用于分页查询。
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
    *  指定查询的偏移量，可用于分页查询。
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
    * @param int|null $offset 指定查询的偏移量，可用于分页查询。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets desc
    *  是否降序。true表示desc, false表示asc。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 是否降序。true表示desc, false表示asc。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
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

