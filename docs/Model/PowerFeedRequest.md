# # PowerFeedRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**power_panel** | [**\OpenAPI\Client\Model\BriefPowerPanelRequest**](BriefPowerPanelRequest.md) |  |
**rack** | [**\OpenAPI\Client\Model\BriefRackRequest**](BriefRackRequest.md) |  | [optional]
**name** | **string** |  |
**status** | **string** | * &#x60;offline&#x60; - Offline * &#x60;active&#x60; - Active * &#x60;planned&#x60; - Planned * &#x60;failed&#x60; - Failed | [optional]
**type** | **string** | * &#x60;primary&#x60; - Primary * &#x60;redundant&#x60; - Redundant | [optional]
**supply** | **string** | * &#x60;ac&#x60; - AC * &#x60;dc&#x60; - DC | [optional]
**phase** | **string** | * &#x60;single-phase&#x60; - Single phase * &#x60;three-phase&#x60; - Three-phase | [optional]
**voltage** | **int** |  | [optional]
**amperage** | **int** |  | [optional]
**max_utilization** | **int** | Maximum permissible draw (percentage) | [optional]
**mark_connected** | **bool** | Treat as if a cable is connected | [optional]
**description** | **string** |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenantRequest**](BriefTenantRequest.md) |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
