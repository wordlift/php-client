# # VectorSearchQueryResponseItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fields** | **array<string,\Wordlift\Client\Model\VectorSearchQueryResponseItemFieldsValueInner[]>** | Map of extra retrieved fields. The values of the requested fields are always returned in an array.If no value is found an empty array is returned. | [optional]
**id** | **string** |  | [optional]
**iri** | **string** | The IRI of the entity that this node belongs to. |
**metadata** | [**array<string,\Wordlift\Client\Model\VectorSearchQueryResponseItemMetadataValue>**](VectorSearchQueryResponseItemMetadataValue.md) | A nodes extra metadata. | [optional]
**node_id** | **string** | A nodes id. | [optional]
**score** | **float** | The similarity score between the node and the query embeddings. |
**text** | **string** | The text of a node from which the embeddings were generated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
