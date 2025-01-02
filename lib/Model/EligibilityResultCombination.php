<?php
/**
 * EligibilityResultCombination
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
 * EligibilityResultCombination Class Doc Comment
 *
 * @category Class
 * @package  Infracorp\Extranet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EligibilityResultCombination implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EligibilityResultCombination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'combination_id' => 'string',
        'total' => 'int',
        'total_without_nrc' => 'int',
        'nrc' => 'int',
        'attributes' => 'array<string,mixed>',
        'nrc_to_estimate' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'combination_id' => null,
        'total' => null,
        'total_without_nrc' => null,
        'nrc' => null,
        'attributes' => null,
        'nrc_to_estimate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'combination_id' => false,
        'total' => false,
        'total_without_nrc' => false,
        'nrc' => true,
        'attributes' => false,
        'nrc_to_estimate' => false
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
        'combination_id' => 'combinationId',
        'total' => 'total',
        'total_without_nrc' => 'totalWithoutNrc',
        'nrc' => 'nrc',
        'attributes' => 'attributes',
        'nrc_to_estimate' => 'nrcToEstimate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'combination_id' => 'setCombinationId',
        'total' => 'setTotal',
        'total_without_nrc' => 'setTotalWithoutNrc',
        'nrc' => 'setNrc',
        'attributes' => 'setAttributes',
        'nrc_to_estimate' => 'setNrcToEstimate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'combination_id' => 'getCombinationId',
        'total' => 'getTotal',
        'total_without_nrc' => 'getTotalWithoutNrc',
        'nrc' => 'getNrc',
        'attributes' => 'getAttributes',
        'nrc_to_estimate' => 'getNrcToEstimate'
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
        $this->setIfExists('combination_id', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('total_without_nrc', $data ?? [], null);
        $this->setIfExists('nrc', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('nrc_to_estimate', $data ?? [], null);
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
     * Gets combination_id
     *
     * @return string|null
     */
    public function getCombinationId()
    {
        return $this->container['combination_id'];
    }

    /**
     * Sets combination_id
     *
     * @param string|null $combination_id Combination id, a unique identifier for the combination
     *
     * @return self
     */
    public function setCombinationId($combination_id)
    {
        if (is_null($combination_id)) {
            throw new \InvalidArgumentException('non-nullable combination_id cannot be null');
        }
        $this->container['combination_id'] = $combination_id;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total Total cost in €x100
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets total_without_nrc
     *
     * @return int|null
     */
    public function getTotalWithoutNrc()
    {
        return $this->container['total_without_nrc'];
    }

    /**
     * Sets total_without_nrc
     *
     * @param int|null $total_without_nrc Total recuring cost in €x100
     *
     * @return self
     */
    public function setTotalWithoutNrc($total_without_nrc)
    {
        if (is_null($total_without_nrc)) {
            throw new \InvalidArgumentException('non-nullable total_without_nrc cannot be null');
        }
        $this->container['total_without_nrc'] = $total_without_nrc;

        return $this;
    }

    /**
     * Gets nrc
     *
     * @return int|null
     */
    public function getNrc()
    {
        return $this->container['nrc'];
    }

    /**
     * Sets nrc
     *
     * @param int|null $nrc Total non recuring cost in €x100
     *
     * @return self
     */
    public function setNrc($nrc)
    {
        if (is_null($nrc)) {
            array_push($this->openAPINullablesSetToNull, 'nrc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nrc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nrc'] = $nrc;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return array<string,mixed>|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param array<string,mixed>|null $attributes Attributes of the combination
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets nrc_to_estimate
     *
     * @return bool|null
     */
    public function getNrcToEstimate()
    {
        return $this->container['nrc_to_estimate'];
    }

    /**
     * Sets nrc_to_estimate
     *
     * @param bool|null $nrc_to_estimate If offer contains a NRC to estimate
     *
     * @return self
     */
    public function setNrcToEstimate($nrc_to_estimate)
    {
        if (is_null($nrc_to_estimate)) {
            throw new \InvalidArgumentException('non-nullable nrc_to_estimate cannot be null');
        }
        $this->container['nrc_to_estimate'] = $nrc_to_estimate;

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


