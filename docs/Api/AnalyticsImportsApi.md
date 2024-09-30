# OpenAPI\Client\AnalyticsImportsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAnalyticsImport()**](AnalyticsImportsApi.md#createAnalyticsImport) | **POST** /analytics-imports | Create |


## `createAnalyticsImport()`

```php
createAnalyticsImport($analytics_import_request): array<string,string>[]
```

Create

Create a Analytics Import using Google Search Console or Botify depending on the Account configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AnalyticsImportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$analytics_import_request = new \OpenAPI\Client\Model\AnalyticsImportRequest(); // \OpenAPI\Client\Model\AnalyticsImportRequest

try {
    $result = $apiInstance->createAnalyticsImport($analytics_import_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsImportsApi->createAnalyticsImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **analytics_import_request** | [**\OpenAPI\Client\Model\AnalyticsImportRequest**](../Model/AnalyticsImportRequest.md)|  | |

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
