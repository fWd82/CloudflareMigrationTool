<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMeetingDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMeetingDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conferenceId  会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    * offset  查询偏移量。默认为0。针对PageParticipant 中的与会者分页。
    * limit  查询数量。默认值20。
    * searchKey  查询条件。长度限制为1-128个字符。
    * userUuid  用户的UUID。 > 该参数将废弃，请勿使用。
    * xType  默认值为0。 - 0: 不区分终端和与会人 - 1: 分页查询区分终端和与会人，结果合并返回 - 2: 单独查询终端和与会人，结果单独返回
    * xQueryType  当X-Type为2时，有效。默认为0。 - 0: 查询与会人 - 1: 查询终端
    * xAuthorizationType  标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    * xSiteId  用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conferenceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'searchKey' => 'string',
            'userUuid' => 'string',
            'xType' => 'string',
            'xQueryType' => 'string',
            'xAuthorizationType' => 'string',
            'xSiteId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conferenceId  会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    * offset  查询偏移量。默认为0。针对PageParticipant 中的与会者分页。
    * limit  查询数量。默认值20。
    * searchKey  查询条件。长度限制为1-128个字符。
    * userUuid  用户的UUID。 > 该参数将废弃，请勿使用。
    * xType  默认值为0。 - 0: 不区分终端和与会人 - 1: 分页查询区分终端和与会人，结果合并返回 - 2: 单独查询终端和与会人，结果单独返回
    * xQueryType  当X-Type为2时，有效。默认为0。 - 0: 查询与会人 - 1: 查询终端
    * xAuthorizationType  标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    * xSiteId  用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conferenceId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'searchKey' => null,
        'userUuid' => null,
        'xType' => null,
        'xQueryType' => null,
        'xAuthorizationType' => null,
        'xSiteId' => null
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
    * conferenceId  会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    * offset  查询偏移量。默认为0。针对PageParticipant 中的与会者分页。
    * limit  查询数量。默认值20。
    * searchKey  查询条件。长度限制为1-128个字符。
    * userUuid  用户的UUID。 > 该参数将废弃，请勿使用。
    * xType  默认值为0。 - 0: 不区分终端和与会人 - 1: 分页查询区分终端和与会人，结果合并返回 - 2: 单独查询终端和与会人，结果单独返回
    * xQueryType  当X-Type为2时，有效。默认为0。 - 0: 查询与会人 - 1: 查询终端
    * xAuthorizationType  标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    * xSiteId  用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conferenceId' => 'conferenceID',
            'offset' => 'offset',
            'limit' => 'limit',
            'searchKey' => 'searchKey',
            'userUuid' => 'userUUID',
            'xType' => 'X-Type',
            'xQueryType' => 'X-Query-Type',
            'xAuthorizationType' => 'X-Authorization-Type',
            'xSiteId' => 'X-Site-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conferenceId  会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    * offset  查询偏移量。默认为0。针对PageParticipant 中的与会者分页。
    * limit  查询数量。默认值20。
    * searchKey  查询条件。长度限制为1-128个字符。
    * userUuid  用户的UUID。 > 该参数将废弃，请勿使用。
    * xType  默认值为0。 - 0: 不区分终端和与会人 - 1: 分页查询区分终端和与会人，结果合并返回 - 2: 单独查询终端和与会人，结果单独返回
    * xQueryType  当X-Type为2时，有效。默认为0。 - 0: 查询与会人 - 1: 查询终端
    * xAuthorizationType  标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    * xSiteId  用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'conferenceId' => 'setConferenceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'searchKey' => 'setSearchKey',
            'userUuid' => 'setUserUuid',
            'xType' => 'setXType',
            'xQueryType' => 'setXQueryType',
            'xAuthorizationType' => 'setXAuthorizationType',
            'xSiteId' => 'setXSiteId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conferenceId  会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    * offset  查询偏移量。默认为0。针对PageParticipant 中的与会者分页。
    * limit  查询数量。默认值20。
    * searchKey  查询条件。长度限制为1-128个字符。
    * userUuid  用户的UUID。 > 该参数将废弃，请勿使用。
    * xType  默认值为0。 - 0: 不区分终端和与会人 - 1: 分页查询区分终端和与会人，结果合并返回 - 2: 单独查询终端和与会人，结果单独返回
    * xQueryType  当X-Type为2时，有效。默认为0。 - 0: 查询与会人 - 1: 查询终端
    * xAuthorizationType  标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    * xSiteId  用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'conferenceId' => 'getConferenceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'searchKey' => 'getSearchKey',
            'userUuid' => 'getUserUuid',
            'xType' => 'getXType',
            'xQueryType' => 'getXQueryType',
            'xAuthorizationType' => 'getXAuthorizationType',
            'xSiteId' => 'getXSiteId'
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
        $this->container['conferenceId'] = isset($data['conferenceId']) ? $data['conferenceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['searchKey'] = isset($data['searchKey']) ? $data['searchKey'] : null;
        $this->container['userUuid'] = isset($data['userUuid']) ? $data['userUuid'] : null;
        $this->container['xType'] = isset($data['xType']) ? $data['xType'] : null;
        $this->container['xQueryType'] = isset($data['xQueryType']) ? $data['xQueryType'] : null;
        $this->container['xAuthorizationType'] = isset($data['xAuthorizationType']) ? $data['xAuthorizationType'] : null;
        $this->container['xSiteId'] = isset($data['xSiteId']) ? $data['xSiteId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['conferenceId'] === null) {
            $invalidProperties[] = "'conferenceId' can't be null";
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
    * Gets conferenceId
    *  会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    *
    * @return string
    */
    public function getConferenceId()
    {
        return $this->container['conferenceId'];
    }

    /**
    * Sets conferenceId
    *
    * @param string $conferenceId 会议ID。 > 创建会议时返回的conferenceID。不是vmrConferenceID。
    *
    * @return $this
    */
    public function setConferenceId($conferenceId)
    {
        $this->container['conferenceId'] = $conferenceId;
        return $this;
    }

    /**
    * Gets offset
    *  查询偏移量。默认为0。针对PageParticipant 中的与会者分页。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 查询偏移量。默认为0。针对PageParticipant 中的与会者分页。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询数量。默认值20。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询数量。默认值20。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets searchKey
    *  查询条件。长度限制为1-128个字符。
    *
    * @return string|null
    */
    public function getSearchKey()
    {
        return $this->container['searchKey'];
    }

    /**
    * Sets searchKey
    *
    * @param string|null $searchKey 查询条件。长度限制为1-128个字符。
    *
    * @return $this
    */
    public function setSearchKey($searchKey)
    {
        $this->container['searchKey'] = $searchKey;
        return $this;
    }

    /**
    * Gets userUuid
    *  用户的UUID。 > 该参数将废弃，请勿使用。
    *
    * @return string|null
    */
    public function getUserUuid()
    {
        return $this->container['userUuid'];
    }

    /**
    * Sets userUuid
    *
    * @param string|null $userUuid 用户的UUID。 > 该参数将废弃，请勿使用。
    *
    * @return $this
    */
    public function setUserUuid($userUuid)
    {
        $this->container['userUuid'] = $userUuid;
        return $this;
    }

    /**
    * Gets xType
    *  默认值为0。 - 0: 不区分终端和与会人 - 1: 分页查询区分终端和与会人，结果合并返回 - 2: 单独查询终端和与会人，结果单独返回
    *
    * @return string|null
    */
    public function getXType()
    {
        return $this->container['xType'];
    }

    /**
    * Sets xType
    *
    * @param string|null $xType 默认值为0。 - 0: 不区分终端和与会人 - 1: 分页查询区分终端和与会人，结果合并返回 - 2: 单独查询终端和与会人，结果单独返回
    *
    * @return $this
    */
    public function setXType($xType)
    {
        $this->container['xType'] = $xType;
        return $this;
    }

    /**
    * Gets xQueryType
    *  当X-Type为2时，有效。默认为0。 - 0: 查询与会人 - 1: 查询终端
    *
    * @return string|null
    */
    public function getXQueryType()
    {
        return $this->container['xQueryType'];
    }

    /**
    * Sets xQueryType
    *
    * @param string|null $xQueryType 当X-Type为2时，有效。默认为0。 - 0: 查询与会人 - 1: 查询终端
    *
    * @return $this
    */
    public function setXQueryType($xQueryType)
    {
        $this->container['xQueryType'] = $xQueryType;
        return $this;
    }

    /**
    * Gets xAuthorizationType
    *  标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    *
    * @return string|null
    */
    public function getXAuthorizationType()
    {
        return $this->container['xAuthorizationType'];
    }

    /**
    * Sets xAuthorizationType
    *
    * @param string|null $xAuthorizationType 标识是否为第三方portal过来的请求。 > 该参数将废弃，请勿使用。
    *
    * @return $this
    */
    public function setXAuthorizationType($xAuthorizationType)
    {
        $this->container['xAuthorizationType'] = $xAuthorizationType;
        return $this;
    }

    /**
    * Gets xSiteId
    *  用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    *
    * @return string|null
    */
    public function getXSiteId()
    {
        return $this->container['xSiteId'];
    }

    /**
    * Sets xSiteId
    *
    * @param string|null $xSiteId 用于区分到哪个HCSO站点鉴权。 > 该参数将废弃，请勿使用。
    *
    * @return $this
    */
    public function setXSiteId($xSiteId)
    {
        $this->container['xSiteId'] = $xSiteId;
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

