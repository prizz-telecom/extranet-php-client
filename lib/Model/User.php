<?php
/**
 * User
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Infracorp\Extranet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Prizz-Telecom Extranet API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Infracorp\Extranet\Client\Model;

use \ArrayAccess;
use \Infracorp\Extranet\Client\ObjectSerializer;

/**
 * User Class Doc Comment
 *
 * @category Class
 * @package  Infracorp\Extranet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class User implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available_workflows' => 'string[]',
        'id' => 'int',
        'firstname' => 'string',
        'lastname' => 'string',
        'company_name' => 'string',
        'email' => 'string',
        'phone1' => 'string',
        'phone2' => 'string',
        'gender' => 'string',
        'create_date' => '\DateTime',
        'last_modified_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'available_workflows' => null,
        'id' => null,
        'firstname' => null,
        'lastname' => null,
        'company_name' => null,
        'email' => null,
        'phone1' => null,
        'phone2' => null,
        'gender' => null,
        'create_date' => 'date-time',
        'last_modified_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'available_workflows' => false,
		'id' => false,
		'firstname' => true,
		'lastname' => false,
		'company_name' => true,
		'email' => true,
		'phone1' => true,
		'phone2' => true,
		'gender' => true,
		'create_date' => false,
		'last_modified_date' => true
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
        'available_workflows' => 'availableWorkflows',
        'id' => 'id',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'company_name' => 'companyName',
        'email' => 'email',
        'phone1' => 'phone1',
        'phone2' => 'phone2',
        'gender' => 'gender',
        'create_date' => 'createDate',
        'last_modified_date' => 'lastModifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_workflows' => 'setAvailableWorkflows',
        'id' => 'setId',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'company_name' => 'setCompanyName',
        'email' => 'setEmail',
        'phone1' => 'setPhone1',
        'phone2' => 'setPhone2',
        'gender' => 'setGender',
        'create_date' => 'setCreateDate',
        'last_modified_date' => 'setLastModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_workflows' => 'getAvailableWorkflows',
        'id' => 'getId',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'company_name' => 'getCompanyName',
        'email' => 'getEmail',
        'phone1' => 'getPhone1',
        'phone2' => 'getPhone2',
        'gender' => 'getGender',
        'create_date' => 'getCreateDate',
        'last_modified_date' => 'getLastModifiedDate'
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

    public const AVAILABLE_WORKFLOWS_CLIENT_LEGAL_ENTITY_CREATE_COMMERCIAL_OFFER_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntity\\CreateCommercialOffer\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_SUBMIT_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\Submit\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_SIGN_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\Sign\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_RENAME_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\Rename\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_ADD_SECTION_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\AddSection\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_REMOVE_SECTION_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\RemoveSection\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_RENAME_SECTION_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\RenameSection\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_UPDATE_OFFER_ITEM_IN_OFFER_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\UpdateOfferItemInOffer\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_SET_OFFER_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\SetOffer\\Context';
    public const AVAILABLE_WORKFLOWS_COMMENT_ADD_COMMENT_CONTEXT = 'Infracorp\\Services\\Workflow\\Comment\\AddComment\\Context';
    public const AVAILABLE_WORKFLOWS_COMMENT_SUBSCRIBE_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\Comment\\SubscribeThread\\Context';
    public const AVAILABLE_WORKFLOWS_COMMENT_UPDATE_COMMENT_CONTEXT = 'Infracorp\\Services\\Workflow\\Comment\\UpdateComment\\Context';
    public const AVAILABLE_WORKFLOWS_COMMENT_UPDATE_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\Comment\\UpdateThread\\Context';
    public const AVAILABLE_WORKFLOWS_CLIENT_LEGAL_ENTITY_CREATE_COMMENT_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntity\\CreateCommentThread\\Context';
    public const AVAILABLE_WORKFLOWS_SERVICE_CONTRACT_CREATE_COMMENT_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\ServiceContract\\CreateCommentThread\\Context';
    public const AVAILABLE_WORKFLOWS_INVOICE_CREATE_COMMENT_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\Invoice\\CreateCommentThread\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_CREATE_COMMENT_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\CreateCommentThread\\Context';
    public const AVAILABLE_WORKFLOWS_USERS_CREATE_TOKEN_CONTEXT = 'Infracorp\\Services\\Workflow\\Users\\CreateToken\\Context';
    public const AVAILABLE_WORKFLOWS_USERS_REVOKE_TOKEN_CONTEXT = 'Infracorp\\Services\\Workflow\\Users\\RevokeToken\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_UPDATE_SUBSCRIBERS_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\UpdateSubscribers\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_ADD_ITEM_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\AddItem\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_REMOVE_ITEM_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\RemoveItem\\Context';
    public const AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_UPDATE_SECTION_ITEMS_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\UpdateSectionItems\\Context';
    public const AVAILABLE_WORKFLOWS_CLIENT_LEGAL_ENTITY_ASSIGN_CONTACT_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntity\\AssignContact\\Context';
    public const AVAILABLE_WORKFLOWS_CLIENT_LEGAL_ENTITY_ADD_CONTACT_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntity\\AddContact\\Context';
    public const AVAILABLE_WORKFLOWS_CLIENT_LEGAL_ENTITY_CONTACT_SWITCH_ACTIVE_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntityContact\\SwitchActive\\Context';
    public const AVAILABLE_WORKFLOWS_CONTACT_UPDATE_CONTEXT = 'Infracorp\\Services\\Workflow\\Contact\\Update\\Context';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailableWorkflowsAllowableValues()
    {
        return [
            self::AVAILABLE_WORKFLOWS_CLIENT_LEGAL_ENTITY_CREATE_COMMERCIAL_OFFER_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_SUBMIT_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_SIGN_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_RENAME_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_ADD_SECTION_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_REMOVE_SECTION_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_RENAME_SECTION_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_UPDATE_OFFER_ITEM_IN_OFFER_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_SET_OFFER_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMENT_ADD_COMMENT_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMENT_SUBSCRIBE_THREAD_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMENT_UPDATE_COMMENT_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMENT_UPDATE_THREAD_CONTEXT,
            self::AVAILABLE_WORKFLOWS_CLIENT_LEGAL_ENTITY_CREATE_COMMENT_THREAD_CONTEXT,
            self::AVAILABLE_WORKFLOWS_SERVICE_CONTRACT_CREATE_COMMENT_THREAD_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INVOICE_CREATE_COMMENT_THREAD_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_CREATE_COMMENT_THREAD_CONTEXT,
            self::AVAILABLE_WORKFLOWS_USERS_CREATE_TOKEN_CONTEXT,
            self::AVAILABLE_WORKFLOWS_USERS_REVOKE_TOKEN_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_UPDATE_SUBSCRIBERS_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_ADD_ITEM_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_REMOVE_ITEM_CONTEXT,
            self::AVAILABLE_WORKFLOWS_COMMERCIAL_OFFER_UPDATE_SECTION_ITEMS_CONTEXT,
            self::AVAILABLE_WORKFLOWS_CLIENT_LEGAL_ENTITY_ASSIGN_CONTACT_CONTEXT,
            self::AVAILABLE_WORKFLOWS_CLIENT_LEGAL_ENTITY_ADD_CONTACT_CONTEXT,
            self::AVAILABLE_WORKFLOWS_CLIENT_LEGAL_ENTITY_CONTACT_SWITCH_ACTIVE_CONTEXT,
            self::AVAILABLE_WORKFLOWS_CONTACT_UPDATE_CONTEXT,
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
        $this->setIfExists('available_workflows', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('firstname', $data ?? [], null);
        $this->setIfExists('lastname', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('phone1', $data ?? [], null);
        $this->setIfExists('phone2', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('create_date', $data ?? [], null);
        $this->setIfExists('last_modified_date', $data ?? [], null);
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
     * Gets available_workflows
     *
     * @return string[]|null
     */
    public function getAvailableWorkflows()
    {
        return $this->container['available_workflows'];
    }

    /**
     * Sets available_workflows
     *
     * @param string[]|null $available_workflows liste des processus disponible pour l'objet
     *
     * @return self
     */
    public function setAvailableWorkflows($available_workflows)
    {
        if (is_null($available_workflows)) {
            throw new \InvalidArgumentException('non-nullable available_workflows cannot be null');
        }
        $allowedValues = $this->getAvailableWorkflowsAllowableValues();
        if (array_diff($available_workflows, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'available_workflows', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['available_workflows'] = $available_workflows;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
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
     * Gets firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string|null $firstname firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        if (is_null($firstname)) {
            array_push($this->openAPINullablesSetToNull, 'firstname');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('firstname', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string|null $lastname lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        if (is_null($lastname)) {
            throw new \InvalidArgumentException('non-nullable lastname cannot be null');
        }
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            array_push($this->openAPINullablesSetToNull, 'company_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
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
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone1
     *
     * @return string|null
     */
    public function getPhone1()
    {
        return $this->container['phone1'];
    }

    /**
     * Sets phone1
     *
     * @param string|null $phone1 phone1
     *
     * @return self
     */
    public function setPhone1($phone1)
    {
        if (is_null($phone1)) {
            array_push($this->openAPINullablesSetToNull, 'phone1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phone1'] = $phone1;

        return $this;
    }

    /**
     * Gets phone2
     *
     * @return string|null
     */
    public function getPhone2()
    {
        return $this->container['phone2'];
    }

    /**
     * Sets phone2
     *
     * @param string|null $phone2 phone2
     *
     * @return self
     */
    public function setPhone2($phone2)
    {
        if (is_null($phone2)) {
            array_push($this->openAPINullablesSetToNull, 'phone2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phone2'] = $phone2;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            array_push($this->openAPINullablesSetToNull, 'gender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime|null
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime|null $create_date create_date
     *
     * @return self
     */
    public function setCreateDate($create_date)
    {
        if (is_null($create_date)) {
            throw new \InvalidArgumentException('non-nullable create_date cannot be null');
        }
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets last_modified_date
     *
     * @return \DateTime|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param \DateTime|null $last_modified_date last_modified_date
     *
     * @return self
     */
    public function setLastModifiedDate($last_modified_date)
    {
        if (is_null($last_modified_date)) {
            array_push($this->openAPINullablesSetToNull, 'last_modified_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_modified_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_modified_date'] = $last_modified_date;

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


