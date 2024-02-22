<?php
/**
 * CreateWorkflow
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
 * CreateWorkflow Class Doc Comment
 *
 * @category Class
 * @package  Infracorp\Extranet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateWorkflow implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateWorkflow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'context_name' => 'string',
        'entity_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'context_name' => null,
        'entity_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'context_name' => false,
		'entity_id' => false
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
        'context_name' => 'contextName',
        'entity_id' => 'entityId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context_name' => 'setContextName',
        'entity_id' => 'setEntityId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context_name' => 'getContextName',
        'entity_id' => 'getEntityId'
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

    public const CONTEXT_NAME_CLIENT_LEGAL_ENTITY_CREATE_COMMERCIAL_OFFER_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntity\\CreateCommercialOffer\\Context';
    public const CONTEXT_NAME_COMMERCIAL_OFFER_SUBMIT_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\Submit\\Context';
    public const CONTEXT_NAME_COMMERCIAL_OFFER_SIGN_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\Sign\\Context';
    public const CONTEXT_NAME_COMMERCIAL_OFFER_RENAME_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\Rename\\Context';
    public const CONTEXT_NAME_COMMERCIAL_OFFER_ADD_SECTION_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\AddSection\\Context';
    public const CONTEXT_NAME_COMMERCIAL_OFFER_REMOVE_SECTION_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\RemoveSection\\Context';
    public const CONTEXT_NAME_COMMERCIAL_OFFER_RENAME_SECTION_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\RenameSection\\Context';
    public const CONTEXT_NAME_COMMERCIAL_OFFER_UPDATE_OFFER_ITEM_IN_OFFER_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\UpdateOfferItemInOffer\\Context';
    public const CONTEXT_NAME_COMMERCIAL_OFFER_SET_OFFER_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\SetOffer\\Context';
    public const CONTEXT_NAME_COMMENT_ADD_COMMENT_CONTEXT = 'Infracorp\\Services\\Workflow\\Comment\\AddComment\\Context';
    public const CONTEXT_NAME_COMMENT_SUBSCRIBE_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\Comment\\SubscribeThread\\Context';
    public const CONTEXT_NAME_COMMENT_UPDATE_COMMENT_CONTEXT = 'Infracorp\\Services\\Workflow\\Comment\\UpdateComment\\Context';
    public const CONTEXT_NAME_COMMENT_UPDATE_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\Comment\\UpdateThread\\Context';
    public const CONTEXT_NAME_CLIENT_LEGAL_ENTITY_CREATE_COMMENT_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntity\\CreateCommentThread\\Context';
    public const CONTEXT_NAME_SERVICE_CONTRACT_CREATE_COMMENT_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\ServiceContract\\CreateCommentThread\\Context';
    public const CONTEXT_NAME_INVOICE_CREATE_COMMENT_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\Invoice\\CreateCommentThread\\Context';
    public const CONTEXT_NAME_COMMERCIAL_OFFER_CREATE_COMMENT_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\CreateCommentThread\\Context';
    public const CONTEXT_NAME_USERS_CREATE_TOKEN_CONTEXT = 'Infracorp\\Services\\Workflow\\Users\\CreateToken\\Context';
    public const CONTEXT_NAME_USERS_REVOKE_TOKEN_CONTEXT = 'Infracorp\\Services\\Workflow\\Users\\RevokeToken\\Context';
    public const CONTEXT_NAME_COMMERCIAL_OFFER_UPDATE_SUBSCRIBERS_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\UpdateSubscribers\\Context';
    public const CONTEXT_NAME_COMMERCIAL_OFFER_ADD_ITEM_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\AddItem\\Context';
    public const CONTEXT_NAME_COMMERCIAL_OFFER_REMOVE_ITEM_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\RemoveItem\\Context';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContextNameAllowableValues()
    {
        return [
            self::CONTEXT_NAME_CLIENT_LEGAL_ENTITY_CREATE_COMMERCIAL_OFFER_CONTEXT,
            self::CONTEXT_NAME_COMMERCIAL_OFFER_SUBMIT_CONTEXT,
            self::CONTEXT_NAME_COMMERCIAL_OFFER_SIGN_CONTEXT,
            self::CONTEXT_NAME_COMMERCIAL_OFFER_RENAME_CONTEXT,
            self::CONTEXT_NAME_COMMERCIAL_OFFER_ADD_SECTION_CONTEXT,
            self::CONTEXT_NAME_COMMERCIAL_OFFER_REMOVE_SECTION_CONTEXT,
            self::CONTEXT_NAME_COMMERCIAL_OFFER_RENAME_SECTION_CONTEXT,
            self::CONTEXT_NAME_COMMERCIAL_OFFER_UPDATE_OFFER_ITEM_IN_OFFER_CONTEXT,
            self::CONTEXT_NAME_COMMERCIAL_OFFER_SET_OFFER_CONTEXT,
            self::CONTEXT_NAME_COMMENT_ADD_COMMENT_CONTEXT,
            self::CONTEXT_NAME_COMMENT_SUBSCRIBE_THREAD_CONTEXT,
            self::CONTEXT_NAME_COMMENT_UPDATE_COMMENT_CONTEXT,
            self::CONTEXT_NAME_COMMENT_UPDATE_THREAD_CONTEXT,
            self::CONTEXT_NAME_CLIENT_LEGAL_ENTITY_CREATE_COMMENT_THREAD_CONTEXT,
            self::CONTEXT_NAME_SERVICE_CONTRACT_CREATE_COMMENT_THREAD_CONTEXT,
            self::CONTEXT_NAME_INVOICE_CREATE_COMMENT_THREAD_CONTEXT,
            self::CONTEXT_NAME_COMMERCIAL_OFFER_CREATE_COMMENT_THREAD_CONTEXT,
            self::CONTEXT_NAME_USERS_CREATE_TOKEN_CONTEXT,
            self::CONTEXT_NAME_USERS_REVOKE_TOKEN_CONTEXT,
            self::CONTEXT_NAME_COMMERCIAL_OFFER_UPDATE_SUBSCRIBERS_CONTEXT,
            self::CONTEXT_NAME_COMMERCIAL_OFFER_ADD_ITEM_CONTEXT,
            self::CONTEXT_NAME_COMMERCIAL_OFFER_REMOVE_ITEM_CONTEXT,
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
        $this->setIfExists('context_name', $data ?? [], null);
        $this->setIfExists('entity_id', $data ?? [], null);
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

        $allowedValues = $this->getContextNameAllowableValues();
        if (!is_null($this->container['context_name']) && !in_array($this->container['context_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'context_name', must be one of '%s'",
                $this->container['context_name'],
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
     * Gets context_name
     *
     * @return string|null
     */
    public function getContextName()
    {
        return $this->container['context_name'];
    }

    /**
     * Sets context_name
     *
     * @param string|null $context_name context_name
     *
     * @return self
     */
    public function setContextName($context_name)
    {
        if (is_null($context_name)) {
            throw new \InvalidArgumentException('non-nullable context_name cannot be null');
        }
        $allowedValues = $this->getContextNameAllowableValues();
        if (!in_array($context_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'context_name', must be one of '%s'",
                    $context_name,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['context_name'] = $context_name;

        return $this;
    }

    /**
     * Gets entity_id
     *
     * @return int|null
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     *
     * @param int|null $entity_id entity_id
     *
     * @return self
     */
    public function setEntityId($entity_id)
    {
        if (is_null($entity_id)) {
            throw new \InvalidArgumentException('non-nullable entity_id cannot be null');
        }
        $this->container['entity_id'] = $entity_id;

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


