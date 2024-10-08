<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAomMappingRulesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAomMappingRulesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id
    * ruleName  接入规则名称
    * ruleId  接入规则id
    * ruleInfo  ruleInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'ruleName' => 'string',
            'ruleId' => 'string',
            'ruleInfo' => '\HuaweiCloud\SDK\Lts\V2\Model\AomMappingRuleInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id
    * ruleName  接入规则名称
    * ruleId  接入规则id
    * ruleInfo  ruleInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'ruleName' => null,
        'ruleId' => null,
        'ruleInfo' => null
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
    * projectId  项目id
    * ruleName  接入规则名称
    * ruleId  接入规则id
    * ruleInfo  ruleInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'ruleName' => 'rule_name',
            'ruleId' => 'rule_id',
            'ruleInfo' => 'rule_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id
    * ruleName  接入规则名称
    * ruleId  接入规则id
    * ruleInfo  ruleInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'ruleName' => 'setRuleName',
            'ruleId' => 'setRuleId',
            'ruleInfo' => 'setRuleInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id
    * ruleName  接入规则名称
    * ruleId  接入规则id
    * ruleInfo  ruleInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'ruleName' => 'getRuleName',
            'ruleId' => 'getRuleId',
            'ruleInfo' => 'getRuleInfo'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['ruleInfo'] = isset($data['ruleInfo']) ? $data['ruleInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) > 64)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) < 36)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be bigger than or equal to 36.";
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
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets ruleName
    *  接入规则名称
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
    * @param string|null $ruleName 接入规则名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets ruleId
    *  接入规则id
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 接入规则id
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets ruleInfo
    *  ruleInfo
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AomMappingRuleInfo|null
    */
    public function getRuleInfo()
    {
        return $this->container['ruleInfo'];
    }

    /**
    * Sets ruleInfo
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AomMappingRuleInfo|null $ruleInfo ruleInfo
    *
    * @return $this
    */
    public function setRuleInfo($ruleInfo)
    {
        $this->container['ruleInfo'] = $ruleInfo;
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

