<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ValidateWeakPasswordResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ValidateWeakPasswordResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isWeakPassword  是否为弱密码。 - 返回\"true\"，是弱密码。 - 返回\"false\"，不是弱密码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isWeakPassword' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isWeakPassword  是否为弱密码。 - 返回\"true\"，是弱密码。 - 返回\"false\"，不是弱密码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isWeakPassword' => null
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
    * isWeakPassword  是否为弱密码。 - 返回\"true\"，是弱密码。 - 返回\"false\"，不是弱密码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isWeakPassword' => 'is_weak_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isWeakPassword  是否为弱密码。 - 返回\"true\"，是弱密码。 - 返回\"false\"，不是弱密码。
    *
    * @var string[]
    */
    protected static $setters = [
            'isWeakPassword' => 'setIsWeakPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isWeakPassword  是否为弱密码。 - 返回\"true\"，是弱密码。 - 返回\"false\"，不是弱密码。
    *
    * @var string[]
    */
    protected static $getters = [
            'isWeakPassword' => 'getIsWeakPassword'
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
        $this->container['isWeakPassword'] = isset($data['isWeakPassword']) ? $data['isWeakPassword'] : null;
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
    * Gets isWeakPassword
    *  是否为弱密码。 - 返回\"true\"，是弱密码。 - 返回\"false\"，不是弱密码。
    *
    * @return bool|null
    */
    public function getIsWeakPassword()
    {
        return $this->container['isWeakPassword'];
    }

    /**
    * Sets isWeakPassword
    *
    * @param bool|null $isWeakPassword 是否为弱密码。 - 返回\"true\"，是弱密码。 - 返回\"false\"，不是弱密码。
    *
    * @return $this
    */
    public function setIsWeakPassword($isWeakPassword)
    {
        $this->container['isWeakPassword'] = $isWeakPassword;
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

