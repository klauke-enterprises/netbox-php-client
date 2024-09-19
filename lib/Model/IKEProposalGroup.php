<?php
/**
 * IKEProposalGroup
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
 * IKEProposalGroup Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IKEProposalGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IKEProposal_group';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'value' => 'int',
        'label' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'value' => null,
        'label' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'value' => false,
        'label' => false
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
        'value' => 'value',
        'label' => 'label'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
        'label' => 'setLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'label' => 'getLabel'
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

    public const VALUE_1 = 1;
    public const VALUE_2 = 2;
    public const VALUE_5 = 5;
    public const VALUE_14 = 14;
    public const VALUE_15 = 15;
    public const VALUE_16 = 16;
    public const VALUE_17 = 17;
    public const VALUE_18 = 18;
    public const VALUE_19 = 19;
    public const VALUE_20 = 20;
    public const VALUE_21 = 21;
    public const VALUE_22 = 22;
    public const VALUE_23 = 23;
    public const VALUE_24 = 24;
    public const VALUE_25 = 25;
    public const VALUE_26 = 26;
    public const VALUE_27 = 27;
    public const VALUE_28 = 28;
    public const VALUE_29 = 29;
    public const VALUE_30 = 30;
    public const VALUE_31 = 31;
    public const VALUE_32 = 32;
    public const VALUE_33 = 33;
    public const VALUE_34 = 34;
    public const LABEL__1 = 'Group 1';
    public const LABEL__2 = 'Group 2';
    public const LABEL__5 = 'Group 5';
    public const LABEL__14 = 'Group 14';
    public const LABEL__15 = 'Group 15';
    public const LABEL__16 = 'Group 16';
    public const LABEL__17 = 'Group 17';
    public const LABEL__18 = 'Group 18';
    public const LABEL__19 = 'Group 19';
    public const LABEL__20 = 'Group 20';
    public const LABEL__21 = 'Group 21';
    public const LABEL__22 = 'Group 22';
    public const LABEL__23 = 'Group 23';
    public const LABEL__24 = 'Group 24';
    public const LABEL__25 = 'Group 25';
    public const LABEL__26 = 'Group 26';
    public const LABEL__27 = 'Group 27';
    public const LABEL__28 = 'Group 28';
    public const LABEL__29 = 'Group 29';
    public const LABEL__30 = 'Group 30';
    public const LABEL__31 = 'Group 31';
    public const LABEL__32 = 'Group 32';
    public const LABEL__33 = 'Group 33';
    public const LABEL__34 = 'Group 34';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValueAllowableValues()
    {
        return [
            self::VALUE_1,
            self::VALUE_2,
            self::VALUE_5,
            self::VALUE_14,
            self::VALUE_15,
            self::VALUE_16,
            self::VALUE_17,
            self::VALUE_18,
            self::VALUE_19,
            self::VALUE_20,
            self::VALUE_21,
            self::VALUE_22,
            self::VALUE_23,
            self::VALUE_24,
            self::VALUE_25,
            self::VALUE_26,
            self::VALUE_27,
            self::VALUE_28,
            self::VALUE_29,
            self::VALUE_30,
            self::VALUE_31,
            self::VALUE_32,
            self::VALUE_33,
            self::VALUE_34,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelAllowableValues()
    {
        return [
            self::LABEL__1,
            self::LABEL__2,
            self::LABEL__5,
            self::LABEL__14,
            self::LABEL__15,
            self::LABEL__16,
            self::LABEL__17,
            self::LABEL__18,
            self::LABEL__19,
            self::LABEL__20,
            self::LABEL__21,
            self::LABEL__22,
            self::LABEL__23,
            self::LABEL__24,
            self::LABEL__25,
            self::LABEL__26,
            self::LABEL__27,
            self::LABEL__28,
            self::LABEL__29,
            self::LABEL__30,
            self::LABEL__31,
            self::LABEL__32,
            self::LABEL__33,
            self::LABEL__34,
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
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
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

        $allowedValues = $this->getValueAllowableValues();
        if (!is_null($this->container['value']) && !in_array($this->container['value'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'value', must be one of '%s'",
                $this->container['value'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLabelAllowableValues();
        if (!is_null($this->container['label']) && !in_array($this->container['label'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'label', must be one of '%s'",
                $this->container['label'],
                implode("', '", $allowedValues)
            );
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
     * Gets value
     *
     * @return int|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param int|null $value * `1` - Group 1 * `2` - Group 2 * `5` - Group 5 * `14` - Group 14 * `15` - Group 15 * `16` - Group 16 * `17` - Group 17 * `18` - Group 18 * `19` - Group 19 * `20` - Group 20 * `21` - Group 21 * `22` - Group 22 * `23` - Group 23 * `24` - Group 24 * `25` - Group 25 * `26` - Group 26 * `27` - Group 27 * `28` - Group 28 * `29` - Group 29 * `30` - Group 30 * `31` - Group 31 * `32` - Group 32 * `33` - Group 33 * `34` - Group 34
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $allowedValues = $this->getValueAllowableValues();
        if (!in_array($value, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'value', must be one of '%s'",
                    $value,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['value'] = $value;

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
        $allowedValues = $this->getLabelAllowableValues();
        if (!in_array($label, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'label', must be one of '%s'",
                    $label,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label'] = $label;

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


