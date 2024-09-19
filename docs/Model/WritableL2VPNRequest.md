# # WritableL2VPNRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identifier** | **int** |  | [optional]
**name** | **string** |  |
**slug** | **string** |  |
**type** | **string** | * &#x60;vpws&#x60; - VPWS * &#x60;vpls&#x60; - VPLS * &#x60;vxlan&#x60; - VXLAN * &#x60;vxlan-evpn&#x60; - VXLAN-EVPN * &#x60;mpls-evpn&#x60; - MPLS EVPN * &#x60;pbb-evpn&#x60; - PBB EVPN * &#x60;epl&#x60; - EPL * &#x60;evpl&#x60; - EVPL * &#x60;ep-lan&#x60; - Ethernet Private LAN * &#x60;evp-lan&#x60; - Ethernet Virtual Private LAN * &#x60;ep-tree&#x60; - Ethernet Private Tree * &#x60;evp-tree&#x60; - Ethernet Virtual Private Tree |
**import_targets** | **int[]** |  | [optional]
**export_targets** | **int[]** |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenantRequest**](BriefTenantRequest.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
