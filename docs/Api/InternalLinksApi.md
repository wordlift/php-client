# OpenAPI\Client\InternalLinksApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInternalLink()**](InternalLinksApi.md#createInternalLink) | **POST** /internal-links | Create |
| [**createInternalLinkSuggestion()**](InternalLinksApi.md#createInternalLinkSuggestion) | **POST** /internal-links/suggestions | Suggest |


## `createInternalLink()`

```php
createInternalLink($internal_link_request): string[]
```

Create

Create Internal Links.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternalLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_link_request = new \OpenAPI\Client\Model\InternalLinkRequest(); // \OpenAPI\Client\Model\InternalLinkRequest

try {
    $result = $apiInstance->createInternalLink($internal_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalLinksApi->createInternalLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **internal_link_request** | [**\OpenAPI\Client\Model\InternalLinkRequest**](../Model/InternalLinkRequest.md)|  | |

### Return type

**string[]**

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/x-ndjson`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInternalLinkSuggestion()`

```php
createInternalLinkSuggestion($internal_link_request): \OpenAPI\Client\Model\InternalLink[]
```

Suggest

Create an Internal Links suggestion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternalLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_link_request = new \OpenAPI\Client\Model\InternalLinkRequest(); // \OpenAPI\Client\Model\InternalLinkRequest

try {
    $result = $apiInstance->createInternalLinkSuggestion($internal_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalLinksApi->createInternalLinkSuggestion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **internal_link_request** | [**\OpenAPI\Client\Model\InternalLinkRequest**](../Model/InternalLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InternalLink[]**](../Model/InternalLink.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
