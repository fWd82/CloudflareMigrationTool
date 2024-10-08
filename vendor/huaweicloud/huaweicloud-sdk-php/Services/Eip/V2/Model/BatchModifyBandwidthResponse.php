<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchModifyBandwidthResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchModifyBandwidthResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * successResources  成功资源
    * failureResources  失败资源
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'successResources' => '\HuaweiCloud\SDK\Eip\V2\Model\SuccessResources[]',
            'failureResources' => '\HuaweiCloud\SDK\Eip\V2\Model\FailureResources[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * successResources  成功资源
    * failureResources  失败资源
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'successResources' => null,
        'failureResources' => null
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
    * successResources  成功资源
    * failureResources  失败资源
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'successResources' => 'success_resources',
            'failureResources' => 'failure_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * successResources  成功资源
    * failureResources  失败资源
    *
    * @var string[]
    */
    protected static $setters = [
            'successResources' => 'setSuccessResources',
            'failureResources' => 'setFailureResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * successResources  成功资源
    * failureResources  失败资源
    *
    * @var string[]
    */
    protected static $getters = [
            'successResources' => 'getSuccessResources',
            'failureResources' => 'getFailureResources'
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
        $this->container['successResources'] = isset($data['successResources']) ? $data['successResources'] : null;
        $this->container['failureResources'] = isset($data['failureResources']) ? $data['failureResources'] : null;
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
    * Gets successResources
    *  成功资源
    *
    * @return \HuaweiCloud\SDK\Eip\V2\Model\SuccessResources[]|null
    */
    public function getSuccessResources()
    {
        return $this->container['successResources'];
    }

    /**
    * Sets successResources
    *
    * @param \HuaweiCloud\SDK\Eip\V2\Model\SuccessResources[]|null $successResources 成功资源
    *
    * @return $this
    */
    public function setSuccessResources($successResources)
    {
        $this->container['successResources'] = $successResources;
        return $this;
    }

    /**
    * Gets failureResources
    *  失败资源
    *
    * @return \HuaweiCloud\SDK\Eip\V2\Model\FailureResources[]|null
    */
    public function getFailureResources()
    {
        return $this->container['failureResources'];
    }

    /**
    * Sets failureResources
    *
    * @param \HuaweiCloud\SDK\Eip\V2\Model\FailureResources[]|null $failureResources 失败资源
    *
    * @return $this
    */
    public function setFailureResources($failureResources)
    {
        $this->container['failureResources'] = $failureResources;
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

