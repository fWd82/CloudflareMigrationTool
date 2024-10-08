<?php

namespace HuaweiCloud\SDK\Aom\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnvParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnvParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * componentId  环境关联组件id；id长度不能超过36位，由大小写字母、数字组成。创建环境必传，修改环境时非必选
    * description  描述：最大255字符
    * envName  显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * envType  环境类型，取值：DEV、TEST、PRE、ONLINE，不区分大小写
    * osType  OS类型，取值：LINUX、WINDOWS。创建环境必传，不可修改
    * region  环境关联region。创建环境必传，不可修改
    * registerType  注册类型，取值：API、SERVICE_DISCOVERY、CONSOLE，默认值：API
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'componentId' => 'string',
            'description' => 'string',
            'envName' => 'string',
            'envType' => 'string',
            'osType' => 'string',
            'region' => 'string',
            'registerType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * componentId  环境关联组件id；id长度不能超过36位，由大小写字母、数字组成。创建环境必传，修改环境时非必选
    * description  描述：最大255字符
    * envName  显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * envType  环境类型，取值：DEV、TEST、PRE、ONLINE，不区分大小写
    * osType  OS类型，取值：LINUX、WINDOWS。创建环境必传，不可修改
    * region  环境关联region。创建环境必传，不可修改
    * registerType  注册类型，取值：API、SERVICE_DISCOVERY、CONSOLE，默认值：API
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'componentId' => null,
        'description' => null,
        'envName' => null,
        'envType' => null,
        'osType' => null,
        'region' => null,
        'registerType' => null
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
    * componentId  环境关联组件id；id长度不能超过36位，由大小写字母、数字组成。创建环境必传，修改环境时非必选
    * description  描述：最大255字符
    * envName  显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * envType  环境类型，取值：DEV、TEST、PRE、ONLINE，不区分大小写
    * osType  OS类型，取值：LINUX、WINDOWS。创建环境必传，不可修改
    * region  环境关联region。创建环境必传，不可修改
    * registerType  注册类型，取值：API、SERVICE_DISCOVERY、CONSOLE，默认值：API
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'componentId' => 'component_id',
            'description' => 'description',
            'envName' => 'env_name',
            'envType' => 'env_type',
            'osType' => 'os_type',
            'region' => 'region',
            'registerType' => 'register_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * componentId  环境关联组件id；id长度不能超过36位，由大小写字母、数字组成。创建环境必传，修改环境时非必选
    * description  描述：最大255字符
    * envName  显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * envType  环境类型，取值：DEV、TEST、PRE、ONLINE，不区分大小写
    * osType  OS类型，取值：LINUX、WINDOWS。创建环境必传，不可修改
    * region  环境关联region。创建环境必传，不可修改
    * registerType  注册类型，取值：API、SERVICE_DISCOVERY、CONSOLE，默认值：API
    *
    * @var string[]
    */
    protected static $setters = [
            'componentId' => 'setComponentId',
            'description' => 'setDescription',
            'envName' => 'setEnvName',
            'envType' => 'setEnvType',
            'osType' => 'setOsType',
            'region' => 'setRegion',
            'registerType' => 'setRegisterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * componentId  环境关联组件id；id长度不能超过36位，由大小写字母、数字组成。创建环境必传，修改环境时非必选
    * description  描述：最大255字符
    * envName  显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * envType  环境类型，取值：DEV、TEST、PRE、ONLINE，不区分大小写
    * osType  OS类型，取值：LINUX、WINDOWS。创建环境必传，不可修改
    * region  环境关联region。创建环境必传，不可修改
    * registerType  注册类型，取值：API、SERVICE_DISCOVERY、CONSOLE，默认值：API
    *
    * @var string[]
    */
    protected static $getters = [
            'componentId' => 'getComponentId',
            'description' => 'getDescription',
            'envName' => 'getEnvName',
            'envType' => 'getEnvType',
            'osType' => 'getOsType',
            'region' => 'getRegion',
            'registerType' => 'getRegisterType'
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
    const ENV_TYPE_DEV = 'DEV';
    const ENV_TYPE_TEST = 'TEST';
    const ENV_TYPE_PRE = 'PRE';
    const ENV_TYPE_ONLINE = 'ONLINE';
    const OS_TYPE_LINUX = 'LINUX';
    const OS_TYPE_WINDOWS = 'WINDOWS';
    const REGISTER_TYPE_API = 'API';
    const REGISTER_TYPE_CONSOLE = 'CONSOLE';
    const REGISTER_TYPE_SERVICE_DISCOVERY = 'SERVICE_DISCOVERY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEnvTypeAllowableValues()
    {
        return [
            self::ENV_TYPE_DEV,
            self::ENV_TYPE_TEST,
            self::ENV_TYPE_PRE,
            self::ENV_TYPE_ONLINE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsTypeAllowableValues()
    {
        return [
            self::OS_TYPE_LINUX,
            self::OS_TYPE_WINDOWS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRegisterTypeAllowableValues()
    {
        return [
            self::REGISTER_TYPE_API,
            self::REGISTER_TYPE_CONSOLE,
            self::REGISTER_TYPE_SERVICE_DISCOVERY,
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
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['envType'] = isset($data['envType']) ? $data['envType'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['registerType'] = isset($data['registerType']) ? $data['registerType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['componentId'] === null) {
            $invalidProperties[] = "'componentId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9\\-]{32,36}$/", $this->container['componentId'])) {
                $invalidProperties[] = "invalid value for 'componentId', must be conform to the pattern /^[a-zA-Z0-9\\-]{32,36}$/.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[\\s\\S]{0,255}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\s\\S]{0,255}$/.";
            }
        if ($this->container['envName'] === null) {
            $invalidProperties[] = "'envName' can't be null";
        }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_\\-.]{2,64}$/", $this->container['envName'])) {
                $invalidProperties[] = "invalid value for 'envName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_\\-.]{2,64}$/.";
            }
        if ($this->container['envType'] === null) {
            $invalidProperties[] = "'envType' can't be null";
        }
            $allowedValues = $this->getEnvTypeAllowableValues();
                if (!is_null($this->container['envType']) && !in_array($this->container['envType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'envType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['osType'] === null) {
            $invalidProperties[] = "'osType' can't be null";
        }
            $allowedValues = $this->getOsTypeAllowableValues();
                if (!is_null($this->container['osType']) && !in_array($this->container['osType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRegisterTypeAllowableValues();
                if (!is_null($this->container['registerType']) && !in_array($this->container['registerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'registerType', must be one of '%s'",
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
    * Gets componentId
    *  环境关联组件id；id长度不能超过36位，由大小写字母、数字组成。创建环境必传，修改环境时非必选
    *
    * @return string
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string $componentId 环境关联组件id；id长度不能超过36位，由大小写字母、数字组成。创建环境必传，修改环境时非必选
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets description
    *  描述：最大255字符
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
    * @param string|null $description 描述：最大255字符
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets envName
    *  显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    *
    * @return string
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string $envName 显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets envType
    *  环境类型，取值：DEV、TEST、PRE、ONLINE，不区分大小写
    *
    * @return string
    */
    public function getEnvType()
    {
        return $this->container['envType'];
    }

    /**
    * Sets envType
    *
    * @param string $envType 环境类型，取值：DEV、TEST、PRE、ONLINE，不区分大小写
    *
    * @return $this
    */
    public function setEnvType($envType)
    {
        $this->container['envType'] = $envType;
        return $this;
    }

    /**
    * Gets osType
    *  OS类型，取值：LINUX、WINDOWS。创建环境必传，不可修改
    *
    * @return string
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string $osType OS类型，取值：LINUX、WINDOWS。创建环境必传，不可修改
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets region
    *  环境关联region。创建环境必传，不可修改
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 环境关联region。创建环境必传，不可修改
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets registerType
    *  注册类型，取值：API、SERVICE_DISCOVERY、CONSOLE，默认值：API
    *
    * @return string|null
    */
    public function getRegisterType()
    {
        return $this->container['registerType'];
    }

    /**
    * Sets registerType
    *
    * @param string|null $registerType 注册类型，取值：API、SERVICE_DISCOVERY、CONSOLE，默认值：API
    *
    * @return $this
    */
    public function setRegisterType($registerType)
    {
        $this->container['registerType'] = $registerType;
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

