<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVpcAttachmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVpcAttachmentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * erId  企业路由器实例ID
    * vpcAttachmentId  VPC连接ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'erId' => 'string',
            'vpcAttachmentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * erId  企业路由器实例ID
    * vpcAttachmentId  VPC连接ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'erId' => null,
        'vpcAttachmentId' => null
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
    * erId  企业路由器实例ID
    * vpcAttachmentId  VPC连接ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'erId' => 'er_id',
            'vpcAttachmentId' => 'vpc_attachment_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * erId  企业路由器实例ID
    * vpcAttachmentId  VPC连接ID
    *
    * @var string[]
    */
    protected static $setters = [
            'erId' => 'setErId',
            'vpcAttachmentId' => 'setVpcAttachmentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * erId  企业路由器实例ID
    * vpcAttachmentId  VPC连接ID
    *
    * @var string[]
    */
    protected static $getters = [
            'erId' => 'getErId',
            'vpcAttachmentId' => 'getVpcAttachmentId'
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
        $this->container['erId'] = isset($data['erId']) ? $data['erId'] : null;
        $this->container['vpcAttachmentId'] = isset($data['vpcAttachmentId']) ? $data['vpcAttachmentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['erId'] === null) {
            $invalidProperties[] = "'erId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['erId'])) {
                $invalidProperties[] = "invalid value for 'erId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['vpcAttachmentId'] === null) {
            $invalidProperties[] = "'vpcAttachmentId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['vpcAttachmentId'])) {
                $invalidProperties[] = "invalid value for 'vpcAttachmentId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
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
    * Gets erId
    *  企业路由器实例ID
    *
    * @return string
    */
    public function getErId()
    {
        return $this->container['erId'];
    }

    /**
    * Sets erId
    *
    * @param string $erId 企业路由器实例ID
    *
    * @return $this
    */
    public function setErId($erId)
    {
        $this->container['erId'] = $erId;
        return $this;
    }

    /**
    * Gets vpcAttachmentId
    *  VPC连接ID
    *
    * @return string
    */
    public function getVpcAttachmentId()
    {
        return $this->container['vpcAttachmentId'];
    }

    /**
    * Sets vpcAttachmentId
    *
    * @param string $vpcAttachmentId VPC连接ID
    *
    * @return $this
    */
    public function setVpcAttachmentId($vpcAttachmentId)
    {
        $this->container['vpcAttachmentId'] = $vpcAttachmentId;
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

