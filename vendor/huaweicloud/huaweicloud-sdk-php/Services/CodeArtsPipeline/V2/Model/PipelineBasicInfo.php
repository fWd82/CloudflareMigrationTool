<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineBasicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineBasicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  CodeArts项目id
    * projectName  CodeArts项目名字
    * pipelineId  流水线id
    * pipelineName  流水线名字
    * creatorId  流水线创建人id
    * creatorName  流水线创建人名字
    * executorId  流水线创建人id
    * executorName  流水线执行人名字
    * startTime  启动时间
    * createTime  创建时间
    * watched  用户是否关注流水线：true（关注），false（未关注）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'projectName' => 'string',
            'pipelineId' => 'string',
            'pipelineName' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'executorId' => 'string',
            'executorName' => 'string',
            'startTime' => 'string',
            'createTime' => 'string',
            'watched' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  CodeArts项目id
    * projectName  CodeArts项目名字
    * pipelineId  流水线id
    * pipelineName  流水线名字
    * creatorId  流水线创建人id
    * creatorName  流水线创建人名字
    * executorId  流水线创建人id
    * executorName  流水线执行人名字
    * startTime  启动时间
    * createTime  创建时间
    * watched  用户是否关注流水线：true（关注），false（未关注）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'projectName' => null,
        'pipelineId' => null,
        'pipelineName' => null,
        'creatorId' => null,
        'creatorName' => null,
        'executorId' => null,
        'executorName' => null,
        'startTime' => null,
        'createTime' => null,
        'watched' => null
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
    * projectId  CodeArts项目id
    * projectName  CodeArts项目名字
    * pipelineId  流水线id
    * pipelineName  流水线名字
    * creatorId  流水线创建人id
    * creatorName  流水线创建人名字
    * executorId  流水线创建人id
    * executorName  流水线执行人名字
    * startTime  启动时间
    * createTime  创建时间
    * watched  用户是否关注流水线：true（关注），false（未关注）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'pipelineId' => 'pipeline_id',
            'pipelineName' => 'pipeline_name',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'executorId' => 'executor_id',
            'executorName' => 'executor_name',
            'startTime' => 'start_time',
            'createTime' => 'create_time',
            'watched' => 'watched'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  CodeArts项目id
    * projectName  CodeArts项目名字
    * pipelineId  流水线id
    * pipelineName  流水线名字
    * creatorId  流水线创建人id
    * creatorName  流水线创建人名字
    * executorId  流水线创建人id
    * executorName  流水线执行人名字
    * startTime  启动时间
    * createTime  创建时间
    * watched  用户是否关注流水线：true（关注），false（未关注）
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'pipelineId' => 'setPipelineId',
            'pipelineName' => 'setPipelineName',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'executorId' => 'setExecutorId',
            'executorName' => 'setExecutorName',
            'startTime' => 'setStartTime',
            'createTime' => 'setCreateTime',
            'watched' => 'setWatched'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  CodeArts项目id
    * projectName  CodeArts项目名字
    * pipelineId  流水线id
    * pipelineName  流水线名字
    * creatorId  流水线创建人id
    * creatorName  流水线创建人名字
    * executorId  流水线创建人id
    * executorName  流水线执行人名字
    * startTime  启动时间
    * createTime  创建时间
    * watched  用户是否关注流水线：true（关注），false（未关注）
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'pipelineId' => 'getPipelineId',
            'pipelineName' => 'getPipelineName',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'executorId' => 'getExecutorId',
            'executorName' => 'getExecutorName',
            'startTime' => 'getStartTime',
            'createTime' => 'getCreateTime',
            'watched' => 'getWatched'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['pipelineName'] = isset($data['pipelineName']) ? $data['pipelineName'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['executorId'] = isset($data['executorId']) ? $data['executorId'] : null;
        $this->container['executorName'] = isset($data['executorName']) ? $data['executorName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['watched'] = isset($data['watched']) ? $data['watched'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['projectName'] === null) {
            $invalidProperties[] = "'projectName' can't be null";
        }
        if ($this->container['pipelineId'] === null) {
            $invalidProperties[] = "'pipelineId' can't be null";
        }
        if ($this->container['pipelineName'] === null) {
            $invalidProperties[] = "'pipelineName' can't be null";
        }
        if ($this->container['creatorId'] === null) {
            $invalidProperties[] = "'creatorId' can't be null";
        }
        if ($this->container['creatorName'] === null) {
            $invalidProperties[] = "'creatorName' can't be null";
        }
        if ($this->container['executorId'] === null) {
            $invalidProperties[] = "'executorId' can't be null";
        }
        if ($this->container['executorName'] === null) {
            $invalidProperties[] = "'executorName' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['watched'] === null) {
            $invalidProperties[] = "'watched' can't be null";
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
    * Gets projectId
    *  CodeArts项目id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId CodeArts项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  CodeArts项目名字
    *
    * @return string
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string $projectName CodeArts项目名字
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets pipelineId
    *  流水线id
    *
    * @return string
    */
    public function getPipelineId()
    {
        return $this->container['pipelineId'];
    }

    /**
    * Sets pipelineId
    *
    * @param string $pipelineId 流水线id
    *
    * @return $this
    */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;
        return $this;
    }

    /**
    * Gets pipelineName
    *  流水线名字
    *
    * @return string
    */
    public function getPipelineName()
    {
        return $this->container['pipelineName'];
    }

    /**
    * Sets pipelineName
    *
    * @param string $pipelineName 流水线名字
    *
    * @return $this
    */
    public function setPipelineName($pipelineName)
    {
        $this->container['pipelineName'] = $pipelineName;
        return $this;
    }

    /**
    * Gets creatorId
    *  流水线创建人id
    *
    * @return string
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string $creatorId 流水线创建人id
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorName
    *  流水线创建人名字
    *
    * @return string
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string $creatorName 流水线创建人名字
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets executorId
    *  流水线创建人id
    *
    * @return string
    */
    public function getExecutorId()
    {
        return $this->container['executorId'];
    }

    /**
    * Sets executorId
    *
    * @param string $executorId 流水线创建人id
    *
    * @return $this
    */
    public function setExecutorId($executorId)
    {
        $this->container['executorId'] = $executorId;
        return $this;
    }

    /**
    * Gets executorName
    *  流水线执行人名字
    *
    * @return string
    */
    public function getExecutorName()
    {
        return $this->container['executorName'];
    }

    /**
    * Sets executorName
    *
    * @param string $executorName 流水线执行人名字
    *
    * @return $this
    */
    public function setExecutorName($executorName)
    {
        $this->container['executorName'] = $executorName;
        return $this;
    }

    /**
    * Gets startTime
    *  启动时间
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
    * @param string $startTime 启动时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets watched
    *  用户是否关注流水线：true（关注），false（未关注）
    *
    * @return string
    */
    public function getWatched()
    {
        return $this->container['watched'];
    }

    /**
    * Sets watched
    *
    * @param string $watched 用户是否关注流水线：true（关注），false（未关注）
    *
    * @return $this
    */
    public function setWatched($watched)
    {
        $this->container['watched'] = $watched;
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

