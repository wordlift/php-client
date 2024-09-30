# OpenAPIClient-php

Subscription management and related services.

For more information, please visit [https://wordlift.io](https://wordlift.io).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getMe: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.wordlift.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getMe**](docs/Api/AccountApi.md#getme) | **GET** /accounts/me | Get
*AccountsApi* | [**getAccount**](docs/Api/AccountsApi.md#getaccount) | **GET** /accounts/{id} | Get an account.
*AccountsApi* | [**listAccounts**](docs/Api/AccountsApi.md#listaccounts) | **GET** /accounts | List
*AccountsApi* | [**updateAccount**](docs/Api/AccountsApi.md#updateaccount) | **PUT** /accounts/{id} | Update an account.
*AddOnsApi* | [**listConfigurations**](docs/Api/AddOnsApi.md#listconfigurations) | **GET** /addon/configurations | List
*AnalyticsImportsApi* | [**createAnalyticsImport**](docs/Api/AnalyticsImportsApi.md#createanalyticsimport) | **POST** /analytics-imports | Create
*BotifyCrawlImportsApi* | [**createBotifyCrawlImport**](docs/Api/BotifyCrawlImportsApi.md#createbotifycrawlimport) | **POST** /botify-crawl-imports | Create
*CustomDomainsApi* | [**validate**](docs/Api/CustomDomainsApi.md#validate) | **POST** /validations | Validate
*DataURIApi* | [**get**](docs/Api/DataURIApi.md#get) | **GET** /data-uri | Get the Web Data URI for a Web Page URL.
*EmbeddingApi* | [**createEmbedding**](docs/Api/EmbeddingApi.md#createembedding) | **POST** /kg/embeddings | Create
*GoogleMerchantsApi* | [**listGoogleMerchants**](docs/Api/GoogleMerchantsApi.md#listgooglemerchants) | **GET** /ext/google/shopping/merchants | List
*GoogleSearchConsoleApi* | [**listWebsiteSearch**](docs/Api/GoogleSearchConsoleApi.md#listwebsitesearch) | **GET** /ext/google/searchconsole/searches | List Website Search data
*GoogleSearchConsoleApi* | [**listWebsites**](docs/Api/GoogleSearchConsoleApi.md#listwebsites) | **GET** /ext/google/searchconsole/websites | List
*GoogleSearchConsoleOAuth2Api* | [**createAuthCodeExchange**](docs/Api/GoogleSearchConsoleOAuth2Api.md#createauthcodeexchange) | **POST** /google-search-console/oauth2/auth-code-exchanges | Get an Access Code
*GoogleSearchConsoleOAuth2Api* | [**createAuthorizeUri**](docs/Api/GoogleSearchConsoleOAuth2Api.md#createauthorizeuri) | **POST** /google-search-console/oauth2/authorize-uris | Create an Authorization URI
*GoogleSearchConsoleSearchesApi* | [**listWebsiteSearch1**](docs/Api/GoogleSearchConsoleSearchesApi.md#listwebsitesearch1) | **GET** /accounts/me/google/searches | List Website Search data
*IncludeExcludesWordPressPluginApi* | [**listIncludeExcludes**](docs/Api/IncludeExcludesWordPressPluginApi.md#listincludeexcludes) | **GET** /accounts/me/include-excludes | List
*IncludeExcludesWordPressPluginApi* | [**updateIncludeExcludes**](docs/Api/IncludeExcludesWordPressPluginApi.md#updateincludeexcludes) | **PUT** /accounts/me/include-excludes | Update
*InternalLinksApi* | [**createInternalLink**](docs/Api/InternalLinksApi.md#createinternallink) | **POST** /internal-links | Create
*InternalLinksApi* | [**createInternalLinkSuggestion**](docs/Api/InternalLinksApi.md#createinternallinksuggestion) | **POST** /internal-links/suggestions | Suggest
*MerchantSyncsApi* | [**createSync**](docs/Api/MerchantSyncsApi.md#createsync) | **POST** /merchants/{merchantId}/syncs | Start
*MerchantSyncsApi* | [**getMerchantSync**](docs/Api/MerchantSyncsApi.md#getmerchantsync) | **GET** /merchants/{merchantId}/syncs/{id} | Get by id
*MerchantSyncsApi* | [**listMerchantSyncs**](docs/Api/MerchantSyncsApi.md#listmerchantsyncs) | **GET** /merchants/{merchantId}/syncs | List
*MerchantsApi* | [**createMerchant**](docs/Api/MerchantsApi.md#createmerchant) | **POST** /merchants | Create
*MerchantsApi* | [**deleteMerchant**](docs/Api/MerchantsApi.md#deletemerchant) | **DELETE** /merchants/{id} | Delete by id
*MerchantsApi* | [**getMerchant**](docs/Api/MerchantsApi.md#getmerchant) | **GET** /merchants/{id} | Get by id
*MerchantsApi* | [**listMerchants**](docs/Api/MerchantsApi.md#listmerchants) | **GET** /merchants | List
*MerchantsApi* | [**updateMerchant**](docs/Api/MerchantsApi.md#updatemerchant) | **PUT** /merchants/{id} | Update
*OAuth2AuthorizedClientsApi* | [**createOAuth2AuthorizedClient**](docs/Api/OAuth2AuthorizedClientsApi.md#createoauth2authorizedclient) | **POST** /oauth2/authorized-clients | Create
*OAuth2AuthorizedClientsApi* | [**deleteOAuth2AuthorizedClient**](docs/Api/OAuth2AuthorizedClientsApi.md#deleteoauth2authorizedclient) | **DELETE** /oauth2/authorized-clients/{id} | Delete
*OAuth2AuthorizedClientsApi* | [**getOAuth2AuthorizedClient**](docs/Api/OAuth2AuthorizedClientsApi.md#getoauth2authorizedclient) | **GET** /oauth2/authorized-clients/{id} | Get
*OAuth2AuthorizedClientsApi* | [**listOAuth2AuthorizedClients**](docs/Api/OAuth2AuthorizedClientsApi.md#listoauth2authorizedclients) | **GET** /oauth2/authorized-clients | List
*OAuth2AuthorizedClientsApi* | [**updateOAuth2AuthorizedClient**](docs/Api/OAuth2AuthorizedClientsApi.md#updateoauth2authorizedclient) | **PUT** /oauth2/authorized-clients/{id} | Update
*PlatformConsumptionsApi* | [**createOrUpdateMyPlatformConsumption**](docs/Api/PlatformConsumptionsApi.md#createorupdatemyplatformconsumption) | **PUT** /platform-limit/consumptions/me | Create or update the Platform Consumption
*PlatformConsumptionsApi* | [**getMyPlatformConsumption**](docs/Api/PlatformConsumptionsApi.md#getmyplatformconsumption) | **GET** /platform-limit/consumptions/me | Get the Platform Consumption
*PlatformLimitsApi* | [**createPlatformLimit**](docs/Api/PlatformLimitsApi.md#createplatformlimit) | **POST** /platform-limit/limits | Create Platform Limit
*PlatformLimitsApi* | [**deletePlatformLimit**](docs/Api/PlatformLimitsApi.md#deleteplatformlimit) | **DELETE** /platform-limit/limits/{id} | Delete Platform Limit
*PlatformLimitsApi* | [**getPlatformLimit**](docs/Api/PlatformLimitsApi.md#getplatformlimit) | **GET** /platform-limit/limits/{id} | Get Platform Limit
*PlatformLimitsApi* | [**listPlatformLimits**](docs/Api/PlatformLimitsApi.md#listplatformlimits) | **GET** /platform-limit/limits | List Platform Limits
*PlatformLimitsApi* | [**updatePlatformLimit**](docs/Api/PlatformLimitsApi.md#updateplatformlimit) | **PUT** /platform-limit/limits/{id} | Update Platform Limit
*PluginDiagnosticsApi* | [**updateDiagnosticPluginCollection**](docs/Api/PluginDiagnosticsApi.md#updatediagnosticplugincollection) | **PUT** /accounts/me/plugin/diagnostics/plugins-collection | Update
*RedeemCodesApi* | [**redeemCode**](docs/Api/RedeemCodesApi.md#redeemcode) | **POST** /redeem-codes | Redeem the provided code and get a key
*SitemapImportsApi* | [**createSitemapImport**](docs/Api/SitemapImportsApi.md#createsitemapimport) | **POST** /sitemap-imports | Create
*VectorSearchNodesApi* | [**updateNodesCollection**](docs/Api/VectorSearchNodesApi.md#updatenodescollection) | **PUT** /vector-search/nodes-collection | Update
*VectorSearchQueriesApi* | [**createQuery**](docs/Api/VectorSearchQueriesApi.md#createquery) | **POST** /vector-search/queries | Create
*VectorSearchQuestionsApi* | [**createVectorSearchQuestion**](docs/Api/VectorSearchQuestionsApi.md#createvectorsearchquestion) | **POST** /vector-search/questions-collection | Create

## Models

- [Account](docs/Model/Account.md)
- [AccountInfo](docs/Model/AccountInfo.md)
- [AccountSubscription](docs/Model/AccountSubscription.md)
- [ActiveAccount](docs/Model/ActiveAccount.md)
- [AddOnConfiguration](docs/Model/AddOnConfiguration.md)
- [AnalyticsImportRequest](docs/Model/AnalyticsImportRequest.md)
- [AnchorText](docs/Model/AnchorText.md)
- [BotifyCrawlImportRequest](docs/Model/BotifyCrawlImportRequest.md)
- [BuildAuthorizeUriRequest](docs/Model/BuildAuthorizeUriRequest.md)
- [BuildAuthorizeUriResponse](docs/Model/BuildAuthorizeUriResponse.md)
- [DiagnosticPlugin](docs/Model/DiagnosticPlugin.md)
- [DiagnosticPluginRequest](docs/Model/DiagnosticPluginRequest.md)
- [DomainValidationRequest](docs/Model/DomainValidationRequest.md)
- [EmbeddingRequest](docs/Model/EmbeddingRequest.md)
- [ExchangeAuthCodeRequest](docs/Model/ExchangeAuthCodeRequest.md)
- [ExchangeAuthCodeResponse](docs/Model/ExchangeAuthCodeResponse.md)
- [Filter](docs/Model/Filter.md)
- [FilterValue](docs/Model/FilterValue.md)
- [IncludeExclude](docs/Model/IncludeExclude.md)
- [IncludeExcludeRequest](docs/Model/IncludeExcludeRequest.md)
- [InternalLink](docs/Model/InternalLink.md)
- [InternalLinkDestination](docs/Model/InternalLinkDestination.md)
- [InternalLinkRequest](docs/Model/InternalLinkRequest.md)
- [InternalLinkSource](docs/Model/InternalLinkSource.md)
- [Item](docs/Model/Item.md)
- [KgEmbeddingRequest](docs/Model/KgEmbeddingRequest.md)
- [Merchant](docs/Model/Merchant.md)
- [MerchantEntry](docs/Model/MerchantEntry.md)
- [MerchantRequest](docs/Model/MerchantRequest.md)
- [MerchantSync](docs/Model/MerchantSync.md)
- [MerchantView](docs/Model/MerchantView.md)
- [NetworkAccountInfo](docs/Model/NetworkAccountInfo.md)
- [NodeRequest](docs/Model/NodeRequest.md)
- [NodeRequestMetadataValue](docs/Model/NodeRequestMetadataValue.md)
- [OAuth2AuthorizedClient](docs/Model/OAuth2AuthorizedClient.md)
- [OAuth2AuthorizedClientRequest](docs/Model/OAuth2AuthorizedClientRequest.md)
- [PageActiveAccount](docs/Model/PageActiveAccount.md)
- [PageAddOnConfiguration](docs/Model/PageAddOnConfiguration.md)
- [PageMerchantEntry](docs/Model/PageMerchantEntry.md)
- [PageMerchantSync](docs/Model/PageMerchantSync.md)
- [PageMerchantView](docs/Model/PageMerchantView.md)
- [PageOAuth2AuthorizedClient](docs/Model/PageOAuth2AuthorizedClient.md)
- [PagePlatformLimit](docs/Model/PagePlatformLimit.md)
- [PageVectorSearchQueryResponseItem](docs/Model/PageVectorSearchQueryResponseItem.md)
- [PageVectorSearchQuestionResponseItem](docs/Model/PageVectorSearchQuestionResponseItem.md)
- [PageWebsite](docs/Model/PageWebsite.md)
- [PageWebsiteSearch](docs/Model/PageWebsiteSearch.md)
- [PageWithLimits](docs/Model/PageWithLimits.md)
- [PlatformLimit](docs/Model/PlatformLimit.md)
- [PlatformLimitRequest](docs/Model/PlatformLimitRequest.md)
- [ProblemDetail](docs/Model/ProblemDetail.md)
- [Request](docs/Model/Request.md)
- [Response](docs/Model/Response.md)
- [SitemapImportRequest](docs/Model/SitemapImportRequest.md)
- [UpdateAccountRequest](docs/Model/UpdateAccountRequest.md)
- [VectorSearchQueryRequest](docs/Model/VectorSearchQueryRequest.md)
- [VectorSearchQueryResponseItem](docs/Model/VectorSearchQueryResponseItem.md)
- [VectorSearchQueryResponseItemFieldsValueInner](docs/Model/VectorSearchQueryResponseItemFieldsValueInner.md)
- [VectorSearchQueryResponseItemMetadataValue](docs/Model/VectorSearchQueryResponseItemMetadataValue.md)
- [VectorSearchQuestionRequest](docs/Model/VectorSearchQuestionRequest.md)
- [VectorSearchQuestionResponseItem](docs/Model/VectorSearchQuestionResponseItem.md)
- [WebPage](docs/Model/WebPage.md)
- [Website](docs/Model/Website.md)
- [WebsiteSearch](docs/Model/WebsiteSearch.md)
- [WithLimits](docs/Model/WithLimits.md)

## Authorization

Authentication schemes defined for the API:
### ApiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


### BasicAuth

- **Type**: HTTP basic authentication

### OAuth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://s.wordlift.io/oauth/authorize/`
- **Scopes**: 
    - **basic**: basic scope

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

hello@wordlift.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Generator version: `7.9.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
