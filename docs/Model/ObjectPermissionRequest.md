# # ObjectPermissionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  | [optional]
**enabled** | **bool** |  | [optional]
**object_types** | **string[]** |  |
**actions** | **string[]** | The list of actions granted by this permission |
**constraints** | **mixed** | Queryset filter matching the applicable objects of the selected type(s) | [optional]
**groups** | **int[]** |  | [optional]
**users** | **int[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
