# OpenAPI\Client\PlatformConsumptionsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrUpdateMyPlatformConsumption()**](PlatformConsumptionsApi.md#createOrUpdateMyPlatformConsumption) | **PUT** /platform-limit/consumptions/me | Create or update the Platform Consumption |
| [**getMyPlatformConsumption()**](PlatformConsumptionsApi.md#getMyPlatformConsumption) | **GET** /platform-limit/consumptions/me | Get the Platform Consumption |


## `createOrUpdateMyPlatformConsumption()`

```php
createOrUpdateMyPlatformConsumption($applies_to, $consumption_to_add): \OpenAPI\Client\Model\PageWithLimits
```

Create or update the Platform Consumption

Create or update the Platform Consumption for the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlatformConsumptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applies_to = 'applies_to_example'; // string
$consumption_to_add = 1; // int

try {
    $result = $apiInstance->createOrUpdateMyPlatformConsumption($applies_to, $consumption_to_add);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformConsumptionsApi->createOrUpdateMyPlatformConsumption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **applies_to** | **string**|  | |
| **consumption_to_add** | **int**|  | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\PageWithLimits**](../Model/PageWithLimits.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyPlatformConsumption()`

```php
getMyPlatformConsumption($applies_to, $include_subscription, $include_limit): \OpenAPI\Client\Model\PageWithLimits
```

Get the Platform Consumption

Get the Platform Consumption for the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlatformConsumptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applies_to = 'applies_to_example'; // string
$include_subscription = True; // bool
$include_limit = True; // bool

try {
    $result = $apiInstance->getMyPlatformConsumption($applies_to, $include_subscription, $include_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformConsumptionsApi->getMyPlatformConsumption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **applies_to** | **string**|  | |
| **include_subscription** | **bool**|  | [optional] |
| **include_limit** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageWithLimits**](../Model/PageWithLimits.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
