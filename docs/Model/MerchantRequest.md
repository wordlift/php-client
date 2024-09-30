# # MerchantRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | Google Merchant access token | [optional]
**account_id** | **int** | The Knowledge Graph to use for the Merchant. Please note that the Knowledge Graph will be reset. When not provided, this method will use the first available Knowledge Graph. | [optional]
**dataset_domain** | **string** | The custom domain (for example data.example.org) | [optional]
**dataset_name** | **string** | The dataset path (for example \&quot;data\&quot;) | [optional]
**deleted** | **bool** | True if the merchant has been deleted | [optional] [default to false]
**google_merchant_id** | **int** | The Google Merchant id |
**ignore_brand** | **bool** | Whether to ignore the &#x60;brand&#x60; property during validation | [optional]
**ignore_image** | **bool** | Whether to ignore the &#x60;image&#x60; property during validation | [optional]
**publisher_name** | **string** | The publisher name (shows in schema publisher) |
**refresh_token** | **string** | Google Merchant refresh token |
**url** | **string** | The website URL |
**url_strategy** | **string** | Which strategy to use to write the url schema. | [optional] [default to 'canonicalLinkAndLink']
**writer_service** | **string** | How to write the merchant data to the graph, if unsure, do not set anything (by default &#x60;wordpressMerchantWriter&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
