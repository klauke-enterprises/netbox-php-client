<?php
/**
 * WritableVMInterfaceRequest
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
 * WritableVMInterfaceRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WritableVMInterfaceRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WritableVMInterfaceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'virtual_machine' => '\OpenAPI\Client\Model\VirtualMachineRequest',
        'name' => 'string',
        'enabled' => 'bool',
        'parent' => 'int',
        'bridge' => 'int',
        'mtu' => 'int',
        'mac_address' => 'string',
        'description' => 'string',
        'mode' => 'string',
        'untagged_vlan' => '\OpenAPI\Client\Model\VLANRequest',
        'tagged_vlans' => 'int[]',
        'vrf' => '\OpenAPI\Client\Model\VRFRequest',
        'tags' => '\OpenAPI\Client\Model\NestedTagRequest[]',
        'custom_fields' => 'array<string,mixed>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
        'tags' => null,
        'custom_fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
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
        'tags' => false,
        'custom_fields' => false
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
        'tags' => 'tags',
        'custom_fields' => 'custom_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
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
        'tags' => 'setTags',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
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
        'tags' => 'getTags',
        'custom_fields' => 'getCustomFields'
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

    public const MODE_ACCESS = 'access';
    public const MODE_TAGGED = 'tagged';
    public const MODE_TAGGED_ALL = 'tagged-all';
    public const MODE_EMPTY = '';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_ACCESS,
            self::MODE_TAGGED,
            self::MODE_TAGGED_ALL,
            self::MODE_EMPTY,
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
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
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

        if ($this->container['virtual_machine'] === null) {
            $invalidProperties[] = "'virtual_machine' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['mtu']) && ($this->container['mtu'] > 65536)) {
            $invalidProperties[] = "invalid value for 'mtu', must be smaller than or equal to 65536.";
        }

        if (!is_null($this->container['mtu']) && ($this->container['mtu'] < 1)) {
            $invalidProperties[] = "invalid value for 'mtu', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['mac_address']) && (mb_strlen($this->container['mac_address']) < 1)) {
            $invalidProperties[] = "invalid value for 'mac_address', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mode', must be one of '%s'",
                $this->container['mode'],
                implode("', '", $allowedValues)
            );
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
     * Gets virtual_machine
     *
     * @return \OpenAPI\Client\Model\VirtualMachineRequest
     */
    public function getVirtualMachine()
    {
        return $this->container['virtual_machine'];
    }

    /**
     * Sets virtual_machine
     *
     * @param \OpenAPI\Client\Model\VirtualMachineRequest $virtual_machine virtual_machine
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
            throw new \InvalidArgumentException('invalid length for $name when calling WritableVMInterfaceRequest., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WritableVMInterfaceRequest., must be bigger than or equal to 1.');
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
     * @return int|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param int|null $parent parent
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
     * @return int|null
     */
    public function getBridge()
    {
        return $this->container['bridge'];
    }

    /**
     * Sets bridge
     *
     * @param int|null $bridge bridge
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
            throw new \InvalidArgumentException('invalid value for $mtu when calling WritableVMInterfaceRequest., must be smaller than or equal to 65536.');
        }
        if (!is_null($mtu) && ($mtu < 1)) {
            throw new \InvalidArgumentException('invalid value for $mtu when calling WritableVMInterfaceRequest., must be bigger than or equal to 1.');
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

        if (!is_null($mac_address) && (mb_strlen($mac_address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $mac_address when calling WritableVMInterfaceRequest., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $description when calling WritableVMInterfaceRequest., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode IEEE 802.1Q tagging strategy  * `access` - Access * `tagged` - Tagged * `tagged-all` - Tagged (All)
     *
     * @return self
     */
    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }
        $allowedValues = $this->getModeAllowableValues();
        if (!in_array($mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mode', must be one of '%s'",
                    $mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets untagged_vlan
     *
     * @return \OpenAPI\Client\Model\VLANRequest|null
     */
    public function getUntaggedVlan()
    {
        return $this->container['untagged_vlan'];
    }

    /**
     * Sets untagged_vlan
     *
     * @param \OpenAPI\Client\Model\VLANRequest|null $untagged_vlan untagged_vlan
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
     * @return int[]|null
     */
    public function getTaggedVlans()
    {
        return $this->container['tagged_vlans'];
    }

    /**
     * Sets tagged_vlans
     *
     * @param int[]|null $tagged_vlans tagged_vlans
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
     * @return \OpenAPI\Client\Model\VRFRequest|null
     */
    public function getVrf()
    {
        return $this->container['vrf'];
    }

    /**
     * Sets vrf
     *
     * @param \OpenAPI\Client\Model\VRFRequest|null $vrf vrf
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
     * Gets tags
     *
     * @return \OpenAPI\Client\Model\NestedTagRequest[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \OpenAPI\Client\Model\NestedTagRequest[]|null $tags tags
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


