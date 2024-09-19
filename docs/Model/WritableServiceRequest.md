# # WritableServiceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**device** | [**\OpenAPI\Client\Model\DeviceRequest**](DeviceRequest.md) |  | [optional]
**virtual_machine** | [**\OpenAPI\Client\Model\VirtualMachineRequest**](VirtualMachineRequest.md) |  | [optional]
**name** | **string** |  |
**protocol** | **string** | * &#x60;tcp&#x60; - TCP * &#x60;udp&#x60; - UDP * &#x60;sctp&#x60; - SCTP |
**ports** | **int[]** |  |
**ipaddresses** | **int[]** |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
