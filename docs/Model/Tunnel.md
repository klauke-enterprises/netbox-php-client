# # Tunnel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**status** | [**\OpenAPI\Client\Model\TunnelStatus**](TunnelStatus.md) |  |
**group** | [**\OpenAPI\Client\Model\BriefTunnelGroup**](BriefTunnelGroup.md) |  | [optional]
**encapsulation** | [**\OpenAPI\Client\Model\TunnelEncapsulation**](TunnelEncapsulation.md) |  |
**ipsec_profile** | [**\OpenAPI\Client\Model\BriefIPSecProfile**](BriefIPSecProfile.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**tunnel_id** | **int** |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**terminations_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
