<?php

namespace HuaweiCloud\SDK\Aom\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubAppUpdateParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubAppUpdateParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  子应用名称：字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    * displayName  子应用节点显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * description  描述：最大255字符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'displayName' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  子应用名称：字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    * displayName  子应用节点显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * description  描述：最大255字符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'displayName' => null,
        'description' => null
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
    * name  子应用名称：字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    * displayName  子应用节点显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * description  描述：最大255字符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'displayName' => 'display_name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  子应用名称：字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    * displayName  子应用节点显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * description  描述：最大255字符
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'displayName' => 'setDisplayName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  子应用名称：字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    * displayName  子应用节点显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    * description  描述：最大255字符
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'displayName' => 'getDisplayName',
            'description' => 'getDescription'
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
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9_\\-.]{2,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-.]{2,64}$/.";
            }
            if (!is_null($this->container['displayName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_\\-.]{2,64}$/", $this->container['displayName'])) {
                $invalidProperties[] = "invalid value for 'displayName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_\\-.]{2,64}$/.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[\\s\\S]{0,255}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\s\\S]{0,255}$/.";
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
    * Gets name
    *  子应用名称：字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 子应用名称：字符集长度2-64，仅支持字符集：英文字母、数字、下划线、中划线、点
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets displayName
    *  子应用节点显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 子应用节点显示名：字符集长度2-64，仅支持字符集：中文字符、英文字母、数字、下划线、中划线、点
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets description
    *  描述：最大255字符
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
    * @param string|null $description 描述：最大255字符
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

