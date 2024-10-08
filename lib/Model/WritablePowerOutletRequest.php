<?php
/**
 * WritablePowerOutletRequest
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
 * WritablePowerOutletRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WritablePowerOutletRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WritablePowerOutletRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'device' => '\OpenAPI\Client\Model\DeviceRequest',
        'module' => '\OpenAPI\Client\Model\ModuleRequest',
        'name' => 'string',
        'label' => 'string',
        'type' => 'string',
        'power_port' => '\OpenAPI\Client\Model\PowerPortRequest',
        'feed_leg' => 'string',
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
        'power_port' => null,
        'feed_leg' => null,
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
        'power_port' => true,
        'feed_leg' => false,
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
        'power_port' => 'power_port',
        'feed_leg' => 'feed_leg',
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
        'power_port' => 'setPowerPort',
        'feed_leg' => 'setFeedLeg',
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
        'power_port' => 'getPowerPort',
        'feed_leg' => 'getFeedLeg',
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

    public const TYPE_IEC_60320_C5 = 'iec-60320-c5';
    public const TYPE_IEC_60320_C7 = 'iec-60320-c7';
    public const TYPE_IEC_60320_C13 = 'iec-60320-c13';
    public const TYPE_IEC_60320_C15 = 'iec-60320-c15';
    public const TYPE_IEC_60320_C19 = 'iec-60320-c19';
    public const TYPE_IEC_60320_C21 = 'iec-60320-c21';
    public const TYPE_IEC_60309_P_N_E_4H = 'iec-60309-p-n-e-4h';
    public const TYPE_IEC_60309_P_N_E_6H = 'iec-60309-p-n-e-6h';
    public const TYPE_IEC_60309_P_N_E_9H = 'iec-60309-p-n-e-9h';
    public const TYPE_IEC_60309_2P_E_4H = 'iec-60309-2p-e-4h';
    public const TYPE_IEC_60309_2P_E_6H = 'iec-60309-2p-e-6h';
    public const TYPE_IEC_60309_2P_E_9H = 'iec-60309-2p-e-9h';
    public const TYPE_IEC_60309_3P_E_4H = 'iec-60309-3p-e-4h';
    public const TYPE_IEC_60309_3P_E_6H = 'iec-60309-3p-e-6h';
    public const TYPE_IEC_60309_3P_E_9H = 'iec-60309-3p-e-9h';
    public const TYPE_IEC_60309_3P_N_E_4H = 'iec-60309-3p-n-e-4h';
    public const TYPE_IEC_60309_3P_N_E_6H = 'iec-60309-3p-n-e-6h';
    public const TYPE_IEC_60309_3P_N_E_9H = 'iec-60309-3p-n-e-9h';
    public const TYPE_IEC_60906_1 = 'iec-60906-1';
    public const TYPE_NBR_14136_10A = 'nbr-14136-10a';
    public const TYPE_NBR_14136_20A = 'nbr-14136-20a';
    public const TYPE_NEMA_1_15R = 'nema-1-15r';
    public const TYPE_NEMA_5_15R = 'nema-5-15r';
    public const TYPE_NEMA_5_20R = 'nema-5-20r';
    public const TYPE_NEMA_5_30R = 'nema-5-30r';
    public const TYPE_NEMA_5_50R = 'nema-5-50r';
    public const TYPE_NEMA_6_15R = 'nema-6-15r';
    public const TYPE_NEMA_6_20R = 'nema-6-20r';
    public const TYPE_NEMA_6_30R = 'nema-6-30r';
    public const TYPE_NEMA_6_50R = 'nema-6-50r';
    public const TYPE_NEMA_10_30R = 'nema-10-30r';
    public const TYPE_NEMA_10_50R = 'nema-10-50r';
    public const TYPE_NEMA_14_20R = 'nema-14-20r';
    public const TYPE_NEMA_14_30R = 'nema-14-30r';
    public const TYPE_NEMA_14_50R = 'nema-14-50r';
    public const TYPE_NEMA_14_60R = 'nema-14-60r';
    public const TYPE_NEMA_15_15R = 'nema-15-15r';
    public const TYPE_NEMA_15_20R = 'nema-15-20r';
    public const TYPE_NEMA_15_30R = 'nema-15-30r';
    public const TYPE_NEMA_15_50R = 'nema-15-50r';
    public const TYPE_NEMA_15_60R = 'nema-15-60r';
    public const TYPE_NEMA_L1_15R = 'nema-l1-15r';
    public const TYPE_NEMA_L5_15R = 'nema-l5-15r';
    public const TYPE_NEMA_L5_20R = 'nema-l5-20r';
    public const TYPE_NEMA_L5_30R = 'nema-l5-30r';
    public const TYPE_NEMA_L5_50R = 'nema-l5-50r';
    public const TYPE_NEMA_L6_15R = 'nema-l6-15r';
    public const TYPE_NEMA_L6_20R = 'nema-l6-20r';
    public const TYPE_NEMA_L6_30R = 'nema-l6-30r';
    public const TYPE_NEMA_L6_50R = 'nema-l6-50r';
    public const TYPE_NEMA_L10_30R = 'nema-l10-30r';
    public const TYPE_NEMA_L14_20R = 'nema-l14-20r';
    public const TYPE_NEMA_L14_30R = 'nema-l14-30r';
    public const TYPE_NEMA_L14_50R = 'nema-l14-50r';
    public const TYPE_NEMA_L14_60R = 'nema-l14-60r';
    public const TYPE_NEMA_L15_20R = 'nema-l15-20r';
    public const TYPE_NEMA_L15_30R = 'nema-l15-30r';
    public const TYPE_NEMA_L15_50R = 'nema-l15-50r';
    public const TYPE_NEMA_L15_60R = 'nema-l15-60r';
    public const TYPE_NEMA_L21_20R = 'nema-l21-20r';
    public const TYPE_NEMA_L21_30R = 'nema-l21-30r';
    public const TYPE_NEMA_L22_30R = 'nema-l22-30r';
    public const TYPE_CS6360_C = 'CS6360C';
    public const TYPE_CS6364_C = 'CS6364C';
    public const TYPE_CS8164_C = 'CS8164C';
    public const TYPE_CS8264_C = 'CS8264C';
    public const TYPE_CS8364_C = 'CS8364C';
    public const TYPE_CS8464_C = 'CS8464C';
    public const TYPE_ITA_E = 'ita-e';
    public const TYPE_ITA_F = 'ita-f';
    public const TYPE_ITA_G = 'ita-g';
    public const TYPE_ITA_H = 'ita-h';
    public const TYPE_ITA_I = 'ita-i';
    public const TYPE_ITA_J = 'ita-j';
    public const TYPE_ITA_K = 'ita-k';
    public const TYPE_ITA_L = 'ita-l';
    public const TYPE_ITA_M = 'ita-m';
    public const TYPE_ITA_N = 'ita-n';
    public const TYPE_ITA_O = 'ita-o';
    public const TYPE_ITA_MULTISTANDARD = 'ita-multistandard';
    public const TYPE_USB_A = 'usb-a';
    public const TYPE_USB_MICRO_B = 'usb-micro-b';
    public const TYPE_USB_C = 'usb-c';
    public const TYPE_MOLEX_MICRO_FIT_1X2 = 'molex-micro-fit-1x2';
    public const TYPE_MOLEX_MICRO_FIT_2X2 = 'molex-micro-fit-2x2';
    public const TYPE_MOLEX_MICRO_FIT_2X4 = 'molex-micro-fit-2x4';
    public const TYPE_DC_TERMINAL = 'dc-terminal';
    public const TYPE_HDOT_CX = 'hdot-cx';
    public const TYPE_SAF_D_GRID = 'saf-d-grid';
    public const TYPE_NEUTRIK_POWERCON_20A = 'neutrik-powercon-20a';
    public const TYPE_NEUTRIK_POWERCON_32A = 'neutrik-powercon-32a';
    public const TYPE_NEUTRIK_POWERCON_TRUE1 = 'neutrik-powercon-true1';
    public const TYPE_NEUTRIK_POWERCON_TRUE1_TOP = 'neutrik-powercon-true1-top';
    public const TYPE_UBIQUITI_SMARTPOWER = 'ubiquiti-smartpower';
    public const TYPE_HARDWIRED = 'hardwired';
    public const TYPE_OTHER = 'other';
    public const TYPE_EMPTY = '';
    public const FEED_LEG_A = 'A';
    public const FEED_LEG_B = 'B';
    public const FEED_LEG_C = 'C';
    public const FEED_LEG_EMPTY = '';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_IEC_60320_C5,
            self::TYPE_IEC_60320_C7,
            self::TYPE_IEC_60320_C13,
            self::TYPE_IEC_60320_C15,
            self::TYPE_IEC_60320_C19,
            self::TYPE_IEC_60320_C21,
            self::TYPE_IEC_60309_P_N_E_4H,
            self::TYPE_IEC_60309_P_N_E_6H,
            self::TYPE_IEC_60309_P_N_E_9H,
            self::TYPE_IEC_60309_2P_E_4H,
            self::TYPE_IEC_60309_2P_E_6H,
            self::TYPE_IEC_60309_2P_E_9H,
            self::TYPE_IEC_60309_3P_E_4H,
            self::TYPE_IEC_60309_3P_E_6H,
            self::TYPE_IEC_60309_3P_E_9H,
            self::TYPE_IEC_60309_3P_N_E_4H,
            self::TYPE_IEC_60309_3P_N_E_6H,
            self::TYPE_IEC_60309_3P_N_E_9H,
            self::TYPE_IEC_60906_1,
            self::TYPE_NBR_14136_10A,
            self::TYPE_NBR_14136_20A,
            self::TYPE_NEMA_1_15R,
            self::TYPE_NEMA_5_15R,
            self::TYPE_NEMA_5_20R,
            self::TYPE_NEMA_5_30R,
            self::TYPE_NEMA_5_50R,
            self::TYPE_NEMA_6_15R,
            self::TYPE_NEMA_6_20R,
            self::TYPE_NEMA_6_30R,
            self::TYPE_NEMA_6_50R,
            self::TYPE_NEMA_10_30R,
            self::TYPE_NEMA_10_50R,
            self::TYPE_NEMA_14_20R,
            self::TYPE_NEMA_14_30R,
            self::TYPE_NEMA_14_50R,
            self::TYPE_NEMA_14_60R,
            self::TYPE_NEMA_15_15R,
            self::TYPE_NEMA_15_20R,
            self::TYPE_NEMA_15_30R,
            self::TYPE_NEMA_15_50R,
            self::TYPE_NEMA_15_60R,
            self::TYPE_NEMA_L1_15R,
            self::TYPE_NEMA_L5_15R,
            self::TYPE_NEMA_L5_20R,
            self::TYPE_NEMA_L5_30R,
            self::TYPE_NEMA_L5_50R,
            self::TYPE_NEMA_L6_15R,
            self::TYPE_NEMA_L6_20R,
            self::TYPE_NEMA_L6_30R,
            self::TYPE_NEMA_L6_50R,
            self::TYPE_NEMA_L10_30R,
            self::TYPE_NEMA_L14_20R,
            self::TYPE_NEMA_L14_30R,
            self::TYPE_NEMA_L14_50R,
            self::TYPE_NEMA_L14_60R,
            self::TYPE_NEMA_L15_20R,
            self::TYPE_NEMA_L15_30R,
            self::TYPE_NEMA_L15_50R,
            self::TYPE_NEMA_L15_60R,
            self::TYPE_NEMA_L21_20R,
            self::TYPE_NEMA_L21_30R,
            self::TYPE_NEMA_L22_30R,
            self::TYPE_CS6360_C,
            self::TYPE_CS6364_C,
            self::TYPE_CS8164_C,
            self::TYPE_CS8264_C,
            self::TYPE_CS8364_C,
            self::TYPE_CS8464_C,
            self::TYPE_ITA_E,
            self::TYPE_ITA_F,
            self::TYPE_ITA_G,
            self::TYPE_ITA_H,
            self::TYPE_ITA_I,
            self::TYPE_ITA_J,
            self::TYPE_ITA_K,
            self::TYPE_ITA_L,
            self::TYPE_ITA_M,
            self::TYPE_ITA_N,
            self::TYPE_ITA_O,
            self::TYPE_ITA_MULTISTANDARD,
            self::TYPE_USB_A,
            self::TYPE_USB_MICRO_B,
            self::TYPE_USB_C,
            self::TYPE_MOLEX_MICRO_FIT_1X2,
            self::TYPE_MOLEX_MICRO_FIT_2X2,
            self::TYPE_MOLEX_MICRO_FIT_2X4,
            self::TYPE_DC_TERMINAL,
            self::TYPE_HDOT_CX,
            self::TYPE_SAF_D_GRID,
            self::TYPE_NEUTRIK_POWERCON_20A,
            self::TYPE_NEUTRIK_POWERCON_32A,
            self::TYPE_NEUTRIK_POWERCON_TRUE1,
            self::TYPE_NEUTRIK_POWERCON_TRUE1_TOP,
            self::TYPE_UBIQUITI_SMARTPOWER,
            self::TYPE_HARDWIRED,
            self::TYPE_OTHER,
            self::TYPE_EMPTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeedLegAllowableValues()
    {
        return [
            self::FEED_LEG_A,
            self::FEED_LEG_B,
            self::FEED_LEG_C,
            self::FEED_LEG_EMPTY,
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
        $this->setIfExists('power_port', $data ?? [], null);
        $this->setIfExists('feed_leg', $data ?? [], null);
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

        if ($this->container['device'] === null) {
            $invalidProperties[] = "'device' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
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

        $allowedValues = $this->getFeedLegAllowableValues();
        if (!is_null($this->container['feed_leg']) && !in_array($this->container['feed_leg'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'feed_leg', must be one of '%s'",
                $this->container['feed_leg'],
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
     * Gets device
     *
     * @return \OpenAPI\Client\Model\DeviceRequest
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \OpenAPI\Client\Model\DeviceRequest $device device
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
     * @return \OpenAPI\Client\Model\ModuleRequest|null
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param \OpenAPI\Client\Model\ModuleRequest|null $module module
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
        if ((mb_strlen($name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WritablePowerOutletRequest., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WritablePowerOutletRequest., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $label when calling WritablePowerOutletRequest., must be smaller than or equal to 64.');
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
     * @param string|null $type Physical port type  * `iec-60320-c5` - C5 * `iec-60320-c7` - C7 * `iec-60320-c13` - C13 * `iec-60320-c15` - C15 * `iec-60320-c19` - C19 * `iec-60320-c21` - C21 * `iec-60309-p-n-e-4h` - P+N+E 4H * `iec-60309-p-n-e-6h` - P+N+E 6H * `iec-60309-p-n-e-9h` - P+N+E 9H * `iec-60309-2p-e-4h` - 2P+E 4H * `iec-60309-2p-e-6h` - 2P+E 6H * `iec-60309-2p-e-9h` - 2P+E 9H * `iec-60309-3p-e-4h` - 3P+E 4H * `iec-60309-3p-e-6h` - 3P+E 6H * `iec-60309-3p-e-9h` - 3P+E 9H * `iec-60309-3p-n-e-4h` - 3P+N+E 4H * `iec-60309-3p-n-e-6h` - 3P+N+E 6H * `iec-60309-3p-n-e-9h` - 3P+N+E 9H * `iec-60906-1` - IEC 60906-1 * `nbr-14136-10a` - 2P+T 10A (NBR 14136) * `nbr-14136-20a` - 2P+T 20A (NBR 14136) * `nema-1-15r` - NEMA 1-15R * `nema-5-15r` - NEMA 5-15R * `nema-5-20r` - NEMA 5-20R * `nema-5-30r` - NEMA 5-30R * `nema-5-50r` - NEMA 5-50R * `nema-6-15r` - NEMA 6-15R * `nema-6-20r` - NEMA 6-20R * `nema-6-30r` - NEMA 6-30R * `nema-6-50r` - NEMA 6-50R * `nema-10-30r` - NEMA 10-30R * `nema-10-50r` - NEMA 10-50R * `nema-14-20r` - NEMA 14-20R * `nema-14-30r` - NEMA 14-30R * `nema-14-50r` - NEMA 14-50R * `nema-14-60r` - NEMA 14-60R * `nema-15-15r` - NEMA 15-15R * `nema-15-20r` - NEMA 15-20R * `nema-15-30r` - NEMA 15-30R * `nema-15-50r` - NEMA 15-50R * `nema-15-60r` - NEMA 15-60R * `nema-l1-15r` - NEMA L1-15R * `nema-l5-15r` - NEMA L5-15R * `nema-l5-20r` - NEMA L5-20R * `nema-l5-30r` - NEMA L5-30R * `nema-l5-50r` - NEMA L5-50R * `nema-l6-15r` - NEMA L6-15R * `nema-l6-20r` - NEMA L6-20R * `nema-l6-30r` - NEMA L6-30R * `nema-l6-50r` - NEMA L6-50R * `nema-l10-30r` - NEMA L10-30R * `nema-l14-20r` - NEMA L14-20R * `nema-l14-30r` - NEMA L14-30R * `nema-l14-50r` - NEMA L14-50R * `nema-l14-60r` - NEMA L14-60R * `nema-l15-20r` - NEMA L15-20R * `nema-l15-30r` - NEMA L15-30R * `nema-l15-50r` - NEMA L15-50R * `nema-l15-60r` - NEMA L15-60R * `nema-l21-20r` - NEMA L21-20R * `nema-l21-30r` - NEMA L21-30R * `nema-l22-30r` - NEMA L22-30R * `CS6360C` - CS6360C * `CS6364C` - CS6364C * `CS8164C` - CS8164C * `CS8264C` - CS8264C * `CS8364C` - CS8364C * `CS8464C` - CS8464C * `ita-e` - ITA Type E (CEE 7/5) * `ita-f` - ITA Type F (CEE 7/3) * `ita-g` - ITA Type G (BS 1363) * `ita-h` - ITA Type H * `ita-i` - ITA Type I * `ita-j` - ITA Type J * `ita-k` - ITA Type K * `ita-l` - ITA Type L (CEI 23-50) * `ita-m` - ITA Type M (BS 546) * `ita-n` - ITA Type N * `ita-o` - ITA Type O * `ita-multistandard` - ITA Multistandard * `usb-a` - USB Type A * `usb-micro-b` - USB Micro B * `usb-c` - USB Type C * `molex-micro-fit-1x2` - Molex Micro-Fit 1x2 * `molex-micro-fit-2x2` - Molex Micro-Fit 2x2 * `molex-micro-fit-2x4` - Molex Micro-Fit 2x4 * `dc-terminal` - DC Terminal * `hdot-cx` - HDOT Cx * `saf-d-grid` - Saf-D-Grid * `neutrik-powercon-20a` - Neutrik powerCON (20A) * `neutrik-powercon-32a` - Neutrik powerCON (32A) * `neutrik-powercon-true1` - Neutrik powerCON TRUE1 * `neutrik-powercon-true1-top` - Neutrik powerCON TRUE1 TOP * `ubiquiti-smartpower` - Ubiquiti SmartPower * `hardwired` - Hardwired * `other` - Other
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
     * Gets power_port
     *
     * @return \OpenAPI\Client\Model\PowerPortRequest|null
     */
    public function getPowerPort()
    {
        return $this->container['power_port'];
    }

    /**
     * Sets power_port
     *
     * @param \OpenAPI\Client\Model\PowerPortRequest|null $power_port power_port
     *
     * @return self
     */
    public function setPowerPort($power_port)
    {
        if (is_null($power_port)) {
            array_push($this->openAPINullablesSetToNull, 'power_port');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('power_port', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['power_port'] = $power_port;

        return $this;
    }

    /**
     * Gets feed_leg
     *
     * @return string|null
     */
    public function getFeedLeg()
    {
        return $this->container['feed_leg'];
    }

    /**
     * Sets feed_leg
     *
     * @param string|null $feed_leg Phase (for three-phase feeds)  * `A` - A * `B` - B * `C` - C
     *
     * @return self
     */
    public function setFeedLeg($feed_leg)
    {
        if (is_null($feed_leg)) {
            throw new \InvalidArgumentException('non-nullable feed_leg cannot be null');
        }
        $allowedValues = $this->getFeedLegAllowableValues();
        if (!in_array($feed_leg, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'feed_leg', must be one of '%s'",
                    $feed_leg,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['feed_leg'] = $feed_leg;

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
            throw new \InvalidArgumentException('invalid length for $description when calling WritablePowerOutletRequest., must be smaller than or equal to 200.');
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


