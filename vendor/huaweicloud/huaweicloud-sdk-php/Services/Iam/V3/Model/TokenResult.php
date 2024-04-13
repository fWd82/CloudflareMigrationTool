<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TokenResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TokenResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * catalog  服务目录信息。
    * domain  domain
    * expiresAt  token过期时间。
    * issuedAt  token下发时间。
    * methods  获取token的方式。
    * project  project
    * roles  token的权限信息。
    * user  user
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'catalog' => '\HuaweiCloud\SDK\Iam\V3\Model\TokenCatalog[]',
            'domain' => '\HuaweiCloud\SDK\Iam\V3\Model\TokenDomainResult',
            'expiresAt' => 'string',
            'issuedAt' => 'string',
            'methods' => 'string[]',
            'project' => '\HuaweiCloud\SDK\Iam\V3\Model\TokenProjectResult',
            'roles' => '\HuaweiCloud\SDK\Iam\V3\Model\TokenRole[]',
            'user' => '\HuaweiCloud\SDK\Iam\V3\Model\TokenUserResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * catalog  服务目录信息。
    * domain  domain
    * expiresAt  token过期时间。
    * issuedAt  token下发时间。
    * methods  获取token的方式。
    * project  project
    * roles  token的权限信息。
    * user  user
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'catalog' => null,
        'domain' => null,
        'expiresAt' => null,
        'issuedAt' => null,
        'methods' => null,
        'project' => null,
        'roles' => null,
        'user' => null
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
    * catalog  服务目录信息。
    * domain  domain
    * expiresAt  token过期时间。
    * issuedAt  token下发时间。
    * methods  获取token的方式。
    * project  project
    * roles  token的权限信息。
    * user  user
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'catalog' => 'catalog',
            'domain' => 'domain',
            'expiresAt' => 'expires_at',
            'issuedAt' => 'issued_at',
            'methods' => 'methods',
            'project' => 'project',
            'roles' => 'roles',
            'user' => 'user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * catalog  服务目录信息。
    * domain  domain
    * expiresAt  token过期时间。
    * issuedAt  token下发时间。
    * methods  获取token的方式。
    * project  project
    * roles  token的权限信息。
    * user  user
    *
    * @var string[]
    */
    protected static $setters = [
            'catalog' => 'setCatalog',
            'domain' => 'setDomain',
            'expiresAt' => 'setExpiresAt',
            'issuedAt' => 'setIssuedAt',
            'methods' => 'setMethods',
            'project' => 'setProject',
            'roles' => 'setRoles',
            'user' => 'setUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * catalog  服务目录信息。
    * domain  domain
    * expiresAt  token过期时间。
    * issuedAt  token下发时间。
    * methods  获取token的方式。
    * project  project
    * roles  token的权限信息。
    * user  user
    *
    * @var string[]
    */
    protected static $getters = [
            'catalog' => 'getCatalog',
            'domain' => 'getDomain',
            'expiresAt' => 'getExpiresAt',
            'issuedAt' => 'getIssuedAt',
            'methods' => 'getMethods',
            'project' => 'getProject',
            'roles' => 'getRoles',
            'user' => 'getUser'
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
        $this->container['catalog'] = isset($data['catalog']) ? $data['catalog'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
        $this->container['issuedAt'] = isset($data['issuedAt']) ? $data['issuedAt'] : null;
        $this->container['methods'] = isset($data['methods']) ? $data['methods'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['catalog'] === null) {
            $invalidProperties[] = "'catalog' can't be null";
        }
        if ($this->container['expiresAt'] === null) {
            $invalidProperties[] = "'expiresAt' can't be null";
        }
        if ($this->container['issuedAt'] === null) {
            $invalidProperties[] = "'issuedAt' can't be null";
        }
        if ($this->container['methods'] === null) {
            $invalidProperties[] = "'methods' can't be null";
        }
        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
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
    * Gets catalog
    *  服务目录信息。
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\TokenCatalog[]
    */
    public function getCatalog()
    {
        return $this->container['catalog'];
    }

    /**
    * Sets catalog
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\TokenCatalog[] $catalog 服务目录信息。
    *
    * @return $this
    */
    public function setCatalog($catalog)
    {
        $this->container['catalog'] = $catalog;
        return $this;
    }

    /**
    * Gets domain
    *  domain
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\TokenDomainResult|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\TokenDomainResult|null $domain domain
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets expiresAt
    *  token过期时间。
    *
    * @return string
    */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
    * Sets expiresAt
    *
    * @param string $expiresAt token过期时间。
    *
    * @return $this
    */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;
        return $this;
    }

    /**
    * Gets issuedAt
    *  token下发时间。
    *
    * @return string
    */
    public function getIssuedAt()
    {
        return $this->container['issuedAt'];
    }

    /**
    * Sets issuedAt
    *
    * @param string $issuedAt token下发时间。
    *
    * @return $this
    */
    public function setIssuedAt($issuedAt)
    {
        $this->container['issuedAt'] = $issuedAt;
        return $this;
    }

    /**
    * Gets methods
    *  获取token的方式。
    *
    * @return string[]
    */
    public function getMethods()
    {
        return $this->container['methods'];
    }

    /**
    * Sets methods
    *
    * @param string[] $methods 获取token的方式。
    *
    * @return $this
    */
    public function setMethods($methods)
    {
        $this->container['methods'] = $methods;
        return $this;
    }

    /**
    * Gets project
    *  project
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\TokenProjectResult|null
    */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
    * Sets project
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\TokenProjectResult|null $project project
    *
    * @return $this
    */
    public function setProject($project)
    {
        $this->container['project'] = $project;
        return $this;
    }

    /**
    * Gets roles
    *  token的权限信息。
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\TokenRole[]
    */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
    * Sets roles
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\TokenRole[] $roles token的权限信息。
    *
    * @return $this
    */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;
        return $this;
    }

    /**
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\TokenUserResult
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\TokenUserResult $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
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

