<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentStorage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentStorage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  type
    * parameters  parameters
    * mounts  mounts
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'parameters' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\StorageParameter',
            'mounts' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentMount[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  type
    * parameters  parameters
    * mounts  mounts
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'parameters' => null,
        'mounts' => null
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
    * type  type
    * parameters  parameters
    * mounts  mounts
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'parameters' => 'parameters',
            'mounts' => 'mounts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  type
    * parameters  parameters
    * mounts  mounts
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'parameters' => 'setParameters',
            'mounts' => 'setMounts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  type
    * parameters  parameters
    * mounts  mounts
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'parameters' => 'getParameters',
            'mounts' => 'getMounts'
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
    const TYPE_HOST_PATH = 'HostPath';
    const TYPE_EMPTY_DIR = 'EmptyDir';
    const TYPE_CONFIG_MAP = 'ConfigMap';
    const TYPE_SECRET = 'Secret';
    const TYPE_PERSISTENT_VOLUME_CLAIM = 'PersistentVolumeClaim';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_HOST_PATH,
            self::TYPE_EMPTY_DIR,
            self::TYPE_CONFIG_MAP,
            self::TYPE_SECRET,
            self::TYPE_PERSISTENT_VOLUME_CLAIM,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['mounts'] = isset($data['mounts']) ? $data['mounts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['parameters'] === null) {
            $invalidProperties[] = "'parameters' can't be null";
        }
        if ($this->container['mounts'] === null) {
            $invalidProperties[] = "'mounts' can't be null";
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
    * Gets type
    *  type
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets parameters
    *  parameters
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\StorageParameter
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\StorageParameter $parameters parameters
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets mounts
    *  mounts
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentMount[]
    */
    public function getMounts()
    {
        return $this->container['mounts'];
    }

    /**
    * Sets mounts
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentMount[] $mounts mounts
    *
    * @return $this
    */
    public function setMounts($mounts)
    {
        $this->container['mounts'] = $mounts;
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

