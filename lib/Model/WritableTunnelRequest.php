<?php
/**
 * WritableTunnelRequest
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
 * WritableTunnelRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WritableTunnelRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WritableTunnelRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'status' => 'string',
        'group' => '\OpenAPI\Client\Model\TunnelGroupRequest',
        'encapsulation' => 'string',
        'ipsec_profile' => '\OpenAPI\Client\Model\IPSecProfileRequest',
        'tenant' => '\OpenAPI\Client\Model\TenantRequest',
        'tunnel_id' => 'int',
        'description' => 'string',
        'comments' => 'string',
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
        'name' => null,
        'status' => null,
        'group' => null,
        'encapsulation' => null,
        'ipsec_profile' => null,
        'tenant' => null,
        'tunnel_id' => 'int64',
        'description' => null,
        'comments' => null,
        'tags' => null,
        'custom_fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'status' => false,
        'group' => true,
        'encapsulation' => false,
        'ipsec_profile' => true,
        'tenant' => true,
        'tunnel_id' => true,
        'description' => false,
        'comments' => false,
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
        'name' => 'name',
        'status' => 'status',
        'group' => 'group',
        'encapsulation' => 'encapsulation',
        'ipsec_profile' => 'ipsec_profile',
        'tenant' => 'tenant',
        'tunnel_id' => 'tunnel_id',
        'description' => 'description',
        'comments' => 'comments',
        'tags' => 'tags',
        'custom_fields' => 'custom_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'status' => 'setStatus',
        'group' => 'setGroup',
        'encapsulation' => 'setEncapsulation',
        'ipsec_profile' => 'setIpsecProfile',
        'tenant' => 'setTenant',
        'tunnel_id' => 'setTunnelId',
        'description' => 'setDescription',
        'comments' => 'setComments',
        'tags' => 'setTags',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'status' => 'getStatus',
        'group' => 'getGroup',
        'encapsulation' => 'getEncapsulation',
        'ipsec_profile' => 'getIpsecProfile',
        'tenant' => 'getTenant',
        'tunnel_id' => 'getTunnelId',
        'description' => 'getDescription',
        'comments' => 'getComments',
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

    public const STATUS_PLANNED = 'planned';
    public const STATUS_ACTIVE = 'active';
    public const STATUS_DISABLED = 'disabled';
    public const ENCAPSULATION_IPSEC_TRANSPORT = 'ipsec-transport';
    public const ENCAPSULATION_IPSEC_TUNNEL = 'ipsec-tunnel';
    public const ENCAPSULATION_IP_IP = 'ip-ip';
    public const ENCAPSULATION_GRE = 'gre';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PLANNED,
            self::STATUS_ACTIVE,
            self::STATUS_DISABLED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEncapsulationAllowableValues()
    {
        return [
            self::ENCAPSULATION_IPSEC_TRANSPORT,
            self::ENCAPSULATION_IPSEC_TUNNEL,
            self::ENCAPSULATION_IP_IP,
            self::ENCAPSULATION_GRE,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('encapsulation', $data ?? [], null);
        $this->setIfExists('ipsec_profile', $data ?? [], null);
        $this->setIfExists('tenant', $data ?? [], null);
        $this->setIfExists('tunnel_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['encapsulation'] === null) {
            $invalidProperties[] = "'encapsulation' can't be null";
        }
        $allowedValues = $this->getEncapsulationAllowableValues();
        if (!is_null($this->container['encapsulation']) && !in_array($this->container['encapsulation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'encapsulation', must be one of '%s'",
                $this->container['encapsulation'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['tunnel_id']) && ($this->container['tunnel_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'tunnel_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['tunnel_id']) && ($this->container['tunnel_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'tunnel_id', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
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
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WritableTunnelRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WritableTunnelRequest., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status * `planned` - Planned * `active` - Active * `disabled` - Disabled
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \OpenAPI\Client\Model\TunnelGroupRequest|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \OpenAPI\Client\Model\TunnelGroupRequest|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        if (is_null($group)) {
            array_push($this->openAPINullablesSetToNull, 'group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('group', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets encapsulation
     *
     * @return string
     */
    public function getEncapsulation()
    {
        return $this->container['encapsulation'];
    }

    /**
     * Sets encapsulation
     *
     * @param string $encapsulation * `ipsec-transport` - IPsec - Transport * `ipsec-tunnel` - IPsec - Tunnel * `ip-ip` - IP-in-IP * `gre` - GRE
     *
     * @return self
     */
    public function setEncapsulation($encapsulation)
    {
        if (is_null($encapsulation)) {
            throw new \InvalidArgumentException('non-nullable encapsulation cannot be null');
        }
        $allowedValues = $this->getEncapsulationAllowableValues();
        if (!in_array($encapsulation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'encapsulation', must be one of '%s'",
                    $encapsulation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['encapsulation'] = $encapsulation;

        return $this;
    }

    /**
     * Gets ipsec_profile
     *
     * @return \OpenAPI\Client\Model\IPSecProfileRequest|null
     */
    public function getIpsecProfile()
    {
        return $this->container['ipsec_profile'];
    }

    /**
     * Sets ipsec_profile
     *
     * @param \OpenAPI\Client\Model\IPSecProfileRequest|null $ipsec_profile ipsec_profile
     *
     * @return self
     */
    public function setIpsecProfile($ipsec_profile)
    {
        if (is_null($ipsec_profile)) {
            array_push($this->openAPINullablesSetToNull, 'ipsec_profile');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ipsec_profile', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ipsec_profile'] = $ipsec_profile;

        return $this;
    }

    /**
     * Gets tenant
     *
     * @return \OpenAPI\Client\Model\TenantRequest|null
     */
    public function getTenant()
    {
        return $this->container['tenant'];
    }

    /**
     * Sets tenant
     *
     * @param \OpenAPI\Client\Model\TenantRequest|null $tenant tenant
     *
     * @return self
     */
    public function setTenant($tenant)
    {
        if (is_null($tenant)) {
            array_push($this->openAPINullablesSetToNull, 'tenant');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tenant', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tenant'] = $tenant;

        return $this;
    }

    /**
     * Gets tunnel_id
     *
     * @return int|null
     */
    public function getTunnelId()
    {
        return $this->container['tunnel_id'];
    }

    /**
     * Sets tunnel_id
     *
     * @param int|null $tunnel_id tunnel_id
     *
     * @return self
     */
    public function setTunnelId($tunnel_id)
    {
        if (is_null($tunnel_id)) {
            array_push($this->openAPINullablesSetToNull, 'tunnel_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tunnel_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($tunnel_id) && ($tunnel_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $tunnel_id when calling WritableTunnelRequest., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($tunnel_id) && ($tunnel_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $tunnel_id when calling WritableTunnelRequest., must be bigger than or equal to 0.');
        }

        $this->container['tunnel_id'] = $tunnel_id;

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
            throw new \InvalidArgumentException('invalid length for $description when calling WritableTunnelRequest., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments comments
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (is_null($comments)) {
            throw new \InvalidArgumentException('non-nullable comments cannot be null');
        }
        $this->container['comments'] = $comments;

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


