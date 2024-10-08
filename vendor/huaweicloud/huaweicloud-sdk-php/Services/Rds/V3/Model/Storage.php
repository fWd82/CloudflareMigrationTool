<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Storage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Storage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  磁盘类型名称，可能取值如下： - ULTRAHIGH：表示SSD。 - LOCALSSD：表示本地SSD。 - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。 - ESSD：表示极速型SSD，仅支持独享型规格实例。
    * azStatus  其中key是可用区编号，value是规格所在az的状态，包含以下状态： - normal，在售。 - unsupported，暂不支持该规格。 - sellout，售罄。
    * supportComputeGroupType  性能规格，包含以下状态： - normal：通用增强型。 - normal2：通用增强Ⅱ型。 - armFlavors：鲲鹏通用增强型。 - dedicicatenormal ：x86独享型。 - armlocalssd：鲲鹏通用型。 - normallocalssd：x86通用型。 - general：通用型。 - dedicated：独享型，仅云盘SSD支持。 - rapid：独享型，仅极速型SSD支持。 - bigmen：超大内存型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'azStatus' => 'map[string,string]',
            'supportComputeGroupType' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  磁盘类型名称，可能取值如下： - ULTRAHIGH：表示SSD。 - LOCALSSD：表示本地SSD。 - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。 - ESSD：表示极速型SSD，仅支持独享型规格实例。
    * azStatus  其中key是可用区编号，value是规格所在az的状态，包含以下状态： - normal，在售。 - unsupported，暂不支持该规格。 - sellout，售罄。
    * supportComputeGroupType  性能规格，包含以下状态： - normal：通用增强型。 - normal2：通用增强Ⅱ型。 - armFlavors：鲲鹏通用增强型。 - dedicicatenormal ：x86独享型。 - armlocalssd：鲲鹏通用型。 - normallocalssd：x86通用型。 - general：通用型。 - dedicated：独享型，仅云盘SSD支持。 - rapid：独享型，仅极速型SSD支持。 - bigmen：超大内存型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'azStatus' => null,
        'supportComputeGroupType' => null
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
    * name  磁盘类型名称，可能取值如下： - ULTRAHIGH：表示SSD。 - LOCALSSD：表示本地SSD。 - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。 - ESSD：表示极速型SSD，仅支持独享型规格实例。
    * azStatus  其中key是可用区编号，value是规格所在az的状态，包含以下状态： - normal，在售。 - unsupported，暂不支持该规格。 - sellout，售罄。
    * supportComputeGroupType  性能规格，包含以下状态： - normal：通用增强型。 - normal2：通用增强Ⅱ型。 - armFlavors：鲲鹏通用增强型。 - dedicicatenormal ：x86独享型。 - armlocalssd：鲲鹏通用型。 - normallocalssd：x86通用型。 - general：通用型。 - dedicated：独享型，仅云盘SSD支持。 - rapid：独享型，仅极速型SSD支持。 - bigmen：超大内存型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'azStatus' => 'az_status',
            'supportComputeGroupType' => 'support_compute_group_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  磁盘类型名称，可能取值如下： - ULTRAHIGH：表示SSD。 - LOCALSSD：表示本地SSD。 - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。 - ESSD：表示极速型SSD，仅支持独享型规格实例。
    * azStatus  其中key是可用区编号，value是规格所在az的状态，包含以下状态： - normal，在售。 - unsupported，暂不支持该规格。 - sellout，售罄。
    * supportComputeGroupType  性能规格，包含以下状态： - normal：通用增强型。 - normal2：通用增强Ⅱ型。 - armFlavors：鲲鹏通用增强型。 - dedicicatenormal ：x86独享型。 - armlocalssd：鲲鹏通用型。 - normallocalssd：x86通用型。 - general：通用型。 - dedicated：独享型，仅云盘SSD支持。 - rapid：独享型，仅极速型SSD支持。 - bigmen：超大内存型。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'azStatus' => 'setAzStatus',
            'supportComputeGroupType' => 'setSupportComputeGroupType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  磁盘类型名称，可能取值如下： - ULTRAHIGH：表示SSD。 - LOCALSSD：表示本地SSD。 - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。 - ESSD：表示极速型SSD，仅支持独享型规格实例。
    * azStatus  其中key是可用区编号，value是规格所在az的状态，包含以下状态： - normal，在售。 - unsupported，暂不支持该规格。 - sellout，售罄。
    * supportComputeGroupType  性能规格，包含以下状态： - normal：通用增强型。 - normal2：通用增强Ⅱ型。 - armFlavors：鲲鹏通用增强型。 - dedicicatenormal ：x86独享型。 - armlocalssd：鲲鹏通用型。 - normallocalssd：x86通用型。 - general：通用型。 - dedicated：独享型，仅云盘SSD支持。 - rapid：独享型，仅极速型SSD支持。 - bigmen：超大内存型。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'azStatus' => 'getAzStatus',
            'supportComputeGroupType' => 'getSupportComputeGroupType'
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
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
        $this->container['supportComputeGroupType'] = isset($data['supportComputeGroupType']) ? $data['supportComputeGroupType'] : null;
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
        if ($this->container['azStatus'] === null) {
            $invalidProperties[] = "'azStatus' can't be null";
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
    *  磁盘类型名称，可能取值如下： - ULTRAHIGH：表示SSD。 - LOCALSSD：表示本地SSD。 - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。 - ESSD：表示极速型SSD，仅支持独享型规格实例。
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
    * @param string $name 磁盘类型名称，可能取值如下： - ULTRAHIGH：表示SSD。 - LOCALSSD：表示本地SSD。 - CLOUDSSD：表示SSD云盘，仅支持通用型和独享型规格实例。 - ESSD：表示极速型SSD，仅支持独享型规格实例。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets azStatus
    *  其中key是可用区编号，value是规格所在az的状态，包含以下状态： - normal，在售。 - unsupported，暂不支持该规格。 - sellout，售罄。
    *
    * @return map[string,string]
    */
    public function getAzStatus()
    {
        return $this->container['azStatus'];
    }

    /**
    * Sets azStatus
    *
    * @param map[string,string] $azStatus 其中key是可用区编号，value是规格所在az的状态，包含以下状态： - normal，在售。 - unsupported，暂不支持该规格。 - sellout，售罄。
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
        return $this;
    }

    /**
    * Gets supportComputeGroupType
    *  性能规格，包含以下状态： - normal：通用增强型。 - normal2：通用增强Ⅱ型。 - armFlavors：鲲鹏通用增强型。 - dedicicatenormal ：x86独享型。 - armlocalssd：鲲鹏通用型。 - normallocalssd：x86通用型。 - general：通用型。 - dedicated：独享型，仅云盘SSD支持。 - rapid：独享型，仅极速型SSD支持。 - bigmen：超大内存型。
    *
    * @return string[]|null
    */
    public function getSupportComputeGroupType()
    {
        return $this->container['supportComputeGroupType'];
    }

    /**
    * Sets supportComputeGroupType
    *
    * @param string[]|null $supportComputeGroupType 性能规格，包含以下状态： - normal：通用增强型。 - normal2：通用增强Ⅱ型。 - armFlavors：鲲鹏通用增强型。 - dedicicatenormal ：x86独享型。 - armlocalssd：鲲鹏通用型。 - normallocalssd：x86通用型。 - general：通用型。 - dedicated：独享型，仅云盘SSD支持。 - rapid：独享型，仅极速型SSD支持。 - bigmen：超大内存型。
    *
    * @return $this
    */
    public function setSupportComputeGroupType($supportComputeGroupType)
    {
        $this->container['supportComputeGroupType'] = $supportComputeGroupType;
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

