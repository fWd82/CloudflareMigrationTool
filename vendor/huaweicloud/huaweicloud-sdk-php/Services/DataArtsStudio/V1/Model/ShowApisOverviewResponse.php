<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowApisOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowApisOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishNum  已发布API量
    * developingNum  开发中API量
    * applyNum  申请量
    * callNum  调用总量
    * successNum  成功调用量(取数成功)
    * failNum  失败调用量(取数失败)
    * legalNum  合法调用量(通过校验)
    * illegalNum  非法调用量(无法通过校验)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishNum' => 'int',
            'developingNum' => 'int',
            'applyNum' => 'int',
            'callNum' => 'int',
            'successNum' => 'int',
            'failNum' => 'int',
            'legalNum' => 'int',
            'illegalNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishNum  已发布API量
    * developingNum  开发中API量
    * applyNum  申请量
    * callNum  调用总量
    * successNum  成功调用量(取数成功)
    * failNum  失败调用量(取数失败)
    * legalNum  合法调用量(通过校验)
    * illegalNum  非法调用量(无法通过校验)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishNum' => null,
        'developingNum' => null,
        'applyNum' => null,
        'callNum' => null,
        'successNum' => null,
        'failNum' => null,
        'legalNum' => null,
        'illegalNum' => null
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
    * publishNum  已发布API量
    * developingNum  开发中API量
    * applyNum  申请量
    * callNum  调用总量
    * successNum  成功调用量(取数成功)
    * failNum  失败调用量(取数失败)
    * legalNum  合法调用量(通过校验)
    * illegalNum  非法调用量(无法通过校验)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishNum' => 'publish_num',
            'developingNum' => 'developing_num',
            'applyNum' => 'apply_num',
            'callNum' => 'call_num',
            'successNum' => 'success_num',
            'failNum' => 'fail_num',
            'legalNum' => 'legal_num',
            'illegalNum' => 'illegal_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishNum  已发布API量
    * developingNum  开发中API量
    * applyNum  申请量
    * callNum  调用总量
    * successNum  成功调用量(取数成功)
    * failNum  失败调用量(取数失败)
    * legalNum  合法调用量(通过校验)
    * illegalNum  非法调用量(无法通过校验)
    *
    * @var string[]
    */
    protected static $setters = [
            'publishNum' => 'setPublishNum',
            'developingNum' => 'setDevelopingNum',
            'applyNum' => 'setApplyNum',
            'callNum' => 'setCallNum',
            'successNum' => 'setSuccessNum',
            'failNum' => 'setFailNum',
            'legalNum' => 'setLegalNum',
            'illegalNum' => 'setIllegalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishNum  已发布API量
    * developingNum  开发中API量
    * applyNum  申请量
    * callNum  调用总量
    * successNum  成功调用量(取数成功)
    * failNum  失败调用量(取数失败)
    * legalNum  合法调用量(通过校验)
    * illegalNum  非法调用量(无法通过校验)
    *
    * @var string[]
    */
    protected static $getters = [
            'publishNum' => 'getPublishNum',
            'developingNum' => 'getDevelopingNum',
            'applyNum' => 'getApplyNum',
            'callNum' => 'getCallNum',
            'successNum' => 'getSuccessNum',
            'failNum' => 'getFailNum',
            'legalNum' => 'getLegalNum',
            'illegalNum' => 'getIllegalNum'
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
        $this->container['publishNum'] = isset($data['publishNum']) ? $data['publishNum'] : null;
        $this->container['developingNum'] = isset($data['developingNum']) ? $data['developingNum'] : null;
        $this->container['applyNum'] = isset($data['applyNum']) ? $data['applyNum'] : null;
        $this->container['callNum'] = isset($data['callNum']) ? $data['callNum'] : null;
        $this->container['successNum'] = isset($data['successNum']) ? $data['successNum'] : null;
        $this->container['failNum'] = isset($data['failNum']) ? $data['failNum'] : null;
        $this->container['legalNum'] = isset($data['legalNum']) ? $data['legalNum'] : null;
        $this->container['illegalNum'] = isset($data['illegalNum']) ? $data['illegalNum'] : null;
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
    * Gets publishNum
    *  已发布API量
    *
    * @return int|null
    */
    public function getPublishNum()
    {
        return $this->container['publishNum'];
    }

    /**
    * Sets publishNum
    *
    * @param int|null $publishNum 已发布API量
    *
    * @return $this
    */
    public function setPublishNum($publishNum)
    {
        $this->container['publishNum'] = $publishNum;
        return $this;
    }

    /**
    * Gets developingNum
    *  开发中API量
    *
    * @return int|null
    */
    public function getDevelopingNum()
    {
        return $this->container['developingNum'];
    }

    /**
    * Sets developingNum
    *
    * @param int|null $developingNum 开发中API量
    *
    * @return $this
    */
    public function setDevelopingNum($developingNum)
    {
        $this->container['developingNum'] = $developingNum;
        return $this;
    }

    /**
    * Gets applyNum
    *  申请量
    *
    * @return int|null
    */
    public function getApplyNum()
    {
        return $this->container['applyNum'];
    }

    /**
    * Sets applyNum
    *
    * @param int|null $applyNum 申请量
    *
    * @return $this
    */
    public function setApplyNum($applyNum)
    {
        $this->container['applyNum'] = $applyNum;
        return $this;
    }

    /**
    * Gets callNum
    *  调用总量
    *
    * @return int|null
    */
    public function getCallNum()
    {
        return $this->container['callNum'];
    }

    /**
    * Sets callNum
    *
    * @param int|null $callNum 调用总量
    *
    * @return $this
    */
    public function setCallNum($callNum)
    {
        $this->container['callNum'] = $callNum;
        return $this;
    }

    /**
    * Gets successNum
    *  成功调用量(取数成功)
    *
    * @return int|null
    */
    public function getSuccessNum()
    {
        return $this->container['successNum'];
    }

    /**
    * Sets successNum
    *
    * @param int|null $successNum 成功调用量(取数成功)
    *
    * @return $this
    */
    public function setSuccessNum($successNum)
    {
        $this->container['successNum'] = $successNum;
        return $this;
    }

    /**
    * Gets failNum
    *  失败调用量(取数失败)
    *
    * @return int|null
    */
    public function getFailNum()
    {
        return $this->container['failNum'];
    }

    /**
    * Sets failNum
    *
    * @param int|null $failNum 失败调用量(取数失败)
    *
    * @return $this
    */
    public function setFailNum($failNum)
    {
        $this->container['failNum'] = $failNum;
        return $this;
    }

    /**
    * Gets legalNum
    *  合法调用量(通过校验)
    *
    * @return int|null
    */
    public function getLegalNum()
    {
        return $this->container['legalNum'];
    }

    /**
    * Sets legalNum
    *
    * @param int|null $legalNum 合法调用量(通过校验)
    *
    * @return $this
    */
    public function setLegalNum($legalNum)
    {
        $this->container['legalNum'] = $legalNum;
        return $this;
    }

    /**
    * Gets illegalNum
    *  非法调用量(无法通过校验)
    *
    * @return int|null
    */
    public function getIllegalNum()
    {
        return $this->container['illegalNum'];
    }

    /**
    * Sets illegalNum
    *
    * @param int|null $illegalNum 非法调用量(无法通过校验)
    *
    * @return $this
    */
    public function setIllegalNum($illegalNum)
    {
        $this->container['illegalNum'] = $illegalNum;
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

