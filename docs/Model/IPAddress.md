# # IPAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**family** | [**\OpenAPI\Client\Model\AggregateFamily**](AggregateFamily.md) |  |
**address** | **string** |  |
**vrf** | [**\OpenAPI\Client\Model\BriefVRF**](BriefVRF.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\IPAddressStatus**](IPAddressStatus.md) |  | [optional]
**role** | [**\OpenAPI\Client\Model\IPAddressRole**](IPAddressRole.md) |  | [optional]
**assigned_object_type** | **string** |  | [optional]
**assigned_object_id** | **int** |  | [optional]
**assigned_object** | **mixed** |  | [readonly]
**nat_inside** | [**\OpenAPI\Client\Model\NestedIPAddress**](NestedIPAddress.md) |  | [optional]
**nat_outside** | [**\OpenAPI\Client\Model\NestedIPAddress[]**](NestedIPAddress.md) |  | [readonly]
**dns_name** | **string** | Hostname or FQDN (not case-sensitive) | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
