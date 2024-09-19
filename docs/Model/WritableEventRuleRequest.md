# # WritableEventRuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object_types** | **string[]** |  |
**name** | **string** |  |
**enabled** | **bool** |  | [optional]
**event_types** | **string[]** | The types of event which will trigger this rule. |
**conditions** | **mixed** | A set of conditions which determine whether the event will be generated. | [optional]
**action_type** | **string** | * &#x60;webhook&#x60; - Webhook * &#x60;script&#x60; - Script * &#x60;notification&#x60; - Notification | [optional]
**action_object_type** | **string** |  |
**action_object_id** | **int** |  | [optional]
**description** | **string** |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
