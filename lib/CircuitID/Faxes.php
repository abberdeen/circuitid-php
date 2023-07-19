<?php
/**
 * Faxes
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
 * Faxes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Faxes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'faxes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'callerIdNumber' => 'mixed',
        'callerDestination' => 'mixed',
        'pages' => 'mixed',
        'statusCode' => 'mixed',
        'transferedPages' => 'mixed',
        'status' => 'mixed',
        'error' => 'mixed',
        'type' => 'mixed',
        'order' => 'mixed',
        'file' => 'mixed',
        'contact' => 'mixed',
        'number' => 'mixed',
        'faxAccount' => 'mixed',
        'retries' => 'mixed',
        'invoice' => 'mixed',
        'senderEmail' => 'mixed',
        'senderName' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'callerIdNumber' => null,
        'callerDestination' => null,
        'pages' => 'int32',
        'statusCode' => 'int32',
        'transferedPages' => 'int32',
        'status' => null,
        'error' => null,
        'type' => null,
        'order' => null,
        'file' => null,
        'contact' => null,
        'number' => null,
        'faxAccount' => null,
        'retries' => 'int32',
        'invoice' => null,
        'senderEmail' => null,
        'senderName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'callerIdNumber' => true,
		'callerDestination' => true,
		'pages' => true,
		'statusCode' => true,
		'transferedPages' => true,
		'status' => true,
		'error' => true,
		'type' => true,
		'order' => true,
		'file' => true,
		'contact' => true,
		'number' => true,
		'faxAccount' => true,
		'retries' => true,
		'invoice' => true,
		'senderEmail' => true,
		'senderName' => true
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
        'callerIdNumber' => 'callerIdNumber',
        'callerDestination' => 'callerDestination',
        'pages' => 'pages',
        'statusCode' => 'statusCode',
        'transferedPages' => 'transferedPages',
        'status' => 'status',
        'error' => 'error',
        'type' => 'type',
        'order' => 'order',
        'file' => 'file',
        'contact' => 'contact',
        'number' => 'number',
        'faxAccount' => 'faxAccount',
        'retries' => 'retries',
        'invoice' => 'invoice',
        'senderEmail' => 'senderEmail',
        'senderName' => 'senderName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callerIdNumber' => 'setCallerIdNumber',
        'callerDestination' => 'setCallerDestination',
        'pages' => 'setPages',
        'statusCode' => 'setStatusCode',
        'transferedPages' => 'setTransferedPages',
        'status' => 'setStatus',
        'error' => 'setError',
        'type' => 'setType',
        'order' => 'setOrder',
        'file' => 'setFile',
        'contact' => 'setContact',
        'number' => 'setNumber',
        'faxAccount' => 'setFaxAccount',
        'retries' => 'setRetries',
        'invoice' => 'setInvoice',
        'senderEmail' => 'setSenderEmail',
        'senderName' => 'setSenderName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callerIdNumber' => 'getCallerIdNumber',
        'callerDestination' => 'getCallerDestination',
        'pages' => 'getPages',
        'statusCode' => 'getStatusCode',
        'transferedPages' => 'getTransferedPages',
        'status' => 'getStatus',
        'error' => 'getError',
        'type' => 'getType',
        'order' => 'getOrder',
        'file' => 'getFile',
        'contact' => 'getContact',
        'number' => 'getNumber',
        'faxAccount' => 'getFaxAccount',
        'retries' => 'getRetries',
        'invoice' => 'getInvoice',
        'senderEmail' => 'getSenderEmail',
        'senderName' => 'getSenderName'
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

    public const STATUS_FAILED = 'failed';
    public const STATUS_SUCCESS = 'success';
    public const STATUS_PROCESSING = 'processing';
    public const TYPE_SEND = 'send';
    public const TYPE_RECEIVE = 'receive';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_FAILED,
            self::STATUS_SUCCESS,
            self::STATUS_PROCESSING,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SEND,
            self::TYPE_RECEIVE,
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
        $this->setIfExists('callerIdNumber', $data ?? [], null);
        $this->setIfExists('callerDestination', $data ?? [], null);
        $this->setIfExists('pages', $data ?? [], null);
        $this->setIfExists('statusCode', $data ?? [], null);
        $this->setIfExists('transferedPages', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('file', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('faxAccount', $data ?? [], null);
        $this->setIfExists('retries', $data ?? [], null);
        $this->setIfExists('invoice', $data ?? [], null);
        $this->setIfExists('senderEmail', $data ?? [], null);
        $this->setIfExists('senderName', $data ?? [], null);
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

        if ($this->container['callerIdNumber'] === null) {
            $invalidProperties[] = "'callerIdNumber' can't be null";
        }
        if ((mb_strlen($this->container['callerIdNumber']) > 45)) {
            $invalidProperties[] = "invalid value for 'callerIdNumber', the character length must be smaller than or equal to 45.";
        }

        if ($this->container['callerDestination'] === null) {
            $invalidProperties[] = "'callerDestination' can't be null";
        }
        if ((mb_strlen($this->container['callerDestination']) > 45)) {
            $invalidProperties[] = "invalid value for 'callerDestination', the character length must be smaller than or equal to 45.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) > 255)) {
            $invalidProperties[] = "invalid value for 'error', the character length must be smaller than or equal to 255.";
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

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['faxAccount'] === null) {
            $invalidProperties[] = "'faxAccount' can't be null";
        }
        if (!is_null($this->container['senderEmail']) && (mb_strlen($this->container['senderEmail']) > 45)) {
            $invalidProperties[] = "invalid value for 'senderEmail', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['senderName']) && (mb_strlen($this->container['senderName']) > 45)) {
            $invalidProperties[] = "invalid value for 'senderName', the character length must be smaller than or equal to 45.";
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
     * Gets callerIdNumber
     *
     * @return mixed
     */
    public function getCallerIdNumber()
    {
        return $this->container['callerIdNumber'];
    }

    /**
     * Sets callerIdNumber
     *
     * @param mixed $callerIdNumber callerIdNumber
     *
     * @return self
     */
    public function setCallerIdNumber($callerIdNumber)
    {
        if (is_null($callerIdNumber)) {
            array_push($this->openAPINullablesSetToNull, 'callerIdNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('callerIdNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($callerIdNumber) && (mb_strlen($callerIdNumber) > 45)) {
            throw new \InvalidArgumentException('invalid length for $callerIdNumber when calling Faxes., must be smaller than or equal to 45.');
        }

        $this->container['callerIdNumber'] = $callerIdNumber;

        return $this;
    }

    /**
     * Gets callerDestination
     *
     * @return mixed
     */
    public function getCallerDestination()
    {
        return $this->container['callerDestination'];
    }

    /**
     * Sets callerDestination
     *
     * @param mixed $callerDestination callerDestination
     *
     * @return self
     */
    public function setCallerDestination($callerDestination)
    {
        if (is_null($callerDestination)) {
            array_push($this->openAPINullablesSetToNull, 'callerDestination');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('callerDestination', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($callerDestination) && (mb_strlen($callerDestination) > 45)) {
            throw new \InvalidArgumentException('invalid length for $callerDestination when calling Faxes., must be smaller than or equal to 45.');
        }

        $this->container['callerDestination'] = $callerDestination;

        return $this;
    }

    /**
     * Gets pages
     *
     * @return mixed|null
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
     * Sets pages
     *
     * @param mixed|null $pages pages
     *
     * @return self
     */
    public function setPages($pages)
    {
        if (is_null($pages)) {
            array_push($this->openAPINullablesSetToNull, 'pages');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pages', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pages'] = $pages;

        return $this;
    }

    /**
     * Gets statusCode
     *
     * @return mixed|null
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     *
     * @param mixed|null $statusCode statusCode
     *
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        if (is_null($statusCode)) {
            array_push($this->openAPINullablesSetToNull, 'statusCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('statusCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['statusCode'] = $statusCode;

        return $this;
    }

    /**
     * Gets transferedPages
     *
     * @return mixed|null
     */
    public function getTransferedPages()
    {
        return $this->container['transferedPages'];
    }

    /**
     * Sets transferedPages
     *
     * @param mixed|null $transferedPages transferedPages
     *
     * @return self
     */
    public function setTransferedPages($transferedPages)
    {
        if (is_null($transferedPages)) {
            array_push($this->openAPINullablesSetToNull, 'transferedPages');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transferedPages', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transferedPages'] = $transferedPages;

        return $this;
    }

    /**
     * Gets status
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param mixed $status status
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
     * Gets error
     *
     * @return mixed|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param mixed|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        if (is_null($error)) {
            array_push($this->openAPINullablesSetToNull, 'error');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('error', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($error) && (mb_strlen($error) > 255)) {
            throw new \InvalidArgumentException('invalid length for $error when calling Faxes., must be smaller than or equal to 255.');
        }

        $this->container['error'] = $error;

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
     * Gets order
     *
     * @return mixed|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param mixed|null $order ObjectId (unique 12 bytes ID)
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
     * Gets file
     *
     * @return mixed|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param mixed|null $file ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setFile($file)
    {
        if (is_null($file)) {
            array_push($this->openAPINullablesSetToNull, 'file');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('file', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return mixed|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param mixed|null $contact ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setContact($contact)
    {
        if (is_null($contact)) {
            array_push($this->openAPINullablesSetToNull, 'contact');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contact', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets number
     *
     * @return mixed
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param mixed $number ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            array_push($this->openAPINullablesSetToNull, 'number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets faxAccount
     *
     * @return mixed
     */
    public function getFaxAccount()
    {
        return $this->container['faxAccount'];
    }

    /**
     * Sets faxAccount
     *
     * @param mixed $faxAccount ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setFaxAccount($faxAccount)
    {
        if (is_null($faxAccount)) {
            array_push($this->openAPINullablesSetToNull, 'faxAccount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('faxAccount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['faxAccount'] = $faxAccount;

        return $this;
    }

    /**
     * Gets retries
     *
     * @return mixed|null
     */
    public function getRetries()
    {
        return $this->container['retries'];
    }

    /**
     * Sets retries
     *
     * @param mixed|null $retries retries
     *
     * @return self
     */
    public function setRetries($retries)
    {
        if (is_null($retries)) {
            array_push($this->openAPINullablesSetToNull, 'retries');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('retries', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['retries'] = $retries;

        return $this;
    }

    /**
     * Gets invoice
     *
     * @return mixed|null
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param mixed|null $invoice ObjectId (unique 12 bytes ID)
     *
     * @return self
     */
    public function setInvoice($invoice)
    {
        if (is_null($invoice)) {
            array_push($this->openAPINullablesSetToNull, 'invoice');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('invoice', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets senderEmail
     *
     * @return mixed|null
     */
    public function getSenderEmail()
    {
        return $this->container['senderEmail'];
    }

    /**
     * Sets senderEmail
     *
     * @param mixed|null $senderEmail senderEmail
     *
     * @return self
     */
    public function setSenderEmail($senderEmail)
    {
        if (is_null($senderEmail)) {
            array_push($this->openAPINullablesSetToNull, 'senderEmail');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('senderEmail', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($senderEmail) && (mb_strlen($senderEmail) > 45)) {
            throw new \InvalidArgumentException('invalid length for $senderEmail when calling Faxes., must be smaller than or equal to 45.');
        }

        $this->container['senderEmail'] = $senderEmail;

        return $this;
    }

    /**
     * Gets senderName
     *
     * @return mixed|null
     */
    public function getSenderName()
    {
        return $this->container['senderName'];
    }

    /**
     * Sets senderName
     *
     * @param mixed|null $senderName senderName
     *
     * @return self
     */
    public function setSenderName($senderName)
    {
        if (is_null($senderName)) {
            array_push($this->openAPINullablesSetToNull, 'senderName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('senderName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($senderName) && (mb_strlen($senderName) > 45)) {
            throw new \InvalidArgumentException('invalid length for $senderName when calling Faxes., must be smaller than or equal to 45.');
        }

        $this->container['senderName'] = $senderName;

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


