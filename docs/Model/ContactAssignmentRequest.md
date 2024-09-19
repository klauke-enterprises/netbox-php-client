# # ContactAssignmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object_type** | **string** |  |
**object_id** | **int** |  |
**contact** | [**\OpenAPI\Client\Model\BriefContactRequest**](BriefContactRequest.md) |  |
**role** | [**\OpenAPI\Client\Model\BriefContactRoleRequest**](BriefContactRoleRequest.md) |  | [optional]
**priority** | **string** | * &#x60;primary&#x60; - Primary * &#x60;secondary&#x60; - Secondary * &#x60;tertiary&#x60; - Tertiary * &#x60;inactive&#x60; - Inactive | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
