# # ObjectPermission

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**description** | **string** |  | [optional]
**enabled** | **bool** |  | [optional]
**object_types** | **string[]** |  |
**actions** | **string[]** | The list of actions granted by this permission |
**constraints** | **mixed** | Queryset filter matching the applicable objects of the selected type(s) | [optional]
**groups** | [**\OpenAPI\Client\Model\NestedGroup[]**](NestedGroup.md) |  | [optional]
**users** | [**\OpenAPI\Client\Model\NestedUser[]**](NestedUser.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
