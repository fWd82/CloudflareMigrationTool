<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'downloadObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  文件名称。
    * size  文件大小。
    * downloadLink  下载链接。
    * linkExpiredTime  链接过期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'size' => 'float',
            'downloadLink' => 'string',
            'linkExpiredTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  文件名称。
    * size  文件大小。
    * downloadLink  下载链接。
    * linkExpiredTime  链接过期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'size' => null,
        'downloadLink' => null,
        'linkExpiredTime' => null
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
    * name  文件名称。
    * size  文件大小。
    * downloadLink  下载链接。
    * linkExpiredTime  链接过期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'size' => 'size',
            'downloadLink' => 'download_link',
            'linkExpiredTime' => 'link_expired_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  文件名称。
    * size  文件大小。
    * downloadLink  下载链接。
    * linkExpiredTime  链接过期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'size' => 'setSize',
            'downloadLink' => 'setDownloadLink',
            'linkExpiredTime' => 'setLinkExpiredTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  文件名称。
    * size  文件大小。
    * downloadLink  下载链接。
    * linkExpiredTime  链接过期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'size' => 'getSize',
            'downloadLink' => 'getDownloadLink',
            'linkExpiredTime' => 'getLinkExpiredTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['downloadLink'] = isset($data['downloadLink']) ? $data['downloadLink'] : null;
        $this->container['linkExpiredTime'] = isset($data['linkExpiredTime']) ? $data['linkExpiredTime'] : null;
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
    * Gets name
    *  文件名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 文件名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets size
    *  文件大小。
    *
    * @return float|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param float|null $size 文件大小。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets downloadLink
    *  下载链接。
    *
    * @return string|null
    */
    public function getDownloadLink()
    {
        return $this->container['downloadLink'];
    }

    /**
    * Sets downloadLink
    *
    * @param string|null $downloadLink 下载链接。
    *
    * @return $this
    */
    public function setDownloadLink($downloadLink)
    {
        $this->container['downloadLink'] = $downloadLink;
        return $this;
    }

    /**
    * Gets linkExpiredTime
    *  链接过期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string|null
    */
    public function getLinkExpiredTime()
    {
        return $this->container['linkExpiredTime'];
    }

    /**
    * Sets linkExpiredTime
    *
    * @param string|null $linkExpiredTime 链接过期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setLinkExpiredTime($linkExpiredTime)
    {
        $this->container['linkExpiredTime'] = $linkExpiredTime;
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

