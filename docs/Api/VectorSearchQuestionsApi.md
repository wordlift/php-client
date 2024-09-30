# OpenAPI\Client\VectorSearchQuestionsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVectorSearchQuestion()**](VectorSearchQuestionsApi.md#createVectorSearchQuestion) | **POST** /vector-search/questions-collection | Create |


## `createVectorSearchQuestion()`

```php
createVectorSearchQuestion($vector_search_question_request): \OpenAPI\Client\Model\PageVectorSearchQuestionResponseItem
```

Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VectorSearchQuestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vector_search_question_request = new \OpenAPI\Client\Model\VectorSearchQuestionRequest(); // \OpenAPI\Client\Model\VectorSearchQuestionRequest

try {
    $result = $apiInstance->createVectorSearchQuestion($vector_search_question_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VectorSearchQuestionsApi->createVectorSearchQuestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vector_search_question_request** | [**\OpenAPI\Client\Model\VectorSearchQuestionRequest**](../Model/VectorSearchQuestionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PageVectorSearchQuestionResponseItem**](../Model/PageVectorSearchQuestionResponseItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
