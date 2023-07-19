<?php
/**
 * Conferencerooms
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Circuit ID REST API Documentation
 *
 * # Introduction Welcome to the documentation site for the Circuit ID REST API.<br><br>Whether you are a beginner getting started with our API or an experienced developer looking for advanced features, this documentation site will serve as your comprehensive guide.                   Here, you will find comprehensive information about the available endpoints,authentication methods, expected request and response formats, any additional parameters or headers, and an interactive platform to test and experiment with the API.  We are excited to have you on board and are confident that this documentation site will empower you to leverage the full potential of our REST API.  If you have any questions or require further assistance, please don't hesitate to reach out to our support team.                  Happy coding!
 *
 * The version of the OpenAPI document: 0.47.7
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
 * Conferencerooms Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Conferencerooms implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'conferencerooms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'mixed',
        'passcode' => 'mixed',
        'dialInPin' => 'mixed',
        'isUserRoom' => 'mixed',
        'isChatRoom' => 'mixed',
        'lobby' => 'mixed',
        'requirePasscode' => 'mixed',
        'share' => 'mixed',
        'chatroom' => 'mixed'
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
        'passcode' => null,
        'dialInPin' => 'int32',
        'isUserRoom' => null,
        'isChatRoom' => null,
        'lobby' => 'int32',
        'requirePasscode' => 'int32',
        'share' => null,
        'chatroom' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'passcode' => true,
		'dialInPin' => true,
		'isUserRoom' => true,
		'isChatRoom' => true,
		'lobby' => true,
		'requirePasscode' => true,
		'share' => true,
		'chatroom' => true
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
        'passcode' => 'passcode',
        'dialInPin' => 'dialInPin',
        'isUserRoom' => 'isUserRoom',
        'isChatRoom' => 'isChatRoom',
        'lobby' => 'lobby',
        'requirePasscode' => 'requirePasscode',
        'share' => 'share',
        'chatroom' => 'chatroom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'passcode' => 'setPasscode',
        'dialInPin' => 'setDialInPin',
        'isUserRoom' => 'setIsUserRoom',
        'isChatRoom' => 'setIsChatRoom',
        'lobby' => 'setLobby',
        'requirePasscode' => 'setRequirePasscode',
        'share' => 'setShare',
        'chatroom' => 'setChatroom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'passcode' => 'getPasscode',
        'dialInPin' => 'getDialInPin',
        'isUserRoom' => 'getIsUserRoom',
        'isChatRoom' => 'getIsChatRoom',
        'lobby' => 'getLobby',
        'requirePasscode' => 'getRequirePasscode',
        'share' => 'getShare',
        'chatroom' => 'getChatroom'
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

    public const IS_USER_ROOM_TRUE = 'true';
    public const IS_USER_ROOM_FALSE = 'false';
    public const IS_CHAT_ROOM_TRUE = 'true';
    public const IS_CHAT_ROOM_FALSE = 'false';
    public const LOBBY__1 = '1';
    public const LOBBY__0 = '0';
    public const REQUIRE_PASSCODE__1 = '1';
    public const REQUIRE_PASSCODE__0 = '0';
    public const SHARE_GROUPS = 'groups';
    public const SHARE_CUSTOMERS = 'customers';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsUserRoomAllowableValues()
    {
        return [
            self::IS_USER_ROOM_TRUE,
            self::IS_USER_ROOM_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsChatRoomAllowableValues()
    {
        return [
            self::IS_CHAT_ROOM_TRUE,
            self::IS_CHAT_ROOM_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLobbyAllowableValues()
    {
        return [
            self::LOBBY__1,
            self::LOBBY__0,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequirePasscodeAllowableValues()
    {
        return [
            self::REQUIRE_PASSCODE__1,
            self::REQUIRE_PASSCODE__0,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShareAllowableValues()
    {
        return [
            self::SHARE_GROUPS,
            self::SHARE_CUSTOMERS,
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
        $this->setIfExists('passcode', $data ?? [], null);
        $this->setIfExists('dialInPin', $data ?? [], null);
        $this->setIfExists('isUserRoom', $data ?? [], null);
        $this->setIfExists('isChatRoom', $data ?? [], null);
        $this->setIfExists('lobby', $data ?? [], null);
        $this->setIfExists('requirePasscode', $data ?? [], null);
        $this->setIfExists('share', $data ?? [], null);
        $this->setIfExists('chatroom', $data ?? [], null);
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

        if (!is_null($this->container['passcode']) && (mb_strlen($this->container['passcode']) > 20)) {
            $invalidProperties[] = "invalid value for 'passcode', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['passcode']) && (mb_strlen($this->container['passcode']) < 6)) {
            $invalidProperties[] = "invalid value for 'passcode', the character length must be bigger than or equal to 6.";
        }

        $allowedValues = $this->getIsUserRoomAllowableValues();
        if (!is_null($this->container['isUserRoom']) && !in_array($this->container['isUserRoom'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'isUserRoom', must be one of '%s'",
                $this->container['isUserRoom'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIsChatRoomAllowableValues();
        if (!is_null($this->container['isChatRoom']) && !in_array($this->container['isChatRoom'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'isChatRoom', must be one of '%s'",
                $this->container['isChatRoom'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLobbyAllowableValues();
        if (!is_null($this->container['lobby']) && !in_array($this->container['lobby'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'lobby', must be one of '%s'",
                $this->container['lobby'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRequirePasscodeAllowableValues();
        if (!is_null($this->container['requirePasscode']) && !in_array($this->container['requirePasscode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'requirePasscode', must be one of '%s'",
                $this->container['requirePasscode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShareAllowableValues();
        if (!is_null($this->container['share']) && !in_array($this->container['share'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'share', must be one of '%s'",
                $this->container['share'],
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
            throw new \InvalidArgumentException('invalid length for $name when calling Conferencerooms., must be smaller than or equal to 45.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets passcode
     *
     * @return mixed|null
     */
    public function getPasscode()
    {
        return $this->container['passcode'];
    }

    /**
     * Sets passcode
     *
     * @param mixed|null $passcode passcode
     *
     * @return self
     */
    public function setPasscode($passcode)
    {
        if (is_null($passcode)) {
            array_push($this->openAPINullablesSetToNull, 'passcode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('passcode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($passcode) && (mb_strlen($passcode) > 20)) {
            throw new \InvalidArgumentException('invalid length for $passcode when calling Conferencerooms., must be smaller than or equal to 20.');
        }
        if (!is_null($passcode) && (mb_strlen($passcode) < 6)) {
            throw new \InvalidArgumentException('invalid length for $passcode when calling Conferencerooms., must be bigger than or equal to 6.');
        }

        $this->container['passcode'] = $passcode;

        return $this;
    }

    /**
     * Gets dialInPin
     *
     * @return mixed|null
     */
    public function getDialInPin()
    {
        return $this->container['dialInPin'];
    }

    /**
     * Sets dialInPin
     *
     * @param mixed|null $dialInPin dialInPin
     *
     * @return self
     */
    public function setDialInPin($dialInPin)
    {
        if (is_null($dialInPin)) {
            array_push($this->openAPINullablesSetToNull, 'dialInPin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dialInPin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dialInPin'] = $dialInPin;

        return $this;
    }

    /**
     * Gets isUserRoom
     *
     * @return mixed|null
     */
    public function getIsUserRoom()
    {
        return $this->container['isUserRoom'];
    }

    /**
     * Sets isUserRoom
     *
     * @param mixed|null $isUserRoom isUserRoom
     *
     * @return self
     */
    public function setIsUserRoom($isUserRoom)
    {
        if (is_null($isUserRoom)) {
            array_push($this->openAPINullablesSetToNull, 'isUserRoom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('isUserRoom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getIsUserRoomAllowableValues();
        if (!is_null($isUserRoom) && !in_array($isUserRoom, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'isUserRoom', must be one of '%s'",
                    $isUserRoom,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['isUserRoom'] = $isUserRoom;

        return $this;
    }

    /**
     * Gets isChatRoom
     *
     * @return mixed|null
     */
    public function getIsChatRoom()
    {
        return $this->container['isChatRoom'];
    }

    /**
     * Sets isChatRoom
     *
     * @param mixed|null $isChatRoom isChatRoom
     *
     * @return self
     */
    public function setIsChatRoom($isChatRoom)
    {
        if (is_null($isChatRoom)) {
            array_push($this->openAPINullablesSetToNull, 'isChatRoom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('isChatRoom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getIsChatRoomAllowableValues();
        if (!is_null($isChatRoom) && !in_array($isChatRoom, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'isChatRoom', must be one of '%s'",
                    $isChatRoom,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['isChatRoom'] = $isChatRoom;

        return $this;
    }

    /**
     * Gets lobby
     *
     * @return mixed|null
     */
    public function getLobby()
    {
        return $this->container['lobby'];
    }

    /**
     * Sets lobby
     *
     * @param mixed|null $lobby lobby
     *
     * @return self
     */
    public function setLobby($lobby)
    {
        if (is_null($lobby)) {
            array_push($this->openAPINullablesSetToNull, 'lobby');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lobby', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getLobbyAllowableValues();
        if (!is_null($lobby) && !in_array($lobby, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'lobby', must be one of '%s'",
                    $lobby,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['lobby'] = $lobby;

        return $this;
    }

    /**
     * Gets requirePasscode
     *
     * @return mixed|null
     */
    public function getRequirePasscode()
    {
        return $this->container['requirePasscode'];
    }

    /**
     * Sets requirePasscode
     *
     * @param mixed|null $requirePasscode requirePasscode
     *
     * @return self
     */
    public function setRequirePasscode($requirePasscode)
    {
        if (is_null($requirePasscode)) {
            array_push($this->openAPINullablesSetToNull, 'requirePasscode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('requirePasscode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getRequirePasscodeAllowableValues();
        if (!is_null($requirePasscode) && !in_array($requirePasscode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'requirePasscode', must be one of '%s'",
                    $requirePasscode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requirePasscode'] = $requirePasscode;

        return $this;
    }

    /**
     * Gets share
     *
     * @return mixed|null
     */
    public function getShare()
    {
        return $this->container['share'];
    }

    /**
     * Sets share
     *
     * @param mixed|null $share share
     *
     * @return self
     */
    public function setShare($share)
    {
        if (is_null($share)) {
            array_push($this->openAPINullablesSetToNull, 'share');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('share', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getShareAllowableValues();
        if (!is_null($share) && !in_array($share, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'share', must be one of '%s'",
                    $share,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['share'] = $share;

        return $this;
    }

    /**
     * Gets chatroom
     *
     * @return mixed|null
     */
    public function getChatroom()
    {
        return $this->container['chatroom'];
    }

    /**
     * Sets chatroom
     *
     * @param mixed|null $chatroom ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setChatroom($chatroom)
    {
        if (is_null($chatroom)) {
            array_push($this->openAPINullablesSetToNull, 'chatroom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('chatroom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['chatroom'] = $chatroom;

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


