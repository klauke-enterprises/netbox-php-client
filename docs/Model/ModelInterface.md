# # ModelInterface

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**device** | [**\OpenAPI\Client\Model\BriefDevice**](BriefDevice.md) |  |
**vdcs** | [**\OpenAPI\Client\Model\VirtualDeviceContext[]**](VirtualDeviceContext.md) |  | [optional]
**module** | [**\OpenAPI\Client\Model\BriefModule**](BriefModule.md) |  | [optional]
**name** | **string** |  |
**label** | **string** | Physical label | [optional]
**type** | [**\OpenAPI\Client\Model\InterfaceType**](InterfaceType.md) |  |
**enabled** | **bool** |  | [optional]
**parent** | [**\OpenAPI\Client\Model\NestedInterface**](NestedInterface.md) |  | [optional]
**bridge** | [**\OpenAPI\Client\Model\NestedInterface**](NestedInterface.md) |  | [optional]
**lag** | [**\OpenAPI\Client\Model\NestedInterface**](NestedInterface.md) |  | [optional]
**mtu** | **int** |  | [optional]
**mac_address** | **string** |  | [optional]
**speed** | **int** |  | [optional]
**duplex** | [**\OpenAPI\Client\Model\InterfaceDuplex**](InterfaceDuplex.md) |  | [optional]
**wwn** | **string** |  | [optional]
**mgmt_only** | **bool** | This interface is used only for out-of-band management | [optional]
**description** | **string** |  | [optional]
**mode** | [**\OpenAPI\Client\Model\InterfaceMode**](InterfaceMode.md) |  | [optional]
**rf_role** | [**\OpenAPI\Client\Model\InterfaceRfRole**](InterfaceRfRole.md) |  | [optional]
**rf_channel** | [**\OpenAPI\Client\Model\InterfaceRfChannel**](InterfaceRfChannel.md) |  | [optional]
**poe_mode** | [**\OpenAPI\Client\Model\InterfacePoeMode**](InterfacePoeMode.md) |  | [optional]
**poe_type** | [**\OpenAPI\Client\Model\InterfacePoeType**](InterfacePoeType.md) |  | [optional]
**rf_channel_frequency** | **float** | Populated by selected channel (if set) | [optional]
**rf_channel_width** | **float** | Populated by selected channel (if set) | [optional]
**tx_power** | **int** |  | [optional]
**untagged_vlan** | [**\OpenAPI\Client\Model\BriefVLAN**](BriefVLAN.md) |  | [optional]
**tagged_vlans** | [**\OpenAPI\Client\Model\VLAN[]**](VLAN.md) |  | [optional]
**mark_connected** | **bool** | Treat as if a cable is connected | [optional]
**cable** | [**\OpenAPI\Client\Model\BriefCable**](BriefCable.md) |  | [readonly]
**cable_end** | **string** |  | [readonly]
**wireless_link** | [**\OpenAPI\Client\Model\NestedWirelessLink**](NestedWirelessLink.md) |  | [readonly]
**link_peers** | **mixed[]** |  | [readonly]
**link_peers_type** | **string** | Return the type of the peer link terminations, or None. | [readonly]
**wireless_lans** | [**\OpenAPI\Client\Model\WirelessLAN[]**](WirelessLAN.md) |  | [optional]
**vrf** | [**\OpenAPI\Client\Model\BriefVRF**](BriefVRF.md) |  | [optional]
**l2vpn_termination** | [**\OpenAPI\Client\Model\BriefL2VPNTermination**](BriefL2VPNTermination.md) |  | [readonly]
**connected_endpoints** | **mixed[]** |  | [readonly]
**connected_endpoints_type** | **string** |  | [readonly]
**connected_endpoints_reachable** | **bool** |  | [readonly]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**count_ipaddresses** | **int** |  | [readonly]
**count_fhrp_groups** | **int** |  | [readonly]
**_occupied** | **bool** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
