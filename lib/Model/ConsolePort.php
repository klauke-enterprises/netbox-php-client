<?php
/**
 * ConsolePort
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
 * ConsolePort Class Doc Comment
 *
 * @category Class
 * @description Adds support for custom fields and tags.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConsolePort implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConsolePort';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'url' => 'string',
        'display' => 'string',
        'device' => '\OpenAPI\Client\Model\Device',
        'module' => '\OpenAPI\Client\Model\Module',
        'name' => 'string',
        'label' => 'string',
        'type' => '\OpenAPI\Client\Model\ConsolePortType',
        'speed' => '\OpenAPI\Client\Model\ConsolePortSpeed',
        'description' => 'string',
        'mark_connected' => 'bool',
        'cable' => '\OpenAPI\Client\Model\Cable',
        'cable_end' => 'string',
        'link_peers' => 'mixed[]',
        'link_peers_type' => 'string',
        'connected_endpoints' => 'mixed[]',
        'connected_endpoints_type' => 'string',
        'connected_endpoints_reachable' => 'bool',
        'tags' => '\OpenAPI\Client\Model\NestedTag[]',
        'custom_fields' => 'array<string,mixed>',
        'created' => '\DateTime',
        'last_updated' => '\DateTime',
        '_occupied' => 'bool'
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
        'device' => null,
        'module' => null,
        'name' => null,
        'label' => null,
        'type' => null,
        'speed' => null,
        'description' => null,
        'mark_connected' => null,
        'cable' => null,
        'cable_end' => null,
        'link_peers' => null,
        'link_peers_type' => null,
        'connected_endpoints' => null,
        'connected_endpoints_type' => null,
        'connected_endpoints_reachable' => null,
        'tags' => null,
        'custom_fields' => null,
        'created' => 'date-time',
        'last_updated' => 'date-time',
        '_occupied' => null
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
        'device' => false,
        'module' => true,
        'name' => false,
        'label' => false,
        'type' => false,
        'speed' => true,
        'description' => false,
        'mark_connected' => false,
        'cable' => true,
        'cable_end' => false,
        'link_peers' => false,
        'link_peers_type' => true,
        'connected_endpoints' => true,
        'connected_endpoints_type' => true,
        'connected_endpoints_reachable' => false,
        'tags' => false,
        'custom_fields' => false,
        'created' => true,
        'last_updated' => true,
        '_occupied' => false
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
        'device' => 'device',
        'module' => 'module',
        'name' => 'name',
        'label' => 'label',
        'type' => 'type',
        'speed' => 'speed',
        'description' => 'description',
        'mark_connected' => 'mark_connected',
        'cable' => 'cable',
        'cable_end' => 'cable_end',
        'link_peers' => 'link_peers',
        'link_peers_type' => 'link_peers_type',
        'connected_endpoints' => 'connected_endpoints',
        'connected_endpoints_type' => 'connected_endpoints_type',
        'connected_endpoints_reachable' => 'connected_endpoints_reachable',
        'tags' => 'tags',
        'custom_fields' => 'custom_fields',
        'created' => 'created',
        'last_updated' => 'last_updated',
        '_occupied' => '_occupied'
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
        'device' => 'setDevice',
        'module' => 'setModule',
        'name' => 'setName',
        'label' => 'setLabel',
        'type' => 'setType',
        'speed' => 'setSpeed',
        'description' => 'setDescription',
        'mark_connected' => 'setMarkConnected',
        'cable' => 'setCable',
        'cable_end' => 'setCableEnd',
        'link_peers' => 'setLinkPeers',
        'link_peers_type' => 'setLinkPeersType',
        'connected_endpoints' => 'setConnectedEndpoints',
        'connected_endpoints_type' => 'setConnectedEndpointsType',
        'connected_endpoints_reachable' => 'setConnectedEndpointsReachable',
        'tags' => 'setTags',
        'custom_fields' => 'setCustomFields',
        'created' => 'setCreated',
        'last_updated' => 'setLastUpdated',
        '_occupied' => 'setOccupied'
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
        'device' => 'getDevice',
        'module' => 'getModule',
        'name' => 'getName',
        'label' => 'getLabel',
        'type' => 'getType',
        'speed' => 'getSpeed',
        'description' => 'getDescription',
        'mark_connected' => 'getMarkConnected',
        'cable' => 'getCable',
        'cable_end' => 'getCableEnd',
        'link_peers' => 'getLinkPeers',
        'link_peers_type' => 'getLinkPeersType',
        'connected_endpoints' => 'getConnectedEndpoints',
        'connected_endpoints_type' => 'getConnectedEndpointsType',
        'connected_endpoints_reachable' => 'getConnectedEndpointsReachable',
        'tags' => 'getTags',
        'custom_fields' => 'getCustomFields',
        'created' => 'getCreated',
        'last_updated' => 'getLastUpdated',
        '_occupied' => 'getOccupied'
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
        $this->setIfExists('device', $data ?? [], null);
        $this->setIfExists('module', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('speed', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('mark_connected', $data ?? [], null);
        $this->setIfExists('cable', $data ?? [], null);
        $this->setIfExists('cable_end', $data ?? [], null);
        $this->setIfExists('link_peers', $data ?? [], null);
        $this->setIfExists('link_peers_type', $data ?? [], null);
        $this->setIfExists('connected_endpoints', $data ?? [], null);
        $this->setIfExists('connected_endpoints_type', $data ?? [], null);
        $this->setIfExists('connected_endpoints_reachable', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
        $this->setIfExists('_occupied', $data ?? [], null);
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
        if ($this->container['device'] === null) {
            $invalidProperties[] = "'device' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 64)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['cable'] === null) {
            $invalidProperties[] = "'cable' can't be null";
        }
        if ($this->container['cable_end'] === null) {
            $invalidProperties[] = "'cable_end' can't be null";
        }
        if ($this->container['link_peers'] === null) {
            $invalidProperties[] = "'link_peers' can't be null";
        }
        if ($this->container['link_peers_type'] === null) {
            $invalidProperties[] = "'link_peers_type' can't be null";
        }
        if ($this->container['connected_endpoints'] === null) {
            $invalidProperties[] = "'connected_endpoints' can't be null";
        }
        if ($this->container['connected_endpoints_type'] === null) {
            $invalidProperties[] = "'connected_endpoints_type' can't be null";
        }
        if ($this->container['connected_endpoints_reachable'] === null) {
            $invalidProperties[] = "'connected_endpoints_reachable' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['last_updated'] === null) {
            $invalidProperties[] = "'last_updated' can't be null";
        }
        if ($this->container['_occupied'] === null) {
            $invalidProperties[] = "'_occupied' can't be null";
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
     * Gets device
     *
     * @return \OpenAPI\Client\Model\Device
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \OpenAPI\Client\Model\Device $device device
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
     * @return \OpenAPI\Client\Model\Module|null
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param \OpenAPI\Client\Model\Module|null $module module
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
            throw new \InvalidArgumentException('invalid length for $name when calling ConsolePort., must be smaller than or equal to 64.');
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
            throw new \InvalidArgumentException('invalid length for $label when calling ConsolePort., must be smaller than or equal to 64.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\ConsolePortType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\ConsolePortType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets speed
     *
     * @return \OpenAPI\Client\Model\ConsolePortSpeed|null
     */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
     * Sets speed
     *
     * @param \OpenAPI\Client\Model\ConsolePortSpeed|null $speed speed
     *
     * @return self
     */
    public function setSpeed($speed)
    {
        if (is_null($speed)) {
            array_push($this->openAPINullablesSetToNull, 'speed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('speed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['speed'] = $speed;

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
            throw new \InvalidArgumentException('invalid length for $description when calling ConsolePort., must be smaller than or equal to 200.');
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
     * Gets cable
     *
     * @return \OpenAPI\Client\Model\Cable
     */
    public function getCable()
    {
        return $this->container['cable'];
    }

    /**
     * Sets cable
     *
     * @param \OpenAPI\Client\Model\Cable $cable cable
     *
     * @return self
     */
    public function setCable($cable)
    {
        if (is_null($cable)) {
            array_push($this->openAPINullablesSetToNull, 'cable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cable'] = $cable;

        return $this;
    }

    /**
     * Gets cable_end
     *
     * @return string
     */
    public function getCableEnd()
    {
        return $this->container['cable_end'];
    }

    /**
     * Sets cable_end
     *
     * @param string $cable_end cable_end
     *
     * @return self
     */
    public function setCableEnd($cable_end)
    {
        if (is_null($cable_end)) {
            throw new \InvalidArgumentException('non-nullable cable_end cannot be null');
        }
        $this->container['cable_end'] = $cable_end;

        return $this;
    }

    /**
     * Gets link_peers
     *
     * @return mixed[]
     */
    public function getLinkPeers()
    {
        return $this->container['link_peers'];
    }

    /**
     * Sets link_peers
     *
     * @param mixed[] $link_peers link_peers
     *
     * @return self
     */
    public function setLinkPeers($link_peers)
    {
        if (is_null($link_peers)) {
            throw new \InvalidArgumentException('non-nullable link_peers cannot be null');
        }
        $this->container['link_peers'] = $link_peers;

        return $this;
    }

    /**
     * Gets link_peers_type
     *
     * @return string
     */
    public function getLinkPeersType()
    {
        return $this->container['link_peers_type'];
    }

    /**
     * Sets link_peers_type
     *
     * @param string $link_peers_type Return the type of the peer link terminations, or None.
     *
     * @return self
     */
    public function setLinkPeersType($link_peers_type)
    {
        if (is_null($link_peers_type)) {
            array_push($this->openAPINullablesSetToNull, 'link_peers_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('link_peers_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['link_peers_type'] = $link_peers_type;

        return $this;
    }

    /**
     * Gets connected_endpoints
     *
     * @return mixed[]
     */
    public function getConnectedEndpoints()
    {
        return $this->container['connected_endpoints'];
    }

    /**
     * Sets connected_endpoints
     *
     * @param mixed[] $connected_endpoints connected_endpoints
     *
     * @return self
     */
    public function setConnectedEndpoints($connected_endpoints)
    {
        if (is_null($connected_endpoints)) {
            array_push($this->openAPINullablesSetToNull, 'connected_endpoints');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('connected_endpoints', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['connected_endpoints'] = $connected_endpoints;

        return $this;
    }

    /**
     * Gets connected_endpoints_type
     *
     * @return string
     */
    public function getConnectedEndpointsType()
    {
        return $this->container['connected_endpoints_type'];
    }

    /**
     * Sets connected_endpoints_type
     *
     * @param string $connected_endpoints_type connected_endpoints_type
     *
     * @return self
     */
    public function setConnectedEndpointsType($connected_endpoints_type)
    {
        if (is_null($connected_endpoints_type)) {
            array_push($this->openAPINullablesSetToNull, 'connected_endpoints_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('connected_endpoints_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['connected_endpoints_type'] = $connected_endpoints_type;

        return $this;
    }

    /**
     * Gets connected_endpoints_reachable
     *
     * @return bool
     */
    public function getConnectedEndpointsReachable()
    {
        return $this->container['connected_endpoints_reachable'];
    }

    /**
     * Sets connected_endpoints_reachable
     *
     * @param bool $connected_endpoints_reachable connected_endpoints_reachable
     *
     * @return self
     */
    public function setConnectedEndpointsReachable($connected_endpoints_reachable)
    {
        if (is_null($connected_endpoints_reachable)) {
            throw new \InvalidArgumentException('non-nullable connected_endpoints_reachable cannot be null');
        }
        $this->container['connected_endpoints_reachable'] = $connected_endpoints_reachable;

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
     * Gets _occupied
     *
     * @return bool
     */
    public function getOccupied()
    {
        return $this->container['_occupied'];
    }

    /**
     * Sets _occupied
     *
     * @param bool $_occupied _occupied
     *
     * @return self
     */
    public function setOccupied($_occupied)
    {
        if (is_null($_occupied)) {
            throw new \InvalidArgumentException('non-nullable _occupied cannot be null');
        }
        $this->container['_occupied'] = $_occupied;

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


