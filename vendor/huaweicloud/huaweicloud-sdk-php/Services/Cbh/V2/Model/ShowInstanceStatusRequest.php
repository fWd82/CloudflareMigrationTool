<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverId  云堡垒机实例ID，使用UUID格式表示。  [实例ID获取方式](https://support.huaweicloud.com/usermanual-cbh/cbh_02_1003.html)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverId  云堡垒机实例ID，使用UUID格式表示。  [实例ID获取方式](https://support.huaweicloud.com/usermanual-cbh/cbh_02_1003.html)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverId' => null
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
    * serverId  云堡垒机实例ID，使用UUID格式表示。  [实例ID获取方式](https://support.huaweicloud.com/usermanual-cbh/cbh_02_1003.html)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverId' => 'server_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverId  云堡垒机实例ID，使用UUID格式表示。  [实例ID获取方式](https://support.huaweicloud.com/usermanual-cbh/cbh_02_1003.html)。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverId' => 'setServerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverId  云堡垒机实例ID，使用UUID格式表示。  [实例ID获取方式](https://support.huaweicloud.com/usermanual-cbh/cbh_02_1003.html)。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverId' => 'getServerId'
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serverId'] === null) {
            $invalidProperties[] = "'serverId' can't be null";
        }
            if ((mb_strlen($this->container['serverId']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['serverId']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 0.";
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
    * Gets serverId
    *  云堡垒机实例ID，使用UUID格式表示。  [实例ID获取方式](https://support.huaweicloud.com/usermanual-cbh/cbh_02_1003.html)。
    *
    * @return string
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string $serverId 云堡垒机实例ID，使用UUID格式表示。  [实例ID获取方式](https://support.huaweicloud.com/usermanual-cbh/cbh_02_1003.html)。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
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

