# # ContactAssignment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**object_type** | **string** |  |
**object_id** | **int** |  |
**object** | **array<string,mixed>** |  | [readonly]
**contact** | [**\OpenAPI\Client\Model\Contact**](Contact.md) |  |
**role** | [**\OpenAPI\Client\Model\ContactRole**](ContactRole.md) |  | [optional]
**priority** | [**\OpenAPI\Client\Model\ContactAssignmentPriority**](ContactAssignmentPriority.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
