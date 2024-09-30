# Wordlift\Client\MerchantSyncsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSync()**](MerchantSyncsApi.md#createSync) | **POST** /merchants/{merchantId}/syncs | Start |
| [**getMerchantSync()**](MerchantSyncsApi.md#getMerchantSync) | **GET** /merchants/{merchantId}/syncs/{id} | Get by id |
| [**listMerchantSyncs()**](MerchantSyncsApi.md#listMerchantSyncs) | **GET** /merchants/{merchantId}/syncs | List |


## `createSync()`

```php
createSync($merchant_id): \Wordlift\Client\Model\MerchantSync
```

Start

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wordlift\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wordlift\Client\Api\MerchantSyncsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 56; // int | The Merchant's `id`

try {
    $result = $apiInstance->createSync($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantSyncsApi->createSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **int**| The Merchant&#39;s &#x60;id&#x60; | |

### Return type

[**\Wordlift\Client\Model\MerchantSync**](../Model/MerchantSync.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantSync()`

```php
getMerchantSync($merchant_id, $id): \Wordlift\Client\Model\MerchantSync
```

Get by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wordlift\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wordlift\Client\Api\MerchantSyncsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 56; // int | The Merchant's `id`
$id = 56; // int | The Merchant Sync `id`.

try {
    $result = $apiInstance->getMerchantSync($merchant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantSyncsApi->getMerchantSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **int**| The Merchant&#39;s &#x60;id&#x60; | |
| **id** | **int**| The Merchant Sync &#x60;id&#x60;. | |

### Return type

[**\Wordlift\Client\Model\MerchantSync**](../Model/MerchantSync.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMerchantSyncs()`

```php
listMerchantSyncs($merchant_id, $cursor, $limit, $sort): \Wordlift\Client\Model\PageMerchantSync
```

List

List the Merchants Syncs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Wordlift\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wordlift\Client\Api\MerchantSyncsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 56; // int | The Merchant's `id`
$cursor = 'cursor_example'; // string | The cursor
$limit = 10; // int | The maximum number of results
$sort = '+id'; // string | The sorting, `+id` or `-id`

try {
    $result = $apiInstance->listMerchantSyncs($merchant_id, $cursor, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantSyncsApi->listMerchantSyncs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **int**| The Merchant&#39;s &#x60;id&#x60; | |
| **cursor** | **string**| The cursor | [optional] |
| **limit** | **int**| The maximum number of results | [optional] [default to 10] |
| **sort** | **string**| The sorting, &#x60;+id&#x60; or &#x60;-id&#x60; | [optional] [default to &#39;+id&#39;] |

### Return type

[**\Wordlift\Client\Model\PageMerchantSync**](../Model/PageMerchantSync.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
