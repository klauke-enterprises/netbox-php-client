<?php
/**
 * TunnelTerminationRequest
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
 * TunnelTerminationRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TunnelTerminationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TunnelTerminationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tunnel' => '\OpenAPI\Client\Model\TunnelRequest',
        'role' => 'string',
        'termination_type' => 'string',
        'termination_id' => 'int',
        'outside_ip' => '\OpenAPI\Client\Model\IPAddressRequest',
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
        'tunnel' => null,
        'role' => null,
        'termination_type' => null,
        'termination_id' => 'int64',
        'outside_ip' => null,
        'tags' => null,
        'custom_fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tunnel' => false,
        'role' => false,
        'termination_type' => false,
        'termination_id' => true,
        'outside_ip' => true,
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
        'tunnel' => 'tunnel',
        'role' => 'role',
        'termination_type' => 'termination_type',
        'termination_id' => 'termination_id',
        'outside_ip' => 'outside_ip',
        'tags' => 'tags',
        'custom_fields' => 'custom_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tunnel' => 'setTunnel',
        'role' => 'setRole',
        'termination_type' => 'setTerminationType',
        'termination_id' => 'setTerminationId',
        'outside_ip' => 'setOutsideIp',
        'tags' => 'setTags',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tunnel' => 'getTunnel',
        'role' => 'getRole',
        'termination_type' => 'getTerminationType',
        'termination_id' => 'getTerminationId',
        'outside_ip' => 'getOutsideIp',
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

    public const ROLE_PEER = 'peer';
    public const ROLE_HUB = 'hub';
    public const ROLE_SPOKE = 'spoke';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_PEER,
            self::ROLE_HUB,
            self::ROLE_SPOKE,
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
        $this->setIfExists('tunnel', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('termination_type', $data ?? [], null);
        $this->setIfExists('termination_id', $data ?? [], null);
        $this->setIfExists('outside_ip', $data ?? [], null);
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

        if ($this->container['tunnel'] === null) {
            $invalidProperties[] = "'tunnel' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'role', must be one of '%s'",
                $this->container['role'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['termination_type'] === null) {
            $invalidProperties[] = "'termination_type' can't be null";
        }
        if ($this->container['termination_id'] === null) {
            $invalidProperties[] = "'termination_id' can't be null";
        }
        if (($this->container['termination_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'termination_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (($this->container['termination_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'termination_id', must be bigger than or equal to 0.";
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
     * Gets tunnel
     *
     * @return \OpenAPI\Client\Model\TunnelRequest
     */
    public function getTunnel()
    {
        return $this->container['tunnel'];
    }

    /**
     * Sets tunnel
     *
     * @param \OpenAPI\Client\Model\TunnelRequest $tunnel tunnel
     *
     * @return self
     */
    public function setTunnel($tunnel)
    {
        if (is_null($tunnel)) {
            throw new \InvalidArgumentException('non-nullable tunnel cannot be null');
        }
        $this->container['tunnel'] = $tunnel;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role * `peer` - Peer * `hub` - Hub * `spoke` - Spoke
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            throw new \InvalidArgumentException('non-nullable role cannot be null');
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'role', must be one of '%s'",
                    $role,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets termination_type
     *
     * @return string
     */
    public function getTerminationType()
    {
        return $this->container['termination_type'];
    }

    /**
     * Sets termination_type
     *
     * @param string $termination_type termination_type
     *
     * @return self
     */
    public function setTerminationType($termination_type)
    {
        if (is_null($termination_type)) {
            throw new \InvalidArgumentException('non-nullable termination_type cannot be null');
        }
        $this->container['termination_type'] = $termination_type;

        return $this;
    }

    /**
     * Gets termination_id
     *
     * @return int
     */
    public function getTerminationId()
    {
        return $this->container['termination_id'];
    }

    /**
     * Sets termination_id
     *
     * @param int $termination_id termination_id
     *
     * @return self
     */
    public function setTerminationId($termination_id)
    {
        if (is_null($termination_id)) {
            array_push($this->openAPINullablesSetToNull, 'termination_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('termination_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($termination_id) && ($termination_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $termination_id when calling TunnelTerminationRequest., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($termination_id) && ($termination_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $termination_id when calling TunnelTerminationRequest., must be bigger than or equal to 0.');
        }

        $this->container['termination_id'] = $termination_id;

        return $this;
    }

    /**
     * Gets outside_ip
     *
     * @return \OpenAPI\Client\Model\IPAddressRequest|null
     */
    public function getOutsideIp()
    {
        return $this->container['outside_ip'];
    }

    /**
     * Sets outside_ip
     *
     * @param \OpenAPI\Client\Model\IPAddressRequest|null $outside_ip outside_ip
     *
     * @return self
     */
    public function setOutsideIp($outside_ip)
    {
        if (is_null($outside_ip)) {
            array_push($this->openAPINullablesSetToNull, 'outside_ip');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('outside_ip', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['outside_ip'] = $outside_ip;

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


