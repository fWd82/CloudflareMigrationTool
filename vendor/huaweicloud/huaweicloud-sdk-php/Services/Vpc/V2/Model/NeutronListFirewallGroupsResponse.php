<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronListFirewallGroupsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronListFirewallGroupsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * firewallGroups  firewall_group对象列表
    * firewallGroupsLinks  分页信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'firewallGroups' => '\HuaweiCloud\SDK\Vpc\V2\Model\NeutronFirewallGroup[]',
            'firewallGroupsLinks' => '\HuaweiCloud\SDK\Vpc\V2\Model\NeutronPageLink[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * firewallGroups  firewall_group对象列表
    * firewallGroupsLinks  分页信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'firewallGroups' => null,
        'firewallGroupsLinks' => null
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
    * firewallGroups  firewall_group对象列表
    * firewallGroupsLinks  分页信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'firewallGroups' => 'firewall_groups',
            'firewallGroupsLinks' => 'firewall_groups_links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * firewallGroups  firewall_group对象列表
    * firewallGroupsLinks  分页信息
    *
    * @var string[]
    */
    protected static $setters = [
            'firewallGroups' => 'setFirewallGroups',
            'firewallGroupsLinks' => 'setFirewallGroupsLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * firewallGroups  firewall_group对象列表
    * firewallGroupsLinks  分页信息
    *
    * @var string[]
    */
    protected static $getters = [
            'firewallGroups' => 'getFirewallGroups',
            'firewallGroupsLinks' => 'getFirewallGroupsLinks'
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
        $this->container['firewallGroups'] = isset($data['firewallGroups']) ? $data['firewallGroups'] : null;
        $this->container['firewallGroupsLinks'] = isset($data['firewallGroupsLinks']) ? $data['firewallGroupsLinks'] : null;
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
    * Gets firewallGroups
    *  firewall_group对象列表
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\NeutronFirewallGroup[]|null
    */
    public function getFirewallGroups()
    {
        return $this->container['firewallGroups'];
    }

    /**
    * Sets firewallGroups
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\NeutronFirewallGroup[]|null $firewallGroups firewall_group对象列表
    *
    * @return $this
    */
    public function setFirewallGroups($firewallGroups)
    {
        $this->container['firewallGroups'] = $firewallGroups;
        return $this;
    }

    /**
    * Gets firewallGroupsLinks
    *  分页信息
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\NeutronPageLink[]|null
    */
    public function getFirewallGroupsLinks()
    {
        return $this->container['firewallGroupsLinks'];
    }

    /**
    * Sets firewallGroupsLinks
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\NeutronPageLink[]|null $firewallGroupsLinks 分页信息
    *
    * @return $this
    */
    public function setFirewallGroupsLinks($firewallGroupsLinks)
    {
        $this->container['firewallGroupsLinks'] = $firewallGroupsLinks;
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

