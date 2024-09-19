# # WritableIKEPolicyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  | [optional]
**version** | **int** | * &#x60;1&#x60; - IKEv1 * &#x60;2&#x60; - IKEv2 | [optional]
**mode** | **string** | * &#x60;aggressive&#x60; - Aggressive * &#x60;main&#x60; - Main | [optional]
**proposals** | **int[]** |  | [optional]
**preshared_key** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
