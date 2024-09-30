# OpenAPI\Client\PlatformLimitsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPlatformLimit()**](PlatformLimitsApi.md#createPlatformLimit) | **POST** /platform-limit/limits | Create Platform Limit |
| [**deletePlatformLimit()**](PlatformLimitsApi.md#deletePlatformLimit) | **DELETE** /platform-limit/limits/{id} | Delete Platform Limit |
| [**getPlatformLimit()**](PlatformLimitsApi.md#getPlatformLimit) | **GET** /platform-limit/limits/{id} | Get Platform Limit |
| [**listPlatformLimits()**](PlatformLimitsApi.md#listPlatformLimits) | **GET** /platform-limit/limits | List Platform Limits |
| [**updatePlatformLimit()**](PlatformLimitsApi.md#updatePlatformLimit) | **PUT** /platform-limit/limits/{id} | Update Platform Limit |


## `createPlatformLimit()`

```php
createPlatformLimit($platform_limit_request): \OpenAPI\Client\Model\PlatformLimit
```

Create Platform Limit

Create a platform limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PlatformLimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$platform_limit_request = new \OpenAPI\Client\Model\PlatformLimitRequest(); // \OpenAPI\Client\Model\PlatformLimitRequest

try {
    $result = $apiInstance->createPlatformLimit($platform_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformLimitsApi->createPlatformLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **platform_limit_request** | [**\OpenAPI\Client\Model\PlatformLimitRequest**](../Model/PlatformLimitRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PlatformLimit**](../Model/PlatformLimit.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePlatformLimit()`

```php
deletePlatformLimit($id)
```

Delete Platform Limit

Delete a platform limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PlatformLimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Platform Limit id

try {
    $apiInstance->deletePlatformLimit($id);
} catch (Exception $e) {
    echo 'Exception when calling PlatformLimitsApi->deletePlatformLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Platform Limit id | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlatformLimit()`

```php
getPlatformLimit($id): \OpenAPI\Client\Model\PlatformLimit
```

Get Platform Limit

Get a platform limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PlatformLimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Platform Limit id

try {
    $result = $apiInstance->getPlatformLimit($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformLimitsApi->getPlatformLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Platform Limit id | |

### Return type

[**\OpenAPI\Client\Model\PlatformLimit**](../Model/PlatformLimit.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPlatformLimits()`

```php
listPlatformLimits($based_on_in, $based_on_value_in, $applies_to_in, $scope_in): \OpenAPI\Client\Model\PagePlatformLimit
```

List Platform Limits

List the platform limits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PlatformLimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$based_on_in = array('based_on_in_example'); // string[] | The type of based on, e.g. `sku`.
$based_on_value_in = array('based_on_value_in_example'); // string[] | The based on values.
$applies_to_in = array('applies_to_in_example'); // string[] | The applies to (e.g. API name).
$scope_in = array('scope_in_example'); // string[] | The scope.

try {
    $result = $apiInstance->listPlatformLimits($based_on_in, $based_on_value_in, $applies_to_in, $scope_in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformLimitsApi->listPlatformLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **based_on_in** | [**string[]**](../Model/string.md)| The type of based on, e.g. &#x60;sku&#x60;. | [optional] |
| **based_on_value_in** | [**string[]**](../Model/string.md)| The based on values. | [optional] |
| **applies_to_in** | [**string[]**](../Model/string.md)| The applies to (e.g. API name). | [optional] |
| **scope_in** | [**string[]**](../Model/string.md)| The scope. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PagePlatformLimit**](../Model/PagePlatformLimit.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlatformLimit()`

```php
updatePlatformLimit($id, $platform_limit_request): \OpenAPI\Client\Model\PlatformLimit
```

Update Platform Limit

Update a platform limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PlatformLimitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Platform Limit id
$platform_limit_request = new \OpenAPI\Client\Model\PlatformLimitRequest(); // \OpenAPI\Client\Model\PlatformLimitRequest

try {
    $result = $apiInstance->updatePlatformLimit($id, $platform_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformLimitsApi->updatePlatformLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Platform Limit id | |
| **platform_limit_request** | [**\OpenAPI\Client\Model\PlatformLimitRequest**](../Model/PlatformLimitRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PlatformLimit**](../Model/PlatformLimit.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
