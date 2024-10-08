<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachInternetBandwidthGlobalEipRequestBodyGlobalEip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachInternetBandwidthGlobalEipRequestBody_global_eip';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * internetBandwidthId  全域公网带宽的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'internetBandwidthId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * internetBandwidthId  全域公网带宽的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'internetBandwidthId' => null
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
    * internetBandwidthId  全域公网带宽的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'internetBandwidthId' => 'internet_bandwidth_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * internetBandwidthId  全域公网带宽的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'internetBandwidthId' => 'setInternetBandwidthId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * internetBandwidthId  全域公网带宽的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'internetBandwidthId' => 'getInternetBandwidthId'
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
        $this->container['internetBandwidthId'] = isset($data['internetBandwidthId']) ? $data['internetBandwidthId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['internetBandwidthId'] === null) {
            $invalidProperties[] = "'internetBandwidthId' can't be null";
        }
            if ((mb_strlen($this->container['internetBandwidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'internetBandwidthId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['internetBandwidthId']) < 1)) {
                $invalidProperties[] = "invalid value for 'internetBandwidthId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['internetBandwidthId'])) {
                $invalidProperties[] = "invalid value for 'internetBandwidthId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets internetBandwidthId
    *  全域公网带宽的ID
    *
    * @return string
    */
    public function getInternetBandwidthId()
    {
        return $this->container['internetBandwidthId'];
    }

    /**
    * Sets internetBandwidthId
    *
    * @param string $internetBandwidthId 全域公网带宽的ID
    *
    * @return $this
    */
    public function setInternetBandwidthId($internetBandwidthId)
    {
        $this->container['internetBandwidthId'] = $internetBandwidthId;
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

