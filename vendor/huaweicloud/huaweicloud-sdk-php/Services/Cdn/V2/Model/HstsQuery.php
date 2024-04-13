<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HstsQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HstsQuery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  状态，on：打开，off：关闭。
    * maxAge  过期时间,即：响应头“Strict-Transport-Security”在客户端的缓存时间。单位:秒。
    * includeSubdomains  包含子域名，on：包含，off：不包含。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'maxAge' => 'int',
            'includeSubdomains' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  状态，on：打开，off：关闭。
    * maxAge  过期时间,即：响应头“Strict-Transport-Security”在客户端的缓存时间。单位:秒。
    * includeSubdomains  包含子域名，on：包含，off：不包含。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'maxAge' => 'int32',
        'includeSubdomains' => null
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
    * status  状态，on：打开，off：关闭。
    * maxAge  过期时间,即：响应头“Strict-Transport-Security”在客户端的缓存时间。单位:秒。
    * includeSubdomains  包含子域名，on：包含，off：不包含。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'maxAge' => 'max_age',
            'includeSubdomains' => 'include_subdomains'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  状态，on：打开，off：关闭。
    * maxAge  过期时间,即：响应头“Strict-Transport-Security”在客户端的缓存时间。单位:秒。
    * includeSubdomains  包含子域名，on：包含，off：不包含。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'maxAge' => 'setMaxAge',
            'includeSubdomains' => 'setIncludeSubdomains'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  状态，on：打开，off：关闭。
    * maxAge  过期时间,即：响应头“Strict-Transport-Security”在客户端的缓存时间。单位:秒。
    * includeSubdomains  包含子域名，on：包含，off：不包含。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'maxAge' => 'getMaxAge',
            'includeSubdomains' => 'getIncludeSubdomains'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['maxAge'] = isset($data['maxAge']) ? $data['maxAge'] : null;
        $this->container['includeSubdomains'] = isset($data['includeSubdomains']) ? $data['includeSubdomains'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets status
    *  状态，on：打开，off：关闭。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态，on：打开，off：关闭。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets maxAge
    *  过期时间,即：响应头“Strict-Transport-Security”在客户端的缓存时间。单位:秒。
    *
    * @return int|null
    */
    public function getMaxAge()
    {
        return $this->container['maxAge'];
    }

    /**
    * Sets maxAge
    *
    * @param int|null $maxAge 过期时间,即：响应头“Strict-Transport-Security”在客户端的缓存时间。单位:秒。
    *
    * @return $this
    */
    public function setMaxAge($maxAge)
    {
        $this->container['maxAge'] = $maxAge;
        return $this;
    }

    /**
    * Gets includeSubdomains
    *  包含子域名，on：包含，off：不包含。
    *
    * @return string|null
    */
    public function getIncludeSubdomains()
    {
        return $this->container['includeSubdomains'];
    }

    /**
    * Sets includeSubdomains
    *
    * @param string|null $includeSubdomains 包含子域名，on：包含，off：不包含。
    *
    * @return $this
    */
    public function setIncludeSubdomains($includeSubdomains)
    {
        $this->container['includeSubdomains'] = $includeSubdomains;
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

