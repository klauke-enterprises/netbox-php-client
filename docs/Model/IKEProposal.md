# # IKEProposal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**description** | **string** |  | [optional]
**authentication_method** | [**\OpenAPI\Client\Model\IKEProposalAuthenticationMethod**](IKEProposalAuthenticationMethod.md) |  |
**encryption_algorithm** | [**\OpenAPI\Client\Model\IKEProposalEncryptionAlgorithm**](IKEProposalEncryptionAlgorithm.md) |  |
**authentication_algorithm** | [**\OpenAPI\Client\Model\IKEProposalAuthenticationAlgorithm**](IKEProposalAuthenticationAlgorithm.md) |  | [optional]
**group** | [**\OpenAPI\Client\Model\IKEProposalGroup**](IKEProposalGroup.md) |  |
**sa_lifetime** | **int** | Security association lifetime (in seconds) | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
