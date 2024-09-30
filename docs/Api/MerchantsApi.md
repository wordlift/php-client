# OpenAPI\Client\MerchantsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMerchant()**](MerchantsApi.md#createMerchant) | **POST** /merchants | Create |
| [**deleteMerchant()**](MerchantsApi.md#deleteMerchant) | **DELETE** /merchants/{id} | Delete by id |
| [**getMerchant()**](MerchantsApi.md#getMerchant) | **GET** /merchants/{id} | Get by id |
| [**listMerchants()**](MerchantsApi.md#listMerchants) | **GET** /merchants | List |
| [**updateMerchant()**](MerchantsApi.md#updateMerchant) | **PUT** /merchants/{id} | Update |


## `createMerchant()`

```php
createMerchant($merchant_request): \OpenAPI\Client\Model\Merchant
```

Create

Create a Merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_request = new \OpenAPI\Client\Model\MerchantRequest(); // \OpenAPI\Client\Model\MerchantRequest

try {
    $result = $apiInstance->createMerchant($merchant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->createMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_request** | [**\OpenAPI\Client\Model\MerchantRequest**](../Model/MerchantRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Merchant**](../Model/Merchant.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMerchant()`

```php
deleteMerchant($id)
```

Delete by id

Delete a Merchant by its `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The Merchant id

try {
    $apiInstance->deleteMerchant($id);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->deleteMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Merchant id | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchant()`

```php
getMerchant($id): \OpenAPI\Client\Model\Merchant
```

Get by id

Get a Merchant by its `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The Merchant id

try {
    $result = $apiInstance->getMerchant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->getMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Merchant id | |

### Return type

[**\OpenAPI\Client\Model\Merchant**](../Model/Merchant.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMerchants()`

```php
listMerchants($cursor, $limit, $deleted): \OpenAPI\Client\Model\PageMerchantView
```

List

List the Merchants, optionally filtering by the `deleted` flag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | The cursor
$limit = 10; // int | The maximum number of results
$deleted = True; // bool | Filter by the `deleted` flag

try {
    $result = $apiInstance->listMerchants($cursor, $limit, $deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->listMerchants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| The cursor | [optional] |
| **limit** | **int**| The maximum number of results | [optional] [default to 10] |
| **deleted** | **bool**| Filter by the &#x60;deleted&#x60; flag | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageMerchantView**](../Model/PageMerchantView.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMerchant()`

```php
updateMerchant($id, $merchant_request): \OpenAPI\Client\Model\Merchant
```

Update

Update a Merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The Merchant id
$merchant_request = new \OpenAPI\Client\Model\MerchantRequest(); // \OpenAPI\Client\Model\MerchantRequest

try {
    $result = $apiInstance->updateMerchant($id, $merchant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->updateMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Merchant id | |
| **merchant_request** | [**\OpenAPI\Client\Model\MerchantRequest**](../Model/MerchantRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Merchant**](../Model/Merchant.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
