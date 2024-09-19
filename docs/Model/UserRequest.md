# # UserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**username** | **string** | Required. 150 characters or fewer. Letters, digits and @/./+/-/_ only. |
**password** | **string** |  |
**first_name** | **string** |  | [optional]
**last_name** | **string** |  | [optional]
**email** | **string** |  | [optional]
**is_staff** | **bool** | Designates whether the user can log into this admin site. | [optional]
**is_active** | **bool** | Designates whether this user should be treated as active. Unselect this instead of deleting accounts. | [optional]
**date_joined** | **\DateTime** |  | [optional]
**last_login** | **\DateTime** |  | [optional]
**groups** | **int[]** |  | [optional]
**permissions** | **int[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
