# # PowerFeed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**power_panel** | [**\OpenAPI\Client\Model\BriefPowerPanel**](BriefPowerPanel.md) |  |
**rack** | [**\OpenAPI\Client\Model\BriefRack**](BriefRack.md) |  | [optional]
**name** | **string** |  |
**status** | [**\OpenAPI\Client\Model\PowerFeedStatus**](PowerFeedStatus.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\PowerFeedType**](PowerFeedType.md) |  | [optional]
**supply** | [**\OpenAPI\Client\Model\PowerFeedSupply**](PowerFeedSupply.md) |  | [optional]
**phase** | [**\OpenAPI\Client\Model\PowerFeedPhase**](PowerFeedPhase.md) |  | [optional]
**voltage** | **int** |  | [optional]
**amperage** | **int** |  | [optional]
**max_utilization** | **int** | Maximum permissible draw (percentage) | [optional]
**mark_connected** | **bool** | Treat as if a cable is connected | [optional]
**cable** | [**\OpenAPI\Client\Model\BriefCable**](BriefCable.md) |  | [readonly]
**cable_end** | **string** |  | [readonly]
**link_peers** | **mixed[]** |  | [readonly]
**link_peers_type** | **string** | Return the type of the peer link terminations, or None. | [readonly]
**connected_endpoints** | **mixed[]** |  | [readonly]
**connected_endpoints_type** | **string** |  | [readonly]
**connected_endpoints_reachable** | **bool** |  | [readonly]
**description** | **string** |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**_occupied** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
