<?php
/**
 * InvoiceDetail
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
 * InvoiceDetail Class Doc Comment
 *
 * @category Class
 * @package  Infracorp\Extranet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InvoiceDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available_workflows' => 'string[]',
        'id' => 'int',
        'unit_price' => 'int',
        'unit_price_str' => 'string',
        'unit' => 'string',
        'vat' => 'string',
        'recurrence' => 'string',
        'quantity' => 'int',
        'unit_price_discount' => 'int',
        'unit_price_discount_str' => 'string',
        'name' => 'string',
        'house_number' => 'int',
        'house_number_complement' => 'string',
        'street_name' => 'string',
        'postal_code' => 'string',
        'city_name' => 'string',
        'insee_code' => 'string',
        'amount' => 'int',
        'amount_str' => 'string',
        'va_trate' => 'float',
        'service_id' => 'int',
        'service_contract_id' => 'int',
        'description' => 'string',
        'from_date' => '\DateTime',
        'to_date' => '\DateTime'
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
        'unit_price' => null,
        'unit_price_str' => null,
        'unit' => null,
        'vat' => null,
        'recurrence' => null,
        'quantity' => null,
        'unit_price_discount' => null,
        'unit_price_discount_str' => null,
        'name' => null,
        'house_number' => null,
        'house_number_complement' => null,
        'street_name' => null,
        'postal_code' => null,
        'city_name' => null,
        'insee_code' => null,
        'amount' => null,
        'amount_str' => null,
        'va_trate' => 'float',
        'service_id' => null,
        'service_contract_id' => null,
        'description' => null,
        'from_date' => 'date-time',
        'to_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'available_workflows' => false,
		'id' => false,
		'unit_price' => false,
		'unit_price_str' => false,
		'unit' => false,
		'vat' => false,
		'recurrence' => false,
		'quantity' => false,
		'unit_price_discount' => false,
		'unit_price_discount_str' => false,
		'name' => false,
		'house_number' => false,
		'house_number_complement' => false,
		'street_name' => false,
		'postal_code' => false,
		'city_name' => false,
		'insee_code' => false,
		'amount' => false,
		'amount_str' => false,
		'va_trate' => false,
		'service_id' => false,
		'service_contract_id' => false,
		'description' => false,
		'from_date' => false,
		'to_date' => false
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
        'unit_price' => 'unitPrice',
        'unit_price_str' => 'unitPriceStr',
        'unit' => 'unit',
        'vat' => 'vat',
        'recurrence' => 'recurrence',
        'quantity' => 'quantity',
        'unit_price_discount' => 'unitPriceDiscount',
        'unit_price_discount_str' => 'unitPriceDiscountStr',
        'name' => 'name',
        'house_number' => 'houseNumber',
        'house_number_complement' => 'houseNumberComplement',
        'street_name' => 'streetName',
        'postal_code' => 'postalCode',
        'city_name' => 'cityName',
        'insee_code' => 'inseeCode',
        'amount' => 'amount',
        'amount_str' => 'amountStr',
        'va_trate' => 'VATrate',
        'service_id' => 'serviceId',
        'service_contract_id' => 'serviceContractId',
        'description' => 'description',
        'from_date' => 'fromDate',
        'to_date' => 'toDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_workflows' => 'setAvailableWorkflows',
        'id' => 'setId',
        'unit_price' => 'setUnitPrice',
        'unit_price_str' => 'setUnitPriceStr',
        'unit' => 'setUnit',
        'vat' => 'setVat',
        'recurrence' => 'setRecurrence',
        'quantity' => 'setQuantity',
        'unit_price_discount' => 'setUnitPriceDiscount',
        'unit_price_discount_str' => 'setUnitPriceDiscountStr',
        'name' => 'setName',
        'house_number' => 'setHouseNumber',
        'house_number_complement' => 'setHouseNumberComplement',
        'street_name' => 'setStreetName',
        'postal_code' => 'setPostalCode',
        'city_name' => 'setCityName',
        'insee_code' => 'setInseeCode',
        'amount' => 'setAmount',
        'amount_str' => 'setAmountStr',
        'va_trate' => 'setVaTrate',
        'service_id' => 'setServiceId',
        'service_contract_id' => 'setServiceContractId',
        'description' => 'setDescription',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_workflows' => 'getAvailableWorkflows',
        'id' => 'getId',
        'unit_price' => 'getUnitPrice',
        'unit_price_str' => 'getUnitPriceStr',
        'unit' => 'getUnit',
        'vat' => 'getVat',
        'recurrence' => 'getRecurrence',
        'quantity' => 'getQuantity',
        'unit_price_discount' => 'getUnitPriceDiscount',
        'unit_price_discount_str' => 'getUnitPriceDiscountStr',
        'name' => 'getName',
        'house_number' => 'getHouseNumber',
        'house_number_complement' => 'getHouseNumberComplement',
        'street_name' => 'getStreetName',
        'postal_code' => 'getPostalCode',
        'city_name' => 'getCityName',
        'insee_code' => 'getInseeCode',
        'amount' => 'getAmount',
        'amount_str' => 'getAmountStr',
        'va_trate' => 'getVaTrate',
        'service_id' => 'getServiceId',
        'service_contract_id' => 'getServiceContractId',
        'description' => 'getDescription',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate'
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
    public const RECURRENCE_MONTHLY = 'monthly';
    public const RECURRENCE_YEARLY = 'yearly';
    public const RECURRENCE_HALF_YEARLY = 'half-yearly';
    public const RECURRENCE_QUATERLY = 'quaterly';

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
        ];
    }

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
        $this->setIfExists('available_workflows', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('unit_price', $data ?? [], null);
        $this->setIfExists('unit_price_str', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
        $this->setIfExists('recurrence', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('unit_price_discount', $data ?? [], null);
        $this->setIfExists('unit_price_discount_str', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('house_number', $data ?? [], null);
        $this->setIfExists('house_number_complement', $data ?? [], null);
        $this->setIfExists('street_name', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('city_name', $data ?? [], null);
        $this->setIfExists('insee_code', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('amount_str', $data ?? [], null);
        $this->setIfExists('va_trate', $data ?? [], null);
        $this->setIfExists('service_id', $data ?? [], null);
        $this->setIfExists('service_contract_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('from_date', $data ?? [], null);
        $this->setIfExists('to_date', $data ?? [], null);
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
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_str
     *
     * @return string|null
     */
    public function getAmountStr()
    {
        return $this->container['amount_str'];
    }

    /**
     * Sets amount_str
     *
     * @param string|null $amount_str amount_str
     *
     * @return self
     */
    public function setAmountStr($amount_str)
    {
        if (is_null($amount_str)) {
            throw new \InvalidArgumentException('non-nullable amount_str cannot be null');
        }
        $this->container['amount_str'] = $amount_str;

        return $this;
    }

    /**
     * Gets va_trate
     *
     * @return float|null
     */
    public function getVaTrate()
    {
        return $this->container['va_trate'];
    }

    /**
     * Sets va_trate
     *
     * @param float|null $va_trate va_trate
     *
     * @return self
     */
    public function setVaTrate($va_trate)
    {
        if (is_null($va_trate)) {
            throw new \InvalidArgumentException('non-nullable va_trate cannot be null');
        }
        $this->container['va_trate'] = $va_trate;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return int|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param int|null $service_id service_id
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        if (is_null($service_id)) {
            throw new \InvalidArgumentException('non-nullable service_id cannot be null');
        }
        $this->container['service_id'] = $service_id;

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
     * Gets from_date
     *
     * @return \DateTime|null
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime|null $from_date from_date
     *
     * @return self
     */
    public function setFromDate($from_date)
    {
        if (is_null($from_date)) {
            throw new \InvalidArgumentException('non-nullable from_date cannot be null');
        }
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime|null
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime|null $to_date to_date
     *
     * @return self
     */
    public function setToDate($to_date)
    {
        if (is_null($to_date)) {
            throw new \InvalidArgumentException('non-nullable to_date cannot be null');
        }
        $this->container['to_date'] = $to_date;

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


