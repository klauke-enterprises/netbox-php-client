<?php
/**
 * PatchedWritableCircuitRequest
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
 * PatchedWritableCircuitRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PatchedWritableCircuitRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PatchedWritableCircuitRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cid' => 'string',
        'provider' => '\OpenAPI\Client\Model\ProviderRequest',
        'provider_account' => '\OpenAPI\Client\Model\ProviderAccountRequest',
        'type' => '\OpenAPI\Client\Model\CircuitTypeRequest',
        'status' => 'string',
        'tenant' => '\OpenAPI\Client\Model\TenantRequest',
        'install_date' => '\DateTime',
        'termination_date' => '\DateTime',
        'commit_rate' => 'int',
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
        'cid' => null,
        'provider' => null,
        'provider_account' => null,
        'type' => null,
        'status' => null,
        'tenant' => null,
        'install_date' => 'date',
        'termination_date' => 'date',
        'commit_rate' => null,
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
        'cid' => false,
        'provider' => false,
        'provider_account' => true,
        'type' => false,
        'status' => false,
        'tenant' => true,
        'install_date' => true,
        'termination_date' => true,
        'commit_rate' => true,
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
        'cid' => 'cid',
        'provider' => 'provider',
        'provider_account' => 'provider_account',
        'type' => 'type',
        'status' => 'status',
        'tenant' => 'tenant',
        'install_date' => 'install_date',
        'termination_date' => 'termination_date',
        'commit_rate' => 'commit_rate',
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
        'cid' => 'setCid',
        'provider' => 'setProvider',
        'provider_account' => 'setProviderAccount',
        'type' => 'setType',
        'status' => 'setStatus',
        'tenant' => 'setTenant',
        'install_date' => 'setInstallDate',
        'termination_date' => 'setTerminationDate',
        'commit_rate' => 'setCommitRate',
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
        'cid' => 'getCid',
        'provider' => 'getProvider',
        'provider_account' => 'getProviderAccount',
        'type' => 'getType',
        'status' => 'getStatus',
        'tenant' => 'getTenant',
        'install_date' => 'getInstallDate',
        'termination_date' => 'getTerminationDate',
        'commit_rate' => 'getCommitRate',
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
    public const STATUS_PROVISIONING = 'provisioning';
    public const STATUS_ACTIVE = 'active';
    public const STATUS_OFFLINE = 'offline';
    public const STATUS_DEPROVISIONING = 'deprovisioning';
    public const STATUS_DECOMMISSIONED = 'decommissioned';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PLANNED,
            self::STATUS_PROVISIONING,
            self::STATUS_ACTIVE,
            self::STATUS_OFFLINE,
            self::STATUS_DEPROVISIONING,
            self::STATUS_DECOMMISSIONED,
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
        $this->setIfExists('cid', $data ?? [], null);
        $this->setIfExists('provider', $data ?? [], null);
        $this->setIfExists('provider_account', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('tenant', $data ?? [], null);
        $this->setIfExists('install_date', $data ?? [], null);
        $this->setIfExists('termination_date', $data ?? [], null);
        $this->setIfExists('commit_rate', $data ?? [], null);
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

        if (!is_null($this->container['cid']) && (mb_strlen($this->container['cid']) > 100)) {
            $invalidProperties[] = "invalid value for 'cid', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['cid']) && (mb_strlen($this->container['cid']) < 1)) {
            $invalidProperties[] = "invalid value for 'cid', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['commit_rate']) && ($this->container['commit_rate'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'commit_rate', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['commit_rate']) && ($this->container['commit_rate'] < 0)) {
            $invalidProperties[] = "invalid value for 'commit_rate', must be bigger than or equal to 0.";
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
     * Gets cid
     *
     * @return string|null
     */
    public function getCid()
    {
        return $this->container['cid'];
    }

    /**
     * Sets cid
     *
     * @param string|null $cid Unique circuit ID
     *
     * @return self
     */
    public function setCid($cid)
    {
        if (is_null($cid)) {
            throw new \InvalidArgumentException('non-nullable cid cannot be null');
        }
        if ((mb_strlen($cid) > 100)) {
            throw new \InvalidArgumentException('invalid length for $cid when calling PatchedWritableCircuitRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($cid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $cid when calling PatchedWritableCircuitRequest., must be bigger than or equal to 1.');
        }

        $this->container['cid'] = $cid;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return \OpenAPI\Client\Model\ProviderRequest|null
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param \OpenAPI\Client\Model\ProviderRequest|null $provider provider
     *
     * @return self
     */
    public function setProvider($provider)
    {
        if (is_null($provider)) {
            throw new \InvalidArgumentException('non-nullable provider cannot be null');
        }
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets provider_account
     *
     * @return \OpenAPI\Client\Model\ProviderAccountRequest|null
     */
    public function getProviderAccount()
    {
        return $this->container['provider_account'];
    }

    /**
     * Sets provider_account
     *
     * @param \OpenAPI\Client\Model\ProviderAccountRequest|null $provider_account provider_account
     *
     * @return self
     */
    public function setProviderAccount($provider_account)
    {
        if (is_null($provider_account)) {
            array_push($this->openAPINullablesSetToNull, 'provider_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('provider_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['provider_account'] = $provider_account;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\CircuitTypeRequest|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\CircuitTypeRequest|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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
     * @param string|null $status * `planned` - Planned * `provisioning` - Provisioning * `active` - Active * `offline` - Offline * `deprovisioning` - Deprovisioning * `decommissioned` - Decommissioned
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
     * Gets install_date
     *
     * @return \DateTime|null
     */
    public function getInstallDate()
    {
        return $this->container['install_date'];
    }

    /**
     * Sets install_date
     *
     * @param \DateTime|null $install_date install_date
     *
     * @return self
     */
    public function setInstallDate($install_date)
    {
        if (is_null($install_date)) {
            array_push($this->openAPINullablesSetToNull, 'install_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('install_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['install_date'] = $install_date;

        return $this;
    }

    /**
     * Gets termination_date
     *
     * @return \DateTime|null
     */
    public function getTerminationDate()
    {
        return $this->container['termination_date'];
    }

    /**
     * Sets termination_date
     *
     * @param \DateTime|null $termination_date termination_date
     *
     * @return self
     */
    public function setTerminationDate($termination_date)
    {
        if (is_null($termination_date)) {
            array_push($this->openAPINullablesSetToNull, 'termination_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('termination_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['termination_date'] = $termination_date;

        return $this;
    }

    /**
     * Gets commit_rate
     *
     * @return int|null
     */
    public function getCommitRate()
    {
        return $this->container['commit_rate'];
    }

    /**
     * Sets commit_rate
     *
     * @param int|null $commit_rate Committed rate
     *
     * @return self
     */
    public function setCommitRate($commit_rate)
    {
        if (is_null($commit_rate)) {
            array_push($this->openAPINullablesSetToNull, 'commit_rate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('commit_rate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($commit_rate) && ($commit_rate > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $commit_rate when calling PatchedWritableCircuitRequest., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($commit_rate) && ($commit_rate < 0)) {
            throw new \InvalidArgumentException('invalid value for $commit_rate when calling PatchedWritableCircuitRequest., must be bigger than or equal to 0.');
        }

        $this->container['commit_rate'] = $commit_rate;

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
            throw new \InvalidArgumentException('invalid length for $description when calling PatchedWritableCircuitRequest., must be smaller than or equal to 200.');
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


