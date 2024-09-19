<?php
/**
 * WirelessLAN
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
 * The version of the OpenAPI document: 4.1.1 (4.1)
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
 * WirelessLAN Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WirelessLAN implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WirelessLAN';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'url' => 'string',
        'display_url' => 'string',
        'display' => 'string',
        'ssid' => 'string',
        'description' => 'string',
        'group' => '\OpenAPI\Client\Model\BriefWirelessLANGroup',
        'status' => '\OpenAPI\Client\Model\WirelessLANStatus',
        'vlan' => '\OpenAPI\Client\Model\BriefVLAN',
        'tenant' => '\OpenAPI\Client\Model\BriefTenant',
        'auth_type' => '\OpenAPI\Client\Model\WirelessLANAuthType',
        'auth_cipher' => '\OpenAPI\Client\Model\WirelessLANAuthCipher',
        'auth_psk' => 'string',
        'comments' => 'string',
        'tags' => '\OpenAPI\Client\Model\NestedTag[]',
        'custom_fields' => 'array<string,mixed>',
        'created' => '\DateTime',
        'last_updated' => '\DateTime'
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
        'display_url' => 'uri',
        'display' => null,
        'ssid' => null,
        'description' => null,
        'group' => null,
        'status' => null,
        'vlan' => null,
        'tenant' => null,
        'auth_type' => null,
        'auth_cipher' => null,
        'auth_psk' => null,
        'comments' => null,
        'tags' => null,
        'custom_fields' => null,
        'created' => 'date-time',
        'last_updated' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'url' => false,
        'display_url' => false,
        'display' => false,
        'ssid' => false,
        'description' => false,
        'group' => true,
        'status' => false,
        'vlan' => true,
        'tenant' => true,
        'auth_type' => false,
        'auth_cipher' => false,
        'auth_psk' => false,
        'comments' => false,
        'tags' => false,
        'custom_fields' => false,
        'created' => true,
        'last_updated' => true
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
        'display_url' => 'display_url',
        'display' => 'display',
        'ssid' => 'ssid',
        'description' => 'description',
        'group' => 'group',
        'status' => 'status',
        'vlan' => 'vlan',
        'tenant' => 'tenant',
        'auth_type' => 'auth_type',
        'auth_cipher' => 'auth_cipher',
        'auth_psk' => 'auth_psk',
        'comments' => 'comments',
        'tags' => 'tags',
        'custom_fields' => 'custom_fields',
        'created' => 'created',
        'last_updated' => 'last_updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'url' => 'setUrl',
        'display_url' => 'setDisplayUrl',
        'display' => 'setDisplay',
        'ssid' => 'setSsid',
        'description' => 'setDescription',
        'group' => 'setGroup',
        'status' => 'setStatus',
        'vlan' => 'setVlan',
        'tenant' => 'setTenant',
        'auth_type' => 'setAuthType',
        'auth_cipher' => 'setAuthCipher',
        'auth_psk' => 'setAuthPsk',
        'comments' => 'setComments',
        'tags' => 'setTags',
        'custom_fields' => 'setCustomFields',
        'created' => 'setCreated',
        'last_updated' => 'setLastUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'url' => 'getUrl',
        'display_url' => 'getDisplayUrl',
        'display' => 'getDisplay',
        'ssid' => 'getSsid',
        'description' => 'getDescription',
        'group' => 'getGroup',
        'status' => 'getStatus',
        'vlan' => 'getVlan',
        'tenant' => 'getTenant',
        'auth_type' => 'getAuthType',
        'auth_cipher' => 'getAuthCipher',
        'auth_psk' => 'getAuthPsk',
        'comments' => 'getComments',
        'tags' => 'getTags',
        'custom_fields' => 'getCustomFields',
        'created' => 'getCreated',
        'last_updated' => 'getLastUpdated'
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
        $this->setIfExists('display_url', $data ?? [], null);
        $this->setIfExists('display', $data ?? [], null);
        $this->setIfExists('ssid', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('vlan', $data ?? [], null);
        $this->setIfExists('tenant', $data ?? [], null);
        $this->setIfExists('auth_type', $data ?? [], null);
        $this->setIfExists('auth_cipher', $data ?? [], null);
        $this->setIfExists('auth_psk', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
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
        if ($this->container['display_url'] === null) {
            $invalidProperties[] = "'display_url' can't be null";
        }
        if ($this->container['display'] === null) {
            $invalidProperties[] = "'display' can't be null";
        }
        if ($this->container['ssid'] === null) {
            $invalidProperties[] = "'ssid' can't be null";
        }
        if ((mb_strlen($this->container['ssid']) > 32)) {
            $invalidProperties[] = "invalid value for 'ssid', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['auth_psk']) && (mb_strlen($this->container['auth_psk']) > 64)) {
            $invalidProperties[] = "invalid value for 'auth_psk', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['last_updated'] === null) {
            $invalidProperties[] = "'last_updated' can't be null";
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
     * Gets display_url
     *
     * @return string
     */
    public function getDisplayUrl()
    {
        return $this->container['display_url'];
    }

    /**
     * Sets display_url
     *
     * @param string $display_url display_url
     *
     * @return self
     */
    public function setDisplayUrl($display_url)
    {
        if (is_null($display_url)) {
            throw new \InvalidArgumentException('non-nullable display_url cannot be null');
        }
        $this->container['display_url'] = $display_url;

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
     * Gets ssid
     *
     * @return string
     */
    public function getSsid()
    {
        return $this->container['ssid'];
    }

    /**
     * Sets ssid
     *
     * @param string $ssid ssid
     *
     * @return self
     */
    public function setSsid($ssid)
    {
        if (is_null($ssid)) {
            throw new \InvalidArgumentException('non-nullable ssid cannot be null');
        }
        if ((mb_strlen($ssid) > 32)) {
            throw new \InvalidArgumentException('invalid length for $ssid when calling WirelessLAN., must be smaller than or equal to 32.');
        }

        $this->container['ssid'] = $ssid;

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
            throw new \InvalidArgumentException('invalid length for $description when calling WirelessLAN., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \OpenAPI\Client\Model\BriefWirelessLANGroup|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \OpenAPI\Client\Model\BriefWirelessLANGroup|null $group group
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
     * Gets status
     *
     * @return \OpenAPI\Client\Model\WirelessLANStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\WirelessLANStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets vlan
     *
     * @return \OpenAPI\Client\Model\BriefVLAN|null
     */
    public function getVlan()
    {
        return $this->container['vlan'];
    }

    /**
     * Sets vlan
     *
     * @param \OpenAPI\Client\Model\BriefVLAN|null $vlan vlan
     *
     * @return self
     */
    public function setVlan($vlan)
    {
        if (is_null($vlan)) {
            array_push($this->openAPINullablesSetToNull, 'vlan');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vlan', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vlan'] = $vlan;

        return $this;
    }

    /**
     * Gets tenant
     *
     * @return \OpenAPI\Client\Model\BriefTenant|null
     */
    public function getTenant()
    {
        return $this->container['tenant'];
    }

    /**
     * Sets tenant
     *
     * @param \OpenAPI\Client\Model\BriefTenant|null $tenant tenant
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
     * Gets auth_type
     *
     * @return \OpenAPI\Client\Model\WirelessLANAuthType|null
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param \OpenAPI\Client\Model\WirelessLANAuthType|null $auth_type auth_type
     *
     * @return self
     */
    public function setAuthType($auth_type)
    {
        if (is_null($auth_type)) {
            throw new \InvalidArgumentException('non-nullable auth_type cannot be null');
        }
        $this->container['auth_type'] = $auth_type;

        return $this;
    }

    /**
     * Gets auth_cipher
     *
     * @return \OpenAPI\Client\Model\WirelessLANAuthCipher|null
     */
    public function getAuthCipher()
    {
        return $this->container['auth_cipher'];
    }

    /**
     * Sets auth_cipher
     *
     * @param \OpenAPI\Client\Model\WirelessLANAuthCipher|null $auth_cipher auth_cipher
     *
     * @return self
     */
    public function setAuthCipher($auth_cipher)
    {
        if (is_null($auth_cipher)) {
            throw new \InvalidArgumentException('non-nullable auth_cipher cannot be null');
        }
        $this->container['auth_cipher'] = $auth_cipher;

        return $this;
    }

    /**
     * Gets auth_psk
     *
     * @return string|null
     */
    public function getAuthPsk()
    {
        return $this->container['auth_psk'];
    }

    /**
     * Sets auth_psk
     *
     * @param string|null $auth_psk auth_psk
     *
     * @return self
     */
    public function setAuthPsk($auth_psk)
    {
        if (is_null($auth_psk)) {
            throw new \InvalidArgumentException('non-nullable auth_psk cannot be null');
        }
        if ((mb_strlen($auth_psk) > 64)) {
            throw new \InvalidArgumentException('invalid length for $auth_psk when calling WirelessLAN., must be smaller than or equal to 64.');
        }

        $this->container['auth_psk'] = $auth_psk;

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


