# # PowerPort

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**device** | [**\OpenAPI\Client\Model\BriefDevice**](BriefDevice.md) |  |
**module** | [**\OpenAPI\Client\Model\BriefModule**](BriefModule.md) |  | [optional]
**name** | **string** |  |
**label** | **string** | Physical label | [optional]
**type** | [**\OpenAPI\Client\Model\PowerPortType**](PowerPortType.md) |  | [optional]
**maximum_draw** | **int** | Maximum power draw (watts) | [optional]
**allocated_draw** | **int** | Allocated power draw (watts) | [optional]
**description** | **string** |  | [optional]
**mark_connected** | **bool** | Treat as if a cable is connected | [optional]
**cable** | [**\OpenAPI\Client\Model\BriefCable**](BriefCable.md) |  | [readonly]
**cable_end** | **string** |  | [readonly]
**link_peers** | **mixed[]** |  | [readonly]
**link_peers_type** | **string** | Return the type of the peer link terminations, or None. | [readonly]
**connected_endpoints** | **mixed[]** |  | [readonly]
**connected_endpoints_type** | **string** |  | [readonly]
**connected_endpoints_reachable** | **bool** |  | [readonly]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**_occupied** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
