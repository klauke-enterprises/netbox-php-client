<?php
/**
 * VMInterface
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NetBox REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 4.0.8 (4.0)
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * VMInterface Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VMInterface implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VMInterface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'url' => 'string',
        'display' => 'string',
        'virtual_machine' => '\OpenAPI\Client\Model\VirtualMachine',
        'name' => 'string',
        'enabled' => 'bool',
        'parent' => '\OpenAPI\Client\Model\NestedVMInterface',
        'bridge' => '\OpenAPI\Client\Model\NestedVMInterface',
        'mtu' => 'int',
        'mac_address' => 'string',
        'description' => 'string',
        'mode' => '\OpenAPI\Client\Model\InterfaceMode',
        'untagged_vlan' => '\OpenAPI\Client\Model\VLAN',
        'tagged_vlans' => '\OpenAPI\Client\Model\VLAN[]',
        'vrf' => '\OpenAPI\Client\Model\VRF',
        'l2vpn_termination' => '\OpenAPI\Client\Model\L2VPNTermination',
        'tags' => '\OpenAPI\Client\Model\NestedTag[]',
        'custom_fields' => 'array<string,mixed>',
        'created' => '\DateTime',
        'last_updated' => '\DateTime',
        'count_ipaddresses' => 'int',
        'count_fhrp_groups' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'url' => 'uri',
        'display' => null,
        'virtual_machine' => null,
        'name' => null,
        'enabled' => null,
        'parent' => null,
        'bridge' => null,
        'mtu' => null,
        'mac_address' => null,
        'description' => null,
        'mode' => null,
        'untagged_vlan' => null,
        'tagged_vlans' => null,
        'vrf' => null,
        'l2vpn_termination' => null,
        'tags' => null,
        'custom_fields' => null,
        'created' => 'date-time',
        'last_updated' => 'date-time',
        'count_ipaddresses' => null,
        'count_fhrp_groups' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'url' => false,
        'display' => false,
        'virtual_machine' => false,
        'name' => false,
        'enabled' => false,
        'parent' => true,
        'bridge' => true,
        'mtu' => true,
        'mac_address' => true,
        'description' => false,
        'mode' => false,
        'untagged_vlan' => true,
        'tagged_vlans' => false,
        'vrf' => true,
        'l2vpn_termination' => true,
        'tags' => false,
        'custom_fields' => false,
        'created' => true,
        'last_updated' => true,
        'count_ipaddresses' => false,
        'count_fhrp_groups' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'url' => 'url',
        'display' => 'display',
        'virtual_machine' => 'virtual_machine',
        'name' => 'name',
        'enabled' => 'enabled',
        'parent' => 'parent',
        'bridge' => 'bridge',
        'mtu' => 'mtu',
        'mac_address' => 'mac_address',
        'description' => 'description',
        'mode' => 'mode',
        'untagged_vlan' => 'untagged_vlan',
        'tagged_vlans' => 'tagged_vlans',
        'vrf' => 'vrf',
        'l2vpn_termination' => 'l2vpn_termination',
        'tags' => 'tags',
        'custom_fields' => 'custom_fields',
        'created' => 'created',
        'last_updated' => 'last_updated',
        'count_ipaddresses' => 'count_ipaddresses',
        'count_fhrp_groups' => 'count_fhrp_groups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'url' => 'setUrl',
        'display' => 'setDisplay',
        'virtual_machine' => 'setVirtualMachine',
        'name' => 'setName',
        'enabled' => 'setEnabled',
        'parent' => 'setParent',
        'bridge' => 'setBridge',
        'mtu' => 'setMtu',
        'mac_address' => 'setMacAddress',
        'description' => 'setDescription',
        'mode' => 'setMode',
        'untagged_vlan' => 'setUntaggedVlan',
        'tagged_vlans' => 'setTaggedVlans',
        'vrf' => 'setVrf',
        'l2vpn_termination' => 'setL2vpnTermination',
        'tags' => 'setTags',
        'custom_fields' => 'setCustomFields',
        'created' => 'setCreated',
        'last_updated' => 'setLastUpdated',
        'count_ipaddresses' => 'setCountIpaddresses',
        'count_fhrp_groups' => 'setCountFhrpGroups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'url' => 'getUrl',
        'display' => 'getDisplay',
        'virtual_machine' => 'getVirtualMachine',
        'name' => 'getName',
        'enabled' => 'getEnabled',
        'parent' => 'getParent',
        'bridge' => 'getBridge',
        'mtu' => 'getMtu',
        'mac_address' => 'getMacAddress',
        'description' => 'getDescription',
        'mode' => 'getMode',
        'untagged_vlan' => 'getUntaggedVlan',
        'tagged_vlans' => 'getTaggedVlans',
        'vrf' => 'getVrf',
        'l2vpn_termination' => 'getL2vpnTermination',
        'tags' => 'getTags',
        'custom_fields' => 'getCustomFields',
        'created' => 'getCreated',
        'last_updated' => 'getLastUpdated',
        'count_ipaddresses' => 'getCountIpaddresses',
        'count_fhrp_groups' => 'getCountFhrpGroups'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('display', $data ?? [], null);
        $this->setIfExists('virtual_machine', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('parent', $data ?? [], null);
        $this->setIfExists('bridge', $data ?? [], null);
        $this->setIfExists('mtu', $data ?? [], null);
        $this->setIfExists('mac_address', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], null);
        $this->setIfExists('untagged_vlan', $data ?? [], null);
        $this->setIfExists('tagged_vlans', $data ?? [], null);
        $this->setIfExists('vrf', $data ?? [], null);
        $this->setIfExists('l2vpn_termination', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
        $this->setIfExists('count_ipaddresses', $data ?? [], null);
        $this->setIfExists('count_fhrp_groups', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['display'] === null) {
            $invalidProperties[] = "'display' can't be null";
        }
        if ($this->container['virtual_machine'] === null) {
            $invalidProperties[] = "'virtual_machine' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['mtu']) && ($this->container['mtu'] > 65536)) {
            $invalidProperties[] = "invalid value for 'mtu', must be smaller than or equal to 65536.";
        }

        if (!is_null($this->container['mtu']) && ($this->container['mtu'] < 1)) {
            $invalidProperties[] = "invalid value for 'mtu', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['l2vpn_termination'] === null) {
            $invalidProperties[] = "'l2vpn_termination' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['last_updated'] === null) {
            $invalidProperties[] = "'last_updated' can't be null";
        }
        if ($this->container['count_ipaddresses'] === null) {
            $invalidProperties[] = "'count_ipaddresses' can't be null";
        }
        if ($this->container['count_fhrp_groups'] === null) {
            $invalidProperties[] = "'count_fhrp_groups' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets display
     *
     * @return string
     */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
     * Sets display
     *
     * @param string $display display
     *
     * @return self
     */
    public function setDisplay($display)
    {
        if (is_null($display)) {
            throw new \InvalidArgumentException('non-nullable display cannot be null');
        }
        $this->container['display'] = $display;

        return $this;
    }

    /**
     * Gets virtual_machine
     *
     * @return \OpenAPI\Client\Model\VirtualMachine
     */
    public function getVirtualMachine()
    {
        return $this->container['virtual_machine'];
    }

    /**
     * Sets virtual_machine
     *
     * @param \OpenAPI\Client\Model\VirtualMachine $virtual_machine virtual_machine
     *
     * @return self
     */
    public function setVirtualMachine($virtual_machine)
    {
        if (is_null($virtual_machine)) {
            throw new \InvalidArgumentException('non-nullable virtual_machine cannot be null');
        }
        $this->container['virtual_machine'] = $virtual_machine;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $name when calling VMInterface., must be smaller than or equal to 64.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \OpenAPI\Client\Model\NestedVMInterface|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \OpenAPI\Client\Model\NestedVMInterface|null $parent parent
     *
     * @return self
     */
    public function setParent($parent)
    {
        if (is_null($parent)) {
            array_push($this->openAPINullablesSetToNull, 'parent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets bridge
     *
     * @return \OpenAPI\Client\Model\NestedVMInterface|null
     */
    public function getBridge()
    {
        return $this->container['bridge'];
    }

    /**
     * Sets bridge
     *
     * @param \OpenAPI\Client\Model\NestedVMInterface|null $bridge bridge
     *
     * @return self
     */
    public function setBridge($bridge)
    {
        if (is_null($bridge)) {
            array_push($this->openAPINullablesSetToNull, 'bridge');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bridge', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bridge'] = $bridge;

        return $this;
    }

    /**
     * Gets mtu
     *
     * @return int|null
     */
    public function getMtu()
    {
        return $this->container['mtu'];
    }

    /**
     * Sets mtu
     *
     * @param int|null $mtu mtu
     *
     * @return self
     */
    public function setMtu($mtu)
    {
        if (is_null($mtu)) {
            array_push($this->openAPINullablesSetToNull, 'mtu');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mtu', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($mtu) && ($mtu > 65536)) {
            throw new \InvalidArgumentException('invalid value for $mtu when calling VMInterface., must be smaller than or equal to 65536.');
        }
        if (!is_null($mtu) && ($mtu < 1)) {
            throw new \InvalidArgumentException('invalid value for $mtu when calling VMInterface., must be bigger than or equal to 1.');
        }

        $this->container['mtu'] = $mtu;

        return $this;
    }

    /**
     * Gets mac_address
     *
     * @return string|null
     */
    public function getMacAddress()
    {
        return $this->container['mac_address'];
    }

    /**
     * Sets mac_address
     *
     * @param string|null $mac_address mac_address
     *
     * @return self
     */
    public function setMacAddress($mac_address)
    {
        if (is_null($mac_address)) {
            array_push($this->openAPINullablesSetToNull, 'mac_address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mac_address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mac_address'] = $mac_address;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 200)) {
            throw new \InvalidArgumentException('invalid length for $description when calling VMInterface., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return \OpenAPI\Client\Model\InterfaceMode|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param \OpenAPI\Client\Model\InterfaceMode|null $mode mode
     *
     * @return self
     */
    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets untagged_vlan
     *
     * @return \OpenAPI\Client\Model\VLAN|null
     */
    public function getUntaggedVlan()
    {
        return $this->container['untagged_vlan'];
    }

    /**
     * Sets untagged_vlan
     *
     * @param \OpenAPI\Client\Model\VLAN|null $untagged_vlan untagged_vlan
     *
     * @return self
     */
    public function setUntaggedVlan($untagged_vlan)
    {
        if (is_null($untagged_vlan)) {
            array_push($this->openAPINullablesSetToNull, 'untagged_vlan');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('untagged_vlan', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['untagged_vlan'] = $untagged_vlan;

        return $this;
    }

    /**
     * Gets tagged_vlans
     *
     * @return \OpenAPI\Client\Model\VLAN[]|null
     */
    public function getTaggedVlans()
    {
        return $this->container['tagged_vlans'];
    }

    /**
     * Sets tagged_vlans
     *
     * @param \OpenAPI\Client\Model\VLAN[]|null $tagged_vlans tagged_vlans
     *
     * @return self
     */
    public function setTaggedVlans($tagged_vlans)
    {
        if (is_null($tagged_vlans)) {
            throw new \InvalidArgumentException('non-nullable tagged_vlans cannot be null');
        }
        $this->container['tagged_vlans'] = $tagged_vlans;

        return $this;
    }

    /**
     * Gets vrf
     *
     * @return \OpenAPI\Client\Model\VRF|null
     */
    public function getVrf()
    {
        return $this->container['vrf'];
    }

    /**
     * Sets vrf
     *
     * @param \OpenAPI\Client\Model\VRF|null $vrf vrf
     *
     * @return self
     */
    public function setVrf($vrf)
    {
        if (is_null($vrf)) {
            array_push($this->openAPINullablesSetToNull, 'vrf');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vrf', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vrf'] = $vrf;

        return $this;
    }

    /**
     * Gets l2vpn_termination
     *
     * @return \OpenAPI\Client\Model\L2VPNTermination
     */
    public function getL2vpnTermination()
    {
        return $this->container['l2vpn_termination'];
    }

    /**
     * Sets l2vpn_termination
     *
     * @param \OpenAPI\Client\Model\L2VPNTermination $l2vpn_termination l2vpn_termination
     *
     * @return self
     */
    public function setL2vpnTermination($l2vpn_termination)
    {
        if (is_null($l2vpn_termination)) {
            array_push($this->openAPINullablesSetToNull, 'l2vpn_termination');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('l2vpn_termination', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['l2vpn_termination'] = $l2vpn_termination;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \OpenAPI\Client\Model\NestedTag[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \OpenAPI\Client\Model\NestedTag[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return array<string,mixed>|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param array<string,mixed>|null $custom_fields custom_fields
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        if (is_null($custom_fields)) {
            throw new \InvalidArgumentException('non-nullable custom_fields cannot be null');
        }
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            array_push($this->openAPINullablesSetToNull, 'created');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets last_updated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param \DateTime $last_updated last_updated
     *
     * @return self
     */
    public function setLastUpdated($last_updated)
    {
        if (is_null($last_updated)) {
            array_push($this->openAPINullablesSetToNull, 'last_updated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_updated', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets count_ipaddresses
     *
     * @return int
     */
    public function getCountIpaddresses()
    {
        return $this->container['count_ipaddresses'];
    }

    /**
     * Sets count_ipaddresses
     *
     * @param int $count_ipaddresses count_ipaddresses
     *
     * @return self
     */
    public function setCountIpaddresses($count_ipaddresses)
    {
        if (is_null($count_ipaddresses)) {
            throw new \InvalidArgumentException('non-nullable count_ipaddresses cannot be null');
        }
        $this->container['count_ipaddresses'] = $count_ipaddresses;

        return $this;
    }

    /**
     * Gets count_fhrp_groups
     *
     * @return int
     */
    public function getCountFhrpGroups()
    {
        return $this->container['count_fhrp_groups'];
    }

    /**
     * Sets count_fhrp_groups
     *
     * @param int $count_fhrp_groups count_fhrp_groups
     *
     * @return self
     */
    public function setCountFhrpGroups($count_fhrp_groups)
    {
        if (is_null($count_fhrp_groups)) {
            throw new \InvalidArgumentException('non-nullable count_fhrp_groups cannot be null');
        }
        $this->container['count_fhrp_groups'] = $count_fhrp_groups;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


