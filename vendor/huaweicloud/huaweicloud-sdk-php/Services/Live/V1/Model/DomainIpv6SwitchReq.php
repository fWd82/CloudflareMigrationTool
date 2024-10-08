<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainIpv6SwitchReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainIpv6SwitchReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  域名
    * isIpv6  IPV6开关配置，默认关闭，true为开启，false为关闭
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'isIpv6' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  域名
    * isIpv6  IPV6开关配置，默认关闭，true为开启，false为关闭
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'isIpv6' => null
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
    * domain  域名
    * isIpv6  IPV6开关配置，默认关闭，true为开启，false为关闭
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'isIpv6' => 'is_ipv6'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  域名
    * isIpv6  IPV6开关配置，默认关闭，true为开启，false为关闭
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'isIpv6' => 'setIsIpv6'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  域名
    * isIpv6  IPV6开关配置，默认关闭，true为开启，false为关闭
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'isIpv6' => 'getIsIpv6'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['isIpv6'] = isset($data['isIpv6']) ? $data['isIpv6'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
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
    * Gets domain
    *  域名
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets isIpv6
    *  IPV6开关配置，默认关闭，true为开启，false为关闭
    *
    * @return bool|null
    */
    public function getIsIpv6()
    {
        return $this->container['isIpv6'];
    }

    /**
    * Sets isIpv6
    *
    * @param bool|null $isIpv6 IPV6开关配置，默认关闭，true为开启，false为关闭
    *
    * @return $this
    */
    public function setIsIpv6($isIpv6)
    {
        $this->container['isIpv6'] = $isIpv6;
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

