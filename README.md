# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



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

## API Endpoints

All URIs are relative to *http://sourceforge.priv.ithd.fr:8000*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**createCommercialOffer**](docs/Api/DefaultApi.md#createcommercialoffer) | **POST** /external-api/v2/commercial_offers | Commercial Offers
*DefaultApi* | [**createCommercialOfferSection**](docs/Api/DefaultApi.md#createcommercialoffersection) | **POST** /external-api/v2/commercial_offers/{id}/sections | Commercial Offer Sections
*DefaultApi* | [**createEligibility**](docs/Api/DefaultApi.md#createeligibility) | **POST** /external-api/v2/eligibility | Create Eligibility
*DefaultApi* | [**createTicketOperator**](docs/Api/DefaultApi.md#createticketoperator) | **POST** /external-api/v2/exploitation/operator/{id} | Exploitation Operator Tickets
*DefaultApi* | [**createWorkflow**](docs/Api/DefaultApi.md#createworkflow) | **POST** /external-api/v2/workflow | Workflows
*DefaultApi* | [**eligibilityHistory**](docs/Api/DefaultApi.md#eligibilityhistory) | **GET** /external-api/v2/eligibility/history | Eligibility History
*DefaultApi* | [**getClientLegalEntities**](docs/Api/DefaultApi.md#getclientlegalentities) | **GET** /external-api/v2/client_legal_entities | Client legal entities
*DefaultApi* | [**getClientLegalEntity**](docs/Api/DefaultApi.md#getclientlegalentity) | **GET** /external-api/v2/client_legal_entities/{id} | Client legal entity
*DefaultApi* | [**getCommentThread**](docs/Api/DefaultApi.md#getcommentthread) | **GET** /external-api/v2/comments/threads/{id} | Comment thread
*DefaultApi* | [**getCommentThreads**](docs/Api/DefaultApi.md#getcommentthreads) | **GET** /external-api/v2/comments/threads | Comment threads
*DefaultApi* | [**getCommercialOffer**](docs/Api/DefaultApi.md#getcommercialoffer) | **GET** /external-api/v2/commercial_offers/{id} | Commercial Offer
*DefaultApi* | [**getCommercialOfferPdf**](docs/Api/DefaultApi.md#getcommercialofferpdf) | **GET** /external-api/v2/commercial_offers/{id}/pdf | Commercial Offer Pdf
*DefaultApi* | [**getCommercialOffers**](docs/Api/DefaultApi.md#getcommercialoffers) | **GET** /external-api/v2/commercial_offers | Commercial Offers
*DefaultApi* | [**getEligibility**](docs/Api/DefaultApi.md#geteligibility) | **GET** /external-api/v2/eligibility/{id} | Get Eligibility
*DefaultApi* | [**getInvoice**](docs/Api/DefaultApi.md#getinvoice) | **GET** /external-api/v2/invoices/{id} | Invoice
*DefaultApi* | [**getInvoicePdf**](docs/Api/DefaultApi.md#getinvoicepdf) | **GET** /external-api/v2/invoices/{id}/pdf | Invoice Pdf
*DefaultApi* | [**getInvoices**](docs/Api/DefaultApi.md#getinvoices) | **GET** /external-api/v2/invoices | Invoices
*DefaultApi* | [**getLegalEntities**](docs/Api/DefaultApi.md#getlegalentities) | **GET** /external-api/v2/legal_entities | Legal entities
*DefaultApi* | [**getLegalEntity**](docs/Api/DefaultApi.md#getlegalentity) | **GET** /external-api/v2/legal_entities/{id} | Legal entity
*DefaultApi* | [**getOffers**](docs/Api/DefaultApi.md#getoffers) | **GET** /external-api/v2/offers | Offers
*DefaultApi* | [**getOperatorTickets**](docs/Api/DefaultApi.md#getoperatortickets) | **GET** /external-api/v2/exploitation/operator/{id}/tickets | Exploitation Operator Tickets
*DefaultApi* | [**getPriceList**](docs/Api/DefaultApi.md#getpricelist) | **GET** /external-api/v2/price_lists/{id} | Price List
*DefaultApi* | [**getPriceListItems**](docs/Api/DefaultApi.md#getpricelistitems) | **GET** /external-api/v2/price_lists_items | Price List Items
*DefaultApi* | [**getPriceListOffers**](docs/Api/DefaultApi.md#getpricelistoffers) | **GET** /external-api/v2/price_lists/{id}/offers | Price List Offers
*DefaultApi* | [**getPriceLists**](docs/Api/DefaultApi.md#getpricelists) | **GET** /external-api/v2/price_lists | Price Lists
*DefaultApi* | [**getProcess**](docs/Api/DefaultApi.md#getprocess) | **GET** /external-api/v2/exploitation/operator/{id}/process/{processId} | Exploitation Process
*DefaultApi* | [**getService**](docs/Api/DefaultApi.md#getservice) | **GET** /external-api/v2/services/{id} | Service
*DefaultApi* | [**getServiceContract**](docs/Api/DefaultApi.md#getservicecontract) | **GET** /external-api/v2/service_contracts/{id} | Service Contract
*DefaultApi* | [**getServiceContracts**](docs/Api/DefaultApi.md#getservicecontracts) | **GET** /external-api/v2/service_contracts | Service Contracts
*DefaultApi* | [**getServices**](docs/Api/DefaultApi.md#getservices) | **GET** /external-api/v2/services | Services
*DefaultApi* | [**getTicket**](docs/Api/DefaultApi.md#getticket) | **GET** /external-api/v2/exploitation/operator/{id}/tickets/{ref} | Exploitation Ticket
*DefaultApi* | [**getTickets**](docs/Api/DefaultApi.md#gettickets) | **GET** /external-api/v2/exploitation/tickets | Exploitation Tickets
*DefaultApi* | [**getWorkflow**](docs/Api/DefaultApi.md#getworkflow) | **GET** /external-api/v2/workflow/{id} | Workflow
*DefaultApi* | [**openTicket**](docs/Api/DefaultApi.md#openticket) | **POST** /external-api/v2/exploitation/operator/{id}/tickets | Exploitation Tickets
*DefaultApi* | [**removeCommercialOfferSection**](docs/Api/DefaultApi.md#removecommercialoffersection) | **DELETE** /external-api/v2/commercial_offers/{id}/sections/{sectionId} | Remove Commercial Offer Section
*DefaultApi* | [**renameCommercialOfferSection**](docs/Api/DefaultApi.md#renamecommercialoffersection) | **POST** /external-api/v2/commercial_offers/{id}/sections/{sectionId}/rename | Rename Commercial Offer Section
*DefaultApi* | [**runProcess**](docs/Api/DefaultApi.md#runprocess) | **POST** /external-api/v2/exploitation/operator/{id}/process/{processId} | Exploitation Process
*DefaultApi* | [**runWorkflow**](docs/Api/DefaultApi.md#runworkflow) | **POST** /external-api/v2/workflow/{id} | Workflow
*DefaultApi* | [**search**](docs/Api/DefaultApi.md#search) | **GET** /external-api/v2/search | Search
*DefaultApi* | [**setCommercialOfferSectionOffer**](docs/Api/DefaultApi.md#setcommercialoffersectionoffer) | **POST** /external-api/v2/commercial_offers/{id}/sections/{sectionId}/offer | Set Commercial Offer Section Offer
*DefaultApi* | [**signCommercialOffer**](docs/Api/DefaultApi.md#signcommercialoffer) | **POST** /external-api/v2/commercial_offers/{id}/sign | Sign Commercial Offer
*DefaultApi* | [**submitCommercialOffer**](docs/Api/DefaultApi.md#submitcommercialoffer) | **POST** /external-api/v2/commercial_offers/{id}/submit | Submit Commercial Offer

## Models

- [Attachment](docs/Model/Attachment.md)
- [ClientContract](docs/Model/ClientContract.md)
- [ClientLegalEntity](docs/Model/ClientLegalEntity.md)
- [ClientLegalEntitySearch](docs/Model/ClientLegalEntitySearch.md)
- [Comment](docs/Model/Comment.md)
- [CommentThread](docs/Model/CommentThread.md)
- [CommentTree](docs/Model/CommentTree.md)
- [CommercialOffer](docs/Model/CommercialOffer.md)
- [CommercialOfferItem](docs/Model/CommercialOfferItem.md)
- [CommercialOfferSearch](docs/Model/CommercialOfferSearch.md)
- [CommercialOfferSection](docs/Model/CommercialOfferSection.md)
- [CommercialOfferVatDetailInner](docs/Model/CommercialOfferVatDetailInner.md)
- [Contact](docs/Model/Contact.md)
- [ContactSearch](docs/Model/ContactSearch.md)
- [CreateCommercialOffer](docs/Model/CreateCommercialOffer.md)
- [CreateCommercialOffer201Response](docs/Model/CreateCommercialOffer201Response.md)
- [CreateCommercialOfferSection](docs/Model/CreateCommercialOfferSection.md)
- [CreateEligibility](docs/Model/CreateEligibility.md)
- [CreateOperator](docs/Model/CreateOperator.md)
- [CreateTicket](docs/Model/CreateTicket.md)
- [CreateWorkflow](docs/Model/CreateWorkflow.md)
- [EligibilityHistory](docs/Model/EligibilityHistory.md)
- [EligibilityHistory200Response](docs/Model/EligibilityHistory200Response.md)
- [EligibilityResult](docs/Model/EligibilityResult.md)
- [EligibilityResultPriceListItemsGroups](docs/Model/EligibilityResultPriceListItemsGroups.md)
- [GetClientLegalEntities200Response](docs/Model/GetClientLegalEntities200Response.md)
- [GetClientLegalEntities200ResponsePagination](docs/Model/GetClientLegalEntities200ResponsePagination.md)
- [GetCommercialOffers200Response](docs/Model/GetCommercialOffers200Response.md)
- [GetEligibility](docs/Model/GetEligibility.md)
- [GetInvoices200Response](docs/Model/GetInvoices200Response.md)
- [GetLegalEntities200Response](docs/Model/GetLegalEntities200Response.md)
- [GetServiceContracts200Response](docs/Model/GetServiceContracts200Response.md)
- [GetServices200Response](docs/Model/GetServices200Response.md)
- [GetWorkflow](docs/Model/GetWorkflow.md)
- [GetWorkflowRedirect](docs/Model/GetWorkflowRedirect.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceDetail](docs/Model/InvoiceDetail.md)
- [InvoiceSearch](docs/Model/InvoiceSearch.md)
- [LegalEntity](docs/Model/LegalEntity.md)
- [Offer](docs/Model/Offer.md)
- [OfferItem](docs/Model/OfferItem.md)
- [Operator](docs/Model/Operator.md)
- [OperatorTicket](docs/Model/OperatorTicket.md)
- [PriceList](docs/Model/PriceList.md)
- [PriceListItem](docs/Model/PriceListItem.md)
- [PricesListOffers](docs/Model/PricesListOffers.md)
- [Process](docs/Model/Process.md)
- [ProcessAction](docs/Model/ProcessAction.md)
- [ProcessActionField](docs/Model/ProcessActionField.md)
- [ProcessAttributes](docs/Model/ProcessAttributes.md)
- [ProcessAttributesMessages](docs/Model/ProcessAttributesMessages.md)
- [ProcessAttributesQualification](docs/Model/ProcessAttributesQualification.md)
- [ProcessAttributesQualificationValues](docs/Model/ProcessAttributesQualificationValues.md)
- [ProcessMessage](docs/Model/ProcessMessage.md)
- [Product](docs/Model/Product.md)
- [RenameCommercialOfferSection](docs/Model/RenameCommercialOfferSection.md)
- [RunningProcess](docs/Model/RunningProcess.md)
- [Search200ResponseInner](docs/Model/Search200ResponseInner.md)
- [Service](docs/Model/Service.md)
- [ServiceContract](docs/Model/ServiceContract.md)
- [ServiceContractSearch](docs/Model/ServiceContractSearch.md)
- [SetCommercialOfferSectionOffer](docs/Model/SetCommercialOfferSectionOffer.md)
- [SignCommercialOffer](docs/Model/SignCommercialOffer.md)
- [SignCommercialOffer200Response](docs/Model/SignCommercialOffer200Response.md)
- [Ticket](docs/Model/Ticket.md)
- [Transition](docs/Model/Transition.md)
- [TransitionFormFieldsInner](docs/Model/TransitionFormFieldsInner.md)
- [TransitionFormFieldsInnerValuesInner](docs/Model/TransitionFormFieldsInnerValuesInner.md)
- [Workflow](docs/Model/Workflow.md)

## Authorization

Authentication schemes defined for the API:
### tokenAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
