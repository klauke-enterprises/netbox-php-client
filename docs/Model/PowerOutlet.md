# # PowerOutlet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**device** | [**\OpenAPI\Client\Model\Device**](Device.md) |  |
**module** | [**\OpenAPI\Client\Model\Module**](Module.md) |  | [optional]
**name** | **string** |  |
**label** | **string** | Physical label | [optional]
**type** | [**\OpenAPI\Client\Model\PowerOutletType**](PowerOutletType.md) |  | [optional]
**power_port** | [**\OpenAPI\Client\Model\PowerPort**](PowerPort.md) |  | [optional]
**feed_leg** | [**\OpenAPI\Client\Model\PowerOutletFeedLeg**](PowerOutletFeedLeg.md) |  | [optional]
**description** | **string** |  | [optional]
**mark_connected** | **bool** | Treat as if a cable is connected | [optional]
**cable** | [**\OpenAPI\Client\Model\Cable**](Cable.md) |  | [readonly]
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
