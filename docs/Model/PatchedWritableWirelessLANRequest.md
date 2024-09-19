# # PatchedWritableWirelessLANRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ssid** | **string** |  | [optional]
**description** | **string** |  | [optional]
**group** | [**\OpenAPI\Client\Model\BriefWirelessLANGroupRequest**](BriefWirelessLANGroupRequest.md) |  | [optional]
**status** | **string** | * &#x60;active&#x60; - Active * &#x60;reserved&#x60; - Reserved * &#x60;disabled&#x60; - Disabled * &#x60;deprecated&#x60; - Deprecated | [optional]
**vlan** | [**\OpenAPI\Client\Model\BriefVLANRequest**](BriefVLANRequest.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenantRequest**](BriefTenantRequest.md) |  | [optional]
**auth_type** | **string** | * &#x60;open&#x60; - Open * &#x60;wep&#x60; - WEP * &#x60;wpa-personal&#x60; - WPA Personal (PSK) * &#x60;wpa-enterprise&#x60; - WPA Enterprise | [optional]
**auth_cipher** | **string** | * &#x60;auto&#x60; - Auto * &#x60;tkip&#x60; - TKIP * &#x60;aes&#x60; - AES | [optional]
**auth_psk** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
