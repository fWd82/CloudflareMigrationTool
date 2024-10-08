<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRetentionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRetentionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * algorithm  老化规则匹配策略，固定为\"or\"
    * rules  镜像老化规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'algorithm' => 'string',
            'rules' => '\HuaweiCloud\SDK\Swr\V2\Model\Rule[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * algorithm  老化规则匹配策略，固定为\"or\"
    * rules  镜像老化规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'algorithm' => null,
        'rules' => null
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
    * algorithm  老化规则匹配策略，固定为\"or\"
    * rules  镜像老化规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'algorithm' => 'algorithm',
            'rules' => 'rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * algorithm  老化规则匹配策略，固定为\"or\"
    * rules  镜像老化规则
    *
    * @var string[]
    */
    protected static $setters = [
            'algorithm' => 'setAlgorithm',
            'rules' => 'setRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * algorithm  老化规则匹配策略，固定为\"or\"
    * rules  镜像老化规则
    *
    * @var string[]
    */
    protected static $getters = [
            'algorithm' => 'getAlgorithm',
            'rules' => 'getRules'
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
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['algorithm'] === null) {
            $invalidProperties[] = "'algorithm' can't be null";
        }
        if ($this->container['rules'] === null) {
            $invalidProperties[] = "'rules' can't be null";
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
    * Gets algorithm
    *  老化规则匹配策略，固定为\"or\"
    *
    * @return string
    */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
    * Sets algorithm
    *
    * @param string $algorithm 老化规则匹配策略，固定为\"or\"
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
        return $this;
    }

    /**
    * Gets rules
    *  镜像老化规则
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\Rule[]
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\Rule[] $rules 镜像老化规则
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
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

