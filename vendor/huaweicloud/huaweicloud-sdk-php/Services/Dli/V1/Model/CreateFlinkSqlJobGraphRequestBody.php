<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFlinkSqlJobGraphRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFlinkSqlJobGraphRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlBody  SQL
    * flinkVersion  Flink版本。当前只支持1.10和1.12。
    * cuNumber  CU总数
    * managerCuNumber  管理单元CU数量
    * parallelNumber  最大并行度
    * tmCus  单个taskManagerCU数量
    * tmSlotNum  单个taskManager Slot数量
    * operatorConfig  算子的配置
    * staticEstimator  是否静态资源预估
    * jobType  作业类型
    * graphType  流图类型。当前支持以下两种流图类型。 简化流图：simple_graph 静态流图：job_graph。
    * staticEstimatorConfig  每个算子的流量/命中率配置，json格式的字符串。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlBody' => 'string',
            'flinkVersion' => 'string',
            'cuNumber' => 'int',
            'managerCuNumber' => 'int',
            'parallelNumber' => 'int',
            'tmCus' => 'int',
            'tmSlotNum' => 'int',
            'operatorConfig' => 'string',
            'staticEstimator' => 'bool',
            'jobType' => 'string',
            'graphType' => 'string',
            'staticEstimatorConfig' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlBody  SQL
    * flinkVersion  Flink版本。当前只支持1.10和1.12。
    * cuNumber  CU总数
    * managerCuNumber  管理单元CU数量
    * parallelNumber  最大并行度
    * tmCus  单个taskManagerCU数量
    * tmSlotNum  单个taskManager Slot数量
    * operatorConfig  算子的配置
    * staticEstimator  是否静态资源预估
    * jobType  作业类型
    * graphType  流图类型。当前支持以下两种流图类型。 简化流图：simple_graph 静态流图：job_graph。
    * staticEstimatorConfig  每个算子的流量/命中率配置，json格式的字符串。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlBody' => null,
        'flinkVersion' => null,
        'cuNumber' => 'int32',
        'managerCuNumber' => 'int32',
        'parallelNumber' => 'int32',
        'tmCus' => 'int32',
        'tmSlotNum' => 'int32',
        'operatorConfig' => null,
        'staticEstimator' => null,
        'jobType' => null,
        'graphType' => null,
        'staticEstimatorConfig' => null
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
    * sqlBody  SQL
    * flinkVersion  Flink版本。当前只支持1.10和1.12。
    * cuNumber  CU总数
    * managerCuNumber  管理单元CU数量
    * parallelNumber  最大并行度
    * tmCus  单个taskManagerCU数量
    * tmSlotNum  单个taskManager Slot数量
    * operatorConfig  算子的配置
    * staticEstimator  是否静态资源预估
    * jobType  作业类型
    * graphType  流图类型。当前支持以下两种流图类型。 简化流图：simple_graph 静态流图：job_graph。
    * staticEstimatorConfig  每个算子的流量/命中率配置，json格式的字符串。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlBody' => 'sql_body',
            'flinkVersion' => 'flink_version',
            'cuNumber' => 'cu_number',
            'managerCuNumber' => 'manager_cu_number',
            'parallelNumber' => 'parallel_number',
            'tmCus' => 'tm_cus',
            'tmSlotNum' => 'tm_slot_num',
            'operatorConfig' => 'operator_config',
            'staticEstimator' => 'static_estimator',
            'jobType' => 'job_type',
            'graphType' => 'graph_type',
            'staticEstimatorConfig' => 'static_estimator_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlBody  SQL
    * flinkVersion  Flink版本。当前只支持1.10和1.12。
    * cuNumber  CU总数
    * managerCuNumber  管理单元CU数量
    * parallelNumber  最大并行度
    * tmCus  单个taskManagerCU数量
    * tmSlotNum  单个taskManager Slot数量
    * operatorConfig  算子的配置
    * staticEstimator  是否静态资源预估
    * jobType  作业类型
    * graphType  流图类型。当前支持以下两种流图类型。 简化流图：simple_graph 静态流图：job_graph。
    * staticEstimatorConfig  每个算子的流量/命中率配置，json格式的字符串。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlBody' => 'setSqlBody',
            'flinkVersion' => 'setFlinkVersion',
            'cuNumber' => 'setCuNumber',
            'managerCuNumber' => 'setManagerCuNumber',
            'parallelNumber' => 'setParallelNumber',
            'tmCus' => 'setTmCus',
            'tmSlotNum' => 'setTmSlotNum',
            'operatorConfig' => 'setOperatorConfig',
            'staticEstimator' => 'setStaticEstimator',
            'jobType' => 'setJobType',
            'graphType' => 'setGraphType',
            'staticEstimatorConfig' => 'setStaticEstimatorConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlBody  SQL
    * flinkVersion  Flink版本。当前只支持1.10和1.12。
    * cuNumber  CU总数
    * managerCuNumber  管理单元CU数量
    * parallelNumber  最大并行度
    * tmCus  单个taskManagerCU数量
    * tmSlotNum  单个taskManager Slot数量
    * operatorConfig  算子的配置
    * staticEstimator  是否静态资源预估
    * jobType  作业类型
    * graphType  流图类型。当前支持以下两种流图类型。 简化流图：simple_graph 静态流图：job_graph。
    * staticEstimatorConfig  每个算子的流量/命中率配置，json格式的字符串。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlBody' => 'getSqlBody',
            'flinkVersion' => 'getFlinkVersion',
            'cuNumber' => 'getCuNumber',
            'managerCuNumber' => 'getManagerCuNumber',
            'parallelNumber' => 'getParallelNumber',
            'tmCus' => 'getTmCus',
            'tmSlotNum' => 'getTmSlotNum',
            'operatorConfig' => 'getOperatorConfig',
            'staticEstimator' => 'getStaticEstimator',
            'jobType' => 'getJobType',
            'graphType' => 'getGraphType',
            'staticEstimatorConfig' => 'getStaticEstimatorConfig'
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
    const FLINK_VERSION__1_1 = '1.1';
    const FLINK_VERSION__1_12 = '1.12';
    const GRAPH_TYPE_SIMPLE_GRAPH = 'simple_graph';
    const GRAPH_TYPE_JOB_GRAPH = 'job_graph';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFlinkVersionAllowableValues()
    {
        return [
            self::FLINK_VERSION__1_1,
            self::FLINK_VERSION__1_12,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGraphTypeAllowableValues()
    {
        return [
            self::GRAPH_TYPE_SIMPLE_GRAPH,
            self::GRAPH_TYPE_JOB_GRAPH,
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
        $this->container['sqlBody'] = isset($data['sqlBody']) ? $data['sqlBody'] : null;
        $this->container['flinkVersion'] = isset($data['flinkVersion']) ? $data['flinkVersion'] : null;
        $this->container['cuNumber'] = isset($data['cuNumber']) ? $data['cuNumber'] : null;
        $this->container['managerCuNumber'] = isset($data['managerCuNumber']) ? $data['managerCuNumber'] : null;
        $this->container['parallelNumber'] = isset($data['parallelNumber']) ? $data['parallelNumber'] : null;
        $this->container['tmCus'] = isset($data['tmCus']) ? $data['tmCus'] : null;
        $this->container['tmSlotNum'] = isset($data['tmSlotNum']) ? $data['tmSlotNum'] : null;
        $this->container['operatorConfig'] = isset($data['operatorConfig']) ? $data['operatorConfig'] : null;
        $this->container['staticEstimator'] = isset($data['staticEstimator']) ? $data['staticEstimator'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['graphType'] = isset($data['graphType']) ? $data['graphType'] : null;
        $this->container['staticEstimatorConfig'] = isset($data['staticEstimatorConfig']) ? $data['staticEstimatorConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sqlBody'] === null) {
            $invalidProperties[] = "'sqlBody' can't be null";
        }
            $allowedValues = $this->getFlinkVersionAllowableValues();
                if (!is_null($this->container['flinkVersion']) && !in_array($this->container['flinkVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'flinkVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['cuNumber']) && ($this->container['cuNumber'] < 2)) {
                $invalidProperties[] = "invalid value for 'cuNumber', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['managerCuNumber']) && ($this->container['managerCuNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'managerCuNumber', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parallelNumber']) && ($this->container['parallelNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'parallelNumber', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tmCus']) && ($this->container['tmCus'] < 1)) {
                $invalidProperties[] = "invalid value for 'tmCus', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tmSlotNum']) && ($this->container['tmSlotNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'tmSlotNum', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getGraphTypeAllowableValues();
                if (!is_null($this->container['graphType']) && !in_array($this->container['graphType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'graphType', must be one of '%s'",
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
    * Gets sqlBody
    *  SQL
    *
    * @return string
    */
    public function getSqlBody()
    {
        return $this->container['sqlBody'];
    }

    /**
    * Sets sqlBody
    *
    * @param string $sqlBody SQL
    *
    * @return $this
    */
    public function setSqlBody($sqlBody)
    {
        $this->container['sqlBody'] = $sqlBody;
        return $this;
    }

    /**
    * Gets flinkVersion
    *  Flink版本。当前只支持1.10和1.12。
    *
    * @return string|null
    */
    public function getFlinkVersion()
    {
        return $this->container['flinkVersion'];
    }

    /**
    * Sets flinkVersion
    *
    * @param string|null $flinkVersion Flink版本。当前只支持1.10和1.12。
    *
    * @return $this
    */
    public function setFlinkVersion($flinkVersion)
    {
        $this->container['flinkVersion'] = $flinkVersion;
        return $this;
    }

    /**
    * Gets cuNumber
    *  CU总数
    *
    * @return int|null
    */
    public function getCuNumber()
    {
        return $this->container['cuNumber'];
    }

    /**
    * Sets cuNumber
    *
    * @param int|null $cuNumber CU总数
    *
    * @return $this
    */
    public function setCuNumber($cuNumber)
    {
        $this->container['cuNumber'] = $cuNumber;
        return $this;
    }

    /**
    * Gets managerCuNumber
    *  管理单元CU数量
    *
    * @return int|null
    */
    public function getManagerCuNumber()
    {
        return $this->container['managerCuNumber'];
    }

    /**
    * Sets managerCuNumber
    *
    * @param int|null $managerCuNumber 管理单元CU数量
    *
    * @return $this
    */
    public function setManagerCuNumber($managerCuNumber)
    {
        $this->container['managerCuNumber'] = $managerCuNumber;
        return $this;
    }

    /**
    * Gets parallelNumber
    *  最大并行度
    *
    * @return int|null
    */
    public function getParallelNumber()
    {
        return $this->container['parallelNumber'];
    }

    /**
    * Sets parallelNumber
    *
    * @param int|null $parallelNumber 最大并行度
    *
    * @return $this
    */
    public function setParallelNumber($parallelNumber)
    {
        $this->container['parallelNumber'] = $parallelNumber;
        return $this;
    }

    /**
    * Gets tmCus
    *  单个taskManagerCU数量
    *
    * @return int|null
    */
    public function getTmCus()
    {
        return $this->container['tmCus'];
    }

    /**
    * Sets tmCus
    *
    * @param int|null $tmCus 单个taskManagerCU数量
    *
    * @return $this
    */
    public function setTmCus($tmCus)
    {
        $this->container['tmCus'] = $tmCus;
        return $this;
    }

    /**
    * Gets tmSlotNum
    *  单个taskManager Slot数量
    *
    * @return int|null
    */
    public function getTmSlotNum()
    {
        return $this->container['tmSlotNum'];
    }

    /**
    * Sets tmSlotNum
    *
    * @param int|null $tmSlotNum 单个taskManager Slot数量
    *
    * @return $this
    */
    public function setTmSlotNum($tmSlotNum)
    {
        $this->container['tmSlotNum'] = $tmSlotNum;
        return $this;
    }

    /**
    * Gets operatorConfig
    *  算子的配置
    *
    * @return string|null
    */
    public function getOperatorConfig()
    {
        return $this->container['operatorConfig'];
    }

    /**
    * Sets operatorConfig
    *
    * @param string|null $operatorConfig 算子的配置
    *
    * @return $this
    */
    public function setOperatorConfig($operatorConfig)
    {
        $this->container['operatorConfig'] = $operatorConfig;
        return $this;
    }

    /**
    * Gets staticEstimator
    *  是否静态资源预估
    *
    * @return bool|null
    */
    public function getStaticEstimator()
    {
        return $this->container['staticEstimator'];
    }

    /**
    * Sets staticEstimator
    *
    * @param bool|null $staticEstimator 是否静态资源预估
    *
    * @return $this
    */
    public function setStaticEstimator($staticEstimator)
    {
        $this->container['staticEstimator'] = $staticEstimator;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 作业类型
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets graphType
    *  流图类型。当前支持以下两种流图类型。 简化流图：simple_graph 静态流图：job_graph。
    *
    * @return string|null
    */
    public function getGraphType()
    {
        return $this->container['graphType'];
    }

    /**
    * Sets graphType
    *
    * @param string|null $graphType 流图类型。当前支持以下两种流图类型。 简化流图：simple_graph 静态流图：job_graph。
    *
    * @return $this
    */
    public function setGraphType($graphType)
    {
        $this->container['graphType'] = $graphType;
        return $this;
    }

    /**
    * Gets staticEstimatorConfig
    *  每个算子的流量/命中率配置，json格式的字符串。
    *
    * @return string|null
    */
    public function getStaticEstimatorConfig()
    {
        return $this->container['staticEstimatorConfig'];
    }

    /**
    * Sets staticEstimatorConfig
    *
    * @param string|null $staticEstimatorConfig 每个算子的流量/命中率配置，json格式的字符串。
    *
    * @return $this
    */
    public function setStaticEstimatorConfig($staticEstimatorConfig)
    {
        $this->container['staticEstimatorConfig'] = $staticEstimatorConfig;
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

