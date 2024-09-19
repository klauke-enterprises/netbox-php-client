<?php
/**
 * IPSecProposal
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
 * IPSecProposal Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IPSecProposal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IPSecProposal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'url' => 'string',
        'display' => 'string',
        'name' => 'string',
        'description' => 'string',
        'encryption_algorithm' => '\OpenAPI\Client\Model\IKEProposalEncryptionAlgorithm',
        'authentication_algorithm' => '\OpenAPI\Client\Model\IKEProposalAuthenticationAlgorithm',
        'sa_lifetime_seconds' => 'int',
        'sa_lifetime_data' => 'int',
        'comments' => 'string',
        'tags' => '\OpenAPI\Client\Model\NestedTag[]',
        'custom_fields' => 'array<string,mixed>',
        'created' => '\DateTime',
        'last_updated' => '\DateTime'
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
        'name' => null,
        'description' => null,
        'encryption_algorithm' => null,
        'authentication_algorithm' => null,
        'sa_lifetime_seconds' => null,
        'sa_lifetime_data' => null,
        'comments' => null,
        'tags' => null,
        'custom_fields' => null,
        'created' => 'date-time',
        'last_updated' => 'date-time'
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
        'name' => false,
        'description' => false,
        'encryption_algorithm' => false,
        'authentication_algorithm' => false,
        'sa_lifetime_seconds' => true,
        'sa_lifetime_data' => true,
        'comments' => false,
        'tags' => false,
        'custom_fields' => false,
        'created' => true,
        'last_updated' => true
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
        'name' => 'name',
        'description' => 'description',
        'encryption_algorithm' => 'encryption_algorithm',
        'authentication_algorithm' => 'authentication_algorithm',
        'sa_lifetime_seconds' => 'sa_lifetime_seconds',
        'sa_lifetime_data' => 'sa_lifetime_data',
        'comments' => 'comments',
        'tags' => 'tags',
        'custom_fields' => 'custom_fields',
        'created' => 'created',
        'last_updated' => 'last_updated'
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
        'name' => 'setName',
        'description' => 'setDescription',
        'encryption_algorithm' => 'setEncryptionAlgorithm',
        'authentication_algorithm' => 'setAuthenticationAlgorithm',
        'sa_lifetime_seconds' => 'setSaLifetimeSeconds',
        'sa_lifetime_data' => 'setSaLifetimeData',
        'comments' => 'setComments',
        'tags' => 'setTags',
        'custom_fields' => 'setCustomFields',
        'created' => 'setCreated',
        'last_updated' => 'setLastUpdated'
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
        'name' => 'getName',
        'description' => 'getDescription',
        'encryption_algorithm' => 'getEncryptionAlgorithm',
        'authentication_algorithm' => 'getAuthenticationAlgorithm',
        'sa_lifetime_seconds' => 'getSaLifetimeSeconds',
        'sa_lifetime_data' => 'getSaLifetimeData',
        'comments' => 'getComments',
        'tags' => 'getTags',
        'custom_fields' => 'getCustomFields',
        'created' => 'getCreated',
        'last_updated' => 'getLastUpdated'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('encryption_algorithm', $data ?? [], null);
        $this->setIfExists('authentication_algorithm', $data ?? [], null);
        $this->setIfExists('sa_lifetime_seconds', $data ?? [], null);
        $this->setIfExists('sa_lifetime_data', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['encryption_algorithm'] === null) {
            $invalidProperties[] = "'encryption_algorithm' can't be null";
        }
        if ($this->container['authentication_algorithm'] === null) {
            $invalidProperties[] = "'authentication_algorithm' can't be null";
        }
        if (!is_null($this->container['sa_lifetime_seconds']) && ($this->container['sa_lifetime_seconds'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'sa_lifetime_seconds', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['sa_lifetime_seconds']) && ($this->container['sa_lifetime_seconds'] < 0)) {
            $invalidProperties[] = "invalid value for 'sa_lifetime_seconds', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['sa_lifetime_data']) && ($this->container['sa_lifetime_data'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'sa_lifetime_data', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['sa_lifetime_data']) && ($this->container['sa_lifetime_data'] < 0)) {
            $invalidProperties[] = "invalid value for 'sa_lifetime_data', must be bigger than or equal to 0.";
        }

        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['last_updated'] === null) {
            $invalidProperties[] = "'last_updated' can't be null";
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
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling IPSecProposal., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

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
            throw new \InvalidArgumentException('invalid length for $description when calling IPSecProposal., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets encryption_algorithm
     *
     * @return \OpenAPI\Client\Model\IKEProposalEncryptionAlgorithm
     */
    public function getEncryptionAlgorithm()
    {
        return $this->container['encryption_algorithm'];
    }

    /**
     * Sets encryption_algorithm
     *
     * @param \OpenAPI\Client\Model\IKEProposalEncryptionAlgorithm $encryption_algorithm encryption_algorithm
     *
     * @return self
     */
    public function setEncryptionAlgorithm($encryption_algorithm)
    {
        if (is_null($encryption_algorithm)) {
            throw new \InvalidArgumentException('non-nullable encryption_algorithm cannot be null');
        }
        $this->container['encryption_algorithm'] = $encryption_algorithm;

        return $this;
    }

    /**
     * Gets authentication_algorithm
     *
     * @return \OpenAPI\Client\Model\IKEProposalAuthenticationAlgorithm
     */
    public function getAuthenticationAlgorithm()
    {
        return $this->container['authentication_algorithm'];
    }

    /**
     * Sets authentication_algorithm
     *
     * @param \OpenAPI\Client\Model\IKEProposalAuthenticationAlgorithm $authentication_algorithm authentication_algorithm
     *
     * @return self
     */
    public function setAuthenticationAlgorithm($authentication_algorithm)
    {
        if (is_null($authentication_algorithm)) {
            throw new \InvalidArgumentException('non-nullable authentication_algorithm cannot be null');
        }
        $this->container['authentication_algorithm'] = $authentication_algorithm;

        return $this;
    }

    /**
     * Gets sa_lifetime_seconds
     *
     * @return int|null
     */
    public function getSaLifetimeSeconds()
    {
        return $this->container['sa_lifetime_seconds'];
    }

    /**
     * Sets sa_lifetime_seconds
     *
     * @param int|null $sa_lifetime_seconds Security association lifetime (seconds)
     *
     * @return self
     */
    public function setSaLifetimeSeconds($sa_lifetime_seconds)
    {
        if (is_null($sa_lifetime_seconds)) {
            array_push($this->openAPINullablesSetToNull, 'sa_lifetime_seconds');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sa_lifetime_seconds', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($sa_lifetime_seconds) && ($sa_lifetime_seconds > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $sa_lifetime_seconds when calling IPSecProposal., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($sa_lifetime_seconds) && ($sa_lifetime_seconds < 0)) {
            throw new \InvalidArgumentException('invalid value for $sa_lifetime_seconds when calling IPSecProposal., must be bigger than or equal to 0.');
        }

        $this->container['sa_lifetime_seconds'] = $sa_lifetime_seconds;

        return $this;
    }

    /**
     * Gets sa_lifetime_data
     *
     * @return int|null
     */
    public function getSaLifetimeData()
    {
        return $this->container['sa_lifetime_data'];
    }

    /**
     * Sets sa_lifetime_data
     *
     * @param int|null $sa_lifetime_data Security association lifetime (in kilobytes)
     *
     * @return self
     */
    public function setSaLifetimeData($sa_lifetime_data)
    {
        if (is_null($sa_lifetime_data)) {
            array_push($this->openAPINullablesSetToNull, 'sa_lifetime_data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sa_lifetime_data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($sa_lifetime_data) && ($sa_lifetime_data > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $sa_lifetime_data when calling IPSecProposal., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($sa_lifetime_data) && ($sa_lifetime_data < 0)) {
            throw new \InvalidArgumentException('invalid value for $sa_lifetime_data when calling IPSecProposal., must be bigger than or equal to 0.');
        }

        $this->container['sa_lifetime_data'] = $sa_lifetime_data;

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
     * @return \OpenAPI\Client\Model\NestedTag[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \OpenAPI\Client\Model\NestedTag[]|null $tags tags
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


