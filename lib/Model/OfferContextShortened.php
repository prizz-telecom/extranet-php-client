<?php
/**
 * OfferContextShortened
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
 * OfferContextShortened Class Doc Comment
 *
 * @category Class
 * @package  Infracorp\Extranet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OfferContextShortened implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferContextShortened';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offer_id' => 'int',
        'total' => 'int',
        'total_without_nrc' => 'int',
        'has_to_estimate_products' => 'bool',
        'items_ids' => 'int[]',
        'attributes' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offer_id' => null,
        'total' => null,
        'total_without_nrc' => null,
        'has_to_estimate_products' => null,
        'items_ids' => null,
        'attributes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offer_id' => false,
		'total' => false,
		'total_without_nrc' => false,
		'has_to_estimate_products' => false,
		'items_ids' => false,
		'attributes' => false
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
        'offer_id' => 'offerId',
        'total' => 'total',
        'total_without_nrc' => 'totalWithoutNrc',
        'has_to_estimate_products' => 'hasToEstimateProducts',
        'items_ids' => 'itemsIds',
        'attributes' => 'attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_id' => 'setOfferId',
        'total' => 'setTotal',
        'total_without_nrc' => 'setTotalWithoutNrc',
        'has_to_estimate_products' => 'setHasToEstimateProducts',
        'items_ids' => 'setItemsIds',
        'attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_id' => 'getOfferId',
        'total' => 'getTotal',
        'total_without_nrc' => 'getTotalWithoutNrc',
        'has_to_estimate_products' => 'getHasToEstimateProducts',
        'items_ids' => 'getItemsIds',
        'attributes' => 'getAttributes'
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
        $this->setIfExists('offer_id', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('total_without_nrc', $data ?? [], null);
        $this->setIfExists('has_to_estimate_products', $data ?? [], null);
        $this->setIfExists('items_ids', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
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
     * Gets offer_id
     *
     * @return int|null
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param int|null $offer_id offer_id
     *
     * @return self
     */
    public function setOfferId($offer_id)
    {
        if (is_null($offer_id)) {
            throw new \InvalidArgumentException('non-nullable offer_id cannot be null');
        }
        $this->container['offer_id'] = $offer_id;

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
     * @param int|null $total total
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
     * @param int|null $total_without_nrc total_without_nrc
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
     * Gets has_to_estimate_products
     *
     * @return bool|null
     */
    public function getHasToEstimateProducts()
    {
        return $this->container['has_to_estimate_products'];
    }

    /**
     * Sets has_to_estimate_products
     *
     * @param bool|null $has_to_estimate_products has_to_estimate_products
     *
     * @return self
     */
    public function setHasToEstimateProducts($has_to_estimate_products)
    {
        if (is_null($has_to_estimate_products)) {
            throw new \InvalidArgumentException('non-nullable has_to_estimate_products cannot be null');
        }
        $this->container['has_to_estimate_products'] = $has_to_estimate_products;

        return $this;
    }

    /**
     * Gets items_ids
     *
     * @return int[]|null
     */
    public function getItemsIds()
    {
        return $this->container['items_ids'];
    }

    /**
     * Sets items_ids
     *
     * @param int[]|null $items_ids items_ids
     *
     * @return self
     */
    public function setItemsIds($items_ids)
    {
        if (is_null($items_ids)) {
            throw new \InvalidArgumentException('non-nullable items_ids cannot be null');
        }
        $this->container['items_ids'] = $items_ids;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return int[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param int[]|null $attributes attributes
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


