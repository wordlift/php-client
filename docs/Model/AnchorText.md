# # AnchorText

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actual_prompt_template** | **string** |  | [optional] [readonly]
**enabled** | **bool** | Whether to enable Anchor Text, by default false. | [optional] [default to false]
**max_characters** | **int** | The maximum anchor text length, by default 15 characters. | [optional] [default to 15]
**model** | **string** | The model to use. | [optional] [default to 'gpt-4']
**prompt_template** | **string** | The prompt template, we provide a default. Liquid template language is supported. | [optional] [default to 'As an SEO and content editor, your task is to create a concise and appropriate anchor text to enhance keyword targeting, using the
provided keyword and page title. Ensure to maintain a neutral tone and adhere to the examples below for guidance:

{%- for anchor in anchors -%}
- Title: {{ anchor.title }}
- Keyword: {{ anchor.keyword }}
- Anchor text: {{ anchor.anchor_text }}
{%- endfor -%}
']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
