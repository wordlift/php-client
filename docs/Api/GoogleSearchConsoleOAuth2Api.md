# Wordlift\Client\GoogleSearchConsoleOAuth2Api

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAuthCodeExchange()**](GoogleSearchConsoleOAuth2Api.md#createAuthCodeExchange) | **POST** /google-search-console/oauth2/auth-code-exchanges | Get an Access Code |
| [**createAuthorizeUri()**](GoogleSearchConsoleOAuth2Api.md#createAuthorizeUri) | **POST** /google-search-console/oauth2/authorize-uris | Create an Authorization URI |


## `createAuthCodeExchange()`

```php
createAuthCodeExchange($exchange_auth_code_request): \Wordlift\Client\Model\ExchangeAuthCodeResponse
```

Get an Access Code

Call this API to have the Platform receive an Authentication Token to access the Analytics data via Google Search Console.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Wordlift\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wordlift\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Wordlift\Client\Api\GoogleSearchConsoleOAuth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exchange_auth_code_request = new \Wordlift\Client\Model\ExchangeAuthCodeRequest(); // \Wordlift\Client\Model\ExchangeAuthCodeRequest

try {
    $result = $apiInstance->createAuthCodeExchange($exchange_auth_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleSearchConsoleOAuth2Api->createAuthCodeExchange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exchange_auth_code_request** | [**\Wordlift\Client\Model\ExchangeAuthCodeRequest**](../Model/ExchangeAuthCodeRequest.md)|  | |

### Return type

[**\Wordlift\Client\Model\ExchangeAuthCodeResponse**](../Model/ExchangeAuthCodeResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAuthorizeUri()`

```php
createAuthorizeUri($build_authorize_uri_request): \Wordlift\Client\Model\BuildAuthorizeUriResponse
```

Create an Authorization URI

Call this API to get an authorization URI needed to interactively get an authorization token. Then call the `exchangeAuthCode` to exchange it with an authorization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Wordlift\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wordlift\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Wordlift\Client\Api\GoogleSearchConsoleOAuth2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$build_authorize_uri_request = new \Wordlift\Client\Model\BuildAuthorizeUriRequest(); // \Wordlift\Client\Model\BuildAuthorizeUriRequest

try {
    $result = $apiInstance->createAuthorizeUri($build_authorize_uri_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoogleSearchConsoleOAuth2Api->createAuthorizeUri: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **build_authorize_uri_request** | [**\Wordlift\Client\Model\BuildAuthorizeUriRequest**](../Model/BuildAuthorizeUriRequest.md)|  | |

### Return type

[**\Wordlift\Client\Model\BuildAuthorizeUriResponse**](../Model/BuildAuthorizeUriResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
