<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadLogRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadLogRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logBucket  指定桶名称
    * logExpire  指定有效期
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logBucket' => 'string',
            'logExpire' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logBucket  指定桶名称
    * logExpire  指定有效期
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logBucket' => null,
        'logExpire' => 'int32'
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
    * logBucket  指定桶名称
    * logExpire  指定有效期
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logBucket' => 'log_bucket',
            'logExpire' => 'log_expire'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logBucket  指定桶名称
    * logExpire  指定有效期
    *
    * @var string[]
    */
    protected static $setters = [
            'logBucket' => 'setLogBucket',
            'logExpire' => 'setLogExpire'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logBucket  指定桶名称
    * logExpire  指定有效期
    *
    * @var string[]
    */
    protected static $getters = [
            'logBucket' => 'getLogBucket',
            'logExpire' => 'getLogExpire'
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
        $this->container['logBucket'] = isset($data['logBucket']) ? $data['logBucket'] : null;
        $this->container['logExpire'] = isset($data['logExpire']) ? $data['logExpire'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logBucket'] === null) {
            $invalidProperties[] = "'logBucket' can't be null";
        }
            if ((mb_strlen($this->container['logBucket']) > 255)) {
                $invalidProperties[] = "invalid value for 'logBucket', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['logBucket']) < 0)) {
                $invalidProperties[] = "invalid value for 'logBucket', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['logExpire'] === null) {
            $invalidProperties[] = "'logExpire' can't be null";
        }
            if (($this->container['logExpire'] > 64800)) {
                $invalidProperties[] = "invalid value for 'logExpire', must be smaller than or equal to 64800.";
            }
            if (($this->container['logExpire'] < 300)) {
                $invalidProperties[] = "invalid value for 'logExpire', must be bigger than or equal to 300.";
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
    * Gets logBucket
    *  指定桶名称
    *
    * @return string
    */
    public function getLogBucket()
    {
        return $this->container['logBucket'];
    }

    /**
    * Sets logBucket
    *
    * @param string $logBucket 指定桶名称
    *
    * @return $this
    */
    public function setLogBucket($logBucket)
    {
        $this->container['logBucket'] = $logBucket;
        return $this;
    }

    /**
    * Gets logExpire
    *  指定有效期
    *
    * @return int
    */
    public function getLogExpire()
    {
        return $this->container['logExpire'];
    }

    /**
    * Sets logExpire
    *
    * @param int $logExpire 指定有效期
    *
    * @return $this
    */
    public function setLogExpire($logExpire)
    {
        $this->container['logExpire'] = $logExpire;
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

