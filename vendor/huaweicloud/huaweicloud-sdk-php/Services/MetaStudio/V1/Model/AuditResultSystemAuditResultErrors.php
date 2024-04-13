<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditResultSystemAuditResultErrors implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditResult_system_audit_result_errors';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * audioName  音频文件名。
    * textName  文本文件名。
    * errorCode  异常错误码。
    * errorMessage  异常错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'audioName' => 'string',
            'textName' => 'string',
            'errorCode' => 'string',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * audioName  音频文件名。
    * textName  文本文件名。
    * errorCode  异常错误码。
    * errorMessage  异常错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'audioName' => null,
        'textName' => null,
        'errorCode' => null,
        'errorMessage' => null
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
    * audioName  音频文件名。
    * textName  文本文件名。
    * errorCode  异常错误码。
    * errorMessage  异常错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'audioName' => 'audio_name',
            'textName' => 'text_name',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * audioName  音频文件名。
    * textName  文本文件名。
    * errorCode  异常错误码。
    * errorMessage  异常错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'audioName' => 'setAudioName',
            'textName' => 'setTextName',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * audioName  音频文件名。
    * textName  文本文件名。
    * errorCode  异常错误码。
    * errorMessage  异常错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'audioName' => 'getAudioName',
            'textName' => 'getTextName',
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['audioName'] = isset($data['audioName']) ? $data['audioName'] : null;
        $this->container['textName'] = isset($data['textName']) ? $data['textName'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['audioName']) && (mb_strlen($this->container['audioName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'audioName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['audioName']) && (mb_strlen($this->container['audioName']) < 1)) {
                $invalidProperties[] = "invalid value for 'audioName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['textName']) && (mb_strlen($this->container['textName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'textName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['textName']) && (mb_strlen($this->container['textName']) < 1)) {
                $invalidProperties[] = "invalid value for 'textName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 1024)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) > 1024)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be bigger than or equal to 1.";
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
    * Gets audioName
    *  音频文件名。
    *
    * @return string|null
    */
    public function getAudioName()
    {
        return $this->container['audioName'];
    }

    /**
    * Sets audioName
    *
    * @param string|null $audioName 音频文件名。
    *
    * @return $this
    */
    public function setAudioName($audioName)
    {
        $this->container['audioName'] = $audioName;
        return $this;
    }

    /**
    * Gets textName
    *  文本文件名。
    *
    * @return string|null
    */
    public function getTextName()
    {
        return $this->container['textName'];
    }

    /**
    * Sets textName
    *
    * @param string|null $textName 文本文件名。
    *
    * @return $this
    */
    public function setTextName($textName)
    {
        $this->container['textName'] = $textName;
        return $this;
    }

    /**
    * Gets errorCode
    *  异常错误码。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 异常错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMessage
    *  异常错误信息。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 异常错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

