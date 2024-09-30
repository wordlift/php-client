# Wordlift\Client\IncludeExcludesWordPressPluginApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listIncludeExcludes()**](IncludeExcludesWordPressPluginApi.md#listIncludeExcludes) | **GET** /accounts/me/include-excludes | List |
| [**updateIncludeExcludes()**](IncludeExcludesWordPressPluginApi.md#updateIncludeExcludes) | **PUT** /accounts/me/include-excludes | Update |


## `listIncludeExcludes()`

```php
listIncludeExcludes($account): \Wordlift\Client\Model\IncludeExclude[]
```

List

List the include and exclude configurations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Wordlift\Client\Api\IncludeExcludesWordPressPluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = new \Wordlift\Client\Model\\Wordlift\Client\Model\Account(); // \Wordlift\Client\Model\Account

try {
    $result = $apiInstance->listIncludeExcludes($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncludeExcludesWordPressPluginApi->listIncludeExcludes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | [**\Wordlift\Client\Model\Account**](../Model/.md)|  | |

### Return type

[**\Wordlift\Client\Model\IncludeExclude[]**](../Model/IncludeExclude.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIncludeExcludes()`

```php
updateIncludeExcludes($account, $include_exclude_request): \Wordlift\Client\Model\IncludeExclude[]
```

Update

Update the include and exclude configurations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Wordlift\Client\Api\IncludeExcludesWordPressPluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = new \Wordlift\Client\Model\\Wordlift\Client\Model\Account(); // \Wordlift\Client\Model\Account
$include_exclude_request = array(new \Wordlift\Client\Model\IncludeExcludeRequest()); // \Wordlift\Client\Model\IncludeExcludeRequest[]

try {
    $result = $apiInstance->updateIncludeExcludes($account, $include_exclude_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncludeExcludesWordPressPluginApi->updateIncludeExcludes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | [**\Wordlift\Client\Model\Account**](../Model/.md)|  | |
| **include_exclude_request** | [**\Wordlift\Client\Model\IncludeExcludeRequest[]**](../Model/IncludeExcludeRequest.md)|  | |

### Return type

[**\Wordlift\Client\Model\IncludeExclude[]**](../Model/IncludeExclude.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
