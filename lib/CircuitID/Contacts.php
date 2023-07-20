<?php
/**
 * Contacts
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
 * Contacts Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Contacts implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'contacts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'mixed',
        'first' => 'mixed',
        'last' => 'mixed',
        'mobilePhone' => 'mixed',
        'businessPhone' => 'mixed',
        'faxPhone' => 'mixed',
        'extension' => 'mixed',
        'jobTitle' => 'mixed',
        'department' => 'mixed',
        'avatar' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => null,
        'first' => null,
        'last' => null,
        'mobilePhone' => null,
        'businessPhone' => null,
        'faxPhone' => null,
        'extension' => 'int32',
        'jobTitle' => null,
        'department' => null,
        'avatar' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email' => true,
		'first' => true,
		'last' => true,
		'mobilePhone' => true,
		'businessPhone' => true,
		'faxPhone' => true,
		'extension' => true,
		'jobTitle' => true,
		'department' => true,
		'avatar' => true
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
        'email' => 'email',
        'first' => 'first',
        'last' => 'last',
        'mobilePhone' => 'mobilePhone',
        'businessPhone' => 'businessPhone',
        'faxPhone' => 'faxPhone',
        'extension' => 'extension',
        'jobTitle' => 'jobTitle',
        'department' => 'department',
        'avatar' => 'avatar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'first' => 'setFirst',
        'last' => 'setLast',
        'mobilePhone' => 'setMobilePhone',
        'businessPhone' => 'setBusinessPhone',
        'faxPhone' => 'setFaxPhone',
        'extension' => 'setExtension',
        'jobTitle' => 'setJobTitle',
        'department' => 'setDepartment',
        'avatar' => 'setAvatar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'first' => 'getFirst',
        'last' => 'getLast',
        'mobilePhone' => 'getMobilePhone',
        'businessPhone' => 'getBusinessPhone',
        'faxPhone' => 'getFaxPhone',
        'extension' => 'getExtension',
        'jobTitle' => 'getJobTitle',
        'department' => 'getDepartment',
        'avatar' => 'getAvatar'
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('first', $data ?? [], null);
        $this->setIfExists('last', $data ?? [], null);
        $this->setIfExists('mobilePhone', $data ?? [], null);
        $this->setIfExists('businessPhone', $data ?? [], null);
        $this->setIfExists('faxPhone', $data ?? [], null);
        $this->setIfExists('extension', $data ?? [], null);
        $this->setIfExists('jobTitle', $data ?? [], null);
        $this->setIfExists('department', $data ?? [], null);
        $this->setIfExists('avatar', $data ?? [], null);
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

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 45)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 45.";
        }

        if ($this->container['first'] === null) {
            $invalidProperties[] = "'first' can't be null";
        }
        if ((mb_strlen($this->container['first']) > 45)) {
            $invalidProperties[] = "invalid value for 'first', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['last']) && (mb_strlen($this->container['last']) > 45)) {
            $invalidProperties[] = "invalid value for 'last', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['mobilePhone']) && (mb_strlen($this->container['mobilePhone']) > 20)) {
            $invalidProperties[] = "invalid value for 'mobilePhone', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['businessPhone']) && (mb_strlen($this->container['businessPhone']) > 20)) {
            $invalidProperties[] = "invalid value for 'businessPhone', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['faxPhone']) && (mb_strlen($this->container['faxPhone']) > 20)) {
            $invalidProperties[] = "invalid value for 'faxPhone', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['jobTitle']) && (mb_strlen($this->container['jobTitle']) > 45)) {
            $invalidProperties[] = "invalid value for 'jobTitle', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['department']) && (mb_strlen($this->container['department']) > 45)) {
            $invalidProperties[] = "invalid value for 'department', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['avatar']) && (mb_strlen($this->container['avatar']) > 255)) {
            $invalidProperties[] = "invalid value for 'avatar', the character length must be smaller than or equal to 255.";
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
     * Gets email
     *
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param mixed|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($email) && (mb_strlen($email) > 45)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Contacts., must be smaller than or equal to 45.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first
     *
     * @return mixed
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     *
     * @param mixed $first first
     *
     * @return self
     */
    public function setFirst($first)
    {
        if (is_null($first)) {
            array_push($this->openAPINullablesSetToNull, 'first');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($first) && (mb_strlen($first) > 45)) {
            throw new \InvalidArgumentException('invalid length for $first when calling Contacts., must be smaller than or equal to 45.');
        }

        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets last
     *
     * @return mixed|null
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     *
     * @param mixed|null $last last
     *
     * @return self
     */
    public function setLast($last)
    {
        if (is_null($last)) {
            array_push($this->openAPINullablesSetToNull, 'last');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($last) && (mb_strlen($last) > 45)) {
            throw new \InvalidArgumentException('invalid length for $last when calling Contacts., must be smaller than or equal to 45.');
        }

        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets mobilePhone
     *
     * @return mixed|null
     */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
     * Sets mobilePhone
     *
     * @param mixed|null $mobilePhone mobilePhone
     *
     * @return self
     */
    public function setMobilePhone($mobilePhone)
    {
        if (is_null($mobilePhone)) {
            array_push($this->openAPINullablesSetToNull, 'mobilePhone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mobilePhone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($mobilePhone) && (mb_strlen($mobilePhone) > 20)) {
            throw new \InvalidArgumentException('invalid length for $mobilePhone when calling Contacts., must be smaller than or equal to 20.');
        }

        $this->container['mobilePhone'] = $mobilePhone;

        return $this;
    }

    /**
     * Gets businessPhone
     *
     * @return mixed|null
     */
    public function getBusinessPhone()
    {
        return $this->container['businessPhone'];
    }

    /**
     * Sets businessPhone
     *
     * @param mixed|null $businessPhone businessPhone
     *
     * @return self
     */
    public function setBusinessPhone($businessPhone)
    {
        if (is_null($businessPhone)) {
            array_push($this->openAPINullablesSetToNull, 'businessPhone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('businessPhone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($businessPhone) && (mb_strlen($businessPhone) > 20)) {
            throw new \InvalidArgumentException('invalid length for $businessPhone when calling Contacts., must be smaller than or equal to 20.');
        }

        $this->container['businessPhone'] = $businessPhone;

        return $this;
    }

    /**
     * Gets faxPhone
     *
     * @return mixed|null
     */
    public function getFaxPhone()
    {
        return $this->container['faxPhone'];
    }

    /**
     * Sets faxPhone
     *
     * @param mixed|null $faxPhone faxPhone
     *
     * @return self
     */
    public function setFaxPhone($faxPhone)
    {
        if (is_null($faxPhone)) {
            array_push($this->openAPINullablesSetToNull, 'faxPhone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('faxPhone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($faxPhone) && (mb_strlen($faxPhone) > 20)) {
            throw new \InvalidArgumentException('invalid length for $faxPhone when calling Contacts., must be smaller than or equal to 20.');
        }

        $this->container['faxPhone'] = $faxPhone;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return mixed|null
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param mixed|null $extension extension
     *
     * @return self
     */
    public function setExtension($extension)
    {
        if (is_null($extension)) {
            array_push($this->openAPINullablesSetToNull, 'extension');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extension', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets jobTitle
     *
     * @return mixed|null
     */
    public function getJobTitle()
    {
        return $this->container['jobTitle'];
    }

    /**
     * Sets jobTitle
     *
     * @param mixed|null $jobTitle jobTitle
     *
     * @return self
     */
    public function setJobTitle($jobTitle)
    {
        if (is_null($jobTitle)) {
            array_push($this->openAPINullablesSetToNull, 'jobTitle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('jobTitle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($jobTitle) && (mb_strlen($jobTitle) > 45)) {
            throw new \InvalidArgumentException('invalid length for $jobTitle when calling Contacts., must be smaller than or equal to 45.');
        }

        $this->container['jobTitle'] = $jobTitle;

        return $this;
    }

    /**
     * Gets department
     *
     * @return mixed|null
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param mixed|null $department department
     *
     * @return self
     */
    public function setDepartment($department)
    {
        if (is_null($department)) {
            array_push($this->openAPINullablesSetToNull, 'department');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('department', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($department) && (mb_strlen($department) > 45)) {
            throw new \InvalidArgumentException('invalid length for $department when calling Contacts., must be smaller than or equal to 45.');
        }

        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return mixed|null
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param mixed|null $avatar avatar
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        if (is_null($avatar)) {
            array_push($this->openAPINullablesSetToNull, 'avatar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('avatar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($avatar) && (mb_strlen($avatar) > 255)) {
            throw new \InvalidArgumentException('invalid length for $avatar when calling Contacts., must be smaller than or equal to 255.');
        }

        $this->container['avatar'] = $avatar;

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

