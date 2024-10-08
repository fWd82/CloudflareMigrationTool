<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAssetDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAssetDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  媒资ID。
    * baseInfo  baseInfo
    * transcodeInfo  transcodeInfo
    * thumbnailInfo  thumbnailInfo
    * reviewInfo  reviewInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'baseInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\BaseInfo',
            'transcodeInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\TranscodeInfo',
            'thumbnailInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\ThumbnailInfo',
            'reviewInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\ReviewInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  媒资ID。
    * baseInfo  baseInfo
    * transcodeInfo  transcodeInfo
    * thumbnailInfo  thumbnailInfo
    * reviewInfo  reviewInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'baseInfo' => null,
        'transcodeInfo' => null,
        'thumbnailInfo' => null,
        'reviewInfo' => null
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
    * assetId  媒资ID。
    * baseInfo  baseInfo
    * transcodeInfo  transcodeInfo
    * thumbnailInfo  thumbnailInfo
    * reviewInfo  reviewInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'baseInfo' => 'base_info',
            'transcodeInfo' => 'transcode_info',
            'thumbnailInfo' => 'thumbnail_info',
            'reviewInfo' => 'review_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  媒资ID。
    * baseInfo  baseInfo
    * transcodeInfo  transcodeInfo
    * thumbnailInfo  thumbnailInfo
    * reviewInfo  reviewInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'baseInfo' => 'setBaseInfo',
            'transcodeInfo' => 'setTranscodeInfo',
            'thumbnailInfo' => 'setThumbnailInfo',
            'reviewInfo' => 'setReviewInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  媒资ID。
    * baseInfo  baseInfo
    * transcodeInfo  transcodeInfo
    * thumbnailInfo  thumbnailInfo
    * reviewInfo  reviewInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'baseInfo' => 'getBaseInfo',
            'transcodeInfo' => 'getTranscodeInfo',
            'thumbnailInfo' => 'getThumbnailInfo',
            'reviewInfo' => 'getReviewInfo'
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
        $this->container['baseInfo'] = isset($data['baseInfo']) ? $data['baseInfo'] : null;
        $this->container['transcodeInfo'] = isset($data['transcodeInfo']) ? $data['transcodeInfo'] : null;
        $this->container['thumbnailInfo'] = isset($data['thumbnailInfo']) ? $data['thumbnailInfo'] : null;
        $this->container['reviewInfo'] = isset($data['reviewInfo']) ? $data['reviewInfo'] : null;
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
    * Gets assetId
    *  媒资ID。
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
    * @param string|null $assetId 媒资ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets baseInfo
    *  baseInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\BaseInfo|null
    */
    public function getBaseInfo()
    {
        return $this->container['baseInfo'];
    }

    /**
    * Sets baseInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\BaseInfo|null $baseInfo baseInfo
    *
    * @return $this
    */
    public function setBaseInfo($baseInfo)
    {
        $this->container['baseInfo'] = $baseInfo;
        return $this;
    }

    /**
    * Gets transcodeInfo
    *  transcodeInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\TranscodeInfo|null
    */
    public function getTranscodeInfo()
    {
        return $this->container['transcodeInfo'];
    }

    /**
    * Sets transcodeInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\TranscodeInfo|null $transcodeInfo transcodeInfo
    *
    * @return $this
    */
    public function setTranscodeInfo($transcodeInfo)
    {
        $this->container['transcodeInfo'] = $transcodeInfo;
        return $this;
    }

    /**
    * Gets thumbnailInfo
    *  thumbnailInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ThumbnailInfo|null
    */
    public function getThumbnailInfo()
    {
        return $this->container['thumbnailInfo'];
    }

    /**
    * Sets thumbnailInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ThumbnailInfo|null $thumbnailInfo thumbnailInfo
    *
    * @return $this
    */
    public function setThumbnailInfo($thumbnailInfo)
    {
        $this->container['thumbnailInfo'] = $thumbnailInfo;
        return $this;
    }

    /**
    * Gets reviewInfo
    *  reviewInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ReviewInfo|null
    */
    public function getReviewInfo()
    {
        return $this->container['reviewInfo'];
    }

    /**
    * Sets reviewInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ReviewInfo|null $reviewInfo reviewInfo
    *
    * @return $this
    */
    public function setReviewInfo($reviewInfo)
    {
        $this->container['reviewInfo'] = $reviewInfo;
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

