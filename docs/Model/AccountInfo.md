# # AccountInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | The Account Id | [readonly]
**dataset_id** | **string** | The Dataset Id | [optional] [readonly]
**dataset_uri** | **string** | The dataset URI | [readonly]
**features** | **array<string,bool>** | A list of features enabled or disabled for the account | [optional] [readonly]
**google_search_console_site_url** | **string** | Google Search Console Site URL | [optional] [readonly]
**include_exclude_default** | **string** | The default setting for include/exclude URLs. | [optional] [readonly] [default to 'include']
**key** | **string** | The Key | [optional] [readonly]
**language** | **string** | The language code | [optional] [readonly]
**networks** | [**\Wordlift\Client\Model\NetworkAccountInfo[]**](NetworkAccountInfo.md) | A list of connected Account Information | [readonly]
**ng_dataset_id** | **string** |  | [optional]
**subscription_id** | **int** | The Subscription Id | [readonly]
**url** | **string** | The website URL | [optional] [readonly]
**wp_admin** | **string** | If WordPress, the WP-ADMIN URL | [optional] [readonly]
**wp_json** | **string** | If WordPress, the WP-JSON end-point | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
