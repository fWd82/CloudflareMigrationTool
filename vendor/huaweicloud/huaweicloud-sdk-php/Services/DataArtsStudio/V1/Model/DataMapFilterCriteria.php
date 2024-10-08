<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataMapFilterCriteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataMapFilterCriteria';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attribute  过滤属性维度，枚举值：typeName、base.DataAsset.sourceType、classifications.name、tags.name、securityLevel.name、workspaceId
    * operator  操作表示，枚举值：EQ、IN
    * value  属性过滤值，根据attribute变化。如attribute为数据源：base.DataAsset.sourceType，则值可为[\"dws\", \"hive\"]
    * condition  条件拼接准则，取值范围 AND,OR
    * criterion  条件准则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attribute' => 'string',
            'operator' => 'string',
            'value' => 'string[]',
            'condition' => 'string',
            'criterion' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataMapFilterCriteria[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attribute  过滤属性维度，枚举值：typeName、base.DataAsset.sourceType、classifications.name、tags.name、securityLevel.name、workspaceId
    * operator  操作表示，枚举值：EQ、IN
    * value  属性过滤值，根据attribute变化。如attribute为数据源：base.DataAsset.sourceType，则值可为[\"dws\", \"hive\"]
    * condition  条件拼接准则，取值范围 AND,OR
    * criterion  条件准则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attribute' => null,
        'operator' => null,
        'value' => null,
        'condition' => null,
        'criterion' => null
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
    * attribute  过滤属性维度，枚举值：typeName、base.DataAsset.sourceType、classifications.name、tags.name、securityLevel.name、workspaceId
    * operator  操作表示，枚举值：EQ、IN
    * value  属性过滤值，根据attribute变化。如attribute为数据源：base.DataAsset.sourceType，则值可为[\"dws\", \"hive\"]
    * condition  条件拼接准则，取值范围 AND,OR
    * criterion  条件准则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attribute' => 'attribute',
            'operator' => 'operator',
            'value' => 'value',
            'condition' => 'condition',
            'criterion' => 'criterion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attribute  过滤属性维度，枚举值：typeName、base.DataAsset.sourceType、classifications.name、tags.name、securityLevel.name、workspaceId
    * operator  操作表示，枚举值：EQ、IN
    * value  属性过滤值，根据attribute变化。如attribute为数据源：base.DataAsset.sourceType，则值可为[\"dws\", \"hive\"]
    * condition  条件拼接准则，取值范围 AND,OR
    * criterion  条件准则
    *
    * @var string[]
    */
    protected static $setters = [
            'attribute' => 'setAttribute',
            'operator' => 'setOperator',
            'value' => 'setValue',
            'condition' => 'setCondition',
            'criterion' => 'setCriterion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attribute  过滤属性维度，枚举值：typeName、base.DataAsset.sourceType、classifications.name、tags.name、securityLevel.name、workspaceId
    * operator  操作表示，枚举值：EQ、IN
    * value  属性过滤值，根据attribute变化。如attribute为数据源：base.DataAsset.sourceType，则值可为[\"dws\", \"hive\"]
    * condition  条件拼接准则，取值范围 AND,OR
    * criterion  条件准则
    *
    * @var string[]
    */
    protected static $getters = [
            'attribute' => 'getAttribute',
            'operator' => 'getOperator',
            'value' => 'getValue',
            'condition' => 'getCondition',
            'criterion' => 'getCriterion'
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
    const ATTRIBUTE_BASE_DATA_ASSET_SOURCE_TYPE = 'base.DataAsset.sourceType';
    const ATTRIBUTE_TYPE_NAME = 'typeName';
    const ATTRIBUTE_CLASSIFICATIONS_NAME = 'classifications.name';
    const ATTRIBUTE_TAGS_NAME = 'tags.name';
    const ATTRIBUTE_SECURITY_LEVEL_NAME = 'securityLevel.name';
    const ATTRIBUTE_WORKSPACE_ID = 'workspaceId';
    const OPERATOR_IN = 'IN';
    const OPERATOR_EQ = 'EQ';
    const CONDITION__OR = 'OR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAttributeAllowableValues()
    {
        return [
            self::ATTRIBUTE_BASE_DATA_ASSET_SOURCE_TYPE,
            self::ATTRIBUTE_TYPE_NAME,
            self::ATTRIBUTE_CLASSIFICATIONS_NAME,
            self::ATTRIBUTE_TAGS_NAME,
            self::ATTRIBUTE_SECURITY_LEVEL_NAME,
            self::ATTRIBUTE_WORKSPACE_ID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_IN,
            self::OPERATOR_EQ,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION__OR,
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
        $this->container['attribute'] = isset($data['attribute']) ? $data['attribute'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['criterion'] = isset($data['criterion']) ? $data['criterion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAttributeAllowableValues();
                if (!is_null($this->container['attribute']) && !in_array($this->container['attribute'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'attribute', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOperatorAllowableValues();
                if (!is_null($this->container['operator']) && !in_array($this->container['operator'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operator', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getConditionAllowableValues();
                if (!is_null($this->container['condition']) && !in_array($this->container['condition'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'condition', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets attribute
    *  过滤属性维度，枚举值：typeName、base.DataAsset.sourceType、classifications.name、tags.name、securityLevel.name、workspaceId
    *
    * @return string|null
    */
    public function getAttribute()
    {
        return $this->container['attribute'];
    }

    /**
    * Sets attribute
    *
    * @param string|null $attribute 过滤属性维度，枚举值：typeName、base.DataAsset.sourceType、classifications.name、tags.name、securityLevel.name、workspaceId
    *
    * @return $this
    */
    public function setAttribute($attribute)
    {
        $this->container['attribute'] = $attribute;
        return $this;
    }

    /**
    * Gets operator
    *  操作表示，枚举值：EQ、IN
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 操作表示，枚举值：EQ、IN
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets value
    *  属性过滤值，根据attribute变化。如attribute为数据源：base.DataAsset.sourceType，则值可为[\"dws\", \"hive\"]
    *
    * @return string[]|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string[]|null $value 属性过滤值，根据attribute变化。如attribute为数据源：base.DataAsset.sourceType，则值可为[\"dws\", \"hive\"]
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets condition
    *  条件拼接准则，取值范围 AND,OR
    *
    * @return string|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string|null $condition 条件拼接准则，取值范围 AND,OR
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets criterion
    *  条件准则
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataMapFilterCriteria[]|null
    */
    public function getCriterion()
    {
        return $this->container['criterion'];
    }

    /**
    * Sets criterion
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataMapFilterCriteria[]|null $criterion 条件准则
    *
    * @return $this
    */
    public function setCriterion($criterion)
    {
        $this->container['criterion'] = $criterion;
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

