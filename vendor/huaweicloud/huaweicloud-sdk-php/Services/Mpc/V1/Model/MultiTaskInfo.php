<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MultiTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MultiTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  转码模板ID。
    * error  error
    * outputFile  outputFile
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'int',
            'error' => '\HuaweiCloud\SDK\Mpc\V1\Model\ErrorResponse',
            'outputFile' => '\HuaweiCloud\SDK\Mpc\V1\Model\SourceInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  转码模板ID。
    * error  error
    * outputFile  outputFile
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'error' => null,
        'outputFile' => null
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
    * templateId  转码模板ID。
    * error  error
    * outputFile  outputFile
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'error' => 'error',
            'outputFile' => 'output_file'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  转码模板ID。
    * error  error
    * outputFile  outputFile
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'error' => 'setError',
            'outputFile' => 'setOutputFile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  转码模板ID。
    * error  error
    * outputFile  outputFile
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'error' => 'getError',
            'outputFile' => 'getOutputFile'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['outputFile'] = isset($data['outputFile']) ? $data['outputFile'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['templateId']) && ($this->container['templateId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'templateId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['templateId']) && ($this->container['templateId'] < 0)) {
                $invalidProperties[] = "invalid value for 'templateId', must be bigger than or equal to 0.";
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
    * Gets templateId
    *  转码模板ID。
    *
    * @return int|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param int|null $templateId 转码模板ID。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets error
    *  error
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ErrorResponse|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ErrorResponse|null $error error
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    /**
    * Gets outputFile
    *  outputFile
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\SourceInfo|null
    */
    public function getOutputFile()
    {
        return $this->container['outputFile'];
    }

    /**
    * Sets outputFile
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\SourceInfo|null $outputFile outputFile
    *
    * @return $this
    */
    public function setOutputFile($outputFile)
    {
        $this->container['outputFile'] = $outputFile;
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

