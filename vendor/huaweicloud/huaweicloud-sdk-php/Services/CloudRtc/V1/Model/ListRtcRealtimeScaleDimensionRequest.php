<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRtcRealtimeScaleDimensionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRtcRealtimeScaleDimensionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * app  应用标识
    * roomId  房间ID
    * metric  查询的数据类型  OnlineUsers:在线用户数
    * dimension  维度类型: region:省份 access_net:网络类型 platform:系统平台 sdk:SDK版本
    * time  查询时刻。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorization' => 'string',
            'xSdkDate' => 'string',
            'xProjectId' => 'string',
            'app' => 'string',
            'roomId' => 'string',
            'metric' => 'string',
            'dimension' => 'string',
            'time' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * app  应用标识
    * roomId  房间ID
    * metric  查询的数据类型  OnlineUsers:在线用户数
    * dimension  维度类型: region:省份 access_net:网络类型 platform:系统平台 sdk:SDK版本
    * time  查询时刻。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorization' => null,
        'xSdkDate' => null,
        'xProjectId' => null,
        'app' => null,
        'roomId' => null,
        'metric' => null,
        'dimension' => null,
        'time' => null
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
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * app  应用标识
    * roomId  房间ID
    * metric  查询的数据类型  OnlineUsers:在线用户数
    * dimension  维度类型: region:省份 access_net:网络类型 platform:系统平台 sdk:SDK版本
    * time  查询时刻。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorization' => 'Authorization',
            'xSdkDate' => 'X-Sdk-Date',
            'xProjectId' => 'X-Project-Id',
            'app' => 'app',
            'roomId' => 'room_id',
            'metric' => 'metric',
            'dimension' => 'dimension',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * app  应用标识
    * roomId  房间ID
    * metric  查询的数据类型  OnlineUsers:在线用户数
    * dimension  维度类型: region:省份 access_net:网络类型 platform:系统平台 sdk:SDK版本
    * time  查询时刻。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ
    *
    * @var string[]
    */
    protected static $setters = [
            'authorization' => 'setAuthorization',
            'xSdkDate' => 'setXSdkDate',
            'xProjectId' => 'setXProjectId',
            'app' => 'setApp',
            'roomId' => 'setRoomId',
            'metric' => 'setMetric',
            'dimension' => 'setDimension',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * app  应用标识
    * roomId  房间ID
    * metric  查询的数据类型  OnlineUsers:在线用户数
    * dimension  维度类型: region:省份 access_net:网络类型 platform:系统平台 sdk:SDK版本
    * time  查询时刻。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ
    *
    * @var string[]
    */
    protected static $getters = [
            'authorization' => 'getAuthorization',
            'xSdkDate' => 'getXSdkDate',
            'xProjectId' => 'getXProjectId',
            'app' => 'getApp',
            'roomId' => 'getRoomId',
            'metric' => 'getMetric',
            'dimension' => 'getDimension',
            'time' => 'getTime'
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
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['xSdkDate'] = isset($data['xSdkDate']) ? $data['xSdkDate'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) > 256)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) > 256)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['app'] === null) {
            $invalidProperties[] = "'app' can't be null";
        }
            if ((mb_strlen($this->container['app']) > 256)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 256)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
            if ((mb_strlen($this->container['metric']) > 256)) {
                $invalidProperties[] = "invalid value for 'metric', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['metric']) < 1)) {
                $invalidProperties[] = "invalid value for 'metric', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['dimension'] === null) {
            $invalidProperties[] = "'dimension' can't be null";
        }
            if ((mb_strlen($this->container['dimension']) > 256)) {
                $invalidProperties[] = "invalid value for 'dimension', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['dimension']) < 1)) {
                $invalidProperties[] = "invalid value for 'dimension', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
            if ((mb_strlen($this->container['time']) > 20)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['time']) < 20)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be bigger than or equal to 20.";
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
    * Gets authorization
    *  使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return string|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param string|null $authorization 使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets xSdkDate
    *  使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return string|null
    */
    public function getXSdkDate()
    {
        return $this->container['xSdkDate'];
    }

    /**
    * Sets xSdkDate
    *
    * @param string|null $xSdkDate 使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return $this
    */
    public function setXSdkDate($xSdkDate)
    {
        $this->container['xSdkDate'] = $xSdkDate;
        return $this;
    }

    /**
    * Gets xProjectId
    *  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets app
    *  应用标识
    *
    * @return string
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string $app 应用标识
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets roomId
    *  房间ID
    *
    * @return string|null
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string|null $roomId 房间ID
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets metric
    *  查询的数据类型  OnlineUsers:在线用户数
    *
    * @return string
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param string $metric 查询的数据类型  OnlineUsers:在线用户数
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets dimension
    *  维度类型: region:省份 access_net:网络类型 platform:系统平台 sdk:SDK版本
    *
    * @return string
    */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
    * Sets dimension
    *
    * @param string $dimension 维度类型: region:省份 access_net:网络类型 platform:系统平台 sdk:SDK版本
    *
    * @return $this
    */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;
        return $this;
    }

    /**
    * Gets time
    *  查询时刻。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ
    *
    * @return string
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string $time 查询时刻。UTC时间，格式：YYYY-MM-DDThh:mm:ssZ
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

