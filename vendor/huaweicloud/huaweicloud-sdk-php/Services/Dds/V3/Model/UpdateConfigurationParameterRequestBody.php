<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateConfigurationParameterRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateConfigurationParameterRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数模板名称。最长64个字符，只允许大写字母、小写字母、数字和特殊字符中划线、下划线和点。不传该参数时不修改参数模板名称。（参数模板名称，参数模板描述，参数名和参数值映射关系三项不能同时为空）
    * description  参数模板描述。最长256位，不支持!<>=&\"'特殊字符。不传该参数时不修改参数模板描述。
    * parameterValues  参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义的参数值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'parameterValues' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数模板名称。最长64个字符，只允许大写字母、小写字母、数字和特殊字符中划线、下划线和点。不传该参数时不修改参数模板名称。（参数模板名称，参数模板描述，参数名和参数值映射关系三项不能同时为空）
    * description  参数模板描述。最长256位，不支持!<>=&\"'特殊字符。不传该参数时不修改参数模板描述。
    * parameterValues  参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义的参数值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'parameterValues' => null
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
    * name  参数模板名称。最长64个字符，只允许大写字母、小写字母、数字和特殊字符中划线、下划线和点。不传该参数时不修改参数模板名称。（参数模板名称，参数模板描述，参数名和参数值映射关系三项不能同时为空）
    * description  参数模板描述。最长256位，不支持!<>=&\"'特殊字符。不传该参数时不修改参数模板描述。
    * parameterValues  参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义的参数值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'parameterValues' => 'parameter_values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数模板名称。最长64个字符，只允许大写字母、小写字母、数字和特殊字符中划线、下划线和点。不传该参数时不修改参数模板名称。（参数模板名称，参数模板描述，参数名和参数值映射关系三项不能同时为空）
    * description  参数模板描述。最长256位，不支持!<>=&\"'特殊字符。不传该参数时不修改参数模板描述。
    * parameterValues  参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义的参数值。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'parameterValues' => 'setParameterValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数模板名称。最长64个字符，只允许大写字母、小写字母、数字和特殊字符中划线、下划线和点。不传该参数时不修改参数模板名称。（参数模板名称，参数模板描述，参数名和参数值映射关系三项不能同时为空）
    * description  参数模板描述。最长256位，不支持!<>=&\"'特殊字符。不传该参数时不修改参数模板描述。
    * parameterValues  参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义的参数值。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'parameterValues' => 'getParameterValues'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['parameterValues'] = isset($data['parameterValues']) ? $data['parameterValues'] : null;
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
    *  参数模板名称。最长64个字符，只允许大写字母、小写字母、数字和特殊字符中划线、下划线和点。不传该参数时不修改参数模板名称。（参数模板名称，参数模板描述，参数名和参数值映射关系三项不能同时为空）
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
    * @param string|null $name 参数模板名称。最长64个字符，只允许大写字母、小写字母、数字和特殊字符中划线、下划线和点。不传该参数时不修改参数模板名称。（参数模板名称，参数模板描述，参数名和参数值映射关系三项不能同时为空）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  参数模板描述。最长256位，不支持!<>=&\"'特殊字符。不传该参数时不修改参数模板描述。
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
    * @param string|null $description 参数模板描述。最长256位，不支持!<>=&\"'特殊字符。不传该参数时不修改参数模板描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets parameterValues
    *  参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义的参数值。
    *
    * @return map[string,string]|null
    */
    public function getParameterValues()
    {
        return $this->container['parameterValues'];
    }

    /**
    * Sets parameterValues
    *
    * @param map[string,string]|null $parameterValues 参数名和参数值映射关系。用户可以基于默认参数模板的参数，自定义的参数值。
    *
    * @return $this
    */
    public function setParameterValues($parameterValues)
    {
        $this->container['parameterValues'] = $parameterValues;
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

