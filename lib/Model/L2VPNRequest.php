<?php
/**
 * L2VPNRequest
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
 * L2VPNRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class L2VPNRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'L2VPNRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identifier' => 'int',
        'name' => 'string',
        'slug' => 'string',
        'type' => 'string',
        'import_targets' => 'int[]',
        'export_targets' => 'int[]',
        'description' => 'string',
        'comments' => 'string',
        'tenant' => '\OpenAPI\Client\Model\BriefTenantRequest',
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
        'identifier' => 'int64',
        'name' => null,
        'slug' => null,
        'type' => null,
        'import_targets' => null,
        'export_targets' => null,
        'description' => null,
        'comments' => null,
        'tenant' => null,
        'tags' => null,
        'custom_fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'identifier' => true,
        'name' => false,
        'slug' => false,
        'type' => false,
        'import_targets' => false,
        'export_targets' => false,
        'description' => false,
        'comments' => false,
        'tenant' => true,
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
        'identifier' => 'identifier',
        'name' => 'name',
        'slug' => 'slug',
        'type' => 'type',
        'import_targets' => 'import_targets',
        'export_targets' => 'export_targets',
        'description' => 'description',
        'comments' => 'comments',
        'tenant' => 'tenant',
        'tags' => 'tags',
        'custom_fields' => 'custom_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'name' => 'setName',
        'slug' => 'setSlug',
        'type' => 'setType',
        'import_targets' => 'setImportTargets',
        'export_targets' => 'setExportTargets',
        'description' => 'setDescription',
        'comments' => 'setComments',
        'tenant' => 'setTenant',
        'tags' => 'setTags',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'name' => 'getName',
        'slug' => 'getSlug',
        'type' => 'getType',
        'import_targets' => 'getImportTargets',
        'export_targets' => 'getExportTargets',
        'description' => 'getDescription',
        'comments' => 'getComments',
        'tenant' => 'getTenant',
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

    public const TYPE_VPWS = 'vpws';
    public const TYPE_VPLS = 'vpls';
    public const TYPE_VXLAN = 'vxlan';
    public const TYPE_VXLAN_EVPN = 'vxlan-evpn';
    public const TYPE_MPLS_EVPN = 'mpls-evpn';
    public const TYPE_PBB_EVPN = 'pbb-evpn';
    public const TYPE_EPL = 'epl';
    public const TYPE_EVPL = 'evpl';
    public const TYPE_EP_LAN = 'ep-lan';
    public const TYPE_EVP_LAN = 'evp-lan';
    public const TYPE_EP_TREE = 'ep-tree';
    public const TYPE_EVP_TREE = 'evp-tree';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VPWS,
            self::TYPE_VPLS,
            self::TYPE_VXLAN,
            self::TYPE_VXLAN_EVPN,
            self::TYPE_MPLS_EVPN,
            self::TYPE_PBB_EVPN,
            self::TYPE_EPL,
            self::TYPE_EVPL,
            self::TYPE_EP_LAN,
            self::TYPE_EVP_LAN,
            self::TYPE_EP_TREE,
            self::TYPE_EVP_TREE,
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
        $this->setIfExists('identifier', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('import_targets', $data ?? [], null);
        $this->setIfExists('export_targets', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('tenant', $data ?? [], null);
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

        if (!is_null($this->container['identifier']) && ($this->container['identifier'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'identifier', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['identifier']) && ($this->container['identifier'] < -9223372036854775808)) {
            $invalidProperties[] = "invalid value for 'identifier', must be bigger than or equal to -9223372036854775808.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['slug'] === null) {
            $invalidProperties[] = "'slug' can't be null";
        }
        if ((mb_strlen($this->container['slug']) > 100)) {
            $invalidProperties[] = "invalid value for 'slug', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['slug']) < 1)) {
            $invalidProperties[] = "invalid value for 'slug', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[-a-zA-Z0-9_]+$/", $this->container['slug'])) {
            $invalidProperties[] = "invalid value for 'slug', must be conform to the pattern /^[-a-zA-Z0-9_]+$/.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets identifier
     *
     * @return int|null
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param int|null $identifier identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        if (is_null($identifier)) {
            array_push($this->openAPINullablesSetToNull, 'identifier');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('identifier', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($identifier) && ($identifier > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $identifier when calling L2VPNRequest., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($identifier) && ($identifier < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $identifier when calling L2VPNRequest., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['identifier'] = $identifier;

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
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling L2VPNRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling L2VPNRequest., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        if (is_null($slug)) {
            throw new \InvalidArgumentException('non-nullable slug cannot be null');
        }
        if ((mb_strlen($slug) > 100)) {
            throw new \InvalidArgumentException('invalid length for $slug when calling L2VPNRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($slug) < 1)) {
            throw new \InvalidArgumentException('invalid length for $slug when calling L2VPNRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[-a-zA-Z0-9_]+$/", ObjectSerializer::toString($slug)))) {
            throw new \InvalidArgumentException("invalid value for \$slug when calling L2VPNRequest., must conform to the pattern /^[-a-zA-Z0-9_]+$/.");
        }

        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type * `vpws` - VPWS * `vpls` - VPLS * `vxlan` - VXLAN * `vxlan-evpn` - VXLAN-EVPN * `mpls-evpn` - MPLS EVPN * `pbb-evpn` - PBB EVPN * `epl` - EPL * `evpl` - EVPL * `ep-lan` - Ethernet Private LAN * `evp-lan` - Ethernet Virtual Private LAN * `ep-tree` - Ethernet Private Tree * `evp-tree` - Ethernet Virtual Private Tree
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets import_targets
     *
     * @return int[]|null
     */
    public function getImportTargets()
    {
        return $this->container['import_targets'];
    }

    /**
     * Sets import_targets
     *
     * @param int[]|null $import_targets import_targets
     *
     * @return self
     */
    public function setImportTargets($import_targets)
    {
        if (is_null($import_targets)) {
            throw new \InvalidArgumentException('non-nullable import_targets cannot be null');
        }
        $this->container['import_targets'] = $import_targets;

        return $this;
    }

    /**
     * Gets export_targets
     *
     * @return int[]|null
     */
    public function getExportTargets()
    {
        return $this->container['export_targets'];
    }

    /**
     * Sets export_targets
     *
     * @param int[]|null $export_targets export_targets
     *
     * @return self
     */
    public function setExportTargets($export_targets)
    {
        if (is_null($export_targets)) {
            throw new \InvalidArgumentException('non-nullable export_targets cannot be null');
        }
        $this->container['export_targets'] = $export_targets;

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
            throw new \InvalidArgumentException('invalid length for $description when calling L2VPNRequest., must be smaller than or equal to 200.');
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
     * Gets tenant
     *
     * @return \OpenAPI\Client\Model\BriefTenantRequest|null
     */
    public function getTenant()
    {
        return $this->container['tenant'];
    }

    /**
     * Sets tenant
     *
     * @param \OpenAPI\Client\Model\BriefTenantRequest|null $tenant tenant
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


