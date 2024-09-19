<?php
/**
 * WritableCableRequest
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
 * WritableCableRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WritableCableRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WritableCableRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'a_terminations' => '\OpenAPI\Client\Model\GenericObjectRequest[]',
        'b_terminations' => '\OpenAPI\Client\Model\GenericObjectRequest[]',
        'status' => 'string',
        'tenant' => '\OpenAPI\Client\Model\BriefTenantRequest',
        'label' => 'string',
        'color' => 'string',
        'length' => 'float',
        'length_unit' => 'string',
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
        'type' => null,
        'a_terminations' => null,
        'b_terminations' => null,
        'status' => null,
        'tenant' => null,
        'label' => null,
        'color' => null,
        'length' => 'double',
        'length_unit' => null,
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
        'type' => false,
        'a_terminations' => false,
        'b_terminations' => false,
        'status' => false,
        'tenant' => true,
        'label' => false,
        'color' => false,
        'length' => true,
        'length_unit' => false,
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
        'type' => 'type',
        'a_terminations' => 'a_terminations',
        'b_terminations' => 'b_terminations',
        'status' => 'status',
        'tenant' => 'tenant',
        'label' => 'label',
        'color' => 'color',
        'length' => 'length',
        'length_unit' => 'length_unit',
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
        'type' => 'setType',
        'a_terminations' => 'setATerminations',
        'b_terminations' => 'setBTerminations',
        'status' => 'setStatus',
        'tenant' => 'setTenant',
        'label' => 'setLabel',
        'color' => 'setColor',
        'length' => 'setLength',
        'length_unit' => 'setLengthUnit',
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
        'type' => 'getType',
        'a_terminations' => 'getATerminations',
        'b_terminations' => 'getBTerminations',
        'status' => 'getStatus',
        'tenant' => 'getTenant',
        'label' => 'getLabel',
        'color' => 'getColor',
        'length' => 'getLength',
        'length_unit' => 'getLengthUnit',
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

    public const TYPE_CAT3 = 'cat3';
    public const TYPE_CAT5 = 'cat5';
    public const TYPE_CAT5E = 'cat5e';
    public const TYPE_CAT6 = 'cat6';
    public const TYPE_CAT6A = 'cat6a';
    public const TYPE_CAT7 = 'cat7';
    public const TYPE_CAT7A = 'cat7a';
    public const TYPE_CAT8 = 'cat8';
    public const TYPE_DAC_ACTIVE = 'dac-active';
    public const TYPE_DAC_PASSIVE = 'dac-passive';
    public const TYPE_MRJ21_TRUNK = 'mrj21-trunk';
    public const TYPE_COAXIAL = 'coaxial';
    public const TYPE_MMF = 'mmf';
    public const TYPE_MMF_OM1 = 'mmf-om1';
    public const TYPE_MMF_OM2 = 'mmf-om2';
    public const TYPE_MMF_OM3 = 'mmf-om3';
    public const TYPE_MMF_OM4 = 'mmf-om4';
    public const TYPE_MMF_OM5 = 'mmf-om5';
    public const TYPE_SMF = 'smf';
    public const TYPE_SMF_OS1 = 'smf-os1';
    public const TYPE_SMF_OS2 = 'smf-os2';
    public const TYPE_AOC = 'aoc';
    public const TYPE_USB = 'usb';
    public const TYPE_POWER = 'power';
    public const TYPE_EMPTY = '';
    public const STATUS_CONNECTED = 'connected';
    public const STATUS_PLANNED = 'planned';
    public const STATUS_DECOMMISSIONING = 'decommissioning';
    public const LENGTH_UNIT_KM = 'km';
    public const LENGTH_UNIT_M = 'm';
    public const LENGTH_UNIT_CM = 'cm';
    public const LENGTH_UNIT_MI = 'mi';
    public const LENGTH_UNIT_FT = 'ft';
    public const LENGTH_UNIT_IN = 'in';
    public const LENGTH_UNIT_EMPTY = '';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CAT3,
            self::TYPE_CAT5,
            self::TYPE_CAT5E,
            self::TYPE_CAT6,
            self::TYPE_CAT6A,
            self::TYPE_CAT7,
            self::TYPE_CAT7A,
            self::TYPE_CAT8,
            self::TYPE_DAC_ACTIVE,
            self::TYPE_DAC_PASSIVE,
            self::TYPE_MRJ21_TRUNK,
            self::TYPE_COAXIAL,
            self::TYPE_MMF,
            self::TYPE_MMF_OM1,
            self::TYPE_MMF_OM2,
            self::TYPE_MMF_OM3,
            self::TYPE_MMF_OM4,
            self::TYPE_MMF_OM5,
            self::TYPE_SMF,
            self::TYPE_SMF_OS1,
            self::TYPE_SMF_OS2,
            self::TYPE_AOC,
            self::TYPE_USB,
            self::TYPE_POWER,
            self::TYPE_EMPTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CONNECTED,
            self::STATUS_PLANNED,
            self::STATUS_DECOMMISSIONING,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLengthUnitAllowableValues()
    {
        return [
            self::LENGTH_UNIT_KM,
            self::LENGTH_UNIT_M,
            self::LENGTH_UNIT_CM,
            self::LENGTH_UNIT_MI,
            self::LENGTH_UNIT_FT,
            self::LENGTH_UNIT_IN,
            self::LENGTH_UNIT_EMPTY,
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('a_terminations', $data ?? [], null);
        $this->setIfExists('b_terminations', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('tenant', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('length_unit', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 100)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['color']) && (mb_strlen($this->container['color']) > 6)) {
            $invalidProperties[] = "invalid value for 'color', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['color']) && !preg_match("/^[0-9a-f]{6}$/", $this->container['color'])) {
            $invalidProperties[] = "invalid value for 'color', must be conform to the pattern /^[0-9a-f]{6}$/.";
        }

        if (!is_null($this->container['length']) && ($this->container['length'] >= 1000000)) {
            $invalidProperties[] = "invalid value for 'length', must be smaller than 1000000.";
        }

        if (!is_null($this->container['length']) && ($this->container['length'] <= -1000000)) {
            $invalidProperties[] = "invalid value for 'length', must be bigger than -1000000.";
        }

        $allowedValues = $this->getLengthUnitAllowableValues();
        if (!is_null($this->container['length_unit']) && !in_array($this->container['length_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'length_unit', must be one of '%s'",
                $this->container['length_unit'],
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
     * @param string|null $type * `cat3` - CAT3 * `cat5` - CAT5 * `cat5e` - CAT5e * `cat6` - CAT6 * `cat6a` - CAT6a * `cat7` - CAT7 * `cat7a` - CAT7a * `cat8` - CAT8 * `dac-active` - Direct Attach Copper (Active) * `dac-passive` - Direct Attach Copper (Passive) * `mrj21-trunk` - MRJ21 Trunk * `coaxial` - Coaxial * `mmf` - Multimode Fiber * `mmf-om1` - Multimode Fiber (OM1) * `mmf-om2` - Multimode Fiber (OM2) * `mmf-om3` - Multimode Fiber (OM3) * `mmf-om4` - Multimode Fiber (OM4) * `mmf-om5` - Multimode Fiber (OM5) * `smf` - Singlemode Fiber * `smf-os1` - Singlemode Fiber (OS1) * `smf-os2` - Singlemode Fiber (OS2) * `aoc` - Active Optical Cabling (AOC) * `usb` - USB * `power` - Power
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
     * Gets a_terminations
     *
     * @return \OpenAPI\Client\Model\GenericObjectRequest[]|null
     */
    public function getATerminations()
    {
        return $this->container['a_terminations'];
    }

    /**
     * Sets a_terminations
     *
     * @param \OpenAPI\Client\Model\GenericObjectRequest[]|null $a_terminations a_terminations
     *
     * @return self
     */
    public function setATerminations($a_terminations)
    {
        if (is_null($a_terminations)) {
            throw new \InvalidArgumentException('non-nullable a_terminations cannot be null');
        }
        $this->container['a_terminations'] = $a_terminations;

        return $this;
    }

    /**
     * Gets b_terminations
     *
     * @return \OpenAPI\Client\Model\GenericObjectRequest[]|null
     */
    public function getBTerminations()
    {
        return $this->container['b_terminations'];
    }

    /**
     * Sets b_terminations
     *
     * @param \OpenAPI\Client\Model\GenericObjectRequest[]|null $b_terminations b_terminations
     *
     * @return self
     */
    public function setBTerminations($b_terminations)
    {
        if (is_null($b_terminations)) {
            throw new \InvalidArgumentException('non-nullable b_terminations cannot be null');
        }
        $this->container['b_terminations'] = $b_terminations;

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
     * @param string|null $status * `connected` - Connected * `planned` - Planned * `decommissioning` - Decommissioning
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
     * @param string|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        if ((mb_strlen($label) > 100)) {
            throw new \InvalidArgumentException('invalid length for $label when calling WritableCableRequest., must be smaller than or equal to 100.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color color
     *
     * @return self
     */
    public function setColor($color)
    {
        if (is_null($color)) {
            throw new \InvalidArgumentException('non-nullable color cannot be null');
        }
        if ((mb_strlen($color) > 6)) {
            throw new \InvalidArgumentException('invalid length for $color when calling WritableCableRequest., must be smaller than or equal to 6.');
        }
        if ((!preg_match("/^[0-9a-f]{6}$/", ObjectSerializer::toString($color)))) {
            throw new \InvalidArgumentException("invalid value for \$color when calling WritableCableRequest., must conform to the pattern /^[0-9a-f]{6}$/.");
        }

        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets length
     *
     * @return float|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float|null $length length
     *
     * @return self
     */
    public function setLength($length)
    {
        if (is_null($length)) {
            array_push($this->openAPINullablesSetToNull, 'length');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('length', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($length) && ($length >= 1000000)) {
            throw new \InvalidArgumentException('invalid value for $length when calling WritableCableRequest., must be smaller than 1000000.');
        }
        if (!is_null($length) && ($length <= -1000000)) {
            throw new \InvalidArgumentException('invalid value for $length when calling WritableCableRequest., must be bigger than -1000000.');
        }

        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets length_unit
     *
     * @return string|null
     */
    public function getLengthUnit()
    {
        return $this->container['length_unit'];
    }

    /**
     * Sets length_unit
     *
     * @param string|null $length_unit * `km` - Kilometers * `m` - Meters * `cm` - Centimeters * `mi` - Miles * `ft` - Feet * `in` - Inches
     *
     * @return self
     */
    public function setLengthUnit($length_unit)
    {
        if (is_null($length_unit)) {
            throw new \InvalidArgumentException('non-nullable length_unit cannot be null');
        }
        $allowedValues = $this->getLengthUnitAllowableValues();
        if (!in_array($length_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'length_unit', must be one of '%s'",
                    $length_unit,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['length_unit'] = $length_unit;

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
            throw new \InvalidArgumentException('invalid length for $description when calling WritableCableRequest., must be smaller than or equal to 200.');
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


