<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcMemberInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcMemberInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * host  后端服务器地址  后端实例类型为ip时必填
    * weight  权重值。  允许您对后端服务进行评级，权重值越大，转发到该云服务的请求数量越多。
    * isBackup  是否备用节点。  开启后对应后端服务为备用节点，仅当非备用节点全部故障时工作。  实例需要升级到对应版本才支持此功能，若不支持请联系技术支持。
    * memberGroupName  后端服务器组名称。为后端服务地址选择服务器组，便于统一修改对应服务器组的后端地址。
    * status  后端服务器状态   - 1：可用   - 2：不可用
    * port  后端服务器端口
    * ecsId  后端云服务器的编号。  后端实例类型为ecs时必填，支持英文，数字，“-”,“_”，1 ~ 64字符。
    * ecsName  后端云服务器的名称。  后端实例类型为ecs时必填，支持汉字，英文，数字，“-”,“_”,“.”，1 ~ 64字符。
    * id  后端实例对象的编号
    * vpcChannelId  VPC通道的编号
    * createTime  后端实例增加到VPC通道的时间
    * memberGroupId  后端服务器组编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'host' => 'string',
            'weight' => 'int',
            'isBackup' => 'bool',
            'memberGroupName' => 'string',
            'status' => 'int',
            'port' => 'int',
            'ecsId' => 'string',
            'ecsName' => 'string',
            'id' => 'string',
            'vpcChannelId' => 'string',
            'createTime' => '\DateTime',
            'memberGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * host  后端服务器地址  后端实例类型为ip时必填
    * weight  权重值。  允许您对后端服务进行评级，权重值越大，转发到该云服务的请求数量越多。
    * isBackup  是否备用节点。  开启后对应后端服务为备用节点，仅当非备用节点全部故障时工作。  实例需要升级到对应版本才支持此功能，若不支持请联系技术支持。
    * memberGroupName  后端服务器组名称。为后端服务地址选择服务器组，便于统一修改对应服务器组的后端地址。
    * status  后端服务器状态   - 1：可用   - 2：不可用
    * port  后端服务器端口
    * ecsId  后端云服务器的编号。  后端实例类型为ecs时必填，支持英文，数字，“-”,“_”，1 ~ 64字符。
    * ecsName  后端云服务器的名称。  后端实例类型为ecs时必填，支持汉字，英文，数字，“-”,“_”,“.”，1 ~ 64字符。
    * id  后端实例对象的编号
    * vpcChannelId  VPC通道的编号
    * createTime  后端实例增加到VPC通道的时间
    * memberGroupId  后端服务器组编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'host' => null,
        'weight' => 'int32',
        'isBackup' => null,
        'memberGroupName' => null,
        'status' => 'int32',
        'port' => 'int32',
        'ecsId' => null,
        'ecsName' => null,
        'id' => null,
        'vpcChannelId' => null,
        'createTime' => 'date-time',
        'memberGroupId' => null
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
    * host  后端服务器地址  后端实例类型为ip时必填
    * weight  权重值。  允许您对后端服务进行评级，权重值越大，转发到该云服务的请求数量越多。
    * isBackup  是否备用节点。  开启后对应后端服务为备用节点，仅当非备用节点全部故障时工作。  实例需要升级到对应版本才支持此功能，若不支持请联系技术支持。
    * memberGroupName  后端服务器组名称。为后端服务地址选择服务器组，便于统一修改对应服务器组的后端地址。
    * status  后端服务器状态   - 1：可用   - 2：不可用
    * port  后端服务器端口
    * ecsId  后端云服务器的编号。  后端实例类型为ecs时必填，支持英文，数字，“-”,“_”，1 ~ 64字符。
    * ecsName  后端云服务器的名称。  后端实例类型为ecs时必填，支持汉字，英文，数字，“-”,“_”,“.”，1 ~ 64字符。
    * id  后端实例对象的编号
    * vpcChannelId  VPC通道的编号
    * createTime  后端实例增加到VPC通道的时间
    * memberGroupId  后端服务器组编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'host' => 'host',
            'weight' => 'weight',
            'isBackup' => 'is_backup',
            'memberGroupName' => 'member_group_name',
            'status' => 'status',
            'port' => 'port',
            'ecsId' => 'ecs_id',
            'ecsName' => 'ecs_name',
            'id' => 'id',
            'vpcChannelId' => 'vpc_channel_id',
            'createTime' => 'create_time',
            'memberGroupId' => 'member_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * host  后端服务器地址  后端实例类型为ip时必填
    * weight  权重值。  允许您对后端服务进行评级，权重值越大，转发到该云服务的请求数量越多。
    * isBackup  是否备用节点。  开启后对应后端服务为备用节点，仅当非备用节点全部故障时工作。  实例需要升级到对应版本才支持此功能，若不支持请联系技术支持。
    * memberGroupName  后端服务器组名称。为后端服务地址选择服务器组，便于统一修改对应服务器组的后端地址。
    * status  后端服务器状态   - 1：可用   - 2：不可用
    * port  后端服务器端口
    * ecsId  后端云服务器的编号。  后端实例类型为ecs时必填，支持英文，数字，“-”,“_”，1 ~ 64字符。
    * ecsName  后端云服务器的名称。  后端实例类型为ecs时必填，支持汉字，英文，数字，“-”,“_”,“.”，1 ~ 64字符。
    * id  后端实例对象的编号
    * vpcChannelId  VPC通道的编号
    * createTime  后端实例增加到VPC通道的时间
    * memberGroupId  后端服务器组编号
    *
    * @var string[]
    */
    protected static $setters = [
            'host' => 'setHost',
            'weight' => 'setWeight',
            'isBackup' => 'setIsBackup',
            'memberGroupName' => 'setMemberGroupName',
            'status' => 'setStatus',
            'port' => 'setPort',
            'ecsId' => 'setEcsId',
            'ecsName' => 'setEcsName',
            'id' => 'setId',
            'vpcChannelId' => 'setVpcChannelId',
            'createTime' => 'setCreateTime',
            'memberGroupId' => 'setMemberGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * host  后端服务器地址  后端实例类型为ip时必填
    * weight  权重值。  允许您对后端服务进行评级，权重值越大，转发到该云服务的请求数量越多。
    * isBackup  是否备用节点。  开启后对应后端服务为备用节点，仅当非备用节点全部故障时工作。  实例需要升级到对应版本才支持此功能，若不支持请联系技术支持。
    * memberGroupName  后端服务器组名称。为后端服务地址选择服务器组，便于统一修改对应服务器组的后端地址。
    * status  后端服务器状态   - 1：可用   - 2：不可用
    * port  后端服务器端口
    * ecsId  后端云服务器的编号。  后端实例类型为ecs时必填，支持英文，数字，“-”,“_”，1 ~ 64字符。
    * ecsName  后端云服务器的名称。  后端实例类型为ecs时必填，支持汉字，英文，数字，“-”,“_”,“.”，1 ~ 64字符。
    * id  后端实例对象的编号
    * vpcChannelId  VPC通道的编号
    * createTime  后端实例增加到VPC通道的时间
    * memberGroupId  后端服务器组编号
    *
    * @var string[]
    */
    protected static $getters = [
            'host' => 'getHost',
            'weight' => 'getWeight',
            'isBackup' => 'getIsBackup',
            'memberGroupName' => 'getMemberGroupName',
            'status' => 'getStatus',
            'port' => 'getPort',
            'ecsId' => 'getEcsId',
            'ecsName' => 'getEcsName',
            'id' => 'getId',
            'vpcChannelId' => 'getVpcChannelId',
            'createTime' => 'getCreateTime',
            'memberGroupId' => 'getMemberGroupId'
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
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_1,
            self::STATUS_2,
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
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['isBackup'] = isset($data['isBackup']) ? $data['isBackup'] : null;
        $this->container['memberGroupName'] = isset($data['memberGroupName']) ? $data['memberGroupName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['ecsId'] = isset($data['ecsId']) ? $data['ecsId'] : null;
        $this->container['ecsName'] = isset($data['ecsName']) ? $data['ecsName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['vpcChannelId'] = isset($data['vpcChannelId']) ? $data['vpcChannelId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['memberGroupId'] = isset($data['memberGroupId']) ? $data['memberGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['host']) && (mb_strlen($this->container['host']) > 64)) {
                $invalidProperties[] = "invalid value for 'host', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] > 10000)) {
                $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] < 0)) {
                $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ecsId']) && (mb_strlen($this->container['ecsId']) > 255)) {
                $invalidProperties[] = "invalid value for 'ecsId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ecsName']) && (mb_strlen($this->container['ecsName']) > 64)) {
                $invalidProperties[] = "invalid value for 'ecsName', the character length must be smaller than or equal to 64.";
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
    * Gets host
    *  后端服务器地址  后端实例类型为ip时必填
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host 后端服务器地址  后端实例类型为ip时必填
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets weight
    *  权重值。  允许您对后端服务进行评级，权重值越大，转发到该云服务的请求数量越多。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight 权重值。  允许您对后端服务进行评级，权重值越大，转发到该云服务的请求数量越多。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets isBackup
    *  是否备用节点。  开启后对应后端服务为备用节点，仅当非备用节点全部故障时工作。  实例需要升级到对应版本才支持此功能，若不支持请联系技术支持。
    *
    * @return bool|null
    */
    public function getIsBackup()
    {
        return $this->container['isBackup'];
    }

    /**
    * Sets isBackup
    *
    * @param bool|null $isBackup 是否备用节点。  开启后对应后端服务为备用节点，仅当非备用节点全部故障时工作。  实例需要升级到对应版本才支持此功能，若不支持请联系技术支持。
    *
    * @return $this
    */
    public function setIsBackup($isBackup)
    {
        $this->container['isBackup'] = $isBackup;
        return $this;
    }

    /**
    * Gets memberGroupName
    *  后端服务器组名称。为后端服务地址选择服务器组，便于统一修改对应服务器组的后端地址。
    *
    * @return string|null
    */
    public function getMemberGroupName()
    {
        return $this->container['memberGroupName'];
    }

    /**
    * Sets memberGroupName
    *
    * @param string|null $memberGroupName 后端服务器组名称。为后端服务地址选择服务器组，便于统一修改对应服务器组的后端地址。
    *
    * @return $this
    */
    public function setMemberGroupName($memberGroupName)
    {
        $this->container['memberGroupName'] = $memberGroupName;
        return $this;
    }

    /**
    * Gets status
    *  后端服务器状态   - 1：可用   - 2：不可用
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 后端服务器状态   - 1：可用   - 2：不可用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets port
    *  后端服务器端口
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 后端服务器端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets ecsId
    *  后端云服务器的编号。  后端实例类型为ecs时必填，支持英文，数字，“-”,“_”，1 ~ 64字符。
    *
    * @return string|null
    */
    public function getEcsId()
    {
        return $this->container['ecsId'];
    }

    /**
    * Sets ecsId
    *
    * @param string|null $ecsId 后端云服务器的编号。  后端实例类型为ecs时必填，支持英文，数字，“-”,“_”，1 ~ 64字符。
    *
    * @return $this
    */
    public function setEcsId($ecsId)
    {
        $this->container['ecsId'] = $ecsId;
        return $this;
    }

    /**
    * Gets ecsName
    *  后端云服务器的名称。  后端实例类型为ecs时必填，支持汉字，英文，数字，“-”,“_”,“.”，1 ~ 64字符。
    *
    * @return string|null
    */
    public function getEcsName()
    {
        return $this->container['ecsName'];
    }

    /**
    * Sets ecsName
    *
    * @param string|null $ecsName 后端云服务器的名称。  后端实例类型为ecs时必填，支持汉字，英文，数字，“-”,“_”,“.”，1 ~ 64字符。
    *
    * @return $this
    */
    public function setEcsName($ecsName)
    {
        $this->container['ecsName'] = $ecsName;
        return $this;
    }

    /**
    * Gets id
    *  后端实例对象的编号
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
    * @param string|null $id 后端实例对象的编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets vpcChannelId
    *  VPC通道的编号
    *
    * @return string|null
    */
    public function getVpcChannelId()
    {
        return $this->container['vpcChannelId'];
    }

    /**
    * Sets vpcChannelId
    *
    * @param string|null $vpcChannelId VPC通道的编号
    *
    * @return $this
    */
    public function setVpcChannelId($vpcChannelId)
    {
        $this->container['vpcChannelId'] = $vpcChannelId;
        return $this;
    }

    /**
    * Gets createTime
    *  后端实例增加到VPC通道的时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 后端实例增加到VPC通道的时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets memberGroupId
    *  后端服务器组编号
    *
    * @return string|null
    */
    public function getMemberGroupId()
    {
        return $this->container['memberGroupId'];
    }

    /**
    * Sets memberGroupId
    *
    * @param string|null $memberGroupId 后端服务器组编号
    *
    * @return $this
    */
    public function setMemberGroupId($memberGroupId)
    {
        $this->container['memberGroupId'] = $memberGroupId;
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

