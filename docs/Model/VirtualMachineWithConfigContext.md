# # VirtualMachineWithConfigContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**status** | [**\OpenAPI\Client\Model\ModuleStatus**](ModuleStatus.md) |  | [optional]
**site** | [**\OpenAPI\Client\Model\BriefSite**](BriefSite.md) |  | [optional]
**cluster** | [**\OpenAPI\Client\Model\BriefCluster**](BriefCluster.md) |  | [optional]
**device** | [**\OpenAPI\Client\Model\BriefDevice**](BriefDevice.md) |  | [optional]
**serial** | **string** |  | [optional]
**role** | [**\OpenAPI\Client\Model\BriefDeviceRole**](BriefDeviceRole.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**platform** | [**\OpenAPI\Client\Model\BriefPlatform**](BriefPlatform.md) |  | [optional]
**primary_ip** | [**\OpenAPI\Client\Model\BriefIPAddress**](BriefIPAddress.md) |  | [readonly]
**primary_ip4** | [**\OpenAPI\Client\Model\BriefIPAddress**](BriefIPAddress.md) |  | [optional]
**primary_ip6** | [**\OpenAPI\Client\Model\BriefIPAddress**](BriefIPAddress.md) |  | [optional]
**vcpus** | **float** |  | [optional]
**memory** | **int** |  | [optional]
**disk** | **int** |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**config_template** | [**\OpenAPI\Client\Model\BriefConfigTemplate**](BriefConfigTemplate.md) |  | [optional]
**local_context_data** | **mixed** | Local config context data takes precedence over source contexts in the final rendered config context | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**config_context** | **mixed** |  | [readonly]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**interface_count** | **int** |  | [readonly]
**virtual_disk_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
