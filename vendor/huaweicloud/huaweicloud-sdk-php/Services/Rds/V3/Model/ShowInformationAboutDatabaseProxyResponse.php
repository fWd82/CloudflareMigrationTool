<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInformationAboutDatabaseProxyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInformationAboutDatabaseProxyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * proxy  proxy
    * masterInstance  masterInstance
    * readonlyInstances  只读实例信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'proxy' => '\HuaweiCloud\SDK\Rds\V3\Model\Proxy',
            'masterInstance' => '\HuaweiCloud\SDK\Rds\V3\Model\MasterInstance',
            'readonlyInstances' => '\HuaweiCloud\SDK\Rds\V3\Model\ReadonlyInstances[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * proxy  proxy
    * masterInstance  masterInstance
    * readonlyInstances  只读实例信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'proxy' => null,
        'masterInstance' => null,
        'readonlyInstances' => null
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
    * proxy  proxy
    * masterInstance  masterInstance
    * readonlyInstances  只读实例信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'proxy' => 'proxy',
            'masterInstance' => 'master_instance',
            'readonlyInstances' => 'readonly_instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * proxy  proxy
    * masterInstance  masterInstance
    * readonlyInstances  只读实例信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'proxy' => 'setProxy',
            'masterInstance' => 'setMasterInstance',
            'readonlyInstances' => 'setReadonlyInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * proxy  proxy
    * masterInstance  masterInstance
    * readonlyInstances  只读实例信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'proxy' => 'getProxy',
            'masterInstance' => 'getMasterInstance',
            'readonlyInstances' => 'getReadonlyInstances'
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
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['masterInstance'] = isset($data['masterInstance']) ? $data['masterInstance'] : null;
        $this->container['readonlyInstances'] = isset($data['readonlyInstances']) ? $data['readonlyInstances'] : null;
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
    * Gets proxy
    *  proxy
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\Proxy|null
    */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
    * Sets proxy
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\Proxy|null $proxy proxy
    *
    * @return $this
    */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;
        return $this;
    }

    /**
    * Gets masterInstance
    *  masterInstance
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\MasterInstance|null
    */
    public function getMasterInstance()
    {
        return $this->container['masterInstance'];
    }

    /**
    * Sets masterInstance
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\MasterInstance|null $masterInstance masterInstance
    *
    * @return $this
    */
    public function setMasterInstance($masterInstance)
    {
        $this->container['masterInstance'] = $masterInstance;
        return $this;
    }

    /**
    * Gets readonlyInstances
    *  只读实例信息。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ReadonlyInstances[]|null
    */
    public function getReadonlyInstances()
    {
        return $this->container['readonlyInstances'];
    }

    /**
    * Sets readonlyInstances
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ReadonlyInstances[]|null $readonlyInstances 只读实例信息。
    *
    * @return $this
    */
    public function setReadonlyInstances($readonlyInstances)
    {
        $this->container['readonlyInstances'] = $readonlyInstances;
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

