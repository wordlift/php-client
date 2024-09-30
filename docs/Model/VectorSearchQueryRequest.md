# # VectorSearchQueryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fields** | **string[]** | List of extra fields to be retrieved. | [optional]
**filters** | [**\OpenAPI\Client\Model\Filter[]**](Filter.md) | A list of prefilters. | [optional]
**query_embedding** | **float[]** | The list of embeddings, not required if &#x60;query_string&#x60; is provided. | [optional]
**query_string** | **string** | The query string, not required if the &#x60;query_embeddings&#x60; are provided. Please note that the &#x60;query_string&#x60; is ignored if the &#x60;query_embeddings&#x60; are provided. | [optional]
**query_uri** | **string** | Perform a Vector Search based on similarities with an entity with the specified URI. | [optional]
**query_url** | **string** | Perform a Vector Search based on similarities with an entity with the specified URL (schema:url). | [optional]
**similarity_top_k** | **int** | The similarity top K. | [optional] [default to 2]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
