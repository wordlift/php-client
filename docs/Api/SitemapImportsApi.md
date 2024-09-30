# OpenAPI\Client\SitemapImportsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSitemapImport()**](SitemapImportsApi.md#createSitemapImport) | **POST** /sitemap-imports | Create |


## `createSitemapImport()`

```php
createSitemapImport($sitemap_import_request)
```

Create

Create a Sitemap Import

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SitemapImportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sitemap_import_request = new \OpenAPI\Client\Model\SitemapImportRequest(); // \OpenAPI\Client\Model\SitemapImportRequest

try {
    $apiInstance->createSitemapImport($sitemap_import_request);
} catch (Exception $e) {
    echo 'Exception when calling SitemapImportsApi->createSitemapImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sitemap_import_request** | [**\OpenAPI\Client\Model\SitemapImportRequest**](../Model/SitemapImportRequest.md)|  | |

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
