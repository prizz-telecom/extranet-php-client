<?php
/**
 * PriceListItem
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
 * PriceListItem Class Doc Comment
 *
 * @category Class
 * @package  Infracorp\Extranet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PriceListItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PriceListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'create_date' => '\DateTime',
        'last_modified_date' => '\DateTime',
        'name' => 'string',
        'unit_price' => 'int',
        'unit_price_str' => 'string',
        'unit' => 'string',
        'vat' => 'string',
        'recurrence' => 'string',
        'price_list_id' => 'int',
        'product' => '\Infracorp\Extranet\Client\Model\Product',
        'commercial_code' => 'string',
        'description' => 'string',
        'inside_offer_only' => 'bool',
        'to_estimate' => 'bool',
        'active' => 'bool'
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
        'create_date' => 'date-time',
        'last_modified_date' => 'date-time',
        'name' => null,
        'unit_price' => null,
        'unit_price_str' => null,
        'unit' => null,
        'vat' => null,
        'recurrence' => null,
        'price_list_id' => null,
        'product' => null,
        'commercial_code' => null,
        'description' => null,
        'inside_offer_only' => null,
        'to_estimate' => null,
        'active' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'create_date' => false,
		'last_modified_date' => true,
		'name' => false,
		'unit_price' => true,
		'unit_price_str' => false,
		'unit' => true,
		'vat' => true,
		'recurrence' => true,
		'price_list_id' => false,
		'product' => false,
		'commercial_code' => false,
		'description' => true,
		'inside_offer_only' => false,
		'to_estimate' => false,
		'active' => false
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
        'create_date' => 'createDate',
        'last_modified_date' => 'lastModifiedDate',
        'name' => 'name',
        'unit_price' => 'unitPrice',
        'unit_price_str' => 'unitPriceStr',
        'unit' => 'unit',
        'vat' => 'vat',
        'recurrence' => 'recurrence',
        'price_list_id' => 'priceListId',
        'product' => 'product',
        'commercial_code' => 'commercialCode',
        'description' => 'description',
        'inside_offer_only' => 'insideOfferOnly',
        'to_estimate' => 'toEstimate',
        'active' => 'active'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'create_date' => 'setCreateDate',
        'last_modified_date' => 'setLastModifiedDate',
        'name' => 'setName',
        'unit_price' => 'setUnitPrice',
        'unit_price_str' => 'setUnitPriceStr',
        'unit' => 'setUnit',
        'vat' => 'setVat',
        'recurrence' => 'setRecurrence',
        'price_list_id' => 'setPriceListId',
        'product' => 'setProduct',
        'commercial_code' => 'setCommercialCode',
        'description' => 'setDescription',
        'inside_offer_only' => 'setInsideOfferOnly',
        'to_estimate' => 'setToEstimate',
        'active' => 'setActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'create_date' => 'getCreateDate',
        'last_modified_date' => 'getLastModifiedDate',
        'name' => 'getName',
        'unit_price' => 'getUnitPrice',
        'unit_price_str' => 'getUnitPriceStr',
        'unit' => 'getUnit',
        'vat' => 'getVat',
        'recurrence' => 'getRecurrence',
        'price_list_id' => 'getPriceListId',
        'product' => 'getProduct',
        'commercial_code' => 'getCommercialCode',
        'description' => 'getDescription',
        'inside_offer_only' => 'getInsideOfferOnly',
        'to_estimate' => 'getToEstimate',
        'active' => 'getActive'
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

    public const RECURRENCE_MONTHLY = 'monthly';
    public const RECURRENCE_YEARLY = 'yearly';
    public const RECURRENCE_HALF_YEARLY = 'half-yearly';
    public const RECURRENCE_QUATERLY = 'quaterly';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecurrenceAllowableValues()
    {
        return [
            self::RECURRENCE_MONTHLY,
            self::RECURRENCE_YEARLY,
            self::RECURRENCE_HALF_YEARLY,
            self::RECURRENCE_QUATERLY,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('create_date', $data ?? [], null);
        $this->setIfExists('last_modified_date', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('unit_price', $data ?? [], null);
        $this->setIfExists('unit_price_str', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('recurrence', $data ?? [], null);
        $this->setIfExists('price_list_id', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('commercial_code', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('inside_offer_only', $data ?? [], null);
        $this->setIfExists('to_estimate', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
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

        $allowedValues = $this->getRecurrenceAllowableValues();
        if (!is_null($this->container['recurrence']) && !in_array($this->container['recurrence'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'recurrence', must be one of '%s'",
                $this->container['recurrence'],
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
     * Gets unit_price
     *
     * @return int|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param int|null $unit_price unit_price
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        if (is_null($unit_price)) {
            array_push($this->openAPINullablesSetToNull, 'unit_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unit_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets unit_price_str
     *
     * @return string|null
     */
    public function getUnitPriceStr()
    {
        return $this->container['unit_price_str'];
    }

    /**
     * Sets unit_price_str
     *
     * @param string|null $unit_price_str unit_price_str
     *
     * @return self
     */
    public function setUnitPriceStr($unit_price_str)
    {
        if (is_null($unit_price_str)) {
            throw new \InvalidArgumentException('non-nullable unit_price_str cannot be null');
        }
        $this->container['unit_price_str'] = $unit_price_str;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            array_push($this->openAPINullablesSetToNull, 'unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return string|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param string|null $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        if (is_null($vat)) {
            array_push($this->openAPINullablesSetToNull, 'vat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vat', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets recurrence
     *
     * @return string|null
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param string|null $recurrence recurrence
     *
     * @return self
     */
    public function setRecurrence($recurrence)
    {
        if (is_null($recurrence)) {
            array_push($this->openAPINullablesSetToNull, 'recurrence');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recurrence', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getRecurrenceAllowableValues();
        if (!is_null($recurrence) && !in_array($recurrence, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'recurrence', must be one of '%s'",
                    $recurrence,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recurrence'] = $recurrence;

        return $this;
    }

    /**
     * Gets price_list_id
     *
     * @return int|null
     */
    public function getPriceListId()
    {
        return $this->container['price_list_id'];
    }

    /**
     * Sets price_list_id
     *
     * @param int|null $price_list_id price_list_id
     *
     * @return self
     */
    public function setPriceListId($price_list_id)
    {
        if (is_null($price_list_id)) {
            throw new \InvalidArgumentException('non-nullable price_list_id cannot be null');
        }
        $this->container['price_list_id'] = $price_list_id;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Infracorp\Extranet\Client\Model\Product|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Infracorp\Extranet\Client\Model\Product|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets commercial_code
     *
     * @return string|null
     */
    public function getCommercialCode()
    {
        return $this->container['commercial_code'];
    }

    /**
     * Sets commercial_code
     *
     * @param string|null $commercial_code commercial_code
     *
     * @return self
     */
    public function setCommercialCode($commercial_code)
    {
        if (is_null($commercial_code)) {
            throw new \InvalidArgumentException('non-nullable commercial_code cannot be null');
        }
        $this->container['commercial_code'] = $commercial_code;

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
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets inside_offer_only
     *
     * @return bool|null
     */
    public function getInsideOfferOnly()
    {
        return $this->container['inside_offer_only'];
    }

    /**
     * Sets inside_offer_only
     *
     * @param bool|null $inside_offer_only inside_offer_only
     *
     * @return self
     */
    public function setInsideOfferOnly($inside_offer_only)
    {
        if (is_null($inside_offer_only)) {
            throw new \InvalidArgumentException('non-nullable inside_offer_only cannot be null');
        }
        $this->container['inside_offer_only'] = $inside_offer_only;

        return $this;
    }

    /**
     * Gets to_estimate
     *
     * @return bool|null
     */
    public function getToEstimate()
    {
        return $this->container['to_estimate'];
    }

    /**
     * Sets to_estimate
     *
     * @param bool|null $to_estimate to_estimate
     *
     * @return self
     */
    public function setToEstimate($to_estimate)
    {
        if (is_null($to_estimate)) {
            throw new \InvalidArgumentException('non-nullable to_estimate cannot be null');
        }
        $this->container['to_estimate'] = $to_estimate;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

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


