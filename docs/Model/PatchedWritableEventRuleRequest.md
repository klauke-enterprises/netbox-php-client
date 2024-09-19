# # PatchedWritableEventRuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object_types** | **string[]** |  | [optional]
**name** | **string** |  | [optional]
**type_create** | **bool** | Triggers when a matching object is created. | [optional]
**type_update** | **bool** | Triggers when a matching object is updated. | [optional]
**type_delete** | **bool** | Triggers when a matching object is deleted. | [optional]
**type_job_start** | **bool** | Triggers when a job for a matching object is started. | [optional]
**type_job_end** | **bool** | Triggers when a job for a matching object terminates. | [optional]
**enabled** | **bool** |  | [optional]
**conditions** | **mixed** | A set of conditions which determine whether the event will be generated. | [optional]
**action_type** | **string** | * &#x60;webhook&#x60; - Webhook * &#x60;script&#x60; - Script | [optional]
**action_object_type** | **string** |  | [optional]
**action_object_id** | **int** |  | [optional]
**description** | **string** |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
