# Infracorp\Extranet\Client\DefaultApi

All URIs are relative to https://my.tests.prizz-telecom.fr, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCommercialOfferComment()**](DefaultApi.md#addCommercialOfferComment) | **POST** /external-api/v2/commercial_offers/{id}/comments | Commercial offer add comment |
| [**addServiceContractComment()**](DefaultApi.md#addServiceContractComment) | **POST** /external-api/v2/service_contracts/{id}/comments | Service Contract add comment |
| [**createCommercialOffer()**](DefaultApi.md#createCommercialOffer) | **POST** /external-api/v2/commercial_offers | Commercial Offers |
| [**createCommercialOfferSection()**](DefaultApi.md#createCommercialOfferSection) | **POST** /external-api/v2/commercial_offers/{id}/sections | Commercial Offer Sections |
| [**createEligibility()**](DefaultApi.md#createEligibility) | **POST** /external-api/v2/eligibility | Create Eligibility |
| [**createTicketOperator()**](DefaultApi.md#createTicketOperator) | **POST** /external-api/v2/exploitation/operator/{id} | Exploitation Operator Tickets |
| [**createWorkflow()**](DefaultApi.md#createWorkflow) | **POST** /external-api/v2/workflow | Workflows |
| [**eligibilityHistory()**](DefaultApi.md#eligibilityHistory) | **GET** /external-api/v2/eligibility/history | Eligibility History |
| [**fastOrder()**](DefaultApi.md#fastOrder) | **POST** /external-api/v2/commercial_offers/fast_order/{elig_ctx_id} | Fast order with eligiblity result |
| [**getApiTokens()**](DefaultApi.md#getApiTokens) | **GET** /external-api/v2/users/api_tokens | User Api Tokens |
| [**getAppointment()**](DefaultApi.md#getAppointment) | **GET** /external-api/v2/appointments/{id} | Appointment |
| [**getAppointments()**](DefaultApi.md#getAppointments) | **GET** /external-api/v2/appointments | Appointments |
| [**getAttachment()**](DefaultApi.md#getAttachment) | **GET** /external-api/v2/attachments/{id} | Attachment |
| [**getClientContract()**](DefaultApi.md#getClientContract) | **GET** /external-api/v2/client_contracts/{id} | Client Contract |
| [**getClientContracts()**](DefaultApi.md#getClientContracts) | **GET** /external-api/v2/client_contracts | Client Contracts |
| [**getClientLegalEntities()**](DefaultApi.md#getClientLegalEntities) | **GET** /external-api/v2/client_legal_entities | Client legal entities |
| [**getClientLegalEntity()**](DefaultApi.md#getClientLegalEntity) | **GET** /external-api/v2/client_legal_entities/{id} | Client legal entity |
| [**getCommentThread()**](DefaultApi.md#getCommentThread) | **GET** /external-api/v2/comments/threads/{id} | Comment thread |
| [**getCommentThreads()**](DefaultApi.md#getCommentThreads) | **GET** /external-api/v2/comments/threads | Comment threads |
| [**getCommercialOffer()**](DefaultApi.md#getCommercialOffer) | **GET** /external-api/v2/commercial_offers/{id} | Commercial Offer |
| [**getCommercialOfferByName()**](DefaultApi.md#getCommercialOfferByName) | **GET** /external-api/v2/commercial_offers_by_name/{offer_name} | Commercial Offer by reference CPTXXXXXX, CPIXXXXXX |
| [**getCommercialOfferItem()**](DefaultApi.md#getCommercialOfferItem) | **GET** /external-api/v2/commercial_offer_items/{id} | Commercial Offer Item |
| [**getCommercialOfferPdf()**](DefaultApi.md#getCommercialOfferPdf) | **GET** /external-api/v2/commercial_offers/{id}/pdf | Commercial Offer PDF |
| [**getCommercialOfferSection()**](DefaultApi.md#getCommercialOfferSection) | **GET** /external-api/v2/commercial_offer_sections/{id} | Commercial Offer Section |
| [**getCommercialOffers()**](DefaultApi.md#getCommercialOffers) | **GET** /external-api/v2/commercial_offers | Commercial Offers |
| [**getCurrentUser()**](DefaultApi.md#getCurrentUser) | **GET** /external-api/v2/user | User |
| [**getEligibility()**](DefaultApi.md#getEligibility) | **GET** /external-api/v2/eligibility/{id} | Get Eligibility |
| [**getEligibilityBasedOfferContextsShortened()**](DefaultApi.md#getEligibilityBasedOfferContextsShortened) | **GET** /external-api/v2/eligibility/{id}/contexts/shortened | Eligibility Based Offer Contexts |
| [**getEntityAttachments()**](DefaultApi.md#getEntityAttachments) | **GET** /external-api/v2/attachments | Attachements entity |
| [**getInvoice()**](DefaultApi.md#getInvoice) | **GET** /external-api/v2/invoices/{id} | Invoice |
| [**getInvoiceDetail()**](DefaultApi.md#getInvoiceDetail) | **GET** /external-api/v2/invoice_details/{id} | Invoice Detail |
| [**getInvoicePdf()**](DefaultApi.md#getInvoicePdf) | **GET** /external-api/v2/invoices/{id}/pdf | Invoice Pdf |
| [**getInvoices()**](DefaultApi.md#getInvoices) | **GET** /external-api/v2/invoices | Invoices |
| [**getLegalEntities()**](DefaultApi.md#getLegalEntities) | **GET** /external-api/v2/legal_entities | Legal entities |
| [**getLegalEntity()**](DefaultApi.md#getLegalEntity) | **GET** /external-api/v2/legal_entities/{id} | Legal entity |
| [**getOfferContext()**](DefaultApi.md#getOfferContext) | **GET** /external-api/v2/offers/{id}/context | Offers Context |
| [**getOfferContexts()**](DefaultApi.md#getOfferContexts) | **GET** /external-api/v2/offers/{id}/contexts | Offers Contexts |
| [**getOfferContextsShortened()**](DefaultApi.md#getOfferContextsShortened) | **GET** /external-api/v2/offers/{id}/contexts/shortened | Offers Contexts |
| [**getOffers()**](DefaultApi.md#getOffers) | **GET** /external-api/v2/offers | Offers |
| [**getOperatorTickets()**](DefaultApi.md#getOperatorTickets) | **GET** /external-api/v2/exploitation/operator/{id}/tickets | Exploitation Operator Tickets |
| [**getPriceList()**](DefaultApi.md#getPriceList) | **GET** /external-api/v2/price_lists/{id} | Price List |
| [**getPriceListItems()**](DefaultApi.md#getPriceListItems) | **GET** /external-api/v2/price_lists_items | Price List Items |
| [**getPriceListOffers()**](DefaultApi.md#getPriceListOffers) | **GET** /external-api/v2/price_lists/{id}/offers | Price List Offers |
| [**getPriceLists()**](DefaultApi.md#getPriceLists) | **GET** /external-api/v2/price_lists | Price Lists |
| [**getProcess()**](DefaultApi.md#getProcess) | **GET** /external-api/v2/exploitation/operator/{id}/process/{processId} | Exploitation Process |
| [**getPublicAttachments()**](DefaultApi.md#getPublicAttachments) | **GET** /external-api/v2/attachments/public | Attachments Public |
| [**getRunningWorkflows()**](DefaultApi.md#getRunningWorkflows) | **GET** /external-api/v2/workflows/running | Workflows running |
| [**getService()**](DefaultApi.md#getService) | **GET** /external-api/v2/services/{id} | Service |
| [**getServiceContract()**](DefaultApi.md#getServiceContract) | **GET** /external-api/v2/service_contracts/{id} | Service Contract |
| [**getServiceContractByName()**](DefaultApi.md#getServiceContractByName) | **GET** /external-api/v2/service_contracts_by_name/{service_name} | Service Contract by name |
| [**getServiceContractOperationalStatusByName()**](DefaultApi.md#getServiceContractOperationalStatusByName) | **GET** /external-api/v2/service_contracts_by_name/{service_name}/operational_status | Get service contract operational status |
| [**getServiceContracts()**](DefaultApi.md#getServiceContracts) | **GET** /external-api/v2/service_contracts | Service Contracts |
| [**getServices()**](DefaultApi.md#getServices) | **GET** /external-api/v2/services | Services |
| [**getTicket()**](DefaultApi.md#getTicket) | **GET** /external-api/v2/exploitation/operator/{id}/tickets/{ref} | Exploitation Ticket |
| [**getTickets()**](DefaultApi.md#getTickets) | **GET** /external-api/v2/exploitation/tickets | Exploitation Tickets |
| [**getWorkflow()**](DefaultApi.md#getWorkflow) | **GET** /external-api/v2/workflow/{id} | Workflow |
| [**openTicket()**](DefaultApi.md#openTicket) | **POST** /external-api/v2/exploitation/operator/{id}/tickets | Exploitation Tickets |
| [**removeCommercialOfferSection()**](DefaultApi.md#removeCommercialOfferSection) | **DELETE** /external-api/v2/commercial_offers/{id}/sections/{sectionId} | Remove Commercial Offer Section |
| [**renameCommercialOfferSection()**](DefaultApi.md#renameCommercialOfferSection) | **POST** /external-api/v2/commercial_offers/{id}/sections/{sectionId}/rename | Rename Commercial Offer Section |
| [**runProcess()**](DefaultApi.md#runProcess) | **POST** /external-api/v2/exploitation/operator/{id}/process/{processId} | Exploitation Process |
| [**runWorkflow()**](DefaultApi.md#runWorkflow) | **POST** /external-api/v2/workflow/{id} | Workflow |
| [**search()**](DefaultApi.md#search) | **GET** /external-api/v2/search | Search |
| [**setCommercialOfferSectionOffer()**](DefaultApi.md#setCommercialOfferSectionOffer) | **POST** /external-api/v2/commercial_offers/{id}/sections/{sectionId}/offer | Set Commercial Offer Section Offer |
| [**setServiceContractVlan()**](DefaultApi.md#setServiceContractVlan) | **POST** /external-api/v2/service_contracts/{id}/vlan | Service Contract set vlan |
| [**signCommercialOffer()**](DefaultApi.md#signCommercialOffer) | **POST** /external-api/v2/commercial_offers/{id}/sign | Sign Commercial Offer |
| [**submitCommercialOffer()**](DefaultApi.md#submitCommercialOffer) | **POST** /external-api/v2/commercial_offers/{id}/submit | Submit Commercial Offer |
| [**updateCommercialOfferSectionItems()**](DefaultApi.md#updateCommercialOfferSectionItems) | **POST** /external-api/v2/commercial_offers/{id}/sections/{sectionId}/update_items | Update Commercial Offer Section Items |


## `addCommercialOfferComment()`

```php
addCommercialOfferComment($id, $add_commercial_offer_comment): \Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response
```

Commercial offer add comment

Add commercial offer comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | commercial offer identifier
$add_commercial_offer_comment = new \Infracorp\Extranet\Client\Model\AddCommercialOfferComment(); // \Infracorp\Extranet\Client\Model\AddCommercialOfferComment

try {
    $result = $apiInstance->addCommercialOfferComment($id, $add_commercial_offer_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addCommercialOfferComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| commercial offer identifier | |
| **add_commercial_offer_comment** | [**\Infracorp\Extranet\Client\Model\AddCommercialOfferComment**](../Model/AddCommercialOfferComment.md)|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addServiceContractComment()`

```php
addServiceContractComment($id, $add_service_contract_comment): \Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response
```

Service Contract add comment

Add service contract comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | service contract identifier
$add_service_contract_comment = new \Infracorp\Extranet\Client\Model\AddServiceContractComment(); // \Infracorp\Extranet\Client\Model\AddServiceContractComment

try {
    $result = $apiInstance->addServiceContractComment($id, $add_service_contract_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addServiceContractComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| service contract identifier | |
| **add_service_contract_comment** | [**\Infracorp\Extranet\Client\Model\AddServiceContractComment**](../Model/AddServiceContractComment.md)|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommercialOffer()`

```php
createCommercialOffer($create_commercial_offer): \Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response
```

Commercial Offers

Créer un devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_commercial_offer = new \Infracorp\Extranet\Client\Model\CreateCommercialOffer(); // \Infracorp\Extranet\Client\Model\CreateCommercialOffer

try {
    $result = $apiInstance->createCommercialOffer($create_commercial_offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCommercialOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_commercial_offer** | [**\Infracorp\Extranet\Client\Model\CreateCommercialOffer**](../Model/CreateCommercialOffer.md)|  | |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommercialOfferSection()`

```php
createCommercialOfferSection($id, $create_commercial_offer_section): \Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response
```

Commercial Offer Sections

Ajouter une section à un devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis
$create_commercial_offer_section = new \Infracorp\Extranet\Client\Model\CreateCommercialOfferSection(); // \Infracorp\Extranet\Client\Model\CreateCommercialOfferSection

try {
    $result = $apiInstance->createCommercialOfferSection($id, $create_commercial_offer_section);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCommercialOfferSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du devis | |
| **create_commercial_offer_section** | [**\Infracorp\Extranet\Client\Model\CreateCommercialOfferSection**](../Model/CreateCommercialOfferSection.md)|  | |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEligibility()`

```php
createEligibility($client_id, $address, $lat, $lon): \Infracorp\Extranet\Client\Model\CreateEligibility
```

Create Eligibility

Eligibility request for your user. One eligibility is made for each company allowed to your user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 56; // int | client to test
$address = 'address_example'; // string | address to test
$lat = 3.4; // float | latitude for tests by lon,lat
$lon = 3.4; // float | longitude for tests by lon,lat

try {
    $result = $apiInstance->createEligibility($client_id, $address, $lat, $lon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEligibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **int**| client to test | |
| **address** | **string**| address to test | [optional] |
| **lat** | **float**| latitude for tests by lon,lat | [optional] |
| **lon** | **float**| longitude for tests by lon,lat | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateEligibility**](../Model/CreateEligibility.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTicketOperator()`

```php
createTicketOperator($id): \Infracorp\Extranet\Client\Model\CreateOperator
```

Exploitation Operator Tickets

Créer un opérateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant de l'opérateur

try {
    $result = $apiInstance->createTicketOperator($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createTicketOperator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant de l&#39;opérateur | |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateOperator**](../Model/CreateOperator.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWorkflow()`

```php
createWorkflow($create_workflow): \Infracorp\Extranet\Client\Model\GetWorkflow
```

Workflows

Create workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_workflow = new \Infracorp\Extranet\Client\Model\CreateWorkflow(); // \Infracorp\Extranet\Client\Model\CreateWorkflow

try {
    $result = $apiInstance->createWorkflow($create_workflow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_workflow** | [**\Infracorp\Extranet\Client\Model\CreateWorkflow**](../Model/CreateWorkflow.md)|  | |

### Return type

[**\Infracorp\Extranet\Client\Model\GetWorkflow**](../Model/GetWorkflow.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eligibilityHistory()`

```php
eligibilityHistory($page, $items_per_page): \Infracorp\Extranet\Client\Model\EligibilityHistory200Response
```

Eligibility History

View last executed eligibilities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$items_per_page = 56; // int

try {
    $result = $apiInstance->eligibilityHistory($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eligibilityHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **items_per_page** | **int**|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\EligibilityHistory200Response**](../Model/EligibilityHistory200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fastOrder()`

```php
fastOrder($elig_ctx_id, $fast_order): \Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response
```

Fast order with eligiblity result

Créer un devis à partir d'un résultat d'éligibilité

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$elig_ctx_id = 56; // int | identifiant du contexte d'éligibilité
$fast_order = new \Infracorp\Extranet\Client\Model\FastOrder(); // \Infracorp\Extranet\Client\Model\FastOrder

try {
    $result = $apiInstance->fastOrder($elig_ctx_id, $fast_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fastOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **elig_ctx_id** | **int**| identifiant du contexte d&#39;éligibilité | |
| **fast_order** | [**\Infracorp\Extranet\Client\Model\FastOrder**](../Model/FastOrder.md)|  | |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiTokens()`

```php
getApiTokens($page, $items_per_page): \Infracorp\Extranet\Client\Model\GetApiTokens200Response
```

User Api Tokens

Récupérer les clés d'api pour un utilisateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$items_per_page = 56; // int

try {
    $result = $apiInstance->getApiTokens($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getApiTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **items_per_page** | **int**|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\GetApiTokens200Response**](../Model/GetApiTokens200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppointment()`

```php
getAppointment($id): \Infracorp\Extranet\Client\Model\Appointment
```

Appointment

get appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id

try {
    $result = $apiInstance->getAppointment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAppointment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| id | |

### Return type

[**\Infracorp\Extranet\Client\Model\Appointment**](../Model/Appointment.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppointments()`

```php
getAppointments($sort_date, $date_from, $date_to, $service_contract_id, $service_contract_name, $status, $include_archived): \Infracorp\Extranet\Client\Model\GetAppointments200Response
```

Appointments

get appointments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort_date = 'sort_date_example'; // string
$date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$service_contract_id = 56; // int
$service_contract_name = 'service_contract_name_example'; // string
$status = 'status_example'; // string
$include_archived = True; // bool | include archived appointments

try {
    $result = $apiInstance->getAppointments($sort_date, $date_from, $date_to, $service_contract_id, $service_contract_name, $status, $include_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAppointments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sort_date** | **string**|  | [optional] |
| **date_from** | **\DateTime**|  | [optional] |
| **date_to** | **\DateTime**|  | [optional] |
| **service_contract_id** | **int**|  | [optional] |
| **service_contract_name** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |
| **include_archived** | **bool**| include archived appointments | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\GetAppointments200Response**](../Model/GetAppointments200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachment()`

```php
getAttachment($id): \Infracorp\Extranet\Client\Model\Attachment
```

Attachment

Get attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | attachment id

try {
    $result = $apiInstance->getAttachment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| attachment id | |

### Return type

[**\Infracorp\Extranet\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientContract()`

```php
getClientContract($id): \Infracorp\Extranet\Client\Model\ClientContract
```

Client Contract

Récupérer le détail d'un contrat client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du contrat client

try {
    $result = $apiInstance->getClientContract($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getClientContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du contrat client | |

### Return type

[**\Infracorp\Extranet\Client\Model\ClientContract**](../Model/ClientContract.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientContracts()`

```php
getClientContracts($page, $items_per_page, $sort_id, $sort_create_date, $client_legal_entity_id, $legal_entity_id, $search): \Infracorp\Extranet\Client\Model\GetClientContracts200Response
```

Client Contracts

Récupérer une liste de contrats clients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$items_per_page = 56; // int
$sort_id = 'sort_id_example'; // string
$sort_create_date = 'sort_create_date_example'; // string
$client_legal_entity_id = 56; // int
$legal_entity_id = 56; // int
$search = 'search_example'; // string

try {
    $result = $apiInstance->getClientContracts($page, $items_per_page, $sort_id, $sort_create_date, $client_legal_entity_id, $legal_entity_id, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getClientContracts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **items_per_page** | **int**|  | [optional] |
| **sort_id** | **string**|  | [optional] |
| **sort_create_date** | **string**|  | [optional] |
| **client_legal_entity_id** | **int**|  | [optional] |
| **legal_entity_id** | **int**|  | [optional] |
| **search** | **string**|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\GetClientContracts200Response**](../Model/GetClientContracts200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientLegalEntities()`

```php
getClientLegalEntities($page, $items_per_page, $sort_id, $legal_entity_id, $search): \Infracorp\Extranet\Client\Model\GetClientLegalEntities200Response
```

Client legal entities

company list owned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$items_per_page = 56; // int
$sort_id = 'sort_id_example'; // string
$legal_entity_id = 56; // int
$search = 'search_example'; // string

try {
    $result = $apiInstance->getClientLegalEntities($page, $items_per_page, $sort_id, $legal_entity_id, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getClientLegalEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **items_per_page** | **int**|  | [optional] |
| **sort_id** | **string**|  | [optional] |
| **legal_entity_id** | **int**|  | [optional] |
| **search** | **string**|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\GetClientLegalEntities200Response**](../Model/GetClientLegalEntities200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientLegalEntity()`

```php
getClientLegalEntity($id): \Infracorp\Extranet\Client\Model\ClientLegalEntity
```

Client legal entity

Get customer company details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifier

try {
    $result = $apiInstance->getClientLegalEntity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getClientLegalEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifier | |

### Return type

[**\Infracorp\Extranet\Client\Model\ClientLegalEntity**](../Model/ClientLegalEntity.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentThread()`

```php
getCommentThread($id): \Infracorp\Extranet\Client\Model\CommentThread
```

Comment thread

Get comment thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | thread id

try {
    $result = $apiInstance->getCommentThread($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCommentThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| thread id | |

### Return type

[**\Infracorp\Extranet\Client\Model\CommentThread**](../Model/CommentThread.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentThreads()`

```php
getCommentThreads($entity_class, $entity_id): \Infracorp\Extranet\Client\Model\CommentThread[]
```

Comment threads

Get comment threads

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_class = 'entity_class_example'; // string | thread linked entity class
$entity_id = 56; // int | thread linked entity id

try {
    $result = $apiInstance->getCommentThreads($entity_class, $entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCommentThreads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_class** | **string**| thread linked entity class | |
| **entity_id** | **int**| thread linked entity id | |

### Return type

[**\Infracorp\Extranet\Client\Model\CommentThread[]**](../Model/CommentThread.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommercialOffer()`

```php
getCommercialOffer($id): \Infracorp\Extranet\Client\Model\CommercialOffer
```

Commercial Offer

Récupérer le détail d'un devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis

try {
    $result = $apiInstance->getCommercialOffer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCommercialOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du devis | |

### Return type

[**\Infracorp\Extranet\Client\Model\CommercialOffer**](../Model/CommercialOffer.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommercialOfferByName()`

```php
getCommercialOfferByName($offer_name): \Infracorp\Extranet\Client\Model\CommercialOffer
```

Commercial Offer by reference CPTXXXXXX, CPIXXXXXX

Get commercial offer by reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_name = 'offer_name_example'; // string | commercial offer name string

try {
    $result = $apiInstance->getCommercialOfferByName($offer_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCommercialOfferByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offer_name** | **string**| commercial offer name string | |

### Return type

[**\Infracorp\Extranet\Client\Model\CommercialOffer**](../Model/CommercialOffer.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommercialOfferItem()`

```php
getCommercialOfferItem($id): \Infracorp\Extranet\Client\Model\CommercialOfferItem
```

Commercial Offer Item

Get commercial offer item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | commercial offer item identifier

try {
    $result = $apiInstance->getCommercialOfferItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCommercialOfferItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| commercial offer item identifier | |

### Return type

[**\Infracorp\Extranet\Client\Model\CommercialOfferItem**](../Model/CommercialOfferItem.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommercialOfferPdf()`

```php
getCommercialOfferPdf($id): \SplFileObject
```

Commercial Offer PDF

Récupérer le PDF d'un devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis

try {
    $result = $apiInstance->getCommercialOfferPdf($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCommercialOfferPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du devis | |

### Return type

**\SplFileObject**

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommercialOfferSection()`

```php
getCommercialOfferSection($id): \Infracorp\Extranet\Client\Model\CommercialOfferSection
```

Commercial Offer Section

Get commercial offer section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | commercial offer section identifier

try {
    $result = $apiInstance->getCommercialOfferSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCommercialOfferSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| commercial offer section identifier | |

### Return type

[**\Infracorp\Extranet\Client\Model\CommercialOfferSection**](../Model/CommercialOfferSection.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommercialOffers()`

```php
getCommercialOffers($page, $items_per_page, $sort_id, $sort_create_date, $legal_entity_id, $client_legal_entity_id, $sections_offer_id, $status, $create_date_from, $create_date_to, $search): \Infracorp\Extranet\Client\Model\GetCommercialOffers200Response
```

Commercial Offers

Récupérer une liste de devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$items_per_page = 56; // int
$sort_id = 'sort_id_example'; // string
$sort_create_date = 'sort_create_date_example'; // string
$legal_entity_id = 56; // int
$client_legal_entity_id = 56; // int
$sections_offer_id = 56; // int
$status = 'status_example'; // string
$create_date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$create_date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$search = 'search_example'; // string

try {
    $result = $apiInstance->getCommercialOffers($page, $items_per_page, $sort_id, $sort_create_date, $legal_entity_id, $client_legal_entity_id, $sections_offer_id, $status, $create_date_from, $create_date_to, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCommercialOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **items_per_page** | **int**|  | [optional] |
| **sort_id** | **string**|  | [optional] |
| **sort_create_date** | **string**|  | [optional] |
| **legal_entity_id** | **int**|  | [optional] |
| **client_legal_entity_id** | **int**|  | [optional] |
| **sections_offer_id** | **int**|  | [optional] |
| **status** | **string**|  | [optional] |
| **create_date_from** | **\DateTime**|  | [optional] |
| **create_date_to** | **\DateTime**|  | [optional] |
| **search** | **string**|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\GetCommercialOffers200Response**](../Model/GetCommercialOffers200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrentUser()`

```php
getCurrentUser(): \Infracorp\Extranet\Client\Model\User
```

User

Récupérer le détail de l'utilisateur connecté

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrentUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Infracorp\Extranet\Client\Model\User**](../Model/User.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEligibility()`

```php
getEligibility($id): \Infracorp\Extranet\Client\Model\GetEligibility
```

Get Eligibility

Get eligibility result

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | process identifier

try {
    $result = $apiInstance->getEligibility($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEligibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| process identifier | |

### Return type

[**\Infracorp\Extranet\Client\Model\GetEligibility**](../Model/GetEligibility.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEligibilityBasedOfferContextsShortened()`

```php
getEligibilityBasedOfferContextsShortened($id, $legacy): \Infracorp\Extranet\Client\Model\EligibilityBasedOfferContextShortened[]
```

Eligibility Based Offer Contexts

Get all prices combinations for an offer and a price list (shortened)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$legacy = True; // bool

try {
    $result = $apiInstance->getEligibilityBasedOfferContextsShortened($id, $legacy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEligibilityBasedOfferContextsShortened: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **legacy** | **bool**|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\EligibilityBasedOfferContextShortened[]**](../Model/EligibilityBasedOfferContextShortened.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEntityAttachments()`

```php
getEntityAttachments($entity_id, $entity_type): \Infracorp\Extranet\Client\Model\GetPublicAttachments200Response
```

Attachements entity

Get entity linked attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 56; // int | attached entity id
$entity_type = 'entity_type_example'; // string | attached entity type

try {
    $result = $apiInstance->getEntityAttachments($entity_id, $entity_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEntityAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **int**| attached entity id | |
| **entity_type** | **string**| attached entity type | |

### Return type

[**\Infracorp\Extranet\Client\Model\GetPublicAttachments200Response**](../Model/GetPublicAttachments200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoice()`

```php
getInvoice($id): \Infracorp\Extranet\Client\Model\Invoice
```

Invoice

Récupérer le détail d'une facture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant de la facture

try {
    $result = $apiInstance->getInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant de la facture | |

### Return type

[**\Infracorp\Extranet\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceDetail()`

```php
getInvoiceDetail($id): \Infracorp\Extranet\Client\Model\InvoiceDetail
```

Invoice Detail

Get invoice detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | invoice detail identifier

try {
    $result = $apiInstance->getInvoiceDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getInvoiceDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| invoice detail identifier | |

### Return type

[**\Infracorp\Extranet\Client\Model\InvoiceDetail**](../Model/InvoiceDetail.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoicePdf()`

```php
getInvoicePdf($id): \SplFileObject
```

Invoice Pdf

Récupérer le pdf d'une facture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant de la facture

try {
    $result = $apiInstance->getInvoicePdf($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getInvoicePdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant de la facture | |

### Return type

**\SplFileObject**

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoices()`

```php
getInvoices($page, $items_per_page, $sort_id, $sort_create_date, $client_legal_entity_id, $legal_entity_id, $month, $year, $search): \Infracorp\Extranet\Client\Model\GetInvoices200Response
```

Invoices

Récupérer une liste de factures

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$items_per_page = 56; // int
$sort_id = 'sort_id_example'; // string
$sort_create_date = 'sort_create_date_example'; // string
$client_legal_entity_id = 56; // int
$legal_entity_id = 56; // int
$month = 56; // int
$year = 56; // int
$search = 'search_example'; // string

try {
    $result = $apiInstance->getInvoices($page, $items_per_page, $sort_id, $sort_create_date, $client_legal_entity_id, $legal_entity_id, $month, $year, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **items_per_page** | **int**|  | [optional] |
| **sort_id** | **string**|  | [optional] |
| **sort_create_date** | **string**|  | [optional] |
| **client_legal_entity_id** | **int**|  | [optional] |
| **legal_entity_id** | **int**|  | [optional] |
| **month** | **int**|  | [optional] |
| **year** | **int**|  | [optional] |
| **search** | **string**|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\GetInvoices200Response**](../Model/GetInvoices200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLegalEntities()`

```php
getLegalEntities($page, $items_per_page, $sort_id): \Infracorp\Extranet\Client\Model\GetLegalEntities200Response
```

Legal entities

Récupérer une liste de sociétés

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$items_per_page = 56; // int
$sort_id = 'sort_id_example'; // string

try {
    $result = $apiInstance->getLegalEntities($page, $items_per_page, $sort_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLegalEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **items_per_page** | **int**|  | [optional] |
| **sort_id** | **string**|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\GetLegalEntities200Response**](../Model/GetLegalEntities200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLegalEntity()`

```php
getLegalEntity($id): \Infracorp\Extranet\Client\Model\LegalEntity
```

Legal entity

Récupérer le détail d'une société

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant de la société

try {
    $result = $apiInstance->getLegalEntity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLegalEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant de la société | |

### Return type

[**\Infracorp\Extranet\Client\Model\LegalEntity**](../Model/LegalEntity.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferContext()`

```php
getOfferContext($id, $price_list, $groups, $autofill_offer, $items, $distance, $client_contract, $zip_code): \Infracorp\Extranet\Client\Model\OfferContext
```

Offers Context

Get an offer context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$price_list = 56; // int
$groups = array('groups_example'); // string[] | group list (e.g. bandwith, commitment, ...)
$autofill_offer = True; // bool | add default products for each missing required groups to get a valid offer
$items = array(56); // int[] | determined items id to avoid combination with (e.g. FAS which are determined during eligibility)
$distance = 56; // int | distance for L2 basic offer
$client_contract = 56; // int | client contract id
$zip_code = 'zip_code_example'; // string | zip code

try {
    $result = $apiInstance->getOfferContext($id, $price_list, $groups, $autofill_offer, $items, $distance, $client_contract, $zip_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOfferContext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **price_list** | **int**|  | |
| **groups** | [**string[]**](../Model/string.md)| group list (e.g. bandwith, commitment, ...) | [optional] |
| **autofill_offer** | **bool**| add default products for each missing required groups to get a valid offer | [optional] |
| **items** | [**int[]**](../Model/int.md)| determined items id to avoid combination with (e.g. FAS which are determined during eligibility) | [optional] |
| **distance** | **int**| distance for L2 basic offer | [optional] |
| **client_contract** | **int**| client contract id | [optional] |
| **zip_code** | **string**| zip code | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\OfferContext**](../Model/OfferContext.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferContexts()`

```php
getOfferContexts($id, $price_list, $groups, $autofill_offer, $items, $distance, $client_contract, $zip_code): \Infracorp\Extranet\Client\Model\OfferContext[]
```

Offers Contexts

Get all prices combinations for an offer and a price list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$price_list = 56; // int
$groups = array('groups_example'); // string[] | group list (e.g. bandwith, commitment, ...)
$autofill_offer = True; // bool | add default products for each missing required groups to get a valid offer
$items = array(56); // int[] | determined items id to avoid combination with (e.g. FAS which are determined during eligibility)
$distance = 56; // int | estimate of the extension of our network to be built
$client_contract = 56; // int | client contract id
$zip_code = 'zip_code_example'; // string | zip code

try {
    $result = $apiInstance->getOfferContexts($id, $price_list, $groups, $autofill_offer, $items, $distance, $client_contract, $zip_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOfferContexts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **price_list** | **int**|  | |
| **groups** | [**string[]**](../Model/string.md)| group list (e.g. bandwith, commitment, ...) | [optional] |
| **autofill_offer** | **bool**| add default products for each missing required groups to get a valid offer | [optional] |
| **items** | [**int[]**](../Model/int.md)| determined items id to avoid combination with (e.g. FAS which are determined during eligibility) | [optional] |
| **distance** | **int**| estimate of the extension of our network to be built | [optional] |
| **client_contract** | **int**| client contract id | [optional] |
| **zip_code** | **string**| zip code | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\OfferContext[]**](../Model/OfferContext.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferContextsShortened()`

```php
getOfferContextsShortened($id, $price_list, $groups, $autofill_offer, $items, $distance, $client_contract, $zip_code): \Infracorp\Extranet\Client\Model\OfferContextShortened[]
```

Offers Contexts

Get all prices combinations for an offer and a price list (shortened)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$price_list = 56; // int
$groups = array('groups_example'); // string[] | group list (e.g. bandwith, commitment, ...)
$autofill_offer = True; // bool | add default products for each missing required groups to get a valid offer
$items = array(56); // int[] | determined items id to avoid combination with (e.g. FAS which are determined during eligibility)
$distance = 56; // int | estimate of the extension of our network to be built
$client_contract = 56; // int | client contract id
$zip_code = 'zip_code_example'; // string | zip code

try {
    $result = $apiInstance->getOfferContextsShortened($id, $price_list, $groups, $autofill_offer, $items, $distance, $client_contract, $zip_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOfferContextsShortened: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **price_list** | **int**|  | |
| **groups** | [**string[]**](../Model/string.md)| group list (e.g. bandwith, commitment, ...) | [optional] |
| **autofill_offer** | **bool**| add default products for each missing required groups to get a valid offer | [optional] |
| **items** | [**int[]**](../Model/int.md)| determined items id to avoid combination with (e.g. FAS which are determined during eligibility) | [optional] |
| **distance** | **int**| estimate of the extension of our network to be built | [optional] |
| **client_contract** | **int**| client contract id | [optional] |
| **zip_code** | **string**| zip code | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\OfferContextShortened[]**](../Model/OfferContextShortened.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOffers()`

```php
getOffers($ids, $codes): \Infracorp\Extranet\Client\Model\Offer[]
```

Offers

Récupérer une liste d'offres

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(56); // int[] | identifiant de l'offre
$codes = array('codes_example'); // string[] | nom de l'offre

try {
    $result = $apiInstance->getOffers($ids, $codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**int[]**](../Model/int.md)| identifiant de l&#39;offre | [optional] |
| **codes** | [**string[]**](../Model/string.md)| nom de l&#39;offre | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\Offer[]**](../Model/Offer.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOperatorTickets()`

```php
getOperatorTickets($id): \Infracorp\Extranet\Client\Model\Ticket[]
```

Exploitation Operator Tickets

Lister les tickets pour l'opérateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant de l'opérateur

try {
    $result = $apiInstance->getOperatorTickets($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOperatorTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant de l&#39;opérateur | |

### Return type

[**\Infracorp\Extranet\Client\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceList()`

```php
getPriceList($id): \Infracorp\Extranet\Client\Model\PriceList
```

Price List

Récupérer un catalogue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du catalogue

try {
    $result = $apiInstance->getPriceList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPriceList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du catalogue | |

### Return type

[**\Infracorp\Extranet\Client\Model\PriceList**](../Model/PriceList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceListItems()`

```php
getPriceListItems($ids): \Infracorp\Extranet\Client\Model\PriceListItem[]
```

Price List Items

Récupérer une liste d'éléments d'un catalogue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(56); // int[] | identifiant de l'élément de catalogue

try {
    $result = $apiInstance->getPriceListItems($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPriceListItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**int[]**](../Model/int.md)| identifiant de l&#39;élément de catalogue | |

### Return type

[**\Infracorp\Extranet\Client\Model\PriceListItem[]**](../Model/PriceListItem.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceListOffers()`

```php
getPriceListOffers($id): \Infracorp\Extranet\Client\Model\PricesListOffers
```

Price List Offers

Récupérer la liste des offres associées à un catalogue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du catalogue

try {
    $result = $apiInstance->getPriceListOffers($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPriceListOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du catalogue | |

### Return type

[**\Infracorp\Extranet\Client\Model\PricesListOffers**](../Model/PricesListOffers.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPriceLists()`

```php
getPriceLists($ids): \Infracorp\Extranet\Client\Model\PriceList[]
```

Price Lists

Récupérer une liste de catalogues

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(56); // int[] | identifiant de catalogue

try {
    $result = $apiInstance->getPriceLists($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPriceLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**int[]**](../Model/int.md)| identifiant de catalogue | |

### Return type

[**\Infracorp\Extranet\Client\Model\PriceList[]**](../Model/PriceList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcess()`

```php
getProcess($id, $process_id): \Infracorp\Extranet\Client\Model\Process
```

Exploitation Process

Detail d'un worklow de ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant de l'opérateur
$process_id = 56; // int | identifiant du process

try {
    $result = $apiInstance->getProcess($id, $process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getProcess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant de l&#39;opérateur | |
| **process_id** | **int**| identifiant du process | |

### Return type

[**\Infracorp\Extranet\Client\Model\Process**](../Model/Process.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicAttachments()`

```php
getPublicAttachments(): \Infracorp\Extranet\Client\Model\GetPublicAttachments200Response
```

Attachments Public

Get public attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPublicAttachments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPublicAttachments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Infracorp\Extranet\Client\Model\GetPublicAttachments200Response**](../Model/GetPublicAttachments200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRunningWorkflows()`

```php
getRunningWorkflows($contexts, $states): \Infracorp\Extranet\Client\Model\GetRunningWorkflows200Response
```

Workflows running

Get running workflows

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contexts = 'contexts_example'; // string | context names
$states = 'states_example'; // string | states

try {
    $result = $apiInstance->getRunningWorkflows($contexts, $states);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRunningWorkflows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contexts** | **string**| context names | [optional] |
| **states** | **string**| states | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\GetRunningWorkflows200Response**](../Model/GetRunningWorkflows200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getService()`

```php
getService($id): \Infracorp\Extranet\Client\Model\Service
```

Service

Récupérer le détail d'un service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du service

try {
    $result = $apiInstance->getService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du service | |

### Return type

[**\Infracorp\Extranet\Client\Model\Service**](../Model/Service.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceContract()`

```php
getServiceContract($id): \Infracorp\Extranet\Client\Model\ServiceContract
```

Service Contract

Récupérer le détail d'un pack de services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du pack de services

try {
    $result = $apiInstance->getServiceContract($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getServiceContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du pack de services | |

### Return type

[**\Infracorp\Extranet\Client\Model\ServiceContract**](../Model/ServiceContract.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceContractByName()`

```php
getServiceContractByName($service_name): \Infracorp\Extranet\Client\Model\ServiceContract
```

Service Contract by name

Récupérer le détail d'un pack de services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_name = 'service_name_example'; // string | identifiant du pack de services

try {
    $result = $apiInstance->getServiceContractByName($service_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getServiceContractByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_name** | **string**| identifiant du pack de services | |

### Return type

[**\Infracorp\Extranet\Client\Model\ServiceContract**](../Model/ServiceContract.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceContractOperationalStatusByName()`

```php
getServiceContractOperationalStatusByName($service_name): \Infracorp\Extranet\Client\Model\OperationalStatus
```

Get service contract operational status

Le statut présenté est un état consolidé du résultat de plusieurs tests et de mesures en différents points du réseau effectué périodiquement. Les valeurs de status disponibles sont : - `ok` : votre service est produit normalement - `warning` : le service laisse penser qu'il nécessite une attention particulière (exemple: uptime faible) - `critical` : le service est interrompu - `unknown` : nous n'avons pas pu remonter l'état du service  L'attribut lastCheck vous indique quand le service a été testé pour la dernière fois

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_name = 'service_name_example'; // string | identifiant du contrat de services

try {
    $result = $apiInstance->getServiceContractOperationalStatusByName($service_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getServiceContractOperationalStatusByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_name** | **string**| identifiant du contrat de services | |

### Return type

[**\Infracorp\Extranet\Client\Model\OperationalStatus**](../Model/OperationalStatus.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceContracts()`

```php
getServiceContracts($page, $items_per_page, $sort_id, $sort_status, $status, $legal_entity_id, $offer_id, $client_contract_id, $client_legal_entity_id, $search): \Infracorp\Extranet\Client\Model\GetServiceContracts200Response
```

Service Contracts

Récupérer une liste de packs de services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$items_per_page = 56; // int
$sort_id = 'sort_id_example'; // string
$sort_status = 'sort_status_example'; // string
$status = 'status_example'; // string
$legal_entity_id = 56; // int
$offer_id = 56; // int
$client_contract_id = 56; // int
$client_legal_entity_id = 56; // int
$search = 'search_example'; // string

try {
    $result = $apiInstance->getServiceContracts($page, $items_per_page, $sort_id, $sort_status, $status, $legal_entity_id, $offer_id, $client_contract_id, $client_legal_entity_id, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getServiceContracts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **items_per_page** | **int**|  | [optional] |
| **sort_id** | **string**|  | [optional] |
| **sort_status** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |
| **legal_entity_id** | **int**|  | [optional] |
| **offer_id** | **int**|  | [optional] |
| **client_contract_id** | **int**|  | [optional] |
| **client_legal_entity_id** | **int**|  | [optional] |
| **search** | **string**|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\GetServiceContracts200Response**](../Model/GetServiceContracts200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServices()`

```php
getServices($page, $items_per_page, $sort_id, $legal_entity_id): \Infracorp\Extranet\Client\Model\GetServices200Response
```

Services

Récupérer une liste de services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$items_per_page = 56; // int
$sort_id = 'sort_id_example'; // string
$legal_entity_id = 56; // int

try {
    $result = $apiInstance->getServices($page, $items_per_page, $sort_id, $legal_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **items_per_page** | **int**|  | [optional] |
| **sort_id** | **string**|  | [optional] |
| **legal_entity_id** | **int**|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\GetServices200Response**](../Model/GetServices200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTicket()`

```php
getTicket($id, $ref): \Infracorp\Extranet\Client\Model\OperatorTicket
```

Exploitation Ticket

Récupérer le détail d'un ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant de l'opérateur
$ref = 'ref_example'; // string | numero du ticket

try {
    $result = $apiInstance->getTicket($id, $ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant de l&#39;opérateur | |
| **ref** | **string**| numero du ticket | |

### Return type

[**\Infracorp\Extranet\Client\Model\OperatorTicket**](../Model/OperatorTicket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTickets()`

```php
getTickets($sort_date_creation, $etat, $operator, $show_archived): \Infracorp\Extranet\Client\Model\Ticket[]
```

Exploitation Tickets

Lister les tickets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort_date_creation = 'sort_date_creation_example'; // string
$etat = 'etat_example'; // string
$operator = 56; // int
$show_archived = false; // bool

try {
    $result = $apiInstance->getTickets($sort_date_creation, $etat, $operator, $show_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sort_date_creation** | **string**|  | [optional] |
| **etat** | **string**|  | [optional] |
| **operator** | **int**|  | [optional] |
| **show_archived** | **bool**|  | [optional] [default to false] |

### Return type

[**\Infracorp\Extranet\Client\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkflow()`

```php
getWorkflow($id): \Infracorp\Extranet\Client\Model\Workflow
```

Workflow

get workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | workflow id

try {
    $result = $apiInstance->getWorkflow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| workflow id | |

### Return type

[**\Infracorp\Extranet\Client\Model\Workflow**](../Model/Workflow.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openTicket()`

```php
openTicket($id, $service_id): \Infracorp\Extranet\Client\Model\CreateTicket
```

Exploitation Tickets

Ouvrir un ticket pour l'opérateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant de l'opérateur
$service_id = 56; // int | identifiant du service

try {
    $result = $apiInstance->openTicket($id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->openTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant de l&#39;opérateur | |
| **service_id** | **int**| identifiant du service | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateTicket**](../Model/CreateTicket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCommercialOfferSection()`

```php
removeCommercialOfferSection($id, $section_id)
```

Remove Commercial Offer Section

Supprimer une section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis
$section_id = 56; // int | identifiant de la section

try {
    $apiInstance->removeCommercialOfferSection($id, $section_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->removeCommercialOfferSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du devis | |
| **section_id** | **int**| identifiant de la section | |

### Return type

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renameCommercialOfferSection()`

```php
renameCommercialOfferSection($id, $section_id, $rename_commercial_offer_section): \Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response
```

Rename Commercial Offer Section

Renommer une section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis
$section_id = 56; // int | identifiant de la section
$rename_commercial_offer_section = new \Infracorp\Extranet\Client\Model\RenameCommercialOfferSection(); // \Infracorp\Extranet\Client\Model\RenameCommercialOfferSection

try {
    $result = $apiInstance->renameCommercialOfferSection($id, $section_id, $rename_commercial_offer_section);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->renameCommercialOfferSection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du devis | |
| **section_id** | **int**| identifiant de la section | |
| **rename_commercial_offer_section** | [**\Infracorp\Extranet\Client\Model\RenameCommercialOfferSection**](../Model/RenameCommercialOfferSection.md)|  | |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runProcess()`

```php
runProcess($id, $process_id, $files, $transition_class): \Infracorp\Extranet\Client\Model\Process
```

Exploitation Process

Executer un process

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant de l'opérateur
$process_id = 56; // int | identifiant du process
$files = array('/path/to/file.txt'); // \SplFileObject[]
$transition_class = 'transition_class_example'; // string

try {
    $result = $apiInstance->runProcess($id, $process_id, $files, $transition_class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->runProcess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant de l&#39;opérateur | |
| **process_id** | **int**| identifiant du process | |
| **files** | **\SplFileObject[]**|  | [optional] |
| **transition_class** | **string**|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\Process**](../Model/Process.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runWorkflow()`

```php
runWorkflow($id, $files): \Infracorp\Extranet\Client\Model\GetWorkflow
```

Workflow

run workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | workflow id
$files = array('/path/to/file.txt'); // \SplFileObject[]

try {
    $result = $apiInstance->runWorkflow($id, $files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->runWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| workflow id | |
| **files** | **\SplFileObject[]**|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\GetWorkflow**](../Model/GetWorkflow.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($q, $legal_entity_id, $client_legal_entity_id): \Infracorp\Extranet\Client\Model\Search200ResponseInner[]
```

Search

Perform search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | text to search for
$legal_entity_id = 56; // int | identifier to filter results
$client_legal_entity_id = 56; // int | identifier to filter results

try {
    $result = $apiInstance->search($q, $legal_entity_id, $client_legal_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| text to search for | |
| **legal_entity_id** | **int**| identifier to filter results | [optional] |
| **client_legal_entity_id** | **int**| identifier to filter results | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\Search200ResponseInner[]**](../Model/Search200ResponseInner.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCommercialOfferSectionOffer()`

```php
setCommercialOfferSectionOffer($id, $section_id, $set_commercial_offer_section_offer): \Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response
```

Set Commercial Offer Section Offer

Appliquer une offre à une section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis
$section_id = 56; // int | identifiant de la section
$set_commercial_offer_section_offer = new \Infracorp\Extranet\Client\Model\SetCommercialOfferSectionOffer(); // \Infracorp\Extranet\Client\Model\SetCommercialOfferSectionOffer

try {
    $result = $apiInstance->setCommercialOfferSectionOffer($id, $section_id, $set_commercial_offer_section_offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->setCommercialOfferSectionOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du devis | |
| **section_id** | **int**| identifiant de la section | |
| **set_commercial_offer_section_offer** | [**\Infracorp\Extranet\Client\Model\SetCommercialOfferSectionOffer**](../Model/SetCommercialOfferSectionOffer.md)|  | |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setServiceContractVlan()`

```php
setServiceContractVlan($id, $set_service_contract_vlan_request): \Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response
```

Service Contract set vlan

Set service contract vlan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | service contract identifier
$set_service_contract_vlan_request = new \Infracorp\Extranet\Client\Model\SetServiceContractVlanRequest(); // \Infracorp\Extranet\Client\Model\SetServiceContractVlanRequest

try {
    $result = $apiInstance->setServiceContractVlan($id, $set_service_contract_vlan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->setServiceContractVlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| service contract identifier | |
| **set_service_contract_vlan_request** | [**\Infracorp\Extranet\Client\Model\SetServiceContractVlanRequest**](../Model/SetServiceContractVlanRequest.md)|  | |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signCommercialOffer()`

```php
signCommercialOffer($id, $sign_commercial_offer): \Infracorp\Extranet\Client\Model\SignCommercialOffer200Response
```

Sign Commercial Offer

Signer un devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis
$sign_commercial_offer = new \Infracorp\Extranet\Client\Model\SignCommercialOffer(); // \Infracorp\Extranet\Client\Model\SignCommercialOffer

try {
    $result = $apiInstance->signCommercialOffer($id, $sign_commercial_offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->signCommercialOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du devis | |
| **sign_commercial_offer** | [**\Infracorp\Extranet\Client\Model\SignCommercialOffer**](../Model/SignCommercialOffer.md)|  | [optional] |

### Return type

[**\Infracorp\Extranet\Client\Model\SignCommercialOffer200Response**](../Model/SignCommercialOffer200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitCommercialOffer()`

```php
submitCommercialOffer($id): \Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response
```

Submit Commercial Offer

Valider un devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis

try {
    $result = $apiInstance->submitCommercialOffer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->submitCommercialOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du devis | |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCommercialOfferSectionItems()`

```php
updateCommercialOfferSectionItems($id, $section_id, $update_commercial_offer_section_items): \Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response
```

Update Commercial Offer Section Items

Update items in commercial offer section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Infracorp\Extranet\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Infracorp\Extranet\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis
$section_id = 56; // int | identifiant de la section
$update_commercial_offer_section_items = new \Infracorp\Extranet\Client\Model\UpdateCommercialOfferSectionItems(); // \Infracorp\Extranet\Client\Model\UpdateCommercialOfferSectionItems

try {
    $result = $apiInstance->updateCommercialOfferSectionItems($id, $section_id, $update_commercial_offer_section_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCommercialOfferSectionItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant du devis | |
| **section_id** | **int**| identifiant de la section | |
| **update_commercial_offer_section_items** | [**\Infracorp\Extranet\Client\Model\UpdateCommercialOfferSectionItems**](../Model/UpdateCommercialOfferSectionItems.md)|  | |

### Return type

[**\Infracorp\Extranet\Client\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
