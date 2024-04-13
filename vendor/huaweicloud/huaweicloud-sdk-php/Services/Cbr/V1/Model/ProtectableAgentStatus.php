<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectableAgentStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectableAgentStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  agent无法连接的错误码
    * installed  agent是否安装
    * isOld  agent是否为老版本
    * message  agent无法连接的错误信息
    * resourceId  资源ID
    * version  agent版本号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'int',
            'installed' => 'bool',
            'isOld' => 'bool',
            'message' => 'string',
            'resourceId' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  agent无法连接的错误码
    * installed  agent是否安装
    * isOld  agent是否为老版本
    * message  agent无法连接的错误信息
    * resourceId  资源ID
    * version  agent版本号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => 'int32',
        'installed' => null,
        'isOld' => null,
        'message' => null,
        'resourceId' => null,
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
    * code  agent无法连接的错误码
    * installed  agent是否安装
    * isOld  agent是否为老版本
    * message  agent无法连接的错误信息
    * resourceId  资源ID
    * version  agent版本号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'installed' => 'installed',
            'isOld' => 'is_old',
            'message' => 'message',
            'resourceId' => 'resource_id',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  agent无法连接的错误码
    * installed  agent是否安装
    * isOld  agent是否为老版本
    * message  agent无法连接的错误信息
    * resourceId  资源ID
    * version  agent版本号
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'installed' => 'setInstalled',
            'isOld' => 'setIsOld',
            'message' => 'setMessage',
            'resourceId' => 'setResourceId',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  agent无法连接的错误码
    * installed  agent是否安装
    * isOld  agent是否为老版本
    * message  agent无法连接的错误信息
    * resourceId  资源ID
    * version  agent版本号
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'installed' => 'getInstalled',
            'isOld' => 'getIsOld',
            'message' => 'getMessage',
            'resourceId' => 'getResourceId',
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['installed'] = isset($data['installed']) ? $data['installed'] : null;
        $this->container['isOld'] = isset($data['isOld']) ? $data['isOld'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
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
    * Gets code
    *  agent无法连接的错误码
    *
    * @return int|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param int|null $code agent无法连接的错误码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets installed
    *  agent是否安装
    *
    * @return bool|null
    */
    public function getInstalled()
    {
        return $this->container['installed'];
    }

    /**
    * Sets installed
    *
    * @param bool|null $installed agent是否安装
    *
    * @return $this
    */
    public function setInstalled($installed)
    {
        $this->container['installed'] = $installed;
        return $this;
    }

    /**
    * Gets isOld
    *  agent是否为老版本
    *
    * @return bool|null
    */
    public function getIsOld()
    {
        return $this->container['isOld'];
    }

    /**
    * Sets isOld
    *
    * @param bool|null $isOld agent是否为老版本
    *
    * @return $this
    */
    public function setIsOld($isOld)
    {
        $this->container['isOld'] = $isOld;
        return $this;
    }

    /**
    * Gets message
    *  agent无法连接的错误信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message agent无法连接的错误信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets version
    *  agent版本号
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
    * @param string|null $version agent版本号
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

