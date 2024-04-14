<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTtsAuditionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTtsAuditionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * text  待合成文本。
    * emotion  音色ID。
    * speed  语速。
    * pitch  音高。
    * volume  音量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'text' => 'string',
            'emotion' => 'string',
            'speed' => 'int',
            'pitch' => 'int',
            'volume' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * text  待合成文本。
    * emotion  音色ID。
    * speed  语速。
    * pitch  音高。
    * volume  音量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'text' => null,
        'emotion' => null,
        'speed' => 'int32',
        'pitch' => 'int32',
        'volume' => 'int32'
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
    * text  待合成文本。
    * emotion  音色ID。
    * speed  语速。
    * pitch  音高。
    * volume  音量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'text' => 'text',
            'emotion' => 'emotion',
            'speed' => 'speed',
            'pitch' => 'pitch',
            'volume' => 'volume'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * text  待合成文本。
    * emotion  音色ID。
    * speed  语速。
    * pitch  音高。
    * volume  音量。
    *
    * @var string[]
    */
    protected static $setters = [
            'text' => 'setText',
            'emotion' => 'setEmotion',
            'speed' => 'setSpeed',
            'pitch' => 'setPitch',
            'volume' => 'setVolume'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * text  待合成文本。
    * emotion  音色ID。
    * speed  语速。
    * pitch  音高。
    * volume  音量。
    *
    * @var string[]
    */
    protected static $getters = [
            'text' => 'getText',
            'emotion' => 'getEmotion',
            'speed' => 'getSpeed',
            'pitch' => 'getPitch',
            'volume' => 'getVolume'
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['emotion'] = isset($data['emotion']) ? $data['emotion'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['pitch'] = isset($data['pitch']) ? $data['pitch'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
            if ((mb_strlen($this->container['text']) > 32768)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['text']) < 0)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['emotion'] === null) {
            $invalidProperties[] = "'emotion' can't be null";
        }
            if ((mb_strlen($this->container['emotion']) > 64)) {
                $invalidProperties[] = "invalid value for 'emotion', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['emotion']) < 1)) {
                $invalidProperties[] = "invalid value for 'emotion', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9-_]+$/", $this->container['emotion'])) {
                $invalidProperties[] = "invalid value for 'emotion', must be conform to the pattern /^[a-zA-Z0-9-_]+$/.";
            }
            if (!is_null($this->container['speed']) && ($this->container['speed'] > 200)) {
                $invalidProperties[] = "invalid value for 'speed', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['speed']) && ($this->container['speed'] < 50)) {
                $invalidProperties[] = "invalid value for 'speed', must be bigger than or equal to 50.";
            }
            if (!is_null($this->container['pitch']) && ($this->container['pitch'] > 200)) {
                $invalidProperties[] = "invalid value for 'pitch', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['pitch']) && ($this->container['pitch'] < 50)) {
                $invalidProperties[] = "invalid value for 'pitch', must be bigger than or equal to 50.";
            }
            if (!is_null($this->container['volume']) && ($this->container['volume'] > 240)) {
                $invalidProperties[] = "invalid value for 'volume', must be smaller than or equal to 240.";
            }
            if (!is_null($this->container['volume']) && ($this->container['volume'] < 90)) {
                $invalidProperties[] = "invalid value for 'volume', must be bigger than or equal to 90.";
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
    * Gets text
    *  待合成文本。
    *
    * @return string
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string $text 待合成文本。
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets emotion
    *  音色ID。
    *
    * @return string
    */
    public function getEmotion()
    {
        return $this->container['emotion'];
    }

    /**
    * Sets emotion
    *
    * @param string $emotion 音色ID。
    *
    * @return $this
    */
    public function setEmotion($emotion)
    {
        $this->container['emotion'] = $emotion;
        return $this;
    }

    /**
    * Gets speed
    *  语速。
    *
    * @return int|null
    */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
    * Sets speed
    *
    * @param int|null $speed 语速。
    *
    * @return $this
    */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;
        return $this;
    }

    /**
    * Gets pitch
    *  音高。
    *
    * @return int|null
    */
    public function getPitch()
    {
        return $this->container['pitch'];
    }

    /**
    * Sets pitch
    *
    * @param int|null $pitch 音高。
    *
    * @return $this
    */
    public function setPitch($pitch)
    {
        $this->container['pitch'] = $pitch;
        return $this;
    }

    /**
    * Gets volume
    *  音量。
    *
    * @return int|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param int|null $volume 音量。
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
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

