# OpenAPI\Client\AddOnsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listConfigurations()**](AddOnsApi.md#listConfigurations) | **GET** /addon/configurations | List |


## `listConfigurations()`

```php
listConfigurations($token, $key, $limit): \OpenAPI\Client\Model\PageAddOnConfiguration
```

List

List the Add-ons configurations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | The access token
$key = 'key_example'; // string | The key
$limit = 10; // int | The maximum number of results

try {
    $result = $apiInstance->listConfigurations($token, $key, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->listConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The access token | [optional] |
| **key** | **string**| The key | [optional] |
| **limit** | **int**| The maximum number of results | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\PageAddOnConfiguration**](../Model/PageAddOnConfiguration.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
