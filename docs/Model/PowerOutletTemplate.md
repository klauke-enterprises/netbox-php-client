# # PowerOutletTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**device_type** | [**\OpenAPI\Client\Model\BriefDeviceType**](BriefDeviceType.md) |  | [optional]
**module_type** | [**\OpenAPI\Client\Model\BriefModuleType**](BriefModuleType.md) |  | [optional]
**name** | **string** | {module} is accepted as a substitution for the module bay position when attached to a module type. |
**label** | **string** | Physical label | [optional]
**type** | [**\OpenAPI\Client\Model\PowerOutletType**](PowerOutletType.md) |  | [optional]
**power_port** | [**\OpenAPI\Client\Model\BriefPowerPortTemplate**](BriefPowerPortTemplate.md) |  | [optional]
**feed_leg** | [**\OpenAPI\Client\Model\PowerOutletFeedLeg**](PowerOutletFeedLeg.md) |  | [optional]
**description** | **string** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
