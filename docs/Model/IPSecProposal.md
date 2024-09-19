# # IPSecProposal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**description** | **string** |  | [optional]
**encryption_algorithm** | [**\OpenAPI\Client\Model\IKEProposalEncryptionAlgorithm**](IKEProposalEncryptionAlgorithm.md) |  |
**authentication_algorithm** | [**\OpenAPI\Client\Model\IKEProposalAuthenticationAlgorithm**](IKEProposalAuthenticationAlgorithm.md) |  |
**sa_lifetime_seconds** | **int** | Security association lifetime (seconds) | [optional]
**sa_lifetime_data** | **int** | Security association lifetime (in kilobytes) | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
