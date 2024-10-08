<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StopExecutionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StopExecutionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workflowId  任务id，从工作流命令列表中获取的工作流id。
    * executionId  任务执行id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workflowId' => 'string',
            'executionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workflowId  任务id，从工作流命令列表中获取的工作流id。
    * executionId  任务执行id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workflowId' => null,
        'executionId' => null
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
    * workflowId  任务id，从工作流命令列表中获取的工作流id。
    * executionId  任务执行id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workflowId' => 'workflow_id',
            'executionId' => 'execution_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workflowId  任务id，从工作流命令列表中获取的工作流id。
    * executionId  任务执行id。
    *
    * @var string[]
    */
    protected static $setters = [
            'workflowId' => 'setWorkflowId',
            'executionId' => 'setExecutionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workflowId  任务id，从工作流命令列表中获取的工作流id。
    * executionId  任务执行id。
    *
    * @var string[]
    */
    protected static $getters = [
            'workflowId' => 'getWorkflowId',
            'executionId' => 'getExecutionId'
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
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workflowId'] === null) {
            $invalidProperties[] = "'workflowId' can't be null";
        }
            if ((mb_strlen($this->container['workflowId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workflowId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['executionId'] === null) {
            $invalidProperties[] = "'executionId' can't be null";
        }
            if ((mb_strlen($this->container['executionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'executionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['executionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'executionId', the character length must be bigger than or equal to 1.";
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
    * Gets workflowId
    *  任务id，从工作流命令列表中获取的工作流id。
    *
    * @return string
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string $workflowId 任务id，从工作流命令列表中获取的工作流id。
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets executionId
    *  任务执行id。
    *
    * @return string
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param string $executionId 任务执行id。
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
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

