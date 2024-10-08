<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListenerIpGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListenerIpGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipgroupId  监听器关联的访问控制组的id。 创建时必选，更新时非必选。 指定的ipgroup必须已存在，不能指定为null，否则与enable_ipgroup冲突。
    * enableIpgroup  访问控制组的状态。 True:开启访问控制； Flase：关闭访问控制； 开启访问控制的监听器，允许直接删除。
    * type  访问控制组的类型。 white:白名单，只允许指定ip访问； black:黑名单，不允许指定ip访问；
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipgroupId' => 'string',
            'enableIpgroup' => 'bool',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipgroupId  监听器关联的访问控制组的id。 创建时必选，更新时非必选。 指定的ipgroup必须已存在，不能指定为null，否则与enable_ipgroup冲突。
    * enableIpgroup  访问控制组的状态。 True:开启访问控制； Flase：关闭访问控制； 开启访问控制的监听器，允许直接删除。
    * type  访问控制组的类型。 white:白名单，只允许指定ip访问； black:黑名单，不允许指定ip访问；
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipgroupId' => null,
        'enableIpgroup' => null,
        'type' => null
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
    * ipgroupId  监听器关联的访问控制组的id。 创建时必选，更新时非必选。 指定的ipgroup必须已存在，不能指定为null，否则与enable_ipgroup冲突。
    * enableIpgroup  访问控制组的状态。 True:开启访问控制； Flase：关闭访问控制； 开启访问控制的监听器，允许直接删除。
    * type  访问控制组的类型。 white:白名单，只允许指定ip访问； black:黑名单，不允许指定ip访问；
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipgroupId' => 'ipgroup_id',
            'enableIpgroup' => 'enable_ipgroup',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipgroupId  监听器关联的访问控制组的id。 创建时必选，更新时非必选。 指定的ipgroup必须已存在，不能指定为null，否则与enable_ipgroup冲突。
    * enableIpgroup  访问控制组的状态。 True:开启访问控制； Flase：关闭访问控制； 开启访问控制的监听器，允许直接删除。
    * type  访问控制组的类型。 white:白名单，只允许指定ip访问； black:黑名单，不允许指定ip访问；
    *
    * @var string[]
    */
    protected static $setters = [
            'ipgroupId' => 'setIpgroupId',
            'enableIpgroup' => 'setEnableIpgroup',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipgroupId  监听器关联的访问控制组的id。 创建时必选，更新时非必选。 指定的ipgroup必须已存在，不能指定为null，否则与enable_ipgroup冲突。
    * enableIpgroup  访问控制组的状态。 True:开启访问控制； Flase：关闭访问控制； 开启访问控制的监听器，允许直接删除。
    * type  访问控制组的类型。 white:白名单，只允许指定ip访问； black:黑名单，不允许指定ip访问；
    *
    * @var string[]
    */
    protected static $getters = [
            'ipgroupId' => 'getIpgroupId',
            'enableIpgroup' => 'getEnableIpgroup',
            'type' => 'getType'
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
        $this->container['ipgroupId'] = isset($data['ipgroupId']) ? $data['ipgroupId'] : null;
        $this->container['enableIpgroup'] = isset($data['enableIpgroup']) ? $data['enableIpgroup'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ipgroupId'] === null) {
            $invalidProperties[] = "'ipgroupId' can't be null";
        }
        if ($this->container['enableIpgroup'] === null) {
            $invalidProperties[] = "'enableIpgroup' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets ipgroupId
    *  监听器关联的访问控制组的id。 创建时必选，更新时非必选。 指定的ipgroup必须已存在，不能指定为null，否则与enable_ipgroup冲突。
    *
    * @return string
    */
    public function getIpgroupId()
    {
        return $this->container['ipgroupId'];
    }

    /**
    * Sets ipgroupId
    *
    * @param string $ipgroupId 监听器关联的访问控制组的id。 创建时必选，更新时非必选。 指定的ipgroup必须已存在，不能指定为null，否则与enable_ipgroup冲突。
    *
    * @return $this
    */
    public function setIpgroupId($ipgroupId)
    {
        $this->container['ipgroupId'] = $ipgroupId;
        return $this;
    }

    /**
    * Gets enableIpgroup
    *  访问控制组的状态。 True:开启访问控制； Flase：关闭访问控制； 开启访问控制的监听器，允许直接删除。
    *
    * @return bool
    */
    public function getEnableIpgroup()
    {
        return $this->container['enableIpgroup'];
    }

    /**
    * Sets enableIpgroup
    *
    * @param bool $enableIpgroup 访问控制组的状态。 True:开启访问控制； Flase：关闭访问控制； 开启访问控制的监听器，允许直接删除。
    *
    * @return $this
    */
    public function setEnableIpgroup($enableIpgroup)
    {
        $this->container['enableIpgroup'] = $enableIpgroup;
        return $this;
    }

    /**
    * Gets type
    *  访问控制组的类型。 white:白名单，只允许指定ip访问； black:黑名单，不允许指定ip访问；
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 访问控制组的类型。 white:白名单，只允许指定ip访问； black:黑名单，不允许指定ip访问；
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

