<?php
/**
 * PatchedWritablePowerFeedRequest
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
 * PatchedWritablePowerFeedRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PatchedWritablePowerFeedRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PatchedWritablePowerFeedRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'power_panel' => '\OpenAPI\Client\Model\BriefPowerPanelRequest',
        'rack' => '\OpenAPI\Client\Model\BriefRackRequest',
        'name' => 'string',
        'status' => 'string',
        'type' => 'string',
        'supply' => 'string',
        'phase' => 'string',
        'voltage' => 'int',
        'amperage' => 'int',
        'max_utilization' => 'int',
        'mark_connected' => 'bool',
        'description' => 'string',
        'tenant' => '\OpenAPI\Client\Model\BriefTenantRequest',
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
        'power_panel' => null,
        'rack' => null,
        'name' => null,
        'status' => null,
        'type' => null,
        'supply' => null,
        'phase' => null,
        'voltage' => null,
        'amperage' => null,
        'max_utilization' => null,
        'mark_connected' => null,
        'description' => null,
        'tenant' => null,
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
        'power_panel' => false,
        'rack' => true,
        'name' => false,
        'status' => false,
        'type' => false,
        'supply' => false,
        'phase' => false,
        'voltage' => false,
        'amperage' => false,
        'max_utilization' => false,
        'mark_connected' => false,
        'description' => false,
        'tenant' => true,
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
        'power_panel' => 'power_panel',
        'rack' => 'rack',
        'name' => 'name',
        'status' => 'status',
        'type' => 'type',
        'supply' => 'supply',
        'phase' => 'phase',
        'voltage' => 'voltage',
        'amperage' => 'amperage',
        'max_utilization' => 'max_utilization',
        'mark_connected' => 'mark_connected',
        'description' => 'description',
        'tenant' => 'tenant',
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
        'power_panel' => 'setPowerPanel',
        'rack' => 'setRack',
        'name' => 'setName',
        'status' => 'setStatus',
        'type' => 'setType',
        'supply' => 'setSupply',
        'phase' => 'setPhase',
        'voltage' => 'setVoltage',
        'amperage' => 'setAmperage',
        'max_utilization' => 'setMaxUtilization',
        'mark_connected' => 'setMarkConnected',
        'description' => 'setDescription',
        'tenant' => 'setTenant',
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
        'power_panel' => 'getPowerPanel',
        'rack' => 'getRack',
        'name' => 'getName',
        'status' => 'getStatus',
        'type' => 'getType',
        'supply' => 'getSupply',
        'phase' => 'getPhase',
        'voltage' => 'getVoltage',
        'amperage' => 'getAmperage',
        'max_utilization' => 'getMaxUtilization',
        'mark_connected' => 'getMarkConnected',
        'description' => 'getDescription',
        'tenant' => 'getTenant',
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

    public const STATUS_OFFLINE = 'offline';
    public const STATUS_ACTIVE = 'active';
    public const STATUS_PLANNED = 'planned';
    public const STATUS_FAILED = 'failed';
    public const TYPE_PRIMARY = 'primary';
    public const TYPE_REDUNDANT = 'redundant';
    public const SUPPLY_AC = 'ac';
    public const SUPPLY_DC = 'dc';
    public const PHASE_SINGLE_PHASE = 'single-phase';
    public const PHASE_THREE_PHASE = 'three-phase';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OFFLINE,
            self::STATUS_ACTIVE,
            self::STATUS_PLANNED,
            self::STATUS_FAILED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PRIMARY,
            self::TYPE_REDUNDANT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSupplyAllowableValues()
    {
        return [
            self::SUPPLY_AC,
            self::SUPPLY_DC,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPhaseAllowableValues()
    {
        return [
            self::PHASE_SINGLE_PHASE,
            self::PHASE_THREE_PHASE,
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
        $this->setIfExists('power_panel', $data ?? [], null);
        $this->setIfExists('rack', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('supply', $data ?? [], null);
        $this->setIfExists('phase', $data ?? [], null);
        $this->setIfExists('voltage', $data ?? [], null);
        $this->setIfExists('amperage', $data ?? [], null);
        $this->setIfExists('max_utilization', $data ?? [], null);
        $this->setIfExists('mark_connected', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('tenant', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSupplyAllowableValues();
        if (!is_null($this->container['supply']) && !in_array($this->container['supply'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'supply', must be one of '%s'",
                $this->container['supply'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPhaseAllowableValues();
        if (!is_null($this->container['phase']) && !in_array($this->container['phase'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'phase', must be one of '%s'",
                $this->container['phase'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['voltage']) && ($this->container['voltage'] > 32767)) {
            $invalidProperties[] = "invalid value for 'voltage', must be smaller than or equal to 32767.";
        }

        if (!is_null($this->container['voltage']) && ($this->container['voltage'] < -32768)) {
            $invalidProperties[] = "invalid value for 'voltage', must be bigger than or equal to -32768.";
        }

        if (!is_null($this->container['amperage']) && ($this->container['amperage'] > 32767)) {
            $invalidProperties[] = "invalid value for 'amperage', must be smaller than or equal to 32767.";
        }

        if (!is_null($this->container['amperage']) && ($this->container['amperage'] < 1)) {
            $invalidProperties[] = "invalid value for 'amperage', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['max_utilization']) && ($this->container['max_utilization'] > 100)) {
            $invalidProperties[] = "invalid value for 'max_utilization', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['max_utilization']) && ($this->container['max_utilization'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_utilization', must be bigger than or equal to 1.";
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
     * Gets power_panel
     *
     * @return \OpenAPI\Client\Model\BriefPowerPanelRequest|null
     */
    public function getPowerPanel()
    {
        return $this->container['power_panel'];
    }

    /**
     * Sets power_panel
     *
     * @param \OpenAPI\Client\Model\BriefPowerPanelRequest|null $power_panel power_panel
     *
     * @return self
     */
    public function setPowerPanel($power_panel)
    {
        if (is_null($power_panel)) {
            throw new \InvalidArgumentException('non-nullable power_panel cannot be null');
        }
        $this->container['power_panel'] = $power_panel;

        return $this;
    }

    /**
     * Gets rack
     *
     * @return \OpenAPI\Client\Model\BriefRackRequest|null
     */
    public function getRack()
    {
        return $this->container['rack'];
    }

    /**
     * Sets rack
     *
     * @param \OpenAPI\Client\Model\BriefRackRequest|null $rack rack
     *
     * @return self
     */
    public function setRack($rack)
    {
        if (is_null($rack)) {
            array_push($this->openAPINullablesSetToNull, 'rack');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rack', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rack'] = $rack;

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
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PatchedWritablePowerFeedRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PatchedWritablePowerFeedRequest., must be bigger than or equal to 1.');
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
     * @param string|null $status * `offline` - Offline * `active` - Active * `planned` - Planned * `failed` - Failed
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
     * @param string|null $type * `primary` - Primary * `redundant` - Redundant
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
     * Gets supply
     *
     * @return string|null
     */
    public function getSupply()
    {
        return $this->container['supply'];
    }

    /**
     * Sets supply
     *
     * @param string|null $supply * `ac` - AC * `dc` - DC
     *
     * @return self
     */
    public function setSupply($supply)
    {
        if (is_null($supply)) {
            throw new \InvalidArgumentException('non-nullable supply cannot be null');
        }
        $allowedValues = $this->getSupplyAllowableValues();
        if (!in_array($supply, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'supply', must be one of '%s'",
                    $supply,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['supply'] = $supply;

        return $this;
    }

    /**
     * Gets phase
     *
     * @return string|null
     */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
     * Sets phase
     *
     * @param string|null $phase * `single-phase` - Single phase * `three-phase` - Three-phase
     *
     * @return self
     */
    public function setPhase($phase)
    {
        if (is_null($phase)) {
            throw new \InvalidArgumentException('non-nullable phase cannot be null');
        }
        $allowedValues = $this->getPhaseAllowableValues();
        if (!in_array($phase, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'phase', must be one of '%s'",
                    $phase,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['phase'] = $phase;

        return $this;
    }

    /**
     * Gets voltage
     *
     * @return int|null
     */
    public function getVoltage()
    {
        return $this->container['voltage'];
    }

    /**
     * Sets voltage
     *
     * @param int|null $voltage voltage
     *
     * @return self
     */
    public function setVoltage($voltage)
    {
        if (is_null($voltage)) {
            throw new \InvalidArgumentException('non-nullable voltage cannot be null');
        }

        if (($voltage > 32767)) {
            throw new \InvalidArgumentException('invalid value for $voltage when calling PatchedWritablePowerFeedRequest., must be smaller than or equal to 32767.');
        }
        if (($voltage < -32768)) {
            throw new \InvalidArgumentException('invalid value for $voltage when calling PatchedWritablePowerFeedRequest., must be bigger than or equal to -32768.');
        }

        $this->container['voltage'] = $voltage;

        return $this;
    }

    /**
     * Gets amperage
     *
     * @return int|null
     */
    public function getAmperage()
    {
        return $this->container['amperage'];
    }

    /**
     * Sets amperage
     *
     * @param int|null $amperage amperage
     *
     * @return self
     */
    public function setAmperage($amperage)
    {
        if (is_null($amperage)) {
            throw new \InvalidArgumentException('non-nullable amperage cannot be null');
        }

        if (($amperage > 32767)) {
            throw new \InvalidArgumentException('invalid value for $amperage when calling PatchedWritablePowerFeedRequest., must be smaller than or equal to 32767.');
        }
        if (($amperage < 1)) {
            throw new \InvalidArgumentException('invalid value for $amperage when calling PatchedWritablePowerFeedRequest., must be bigger than or equal to 1.');
        }

        $this->container['amperage'] = $amperage;

        return $this;
    }

    /**
     * Gets max_utilization
     *
     * @return int|null
     */
    public function getMaxUtilization()
    {
        return $this->container['max_utilization'];
    }

    /**
     * Sets max_utilization
     *
     * @param int|null $max_utilization Maximum permissible draw (percentage)
     *
     * @return self
     */
    public function setMaxUtilization($max_utilization)
    {
        if (is_null($max_utilization)) {
            throw new \InvalidArgumentException('non-nullable max_utilization cannot be null');
        }

        if (($max_utilization > 100)) {
            throw new \InvalidArgumentException('invalid value for $max_utilization when calling PatchedWritablePowerFeedRequest., must be smaller than or equal to 100.');
        }
        if (($max_utilization < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_utilization when calling PatchedWritablePowerFeedRequest., must be bigger than or equal to 1.');
        }

        $this->container['max_utilization'] = $max_utilization;

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
            throw new \InvalidArgumentException('invalid length for $description when calling PatchedWritablePowerFeedRequest., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

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


