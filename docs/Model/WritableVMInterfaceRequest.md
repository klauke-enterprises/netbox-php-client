# # WritableVMInterfaceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**virtual_machine** | [**\OpenAPI\Client\Model\VirtualMachineRequest**](VirtualMachineRequest.md) |  |
**name** | **string** |  |
**enabled** | **bool** |  | [optional]
**parent** | **int** |  | [optional]
**bridge** | **int** |  | [optional]
**mtu** | **int** |  | [optional]
**mac_address** | **string** |  | [optional]
**description** | **string** |  | [optional]
**mode** | **string** | IEEE 802.1Q tagging strategy  * &#x60;access&#x60; - Access * &#x60;tagged&#x60; - Tagged * &#x60;tagged-all&#x60; - Tagged (All) | [optional]
**untagged_vlan** | [**\OpenAPI\Client\Model\VLANRequest**](VLANRequest.md) |  | [optional]
**tagged_vlans** | **int[]** |  | [optional]
**vrf** | [**\OpenAPI\Client\Model\VRFRequest**](VRFRequest.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
