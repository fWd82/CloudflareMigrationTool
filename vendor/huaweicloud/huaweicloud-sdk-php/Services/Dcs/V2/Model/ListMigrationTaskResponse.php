<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMigrationTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMigrationTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  迁移任务数量。
    * migrationTasks  迁移任务列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'migrationTasks' => '\HuaweiCloud\SDK\Dcs\V2\Model\MigrationTaskList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  迁移任务数量。
    * migrationTasks  迁移任务列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => null,
        'migrationTasks' => null
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
    * count  迁移任务数量。
    * migrationTasks  迁移任务列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'migrationTasks' => 'migration_tasks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  迁移任务数量。
    * migrationTasks  迁移任务列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'migrationTasks' => 'setMigrationTasks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  迁移任务数量。
    * migrationTasks  迁移任务列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'migrationTasks' => 'getMigrationTasks'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['migrationTasks'] = isset($data['migrationTasks']) ? $data['migrationTasks'] : null;
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
    * Gets count
    *  迁移任务数量。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 迁移任务数量。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets migrationTasks
    *  迁移任务列表。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\MigrationTaskList[]|null
    */
    public function getMigrationTasks()
    {
        return $this->container['migrationTasks'];
    }

    /**
    * Sets migrationTasks
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\MigrationTaskList[]|null $migrationTasks 迁移任务列表。
    *
    * @return $this
    */
    public function setMigrationTasks($migrationTasks)
    {
        $this->container['migrationTasks'] = $migrationTasks;
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

