<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAntileakageRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAntileakageRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规则id
    * policyid  策略id
    * url  规则应用的url
    * category  类别（响应码：code，敏感信息：sensitive）
    * contents  规则内容
    * status  规则状态，0：关闭，1：开启
    * description  规则描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'policyid' => 'string',
            'url' => 'string',
            'category' => 'string',
            'contents' => 'string[]',
            'status' => 'int',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规则id
    * policyid  策略id
    * url  规则应用的url
    * category  类别（响应码：code，敏感信息：sensitive）
    * contents  规则内容
    * status  规则状态，0：关闭，1：开启
    * description  规则描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'policyid' => null,
        'url' => null,
        'category' => null,
        'contents' => null,
        'status' => null,
        'description' => null
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
    * id  规则id
    * policyid  策略id
    * url  规则应用的url
    * category  类别（响应码：code，敏感信息：sensitive）
    * contents  规则内容
    * status  规则状态，0：关闭，1：开启
    * description  规则描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'policyid' => 'policyid',
            'url' => 'url',
            'category' => 'category',
            'contents' => 'contents',
            'status' => 'status',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规则id
    * policyid  策略id
    * url  规则应用的url
    * category  类别（响应码：code，敏感信息：sensitive）
    * contents  规则内容
    * status  规则状态，0：关闭，1：开启
    * description  规则描述
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'policyid' => 'setPolicyid',
            'url' => 'setUrl',
            'category' => 'setCategory',
            'contents' => 'setContents',
            'status' => 'setStatus',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规则id
    * policyid  策略id
    * url  规则应用的url
    * category  类别（响应码：code，敏感信息：sensitive）
    * contents  规则内容
    * status  规则状态，0：关闭，1：开启
    * description  规则描述
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'policyid' => 'getPolicyid',
            'url' => 'getUrl',
            'category' => 'getCategory',
            'contents' => 'getContents',
            'status' => 'getStatus',
            'description' => 'getDescription'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    * Gets id
    *  规则id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 规则id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets policyid
    *  策略id
    *
    * @return string|null
    */
    public function getPolicyid()
    {
        return $this->container['policyid'];
    }

    /**
    * Sets policyid
    *
    * @param string|null $policyid 策略id
    *
    * @return $this
    */
    public function setPolicyid($policyid)
    {
        $this->container['policyid'] = $policyid;
        return $this;
    }

    /**
    * Gets url
    *  规则应用的url
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 规则应用的url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets category
    *  类别（响应码：code，敏感信息：sensitive）
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 类别（响应码：code，敏感信息：sensitive）
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets contents
    *  规则内容
    *
    * @return string[]|null
    */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
    * Sets contents
    *
    * @param string[]|null $contents 规则内容
    *
    * @return $this
    */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;
        return $this;
    }

    /**
    * Gets status
    *  规则状态，0：关闭，1：开启
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 规则状态，0：关闭，1：开启
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  规则描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

