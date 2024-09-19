# # Circuit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**cid** | **string** | Unique circuit ID |
**provider** | [**\OpenAPI\Client\Model\BriefProvider**](BriefProvider.md) |  |
**provider_account** | [**\OpenAPI\Client\Model\BriefProviderAccount**](BriefProviderAccount.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\BriefCircuitType**](BriefCircuitType.md) |  |
**status** | [**\OpenAPI\Client\Model\CircuitStatus**](CircuitStatus.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**install_date** | **\DateTime** |  | [optional]
**termination_date** | **\DateTime** |  | [optional]
**commit_rate** | **int** | Committed rate | [optional]
**description** | **string** |  | [optional]
**termination_a** | [**\OpenAPI\Client\Model\CircuitCircuitTermination**](CircuitCircuitTermination.md) |  | [readonly]
**termination_z** | [**\OpenAPI\Client\Model\CircuitCircuitTermination**](CircuitCircuitTermination.md) |  | [readonly]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**assignments** | [**\OpenAPI\Client\Model\BriefCircuitGroupAssignmentSerializer[]**](BriefCircuitGroupAssignmentSerializer.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
