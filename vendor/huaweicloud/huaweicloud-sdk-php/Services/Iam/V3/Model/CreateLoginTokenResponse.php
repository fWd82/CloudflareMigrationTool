<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLoginTokenResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLoginTokenResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logintoken  logintoken
    * xSubjectLoginToken  xSubjectLoginToken
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logintoken' => '\HuaweiCloud\SDK\Iam\V3\Model\LoginToken',
            'xSubjectLoginToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logintoken  logintoken
    * xSubjectLoginToken  xSubjectLoginToken
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logintoken' => null,
        'xSubjectLoginToken' => null
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
    * logintoken  logintoken
    * xSubjectLoginToken  xSubjectLoginToken
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logintoken' => 'logintoken',
            'xSubjectLoginToken' => 'X-Subject-LoginToken'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logintoken  logintoken
    * xSubjectLoginToken  xSubjectLoginToken
    *
    * @var string[]
    */
    protected static $setters = [
            'logintoken' => 'setLogintoken',
            'xSubjectLoginToken' => 'setXSubjectLoginToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logintoken  logintoken
    * xSubjectLoginToken  xSubjectLoginToken
    *
    * @var string[]
    */
    protected static $getters = [
            'logintoken' => 'getLogintoken',
            'xSubjectLoginToken' => 'getXSubjectLoginToken'
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
        $this->container['logintoken'] = isset($data['logintoken']) ? $data['logintoken'] : null;
        $this->container['xSubjectLoginToken'] = isset($data['xSubjectLoginToken']) ? $data['xSubjectLoginToken'] : null;
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
    * Gets logintoken
    *  logintoken
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\LoginToken|null
    */
    public function getLogintoken()
    {
        return $this->container['logintoken'];
    }

    /**
    * Sets logintoken
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\LoginToken|null $logintoken logintoken
    *
    * @return $this
    */
    public function setLogintoken($logintoken)
    {
        $this->container['logintoken'] = $logintoken;
        return $this;
    }

    /**
    * Gets xSubjectLoginToken
    *  xSubjectLoginToken
    *
    * @return string|null
    */
    public function getXSubjectLoginToken()
    {
        return $this->container['xSubjectLoginToken'];
    }

    /**
    * Sets xSubjectLoginToken
    *
    * @param string|null $xSubjectLoginToken xSubjectLoginToken
    *
    * @return $this
    */
    public function setXSubjectLoginToken($xSubjectLoginToken)
    {
        $this->container['xSubjectLoginToken'] = $xSubjectLoginToken;
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

