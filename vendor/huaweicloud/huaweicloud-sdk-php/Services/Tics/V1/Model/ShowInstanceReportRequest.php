<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceReportRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceReportRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例id，最大32位，字母和数字组成
    * leagueId  联盟id，最大32位，字母和数字组成
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'leagueId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例id，最大32位，字母和数字组成
    * leagueId  联盟id，最大32位，字母和数字组成
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'leagueId' => null
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
    * instanceId  实例id，最大32位，字母和数字组成
    * leagueId  联盟id，最大32位，字母和数字组成
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'leagueId' => 'league_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例id，最大32位，字母和数字组成
    * leagueId  联盟id，最大32位，字母和数字组成
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'leagueId' => 'setLeagueId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例id，最大32位，字母和数字组成
    * leagueId  联盟id，最大32位，字母和数字组成
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'leagueId' => 'getLeagueId'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['leagueId'] = isset($data['leagueId']) ? $data['leagueId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 32)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/[\\w]{0,32}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[\\w]{0,32}/.";
            }
        if ($this->container['leagueId'] === null) {
            $invalidProperties[] = "'leagueId' can't be null";
        }
            if ((mb_strlen($this->container['leagueId']) > 32)) {
                $invalidProperties[] = "invalid value for 'leagueId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['leagueId']) < 0)) {
                $invalidProperties[] = "invalid value for 'leagueId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/[\\w]{0,32}/", $this->container['leagueId'])) {
                $invalidProperties[] = "invalid value for 'leagueId', must be conform to the pattern /[\\w]{0,32}/.";
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
    * Gets instanceId
    *  实例id，最大32位，字母和数字组成
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例id，最大32位，字母和数字组成
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets leagueId
    *  联盟id，最大32位，字母和数字组成
    *
    * @return string
    */
    public function getLeagueId()
    {
        return $this->container['leagueId'];
    }

    /**
    * Sets leagueId
    *
    * @param string $leagueId 联盟id，最大32位，字母和数字组成
    *
    * @return $this
    */
    public function setLeagueId($leagueId)
    {
        $this->container['leagueId'] = $leagueId;
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

