<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveAudioConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveAudioConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  插入音频资产的资产id，外部资产信息无需填写
    * audioUrl  音频URL。仅支持MP3格式，大小<100MB。输出会自动转化为单声道16KHZ采样。
    * subtitleUrl  音频对应的字幕文件URL。仅SRT格式，大小<1MB。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'audioUrl' => 'string',
            'subtitleUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  插入音频资产的资产id，外部资产信息无需填写
    * audioUrl  音频URL。仅支持MP3格式，大小<100MB。输出会自动转化为单声道16KHZ采样。
    * subtitleUrl  音频对应的字幕文件URL。仅SRT格式，大小<1MB。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'audioUrl' => null,
        'subtitleUrl' => null
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
    * assetId  插入音频资产的资产id，外部资产信息无需填写
    * audioUrl  音频URL。仅支持MP3格式，大小<100MB。输出会自动转化为单声道16KHZ采样。
    * subtitleUrl  音频对应的字幕文件URL。仅SRT格式，大小<1MB。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'audioUrl' => 'audio_url',
            'subtitleUrl' => 'subtitle_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  插入音频资产的资产id，外部资产信息无需填写
    * audioUrl  音频URL。仅支持MP3格式，大小<100MB。输出会自动转化为单声道16KHZ采样。
    * subtitleUrl  音频对应的字幕文件URL。仅SRT格式，大小<1MB。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'audioUrl' => 'setAudioUrl',
            'subtitleUrl' => 'setSubtitleUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  插入音频资产的资产id，外部资产信息无需填写
    * audioUrl  音频URL。仅支持MP3格式，大小<100MB。输出会自动转化为单声道16KHZ采样。
    * subtitleUrl  音频对应的字幕文件URL。仅SRT格式，大小<1MB。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'audioUrl' => 'getAudioUrl',
            'subtitleUrl' => 'getSubtitleUrl'
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['audioUrl'] = isset($data['audioUrl']) ? $data['audioUrl'] : null;
        $this->container['subtitleUrl'] = isset($data['subtitleUrl']) ? $data['subtitleUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioUrl']) && (mb_strlen($this->container['audioUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioUrl']) && (mb_strlen($this->container['audioUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subtitleUrl']) && (mb_strlen($this->container['subtitleUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'subtitleUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['subtitleUrl']) && (mb_strlen($this->container['subtitleUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'subtitleUrl', the character length must be bigger than or equal to 0.";
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
    * Gets assetId
    *  插入音频资产的资产id，外部资产信息无需填写
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 插入音频资产的资产id，外部资产信息无需填写
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets audioUrl
    *  音频URL。仅支持MP3格式，大小<100MB。输出会自动转化为单声道16KHZ采样。
    *
    * @return string|null
    */
    public function getAudioUrl()
    {
        return $this->container['audioUrl'];
    }

    /**
    * Sets audioUrl
    *
    * @param string|null $audioUrl 音频URL。仅支持MP3格式，大小<100MB。输出会自动转化为单声道16KHZ采样。
    *
    * @return $this
    */
    public function setAudioUrl($audioUrl)
    {
        $this->container['audioUrl'] = $audioUrl;
        return $this;
    }

    /**
    * Gets subtitleUrl
    *  音频对应的字幕文件URL。仅SRT格式，大小<1MB。
    *
    * @return string|null
    */
    public function getSubtitleUrl()
    {
        return $this->container['subtitleUrl'];
    }

    /**
    * Sets subtitleUrl
    *
    * @param string|null $subtitleUrl 音频对应的字幕文件URL。仅SRT格式，大小<1MB。
    *
    * @return $this
    */
    public function setSubtitleUrl($subtitleUrl)
    {
        $this->container['subtitleUrl'] = $subtitleUrl;
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

