# OpenAPI\Client\OAuth2AuthorizedClientsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOAuth2AuthorizedClient()**](OAuth2AuthorizedClientsApi.md#createOAuth2AuthorizedClient) | **POST** /oauth2/authorized-clients | Create |
| [**deleteOAuth2AuthorizedClient()**](OAuth2AuthorizedClientsApi.md#deleteOAuth2AuthorizedClient) | **DELETE** /oauth2/authorized-clients/{id} | Delete |
| [**getOAuth2AuthorizedClient()**](OAuth2AuthorizedClientsApi.md#getOAuth2AuthorizedClient) | **GET** /oauth2/authorized-clients/{id} | Get |
| [**listOAuth2AuthorizedClients()**](OAuth2AuthorizedClientsApi.md#listOAuth2AuthorizedClients) | **GET** /oauth2/authorized-clients | List |
| [**updateOAuth2AuthorizedClient()**](OAuth2AuthorizedClientsApi.md#updateOAuth2AuthorizedClient) | **PUT** /oauth2/authorized-clients/{id} | Update |


## `createOAuth2AuthorizedClient()`

```php
createOAuth2AuthorizedClient($o_auth2_authorized_client_request): \OpenAPI\Client\Model\OAuth2AuthorizedClient
```

Create

Create a OAuth2 Authorized Client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OAuth2AuthorizedClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$o_auth2_authorized_client_request = new \OpenAPI\Client\Model\OAuth2AuthorizedClientRequest(); // \OpenAPI\Client\Model\OAuth2AuthorizedClientRequest

try {
    $result = $apiInstance->createOAuth2AuthorizedClient($o_auth2_authorized_client_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2AuthorizedClientsApi->createOAuth2AuthorizedClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **o_auth2_authorized_client_request** | [**\OpenAPI\Client\Model\OAuth2AuthorizedClientRequest**](../Model/OAuth2AuthorizedClientRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OAuth2AuthorizedClient**](../Model/OAuth2AuthorizedClient.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOAuth2AuthorizedClient()`

```php
deleteOAuth2AuthorizedClient($id)
```

Delete

Delete a OAuth2 Authorized Client given its client registration id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OAuth2AuthorizedClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The Id

try {
    $apiInstance->deleteOAuth2AuthorizedClient($id);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2AuthorizedClientsApi->deleteOAuth2AuthorizedClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Id | |

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

## `getOAuth2AuthorizedClient()`

```php
getOAuth2AuthorizedClient($id): \OpenAPI\Client\Model\OAuth2AuthorizedClient
```

Get

Get a OAuth2 Authorized Client given its client registration id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OAuth2AuthorizedClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The Id

try {
    $result = $apiInstance->getOAuth2AuthorizedClient($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2AuthorizedClientsApi->getOAuth2AuthorizedClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Id | |

### Return type

[**\OpenAPI\Client\Model\OAuth2AuthorizedClient**](../Model/OAuth2AuthorizedClient.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOAuth2AuthorizedClients()`

```php
listOAuth2AuthorizedClients($cursor, $limit): \OpenAPI\Client\Model\PageOAuth2AuthorizedClient
```

List

List OAuth2 Authorized Clients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OAuth2AuthorizedClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | The cursor
$limit = 10; // int | The maximum number of results

try {
    $result = $apiInstance->listOAuth2AuthorizedClients($cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2AuthorizedClientsApi->listOAuth2AuthorizedClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| The cursor | [optional] |
| **limit** | **int**| The maximum number of results | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\PageOAuth2AuthorizedClient**](../Model/PageOAuth2AuthorizedClient.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOAuth2AuthorizedClient()`

```php
updateOAuth2AuthorizedClient($id, $o_auth2_authorized_client_request): \OpenAPI\Client\Model\OAuth2AuthorizedClient
```

Update

Update a OAuth2 Authorized Client given its client registration id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OAuth2AuthorizedClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The Id
$o_auth2_authorized_client_request = new \OpenAPI\Client\Model\OAuth2AuthorizedClientRequest(); // \OpenAPI\Client\Model\OAuth2AuthorizedClientRequest

try {
    $result = $apiInstance->updateOAuth2AuthorizedClient($id, $o_auth2_authorized_client_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuth2AuthorizedClientsApi->updateOAuth2AuthorizedClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Id | |
| **o_auth2_authorized_client_request** | [**\OpenAPI\Client\Model\OAuth2AuthorizedClientRequest**](../Model/OAuth2AuthorizedClientRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OAuth2AuthorizedClient**](../Model/OAuth2AuthorizedClient.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
