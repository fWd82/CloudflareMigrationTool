<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSubNetworkInterfaceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSubNetworkInterfaceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dryRun  功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会更新辅助弹性网卡。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接更新辅助弹性网卡。
    * subNetworkInterface  subNetworkInterface
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dryRun' => 'bool',
            'subNetworkInterface' => '\HuaweiCloud\SDK\Vpc\V3\Model\UpdateSubNetworkInterfaceOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dryRun  功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会更新辅助弹性网卡。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接更新辅助弹性网卡。
    * subNetworkInterface  subNetworkInterface
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dryRun' => null,
        'subNetworkInterface' => null
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
    * dryRun  功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会更新辅助弹性网卡。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接更新辅助弹性网卡。
    * subNetworkInterface  subNetworkInterface
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dryRun' => 'dry_run',
            'subNetworkInterface' => 'sub_network_interface'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dryRun  功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会更新辅助弹性网卡。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接更新辅助弹性网卡。
    * subNetworkInterface  subNetworkInterface
    *
    * @var string[]
    */
    protected static $setters = [
            'dryRun' => 'setDryRun',
            'subNetworkInterface' => 'setSubNetworkInterface'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dryRun  功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会更新辅助弹性网卡。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接更新辅助弹性网卡。
    * subNetworkInterface  subNetworkInterface
    *
    * @var string[]
    */
    protected static $getters = [
            'dryRun' => 'getDryRun',
            'subNetworkInterface' => 'getSubNetworkInterface'
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
        $this->container['dryRun'] = isset($data['dryRun']) ? $data['dryRun'] : null;
        $this->container['subNetworkInterface'] = isset($data['subNetworkInterface']) ? $data['subNetworkInterface'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subNetworkInterface'] === null) {
            $invalidProperties[] = "'subNetworkInterface' can't be null";
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
    * Gets dryRun
    *  功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会更新辅助弹性网卡。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接更新辅助弹性网卡。
    *
    * @return bool|null
    */
    public function getDryRun()
    {
        return $this->container['dryRun'];
    }

    /**
    * Sets dryRun
    *
    * @param bool|null $dryRun 功能说明：是否只预检此次请求 取值范围： -true：发送检查请求，不会更新辅助弹性网卡。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应码202。 -false（默认值）：发送正常请求，并直接更新辅助弹性网卡。
    *
    * @return $this
    */
    public function setDryRun($dryRun)
    {
        $this->container['dryRun'] = $dryRun;
        return $this;
    }

    /**
    * Gets subNetworkInterface
    *  subNetworkInterface
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\UpdateSubNetworkInterfaceOption
    */
    public function getSubNetworkInterface()
    {
        return $this->container['subNetworkInterface'];
    }

    /**
    * Sets subNetworkInterface
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\UpdateSubNetworkInterfaceOption $subNetworkInterface subNetworkInterface
    *
    * @return $this
    */
    public function setSubNetworkInterface($subNetworkInterface)
    {
        $this->container['subNetworkInterface'] = $subNetworkInterface;
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

