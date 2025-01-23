<?php
/**
 * CommercialOfferSection
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
 * Prizz-Telecom Extranet API https://dev.prizz-telecom.fr/
 *
 * The version of the OpenAPI document: 2.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
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
 * CommercialOfferSection Class Doc Comment
 *
 * @category Class
 * @package  Infracorp\Extranet\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CommercialOfferSection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CommercialOfferSection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available_workflows' => 'string[]',
        'id' => 'int',
        'name' => 'string',
        'commercial_offer_id' => 'int',
        'client_reference' => 'string',
        'commercial_offer_items' => '\Infracorp\Extranet\Client\Model\CommercialOfferItem[]',
        'offer' => '\Infracorp\Extranet\Client\Model\Offer',
        'service_contract' => '\Infracorp\Extranet\Client\Model\ServiceContract',
        'client_contract' => '\Infracorp\Extranet\Client\Model\ClientContract'
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
        'name' => null,
        'commercial_offer_id' => null,
        'client_reference' => null,
        'commercial_offer_items' => null,
        'offer' => null,
        'service_contract' => null,
        'client_contract' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'available_workflows' => false,
        'id' => false,
        'name' => false,
        'commercial_offer_id' => false,
        'client_reference' => true,
        'commercial_offer_items' => false,
        'offer' => false,
        'service_contract' => false,
        'client_contract' => false
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
        'name' => 'name',
        'commercial_offer_id' => 'commercialOfferId',
        'client_reference' => 'clientReference',
        'commercial_offer_items' => 'commercialOfferItems',
        'offer' => 'offer',
        'service_contract' => 'serviceContract',
        'client_contract' => 'clientContract'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_workflows' => 'setAvailableWorkflows',
        'id' => 'setId',
        'name' => 'setName',
        'commercial_offer_id' => 'setCommercialOfferId',
        'client_reference' => 'setClientReference',
        'commercial_offer_items' => 'setCommercialOfferItems',
        'offer' => 'setOffer',
        'service_contract' => 'setServiceContract',
        'client_contract' => 'setClientContract'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_workflows' => 'getAvailableWorkflows',
        'id' => 'getId',
        'name' => 'getName',
        'commercial_offer_id' => 'getCommercialOfferId',
        'client_reference' => 'getClientReference',
        'commercial_offer_items' => 'getCommercialOfferItems',
        'offer' => 'getOffer',
        'service_contract' => 'getServiceContract',
        'client_contract' => 'getClientContract'
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

    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CLIENT_LEGAL_ENTITY_CREATE_COMMERCIAL_OFFER_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntity\\CreateCommercialOffer\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_SUBMIT_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\Submit\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_SIGN_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\Sign\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_RENAME_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\Rename\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_ADD_SECTION_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\AddSection\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_REMOVE_SECTION_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\RemoveSection\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_RENAME_SECTION_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\RenameSection\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_UPDATE_OFFER_ITEM_IN_OFFER_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\UpdateOfferItemInOffer\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_SET_OFFER_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\SetOffer\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMENT_ADD_COMMENT_CONTEXT = 'Infracorp\\Services\\Workflow\\Comment\\AddComment\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMENT_SUBSCRIBE_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\Comment\\SubscribeThread\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMENT_UPDATE_COMMENT_CONTEXT = 'Infracorp\\Services\\Workflow\\Comment\\UpdateComment\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMENT_UPDATE_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\Comment\\UpdateThread\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CLIENT_LEGAL_ENTITY_CREATE_COMMENT_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntity\\CreateCommentThread\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_SERVICE_CONTRACT_CREATE_COMMENT_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\ServiceContract\\CreateCommentThread\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_INVOICE_CREATE_COMMENT_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\Invoice\\CreateCommentThread\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_CREATE_COMMENT_THREAD_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\CreateCommentThread\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_USERS_CREATE_TOKEN_CONTEXT = 'Infracorp\\Services\\Workflow\\Users\\CreateToken\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_USERS_REVOKE_TOKEN_CONTEXT = 'Infracorp\\Services\\Workflow\\Users\\RevokeToken\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_UPDATE_SUBSCRIBERS_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\UpdateSubscribers\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_ADD_ITEM_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\AddItem\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_REMOVE_ITEM_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\RemoveItem\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_UPDATE_SECTION_ITEMS_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\UpdateSectionItems\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CLIENT_LEGAL_ENTITY_ASSIGN_CONTACT_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntity\\AssignContact\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CLIENT_LEGAL_ENTITY_ADD_CONTACT_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntity\\AddContact\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CLIENT_LEGAL_ENTITY_CONTACT_SWITCH_ACTIVE_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntityContact\\SwitchActive\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CONTACT_UPDATE_CONTEXT = 'Infracorp\\Services\\Workflow\\Contact\\Update\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_SERVICE_CONTRACT_UPDATE_DESCRIPTION_CONTEXT = 'Infracorp\\Services\\Workflow\\ServiceContract\\UpdateDescription\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_SERVICE_CONTRACT_UPDATE_CLIENT_REF_CONTEXT = 'Infracorp\\Services\\Workflow\\ServiceContract\\UpdateClientRef\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_SERVICE_CONTRACT_ACTIVATION_SETUP_L2_CONTEXT = 'Infracorp\\Services\\Workflow\\ServiceContract\\Activation\\SetupL2\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_UPDATE_CLIENT_REF_SECTION_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\UpdateClientRefSection\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_ASSIGN_CONTACT_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\AssignContact\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_SERVICE_CONTRACT_ASSIGN_CONTACT_CONTEXT = 'Infracorp\\Services\\Workflow\\ServiceContract\\AssignContact\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_SERVICE_CONTRACT_CONTACT_SWITCH_ACTIVE_CONTEXT = 'Infracorp\\Services\\Workflow\\ServiceContract\\Contact\\SwitchActive\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_CONTACT_SWITCH_ACTIVE_CONTEXT = 'Infracorp\\Services\\Workflow\\CommercialOffer\\Contact\\SwitchActive\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_USERS_SWITCH_ACTIVE_ROLE_CONTEXT = 'Infracorp\\Services\\Workflow\\Users\\SwitchActiveRole\\Context';
    public const AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CLIENT_LEGAL_ENTITY_ADD_USER_ROLE_CONTEXT = 'Infracorp\\Services\\Workflow\\ClientLegalEntity\\AddUserRole\\Context';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailableWorkflowsAllowableValues()
    {
        return [
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CLIENT_LEGAL_ENTITY_CREATE_COMMERCIAL_OFFER_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_SUBMIT_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_SIGN_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_RENAME_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_ADD_SECTION_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_REMOVE_SECTION_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_RENAME_SECTION_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_UPDATE_OFFER_ITEM_IN_OFFER_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_SET_OFFER_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMENT_ADD_COMMENT_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMENT_SUBSCRIBE_THREAD_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMENT_UPDATE_COMMENT_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMENT_UPDATE_THREAD_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CLIENT_LEGAL_ENTITY_CREATE_COMMENT_THREAD_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_SERVICE_CONTRACT_CREATE_COMMENT_THREAD_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_INVOICE_CREATE_COMMENT_THREAD_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_CREATE_COMMENT_THREAD_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_USERS_CREATE_TOKEN_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_USERS_REVOKE_TOKEN_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_UPDATE_SUBSCRIBERS_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_ADD_ITEM_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_REMOVE_ITEM_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_UPDATE_SECTION_ITEMS_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CLIENT_LEGAL_ENTITY_ASSIGN_CONTACT_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CLIENT_LEGAL_ENTITY_ADD_CONTACT_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CLIENT_LEGAL_ENTITY_CONTACT_SWITCH_ACTIVE_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CONTACT_UPDATE_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_SERVICE_CONTRACT_UPDATE_DESCRIPTION_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_SERVICE_CONTRACT_UPDATE_CLIENT_REF_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_SERVICE_CONTRACT_ACTIVATION_SETUP_L2_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_UPDATE_CLIENT_REF_SECTION_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_ASSIGN_CONTACT_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_SERVICE_CONTRACT_ASSIGN_CONTACT_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_SERVICE_CONTRACT_CONTACT_SWITCH_ACTIVE_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_COMMERCIAL_OFFER_CONTACT_SWITCH_ACTIVE_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_USERS_SWITCH_ACTIVE_ROLE_CONTEXT,
            self::AVAILABLE_WORKFLOWS_INFRACORP_SERVICES_WORKFLOW_CLIENT_LEGAL_ENTITY_ADD_USER_ROLE_CONTEXT,
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('available_workflows', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('commercial_offer_id', $data ?? [], null);
        $this->setIfExists('client_reference', $data ?? [], null);
        $this->setIfExists('commercial_offer_items', $data ?? [], null);
        $this->setIfExists('offer', $data ?? [], null);
        $this->setIfExists('service_contract', $data ?? [], null);
        $this->setIfExists('client_contract', $data ?? [], null);
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
     * Gets commercial_offer_id
     *
     * @return int|null
     */
    public function getCommercialOfferId()
    {
        return $this->container['commercial_offer_id'];
    }

    /**
     * Sets commercial_offer_id
     *
     * @param int|null $commercial_offer_id commercial_offer_id
     *
     * @return self
     */
    public function setCommercialOfferId($commercial_offer_id)
    {
        if (is_null($commercial_offer_id)) {
            throw new \InvalidArgumentException('non-nullable commercial_offer_id cannot be null');
        }
        $this->container['commercial_offer_id'] = $commercial_offer_id;

        return $this;
    }

    /**
     * Gets client_reference
     *
     * @return string|null
     */
    public function getClientReference()
    {
        return $this->container['client_reference'];
    }

    /**
     * Sets client_reference
     *
     * @param string|null $client_reference client_reference
     *
     * @return self
     */
    public function setClientReference($client_reference)
    {
        if (is_null($client_reference)) {
            array_push($this->openAPINullablesSetToNull, 'client_reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('client_reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['client_reference'] = $client_reference;

        return $this;
    }

    /**
     * Gets commercial_offer_items
     *
     * @return \Infracorp\Extranet\Client\Model\CommercialOfferItem[]|null
     */
    public function getCommercialOfferItems()
    {
        return $this->container['commercial_offer_items'];
    }

    /**
     * Sets commercial_offer_items
     *
     * @param \Infracorp\Extranet\Client\Model\CommercialOfferItem[]|null $commercial_offer_items commercial_offer_items
     *
     * @return self
     */
    public function setCommercialOfferItems($commercial_offer_items)
    {
        if (is_null($commercial_offer_items)) {
            throw new \InvalidArgumentException('non-nullable commercial_offer_items cannot be null');
        }
        $this->container['commercial_offer_items'] = $commercial_offer_items;

        return $this;
    }

    /**
     * Gets offer
     *
     * @return \Infracorp\Extranet\Client\Model\Offer|null
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param \Infracorp\Extranet\Client\Model\Offer|null $offer offer
     *
     * @return self
     */
    public function setOffer($offer)
    {
        if (is_null($offer)) {
            throw new \InvalidArgumentException('non-nullable offer cannot be null');
        }
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets service_contract
     *
     * @return \Infracorp\Extranet\Client\Model\ServiceContract|null
     */
    public function getServiceContract()
    {
        return $this->container['service_contract'];
    }

    /**
     * Sets service_contract
     *
     * @param \Infracorp\Extranet\Client\Model\ServiceContract|null $service_contract service_contract
     *
     * @return self
     */
    public function setServiceContract($service_contract)
    {
        if (is_null($service_contract)) {
            throw new \InvalidArgumentException('non-nullable service_contract cannot be null');
        }
        $this->container['service_contract'] = $service_contract;

        return $this;
    }

    /**
     * Gets client_contract
     *
     * @return \Infracorp\Extranet\Client\Model\ClientContract|null
     */
    public function getClientContract()
    {
        return $this->container['client_contract'];
    }

    /**
     * Sets client_contract
     *
     * @param \Infracorp\Extranet\Client\Model\ClientContract|null $client_contract client_contract
     *
     * @return self
     */
    public function setClientContract($client_contract)
    {
        if (is_null($client_contract)) {
            throw new \InvalidArgumentException('non-nullable client_contract cannot be null');
        }
        $this->container['client_contract'] = $client_contract;

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


