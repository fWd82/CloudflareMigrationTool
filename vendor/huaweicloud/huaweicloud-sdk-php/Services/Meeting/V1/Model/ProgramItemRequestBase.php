<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProgramItemRequestBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProgramItemRequestBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * materialId  素材ID。
    * playTime  播放时长。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'materialId' => 'string',
            'playTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * materialId  素材ID。
    * playTime  播放时长。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'materialId' => null,
        'playTime' => null
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
    * materialId  素材ID。
    * playTime  播放时长。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'materialId' => 'materialId',
            'playTime' => 'playTime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * materialId  素材ID。
    * playTime  播放时长。
    *
    * @var string[]
    */
    protected static $setters = [
            'materialId' => 'setMaterialId',
            'playTime' => 'setPlayTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * materialId  素材ID。
    * playTime  播放时长。
    *
    * @var string[]
    */
    protected static $getters = [
            'materialId' => 'getMaterialId',
            'playTime' => 'getPlayTime'
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
        $this->container['materialId'] = isset($data['materialId']) ? $data['materialId'] : null;
        $this->container['playTime'] = isset($data['playTime']) ? $data['playTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['materialId'] === null) {
            $invalidProperties[] = "'materialId' can't be null";
        }
        if ($this->container['playTime'] === null) {
            $invalidProperties[] = "'playTime' can't be null";
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
    * Gets materialId
    *  素材ID。
    *
    * @return string
    */
    public function getMaterialId()
    {
        return $this->container['materialId'];
    }

    /**
    * Sets materialId
    *
    * @param string $materialId 素材ID。
    *
    * @return $this
    */
    public function setMaterialId($materialId)
    {
        $this->container['materialId'] = $materialId;
        return $this;
    }

    /**
    * Gets playTime
    *  播放时长。
    *
    * @return int
    */
    public function getPlayTime()
    {
        return $this->container['playTime'];
    }

    /**
    * Sets playTime
    *
    * @param int $playTime 播放时长。
    *
    * @return $this
    */
    public function setPlayTime($playTime)
    {
        $this->container['playTime'] = $playTime;
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

