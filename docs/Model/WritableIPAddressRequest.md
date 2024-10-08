# # WritableIPAddressRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** |  |
**vrf** | [**\OpenAPI\Client\Model\VRFRequest**](VRFRequest.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\TenantRequest**](TenantRequest.md) |  | [optional]
**status** | **string** | The operational status of this IP  * &#x60;active&#x60; - Active * &#x60;reserved&#x60; - Reserved * &#x60;deprecated&#x60; - Deprecated * &#x60;dhcp&#x60; - DHCP * &#x60;slaac&#x60; - SLAAC | [optional]
**role** | **string** | The functional role of this IP  * &#x60;loopback&#x60; - Loopback * &#x60;secondary&#x60; - Secondary * &#x60;anycast&#x60; - Anycast * &#x60;vip&#x60; - VIP * &#x60;vrrp&#x60; - VRRP * &#x60;hsrp&#x60; - HSRP * &#x60;glbp&#x60; - GLBP * &#x60;carp&#x60; - CARP | [optional]
**assigned_object_type** | **string** |  | [optional]
**assigned_object_id** | **int** |  | [optional]
**nat_inside** | **int** | The IP for which this address is the \&quot;outside\&quot; IP | [optional]
**dns_name** | **string** | Hostname or FQDN (not case-sensitive) | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
