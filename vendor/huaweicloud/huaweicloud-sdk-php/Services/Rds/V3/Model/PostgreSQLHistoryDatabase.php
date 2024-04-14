<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostgreSQLHistoryDatabase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostgreSQLHistoryDatabase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数据库名
    * totalTables  可恢复表的数量
    * schemas  模式信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'totalTables' => 'int',
            'schemas' => '\HuaweiCloud\SDK\Rds\V3\Model\PostgreSQLHistorySchema[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数据库名
    * totalTables  可恢复表的数量
    * schemas  模式信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'totalTables' => 'int32',
        'schemas' => null
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
    * name  数据库名
    * totalTables  可恢复表的数量
    * schemas  模式信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'totalTables' => 'total_tables',
            'schemas' => 'schemas'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数据库名
    * totalTables  可恢复表的数量
    * schemas  模式信息
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'totalTables' => 'setTotalTables',
            'schemas' => 'setSchemas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数据库名
    * totalTables  可恢复表的数量
    * schemas  模式信息
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'totalTables' => 'getTotalTables',
            'schemas' => 'getSchemas'
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
        $this->container['totalTables'] = isset($data['totalTables']) ? $data['totalTables'] : null;
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
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
    * Gets name
    *  数据库名
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
    * @param string|null $name 数据库名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets totalTables
    *  可恢复表的数量
    *
    * @return int|null
    */
    public function getTotalTables()
    {
        return $this->container['totalTables'];
    }

    /**
    * Sets totalTables
    *
    * @param int|null $totalTables 可恢复表的数量
    *
    * @return $this
    */
    public function setTotalTables($totalTables)
    {
        $this->container['totalTables'] = $totalTables;
        return $this;
    }

    /**
    * Gets schemas
    *  模式信息
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\PostgreSQLHistorySchema[]|null
    */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
    * Sets schemas
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\PostgreSQLHistorySchema[]|null $schemas 模式信息
    *
    * @return $this
    */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;
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

