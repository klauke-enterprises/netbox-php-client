# # IPSecProposalRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  | [optional]
**encryption_algorithm** | **string** | * &#x60;aes-128-cbc&#x60; - 128-bit AES (CBC) * &#x60;aes-128-gcm&#x60; - 128-bit AES (GCM) * &#x60;aes-192-cbc&#x60; - 192-bit AES (CBC) * &#x60;aes-192-gcm&#x60; - 192-bit AES (GCM) * &#x60;aes-256-cbc&#x60; - 256-bit AES (CBC) * &#x60;aes-256-gcm&#x60; - 256-bit AES (GCM) * &#x60;3des-cbc&#x60; - 3DES * &#x60;des-cbc&#x60; - DES |
**authentication_algorithm** | **string** | * &#x60;hmac-sha1&#x60; - SHA-1 HMAC * &#x60;hmac-sha256&#x60; - SHA-256 HMAC * &#x60;hmac-sha384&#x60; - SHA-384 HMAC * &#x60;hmac-sha512&#x60; - SHA-512 HMAC * &#x60;hmac-md5&#x60; - MD5 HMAC |
**sa_lifetime_seconds** | **int** | Security association lifetime (seconds) | [optional]
**sa_lifetime_data** | **int** | Security association lifetime (in kilobytes) | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
