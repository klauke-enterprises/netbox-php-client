# # CustomField

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**object_types** | **string[]** |  |
**type** | [**\OpenAPI\Client\Model\CustomFieldType**](CustomFieldType.md) |  |
**related_object_type** | **string** |  | [optional]
**data_type** | **string** |  | [readonly]
**name** | **string** | Internal field name |
**label** | **string** | Name of the field as displayed to users (if not provided, &#39;the field&#39;s name will be used) | [optional]
**group_name** | **string** | Custom fields within the same group will be displayed together | [optional]
**description** | **string** |  | [optional]
**required** | **bool** | This field is required when creating new objects or editing an existing object. | [optional]
**unique** | **bool** | The value of this field must be unique for the assigned object | [optional]
**search_weight** | **int** | Weighting for search. Lower values are considered more important. Fields with a search weight of zero will be ignored. | [optional]
**filter_logic** | [**\OpenAPI\Client\Model\CustomFieldFilterLogic**](CustomFieldFilterLogic.md) |  | [optional]
**ui_visible** | [**\OpenAPI\Client\Model\CustomFieldUiVisible**](CustomFieldUiVisible.md) |  | [optional]
**ui_editable** | [**\OpenAPI\Client\Model\CustomFieldUiEditable**](CustomFieldUiEditable.md) |  | [optional]
**is_cloneable** | **bool** | Replicate this value when cloning objects | [optional]
**default** | **mixed** | Default value for the field (must be a JSON value). Encapsulate strings with double quotes (e.g. \&quot;Foo\&quot;). | [optional]
**related_object_filter** | **mixed** | Filter the object selection choices using a query_params dict (must be a JSON value).Encapsulate strings with double quotes (e.g. \&quot;Foo\&quot;). | [optional]
**weight** | **int** | Fields with higher weights appear lower in a form. | [optional]
**validation_minimum** | **int** | Minimum allowed value (for numeric fields) | [optional]
**validation_maximum** | **int** | Maximum allowed value (for numeric fields) | [optional]
**validation_regex** | **string** | Regular expression to enforce on text field values. Use ^ and $ to force matching of entire string. For example, &lt;code&gt;^[A-Z]{3}$&lt;/code&gt; will limit values to exactly three uppercase letters. | [optional]
**choice_set** | [**\OpenAPI\Client\Model\BriefCustomFieldChoiceSet**](BriefCustomFieldChoiceSet.md) |  | [optional]
**comments** | **string** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
