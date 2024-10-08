<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executionStatus  executionStatus
    * jobId  jobId
    * jobType  jobType
    * rollbackEnabled  rollbackEnabled
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executionStatus' => 'string',
            'jobId' => 'string',
            'jobType' => 'string',
            'rollbackEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executionStatus  executionStatus
    * jobId  jobId
    * jobType  jobType
    * rollbackEnabled  rollbackEnabled
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executionStatus' => null,
        'jobId' => null,
        'jobType' => null,
        'rollbackEnabled' => null
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
    * executionStatus  executionStatus
    * jobId  jobId
    * jobType  jobType
    * rollbackEnabled  rollbackEnabled
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executionStatus' => 'execution_status',
            'jobId' => 'job_id',
            'jobType' => 'job_type',
            'rollbackEnabled' => 'rollback_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executionStatus  executionStatus
    * jobId  jobId
    * jobType  jobType
    * rollbackEnabled  rollbackEnabled
    *
    * @var string[]
    */
    protected static $setters = [
            'executionStatus' => 'setExecutionStatus',
            'jobId' => 'setJobId',
            'jobType' => 'setJobType',
            'rollbackEnabled' => 'setRollbackEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executionStatus  executionStatus
    * jobId  jobId
    * jobType  jobType
    * rollbackEnabled  rollbackEnabled
    *
    * @var string[]
    */
    protected static $getters = [
            'executionStatus' => 'getExecutionStatus',
            'jobId' => 'getJobId',
            'jobType' => 'getJobType',
            'rollbackEnabled' => 'getRollbackEnabled'
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
    const EXECUTION_STATUS_RUNNING = 'RUNNING';
    const EXECUTION_STATUS_FAILED = 'FAILED';
    const EXECUTION_STATUS_SUCCEEDED = 'SUCCEEDED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getExecutionStatusAllowableValues()
    {
        return [
            self::EXECUTION_STATUS_RUNNING,
            self::EXECUTION_STATUS_FAILED,
            self::EXECUTION_STATUS_SUCCEEDED,
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
        $this->container['executionStatus'] = isset($data['executionStatus']) ? $data['executionStatus'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['rollbackEnabled'] = isset($data['rollbackEnabled']) ? $data['rollbackEnabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getExecutionStatusAllowableValues();
                if (!is_null($this->container['executionStatus']) && !in_array($this->container['executionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'executionStatus', must be one of '%s'",
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
    * Gets executionStatus
    *  executionStatus
    *
    * @return string|null
    */
    public function getExecutionStatus()
    {
        return $this->container['executionStatus'];
    }

    /**
    * Sets executionStatus
    *
    * @param string|null $executionStatus executionStatus
    *
    * @return $this
    */
    public function setExecutionStatus($executionStatus)
    {
        $this->container['executionStatus'] = $executionStatus;
        return $this;
    }

    /**
    * Gets jobId
    *  jobId
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId jobId
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobType
    *  jobType
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType jobType
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets rollbackEnabled
    *  rollbackEnabled
    *
    * @return bool|null
    */
    public function getRollbackEnabled()
    {
        return $this->container['rollbackEnabled'];
    }

    /**
    * Sets rollbackEnabled
    *
    * @param bool|null $rollbackEnabled rollbackEnabled
    *
    * @return $this
    */
    public function setRollbackEnabled($rollbackEnabled)
    {
        $this->container['rollbackEnabled'] = $rollbackEnabled;
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

