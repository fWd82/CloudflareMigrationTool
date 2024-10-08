<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPictureModelingJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPictureModelingJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  照片建模任务ID。
    * state  任务的状态。 * WAITING：等待任务调度 * PROCESSING：正在处理 * PARTIAL_SUCCEED：部分成功（模型生成，截图失败） * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * errorInfo  errorInfo
    * modelAssetId  模型资产ID。
    * name  数字人模型名称。
    * styleId  风格ID。
    * modelCoverUrl  模型封面URL。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'state' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse',
            'modelAssetId' => 'string',
            'name' => 'string',
            'styleId' => 'string',
            'modelCoverUrl' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  照片建模任务ID。
    * state  任务的状态。 * WAITING：等待任务调度 * PROCESSING：正在处理 * PARTIAL_SUCCEED：部分成功（模型生成，截图失败） * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * errorInfo  errorInfo
    * modelAssetId  模型资产ID。
    * name  数字人模型名称。
    * styleId  风格ID。
    * modelCoverUrl  模型封面URL。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'state' => null,
        'startTime' => null,
        'endTime' => null,
        'errorInfo' => null,
        'modelAssetId' => null,
        'name' => null,
        'styleId' => null,
        'modelCoverUrl' => null,
        'xRequestId' => null
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
    * jobId  照片建模任务ID。
    * state  任务的状态。 * WAITING：等待任务调度 * PROCESSING：正在处理 * PARTIAL_SUCCEED：部分成功（模型生成，截图失败） * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * errorInfo  errorInfo
    * modelAssetId  模型资产ID。
    * name  数字人模型名称。
    * styleId  风格ID。
    * modelCoverUrl  模型封面URL。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'state' => 'state',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'errorInfo' => 'error_info',
            'modelAssetId' => 'model_asset_id',
            'name' => 'name',
            'styleId' => 'style_id',
            'modelCoverUrl' => 'model_cover_url',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  照片建模任务ID。
    * state  任务的状态。 * WAITING：等待任务调度 * PROCESSING：正在处理 * PARTIAL_SUCCEED：部分成功（模型生成，截图失败） * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * errorInfo  errorInfo
    * modelAssetId  模型资产ID。
    * name  数字人模型名称。
    * styleId  风格ID。
    * modelCoverUrl  模型封面URL。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'state' => 'setState',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'errorInfo' => 'setErrorInfo',
            'modelAssetId' => 'setModelAssetId',
            'name' => 'setName',
            'styleId' => 'setStyleId',
            'modelCoverUrl' => 'setModelCoverUrl',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  照片建模任务ID。
    * state  任务的状态。 * WAITING：等待任务调度 * PROCESSING：正在处理 * PARTIAL_SUCCEED：部分成功（模型生成，截图失败） * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    * startTime  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * endTime  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * errorInfo  errorInfo
    * modelAssetId  模型资产ID。
    * name  数字人模型名称。
    * styleId  风格ID。
    * modelCoverUrl  模型封面URL。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'state' => 'getState',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'errorInfo' => 'getErrorInfo',
            'modelAssetId' => 'getModelAssetId',
            'name' => 'getName',
            'styleId' => 'getStyleId',
            'modelCoverUrl' => 'getModelCoverUrl',
            'xRequestId' => 'getXRequestId'
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
    const STATE_WAITING = 'WAITING';
    const STATE_PROCESSING = 'PROCESSING';
    const STATE_PARTIAL_SUCCEED = 'PARTIAL_SUCCEED';
    const STATE_SUCCEED = 'SUCCEED';
    const STATE_FAILED = 'FAILED';
    const STATE_CANCELED = 'CANCELED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_WAITING,
            self::STATE_PROCESSING,
            self::STATE_PARTIAL_SUCCEED,
            self::STATE_SUCCEED,
            self::STATE_FAILED,
            self::STATE_CANCELED,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['modelAssetId'] = isset($data['modelAssetId']) ? $data['modelAssetId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['styleId'] = isset($data['styleId']) ? $data['styleId'] : null;
        $this->container['modelCoverUrl'] = isset($data['modelCoverUrl']) ? $data['modelCoverUrl'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
            if ((mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['styleId']) && (mb_strlen($this->container['styleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['styleId']) && (mb_strlen($this->container['styleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['modelCoverUrl']) && (mb_strlen($this->container['modelCoverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'modelCoverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['modelCoverUrl']) && (mb_strlen($this->container['modelCoverUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'modelCoverUrl', the character length must be bigger than or equal to 1.";
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
    *  照片建模任务ID。
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
    * @param string $jobId 照片建模任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets state
    *  任务的状态。 * WAITING：等待任务调度 * PROCESSING：正在处理 * PARTIAL_SUCCEED：部分成功（模型生成，截图失败） * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 任务的状态。 * WAITING：等待任务调度 * PROCESSING：正在处理 * PARTIAL_SUCCEED：部分成功（模型生成，截图失败） * SUCCEED：成功 * FAILED：失败 * CANCELED：取消
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 任务开始时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
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
    *  任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 任务结束时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
        return $this;
    }

    /**
    * Gets modelAssetId
    *  模型资产ID。
    *
    * @return string|null
    */
    public function getModelAssetId()
    {
        return $this->container['modelAssetId'];
    }

    /**
    * Sets modelAssetId
    *
    * @param string|null $modelAssetId 模型资产ID。
    *
    * @return $this
    */
    public function setModelAssetId($modelAssetId)
    {
        $this->container['modelAssetId'] = $modelAssetId;
        return $this;
    }

    /**
    * Gets name
    *  数字人模型名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 数字人模型名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets styleId
    *  风格ID。
    *
    * @return string|null
    */
    public function getStyleId()
    {
        return $this->container['styleId'];
    }

    /**
    * Sets styleId
    *
    * @param string|null $styleId 风格ID。
    *
    * @return $this
    */
    public function setStyleId($styleId)
    {
        $this->container['styleId'] = $styleId;
        return $this;
    }

    /**
    * Gets modelCoverUrl
    *  模型封面URL。
    *
    * @return string|null
    */
    public function getModelCoverUrl()
    {
        return $this->container['modelCoverUrl'];
    }

    /**
    * Sets modelCoverUrl
    *
    * @param string|null $modelCoverUrl 模型封面URL。
    *
    * @return $this
    */
    public function setModelCoverUrl($modelCoverUrl)
    {
        $this->container['modelCoverUrl'] = $modelCoverUrl;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

