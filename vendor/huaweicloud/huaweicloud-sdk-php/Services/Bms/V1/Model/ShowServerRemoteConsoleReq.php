<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowServerRemoteConsoleReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowServerRemoteConsoleReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * remoteConsole  remoteConsole
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'remoteConsole' => '\HuaweiCloud\SDK\Bms\V1\Model\RemoteConsole'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * remoteConsole  remoteConsole
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'remoteConsole' => null
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
    * remoteConsole  remoteConsole
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'remoteConsole' => 'remote_console'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * remoteConsole  remoteConsole
    *
    * @var string[]
    */
    protected static $setters = [
            'remoteConsole' => 'setRemoteConsole'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * remoteConsole  remoteConsole
    *
    * @var string[]
    */
    protected static $getters = [
            'remoteConsole' => 'getRemoteConsole'
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
        $this->container['remoteConsole'] = isset($data['remoteConsole']) ? $data['remoteConsole'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['remoteConsole'] === null) {
            $invalidProperties[] = "'remoteConsole' can't be null";
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
    * Gets remoteConsole
    *  remoteConsole
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\RemoteConsole
    */
    public function getRemoteConsole()
    {
        return $this->container['remoteConsole'];
    }

    /**
    * Sets remoteConsole
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\RemoteConsole $remoteConsole remoteConsole
    *
    * @return $this
    */
    public function setRemoteConsole($remoteConsole)
    {
        $this->container['remoteConsole'] = $remoteConsole;
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

