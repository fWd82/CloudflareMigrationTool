<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaAttachInterfaceOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaAttachInterfaceOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fixedIps  私有IP。  有port_id时，该参数不起作用，并且有该参数时，必须有net_id。  只有列表中第一个元素有效。传入两个及以上元素会报错。
    * netId  Network ID。  有port_id时，该参数不起作用。
    * portId  Port ID。  port_id和net_id不能同时传入。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fixedIps' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaAttachInterfaceFixedIp[]',
            'netId' => 'string',
            'portId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fixedIps  私有IP。  有port_id时，该参数不起作用，并且有该参数时，必须有net_id。  只有列表中第一个元素有效。传入两个及以上元素会报错。
    * netId  Network ID。  有port_id时，该参数不起作用。
    * portId  Port ID。  port_id和net_id不能同时传入。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fixedIps' => null,
        'netId' => null,
        'portId' => null
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
    * fixedIps  私有IP。  有port_id时，该参数不起作用，并且有该参数时，必须有net_id。  只有列表中第一个元素有效。传入两个及以上元素会报错。
    * netId  Network ID。  有port_id时，该参数不起作用。
    * portId  Port ID。  port_id和net_id不能同时传入。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fixedIps' => 'fixed_ips',
            'netId' => 'net_id',
            'portId' => 'port_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fixedIps  私有IP。  有port_id时，该参数不起作用，并且有该参数时，必须有net_id。  只有列表中第一个元素有效。传入两个及以上元素会报错。
    * netId  Network ID。  有port_id时，该参数不起作用。
    * portId  Port ID。  port_id和net_id不能同时传入。
    *
    * @var string[]
    */
    protected static $setters = [
            'fixedIps' => 'setFixedIps',
            'netId' => 'setNetId',
            'portId' => 'setPortId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fixedIps  私有IP。  有port_id时，该参数不起作用，并且有该参数时，必须有net_id。  只有列表中第一个元素有效。传入两个及以上元素会报错。
    * netId  Network ID。  有port_id时，该参数不起作用。
    * portId  Port ID。  port_id和net_id不能同时传入。
    *
    * @var string[]
    */
    protected static $getters = [
            'fixedIps' => 'getFixedIps',
            'netId' => 'getNetId',
            'portId' => 'getPortId'
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
        $this->container['fixedIps'] = isset($data['fixedIps']) ? $data['fixedIps'] : null;
        $this->container['netId'] = isset($data['netId']) ? $data['netId'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
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
    * Gets fixedIps
    *  私有IP。  有port_id时，该参数不起作用，并且有该参数时，必须有net_id。  只有列表中第一个元素有效。传入两个及以上元素会报错。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaAttachInterfaceFixedIp[]|null
    */
    public function getFixedIps()
    {
        return $this->container['fixedIps'];
    }

    /**
    * Sets fixedIps
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaAttachInterfaceFixedIp[]|null $fixedIps 私有IP。  有port_id时，该参数不起作用，并且有该参数时，必须有net_id。  只有列表中第一个元素有效。传入两个及以上元素会报错。
    *
    * @return $this
    */
    public function setFixedIps($fixedIps)
    {
        $this->container['fixedIps'] = $fixedIps;
        return $this;
    }

    /**
    * Gets netId
    *  Network ID。  有port_id时，该参数不起作用。
    *
    * @return string|null
    */
    public function getNetId()
    {
        return $this->container['netId'];
    }

    /**
    * Sets netId
    *
    * @param string|null $netId Network ID。  有port_id时，该参数不起作用。
    *
    * @return $this
    */
    public function setNetId($netId)
    {
        $this->container['netId'] = $netId;
        return $this;
    }

    /**
    * Gets portId
    *  Port ID。  port_id和net_id不能同时传入。
    *
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId Port ID。  port_id和net_id不能同时传入。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
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

