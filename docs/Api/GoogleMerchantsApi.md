# OpenAPI\Client\GoogleMerchantsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listGoogleMerchants()**](GoogleMerchantsApi.md#listGoogleMerchants) | **GET** /ext/google/shopping/merchants | List |


## `listGoogleMerchants()`

```php
listGoogleMerchants($google_access_token): \OpenAPI\Client\Model\PageMerchantEntry
```

List

List the Google Merchants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GoogleMerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$google_access_token = 'google_access_token_example'; // string

try {
    $result = $apiInstance->listGoogleMerchants($google_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleMerchantsApi->listGoogleMerchants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **google_access_token** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PageMerchantEntry**](../Model/PageMerchantEntry.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
