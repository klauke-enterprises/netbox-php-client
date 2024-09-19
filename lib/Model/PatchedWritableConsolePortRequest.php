<?php
/**
 * PatchedWritableConsolePortRequest
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
 * PatchedWritableConsolePortRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PatchedWritableConsolePortRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PatchedWritableConsolePortRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'device' => '\OpenAPI\Client\Model\BriefDeviceRequest',
        'module' => '\OpenAPI\Client\Model\BriefModuleRequest',
        'name' => 'string',
        'label' => 'string',
        'type' => 'string',
        'speed' => 'int',
        'description' => 'string',
        'mark_connected' => 'bool',
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
        'device' => null,
        'module' => null,
        'name' => null,
        'label' => null,
        'type' => null,
        'speed' => null,
        'description' => null,
        'mark_connected' => null,
        'tags' => null,
        'custom_fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'device' => false,
        'module' => true,
        'name' => false,
        'label' => false,
        'type' => false,
        'speed' => true,
        'description' => false,
        'mark_connected' => false,
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
        'device' => 'device',
        'module' => 'module',
        'name' => 'name',
        'label' => 'label',
        'type' => 'type',
        'speed' => 'speed',
        'description' => 'description',
        'mark_connected' => 'mark_connected',
        'tags' => 'tags',
        'custom_fields' => 'custom_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'device' => 'setDevice',
        'module' => 'setModule',
        'name' => 'setName',
        'label' => 'setLabel',
        'type' => 'setType',
        'speed' => 'setSpeed',
        'description' => 'setDescription',
        'mark_connected' => 'setMarkConnected',
        'tags' => 'setTags',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'device' => 'getDevice',
        'module' => 'getModule',
        'name' => 'getName',
        'label' => 'getLabel',
        'type' => 'getType',
        'speed' => 'getSpeed',
        'description' => 'getDescription',
        'mark_connected' => 'getMarkConnected',
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

    public const TYPE_DE_9 = 'de-9';
    public const TYPE_DB_25 = 'db-25';
    public const TYPE_RJ_11 = 'rj-11';
    public const TYPE_RJ_12 = 'rj-12';
    public const TYPE_RJ_45 = 'rj-45';
    public const TYPE_MINI_DIN_8 = 'mini-din-8';
    public const TYPE_USB_A = 'usb-a';
    public const TYPE_USB_B = 'usb-b';
    public const TYPE_USB_C = 'usb-c';
    public const TYPE_USB_MINI_A = 'usb-mini-a';
    public const TYPE_USB_MINI_B = 'usb-mini-b';
    public const TYPE_USB_MICRO_A = 'usb-micro-a';
    public const TYPE_USB_MICRO_B = 'usb-micro-b';
    public const TYPE_USB_MICRO_AB = 'usb-micro-ab';
    public const TYPE_OTHER = 'other';
    public const TYPE_EMPTY = '';
    public const SPEED_1200 = 1200;
    public const SPEED_2400 = 2400;
    public const SPEED_4800 = 4800;
    public const SPEED_9600 = 9600;
    public const SPEED_19200 = 19200;
    public const SPEED_38400 = 38400;
    public const SPEED_57600 = 57600;
    public const SPEED_115200 = 115200;
    public const SPEED_null = null;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DE_9,
            self::TYPE_DB_25,
            self::TYPE_RJ_11,
            self::TYPE_RJ_12,
            self::TYPE_RJ_45,
            self::TYPE_MINI_DIN_8,
            self::TYPE_USB_A,
            self::TYPE_USB_B,
            self::TYPE_USB_C,
            self::TYPE_USB_MINI_A,
            self::TYPE_USB_MINI_B,
            self::TYPE_USB_MICRO_A,
            self::TYPE_USB_MICRO_B,
            self::TYPE_USB_MICRO_AB,
            self::TYPE_OTHER,
            self::TYPE_EMPTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpeedAllowableValues()
    {
        return [
            self::SPEED_1200,
            self::SPEED_2400,
            self::SPEED_4800,
            self::SPEED_9600,
            self::SPEED_19200,
            self::SPEED_38400,
            self::SPEED_57600,
            self::SPEED_115200,
            self::SPEED_null,
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
        $this->setIfExists('device', $data ?? [], null);
        $this->setIfExists('module', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('speed', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('mark_connected', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 64)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 64.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSpeedAllowableValues();
        if (!is_null($this->container['speed']) && !in_array($this->container['speed'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'speed', must be one of '%s'",
                $this->container['speed'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['speed']) && ($this->container['speed'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'speed', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['speed']) && ($this->container['speed'] < 0)) {
            $invalidProperties[] = "invalid value for 'speed', must be bigger than or equal to 0.";
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
     * Gets device
     *
     * @return \OpenAPI\Client\Model\BriefDeviceRequest|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \OpenAPI\Client\Model\BriefDeviceRequest|null $device device
     *
     * @return self
     */
    public function setDevice($device)
    {
        if (is_null($device)) {
            throw new \InvalidArgumentException('non-nullable device cannot be null');
        }
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets module
     *
     * @return \OpenAPI\Client\Model\BriefModuleRequest|null
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param \OpenAPI\Client\Model\BriefModuleRequest|null $module module
     *
     * @return self
     */
    public function setModule($module)
    {
        if (is_null($module)) {
            array_push($this->openAPINullablesSetToNull, 'module');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('module', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['module'] = $module;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PatchedWritableConsolePortRequest., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PatchedWritableConsolePortRequest., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $label when calling PatchedWritableConsolePortRequest., must be smaller than or equal to 64.');
        }

        $this->container['label'] = $label;

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
     * @param string|null $type Physical port type  * `de-9` - DE-9 * `db-25` - DB-25 * `rj-11` - RJ-11 * `rj-12` - RJ-12 * `rj-45` - RJ-45 * `mini-din-8` - Mini-DIN 8 * `usb-a` - USB Type A * `usb-b` - USB Type B * `usb-c` - USB Type C * `usb-mini-a` - USB Mini A * `usb-mini-b` - USB Mini B * `usb-micro-a` - USB Micro A * `usb-micro-b` - USB Micro B * `usb-micro-ab` - USB Micro AB * `other` - Other
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
     * Gets speed
     *
     * @return int|null
     */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
     * Sets speed
     *
     * @param int|null $speed Port speed in bits per second  * `1200` - 1200 bps * `2400` - 2400 bps * `4800` - 4800 bps * `9600` - 9600 bps * `19200` - 19.2 kbps * `38400` - 38.4 kbps * `57600` - 57.6 kbps * `115200` - 115.2 kbps
     *
     * @return self
     */
    public function setSpeed($speed)
    {
        if (is_null($speed)) {
            array_push($this->openAPINullablesSetToNull, 'speed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('speed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSpeedAllowableValues();
        if (!is_null($speed) && !in_array($speed, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'speed', must be one of '%s'",
                    $speed,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($speed) && ($speed > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $speed when calling PatchedWritableConsolePortRequest., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($speed) && ($speed < 0)) {
            throw new \InvalidArgumentException('invalid value for $speed when calling PatchedWritableConsolePortRequest., must be bigger than or equal to 0.');
        }

        $this->container['speed'] = $speed;

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
            throw new \InvalidArgumentException('invalid length for $description when calling PatchedWritableConsolePortRequest., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets mark_connected
     *
     * @return bool|null
     */
    public function getMarkConnected()
    {
        return $this->container['mark_connected'];
    }

    /**
     * Sets mark_connected
     *
     * @param bool|null $mark_connected Treat as if a cable is connected
     *
     * @return self
     */
    public function setMarkConnected($mark_connected)
    {
        if (is_null($mark_connected)) {
            throw new \InvalidArgumentException('non-nullable mark_connected cannot be null');
        }
        $this->container['mark_connected'] = $mark_connected;

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


