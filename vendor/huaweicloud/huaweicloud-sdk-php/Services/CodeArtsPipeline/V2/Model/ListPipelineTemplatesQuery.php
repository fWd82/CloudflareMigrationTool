<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPipelineTemplatesQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPipelineTemplatesQuery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * language  创建模板时，用户选择的语言
    * isSystem  是否系统模板
    * name  模板名称
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0，默认为0
    * limit  每次查询的条目数量
    * sortKey  用于排序的字段，非必选。取值为：name，create_time
    * sortDir  排序类型，非必选。asc按排序字段升序，desc按排序字段降序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'language' => 'string',
            'isSystem' => 'bool',
            'name' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * language  创建模板时，用户选择的语言
    * isSystem  是否系统模板
    * name  模板名称
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0，默认为0
    * limit  每次查询的条目数量
    * sortKey  用于排序的字段，非必选。取值为：name，create_time
    * sortDir  排序类型，非必选。asc按排序字段升序，desc按排序字段降序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'language' => null,
        'isSystem' => null,
        'name' => null,
        'offset' => 'int64',
        'limit' => 'int64',
        'sortKey' => null,
        'sortDir' => null
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
    * language  创建模板时，用户选择的语言
    * isSystem  是否系统模板
    * name  模板名称
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0，默认为0
    * limit  每次查询的条目数量
    * sortKey  用于排序的字段，非必选。取值为：name，create_time
    * sortDir  排序类型，非必选。asc按排序字段升序，desc按排序字段降序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'language' => 'language',
            'isSystem' => 'is_system',
            'name' => 'name',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * language  创建模板时，用户选择的语言
    * isSystem  是否系统模板
    * name  模板名称
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0，默认为0
    * limit  每次查询的条目数量
    * sortKey  用于排序的字段，非必选。取值为：name，create_time
    * sortDir  排序类型，非必选。asc按排序字段升序，desc按排序字段降序
    *
    * @var string[]
    */
    protected static $setters = [
            'language' => 'setLanguage',
            'isSystem' => 'setIsSystem',
            'name' => 'setName',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * language  创建模板时，用户选择的语言
    * isSystem  是否系统模板
    * name  模板名称
    * offset  偏移量，表示从此偏移量开始查询，offset大于等于0，默认为0
    * limit  每次查询的条目数量
    * sortKey  用于排序的字段，非必选。取值为：name，create_time
    * sortDir  排序类型，非必选。asc按排序字段升序，desc按排序字段降序
    *
    * @var string[]
    */
    protected static $getters = [
            'language' => 'getLanguage',
            'isSystem' => 'getIsSystem',
            'name' => 'getName',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['isSystem'] = isset($data['isSystem']) ? $data['isSystem'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
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
    * Gets language
    *  创建模板时，用户选择的语言
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 创建模板时，用户选择的语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets isSystem
    *  是否系统模板
    *
    * @return bool|null
    */
    public function getIsSystem()
    {
        return $this->container['isSystem'];
    }

    /**
    * Sets isSystem
    *
    * @param bool|null $isSystem 是否系统模板
    *
    * @return $this
    */
    public function setIsSystem($isSystem)
    {
        $this->container['isSystem'] = $isSystem;
        return $this;
    }

    /**
    * Gets name
    *  模板名称
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
    * @param string|null $name 模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询，offset大于等于0，默认为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，表示从此偏移量开始查询，offset大于等于0，默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每次查询的条目数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每次查询的条目数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  用于排序的字段，非必选。取值为：name，create_time
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 用于排序的字段，非必选。取值为：name，create_time
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序类型，非必选。asc按排序字段升序，desc按排序字段降序
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序类型，非必选。asc按排序字段升序，desc按排序字段降序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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

