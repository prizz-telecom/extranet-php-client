<?php
/**
 * Invoice
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  Infracorp\Extranet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Invoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available_workflows' => 'string[]',
        'id' => 'int',
        'create_date' => '\DateTime',
        'last_modified_date' => '\DateTime',
        'rc_total' => 'array<string,int>',
        'rc_total_str' => 'array<string,string>',
        'rc_vat_total' => 'array<string,int>',
        'rc_vat_total_str' => 'array<string,string>',
        'nrc_total' => 'int',
        'nrc_total_str' => 'string',
        'nrc_vat_total' => 'int',
        'nrc_vat_total_str' => 'string',
        'client_legal_entity' => '\Infracorp\Extranet\Client\Model\ClientLegalEntity',
        'legal_entity' => '\Infracorp\Extranet\Client\Model\LegalEntity',
        'ref' => 'string',
        'month_period' => 'int',
        'year_period' => 'int',
        'total' => 'int',
        'total_str' => 'string',
        'total_vat' => 'int',
        'total_vat_str' => 'string',
        'details' => '\Infracorp\Extranet\Client\Model\InvoiceDetail[]',
        'use_vat_reverse_charge' => 'bool',
        'due_date' => '\DateTime',
        'submit_date' => '\DateTime'
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
        'create_date' => 'date-time',
        'last_modified_date' => 'date-time',
        'rc_total' => null,
        'rc_total_str' => null,
        'rc_vat_total' => null,
        'rc_vat_total_str' => null,
        'nrc_total' => null,
        'nrc_total_str' => null,
        'nrc_vat_total' => null,
        'nrc_vat_total_str' => null,
        'client_legal_entity' => null,
        'legal_entity' => null,
        'ref' => null,
        'month_period' => null,
        'year_period' => null,
        'total' => null,
        'total_str' => null,
        'total_vat' => null,
        'total_vat_str' => null,
        'details' => null,
        'use_vat_reverse_charge' => null,
        'due_date' => 'date-time',
        'submit_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'available_workflows' => false,
		'id' => false,
		'create_date' => false,
		'last_modified_date' => false,
		'rc_total' => false,
		'rc_total_str' => false,
		'rc_vat_total' => false,
		'rc_vat_total_str' => false,
		'nrc_total' => false,
		'nrc_total_str' => false,
		'nrc_vat_total' => false,
		'nrc_vat_total_str' => false,
		'client_legal_entity' => false,
		'legal_entity' => false,
		'ref' => false,
		'month_period' => false,
		'year_period' => false,
		'total' => false,
		'total_str' => false,
		'total_vat' => false,
		'total_vat_str' => false,
		'details' => false,
		'use_vat_reverse_charge' => false,
		'due_date' => false,
		'submit_date' => false
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
        'create_date' => 'createDate',
        'last_modified_date' => 'lastModifiedDate',
        'rc_total' => 'rcTotal',
        'rc_total_str' => 'rcTotalStr',
        'rc_vat_total' => 'rcVATTotal',
        'rc_vat_total_str' => 'rcVATTotalStr',
        'nrc_total' => 'nrcTotal',
        'nrc_total_str' => 'nrcTotalStr',
        'nrc_vat_total' => 'nrcVATTotal',
        'nrc_vat_total_str' => 'nrcVATTotalStr',
        'client_legal_entity' => 'clientLegalEntity',
        'legal_entity' => 'legalEntity',
        'ref' => 'ref',
        'month_period' => 'monthPeriod',
        'year_period' => 'yearPeriod',
        'total' => 'total',
        'total_str' => 'totalStr',
        'total_vat' => 'totalVAT',
        'total_vat_str' => 'totalVATStr',
        'details' => 'details',
        'use_vat_reverse_charge' => 'useVATReverseCharge',
        'due_date' => 'dueDate',
        'submit_date' => 'submitDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_workflows' => 'setAvailableWorkflows',
        'id' => 'setId',
        'create_date' => 'setCreateDate',
        'last_modified_date' => 'setLastModifiedDate',
        'rc_total' => 'setRcTotal',
        'rc_total_str' => 'setRcTotalStr',
        'rc_vat_total' => 'setRcVatTotal',
        'rc_vat_total_str' => 'setRcVatTotalStr',
        'nrc_total' => 'setNrcTotal',
        'nrc_total_str' => 'setNrcTotalStr',
        'nrc_vat_total' => 'setNrcVatTotal',
        'nrc_vat_total_str' => 'setNrcVatTotalStr',
        'client_legal_entity' => 'setClientLegalEntity',
        'legal_entity' => 'setLegalEntity',
        'ref' => 'setRef',
        'month_period' => 'setMonthPeriod',
        'year_period' => 'setYearPeriod',
        'total' => 'setTotal',
        'total_str' => 'setTotalStr',
        'total_vat' => 'setTotalVat',
        'total_vat_str' => 'setTotalVatStr',
        'details' => 'setDetails',
        'use_vat_reverse_charge' => 'setUseVatReverseCharge',
        'due_date' => 'setDueDate',
        'submit_date' => 'setSubmitDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_workflows' => 'getAvailableWorkflows',
        'id' => 'getId',
        'create_date' => 'getCreateDate',
        'last_modified_date' => 'getLastModifiedDate',
        'rc_total' => 'getRcTotal',
        'rc_total_str' => 'getRcTotalStr',
        'rc_vat_total' => 'getRcVatTotal',
        'rc_vat_total_str' => 'getRcVatTotalStr',
        'nrc_total' => 'getNrcTotal',
        'nrc_total_str' => 'getNrcTotalStr',
        'nrc_vat_total' => 'getNrcVatTotal',
        'nrc_vat_total_str' => 'getNrcVatTotalStr',
        'client_legal_entity' => 'getClientLegalEntity',
        'legal_entity' => 'getLegalEntity',
        'ref' => 'getRef',
        'month_period' => 'getMonthPeriod',
        'year_period' => 'getYearPeriod',
        'total' => 'getTotal',
        'total_str' => 'getTotalStr',
        'total_vat' => 'getTotalVat',
        'total_vat_str' => 'getTotalVatStr',
        'details' => 'getDetails',
        'use_vat_reverse_charge' => 'getUseVatReverseCharge',
        'due_date' => 'getDueDate',
        'submit_date' => 'getSubmitDate'
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
        $this->setIfExists('create_date', $data ?? [], null);
        $this->setIfExists('last_modified_date', $data ?? [], null);
        $this->setIfExists('rc_total', $data ?? [], null);
        $this->setIfExists('rc_total_str', $data ?? [], null);
        $this->setIfExists('rc_vat_total', $data ?? [], null);
        $this->setIfExists('rc_vat_total_str', $data ?? [], null);
        $this->setIfExists('nrc_total', $data ?? [], null);
        $this->setIfExists('nrc_total_str', $data ?? [], null);
        $this->setIfExists('nrc_vat_total', $data ?? [], null);
        $this->setIfExists('nrc_vat_total_str', $data ?? [], null);
        $this->setIfExists('client_legal_entity', $data ?? [], null);
        $this->setIfExists('legal_entity', $data ?? [], null);
        $this->setIfExists('ref', $data ?? [], null);
        $this->setIfExists('month_period', $data ?? [], null);
        $this->setIfExists('year_period', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('total_str', $data ?? [], null);
        $this->setIfExists('total_vat', $data ?? [], null);
        $this->setIfExists('total_vat_str', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('use_vat_reverse_charge', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('submit_date', $data ?? [], null);
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
     * Gets rc_total
     *
     * @return array<string,int>|null
     */
    public function getRcTotal()
    {
        return $this->container['rc_total'];
    }

    /**
     * Sets rc_total
     *
     * @param array<string,int>|null $rc_total rc_total
     *
     * @return self
     */
    public function setRcTotal($rc_total)
    {
        if (is_null($rc_total)) {
            throw new \InvalidArgumentException('non-nullable rc_total cannot be null');
        }
        $this->container['rc_total'] = $rc_total;

        return $this;
    }

    /**
     * Gets rc_total_str
     *
     * @return array<string,string>|null
     */
    public function getRcTotalStr()
    {
        return $this->container['rc_total_str'];
    }

    /**
     * Sets rc_total_str
     *
     * @param array<string,string>|null $rc_total_str rc_total_str
     *
     * @return self
     */
    public function setRcTotalStr($rc_total_str)
    {
        if (is_null($rc_total_str)) {
            throw new \InvalidArgumentException('non-nullable rc_total_str cannot be null');
        }
        $this->container['rc_total_str'] = $rc_total_str;

        return $this;
    }

    /**
     * Gets rc_vat_total
     *
     * @return array<string,int>|null
     */
    public function getRcVatTotal()
    {
        return $this->container['rc_vat_total'];
    }

    /**
     * Sets rc_vat_total
     *
     * @param array<string,int>|null $rc_vat_total rc_vat_total
     *
     * @return self
     */
    public function setRcVatTotal($rc_vat_total)
    {
        if (is_null($rc_vat_total)) {
            throw new \InvalidArgumentException('non-nullable rc_vat_total cannot be null');
        }
        $this->container['rc_vat_total'] = $rc_vat_total;

        return $this;
    }

    /**
     * Gets rc_vat_total_str
     *
     * @return array<string,string>|null
     */
    public function getRcVatTotalStr()
    {
        return $this->container['rc_vat_total_str'];
    }

    /**
     * Sets rc_vat_total_str
     *
     * @param array<string,string>|null $rc_vat_total_str rc_vat_total_str
     *
     * @return self
     */
    public function setRcVatTotalStr($rc_vat_total_str)
    {
        if (is_null($rc_vat_total_str)) {
            throw new \InvalidArgumentException('non-nullable rc_vat_total_str cannot be null');
        }
        $this->container['rc_vat_total_str'] = $rc_vat_total_str;

        return $this;
    }

    /**
     * Gets nrc_total
     *
     * @return int|null
     */
    public function getNrcTotal()
    {
        return $this->container['nrc_total'];
    }

    /**
     * Sets nrc_total
     *
     * @param int|null $nrc_total nrc_total
     *
     * @return self
     */
    public function setNrcTotal($nrc_total)
    {
        if (is_null($nrc_total)) {
            throw new \InvalidArgumentException('non-nullable nrc_total cannot be null');
        }
        $this->container['nrc_total'] = $nrc_total;

        return $this;
    }

    /**
     * Gets nrc_total_str
     *
     * @return string|null
     */
    public function getNrcTotalStr()
    {
        return $this->container['nrc_total_str'];
    }

    /**
     * Sets nrc_total_str
     *
     * @param string|null $nrc_total_str nrc_total_str
     *
     * @return self
     */
    public function setNrcTotalStr($nrc_total_str)
    {
        if (is_null($nrc_total_str)) {
            throw new \InvalidArgumentException('non-nullable nrc_total_str cannot be null');
        }
        $this->container['nrc_total_str'] = $nrc_total_str;

        return $this;
    }

    /**
     * Gets nrc_vat_total
     *
     * @return int|null
     */
    public function getNrcVatTotal()
    {
        return $this->container['nrc_vat_total'];
    }

    /**
     * Sets nrc_vat_total
     *
     * @param int|null $nrc_vat_total nrc_vat_total
     *
     * @return self
     */
    public function setNrcVatTotal($nrc_vat_total)
    {
        if (is_null($nrc_vat_total)) {
            throw new \InvalidArgumentException('non-nullable nrc_vat_total cannot be null');
        }
        $this->container['nrc_vat_total'] = $nrc_vat_total;

        return $this;
    }

    /**
     * Gets nrc_vat_total_str
     *
     * @return string|null
     */
    public function getNrcVatTotalStr()
    {
        return $this->container['nrc_vat_total_str'];
    }

    /**
     * Sets nrc_vat_total_str
     *
     * @param string|null $nrc_vat_total_str nrc_vat_total_str
     *
     * @return self
     */
    public function setNrcVatTotalStr($nrc_vat_total_str)
    {
        if (is_null($nrc_vat_total_str)) {
            throw new \InvalidArgumentException('non-nullable nrc_vat_total_str cannot be null');
        }
        $this->container['nrc_vat_total_str'] = $nrc_vat_total_str;

        return $this;
    }

    /**
     * Gets client_legal_entity
     *
     * @return \Infracorp\Extranet\Client\Model\ClientLegalEntity|null
     */
    public function getClientLegalEntity()
    {
        return $this->container['client_legal_entity'];
    }

    /**
     * Sets client_legal_entity
     *
     * @param \Infracorp\Extranet\Client\Model\ClientLegalEntity|null $client_legal_entity client_legal_entity
     *
     * @return self
     */
    public function setClientLegalEntity($client_legal_entity)
    {
        if (is_null($client_legal_entity)) {
            throw new \InvalidArgumentException('non-nullable client_legal_entity cannot be null');
        }
        $this->container['client_legal_entity'] = $client_legal_entity;

        return $this;
    }

    /**
     * Gets legal_entity
     *
     * @return \Infracorp\Extranet\Client\Model\LegalEntity|null
     */
    public function getLegalEntity()
    {
        return $this->container['legal_entity'];
    }

    /**
     * Sets legal_entity
     *
     * @param \Infracorp\Extranet\Client\Model\LegalEntity|null $legal_entity legal_entity
     *
     * @return self
     */
    public function setLegalEntity($legal_entity)
    {
        if (is_null($legal_entity)) {
            throw new \InvalidArgumentException('non-nullable legal_entity cannot be null');
        }
        $this->container['legal_entity'] = $legal_entity;

        return $this;
    }

    /**
     * Gets ref
     *
     * @return string|null
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param string|null $ref ref
     *
     * @return self
     */
    public function setRef($ref)
    {
        if (is_null($ref)) {
            throw new \InvalidArgumentException('non-nullable ref cannot be null');
        }
        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets month_period
     *
     * @return int|null
     */
    public function getMonthPeriod()
    {
        return $this->container['month_period'];
    }

    /**
     * Sets month_period
     *
     * @param int|null $month_period month_period
     *
     * @return self
     */
    public function setMonthPeriod($month_period)
    {
        if (is_null($month_period)) {
            throw new \InvalidArgumentException('non-nullable month_period cannot be null');
        }
        $this->container['month_period'] = $month_period;

        return $this;
    }

    /**
     * Gets year_period
     *
     * @return int|null
     */
    public function getYearPeriod()
    {
        return $this->container['year_period'];
    }

    /**
     * Sets year_period
     *
     * @param int|null $year_period year_period
     *
     * @return self
     */
    public function setYearPeriod($year_period)
    {
        if (is_null($year_period)) {
            throw new \InvalidArgumentException('non-nullable year_period cannot be null');
        }
        $this->container['year_period'] = $year_period;

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
     * Gets total_str
     *
     * @return string|null
     */
    public function getTotalStr()
    {
        return $this->container['total_str'];
    }

    /**
     * Sets total_str
     *
     * @param string|null $total_str total_str
     *
     * @return self
     */
    public function setTotalStr($total_str)
    {
        if (is_null($total_str)) {
            throw new \InvalidArgumentException('non-nullable total_str cannot be null');
        }
        $this->container['total_str'] = $total_str;

        return $this;
    }

    /**
     * Gets total_vat
     *
     * @return int|null
     */
    public function getTotalVat()
    {
        return $this->container['total_vat'];
    }

    /**
     * Sets total_vat
     *
     * @param int|null $total_vat total_vat
     *
     * @return self
     */
    public function setTotalVat($total_vat)
    {
        if (is_null($total_vat)) {
            throw new \InvalidArgumentException('non-nullable total_vat cannot be null');
        }
        $this->container['total_vat'] = $total_vat;

        return $this;
    }

    /**
     * Gets total_vat_str
     *
     * @return string|null
     */
    public function getTotalVatStr()
    {
        return $this->container['total_vat_str'];
    }

    /**
     * Sets total_vat_str
     *
     * @param string|null $total_vat_str total_vat_str
     *
     * @return self
     */
    public function setTotalVatStr($total_vat_str)
    {
        if (is_null($total_vat_str)) {
            throw new \InvalidArgumentException('non-nullable total_vat_str cannot be null');
        }
        $this->container['total_vat_str'] = $total_vat_str;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Infracorp\Extranet\Client\Model\InvoiceDetail[]|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Infracorp\Extranet\Client\Model\InvoiceDetail[]|null $details details
     *
     * @return self
     */
    public function setDetails($details)
    {
        if (is_null($details)) {
            throw new \InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets use_vat_reverse_charge
     *
     * @return bool|null
     */
    public function getUseVatReverseCharge()
    {
        return $this->container['use_vat_reverse_charge'];
    }

    /**
     * Sets use_vat_reverse_charge
     *
     * @param bool|null $use_vat_reverse_charge use_vat_reverse_charge
     *
     * @return self
     */
    public function setUseVatReverseCharge($use_vat_reverse_charge)
    {
        if (is_null($use_vat_reverse_charge)) {
            throw new \InvalidArgumentException('non-nullable use_vat_reverse_charge cannot be null');
        }
        $this->container['use_vat_reverse_charge'] = $use_vat_reverse_charge;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date due_date
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            throw new \InvalidArgumentException('non-nullable due_date cannot be null');
        }
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets submit_date
     *
     * @return \DateTime|null
     */
    public function getSubmitDate()
    {
        return $this->container['submit_date'];
    }

    /**
     * Sets submit_date
     *
     * @param \DateTime|null $submit_date submit_date
     *
     * @return self
     */
    public function setSubmitDate($submit_date)
    {
        if (is_null($submit_date)) {
            throw new \InvalidArgumentException('non-nullable submit_date cannot be null');
        }
        $this->container['submit_date'] = $submit_date;

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


