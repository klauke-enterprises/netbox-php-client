# # VLAN

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**site** | [**\OpenAPI\Client\Model\BriefSite**](BriefSite.md) |  | [optional]
**group** | [**\OpenAPI\Client\Model\BriefVLANGroup**](BriefVLANGroup.md) |  | [optional]
**vid** | **int** | Numeric VLAN ID (1-4094) |
**name** | **string** |  |
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\IPRangeStatus**](IPRangeStatus.md) |  | [optional]
**role** | [**\OpenAPI\Client\Model\BriefRole**](BriefRole.md) |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**l2vpn_termination** | [**\OpenAPI\Client\Model\BriefL2VPNTermination**](BriefL2VPNTermination.md) |  | [readonly]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**prefix_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
