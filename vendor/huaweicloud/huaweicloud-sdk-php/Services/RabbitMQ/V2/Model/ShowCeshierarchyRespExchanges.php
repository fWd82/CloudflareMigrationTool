<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCeshierarchyRespExchanges implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCeshierarchyResp_exchanges';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  exchange名称。
    * vhost  对应的vhost。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'vhost' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  exchange名称。
    * vhost  对应的vhost。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'vhost' => null
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
    * name  exchange名称。
    * vhost  对应的vhost。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'vhost' => 'vhost'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  exchange名称。
    * vhost  对应的vhost。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'vhost' => 'setVhost'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  exchange名称。
    * vhost  对应的vhost。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'vhost' => 'getVhost'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['vhost'] = isset($data['vhost']) ? $data['vhost'] : null;
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
    * Gets name
    *  exchange名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name exchange名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets vhost
    *  对应的vhost。
    *
    * @return string|null
    */
    public function getVhost()
    {
        return $this->container['vhost'];
    }

    /**
    * Sets vhost
    *
    * @param string|null $vhost 对应的vhost。
    *
    * @return $this
    */
    public function setVhost($vhost)
    {
        $this->container['vhost'] = $vhost;
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

