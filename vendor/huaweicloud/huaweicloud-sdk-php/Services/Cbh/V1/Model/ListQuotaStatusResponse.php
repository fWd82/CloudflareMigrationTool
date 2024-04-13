<?php

namespace HuaweiCloud\SDK\Cbh\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQuotaStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQuotaStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * statusV6  支持IPv6弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    * status  弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    * eipQuota  弹性配额信息，返回默认值null。
    * quota  剩余可创建云堡垒机配额信息，返回默认值null。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'statusV6' => 'string',
            'status' => 'string',
            'eipQuota' => 'int',
            'quota' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * statusV6  支持IPv6弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    * status  弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    * eipQuota  弹性配额信息，返回默认值null。
    * quota  剩余可创建云堡垒机配额信息，返回默认值null。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'statusV6' => null,
        'status' => null,
        'eipQuota' => null,
        'quota' => null
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
    * statusV6  支持IPv6弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    * status  弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    * eipQuota  弹性配额信息，返回默认值null。
    * quota  剩余可创建云堡垒机配额信息，返回默认值null。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'statusV6' => 'status_v6',
            'status' => 'status',
            'eipQuota' => 'eip_quota',
            'quota' => 'quota'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * statusV6  支持IPv6弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    * status  弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    * eipQuota  弹性配额信息，返回默认值null。
    * quota  剩余可创建云堡垒机配额信息，返回默认值null。
    *
    * @var string[]
    */
    protected static $setters = [
            'statusV6' => 'setStatusV6',
            'status' => 'setStatus',
            'eipQuota' => 'setEipQuota',
            'quota' => 'setQuota'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * statusV6  支持IPv6弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    * status  弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    * eipQuota  弹性配额信息，返回默认值null。
    * quota  剩余可创建云堡垒机配额信息，返回默认值null。
    *
    * @var string[]
    */
    protected static $getters = [
            'statusV6' => 'getStatusV6',
            'status' => 'getStatus',
            'eipQuota' => 'getEipQuota',
            'quota' => 'getQuota'
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
        $this->container['statusV6'] = isset($data['statusV6']) ? $data['statusV6'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['eipQuota'] = isset($data['eipQuota']) ? $data['eipQuota'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['statusV6']) && (mb_strlen($this->container['statusV6']) > 64)) {
                $invalidProperties[] = "invalid value for 'statusV6', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['statusV6']) && (mb_strlen($this->container['statusV6']) < 0)) {
                $invalidProperties[] = "invalid value for 'statusV6', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eipQuota']) && ($this->container['eipQuota'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'eipQuota', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['eipQuota']) && ($this->container['eipQuota'] < 0)) {
                $invalidProperties[] = "invalid value for 'eipQuota', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['quota']) && ($this->container['quota'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'quota', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['quota']) && ($this->container['quota'] < 0)) {
                $invalidProperties[] = "invalid value for 'quota', must be bigger than or equal to 0.";
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
    * Gets statusV6
    *  支持IPv6弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    *
    * @return string|null
    */
    public function getStatusV6()
    {
        return $this->container['statusV6'];
    }

    /**
    * Sets statusV6
    *
    * @param string|null $statusV6 支持IPv6弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    *
    * @return $this
    */
    public function setStatusV6($statusV6)
    {
        $this->container['statusV6'] = $statusV6;
        return $this;
    }

    /**
    * Gets status
    *  弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 弹性云服务器资源状态。 - sellout 售罄 - normal  正常商用 - abandon 下线（即不显示）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets eipQuota
    *  弹性配额信息，返回默认值null。
    *
    * @return int|null
    */
    public function getEipQuota()
    {
        return $this->container['eipQuota'];
    }

    /**
    * Sets eipQuota
    *
    * @param int|null $eipQuota 弹性配额信息，返回默认值null。
    *
    * @return $this
    */
    public function setEipQuota($eipQuota)
    {
        $this->container['eipQuota'] = $eipQuota;
        return $this;
    }

    /**
    * Gets quota
    *  剩余可创建云堡垒机配额信息，返回默认值null。
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota 剩余可创建云堡垒机配额信息，返回默认值null。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
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

