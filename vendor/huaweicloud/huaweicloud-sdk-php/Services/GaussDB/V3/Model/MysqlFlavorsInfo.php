<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlFlavorsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlFlavorsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * type  规格类型，取值为arm、x86和generalX86。  - arm：独享型arm规格。 - x86：独享型x86规格。 - generalX86：通用型X86规格。
    * id  规格ID，该字段唯一
    * specCode  资源规格编码，同创建指定的flavor_ref。例如：gaussdb.mysql.xlarge.x86.4。
    * versionName  数据库版本号。
    * instanceMode  实例类型。目前仅支持Cluster。
    * azStatus  规格所在az的状态，包含以下状态：  - normal，在售 - unsupported，暂不支持该规格 - sellout，售罄。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vcpus' => 'string',
            'ram' => 'string',
            'type' => 'string',
            'id' => 'string',
            'specCode' => 'string',
            'versionName' => 'string',
            'instanceMode' => 'string',
            'azStatus' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * type  规格类型，取值为arm、x86和generalX86。  - arm：独享型arm规格。 - x86：独享型x86规格。 - generalX86：通用型X86规格。
    * id  规格ID，该字段唯一
    * specCode  资源规格编码，同创建指定的flavor_ref。例如：gaussdb.mysql.xlarge.x86.4。
    * versionName  数据库版本号。
    * instanceMode  实例类型。目前仅支持Cluster。
    * azStatus  规格所在az的状态，包含以下状态：  - normal，在售 - unsupported，暂不支持该规格 - sellout，售罄。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vcpus' => null,
        'ram' => null,
        'type' => null,
        'id' => null,
        'specCode' => null,
        'versionName' => null,
        'instanceMode' => null,
        'azStatus' => null
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
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * type  规格类型，取值为arm、x86和generalX86。  - arm：独享型arm规格。 - x86：独享型x86规格。 - generalX86：通用型X86规格。
    * id  规格ID，该字段唯一
    * specCode  资源规格编码，同创建指定的flavor_ref。例如：gaussdb.mysql.xlarge.x86.4。
    * versionName  数据库版本号。
    * instanceMode  实例类型。目前仅支持Cluster。
    * azStatus  规格所在az的状态，包含以下状态：  - normal，在售 - unsupported，暂不支持该规格 - sellout，售罄。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'type' => 'type',
            'id' => 'id',
            'specCode' => 'spec_code',
            'versionName' => 'version_name',
            'instanceMode' => 'instance_mode',
            'azStatus' => 'az_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * type  规格类型，取值为arm、x86和generalX86。  - arm：独享型arm规格。 - x86：独享型x86规格。 - generalX86：通用型X86规格。
    * id  规格ID，该字段唯一
    * specCode  资源规格编码，同创建指定的flavor_ref。例如：gaussdb.mysql.xlarge.x86.4。
    * versionName  数据库版本号。
    * instanceMode  实例类型。目前仅支持Cluster。
    * azStatus  规格所在az的状态，包含以下状态：  - normal，在售 - unsupported，暂不支持该规格 - sellout，售罄。
    *
    * @var string[]
    */
    protected static $setters = [
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'type' => 'setType',
            'id' => 'setId',
            'specCode' => 'setSpecCode',
            'versionName' => 'setVersionName',
            'instanceMode' => 'setInstanceMode',
            'azStatus' => 'setAzStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * type  规格类型，取值为arm、x86和generalX86。  - arm：独享型arm规格。 - x86：独享型x86规格。 - generalX86：通用型X86规格。
    * id  规格ID，该字段唯一
    * specCode  资源规格编码，同创建指定的flavor_ref。例如：gaussdb.mysql.xlarge.x86.4。
    * versionName  数据库版本号。
    * instanceMode  实例类型。目前仅支持Cluster。
    * azStatus  规格所在az的状态，包含以下状态：  - normal，在售 - unsupported，暂不支持该规格 - sellout，售罄。
    *
    * @var string[]
    */
    protected static $getters = [
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'type' => 'getType',
            'id' => 'getId',
            'specCode' => 'getSpecCode',
            'versionName' => 'getVersionName',
            'instanceMode' => 'getInstanceMode',
            'azStatus' => 'getAzStatus'
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
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
        $this->container['instanceMode'] = isset($data['instanceMode']) ? $data['instanceMode'] : null;
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vcpus'] === null) {
            $invalidProperties[] = "'vcpus' can't be null";
        }
        if ($this->container['ram'] === null) {
            $invalidProperties[] = "'ram' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
        if ($this->container['versionName'] === null) {
            $invalidProperties[] = "'versionName' can't be null";
        }
        if ($this->container['instanceMode'] === null) {
            $invalidProperties[] = "'instanceMode' can't be null";
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
    * Gets vcpus
    *  CPU大小。例如：1表示1U。
    *
    * @return string
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string $vcpus CPU大小。例如：1表示1U。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  内存大小，单位为GB。
    *
    * @return string
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string $ram 内存大小，单位为GB。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets type
    *  规格类型，取值为arm、x86和generalX86。  - arm：独享型arm规格。 - x86：独享型x86规格。 - generalX86：通用型X86规格。
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
    * @param string $type 规格类型，取值为arm、x86和generalX86。  - arm：独享型arm规格。 - x86：独享型x86规格。 - generalX86：通用型X86规格。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets id
    *  规格ID，该字段唯一
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 规格ID，该字段唯一
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets specCode
    *  资源规格编码，同创建指定的flavor_ref。例如：gaussdb.mysql.xlarge.x86.4。
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode 资源规格编码，同创建指定的flavor_ref。例如：gaussdb.mysql.xlarge.x86.4。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets versionName
    *  数据库版本号。
    *
    * @return string
    */
    public function getVersionName()
    {
        return $this->container['versionName'];
    }

    /**
    * Sets versionName
    *
    * @param string $versionName 数据库版本号。
    *
    * @return $this
    */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;
        return $this;
    }

    /**
    * Gets instanceMode
    *  实例类型。目前仅支持Cluster。
    *
    * @return string
    */
    public function getInstanceMode()
    {
        return $this->container['instanceMode'];
    }

    /**
    * Sets instanceMode
    *
    * @param string $instanceMode 实例类型。目前仅支持Cluster。
    *
    * @return $this
    */
    public function setInstanceMode($instanceMode)
    {
        $this->container['instanceMode'] = $instanceMode;
        return $this;
    }

    /**
    * Gets azStatus
    *  规格所在az的状态，包含以下状态：  - normal，在售 - unsupported，暂不支持该规格 - sellout，售罄。
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
    * @param map[string,string] $azStatus 规格所在az的状态，包含以下状态：  - normal，在售 - unsupported，暂不支持该规格 - sellout，售罄。
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
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

