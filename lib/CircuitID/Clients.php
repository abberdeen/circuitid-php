<?php
/**
 * Clients
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
 * The version of the OpenAPI document: 0.47.16
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
 * Clients Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Clients implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'clients';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'mixed',
        'user' => 'mixed',
        'mac' => 'mixed',
        'httpUserAgent' => 'mixed',
        'manufacture' => 'mixed',
        'status' => 'mixed'
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
        'user' => null,
        'mac' => null,
        'httpUserAgent' => null,
        'manufacture' => null,
        'status' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'user' => true,
		'mac' => true,
		'httpUserAgent' => true,
		'manufacture' => true,
		'status' => true
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
        'user' => 'user',
        'mac' => 'mac',
        'httpUserAgent' => 'httpUserAgent',
        'manufacture' => 'manufacture',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'user' => 'setUser',
        'mac' => 'setMac',
        'httpUserAgent' => 'setHttpUserAgent',
        'manufacture' => 'setManufacture',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'user' => 'getUser',
        'mac' => 'getMac',
        'httpUserAgent' => 'getHttpUserAgent',
        'manufacture' => 'getManufacture',
        'status' => 'getStatus'
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

    public const MANUFACTURE_CISCO = 'cisco';
    public const MANUFACTURE_GRANDSTREAM = 'grandstream';
    public const MANUFACTURE_POLYCOM = 'polycom';
    public const STATUS__1 = '1';
    public const STATUS__0 = '0';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getManufactureAllowableValues()
    {
        return [
            self::MANUFACTURE_CISCO,
            self::MANUFACTURE_GRANDSTREAM,
            self::MANUFACTURE_POLYCOM,
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
            self::STATUS__1,
            self::STATUS__0,
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
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('mac', $data ?? [], null);
        $this->setIfExists('httpUserAgent', $data ?? [], null);
        $this->setIfExists('manufacture', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['mac'] === null) {
            $invalidProperties[] = "'mac' can't be null";
        }
        if ((mb_strlen($this->container['mac']) > 45)) {
            $invalidProperties[] = "invalid value for 'mac', the character length must be smaller than or equal to 45.";
        }

        if ((mb_strlen($this->container['mac']) < 5)) {
            $invalidProperties[] = "invalid value for 'mac', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['httpUserAgent']) && (mb_strlen($this->container['httpUserAgent']) > 45)) {
            $invalidProperties[] = "invalid value for 'httpUserAgent', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['httpUserAgent']) && (mb_strlen($this->container['httpUserAgent']) < 1)) {
            $invalidProperties[] = "invalid value for 'httpUserAgent', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getManufactureAllowableValues();
        if (!is_null($this->container['manufacture']) && !in_array($this->container['manufacture'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'manufacture', must be one of '%s'",
                $this->container['manufacture'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['manufacture']) && (mb_strlen($this->container['manufacture']) > 20)) {
            $invalidProperties[] = "invalid value for 'manufacture', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['manufacture']) && (mb_strlen($this->container['manufacture']) < 4)) {
            $invalidProperties[] = "invalid value for 'manufacture', the character length must be bigger than or equal to 4.";
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
            throw new \InvalidArgumentException('invalid length for $name when calling Clients., must be smaller than or equal to 45.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets user
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param mixed $user ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setUser($user)
    {
        if (is_null($user)) {
            array_push($this->openAPINullablesSetToNull, 'user');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets mac
     *
     * @return mixed
     */
    public function getMac()
    {
        return $this->container['mac'];
    }

    /**
     * Sets mac
     *
     * @param mixed $mac mac
     *
     * @return self
     */
    public function setMac($mac)
    {
        if (is_null($mac)) {
            array_push($this->openAPINullablesSetToNull, 'mac');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mac', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($mac) && (mb_strlen($mac) > 45)) {
            throw new \InvalidArgumentException('invalid length for $mac when calling Clients., must be smaller than or equal to 45.');
        }
        if (!is_null($mac) && (mb_strlen($mac) < 5)) {
            throw new \InvalidArgumentException('invalid length for $mac when calling Clients., must be bigger than or equal to 5.');
        }

        $this->container['mac'] = $mac;

        return $this;
    }

    /**
     * Gets httpUserAgent
     *
     * @return mixed|null
     */
    public function getHttpUserAgent()
    {
        return $this->container['httpUserAgent'];
    }

    /**
     * Sets httpUserAgent
     *
     * @param mixed|null $httpUserAgent httpUserAgent
     *
     * @return self
     */
    public function setHttpUserAgent($httpUserAgent)
    {
        if (is_null($httpUserAgent)) {
            array_push($this->openAPINullablesSetToNull, 'httpUserAgent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('httpUserAgent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($httpUserAgent) && (mb_strlen($httpUserAgent) > 45)) {
            throw new \InvalidArgumentException('invalid length for $httpUserAgent when calling Clients., must be smaller than or equal to 45.');
        }
        if (!is_null($httpUserAgent) && (mb_strlen($httpUserAgent) < 1)) {
            throw new \InvalidArgumentException('invalid length for $httpUserAgent when calling Clients., must be bigger than or equal to 1.');
        }

        $this->container['httpUserAgent'] = $httpUserAgent;

        return $this;
    }

    /**
     * Gets manufacture
     *
     * @return mixed|null
     */
    public function getManufacture()
    {
        return $this->container['manufacture'];
    }

    /**
     * Sets manufacture
     *
     * @param mixed|null $manufacture manufacture
     *
     * @return self
     */
    public function setManufacture($manufacture)
    {
        if (is_null($manufacture)) {
            array_push($this->openAPINullablesSetToNull, 'manufacture');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('manufacture', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getManufactureAllowableValues();
        if (!is_null($manufacture) && !in_array($manufacture, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'manufacture', must be one of '%s'",
                    $manufacture,
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($manufacture) && (mb_strlen($manufacture) > 20)) {
            throw new \InvalidArgumentException('invalid length for $manufacture when calling Clients., must be smaller than or equal to 20.');
        }
        if (!is_null($manufacture) && (mb_strlen($manufacture) < 4)) {
            throw new \InvalidArgumentException('invalid length for $manufacture when calling Clients., must be bigger than or equal to 4.');
        }

        $this->container['manufacture'] = $manufacture;

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


