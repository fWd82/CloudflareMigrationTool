<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CoditionResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CoditionResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reqParamName  关联的请求参数对象名称。策略类型为param时必选
    * sysParamName  系统参数-网关内置参数名称。策略类型为system时必选。支持以下参数 - req_path：请求路径。如 /a/b - req_method：请求方法。如 GET
    * cookieParamName  COOKIE参数名称。策略类型为cookie时必选
    * frontendAuthorizerParamName  系统参数-前端认证参数名称。策略类型为frontend_authorizer时必选，前端认证参数名称以\"$context.authorizer.frontend.\"字符串为前缀。例如，前端认证参数名称为user_name，加上前缀为$context.authorizer.frontend.user_name。
    * conditionType  策略条件 - exact：绝对匹配 - enum：枚举 - pattern：正则  策略类型为param，system，cookie，frontend_authorizer时必选
    * conditionOrigin  策略类型 - param：参数 - source：源IP - system: 系统参数-网关内置参数 - cookie: COOKIE参数 - frontend_authorizer: 系统参数-前端认证参数
    * conditionValue  策略值。策略类型为param，source，cookie，frontend_authorizer时必填
    * id  编号
    * reqParamId  关联的请求参数对象编号
    * reqParamLocation  关联的请求参数对象位置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reqParamName' => 'string',
            'sysParamName' => 'string',
            'cookieParamName' => 'string',
            'frontendAuthorizerParamName' => 'string',
            'conditionType' => 'string',
            'conditionOrigin' => 'string',
            'conditionValue' => 'string',
            'id' => 'string',
            'reqParamId' => 'string',
            'reqParamLocation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reqParamName  关联的请求参数对象名称。策略类型为param时必选
    * sysParamName  系统参数-网关内置参数名称。策略类型为system时必选。支持以下参数 - req_path：请求路径。如 /a/b - req_method：请求方法。如 GET
    * cookieParamName  COOKIE参数名称。策略类型为cookie时必选
    * frontendAuthorizerParamName  系统参数-前端认证参数名称。策略类型为frontend_authorizer时必选，前端认证参数名称以\"$context.authorizer.frontend.\"字符串为前缀。例如，前端认证参数名称为user_name，加上前缀为$context.authorizer.frontend.user_name。
    * conditionType  策略条件 - exact：绝对匹配 - enum：枚举 - pattern：正则  策略类型为param，system，cookie，frontend_authorizer时必选
    * conditionOrigin  策略类型 - param：参数 - source：源IP - system: 系统参数-网关内置参数 - cookie: COOKIE参数 - frontend_authorizer: 系统参数-前端认证参数
    * conditionValue  策略值。策略类型为param，source，cookie，frontend_authorizer时必填
    * id  编号
    * reqParamId  关联的请求参数对象编号
    * reqParamLocation  关联的请求参数对象位置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reqParamName' => null,
        'sysParamName' => null,
        'cookieParamName' => null,
        'frontendAuthorizerParamName' => null,
        'conditionType' => null,
        'conditionOrigin' => null,
        'conditionValue' => null,
        'id' => null,
        'reqParamId' => null,
        'reqParamLocation' => null
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
    * reqParamName  关联的请求参数对象名称。策略类型为param时必选
    * sysParamName  系统参数-网关内置参数名称。策略类型为system时必选。支持以下参数 - req_path：请求路径。如 /a/b - req_method：请求方法。如 GET
    * cookieParamName  COOKIE参数名称。策略类型为cookie时必选
    * frontendAuthorizerParamName  系统参数-前端认证参数名称。策略类型为frontend_authorizer时必选，前端认证参数名称以\"$context.authorizer.frontend.\"字符串为前缀。例如，前端认证参数名称为user_name，加上前缀为$context.authorizer.frontend.user_name。
    * conditionType  策略条件 - exact：绝对匹配 - enum：枚举 - pattern：正则  策略类型为param，system，cookie，frontend_authorizer时必选
    * conditionOrigin  策略类型 - param：参数 - source：源IP - system: 系统参数-网关内置参数 - cookie: COOKIE参数 - frontend_authorizer: 系统参数-前端认证参数
    * conditionValue  策略值。策略类型为param，source，cookie，frontend_authorizer时必填
    * id  编号
    * reqParamId  关联的请求参数对象编号
    * reqParamLocation  关联的请求参数对象位置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reqParamName' => 'req_param_name',
            'sysParamName' => 'sys_param_name',
            'cookieParamName' => 'cookie_param_name',
            'frontendAuthorizerParamName' => 'frontend_authorizer_param_name',
            'conditionType' => 'condition_type',
            'conditionOrigin' => 'condition_origin',
            'conditionValue' => 'condition_value',
            'id' => 'id',
            'reqParamId' => 'req_param_id',
            'reqParamLocation' => 'req_param_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reqParamName  关联的请求参数对象名称。策略类型为param时必选
    * sysParamName  系统参数-网关内置参数名称。策略类型为system时必选。支持以下参数 - req_path：请求路径。如 /a/b - req_method：请求方法。如 GET
    * cookieParamName  COOKIE参数名称。策略类型为cookie时必选
    * frontendAuthorizerParamName  系统参数-前端认证参数名称。策略类型为frontend_authorizer时必选，前端认证参数名称以\"$context.authorizer.frontend.\"字符串为前缀。例如，前端认证参数名称为user_name，加上前缀为$context.authorizer.frontend.user_name。
    * conditionType  策略条件 - exact：绝对匹配 - enum：枚举 - pattern：正则  策略类型为param，system，cookie，frontend_authorizer时必选
    * conditionOrigin  策略类型 - param：参数 - source：源IP - system: 系统参数-网关内置参数 - cookie: COOKIE参数 - frontend_authorizer: 系统参数-前端认证参数
    * conditionValue  策略值。策略类型为param，source，cookie，frontend_authorizer时必填
    * id  编号
    * reqParamId  关联的请求参数对象编号
    * reqParamLocation  关联的请求参数对象位置
    *
    * @var string[]
    */
    protected static $setters = [
            'reqParamName' => 'setReqParamName',
            'sysParamName' => 'setSysParamName',
            'cookieParamName' => 'setCookieParamName',
            'frontendAuthorizerParamName' => 'setFrontendAuthorizerParamName',
            'conditionType' => 'setConditionType',
            'conditionOrigin' => 'setConditionOrigin',
            'conditionValue' => 'setConditionValue',
            'id' => 'setId',
            'reqParamId' => 'setReqParamId',
            'reqParamLocation' => 'setReqParamLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reqParamName  关联的请求参数对象名称。策略类型为param时必选
    * sysParamName  系统参数-网关内置参数名称。策略类型为system时必选。支持以下参数 - req_path：请求路径。如 /a/b - req_method：请求方法。如 GET
    * cookieParamName  COOKIE参数名称。策略类型为cookie时必选
    * frontendAuthorizerParamName  系统参数-前端认证参数名称。策略类型为frontend_authorizer时必选，前端认证参数名称以\"$context.authorizer.frontend.\"字符串为前缀。例如，前端认证参数名称为user_name，加上前缀为$context.authorizer.frontend.user_name。
    * conditionType  策略条件 - exact：绝对匹配 - enum：枚举 - pattern：正则  策略类型为param，system，cookie，frontend_authorizer时必选
    * conditionOrigin  策略类型 - param：参数 - source：源IP - system: 系统参数-网关内置参数 - cookie: COOKIE参数 - frontend_authorizer: 系统参数-前端认证参数
    * conditionValue  策略值。策略类型为param，source，cookie，frontend_authorizer时必填
    * id  编号
    * reqParamId  关联的请求参数对象编号
    * reqParamLocation  关联的请求参数对象位置
    *
    * @var string[]
    */
    protected static $getters = [
            'reqParamName' => 'getReqParamName',
            'sysParamName' => 'getSysParamName',
            'cookieParamName' => 'getCookieParamName',
            'frontendAuthorizerParamName' => 'getFrontendAuthorizerParamName',
            'conditionType' => 'getConditionType',
            'conditionOrigin' => 'getConditionOrigin',
            'conditionValue' => 'getConditionValue',
            'id' => 'getId',
            'reqParamId' => 'getReqParamId',
            'reqParamLocation' => 'getReqParamLocation'
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
    const SYS_PARAM_NAME_REQ_PATH = 'req_path';
    const SYS_PARAM_NAME_REQ_METHOD = 'req_method';
    const CONDITION_TYPE_EXACT = 'exact';
    const CONDITION_TYPE_ENUM = 'enum';
    const CONDITION_TYPE_PATTERN = 'pattern';
    const CONDITION_ORIGIN_PARAM = 'param';
    const CONDITION_ORIGIN_SOURCE = 'source';
    const CONDITION_ORIGIN_SYSTEM = 'system';
    const CONDITION_ORIGIN_COOKIE = 'cookie';
    const CONDITION_ORIGIN_FRONTEND_AUTHORIZER = 'frontend_authorizer';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSysParamNameAllowableValues()
    {
        return [
            self::SYS_PARAM_NAME_REQ_PATH,
            self::SYS_PARAM_NAME_REQ_METHOD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConditionTypeAllowableValues()
    {
        return [
            self::CONDITION_TYPE_EXACT,
            self::CONDITION_TYPE_ENUM,
            self::CONDITION_TYPE_PATTERN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConditionOriginAllowableValues()
    {
        return [
            self::CONDITION_ORIGIN_PARAM,
            self::CONDITION_ORIGIN_SOURCE,
            self::CONDITION_ORIGIN_SYSTEM,
            self::CONDITION_ORIGIN_COOKIE,
            self::CONDITION_ORIGIN_FRONTEND_AUTHORIZER,
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
        $this->container['reqParamName'] = isset($data['reqParamName']) ? $data['reqParamName'] : null;
        $this->container['sysParamName'] = isset($data['sysParamName']) ? $data['sysParamName'] : null;
        $this->container['cookieParamName'] = isset($data['cookieParamName']) ? $data['cookieParamName'] : null;
        $this->container['frontendAuthorizerParamName'] = isset($data['frontendAuthorizerParamName']) ? $data['frontendAuthorizerParamName'] : null;
        $this->container['conditionType'] = isset($data['conditionType']) ? $data['conditionType'] : null;
        $this->container['conditionOrigin'] = isset($data['conditionOrigin']) ? $data['conditionOrigin'] : null;
        $this->container['conditionValue'] = isset($data['conditionValue']) ? $data['conditionValue'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['reqParamId'] = isset($data['reqParamId']) ? $data['reqParamId'] : null;
        $this->container['reqParamLocation'] = isset($data['reqParamLocation']) ? $data['reqParamLocation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSysParamNameAllowableValues();
                if (!is_null($this->container['sysParamName']) && !in_array($this->container['sysParamName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sysParamName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['cookieParamName']) && (mb_strlen($this->container['cookieParamName']) > 255)) {
                $invalidProperties[] = "invalid value for 'cookieParamName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['cookieParamName']) && (mb_strlen($this->container['cookieParamName']) < 0)) {
                $invalidProperties[] = "invalid value for 'cookieParamName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cookieParamName']) && !preg_match("/^[a-zA-Z0-9._-]{0,255}$/", $this->container['cookieParamName'])) {
                $invalidProperties[] = "invalid value for 'cookieParamName', must be conform to the pattern /^[a-zA-Z0-9._-]{0,255}$/.";
            }
            if (!is_null($this->container['frontendAuthorizerParamName']) && !preg_match("/^\\$context\\.authorizer\\.frontend\\.[a-zA-Z][a-zA-Z0-9_-]{0,31}$/", $this->container['frontendAuthorizerParamName'])) {
                $invalidProperties[] = "invalid value for 'frontendAuthorizerParamName', must be conform to the pattern /^\\$context\\.authorizer\\.frontend\\.[a-zA-Z][a-zA-Z0-9_-]{0,31}$/.";
            }
            $allowedValues = $this->getConditionTypeAllowableValues();
                if (!is_null($this->container['conditionType']) && !in_array($this->container['conditionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'conditionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['conditionOrigin'] === null) {
            $invalidProperties[] = "'conditionOrigin' can't be null";
        }
            $allowedValues = $this->getConditionOriginAllowableValues();
                if (!is_null($this->container['conditionOrigin']) && !in_array($this->container['conditionOrigin'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'conditionOrigin', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['conditionValue'] === null) {
            $invalidProperties[] = "'conditionValue' can't be null";
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
    * Gets reqParamName
    *  关联的请求参数对象名称。策略类型为param时必选
    *
    * @return string|null
    */
    public function getReqParamName()
    {
        return $this->container['reqParamName'];
    }

    /**
    * Sets reqParamName
    *
    * @param string|null $reqParamName 关联的请求参数对象名称。策略类型为param时必选
    *
    * @return $this
    */
    public function setReqParamName($reqParamName)
    {
        $this->container['reqParamName'] = $reqParamName;
        return $this;
    }

    /**
    * Gets sysParamName
    *  系统参数-网关内置参数名称。策略类型为system时必选。支持以下参数 - req_path：请求路径。如 /a/b - req_method：请求方法。如 GET
    *
    * @return string|null
    */
    public function getSysParamName()
    {
        return $this->container['sysParamName'];
    }

    /**
    * Sets sysParamName
    *
    * @param string|null $sysParamName 系统参数-网关内置参数名称。策略类型为system时必选。支持以下参数 - req_path：请求路径。如 /a/b - req_method：请求方法。如 GET
    *
    * @return $this
    */
    public function setSysParamName($sysParamName)
    {
        $this->container['sysParamName'] = $sysParamName;
        return $this;
    }

    /**
    * Gets cookieParamName
    *  COOKIE参数名称。策略类型为cookie时必选
    *
    * @return string|null
    */
    public function getCookieParamName()
    {
        return $this->container['cookieParamName'];
    }

    /**
    * Sets cookieParamName
    *
    * @param string|null $cookieParamName COOKIE参数名称。策略类型为cookie时必选
    *
    * @return $this
    */
    public function setCookieParamName($cookieParamName)
    {
        $this->container['cookieParamName'] = $cookieParamName;
        return $this;
    }

    /**
    * Gets frontendAuthorizerParamName
    *  系统参数-前端认证参数名称。策略类型为frontend_authorizer时必选，前端认证参数名称以\"$context.authorizer.frontend.\"字符串为前缀。例如，前端认证参数名称为user_name，加上前缀为$context.authorizer.frontend.user_name。
    *
    * @return string|null
    */
    public function getFrontendAuthorizerParamName()
    {
        return $this->container['frontendAuthorizerParamName'];
    }

    /**
    * Sets frontendAuthorizerParamName
    *
    * @param string|null $frontendAuthorizerParamName 系统参数-前端认证参数名称。策略类型为frontend_authorizer时必选，前端认证参数名称以\"$context.authorizer.frontend.\"字符串为前缀。例如，前端认证参数名称为user_name，加上前缀为$context.authorizer.frontend.user_name。
    *
    * @return $this
    */
    public function setFrontendAuthorizerParamName($frontendAuthorizerParamName)
    {
        $this->container['frontendAuthorizerParamName'] = $frontendAuthorizerParamName;
        return $this;
    }

    /**
    * Gets conditionType
    *  策略条件 - exact：绝对匹配 - enum：枚举 - pattern：正则  策略类型为param，system，cookie，frontend_authorizer时必选
    *
    * @return string|null
    */
    public function getConditionType()
    {
        return $this->container['conditionType'];
    }

    /**
    * Sets conditionType
    *
    * @param string|null $conditionType 策略条件 - exact：绝对匹配 - enum：枚举 - pattern：正则  策略类型为param，system，cookie，frontend_authorizer时必选
    *
    * @return $this
    */
    public function setConditionType($conditionType)
    {
        $this->container['conditionType'] = $conditionType;
        return $this;
    }

    /**
    * Gets conditionOrigin
    *  策略类型 - param：参数 - source：源IP - system: 系统参数-网关内置参数 - cookie: COOKIE参数 - frontend_authorizer: 系统参数-前端认证参数
    *
    * @return string
    */
    public function getConditionOrigin()
    {
        return $this->container['conditionOrigin'];
    }

    /**
    * Sets conditionOrigin
    *
    * @param string $conditionOrigin 策略类型 - param：参数 - source：源IP - system: 系统参数-网关内置参数 - cookie: COOKIE参数 - frontend_authorizer: 系统参数-前端认证参数
    *
    * @return $this
    */
    public function setConditionOrigin($conditionOrigin)
    {
        $this->container['conditionOrigin'] = $conditionOrigin;
        return $this;
    }

    /**
    * Gets conditionValue
    *  策略值。策略类型为param，source，cookie，frontend_authorizer时必填
    *
    * @return string
    */
    public function getConditionValue()
    {
        return $this->container['conditionValue'];
    }

    /**
    * Sets conditionValue
    *
    * @param string $conditionValue 策略值。策略类型为param，source，cookie，frontend_authorizer时必填
    *
    * @return $this
    */
    public function setConditionValue($conditionValue)
    {
        $this->container['conditionValue'] = $conditionValue;
        return $this;
    }

    /**
    * Gets id
    *  编号
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets reqParamId
    *  关联的请求参数对象编号
    *
    * @return string|null
    */
    public function getReqParamId()
    {
        return $this->container['reqParamId'];
    }

    /**
    * Sets reqParamId
    *
    * @param string|null $reqParamId 关联的请求参数对象编号
    *
    * @return $this
    */
    public function setReqParamId($reqParamId)
    {
        $this->container['reqParamId'] = $reqParamId;
        return $this;
    }

    /**
    * Gets reqParamLocation
    *  关联的请求参数对象位置
    *
    * @return string|null
    */
    public function getReqParamLocation()
    {
        return $this->container['reqParamLocation'];
    }

    /**
    * Sets reqParamLocation
    *
    * @param string|null $reqParamLocation 关联的请求参数对象位置
    *
    * @return $this
    */
    public function setReqParamLocation($reqParamLocation)
    {
        $this->container['reqParamLocation'] = $reqParamLocation;
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

