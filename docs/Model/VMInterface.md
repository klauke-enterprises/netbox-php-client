# # VMInterface

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**virtual_machine** | [**\OpenAPI\Client\Model\VirtualMachine**](VirtualMachine.md) |  |
**name** | **string** |  |
**enabled** | **bool** |  | [optional]
**parent** | [**\OpenAPI\Client\Model\NestedVMInterface**](NestedVMInterface.md) |  | [optional]
**bridge** | [**\OpenAPI\Client\Model\NestedVMInterface**](NestedVMInterface.md) |  | [optional]
**mtu** | **int** |  | [optional]
**mac_address** | **string** |  | [optional]
**description** | **string** |  | [optional]
**mode** | [**\OpenAPI\Client\Model\InterfaceMode**](InterfaceMode.md) |  | [optional]
**untagged_vlan** | [**\OpenAPI\Client\Model\VLAN**](VLAN.md) |  | [optional]
**tagged_vlans** | [**\OpenAPI\Client\Model\VLAN[]**](VLAN.md) |  | [optional]
**vrf** | [**\OpenAPI\Client\Model\VRF**](VRF.md) |  | [optional]
**l2vpn_termination** | [**\OpenAPI\Client\Model\L2VPNTermination**](L2VPNTermination.md) |  | [readonly]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**count_ipaddresses** | **int** |  | [readonly]
**count_fhrp_groups** | **int** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
