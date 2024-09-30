# # MerchantSync

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | The create date-time. | [optional] [readonly]
**error_reason** | **string** | Error that caused the synchronization to fail. | [optional] [readonly]
**has_errors** | **bool** | Whether the sync encountered errors. | [optional] [readonly]
**id** | **int** | The unique id. | [optional] [readonly]
**merchant_id** | **int** | The parent Merchant id. | [readonly]
**modified_at** | **\DateTime** | The last modified date-time. | [optional] [readonly]
**products_created** | **int** | The number of created products | [optional] [readonly]
**products_deleted** | **int** | The number of deleted products | [optional] [readonly]
**products_errored** | **int** | The number of errored products | [optional] [readonly]
**products_skipped** | **int** | The number of skipped products | [optional] [readonly]
**products_total** | **int** | The total number of processed products, including the skipped and errored. | [optional] [readonly]
**products_unchanged** | **int** | The number of products that haven&#39;t changed and therefore haven&#39;t been synced again | [optional] [readonly]
**products_updated** | **int** | The number of update products | [optional] [readonly]
**started_at** | **\DateTime** | The started date-time. | [optional] [readonly]
**stopped_at** | **\DateTime** | The stopped date-time. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
