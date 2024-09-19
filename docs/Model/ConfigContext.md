# # ConfigContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**weight** | **int** |  | [optional]
**description** | **string** |  | [optional]
**is_active** | **bool** |  | [optional]
**regions** | [**\OpenAPI\Client\Model\Region[]**](Region.md) |  | [optional]
**site_groups** | [**\OpenAPI\Client\Model\SiteGroup[]**](SiteGroup.md) |  | [optional]
**sites** | [**\OpenAPI\Client\Model\Site[]**](Site.md) |  | [optional]
**locations** | [**\OpenAPI\Client\Model\Location[]**](Location.md) |  | [optional]
**device_types** | [**\OpenAPI\Client\Model\DeviceType[]**](DeviceType.md) |  | [optional]
**roles** | [**\OpenAPI\Client\Model\DeviceRole[]**](DeviceRole.md) |  | [optional]
**platforms** | [**\OpenAPI\Client\Model\Platform[]**](Platform.md) |  | [optional]
**cluster_types** | [**\OpenAPI\Client\Model\ClusterType[]**](ClusterType.md) |  | [optional]
**cluster_groups** | [**\OpenAPI\Client\Model\ClusterGroup[]**](ClusterGroup.md) |  | [optional]
**clusters** | [**\OpenAPI\Client\Model\Cluster[]**](Cluster.md) |  | [optional]
**tenant_groups** | [**\OpenAPI\Client\Model\TenantGroup[]**](TenantGroup.md) |  | [optional]
**tenants** | [**\OpenAPI\Client\Model\Tenant[]**](Tenant.md) |  | [optional]
**tags** | **string[]** |  | [optional]
**data_source** | [**\OpenAPI\Client\Model\DataSource**](DataSource.md) |  | [optional]
**data_path** | **string** | Path to remote file (relative to data source root) | [readonly]
**data_file** | [**\OpenAPI\Client\Model\DataFile**](DataFile.md) |  | [readonly]
**data_synced** | **\DateTime** |  | [readonly]
**data** | **mixed** |  |
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
