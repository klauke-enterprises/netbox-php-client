<?php
/**
 * WritablePowerPortRequest
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
 * WritablePowerPortRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WritablePowerPortRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WritablePowerPortRequest';

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
        'maximum_draw' => 'int',
        'allocated_draw' => 'int',
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
        'maximum_draw' => null,
        'allocated_draw' => null,
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
        'maximum_draw' => true,
        'allocated_draw' => true,
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
        'maximum_draw' => 'maximum_draw',
        'allocated_draw' => 'allocated_draw',
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
        'maximum_draw' => 'setMaximumDraw',
        'allocated_draw' => 'setAllocatedDraw',
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
        'maximum_draw' => 'getMaximumDraw',
        'allocated_draw' => 'getAllocatedDraw',
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

    public const TYPE_IEC_60320_C6 = 'iec-60320-c6';
    public const TYPE_IEC_60320_C8 = 'iec-60320-c8';
    public const TYPE_IEC_60320_C14 = 'iec-60320-c14';
    public const TYPE_IEC_60320_C16 = 'iec-60320-c16';
    public const TYPE_IEC_60320_C20 = 'iec-60320-c20';
    public const TYPE_IEC_60320_C22 = 'iec-60320-c22';
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
    public const TYPE_NEMA_1_15P = 'nema-1-15p';
    public const TYPE_NEMA_5_15P = 'nema-5-15p';
    public const TYPE_NEMA_5_20P = 'nema-5-20p';
    public const TYPE_NEMA_5_30P = 'nema-5-30p';
    public const TYPE_NEMA_5_50P = 'nema-5-50p';
    public const TYPE_NEMA_6_15P = 'nema-6-15p';
    public const TYPE_NEMA_6_20P = 'nema-6-20p';
    public const TYPE_NEMA_6_30P = 'nema-6-30p';
    public const TYPE_NEMA_6_50P = 'nema-6-50p';
    public const TYPE_NEMA_10_30P = 'nema-10-30p';
    public const TYPE_NEMA_10_50P = 'nema-10-50p';
    public const TYPE_NEMA_14_20P = 'nema-14-20p';
    public const TYPE_NEMA_14_30P = 'nema-14-30p';
    public const TYPE_NEMA_14_50P = 'nema-14-50p';
    public const TYPE_NEMA_14_60P = 'nema-14-60p';
    public const TYPE_NEMA_15_15P = 'nema-15-15p';
    public const TYPE_NEMA_15_20P = 'nema-15-20p';
    public const TYPE_NEMA_15_30P = 'nema-15-30p';
    public const TYPE_NEMA_15_50P = 'nema-15-50p';
    public const TYPE_NEMA_15_60P = 'nema-15-60p';
    public const TYPE_NEMA_L1_15P = 'nema-l1-15p';
    public const TYPE_NEMA_L5_15P = 'nema-l5-15p';
    public const TYPE_NEMA_L5_20P = 'nema-l5-20p';
    public const TYPE_NEMA_L5_30P = 'nema-l5-30p';
    public const TYPE_NEMA_L5_50P = 'nema-l5-50p';
    public const TYPE_NEMA_L6_15P = 'nema-l6-15p';
    public const TYPE_NEMA_L6_20P = 'nema-l6-20p';
    public const TYPE_NEMA_L6_30P = 'nema-l6-30p';
    public const TYPE_NEMA_L6_50P = 'nema-l6-50p';
    public const TYPE_NEMA_L10_30P = 'nema-l10-30p';
    public const TYPE_NEMA_L14_20P = 'nema-l14-20p';
    public const TYPE_NEMA_L14_30P = 'nema-l14-30p';
    public const TYPE_NEMA_L14_50P = 'nema-l14-50p';
    public const TYPE_NEMA_L14_60P = 'nema-l14-60p';
    public const TYPE_NEMA_L15_20P = 'nema-l15-20p';
    public const TYPE_NEMA_L15_30P = 'nema-l15-30p';
    public const TYPE_NEMA_L15_50P = 'nema-l15-50p';
    public const TYPE_NEMA_L15_60P = 'nema-l15-60p';
    public const TYPE_NEMA_L21_20P = 'nema-l21-20p';
    public const TYPE_NEMA_L21_30P = 'nema-l21-30p';
    public const TYPE_NEMA_L22_20P = 'nema-l22-20p';
    public const TYPE_NEMA_L22_30P = 'nema-l22-30p';
    public const TYPE_CS6361C = 'cs6361c';
    public const TYPE_CS6365C = 'cs6365c';
    public const TYPE_CS8165C = 'cs8165c';
    public const TYPE_CS8265C = 'cs8265c';
    public const TYPE_CS8365C = 'cs8365c';
    public const TYPE_CS8465C = 'cs8465c';
    public const TYPE_ITA_C = 'ita-c';
    public const TYPE_ITA_E = 'ita-e';
    public const TYPE_ITA_F = 'ita-f';
    public const TYPE_ITA_EF = 'ita-ef';
    public const TYPE_ITA_G = 'ita-g';
    public const TYPE_ITA_H = 'ita-h';
    public const TYPE_ITA_I = 'ita-i';
    public const TYPE_ITA_J = 'ita-j';
    public const TYPE_ITA_K = 'ita-k';
    public const TYPE_ITA_L = 'ita-l';
    public const TYPE_ITA_M = 'ita-m';
    public const TYPE_ITA_N = 'ita-n';
    public const TYPE_ITA_O = 'ita-o';
    public const TYPE_USB_A = 'usb-a';
    public const TYPE_USB_B = 'usb-b';
    public const TYPE_USB_C = 'usb-c';
    public const TYPE_USB_MINI_A = 'usb-mini-a';
    public const TYPE_USB_MINI_B = 'usb-mini-b';
    public const TYPE_USB_MICRO_A = 'usb-micro-a';
    public const TYPE_USB_MICRO_B = 'usb-micro-b';
    public const TYPE_USB_MICRO_AB = 'usb-micro-ab';
    public const TYPE_USB_3_B = 'usb-3-b';
    public const TYPE_USB_3_MICRO_B = 'usb-3-micro-b';
    public const TYPE_MOLEX_MICRO_FIT_1X2 = 'molex-micro-fit-1x2';
    public const TYPE_MOLEX_MICRO_FIT_2X2 = 'molex-micro-fit-2x2';
    public const TYPE_MOLEX_MICRO_FIT_2X4 = 'molex-micro-fit-2x4';
    public const TYPE_DC_TERMINAL = 'dc-terminal';
    public const TYPE_SAF_D_GRID = 'saf-d-grid';
    public const TYPE_NEUTRIK_POWERCON_20 = 'neutrik-powercon-20';
    public const TYPE_NEUTRIK_POWERCON_32 = 'neutrik-powercon-32';
    public const TYPE_NEUTRIK_POWERCON_TRUE1 = 'neutrik-powercon-true1';
    public const TYPE_NEUTRIK_POWERCON_TRUE1_TOP = 'neutrik-powercon-true1-top';
    public const TYPE_UBIQUITI_SMARTPOWER = 'ubiquiti-smartpower';
    public const TYPE_HARDWIRED = 'hardwired';
    public const TYPE_OTHER = 'other';
    public const TYPE_EMPTY = '';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_IEC_60320_C6,
            self::TYPE_IEC_60320_C8,
            self::TYPE_IEC_60320_C14,
            self::TYPE_IEC_60320_C16,
            self::TYPE_IEC_60320_C20,
            self::TYPE_IEC_60320_C22,
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
            self::TYPE_NEMA_1_15P,
            self::TYPE_NEMA_5_15P,
            self::TYPE_NEMA_5_20P,
            self::TYPE_NEMA_5_30P,
            self::TYPE_NEMA_5_50P,
            self::TYPE_NEMA_6_15P,
            self::TYPE_NEMA_6_20P,
            self::TYPE_NEMA_6_30P,
            self::TYPE_NEMA_6_50P,
            self::TYPE_NEMA_10_30P,
            self::TYPE_NEMA_10_50P,
            self::TYPE_NEMA_14_20P,
            self::TYPE_NEMA_14_30P,
            self::TYPE_NEMA_14_50P,
            self::TYPE_NEMA_14_60P,
            self::TYPE_NEMA_15_15P,
            self::TYPE_NEMA_15_20P,
            self::TYPE_NEMA_15_30P,
            self::TYPE_NEMA_15_50P,
            self::TYPE_NEMA_15_60P,
            self::TYPE_NEMA_L1_15P,
            self::TYPE_NEMA_L5_15P,
            self::TYPE_NEMA_L5_20P,
            self::TYPE_NEMA_L5_30P,
            self::TYPE_NEMA_L5_50P,
            self::TYPE_NEMA_L6_15P,
            self::TYPE_NEMA_L6_20P,
            self::TYPE_NEMA_L6_30P,
            self::TYPE_NEMA_L6_50P,
            self::TYPE_NEMA_L10_30P,
            self::TYPE_NEMA_L14_20P,
            self::TYPE_NEMA_L14_30P,
            self::TYPE_NEMA_L14_50P,
            self::TYPE_NEMA_L14_60P,
            self::TYPE_NEMA_L15_20P,
            self::TYPE_NEMA_L15_30P,
            self::TYPE_NEMA_L15_50P,
            self::TYPE_NEMA_L15_60P,
            self::TYPE_NEMA_L21_20P,
            self::TYPE_NEMA_L21_30P,
            self::TYPE_NEMA_L22_20P,
            self::TYPE_NEMA_L22_30P,
            self::TYPE_CS6361C,
            self::TYPE_CS6365C,
            self::TYPE_CS8165C,
            self::TYPE_CS8265C,
            self::TYPE_CS8365C,
            self::TYPE_CS8465C,
            self::TYPE_ITA_C,
            self::TYPE_ITA_E,
            self::TYPE_ITA_F,
            self::TYPE_ITA_EF,
            self::TYPE_ITA_G,
            self::TYPE_ITA_H,
            self::TYPE_ITA_I,
            self::TYPE_ITA_J,
            self::TYPE_ITA_K,
            self::TYPE_ITA_L,
            self::TYPE_ITA_M,
            self::TYPE_ITA_N,
            self::TYPE_ITA_O,
            self::TYPE_USB_A,
            self::TYPE_USB_B,
            self::TYPE_USB_C,
            self::TYPE_USB_MINI_A,
            self::TYPE_USB_MINI_B,
            self::TYPE_USB_MICRO_A,
            self::TYPE_USB_MICRO_B,
            self::TYPE_USB_MICRO_AB,
            self::TYPE_USB_3_B,
            self::TYPE_USB_3_MICRO_B,
            self::TYPE_MOLEX_MICRO_FIT_1X2,
            self::TYPE_MOLEX_MICRO_FIT_2X2,
            self::TYPE_MOLEX_MICRO_FIT_2X4,
            self::TYPE_DC_TERMINAL,
            self::TYPE_SAF_D_GRID,
            self::TYPE_NEUTRIK_POWERCON_20,
            self::TYPE_NEUTRIK_POWERCON_32,
            self::TYPE_NEUTRIK_POWERCON_TRUE1,
            self::TYPE_NEUTRIK_POWERCON_TRUE1_TOP,
            self::TYPE_UBIQUITI_SMARTPOWER,
            self::TYPE_HARDWIRED,
            self::TYPE_OTHER,
            self::TYPE_EMPTY,
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
        $this->setIfExists('maximum_draw', $data ?? [], null);
        $this->setIfExists('allocated_draw', $data ?? [], null);
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

        if (!is_null($this->container['maximum_draw']) && ($this->container['maximum_draw'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'maximum_draw', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['maximum_draw']) && ($this->container['maximum_draw'] < 1)) {
            $invalidProperties[] = "invalid value for 'maximum_draw', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['allocated_draw']) && ($this->container['allocated_draw'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'allocated_draw', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['allocated_draw']) && ($this->container['allocated_draw'] < 1)) {
            $invalidProperties[] = "invalid value for 'allocated_draw', must be bigger than or equal to 1.";
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
     * @return \OpenAPI\Client\Model\BriefDeviceRequest
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \OpenAPI\Client\Model\BriefDeviceRequest $device device
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
            throw new \InvalidArgumentException('invalid length for $name when calling WritablePowerPortRequest., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WritablePowerPortRequest., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $label when calling WritablePowerPortRequest., must be smaller than or equal to 64.');
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
     * @param string|null $type Physical port type  * `iec-60320-c6` - C6 * `iec-60320-c8` - C8 * `iec-60320-c14` - C14 * `iec-60320-c16` - C16 * `iec-60320-c20` - C20 * `iec-60320-c22` - C22 * `iec-60309-p-n-e-4h` - P+N+E 4H * `iec-60309-p-n-e-6h` - P+N+E 6H * `iec-60309-p-n-e-9h` - P+N+E 9H * `iec-60309-2p-e-4h` - 2P+E 4H * `iec-60309-2p-e-6h` - 2P+E 6H * `iec-60309-2p-e-9h` - 2P+E 9H * `iec-60309-3p-e-4h` - 3P+E 4H * `iec-60309-3p-e-6h` - 3P+E 6H * `iec-60309-3p-e-9h` - 3P+E 9H * `iec-60309-3p-n-e-4h` - 3P+N+E 4H * `iec-60309-3p-n-e-6h` - 3P+N+E 6H * `iec-60309-3p-n-e-9h` - 3P+N+E 9H * `iec-60906-1` - IEC 60906-1 * `nbr-14136-10a` - 2P+T 10A (NBR 14136) * `nbr-14136-20a` - 2P+T 20A (NBR 14136) * `nema-1-15p` - NEMA 1-15P * `nema-5-15p` - NEMA 5-15P * `nema-5-20p` - NEMA 5-20P * `nema-5-30p` - NEMA 5-30P * `nema-5-50p` - NEMA 5-50P * `nema-6-15p` - NEMA 6-15P * `nema-6-20p` - NEMA 6-20P * `nema-6-30p` - NEMA 6-30P * `nema-6-50p` - NEMA 6-50P * `nema-10-30p` - NEMA 10-30P * `nema-10-50p` - NEMA 10-50P * `nema-14-20p` - NEMA 14-20P * `nema-14-30p` - NEMA 14-30P * `nema-14-50p` - NEMA 14-50P * `nema-14-60p` - NEMA 14-60P * `nema-15-15p` - NEMA 15-15P * `nema-15-20p` - NEMA 15-20P * `nema-15-30p` - NEMA 15-30P * `nema-15-50p` - NEMA 15-50P * `nema-15-60p` - NEMA 15-60P * `nema-l1-15p` - NEMA L1-15P * `nema-l5-15p` - NEMA L5-15P * `nema-l5-20p` - NEMA L5-20P * `nema-l5-30p` - NEMA L5-30P * `nema-l5-50p` - NEMA L5-50P * `nema-l6-15p` - NEMA L6-15P * `nema-l6-20p` - NEMA L6-20P * `nema-l6-30p` - NEMA L6-30P * `nema-l6-50p` - NEMA L6-50P * `nema-l10-30p` - NEMA L10-30P * `nema-l14-20p` - NEMA L14-20P * `nema-l14-30p` - NEMA L14-30P * `nema-l14-50p` - NEMA L14-50P * `nema-l14-60p` - NEMA L14-60P * `nema-l15-20p` - NEMA L15-20P * `nema-l15-30p` - NEMA L15-30P * `nema-l15-50p` - NEMA L15-50P * `nema-l15-60p` - NEMA L15-60P * `nema-l21-20p` - NEMA L21-20P * `nema-l21-30p` - NEMA L21-30P * `nema-l22-20p` - NEMA L22-20P * `nema-l22-30p` - NEMA L22-30P * `cs6361c` - CS6361C * `cs6365c` - CS6365C * `cs8165c` - CS8165C * `cs8265c` - CS8265C * `cs8365c` - CS8365C * `cs8465c` - CS8465C * `ita-c` - ITA Type C (CEE 7/16) * `ita-e` - ITA Type E (CEE 7/6) * `ita-f` - ITA Type F (CEE 7/4) * `ita-ef` - ITA Type E/F (CEE 7/7) * `ita-g` - ITA Type G (BS 1363) * `ita-h` - ITA Type H * `ita-i` - ITA Type I * `ita-j` - ITA Type J * `ita-k` - ITA Type K * `ita-l` - ITA Type L (CEI 23-50) * `ita-m` - ITA Type M (BS 546) * `ita-n` - ITA Type N * `ita-o` - ITA Type O * `usb-a` - USB Type A * `usb-b` - USB Type B * `usb-c` - USB Type C * `usb-mini-a` - USB Mini A * `usb-mini-b` - USB Mini B * `usb-micro-a` - USB Micro A * `usb-micro-b` - USB Micro B * `usb-micro-ab` - USB Micro AB * `usb-3-b` - USB 3.0 Type B * `usb-3-micro-b` - USB 3.0 Micro B * `molex-micro-fit-1x2` - Molex Micro-Fit 1x2 * `molex-micro-fit-2x2` - Molex Micro-Fit 2x2 * `molex-micro-fit-2x4` - Molex Micro-Fit 2x4 * `dc-terminal` - DC Terminal * `saf-d-grid` - Saf-D-Grid * `neutrik-powercon-20` - Neutrik powerCON (20A) * `neutrik-powercon-32` - Neutrik powerCON (32A) * `neutrik-powercon-true1` - Neutrik powerCON TRUE1 * `neutrik-powercon-true1-top` - Neutrik powerCON TRUE1 TOP * `ubiquiti-smartpower` - Ubiquiti SmartPower * `hardwired` - Hardwired * `other` - Other
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
     * Gets maximum_draw
     *
     * @return int|null
     */
    public function getMaximumDraw()
    {
        return $this->container['maximum_draw'];
    }

    /**
     * Sets maximum_draw
     *
     * @param int|null $maximum_draw Maximum power draw (watts)
     *
     * @return self
     */
    public function setMaximumDraw($maximum_draw)
    {
        if (is_null($maximum_draw)) {
            array_push($this->openAPINullablesSetToNull, 'maximum_draw');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('maximum_draw', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($maximum_draw) && ($maximum_draw > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $maximum_draw when calling WritablePowerPortRequest., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($maximum_draw) && ($maximum_draw < 1)) {
            throw new \InvalidArgumentException('invalid value for $maximum_draw when calling WritablePowerPortRequest., must be bigger than or equal to 1.');
        }

        $this->container['maximum_draw'] = $maximum_draw;

        return $this;
    }

    /**
     * Gets allocated_draw
     *
     * @return int|null
     */
    public function getAllocatedDraw()
    {
        return $this->container['allocated_draw'];
    }

    /**
     * Sets allocated_draw
     *
     * @param int|null $allocated_draw Allocated power draw (watts)
     *
     * @return self
     */
    public function setAllocatedDraw($allocated_draw)
    {
        if (is_null($allocated_draw)) {
            array_push($this->openAPINullablesSetToNull, 'allocated_draw');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allocated_draw', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($allocated_draw) && ($allocated_draw > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $allocated_draw when calling WritablePowerPortRequest., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($allocated_draw) && ($allocated_draw < 1)) {
            throw new \InvalidArgumentException('invalid value for $allocated_draw when calling WritablePowerPortRequest., must be bigger than or equal to 1.');
        }

        $this->container['allocated_draw'] = $allocated_draw;

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
            throw new \InvalidArgumentException('invalid length for $description when calling WritablePowerPortRequest., must be smaller than or equal to 200.');
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


