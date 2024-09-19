# # CircuitTerminationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**circuit** | [**\OpenAPI\Client\Model\BriefCircuitRequest**](BriefCircuitRequest.md) |  |
**term_side** | **string** | * &#x60;A&#x60; - A * &#x60;Z&#x60; - Z |
**site** | [**\OpenAPI\Client\Model\BriefSiteRequest**](BriefSiteRequest.md) |  | [optional]
**provider_network** | [**\OpenAPI\Client\Model\BriefProviderNetworkRequest**](BriefProviderNetworkRequest.md) |  | [optional]
**port_speed** | **int** | Physical circuit speed | [optional]
**upstream_speed** | **int** | Upstream speed, if different from port speed | [optional]
**xconnect_id** | **string** | ID of the local cross-connect | [optional]
**pp_info** | **string** | Patch panel ID and port number(s) | [optional]
**description** | **string** |  | [optional]
**mark_connected** | **bool** | Treat as if a cable is connected | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
