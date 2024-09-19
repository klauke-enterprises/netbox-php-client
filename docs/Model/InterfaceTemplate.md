# # InterfaceTemplate

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
**type** | [**\OpenAPI\Client\Model\InterfaceType**](InterfaceType.md) |  |
**enabled** | **bool** |  | [optional]
**mgmt_only** | **bool** |  | [optional]
**description** | **string** |  | [optional]
**bridge** | [**\OpenAPI\Client\Model\NestedInterfaceTemplate**](NestedInterfaceTemplate.md) |  | [optional]
**poe_mode** | [**\OpenAPI\Client\Model\InterfaceTemplatePoeMode**](InterfaceTemplatePoeMode.md) |  | [optional]
**poe_type** | [**\OpenAPI\Client\Model\InterfaceTemplatePoeType**](InterfaceTemplatePoeType.md) |  | [optional]
**rf_role** | [**\OpenAPI\Client\Model\InterfaceTemplateRfRole**](InterfaceTemplateRfRole.md) |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
