<?php
/**
 * WritableEventRuleRequest
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
 * WritableEventRuleRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WritableEventRuleRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WritableEventRuleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'object_types' => 'string[]',
        'name' => 'string',
        'type_create' => 'bool',
        'type_update' => 'bool',
        'type_delete' => 'bool',
        'type_job_start' => 'bool',
        'type_job_end' => 'bool',
        'enabled' => 'bool',
        'conditions' => 'mixed',
        'action_type' => 'string',
        'action_object_type' => 'string',
        'action_object_id' => 'int',
        'description' => 'string',
        'custom_fields' => 'array<string,mixed>',
        'tags' => '\OpenAPI\Client\Model\NestedTagRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'object_types' => null,
        'name' => null,
        'type_create' => null,
        'type_update' => null,
        'type_delete' => null,
        'type_job_start' => null,
        'type_job_end' => null,
        'enabled' => null,
        'conditions' => null,
        'action_type' => null,
        'action_object_type' => null,
        'action_object_id' => 'int64',
        'description' => null,
        'custom_fields' => null,
        'tags' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'object_types' => false,
        'name' => false,
        'type_create' => false,
        'type_update' => false,
        'type_delete' => false,
        'type_job_start' => false,
        'type_job_end' => false,
        'enabled' => false,
        'conditions' => true,
        'action_type' => false,
        'action_object_type' => false,
        'action_object_id' => true,
        'description' => false,
        'custom_fields' => false,
        'tags' => false
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
        'object_types' => 'object_types',
        'name' => 'name',
        'type_create' => 'type_create',
        'type_update' => 'type_update',
        'type_delete' => 'type_delete',
        'type_job_start' => 'type_job_start',
        'type_job_end' => 'type_job_end',
        'enabled' => 'enabled',
        'conditions' => 'conditions',
        'action_type' => 'action_type',
        'action_object_type' => 'action_object_type',
        'action_object_id' => 'action_object_id',
        'description' => 'description',
        'custom_fields' => 'custom_fields',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object_types' => 'setObjectTypes',
        'name' => 'setName',
        'type_create' => 'setTypeCreate',
        'type_update' => 'setTypeUpdate',
        'type_delete' => 'setTypeDelete',
        'type_job_start' => 'setTypeJobStart',
        'type_job_end' => 'setTypeJobEnd',
        'enabled' => 'setEnabled',
        'conditions' => 'setConditions',
        'action_type' => 'setActionType',
        'action_object_type' => 'setActionObjectType',
        'action_object_id' => 'setActionObjectId',
        'description' => 'setDescription',
        'custom_fields' => 'setCustomFields',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object_types' => 'getObjectTypes',
        'name' => 'getName',
        'type_create' => 'getTypeCreate',
        'type_update' => 'getTypeUpdate',
        'type_delete' => 'getTypeDelete',
        'type_job_start' => 'getTypeJobStart',
        'type_job_end' => 'getTypeJobEnd',
        'enabled' => 'getEnabled',
        'conditions' => 'getConditions',
        'action_type' => 'getActionType',
        'action_object_type' => 'getActionObjectType',
        'action_object_id' => 'getActionObjectId',
        'description' => 'getDescription',
        'custom_fields' => 'getCustomFields',
        'tags' => 'getTags'
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

    public const ACTION_TYPE_WEBHOOK = 'webhook';
    public const ACTION_TYPE_SCRIPT = 'script';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionTypeAllowableValues()
    {
        return [
            self::ACTION_TYPE_WEBHOOK,
            self::ACTION_TYPE_SCRIPT,
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
        $this->setIfExists('object_types', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type_create', $data ?? [], null);
        $this->setIfExists('type_update', $data ?? [], null);
        $this->setIfExists('type_delete', $data ?? [], null);
        $this->setIfExists('type_job_start', $data ?? [], null);
        $this->setIfExists('type_job_end', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('conditions', $data ?? [], null);
        $this->setIfExists('action_type', $data ?? [], null);
        $this->setIfExists('action_object_type', $data ?? [], null);
        $this->setIfExists('action_object_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
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

        if ($this->container['object_types'] === null) {
            $invalidProperties[] = "'object_types' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 150)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getActionTypeAllowableValues();
        if (!is_null($this->container['action_type']) && !in_array($this->container['action_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action_type', must be one of '%s'",
                $this->container['action_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['action_object_type'] === null) {
            $invalidProperties[] = "'action_object_type' can't be null";
        }
        if (!is_null($this->container['action_object_id']) && ($this->container['action_object_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'action_object_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['action_object_id']) && ($this->container['action_object_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'action_object_id', must be bigger than or equal to 0.";
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
     * Gets object_types
     *
     * @return string[]
     */
    public function getObjectTypes()
    {
        return $this->container['object_types'];
    }

    /**
     * Sets object_types
     *
     * @param string[] $object_types object_types
     *
     * @return self
     */
    public function setObjectTypes($object_types)
    {
        if (is_null($object_types)) {
            throw new \InvalidArgumentException('non-nullable object_types cannot be null');
        }
        $this->container['object_types'] = $object_types;

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
        if ((mb_strlen($name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WritableEventRuleRequest., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WritableEventRuleRequest., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type_create
     *
     * @return bool|null
     */
    public function getTypeCreate()
    {
        return $this->container['type_create'];
    }

    /**
     * Sets type_create
     *
     * @param bool|null $type_create Triggers when a matching object is created.
     *
     * @return self
     */
    public function setTypeCreate($type_create)
    {
        if (is_null($type_create)) {
            throw new \InvalidArgumentException('non-nullable type_create cannot be null');
        }
        $this->container['type_create'] = $type_create;

        return $this;
    }

    /**
     * Gets type_update
     *
     * @return bool|null
     */
    public function getTypeUpdate()
    {
        return $this->container['type_update'];
    }

    /**
     * Sets type_update
     *
     * @param bool|null $type_update Triggers when a matching object is updated.
     *
     * @return self
     */
    public function setTypeUpdate($type_update)
    {
        if (is_null($type_update)) {
            throw new \InvalidArgumentException('non-nullable type_update cannot be null');
        }
        $this->container['type_update'] = $type_update;

        return $this;
    }

    /**
     * Gets type_delete
     *
     * @return bool|null
     */
    public function getTypeDelete()
    {
        return $this->container['type_delete'];
    }

    /**
     * Sets type_delete
     *
     * @param bool|null $type_delete Triggers when a matching object is deleted.
     *
     * @return self
     */
    public function setTypeDelete($type_delete)
    {
        if (is_null($type_delete)) {
            throw new \InvalidArgumentException('non-nullable type_delete cannot be null');
        }
        $this->container['type_delete'] = $type_delete;

        return $this;
    }

    /**
     * Gets type_job_start
     *
     * @return bool|null
     */
    public function getTypeJobStart()
    {
        return $this->container['type_job_start'];
    }

    /**
     * Sets type_job_start
     *
     * @param bool|null $type_job_start Triggers when a job for a matching object is started.
     *
     * @return self
     */
    public function setTypeJobStart($type_job_start)
    {
        if (is_null($type_job_start)) {
            throw new \InvalidArgumentException('non-nullable type_job_start cannot be null');
        }
        $this->container['type_job_start'] = $type_job_start;

        return $this;
    }

    /**
     * Gets type_job_end
     *
     * @return bool|null
     */
    public function getTypeJobEnd()
    {
        return $this->container['type_job_end'];
    }

    /**
     * Sets type_job_end
     *
     * @param bool|null $type_job_end Triggers when a job for a matching object terminates.
     *
     * @return self
     */
    public function setTypeJobEnd($type_job_end)
    {
        if (is_null($type_job_end)) {
            throw new \InvalidArgumentException('non-nullable type_job_end cannot be null');
        }
        $this->container['type_job_end'] = $type_job_end;

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
     * Gets conditions
     *
     * @return mixed|null
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param mixed|null $conditions A set of conditions which determine whether the event will be generated.
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        if (is_null($conditions)) {
            array_push($this->openAPINullablesSetToNull, 'conditions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('conditions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets action_type
     *
     * @return string|null
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param string|null $action_type * `webhook` - Webhook * `script` - Script
     *
     * @return self
     */
    public function setActionType($action_type)
    {
        if (is_null($action_type)) {
            throw new \InvalidArgumentException('non-nullable action_type cannot be null');
        }
        $allowedValues = $this->getActionTypeAllowableValues();
        if (!in_array($action_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'action_type', must be one of '%s'",
                    $action_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets action_object_type
     *
     * @return string
     */
    public function getActionObjectType()
    {
        return $this->container['action_object_type'];
    }

    /**
     * Sets action_object_type
     *
     * @param string $action_object_type action_object_type
     *
     * @return self
     */
    public function setActionObjectType($action_object_type)
    {
        if (is_null($action_object_type)) {
            throw new \InvalidArgumentException('non-nullable action_object_type cannot be null');
        }
        $this->container['action_object_type'] = $action_object_type;

        return $this;
    }

    /**
     * Gets action_object_id
     *
     * @return int|null
     */
    public function getActionObjectId()
    {
        return $this->container['action_object_id'];
    }

    /**
     * Sets action_object_id
     *
     * @param int|null $action_object_id action_object_id
     *
     * @return self
     */
    public function setActionObjectId($action_object_id)
    {
        if (is_null($action_object_id)) {
            array_push($this->openAPINullablesSetToNull, 'action_object_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('action_object_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($action_object_id) && ($action_object_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $action_object_id when calling WritableEventRuleRequest., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($action_object_id) && ($action_object_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $action_object_id when calling WritableEventRuleRequest., must be bigger than or equal to 0.');
        }

        $this->container['action_object_id'] = $action_object_id;

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
            throw new \InvalidArgumentException('invalid length for $description when calling WritableEventRuleRequest., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

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


