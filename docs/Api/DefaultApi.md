# InfracorpExtranetClient\DefaultApi

All URIs are relative to https://dev.prizz-telecom.fr, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCommercialOffer()**](DefaultApi.md#createCommercialOffer) | **POST** /external-api/v2/commercial_offers | Commercial Offers |
| [**createCommercialOfferSection()**](DefaultApi.md#createCommercialOfferSection) | **POST** /external-api/v2/commercial_offers/{id}/sections | Commercial Offer Sections |
| [**createEligibility()**](DefaultApi.md#createEligibility) | **POST** /external-api/v2/eligibility | Create Eligibility |
| [**createTicketOperator()**](DefaultApi.md#createTicketOperator) | **POST** /external-api/v2/exploitation/operator/{id} | Exploitation Operator Tickets |
| [**createWorkflow()**](DefaultApi.md#createWorkflow) | **POST** /external-api/v2/workflow | Workflows |
| [**eligibilityHistory()**](DefaultApi.md#eligibilityHistory) | **GET** /external-api/v2/eligibility/history | Eligibility History |
| [**getApiTokens()**](DefaultApi.md#getApiTokens) | **GET** /external-api/v2/users/api_tokens | User Api Tokens |
| [**getClientLegalEntities()**](DefaultApi.md#getClientLegalEntities) | **GET** /external-api/v2/client_legal_entities | Client legal entities |
| [**getClientLegalEntity()**](DefaultApi.md#getClientLegalEntity) | **GET** /external-api/v2/client_legal_entities/{id} | Client legal entity |
| [**getCommentThread()**](DefaultApi.md#getCommentThread) | **GET** /external-api/v2/comments/threads/{id} | Comment thread |
| [**getCommentThreads()**](DefaultApi.md#getCommentThreads) | **GET** /external-api/v2/comments/threads | Comment threads |
| [**getCommercialOffer()**](DefaultApi.md#getCommercialOffer) | **GET** /external-api/v2/commercial_offers/{id} | Commercial Offer |
| [**getCommercialOfferPdf()**](DefaultApi.md#getCommercialOfferPdf) | **GET** /external-api/v2/commercial_offers/{id}/pdf | Commercial Offer Pdf |
| [**getCommercialOffers()**](DefaultApi.md#getCommercialOffers) | **GET** /external-api/v2/commercial_offers | Commercial Offers |
| [**getCurrentUser()**](DefaultApi.md#getCurrentUser) | **GET** /external-api/v2/user | User |
| [**getEligibility()**](DefaultApi.md#getEligibility) | **GET** /external-api/v2/eligibility/{id} | Get Eligibility |
| [**getInvoice()**](DefaultApi.md#getInvoice) | **GET** /external-api/v2/invoices/{id} | Invoice |
| [**getInvoicePdf()**](DefaultApi.md#getInvoicePdf) | **GET** /external-api/v2/invoices/{id}/pdf | Invoice Pdf |
| [**getInvoices()**](DefaultApi.md#getInvoices) | **GET** /external-api/v2/invoices | Invoices |
| [**getLegalEntities()**](DefaultApi.md#getLegalEntities) | **GET** /external-api/v2/legal_entities | Legal entities |
| [**getLegalEntity()**](DefaultApi.md#getLegalEntity) | **GET** /external-api/v2/legal_entities/{id} | Legal entity |
| [**getOffers()**](DefaultApi.md#getOffers) | **GET** /external-api/v2/offers | Offers |
| [**getOperatorTickets()**](DefaultApi.md#getOperatorTickets) | **GET** /external-api/v2/exploitation/operator/{id}/tickets | Exploitation Operator Tickets |
| [**getPriceList()**](DefaultApi.md#getPriceList) | **GET** /external-api/v2/price_lists/{id} | Price List |
| [**getPriceListItems()**](DefaultApi.md#getPriceListItems) | **GET** /external-api/v2/price_lists_items | Price List Items |
| [**getPriceListOffers()**](DefaultApi.md#getPriceListOffers) | **GET** /external-api/v2/price_lists/{id}/offers | Price List Offers |
| [**getPriceLists()**](DefaultApi.md#getPriceLists) | **GET** /external-api/v2/price_lists | Price Lists |
| [**getProcess()**](DefaultApi.md#getProcess) | **GET** /external-api/v2/exploitation/operator/{id}/process/{processId} | Exploitation Process |
| [**getService()**](DefaultApi.md#getService) | **GET** /external-api/v2/services/{id} | Service |
| [**getServiceContract()**](DefaultApi.md#getServiceContract) | **GET** /external-api/v2/service_contracts/{id} | Service Contract |
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
| [**signCommercialOffer()**](DefaultApi.md#signCommercialOffer) | **POST** /external-api/v2/commercial_offers/{id}/sign | Sign Commercial Offer |
| [**submitCommercialOffer()**](DefaultApi.md#submitCommercialOffer) | **POST** /external-api/v2/commercial_offers/{id}/submit | Submit Commercial Offer |


## `createCommercialOffer()`

```php
createCommercialOffer($create_commercial_offer): \InfracorpExtranetClient\Model\CreateCommercialOffer201Response
```

Commercial Offers

Créer un devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_commercial_offer = new \InfracorpExtranetClient\Model\CreateCommercialOffer(); // \InfracorpExtranetClient\Model\CreateCommercialOffer

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
| **create_commercial_offer** | [**\InfracorpExtranetClient\Model\CreateCommercialOffer**](../Model/CreateCommercialOffer.md)|  | |

### Return type

[**\InfracorpExtranetClient\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

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
createCommercialOfferSection($id, $create_commercial_offer_section): \InfracorpExtranetClient\Model\CreateCommercialOffer201Response
```

Commercial Offer Sections

Ajouter une section à un devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis
$create_commercial_offer_section = new \InfracorpExtranetClient\Model\CreateCommercialOfferSection(); // \InfracorpExtranetClient\Model\CreateCommercialOfferSection

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
| **create_commercial_offer_section** | [**\InfracorpExtranetClient\Model\CreateCommercialOfferSection**](../Model/CreateCommercialOfferSection.md)|  | |

### Return type

[**\InfracorpExtranetClient\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

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
createEligibility($address, $client_id): \InfracorpExtranetClient\Model\CreateEligibility
```

Create Eligibility

Eligibility request for your user. One eligibility is made for each company allowed to your user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = 'address_example'; // string | address to test
$client_id = 56; // int | client to test

try {
    $result = $apiInstance->createEligibility($address, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEligibility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| address to test | |
| **client_id** | **int**| client to test | |

### Return type

[**\InfracorpExtranetClient\Model\CreateEligibility**](../Model/CreateEligibility.md)

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
createTicketOperator($id): \InfracorpExtranetClient\Model\CreateOperator
```

Exploitation Operator Tickets

Créer un opérateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\CreateOperator**](../Model/CreateOperator.md)

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
createWorkflow($create_workflow): \InfracorpExtranetClient\Model\GetWorkflow
```

Workflows

Create workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_workflow = new \InfracorpExtranetClient\Model\CreateWorkflow(); // \InfracorpExtranetClient\Model\CreateWorkflow

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
| **create_workflow** | [**\InfracorpExtranetClient\Model\CreateWorkflow**](../Model/CreateWorkflow.md)|  | |

### Return type

[**\InfracorpExtranetClient\Model\GetWorkflow**](../Model/GetWorkflow.md)

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
eligibilityHistory($page, $items_per_page): \InfracorpExtranetClient\Model\EligibilityHistory200Response
```

Eligibility History

View last executed eligibilities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\EligibilityHistory200Response**](../Model/EligibilityHistory200Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiTokens()`

```php
getApiTokens($page, $items_per_page): \InfracorpExtranetClient\Model\GetApiTokens200Response
```

User Api Tokens

Récupérer une clés d'api pour un utilisateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\GetApiTokens200Response**](../Model/GetApiTokens200Response.md)

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
getClientLegalEntities($page, $items_per_page, $sort_id, $legal_entity_id): \InfracorpExtranetClient\Model\GetClientLegalEntities200Response
```

Client legal entities

company list owned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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
    $result = $apiInstance->getClientLegalEntities($page, $items_per_page, $sort_id, $legal_entity_id);
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

### Return type

[**\InfracorpExtranetClient\Model\GetClientLegalEntities200Response**](../Model/GetClientLegalEntities200Response.md)

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
getClientLegalEntity($id): \InfracorpExtranetClient\Model\ClientLegalEntity
```

Client legal entity

Get customer company details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\ClientLegalEntity**](../Model/ClientLegalEntity.md)

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
getCommentThread($id): \InfracorpExtranetClient\Model\CommentThread
```

Comment thread

Get comment thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\CommentThread**](../Model/CommentThread.md)

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
getCommentThreads($entity_class, $entity_id): \InfracorpExtranetClient\Model\CommentThread[]
```

Comment threads

Get comment threads

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\CommentThread[]**](../Model/CommentThread.md)

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
getCommercialOffer($id): \InfracorpExtranetClient\Model\CommercialOffer
```

Commercial Offer

Récupérer le détail d'un devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\CommercialOffer**](../Model/CommercialOffer.md)

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

Commercial Offer Pdf

Récupérer le pdf d'un devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

## `getCommercialOffers()`

```php
getCommercialOffers($page, $items_per_page, $sort_id, $sort_create_date, $legal_entity_id, $client_legal_entity_id, $sections_offer_id, $status, $create_date_from, $create_date_to): \InfracorpExtranetClient\Model\GetCommercialOffers200Response
```

Commercial Offers

Récupérer une liste de devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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
$create_date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$create_date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->getCommercialOffers($page, $items_per_page, $sort_id, $sort_create_date, $legal_entity_id, $client_legal_entity_id, $sections_offer_id, $status, $create_date_from, $create_date_to);
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

### Return type

[**\InfracorpExtranetClient\Model\GetCommercialOffers200Response**](../Model/GetCommercialOffers200Response.md)

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
getCurrentUser(): \InfracorpExtranetClient\Model\User
```

User

Récupérer le détail de l'utilisateur connecté

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\User**](../Model/User.md)

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
getEligibility($id): \InfracorpExtranetClient\Model\GetEligibility
```

Get Eligibility

Get eligibility result

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\GetEligibility**](../Model/GetEligibility.md)

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
getInvoice($id): \InfracorpExtranetClient\Model\Invoice
```

Invoice

Récupérer le détail d'une facture

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | indentifiant de la facture

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
| **id** | **int**| indentifiant de la facture | |

### Return type

[**\InfracorpExtranetClient\Model\Invoice**](../Model/Invoice.md)

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
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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
getInvoices($page, $items_per_page, $sort_id, $sort_create_date, $client_legal_entity_id, $legal_entity_id, $month, $year): \InfracorpExtranetClient\Model\GetInvoices200Response
```

Invoices

Récupérer une liste de factures

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

try {
    $result = $apiInstance->getInvoices($page, $items_per_page, $sort_id, $sort_create_date, $client_legal_entity_id, $legal_entity_id, $month, $year);
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

### Return type

[**\InfracorpExtranetClient\Model\GetInvoices200Response**](../Model/GetInvoices200Response.md)

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
getLegalEntities($page, $items_per_page, $sort_id): \InfracorpExtranetClient\Model\GetLegalEntities200Response
```

Legal entities

Récupérer une liste de sociétés

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\GetLegalEntities200Response**](../Model/GetLegalEntities200Response.md)

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
getLegalEntity($id): \InfracorpExtranetClient\Model\LegalEntity
```

Legal entity

Récupérer le détail d'une société

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | indentifiant de la société

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
| **id** | **int**| indentifiant de la société | |

### Return type

[**\InfracorpExtranetClient\Model\LegalEntity**](../Model/LegalEntity.md)

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
getOffers($ids, $codes): \InfracorpExtranetClient\Model\Offer[]
```

Offers

Récupérer une liste d'offres

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\Offer[]**](../Model/Offer.md)

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
getOperatorTickets($id): \InfracorpExtranetClient\Model\Ticket[]
```

Exploitation Operator Tickets

Lister les tickets pour l'opérateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\Ticket[]**](../Model/Ticket.md)

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
getPriceList($id): \InfracorpExtranetClient\Model\PriceList
```

Price List

Récupérer un catalogue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\PriceList**](../Model/PriceList.md)

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
getPriceListItems($ids): \InfracorpExtranetClient\Model\PriceListItem[]
```

Price List Items

Récupérer une liste d'éléments d'un catalogue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\PriceListItem[]**](../Model/PriceListItem.md)

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
getPriceListOffers($id): \InfracorpExtranetClient\Model\PricesListOffers
```

Price List Offers

Récupérer la liste des offres associées à un catalogue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\PricesListOffers**](../Model/PricesListOffers.md)

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
getPriceLists($ids): \InfracorpExtranetClient\Model\PriceList[]
```

Price Lists

Récupérer une liste de catalogues

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\PriceList[]**](../Model/PriceList.md)

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
getProcess($id, $process_id): \InfracorpExtranetClient\Model\Process
```

Exploitation Process

Detail d'un worklow de ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\Process**](../Model/Process.md)

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
getService($id): \InfracorpExtranetClient\Model\Service
```

Service

Récupérer le détail d'un service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | indentifiant du service

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
| **id** | **int**| indentifiant du service | |

### Return type

[**\InfracorpExtranetClient\Model\Service**](../Model/Service.md)

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
getServiceContract($id): \InfracorpExtranetClient\Model\ServiceContract
```

Service Contract

Récupérer le détail d'un pack de services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | indentifiant du pack de services

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
| **id** | **int**| indentifiant du pack de services | |

### Return type

[**\InfracorpExtranetClient\Model\ServiceContract**](../Model/ServiceContract.md)

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
getServiceContracts($page, $items_per_page, $sort_id, $legal_entity_id): \InfracorpExtranetClient\Model\GetServiceContracts200Response
```

Service Contracts

Récupérer une liste de packs de services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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
    $result = $apiInstance->getServiceContracts($page, $items_per_page, $sort_id, $legal_entity_id);
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
| **legal_entity_id** | **int**|  | [optional] |

### Return type

[**\InfracorpExtranetClient\Model\GetServiceContracts200Response**](../Model/GetServiceContracts200Response.md)

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
getServices($page, $items_per_page, $sort_id, $legal_entity_id): \InfracorpExtranetClient\Model\GetServices200Response
```

Services

Récupérer une liste de services

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\GetServices200Response**](../Model/GetServices200Response.md)

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
getTicket($id, $ref): \InfracorpExtranetClient\Model\OperatorTicket
```

Exploitation Ticket

Récupérer le détail d'un ticket

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\OperatorTicket**](../Model/OperatorTicket.md)

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
getTickets(): \InfracorpExtranetClient\Model\Ticket[]
```

Exploitation Tickets

Lister les tickets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTickets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\InfracorpExtranetClient\Model\Ticket[]**](../Model/Ticket.md)

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
getWorkflow($id): \InfracorpExtranetClient\Model\Workflow
```

Workflow

get workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\Workflow**](../Model/Workflow.md)

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
openTicket($id): \InfracorpExtranetClient\Model\CreateTicket
```

Exploitation Tickets

Ouvrir un ticket pour l'opérateur

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant de l'opérateur

try {
    $result = $apiInstance->openTicket($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->openTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| identifiant de l&#39;opérateur | |

### Return type

[**\InfracorpExtranetClient\Model\CreateTicket**](../Model/CreateTicket.md)

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
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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
renameCommercialOfferSection($id, $section_id, $rename_commercial_offer_section): \InfracorpExtranetClient\Model\CreateCommercialOffer201Response
```

Rename Commercial Offer Section

Renommer une section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis
$section_id = 56; // int | identifiant de la section
$rename_commercial_offer_section = new \InfracorpExtranetClient\Model\RenameCommercialOfferSection(); // \InfracorpExtranetClient\Model\RenameCommercialOfferSection

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
| **rename_commercial_offer_section** | [**\InfracorpExtranetClient\Model\RenameCommercialOfferSection**](../Model/RenameCommercialOfferSection.md)|  | |

### Return type

[**\InfracorpExtranetClient\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

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
runProcess($id, $process_id, $files, $transition_class): \InfracorpExtranetClient\Model\Process
```

Exploitation Process

Executer un process

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant de l'opérateur
$process_id = 56; // int | identifiant du process
$files = array("/path/to/file.txt"); // \SplFileObject[]
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

[**\InfracorpExtranetClient\Model\Process**](../Model/Process.md)

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
runWorkflow($id, $request_body): \InfracorpExtranetClient\Model\GetWorkflow
```

Workflow

run workflow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | workflow id
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->runWorkflow($id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->runWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| workflow id | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\InfracorpExtranetClient\Model\GetWorkflow**](../Model/GetWorkflow.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($q, $legal_entity_id, $client_legal_entity_id): \InfracorpExtranetClient\Model\Search200ResponseInner[]
```

Search

Perform search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\Search200ResponseInner[]**](../Model/Search200ResponseInner.md)

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
setCommercialOfferSectionOffer($id, $section_id, $set_commercial_offer_section_offer): \InfracorpExtranetClient\Model\CreateCommercialOffer201Response
```

Set Commercial Offer Section Offer

Appliquer une offre à une section

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis
$section_id = 56; // int | identifiant de la section
$set_commercial_offer_section_offer = new \InfracorpExtranetClient\Model\SetCommercialOfferSectionOffer(); // \InfracorpExtranetClient\Model\SetCommercialOfferSectionOffer

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
| **set_commercial_offer_section_offer** | [**\InfracorpExtranetClient\Model\SetCommercialOfferSectionOffer**](../Model/SetCommercialOfferSectionOffer.md)|  | |

### Return type

[**\InfracorpExtranetClient\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

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
signCommercialOffer($id, $sign_commercial_offer): \InfracorpExtranetClient\Model\SignCommercialOffer200Response
```

Sign Commercial Offer

Signer un devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | identifiant du devis
$sign_commercial_offer = new \InfracorpExtranetClient\Model\SignCommercialOffer(); // \InfracorpExtranetClient\Model\SignCommercialOffer

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
| **sign_commercial_offer** | [**\InfracorpExtranetClient\Model\SignCommercialOffer**](../Model/SignCommercialOffer.md)|  | [optional] |

### Return type

[**\InfracorpExtranetClient\Model\SignCommercialOffer200Response**](../Model/SignCommercialOffer200Response.md)

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
submitCommercialOffer($id): \InfracorpExtranetClient\Model\CreateCommercialOffer201Response
```

Submit Commercial Offer

Valider un devis

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = InfracorpExtranetClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new InfracorpExtranetClient\Api\DefaultApi(
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

[**\InfracorpExtranetClient\Model\CreateCommercialOffer201Response**](../Model/CreateCommercialOffer201Response.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
