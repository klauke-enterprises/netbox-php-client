# # InventoryItemTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**device_type** | [**\OpenAPI\Client\Model\DeviceType**](DeviceType.md) |  |
**parent** | **int** |  | [optional]
**name** | **string** | {module} is accepted as a substitution for the module bay position when attached to a module type. |
**label** | **string** | Physical label | [optional]
**role** | [**\OpenAPI\Client\Model\InventoryItemRole**](InventoryItemRole.md) |  | [optional]
**manufacturer** | [**\OpenAPI\Client\Model\Manufacturer**](Manufacturer.md) |  | [optional]
**part_id** | **string** | Manufacturer-assigned part identifier | [optional]
**description** | **string** |  | [optional]
**component_type** | **string** |  | [optional]
**component_id** | **int** |  | [optional]
**component** | **mixed** |  | [readonly]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**_depth** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
