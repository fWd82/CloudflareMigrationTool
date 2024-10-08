<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrainingJobBasicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrainingJobBasicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING：训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MAIN_FILE_UPLOAD：等待主文件上传 * JOB_SUCCESS: 完成 * WAIT_USER_CONFIRM：等待用户确认训练效果 * JOB_REJECT：驳回 * JOB_PENDING：挂起 * JOB_FINISH：结束，最终状态，不可再做改变
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者联系方式，如手机或邮箱等。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'name' => 'string',
            'state' => 'string',
            'assetId' => 'string',
            'projectId' => 'string',
            'coverDownloadUrl' => 'string',
            'lastUpdateTime' => 'string',
            'createTime' => 'string',
            'contact' => 'string',
            'batchName' => 'string',
            'tags' => 'string[]',
            'modelVersion' => 'string',
            'mattingType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING：训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MAIN_FILE_UPLOAD：等待主文件上传 * JOB_SUCCESS: 完成 * WAIT_USER_CONFIRM：等待用户确认训练效果 * JOB_REJECT：驳回 * JOB_PENDING：挂起 * JOB_FINISH：结束，最终状态，不可再做改变
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者联系方式，如手机或邮箱等。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'name' => null,
        'state' => null,
        'assetId' => null,
        'projectId' => null,
        'coverDownloadUrl' => null,
        'lastUpdateTime' => null,
        'createTime' => null,
        'contact' => null,
        'batchName' => null,
        'tags' => null,
        'modelVersion' => null,
        'mattingType' => null
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
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING：训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MAIN_FILE_UPLOAD：等待主文件上传 * JOB_SUCCESS: 完成 * WAIT_USER_CONFIRM：等待用户确认训练效果 * JOB_REJECT：驳回 * JOB_PENDING：挂起 * JOB_FINISH：结束，最终状态，不可再做改变
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者联系方式，如手机或邮箱等。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'name' => 'name',
            'state' => 'state',
            'assetId' => 'asset_id',
            'projectId' => 'project_id',
            'coverDownloadUrl' => 'cover_download_url',
            'lastUpdateTime' => 'last_update_time',
            'createTime' => 'create_time',
            'contact' => 'contact',
            'batchName' => 'batch_name',
            'tags' => 'tags',
            'modelVersion' => 'model_version',
            'mattingType' => 'matting_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING：训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MAIN_FILE_UPLOAD：等待主文件上传 * JOB_SUCCESS: 完成 * WAIT_USER_CONFIRM：等待用户确认训练效果 * JOB_REJECT：驳回 * JOB_PENDING：挂起 * JOB_FINISH：结束，最终状态，不可再做改变
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者联系方式，如手机或邮箱等。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'name' => 'setName',
            'state' => 'setState',
            'assetId' => 'setAssetId',
            'projectId' => 'setProjectId',
            'coverDownloadUrl' => 'setCoverDownloadUrl',
            'lastUpdateTime' => 'setLastUpdateTime',
            'createTime' => 'setCreateTime',
            'contact' => 'setContact',
            'batchName' => 'setBatchName',
            'tags' => 'setTags',
            'modelVersion' => 'setModelVersion',
            'mattingType' => 'setMattingType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING：训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MAIN_FILE_UPLOAD：等待主文件上传 * JOB_SUCCESS: 完成 * WAIT_USER_CONFIRM：等待用户确认训练效果 * JOB_REJECT：驳回 * JOB_PENDING：挂起 * JOB_FINISH：结束，最终状态，不可再做改变
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者联系方式，如手机或邮箱等。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'name' => 'getName',
            'state' => 'getState',
            'assetId' => 'getAssetId',
            'projectId' => 'getProjectId',
            'coverDownloadUrl' => 'getCoverDownloadUrl',
            'lastUpdateTime' => 'getLastUpdateTime',
            'createTime' => 'getCreateTime',
            'contact' => 'getContact',
            'batchName' => 'getBatchName',
            'tags' => 'getTags',
            'modelVersion' => 'getModelVersion',
            'mattingType' => 'getMattingType'
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
    const STATE_WAIT_FILE_UPLOAD = 'WAIT_FILE_UPLOAD';
    const STATE_AUTO_VERIFYING = 'AUTO_VERIFYING';
    const STATE_AUTO_VERIFY_FAILED = 'AUTO_VERIFY_FAILED';
    const STATE_MANUAL_VERIFYING = 'MANUAL_VERIFYING';
    const STATE_MANUAL_VERIFY_FAILED = 'MANUAL_VERIFY_FAILED';
    const STATE_MANUAL_VERIFY_SUCCESS = 'MANUAL_VERIFY_SUCCESS';
    const STATE_TRAINING_DATA_PREPROCESSING = 'TRAINING_DATA_PREPROCESSING';
    const STATE_TRAINING_DATA_PREPROCESS_FAILED = 'TRAINING_DATA_PREPROCESS_FAILED';
    const STATE_TRAINING_DATA_PREPROCESS_SUCCESS = 'TRAINING_DATA_PREPROCESS_SUCCESS';
    const STATE_TRAINING = 'TRAINING';
    const STATE_TRAIN_FAILED = 'TRAIN_FAILED';
    const STATE_TRAIN_SUCCESS = 'TRAIN_SUCCESS';
    const STATE_INFERENCE_DATA_PREPROCESSING = 'INFERENCE_DATA_PREPROCESSING';
    const STATE_INFERENCE_DATA_PREPROCESS_FAILED = 'INFERENCE_DATA_PREPROCESS_FAILED';
    const STATE_WAIT_MASK_UPLOAD = 'WAIT_MASK_UPLOAD';
    const STATE_WAIT_MAIN_FILE_UPLOAD = 'WAIT_MAIN_FILE_UPLOAD';
    const STATE_JOB_SUCCESS = 'JOB_SUCCESS';
    const STATE_WAIT_USER_CONFIRM = 'WAIT_USER_CONFIRM';
    const STATE_JOB_REJECT = 'JOB_REJECT';
    const STATE_JOB_PENDING = 'JOB_PENDING';
    const STATE_JOB_FINISH = 'JOB_FINISH';
    const MODEL_VERSION_V2 = 'V2';
    const MODEL_VERSION_V3 = 'V3';
    const MATTING_TYPE_AI = 'AI';
    const MATTING_TYPE_MANUAL = 'MANUAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_WAIT_FILE_UPLOAD,
            self::STATE_AUTO_VERIFYING,
            self::STATE_AUTO_VERIFY_FAILED,
            self::STATE_MANUAL_VERIFYING,
            self::STATE_MANUAL_VERIFY_FAILED,
            self::STATE_MANUAL_VERIFY_SUCCESS,
            self::STATE_TRAINING_DATA_PREPROCESSING,
            self::STATE_TRAINING_DATA_PREPROCESS_FAILED,
            self::STATE_TRAINING_DATA_PREPROCESS_SUCCESS,
            self::STATE_TRAINING,
            self::STATE_TRAIN_FAILED,
            self::STATE_TRAIN_SUCCESS,
            self::STATE_INFERENCE_DATA_PREPROCESSING,
            self::STATE_INFERENCE_DATA_PREPROCESS_FAILED,
            self::STATE_WAIT_MASK_UPLOAD,
            self::STATE_WAIT_MAIN_FILE_UPLOAD,
            self::STATE_JOB_SUCCESS,
            self::STATE_WAIT_USER_CONFIRM,
            self::STATE_JOB_REJECT,
            self::STATE_JOB_PENDING,
            self::STATE_JOB_FINISH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModelVersionAllowableValues()
    {
        return [
            self::MODEL_VERSION_V2,
            self::MODEL_VERSION_V3,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMattingTypeAllowableValues()
    {
        return [
            self::MATTING_TYPE_AI,
            self::MATTING_TYPE_MANUAL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['coverDownloadUrl'] = isset($data['coverDownloadUrl']) ? $data['coverDownloadUrl'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['batchName'] = isset($data['batchName']) ? $data['batchName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['modelVersion'] = isset($data['modelVersion']) ? $data['modelVersion'] : null;
        $this->container['mattingType'] = isset($data['mattingType']) ? $data['mattingType'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['coverDownloadUrl']) && (mb_strlen($this->container['coverDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'coverDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['coverDownloadUrl']) && (mb_strlen($this->container['coverDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'coverDownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastUpdateTime']) && (mb_strlen($this->container['lastUpdateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['lastUpdateTime']) && (mb_strlen($this->container['lastUpdateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['contact']) && (mb_strlen($this->container['contact']) > 64)) {
                $invalidProperties[] = "invalid value for 'contact', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['contact']) && (mb_strlen($this->container['contact']) < 1)) {
                $invalidProperties[] = "invalid value for 'contact', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['batchName']) && (mb_strlen($this->container['batchName']) > 256)) {
                $invalidProperties[] = "invalid value for 'batchName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['batchName']) && (mb_strlen($this->container['batchName']) < 1)) {
                $invalidProperties[] = "invalid value for 'batchName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getModelVersionAllowableValues();
                if (!is_null($this->container['modelVersion']) && !in_array($this->container['modelVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'modelVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMattingTypeAllowableValues();
                if (!is_null($this->container['mattingType']) && !in_array($this->container['mattingType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mattingType', must be one of '%s'",
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
    * Gets jobId
    *  任务ID。
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
    * @param string $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets name
    *  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets state
    *  任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING：训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MAIN_FILE_UPLOAD：等待主文件上传 * JOB_SUCCESS: 完成 * WAIT_USER_CONFIRM：等待用户确认训练效果 * JOB_REJECT：驳回 * JOB_PENDING：挂起 * JOB_FINISH：结束，最终状态，不可再做改变
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
    * @param string $state 任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING：训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MAIN_FILE_UPLOAD：等待主文件上传 * JOB_SUCCESS: 完成 * WAIT_USER_CONFIRM：等待用户确认训练效果 * JOB_REJECT：驳回 * JOB_PENDING：挂起 * JOB_FINISH：结束，最终状态，不可再做改变
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets assetId
    *  模型资产ID。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 模型资产ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets projectId
    *  模型资产所属项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 模型资产所属项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets coverDownloadUrl
    *  分身数字人模型封面下载URL。URL有效期24小时。
    *
    * @return string|null
    */
    public function getCoverDownloadUrl()
    {
        return $this->container['coverDownloadUrl'];
    }

    /**
    * Sets coverDownloadUrl
    *
    * @param string|null $coverDownloadUrl 分身数字人模型封面下载URL。URL有效期24小时。
    *
    * @return $this
    */
    public function setCoverDownloadUrl($coverDownloadUrl)
    {
        $this->container['coverDownloadUrl'] = $coverDownloadUrl;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime 用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets contact
    *  分身数字人训练任务创建者联系方式，如手机或邮箱等。
    *
    * @return string|null
    */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
    * Sets contact
    *
    * @param string|null $contact 分身数字人训练任务创建者联系方式，如手机或邮箱等。
    *
    * @return $this
    */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;
        return $this;
    }

    /**
    * Gets batchName
    *  分身数字人训练任务的批次名称。
    *
    * @return string|null
    */
    public function getBatchName()
    {
        return $this->container['batchName'];
    }

    /**
    * Sets batchName
    *
    * @param string|null $batchName 分身数字人训练任务的批次名称。
    *
    * @return $this
    */
    public function setBatchName($batchName)
    {
        $this->container['batchName'] = $batchName;
        return $this;
    }

    /**
    * Gets tags
    *  分身数字人训练任务标签。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 分身数字人训练任务标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets modelVersion
    *  分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型
    *
    * @return string|null
    */
    public function getModelVersion()
    {
        return $this->container['modelVersion'];
    }

    /**
    * Sets modelVersion
    *
    * @param string|null $modelVersion 分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型
    *
    * @return $this
    */
    public function setModelVersion($modelVersion)
    {
        $this->container['modelVersion'] = $modelVersion;
        return $this;
    }

    /**
    * Gets mattingType
    *  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    *
    * @return string|null
    */
    public function getMattingType()
    {
        return $this->container['mattingType'];
    }

    /**
    * Sets mattingType
    *
    * @param string|null $mattingType 抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    *
    * @return $this
    */
    public function setMattingType($mattingType)
    {
        $this->container['mattingType'] = $mattingType;
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

