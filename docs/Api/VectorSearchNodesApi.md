# OpenAPI\Client\VectorSearchNodesApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateNodesCollection()**](VectorSearchNodesApi.md#updateNodesCollection) | **PUT** /vector-search/nodes-collection | Update |


## `updateNodesCollection()`

```php
updateNodesCollection($node_request)
```

Update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VectorSearchNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node_request = array(new \OpenAPI\Client\Model\NodeRequest()); // \OpenAPI\Client\Model\NodeRequest[]

try {
    $apiInstance->updateNodesCollection($node_request);
} catch (Exception $e) {
    echo 'Exception when calling VectorSearchNodesApi->updateNodesCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **node_request** | [**\OpenAPI\Client\Model\NodeRequest[]**](../Model/NodeRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
