<?php
/**
 * OperatorTicket
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
 * Generator version: 7.9.0-SNAPSHOT
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
 * OperatorTicket Class Doc Comment
 *
 * @category Class
 * @package  Infracorp\Extranet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OperatorTicket implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OperatorTicket';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'numero' => 'string',
        'date_creation' => 'string',
        'date_cloture' => 'string',
        'date_debut_incident' => 'string',
        'date_resolution' => 'string',
        'date_gtr' => 'string',
        'etat' => 'string',
        'running_workflows' => '\Infracorp\Extranet\Client\Model\RunningProcess[]',
        'archived_workflows' => '\Infracorp\Extranet\Client\Model\RunningProcess[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'numero' => null,
        'date_creation' => null,
        'date_cloture' => null,
        'date_debut_incident' => null,
        'date_resolution' => null,
        'date_gtr' => null,
        'etat' => null,
        'running_workflows' => null,
        'archived_workflows' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'numero' => true,
        'date_creation' => true,
        'date_cloture' => true,
        'date_debut_incident' => true,
        'date_resolution' => true,
        'date_gtr' => true,
        'etat' => true,
        'running_workflows' => false,
        'archived_workflows' => false
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
        'numero' => 'numero',
        'date_creation' => 'date_creation',
        'date_cloture' => 'date_cloture',
        'date_debut_incident' => 'date_debut_incident',
        'date_resolution' => 'date_resolution',
        'date_gtr' => 'date_gtr',
        'etat' => 'etat',
        'running_workflows' => 'running_workflows',
        'archived_workflows' => 'archived_workflows'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numero' => 'setNumero',
        'date_creation' => 'setDateCreation',
        'date_cloture' => 'setDateCloture',
        'date_debut_incident' => 'setDateDebutIncident',
        'date_resolution' => 'setDateResolution',
        'date_gtr' => 'setDateGtr',
        'etat' => 'setEtat',
        'running_workflows' => 'setRunningWorkflows',
        'archived_workflows' => 'setArchivedWorkflows'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numero' => 'getNumero',
        'date_creation' => 'getDateCreation',
        'date_cloture' => 'getDateCloture',
        'date_debut_incident' => 'getDateDebutIncident',
        'date_resolution' => 'getDateResolution',
        'date_gtr' => 'getDateGtr',
        'etat' => 'getEtat',
        'running_workflows' => 'getRunningWorkflows',
        'archived_workflows' => 'getArchivedWorkflows'
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
        $this->setIfExists('numero', $data ?? [], null);
        $this->setIfExists('date_creation', $data ?? [], null);
        $this->setIfExists('date_cloture', $data ?? [], null);
        $this->setIfExists('date_debut_incident', $data ?? [], null);
        $this->setIfExists('date_resolution', $data ?? [], null);
        $this->setIfExists('date_gtr', $data ?? [], null);
        $this->setIfExists('etat', $data ?? [], null);
        $this->setIfExists('running_workflows', $data ?? [], null);
        $this->setIfExists('archived_workflows', $data ?? [], null);
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
     * Gets numero
     *
     * @return string|null
     */
    public function getNumero()
    {
        return $this->container['numero'];
    }

    /**
     * Sets numero
     *
     * @param string|null $numero numero
     *
     * @return self
     */
    public function setNumero($numero)
    {
        if (is_null($numero)) {
            array_push($this->openAPINullablesSetToNull, 'numero');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numero', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numero'] = $numero;

        return $this;
    }

    /**
     * Gets date_creation
     *
     * @return string|null
     */
    public function getDateCreation()
    {
        return $this->container['date_creation'];
    }

    /**
     * Sets date_creation
     *
     * @param string|null $date_creation date_creation
     *
     * @return self
     */
    public function setDateCreation($date_creation)
    {
        if (is_null($date_creation)) {
            array_push($this->openAPINullablesSetToNull, 'date_creation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_creation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_creation'] = $date_creation;

        return $this;
    }

    /**
     * Gets date_cloture
     *
     * @return string|null
     */
    public function getDateCloture()
    {
        return $this->container['date_cloture'];
    }

    /**
     * Sets date_cloture
     *
     * @param string|null $date_cloture date_cloture
     *
     * @return self
     */
    public function setDateCloture($date_cloture)
    {
        if (is_null($date_cloture)) {
            array_push($this->openAPINullablesSetToNull, 'date_cloture');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_cloture', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_cloture'] = $date_cloture;

        return $this;
    }

    /**
     * Gets date_debut_incident
     *
     * @return string|null
     */
    public function getDateDebutIncident()
    {
        return $this->container['date_debut_incident'];
    }

    /**
     * Sets date_debut_incident
     *
     * @param string|null $date_debut_incident date_debut_incident
     *
     * @return self
     */
    public function setDateDebutIncident($date_debut_incident)
    {
        if (is_null($date_debut_incident)) {
            array_push($this->openAPINullablesSetToNull, 'date_debut_incident');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_debut_incident', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_debut_incident'] = $date_debut_incident;

        return $this;
    }

    /**
     * Gets date_resolution
     *
     * @return string|null
     */
    public function getDateResolution()
    {
        return $this->container['date_resolution'];
    }

    /**
     * Sets date_resolution
     *
     * @param string|null $date_resolution date_resolution
     *
     * @return self
     */
    public function setDateResolution($date_resolution)
    {
        if (is_null($date_resolution)) {
            array_push($this->openAPINullablesSetToNull, 'date_resolution');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_resolution', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_resolution'] = $date_resolution;

        return $this;
    }

    /**
     * Gets date_gtr
     *
     * @return string|null
     */
    public function getDateGtr()
    {
        return $this->container['date_gtr'];
    }

    /**
     * Sets date_gtr
     *
     * @param string|null $date_gtr date_gtr
     *
     * @return self
     */
    public function setDateGtr($date_gtr)
    {
        if (is_null($date_gtr)) {
            array_push($this->openAPINullablesSetToNull, 'date_gtr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_gtr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_gtr'] = $date_gtr;

        return $this;
    }

    /**
     * Gets etat
     *
     * @return string|null
     */
    public function getEtat()
    {
        return $this->container['etat'];
    }

    /**
     * Sets etat
     *
     * @param string|null $etat etat
     *
     * @return self
     */
    public function setEtat($etat)
    {
        if (is_null($etat)) {
            array_push($this->openAPINullablesSetToNull, 'etat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('etat', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['etat'] = $etat;

        return $this;
    }

    /**
     * Gets running_workflows
     *
     * @return \Infracorp\Extranet\Client\Model\RunningProcess[]|null
     */
    public function getRunningWorkflows()
    {
        return $this->container['running_workflows'];
    }

    /**
     * Sets running_workflows
     *
     * @param \Infracorp\Extranet\Client\Model\RunningProcess[]|null $running_workflows running_workflows
     *
     * @return self
     */
    public function setRunningWorkflows($running_workflows)
    {
        if (is_null($running_workflows)) {
            throw new \InvalidArgumentException('non-nullable running_workflows cannot be null');
        }
        $this->container['running_workflows'] = $running_workflows;

        return $this;
    }

    /**
     * Gets archived_workflows
     *
     * @return \Infracorp\Extranet\Client\Model\RunningProcess[]|null
     */
    public function getArchivedWorkflows()
    {
        return $this->container['archived_workflows'];
    }

    /**
     * Sets archived_workflows
     *
     * @param \Infracorp\Extranet\Client\Model\RunningProcess[]|null $archived_workflows archived_workflows
     *
     * @return self
     */
    public function setArchivedWorkflows($archived_workflows)
    {
        if (is_null($archived_workflows)) {
            throw new \InvalidArgumentException('non-nullable archived_workflows cannot be null');
        }
        $this->container['archived_workflows'] = $archived_workflows;

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


