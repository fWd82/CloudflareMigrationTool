<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCompareTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCompareTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务id。
    * objectLevelCompareCreateResult  objectLevelCompareCreateResult
    * dataLevelCompareCreateResult  dataLevelCompareCreateResult
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'objectLevelCompareCreateResult' => '\HuaweiCloud\SDK\Drs\V3\Model\CreateCompareTaskResult',
            'dataLevelCompareCreateResult' => '\HuaweiCloud\SDK\Drs\V3\Model\CreateCompareTaskResult',
            'errorCode' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务id。
    * objectLevelCompareCreateResult  objectLevelCompareCreateResult
    * dataLevelCompareCreateResult  dataLevelCompareCreateResult
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'objectLevelCompareCreateResult' => null,
        'dataLevelCompareCreateResult' => null,
        'errorCode' => null,
        'errorMsg' => null
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
    * jobId  任务id。
    * objectLevelCompareCreateResult  objectLevelCompareCreateResult
    * dataLevelCompareCreateResult  dataLevelCompareCreateResult
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'objectLevelCompareCreateResult' => 'object_level_compare_create_result',
            'dataLevelCompareCreateResult' => 'data_level_compare_create_result',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务id。
    * objectLevelCompareCreateResult  objectLevelCompareCreateResult
    * dataLevelCompareCreateResult  dataLevelCompareCreateResult
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'objectLevelCompareCreateResult' => 'setObjectLevelCompareCreateResult',
            'dataLevelCompareCreateResult' => 'setDataLevelCompareCreateResult',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务id。
    * objectLevelCompareCreateResult  objectLevelCompareCreateResult
    * dataLevelCompareCreateResult  dataLevelCompareCreateResult
    * errorCode  错误码。
    * errorMsg  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'objectLevelCompareCreateResult' => 'getObjectLevelCompareCreateResult',
            'dataLevelCompareCreateResult' => 'getDataLevelCompareCreateResult',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg'
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
        $this->container['objectLevelCompareCreateResult'] = isset($data['objectLevelCompareCreateResult']) ? $data['objectLevelCompareCreateResult'] : null;
        $this->container['dataLevelCompareCreateResult'] = isset($data['dataLevelCompareCreateResult']) ? $data['dataLevelCompareCreateResult'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
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
    * Gets jobId
    *  任务id。
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
    * @param string|null $jobId 任务id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets objectLevelCompareCreateResult
    *  objectLevelCompareCreateResult
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\CreateCompareTaskResult|null
    */
    public function getObjectLevelCompareCreateResult()
    {
        return $this->container['objectLevelCompareCreateResult'];
    }

    /**
    * Sets objectLevelCompareCreateResult
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\CreateCompareTaskResult|null $objectLevelCompareCreateResult objectLevelCompareCreateResult
    *
    * @return $this
    */
    public function setObjectLevelCompareCreateResult($objectLevelCompareCreateResult)
    {
        $this->container['objectLevelCompareCreateResult'] = $objectLevelCompareCreateResult;
        return $this;
    }

    /**
    * Gets dataLevelCompareCreateResult
    *  dataLevelCompareCreateResult
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\CreateCompareTaskResult|null
    */
    public function getDataLevelCompareCreateResult()
    {
        return $this->container['dataLevelCompareCreateResult'];
    }

    /**
    * Sets dataLevelCompareCreateResult
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\CreateCompareTaskResult|null $dataLevelCompareCreateResult dataLevelCompareCreateResult
    *
    * @return $this
    */
    public function setDataLevelCompareCreateResult($dataLevelCompareCreateResult)
    {
        $this->container['dataLevelCompareCreateResult'] = $dataLevelCompareCreateResult;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息。
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 错误信息。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

