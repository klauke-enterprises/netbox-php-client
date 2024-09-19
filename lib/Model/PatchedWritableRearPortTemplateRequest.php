<?php
/**
 * PatchedWritableRearPortTemplateRequest
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
 * PatchedWritableRearPortTemplateRequest Class Doc Comment
 *
 * @category Class
 * @description Extends the built-in ModelSerializer to enforce calling full_clean() on a copy of the associated instance during validation. (DRF does not do this by default; see https://github.com/encode/django-rest-framework/issues/3144)
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PatchedWritableRearPortTemplateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PatchedWritableRearPortTemplateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'device_type' => '\OpenAPI\Client\Model\BriefDeviceTypeRequest',
        'module_type' => '\OpenAPI\Client\Model\BriefModuleTypeRequest',
        'name' => 'string',
        'label' => 'string',
        'type' => 'string',
        'color' => 'string',
        'positions' => 'int',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'device_type' => null,
        'module_type' => null,
        'name' => null,
        'label' => null,
        'type' => null,
        'color' => null,
        'positions' => null,
        'description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'device_type' => true,
        'module_type' => true,
        'name' => false,
        'label' => false,
        'type' => false,
        'color' => false,
        'positions' => false,
        'description' => false
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
        'device_type' => 'device_type',
        'module_type' => 'module_type',
        'name' => 'name',
        'label' => 'label',
        'type' => 'type',
        'color' => 'color',
        'positions' => 'positions',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'device_type' => 'setDeviceType',
        'module_type' => 'setModuleType',
        'name' => 'setName',
        'label' => 'setLabel',
        'type' => 'setType',
        'color' => 'setColor',
        'positions' => 'setPositions',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'device_type' => 'getDeviceType',
        'module_type' => 'getModuleType',
        'name' => 'getName',
        'label' => 'getLabel',
        'type' => 'getType',
        'color' => 'getColor',
        'positions' => 'getPositions',
        'description' => 'getDescription'
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

    public const TYPE__8P8C = '8p8c';
    public const TYPE__8P6C = '8p6c';
    public const TYPE__8P4C = '8p4c';
    public const TYPE__8P2C = '8p2c';
    public const TYPE__6P6C = '6p6c';
    public const TYPE__6P4C = '6p4c';
    public const TYPE__6P2C = '6p2c';
    public const TYPE__4P4C = '4p4c';
    public const TYPE__4P2C = '4p2c';
    public const TYPE_GG45 = 'gg45';
    public const TYPE_TERA_4P = 'tera-4p';
    public const TYPE_TERA_2P = 'tera-2p';
    public const TYPE_TERA_1P = 'tera-1p';
    public const TYPE__110_PUNCH = '110-punch';
    public const TYPE_BNC = 'bnc';
    public const TYPE_F = 'f';
    public const TYPE_N = 'n';
    public const TYPE_MRJ21 = 'mrj21';
    public const TYPE_FC = 'fc';
    public const TYPE_LC = 'lc';
    public const TYPE_LC_PC = 'lc-pc';
    public const TYPE_LC_UPC = 'lc-upc';
    public const TYPE_LC_APC = 'lc-apc';
    public const TYPE_LSH = 'lsh';
    public const TYPE_LSH_PC = 'lsh-pc';
    public const TYPE_LSH_UPC = 'lsh-upc';
    public const TYPE_LSH_APC = 'lsh-apc';
    public const TYPE_LX5 = 'lx5';
    public const TYPE_LX5_PC = 'lx5-pc';
    public const TYPE_LX5_UPC = 'lx5-upc';
    public const TYPE_LX5_APC = 'lx5-apc';
    public const TYPE_MPO = 'mpo';
    public const TYPE_MTRJ = 'mtrj';
    public const TYPE_SC = 'sc';
    public const TYPE_SC_PC = 'sc-pc';
    public const TYPE_SC_UPC = 'sc-upc';
    public const TYPE_SC_APC = 'sc-apc';
    public const TYPE_ST = 'st';
    public const TYPE_CS = 'cs';
    public const TYPE_SN = 'sn';
    public const TYPE_SMA_905 = 'sma-905';
    public const TYPE_SMA_906 = 'sma-906';
    public const TYPE_URM_P2 = 'urm-p2';
    public const TYPE_URM_P4 = 'urm-p4';
    public const TYPE_URM_P8 = 'urm-p8';
    public const TYPE_SPLICE = 'splice';
    public const TYPE_USB_A = 'usb-a';
    public const TYPE_USB_B = 'usb-b';
    public const TYPE_USB_C = 'usb-c';
    public const TYPE_USB_MINI_A = 'usb-mini-a';
    public const TYPE_USB_MINI_B = 'usb-mini-b';
    public const TYPE_USB_MICRO_A = 'usb-micro-a';
    public const TYPE_USB_MICRO_B = 'usb-micro-b';
    public const TYPE_USB_MICRO_AB = 'usb-micro-ab';
    public const TYPE_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__8P8C,
            self::TYPE__8P6C,
            self::TYPE__8P4C,
            self::TYPE__8P2C,
            self::TYPE__6P6C,
            self::TYPE__6P4C,
            self::TYPE__6P2C,
            self::TYPE__4P4C,
            self::TYPE__4P2C,
            self::TYPE_GG45,
            self::TYPE_TERA_4P,
            self::TYPE_TERA_2P,
            self::TYPE_TERA_1P,
            self::TYPE__110_PUNCH,
            self::TYPE_BNC,
            self::TYPE_F,
            self::TYPE_N,
            self::TYPE_MRJ21,
            self::TYPE_FC,
            self::TYPE_LC,
            self::TYPE_LC_PC,
            self::TYPE_LC_UPC,
            self::TYPE_LC_APC,
            self::TYPE_LSH,
            self::TYPE_LSH_PC,
            self::TYPE_LSH_UPC,
            self::TYPE_LSH_APC,
            self::TYPE_LX5,
            self::TYPE_LX5_PC,
            self::TYPE_LX5_UPC,
            self::TYPE_LX5_APC,
            self::TYPE_MPO,
            self::TYPE_MTRJ,
            self::TYPE_SC,
            self::TYPE_SC_PC,
            self::TYPE_SC_UPC,
            self::TYPE_SC_APC,
            self::TYPE_ST,
            self::TYPE_CS,
            self::TYPE_SN,
            self::TYPE_SMA_905,
            self::TYPE_SMA_906,
            self::TYPE_URM_P2,
            self::TYPE_URM_P4,
            self::TYPE_URM_P8,
            self::TYPE_SPLICE,
            self::TYPE_USB_A,
            self::TYPE_USB_B,
            self::TYPE_USB_C,
            self::TYPE_USB_MINI_A,
            self::TYPE_USB_MINI_B,
            self::TYPE_USB_MICRO_A,
            self::TYPE_USB_MICRO_B,
            self::TYPE_USB_MICRO_AB,
            self::TYPE_OTHER,
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
        $this->setIfExists('device_type', $data ?? [], null);
        $this->setIfExists('module_type', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('positions', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
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

        if (!is_null($this->container['color']) && (mb_strlen($this->container['color']) > 6)) {
            $invalidProperties[] = "invalid value for 'color', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['color']) && !preg_match("/^[0-9a-f]{6}$/", $this->container['color'])) {
            $invalidProperties[] = "invalid value for 'color', must be conform to the pattern /^[0-9a-f]{6}$/.";
        }

        if (!is_null($this->container['positions']) && ($this->container['positions'] > 1024)) {
            $invalidProperties[] = "invalid value for 'positions', must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['positions']) && ($this->container['positions'] < 1)) {
            $invalidProperties[] = "invalid value for 'positions', must be bigger than or equal to 1.";
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
     * Gets device_type
     *
     * @return \OpenAPI\Client\Model\BriefDeviceTypeRequest|null
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     *
     * @param \OpenAPI\Client\Model\BriefDeviceTypeRequest|null $device_type device_type
     *
     * @return self
     */
    public function setDeviceType($device_type)
    {
        if (is_null($device_type)) {
            array_push($this->openAPINullablesSetToNull, 'device_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('device_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['device_type'] = $device_type;

        return $this;
    }

    /**
     * Gets module_type
     *
     * @return \OpenAPI\Client\Model\BriefModuleTypeRequest|null
     */
    public function getModuleType()
    {
        return $this->container['module_type'];
    }

    /**
     * Sets module_type
     *
     * @param \OpenAPI\Client\Model\BriefModuleTypeRequest|null $module_type module_type
     *
     * @return self
     */
    public function setModuleType($module_type)
    {
        if (is_null($module_type)) {
            array_push($this->openAPINullablesSetToNull, 'module_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('module_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['module_type'] = $module_type;

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
     * @param string|null $name {module} is accepted as a substitution for the module bay position when attached to a module type.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PatchedWritableRearPortTemplateRequest., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PatchedWritableRearPortTemplateRequest., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $label when calling PatchedWritableRearPortTemplateRequest., must be smaller than or equal to 64.');
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
     * @param string|null $type * `8p8c` - 8P8C * `8p6c` - 8P6C * `8p4c` - 8P4C * `8p2c` - 8P2C * `6p6c` - 6P6C * `6p4c` - 6P4C * `6p2c` - 6P2C * `4p4c` - 4P4C * `4p2c` - 4P2C * `gg45` - GG45 * `tera-4p` - TERA 4P * `tera-2p` - TERA 2P * `tera-1p` - TERA 1P * `110-punch` - 110 Punch * `bnc` - BNC * `f` - F Connector * `n` - N Connector * `mrj21` - MRJ21 * `fc` - FC * `lc` - LC * `lc-pc` - LC/PC * `lc-upc` - LC/UPC * `lc-apc` - LC/APC * `lsh` - LSH * `lsh-pc` - LSH/PC * `lsh-upc` - LSH/UPC * `lsh-apc` - LSH/APC * `lx5` - LX.5 * `lx5-pc` - LX.5/PC * `lx5-upc` - LX.5/UPC * `lx5-apc` - LX.5/APC * `mpo` - MPO * `mtrj` - MTRJ * `sc` - SC * `sc-pc` - SC/PC * `sc-upc` - SC/UPC * `sc-apc` - SC/APC * `st` - ST * `cs` - CS * `sn` - SN * `sma-905` - SMA 905 * `sma-906` - SMA 906 * `urm-p2` - URM-P2 * `urm-p4` - URM-P4 * `urm-p8` - URM-P8 * `splice` - Splice * `usb-a` - USB Type A * `usb-b` - USB Type B * `usb-c` - USB Type C * `usb-mini-a` - USB Mini A * `usb-mini-b` - USB Mini B * `usb-micro-a` - USB Micro A * `usb-micro-b` - USB Micro B * `usb-micro-ab` - USB Micro AB * `other` - Other
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
            throw new \InvalidArgumentException('invalid length for $color when calling PatchedWritableRearPortTemplateRequest., must be smaller than or equal to 6.');
        }
        if ((!preg_match("/^[0-9a-f]{6}$/", ObjectSerializer::toString($color)))) {
            throw new \InvalidArgumentException("invalid value for \$color when calling PatchedWritableRearPortTemplateRequest., must conform to the pattern /^[0-9a-f]{6}$/.");
        }

        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets positions
     *
     * @return int|null
     */
    public function getPositions()
    {
        return $this->container['positions'];
    }

    /**
     * Sets positions
     *
     * @param int|null $positions positions
     *
     * @return self
     */
    public function setPositions($positions)
    {
        if (is_null($positions)) {
            throw new \InvalidArgumentException('non-nullable positions cannot be null');
        }

        if (($positions > 1024)) {
            throw new \InvalidArgumentException('invalid value for $positions when calling PatchedWritableRearPortTemplateRequest., must be smaller than or equal to 1024.');
        }
        if (($positions < 1)) {
            throw new \InvalidArgumentException('invalid value for $positions when calling PatchedWritableRearPortTemplateRequest., must be bigger than or equal to 1.');
        }

        $this->container['positions'] = $positions;

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
            throw new \InvalidArgumentException('invalid length for $description when calling PatchedWritableRearPortTemplateRequest., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

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


