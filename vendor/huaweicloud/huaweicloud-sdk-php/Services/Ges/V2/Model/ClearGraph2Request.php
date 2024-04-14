<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClearGraph2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClearGraph2Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * graphId  图ID。
    * clearMetadata  是否清空图关联的元数据。建议清除。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'graphId' => 'string',
            'clearMetadata' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * graphId  图ID。
    * clearMetadata  是否清空图关联的元数据。建议清除。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'graphId' => null,
        'clearMetadata' => null
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
    * graphId  图ID。
    * clearMetadata  是否清空图关联的元数据。建议清除。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'graphId' => 'graph_id',
            'clearMetadata' => 'clear_metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * graphId  图ID。
    * clearMetadata  是否清空图关联的元数据。建议清除。
    *
    * @var string[]
    */
    protected static $setters = [
            'graphId' => 'setGraphId',
            'clearMetadata' => 'setClearMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * graphId  图ID。
    * clearMetadata  是否清空图关联的元数据。建议清除。
    *
    * @var string[]
    */
    protected static $getters = [
            'graphId' => 'getGraphId',
            'clearMetadata' => 'getClearMetadata'
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
        $this->container['graphId'] = isset($data['graphId']) ? $data['graphId'] : null;
        $this->container['clearMetadata'] = isset($data['clearMetadata']) ? $data['clearMetadata'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['graphId'] === null) {
            $invalidProperties[] = "'graphId' can't be null";
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
    * Gets graphId
    *  图ID。
    *
    * @return string
    */
    public function getGraphId()
    {
        return $this->container['graphId'];
    }

    /**
    * Sets graphId
    *
    * @param string $graphId 图ID。
    *
    * @return $this
    */
    public function setGraphId($graphId)
    {
        $this->container['graphId'] = $graphId;
        return $this;
    }

    /**
    * Gets clearMetadata
    *  是否清空图关联的元数据。建议清除。
    *
    * @return bool|null
    */
    public function getClearMetadata()
    {
        return $this->container['clearMetadata'];
    }

    /**
    * Sets clearMetadata
    *
    * @param bool|null $clearMetadata 是否清空图关联的元数据。建议清除。
    *
    * @return $this
    */
    public function setClearMetadata($clearMetadata)
    {
        $this->container['clearMetadata'] = $clearMetadata;
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

