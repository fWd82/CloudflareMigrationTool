<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateIncreBackupPolicy1RequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateIncreBackupPolicy1RequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * increBackupPolicy  increBackupPolicy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'increBackupPolicy' => '\HuaweiCloud\SDK\Rds\V3\Model\ShowIncreBackupPolicyRespBodyIncreBackupPolicy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * increBackupPolicy  increBackupPolicy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'increBackupPolicy' => null
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
    * increBackupPolicy  increBackupPolicy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'increBackupPolicy' => 'incre_backup_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * increBackupPolicy  increBackupPolicy
    *
    * @var string[]
    */
    protected static $setters = [
            'increBackupPolicy' => 'setIncreBackupPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * increBackupPolicy  increBackupPolicy
    *
    * @var string[]
    */
    protected static $getters = [
            'increBackupPolicy' => 'getIncreBackupPolicy'
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
        $this->container['increBackupPolicy'] = isset($data['increBackupPolicy']) ? $data['increBackupPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['increBackupPolicy'] === null) {
            $invalidProperties[] = "'increBackupPolicy' can't be null";
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
    * Gets increBackupPolicy
    *  increBackupPolicy
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ShowIncreBackupPolicyRespBodyIncreBackupPolicy
    */
    public function getIncreBackupPolicy()
    {
        return $this->container['increBackupPolicy'];
    }

    /**
    * Sets increBackupPolicy
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ShowIncreBackupPolicyRespBodyIncreBackupPolicy $increBackupPolicy increBackupPolicy
    *
    * @return $this
    */
    public function setIncreBackupPolicy($increBackupPolicy)
    {
        $this->container['increBackupPolicy'] = $increBackupPolicy;
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

