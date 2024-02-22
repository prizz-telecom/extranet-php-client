<?php
/**
 * Ticket
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  InfracorpExtranetClient
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

namespace InfracorpExtranetClient\Model;

use \ArrayAccess;
use \InfracorpExtranetClient\ObjectSerializer;

/**
 * Ticket Class Doc Comment
 *
 * @category Class
 * @package  InfracorpExtranetClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Ticket implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Ticket';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'operator_id' => 'int',
        'operator_name' => 'string',
        'numero' => 'string',
        'etat' => 'string',
        'etat_lib' => 'string',
        'titre' => 'string',
        'cust_name' => 'string',
        'ref_commande' => 'string',
        'id_service_sicom' => 'int',
        'ref_service' => 'string',
        'cust_address' => 'string',
        'ref_tiers' => 'string',
        'date_creation' => 'string',
        'date_ouverture' => 'string',
        'date_resolution' => 'string',
        'date_cloture' => 'string',
        'last_message' => 'string',
        'running_process' => '\InfracorpExtranetClient\Model\RunningProcess[]'
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
        'operator_id' => null,
        'operator_name' => null,
        'numero' => null,
        'etat' => null,
        'etat_lib' => null,
        'titre' => null,
        'cust_name' => null,
        'ref_commande' => null,
        'id_service_sicom' => null,
        'ref_service' => null,
        'cust_address' => null,
        'ref_tiers' => null,
        'date_creation' => null,
        'date_ouverture' => null,
        'date_resolution' => null,
        'date_cloture' => null,
        'last_message' => null,
        'running_process' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'operator_id' => false,
		'operator_name' => false,
		'numero' => false,
		'etat' => false,
		'etat_lib' => false,
		'titre' => false,
		'cust_name' => false,
		'ref_commande' => false,
		'id_service_sicom' => false,
		'ref_service' => false,
		'cust_address' => false,
		'ref_tiers' => false,
		'date_creation' => false,
		'date_ouverture' => false,
		'date_resolution' => false,
		'date_cloture' => false,
		'last_message' => false,
		'running_process' => false
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
        'operator_id' => 'operatorId',
        'operator_name' => 'operatorName',
        'numero' => 'numero',
        'etat' => 'etat',
        'etat_lib' => 'etat_lib',
        'titre' => 'titre',
        'cust_name' => 'cust_name',
        'ref_commande' => 'ref_commande',
        'id_service_sicom' => 'id_service_sicom',
        'ref_service' => 'ref_service',
        'cust_address' => 'cust_address',
        'ref_tiers' => 'ref_tiers',
        'date_creation' => 'date_creation',
        'date_ouverture' => 'date_ouverture',
        'date_resolution' => 'date_resolution',
        'date_cloture' => 'date_cloture',
        'last_message' => 'last_message',
        'running_process' => 'running_process'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'operator_id' => 'setOperatorId',
        'operator_name' => 'setOperatorName',
        'numero' => 'setNumero',
        'etat' => 'setEtat',
        'etat_lib' => 'setEtatLib',
        'titre' => 'setTitre',
        'cust_name' => 'setCustName',
        'ref_commande' => 'setRefCommande',
        'id_service_sicom' => 'setIdServiceSicom',
        'ref_service' => 'setRefService',
        'cust_address' => 'setCustAddress',
        'ref_tiers' => 'setRefTiers',
        'date_creation' => 'setDateCreation',
        'date_ouverture' => 'setDateOuverture',
        'date_resolution' => 'setDateResolution',
        'date_cloture' => 'setDateCloture',
        'last_message' => 'setLastMessage',
        'running_process' => 'setRunningProcess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'operator_id' => 'getOperatorId',
        'operator_name' => 'getOperatorName',
        'numero' => 'getNumero',
        'etat' => 'getEtat',
        'etat_lib' => 'getEtatLib',
        'titre' => 'getTitre',
        'cust_name' => 'getCustName',
        'ref_commande' => 'getRefCommande',
        'id_service_sicom' => 'getIdServiceSicom',
        'ref_service' => 'getRefService',
        'cust_address' => 'getCustAddress',
        'ref_tiers' => 'getRefTiers',
        'date_creation' => 'getDateCreation',
        'date_ouverture' => 'getDateOuverture',
        'date_resolution' => 'getDateResolution',
        'date_cloture' => 'getDateCloture',
        'last_message' => 'getLastMessage',
        'running_process' => 'getRunningProcess'
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
        $this->setIfExists('operator_id', $data ?? [], null);
        $this->setIfExists('operator_name', $data ?? [], null);
        $this->setIfExists('numero', $data ?? [], null);
        $this->setIfExists('etat', $data ?? [], null);
        $this->setIfExists('etat_lib', $data ?? [], null);
        $this->setIfExists('titre', $data ?? [], null);
        $this->setIfExists('cust_name', $data ?? [], null);
        $this->setIfExists('ref_commande', $data ?? [], null);
        $this->setIfExists('id_service_sicom', $data ?? [], null);
        $this->setIfExists('ref_service', $data ?? [], null);
        $this->setIfExists('cust_address', $data ?? [], null);
        $this->setIfExists('ref_tiers', $data ?? [], null);
        $this->setIfExists('date_creation', $data ?? [], null);
        $this->setIfExists('date_ouverture', $data ?? [], null);
        $this->setIfExists('date_resolution', $data ?? [], null);
        $this->setIfExists('date_cloture', $data ?? [], null);
        $this->setIfExists('last_message', $data ?? [], null);
        $this->setIfExists('running_process', $data ?? [], null);
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
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
     * Gets operator_id
     *
     * @return int|null
     */
    public function getOperatorId()
    {
        return $this->container['operator_id'];
    }

    /**
     * Sets operator_id
     *
     * @param int|null $operator_id operator_id
     *
     * @return self
     */
    public function setOperatorId($operator_id)
    {
        if (is_null($operator_id)) {
            throw new \InvalidArgumentException('non-nullable operator_id cannot be null');
        }
        $this->container['operator_id'] = $operator_id;

        return $this;
    }

    /**
     * Gets operator_name
     *
     * @return string|null
     */
    public function getOperatorName()
    {
        return $this->container['operator_name'];
    }

    /**
     * Sets operator_name
     *
     * @param string|null $operator_name operator_name
     *
     * @return self
     */
    public function setOperatorName($operator_name)
    {
        if (is_null($operator_name)) {
            throw new \InvalidArgumentException('non-nullable operator_name cannot be null');
        }
        $this->container['operator_name'] = $operator_name;

        return $this;
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
            throw new \InvalidArgumentException('non-nullable numero cannot be null');
        }
        $this->container['numero'] = $numero;

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
            throw new \InvalidArgumentException('non-nullable etat cannot be null');
        }
        $this->container['etat'] = $etat;

        return $this;
    }

    /**
     * Gets etat_lib
     *
     * @return string|null
     */
    public function getEtatLib()
    {
        return $this->container['etat_lib'];
    }

    /**
     * Sets etat_lib
     *
     * @param string|null $etat_lib etat_lib
     *
     * @return self
     */
    public function setEtatLib($etat_lib)
    {
        if (is_null($etat_lib)) {
            throw new \InvalidArgumentException('non-nullable etat_lib cannot be null');
        }
        $this->container['etat_lib'] = $etat_lib;

        return $this;
    }

    /**
     * Gets titre
     *
     * @return string|null
     */
    public function getTitre()
    {
        return $this->container['titre'];
    }

    /**
     * Sets titre
     *
     * @param string|null $titre titre
     *
     * @return self
     */
    public function setTitre($titre)
    {
        if (is_null($titre)) {
            throw new \InvalidArgumentException('non-nullable titre cannot be null');
        }
        $this->container['titre'] = $titre;

        return $this;
    }

    /**
     * Gets cust_name
     *
     * @return string|null
     */
    public function getCustName()
    {
        return $this->container['cust_name'];
    }

    /**
     * Sets cust_name
     *
     * @param string|null $cust_name cust_name
     *
     * @return self
     */
    public function setCustName($cust_name)
    {
        if (is_null($cust_name)) {
            throw new \InvalidArgumentException('non-nullable cust_name cannot be null');
        }
        $this->container['cust_name'] = $cust_name;

        return $this;
    }

    /**
     * Gets ref_commande
     *
     * @return string|null
     */
    public function getRefCommande()
    {
        return $this->container['ref_commande'];
    }

    /**
     * Sets ref_commande
     *
     * @param string|null $ref_commande ref_commande
     *
     * @return self
     */
    public function setRefCommande($ref_commande)
    {
        if (is_null($ref_commande)) {
            throw new \InvalidArgumentException('non-nullable ref_commande cannot be null');
        }
        $this->container['ref_commande'] = $ref_commande;

        return $this;
    }

    /**
     * Gets id_service_sicom
     *
     * @return int|null
     */
    public function getIdServiceSicom()
    {
        return $this->container['id_service_sicom'];
    }

    /**
     * Sets id_service_sicom
     *
     * @param int|null $id_service_sicom id_service_sicom
     *
     * @return self
     */
    public function setIdServiceSicom($id_service_sicom)
    {
        if (is_null($id_service_sicom)) {
            throw new \InvalidArgumentException('non-nullable id_service_sicom cannot be null');
        }
        $this->container['id_service_sicom'] = $id_service_sicom;

        return $this;
    }

    /**
     * Gets ref_service
     *
     * @return string|null
     */
    public function getRefService()
    {
        return $this->container['ref_service'];
    }

    /**
     * Sets ref_service
     *
     * @param string|null $ref_service ref_service
     *
     * @return self
     */
    public function setRefService($ref_service)
    {
        if (is_null($ref_service)) {
            throw new \InvalidArgumentException('non-nullable ref_service cannot be null');
        }
        $this->container['ref_service'] = $ref_service;

        return $this;
    }

    /**
     * Gets cust_address
     *
     * @return string|null
     */
    public function getCustAddress()
    {
        return $this->container['cust_address'];
    }

    /**
     * Sets cust_address
     *
     * @param string|null $cust_address cust_address
     *
     * @return self
     */
    public function setCustAddress($cust_address)
    {
        if (is_null($cust_address)) {
            throw new \InvalidArgumentException('non-nullable cust_address cannot be null');
        }
        $this->container['cust_address'] = $cust_address;

        return $this;
    }

    /**
     * Gets ref_tiers
     *
     * @return string|null
     */
    public function getRefTiers()
    {
        return $this->container['ref_tiers'];
    }

    /**
     * Sets ref_tiers
     *
     * @param string|null $ref_tiers ref_tiers
     *
     * @return self
     */
    public function setRefTiers($ref_tiers)
    {
        if (is_null($ref_tiers)) {
            throw new \InvalidArgumentException('non-nullable ref_tiers cannot be null');
        }
        $this->container['ref_tiers'] = $ref_tiers;

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
            throw new \InvalidArgumentException('non-nullable date_creation cannot be null');
        }
        $this->container['date_creation'] = $date_creation;

        return $this;
    }

    /**
     * Gets date_ouverture
     *
     * @return string|null
     */
    public function getDateOuverture()
    {
        return $this->container['date_ouverture'];
    }

    /**
     * Sets date_ouverture
     *
     * @param string|null $date_ouverture date_ouverture
     *
     * @return self
     */
    public function setDateOuverture($date_ouverture)
    {
        if (is_null($date_ouverture)) {
            throw new \InvalidArgumentException('non-nullable date_ouverture cannot be null');
        }
        $this->container['date_ouverture'] = $date_ouverture;

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
            throw new \InvalidArgumentException('non-nullable date_resolution cannot be null');
        }
        $this->container['date_resolution'] = $date_resolution;

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
            throw new \InvalidArgumentException('non-nullable date_cloture cannot be null');
        }
        $this->container['date_cloture'] = $date_cloture;

        return $this;
    }

    /**
     * Gets last_message
     *
     * @return string|null
     */
    public function getLastMessage()
    {
        return $this->container['last_message'];
    }

    /**
     * Sets last_message
     *
     * @param string|null $last_message last_message
     *
     * @return self
     */
    public function setLastMessage($last_message)
    {
        if (is_null($last_message)) {
            throw new \InvalidArgumentException('non-nullable last_message cannot be null');
        }
        $this->container['last_message'] = $last_message;

        return $this;
    }

    /**
     * Gets running_process
     *
     * @return \InfracorpExtranetClient\Model\RunningProcess[]|null
     */
    public function getRunningProcess()
    {
        return $this->container['running_process'];
    }

    /**
     * Sets running_process
     *
     * @param \InfracorpExtranetClient\Model\RunningProcess[]|null $running_process running_process
     *
     * @return self
     */
    public function setRunningProcess($running_process)
    {
        if (is_null($running_process)) {
            throw new \InvalidArgumentException('non-nullable running_process cannot be null');
        }
        $this->container['running_process'] = $running_process;

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


