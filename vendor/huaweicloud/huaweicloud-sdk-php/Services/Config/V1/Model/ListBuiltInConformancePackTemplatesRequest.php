<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBuiltInConformancePackTemplatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBuiltInConformancePackTemplatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * templateKey  预定义合规包模板名称。
    * xLanguage  选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'templateKey' => 'string',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * templateKey  预定义合规包模板名称。
    * xLanguage  选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'templateKey' => null,
        'xLanguage' => null
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
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * templateKey  预定义合规包模板名称。
    * xLanguage  选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'templateKey' => 'template_key',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * templateKey  预定义合规包模板名称。
    * xLanguage  选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'templateKey' => 'setTemplateKey',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * templateKey  预定义合规包模板名称。
    * xLanguage  选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'templateKey' => 'getTemplateKey',
            'xLanguage' => 'getXLanguage'
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
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const X_LANGUAGE_EN_US = 'en-us';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_ZH_CN,
            self::X_LANGUAGE_EN_US,
        ];
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['templateKey'] = isset($data['templateKey']) ? $data['templateKey'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 400)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 400.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 4)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/[A-Za-z0-9+\/=%\\-_]+/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[A-Za-z0-9+\/=%\\-_]+/.";
            }
            if (!is_null($this->container['templateKey']) && (mb_strlen($this->container['templateKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'templateKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['templateKey']) && (mb_strlen($this->container['templateKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateKey']) && !preg_match("/^[a-zA-Z0-9_.\\-]+/", $this->container['templateKey'])) {
                $invalidProperties[] = "invalid value for 'templateKey', must be conform to the pattern /^[a-zA-Z0-9_.\\-]+/.";
            }
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets limit
    *  最大的返回数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 最大的返回数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets templateKey
    *  预定义合规包模板名称。
    *
    * @return string|null
    */
    public function getTemplateKey()
    {
        return $this->container['templateKey'];
    }

    /**
    * Sets templateKey
    *
    * @param string|null $templateKey 预定义合规包模板名称。
    *
    * @return $this
    */
    public function setTemplateKey($templateKey)
    {
        $this->container['templateKey'] = $templateKey;
        return $this;
    }

    /**
    * Gets xLanguage
    *  选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 选择接口返回的信息的语言，默认为\"zh-cn\"中文
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
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

