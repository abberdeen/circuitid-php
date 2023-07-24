<?php
/**
 * Messagebrands
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
 * The version of the OpenAPI document: 0.47.15
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
 * Messagebrands Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Messagebrands implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'messagebrands';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'mixed',
        'brandId' => 'mixed',
        'ein' => 'mixed',
        'user' => 'mixed',
        'order' => 'mixed',
        'status' => 'mixed',
        'brandRelationship' => 'mixed',
        'vertical' => 'mixed',
        'entityType' => 'mixed',
        'cspId' => 'mixed',
        'einIssuingCountry' => 'mixed',
        'universalEin' => 'mixed',
        'referenceId' => 'mixed'
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
        'brandId' => null,
        'ein' => null,
        'user' => null,
        'order' => null,
        'status' => null,
        'brandRelationship' => null,
        'vertical' => null,
        'entityType' => null,
        'cspId' => null,
        'einIssuingCountry' => null,
        'universalEin' => null,
        'referenceId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'brandId' => true,
		'ein' => true,
		'user' => true,
		'order' => true,
		'status' => true,
		'brandRelationship' => true,
		'vertical' => true,
		'entityType' => true,
		'cspId' => true,
		'einIssuingCountry' => true,
		'universalEin' => true,
		'referenceId' => true
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
        'brandId' => 'brandId',
        'ein' => 'ein',
        'user' => 'user',
        'order' => 'order',
        'status' => 'status',
        'brandRelationship' => 'brandRelationship',
        'vertical' => 'vertical',
        'entityType' => 'entityType',
        'cspId' => 'cspId',
        'einIssuingCountry' => 'einIssuingCountry',
        'universalEin' => 'universalEin',
        'referenceId' => 'referenceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'brandId' => 'setBrandId',
        'ein' => 'setEin',
        'user' => 'setUser',
        'order' => 'setOrder',
        'status' => 'setStatus',
        'brandRelationship' => 'setBrandRelationship',
        'vertical' => 'setVertical',
        'entityType' => 'setEntityType',
        'cspId' => 'setCspId',
        'einIssuingCountry' => 'setEinIssuingCountry',
        'universalEin' => 'setUniversalEin',
        'referenceId' => 'setReferenceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'brandId' => 'getBrandId',
        'ein' => 'getEin',
        'user' => 'getUser',
        'order' => 'getOrder',
        'status' => 'getStatus',
        'brandRelationship' => 'getBrandRelationship',
        'vertical' => 'getVertical',
        'entityType' => 'getEntityType',
        'cspId' => 'getCspId',
        'einIssuingCountry' => 'getEinIssuingCountry',
        'universalEin' => 'getUniversalEin',
        'referenceId' => 'getReferenceId'
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

    public const STATUS_VERIFIED = 'verified';
    public const STATUS_UNVERIFIED = 'unverified';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_VERIFIED,
            self::STATUS_UNVERIFIED,
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
        $this->setIfExists('brandId', $data ?? [], null);
        $this->setIfExists('ein', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('brandRelationship', $data ?? [], null);
        $this->setIfExists('vertical', $data ?? [], null);
        $this->setIfExists('entityType', $data ?? [], null);
        $this->setIfExists('cspId', $data ?? [], null);
        $this->setIfExists('einIssuingCountry', $data ?? [], null);
        $this->setIfExists('universalEin', $data ?? [], null);
        $this->setIfExists('referenceId', $data ?? [], null);
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

        if (!is_null($this->container['brandId']) && (mb_strlen($this->container['brandId']) > 45)) {
            $invalidProperties[] = "invalid value for 'brandId', the character length must be smaller than or equal to 45.";
        }

        if ($this->container['ein'] === null) {
            $invalidProperties[] = "'ein' can't be null";
        }
        if ((mb_strlen($this->container['ein']) > 20)) {
            $invalidProperties[] = "invalid value for 'ein', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['brandRelationship']) && (mb_strlen($this->container['brandRelationship']) > 45)) {
            $invalidProperties[] = "invalid value for 'brandRelationship', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['vertical']) && (mb_strlen($this->container['vertical']) > 45)) {
            $invalidProperties[] = "invalid value for 'vertical', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['entityType']) && (mb_strlen($this->container['entityType']) > 45)) {
            $invalidProperties[] = "invalid value for 'entityType', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['cspId']) && (mb_strlen($this->container['cspId']) > 45)) {
            $invalidProperties[] = "invalid value for 'cspId', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['einIssuingCountry']) && (mb_strlen($this->container['einIssuingCountry']) > 2)) {
            $invalidProperties[] = "invalid value for 'einIssuingCountry', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['universalEin']) && (mb_strlen($this->container['universalEin']) > 45)) {
            $invalidProperties[] = "invalid value for 'universalEin', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['referenceId']) && (mb_strlen($this->container['referenceId']) > 45)) {
            $invalidProperties[] = "invalid value for 'referenceId', the character length must be smaller than or equal to 45.";
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
            throw new \InvalidArgumentException('invalid length for $name when calling Messagebrands., must be smaller than or equal to 45.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets brandId
     *
     * @return mixed|null
     */
    public function getBrandId()
    {
        return $this->container['brandId'];
    }

    /**
     * Sets brandId
     *
     * @param mixed|null $brandId brandId
     *
     * @return self
     */
    public function setBrandId($brandId)
    {
        if (is_null($brandId)) {
            array_push($this->openAPINullablesSetToNull, 'brandId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brandId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($brandId) && (mb_strlen($brandId) > 45)) {
            throw new \InvalidArgumentException('invalid length for $brandId when calling Messagebrands., must be smaller than or equal to 45.');
        }

        $this->container['brandId'] = $brandId;

        return $this;
    }

    /**
     * Gets ein
     *
     * @return mixed
     */
    public function getEin()
    {
        return $this->container['ein'];
    }

    /**
     * Sets ein
     *
     * @param mixed $ein ein
     *
     * @return self
     */
    public function setEin($ein)
    {
        if (is_null($ein)) {
            array_push($this->openAPINullablesSetToNull, 'ein');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ein', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($ein) && (mb_strlen($ein) > 20)) {
            throw new \InvalidArgumentException('invalid length for $ein when calling Messagebrands., must be smaller than or equal to 20.');
        }

        $this->container['ein'] = $ein;

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
     * Gets order
     *
     * @return mixed
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param mixed $order ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            array_push($this->openAPINullablesSetToNull, 'order');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['order'] = $order;

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
     * Gets brandRelationship
     *
     * @return mixed|null
     */
    public function getBrandRelationship()
    {
        return $this->container['brandRelationship'];
    }

    /**
     * Sets brandRelationship
     *
     * @param mixed|null $brandRelationship brandRelationship
     *
     * @return self
     */
    public function setBrandRelationship($brandRelationship)
    {
        if (is_null($brandRelationship)) {
            array_push($this->openAPINullablesSetToNull, 'brandRelationship');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brandRelationship', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($brandRelationship) && (mb_strlen($brandRelationship) > 45)) {
            throw new \InvalidArgumentException('invalid length for $brandRelationship when calling Messagebrands., must be smaller than or equal to 45.');
        }

        $this->container['brandRelationship'] = $brandRelationship;

        return $this;
    }

    /**
     * Gets vertical
     *
     * @return mixed|null
     */
    public function getVertical()
    {
        return $this->container['vertical'];
    }

    /**
     * Sets vertical
     *
     * @param mixed|null $vertical vertical
     *
     * @return self
     */
    public function setVertical($vertical)
    {
        if (is_null($vertical)) {
            array_push($this->openAPINullablesSetToNull, 'vertical');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vertical', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($vertical) && (mb_strlen($vertical) > 45)) {
            throw new \InvalidArgumentException('invalid length for $vertical when calling Messagebrands., must be smaller than or equal to 45.');
        }

        $this->container['vertical'] = $vertical;

        return $this;
    }

    /**
     * Gets entityType
     *
     * @return mixed|null
     */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
     * Sets entityType
     *
     * @param mixed|null $entityType entityType
     *
     * @return self
     */
    public function setEntityType($entityType)
    {
        if (is_null($entityType)) {
            array_push($this->openAPINullablesSetToNull, 'entityType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entityType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($entityType) && (mb_strlen($entityType) > 45)) {
            throw new \InvalidArgumentException('invalid length for $entityType when calling Messagebrands., must be smaller than or equal to 45.');
        }

        $this->container['entityType'] = $entityType;

        return $this;
    }

    /**
     * Gets cspId
     *
     * @return mixed|null
     */
    public function getCspId()
    {
        return $this->container['cspId'];
    }

    /**
     * Sets cspId
     *
     * @param mixed|null $cspId cspId
     *
     * @return self
     */
    public function setCspId($cspId)
    {
        if (is_null($cspId)) {
            array_push($this->openAPINullablesSetToNull, 'cspId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cspId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($cspId) && (mb_strlen($cspId) > 45)) {
            throw new \InvalidArgumentException('invalid length for $cspId when calling Messagebrands., must be smaller than or equal to 45.');
        }

        $this->container['cspId'] = $cspId;

        return $this;
    }

    /**
     * Gets einIssuingCountry
     *
     * @return mixed|null
     */
    public function getEinIssuingCountry()
    {
        return $this->container['einIssuingCountry'];
    }

    /**
     * Sets einIssuingCountry
     *
     * @param mixed|null $einIssuingCountry einIssuingCountry
     *
     * @return self
     */
    public function setEinIssuingCountry($einIssuingCountry)
    {
        if (is_null($einIssuingCountry)) {
            array_push($this->openAPINullablesSetToNull, 'einIssuingCountry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('einIssuingCountry', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($einIssuingCountry) && (mb_strlen($einIssuingCountry) > 2)) {
            throw new \InvalidArgumentException('invalid length for $einIssuingCountry when calling Messagebrands., must be smaller than or equal to 2.');
        }

        $this->container['einIssuingCountry'] = $einIssuingCountry;

        return $this;
    }

    /**
     * Gets universalEin
     *
     * @return mixed|null
     */
    public function getUniversalEin()
    {
        return $this->container['universalEin'];
    }

    /**
     * Sets universalEin
     *
     * @param mixed|null $universalEin universalEin
     *
     * @return self
     */
    public function setUniversalEin($universalEin)
    {
        if (is_null($universalEin)) {
            array_push($this->openAPINullablesSetToNull, 'universalEin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('universalEin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($universalEin) && (mb_strlen($universalEin) > 45)) {
            throw new \InvalidArgumentException('invalid length for $universalEin when calling Messagebrands., must be smaller than or equal to 45.');
        }

        $this->container['universalEin'] = $universalEin;

        return $this;
    }

    /**
     * Gets referenceId
     *
     * @return mixed|null
     */
    public function getReferenceId()
    {
        return $this->container['referenceId'];
    }

    /**
     * Sets referenceId
     *
     * @param mixed|null $referenceId referenceId
     *
     * @return self
     */
    public function setReferenceId($referenceId)
    {
        if (is_null($referenceId)) {
            array_push($this->openAPINullablesSetToNull, 'referenceId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('referenceId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($referenceId) && (mb_strlen($referenceId) > 45)) {
            throw new \InvalidArgumentException('invalid length for $referenceId when calling Messagebrands., must be smaller than or equal to 45.');
        }

        $this->container['referenceId'] = $referenceId;

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


