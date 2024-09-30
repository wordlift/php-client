# Wordlift\Client\GoogleSearchConsoleSearchesApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listWebsiteSearch1()**](GoogleSearchConsoleSearchesApi.md#listWebsiteSearch1) | **GET** /accounts/me/google/searches | List Website Search data |


## `listWebsiteSearch1()`

```php
listWebsiteSearch1($since, $until, $dimensions, $cursor, $data_state, $limit): \Wordlift\Client\Model\PageWebsiteSearch
```

List Website Search data

List the Website Search performance data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Wordlift\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wordlift\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Wordlift\Client\Api\GoogleSearchConsoleSearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$since = 'since_example'; // string | The start date, inclusive, in yyyy-MM-dd format.
$until = 'until_example'; // string | The end date, inclusive, in yyyy-MM-dd format.
$dimensions = array('dimensions_example'); // string[] | The dimensions, e.g. `query`, `page`. Must repeat for each dimension.
$cursor = 'cursor_example'; // string | The cursor
$data_state = 'data_state_example'; // string | If \"all\" (case-insensitive), data will include fresh data. If \"final\" (case-insensitive) or if this parameter is omitted, the returned data will include only finalized data.
$limit = 10; // int | The maximum number of results

try {
    $result = $apiInstance->listWebsiteSearch1($since, $until, $dimensions, $cursor, $data_state, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleSearchConsoleSearchesApi->listWebsiteSearch1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **since** | **string**| The start date, inclusive, in yyyy-MM-dd format. | |
| **until** | **string**| The end date, inclusive, in yyyy-MM-dd format. | |
| **dimensions** | [**string[]**](../Model/string.md)| The dimensions, e.g. &#x60;query&#x60;, &#x60;page&#x60;. Must repeat for each dimension. | |
| **cursor** | **string**| The cursor | [optional] |
| **data_state** | **string**| If \&quot;all\&quot; (case-insensitive), data will include fresh data. If \&quot;final\&quot; (case-insensitive) or if this parameter is omitted, the returned data will include only finalized data. | [optional] |
| **limit** | **int**| The maximum number of results | [optional] [default to 10] |

### Return type

[**\Wordlift\Client\Model\PageWebsiteSearch**](../Model/PageWebsiteSearch.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
