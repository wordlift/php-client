# OpenAPI\Client\PluginDiagnosticsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateDiagnosticPluginCollection()**](PluginDiagnosticsApi.md#updateDiagnosticPluginCollection) | **PUT** /accounts/me/plugin/diagnostics/plugins-collection | Update |


## `updateDiagnosticPluginCollection()`

```php
updateDiagnosticPluginCollection($account, $diagnostic_plugin_request)
```

Update

Replace the list of the plugins for the current account with the one provided by the client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginDiagnosticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Account(); // \OpenAPI\Client\Model\Account
$diagnostic_plugin_request = array(new \OpenAPI\Client\Model\DiagnosticPluginRequest()); // \OpenAPI\Client\Model\DiagnosticPluginRequest[]

try {
    $apiInstance->updateDiagnosticPluginCollection($account, $diagnostic_plugin_request);
} catch (Exception $e) {
    echo 'Exception when calling PluginDiagnosticsApi->updateDiagnosticPluginCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | [**\OpenAPI\Client\Model\Account**](../Model/.md)|  | |
| **diagnostic_plugin_request** | [**\OpenAPI\Client\Model\DiagnosticPluginRequest[]**](../Model/DiagnosticPluginRequest.md)|  | |

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
