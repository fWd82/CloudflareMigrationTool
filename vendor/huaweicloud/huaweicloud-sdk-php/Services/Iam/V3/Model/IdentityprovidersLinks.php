<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdentityprovidersLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdentityprovidersLinks';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * self  身份提供商的资源链接地址。
    * protocols  协议的资源链接地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'self' => 'string',
            'protocols' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * self  身份提供商的资源链接地址。
    * protocols  协议的资源链接地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'self' => null,
        'protocols' => null
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
    * self  身份提供商的资源链接地址。
    * protocols  协议的资源链接地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'self' => 'self',
            'protocols' => 'protocols'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * self  身份提供商的资源链接地址。
    * protocols  协议的资源链接地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'self' => 'setSelf',
            'protocols' => 'setProtocols'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * self  身份提供商的资源链接地址。
    * protocols  协议的资源链接地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'self' => 'getSelf',
            'protocols' => 'getProtocols'
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
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['protocols'] = isset($data['protocols']) ? $data['protocols'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['self'] === null) {
            $invalidProperties[] = "'self' can't be null";
        }
        if ($this->container['protocols'] === null) {
            $invalidProperties[] = "'protocols' can't be null";
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
    * Gets self
    *  身份提供商的资源链接地址。
    *
    * @return string
    */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
    * Sets self
    *
    * @param string $self 身份提供商的资源链接地址。
    *
    * @return $this
    */
    public function setSelf($self)
    {
        $this->container['self'] = $self;
        return $this;
    }

    /**
    * Gets protocols
    *  协议的资源链接地址。
    *
    * @return string
    */
    public function getProtocols()
    {
        return $this->container['protocols'];
    }

    /**
    * Sets protocols
    *
    * @param string $protocols 协议的资源链接地址。
    *
    * @return $this
    */
    public function setProtocols($protocols)
    {
        $this->container['protocols'] = $protocols;
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

