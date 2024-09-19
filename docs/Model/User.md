# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**username** | **string** | Required. 150 characters or fewer. Letters, digits and @/./+/-/_ only. |
**first_name** | **string** |  | [optional]
**last_name** | **string** |  | [optional]
**email** | **string** |  | [optional]
**is_staff** | **bool** | Designates whether the user can log into this admin site. | [optional]
**is_active** | **bool** | Designates whether this user should be treated as active. Unselect this instead of deleting accounts. | [optional]
**date_joined** | **\DateTime** |  | [optional]
**last_login** | **\DateTime** |  | [optional]
**groups** | [**\OpenAPI\Client\Model\Group[]**](Group.md) |  | [optional]
**permissions** | [**\OpenAPI\Client\Model\ObjectPermission[]**](ObjectPermission.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
