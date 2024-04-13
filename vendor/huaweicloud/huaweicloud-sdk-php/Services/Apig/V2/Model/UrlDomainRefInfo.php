<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UrlDomainRefInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UrlDomainRefInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * urlDomain  自定义域名
    * id  自定义域名的编号
    * status  CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    * minSslVersion  支持的最小SSL版本
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * sslId  证书ID
    * sslName  证书名称
    * apiGroupId  所属API分组ID
    * apiGroupName  所属API分组名称
    * instanceId  所属实例ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'urlDomain' => 'string',
            'id' => 'string',
            'status' => 'int',
            'minSslVersion' => 'string',
            'isHttpRedirectToHttps' => 'bool',
            'verifiedClientCertificateEnabled' => 'bool',
            'sslId' => 'string',
            'sslName' => 'string',
            'apiGroupId' => 'string',
            'apiGroupName' => 'string',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * urlDomain  自定义域名
    * id  自定义域名的编号
    * status  CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    * minSslVersion  支持的最小SSL版本
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * sslId  证书ID
    * sslName  证书名称
    * apiGroupId  所属API分组ID
    * apiGroupName  所属API分组名称
    * instanceId  所属实例ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'urlDomain' => null,
        'id' => null,
        'status' => 'int32',
        'minSslVersion' => null,
        'isHttpRedirectToHttps' => null,
        'verifiedClientCertificateEnabled' => null,
        'sslId' => null,
        'sslName' => null,
        'apiGroupId' => null,
        'apiGroupName' => null,
        'instanceId' => null
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
    * urlDomain  自定义域名
    * id  自定义域名的编号
    * status  CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    * minSslVersion  支持的最小SSL版本
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * sslId  证书ID
    * sslName  证书名称
    * apiGroupId  所属API分组ID
    * apiGroupName  所属API分组名称
    * instanceId  所属实例ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'urlDomain' => 'url_domain',
            'id' => 'id',
            'status' => 'status',
            'minSslVersion' => 'min_ssl_version',
            'isHttpRedirectToHttps' => 'is_http_redirect_to_https',
            'verifiedClientCertificateEnabled' => 'verified_client_certificate_enabled',
            'sslId' => 'ssl_id',
            'sslName' => 'ssl_name',
            'apiGroupId' => 'api_group_id',
            'apiGroupName' => 'api_group_name',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * urlDomain  自定义域名
    * id  自定义域名的编号
    * status  CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    * minSslVersion  支持的最小SSL版本
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * sslId  证书ID
    * sslName  证书名称
    * apiGroupId  所属API分组ID
    * apiGroupName  所属API分组名称
    * instanceId  所属实例ID
    *
    * @var string[]
    */
    protected static $setters = [
            'urlDomain' => 'setUrlDomain',
            'id' => 'setId',
            'status' => 'setStatus',
            'minSslVersion' => 'setMinSslVersion',
            'isHttpRedirectToHttps' => 'setIsHttpRedirectToHttps',
            'verifiedClientCertificateEnabled' => 'setVerifiedClientCertificateEnabled',
            'sslId' => 'setSslId',
            'sslName' => 'setSslName',
            'apiGroupId' => 'setApiGroupId',
            'apiGroupName' => 'setApiGroupName',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * urlDomain  自定义域名
    * id  自定义域名的编号
    * status  CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    * minSslVersion  支持的最小SSL版本
    * isHttpRedirectToHttps  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    * sslId  证书ID
    * sslName  证书名称
    * apiGroupId  所属API分组ID
    * apiGroupName  所属API分组名称
    * instanceId  所属实例ID
    *
    * @var string[]
    */
    protected static $getters = [
            'urlDomain' => 'getUrlDomain',
            'id' => 'getId',
            'status' => 'getStatus',
            'minSslVersion' => 'getMinSslVersion',
            'isHttpRedirectToHttps' => 'getIsHttpRedirectToHttps',
            'verifiedClientCertificateEnabled' => 'getVerifiedClientCertificateEnabled',
            'sslId' => 'getSslId',
            'sslName' => 'getSslName',
            'apiGroupId' => 'getApiGroupId',
            'apiGroupName' => 'getApiGroupName',
            'instanceId' => 'getInstanceId'
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
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    const STATUS_3 = 3;
    const STATUS_4 = 4;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_1,
            self::STATUS_2,
            self::STATUS_3,
            self::STATUS_4,
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
        $this->container['urlDomain'] = isset($data['urlDomain']) ? $data['urlDomain'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['minSslVersion'] = isset($data['minSslVersion']) ? $data['minSslVersion'] : null;
        $this->container['isHttpRedirectToHttps'] = isset($data['isHttpRedirectToHttps']) ? $data['isHttpRedirectToHttps'] : null;
        $this->container['verifiedClientCertificateEnabled'] = isset($data['verifiedClientCertificateEnabled']) ? $data['verifiedClientCertificateEnabled'] : null;
        $this->container['sslId'] = isset($data['sslId']) ? $data['sslId'] : null;
        $this->container['sslName'] = isset($data['sslName']) ? $data['sslName'] : null;
        $this->container['apiGroupId'] = isset($data['apiGroupId']) ? $data['apiGroupId'] : null;
        $this->container['apiGroupName'] = isset($data['apiGroupName']) ? $data['apiGroupName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['urlDomain'] === null) {
            $invalidProperties[] = "'urlDomain' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['minSslVersion'] === null) {
            $invalidProperties[] = "'minSslVersion' can't be null";
        }
        if ($this->container['apiGroupId'] === null) {
            $invalidProperties[] = "'apiGroupId' can't be null";
        }
        if ($this->container['apiGroupName'] === null) {
            $invalidProperties[] = "'apiGroupName' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
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
    * Gets urlDomain
    *  自定义域名
    *
    * @return string
    */
    public function getUrlDomain()
    {
        return $this->container['urlDomain'];
    }

    /**
    * Sets urlDomain
    *
    * @param string $urlDomain 自定义域名
    *
    * @return $this
    */
    public function setUrlDomain($urlDomain)
    {
        $this->container['urlDomain'] = $urlDomain;
        return $this;
    }

    /**
    * Gets id
    *  自定义域名的编号
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 自定义域名的编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status CNAME解析状态 - 1: 未解析 - 2: 解析中 - 3: 解析成功 - 4: 解析失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets minSslVersion
    *  支持的最小SSL版本
    *
    * @return string
    */
    public function getMinSslVersion()
    {
        return $this->container['minSslVersion'];
    }

    /**
    * Sets minSslVersion
    *
    * @param string $minSslVersion 支持的最小SSL版本
    *
    * @return $this
    */
    public function setMinSslVersion($minSslVersion)
    {
        $this->container['minSslVersion'] = $minSslVersion;
        return $this;
    }

    /**
    * Gets isHttpRedirectToHttps
    *  是否开启http到https的重定向，false为关闭，true为开启，默认为false
    *
    * @return bool|null
    */
    public function getIsHttpRedirectToHttps()
    {
        return $this->container['isHttpRedirectToHttps'];
    }

    /**
    * Sets isHttpRedirectToHttps
    *
    * @param bool|null $isHttpRedirectToHttps 是否开启http到https的重定向，false为关闭，true为开启，默认为false
    *
    * @return $this
    */
    public function setIsHttpRedirectToHttps($isHttpRedirectToHttps)
    {
        $this->container['isHttpRedirectToHttps'] = $isHttpRedirectToHttps;
        return $this;
    }

    /**
    * Gets verifiedClientCertificateEnabled
    *  是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @return bool|null
    */
    public function getVerifiedClientCertificateEnabled()
    {
        return $this->container['verifiedClientCertificateEnabled'];
    }

    /**
    * Sets verifiedClientCertificateEnabled
    *
    * @param bool|null $verifiedClientCertificateEnabled 是否开启客户端证书校验。只有绑定证书时，该参数才生效。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @return $this
    */
    public function setVerifiedClientCertificateEnabled($verifiedClientCertificateEnabled)
    {
        $this->container['verifiedClientCertificateEnabled'] = $verifiedClientCertificateEnabled;
        return $this;
    }

    /**
    * Gets sslId
    *  证书ID
    *
    * @return string|null
    */
    public function getSslId()
    {
        return $this->container['sslId'];
    }

    /**
    * Sets sslId
    *
    * @param string|null $sslId 证书ID
    *
    * @return $this
    */
    public function setSslId($sslId)
    {
        $this->container['sslId'] = $sslId;
        return $this;
    }

    /**
    * Gets sslName
    *  证书名称
    *
    * @return string|null
    */
    public function getSslName()
    {
        return $this->container['sslName'];
    }

    /**
    * Sets sslName
    *
    * @param string|null $sslName 证书名称
    *
    * @return $this
    */
    public function setSslName($sslName)
    {
        $this->container['sslName'] = $sslName;
        return $this;
    }

    /**
    * Gets apiGroupId
    *  所属API分组ID
    *
    * @return string
    */
    public function getApiGroupId()
    {
        return $this->container['apiGroupId'];
    }

    /**
    * Sets apiGroupId
    *
    * @param string $apiGroupId 所属API分组ID
    *
    * @return $this
    */
    public function setApiGroupId($apiGroupId)
    {
        $this->container['apiGroupId'] = $apiGroupId;
        return $this;
    }

    /**
    * Gets apiGroupName
    *  所属API分组名称
    *
    * @return string
    */
    public function getApiGroupName()
    {
        return $this->container['apiGroupName'];
    }

    /**
    * Sets apiGroupName
    *
    * @param string $apiGroupName 所属API分组名称
    *
    * @return $this
    */
    public function setApiGroupName($apiGroupName)
    {
        $this->container['apiGroupName'] = $apiGroupName;
        return $this;
    }

    /**
    * Gets instanceId
    *  所属实例ID
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
    * @param string $instanceId 所属实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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

