<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownlinkVpc implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownlinkVpc';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcId  私网NAT网关实例所属VPC的ID。
    * virsubnetId  私网NAT网关实例所属子网的ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcId' => 'string',
            'virsubnetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcId  私网NAT网关实例所属VPC的ID。
    * virsubnetId  私网NAT网关实例所属子网的ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcId' => null,
        'virsubnetId' => null
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
    * vpcId  私网NAT网关实例所属VPC的ID。
    * virsubnetId  私网NAT网关实例所属子网的ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcId' => 'vpc_id',
            'virsubnetId' => 'virsubnet_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcId  私网NAT网关实例所属VPC的ID。
    * virsubnetId  私网NAT网关实例所属子网的ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcId' => 'setVpcId',
            'virsubnetId' => 'setVirsubnetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcId  私网NAT网关实例所属VPC的ID。
    * virsubnetId  私网NAT网关实例所属子网的ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcId' => 'getVpcId',
            'virsubnetId' => 'getVirsubnetId'
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['vpcId']) < 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['virsubnetId'] === null) {
            $invalidProperties[] = "'virsubnetId' can't be null";
        }
            if ((mb_strlen($this->container['virsubnetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['virsubnetId']) < 36)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be bigger than or equal to 36.";
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
    * Gets vpcId
    *  私网NAT网关实例所属VPC的ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 私网NAT网关实例所属VPC的ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  私网NAT网关实例所属子网的ID。
    *
    * @return string
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string $virsubnetId 私网NAT网关实例所属子网的ID。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
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

