# # FrontPortTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**device_type** | [**\OpenAPI\Client\Model\DeviceType**](DeviceType.md) |  | [optional]
**module_type** | [**\OpenAPI\Client\Model\ModuleType**](ModuleType.md) |  | [optional]
**name** | **string** | {module} is accepted as a substitution for the module bay position when attached to a module type. |
**label** | **string** | Physical label | [optional]
**type** | [**\OpenAPI\Client\Model\FrontPortType**](FrontPortType.md) |  |
**color** | **string** |  | [optional]
**rear_port** | [**\OpenAPI\Client\Model\RearPortTemplate**](RearPortTemplate.md) |  |
**rear_port_position** | **int** |  | [optional] [default to 1]
**description** | **string** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
