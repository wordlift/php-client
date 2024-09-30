# # Merchant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | The Google merchant access token |
**account_id** | **int** | The account id | [optional] [readonly]
**automatic_synchronization** | **bool** | Whether the Merchant data will be synchronized automatically | [optional]
**created_at** | **\DateTime** | The create date-time | [optional] [readonly]
**dataset_domain** | **string** | The custom domain (for example data.example.org) | [optional]
**dataset_name** | **string** | The dataset path (for example /data) | [optional]
**deleted** | **bool** | True if the merchant has been deleted | [default to false]
**deleted_at** | **\DateTime** | The delete date-time | [optional] [readonly]
**google_merchant_id** | **int** | The Google Merchant id |
**id** | **int** | The unique id | [optional] [readonly]
**ignore_brand** | **bool** | Whether to ignore the &#x60;brand&#x60; property during validation | [optional]
**ignore_image** | **bool** | Whether to ignore the &#x60;image&#x60; property during validation | [optional]
**modified_at** | **\DateTime** | The last modified date-time | [optional] [readonly]
**publisher_name** | **string** | The publisher name (shows in schema publisher) |
**refresh_token** | **string** | The Google merchant refresh token |
**url** | **string** | The website URL | [optional]
**url_strategy** | **string** | Which strategy to use to write the url schema. | [optional] [default to 'canonicalLinkAndLink']
**writer_service** | **string** | How to write the merchant data to the graph, if unsure, do not set anything (by default &#x60;wordpressMerchantWriter&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
