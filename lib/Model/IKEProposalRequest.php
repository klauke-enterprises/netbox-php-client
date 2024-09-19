<?php
/**
 * IKEProposalRequest
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
 * IKEProposalRequest Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IKEProposalRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IKEProposalRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'authentication_method' => 'string',
        'encryption_algorithm' => 'string',
        'authentication_algorithm' => 'string',
        'group' => 'int',
        'sa_lifetime' => 'int',
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
        'name' => null,
        'description' => null,
        'authentication_method' => null,
        'encryption_algorithm' => null,
        'authentication_algorithm' => null,
        'group' => null,
        'sa_lifetime' => null,
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
        'name' => false,
        'description' => false,
        'authentication_method' => false,
        'encryption_algorithm' => false,
        'authentication_algorithm' => false,
        'group' => false,
        'sa_lifetime' => true,
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
        'name' => 'name',
        'description' => 'description',
        'authentication_method' => 'authentication_method',
        'encryption_algorithm' => 'encryption_algorithm',
        'authentication_algorithm' => 'authentication_algorithm',
        'group' => 'group',
        'sa_lifetime' => 'sa_lifetime',
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
        'name' => 'setName',
        'description' => 'setDescription',
        'authentication_method' => 'setAuthenticationMethod',
        'encryption_algorithm' => 'setEncryptionAlgorithm',
        'authentication_algorithm' => 'setAuthenticationAlgorithm',
        'group' => 'setGroup',
        'sa_lifetime' => 'setSaLifetime',
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
        'name' => 'getName',
        'description' => 'getDescription',
        'authentication_method' => 'getAuthenticationMethod',
        'encryption_algorithm' => 'getEncryptionAlgorithm',
        'authentication_algorithm' => 'getAuthenticationAlgorithm',
        'group' => 'getGroup',
        'sa_lifetime' => 'getSaLifetime',
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

    public const AUTHENTICATION_METHOD_PRESHARED_KEYS = 'preshared-keys';
    public const AUTHENTICATION_METHOD_CERTIFICATES = 'certificates';
    public const AUTHENTICATION_METHOD_RSA_SIGNATURES = 'rsa-signatures';
    public const AUTHENTICATION_METHOD_DSA_SIGNATURES = 'dsa-signatures';
    public const ENCRYPTION_ALGORITHM_AES_128_CBC = 'aes-128-cbc';
    public const ENCRYPTION_ALGORITHM_AES_128_GCM = 'aes-128-gcm';
    public const ENCRYPTION_ALGORITHM_AES_192_CBC = 'aes-192-cbc';
    public const ENCRYPTION_ALGORITHM_AES_192_GCM = 'aes-192-gcm';
    public const ENCRYPTION_ALGORITHM_AES_256_CBC = 'aes-256-cbc';
    public const ENCRYPTION_ALGORITHM_AES_256_GCM = 'aes-256-gcm';
    public const ENCRYPTION_ALGORITHM__3DES_CBC = '3des-cbc';
    public const ENCRYPTION_ALGORITHM_DES_CBC = 'des-cbc';
    public const AUTHENTICATION_ALGORITHM_SHA1 = 'hmac-sha1';
    public const AUTHENTICATION_ALGORITHM_SHA256 = 'hmac-sha256';
    public const AUTHENTICATION_ALGORITHM_SHA384 = 'hmac-sha384';
    public const AUTHENTICATION_ALGORITHM_SHA512 = 'hmac-sha512';
    public const AUTHENTICATION_ALGORITHM_MD5 = 'hmac-md5';
    public const GROUP_1 = 1;
    public const GROUP_2 = 2;
    public const GROUP_5 = 5;
    public const GROUP_14 = 14;
    public const GROUP_15 = 15;
    public const GROUP_16 = 16;
    public const GROUP_17 = 17;
    public const GROUP_18 = 18;
    public const GROUP_19 = 19;
    public const GROUP_20 = 20;
    public const GROUP_21 = 21;
    public const GROUP_22 = 22;
    public const GROUP_23 = 23;
    public const GROUP_24 = 24;
    public const GROUP_25 = 25;
    public const GROUP_26 = 26;
    public const GROUP_27 = 27;
    public const GROUP_28 = 28;
    public const GROUP_29 = 29;
    public const GROUP_30 = 30;
    public const GROUP_31 = 31;
    public const GROUP_32 = 32;
    public const GROUP_33 = 33;
    public const GROUP_34 = 34;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthenticationMethodAllowableValues()
    {
        return [
            self::AUTHENTICATION_METHOD_PRESHARED_KEYS,
            self::AUTHENTICATION_METHOD_CERTIFICATES,
            self::AUTHENTICATION_METHOD_RSA_SIGNATURES,
            self::AUTHENTICATION_METHOD_DSA_SIGNATURES,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEncryptionAlgorithmAllowableValues()
    {
        return [
            self::ENCRYPTION_ALGORITHM_AES_128_CBC,
            self::ENCRYPTION_ALGORITHM_AES_128_GCM,
            self::ENCRYPTION_ALGORITHM_AES_192_CBC,
            self::ENCRYPTION_ALGORITHM_AES_192_GCM,
            self::ENCRYPTION_ALGORITHM_AES_256_CBC,
            self::ENCRYPTION_ALGORITHM_AES_256_GCM,
            self::ENCRYPTION_ALGORITHM__3DES_CBC,
            self::ENCRYPTION_ALGORITHM_DES_CBC,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthenticationAlgorithmAllowableValues()
    {
        return [
            self::AUTHENTICATION_ALGORITHM_SHA1,
            self::AUTHENTICATION_ALGORITHM_SHA256,
            self::AUTHENTICATION_ALGORITHM_SHA384,
            self::AUTHENTICATION_ALGORITHM_SHA512,
            self::AUTHENTICATION_ALGORITHM_MD5,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGroupAllowableValues()
    {
        return [
            self::GROUP_1,
            self::GROUP_2,
            self::GROUP_5,
            self::GROUP_14,
            self::GROUP_15,
            self::GROUP_16,
            self::GROUP_17,
            self::GROUP_18,
            self::GROUP_19,
            self::GROUP_20,
            self::GROUP_21,
            self::GROUP_22,
            self::GROUP_23,
            self::GROUP_24,
            self::GROUP_25,
            self::GROUP_26,
            self::GROUP_27,
            self::GROUP_28,
            self::GROUP_29,
            self::GROUP_30,
            self::GROUP_31,
            self::GROUP_32,
            self::GROUP_33,
            self::GROUP_34,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('authentication_method', $data ?? [], null);
        $this->setIfExists('encryption_algorithm', $data ?? [], null);
        $this->setIfExists('authentication_algorithm', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('sa_lifetime', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['authentication_method'] === null) {
            $invalidProperties[] = "'authentication_method' can't be null";
        }
        $allowedValues = $this->getAuthenticationMethodAllowableValues();
        if (!is_null($this->container['authentication_method']) && !in_array($this->container['authentication_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'authentication_method', must be one of '%s'",
                $this->container['authentication_method'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['encryption_algorithm'] === null) {
            $invalidProperties[] = "'encryption_algorithm' can't be null";
        }
        $allowedValues = $this->getEncryptionAlgorithmAllowableValues();
        if (!is_null($this->container['encryption_algorithm']) && !in_array($this->container['encryption_algorithm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'encryption_algorithm', must be one of '%s'",
                $this->container['encryption_algorithm'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAuthenticationAlgorithmAllowableValues();
        if (!is_null($this->container['authentication_algorithm']) && !in_array($this->container['authentication_algorithm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'authentication_algorithm', must be one of '%s'",
                $this->container['authentication_algorithm'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
        }
        $allowedValues = $this->getGroupAllowableValues();
        if (!is_null($this->container['group']) && !in_array($this->container['group'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'group', must be one of '%s'",
                $this->container['group'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['sa_lifetime']) && ($this->container['sa_lifetime'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'sa_lifetime', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['sa_lifetime']) && ($this->container['sa_lifetime'] < 0)) {
            $invalidProperties[] = "invalid value for 'sa_lifetime', must be bigger than or equal to 0.";
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
            throw new \InvalidArgumentException('invalid length for $name when calling IKEProposalRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling IKEProposalRequest., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $description when calling IKEProposalRequest., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets authentication_method
     *
     * @return string
     */
    public function getAuthenticationMethod()
    {
        return $this->container['authentication_method'];
    }

    /**
     * Sets authentication_method
     *
     * @param string $authentication_method * `preshared-keys` - Pre-shared keys * `certificates` - Certificates * `rsa-signatures` - RSA signatures * `dsa-signatures` - DSA signatures
     *
     * @return self
     */
    public function setAuthenticationMethod($authentication_method)
    {
        if (is_null($authentication_method)) {
            throw new \InvalidArgumentException('non-nullable authentication_method cannot be null');
        }
        $allowedValues = $this->getAuthenticationMethodAllowableValues();
        if (!in_array($authentication_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'authentication_method', must be one of '%s'",
                    $authentication_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['authentication_method'] = $authentication_method;

        return $this;
    }

    /**
     * Gets encryption_algorithm
     *
     * @return string
     */
    public function getEncryptionAlgorithm()
    {
        return $this->container['encryption_algorithm'];
    }

    /**
     * Sets encryption_algorithm
     *
     * @param string $encryption_algorithm * `aes-128-cbc` - 128-bit AES (CBC) * `aes-128-gcm` - 128-bit AES (GCM) * `aes-192-cbc` - 192-bit AES (CBC) * `aes-192-gcm` - 192-bit AES (GCM) * `aes-256-cbc` - 256-bit AES (CBC) * `aes-256-gcm` - 256-bit AES (GCM) * `3des-cbc` - 3DES * `des-cbc` - DES
     *
     * @return self
     */
    public function setEncryptionAlgorithm($encryption_algorithm)
    {
        if (is_null($encryption_algorithm)) {
            throw new \InvalidArgumentException('non-nullable encryption_algorithm cannot be null');
        }
        $allowedValues = $this->getEncryptionAlgorithmAllowableValues();
        if (!in_array($encryption_algorithm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'encryption_algorithm', must be one of '%s'",
                    $encryption_algorithm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['encryption_algorithm'] = $encryption_algorithm;

        return $this;
    }

    /**
     * Gets authentication_algorithm
     *
     * @return string|null
     */
    public function getAuthenticationAlgorithm()
    {
        return $this->container['authentication_algorithm'];
    }

    /**
     * Sets authentication_algorithm
     *
     * @param string|null $authentication_algorithm * `hmac-sha1` - SHA-1 HMAC * `hmac-sha256` - SHA-256 HMAC * `hmac-sha384` - SHA-384 HMAC * `hmac-sha512` - SHA-512 HMAC * `hmac-md5` - MD5 HMAC
     *
     * @return self
     */
    public function setAuthenticationAlgorithm($authentication_algorithm)
    {
        if (is_null($authentication_algorithm)) {
            throw new \InvalidArgumentException('non-nullable authentication_algorithm cannot be null');
        }
        $allowedValues = $this->getAuthenticationAlgorithmAllowableValues();
        if (!in_array($authentication_algorithm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'authentication_algorithm', must be one of '%s'",
                    $authentication_algorithm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['authentication_algorithm'] = $authentication_algorithm;

        return $this;
    }

    /**
     * Gets group
     *
     * @return int
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param int $group * `1` - Group 1 * `2` - Group 2 * `5` - Group 5 * `14` - Group 14 * `15` - Group 15 * `16` - Group 16 * `17` - Group 17 * `18` - Group 18 * `19` - Group 19 * `20` - Group 20 * `21` - Group 21 * `22` - Group 22 * `23` - Group 23 * `24` - Group 24 * `25` - Group 25 * `26` - Group 26 * `27` - Group 27 * `28` - Group 28 * `29` - Group 29 * `30` - Group 30 * `31` - Group 31 * `32` - Group 32 * `33` - Group 33 * `34` - Group 34
     *
     * @return self
     */
    public function setGroup($group)
    {
        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }
        $allowedValues = $this->getGroupAllowableValues();
        if (!in_array($group, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'group', must be one of '%s'",
                    $group,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets sa_lifetime
     *
     * @return int|null
     */
    public function getSaLifetime()
    {
        return $this->container['sa_lifetime'];
    }

    /**
     * Sets sa_lifetime
     *
     * @param int|null $sa_lifetime Security association lifetime (in seconds)
     *
     * @return self
     */
    public function setSaLifetime($sa_lifetime)
    {
        if (is_null($sa_lifetime)) {
            array_push($this->openAPINullablesSetToNull, 'sa_lifetime');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sa_lifetime', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($sa_lifetime) && ($sa_lifetime > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $sa_lifetime when calling IKEProposalRequest., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($sa_lifetime) && ($sa_lifetime < 0)) {
            throw new \InvalidArgumentException('invalid value for $sa_lifetime when calling IKEProposalRequest., must be bigger than or equal to 0.');
        }

        $this->container['sa_lifetime'] = $sa_lifetime;

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


