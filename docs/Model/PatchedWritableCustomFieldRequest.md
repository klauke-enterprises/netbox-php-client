# # PatchedWritableCustomFieldRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object_types** | **string[]** |  | [optional]
**type** | **string** | The type of data this custom field holds  * &#x60;text&#x60; - Text * &#x60;longtext&#x60; - Text (long) * &#x60;integer&#x60; - Integer * &#x60;decimal&#x60; - Decimal * &#x60;boolean&#x60; - Boolean (true/false) * &#x60;date&#x60; - Date * &#x60;datetime&#x60; - Date &amp; time * &#x60;url&#x60; - URL * &#x60;json&#x60; - JSON * &#x60;select&#x60; - Selection * &#x60;multiselect&#x60; - Multiple selection * &#x60;object&#x60; - Object * &#x60;multiobject&#x60; - Multiple objects | [optional]
**related_object_type** | **string** |  | [optional]
**name** | **string** | Internal field name | [optional]
**label** | **string** | Name of the field as displayed to users (if not provided, &#39;the field&#39;s name will be used) | [optional]
**group_name** | **string** | Custom fields within the same group will be displayed together | [optional]
**description** | **string** |  | [optional]
**required** | **bool** | This field is required when creating new objects or editing an existing object. | [optional]
**unique** | **bool** | The value of this field must be unique for the assigned object | [optional]
**search_weight** | **int** | Weighting for search. Lower values are considered more important. Fields with a search weight of zero will be ignored. | [optional]
**filter_logic** | **string** | Loose matches any instance of a given string; exact matches the entire field.  * &#x60;disabled&#x60; - Disabled * &#x60;loose&#x60; - Loose * &#x60;exact&#x60; - Exact | [optional]
**ui_visible** | **string** | Specifies whether the custom field is displayed in the UI  * &#x60;always&#x60; - Always * &#x60;if-set&#x60; - If set * &#x60;hidden&#x60; - Hidden | [optional]
**ui_editable** | **string** | Specifies whether the custom field value can be edited in the UI  * &#x60;yes&#x60; - Yes * &#x60;no&#x60; - No * &#x60;hidden&#x60; - Hidden | [optional]
**is_cloneable** | **bool** | Replicate this value when cloning objects | [optional]
**default** | **mixed** | Default value for the field (must be a JSON value). Encapsulate strings with double quotes (e.g. \&quot;Foo\&quot;). | [optional]
**related_object_filter** | **mixed** | Filter the object selection choices using a query_params dict (must be a JSON value).Encapsulate strings with double quotes (e.g. \&quot;Foo\&quot;). | [optional]
**weight** | **int** | Fields with higher weights appear lower in a form. | [optional]
**validation_minimum** | **int** | Minimum allowed value (for numeric fields) | [optional]
**validation_maximum** | **int** | Maximum allowed value (for numeric fields) | [optional]
**validation_regex** | **string** | Regular expression to enforce on text field values. Use ^ and $ to force matching of entire string. For example, &lt;code&gt;^[A-Z]{3}$&lt;/code&gt; will limit values to exactly three uppercase letters. | [optional]
**choice_set** | [**\OpenAPI\Client\Model\BriefCustomFieldChoiceSetRequest**](BriefCustomFieldChoiceSetRequest.md) |  | [optional]
**comments** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
