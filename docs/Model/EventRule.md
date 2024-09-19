# # EventRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**object_types** | **string[]** |  |
**name** | **string** |  |
**enabled** | **bool** |  | [optional]
**event_types** | **string[]** | The types of event which will trigger this rule. |
**conditions** | **mixed** | A set of conditions which determine whether the event will be generated. | [optional]
**action_type** | [**\OpenAPI\Client\Model\EventRuleActionType**](EventRuleActionType.md) |  |
**action_object_type** | **string** |  |
**action_object_id** | **int** |  | [optional]
**action_object** | **array<string,mixed>** |  | [readonly]
**description** | **string** |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
