<?php
/**
 * GetRunningWorkflows200ResponseWorkflowsInner
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
 * Generator version: 7.11.0-SNAPSHOT
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
 * GetRunningWorkflows200ResponseWorkflowsInner Class Doc Comment
 *
 * @category Class
 * @package  Infracorp\Extranet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetRunningWorkflows200ResponseWorkflowsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getRunningWorkflows_200_response_workflows_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'state' => 'string',
        'context' => 'string',
        'create_date' => '\DateTime',
        'last_run_date' => '\DateTime',
        'entity_class' => 'string',
        'entity_id' => 'int',
        'entity_description' => 'int',
        'description' => 'string',
        'status_code' => 'int',
        'last_log' => 'string',
        'html' => 'string'
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
        'state' => null,
        'context' => null,
        'create_date' => 'date-time',
        'last_run_date' => 'date-time',
        'entity_class' => null,
        'entity_id' => null,
        'entity_description' => null,
        'description' => null,
        'status_code' => null,
        'last_log' => null,
        'html' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'state' => false,
        'context' => false,
        'create_date' => false,
        'last_run_date' => true,
        'entity_class' => false,
        'entity_id' => false,
        'entity_description' => false,
        'description' => false,
        'status_code' => false,
        'last_log' => false,
        'html' => false
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
        'state' => 'state',
        'context' => 'context',
        'create_date' => 'createDate',
        'last_run_date' => 'lastRunDate',
        'entity_class' => 'entityClass',
        'entity_id' => 'entityId',
        'entity_description' => 'entityDescription',
        'description' => 'description',
        'status_code' => 'statusCode',
        'last_log' => 'lastLog',
        'html' => 'html'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'state' => 'setState',
        'context' => 'setContext',
        'create_date' => 'setCreateDate',
        'last_run_date' => 'setLastRunDate',
        'entity_class' => 'setEntityClass',
        'entity_id' => 'setEntityId',
        'entity_description' => 'setEntityDescription',
        'description' => 'setDescription',
        'status_code' => 'setStatusCode',
        'last_log' => 'setLastLog',
        'html' => 'setHtml'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'state' => 'getState',
        'context' => 'getContext',
        'create_date' => 'getCreateDate',
        'last_run_date' => 'getLastRunDate',
        'entity_class' => 'getEntityClass',
        'entity_id' => 'getEntityId',
        'entity_description' => 'getEntityDescription',
        'description' => 'getDescription',
        'status_code' => 'getStatusCode',
        'last_log' => 'getLastLog',
        'html' => 'getHtml'
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
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('context', $data ?? [], null);
        $this->setIfExists('create_date', $data ?? [], null);
        $this->setIfExists('last_run_date', $data ?? [], null);
        $this->setIfExists('entity_class', $data ?? [], null);
        $this->setIfExists('entity_id', $data ?? [], null);
        $this->setIfExists('entity_description', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('status_code', $data ?? [], null);
        $this->setIfExists('last_log', $data ?? [], null);
        $this->setIfExists('html', $data ?? [], null);
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
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets context
     *
     * @return string|null
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param string|null $context context
     *
     * @return self
     */
    public function setContext($context)
    {
        if (is_null($context)) {
            throw new \InvalidArgumentException('non-nullable context cannot be null');
        }
        $this->container['context'] = $context;

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
     * Gets last_run_date
     *
     * @return \DateTime|null
     */
    public function getLastRunDate()
    {
        return $this->container['last_run_date'];
    }

    /**
     * Sets last_run_date
     *
     * @param \DateTime|null $last_run_date last_run_date
     *
     * @return self
     */
    public function setLastRunDate($last_run_date)
    {
        if (is_null($last_run_date)) {
            array_push($this->openAPINullablesSetToNull, 'last_run_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_run_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_run_date'] = $last_run_date;

        return $this;
    }

    /**
     * Gets entity_class
     *
     * @return string|null
     */
    public function getEntityClass()
    {
        return $this->container['entity_class'];
    }

    /**
     * Sets entity_class
     *
     * @param string|null $entity_class entity_class
     *
     * @return self
     */
    public function setEntityClass($entity_class)
    {
        if (is_null($entity_class)) {
            throw new \InvalidArgumentException('non-nullable entity_class cannot be null');
        }
        $this->container['entity_class'] = $entity_class;

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
     * Gets entity_description
     *
     * @return int|null
     */
    public function getEntityDescription()
    {
        return $this->container['entity_description'];
    }

    /**
     * Sets entity_description
     *
     * @param int|null $entity_description entity_description
     *
     * @return self
     */
    public function setEntityDescription($entity_description)
    {
        if (is_null($entity_description)) {
            throw new \InvalidArgumentException('non-nullable entity_description cannot be null');
        }
        $this->container['entity_description'] = $entity_description;

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
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int|null $status_code status_code
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {
        if (is_null($status_code)) {
            throw new \InvalidArgumentException('non-nullable status_code cannot be null');
        }
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets last_log
     *
     * @return string|null
     */
    public function getLastLog()
    {
        return $this->container['last_log'];
    }

    /**
     * Sets last_log
     *
     * @param string|null $last_log last_log
     *
     * @return self
     */
    public function setLastLog($last_log)
    {
        if (is_null($last_log)) {
            throw new \InvalidArgumentException('non-nullable last_log cannot be null');
        }
        $this->container['last_log'] = $last_log;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string|null
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string|null $html html
     *
     * @return self
     */
    public function setHtml($html)
    {
        if (is_null($html)) {
            throw new \InvalidArgumentException('non-nullable html cannot be null');
        }
        $this->container['html'] = $html;

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


