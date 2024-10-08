<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddressGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddressGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  功能说明：地址组唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：地址组名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * maxCapacity  功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    * ipVersion  功能说明：IP地址组ip版本 取值范围：4, 表示ipv4地址组；6, 表示ipv6地址组
    * createdAt  功能说明：地址组创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * updatedAt  功能描述：地址组最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * tenantId  功能说明：资源所属项目ID
    * enterpriseProjectId  功能说明：企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * tags  IP地址组资源标签
    * status  功能说明：地址组状态 取值范围：       NORMAL：正常       UPDATING：更新中       UPDATE_FAILED：更新失败 默认值：NORMAL 约束：当地址组处于UPDATING（更新中）状态时，不允许再次更新
    * statusMessage  功能说明：地址组状态详情信息
    * ipExtraSet  功能说明：地址组包含的地址集及其备注信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'maxCapacity' => 'int',
            'ipSet' => 'string[]',
            'ipVersion' => 'int',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'tenantId' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Vpc\V3\Model\ResourceTag[]',
            'status' => 'string',
            'statusMessage' => 'string',
            'ipExtraSet' => '\HuaweiCloud\SDK\Vpc\V3\Model\IpExtraSetRespOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  功能说明：地址组唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：地址组名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * maxCapacity  功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    * ipVersion  功能说明：IP地址组ip版本 取值范围：4, 表示ipv4地址组；6, 表示ipv6地址组
    * createdAt  功能说明：地址组创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * updatedAt  功能描述：地址组最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * tenantId  功能说明：资源所属项目ID
    * enterpriseProjectId  功能说明：企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * tags  IP地址组资源标签
    * status  功能说明：地址组状态 取值范围：       NORMAL：正常       UPDATING：更新中       UPDATE_FAILED：更新失败 默认值：NORMAL 约束：当地址组处于UPDATING（更新中）状态时，不允许再次更新
    * statusMessage  功能说明：地址组状态详情信息
    * ipExtraSet  功能说明：地址组包含的地址集及其备注信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'maxCapacity' => 'int32',
        'ipSet' => null,
        'ipVersion' => 'int32',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'tenantId' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'status' => null,
        'statusMessage' => null,
        'ipExtraSet' => null
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
    * id  功能说明：地址组唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：地址组名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * maxCapacity  功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    * ipVersion  功能说明：IP地址组ip版本 取值范围：4, 表示ipv4地址组；6, 表示ipv6地址组
    * createdAt  功能说明：地址组创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * updatedAt  功能描述：地址组最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * tenantId  功能说明：资源所属项目ID
    * enterpriseProjectId  功能说明：企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * tags  IP地址组资源标签
    * status  功能说明：地址组状态 取值范围：       NORMAL：正常       UPDATING：更新中       UPDATE_FAILED：更新失败 默认值：NORMAL 约束：当地址组处于UPDATING（更新中）状态时，不允许再次更新
    * statusMessage  功能说明：地址组状态详情信息
    * ipExtraSet  功能说明：地址组包含的地址集及其备注信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'maxCapacity' => 'max_capacity',
            'ipSet' => 'ip_set',
            'ipVersion' => 'ip_version',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'tenantId' => 'tenant_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'status' => 'status',
            'statusMessage' => 'status_message',
            'ipExtraSet' => 'ip_extra_set'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  功能说明：地址组唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：地址组名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * maxCapacity  功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    * ipVersion  功能说明：IP地址组ip版本 取值范围：4, 表示ipv4地址组；6, 表示ipv6地址组
    * createdAt  功能说明：地址组创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * updatedAt  功能描述：地址组最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * tenantId  功能说明：资源所属项目ID
    * enterpriseProjectId  功能说明：企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * tags  IP地址组资源标签
    * status  功能说明：地址组状态 取值范围：       NORMAL：正常       UPDATING：更新中       UPDATE_FAILED：更新失败 默认值：NORMAL 约束：当地址组处于UPDATING（更新中）状态时，不允许再次更新
    * statusMessage  功能说明：地址组状态详情信息
    * ipExtraSet  功能说明：地址组包含的地址集及其备注信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'maxCapacity' => 'setMaxCapacity',
            'ipSet' => 'setIpSet',
            'ipVersion' => 'setIpVersion',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'tenantId' => 'setTenantId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'status' => 'setStatus',
            'statusMessage' => 'setStatusMessage',
            'ipExtraSet' => 'setIpExtraSet'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  功能说明：地址组唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：地址组名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * maxCapacity  功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    * ipVersion  功能说明：IP地址组ip版本 取值范围：4, 表示ipv4地址组；6, 表示ipv6地址组
    * createdAt  功能说明：地址组创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * updatedAt  功能描述：地址组最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * tenantId  功能说明：资源所属项目ID
    * enterpriseProjectId  功能说明：企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * tags  IP地址组资源标签
    * status  功能说明：地址组状态 取值范围：       NORMAL：正常       UPDATING：更新中       UPDATE_FAILED：更新失败 默认值：NORMAL 约束：当地址组处于UPDATING（更新中）状态时，不允许再次更新
    * statusMessage  功能说明：地址组状态详情信息
    * ipExtraSet  功能说明：地址组包含的地址集及其备注信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'maxCapacity' => 'getMaxCapacity',
            'ipSet' => 'getIpSet',
            'ipVersion' => 'getIpVersion',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'tenantId' => 'getTenantId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'status' => 'getStatus',
            'statusMessage' => 'getStatusMessage',
            'ipExtraSet' => 'getIpExtraSet'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['maxCapacity'] = isset($data['maxCapacity']) ? $data['maxCapacity'] : null;
        $this->container['ipSet'] = isset($data['ipSet']) ? $data['ipSet'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
        $this->container['ipExtraSet'] = isset($data['ipExtraSet']) ? $data['ipExtraSet'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['maxCapacity'] === null) {
            $invalidProperties[] = "'maxCapacity' can't be null";
        }
        if ($this->container['ipSet'] === null) {
            $invalidProperties[] = "'ipSet' can't be null";
        }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['statusMessage'] === null) {
            $invalidProperties[] = "'statusMessage' can't be null";
        }
        if ($this->container['ipExtraSet'] === null) {
            $invalidProperties[] = "'ipExtraSet' can't be null";
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
    * Gets id
    *  功能说明：地址组唯一标识 取值范围：合法UUID的字符串
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 功能说明：地址组唯一标识 取值范围：合法UUID的字符串
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  功能说明：地址组名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string $name 功能说明：地址组名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：地址组描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 功能说明：地址组描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets maxCapacity
    *  功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    *
    * @return int
    */
    public function getMaxCapacity()
    {
        return $this->container['maxCapacity'];
    }

    /**
    * Sets maxCapacity
    *
    * @param int $maxCapacity 功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    *
    * @return $this
    */
    public function setMaxCapacity($maxCapacity)
    {
        $this->container['maxCapacity'] = $maxCapacity;
        return $this;
    }

    /**
    * Gets ipSet
    *  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    *
    * @return string[]
    */
    public function getIpSet()
    {
        return $this->container['ipSet'];
    }

    /**
    * Sets ipSet
    *
    * @param string[] $ipSet 功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    *
    * @return $this
    */
    public function setIpSet($ipSet)
    {
        $this->container['ipSet'] = $ipSet;
        return $this;
    }

    /**
    * Gets ipVersion
    *  功能说明：IP地址组ip版本 取值范围：4, 表示ipv4地址组；6, 表示ipv6地址组
    *
    * @return int
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int $ipVersion 功能说明：IP地址组ip版本 取值范围：4, 表示ipv4地址组；6, 表示ipv6地址组
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets createdAt
    *  功能说明：地址组创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 功能说明：地址组创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  功能描述：地址组最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 功能描述：地址组最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets tenantId
    *  功能说明：资源所属项目ID
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 功能说明：资源所属项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  功能说明：企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 功能说明：企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  IP地址组资源标签
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\ResourceTag[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\ResourceTag[] $tags IP地址组资源标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：地址组状态 取值范围：       NORMAL：正常       UPDATING：更新中       UPDATE_FAILED：更新失败 默认值：NORMAL 约束：当地址组处于UPDATING（更新中）状态时，不允许再次更新
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 功能说明：地址组状态 取值范围：       NORMAL：正常       UPDATING：更新中       UPDATE_FAILED：更新失败 默认值：NORMAL 约束：当地址组处于UPDATING（更新中）状态时，不允许再次更新
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusMessage
    *  功能说明：地址组状态详情信息
    *
    * @return string
    */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
    * Sets statusMessage
    *
    * @param string $statusMessage 功能说明：地址组状态详情信息
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
        return $this;
    }

    /**
    * Gets ipExtraSet
    *  功能说明：地址组包含的地址集及其备注信息
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\IpExtraSetRespOption[]
    */
    public function getIpExtraSet()
    {
        return $this->container['ipExtraSet'];
    }

    /**
    * Sets ipExtraSet
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\IpExtraSetRespOption[] $ipExtraSet 功能说明：地址组包含的地址集及其备注信息
    *
    * @return $this
    */
    public function setIpExtraSet($ipExtraSet)
    {
        $this->container['ipExtraSet'] = $ipExtraSet;
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

