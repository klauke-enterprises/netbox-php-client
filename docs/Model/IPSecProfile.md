# # IPSecProfile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**description** | **string** |  | [optional]
**mode** | [**\OpenAPI\Client\Model\IPSecProfileMode**](IPSecProfileMode.md) |  |
**ike_policy** | [**\OpenAPI\Client\Model\IKEPolicy**](IKEPolicy.md) |  |
**ipsec_policy** | [**\OpenAPI\Client\Model\IPSecPolicy**](IPSecPolicy.md) |  |
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
