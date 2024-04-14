<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateElasticResourcePoolQueueRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateElasticResourcePoolQueueRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * elasticResourcePoolName  弹性资源池名称
    * queueName  队列名称
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'elasticResourcePoolName' => 'string',
            'queueName' => 'string',
            'body' => '\HuaweiCloud\SDK\Dli\V1\Model\UpdateElasticResourcePoolQueueRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * elasticResourcePoolName  弹性资源池名称
    * queueName  队列名称
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'elasticResourcePoolName' => null,
        'queueName' => null,
        'body' => null
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
    * elasticResourcePoolName  弹性资源池名称
    * queueName  队列名称
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'elasticResourcePoolName' => 'elastic_resource_pool_name',
            'queueName' => 'queue_name',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * elasticResourcePoolName  弹性资源池名称
    * queueName  队列名称
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'elasticResourcePoolName' => 'setElasticResourcePoolName',
            'queueName' => 'setQueueName',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * elasticResourcePoolName  弹性资源池名称
    * queueName  队列名称
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'elasticResourcePoolName' => 'getElasticResourcePoolName',
            'queueName' => 'getQueueName',
            'body' => 'getBody'
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
        $this->container['elasticResourcePoolName'] = isset($data['elasticResourcePoolName']) ? $data['elasticResourcePoolName'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['elasticResourcePoolName'] === null) {
            $invalidProperties[] = "'elasticResourcePoolName' can't be null";
        }
            if ((mb_strlen($this->container['elasticResourcePoolName']) > 128)) {
                $invalidProperties[] = "invalid value for 'elasticResourcePoolName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['elasticResourcePoolName']) < 1)) {
                $invalidProperties[] = "invalid value for 'elasticResourcePoolName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['queueName'] === null) {
            $invalidProperties[] = "'queueName' can't be null";
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
    * Gets elasticResourcePoolName
    *  弹性资源池名称
    *
    * @return string
    */
    public function getElasticResourcePoolName()
    {
        return $this->container['elasticResourcePoolName'];
    }

    /**
    * Sets elasticResourcePoolName
    *
    * @param string $elasticResourcePoolName 弹性资源池名称
    *
    * @return $this
    */
    public function setElasticResourcePoolName($elasticResourcePoolName)
    {
        $this->container['elasticResourcePoolName'] = $elasticResourcePoolName;
        return $this;
    }

    /**
    * Gets queueName
    *  队列名称
    *
    * @return string
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string $queueName 队列名称
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\UpdateElasticResourcePoolQueueRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\UpdateElasticResourcePoolQueueRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

