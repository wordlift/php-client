# Wordlift\Client\GoogleSearchConsoleApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listWebsiteSearch()**](GoogleSearchConsoleApi.md#listWebsiteSearch) | **GET** /ext/google/searchconsole/searches | List Website Search data |
| [**listWebsites()**](GoogleSearchConsoleApi.md#listWebsites) | **GET** /ext/google/searchconsole/websites | List |


## `listWebsiteSearch()`

```php
listWebsiteSearch($website, $since, $until, $dimensions, $google_access_token, $cursor, $limit): \Wordlift\Client\Model\PageWebsiteSearch
```

List Website Search data

List the Website Search performance data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Wordlift\Client\Api\GoogleSearchConsoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$website = 'website_example'; // string | The website URL
$since = 'since_example'; // string | The start date, inclusive, in yyyy-MM-dd format.
$until = 'until_example'; // string | The end date, inclusive, in yyyy-MM-dd format.
$dimensions = array('dimensions_example'); // string[] | The dimensions, e.g. `query`, `page`. Must repeat for each dimension.
$google_access_token = 'google_access_token_example'; // string | The Google access token, must have access to the Google Search Console scope
$cursor = 'cursor_example'; // string | The cursor
$limit = 10; // int | The maximum number of results

try {
    $result = $apiInstance->listWebsiteSearch($website, $since, $until, $dimensions, $google_access_token, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleSearchConsoleApi->listWebsiteSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website** | **string**| The website URL | |
| **since** | **string**| The start date, inclusive, in yyyy-MM-dd format. | |
| **until** | **string**| The end date, inclusive, in yyyy-MM-dd format. | |
| **dimensions** | [**string[]**](../Model/string.md)| The dimensions, e.g. &#x60;query&#x60;, &#x60;page&#x60;. Must repeat for each dimension. | |
| **google_access_token** | **string**| The Google access token, must have access to the Google Search Console scope | |
| **cursor** | **string**| The cursor | [optional] |
| **limit** | **int**| The maximum number of results | [optional] [default to 10] |

### Return type

[**\Wordlift\Client\Model\PageWebsiteSearch**](../Model/PageWebsiteSearch.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebsites()`

```php
listWebsites($google_access_token, $limit): \Wordlift\Client\Model\PageWebsite
```

List

List the Websites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Wordlift\Client\Api\GoogleSearchConsoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$google_access_token = 'google_access_token_example'; // string | The Google access token, must have access to the Google Search Console scope
$limit = 10; // int | The maximum number of results

try {
    $result = $apiInstance->listWebsites($google_access_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleSearchConsoleApi->listWebsites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **google_access_token** | **string**| The Google access token, must have access to the Google Search Console scope | |
| **limit** | **int**| The maximum number of results | [optional] [default to 10] |

### Return type

[**\Wordlift\Client\Model\PageWebsite**](../Model/PageWebsite.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
