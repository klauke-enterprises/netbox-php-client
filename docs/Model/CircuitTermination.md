# # CircuitTermination

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**circuit** | [**\OpenAPI\Client\Model\Circuit**](Circuit.md) |  |
**term_side** | **string** | * &#x60;A&#x60; - A * &#x60;Z&#x60; - Z |
**site** | [**\OpenAPI\Client\Model\Site**](Site.md) |  | [optional]
**provider_network** | [**\OpenAPI\Client\Model\ProviderNetwork**](ProviderNetwork.md) |  | [optional]
**port_speed** | **int** | Physical circuit speed | [optional]
**upstream_speed** | **int** | Upstream speed, if different from port speed | [optional]
**xconnect_id** | **string** | ID of the local cross-connect | [optional]
**pp_info** | **string** | Patch panel ID and port number(s) | [optional]
**description** | **string** |  | [optional]
**mark_connected** | **bool** | Treat as if a cable is connected | [optional]
**cable** | [**\OpenAPI\Client\Model\Cable**](Cable.md) |  | [readonly]
**cable_end** | **string** |  | [readonly]
**link_peers** | **mixed[]** |  | [readonly]
**link_peers_type** | **string** | Return the type of the peer link terminations, or None. | [readonly]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**_occupied** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
