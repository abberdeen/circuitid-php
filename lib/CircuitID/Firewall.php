<?php
/**
 * Firewall
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Circuit ID REST API
 *
 * # Introduction Circuit ID&reg; is an innovative cloud communications platform that redefines your connectivity experience. Our cutting-edge AI-powered solution seamlessly integrates calling, meetings, messaging, voicemail, fax, SIP Trunking, mobile broadband, and mobile phone services, accessible wherever you and your devices go.                  Whether you are a beginner getting started with our API or an experienced developer looking for advanced features, this documentation site will serve as your comprehensive guide.   We are excited to have you on board and are confident that this documentation site will empower you to leverage the full potential of our REST API.  If you have any questions or require further assistance, please don't hesitate to reach out to our support team.                  Happy coding!
 *
 * The version of the OpenAPI document: 0.47.8
 * Contact: support@circuitid.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\CircuitID;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Firewall Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Firewall implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'firewall';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'mixed',
        'description' => 'mixed',
        'priority' => 'mixed',
        'type' => 'mixed',
        'target' => 'mixed',
        'direction' => 'mixed',
        'param' => 'mixed',
        'hits' => 'mixed',
        'ai' => 'mixed',
        'status' => 'mixed',
        'notificationHits' => 'mixed'
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
        'priority' => 'int32',
        'type' => null,
        'target' => null,
        'direction' => null,
        'param' => null,
        'hits' => 'int32',
        'ai' => 'int32',
        'status' => 'int32',
        'notificationHits' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'description' => true,
		'priority' => true,
		'type' => true,
		'target' => true,
		'direction' => true,
		'param' => true,
		'hits' => true,
		'ai' => true,
		'status' => true,
		'notificationHits' => true
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
        'priority' => 'priority',
        'type' => 'type',
        'target' => 'target',
        'direction' => 'direction',
        'param' => 'param',
        'hits' => 'hits',
        'ai' => 'ai',
        'status' => 'status',
        'notificationHits' => 'notificationHits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'priority' => 'setPriority',
        'type' => 'setType',
        'target' => 'setTarget',
        'direction' => 'setDirection',
        'param' => 'setParam',
        'hits' => 'setHits',
        'ai' => 'setAi',
        'status' => 'setStatus',
        'notificationHits' => 'setNotificationHits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'priority' => 'getPriority',
        'type' => 'getType',
        'target' => 'getTarget',
        'direction' => 'getDirection',
        'param' => 'getParam',
        'hits' => 'getHits',
        'ai' => 'getAi',
        'status' => 'getStatus',
        'notificationHits' => 'getNotificationHits'
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

    public const TYPE_ALLOW = 'allow';
    public const TYPE_DENY = 'deny';
    public const TARGET_NUMBERS = 'numbers';
    public const TARGET_IPADDRESSES = 'ipaddresses';
    public const TARGET_SMS = 'sms';
    public const DIRECTION_INBOUND = 'inbound';
    public const DIRECTION_OUTBOUND = 'outbound';
    public const DIRECTION_BOTH = 'both';
    public const AI__0 = '0';
    public const AI__1 = '1';
    public const STATUS__0 = '0';
    public const STATUS__1 = '1';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ALLOW,
            self::TYPE_DENY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTargetAllowableValues()
    {
        return [
            self::TARGET_NUMBERS,
            self::TARGET_IPADDRESSES,
            self::TARGET_SMS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_INBOUND,
            self::DIRECTION_OUTBOUND,
            self::DIRECTION_BOTH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAiAllowableValues()
    {
        return [
            self::AI__0,
            self::AI__1,
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
            self::STATUS__0,
            self::STATUS__1,
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
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('target', $data ?? [], null);
        $this->setIfExists('direction', $data ?? [], null);
        $this->setIfExists('param', $data ?? [], null);
        $this->setIfExists('hits', $data ?? [], null);
        $this->setIfExists('ai', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('notificationHits', $data ?? [], null);
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
        if ((mb_strlen($this->container['name']) > 45)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        $allowedValues = $this->getTargetAllowableValues();
        if (!is_null($this->container['target']) && !in_array($this->container['target'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'target', must be one of '%s'",
                $this->container['target'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'direction', must be one of '%s'",
                $this->container['direction'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['param'] === null) {
            $invalidProperties[] = "'param' can't be null";
        }
        if ((mb_strlen($this->container['param']) > 45)) {
            $invalidProperties[] = "invalid value for 'param', the character length must be smaller than or equal to 45.";
        }

        if ((mb_strlen($this->container['param']) < 1)) {
            $invalidProperties[] = "invalid value for 'param', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getAiAllowableValues();
        if (!is_null($this->container['ai']) && !in_array($this->container['ai'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ai', must be one of '%s'",
                $this->container['ai'],
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
     * @return mixed
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param mixed $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($name) && (mb_strlen($name) > 45)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Firewall., must be smaller than or equal to 45.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param mixed|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($description) && (mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Firewall., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return mixed
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param mixed $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            array_push($this->openAPINullablesSetToNull, 'priority');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('priority', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets type
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param mixed $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
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
     * Gets target
     *
     * @return mixed
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param mixed $target target
     *
     * @return self
     */
    public function setTarget($target)
    {
        if (is_null($target)) {
            array_push($this->openAPINullablesSetToNull, 'target');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('target', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getTargetAllowableValues();
        if (!is_null($target) && !in_array($target, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'target', must be one of '%s'",
                    $target,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return mixed|null
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param mixed|null $direction direction
     *
     * @return self
     */
    public function setDirection($direction)
    {
        if (is_null($direction)) {
            array_push($this->openAPINullablesSetToNull, 'direction');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('direction', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($direction) && !in_array($direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'direction', must be one of '%s'",
                    $direction,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets param
     *
     * @return mixed
     */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
     * Sets param
     *
     * @param mixed $param param
     *
     * @return self
     */
    public function setParam($param)
    {
        if (is_null($param)) {
            array_push($this->openAPINullablesSetToNull, 'param');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('param', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($param) && (mb_strlen($param) > 45)) {
            throw new \InvalidArgumentException('invalid length for $param when calling Firewall., must be smaller than or equal to 45.');
        }
        if (!is_null($param) && (mb_strlen($param) < 1)) {
            throw new \InvalidArgumentException('invalid length for $param when calling Firewall., must be bigger than or equal to 1.');
        }

        $this->container['param'] = $param;

        return $this;
    }

    /**
     * Gets hits
     *
     * @return mixed|null
     */
    public function getHits()
    {
        return $this->container['hits'];
    }

    /**
     * Sets hits
     *
     * @param mixed|null $hits hits
     *
     * @return self
     */
    public function setHits($hits)
    {
        if (is_null($hits)) {
            array_push($this->openAPINullablesSetToNull, 'hits');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hits', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hits'] = $hits;

        return $this;
    }

    /**
     * Gets ai
     *
     * @return mixed|null
     */
    public function getAi()
    {
        return $this->container['ai'];
    }

    /**
     * Sets ai
     *
     * @param mixed|null $ai ai
     *
     * @return self
     */
    public function setAi($ai)
    {
        if (is_null($ai)) {
            array_push($this->openAPINullablesSetToNull, 'ai');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ai', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getAiAllowableValues();
        if (!is_null($ai) && !in_array($ai, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ai', must be one of '%s'",
                    $ai,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ai'] = $ai;

        return $this;
    }

    /**
     * Gets status
     *
     * @return mixed|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param mixed|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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
     * Gets notificationHits
     *
     * @return mixed|null
     */
    public function getNotificationHits()
    {
        return $this->container['notificationHits'];
    }

    /**
     * Sets notificationHits
     *
     * @param mixed|null $notificationHits notificationHits
     *
     * @return self
     */
    public function setNotificationHits($notificationHits)
    {
        if (is_null($notificationHits)) {
            array_push($this->openAPINullablesSetToNull, 'notificationHits');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('notificationHits', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['notificationHits'] = $notificationHits;

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


