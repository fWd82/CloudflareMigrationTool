<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullStagePluginsRelationVOPluginsList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullStagePluginsRelationVO_plugins_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uniqueId  唯一ID
    * displayName  展示名
    * pluginName  插件名
    * disabled  禁用
    * groupName  组名
    * groupType  组类型
    * pluginAttribution  插件属性
    * pluginCompositionType  组合插件
    * runtimeAttribution  运行属性
    * allSteps  基础插件列表
    * description  描述
    * versionAttribution  版本属性
    * iconUrl  图标URL
    * multiStepEditable  是否可编辑
    * standard  标准
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uniqueId' => 'string',
            'displayName' => 'string',
            'pluginName' => 'string',
            'disabled' => 'bool',
            'groupName' => 'string',
            'groupType' => 'string',
            'pluginAttribution' => 'string',
            'pluginCompositionType' => 'string',
            'runtimeAttribution' => 'string',
            'allSteps' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\FullStagePluginsRelationVOAllSteps[]',
            'description' => 'string',
            'versionAttribution' => 'string',
            'iconUrl' => 'string',
            'multiStepEditable' => 'int',
            'standard' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uniqueId  唯一ID
    * displayName  展示名
    * pluginName  插件名
    * disabled  禁用
    * groupName  组名
    * groupType  组类型
    * pluginAttribution  插件属性
    * pluginCompositionType  组合插件
    * runtimeAttribution  运行属性
    * allSteps  基础插件列表
    * description  描述
    * versionAttribution  版本属性
    * iconUrl  图标URL
    * multiStepEditable  是否可编辑
    * standard  标准
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uniqueId' => null,
        'displayName' => null,
        'pluginName' => null,
        'disabled' => null,
        'groupName' => null,
        'groupType' => null,
        'pluginAttribution' => null,
        'pluginCompositionType' => null,
        'runtimeAttribution' => null,
        'allSteps' => null,
        'description' => null,
        'versionAttribution' => null,
        'iconUrl' => null,
        'multiStepEditable' => 'int32',
        'standard' => null
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
    * uniqueId  唯一ID
    * displayName  展示名
    * pluginName  插件名
    * disabled  禁用
    * groupName  组名
    * groupType  组类型
    * pluginAttribution  插件属性
    * pluginCompositionType  组合插件
    * runtimeAttribution  运行属性
    * allSteps  基础插件列表
    * description  描述
    * versionAttribution  版本属性
    * iconUrl  图标URL
    * multiStepEditable  是否可编辑
    * standard  标准
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uniqueId' => 'unique_id',
            'displayName' => 'display_name',
            'pluginName' => 'plugin_name',
            'disabled' => 'disabled',
            'groupName' => 'group_name',
            'groupType' => 'group_type',
            'pluginAttribution' => 'plugin_attribution',
            'pluginCompositionType' => 'plugin_composition_type',
            'runtimeAttribution' => 'runtime_attribution',
            'allSteps' => 'all_steps',
            'description' => 'description',
            'versionAttribution' => 'version_attribution',
            'iconUrl' => 'icon_url',
            'multiStepEditable' => 'multi_step_editable',
            'standard' => 'standard'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uniqueId  唯一ID
    * displayName  展示名
    * pluginName  插件名
    * disabled  禁用
    * groupName  组名
    * groupType  组类型
    * pluginAttribution  插件属性
    * pluginCompositionType  组合插件
    * runtimeAttribution  运行属性
    * allSteps  基础插件列表
    * description  描述
    * versionAttribution  版本属性
    * iconUrl  图标URL
    * multiStepEditable  是否可编辑
    * standard  标准
    *
    * @var string[]
    */
    protected static $setters = [
            'uniqueId' => 'setUniqueId',
            'displayName' => 'setDisplayName',
            'pluginName' => 'setPluginName',
            'disabled' => 'setDisabled',
            'groupName' => 'setGroupName',
            'groupType' => 'setGroupType',
            'pluginAttribution' => 'setPluginAttribution',
            'pluginCompositionType' => 'setPluginCompositionType',
            'runtimeAttribution' => 'setRuntimeAttribution',
            'allSteps' => 'setAllSteps',
            'description' => 'setDescription',
            'versionAttribution' => 'setVersionAttribution',
            'iconUrl' => 'setIconUrl',
            'multiStepEditable' => 'setMultiStepEditable',
            'standard' => 'setStandard'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uniqueId  唯一ID
    * displayName  展示名
    * pluginName  插件名
    * disabled  禁用
    * groupName  组名
    * groupType  组类型
    * pluginAttribution  插件属性
    * pluginCompositionType  组合插件
    * runtimeAttribution  运行属性
    * allSteps  基础插件列表
    * description  描述
    * versionAttribution  版本属性
    * iconUrl  图标URL
    * multiStepEditable  是否可编辑
    * standard  标准
    *
    * @var string[]
    */
    protected static $getters = [
            'uniqueId' => 'getUniqueId',
            'displayName' => 'getDisplayName',
            'pluginName' => 'getPluginName',
            'disabled' => 'getDisabled',
            'groupName' => 'getGroupName',
            'groupType' => 'getGroupType',
            'pluginAttribution' => 'getPluginAttribution',
            'pluginCompositionType' => 'getPluginCompositionType',
            'runtimeAttribution' => 'getRuntimeAttribution',
            'allSteps' => 'getAllSteps',
            'description' => 'getDescription',
            'versionAttribution' => 'getVersionAttribution',
            'iconUrl' => 'getIconUrl',
            'multiStepEditable' => 'getMultiStepEditable',
            'standard' => 'getStandard'
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
        $this->container['uniqueId'] = isset($data['uniqueId']) ? $data['uniqueId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['pluginAttribution'] = isset($data['pluginAttribution']) ? $data['pluginAttribution'] : null;
        $this->container['pluginCompositionType'] = isset($data['pluginCompositionType']) ? $data['pluginCompositionType'] : null;
        $this->container['runtimeAttribution'] = isset($data['runtimeAttribution']) ? $data['runtimeAttribution'] : null;
        $this->container['allSteps'] = isset($data['allSteps']) ? $data['allSteps'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['versionAttribution'] = isset($data['versionAttribution']) ? $data['versionAttribution'] : null;
        $this->container['iconUrl'] = isset($data['iconUrl']) ? $data['iconUrl'] : null;
        $this->container['multiStepEditable'] = isset($data['multiStepEditable']) ? $data['multiStepEditable'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
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
    * Gets uniqueId
    *  唯一ID
    *
    * @return string|null
    */
    public function getUniqueId()
    {
        return $this->container['uniqueId'];
    }

    /**
    * Sets uniqueId
    *
    * @param string|null $uniqueId 唯一ID
    *
    * @return $this
    */
    public function setUniqueId($uniqueId)
    {
        $this->container['uniqueId'] = $uniqueId;
        return $this;
    }

    /**
    * Gets displayName
    *  展示名
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
    * @param string|null $displayName 展示名
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets pluginName
    *  插件名
    *
    * @return string|null
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string|null $pluginName 插件名
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets disabled
    *  禁用
    *
    * @return bool|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param bool|null $disabled 禁用
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets groupName
    *  组名
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 组名
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupType
    *  组类型
    *
    * @return string|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string|null $groupType 组类型
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets pluginAttribution
    *  插件属性
    *
    * @return string|null
    */
    public function getPluginAttribution()
    {
        return $this->container['pluginAttribution'];
    }

    /**
    * Sets pluginAttribution
    *
    * @param string|null $pluginAttribution 插件属性
    *
    * @return $this
    */
    public function setPluginAttribution($pluginAttribution)
    {
        $this->container['pluginAttribution'] = $pluginAttribution;
        return $this;
    }

    /**
    * Gets pluginCompositionType
    *  组合插件
    *
    * @return string|null
    */
    public function getPluginCompositionType()
    {
        return $this->container['pluginCompositionType'];
    }

    /**
    * Sets pluginCompositionType
    *
    * @param string|null $pluginCompositionType 组合插件
    *
    * @return $this
    */
    public function setPluginCompositionType($pluginCompositionType)
    {
        $this->container['pluginCompositionType'] = $pluginCompositionType;
        return $this;
    }

    /**
    * Gets runtimeAttribution
    *  运行属性
    *
    * @return string|null
    */
    public function getRuntimeAttribution()
    {
        return $this->container['runtimeAttribution'];
    }

    /**
    * Sets runtimeAttribution
    *
    * @param string|null $runtimeAttribution 运行属性
    *
    * @return $this
    */
    public function setRuntimeAttribution($runtimeAttribution)
    {
        $this->container['runtimeAttribution'] = $runtimeAttribution;
        return $this;
    }

    /**
    * Gets allSteps
    *  基础插件列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\FullStagePluginsRelationVOAllSteps[]|null
    */
    public function getAllSteps()
    {
        return $this->container['allSteps'];
    }

    /**
    * Sets allSteps
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\FullStagePluginsRelationVOAllSteps[]|null $allSteps 基础插件列表
    *
    * @return $this
    */
    public function setAllSteps($allSteps)
    {
        $this->container['allSteps'] = $allSteps;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets versionAttribution
    *  版本属性
    *
    * @return string|null
    */
    public function getVersionAttribution()
    {
        return $this->container['versionAttribution'];
    }

    /**
    * Sets versionAttribution
    *
    * @param string|null $versionAttribution 版本属性
    *
    * @return $this
    */
    public function setVersionAttribution($versionAttribution)
    {
        $this->container['versionAttribution'] = $versionAttribution;
        return $this;
    }

    /**
    * Gets iconUrl
    *  图标URL
    *
    * @return string|null
    */
    public function getIconUrl()
    {
        return $this->container['iconUrl'];
    }

    /**
    * Sets iconUrl
    *
    * @param string|null $iconUrl 图标URL
    *
    * @return $this
    */
    public function setIconUrl($iconUrl)
    {
        $this->container['iconUrl'] = $iconUrl;
        return $this;
    }

    /**
    * Gets multiStepEditable
    *  是否可编辑
    *
    * @return int|null
    */
    public function getMultiStepEditable()
    {
        return $this->container['multiStepEditable'];
    }

    /**
    * Sets multiStepEditable
    *
    * @param int|null $multiStepEditable 是否可编辑
    *
    * @return $this
    */
    public function setMultiStepEditable($multiStepEditable)
    {
        $this->container['multiStepEditable'] = $multiStepEditable;
        return $this;
    }

    /**
    * Gets standard
    *  标准
    *
    * @return bool|null
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param bool|null $standard 标准
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
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

