<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachOrDetachCertsReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachOrDetachCertsReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateIds  证书的id集合
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateIds' => 'string[]',
            'verifiedClientCertificateEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateIds  证书的id集合
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateIds' => null,
        'verifiedClientCertificateEnabled' => null
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
    * certificateIds  证书的id集合
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateIds' => 'certificate_ids',
            'verifiedClientCertificateEnabled' => 'verified_client_certificate_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateIds  证书的id集合
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateIds' => 'setCertificateIds',
            'verifiedClientCertificateEnabled' => 'setVerifiedClientCertificateEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateIds  证书的id集合
    * verifiedClientCertificateEnabled  是否开启客户端证书校验。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateIds' => 'getCertificateIds',
            'verifiedClientCertificateEnabled' => 'getVerifiedClientCertificateEnabled'
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
        $this->container['certificateIds'] = isset($data['certificateIds']) ? $data['certificateIds'] : null;
        $this->container['verifiedClientCertificateEnabled'] = isset($data['verifiedClientCertificateEnabled']) ? $data['verifiedClientCertificateEnabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['certificateIds'] === null) {
            $invalidProperties[] = "'certificateIds' can't be null";
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
    * Gets certificateIds
    *  证书的id集合
    *
    * @return string[]
    */
    public function getCertificateIds()
    {
        return $this->container['certificateIds'];
    }

    /**
    * Sets certificateIds
    *
    * @param string[] $certificateIds 证书的id集合
    *
    * @return $this
    */
    public function setCertificateIds($certificateIds)
    {
        $this->container['certificateIds'] = $certificateIds;
        return $this;
    }

    /**
    * Gets verifiedClientCertificateEnabled
    *  是否开启客户端证书校验。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
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
    * @param bool|null $verifiedClientCertificateEnabled 是否开启客户端证书校验。当绑定证书存在trusted_root_ca时，默认开启；当绑定证书不存在trusted_root_ca时，默认关闭。
    *
    * @return $this
    */
    public function setVerifiedClientCertificateEnabled($verifiedClientCertificateEnabled)
    {
        $this->container['verifiedClientCertificateEnabled'] = $verifiedClientCertificateEnabled;
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

