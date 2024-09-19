# # WritableCircuitRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cid** | **string** | Unique circuit ID |
**provider** | [**\OpenAPI\Client\Model\ProviderRequest**](ProviderRequest.md) |  |
**provider_account** | [**\OpenAPI\Client\Model\ProviderAccountRequest**](ProviderAccountRequest.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\CircuitTypeRequest**](CircuitTypeRequest.md) |  |
**status** | **string** | * &#x60;planned&#x60; - Planned * &#x60;provisioning&#x60; - Provisioning * &#x60;active&#x60; - Active * &#x60;offline&#x60; - Offline * &#x60;deprovisioning&#x60; - Deprovisioning * &#x60;decommissioned&#x60; - Decommissioned | [optional]
**tenant** | [**\OpenAPI\Client\Model\TenantRequest**](TenantRequest.md) |  | [optional]
**install_date** | **\DateTime** |  | [optional]
**termination_date** | **\DateTime** |  | [optional]
**commit_rate** | **int** | Committed rate | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
