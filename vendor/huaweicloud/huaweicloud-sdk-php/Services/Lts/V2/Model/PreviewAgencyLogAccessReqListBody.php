<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PreviewAgencyLogAccessReqListBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PreviewAgencyLogAccessReqListBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * previewAgencyList  预览代理列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'previewAgencyList' => '\HuaweiCloud\SDK\Lts\V2\Model\PreviewAgencyLogAccessReqBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * previewAgencyList  预览代理列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'previewAgencyList' => null
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
    * previewAgencyList  预览代理列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'previewAgencyList' => 'preview_agency_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * previewAgencyList  预览代理列表
    *
    * @var string[]
    */
    protected static $setters = [
            'previewAgencyList' => 'setPreviewAgencyList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * previewAgencyList  预览代理列表
    *
    * @var string[]
    */
    protected static $getters = [
            'previewAgencyList' => 'getPreviewAgencyList'
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
        $this->container['previewAgencyList'] = isset($data['previewAgencyList']) ? $data['previewAgencyList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['previewAgencyList'] === null) {
            $invalidProperties[] = "'previewAgencyList' can't be null";
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
    * Gets previewAgencyList
    *  预览代理列表
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\PreviewAgencyLogAccessReqBody[]
    */
    public function getPreviewAgencyList()
    {
        return $this->container['previewAgencyList'];
    }

    /**
    * Sets previewAgencyList
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\PreviewAgencyLogAccessReqBody[] $previewAgencyList 预览代理列表
    *
    * @return $this
    */
    public function setPreviewAgencyList($previewAgencyList)
    {
        $this->container['previewAgencyList'] = $previewAgencyList;
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

