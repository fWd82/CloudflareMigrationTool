<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrationTaskList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrationTaskList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  迁移任务ID。
    * taskName  迁移任务名称。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * ecsTenantPrivateIp  迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    * dataSource  数据源，格式为ip:port或者桶名。
    * sourceInstanceName  源实例名称，若自建redis则为空。
    * sourceInstanceId  源实例ID，若自建redis则为空。
    * targetInstanceAddrs  目标redis地址，格式为ip:port。
    * targetInstanceName  目标实例名称。
    * targetInstanceId  目标实例ID。
    * createdAt  迁移任务创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskName' => 'string',
            'status' => 'string',
            'migrationType' => 'string',
            'migrationMethod' => 'string',
            'ecsTenantPrivateIp' => 'string',
            'dataSource' => 'string',
            'sourceInstanceName' => 'string',
            'sourceInstanceId' => 'string',
            'targetInstanceAddrs' => 'string',
            'targetInstanceName' => 'string',
            'targetInstanceId' => 'string',
            'createdAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  迁移任务ID。
    * taskName  迁移任务名称。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * ecsTenantPrivateIp  迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    * dataSource  数据源，格式为ip:port或者桶名。
    * sourceInstanceName  源实例名称，若自建redis则为空。
    * sourceInstanceId  源实例ID，若自建redis则为空。
    * targetInstanceAddrs  目标redis地址，格式为ip:port。
    * targetInstanceName  目标实例名称。
    * targetInstanceId  目标实例ID。
    * createdAt  迁移任务创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskName' => null,
        'status' => null,
        'migrationType' => null,
        'migrationMethod' => null,
        'ecsTenantPrivateIp' => null,
        'dataSource' => null,
        'sourceInstanceName' => null,
        'sourceInstanceId' => null,
        'targetInstanceAddrs' => null,
        'targetInstanceName' => null,
        'targetInstanceId' => null,
        'createdAt' => null
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
    * taskId  迁移任务ID。
    * taskName  迁移任务名称。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * ecsTenantPrivateIp  迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    * dataSource  数据源，格式为ip:port或者桶名。
    * sourceInstanceName  源实例名称，若自建redis则为空。
    * sourceInstanceId  源实例ID，若自建redis则为空。
    * targetInstanceAddrs  目标redis地址，格式为ip:port。
    * targetInstanceName  目标实例名称。
    * targetInstanceId  目标实例ID。
    * createdAt  迁移任务创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'status' => 'status',
            'migrationType' => 'migration_type',
            'migrationMethod' => 'migration_method',
            'ecsTenantPrivateIp' => 'ecs_tenant_private_ip',
            'dataSource' => 'data_source',
            'sourceInstanceName' => 'source_instance_name',
            'sourceInstanceId' => 'source_instance_id',
            'targetInstanceAddrs' => 'target_instance_addrs',
            'targetInstanceName' => 'target_instance_name',
            'targetInstanceId' => 'target_instance_id',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  迁移任务ID。
    * taskName  迁移任务名称。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * ecsTenantPrivateIp  迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    * dataSource  数据源，格式为ip:port或者桶名。
    * sourceInstanceName  源实例名称，若自建redis则为空。
    * sourceInstanceId  源实例ID，若自建redis则为空。
    * targetInstanceAddrs  目标redis地址，格式为ip:port。
    * targetInstanceName  目标实例名称。
    * targetInstanceId  目标实例ID。
    * createdAt  迁移任务创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'status' => 'setStatus',
            'migrationType' => 'setMigrationType',
            'migrationMethod' => 'setMigrationMethod',
            'ecsTenantPrivateIp' => 'setEcsTenantPrivateIp',
            'dataSource' => 'setDataSource',
            'sourceInstanceName' => 'setSourceInstanceName',
            'sourceInstanceId' => 'setSourceInstanceId',
            'targetInstanceAddrs' => 'setTargetInstanceAddrs',
            'targetInstanceName' => 'setTargetInstanceName',
            'targetInstanceId' => 'setTargetInstanceId',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  迁移任务ID。
    * taskName  迁移任务名称。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * ecsTenantPrivateIp  迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    * dataSource  数据源，格式为ip:port或者桶名。
    * sourceInstanceName  源实例名称，若自建redis则为空。
    * sourceInstanceId  源实例ID，若自建redis则为空。
    * targetInstanceAddrs  目标redis地址，格式为ip:port。
    * targetInstanceName  目标实例名称。
    * targetInstanceId  目标实例ID。
    * createdAt  迁移任务创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'status' => 'getStatus',
            'migrationType' => 'getMigrationType',
            'migrationMethod' => 'getMigrationMethod',
            'ecsTenantPrivateIp' => 'getEcsTenantPrivateIp',
            'dataSource' => 'getDataSource',
            'sourceInstanceName' => 'getSourceInstanceName',
            'sourceInstanceId' => 'getSourceInstanceId',
            'targetInstanceAddrs' => 'getTargetInstanceAddrs',
            'targetInstanceName' => 'getTargetInstanceName',
            'targetInstanceId' => 'getTargetInstanceId',
            'createdAt' => 'getCreatedAt'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAILED = 'FAILED';
    const STATUS_MIGRATING = 'MIGRATING';
    const STATUS_TERMINATED = 'TERMINATED';
    const MIGRATION_TYPE_BACKUPFILE_IMPORT = 'backupfile_import';
    const MIGRATION_TYPE_ONLINE_MIGRATION = 'online_migration';
    const MIGRATION_METHOD_FULL_AMOUNT_MIGRATION = 'full_amount_migration';
    const MIGRATION_METHOD_INCREMENTAL_MIGRATION = 'incremental_migration';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
            self::STATUS_MIGRATING,
            self::STATUS_TERMINATED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMigrationTypeAllowableValues()
    {
        return [
            self::MIGRATION_TYPE_BACKUPFILE_IMPORT,
            self::MIGRATION_TYPE_ONLINE_MIGRATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMigrationMethodAllowableValues()
    {
        return [
            self::MIGRATION_METHOD_FULL_AMOUNT_MIGRATION,
            self::MIGRATION_METHOD_INCREMENTAL_MIGRATION,
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['migrationType'] = isset($data['migrationType']) ? $data['migrationType'] : null;
        $this->container['migrationMethod'] = isset($data['migrationMethod']) ? $data['migrationMethod'] : null;
        $this->container['ecsTenantPrivateIp'] = isset($data['ecsTenantPrivateIp']) ? $data['ecsTenantPrivateIp'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['sourceInstanceName'] = isset($data['sourceInstanceName']) ? $data['sourceInstanceName'] : null;
        $this->container['sourceInstanceId'] = isset($data['sourceInstanceId']) ? $data['sourceInstanceId'] : null;
        $this->container['targetInstanceAddrs'] = isset($data['targetInstanceAddrs']) ? $data['targetInstanceAddrs'] : null;
        $this->container['targetInstanceName'] = isset($data['targetInstanceName']) ? $data['targetInstanceName'] : null;
        $this->container['targetInstanceId'] = isset($data['targetInstanceId']) ? $data['targetInstanceId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMigrationTypeAllowableValues();
                if (!is_null($this->container['migrationType']) && !in_array($this->container['migrationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMigrationMethodAllowableValues();
                if (!is_null($this->container['migrationMethod']) && !in_array($this->container['migrationMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrationMethod', must be one of '%s'",
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
    * Gets taskId
    *  迁移任务ID。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 迁移任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  迁移任务名称。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 迁移任务名称。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets status
    *  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets migrationType
    *  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    *
    * @return string|null
    */
    public function getMigrationType()
    {
        return $this->container['migrationType'];
    }

    /**
    * Sets migrationType
    *
    * @param string|null $migrationType 迁移任务类型,包括备份文件导入和在线迁移两种类型。
    *
    * @return $this
    */
    public function setMigrationType($migrationType)
    {
        $this->container['migrationType'] = $migrationType;
        return $this;
    }

    /**
    * Gets migrationMethod
    *  迁移方式，包括全量迁移和增量迁移两种类型。
    *
    * @return string|null
    */
    public function getMigrationMethod()
    {
        return $this->container['migrationMethod'];
    }

    /**
    * Sets migrationMethod
    *
    * @param string|null $migrationMethod 迁移方式，包括全量迁移和增量迁移两种类型。
    *
    * @return $this
    */
    public function setMigrationMethod($migrationMethod)
    {
        $this->container['migrationMethod'] = $migrationMethod;
        return $this;
    }

    /**
    * Gets ecsTenantPrivateIp
    *  迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    *
    * @return string|null
    */
    public function getEcsTenantPrivateIp()
    {
        return $this->container['ecsTenantPrivateIp'];
    }

    /**
    * Sets ecsTenantPrivateIp
    *
    * @param string|null $ecsTenantPrivateIp 迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    *
    * @return $this
    */
    public function setEcsTenantPrivateIp($ecsTenantPrivateIp)
    {
        $this->container['ecsTenantPrivateIp'] = $ecsTenantPrivateIp;
        return $this;
    }

    /**
    * Gets dataSource
    *  数据源，格式为ip:port或者桶名。
    *
    * @return string|null
    */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
    * Sets dataSource
    *
    * @param string|null $dataSource 数据源，格式为ip:port或者桶名。
    *
    * @return $this
    */
    public function setDataSource($dataSource)
    {
        $this->container['dataSource'] = $dataSource;
        return $this;
    }

    /**
    * Gets sourceInstanceName
    *  源实例名称，若自建redis则为空。
    *
    * @return string|null
    */
    public function getSourceInstanceName()
    {
        return $this->container['sourceInstanceName'];
    }

    /**
    * Sets sourceInstanceName
    *
    * @param string|null $sourceInstanceName 源实例名称，若自建redis则为空。
    *
    * @return $this
    */
    public function setSourceInstanceName($sourceInstanceName)
    {
        $this->container['sourceInstanceName'] = $sourceInstanceName;
        return $this;
    }

    /**
    * Gets sourceInstanceId
    *  源实例ID，若自建redis则为空。
    *
    * @return string|null
    */
    public function getSourceInstanceId()
    {
        return $this->container['sourceInstanceId'];
    }

    /**
    * Sets sourceInstanceId
    *
    * @param string|null $sourceInstanceId 源实例ID，若自建redis则为空。
    *
    * @return $this
    */
    public function setSourceInstanceId($sourceInstanceId)
    {
        $this->container['sourceInstanceId'] = $sourceInstanceId;
        return $this;
    }

    /**
    * Gets targetInstanceAddrs
    *  目标redis地址，格式为ip:port。
    *
    * @return string|null
    */
    public function getTargetInstanceAddrs()
    {
        return $this->container['targetInstanceAddrs'];
    }

    /**
    * Sets targetInstanceAddrs
    *
    * @param string|null $targetInstanceAddrs 目标redis地址，格式为ip:port。
    *
    * @return $this
    */
    public function setTargetInstanceAddrs($targetInstanceAddrs)
    {
        $this->container['targetInstanceAddrs'] = $targetInstanceAddrs;
        return $this;
    }

    /**
    * Gets targetInstanceName
    *  目标实例名称。
    *
    * @return string|null
    */
    public function getTargetInstanceName()
    {
        return $this->container['targetInstanceName'];
    }

    /**
    * Sets targetInstanceName
    *
    * @param string|null $targetInstanceName 目标实例名称。
    *
    * @return $this
    */
    public function setTargetInstanceName($targetInstanceName)
    {
        $this->container['targetInstanceName'] = $targetInstanceName;
        return $this;
    }

    /**
    * Gets targetInstanceId
    *  目标实例ID。
    *
    * @return string|null
    */
    public function getTargetInstanceId()
    {
        return $this->container['targetInstanceId'];
    }

    /**
    * Sets targetInstanceId
    *
    * @param string|null $targetInstanceId 目标实例ID。
    *
    * @return $this
    */
    public function setTargetInstanceId($targetInstanceId)
    {
        $this->container['targetInstanceId'] = $targetInstanceId;
        return $this;
    }

    /**
    * Gets createdAt
    *  迁移任务创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 迁移任务创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

