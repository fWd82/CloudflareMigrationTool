<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOrganizationConformancePackResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOrganizationConformancePackResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orgConformancePackId  组织合规规则包ID。
    * orgConformancePackName  组织合规规则包名称。
    * ownerId  组织合规规则包创建者。
    * organizationId  组织ID
    * orgConformancePackUrn  组织合规规则包资源唯一标识。
    * varsStructure  合规规则包参数。
    * createdAt  组织合规规则包创建时间。
    * updatedAt  组织合规规则包更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orgConformancePackId' => 'string',
            'orgConformancePackName' => 'string',
            'ownerId' => 'string',
            'organizationId' => 'string',
            'orgConformancePackUrn' => 'string',
            'varsStructure' => '\HuaweiCloud\SDK\Config\V1\Model\VarsStructure[]',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orgConformancePackId  组织合规规则包ID。
    * orgConformancePackName  组织合规规则包名称。
    * ownerId  组织合规规则包创建者。
    * organizationId  组织ID
    * orgConformancePackUrn  组织合规规则包资源唯一标识。
    * varsStructure  合规规则包参数。
    * createdAt  组织合规规则包创建时间。
    * updatedAt  组织合规规则包更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orgConformancePackId' => null,
        'orgConformancePackName' => null,
        'ownerId' => null,
        'organizationId' => null,
        'orgConformancePackUrn' => null,
        'varsStructure' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * orgConformancePackId  组织合规规则包ID。
    * orgConformancePackName  组织合规规则包名称。
    * ownerId  组织合规规则包创建者。
    * organizationId  组织ID
    * orgConformancePackUrn  组织合规规则包资源唯一标识。
    * varsStructure  合规规则包参数。
    * createdAt  组织合规规则包创建时间。
    * updatedAt  组织合规规则包更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orgConformancePackId' => 'org_conformance_pack_id',
            'orgConformancePackName' => 'org_conformance_pack_name',
            'ownerId' => 'owner_id',
            'organizationId' => 'organization_id',
            'orgConformancePackUrn' => 'org_conformance_pack_urn',
            'varsStructure' => 'vars_structure',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orgConformancePackId  组织合规规则包ID。
    * orgConformancePackName  组织合规规则包名称。
    * ownerId  组织合规规则包创建者。
    * organizationId  组织ID
    * orgConformancePackUrn  组织合规规则包资源唯一标识。
    * varsStructure  合规规则包参数。
    * createdAt  组织合规规则包创建时间。
    * updatedAt  组织合规规则包更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'orgConformancePackId' => 'setOrgConformancePackId',
            'orgConformancePackName' => 'setOrgConformancePackName',
            'ownerId' => 'setOwnerId',
            'organizationId' => 'setOrganizationId',
            'orgConformancePackUrn' => 'setOrgConformancePackUrn',
            'varsStructure' => 'setVarsStructure',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orgConformancePackId  组织合规规则包ID。
    * orgConformancePackName  组织合规规则包名称。
    * ownerId  组织合规规则包创建者。
    * organizationId  组织ID
    * orgConformancePackUrn  组织合规规则包资源唯一标识。
    * varsStructure  合规规则包参数。
    * createdAt  组织合规规则包创建时间。
    * updatedAt  组织合规规则包更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'orgConformancePackId' => 'getOrgConformancePackId',
            'orgConformancePackName' => 'getOrgConformancePackName',
            'ownerId' => 'getOwnerId',
            'organizationId' => 'getOrganizationId',
            'orgConformancePackUrn' => 'getOrgConformancePackUrn',
            'varsStructure' => 'getVarsStructure',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['orgConformancePackId'] = isset($data['orgConformancePackId']) ? $data['orgConformancePackId'] : null;
        $this->container['orgConformancePackName'] = isset($data['orgConformancePackName']) ? $data['orgConformancePackName'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['orgConformancePackUrn'] = isset($data['orgConformancePackUrn']) ? $data['orgConformancePackUrn'] : null;
        $this->container['varsStructure'] = isset($data['varsStructure']) ? $data['varsStructure'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets orgConformancePackId
    *  组织合规规则包ID。
    *
    * @return string|null
    */
    public function getOrgConformancePackId()
    {
        return $this->container['orgConformancePackId'];
    }

    /**
    * Sets orgConformancePackId
    *
    * @param string|null $orgConformancePackId 组织合规规则包ID。
    *
    * @return $this
    */
    public function setOrgConformancePackId($orgConformancePackId)
    {
        $this->container['orgConformancePackId'] = $orgConformancePackId;
        return $this;
    }

    /**
    * Gets orgConformancePackName
    *  组织合规规则包名称。
    *
    * @return string|null
    */
    public function getOrgConformancePackName()
    {
        return $this->container['orgConformancePackName'];
    }

    /**
    * Sets orgConformancePackName
    *
    * @param string|null $orgConformancePackName 组织合规规则包名称。
    *
    * @return $this
    */
    public function setOrgConformancePackName($orgConformancePackName)
    {
        $this->container['orgConformancePackName'] = $orgConformancePackName;
        return $this;
    }

    /**
    * Gets ownerId
    *  组织合规规则包创建者。
    *
    * @return string|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param string|null $ownerId 组织合规规则包创建者。
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets organizationId
    *  组织ID
    *
    * @return string|null
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string|null $organizationId 组织ID
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets orgConformancePackUrn
    *  组织合规规则包资源唯一标识。
    *
    * @return string|null
    */
    public function getOrgConformancePackUrn()
    {
        return $this->container['orgConformancePackUrn'];
    }

    /**
    * Sets orgConformancePackUrn
    *
    * @param string|null $orgConformancePackUrn 组织合规规则包资源唯一标识。
    *
    * @return $this
    */
    public function setOrgConformancePackUrn($orgConformancePackUrn)
    {
        $this->container['orgConformancePackUrn'] = $orgConformancePackUrn;
        return $this;
    }

    /**
    * Gets varsStructure
    *  合规规则包参数。
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\VarsStructure[]|null
    */
    public function getVarsStructure()
    {
        return $this->container['varsStructure'];
    }

    /**
    * Sets varsStructure
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\VarsStructure[]|null $varsStructure 合规规则包参数。
    *
    * @return $this
    */
    public function setVarsStructure($varsStructure)
    {
        $this->container['varsStructure'] = $varsStructure;
        return $this;
    }

    /**
    * Gets createdAt
    *  组织合规规则包创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 组织合规规则包创建时间。
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
    *  组织合规规则包更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 组织合规规则包更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

