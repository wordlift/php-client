# OpenAPI\Client\CustomDomainsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**validate()**](CustomDomainsApi.md#validate) | **POST** /validations | Validate |


## `validate()`

```php
validate($domain_validation_request)
```

Validate

Check if the provided custom domain can be set for the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomDomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_validation_request = new \OpenAPI\Client\Model\DomainValidationRequest(); // \OpenAPI\Client\Model\DomainValidationRequest

try {
    $apiInstance->validate($domain_validation_request);
} catch (Exception $e) {
    echo 'Exception when calling CustomDomainsApi->validate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_validation_request** | [**\OpenAPI\Client\Model\DomainValidationRequest**](../Model/DomainValidationRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.wordlift.custom-domain-validation+json;version-1`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
