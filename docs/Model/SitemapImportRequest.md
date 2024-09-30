# # SitemapImportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**embedding** | [**\Wordlift\Client\Model\EmbeddingRequest**](EmbeddingRequest.md) |  | [optional]
**output_types** | **string[]** | The type of the generated entities, by default &#x60;http://schema.org/WebPage&#x60;. | [optional]
**overwrite** | **bool** | Whether to overwrite existing entities. | [optional] [default to false]
**sitemap_url** | **string** | The sitemap URL | [optional]
**sitemap_url_regex** | **string** | A regex filter to apply to discovered URLs, it only applies to URLs in sitemaps. | [optional]
**urls** | **string[]** | The URLs | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
