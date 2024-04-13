<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TranscriberResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TranscriberResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * text  识别结果文本。
    * analysisInfo  analysisInfo
    * wordInfo  分词输出列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'text' => 'string',
            'analysisInfo' => '\HuaweiCloud\SDK\Sis\V1\Model\AnalysisInfoResult',
            'wordInfo' => '\HuaweiCloud\SDK\Sis\V1\Model\WordInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * text  识别结果文本。
    * analysisInfo  analysisInfo
    * wordInfo  分词输出列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'text' => null,
        'analysisInfo' => null,
        'wordInfo' => null
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
    * text  识别结果文本。
    * analysisInfo  analysisInfo
    * wordInfo  分词输出列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'text' => 'text',
            'analysisInfo' => 'analysis_info',
            'wordInfo' => 'word_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * text  识别结果文本。
    * analysisInfo  analysisInfo
    * wordInfo  分词输出列表
    *
    * @var string[]
    */
    protected static $setters = [
            'text' => 'setText',
            'analysisInfo' => 'setAnalysisInfo',
            'wordInfo' => 'setWordInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * text  识别结果文本。
    * analysisInfo  analysisInfo
    * wordInfo  分词输出列表
    *
    * @var string[]
    */
    protected static $getters = [
            'text' => 'getText',
            'analysisInfo' => 'getAnalysisInfo',
            'wordInfo' => 'getWordInfo'
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
        $this->container['analysisInfo'] = isset($data['analysisInfo']) ? $data['analysisInfo'] : null;
        $this->container['wordInfo'] = isset($data['wordInfo']) ? $data['wordInfo'] : null;
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
    *  识别结果文本。
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
    * @param string $text 识别结果文本。
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets analysisInfo
    *  analysisInfo
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\AnalysisInfoResult|null
    */
    public function getAnalysisInfo()
    {
        return $this->container['analysisInfo'];
    }

    /**
    * Sets analysisInfo
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\AnalysisInfoResult|null $analysisInfo analysisInfo
    *
    * @return $this
    */
    public function setAnalysisInfo($analysisInfo)
    {
        $this->container['analysisInfo'] = $analysisInfo;
        return $this;
    }

    /**
    * Gets wordInfo
    *  分词输出列表
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\WordInfo[]|null
    */
    public function getWordInfo()
    {
        return $this->container['wordInfo'];
    }

    /**
    * Sets wordInfo
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\WordInfo[]|null $wordInfo 分词输出列表
    *
    * @return $this
    */
    public function setWordInfo($wordInfo)
    {
        $this->container['wordInfo'] = $wordInfo;
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

