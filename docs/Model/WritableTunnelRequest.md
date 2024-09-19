# # WritableTunnelRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**status** | **string** | * &#x60;planned&#x60; - Planned * &#x60;active&#x60; - Active * &#x60;disabled&#x60; - Disabled | [optional]
**group** | [**\OpenAPI\Client\Model\TunnelGroupRequest**](TunnelGroupRequest.md) |  | [optional]
**encapsulation** | **string** | * &#x60;ipsec-transport&#x60; - IPsec - Transport * &#x60;ipsec-tunnel&#x60; - IPsec - Tunnel * &#x60;ip-ip&#x60; - IP-in-IP * &#x60;gre&#x60; - GRE |
**ipsec_profile** | [**\OpenAPI\Client\Model\IPSecProfileRequest**](IPSecProfileRequest.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\TenantRequest**](TenantRequest.md) |  | [optional]
**tunnel_id** | **int** |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
