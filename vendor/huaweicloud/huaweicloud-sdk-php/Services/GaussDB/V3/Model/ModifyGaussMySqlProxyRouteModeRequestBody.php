<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyGaussMySqlProxyRouteModeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyGaussMySqlProxyRouteModeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * routeMode  数据库代理路由模式。  取值范围： - 0，表示权重负载模式。 - 1，表示负载均衡模式（数据库主节点不接受读请求）。 - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * masterWeight  主节点权重： - 如果路由模式为0，取值为0~1000。 - 如果路由模式为1，取值为0。 - 如果路由模式为2，取值为1。
    * readonlyNodes  只读节点权重配置信息。
    * newNodeAutoAddStatus  是否开启新增节点自动加入该Proxy。如果需要设置是否开启新增节点自动加入该Proxy，请联系客服人员添加白名单，加入白名单后，方可输入该字段。  取值范围： - ON：开启。 - OFF：关闭。
    * newNodeWeight  新增节点的读权重：    - 如果路由模式为0，新增节点自动加入为ON，取值为0~1000。 - 如果路由模式不为0或新增节点自动加入为OFF，则可不输入读权重。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'routeMode' => 'int',
            'masterWeight' => 'int',
            'readonlyNodes' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ModifyProxyRouteWeightReadonlyNode[]',
            'newNodeAutoAddStatus' => 'string',
            'newNodeWeight' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * routeMode  数据库代理路由模式。  取值范围： - 0，表示权重负载模式。 - 1，表示负载均衡模式（数据库主节点不接受读请求）。 - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * masterWeight  主节点权重： - 如果路由模式为0，取值为0~1000。 - 如果路由模式为1，取值为0。 - 如果路由模式为2，取值为1。
    * readonlyNodes  只读节点权重配置信息。
    * newNodeAutoAddStatus  是否开启新增节点自动加入该Proxy。如果需要设置是否开启新增节点自动加入该Proxy，请联系客服人员添加白名单，加入白名单后，方可输入该字段。  取值范围： - ON：开启。 - OFF：关闭。
    * newNodeWeight  新增节点的读权重：    - 如果路由模式为0，新增节点自动加入为ON，取值为0~1000。 - 如果路由模式不为0或新增节点自动加入为OFF，则可不输入读权重。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'routeMode' => 'int32',
        'masterWeight' => 'int32',
        'readonlyNodes' => null,
        'newNodeAutoAddStatus' => null,
        'newNodeWeight' => 'int32'
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
    * routeMode  数据库代理路由模式。  取值范围： - 0，表示权重负载模式。 - 1，表示负载均衡模式（数据库主节点不接受读请求）。 - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * masterWeight  主节点权重： - 如果路由模式为0，取值为0~1000。 - 如果路由模式为1，取值为0。 - 如果路由模式为2，取值为1。
    * readonlyNodes  只读节点权重配置信息。
    * newNodeAutoAddStatus  是否开启新增节点自动加入该Proxy。如果需要设置是否开启新增节点自动加入该Proxy，请联系客服人员添加白名单，加入白名单后，方可输入该字段。  取值范围： - ON：开启。 - OFF：关闭。
    * newNodeWeight  新增节点的读权重：    - 如果路由模式为0，新增节点自动加入为ON，取值为0~1000。 - 如果路由模式不为0或新增节点自动加入为OFF，则可不输入读权重。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'routeMode' => 'route_mode',
            'masterWeight' => 'master_weight',
            'readonlyNodes' => 'readonly_nodes',
            'newNodeAutoAddStatus' => 'new_node_auto_add_status',
            'newNodeWeight' => 'new_node_weight'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * routeMode  数据库代理路由模式。  取值范围： - 0，表示权重负载模式。 - 1，表示负载均衡模式（数据库主节点不接受读请求）。 - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * masterWeight  主节点权重： - 如果路由模式为0，取值为0~1000。 - 如果路由模式为1，取值为0。 - 如果路由模式为2，取值为1。
    * readonlyNodes  只读节点权重配置信息。
    * newNodeAutoAddStatus  是否开启新增节点自动加入该Proxy。如果需要设置是否开启新增节点自动加入该Proxy，请联系客服人员添加白名单，加入白名单后，方可输入该字段。  取值范围： - ON：开启。 - OFF：关闭。
    * newNodeWeight  新增节点的读权重：    - 如果路由模式为0，新增节点自动加入为ON，取值为0~1000。 - 如果路由模式不为0或新增节点自动加入为OFF，则可不输入读权重。
    *
    * @var string[]
    */
    protected static $setters = [
            'routeMode' => 'setRouteMode',
            'masterWeight' => 'setMasterWeight',
            'readonlyNodes' => 'setReadonlyNodes',
            'newNodeAutoAddStatus' => 'setNewNodeAutoAddStatus',
            'newNodeWeight' => 'setNewNodeWeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * routeMode  数据库代理路由模式。  取值范围： - 0，表示权重负载模式。 - 1，表示负载均衡模式（数据库主节点不接受读请求）。 - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * masterWeight  主节点权重： - 如果路由模式为0，取值为0~1000。 - 如果路由模式为1，取值为0。 - 如果路由模式为2，取值为1。
    * readonlyNodes  只读节点权重配置信息。
    * newNodeAutoAddStatus  是否开启新增节点自动加入该Proxy。如果需要设置是否开启新增节点自动加入该Proxy，请联系客服人员添加白名单，加入白名单后，方可输入该字段。  取值范围： - ON：开启。 - OFF：关闭。
    * newNodeWeight  新增节点的读权重：    - 如果路由模式为0，新增节点自动加入为ON，取值为0~1000。 - 如果路由模式不为0或新增节点自动加入为OFF，则可不输入读权重。
    *
    * @var string[]
    */
    protected static $getters = [
            'routeMode' => 'getRouteMode',
            'masterWeight' => 'getMasterWeight',
            'readonlyNodes' => 'getReadonlyNodes',
            'newNodeAutoAddStatus' => 'getNewNodeAutoAddStatus',
            'newNodeWeight' => 'getNewNodeWeight'
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
        $this->container['routeMode'] = isset($data['routeMode']) ? $data['routeMode'] : null;
        $this->container['masterWeight'] = isset($data['masterWeight']) ? $data['masterWeight'] : null;
        $this->container['readonlyNodes'] = isset($data['readonlyNodes']) ? $data['readonlyNodes'] : null;
        $this->container['newNodeAutoAddStatus'] = isset($data['newNodeAutoAddStatus']) ? $data['newNodeAutoAddStatus'] : null;
        $this->container['newNodeWeight'] = isset($data['newNodeWeight']) ? $data['newNodeWeight'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['routeMode'] === null) {
            $invalidProperties[] = "'routeMode' can't be null";
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
    * Gets routeMode
    *  数据库代理路由模式。  取值范围： - 0，表示权重负载模式。 - 1，表示负载均衡模式（数据库主节点不接受读请求）。 - 2，表示负载均衡模式（数据库主节点接受读请求）。
    *
    * @return int
    */
    public function getRouteMode()
    {
        return $this->container['routeMode'];
    }

    /**
    * Sets routeMode
    *
    * @param int $routeMode 数据库代理路由模式。  取值范围： - 0，表示权重负载模式。 - 1，表示负载均衡模式（数据库主节点不接受读请求）。 - 2，表示负载均衡模式（数据库主节点接受读请求）。
    *
    * @return $this
    */
    public function setRouteMode($routeMode)
    {
        $this->container['routeMode'] = $routeMode;
        return $this;
    }

    /**
    * Gets masterWeight
    *  主节点权重： - 如果路由模式为0，取值为0~1000。 - 如果路由模式为1，取值为0。 - 如果路由模式为2，取值为1。
    *
    * @return int|null
    */
    public function getMasterWeight()
    {
        return $this->container['masterWeight'];
    }

    /**
    * Sets masterWeight
    *
    * @param int|null $masterWeight 主节点权重： - 如果路由模式为0，取值为0~1000。 - 如果路由模式为1，取值为0。 - 如果路由模式为2，取值为1。
    *
    * @return $this
    */
    public function setMasterWeight($masterWeight)
    {
        $this->container['masterWeight'] = $masterWeight;
        return $this;
    }

    /**
    * Gets readonlyNodes
    *  只读节点权重配置信息。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ModifyProxyRouteWeightReadonlyNode[]|null
    */
    public function getReadonlyNodes()
    {
        return $this->container['readonlyNodes'];
    }

    /**
    * Sets readonlyNodes
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ModifyProxyRouteWeightReadonlyNode[]|null $readonlyNodes 只读节点权重配置信息。
    *
    * @return $this
    */
    public function setReadonlyNodes($readonlyNodes)
    {
        $this->container['readonlyNodes'] = $readonlyNodes;
        return $this;
    }

    /**
    * Gets newNodeAutoAddStatus
    *  是否开启新增节点自动加入该Proxy。如果需要设置是否开启新增节点自动加入该Proxy，请联系客服人员添加白名单，加入白名单后，方可输入该字段。  取值范围： - ON：开启。 - OFF：关闭。
    *
    * @return string|null
    */
    public function getNewNodeAutoAddStatus()
    {
        return $this->container['newNodeAutoAddStatus'];
    }

    /**
    * Sets newNodeAutoAddStatus
    *
    * @param string|null $newNodeAutoAddStatus 是否开启新增节点自动加入该Proxy。如果需要设置是否开启新增节点自动加入该Proxy，请联系客服人员添加白名单，加入白名单后，方可输入该字段。  取值范围： - ON：开启。 - OFF：关闭。
    *
    * @return $this
    */
    public function setNewNodeAutoAddStatus($newNodeAutoAddStatus)
    {
        $this->container['newNodeAutoAddStatus'] = $newNodeAutoAddStatus;
        return $this;
    }

    /**
    * Gets newNodeWeight
    *  新增节点的读权重：    - 如果路由模式为0，新增节点自动加入为ON，取值为0~1000。 - 如果路由模式不为0或新增节点自动加入为OFF，则可不输入读权重。
    *
    * @return int|null
    */
    public function getNewNodeWeight()
    {
        return $this->container['newNodeWeight'];
    }

    /**
    * Sets newNodeWeight
    *
    * @param int|null $newNodeWeight 新增节点的读权重：    - 如果路由模式为0，新增节点自动加入为ON，取值为0~1000。 - 如果路由模式不为0或新增节点自动加入为OFF，则可不输入读权重。
    *
    * @return $this
    */
    public function setNewNodeWeight($newNodeWeight)
    {
        $this->container['newNodeWeight'] = $newNodeWeight;
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

