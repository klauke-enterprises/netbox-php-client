<?php
/**
 * ExportTemplate
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
 * ExportTemplate Class Doc Comment
 *
 * @category Class
 * @description Extends the built-in ModelSerializer to enforce calling full_clean() on a copy of the associated instance during validation. (DRF does not do this by default; see https://github.com/encode/django-rest-framework/issues/3144)
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExportTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExportTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'url' => 'string',
        'display_url' => 'string',
        'display' => 'string',
        'object_types' => 'string[]',
        'name' => 'string',
        'description' => 'string',
        'template_code' => 'string',
        'mime_type' => 'string',
        'file_extension' => 'string',
        'as_attachment' => 'bool',
        'data_source' => '\OpenAPI\Client\Model\BriefDataSource',
        'data_path' => 'string',
        'data_file' => '\OpenAPI\Client\Model\BriefDataFile',
        'data_synced' => '\DateTime',
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
        'display_url' => 'uri',
        'display' => null,
        'object_types' => null,
        'name' => null,
        'description' => null,
        'template_code' => null,
        'mime_type' => null,
        'file_extension' => null,
        'as_attachment' => null,
        'data_source' => null,
        'data_path' => null,
        'data_file' => null,
        'data_synced' => 'date-time',
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
        'display_url' => false,
        'display' => false,
        'object_types' => false,
        'name' => false,
        'description' => false,
        'template_code' => false,
        'mime_type' => false,
        'file_extension' => false,
        'as_attachment' => false,
        'data_source' => false,
        'data_path' => false,
        'data_file' => false,
        'data_synced' => true,
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
        'display_url' => 'display_url',
        'display' => 'display',
        'object_types' => 'object_types',
        'name' => 'name',
        'description' => 'description',
        'template_code' => 'template_code',
        'mime_type' => 'mime_type',
        'file_extension' => 'file_extension',
        'as_attachment' => 'as_attachment',
        'data_source' => 'data_source',
        'data_path' => 'data_path',
        'data_file' => 'data_file',
        'data_synced' => 'data_synced',
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
        'display_url' => 'setDisplayUrl',
        'display' => 'setDisplay',
        'object_types' => 'setObjectTypes',
        'name' => 'setName',
        'description' => 'setDescription',
        'template_code' => 'setTemplateCode',
        'mime_type' => 'setMimeType',
        'file_extension' => 'setFileExtension',
        'as_attachment' => 'setAsAttachment',
        'data_source' => 'setDataSource',
        'data_path' => 'setDataPath',
        'data_file' => 'setDataFile',
        'data_synced' => 'setDataSynced',
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
        'display_url' => 'getDisplayUrl',
        'display' => 'getDisplay',
        'object_types' => 'getObjectTypes',
        'name' => 'getName',
        'description' => 'getDescription',
        'template_code' => 'getTemplateCode',
        'mime_type' => 'getMimeType',
        'file_extension' => 'getFileExtension',
        'as_attachment' => 'getAsAttachment',
        'data_source' => 'getDataSource',
        'data_path' => 'getDataPath',
        'data_file' => 'getDataFile',
        'data_synced' => 'getDataSynced',
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
        $this->setIfExists('display_url', $data ?? [], null);
        $this->setIfExists('display', $data ?? [], null);
        $this->setIfExists('object_types', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('template_code', $data ?? [], null);
        $this->setIfExists('mime_type', $data ?? [], null);
        $this->setIfExists('file_extension', $data ?? [], null);
        $this->setIfExists('as_attachment', $data ?? [], null);
        $this->setIfExists('data_source', $data ?? [], null);
        $this->setIfExists('data_path', $data ?? [], null);
        $this->setIfExists('data_file', $data ?? [], null);
        $this->setIfExists('data_synced', $data ?? [], null);
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
        if ($this->container['display_url'] === null) {
            $invalidProperties[] = "'display_url' can't be null";
        }
        if ($this->container['display'] === null) {
            $invalidProperties[] = "'display' can't be null";
        }
        if ($this->container['object_types'] === null) {
            $invalidProperties[] = "'object_types' can't be null";
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

        if ($this->container['template_code'] === null) {
            $invalidProperties[] = "'template_code' can't be null";
        }
        if (!is_null($this->container['mime_type']) && (mb_strlen($this->container['mime_type']) > 50)) {
            $invalidProperties[] = "invalid value for 'mime_type', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['file_extension']) && (mb_strlen($this->container['file_extension']) > 15)) {
            $invalidProperties[] = "invalid value for 'file_extension', the character length must be smaller than or equal to 15.";
        }

        if ($this->container['data_path'] === null) {
            $invalidProperties[] = "'data_path' can't be null";
        }
        if ($this->container['data_file'] === null) {
            $invalidProperties[] = "'data_file' can't be null";
        }
        if ($this->container['data_synced'] === null) {
            $invalidProperties[] = "'data_synced' can't be null";
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
     * Gets display_url
     *
     * @return string
     */
    public function getDisplayUrl()
    {
        return $this->container['display_url'];
    }

    /**
     * Sets display_url
     *
     * @param string $display_url display_url
     *
     * @return self
     */
    public function setDisplayUrl($display_url)
    {
        if (is_null($display_url)) {
            throw new \InvalidArgumentException('non-nullable display_url cannot be null');
        }
        $this->container['display_url'] = $display_url;

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
     * Gets object_types
     *
     * @return string[]
     */
    public function getObjectTypes()
    {
        return $this->container['object_types'];
    }

    /**
     * Sets object_types
     *
     * @param string[] $object_types object_types
     *
     * @return self
     */
    public function setObjectTypes($object_types)
    {
        if (is_null($object_types)) {
            throw new \InvalidArgumentException('non-nullable object_types cannot be null');
        }
        $this->container['object_types'] = $object_types;

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
            throw new \InvalidArgumentException('invalid length for $name when calling ExportTemplate., must be smaller than or equal to 100.');
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
            throw new \InvalidArgumentException('invalid length for $description when calling ExportTemplate., must be smaller than or equal to 200.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets template_code
     *
     * @return string
     */
    public function getTemplateCode()
    {
        return $this->container['template_code'];
    }

    /**
     * Sets template_code
     *
     * @param string $template_code Jinja2 template code. The list of objects being exported is passed as a context variable named <code>queryset</code>.
     *
     * @return self
     */
    public function setTemplateCode($template_code)
    {
        if (is_null($template_code)) {
            throw new \InvalidArgumentException('non-nullable template_code cannot be null');
        }
        $this->container['template_code'] = $template_code;

        return $this;
    }

    /**
     * Gets mime_type
     *
     * @return string|null
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string|null $mime_type Defaults to <code>text/plain; charset=utf-8</code>
     *
     * @return self
     */
    public function setMimeType($mime_type)
    {
        if (is_null($mime_type)) {
            throw new \InvalidArgumentException('non-nullable mime_type cannot be null');
        }
        if ((mb_strlen($mime_type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $mime_type when calling ExportTemplate., must be smaller than or equal to 50.');
        }

        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets file_extension
     *
     * @return string|null
     */
    public function getFileExtension()
    {
        return $this->container['file_extension'];
    }

    /**
     * Sets file_extension
     *
     * @param string|null $file_extension Extension to append to the rendered filename
     *
     * @return self
     */
    public function setFileExtension($file_extension)
    {
        if (is_null($file_extension)) {
            throw new \InvalidArgumentException('non-nullable file_extension cannot be null');
        }
        if ((mb_strlen($file_extension) > 15)) {
            throw new \InvalidArgumentException('invalid length for $file_extension when calling ExportTemplate., must be smaller than or equal to 15.');
        }

        $this->container['file_extension'] = $file_extension;

        return $this;
    }

    /**
     * Gets as_attachment
     *
     * @return bool|null
     */
    public function getAsAttachment()
    {
        return $this->container['as_attachment'];
    }

    /**
     * Sets as_attachment
     *
     * @param bool|null $as_attachment Download file as attachment
     *
     * @return self
     */
    public function setAsAttachment($as_attachment)
    {
        if (is_null($as_attachment)) {
            throw new \InvalidArgumentException('non-nullable as_attachment cannot be null');
        }
        $this->container['as_attachment'] = $as_attachment;

        return $this;
    }

    /**
     * Gets data_source
     *
     * @return \OpenAPI\Client\Model\BriefDataSource|null
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     * @param \OpenAPI\Client\Model\BriefDataSource|null $data_source data_source
     *
     * @return self
     */
    public function setDataSource($data_source)
    {
        if (is_null($data_source)) {
            throw new \InvalidArgumentException('non-nullable data_source cannot be null');
        }
        $this->container['data_source'] = $data_source;

        return $this;
    }

    /**
     * Gets data_path
     *
     * @return string
     */
    public function getDataPath()
    {
        return $this->container['data_path'];
    }

    /**
     * Sets data_path
     *
     * @param string $data_path Path to remote file (relative to data source root)
     *
     * @return self
     */
    public function setDataPath($data_path)
    {
        if (is_null($data_path)) {
            throw new \InvalidArgumentException('non-nullable data_path cannot be null');
        }
        $this->container['data_path'] = $data_path;

        return $this;
    }

    /**
     * Gets data_file
     *
     * @return \OpenAPI\Client\Model\BriefDataFile
     */
    public function getDataFile()
    {
        return $this->container['data_file'];
    }

    /**
     * Sets data_file
     *
     * @param \OpenAPI\Client\Model\BriefDataFile $data_file data_file
     *
     * @return self
     */
    public function setDataFile($data_file)
    {
        if (is_null($data_file)) {
            throw new \InvalidArgumentException('non-nullable data_file cannot be null');
        }
        $this->container['data_file'] = $data_file;

        return $this;
    }

    /**
     * Gets data_synced
     *
     * @return \DateTime
     */
    public function getDataSynced()
    {
        return $this->container['data_synced'];
    }

    /**
     * Sets data_synced
     *
     * @param \DateTime $data_synced data_synced
     *
     * @return self
     */
    public function setDataSynced($data_synced)
    {
        if (is_null($data_synced)) {
            array_push($this->openAPINullablesSetToNull, 'data_synced');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_synced', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data_synced'] = $data_synced;

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


