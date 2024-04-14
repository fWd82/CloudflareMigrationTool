<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiForThrottle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiForThrottle';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authType  API的认证方式
    * groupName  API所属分组的名称
    * publishId  API的发布记录编号
    * throttleApplyId  与流控策略的绑定关系编号
    * applyTime  已绑定的流控策略的绑定时间
    * remark  API描述
    * runEnvId  发布的环境id
    * type  API类型
    * throttleName  绑定的流控策略名称
    * reqUri  API的访问地址
    * runEnvName  发布的环境名
    * groupId  API所属分组的编号
    * name  API名称
    * id  API编号
    * reqMethod  API请求方法
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authType' => 'string',
            'groupName' => 'string',
            'publishId' => 'string',
            'throttleApplyId' => 'string',
            'applyTime' => '\DateTime',
            'remark' => 'string',
            'runEnvId' => 'string',
            'type' => 'int',
            'throttleName' => 'string',
            'reqUri' => 'string',
            'runEnvName' => 'string',
            'groupId' => 'string',
            'name' => 'string',
            'id' => 'string',
            'reqMethod' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authType  API的认证方式
    * groupName  API所属分组的名称
    * publishId  API的发布记录编号
    * throttleApplyId  与流控策略的绑定关系编号
    * applyTime  已绑定的流控策略的绑定时间
    * remark  API描述
    * runEnvId  发布的环境id
    * type  API类型
    * throttleName  绑定的流控策略名称
    * reqUri  API的访问地址
    * runEnvName  发布的环境名
    * groupId  API所属分组的编号
    * name  API名称
    * id  API编号
    * reqMethod  API请求方法
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authType' => null,
        'groupName' => null,
        'publishId' => null,
        'throttleApplyId' => null,
        'applyTime' => 'date-time',
        'remark' => null,
        'runEnvId' => null,
        'type' => 'int32',
        'throttleName' => null,
        'reqUri' => null,
        'runEnvName' => null,
        'groupId' => null,
        'name' => null,
        'id' => null,
        'reqMethod' => null
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
    * authType  API的认证方式
    * groupName  API所属分组的名称
    * publishId  API的发布记录编号
    * throttleApplyId  与流控策略的绑定关系编号
    * applyTime  已绑定的流控策略的绑定时间
    * remark  API描述
    * runEnvId  发布的环境id
    * type  API类型
    * throttleName  绑定的流控策略名称
    * reqUri  API的访问地址
    * runEnvName  发布的环境名
    * groupId  API所属分组的编号
    * name  API名称
    * id  API编号
    * reqMethod  API请求方法
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authType' => 'auth_type',
            'groupName' => 'group_name',
            'publishId' => 'publish_id',
            'throttleApplyId' => 'throttle_apply_id',
            'applyTime' => 'apply_time',
            'remark' => 'remark',
            'runEnvId' => 'run_env_id',
            'type' => 'type',
            'throttleName' => 'throttle_name',
            'reqUri' => 'req_uri',
            'runEnvName' => 'run_env_name',
            'groupId' => 'group_id',
            'name' => 'name',
            'id' => 'id',
            'reqMethod' => 'req_method'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authType  API的认证方式
    * groupName  API所属分组的名称
    * publishId  API的发布记录编号
    * throttleApplyId  与流控策略的绑定关系编号
    * applyTime  已绑定的流控策略的绑定时间
    * remark  API描述
    * runEnvId  发布的环境id
    * type  API类型
    * throttleName  绑定的流控策略名称
    * reqUri  API的访问地址
    * runEnvName  发布的环境名
    * groupId  API所属分组的编号
    * name  API名称
    * id  API编号
    * reqMethod  API请求方法
    *
    * @var string[]
    */
    protected static $setters = [
            'authType' => 'setAuthType',
            'groupName' => 'setGroupName',
            'publishId' => 'setPublishId',
            'throttleApplyId' => 'setThrottleApplyId',
            'applyTime' => 'setApplyTime',
            'remark' => 'setRemark',
            'runEnvId' => 'setRunEnvId',
            'type' => 'setType',
            'throttleName' => 'setThrottleName',
            'reqUri' => 'setReqUri',
            'runEnvName' => 'setRunEnvName',
            'groupId' => 'setGroupId',
            'name' => 'setName',
            'id' => 'setId',
            'reqMethod' => 'setReqMethod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authType  API的认证方式
    * groupName  API所属分组的名称
    * publishId  API的发布记录编号
    * throttleApplyId  与流控策略的绑定关系编号
    * applyTime  已绑定的流控策略的绑定时间
    * remark  API描述
    * runEnvId  发布的环境id
    * type  API类型
    * throttleName  绑定的流控策略名称
    * reqUri  API的访问地址
    * runEnvName  发布的环境名
    * groupId  API所属分组的编号
    * name  API名称
    * id  API编号
    * reqMethod  API请求方法
    *
    * @var string[]
    */
    protected static $getters = [
            'authType' => 'getAuthType',
            'groupName' => 'getGroupName',
            'publishId' => 'getPublishId',
            'throttleApplyId' => 'getThrottleApplyId',
            'applyTime' => 'getApplyTime',
            'remark' => 'getRemark',
            'runEnvId' => 'getRunEnvId',
            'type' => 'getType',
            'throttleName' => 'getThrottleName',
            'reqUri' => 'getReqUri',
            'runEnvName' => 'getRunEnvName',
            'groupId' => 'getGroupId',
            'name' => 'getName',
            'id' => 'getId',
            'reqMethod' => 'getReqMethod'
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
    const REQ_METHOD_GET = 'GET';
    const REQ_METHOD_POST = 'POST';
    const REQ_METHOD_DELETE = 'DELETE';
    const REQ_METHOD_PUT = 'PUT';
    const REQ_METHOD_PATCH = 'PATCH';
    const REQ_METHOD_HEAD = 'HEAD';
    const REQ_METHOD_OPTIONS = 'OPTIONS';
    const REQ_METHOD_ANY = 'ANY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReqMethodAllowableValues()
    {
        return [
            self::REQ_METHOD_GET,
            self::REQ_METHOD_POST,
            self::REQ_METHOD_DELETE,
            self::REQ_METHOD_PUT,
            self::REQ_METHOD_PATCH,
            self::REQ_METHOD_HEAD,
            self::REQ_METHOD_OPTIONS,
            self::REQ_METHOD_ANY,
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
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['publishId'] = isset($data['publishId']) ? $data['publishId'] : null;
        $this->container['throttleApplyId'] = isset($data['throttleApplyId']) ? $data['throttleApplyId'] : null;
        $this->container['applyTime'] = isset($data['applyTime']) ? $data['applyTime'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['runEnvId'] = isset($data['runEnvId']) ? $data['runEnvId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['throttleName'] = isset($data['throttleName']) ? $data['throttleName'] : null;
        $this->container['reqUri'] = isset($data['reqUri']) ? $data['reqUri'] : null;
        $this->container['runEnvName'] = isset($data['runEnvName']) ? $data['runEnvName'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getReqMethodAllowableValues();
                if (!is_null($this->container['reqMethod']) && !in_array($this->container['reqMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqMethod', must be one of '%s'",
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
    * Gets authType
    *  API的认证方式
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType API的认证方式
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets groupName
    *  API所属分组的名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName API所属分组的名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets publishId
    *  API的发布记录编号
    *
    * @return string|null
    */
    public function getPublishId()
    {
        return $this->container['publishId'];
    }

    /**
    * Sets publishId
    *
    * @param string|null $publishId API的发布记录编号
    *
    * @return $this
    */
    public function setPublishId($publishId)
    {
        $this->container['publishId'] = $publishId;
        return $this;
    }

    /**
    * Gets throttleApplyId
    *  与流控策略的绑定关系编号
    *
    * @return string|null
    */
    public function getThrottleApplyId()
    {
        return $this->container['throttleApplyId'];
    }

    /**
    * Sets throttleApplyId
    *
    * @param string|null $throttleApplyId 与流控策略的绑定关系编号
    *
    * @return $this
    */
    public function setThrottleApplyId($throttleApplyId)
    {
        $this->container['throttleApplyId'] = $throttleApplyId;
        return $this;
    }

    /**
    * Gets applyTime
    *  已绑定的流控策略的绑定时间
    *
    * @return \DateTime|null
    */
    public function getApplyTime()
    {
        return $this->container['applyTime'];
    }

    /**
    * Sets applyTime
    *
    * @param \DateTime|null $applyTime 已绑定的流控策略的绑定时间
    *
    * @return $this
    */
    public function setApplyTime($applyTime)
    {
        $this->container['applyTime'] = $applyTime;
        return $this;
    }

    /**
    * Gets remark
    *  API描述
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark API描述
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets runEnvId
    *  发布的环境id
    *
    * @return string|null
    */
    public function getRunEnvId()
    {
        return $this->container['runEnvId'];
    }

    /**
    * Sets runEnvId
    *
    * @param string|null $runEnvId 发布的环境id
    *
    * @return $this
    */
    public function setRunEnvId($runEnvId)
    {
        $this->container['runEnvId'] = $runEnvId;
        return $this;
    }

    /**
    * Gets type
    *  API类型
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type API类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets throttleName
    *  绑定的流控策略名称
    *
    * @return string|null
    */
    public function getThrottleName()
    {
        return $this->container['throttleName'];
    }

    /**
    * Sets throttleName
    *
    * @param string|null $throttleName 绑定的流控策略名称
    *
    * @return $this
    */
    public function setThrottleName($throttleName)
    {
        $this->container['throttleName'] = $throttleName;
        return $this;
    }

    /**
    * Gets reqUri
    *  API的访问地址
    *
    * @return string|null
    */
    public function getReqUri()
    {
        return $this->container['reqUri'];
    }

    /**
    * Sets reqUri
    *
    * @param string|null $reqUri API的访问地址
    *
    * @return $this
    */
    public function setReqUri($reqUri)
    {
        $this->container['reqUri'] = $reqUri;
        return $this;
    }

    /**
    * Gets runEnvName
    *  发布的环境名
    *
    * @return string|null
    */
    public function getRunEnvName()
    {
        return $this->container['runEnvName'];
    }

    /**
    * Sets runEnvName
    *
    * @param string|null $runEnvName 发布的环境名
    *
    * @return $this
    */
    public function setRunEnvName($runEnvName)
    {
        $this->container['runEnvName'] = $runEnvName;
        return $this;
    }

    /**
    * Gets groupId
    *  API所属分组的编号
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId API所属分组的编号
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets name
    *  API名称
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
    * @param string|null $name API名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  API编号
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id API编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets reqMethod
    *  API请求方法
    *
    * @return string|null
    */
    public function getReqMethod()
    {
        return $this->container['reqMethod'];
    }

    /**
    * Sets reqMethod
    *
    * @param string|null $reqMethod API请求方法
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
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

