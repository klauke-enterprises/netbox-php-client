# # VirtualMachineWithConfigContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**status** | [**\OpenAPI\Client\Model\VirtualMachineWithConfigContextStatus**](VirtualMachineWithConfigContextStatus.md) |  | [optional]
**site** | [**\OpenAPI\Client\Model\Site**](Site.md) |  | [optional]
**cluster** | [**\OpenAPI\Client\Model\Cluster**](Cluster.md) |  | [optional]
**device** | [**\OpenAPI\Client\Model\Device**](Device.md) |  | [optional]
**role** | [**\OpenAPI\Client\Model\DeviceRole**](DeviceRole.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\Tenant**](Tenant.md) |  | [optional]
**platform** | [**\OpenAPI\Client\Model\Platform**](Platform.md) |  | [optional]
**primary_ip** | [**\OpenAPI\Client\Model\IPAddress**](IPAddress.md) |  | [readonly]
**primary_ip4** | [**\OpenAPI\Client\Model\IPAddress**](IPAddress.md) |  | [optional]
**primary_ip6** | [**\OpenAPI\Client\Model\IPAddress**](IPAddress.md) |  | [optional]
**vcpus** | **float** |  | [optional]
**memory** | **int** |  | [optional]
**disk** | **int** |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**config_template** | [**\OpenAPI\Client\Model\ConfigTemplate**](ConfigTemplate.md) |  | [optional]
**local_context_data** | **mixed** | Local config context data takes precedence over source contexts in the final rendered config context | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**config_context** | **mixed** |  | [readonly]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**interface_count** | **int** |  | [readonly]
**virtual_disk_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
