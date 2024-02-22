# # Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_workflows** | **string[]** | liste des processus disponible pour l&#39;objet | [optional]
**id** | **int** |  | [optional]
**create_date** | **\DateTime** |  | [optional]
**last_modified_date** | **\DateTime** |  | [optional]
**rc_total** | **array<string,int>** |  | [optional]
**rc_total_str** | **array<string,string>** |  | [optional]
**rc_vat_total** | **array<string,int>** |  | [optional]
**rc_vat_total_str** | **array<string,string>** |  | [optional]
**nrc_total** | **int** |  | [optional]
**nrc_total_str** | **string** |  | [optional]
**nrc_vat_total** | **int** |  | [optional]
**nrc_vat_total_str** | **string** |  | [optional]
**client_legal_entity** | [**\Infracorp\Extranet\Client\Model\ClientLegalEntity**](ClientLegalEntity.md) |  | [optional]
**legal_entity** | [**\Infracorp\Extranet\Client\Model\LegalEntity**](LegalEntity.md) |  | [optional]
**ref** | **string** |  | [optional]
**month_period** | **int** |  | [optional]
**year_period** | **int** |  | [optional]
**total** | **int** |  | [optional]
**total_str** | **string** |  | [optional]
**total_vat** | **int** |  | [optional]
**total_vat_str** | **string** |  | [optional]
**details** | [**\Infracorp\Extranet\Client\Model\InvoiceDetail[]**](InvoiceDetail.md) |  | [optional]
**use_vat_reverse_charge** | **bool** |  | [optional]
**due_date** | **\DateTime** |  | [optional]
**submit_date** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
