<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLoadbalancerResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLoadbalancerResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * loadbalancer  loadbalancer
    * orderId  订单号[（包周期场景返回该字段）](tag:hws)
    * loadbalancerId  负载均衡器的ID[（包周期场景返回该字段）](tag:hws)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'loadbalancer' => '\HuaweiCloud\SDK\Elb\V2\Model\LoadbalancerResp',
            'orderId' => 'string',
            'loadbalancerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * loadbalancer  loadbalancer
    * orderId  订单号[（包周期场景返回该字段）](tag:hws)
    * loadbalancerId  负载均衡器的ID[（包周期场景返回该字段）](tag:hws)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'loadbalancer' => null,
        'orderId' => null,
        'loadbalancerId' => null
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
    * loadbalancer  loadbalancer
    * orderId  订单号[（包周期场景返回该字段）](tag:hws)
    * loadbalancerId  负载均衡器的ID[（包周期场景返回该字段）](tag:hws)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'loadbalancer' => 'loadbalancer',
            'orderId' => 'order_id',
            'loadbalancerId' => 'loadbalancer_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * loadbalancer  loadbalancer
    * orderId  订单号[（包周期场景返回该字段）](tag:hws)
    * loadbalancerId  负载均衡器的ID[（包周期场景返回该字段）](tag:hws)
    *
    * @var string[]
    */
    protected static $setters = [
            'loadbalancer' => 'setLoadbalancer',
            'orderId' => 'setOrderId',
            'loadbalancerId' => 'setLoadbalancerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * loadbalancer  loadbalancer
    * orderId  订单号[（包周期场景返回该字段）](tag:hws)
    * loadbalancerId  负载均衡器的ID[（包周期场景返回该字段）](tag:hws)
    *
    * @var string[]
    */
    protected static $getters = [
            'loadbalancer' => 'getLoadbalancer',
            'orderId' => 'getOrderId',
            'loadbalancerId' => 'getLoadbalancerId'
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
        $this->container['loadbalancer'] = isset($data['loadbalancer']) ? $data['loadbalancer'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
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
    * Gets loadbalancer
    *  loadbalancer
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\LoadbalancerResp|null
    */
    public function getLoadbalancer()
    {
        return $this->container['loadbalancer'];
    }

    /**
    * Sets loadbalancer
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\LoadbalancerResp|null $loadbalancer loadbalancer
    *
    * @return $this
    */
    public function setLoadbalancer($loadbalancer)
    {
        $this->container['loadbalancer'] = $loadbalancer;
        return $this;
    }

    /**
    * Gets orderId
    *  订单号[（包周期场景返回该字段）](tag:hws)
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单号[（包周期场景返回该字段）](tag:hws)
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  负载均衡器的ID[（包周期场景返回该字段）](tag:hws)
    *
    * @return string|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string|null $loadbalancerId 负载均衡器的ID[（包周期场景返回该字段）](tag:hws)
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
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

