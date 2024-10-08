# # PatchedWritableRackRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**facility_id** | **string** |  | [optional]
**site** | [**\OpenAPI\Client\Model\SiteRequest**](SiteRequest.md) |  | [optional]
**location** | [**\OpenAPI\Client\Model\LocationRequest**](LocationRequest.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\TenantRequest**](TenantRequest.md) |  | [optional]
**status** | **string** | * &#x60;reserved&#x60; - Reserved * &#x60;available&#x60; - Available * &#x60;planned&#x60; - Planned * &#x60;active&#x60; - Active * &#x60;deprecated&#x60; - Deprecated | [optional]
**role** | [**\OpenAPI\Client\Model\RackRoleRequest**](RackRoleRequest.md) |  | [optional]
**serial** | **string** |  | [optional]
**asset_tag** | **string** | A unique tag used to identify this rack | [optional]
**type** | **string** | * &#x60;2-post-frame&#x60; - 2-post frame * &#x60;4-post-frame&#x60; - 4-post frame * &#x60;4-post-cabinet&#x60; - 4-post cabinet * &#x60;wall-frame&#x60; - Wall-mounted frame * &#x60;wall-frame-vertical&#x60; - Wall-mounted frame (vertical) * &#x60;wall-cabinet&#x60; - Wall-mounted cabinet * &#x60;wall-cabinet-vertical&#x60; - Wall-mounted cabinet (vertical) | [optional]
**width** | **int** | Rail-to-rail width  * &#x60;10&#x60; - 10 inches * &#x60;19&#x60; - 19 inches * &#x60;21&#x60; - 21 inches * &#x60;23&#x60; - 23 inches | [optional]
**u_height** | **int** | Height in rack units | [optional]
**starting_unit** | **int** | Starting unit for rack | [optional]
**weight** | **float** |  | [optional]
**max_weight** | **int** | Maximum load capacity for the rack | [optional]
**weight_unit** | **string** | * &#x60;kg&#x60; - Kilograms * &#x60;g&#x60; - Grams * &#x60;lb&#x60; - Pounds * &#x60;oz&#x60; - Ounces | [optional]
**desc_units** | **bool** | Units are numbered top-to-bottom | [optional]
**outer_width** | **int** | Outer dimension of rack (width) | [optional]
**outer_depth** | **int** | Outer dimension of rack (depth) | [optional]
**outer_unit** | **string** | * &#x60;mm&#x60; - Millimeters * &#x60;in&#x60; - Inches | [optional]
**mounting_depth** | **int** | Maximum depth of a mounted device, in millimeters. For four-post racks, this is the distance between the front and rear rails. | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
