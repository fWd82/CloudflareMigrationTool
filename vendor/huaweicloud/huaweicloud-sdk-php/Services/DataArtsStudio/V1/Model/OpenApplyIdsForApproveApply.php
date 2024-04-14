<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenApplyIdsForApproveApply implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenApplyIdsForApproveApply';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applyResult  申请结果
    * applyIds  申请编号列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applyResult' => 'bool',
            'applyIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applyResult  申请结果
    * applyIds  申请编号列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applyResult' => null,
        'applyIds' => null
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
    * applyResult  申请结果
    * applyIds  申请编号列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applyResult' => 'apply_result',
            'applyIds' => 'apply_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applyResult  申请结果
    * applyIds  申请编号列表
    *
    * @var string[]
    */
    protected static $setters = [
            'applyResult' => 'setApplyResult',
            'applyIds' => 'setApplyIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applyResult  申请结果
    * applyIds  申请编号列表
    *
    * @var string[]
    */
    protected static $getters = [
            'applyResult' => 'getApplyResult',
            'applyIds' => 'getApplyIds'
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
        $this->container['applyResult'] = isset($data['applyResult']) ? $data['applyResult'] : null;
        $this->container['applyIds'] = isset($data['applyIds']) ? $data['applyIds'] : null;
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
    * Gets applyResult
    *  申请结果
    *
    * @return bool|null
    */
    public function getApplyResult()
    {
        return $this->container['applyResult'];
    }

    /**
    * Sets applyResult
    *
    * @param bool|null $applyResult 申请结果
    *
    * @return $this
    */
    public function setApplyResult($applyResult)
    {
        $this->container['applyResult'] = $applyResult;
        return $this;
    }

    /**
    * Gets applyIds
    *  申请编号列表
    *
    * @return string[]|null
    */
    public function getApplyIds()
    {
        return $this->container['applyIds'];
    }

    /**
    * Sets applyIds
    *
    * @param string[]|null $applyIds 申请编号列表
    *
    * @return $this
    */
    public function setApplyIds($applyIds)
    {
        $this->container['applyIds'] = $applyIds;
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

