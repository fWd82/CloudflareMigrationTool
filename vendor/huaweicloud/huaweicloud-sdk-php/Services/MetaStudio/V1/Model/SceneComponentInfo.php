<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SceneComponentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SceneComponentInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * index  组件索引。
    * componentName  组件名称。
    * componentType  组件类型。 * CAMERA：摄像机 * PANEL：屏幕 * LIGHT：灯光
    * componentDesc  组件描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'index' => 'int',
            'componentName' => 'string',
            'componentType' => 'string',
            'componentDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * index  组件索引。
    * componentName  组件名称。
    * componentType  组件类型。 * CAMERA：摄像机 * PANEL：屏幕 * LIGHT：灯光
    * componentDesc  组件描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'index' => null,
        'componentName' => null,
        'componentType' => null,
        'componentDesc' => null
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
    * index  组件索引。
    * componentName  组件名称。
    * componentType  组件类型。 * CAMERA：摄像机 * PANEL：屏幕 * LIGHT：灯光
    * componentDesc  组件描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'index' => 'index',
            'componentName' => 'component_name',
            'componentType' => 'component_type',
            'componentDesc' => 'component_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * index  组件索引。
    * componentName  组件名称。
    * componentType  组件类型。 * CAMERA：摄像机 * PANEL：屏幕 * LIGHT：灯光
    * componentDesc  组件描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'index' => 'setIndex',
            'componentName' => 'setComponentName',
            'componentType' => 'setComponentType',
            'componentDesc' => 'setComponentDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * index  组件索引。
    * componentName  组件名称。
    * componentType  组件类型。 * CAMERA：摄像机 * PANEL：屏幕 * LIGHT：灯光
    * componentDesc  组件描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'index' => 'getIndex',
            'componentName' => 'getComponentName',
            'componentType' => 'getComponentType',
            'componentDesc' => 'getComponentDesc'
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
    const COMPONENT_TYPE_CAMERA = 'CAMERA';
    const COMPONENT_TYPE_PANEL = 'PANEL';
    const COMPONENT_TYPE_LIGHT = 'LIGHT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getComponentTypeAllowableValues()
    {
        return [
            self::COMPONENT_TYPE_CAMERA,
            self::COMPONENT_TYPE_PANEL,
            self::COMPONENT_TYPE_LIGHT,
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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['componentName'] = isset($data['componentName']) ? $data['componentName'] : null;
        $this->container['componentType'] = isset($data['componentType']) ? $data['componentType'] : null;
        $this->container['componentDesc'] = isset($data['componentDesc']) ? $data['componentDesc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['index']) && ($this->container['index'] > 10)) {
                $invalidProperties[] = "invalid value for 'index', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['index']) && ($this->container['index'] < 1)) {
                $invalidProperties[] = "invalid value for 'index', must be bigger than or equal to 1.";
            }
        if ($this->container['componentName'] === null) {
            $invalidProperties[] = "'componentName' can't be null";
        }
            if ((mb_strlen($this->container['componentName']) > 256)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['componentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['componentType'] === null) {
            $invalidProperties[] = "'componentType' can't be null";
        }
            $allowedValues = $this->getComponentTypeAllowableValues();
                if (!is_null($this->container['componentType']) && !in_array($this->container['componentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'componentType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['componentType']) > 256)) {
                $invalidProperties[] = "invalid value for 'componentType', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['componentType']) < 1)) {
                $invalidProperties[] = "invalid value for 'componentType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['componentDesc']) && (mb_strlen($this->container['componentDesc']) > 512)) {
                $invalidProperties[] = "invalid value for 'componentDesc', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['componentDesc']) && (mb_strlen($this->container['componentDesc']) < 1)) {
                $invalidProperties[] = "invalid value for 'componentDesc', the character length must be bigger than or equal to 1.";
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
    * Gets index
    *  组件索引。
    *
    * @return int|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param int|null $index 组件索引。
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets componentName
    *  组件名称。
    *
    * @return string
    */
    public function getComponentName()
    {
        return $this->container['componentName'];
    }

    /**
    * Sets componentName
    *
    * @param string $componentName 组件名称。
    *
    * @return $this
    */
    public function setComponentName($componentName)
    {
        $this->container['componentName'] = $componentName;
        return $this;
    }

    /**
    * Gets componentType
    *  组件类型。 * CAMERA：摄像机 * PANEL：屏幕 * LIGHT：灯光
    *
    * @return string
    */
    public function getComponentType()
    {
        return $this->container['componentType'];
    }

    /**
    * Sets componentType
    *
    * @param string $componentType 组件类型。 * CAMERA：摄像机 * PANEL：屏幕 * LIGHT：灯光
    *
    * @return $this
    */
    public function setComponentType($componentType)
    {
        $this->container['componentType'] = $componentType;
        return $this;
    }

    /**
    * Gets componentDesc
    *  组件描述。
    *
    * @return string|null
    */
    public function getComponentDesc()
    {
        return $this->container['componentDesc'];
    }

    /**
    * Sets componentDesc
    *
    * @param string|null $componentDesc 组件描述。
    *
    * @return $this
    */
    public function setComponentDesc($componentDesc)
    {
        $this->container['componentDesc'] = $componentDesc;
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

