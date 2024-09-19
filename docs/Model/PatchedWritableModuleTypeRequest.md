# # PatchedWritableModuleTypeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manufacturer** | [**\OpenAPI\Client\Model\BriefManufacturerRequest**](BriefManufacturerRequest.md) |  | [optional]
**model** | **string** |  | [optional]
**part_number** | **string** | Discrete part number (optional) | [optional]
**airflow** | **string** | * &#x60;front-to-rear&#x60; - Front to rear * &#x60;rear-to-front&#x60; - Rear to front * &#x60;left-to-right&#x60; - Left to right * &#x60;right-to-left&#x60; - Right to left * &#x60;side-to-rear&#x60; - Side to rear * &#x60;passive&#x60; - Passive | [optional]
**weight** | **float** |  | [optional]
**weight_unit** | **string** | * &#x60;kg&#x60; - Kilograms * &#x60;g&#x60; - Grams * &#x60;lb&#x60; - Pounds * &#x60;oz&#x60; - Ounces | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
