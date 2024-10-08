<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdentityproviderOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdentityproviderOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ssoType  身份提供商类型。当前支持virtual_user_sso和iam_user_sso两种，缺省配置默认为virtual_user_sso类型。
    * description  身份提供商描述信息。
    * enabled  身份提供商是否启用，true为启用，false为停用，默认为false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ssoType' => 'string',
            'description' => 'string',
            'enabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ssoType  身份提供商类型。当前支持virtual_user_sso和iam_user_sso两种，缺省配置默认为virtual_user_sso类型。
    * description  身份提供商描述信息。
    * enabled  身份提供商是否启用，true为启用，false为停用，默认为false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ssoType' => null,
        'description' => null,
        'enabled' => null
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
    * ssoType  身份提供商类型。当前支持virtual_user_sso和iam_user_sso两种，缺省配置默认为virtual_user_sso类型。
    * description  身份提供商描述信息。
    * enabled  身份提供商是否启用，true为启用，false为停用，默认为false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ssoType' => 'sso_type',
            'description' => 'description',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ssoType  身份提供商类型。当前支持virtual_user_sso和iam_user_sso两种，缺省配置默认为virtual_user_sso类型。
    * description  身份提供商描述信息。
    * enabled  身份提供商是否启用，true为启用，false为停用，默认为false。
    *
    * @var string[]
    */
    protected static $setters = [
            'ssoType' => 'setSsoType',
            'description' => 'setDescription',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ssoType  身份提供商类型。当前支持virtual_user_sso和iam_user_sso两种，缺省配置默认为virtual_user_sso类型。
    * description  身份提供商描述信息。
    * enabled  身份提供商是否启用，true为启用，false为停用，默认为false。
    *
    * @var string[]
    */
    protected static $getters = [
            'ssoType' => 'getSsoType',
            'description' => 'getDescription',
            'enabled' => 'getEnabled'
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
        $this->container['ssoType'] = isset($data['ssoType']) ? $data['ssoType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
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
    * Gets ssoType
    *  身份提供商类型。当前支持virtual_user_sso和iam_user_sso两种，缺省配置默认为virtual_user_sso类型。
    *
    * @return string|null
    */
    public function getSsoType()
    {
        return $this->container['ssoType'];
    }

    /**
    * Sets ssoType
    *
    * @param string|null $ssoType 身份提供商类型。当前支持virtual_user_sso和iam_user_sso两种，缺省配置默认为virtual_user_sso类型。
    *
    * @return $this
    */
    public function setSsoType($ssoType)
    {
        $this->container['ssoType'] = $ssoType;
        return $this;
    }

    /**
    * Gets description
    *  身份提供商描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 身份提供商描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enabled
    *  身份提供商是否启用，true为启用，false为停用，默认为false。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 身份提供商是否启用，true为启用，false为停用，默认为false。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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

