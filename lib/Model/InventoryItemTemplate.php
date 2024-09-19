<?php
/**
 * InventoryItemTemplate
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
 * InventoryItemTemplate Class Doc Comment
 *
 * @category Class
 * @description Extends the built-in ModelSerializer to enforce calling full_clean() on a copy of the associated instance during validation. (DRF does not do this by default; see https://github.com/encode/django-rest-framework/issues/3144)
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InventoryItemTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventoryItemTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'url' => 'string',
        'display' => 'string',
        'device_type' => '\OpenAPI\Client\Model\DeviceType',
        'parent' => 'int',
        'name' => 'string',
        'label' => 'string',
        'role' => '\OpenAPI\Client\Model\InventoryItemRole',
        'manufacturer' => '\OpenAPI\Client\Model\Manufacturer',
        'part_id' => 'string',
        'description' => 'string',
        'component_type' => 'string',
        'component_id' => 'int',
        'component' => 'mixed',
        'created' => '\DateTime',
        'last_updated' => '\DateTime',
        '_depth' => 'int'
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
        'device_type' => null,
        'parent' => null,
        'name' => null,
        'label' => null,
        'role' => null,
        'manufacturer' => null,
        'part_id' => null,
        'description' => null,
        'component_type' => null,
        'component_id' => 'int64',
        'component' => null,
        'created' => 'date-time',
        'last_updated' => 'date-time',
        '_depth' => null
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
        'device_type' => false,
        'parent' => true,
        'name' => false,
        'label' => false,
        'role' => true,
        'manufacturer' => true,
        'part_id' => false,
        'description' => false,
        'component_type' => true,
        'component_id' => true,
        'component' => true,
        'created' => true,
        'last_updated' => true,
        '_depth' => false
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
        'device_type' => 'device_type',
        'parent' => 'parent',
        'name' => 'name',
        'label' => 'label',
        'role' => 'role',
        'manufacturer' => 'manufacturer',
        'part_id' => 'part_id',
        'description' => 'description',
        'component_type' => 'component_type',
        'component_id' => 'component_id',
        'component' => 'component',
        'created' => 'created',
        'last_updated' => 'last_updated',
        '_depth' => '_depth'
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
        'device_type' => 'setDeviceType',
        'parent' => 'setParent',
        'name' => 'setName',
        'label' => 'setLabel',
        'role' => 'setRole',
        'manufacturer' => 'setManufacturer',
        'part_id' => 'setPartId',
        'description' => 'setDescription',
        'component_type' => 'setComponentType',
        'component_id' => 'setComponentId',
        'component' => 'setComponent',
        'created' => 'setCreated',
        'last_updated' => 'setLastUpdated',
        '_depth' => 'setDepth'
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
        'device_type' => 'getDeviceType',
        'parent' => 'getParent',
        'name' => 'getName',
        'label' => 'getLabel',
        'role' => 'getRole',
        'manufacturer' => 'getManufacturer',
        'part_id' => 'getPartId',
        'description' => 'getDescription',
        'component_type' => 'getComponentType',
        'component_id' => 'getComponentId',
        'component' => 'getComponent',
        'created' => 'getCreated',
        'last_updated' => 'getLastUpdated',
        '_depth' => 'getDepth'
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
        $this->setIfExists('device_type', $data ?? [], null);
        $this->setIfExists('parent', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('manufacturer', $data ?? [], null);
        $this->setIfExists('part_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('component_type', $data ?? [], null);
        $this->setIfExists('component_id', $data ?? [], null);
        $this->setIfExists('component', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
        $this->setIfExists('_depth', $data ?? [], null);
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
        if ($this->container['device_type'] === null) {
            $invalidProperties[] = "'device_type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 64)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['part_id']) && (mb_strlen($this->container['part_id']) > 50)) {
            $invalidProperties[] = "invalid value for 'part_id', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['component_id']) && ($this->container['component_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'component_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['component_id']) && ($this->container['component_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'component_id', must be bigger than or equal to 0.";
        }

        if ($this->container['component'] === null) {
            $invalidProperties[] = "'component' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['last_updated'] === null) {
            $invalidProperties[] = "'last_updated' can't be null";
        }
        if ($this->container['_depth'] === null) {
            $invalidProperties[] = "'_depth' can't be null";
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
     * Gets device_type
     *
     * @return \OpenAPI\Client\Model\DeviceType
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     *
     * @param \OpenAPI\Client\Model\DeviceType $device_type device_type
     *
     * @return self
     */
    public function setDeviceType($device_type)
    {
        if (is_null($device_type)) {
            throw new \InvalidArgumentException('non-nullable device_type cannot be null');
        }
        $this->container['device_type'] = $device_type;

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
     * @param string $name {module} is accepted as a substitution for the module bay position when attached to a module type.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $name when calling InventoryItemTemplate., must be smaller than or equal to 64.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label Physical label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        if ((mb_strlen($label) > 64)) {
            throw new \InvalidArgumentException('invalid length for $label when calling InventoryItemTemplate., must be smaller than or equal to 64.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets role
     *
     * @return \OpenAPI\Client\Model\InventoryItemRole|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param \OpenAPI\Client\Model\InventoryItemRole|null $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            array_push($this->openAPINullablesSetToNull, 'role');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('role', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return \OpenAPI\Client\Model\Manufacturer|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param \OpenAPI\Client\Model\Manufacturer|null $manufacturer manufacturer
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        if (is_null($manufacturer)) {
            array_push($this->openAPINullablesSetToNull, 'manufacturer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('manufacturer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets part_id
     *
     * @return string|null
     */
    public function getPartId()
    {
        return $this->container['part_id'];
    }

    /**
     * Sets part_id
     *
     * @param string|null $part_id Manufacturer-assigned part identifier
     *
     * @return self
     */
    public function setPartId($part_id)
    {
        if (is_null($part_id)) {
            throw new \InvalidArgumentException('non-nullable part_id cannot be null');
        }
        if ((mb_strlen($part_id) > 50)) {
            throw new \InvalidArgumentException('invalid length for $part_id when calling InventoryItemTemplate., must be smaller than or equal to 50.');
        }

        $this->container['part_id'] = $part_id;

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
            throw new \InvalidArgumentException('invalid length for $description when calling InventoryItemTemplate., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets component_type
     *
     * @return string|null
     */
    public function getComponentType()
    {
        return $this->container['component_type'];
    }

    /**
     * Sets component_type
     *
     * @param string|null $component_type component_type
     *
     * @return self
     */
    public function setComponentType($component_type)
    {
        if (is_null($component_type)) {
            array_push($this->openAPINullablesSetToNull, 'component_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('component_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['component_type'] = $component_type;

        return $this;
    }

    /**
     * Gets component_id
     *
     * @return int|null
     */
    public function getComponentId()
    {
        return $this->container['component_id'];
    }

    /**
     * Sets component_id
     *
     * @param int|null $component_id component_id
     *
     * @return self
     */
    public function setComponentId($component_id)
    {
        if (is_null($component_id)) {
            array_push($this->openAPINullablesSetToNull, 'component_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('component_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($component_id) && ($component_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $component_id when calling InventoryItemTemplate., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($component_id) && ($component_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $component_id when calling InventoryItemTemplate., must be bigger than or equal to 0.');
        }

        $this->container['component_id'] = $component_id;

        return $this;
    }

    /**
     * Gets component
     *
     * @return mixed
     */
    public function getComponent()
    {
        return $this->container['component'];
    }

    /**
     * Sets component
     *
     * @param mixed $component component
     *
     * @return self
     */
    public function setComponent($component)
    {
        if (is_null($component)) {
            array_push($this->openAPINullablesSetToNull, 'component');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('component', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['component'] = $component;

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
     * Gets _depth
     *
     * @return int
     */
    public function getDepth()
    {
        return $this->container['_depth'];
    }

    /**
     * Sets _depth
     *
     * @param int $_depth _depth
     *
     * @return self
     */
    public function setDepth($_depth)
    {
        if (is_null($_depth)) {
            throw new \InvalidArgumentException('non-nullable _depth cannot be null');
        }
        $this->container['_depth'] = $_depth;

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


