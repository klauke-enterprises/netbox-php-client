# # EventRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**object_types** | **string[]** |  |
**name** | **string** |  |
**type_create** | **bool** | Triggers when a matching object is created. | [optional]
**type_update** | **bool** | Triggers when a matching object is updated. | [optional]
**type_delete** | **bool** | Triggers when a matching object is deleted. | [optional]
**type_job_start** | **bool** | Triggers when a job for a matching object is started. | [optional]
**type_job_end** | **bool** | Triggers when a job for a matching object terminates. | [optional]
**enabled** | **bool** |  | [optional]
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
