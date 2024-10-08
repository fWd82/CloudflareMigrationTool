<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLeagueResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLeagueResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bcsChannelName  BCS通道名称
    * bcsIp  BCS浏览器ip
    * bcsOrgName  BCS组织名称
    * blockChainId  BCS服务实例ID
    * blockChainName  BCS服务实例名称
    * createDate  创建日期
    * createTime  创建时间
    * creatorId  创建人id
    * creatorName  创建人名称
    * description  描述信息
    * dpEnabled  是否开启差分隐私
    * expireTime  过期时间
    * id  联盟id
    * isAccessControl  是否开启访问控制
    * isNeedApproval  是否开启审批
    * leagueStatus  联盟状态,CREATING.创建中,CREATE_FAILED.创建失败,NORMAL.正常,UPDATING.升级中,UPDATE_FAILED.升级失败,ROLLING.回滚中,ROLL_FAILED.回滚失败,DELETING.删除中,DELETE_FAILED.删除失败,DELETED.已删除
    * name  联盟名称
    * partners  联盟成员数
    * privacyProtectionType  隐私保护级别,STANDARD.标准,HIGH.高
    * resourceSpecCode  资源规格
    * type  参与类型,OWNER.所有者,PARTNER.参与者
    * version  联盟版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bcsChannelName' => 'string',
            'bcsIp' => 'string',
            'bcsOrgName' => 'string',
            'blockChainId' => 'string',
            'blockChainName' => 'string',
            'createDate' => '\DateTime',
            'createTime' => 'int',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'description' => 'string',
            'dpEnabled' => 'bool',
            'expireTime' => 'int',
            'id' => 'string',
            'isAccessControl' => 'bool',
            'isNeedApproval' => 'bool',
            'leagueStatus' => 'string',
            'name' => 'string',
            'partners' => 'int',
            'privacyProtectionType' => 'string',
            'resourceSpecCode' => 'string',
            'type' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bcsChannelName  BCS通道名称
    * bcsIp  BCS浏览器ip
    * bcsOrgName  BCS组织名称
    * blockChainId  BCS服务实例ID
    * blockChainName  BCS服务实例名称
    * createDate  创建日期
    * createTime  创建时间
    * creatorId  创建人id
    * creatorName  创建人名称
    * description  描述信息
    * dpEnabled  是否开启差分隐私
    * expireTime  过期时间
    * id  联盟id
    * isAccessControl  是否开启访问控制
    * isNeedApproval  是否开启审批
    * leagueStatus  联盟状态,CREATING.创建中,CREATE_FAILED.创建失败,NORMAL.正常,UPDATING.升级中,UPDATE_FAILED.升级失败,ROLLING.回滚中,ROLL_FAILED.回滚失败,DELETING.删除中,DELETE_FAILED.删除失败,DELETED.已删除
    * name  联盟名称
    * partners  联盟成员数
    * privacyProtectionType  隐私保护级别,STANDARD.标准,HIGH.高
    * resourceSpecCode  资源规格
    * type  参与类型,OWNER.所有者,PARTNER.参与者
    * version  联盟版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bcsChannelName' => null,
        'bcsIp' => null,
        'bcsOrgName' => null,
        'blockChainId' => null,
        'blockChainName' => null,
        'createDate' => 'date-time',
        'createTime' => 'int64',
        'creatorId' => null,
        'creatorName' => null,
        'description' => null,
        'dpEnabled' => null,
        'expireTime' => 'int64',
        'id' => null,
        'isAccessControl' => null,
        'isNeedApproval' => null,
        'leagueStatus' => null,
        'name' => null,
        'partners' => 'int64',
        'privacyProtectionType' => null,
        'resourceSpecCode' => null,
        'type' => null,
        'version' => null
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
    * bcsChannelName  BCS通道名称
    * bcsIp  BCS浏览器ip
    * bcsOrgName  BCS组织名称
    * blockChainId  BCS服务实例ID
    * blockChainName  BCS服务实例名称
    * createDate  创建日期
    * createTime  创建时间
    * creatorId  创建人id
    * creatorName  创建人名称
    * description  描述信息
    * dpEnabled  是否开启差分隐私
    * expireTime  过期时间
    * id  联盟id
    * isAccessControl  是否开启访问控制
    * isNeedApproval  是否开启审批
    * leagueStatus  联盟状态,CREATING.创建中,CREATE_FAILED.创建失败,NORMAL.正常,UPDATING.升级中,UPDATE_FAILED.升级失败,ROLLING.回滚中,ROLL_FAILED.回滚失败,DELETING.删除中,DELETE_FAILED.删除失败,DELETED.已删除
    * name  联盟名称
    * partners  联盟成员数
    * privacyProtectionType  隐私保护级别,STANDARD.标准,HIGH.高
    * resourceSpecCode  资源规格
    * type  参与类型,OWNER.所有者,PARTNER.参与者
    * version  联盟版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bcsChannelName' => 'bcs_channel_name',
            'bcsIp' => 'bcs_ip',
            'bcsOrgName' => 'bcs_org_name',
            'blockChainId' => 'block_chain_id',
            'blockChainName' => 'block_chain_name',
            'createDate' => 'create_date',
            'createTime' => 'create_time',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'description' => 'description',
            'dpEnabled' => 'dp_enabled',
            'expireTime' => 'expire_time',
            'id' => 'id',
            'isAccessControl' => 'is_access_control',
            'isNeedApproval' => 'is_need_approval',
            'leagueStatus' => 'league_status',
            'name' => 'name',
            'partners' => 'partners',
            'privacyProtectionType' => 'privacy_protection_type',
            'resourceSpecCode' => 'resource_spec_code',
            'type' => 'type',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bcsChannelName  BCS通道名称
    * bcsIp  BCS浏览器ip
    * bcsOrgName  BCS组织名称
    * blockChainId  BCS服务实例ID
    * blockChainName  BCS服务实例名称
    * createDate  创建日期
    * createTime  创建时间
    * creatorId  创建人id
    * creatorName  创建人名称
    * description  描述信息
    * dpEnabled  是否开启差分隐私
    * expireTime  过期时间
    * id  联盟id
    * isAccessControl  是否开启访问控制
    * isNeedApproval  是否开启审批
    * leagueStatus  联盟状态,CREATING.创建中,CREATE_FAILED.创建失败,NORMAL.正常,UPDATING.升级中,UPDATE_FAILED.升级失败,ROLLING.回滚中,ROLL_FAILED.回滚失败,DELETING.删除中,DELETE_FAILED.删除失败,DELETED.已删除
    * name  联盟名称
    * partners  联盟成员数
    * privacyProtectionType  隐私保护级别,STANDARD.标准,HIGH.高
    * resourceSpecCode  资源规格
    * type  参与类型,OWNER.所有者,PARTNER.参与者
    * version  联盟版本
    *
    * @var string[]
    */
    protected static $setters = [
            'bcsChannelName' => 'setBcsChannelName',
            'bcsIp' => 'setBcsIp',
            'bcsOrgName' => 'setBcsOrgName',
            'blockChainId' => 'setBlockChainId',
            'blockChainName' => 'setBlockChainName',
            'createDate' => 'setCreateDate',
            'createTime' => 'setCreateTime',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'description' => 'setDescription',
            'dpEnabled' => 'setDpEnabled',
            'expireTime' => 'setExpireTime',
            'id' => 'setId',
            'isAccessControl' => 'setIsAccessControl',
            'isNeedApproval' => 'setIsNeedApproval',
            'leagueStatus' => 'setLeagueStatus',
            'name' => 'setName',
            'partners' => 'setPartners',
            'privacyProtectionType' => 'setPrivacyProtectionType',
            'resourceSpecCode' => 'setResourceSpecCode',
            'type' => 'setType',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bcsChannelName  BCS通道名称
    * bcsIp  BCS浏览器ip
    * bcsOrgName  BCS组织名称
    * blockChainId  BCS服务实例ID
    * blockChainName  BCS服务实例名称
    * createDate  创建日期
    * createTime  创建时间
    * creatorId  创建人id
    * creatorName  创建人名称
    * description  描述信息
    * dpEnabled  是否开启差分隐私
    * expireTime  过期时间
    * id  联盟id
    * isAccessControl  是否开启访问控制
    * isNeedApproval  是否开启审批
    * leagueStatus  联盟状态,CREATING.创建中,CREATE_FAILED.创建失败,NORMAL.正常,UPDATING.升级中,UPDATE_FAILED.升级失败,ROLLING.回滚中,ROLL_FAILED.回滚失败,DELETING.删除中,DELETE_FAILED.删除失败,DELETED.已删除
    * name  联盟名称
    * partners  联盟成员数
    * privacyProtectionType  隐私保护级别,STANDARD.标准,HIGH.高
    * resourceSpecCode  资源规格
    * type  参与类型,OWNER.所有者,PARTNER.参与者
    * version  联盟版本
    *
    * @var string[]
    */
    protected static $getters = [
            'bcsChannelName' => 'getBcsChannelName',
            'bcsIp' => 'getBcsIp',
            'bcsOrgName' => 'getBcsOrgName',
            'blockChainId' => 'getBlockChainId',
            'blockChainName' => 'getBlockChainName',
            'createDate' => 'getCreateDate',
            'createTime' => 'getCreateTime',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'description' => 'getDescription',
            'dpEnabled' => 'getDpEnabled',
            'expireTime' => 'getExpireTime',
            'id' => 'getId',
            'isAccessControl' => 'getIsAccessControl',
            'isNeedApproval' => 'getIsNeedApproval',
            'leagueStatus' => 'getLeagueStatus',
            'name' => 'getName',
            'partners' => 'getPartners',
            'privacyProtectionType' => 'getPrivacyProtectionType',
            'resourceSpecCode' => 'getResourceSpecCode',
            'type' => 'getType',
            'version' => 'getVersion'
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
    const LEAGUE_STATUS_CREATE_FAILED = 'CREATE_FAILED';
    const LEAGUE_STATUS_CREATING = 'CREATING';
    const LEAGUE_STATUS_DELETED = 'DELETED';
    const LEAGUE_STATUS_DELETE_FAILED = 'DELETE_FAILED';
    const LEAGUE_STATUS_DELETING = 'DELETING';
    const LEAGUE_STATUS_NORMAL = 'NORMAL';
    const LEAGUE_STATUS_ROLLING = 'ROLLING';
    const LEAGUE_STATUS_ROLL_FAILED = 'ROLL_FAILED';
    const LEAGUE_STATUS_UPDATE_FAILED = 'UPDATE_FAILED';
    const LEAGUE_STATUS_UPDATING = 'UPDATING';
    const PRIVACY_PROTECTION_TYPE_HIGH = 'HIGH';
    const PRIVACY_PROTECTION_TYPE_STANDARD = 'STANDARD';
    const TYPE_OWNER = 'OWNER';
    const TYPE_PARTNER = 'PARTNER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLeagueStatusAllowableValues()
    {
        return [
            self::LEAGUE_STATUS_CREATE_FAILED,
            self::LEAGUE_STATUS_CREATING,
            self::LEAGUE_STATUS_DELETED,
            self::LEAGUE_STATUS_DELETE_FAILED,
            self::LEAGUE_STATUS_DELETING,
            self::LEAGUE_STATUS_NORMAL,
            self::LEAGUE_STATUS_ROLLING,
            self::LEAGUE_STATUS_ROLL_FAILED,
            self::LEAGUE_STATUS_UPDATE_FAILED,
            self::LEAGUE_STATUS_UPDATING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPrivacyProtectionTypeAllowableValues()
    {
        return [
            self::PRIVACY_PROTECTION_TYPE_HIGH,
            self::PRIVACY_PROTECTION_TYPE_STANDARD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_OWNER,
            self::TYPE_PARTNER,
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
        $this->container['bcsChannelName'] = isset($data['bcsChannelName']) ? $data['bcsChannelName'] : null;
        $this->container['bcsIp'] = isset($data['bcsIp']) ? $data['bcsIp'] : null;
        $this->container['bcsOrgName'] = isset($data['bcsOrgName']) ? $data['bcsOrgName'] : null;
        $this->container['blockChainId'] = isset($data['blockChainId']) ? $data['blockChainId'] : null;
        $this->container['blockChainName'] = isset($data['blockChainName']) ? $data['blockChainName'] : null;
        $this->container['createDate'] = isset($data['createDate']) ? $data['createDate'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dpEnabled'] = isset($data['dpEnabled']) ? $data['dpEnabled'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isAccessControl'] = isset($data['isAccessControl']) ? $data['isAccessControl'] : null;
        $this->container['isNeedApproval'] = isset($data['isNeedApproval']) ? $data['isNeedApproval'] : null;
        $this->container['leagueStatus'] = isset($data['leagueStatus']) ? $data['leagueStatus'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['partners'] = isset($data['partners']) ? $data['partners'] : null;
        $this->container['privacyProtectionType'] = isset($data['privacyProtectionType']) ? $data['privacyProtectionType'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['bcsChannelName']) && (mb_strlen($this->container['bcsChannelName']) > 128)) {
                $invalidProperties[] = "invalid value for 'bcsChannelName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['bcsChannelName']) && (mb_strlen($this->container['bcsChannelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'bcsChannelName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bcsIp']) && (mb_strlen($this->container['bcsIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'bcsIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['bcsIp']) && (mb_strlen($this->container['bcsIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'bcsIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bcsOrgName']) && (mb_strlen($this->container['bcsOrgName']) > 128)) {
                $invalidProperties[] = "invalid value for 'bcsOrgName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['bcsOrgName']) && (mb_strlen($this->container['bcsOrgName']) < 0)) {
                $invalidProperties[] = "invalid value for 'bcsOrgName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blockChainId']) && (mb_strlen($this->container['blockChainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'blockChainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['blockChainId']) && (mb_strlen($this->container['blockChainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'blockChainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blockChainName']) && (mb_strlen($this->container['blockChainName']) > 128)) {
                $invalidProperties[] = "invalid value for 'blockChainName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['blockChainName']) && (mb_strlen($this->container['blockChainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'blockChainName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 128)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getLeagueStatusAllowableValues();
                if (!is_null($this->container['leagueStatus']) && !in_array($this->container['leagueStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'leagueStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['leagueStatus']) && (mb_strlen($this->container['leagueStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'leagueStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['leagueStatus']) && (mb_strlen($this->container['leagueStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'leagueStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getPrivacyProtectionTypeAllowableValues();
                if (!is_null($this->container['privacyProtectionType']) && !in_array($this->container['privacyProtectionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'privacyProtectionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
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
    * Gets bcsChannelName
    *  BCS通道名称
    *
    * @return string|null
    */
    public function getBcsChannelName()
    {
        return $this->container['bcsChannelName'];
    }

    /**
    * Sets bcsChannelName
    *
    * @param string|null $bcsChannelName BCS通道名称
    *
    * @return $this
    */
    public function setBcsChannelName($bcsChannelName)
    {
        $this->container['bcsChannelName'] = $bcsChannelName;
        return $this;
    }

    /**
    * Gets bcsIp
    *  BCS浏览器ip
    *
    * @return string|null
    */
    public function getBcsIp()
    {
        return $this->container['bcsIp'];
    }

    /**
    * Sets bcsIp
    *
    * @param string|null $bcsIp BCS浏览器ip
    *
    * @return $this
    */
    public function setBcsIp($bcsIp)
    {
        $this->container['bcsIp'] = $bcsIp;
        return $this;
    }

    /**
    * Gets bcsOrgName
    *  BCS组织名称
    *
    * @return string|null
    */
    public function getBcsOrgName()
    {
        return $this->container['bcsOrgName'];
    }

    /**
    * Sets bcsOrgName
    *
    * @param string|null $bcsOrgName BCS组织名称
    *
    * @return $this
    */
    public function setBcsOrgName($bcsOrgName)
    {
        $this->container['bcsOrgName'] = $bcsOrgName;
        return $this;
    }

    /**
    * Gets blockChainId
    *  BCS服务实例ID
    *
    * @return string|null
    */
    public function getBlockChainId()
    {
        return $this->container['blockChainId'];
    }

    /**
    * Sets blockChainId
    *
    * @param string|null $blockChainId BCS服务实例ID
    *
    * @return $this
    */
    public function setBlockChainId($blockChainId)
    {
        $this->container['blockChainId'] = $blockChainId;
        return $this;
    }

    /**
    * Gets blockChainName
    *  BCS服务实例名称
    *
    * @return string|null
    */
    public function getBlockChainName()
    {
        return $this->container['blockChainName'];
    }

    /**
    * Sets blockChainName
    *
    * @param string|null $blockChainName BCS服务实例名称
    *
    * @return $this
    */
    public function setBlockChainName($blockChainName)
    {
        $this->container['blockChainName'] = $blockChainName;
        return $this;
    }

    /**
    * Gets createDate
    *  创建日期
    *
    * @return \DateTime|null
    */
    public function getCreateDate()
    {
        return $this->container['createDate'];
    }

    /**
    * Sets createDate
    *
    * @param \DateTime|null $createDate 创建日期
    *
    * @return $this
    */
    public function setCreateDate($createDate)
    {
        $this->container['createDate'] = $createDate;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建人id
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建人id
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
    *  创建人名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dpEnabled
    *  是否开启差分隐私
    *
    * @return bool|null
    */
    public function getDpEnabled()
    {
        return $this->container['dpEnabled'];
    }

    /**
    * Sets dpEnabled
    *
    * @param bool|null $dpEnabled 是否开启差分隐私
    *
    * @return $this
    */
    public function setDpEnabled($dpEnabled)
    {
        $this->container['dpEnabled'] = $dpEnabled;
        return $this;
    }

    /**
    * Gets expireTime
    *  过期时间
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 过期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets id
    *  联盟id
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
    * @param string|null $id 联盟id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isAccessControl
    *  是否开启访问控制
    *
    * @return bool|null
    */
    public function getIsAccessControl()
    {
        return $this->container['isAccessControl'];
    }

    /**
    * Sets isAccessControl
    *
    * @param bool|null $isAccessControl 是否开启访问控制
    *
    * @return $this
    */
    public function setIsAccessControl($isAccessControl)
    {
        $this->container['isAccessControl'] = $isAccessControl;
        return $this;
    }

    /**
    * Gets isNeedApproval
    *  是否开启审批
    *
    * @return bool|null
    */
    public function getIsNeedApproval()
    {
        return $this->container['isNeedApproval'];
    }

    /**
    * Sets isNeedApproval
    *
    * @param bool|null $isNeedApproval 是否开启审批
    *
    * @return $this
    */
    public function setIsNeedApproval($isNeedApproval)
    {
        $this->container['isNeedApproval'] = $isNeedApproval;
        return $this;
    }

    /**
    * Gets leagueStatus
    *  联盟状态,CREATING.创建中,CREATE_FAILED.创建失败,NORMAL.正常,UPDATING.升级中,UPDATE_FAILED.升级失败,ROLLING.回滚中,ROLL_FAILED.回滚失败,DELETING.删除中,DELETE_FAILED.删除失败,DELETED.已删除
    *
    * @return string|null
    */
    public function getLeagueStatus()
    {
        return $this->container['leagueStatus'];
    }

    /**
    * Sets leagueStatus
    *
    * @param string|null $leagueStatus 联盟状态,CREATING.创建中,CREATE_FAILED.创建失败,NORMAL.正常,UPDATING.升级中,UPDATE_FAILED.升级失败,ROLLING.回滚中,ROLL_FAILED.回滚失败,DELETING.删除中,DELETE_FAILED.删除失败,DELETED.已删除
    *
    * @return $this
    */
    public function setLeagueStatus($leagueStatus)
    {
        $this->container['leagueStatus'] = $leagueStatus;
        return $this;
    }

    /**
    * Gets name
    *  联盟名称
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
    * @param string|null $name 联盟名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets partners
    *  联盟成员数
    *
    * @return int|null
    */
    public function getPartners()
    {
        return $this->container['partners'];
    }

    /**
    * Sets partners
    *
    * @param int|null $partners 联盟成员数
    *
    * @return $this
    */
    public function setPartners($partners)
    {
        $this->container['partners'] = $partners;
        return $this;
    }

    /**
    * Gets privacyProtectionType
    *  隐私保护级别,STANDARD.标准,HIGH.高
    *
    * @return string|null
    */
    public function getPrivacyProtectionType()
    {
        return $this->container['privacyProtectionType'];
    }

    /**
    * Sets privacyProtectionType
    *
    * @param string|null $privacyProtectionType 隐私保护级别,STANDARD.标准,HIGH.高
    *
    * @return $this
    */
    public function setPrivacyProtectionType($privacyProtectionType)
    {
        $this->container['privacyProtectionType'] = $privacyProtectionType;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  资源规格
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 资源规格
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets type
    *  参与类型,OWNER.所有者,PARTNER.参与者
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 参与类型,OWNER.所有者,PARTNER.参与者
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  联盟版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 联盟版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

