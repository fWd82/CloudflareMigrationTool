<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicIp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicIp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  弹性IP和EIP只能有一个，弹性IP或EIP的ID。
    * publicEip  弹性IP地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'publicEip' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  弹性IP和EIP只能有一个，弹性IP或EIP的ID。
    * publicEip  弹性IP地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'publicEip' => null
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
    * id  弹性IP和EIP只能有一个，弹性IP或EIP的ID。
    * publicEip  弹性IP地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'publicEip' => 'public_eip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  弹性IP和EIP只能有一个，弹性IP或EIP的ID。
    * publicEip  弹性IP地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'publicEip' => 'setPublicEip'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  弹性IP和EIP只能有一个，弹性IP或EIP的ID。
    * publicEip  弹性IP地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'publicEip' => 'getPublicEip'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['publicEip'] = isset($data['publicEip']) ? $data['publicEip'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicEip']) && (mb_strlen($this->container['publicEip']) > 512)) {
                $invalidProperties[] = "invalid value for 'publicEip', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['publicEip']) && (mb_strlen($this->container['publicEip']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicEip', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  弹性IP和EIP只能有一个，弹性IP或EIP的ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 弹性IP和EIP只能有一个，弹性IP或EIP的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets publicEip
    *  弹性IP地址。
    *
    * @return string|null
    */
    public function getPublicEip()
    {
        return $this->container['publicEip'];
    }

    /**
    * Sets publicEip
    *
    * @param string|null $publicEip 弹性IP地址。
    *
    * @return $this
    */
    public function setPublicEip($publicEip)
    {
        $this->container['publicEip'] = $publicEip;
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

