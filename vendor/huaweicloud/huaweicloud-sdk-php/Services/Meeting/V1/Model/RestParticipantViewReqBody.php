<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestParticipantViewReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestParticipantViewReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * viewType  选看类型。 - 2: 选看会场
    * participantId  被选看的与会者标识。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'viewType' => 'int',
            'participantId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * viewType  选看类型。 - 2: 选看会场
    * participantId  被选看的与会者标识。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'viewType' => 'int32',
        'participantId' => null
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
    * viewType  选看类型。 - 2: 选看会场
    * participantId  被选看的与会者标识。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'viewType' => 'viewType',
            'participantId' => 'participantID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * viewType  选看类型。 - 2: 选看会场
    * participantId  被选看的与会者标识。
    *
    * @var string[]
    */
    protected static $setters = [
            'viewType' => 'setViewType',
            'participantId' => 'setParticipantId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * viewType  选看类型。 - 2: 选看会场
    * participantId  被选看的与会者标识。
    *
    * @var string[]
    */
    protected static $getters = [
            'viewType' => 'getViewType',
            'participantId' => 'getParticipantId'
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
        $this->container['viewType'] = isset($data['viewType']) ? $data['viewType'] : null;
        $this->container['participantId'] = isset($data['participantId']) ? $data['participantId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['viewType'] === null) {
            $invalidProperties[] = "'viewType' can't be null";
        }
        if ($this->container['participantId'] === null) {
            $invalidProperties[] = "'participantId' can't be null";
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
    * Gets viewType
    *  选看类型。 - 2: 选看会场
    *
    * @return int
    */
    public function getViewType()
    {
        return $this->container['viewType'];
    }

    /**
    * Sets viewType
    *
    * @param int $viewType 选看类型。 - 2: 选看会场
    *
    * @return $this
    */
    public function setViewType($viewType)
    {
        $this->container['viewType'] = $viewType;
        return $this;
    }

    /**
    * Gets participantId
    *  被选看的与会者标识。
    *
    * @return string
    */
    public function getParticipantId()
    {
        return $this->container['participantId'];
    }

    /**
    * Sets participantId
    *
    * @param string $participantId 被选看的与会者标识。
    *
    * @return $this
    */
    public function setParticipantId($participantId)
    {
        $this->container['participantId'] = $participantId;
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

