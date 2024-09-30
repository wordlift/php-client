# Wordlift\Client\DataURIApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**get()**](DataURIApi.md#get) | **GET** /data-uri | Get the Web Data URI for a Web Page URL. |


## `get()`

```php
get($u)
```

Get the Web Data URI for a Web Page URL.

The service will return a Web Data URI only for existing datasets. The Web Data URI is not guaranteed to exist (i.e. it may return 404).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Wordlift\Client\Api\DataURIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$u = 'u_example'; // string | The Web Page URL.

try {
    $apiInstance->get($u);
} catch (Exception $e) {
    echo 'Exception when calling DataURIApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **u** | **string**| The Web Page URL. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
