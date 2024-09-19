# # Cable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**type** | **string** | * &#x60;cat3&#x60; - CAT3 * &#x60;cat5&#x60; - CAT5 * &#x60;cat5e&#x60; - CAT5e * &#x60;cat6&#x60; - CAT6 * &#x60;cat6a&#x60; - CAT6a * &#x60;cat7&#x60; - CAT7 * &#x60;cat7a&#x60; - CAT7a * &#x60;cat8&#x60; - CAT8 * &#x60;dac-active&#x60; - Direct Attach Copper (Active) * &#x60;dac-passive&#x60; - Direct Attach Copper (Passive) * &#x60;mrj21-trunk&#x60; - MRJ21 Trunk * &#x60;coaxial&#x60; - Coaxial * &#x60;mmf&#x60; - Multimode Fiber * &#x60;mmf-om1&#x60; - Multimode Fiber (OM1) * &#x60;mmf-om2&#x60; - Multimode Fiber (OM2) * &#x60;mmf-om3&#x60; - Multimode Fiber (OM3) * &#x60;mmf-om4&#x60; - Multimode Fiber (OM4) * &#x60;mmf-om5&#x60; - Multimode Fiber (OM5) * &#x60;smf&#x60; - Singlemode Fiber * &#x60;smf-os1&#x60; - Singlemode Fiber (OS1) * &#x60;smf-os2&#x60; - Singlemode Fiber (OS2) * &#x60;aoc&#x60; - Active Optical Cabling (AOC) * &#x60;usb&#x60; - USB * &#x60;power&#x60; - Power | [optional]
**a_terminations** | [**\OpenAPI\Client\Model\GenericObject[]**](GenericObject.md) |  | [optional]
**b_terminations** | [**\OpenAPI\Client\Model\GenericObject[]**](GenericObject.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\CableStatus**](CableStatus.md) |  | [optional]
**tenant** | [**\OpenAPI\Client\Model\BriefTenant**](BriefTenant.md) |  | [optional]
**label** | **string** |  | [optional]
**color** | **string** |  | [optional]
**length** | **float** |  | [optional]
**length_unit** | [**\OpenAPI\Client\Model\CableLengthUnit**](CableLengthUnit.md) |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
