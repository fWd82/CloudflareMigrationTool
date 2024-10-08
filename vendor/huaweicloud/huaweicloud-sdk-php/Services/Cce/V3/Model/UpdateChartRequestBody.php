<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateChartRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateChartRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parameters  上传模板的配置参数，示例如下：\"{\\\"override\\\":true,\\\"skip_lint\\\":true,\\\"source\\\":\\\"package\\\"}\" - skip_lint: whether lint uploaded chart - override: whether override existed chart - visible: update chart visible
    * content  模板包文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parameters' => 'string',
            'content' => '\SplFileObject'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parameters  上传模板的配置参数，示例如下：\"{\\\"override\\\":true,\\\"skip_lint\\\":true,\\\"source\\\":\\\"package\\\"}\" - skip_lint: whether lint uploaded chart - override: whether override existed chart - visible: update chart visible
    * content  模板包文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parameters' => null,
        'content' => 'binary'
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
    * parameters  上传模板的配置参数，示例如下：\"{\\\"override\\\":true,\\\"skip_lint\\\":true,\\\"source\\\":\\\"package\\\"}\" - skip_lint: whether lint uploaded chart - override: whether override existed chart - visible: update chart visible
    * content  模板包文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parameters' => 'parameters',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parameters  上传模板的配置参数，示例如下：\"{\\\"override\\\":true,\\\"skip_lint\\\":true,\\\"source\\\":\\\"package\\\"}\" - skip_lint: whether lint uploaded chart - override: whether override existed chart - visible: update chart visible
    * content  模板包文件
    *
    * @var string[]
    */
    protected static $setters = [
            'parameters' => 'setParameters',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parameters  上传模板的配置参数，示例如下：\"{\\\"override\\\":true,\\\"skip_lint\\\":true,\\\"source\\\":\\\"package\\\"}\" - skip_lint: whether lint uploaded chart - override: whether override existed chart - visible: update chart visible
    * content  模板包文件
    *
    * @var string[]
    */
    protected static $getters = [
            'parameters' => 'getParameters',
            'content' => 'getContent'
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
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
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
    * Gets parameters
    *  上传模板的配置参数，示例如下：\"{\\\"override\\\":true,\\\"skip_lint\\\":true,\\\"source\\\":\\\"package\\\"}\" - skip_lint: whether lint uploaded chart - override: whether override existed chart - visible: update chart visible
    *
    * @return string|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param string|null $parameters 上传模板的配置参数，示例如下：\"{\\\"override\\\":true,\\\"skip_lint\\\":true,\\\"source\\\":\\\"package\\\"}\" - skip_lint: whether lint uploaded chart - override: whether override existed chart - visible: update chart visible
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets content
    *  模板包文件
    *
    * @return \SplFileObject
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param \SplFileObject $content 模板包文件
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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

