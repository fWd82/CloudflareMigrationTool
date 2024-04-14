<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteEndpointPermissionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteEndpointPermissionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permissions  白名单记录列表。每个白名单记录的格式为iam:domain::授权账号ID。  其中，授权账号ID是长度为32的字符串，只包含英文字母（a-f）或数字；也可为*，表示允许全部用户连接。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permissions' => 'string[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permissions  白名单记录列表。每个白名单记录的格式为iam:domain::授权账号ID。  其中，授权账号ID是长度为32的字符串，只包含英文字母（a-f）或数字；也可为*，表示允许全部用户连接。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permissions' => null,
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
    * permissions  白名单记录列表。每个白名单记录的格式为iam:domain::授权账号ID。  其中，授权账号ID是长度为32的字符串，只包含英文字母（a-f）或数字；也可为*，表示允许全部用户连接。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permissions' => 'permissions',
            'xRequestId' => 'x-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permissions  白名单记录列表。每个白名单记录的格式为iam:domain::授权账号ID。  其中，授权账号ID是长度为32的字符串，只包含英文字母（a-f）或数字；也可为*，表示允许全部用户连接。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'permissions' => 'setPermissions',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permissions  白名单记录列表。每个白名单记录的格式为iam:domain::授权账号ID。  其中，授权账号ID是长度为32的字符串，只包含英文字母（a-f）或数字；也可为*，表示允许全部用户连接。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'permissions' => 'getPermissions',
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
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
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
    * Gets permissions
    *  白名单记录列表。每个白名单记录的格式为iam:domain::授权账号ID。  其中，授权账号ID是长度为32的字符串，只包含英文字母（a-f）或数字；也可为*，表示允许全部用户连接。
    *
    * @return string[]|null
    */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
    * Sets permissions
    *
    * @param string[]|null $permissions 白名单记录列表。每个白名单记录的格式为iam:domain::授权账号ID。  其中，授权账号ID是长度为32的字符串，只包含英文字母（a-f）或数字；也可为*，表示允许全部用户连接。
    *
    * @return $this
    */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;
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

