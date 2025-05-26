# # EligibilityResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Offer name like &#39;L2 Premium&#39; | [optional]
**tech** | **int** | Technology id | [optional]
**delivery** | **int** | Delivery time in days | [optional]
**grt_min** | **int** | Minimum guaranteed resolution time in hours | [optional]
**grt_max** | **int** | Maximum guaranteed resolution time in hours | [optional]
**grt_non_working_hours_option_available** | **bool** | If the GRT option is available | [optional]
**grt_non_working_hours_option_mandatory** | **bool** | If the GRT option is mandatory | [optional]
**nrc_min** | **int** | Minimum non reccuring cost in €x100 | [optional]
**nrc_max** | **int** | Maximum non reccuring cost in €x100 | [optional]
**commitment_min** | **int** | Minimum commitment in months | [optional]
**commitment_max** | **int** | Maximum commitment in months | [optional]
**upload_min** | **int** | Minimum upload speed in mbps | [optional]
**upload_max** | **int** | Maximum upload speed in mbps | [optional]
**download_min** | **int** | Minimum download speed in mbps | [optional]
**download_max** | **int** | Maximum download speed in mbps | [optional]
**guaranteed_upload_min** | **int** | Minimum guaranteed upload speed in mbps | [optional]
**guaranteed_upload_max** | **int** | Maximum guaranteed upload speed in mbps | [optional]
**guaranteedd_download_min** | **int** | Minimum guaranteed download speed in mbps | [optional]
**guaranteedd_download_max** | **int** | Maximum guaranteed download speed in mbps | [optional]
**rc_min** | **int** | Minimum recurring cost in mbps | [optional]
**rc_max** | **int** | Maximum recurring cost in mbps | [optional]
**distance** | **int** | Estimation of the distance to the network to be built in meters | [optional]
**price_list_items_groups** | [**\Infracorp\Extranet\Client\Model\EligibilityResultPriceListItemsGroups**](EligibilityResultPriceListItemsGroups.md) |  | [optional]
**offer_id** | **int** | Offer id, a unique identifier for the offer | [optional]
**price_list_id** | **int** | Price list id, a unique identifier for the price list, samed id you can find in client contract | [optional]
**combinations** | [**\Infracorp\Extranet\Client\Model\EligibilityResultCombination[]**](EligibilityResultCombination.md) | List of combinations, with prices and attributes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
