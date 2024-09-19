# # PatchedWritableTunnelTerminationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tunnel** | [**\OpenAPI\Client\Model\TunnelRequest**](TunnelRequest.md) |  | [optional]
**role** | **string** | * &#x60;peer&#x60; - Peer * &#x60;hub&#x60; - Hub * &#x60;spoke&#x60; - Spoke | [optional]
**termination_type** | **string** |  | [optional]
**termination_id** | **int** |  | [optional]
**outside_ip** | [**\OpenAPI\Client\Model\IPAddressRequest**](IPAddressRequest.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
