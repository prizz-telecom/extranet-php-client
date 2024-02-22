<?php
/**
 * Service
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
 * Service Class Doc Comment
 *
 * @category Class
 * @package  InfracorpExtranetClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Service implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Service';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'unit_price_discount' => 'int',
        'unit_price_discount_str' => 'string',
        'house_number' => 'int',
        'house_number_complement' => 'string',
        'street_name' => 'string',
        'postal_code' => 'string',
        'city_name' => 'string',
        'insee_code' => 'string',
        'create_date' => '\DateTime',
        'last_modified_date' => '\DateTime',
        'attributes' => 'object',
        'quantity' => 'int',
        'unit_price' => 'int',
        'unit_price_str' => 'string',
        'unit' => 'string',
        'vat' => 'string',
        'recurrence' => 'string',
        'product' => '\InfracorpExtranetClient\Model\Product',
        'status' => 'string',
        'subscription_date' => '\DateTime',
        'activation_date' => '\DateTime',
        'end_date' => '\DateTime',
        'termination_date' => '\DateTime',
        'service_contract_id' => 'int',
        'paid_until' => '\DateTime'
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
        'unit_price_discount' => null,
        'unit_price_discount_str' => null,
        'house_number' => null,
        'house_number_complement' => null,
        'street_name' => null,
        'postal_code' => null,
        'city_name' => null,
        'insee_code' => null,
        'create_date' => 'date-time',
        'last_modified_date' => 'date-time',
        'attributes' => null,
        'quantity' => null,
        'unit_price' => null,
        'unit_price_str' => null,
        'unit' => null,
        'vat' => null,
        'recurrence' => null,
        'product' => null,
        'status' => null,
        'subscription_date' => 'date-time',
        'activation_date' => 'date-time',
        'end_date' => 'date-time',
        'termination_date' => 'date-time',
        'service_contract_id' => null,
        'paid_until' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'unit_price_discount' => false,
		'unit_price_discount_str' => false,
		'house_number' => false,
		'house_number_complement' => false,
		'street_name' => false,
		'postal_code' => false,
		'city_name' => false,
		'insee_code' => false,
		'create_date' => false,
		'last_modified_date' => false,
		'attributes' => false,
		'quantity' => false,
		'unit_price' => false,
		'unit_price_str' => false,
		'unit' => false,
		'vat' => false,
		'recurrence' => false,
		'product' => false,
		'status' => false,
		'subscription_date' => false,
		'activation_date' => false,
		'end_date' => false,
		'termination_date' => false,
		'service_contract_id' => false,
		'paid_until' => false
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
        'unit_price_discount' => 'unitPriceDiscount',
        'unit_price_discount_str' => 'unitPriceDiscountStr',
        'house_number' => 'houseNumber',
        'house_number_complement' => 'houseNumberComplement',
        'street_name' => 'streetName',
        'postal_code' => 'postalCode',
        'city_name' => 'cityName',
        'insee_code' => 'inseeCode',
        'create_date' => 'createDate',
        'last_modified_date' => 'lastModifiedDate',
        'attributes' => 'attributes',
        'quantity' => 'quantity',
        'unit_price' => 'unitPrice',
        'unit_price_str' => 'unitPriceStr',
        'unit' => 'unit',
        'vat' => 'vat',
        'recurrence' => 'recurrence',
        'product' => 'product',
        'status' => 'status',
        'subscription_date' => 'subscriptionDate',
        'activation_date' => 'activationDate',
        'end_date' => 'endDate',
        'termination_date' => 'terminationDate',
        'service_contract_id' => 'serviceContractId',
        'paid_until' => 'paidUntil'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'unit_price_discount' => 'setUnitPriceDiscount',
        'unit_price_discount_str' => 'setUnitPriceDiscountStr',
        'house_number' => 'setHouseNumber',
        'house_number_complement' => 'setHouseNumberComplement',
        'street_name' => 'setStreetName',
        'postal_code' => 'setPostalCode',
        'city_name' => 'setCityName',
        'insee_code' => 'setInseeCode',
        'create_date' => 'setCreateDate',
        'last_modified_date' => 'setLastModifiedDate',
        'attributes' => 'setAttributes',
        'quantity' => 'setQuantity',
        'unit_price' => 'setUnitPrice',
        'unit_price_str' => 'setUnitPriceStr',
        'unit' => 'setUnit',
        'vat' => 'setVat',
        'recurrence' => 'setRecurrence',
        'product' => 'setProduct',
        'status' => 'setStatus',
        'subscription_date' => 'setSubscriptionDate',
        'activation_date' => 'setActivationDate',
        'end_date' => 'setEndDate',
        'termination_date' => 'setTerminationDate',
        'service_contract_id' => 'setServiceContractId',
        'paid_until' => 'setPaidUntil'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'unit_price_discount' => 'getUnitPriceDiscount',
        'unit_price_discount_str' => 'getUnitPriceDiscountStr',
        'house_number' => 'getHouseNumber',
        'house_number_complement' => 'getHouseNumberComplement',
        'street_name' => 'getStreetName',
        'postal_code' => 'getPostalCode',
        'city_name' => 'getCityName',
        'insee_code' => 'getInseeCode',
        'create_date' => 'getCreateDate',
        'last_modified_date' => 'getLastModifiedDate',
        'attributes' => 'getAttributes',
        'quantity' => 'getQuantity',
        'unit_price' => 'getUnitPrice',
        'unit_price_str' => 'getUnitPriceStr',
        'unit' => 'getUnit',
        'vat' => 'getVat',
        'recurrence' => 'getRecurrence',
        'product' => 'getProduct',
        'status' => 'getStatus',
        'subscription_date' => 'getSubscriptionDate',
        'activation_date' => 'getActivationDate',
        'end_date' => 'getEndDate',
        'termination_date' => 'getTerminationDate',
        'service_contract_id' => 'getServiceContractId',
        'paid_until' => 'getPaidUntil'
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
    public const STATUS__NEW = 'new';
    public const STATUS_STAGING = 'staging';
    public const STATUS_ACTIVE = 'active';
    public const STATUS_ENDING = 'ending';
    public const STATUS_TERMINATED = 'terminated';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS__NEW,
            self::STATUS_STAGING,
            self::STATUS_ACTIVE,
            self::STATUS_ENDING,
            self::STATUS_TERMINATED,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('unit_price_discount', $data ?? [], null);
        $this->setIfExists('unit_price_discount_str', $data ?? [], null);
        $this->setIfExists('house_number', $data ?? [], null);
        $this->setIfExists('house_number_complement', $data ?? [], null);
        $this->setIfExists('street_name', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('city_name', $data ?? [], null);
        $this->setIfExists('insee_code', $data ?? [], null);
        $this->setIfExists('create_date', $data ?? [], null);
        $this->setIfExists('last_modified_date', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('unit_price', $data ?? [], null);
        $this->setIfExists('unit_price_str', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('recurrence', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('subscription_date', $data ?? [], null);
        $this->setIfExists('activation_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('termination_date', $data ?? [], null);
        $this->setIfExists('service_contract_id', $data ?? [], null);
        $this->setIfExists('paid_until', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets unit_price_discount
     *
     * @return int|null
     */
    public function getUnitPriceDiscount()
    {
        return $this->container['unit_price_discount'];
    }

    /**
     * Sets unit_price_discount
     *
     * @param int|null $unit_price_discount unit_price_discount
     *
     * @return self
     */
    public function setUnitPriceDiscount($unit_price_discount)
    {
        if (is_null($unit_price_discount)) {
            throw new \InvalidArgumentException('non-nullable unit_price_discount cannot be null');
        }
        $this->container['unit_price_discount'] = $unit_price_discount;

        return $this;
    }

    /**
     * Gets unit_price_discount_str
     *
     * @return string|null
     */
    public function getUnitPriceDiscountStr()
    {
        return $this->container['unit_price_discount_str'];
    }

    /**
     * Sets unit_price_discount_str
     *
     * @param string|null $unit_price_discount_str unit_price_discount_str
     *
     * @return self
     */
    public function setUnitPriceDiscountStr($unit_price_discount_str)
    {
        if (is_null($unit_price_discount_str)) {
            throw new \InvalidArgumentException('non-nullable unit_price_discount_str cannot be null');
        }
        $this->container['unit_price_discount_str'] = $unit_price_discount_str;

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
            throw new \InvalidArgumentException('non-nullable last_modified_date cannot be null');
        }
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object|null $attributes attributes
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
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

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
            throw new \InvalidArgumentException('non-nullable unit_price cannot be null');
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
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
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
            throw new \InvalidArgumentException('non-nullable vat cannot be null');
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
            throw new \InvalidArgumentException('non-nullable recurrence cannot be null');
        }
        $allowedValues = $this->getRecurrenceAllowableValues();
        if (!in_array($recurrence, $allowedValues, true)) {
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
     * Gets product
     *
     * @return \InfracorpExtranetClient\Model\Product|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \InfracorpExtranetClient\Model\Product|null $product product
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
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
     * Gets subscription_date
     *
     * @return \DateTime|null
     */
    public function getSubscriptionDate()
    {
        return $this->container['subscription_date'];
    }

    /**
     * Sets subscription_date
     *
     * @param \DateTime|null $subscription_date subscription_date
     *
     * @return self
     */
    public function setSubscriptionDate($subscription_date)
    {
        if (is_null($subscription_date)) {
            throw new \InvalidArgumentException('non-nullable subscription_date cannot be null');
        }
        $this->container['subscription_date'] = $subscription_date;

        return $this;
    }

    /**
     * Gets activation_date
     *
     * @return \DateTime|null
     */
    public function getActivationDate()
    {
        return $this->container['activation_date'];
    }

    /**
     * Sets activation_date
     *
     * @param \DateTime|null $activation_date activation_date
     *
     * @return self
     */
    public function setActivationDate($activation_date)
    {
        if (is_null($activation_date)) {
            throw new \InvalidArgumentException('non-nullable activation_date cannot be null');
        }
        $this->container['activation_date'] = $activation_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets termination_date
     *
     * @return \DateTime|null
     */
    public function getTerminationDate()
    {
        return $this->container['termination_date'];
    }

    /**
     * Sets termination_date
     *
     * @param \DateTime|null $termination_date termination_date
     *
     * @return self
     */
    public function setTerminationDate($termination_date)
    {
        if (is_null($termination_date)) {
            throw new \InvalidArgumentException('non-nullable termination_date cannot be null');
        }
        $this->container['termination_date'] = $termination_date;

        return $this;
    }

    /**
     * Gets service_contract_id
     *
     * @return int|null
     */
    public function getServiceContractId()
    {
        return $this->container['service_contract_id'];
    }

    /**
     * Sets service_contract_id
     *
     * @param int|null $service_contract_id service_contract_id
     *
     * @return self
     */
    public function setServiceContractId($service_contract_id)
    {
        if (is_null($service_contract_id)) {
            throw new \InvalidArgumentException('non-nullable service_contract_id cannot be null');
        }
        $this->container['service_contract_id'] = $service_contract_id;

        return $this;
    }

    /**
     * Gets paid_until
     *
     * @return \DateTime|null
     */
    public function getPaidUntil()
    {
        return $this->container['paid_until'];
    }

    /**
     * Sets paid_until
     *
     * @param \DateTime|null $paid_until paid_until
     *
     * @return self
     */
    public function setPaidUntil($paid_until)
    {
        if (is_null($paid_until)) {
            throw new \InvalidArgumentException('non-nullable paid_until cannot be null');
        }
        $this->container['paid_until'] = $paid_until;

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


