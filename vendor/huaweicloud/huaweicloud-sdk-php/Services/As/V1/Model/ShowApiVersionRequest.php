<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowApiVersionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowApiVersionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiVersion  API版本ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiVersion  API版本ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiVersion' => null
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
    * apiVersion  API版本ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiVersion' => 'api_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiVersion  API版本ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'apiVersion' => 'setApiVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiVersion  API版本ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'apiVersion' => 'getApiVersion'
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
    const API_VERSION_V1 = 'v1';
    const API_VERSION_V2 = 'v2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiVersionAllowableValues()
    {
        return [
            self::API_VERSION_V1,
            self::API_VERSION_V2,
        ];
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
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['apiVersion'] === null) {
            $invalidProperties[] = "'apiVersion' can't be null";
        }
            $allowedValues = $this->getApiVersionAllowableValues();
                if (!is_null($this->container['apiVersion']) && !in_array($this->container['apiVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets apiVersion
    *  API版本ID。
    *
    * @return string
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string $apiVersion API版本ID。
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
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

