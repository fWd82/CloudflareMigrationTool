<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckJobNameReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckJobNameReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  - 迁移、同步、灾备、订阅任务名称，名称在4位到50位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。 - 备份迁移任务名称，名称在4位到80位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。
    * type  任务类型。 - trans - subscription - offline
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  - 迁移、同步、灾备、订阅任务名称，名称在4位到50位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。 - 备份迁移任务名称，名称在4位到80位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。
    * type  任务类型。 - trans - subscription - offline
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null
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
    * name  - 迁移、同步、灾备、订阅任务名称，名称在4位到50位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。 - 备份迁移任务名称，名称在4位到80位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。
    * type  任务类型。 - trans - subscription - offline
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  - 迁移、同步、灾备、订阅任务名称，名称在4位到50位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。 - 备份迁移任务名称，名称在4位到80位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。
    * type  任务类型。 - trans - subscription - offline
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  - 迁移、同步、灾备、订阅任务名称，名称在4位到50位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。 - 备份迁移任务名称，名称在4位到80位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。
    * type  任务类型。 - trans - subscription - offline
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType'
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
    const TYPE_TRANS = 'trans';
    const TYPE_SUBSCRIPTION = 'subscription';
    const TYPE_OFFLINE = 'offline';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TRANS,
            self::TYPE_SUBSCRIPTION,
            self::TYPE_OFFLINE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets name
    *  - 迁移、同步、灾备、订阅任务名称，名称在4位到50位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。 - 备份迁移任务名称，名称在4位到80位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name - 迁移、同步、灾备、订阅任务名称，名称在4位到50位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。 - 备份迁移任务名称，名称在4位到80位之间，必须以字母开头，可以包含字母、数字、中划线或下划线，不能包含其他特殊字符，任务名称不能重复。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  任务类型。 - trans - subscription - offline
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 任务类型。 - trans - subscription - offline
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

