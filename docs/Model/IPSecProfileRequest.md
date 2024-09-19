# # IPSecProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  | [optional]
**mode** | **string** | * &#x60;esp&#x60; - ESP * &#x60;ah&#x60; - AH |
**ike_policy** | [**\OpenAPI\Client\Model\BriefIKEPolicyRequest**](BriefIKEPolicyRequest.md) |  |
**ipsec_policy** | [**\OpenAPI\Client\Model\BriefIPSecPolicyRequest**](BriefIPSecPolicyRequest.md) |  |
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
