# # WritableWirelessLinkRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interface_a** | [**\OpenAPI\Client\Model\BriefInterfaceRequest**](BriefInterfaceRequest.md) |  |
**interface_b** | [**\OpenAPI\Client\Model\BriefInterfaceRequest**](BriefInterfaceRequest.md) |  |
**ssid** | **string** |  | [optional]
**status** | **string** | * &#x60;connected&#x60; - Connected * &#x60;planned&#x60; - Planned * &#x60;decommissioning&#x60; - Decommissioning | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenantRequest**](BriefTenantRequest.md) |  | [optional]
**auth_type** | **string** | * &#x60;open&#x60; - Open * &#x60;wep&#x60; - WEP * &#x60;wpa-personal&#x60; - WPA Personal (PSK) * &#x60;wpa-enterprise&#x60; - WPA Enterprise | [optional]
**auth_cipher** | **string** | * &#x60;auto&#x60; - Auto * &#x60;tkip&#x60; - TKIP * &#x60;aes&#x60; - AES | [optional]
**auth_psk** | **string** |  | [optional]
**distance** | **float** |  | [optional]
**distance_unit** | **string** | * &#x60;km&#x60; - Kilometers * &#x60;m&#x60; - Meters * &#x60;mi&#x60; - Miles * &#x60;ft&#x60; - Feet | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
