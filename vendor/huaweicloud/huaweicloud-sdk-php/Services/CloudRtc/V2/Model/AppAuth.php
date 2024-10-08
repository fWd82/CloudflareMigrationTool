<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppAuth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppAuth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  开启或关闭URL鉴权
    * expire  接入RTC建链认证时的signature的有效期。单位：秒。默认300秒。signature由app_key生成
    * appKey  app鉴权秘钥
    * updateTime  app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'expire' => 'int',
            'appKey' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  开启或关闭URL鉴权
    * expire  接入RTC建链认证时的signature的有效期。单位：秒。默认300秒。signature由app_key生成
    * appKey  app鉴权秘钥
    * updateTime  app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'expire' => null,
        'appKey' => null,
        'updateTime' => null
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
    * enable  开启或关闭URL鉴权
    * expire  接入RTC建链认证时的signature的有效期。单位：秒。默认300秒。signature由app_key生成
    * appKey  app鉴权秘钥
    * updateTime  app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'expire' => 'expire',
            'appKey' => 'app_key',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  开启或关闭URL鉴权
    * expire  接入RTC建链认证时的signature的有效期。单位：秒。默认300秒。signature由app_key生成
    * appKey  app鉴权秘钥
    * updateTime  app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'expire' => 'setExpire',
            'appKey' => 'setAppKey',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  开启或关闭URL鉴权
    * expire  接入RTC建链认证时的signature的有效期。单位：秒。默认300秒。signature由app_key生成
    * appKey  app鉴权秘钥
    * updateTime  app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'expire' => 'getExpire',
            'appKey' => 'getAppKey',
            'updateTime' => 'getUpdateTime'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['expire']) && ($this->container['expire'] > 2592000)) {
                $invalidProperties[] = "invalid value for 'expire', must be smaller than or equal to 2592000.";
            }
            if (!is_null($this->container['expire']) && ($this->container['expire'] < 60)) {
                $invalidProperties[] = "invalid value for 'expire', must be bigger than or equal to 60.";
            }
            if (!is_null($this->container['appKey']) && (mb_strlen($this->container['appKey']) > 16)) {
                $invalidProperties[] = "invalid value for 'appKey', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['appKey']) && (mb_strlen($this->container['appKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'appKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 1.";
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
    * Gets enable
    *  开启或关闭URL鉴权
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 开启或关闭URL鉴权
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets expire
    *  接入RTC建链认证时的signature的有效期。单位：秒。默认300秒。signature由app_key生成
    *
    * @return int|null
    */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
    * Sets expire
    *
    * @param int|null $expire 接入RTC建链认证时的signature的有效期。单位：秒。默认300秒。signature由app_key生成
    *
    * @return $this
    */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;
        return $this;
    }

    /**
    * Gets appKey
    *  app鉴权秘钥
    *
    * @return string|null
    */
    public function getAppKey()
    {
        return $this->container['appKey'];
    }

    /**
    * Sets appKey
    *
    * @param string|null $appKey app鉴权秘钥
    *
    * @return $this
    */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;
        return $this;
    }

    /**
    * Gets updateTime
    *  app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

