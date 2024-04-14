<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartDocumentRecognizerOcrResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartDocumentRecognizerOcrResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * direction  图片朝向
    * wordsBlockCount  识别文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'direction' => 'float',
            'wordsBlockCount' => 'int',
            'wordsBlockList' => '\HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerWordsBlockList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * direction  图片朝向
    * wordsBlockCount  识别文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'direction' => 'float',
        'wordsBlockCount' => 'int32',
        'wordsBlockList' => null
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
    * direction  图片朝向
    * wordsBlockCount  识别文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'direction' => 'direction',
            'wordsBlockCount' => 'words_block_count',
            'wordsBlockList' => 'words_block_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * direction  图片朝向
    * wordsBlockCount  识别文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $setters = [
            'direction' => 'setDirection',
            'wordsBlockCount' => 'setWordsBlockCount',
            'wordsBlockList' => 'setWordsBlockList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * direction  图片朝向
    * wordsBlockCount  识别文字块数目。
    * wordsBlockList  识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $getters = [
            'direction' => 'getDirection',
            'wordsBlockCount' => 'getWordsBlockCount',
            'wordsBlockList' => 'getWordsBlockList'
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
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['wordsBlockCount'] = isset($data['wordsBlockCount']) ? $data['wordsBlockCount'] : null;
        $this->container['wordsBlockList'] = isset($data['wordsBlockList']) ? $data['wordsBlockList'] : null;
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
    * Gets direction
    *  图片朝向
    *
    * @return float|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param float|null $direction 图片朝向
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets wordsBlockCount
    *  识别文字块数目。
    *
    * @return int|null
    */
    public function getWordsBlockCount()
    {
        return $this->container['wordsBlockCount'];
    }

    /**
    * Sets wordsBlockCount
    *
    * @param int|null $wordsBlockCount 识别文字块数目。
    *
    * @return $this
    */
    public function setWordsBlockCount($wordsBlockCount)
    {
        $this->container['wordsBlockCount'] = $wordsBlockCount;
        return $this;
    }

    /**
    * Gets wordsBlockList
    *  识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerWordsBlockList[]|null
    */
    public function getWordsBlockList()
    {
        return $this->container['wordsBlockList'];
    }

    /**
    * Sets wordsBlockList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\SmartDocumentRecognizerWordsBlockList[]|null $wordsBlockList 识别文字块列表，输出顺序从左到右，先上后下。
    *
    * @return $this
    */
    public function setWordsBlockList($wordsBlockList)
    {
        $this->container['wordsBlockList'] = $wordsBlockList;
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

