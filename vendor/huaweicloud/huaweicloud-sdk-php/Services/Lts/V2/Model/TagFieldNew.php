<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TagFieldNew implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TagFieldNew';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fieldName  字段名称
    * content  字段示例内容
    * type  字段数据类型。 可选范围：string、long、float
    * isAnalysis  是否开启快速分析
    * index  序号，从0开始
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fieldName' => 'string',
            'content' => 'string',
            'type' => 'string',
            'isAnalysis' => 'bool',
            'index' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fieldName  字段名称
    * content  字段示例内容
    * type  字段数据类型。 可选范围：string、long、float
    * isAnalysis  是否开启快速分析
    * index  序号，从0开始
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fieldName' => null,
        'content' => null,
        'type' => null,
        'isAnalysis' => null,
        'index' => 'int32'
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
    * fieldName  字段名称
    * content  字段示例内容
    * type  字段数据类型。 可选范围：string、long、float
    * isAnalysis  是否开启快速分析
    * index  序号，从0开始
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fieldName' => 'field_name',
            'content' => 'content',
            'type' => 'type',
            'isAnalysis' => 'is_analysis',
            'index' => 'index'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fieldName  字段名称
    * content  字段示例内容
    * type  字段数据类型。 可选范围：string、long、float
    * isAnalysis  是否开启快速分析
    * index  序号，从0开始
    *
    * @var string[]
    */
    protected static $setters = [
            'fieldName' => 'setFieldName',
            'content' => 'setContent',
            'type' => 'setType',
            'isAnalysis' => 'setIsAnalysis',
            'index' => 'setIndex'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fieldName  字段名称
    * content  字段示例内容
    * type  字段数据类型。 可选范围：string、long、float
    * isAnalysis  是否开启快速分析
    * index  序号，从0开始
    *
    * @var string[]
    */
    protected static $getters = [
            'fieldName' => 'getFieldName',
            'content' => 'getContent',
            'type' => 'getType',
            'isAnalysis' => 'getIsAnalysis',
            'index' => 'getIndex'
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
    const TYPE_STRING = 'string';
    const TYPE_LONG = 'long';
    const TYPE_FLOAT = 'float';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STRING,
            self::TYPE_LONG,
            self::TYPE_FLOAT,
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
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['isAnalysis'] = isset($data['isAnalysis']) ? $data['isAnalysis'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fieldName'] === null) {
            $invalidProperties[] = "'fieldName' can't be null";
        }
            if ((mb_strlen($this->container['fieldName']) > 64)) {
                $invalidProperties[] = "invalid value for 'fieldName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['fieldName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fieldName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 5000)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 0)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['index']) && ($this->container['index'] > 200)) {
                $invalidProperties[] = "invalid value for 'index', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['index']) && ($this->container['index'] < 0)) {
                $invalidProperties[] = "invalid value for 'index', must be bigger than or equal to 0.";
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
    * Gets fieldName
    *  字段名称
    *
    * @return string
    */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
    * Sets fieldName
    *
    * @param string $fieldName 字段名称
    *
    * @return $this
    */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;
        return $this;
    }

    /**
    * Gets content
    *  字段示例内容
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 字段示例内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets type
    *  字段数据类型。 可选范围：string、long、float
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 字段数据类型。 可选范围：string、long、float
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets isAnalysis
    *  是否开启快速分析
    *
    * @return bool|null
    */
    public function getIsAnalysis()
    {
        return $this->container['isAnalysis'];
    }

    /**
    * Sets isAnalysis
    *
    * @param bool|null $isAnalysis 是否开启快速分析
    *
    * @return $this
    */
    public function setIsAnalysis($isAnalysis)
    {
        $this->container['isAnalysis'] = $isAnalysis;
        return $this;
    }

    /**
    * Gets index
    *  序号，从0开始
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
    * @param int|null $index 序号，从0开始
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
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

