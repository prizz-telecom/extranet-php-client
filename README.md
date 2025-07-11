# OpenAPIClient-php

Prizz-Telecom Extranet API https://dev.prizz-telecom.fr/


## Installation & Usage

### Requirements

PHP 8.1 and later.

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

## API Endpoints

All URIs are relative to *https://my.tests.prizz-telecom.fr*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**addCommercialOfferComment**](docs/Api/DefaultApi.md#addcommercialoffercomment) | **POST** /external-api/v2/commercial_offers/{id}/comments | Commercial offer add comment
*DefaultApi* | [**addServiceContractComment**](docs/Api/DefaultApi.md#addservicecontractcomment) | **POST** /external-api/v2/service_contracts/{id}/comments | Service Contract add comment
*DefaultApi* | [**createCommercialOffer**](docs/Api/DefaultApi.md#createcommercialoffer) | **POST** /external-api/v2/commercial_offers | Commercial Offers
*DefaultApi* | [**createCommercialOfferSection**](docs/Api/DefaultApi.md#createcommercialoffersection) | **POST** /external-api/v2/commercial_offers/{id}/sections | Commercial Offer Sections
*DefaultApi* | [**createEligibility**](docs/Api/DefaultApi.md#createeligibility) | **POST** /external-api/v2/eligibility | Create Eligibility
*DefaultApi* | [**createTicketOperator**](docs/Api/DefaultApi.md#createticketoperator) | **POST** /external-api/v2/exploitation/operator/{id} | Exploitation Operator Tickets
*DefaultApi* | [**createWorkflow**](docs/Api/DefaultApi.md#createworkflow) | **POST** /external-api/v2/workflow | Workflows
*DefaultApi* | [**eligibilityHistory**](docs/Api/DefaultApi.md#eligibilityhistory) | **GET** /external-api/v2/eligibility/history | Eligibility History
*DefaultApi* | [**fastOrder**](docs/Api/DefaultApi.md#fastorder) | **POST** /external-api/v2/commercial_offers/fast_order/{elig_ctx_id} | Fast order with eligiblity result
*DefaultApi* | [**getApiTokens**](docs/Api/DefaultApi.md#getapitokens) | **GET** /external-api/v2/users/api_tokens | User Api Tokens
*DefaultApi* | [**getAppointment**](docs/Api/DefaultApi.md#getappointment) | **GET** /external-api/v2/appointments/{id} | Appointment
*DefaultApi* | [**getAppointments**](docs/Api/DefaultApi.md#getappointments) | **GET** /external-api/v2/appointments | Appointments
*DefaultApi* | [**getAttachment**](docs/Api/DefaultApi.md#getattachment) | **GET** /external-api/v2/attachments/{id} | Attachment
*DefaultApi* | [**getClientContract**](docs/Api/DefaultApi.md#getclientcontract) | **GET** /external-api/v2/client_contracts/{id} | Client Contract
*DefaultApi* | [**getClientContracts**](docs/Api/DefaultApi.md#getclientcontracts) | **GET** /external-api/v2/client_contracts | Client Contracts
*DefaultApi* | [**getClientLegalEntities**](docs/Api/DefaultApi.md#getclientlegalentities) | **GET** /external-api/v2/client_legal_entities | Client legal entities
*DefaultApi* | [**getClientLegalEntity**](docs/Api/DefaultApi.md#getclientlegalentity) | **GET** /external-api/v2/client_legal_entities/{id} | Client legal entity
*DefaultApi* | [**getCommentThread**](docs/Api/DefaultApi.md#getcommentthread) | **GET** /external-api/v2/comments/threads/{id} | Comment thread
*DefaultApi* | [**getCommentThreads**](docs/Api/DefaultApi.md#getcommentthreads) | **GET** /external-api/v2/comments/threads | Comment threads
*DefaultApi* | [**getCommercialOffer**](docs/Api/DefaultApi.md#getcommercialoffer) | **GET** /external-api/v2/commercial_offers/{id} | Commercial Offer
*DefaultApi* | [**getCommercialOfferByName**](docs/Api/DefaultApi.md#getcommercialofferbyname) | **GET** /external-api/v2/commercial_offers_by_name/{offer_name} | Commercial Offer by reference CPTXXXXXX, CPIXXXXXX
*DefaultApi* | [**getCommercialOfferItem**](docs/Api/DefaultApi.md#getcommercialofferitem) | **GET** /external-api/v2/commercial_offer_items/{id} | Commercial Offer Item
*DefaultApi* | [**getCommercialOfferPdf**](docs/Api/DefaultApi.md#getcommercialofferpdf) | **GET** /external-api/v2/commercial_offers/{id}/pdf | Commercial Offer PDF
*DefaultApi* | [**getCommercialOfferSection**](docs/Api/DefaultApi.md#getcommercialoffersection) | **GET** /external-api/v2/commercial_offer_sections/{id} | Commercial Offer Section
*DefaultApi* | [**getCommercialOffers**](docs/Api/DefaultApi.md#getcommercialoffers) | **GET** /external-api/v2/commercial_offers | Commercial Offers
*DefaultApi* | [**getCurrentUser**](docs/Api/DefaultApi.md#getcurrentuser) | **GET** /external-api/v2/user | User
*DefaultApi* | [**getEligibility**](docs/Api/DefaultApi.md#geteligibility) | **GET** /external-api/v2/eligibility/{id} | Get Eligibility
*DefaultApi* | [**getEligibilityBasedOfferContextsShortened**](docs/Api/DefaultApi.md#geteligibilitybasedoffercontextsshortened) | **GET** /external-api/v2/eligibility/{id}/contexts/shortened | Eligibility Based Offer Contexts
*DefaultApi* | [**getEntityAttachments**](docs/Api/DefaultApi.md#getentityattachments) | **GET** /external-api/v2/attachments | Attachements entity
*DefaultApi* | [**getInvoice**](docs/Api/DefaultApi.md#getinvoice) | **GET** /external-api/v2/invoices/{id} | Invoice
*DefaultApi* | [**getInvoiceDetail**](docs/Api/DefaultApi.md#getinvoicedetail) | **GET** /external-api/v2/invoice_details/{id} | Invoice Detail
*DefaultApi* | [**getInvoicePdf**](docs/Api/DefaultApi.md#getinvoicepdf) | **GET** /external-api/v2/invoices/{id}/pdf | Invoice Pdf
*DefaultApi* | [**getInvoices**](docs/Api/DefaultApi.md#getinvoices) | **GET** /external-api/v2/invoices | Invoices
*DefaultApi* | [**getLegalEntities**](docs/Api/DefaultApi.md#getlegalentities) | **GET** /external-api/v2/legal_entities | Legal entities
*DefaultApi* | [**getLegalEntity**](docs/Api/DefaultApi.md#getlegalentity) | **GET** /external-api/v2/legal_entities/{id} | Legal entity
*DefaultApi* | [**getOfferContext**](docs/Api/DefaultApi.md#getoffercontext) | **GET** /external-api/v2/offers/{id}/context | Offers Context
*DefaultApi* | [**getOfferContexts**](docs/Api/DefaultApi.md#getoffercontexts) | **GET** /external-api/v2/offers/{id}/contexts | Offers Contexts
*DefaultApi* | [**getOfferContextsShortened**](docs/Api/DefaultApi.md#getoffercontextsshortened) | **GET** /external-api/v2/offers/{id}/contexts/shortened | Offers Contexts
*DefaultApi* | [**getOffers**](docs/Api/DefaultApi.md#getoffers) | **GET** /external-api/v2/offers | Offers
*DefaultApi* | [**getOperatorTickets**](docs/Api/DefaultApi.md#getoperatortickets) | **GET** /external-api/v2/exploitation/operator/{id}/tickets | Exploitation Operator Tickets
*DefaultApi* | [**getPriceList**](docs/Api/DefaultApi.md#getpricelist) | **GET** /external-api/v2/price_lists/{id} | Price List
*DefaultApi* | [**getPriceListItems**](docs/Api/DefaultApi.md#getpricelistitems) | **GET** /external-api/v2/price_lists_items | Price List Items
*DefaultApi* | [**getPriceListOffers**](docs/Api/DefaultApi.md#getpricelistoffers) | **GET** /external-api/v2/price_lists/{id}/offers | Price List Offers
*DefaultApi* | [**getPriceLists**](docs/Api/DefaultApi.md#getpricelists) | **GET** /external-api/v2/price_lists | Price Lists
*DefaultApi* | [**getProcess**](docs/Api/DefaultApi.md#getprocess) | **GET** /external-api/v2/exploitation/operator/{id}/process/{processId} | Exploitation Process
*DefaultApi* | [**getPublicAttachments**](docs/Api/DefaultApi.md#getpublicattachments) | **GET** /external-api/v2/attachments/public | Attachments Public
*DefaultApi* | [**getRunningWorkflows**](docs/Api/DefaultApi.md#getrunningworkflows) | **GET** /external-api/v2/workflows/running | Workflows running
*DefaultApi* | [**getService**](docs/Api/DefaultApi.md#getservice) | **GET** /external-api/v2/services/{id} | Service
*DefaultApi* | [**getServiceContract**](docs/Api/DefaultApi.md#getservicecontract) | **GET** /external-api/v2/service_contracts/{id} | Service Contract
*DefaultApi* | [**getServiceContractByName**](docs/Api/DefaultApi.md#getservicecontractbyname) | **GET** /external-api/v2/service_contracts_by_name/{service_name} | Service Contract by name
*DefaultApi* | [**getServiceContractOperationalStatusByName**](docs/Api/DefaultApi.md#getservicecontractoperationalstatusbyname) | **GET** /external-api/v2/service_contracts_by_name/{service_name}/operational_status | Get service contract operational status
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
*DefaultApi* | [**setServiceContractVlan**](docs/Api/DefaultApi.md#setservicecontractvlan) | **POST** /external-api/v2/service_contracts/{id}/vlan | Service Contract set vlan
*DefaultApi* | [**signCommercialOffer**](docs/Api/DefaultApi.md#signcommercialoffer) | **POST** /external-api/v2/commercial_offers/{id}/sign | Sign Commercial Offer
*DefaultApi* | [**submitCommercialOffer**](docs/Api/DefaultApi.md#submitcommercialoffer) | **POST** /external-api/v2/commercial_offers/{id}/submit | Submit Commercial Offer
*DefaultApi* | [**updateCommercialOfferSectionItems**](docs/Api/DefaultApi.md#updatecommercialoffersectionitems) | **POST** /external-api/v2/commercial_offers/{id}/sections/{sectionId}/update_items | Update Commercial Offer Section Items

## Models

- [AddCommercialOfferComment](docs/Model/AddCommercialOfferComment.md)
- [AddServiceContractComment](docs/Model/AddServiceContractComment.md)
- [Appointment](docs/Model/Appointment.md)
- [ArchivedProcess](docs/Model/ArchivedProcess.md)
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
- [CommercialOfferVatDetailStrInner](docs/Model/CommercialOfferVatDetailStrInner.md)
- [Contact](docs/Model/Contact.md)
- [ContactSearch](docs/Model/ContactSearch.md)
- [CreateCommercialOffer](docs/Model/CreateCommercialOffer.md)
- [CreateCommercialOffer201Response](docs/Model/CreateCommercialOffer201Response.md)
- [CreateCommercialOfferSection](docs/Model/CreateCommercialOfferSection.md)
- [CreateEligibility](docs/Model/CreateEligibility.md)
- [CreateOperator](docs/Model/CreateOperator.md)
- [CreateTicket](docs/Model/CreateTicket.md)
- [CreateWorkflow](docs/Model/CreateWorkflow.md)
- [EligibilityBasedOfferContextShortened](docs/Model/EligibilityBasedOfferContextShortened.md)
- [EligibilityHistory](docs/Model/EligibilityHistory.md)
- [EligibilityHistory200Response](docs/Model/EligibilityHistory200Response.md)
- [EligibilityPriceListItem](docs/Model/EligibilityPriceListItem.md)
- [EligibilityResult](docs/Model/EligibilityResult.md)
- [EligibilityResultCombination](docs/Model/EligibilityResultCombination.md)
- [EligibilityResultPriceListItemsGroups](docs/Model/EligibilityResultPriceListItemsGroups.md)
- [FastOrder](docs/Model/FastOrder.md)
- [GetApiTokens200Response](docs/Model/GetApiTokens200Response.md)
- [GetAppointments200Response](docs/Model/GetAppointments200Response.md)
- [GetClientContracts200Response](docs/Model/GetClientContracts200Response.md)
- [GetClientContracts200ResponsePagination](docs/Model/GetClientContracts200ResponsePagination.md)
- [GetClientLegalEntities200Response](docs/Model/GetClientLegalEntities200Response.md)
- [GetCommercialOffers200Response](docs/Model/GetCommercialOffers200Response.md)
- [GetEligibility](docs/Model/GetEligibility.md)
- [GetInvoices200Response](docs/Model/GetInvoices200Response.md)
- [GetLegalEntities200Response](docs/Model/GetLegalEntities200Response.md)
- [GetPublicAttachments200Response](docs/Model/GetPublicAttachments200Response.md)
- [GetRunningWorkflows200Response](docs/Model/GetRunningWorkflows200Response.md)
- [GetRunningWorkflows200ResponseWorkflowsInner](docs/Model/GetRunningWorkflows200ResponseWorkflowsInner.md)
- [GetServiceContracts200Response](docs/Model/GetServiceContracts200Response.md)
- [GetServices200Response](docs/Model/GetServices200Response.md)
- [GetWorkflow](docs/Model/GetWorkflow.md)
- [GetWorkflowRedirect](docs/Model/GetWorkflowRedirect.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceDetail](docs/Model/InvoiceDetail.md)
- [InvoiceSearch](docs/Model/InvoiceSearch.md)
- [LegalEntity](docs/Model/LegalEntity.md)
- [Offer](docs/Model/Offer.md)
- [OfferContext](docs/Model/OfferContext.md)
- [OfferContextShortened](docs/Model/OfferContextShortened.md)
- [OfferItem](docs/Model/OfferItem.md)
- [OperationalStatus](docs/Model/OperationalStatus.md)
- [Operator](docs/Model/Operator.md)
- [OperatorTicket](docs/Model/OperatorTicket.md)
- [PriceList](docs/Model/PriceList.md)
- [PriceListItem](docs/Model/PriceListItem.md)
- [PriceListItemExceptionsInner](docs/Model/PriceListItemExceptionsInner.md)
- [PriceListItemExceptionsInnerConstraintsInner](docs/Model/PriceListItemExceptionsInnerConstraintsInner.md)
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
- [ProductGroup](docs/Model/ProductGroup.md)
- [RenameCommercialOfferSection](docs/Model/RenameCommercialOfferSection.md)
- [RunningProcess](docs/Model/RunningProcess.md)
- [Search200ResponseInner](docs/Model/Search200ResponseInner.md)
- [Service](docs/Model/Service.md)
- [ServiceContract](docs/Model/ServiceContract.md)
- [ServiceContractCommercialOffersInner](docs/Model/ServiceContractCommercialOffersInner.md)
- [ServiceContractNrc](docs/Model/ServiceContractNrc.md)
- [ServiceContractSearch](docs/Model/ServiceContractSearch.md)
- [SetCommercialOfferSectionOffer](docs/Model/SetCommercialOfferSectionOffer.md)
- [SetCommercialOfferSectionOfferEligibility](docs/Model/SetCommercialOfferSectionOfferEligibility.md)
- [SetServiceContractVlanRequest](docs/Model/SetServiceContractVlanRequest.md)
- [SignCommercialOffer](docs/Model/SignCommercialOffer.md)
- [SignCommercialOffer200Response](docs/Model/SignCommercialOffer200Response.md)
- [Ticket](docs/Model/Ticket.md)
- [TicketAttachment](docs/Model/TicketAttachment.md)
- [Transition](docs/Model/Transition.md)
- [TransitionFormFieldsInner](docs/Model/TransitionFormFieldsInner.md)
- [TransitionFormFieldsInnerValuesInner](docs/Model/TransitionFormFieldsInnerValuesInner.md)
- [TypedContact](docs/Model/TypedContact.md)
- [UpdateCommercialOfferSectionItems](docs/Model/UpdateCommercialOfferSectionItems.md)
- [User](docs/Model/User.md)
- [UserApiToken](docs/Model/UserApiToken.md)
- [UserRole](docs/Model/UserRole.md)
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

- API version: `1.2.16`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
