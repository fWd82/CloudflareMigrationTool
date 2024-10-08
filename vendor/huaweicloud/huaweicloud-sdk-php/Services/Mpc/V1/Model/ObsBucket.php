<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObsBucket implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObsBucket';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  桶名称
    * creationDate  桶的创建时间
    * isAuthorized  授权结果，取值[0,1]，0表示未授权给转码服务，1表示已授权转码服务
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'creationDate' => 'string',
            'isAuthorized' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  桶名称
    * creationDate  桶的创建时间
    * isAuthorized  授权结果，取值[0,1]，0表示未授权给转码服务，1表示已授权转码服务
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'creationDate' => null,
        'isAuthorized' => null
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
    * bucket  桶名称
    * creationDate  桶的创建时间
    * isAuthorized  授权结果，取值[0,1]，0表示未授权给转码服务，1表示已授权转码服务
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'creationDate' => 'creation_date',
            'isAuthorized' => 'is_authorized'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  桶名称
    * creationDate  桶的创建时间
    * isAuthorized  授权结果，取值[0,1]，0表示未授权给转码服务，1表示已授权转码服务
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'creationDate' => 'setCreationDate',
            'isAuthorized' => 'setIsAuthorized'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  桶名称
    * creationDate  桶的创建时间
    * isAuthorized  授权结果，取值[0,1]，0表示未授权给转码服务，1表示已授权转码服务
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'creationDate' => 'getCreationDate',
            'isAuthorized' => 'getIsAuthorized'
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['isAuthorized'] = isset($data['isAuthorized']) ? $data['isAuthorized'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) > 256)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) < 0)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creationDate']) && (mb_strlen($this->container['creationDate']) > 32)) {
                $invalidProperties[] = "invalid value for 'creationDate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['creationDate']) && (mb_strlen($this->container['creationDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'creationDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isAuthorized']) && ($this->container['isAuthorized'] > 2)) {
                $invalidProperties[] = "invalid value for 'isAuthorized', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['isAuthorized']) && ($this->container['isAuthorized'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAuthorized', must be bigger than or equal to 0.";
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
    * Gets bucket
    *  桶名称
    *
    * @return string|null
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string|null $bucket 桶名称
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets creationDate
    *  桶的创建时间
    *
    * @return string|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param string|null $creationDate 桶的创建时间
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets isAuthorized
    *  授权结果，取值[0,1]，0表示未授权给转码服务，1表示已授权转码服务
    *
    * @return int|null
    */
    public function getIsAuthorized()
    {
        return $this->container['isAuthorized'];
    }

    /**
    * Sets isAuthorized
    *
    * @param int|null $isAuthorized 授权结果，取值[0,1]，0表示未授权给转码服务，1表示已授权转码服务
    *
    * @return $this
    */
    public function setIsAuthorized($isAuthorized)
    {
        $this->container['isAuthorized'] = $isAuthorized;
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

