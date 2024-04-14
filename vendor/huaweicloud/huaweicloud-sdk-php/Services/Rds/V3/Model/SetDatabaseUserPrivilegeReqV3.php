<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetDatabaseUserPrivilegeReqV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetDatabaseUserPrivilegeReqV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allUsers  是否设置所有用户。
    * userName  数据库用户名。
    * readonly  是否为只读权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allUsers' => 'bool',
            'userName' => 'string',
            'readonly' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allUsers  是否设置所有用户。
    * userName  数据库用户名。
    * readonly  是否为只读权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allUsers' => null,
        'userName' => null,
        'readonly' => null
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
    * allUsers  是否设置所有用户。
    * userName  数据库用户名。
    * readonly  是否为只读权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allUsers' => 'all_users',
            'userName' => 'user_name',
            'readonly' => 'readonly'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allUsers  是否设置所有用户。
    * userName  数据库用户名。
    * readonly  是否为只读权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'allUsers' => 'setAllUsers',
            'userName' => 'setUserName',
            'readonly' => 'setReadonly'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allUsers  是否设置所有用户。
    * userName  数据库用户名。
    * readonly  是否为只读权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'allUsers' => 'getAllUsers',
            'userName' => 'getUserName',
            'readonly' => 'getReadonly'
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
        $this->container['allUsers'] = isset($data['allUsers']) ? $data['allUsers'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['allUsers'] === null) {
            $invalidProperties[] = "'allUsers' can't be null";
        }
        if ($this->container['readonly'] === null) {
            $invalidProperties[] = "'readonly' can't be null";
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
    * Gets allUsers
    *  是否设置所有用户。
    *
    * @return bool
    */
    public function getAllUsers()
    {
        return $this->container['allUsers'];
    }

    /**
    * Sets allUsers
    *
    * @param bool $allUsers 是否设置所有用户。
    *
    * @return $this
    */
    public function setAllUsers($allUsers)
    {
        $this->container['allUsers'] = $allUsers;
        return $this;
    }

    /**
    * Gets userName
    *  数据库用户名。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 数据库用户名。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets readonly
    *  是否为只读权限。
    *
    * @return bool
    */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
    * Sets readonly
    *
    * @param bool $readonly 是否为只读权限。
    *
    * @return $this
    */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;
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

