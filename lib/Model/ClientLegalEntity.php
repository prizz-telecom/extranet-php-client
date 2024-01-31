<?php
/**
 * ClientLegalEntity
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
 * ClientLegalEntity Class Doc Comment
 *
 * @category Class
 * @package  Infracorp\Extranet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClientLegalEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClientLegalEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'house_number' => 'int',
        'house_number_complement' => 'string',
        'street_name' => 'string',
        'postal_code' => 'string',
        'city_name' => 'string',
        'insee_code' => 'string',
        'url' => 'string',
        'num_vat_intracommunity' => 'string',
        'siren' => 'string',
        'code_ape' => 'string',
        'rcs' => 'string',
        'tel' => 'string',
        'email' => 'string',
        'arcep_code' => 'string',
        'contacts' => '\Infracorp\Extranet\Client\Model\Contact[]',
        'contracts' => '\Infracorp\Extranet\Client\Model\ClientContract[]'
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
        'name' => null,
        'house_number' => null,
        'house_number_complement' => null,
        'street_name' => null,
        'postal_code' => null,
        'city_name' => null,
        'insee_code' => null,
        'url' => null,
        'num_vat_intracommunity' => null,
        'siren' => null,
        'code_ape' => null,
        'rcs' => null,
        'tel' => null,
        'email' => null,
        'arcep_code' => null,
        'contacts' => null,
        'contracts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'house_number' => false,
		'house_number_complement' => false,
		'street_name' => false,
		'postal_code' => false,
		'city_name' => false,
		'insee_code' => false,
		'url' => false,
		'num_vat_intracommunity' => false,
		'siren' => false,
		'code_ape' => false,
		'rcs' => false,
		'tel' => false,
		'email' => false,
		'arcep_code' => false,
		'contacts' => false,
		'contracts' => false
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
        'name' => 'name',
        'house_number' => 'houseNumber',
        'house_number_complement' => 'houseNumberComplement',
        'street_name' => 'streetName',
        'postal_code' => 'postalCode',
        'city_name' => 'cityName',
        'insee_code' => 'inseeCode',
        'url' => 'url',
        'num_vat_intracommunity' => 'numVatIntracommunity',
        'siren' => 'siren',
        'code_ape' => 'codeApe',
        'rcs' => 'rcs',
        'tel' => 'tel',
        'email' => 'email',
        'arcep_code' => 'arcepCode',
        'contacts' => 'contacts',
        'contracts' => 'contracts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'house_number' => 'setHouseNumber',
        'house_number_complement' => 'setHouseNumberComplement',
        'street_name' => 'setStreetName',
        'postal_code' => 'setPostalCode',
        'city_name' => 'setCityName',
        'insee_code' => 'setInseeCode',
        'url' => 'setUrl',
        'num_vat_intracommunity' => 'setNumVatIntracommunity',
        'siren' => 'setSiren',
        'code_ape' => 'setCodeApe',
        'rcs' => 'setRcs',
        'tel' => 'setTel',
        'email' => 'setEmail',
        'arcep_code' => 'setArcepCode',
        'contacts' => 'setContacts',
        'contracts' => 'setContracts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'house_number' => 'getHouseNumber',
        'house_number_complement' => 'getHouseNumberComplement',
        'street_name' => 'getStreetName',
        'postal_code' => 'getPostalCode',
        'city_name' => 'getCityName',
        'insee_code' => 'getInseeCode',
        'url' => 'getUrl',
        'num_vat_intracommunity' => 'getNumVatIntracommunity',
        'siren' => 'getSiren',
        'code_ape' => 'getCodeApe',
        'rcs' => 'getRcs',
        'tel' => 'getTel',
        'email' => 'getEmail',
        'arcep_code' => 'getArcepCode',
        'contacts' => 'getContacts',
        'contracts' => 'getContracts'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('house_number', $data ?? [], null);
        $this->setIfExists('house_number_complement', $data ?? [], null);
        $this->setIfExists('street_name', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('city_name', $data ?? [], null);
        $this->setIfExists('insee_code', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('num_vat_intracommunity', $data ?? [], null);
        $this->setIfExists('siren', $data ?? [], null);
        $this->setIfExists('code_ape', $data ?? [], null);
        $this->setIfExists('rcs', $data ?? [], null);
        $this->setIfExists('tel', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('arcep_code', $data ?? [], null);
        $this->setIfExists('contacts', $data ?? [], null);
        $this->setIfExists('contracts', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return int|null
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param int|null $house_number house_number
     *
     * @return self
     */
    public function setHouseNumber($house_number)
    {
        if (is_null($house_number)) {
            throw new \InvalidArgumentException('non-nullable house_number cannot be null');
        }
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets house_number_complement
     *
     * @return string|null
     */
    public function getHouseNumberComplement()
    {
        return $this->container['house_number_complement'];
    }

    /**
     * Sets house_number_complement
     *
     * @param string|null $house_number_complement house_number_complement
     *
     * @return self
     */
    public function setHouseNumberComplement($house_number_complement)
    {
        if (is_null($house_number_complement)) {
            throw new \InvalidArgumentException('non-nullable house_number_complement cannot be null');
        }
        $this->container['house_number_complement'] = $house_number_complement;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string|null $street_name street_name
     *
     * @return self
     */
    public function setStreetName($street_name)
    {
        if (is_null($street_name)) {
            throw new \InvalidArgumentException('non-nullable street_name cannot be null');
        }
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets city_name
     *
     * @return string|null
     */
    public function getCityName()
    {
        return $this->container['city_name'];
    }

    /**
     * Sets city_name
     *
     * @param string|null $city_name city_name
     *
     * @return self
     */
    public function setCityName($city_name)
    {
        if (is_null($city_name)) {
            throw new \InvalidArgumentException('non-nullable city_name cannot be null');
        }
        $this->container['city_name'] = $city_name;

        return $this;
    }

    /**
     * Gets insee_code
     *
     * @return string|null
     */
    public function getInseeCode()
    {
        return $this->container['insee_code'];
    }

    /**
     * Sets insee_code
     *
     * @param string|null $insee_code insee_code
     *
     * @return self
     */
    public function setInseeCode($insee_code)
    {
        if (is_null($insee_code)) {
            throw new \InvalidArgumentException('non-nullable insee_code cannot be null');
        }
        $this->container['insee_code'] = $insee_code;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets num_vat_intracommunity
     *
     * @return string|null
     */
    public function getNumVatIntracommunity()
    {
        return $this->container['num_vat_intracommunity'];
    }

    /**
     * Sets num_vat_intracommunity
     *
     * @param string|null $num_vat_intracommunity num_vat_intracommunity
     *
     * @return self
     */
    public function setNumVatIntracommunity($num_vat_intracommunity)
    {
        if (is_null($num_vat_intracommunity)) {
            throw new \InvalidArgumentException('non-nullable num_vat_intracommunity cannot be null');
        }
        $this->container['num_vat_intracommunity'] = $num_vat_intracommunity;

        return $this;
    }

    /**
     * Gets siren
     *
     * @return string|null
     */
    public function getSiren()
    {
        return $this->container['siren'];
    }

    /**
     * Sets siren
     *
     * @param string|null $siren siren
     *
     * @return self
     */
    public function setSiren($siren)
    {
        if (is_null($siren)) {
            throw new \InvalidArgumentException('non-nullable siren cannot be null');
        }
        $this->container['siren'] = $siren;

        return $this;
    }

    /**
     * Gets code_ape
     *
     * @return string|null
     */
    public function getCodeApe()
    {
        return $this->container['code_ape'];
    }

    /**
     * Sets code_ape
     *
     * @param string|null $code_ape code_ape
     *
     * @return self
     */
    public function setCodeApe($code_ape)
    {
        if (is_null($code_ape)) {
            throw new \InvalidArgumentException('non-nullable code_ape cannot be null');
        }
        $this->container['code_ape'] = $code_ape;

        return $this;
    }

    /**
     * Gets rcs
     *
     * @return string|null
     */
    public function getRcs()
    {
        return $this->container['rcs'];
    }

    /**
     * Sets rcs
     *
     * @param string|null $rcs rcs
     *
     * @return self
     */
    public function setRcs($rcs)
    {
        if (is_null($rcs)) {
            throw new \InvalidArgumentException('non-nullable rcs cannot be null');
        }
        $this->container['rcs'] = $rcs;

        return $this;
    }

    /**
     * Gets tel
     *
     * @return string|null
     */
    public function getTel()
    {
        return $this->container['tel'];
    }

    /**
     * Sets tel
     *
     * @param string|null $tel tel
     *
     * @return self
     */
    public function setTel($tel)
    {
        if (is_null($tel)) {
            throw new \InvalidArgumentException('non-nullable tel cannot be null');
        }
        $this->container['tel'] = $tel;

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
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets arcep_code
     *
     * @return string|null
     */
    public function getArcepCode()
    {
        return $this->container['arcep_code'];
    }

    /**
     * Sets arcep_code
     *
     * @param string|null $arcep_code arcep_code
     *
     * @return self
     */
    public function setArcepCode($arcep_code)
    {
        if (is_null($arcep_code)) {
            throw new \InvalidArgumentException('non-nullable arcep_code cannot be null');
        }
        $this->container['arcep_code'] = $arcep_code;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \Infracorp\Extranet\Client\Model\Contact[]|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \Infracorp\Extranet\Client\Model\Contact[]|null $contacts contacts
     *
     * @return self
     */
    public function setContacts($contacts)
    {
        if (is_null($contacts)) {
            throw new \InvalidArgumentException('non-nullable contacts cannot be null');
        }
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets contracts
     *
     * @return \Infracorp\Extranet\Client\Model\ClientContract[]|null
     */
    public function getContracts()
    {
        return $this->container['contracts'];
    }

    /**
     * Sets contracts
     *
     * @param \Infracorp\Extranet\Client\Model\ClientContract[]|null $contracts contracts
     *
     * @return self
     */
    public function setContracts($contracts)
    {
        if (is_null($contracts)) {
            throw new \InvalidArgumentException('non-nullable contracts cannot be null');
        }
        $this->container['contracts'] = $contracts;

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


