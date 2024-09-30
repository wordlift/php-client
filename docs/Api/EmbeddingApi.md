# Wordlift\Client\EmbeddingApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmbedding()**](EmbeddingApi.md#createEmbedding) | **POST** /kg/embeddings | Create |


## `createEmbedding()`

```php
createEmbedding($kg_embedding_request): array<string,string>[]
```

Create

Create the embedding for the IRIs for the provided query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Wordlift\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wordlift\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Wordlift\Client\Api\EmbeddingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kg_embedding_request = new \Wordlift\Client\Model\KgEmbeddingRequest(); // \Wordlift\Client\Model\KgEmbeddingRequest

try {
    $result = $apiInstance->createEmbedding($kg_embedding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmbeddingApi->createEmbedding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **kg_embedding_request** | [**\Wordlift\Client\Model\KgEmbeddingRequest**](../Model/KgEmbeddingRequest.md)|  | |

### Return type

**array<string,string>[]**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/x-ndjson`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
