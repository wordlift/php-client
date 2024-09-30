# OpenAPI\Client\BotifyCrawlImportsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBotifyCrawlImport()**](BotifyCrawlImportsApi.md#createBotifyCrawlImport) | **POST** /botify-crawl-imports | Create |


## `createBotifyCrawlImport()`

```php
createBotifyCrawlImport($botify_crawl_import_request): \OpenAPI\Client\Model\WebPage[]
```

Create

Create a Botify Crawl Import

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BotifyCrawlImportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$botify_crawl_import_request = new \OpenAPI\Client\Model\BotifyCrawlImportRequest(); // \OpenAPI\Client\Model\BotifyCrawlImportRequest

try {
    $result = $apiInstance->createBotifyCrawlImport($botify_crawl_import_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BotifyCrawlImportsApi->createBotifyCrawlImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **botify_crawl_import_request** | [**\OpenAPI\Client\Model\BotifyCrawlImportRequest**](../Model/BotifyCrawlImportRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WebPage[]**](../Model/WebPage.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/x-ndjson`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
