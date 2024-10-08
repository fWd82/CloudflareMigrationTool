<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClustersResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClustersResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterTotal  集群列表总数。
    * clusters  集群参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterTotal' => 'int',
            'clusters' => '\HuaweiCloud\SDK\Mrs\V1\Model\Cluster[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterTotal  集群列表总数。
    * clusters  集群参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterTotal' => 'int32',
        'clusters' => null
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
    * clusterTotal  集群列表总数。
    * clusters  集群参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterTotal' => 'clusterTotal',
            'clusters' => 'clusters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterTotal  集群列表总数。
    * clusters  集群参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterTotal' => 'setClusterTotal',
            'clusters' => 'setClusters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterTotal  集群列表总数。
    * clusters  集群参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterTotal' => 'getClusterTotal',
            'clusters' => 'getClusters'
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
        $this->container['clusterTotal'] = isset($data['clusterTotal']) ? $data['clusterTotal'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
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
    * Gets clusterTotal
    *  集群列表总数。
    *
    * @return int|null
    */
    public function getClusterTotal()
    {
        return $this->container['clusterTotal'];
    }

    /**
    * Sets clusterTotal
    *
    * @param int|null $clusterTotal 集群列表总数。
    *
    * @return $this
    */
    public function setClusterTotal($clusterTotal)
    {
        $this->container['clusterTotal'] = $clusterTotal;
        return $this;
    }

    /**
    * Gets clusters
    *  集群参数。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\Cluster[]|null
    */
    public function getClusters()
    {
        return $this->container['clusters'];
    }

    /**
    * Sets clusters
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\Cluster[]|null $clusters 集群参数。
    *
    * @return $this
    */
    public function setClusters($clusters)
    {
        $this->container['clusters'] = $clusters;
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

