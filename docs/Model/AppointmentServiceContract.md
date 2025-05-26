# # AppointmentServiceContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_workflows** | **string[]** | liste des processus disponible pour l&#39;objet | [optional]
**id** | **int** |  | [optional]
**name** | **string** |  | [optional]
**create_date** | **\DateTime** |  | [optional]
**last_modified_date** | **\DateTime** |  | [optional]
**canceled_reason** | **string** |  | [optional]
**canceled_date** | **\DateTime** |  | [optional]
**status** | **string** |  | [optional]
**legal_entity_id** | **int** |  | [optional]
**client_contract_id** | **int** |  | [optional]
**subscription_date** | **\DateTime** |  | [optional]
**activation_date** | **\DateTime** |  | [optional]
**first_activation_date** | **\DateTime** |  | [optional]
**offer** | [**\Infracorp\Extranet\Client\Model\Offer**](Offer.md) |  | [optional]
**client** | [**\Infracorp\Extranet\Client\Model\ClientLegalEntity**](ClientLegalEntity.md) |  | [optional]
**ref_client** | **string** | ref set by customer | [optional]
**ref_service** | **string** | ref used by Prizz Telecom NOC | [optional]
**description** | **string** |  | [optional]
**services** | [**\Infracorp\Extranet\Client\Model\Service[]**](Service.md) |  | [optional]
**nrcs** | [**\Infracorp\Extranet\Client\Model\ServiceContractNrc[]**](ServiceContractNrc.md) |  | [optional]
**planned_activation_date** | **\DateTime** |  | [optional]
**sold_activation_date** | **\DateTime** |  | [optional]
**commitment_end_date** | **\DateTime** |  | [optional]
**attributes** | **array<string,mixed>** |  | [optional]
**consolidated_attributes** | **array<string,mixed>** |  | [optional]
**consolidated_attributes_staging_or_new** | **array<string,mixed>** |  | [optional]
**commercial_offers** | [**\Infracorp\Extranet\Client\Model\ServiceContractCommercialOffersInner[]**](ServiceContractCommercialOffersInner.md) |  | [optional]
**contacts** | [**\Infracorp\Extranet\Client\Model\Contact[]**](Contact.md) |  | [optional]
**configured_contacts** | [**\Infracorp\Extranet\Client\Model\TypedContact[]**](TypedContact.md) |  | [optional]
**replaces** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
