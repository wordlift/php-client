# OpenAPI\Client\IncludeExcludesWordPressPluginApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listIncludeExcludes()**](IncludeExcludesWordPressPluginApi.md#listIncludeExcludes) | **GET** /accounts/me/include-excludes | List |
| [**updateIncludeExcludes()**](IncludeExcludesWordPressPluginApi.md#updateIncludeExcludes) | **PUT** /accounts/me/include-excludes | Update |


## `listIncludeExcludes()`

```php
listIncludeExcludes($account): \OpenAPI\Client\Model\IncludeExclude[]
```

List

List the include and exclude configurations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncludeExcludesWordPressPluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Account(); // \OpenAPI\Client\Model\Account

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
| **account** | [**\OpenAPI\Client\Model\Account**](../Model/.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IncludeExclude[]**](../Model/IncludeExclude.md)

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
updateIncludeExcludes($account, $include_exclude_request): \OpenAPI\Client\Model\IncludeExclude[]
```

Update

Update the include and exclude configurations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IncludeExcludesWordPressPluginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Account(); // \OpenAPI\Client\Model\Account
$include_exclude_request = array(new \OpenAPI\Client\Model\IncludeExcludeRequest()); // \OpenAPI\Client\Model\IncludeExcludeRequest[]

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
| **account** | [**\OpenAPI\Client\Model\Account**](../Model/.md)|  | |
| **include_exclude_request** | [**\OpenAPI\Client\Model\IncludeExcludeRequest[]**](../Model/IncludeExcludeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IncludeExclude[]**](../Model/IncludeExclude.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
