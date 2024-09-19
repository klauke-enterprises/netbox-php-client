# # PatchedVRFRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**rd** | **string** | Unique route distinguisher (as defined in RFC 4364) | [optional]
**tenant** | [**\OpenAPI\Client\Model\TenantRequest**](TenantRequest.md) |  | [optional]
**enforce_unique** | **bool** | Prevent duplicate prefixes/IP addresses within this VRF | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**import_targets** | **int[]** |  | [optional]
**export_targets** | **int[]** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
