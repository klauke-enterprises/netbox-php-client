# # PatchedWritableDeviceTypeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manufacturer** | [**\OpenAPI\Client\Model\BriefManufacturerRequest**](BriefManufacturerRequest.md) |  | [optional]
**default_platform** | [**\OpenAPI\Client\Model\BriefPlatformRequest**](BriefPlatformRequest.md) |  | [optional]
**model** | **string** |  | [optional]
**slug** | **string** |  | [optional]
**part_number** | **string** | Discrete part number (optional) | [optional]
**u_height** | **float** |  | [optional] [default to 1.0]
**exclude_from_utilization** | **bool** | Devices of this type are excluded when calculating rack utilization. | [optional]
**is_full_depth** | **bool** | Device consumes both front and rear rack faces. | [optional]
**subdevice_role** | **string** | Parent devices house child devices in device bays. Leave blank if this device type is neither a parent nor a child.  * &#x60;parent&#x60; - Parent * &#x60;child&#x60; - Child | [optional]
**airflow** | **string** | * &#x60;front-to-rear&#x60; - Front to rear * &#x60;rear-to-front&#x60; - Rear to front * &#x60;left-to-right&#x60; - Left to right * &#x60;right-to-left&#x60; - Right to left * &#x60;side-to-rear&#x60; - Side to rear * &#x60;passive&#x60; - Passive * &#x60;mixed&#x60; - Mixed | [optional]
**weight** | **float** |  | [optional]
**weight_unit** | **string** | * &#x60;kg&#x60; - Kilograms * &#x60;g&#x60; - Grams * &#x60;lb&#x60; - Pounds * &#x60;oz&#x60; - Ounces | [optional]
**front_image** | **\SplFileObject** |  | [optional]
**rear_image** | **\SplFileObject** |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
