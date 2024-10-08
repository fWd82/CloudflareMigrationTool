<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponseRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponseRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * deleteAllowed  是否允许删除
    * groupNames  相关的规则组
    * id  规则ID
    * logicOperator  逻辑运算符，\"AND\",\"OR\",\"REGEX\"
    * minMatch  最小匹配次数
    * riskLevel  风险等级
    * ruleContent  规则内容
    * ruleDesc  规则描述
    * ruleName  规则名称
    * ruleType  规则类型，关键字(KEYWORD)、正则表达式(REGEX)或自然语言(NLP)
    * selected  是否可选
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'deleteAllowed' => 'bool',
            'groupNames' => 'string',
            'id' => 'string',
            'logicOperator' => 'string',
            'minMatch' => 'int',
            'riskLevel' => 'int',
            'ruleContent' => 'string',
            'ruleDesc' => 'string',
            'ruleName' => 'string',
            'ruleType' => 'string',
            'selected' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * deleteAllowed  是否允许删除
    * groupNames  相关的规则组
    * id  规则ID
    * logicOperator  逻辑运算符，\"AND\",\"OR\",\"REGEX\"
    * minMatch  最小匹配次数
    * riskLevel  风险等级
    * ruleContent  规则内容
    * ruleDesc  规则描述
    * ruleName  规则名称
    * ruleType  规则类型，关键字(KEYWORD)、正则表达式(REGEX)或自然语言(NLP)
    * selected  是否可选
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'deleteAllowed' => null,
        'groupNames' => null,
        'id' => null,
        'logicOperator' => null,
        'minMatch' => 'int32',
        'riskLevel' => 'int32',
        'ruleContent' => null,
        'ruleDesc' => null,
        'ruleName' => null,
        'ruleType' => null,
        'selected' => null
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
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * deleteAllowed  是否允许删除
    * groupNames  相关的规则组
    * id  规则ID
    * logicOperator  逻辑运算符，\"AND\",\"OR\",\"REGEX\"
    * minMatch  最小匹配次数
    * riskLevel  风险等级
    * ruleContent  规则内容
    * ruleDesc  规则描述
    * ruleName  规则名称
    * ruleType  规则类型，关键字(KEYWORD)、正则表达式(REGEX)或自然语言(NLP)
    * selected  是否可选
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'deleteAllowed' => 'delete_allowed',
            'groupNames' => 'group_names',
            'id' => 'id',
            'logicOperator' => 'logic_operator',
            'minMatch' => 'min_match',
            'riskLevel' => 'risk_level',
            'ruleContent' => 'rule_content',
            'ruleDesc' => 'rule_desc',
            'ruleName' => 'rule_name',
            'ruleType' => 'rule_type',
            'selected' => 'selected'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * deleteAllowed  是否允许删除
    * groupNames  相关的规则组
    * id  规则ID
    * logicOperator  逻辑运算符，\"AND\",\"OR\",\"REGEX\"
    * minMatch  最小匹配次数
    * riskLevel  风险等级
    * ruleContent  规则内容
    * ruleDesc  规则描述
    * ruleName  规则名称
    * ruleType  规则类型，关键字(KEYWORD)、正则表达式(REGEX)或自然语言(NLP)
    * selected  是否可选
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'deleteAllowed' => 'setDeleteAllowed',
            'groupNames' => 'setGroupNames',
            'id' => 'setId',
            'logicOperator' => 'setLogicOperator',
            'minMatch' => 'setMinMatch',
            'riskLevel' => 'setRiskLevel',
            'ruleContent' => 'setRuleContent',
            'ruleDesc' => 'setRuleDesc',
            'ruleName' => 'setRuleName',
            'ruleType' => 'setRuleType',
            'selected' => 'setSelected'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    * deleteAllowed  是否允许删除
    * groupNames  相关的规则组
    * id  规则ID
    * logicOperator  逻辑运算符，\"AND\",\"OR\",\"REGEX\"
    * minMatch  最小匹配次数
    * riskLevel  风险等级
    * ruleContent  规则内容
    * ruleDesc  规则描述
    * ruleName  规则名称
    * ruleType  规则类型，关键字(KEYWORD)、正则表达式(REGEX)或自然语言(NLP)
    * selected  是否可选
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'deleteAllowed' => 'getDeleteAllowed',
            'groupNames' => 'getGroupNames',
            'id' => 'getId',
            'logicOperator' => 'getLogicOperator',
            'minMatch' => 'getMinMatch',
            'riskLevel' => 'getRiskLevel',
            'ruleContent' => 'getRuleContent',
            'ruleDesc' => 'getRuleDesc',
            'ruleName' => 'getRuleName',
            'ruleType' => 'getRuleType',
            'selected' => 'getSelected'
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
    const CATEGORY_BUILT_IN = 'BUILT_IN';
    const CATEGORY_BUILT_SELF = 'BUILT_SELF';
    const RULE_TYPE_KEYWORD = 'KEYWORD';
    const RULE_TYPE_REGEX = 'REGEX';
    const RULE_TYPE_NLP = 'NLP';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_BUILT_IN,
            self::CATEGORY_BUILT_SELF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuleTypeAllowableValues()
    {
        return [
            self::RULE_TYPE_KEYWORD,
            self::RULE_TYPE_REGEX,
            self::RULE_TYPE_NLP,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['deleteAllowed'] = isset($data['deleteAllowed']) ? $data['deleteAllowed'] : null;
        $this->container['groupNames'] = isset($data['groupNames']) ? $data['groupNames'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['logicOperator'] = isset($data['logicOperator']) ? $data['logicOperator'] : null;
        $this->container['minMatch'] = isset($data['minMatch']) ? $data['minMatch'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['ruleContent'] = isset($data['ruleContent']) ? $data['ruleContent'] : null;
        $this->container['ruleDesc'] = isset($data['ruleDesc']) ? $data['ruleDesc'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['selected'] = isset($data['selected']) ? $data['selected'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRuleTypeAllowableValues();
                if (!is_null($this->container['ruleType']) && !in_array($this->container['ruleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ruleType', must be one of '%s'",
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
    * Gets category
    *  规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 规则类别，内置规则(BUILT_IN)或自建规则(BUILT_SELF)
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets deleteAllowed
    *  是否允许删除
    *
    * @return bool|null
    */
    public function getDeleteAllowed()
    {
        return $this->container['deleteAllowed'];
    }

    /**
    * Sets deleteAllowed
    *
    * @param bool|null $deleteAllowed 是否允许删除
    *
    * @return $this
    */
    public function setDeleteAllowed($deleteAllowed)
    {
        $this->container['deleteAllowed'] = $deleteAllowed;
        return $this;
    }

    /**
    * Gets groupNames
    *  相关的规则组
    *
    * @return string|null
    */
    public function getGroupNames()
    {
        return $this->container['groupNames'];
    }

    /**
    * Sets groupNames
    *
    * @param string|null $groupNames 相关的规则组
    *
    * @return $this
    */
    public function setGroupNames($groupNames)
    {
        $this->container['groupNames'] = $groupNames;
        return $this;
    }

    /**
    * Gets id
    *  规则ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 规则ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets logicOperator
    *  逻辑运算符，\"AND\",\"OR\",\"REGEX\"
    *
    * @return string|null
    */
    public function getLogicOperator()
    {
        return $this->container['logicOperator'];
    }

    /**
    * Sets logicOperator
    *
    * @param string|null $logicOperator 逻辑运算符，\"AND\",\"OR\",\"REGEX\"
    *
    * @return $this
    */
    public function setLogicOperator($logicOperator)
    {
        $this->container['logicOperator'] = $logicOperator;
        return $this;
    }

    /**
    * Gets minMatch
    *  最小匹配次数
    *
    * @return int|null
    */
    public function getMinMatch()
    {
        return $this->container['minMatch'];
    }

    /**
    * Sets minMatch
    *
    * @param int|null $minMatch 最小匹配次数
    *
    * @return $this
    */
    public function setMinMatch($minMatch)
    {
        $this->container['minMatch'] = $minMatch;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险等级
    *
    * @return int|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param int|null $riskLevel 风险等级
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets ruleContent
    *  规则内容
    *
    * @return string|null
    */
    public function getRuleContent()
    {
        return $this->container['ruleContent'];
    }

    /**
    * Sets ruleContent
    *
    * @param string|null $ruleContent 规则内容
    *
    * @return $this
    */
    public function setRuleContent($ruleContent)
    {
        $this->container['ruleContent'] = $ruleContent;
        return $this;
    }

    /**
    * Gets ruleDesc
    *  规则描述
    *
    * @return string|null
    */
    public function getRuleDesc()
    {
        return $this->container['ruleDesc'];
    }

    /**
    * Sets ruleDesc
    *
    * @param string|null $ruleDesc 规则描述
    *
    * @return $this
    */
    public function setRuleDesc($ruleDesc)
    {
        $this->container['ruleDesc'] = $ruleDesc;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名称
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 规则名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets ruleType
    *  规则类型，关键字(KEYWORD)、正则表达式(REGEX)或自然语言(NLP)
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType 规则类型，关键字(KEYWORD)、正则表达式(REGEX)或自然语言(NLP)
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets selected
    *  是否可选
    *
    * @return bool|null
    */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
    * Sets selected
    *
    * @param bool|null $selected 是否可选
    *
    * @return $this
    */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;
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

