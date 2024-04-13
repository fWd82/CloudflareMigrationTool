<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endpoints  测试连接数据库信息。
    * precheckMode  预检查模式。
    * skipPrecheckInfo  skipPrecheckInfo
    * pauseMode  任务暂停模式。
    * startTime  任务定时启动时间。
    * compareTaskParam  compareTaskParam
    * isSyncReEdit  再编辑任务启动时取值true。
    * forceDelete  强制结束时取值为true。
    * publicIpConfig  publicIpConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endpoints' => '\HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]',
            'precheckMode' => 'string',
            'skipPrecheckInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\SkipPreCheckInfo',
            'pauseMode' => 'string',
            'startTime' => 'string',
            'compareTaskParam' => '\HuaweiCloud\SDK\Drs\V5\Model\CompareTaskParams',
            'isSyncReEdit' => 'bool',
            'forceDelete' => 'bool',
            'publicIpConfig' => '\HuaweiCloud\SDK\Drs\V5\Model\PublicIpConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endpoints  测试连接数据库信息。
    * precheckMode  预检查模式。
    * skipPrecheckInfo  skipPrecheckInfo
    * pauseMode  任务暂停模式。
    * startTime  任务定时启动时间。
    * compareTaskParam  compareTaskParam
    * isSyncReEdit  再编辑任务启动时取值true。
    * forceDelete  强制结束时取值为true。
    * publicIpConfig  publicIpConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endpoints' => null,
        'precheckMode' => null,
        'skipPrecheckInfo' => null,
        'pauseMode' => null,
        'startTime' => null,
        'compareTaskParam' => null,
        'isSyncReEdit' => null,
        'forceDelete' => null,
        'publicIpConfig' => null
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
    * endpoints  测试连接数据库信息。
    * precheckMode  预检查模式。
    * skipPrecheckInfo  skipPrecheckInfo
    * pauseMode  任务暂停模式。
    * startTime  任务定时启动时间。
    * compareTaskParam  compareTaskParam
    * isSyncReEdit  再编辑任务启动时取值true。
    * forceDelete  强制结束时取值为true。
    * publicIpConfig  publicIpConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endpoints' => 'endpoints',
            'precheckMode' => 'precheck_mode',
            'skipPrecheckInfo' => 'skip_precheck_info',
            'pauseMode' => 'pause_mode',
            'startTime' => 'start_time',
            'compareTaskParam' => 'compare_task_param',
            'isSyncReEdit' => 'is_sync_re_edit',
            'forceDelete' => 'force_delete',
            'publicIpConfig' => 'public_ip_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endpoints  测试连接数据库信息。
    * precheckMode  预检查模式。
    * skipPrecheckInfo  skipPrecheckInfo
    * pauseMode  任务暂停模式。
    * startTime  任务定时启动时间。
    * compareTaskParam  compareTaskParam
    * isSyncReEdit  再编辑任务启动时取值true。
    * forceDelete  强制结束时取值为true。
    * publicIpConfig  publicIpConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'endpoints' => 'setEndpoints',
            'precheckMode' => 'setPrecheckMode',
            'skipPrecheckInfo' => 'setSkipPrecheckInfo',
            'pauseMode' => 'setPauseMode',
            'startTime' => 'setStartTime',
            'compareTaskParam' => 'setCompareTaskParam',
            'isSyncReEdit' => 'setIsSyncReEdit',
            'forceDelete' => 'setForceDelete',
            'publicIpConfig' => 'setPublicIpConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endpoints  测试连接数据库信息。
    * precheckMode  预检查模式。
    * skipPrecheckInfo  skipPrecheckInfo
    * pauseMode  任务暂停模式。
    * startTime  任务定时启动时间。
    * compareTaskParam  compareTaskParam
    * isSyncReEdit  再编辑任务启动时取值true。
    * forceDelete  强制结束时取值为true。
    * publicIpConfig  publicIpConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'endpoints' => 'getEndpoints',
            'precheckMode' => 'getPrecheckMode',
            'skipPrecheckInfo' => 'getSkipPrecheckInfo',
            'pauseMode' => 'getPauseMode',
            'startTime' => 'getStartTime',
            'compareTaskParam' => 'getCompareTaskParam',
            'isSyncReEdit' => 'getIsSyncReEdit',
            'forceDelete' => 'getForceDelete',
            'publicIpConfig' => 'getPublicIpConfig'
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
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['precheckMode'] = isset($data['precheckMode']) ? $data['precheckMode'] : null;
        $this->container['skipPrecheckInfo'] = isset($data['skipPrecheckInfo']) ? $data['skipPrecheckInfo'] : null;
        $this->container['pauseMode'] = isset($data['pauseMode']) ? $data['pauseMode'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['compareTaskParam'] = isset($data['compareTaskParam']) ? $data['compareTaskParam'] : null;
        $this->container['isSyncReEdit'] = isset($data['isSyncReEdit']) ? $data['isSyncReEdit'] : null;
        $this->container['forceDelete'] = isset($data['forceDelete']) ? $data['forceDelete'] : null;
        $this->container['publicIpConfig'] = isset($data['publicIpConfig']) ? $data['publicIpConfig'] : null;
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
    * Gets endpoints
    *  测试连接数据库信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]|null
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]|null $endpoints 测试连接数据库信息。
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets precheckMode
    *  预检查模式。
    *
    * @return string|null
    */
    public function getPrecheckMode()
    {
        return $this->container['precheckMode'];
    }

    /**
    * Sets precheckMode
    *
    * @param string|null $precheckMode 预检查模式。
    *
    * @return $this
    */
    public function setPrecheckMode($precheckMode)
    {
        $this->container['precheckMode'] = $precheckMode;
        return $this;
    }

    /**
    * Gets skipPrecheckInfo
    *  skipPrecheckInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\SkipPreCheckInfo|null
    */
    public function getSkipPrecheckInfo()
    {
        return $this->container['skipPrecheckInfo'];
    }

    /**
    * Sets skipPrecheckInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\SkipPreCheckInfo|null $skipPrecheckInfo skipPrecheckInfo
    *
    * @return $this
    */
    public function setSkipPrecheckInfo($skipPrecheckInfo)
    {
        $this->container['skipPrecheckInfo'] = $skipPrecheckInfo;
        return $this;
    }

    /**
    * Gets pauseMode
    *  任务暂停模式。
    *
    * @return string|null
    */
    public function getPauseMode()
    {
        return $this->container['pauseMode'];
    }

    /**
    * Sets pauseMode
    *
    * @param string|null $pauseMode 任务暂停模式。
    *
    * @return $this
    */
    public function setPauseMode($pauseMode)
    {
        $this->container['pauseMode'] = $pauseMode;
        return $this;
    }

    /**
    * Gets startTime
    *  任务定时启动时间。
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
    * @param string|null $startTime 任务定时启动时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets compareTaskParam
    *  compareTaskParam
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\CompareTaskParams|null
    */
    public function getCompareTaskParam()
    {
        return $this->container['compareTaskParam'];
    }

    /**
    * Sets compareTaskParam
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\CompareTaskParams|null $compareTaskParam compareTaskParam
    *
    * @return $this
    */
    public function setCompareTaskParam($compareTaskParam)
    {
        $this->container['compareTaskParam'] = $compareTaskParam;
        return $this;
    }

    /**
    * Gets isSyncReEdit
    *  再编辑任务启动时取值true。
    *
    * @return bool|null
    */
    public function getIsSyncReEdit()
    {
        return $this->container['isSyncReEdit'];
    }

    /**
    * Sets isSyncReEdit
    *
    * @param bool|null $isSyncReEdit 再编辑任务启动时取值true。
    *
    * @return $this
    */
    public function setIsSyncReEdit($isSyncReEdit)
    {
        $this->container['isSyncReEdit'] = $isSyncReEdit;
        return $this;
    }

    /**
    * Gets forceDelete
    *  强制结束时取值为true。
    *
    * @return bool|null
    */
    public function getForceDelete()
    {
        return $this->container['forceDelete'];
    }

    /**
    * Sets forceDelete
    *
    * @param bool|null $forceDelete 强制结束时取值为true。
    *
    * @return $this
    */
    public function setForceDelete($forceDelete)
    {
        $this->container['forceDelete'] = $forceDelete;
        return $this;
    }

    /**
    * Gets publicIpConfig
    *  publicIpConfig
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\PublicIpConfig|null
    */
    public function getPublicIpConfig()
    {
        return $this->container['publicIpConfig'];
    }

    /**
    * Sets publicIpConfig
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\PublicIpConfig|null $publicIpConfig publicIpConfig
    *
    * @return $this
    */
    public function setPublicIpConfig($publicIpConfig)
    {
        $this->container['publicIpConfig'] = $publicIpConfig;
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

