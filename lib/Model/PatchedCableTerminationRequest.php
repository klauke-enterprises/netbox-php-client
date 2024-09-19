<?php
/**
 * PatchedCableTerminationRequest
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
 * PatchedCableTerminationRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PatchedCableTerminationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PatchedCableTerminationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cable' => 'int',
        'cable_end' => 'string',
        'termination_type' => 'string',
        'termination_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cable' => null,
        'cable_end' => null,
        'termination_type' => null,
        'termination_id' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cable' => false,
        'cable_end' => false,
        'termination_type' => false,
        'termination_id' => false
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
        'cable' => 'cable',
        'cable_end' => 'cable_end',
        'termination_type' => 'termination_type',
        'termination_id' => 'termination_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cable' => 'setCable',
        'cable_end' => 'setCableEnd',
        'termination_type' => 'setTerminationType',
        'termination_id' => 'setTerminationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cable' => 'getCable',
        'cable_end' => 'getCableEnd',
        'termination_type' => 'getTerminationType',
        'termination_id' => 'getTerminationId'
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

    public const CABLE_END_A = 'A';
    public const CABLE_END_B = 'B';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCableEndAllowableValues()
    {
        return [
            self::CABLE_END_A,
            self::CABLE_END_B,
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
        $this->setIfExists('cable', $data ?? [], null);
        $this->setIfExists('cable_end', $data ?? [], null);
        $this->setIfExists('termination_type', $data ?? [], null);
        $this->setIfExists('termination_id', $data ?? [], null);
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

        $allowedValues = $this->getCableEndAllowableValues();
        if (!is_null($this->container['cable_end']) && !in_array($this->container['cable_end'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cable_end', must be one of '%s'",
                $this->container['cable_end'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['termination_id']) && ($this->container['termination_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'termination_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['termination_id']) && ($this->container['termination_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'termination_id', must be bigger than or equal to 0.";
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
     * Gets cable
     *
     * @return int|null
     */
    public function getCable()
    {
        return $this->container['cable'];
    }

    /**
     * Sets cable
     *
     * @param int|null $cable cable
     *
     * @return self
     */
    public function setCable($cable)
    {
        if (is_null($cable)) {
            throw new \InvalidArgumentException('non-nullable cable cannot be null');
        }
        $this->container['cable'] = $cable;

        return $this;
    }

    /**
     * Gets cable_end
     *
     * @return string|null
     */
    public function getCableEnd()
    {
        return $this->container['cable_end'];
    }

    /**
     * Sets cable_end
     *
     * @param string|null $cable_end * `A` - A * `B` - B
     *
     * @return self
     */
    public function setCableEnd($cable_end)
    {
        if (is_null($cable_end)) {
            throw new \InvalidArgumentException('non-nullable cable_end cannot be null');
        }
        $allowedValues = $this->getCableEndAllowableValues();
        if (!in_array($cable_end, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cable_end', must be one of '%s'",
                    $cable_end,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cable_end'] = $cable_end;

        return $this;
    }

    /**
     * Gets termination_type
     *
     * @return string|null
     */
    public function getTerminationType()
    {
        return $this->container['termination_type'];
    }

    /**
     * Sets termination_type
     *
     * @param string|null $termination_type termination_type
     *
     * @return self
     */
    public function setTerminationType($termination_type)
    {
        if (is_null($termination_type)) {
            throw new \InvalidArgumentException('non-nullable termination_type cannot be null');
        }
        $this->container['termination_type'] = $termination_type;

        return $this;
    }

    /**
     * Gets termination_id
     *
     * @return int|null
     */
    public function getTerminationId()
    {
        return $this->container['termination_id'];
    }

    /**
     * Sets termination_id
     *
     * @param int|null $termination_id termination_id
     *
     * @return self
     */
    public function setTerminationId($termination_id)
    {
        if (is_null($termination_id)) {
            throw new \InvalidArgumentException('non-nullable termination_id cannot be null');
        }

        if (($termination_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $termination_id when calling PatchedCableTerminationRequest., must be smaller than or equal to 9223372036854775807.');
        }
        if (($termination_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $termination_id when calling PatchedCableTerminationRequest., must be bigger than or equal to 0.');
        }

        $this->container['termination_id'] = $termination_id;

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


