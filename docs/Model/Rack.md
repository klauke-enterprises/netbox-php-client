# # Rack

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**facility_id** | **string** |  | [optional]
**site** | [**\OpenAPI\Client\Model\BriefSite**](BriefSite.md) |  |
**location** | [**\OpenAPI\Client\Model\BriefLocation**](BriefLocation.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\RackStatus**](RackStatus.md) |  | [optional]
**role** | [**\OpenAPI\Client\Model\BriefRackRole**](BriefRackRole.md) |  | [optional]
**serial** | **string** |  | [optional]
**asset_tag** | **string** | A unique tag used to identify this rack | [optional]
**rack_type** | [**\OpenAPI\Client\Model\BriefRackType**](BriefRackType.md) |  | [optional]
**form_factor** | [**\OpenAPI\Client\Model\RackFormFactor**](RackFormFactor.md) |  | [optional]
**width** | [**\OpenAPI\Client\Model\RackWidth**](RackWidth.md) |  | [optional]
**u_height** | **int** | Height in rack units | [optional]
**starting_unit** | **int** | Starting unit for rack | [optional]
**weight** | **float** |  | [optional]
**max_weight** | **int** | Maximum load capacity for the rack | [optional]
**weight_unit** | [**\OpenAPI\Client\Model\DeviceTypeWeightUnit**](DeviceTypeWeightUnit.md) |  | [optional]
**desc_units** | **bool** | Units are numbered top-to-bottom | [optional]
**outer_width** | **int** | Outer dimension of rack (width) | [optional]
**outer_depth** | **int** | Outer dimension of rack (depth) | [optional]
**outer_unit** | [**\OpenAPI\Client\Model\RackOuterUnit**](RackOuterUnit.md) |  | [optional]
**mounting_depth** | **int** | Maximum depth of a mounted device, in millimeters. For four-post racks, this is the distance between the front and rear rails. | [optional]
**airflow** | [**\OpenAPI\Client\Model\RackAirflow**](RackAirflow.md) |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**device_count** | **int** |  | [readonly]
**powerfeed_count** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
