# Wordlift\Client\VectorSearchQueriesApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createQuery()**](VectorSearchQueriesApi.md#createQuery) | **POST** /vector-search/queries | Create |


## `createQuery()`

```php
createQuery($vector_search_query_request): \Wordlift\Client\Model\PageVectorSearchQueryResponseItem
```

Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Wordlift\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wordlift\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Wordlift\Client\Api\VectorSearchQueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vector_search_query_request = new \Wordlift\Client\Model\VectorSearchQueryRequest(); // \Wordlift\Client\Model\VectorSearchQueryRequest

try {
    $result = $apiInstance->createQuery($vector_search_query_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorSearchQueriesApi->createQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vector_search_query_request** | [**\Wordlift\Client\Model\VectorSearchQueryRequest**](../Model/VectorSearchQueryRequest.md)|  | |

### Return type

[**\Wordlift\Client\Model\PageVectorSearchQueryResponseItem**](../Model/PageVectorSearchQueryResponseItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
