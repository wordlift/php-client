# Wordlift\Client\RedeemCodesApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**redeemCode()**](RedeemCodesApi.md#redeemCode) | **POST** /redeem-codes | Redeem the provided code and get a key |


## `redeemCode()`

```php
redeemCode($request): \Wordlift\Client\Model\Response
```

Redeem the provided code and get a key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Wordlift\Client\Api\RedeemCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request = new \Wordlift\Client\Model\Request(); // \Wordlift\Client\Model\Request

try {
    $result = $apiInstance->redeemCode($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedeemCodesApi->redeemCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request** | [**\Wordlift\Client\Model\Request**](../Model/Request.md)|  | |

### Return type

[**\Wordlift\Client\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
