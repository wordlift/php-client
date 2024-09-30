# OpenAPI\Client\AccountsApi

All URIs are relative to https://api.wordlift.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccount()**](AccountsApi.md#getAccount) | **GET** /accounts/{id} | Get an account. |
| [**listAccounts()**](AccountsApi.md#listAccounts) | **GET** /accounts | List |
| [**updateAccount()**](AccountsApi.md#updateAccount) | **PUT** /accounts/{id} | Update an account. |


## `getAccount()`

```php
getAccount($id): \OpenAPI\Client\Model\Account
```

Get an account.

Get the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\Account**](../Model/Account.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAccounts()`

```php
listAccounts($cursor, $limit, $can_content_generation, $include_entity_count, $include_all_accounts, $include_subscription, $url, $ng_dataset_id): \OpenAPI\Client\Model\PageActiveAccount
```

List

List the accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | The cursor
$limit = 10; // int
$can_content_generation = True; // bool | Filter accounts that can or cannot do Content Generation
$include_entity_count = false; // bool | Add entity count data
$include_all_accounts = false; // bool | Include all the accounts the user has access to
$include_subscription = false; // bool | Include the subscription data
$url = 'url_example'; // string | The URL
$ng_dataset_id = 'ng_dataset_id_example'; // string | The dataset id

try {
    $result = $apiInstance->listAccounts($cursor, $limit, $can_content_generation, $include_entity_count, $include_all_accounts, $include_subscription, $url, $ng_dataset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->listAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cursor** | **string**| The cursor | [optional] |
| **limit** | **int**|  | [optional] [default to 10] |
| **can_content_generation** | **bool**| Filter accounts that can or cannot do Content Generation | [optional] |
| **include_entity_count** | **bool**| Add entity count data | [optional] [default to false] |
| **include_all_accounts** | **bool**| Include all the accounts the user has access to | [optional] [default to false] |
| **include_subscription** | **bool**| Include the subscription data | [optional] [default to false] |
| **url** | **string**| The URL | [optional] |
| **ng_dataset_id** | **string**| The dataset id | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageActiveAccount**](../Model/PageActiveAccount.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.wordlift.accounts+json;version=1`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccount()`

```php
updateAccount($id, $update_account_request): \OpenAPI\Client\Model\Account
```

Update an account.

Update the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure HTTP basic authorization: BasicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$update_account_request = new \OpenAPI\Client\Model\UpdateAccountRequest(); // \OpenAPI\Client\Model\UpdateAccountRequest

try {
    $result = $apiInstance->updateAccount($id, $update_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **update_account_request** | [**\OpenAPI\Client\Model\UpdateAccountRequest**](../Model/UpdateAccountRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Account**](../Model/Account.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
