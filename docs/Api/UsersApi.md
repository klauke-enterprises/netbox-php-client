# OpenAPI\Client\UsersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usersConfigRetrieve()**](UsersApi.md#usersConfigRetrieve) | **GET** /api/users/config/ |  |
| [**usersGroupsBulkDestroy()**](UsersApi.md#usersGroupsBulkDestroy) | **DELETE** /api/users/groups/ |  |
| [**usersGroupsBulkPartialUpdate()**](UsersApi.md#usersGroupsBulkPartialUpdate) | **PATCH** /api/users/groups/ |  |
| [**usersGroupsBulkUpdate()**](UsersApi.md#usersGroupsBulkUpdate) | **PUT** /api/users/groups/ |  |
| [**usersGroupsCreate()**](UsersApi.md#usersGroupsCreate) | **POST** /api/users/groups/ |  |
| [**usersGroupsDestroy()**](UsersApi.md#usersGroupsDestroy) | **DELETE** /api/users/groups/{id}/ |  |
| [**usersGroupsList()**](UsersApi.md#usersGroupsList) | **GET** /api/users/groups/ |  |
| [**usersGroupsPartialUpdate()**](UsersApi.md#usersGroupsPartialUpdate) | **PATCH** /api/users/groups/{id}/ |  |
| [**usersGroupsRetrieve()**](UsersApi.md#usersGroupsRetrieve) | **GET** /api/users/groups/{id}/ |  |
| [**usersGroupsUpdate()**](UsersApi.md#usersGroupsUpdate) | **PUT** /api/users/groups/{id}/ |  |
| [**usersPermissionsBulkDestroy()**](UsersApi.md#usersPermissionsBulkDestroy) | **DELETE** /api/users/permissions/ |  |
| [**usersPermissionsBulkPartialUpdate()**](UsersApi.md#usersPermissionsBulkPartialUpdate) | **PATCH** /api/users/permissions/ |  |
| [**usersPermissionsBulkUpdate()**](UsersApi.md#usersPermissionsBulkUpdate) | **PUT** /api/users/permissions/ |  |
| [**usersPermissionsCreate()**](UsersApi.md#usersPermissionsCreate) | **POST** /api/users/permissions/ |  |
| [**usersPermissionsDestroy()**](UsersApi.md#usersPermissionsDestroy) | **DELETE** /api/users/permissions/{id}/ |  |
| [**usersPermissionsList()**](UsersApi.md#usersPermissionsList) | **GET** /api/users/permissions/ |  |
| [**usersPermissionsPartialUpdate()**](UsersApi.md#usersPermissionsPartialUpdate) | **PATCH** /api/users/permissions/{id}/ |  |
| [**usersPermissionsRetrieve()**](UsersApi.md#usersPermissionsRetrieve) | **GET** /api/users/permissions/{id}/ |  |
| [**usersPermissionsUpdate()**](UsersApi.md#usersPermissionsUpdate) | **PUT** /api/users/permissions/{id}/ |  |
| [**usersTokensBulkDestroy()**](UsersApi.md#usersTokensBulkDestroy) | **DELETE** /api/users/tokens/ |  |
| [**usersTokensBulkPartialUpdate()**](UsersApi.md#usersTokensBulkPartialUpdate) | **PATCH** /api/users/tokens/ |  |
| [**usersTokensBulkUpdate()**](UsersApi.md#usersTokensBulkUpdate) | **PUT** /api/users/tokens/ |  |
| [**usersTokensCreate()**](UsersApi.md#usersTokensCreate) | **POST** /api/users/tokens/ |  |
| [**usersTokensDestroy()**](UsersApi.md#usersTokensDestroy) | **DELETE** /api/users/tokens/{id}/ |  |
| [**usersTokensList()**](UsersApi.md#usersTokensList) | **GET** /api/users/tokens/ |  |
| [**usersTokensPartialUpdate()**](UsersApi.md#usersTokensPartialUpdate) | **PATCH** /api/users/tokens/{id}/ |  |
| [**usersTokensProvisionCreate()**](UsersApi.md#usersTokensProvisionCreate) | **POST** /api/users/tokens/provision/ |  |
| [**usersTokensRetrieve()**](UsersApi.md#usersTokensRetrieve) | **GET** /api/users/tokens/{id}/ |  |
| [**usersTokensUpdate()**](UsersApi.md#usersTokensUpdate) | **PUT** /api/users/tokens/{id}/ |  |
| [**usersUsersBulkDestroy()**](UsersApi.md#usersUsersBulkDestroy) | **DELETE** /api/users/users/ |  |
| [**usersUsersBulkPartialUpdate()**](UsersApi.md#usersUsersBulkPartialUpdate) | **PATCH** /api/users/users/ |  |
| [**usersUsersBulkUpdate()**](UsersApi.md#usersUsersBulkUpdate) | **PUT** /api/users/users/ |  |
| [**usersUsersCreate()**](UsersApi.md#usersUsersCreate) | **POST** /api/users/users/ |  |
| [**usersUsersDestroy()**](UsersApi.md#usersUsersDestroy) | **DELETE** /api/users/users/{id}/ |  |
| [**usersUsersList()**](UsersApi.md#usersUsersList) | **GET** /api/users/users/ |  |
| [**usersUsersPartialUpdate()**](UsersApi.md#usersUsersPartialUpdate) | **PATCH** /api/users/users/{id}/ |  |
| [**usersUsersRetrieve()**](UsersApi.md#usersUsersRetrieve) | **GET** /api/users/users/{id}/ |  |
| [**usersUsersUpdate()**](UsersApi.md#usersUsersUpdate) | **PUT** /api/users/users/{id}/ |  |


## `usersConfigRetrieve()`

```php
usersConfigRetrieve(): array<string,mixed>
```



An API endpoint via which a user can update his or her own UserConfig data (but no one else's).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usersConfigRetrieve();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersConfigRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**array<string,mixed>**

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGroupsBulkDestroy()`

```php
usersGroupsBulkDestroy($group_request)
```



Delete a list of group objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_request = array(new \OpenAPI\Client\Model\GroupRequest()); // \OpenAPI\Client\Model\GroupRequest[]

try {
    $apiInstance->usersGroupsBulkDestroy($group_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGroupsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_request** | [**\OpenAPI\Client\Model\GroupRequest[]**](../Model/GroupRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGroupsBulkPartialUpdate()`

```php
usersGroupsBulkPartialUpdate($group_request): \OpenAPI\Client\Model\Group[]
```



Patch a list of group objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_request = array(new \OpenAPI\Client\Model\GroupRequest()); // \OpenAPI\Client\Model\GroupRequest[]

try {
    $result = $apiInstance->usersGroupsBulkPartialUpdate($group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGroupsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_request** | [**\OpenAPI\Client\Model\GroupRequest[]**](../Model/GroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Group[]**](../Model/Group.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGroupsBulkUpdate()`

```php
usersGroupsBulkUpdate($group_request): \OpenAPI\Client\Model\Group[]
```



Put a list of group objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_request = array(new \OpenAPI\Client\Model\GroupRequest()); // \OpenAPI\Client\Model\GroupRequest[]

try {
    $result = $apiInstance->usersGroupsBulkUpdate($group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGroupsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_request** | [**\OpenAPI\Client\Model\GroupRequest[]**](../Model/GroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Group[]**](../Model/Group.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGroupsCreate()`

```php
usersGroupsCreate($group_request): \OpenAPI\Client\Model\Group
```



Post a list of group objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_request = new \OpenAPI\Client\Model\GroupRequest(); // \OpenAPI\Client\Model\GroupRequest

try {
    $result = $apiInstance->usersGroupsCreate($group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGroupsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_request** | [**\OpenAPI\Client\Model\GroupRequest**](../Model/GroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Group**](../Model/Group.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGroupsDestroy()`

```php
usersGroupsDestroy($id)
```



Delete a group object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this group.

try {
    $apiInstance->usersGroupsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGroupsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this group. | |

### Return type

void (empty response body)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGroupsList()`

```php
usersGroupsList($description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $limit, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $notification_group_id, $notification_group_id__n, $offset, $ordering, $permission_id, $permission_id__n, $q, $user_id, $user_id__n): \OpenAPI\Client\Model\PaginatedGroupList
```



Get a list of group objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description = array('description_example'); // string[]
$description__empty = True; // bool
$description__ic = array('description__ic_example'); // string[]
$description__ie = array('description__ie_example'); // string[]
$description__iew = array('description__iew_example'); // string[]
$description__isw = array('description__isw_example'); // string[]
$description__n = array('description__n_example'); // string[]
$description__nic = array('description__nic_example'); // string[]
$description__nie = array('description__nie_example'); // string[]
$description__niew = array('description__niew_example'); // string[]
$description__nisw = array('description__nisw_example'); // string[]
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$limit = 56; // int | Number of results to return per page.
$name = array('name_example'); // string[]
$name__empty = True; // bool
$name__ic = array('name__ic_example'); // string[]
$name__ie = array('name__ie_example'); // string[]
$name__iew = array('name__iew_example'); // string[]
$name__isw = array('name__isw_example'); // string[]
$name__n = array('name__n_example'); // string[]
$name__nic = array('name__nic_example'); // string[]
$name__nie = array('name__nie_example'); // string[]
$name__niew = array('name__niew_example'); // string[]
$name__nisw = array('name__nisw_example'); // string[]
$notification_group_id = array(56); // int[] | Notification group (ID)
$notification_group_id__n = array(56); // int[] | Notification group (ID)
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$permission_id = array(56); // int[] | Permission (ID)
$permission_id__n = array(56); // int[] | Permission (ID)
$q = 'q_example'; // string | Search
$user_id = array(56); // int[] | User (ID)
$user_id__n = array(56); // int[] | User (ID)

try {
    $result = $apiInstance->usersGroupsList($description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $limit, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $notification_group_id, $notification_group_id__n, $offset, $ordering, $permission_id, $permission_id__n, $q, $user_id, $user_id__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGroupsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **description** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__empty** | **bool**|  | [optional] |
| **description__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **name** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__empty** | **bool**|  | [optional] |
| **name__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **notification_group_id** | [**int[]**](../Model/int.md)| Notification group (ID) | [optional] |
| **notification_group_id__n** | [**int[]**](../Model/int.md)| Notification group (ID) | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **permission_id** | [**int[]**](../Model/int.md)| Permission (ID) | [optional] |
| **permission_id__n** | [**int[]**](../Model/int.md)| Permission (ID) | [optional] |
| **q** | **string**| Search | [optional] |
| **user_id** | [**int[]**](../Model/int.md)| User (ID) | [optional] |
| **user_id__n** | [**int[]**](../Model/int.md)| User (ID) | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedGroupList**](../Model/PaginatedGroupList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGroupsPartialUpdate()`

```php
usersGroupsPartialUpdate($id, $patched_group_request): \OpenAPI\Client\Model\Group
```



Patch a group object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this group.
$patched_group_request = new \OpenAPI\Client\Model\PatchedGroupRequest(); // \OpenAPI\Client\Model\PatchedGroupRequest

try {
    $result = $apiInstance->usersGroupsPartialUpdate($id, $patched_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGroupsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this group. | |
| **patched_group_request** | [**\OpenAPI\Client\Model\PatchedGroupRequest**](../Model/PatchedGroupRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Group**](../Model/Group.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGroupsRetrieve()`

```php
usersGroupsRetrieve($id): \OpenAPI\Client\Model\Group
```



Get a group object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this group.

try {
    $result = $apiInstance->usersGroupsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGroupsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this group. | |

### Return type

[**\OpenAPI\Client\Model\Group**](../Model/Group.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersGroupsUpdate()`

```php
usersGroupsUpdate($id, $group_request): \OpenAPI\Client\Model\Group
```



Put a group object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this group.
$group_request = new \OpenAPI\Client\Model\GroupRequest(); // \OpenAPI\Client\Model\GroupRequest

try {
    $result = $apiInstance->usersGroupsUpdate($id, $group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this group. | |
| **group_request** | [**\OpenAPI\Client\Model\GroupRequest**](../Model/GroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Group**](../Model/Group.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersPermissionsBulkDestroy()`

```php
usersPermissionsBulkDestroy($object_permission_request)
```



Delete a list of permission objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_permission_request = array(new \OpenAPI\Client\Model\ObjectPermissionRequest()); // \OpenAPI\Client\Model\ObjectPermissionRequest[]

try {
    $apiInstance->usersPermissionsBulkDestroy($object_permission_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPermissionsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_permission_request** | [**\OpenAPI\Client\Model\ObjectPermissionRequest[]**](../Model/ObjectPermissionRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersPermissionsBulkPartialUpdate()`

```php
usersPermissionsBulkPartialUpdate($object_permission_request): \OpenAPI\Client\Model\ObjectPermission[]
```



Patch a list of permission objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_permission_request = array(new \OpenAPI\Client\Model\ObjectPermissionRequest()); // \OpenAPI\Client\Model\ObjectPermissionRequest[]

try {
    $result = $apiInstance->usersPermissionsBulkPartialUpdate($object_permission_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPermissionsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_permission_request** | [**\OpenAPI\Client\Model\ObjectPermissionRequest[]**](../Model/ObjectPermissionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ObjectPermission[]**](../Model/ObjectPermission.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersPermissionsBulkUpdate()`

```php
usersPermissionsBulkUpdate($object_permission_request): \OpenAPI\Client\Model\ObjectPermission[]
```



Put a list of permission objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_permission_request = array(new \OpenAPI\Client\Model\ObjectPermissionRequest()); // \OpenAPI\Client\Model\ObjectPermissionRequest[]

try {
    $result = $apiInstance->usersPermissionsBulkUpdate($object_permission_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPermissionsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_permission_request** | [**\OpenAPI\Client\Model\ObjectPermissionRequest[]**](../Model/ObjectPermissionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ObjectPermission[]**](../Model/ObjectPermission.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersPermissionsCreate()`

```php
usersPermissionsCreate($object_permission_request): \OpenAPI\Client\Model\ObjectPermission
```



Post a list of permission objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_permission_request = new \OpenAPI\Client\Model\ObjectPermissionRequest(); // \OpenAPI\Client\Model\ObjectPermissionRequest

try {
    $result = $apiInstance->usersPermissionsCreate($object_permission_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPermissionsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **object_permission_request** | [**\OpenAPI\Client\Model\ObjectPermissionRequest**](../Model/ObjectPermissionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ObjectPermission**](../Model/ObjectPermission.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersPermissionsDestroy()`

```php
usersPermissionsDestroy($id)
```



Delete a permission object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this permission.

try {
    $apiInstance->usersPermissionsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPermissionsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this permission. | |

### Return type

void (empty response body)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersPermissionsList()`

```php
usersPermissionsList($can_add, $can_change, $can_delete, $can_view, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $enabled, $group, $group__n, $group_id, $group_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $limit, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_type, $object_type__ic, $object_type__ie, $object_type__iew, $object_type__isw, $object_type__n, $object_type__nic, $object_type__nie, $object_type__niew, $object_type__nisw, $object_type_id, $object_type_id__n, $object_types, $object_types__n, $offset, $ordering, $q, $user, $user__n, $user_id, $user_id__n): \OpenAPI\Client\Model\PaginatedObjectPermissionList
```



Get a list of permission objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$can_add = True; // bool
$can_change = True; // bool
$can_delete = True; // bool
$can_view = True; // bool
$description = array('description_example'); // string[]
$description__empty = True; // bool
$description__ic = array('description__ic_example'); // string[]
$description__ie = array('description__ie_example'); // string[]
$description__iew = array('description__iew_example'); // string[]
$description__isw = array('description__isw_example'); // string[]
$description__n = array('description__n_example'); // string[]
$description__nic = array('description__nic_example'); // string[]
$description__nie = array('description__nie_example'); // string[]
$description__niew = array('description__niew_example'); // string[]
$description__nisw = array('description__nisw_example'); // string[]
$enabled = True; // bool
$group = array('group_example'); // string[] | Group (name)
$group__n = array('group__n_example'); // string[] | Group (name)
$group_id = array(56); // int[] | Group
$group_id__n = array(56); // int[] | Group
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$limit = 56; // int | Number of results to return per page.
$name = array('name_example'); // string[]
$name__empty = True; // bool
$name__ic = array('name__ic_example'); // string[]
$name__ie = array('name__ie_example'); // string[]
$name__iew = array('name__iew_example'); // string[]
$name__isw = array('name__isw_example'); // string[]
$name__n = array('name__n_example'); // string[]
$name__nic = array('name__nic_example'); // string[]
$name__nie = array('name__nie_example'); // string[]
$name__niew = array('name__niew_example'); // string[]
$name__nisw = array('name__nisw_example'); // string[]
$object_type = 'object_type_example'; // string
$object_type__ic = 'object_type__ic_example'; // string
$object_type__ie = 'object_type__ie_example'; // string
$object_type__iew = 'object_type__iew_example'; // string
$object_type__isw = 'object_type__isw_example'; // string
$object_type__n = 'object_type__n_example'; // string
$object_type__nic = 'object_type__nic_example'; // string
$object_type__nie = 'object_type__nie_example'; // string
$object_type__niew = 'object_type__niew_example'; // string
$object_type__nisw = 'object_type__nisw_example'; // string
$object_type_id = array(56); // int[]
$object_type_id__n = array(56); // int[]
$object_types = array(56); // int[]
$object_types__n = array(56); // int[]
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$user = array('user_example'); // string[] | User (name)
$user__n = array('user__n_example'); // string[] | User (name)
$user_id = array(56); // int[] | User
$user_id__n = array(56); // int[] | User

try {
    $result = $apiInstance->usersPermissionsList($can_add, $can_change, $can_delete, $can_view, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $enabled, $group, $group__n, $group_id, $group_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $limit, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_type, $object_type__ic, $object_type__ie, $object_type__iew, $object_type__isw, $object_type__n, $object_type__nic, $object_type__nie, $object_type__niew, $object_type__nisw, $object_type_id, $object_type_id__n, $object_types, $object_types__n, $offset, $ordering, $q, $user, $user__n, $user_id, $user_id__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPermissionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **can_add** | **bool**|  | [optional] |
| **can_change** | **bool**|  | [optional] |
| **can_delete** | **bool**|  | [optional] |
| **can_view** | **bool**|  | [optional] |
| **description** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__empty** | **bool**|  | [optional] |
| **description__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **enabled** | **bool**|  | [optional] |
| **group** | [**string[]**](../Model/string.md)| Group (name) | [optional] |
| **group__n** | [**string[]**](../Model/string.md)| Group (name) | [optional] |
| **group_id** | [**int[]**](../Model/int.md)| Group | [optional] |
| **group_id__n** | [**int[]**](../Model/int.md)| Group | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **name** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__empty** | **bool**|  | [optional] |
| **name__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **name__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **object_type** | **string**|  | [optional] |
| **object_type__ic** | **string**|  | [optional] |
| **object_type__ie** | **string**|  | [optional] |
| **object_type__iew** | **string**|  | [optional] |
| **object_type__isw** | **string**|  | [optional] |
| **object_type__n** | **string**|  | [optional] |
| **object_type__nic** | **string**|  | [optional] |
| **object_type__nie** | **string**|  | [optional] |
| **object_type__niew** | **string**|  | [optional] |
| **object_type__nisw** | **string**|  | [optional] |
| **object_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_types** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_types__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **user** | [**string[]**](../Model/string.md)| User (name) | [optional] |
| **user__n** | [**string[]**](../Model/string.md)| User (name) | [optional] |
| **user_id** | [**int[]**](../Model/int.md)| User | [optional] |
| **user_id__n** | [**int[]**](../Model/int.md)| User | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedObjectPermissionList**](../Model/PaginatedObjectPermissionList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersPermissionsPartialUpdate()`

```php
usersPermissionsPartialUpdate($id, $patched_object_permission_request): \OpenAPI\Client\Model\ObjectPermission
```



Patch a permission object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this permission.
$patched_object_permission_request = new \OpenAPI\Client\Model\PatchedObjectPermissionRequest(); // \OpenAPI\Client\Model\PatchedObjectPermissionRequest

try {
    $result = $apiInstance->usersPermissionsPartialUpdate($id, $patched_object_permission_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPermissionsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this permission. | |
| **patched_object_permission_request** | [**\OpenAPI\Client\Model\PatchedObjectPermissionRequest**](../Model/PatchedObjectPermissionRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ObjectPermission**](../Model/ObjectPermission.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersPermissionsRetrieve()`

```php
usersPermissionsRetrieve($id): \OpenAPI\Client\Model\ObjectPermission
```



Get a permission object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this permission.

try {
    $result = $apiInstance->usersPermissionsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPermissionsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this permission. | |

### Return type

[**\OpenAPI\Client\Model\ObjectPermission**](../Model/ObjectPermission.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersPermissionsUpdate()`

```php
usersPermissionsUpdate($id, $object_permission_request): \OpenAPI\Client\Model\ObjectPermission
```



Put a permission object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this permission.
$object_permission_request = new \OpenAPI\Client\Model\ObjectPermissionRequest(); // \OpenAPI\Client\Model\ObjectPermissionRequest

try {
    $result = $apiInstance->usersPermissionsUpdate($id, $object_permission_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPermissionsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this permission. | |
| **object_permission_request** | [**\OpenAPI\Client\Model\ObjectPermissionRequest**](../Model/ObjectPermissionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ObjectPermission**](../Model/ObjectPermission.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTokensBulkDestroy()`

```php
usersTokensBulkDestroy($token_request)
```



Delete a list of token objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_request = array(new \OpenAPI\Client\Model\TokenRequest()); // \OpenAPI\Client\Model\TokenRequest[]

try {
    $apiInstance->usersTokensBulkDestroy($token_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersTokensBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_request** | [**\OpenAPI\Client\Model\TokenRequest[]**](../Model/TokenRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTokensBulkPartialUpdate()`

```php
usersTokensBulkPartialUpdate($token_request): \OpenAPI\Client\Model\Token[]
```



Patch a list of token objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_request = array(new \OpenAPI\Client\Model\TokenRequest()); // \OpenAPI\Client\Model\TokenRequest[]

try {
    $result = $apiInstance->usersTokensBulkPartialUpdate($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersTokensBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_request** | [**\OpenAPI\Client\Model\TokenRequest[]**](../Model/TokenRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Token[]**](../Model/Token.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTokensBulkUpdate()`

```php
usersTokensBulkUpdate($token_request): \OpenAPI\Client\Model\Token[]
```



Put a list of token objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_request = array(new \OpenAPI\Client\Model\TokenRequest()); // \OpenAPI\Client\Model\TokenRequest[]

try {
    $result = $apiInstance->usersTokensBulkUpdate($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersTokensBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_request** | [**\OpenAPI\Client\Model\TokenRequest[]**](../Model/TokenRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Token[]**](../Model/Token.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTokensCreate()`

```php
usersTokensCreate($token_request): \OpenAPI\Client\Model\Token
```



Post a list of token objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_request = new \OpenAPI\Client\Model\TokenRequest(); // \OpenAPI\Client\Model\TokenRequest

try {
    $result = $apiInstance->usersTokensCreate($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersTokensCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_request** | [**\OpenAPI\Client\Model\TokenRequest**](../Model/TokenRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Token**](../Model/Token.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTokensDestroy()`

```php
usersTokensDestroy($id)
```



Delete a token object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this token.

try {
    $apiInstance->usersTokensDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersTokensDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this token. | |

### Return type

void (empty response body)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTokensList()`

```php
usersTokensList($created, $created__gte, $created__lte, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $expires, $expires__gte, $expires__lte, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $key, $key__empty, $key__ic, $key__ie, $key__iew, $key__isw, $key__n, $key__nic, $key__nie, $key__niew, $key__nisw, $last_used, $last_used__empty, $last_used__gt, $last_used__gte, $last_used__lt, $last_used__lte, $last_used__n, $limit, $offset, $ordering, $q, $user, $user__n, $user_id, $user_id__n, $write_enabled): \OpenAPI\Client\Model\PaginatedTokenList
```



Get a list of token objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$description = array('description_example'); // string[]
$description__empty = True; // bool
$description__ic = array('description__ic_example'); // string[]
$description__ie = array('description__ie_example'); // string[]
$description__iew = array('description__iew_example'); // string[]
$description__isw = array('description__isw_example'); // string[]
$description__n = array('description__n_example'); // string[]
$description__nic = array('description__nic_example'); // string[]
$description__nie = array('description__nie_example'); // string[]
$description__niew = array('description__niew_example'); // string[]
$description__nisw = array('description__nisw_example'); // string[]
$expires = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$expires__gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$expires__lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$key = array('key_example'); // string[]
$key__empty = True; // bool
$key__ic = array('key__ic_example'); // string[]
$key__ie = array('key__ie_example'); // string[]
$key__iew = array('key__iew_example'); // string[]
$key__isw = array('key__isw_example'); // string[]
$key__n = array('key__n_example'); // string[]
$key__nic = array('key__nic_example'); // string[]
$key__nie = array('key__nie_example'); // string[]
$key__niew = array('key__niew_example'); // string[]
$key__nisw = array('key__nisw_example'); // string[]
$last_used = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_used__empty = True; // bool
$last_used__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_used__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_used__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_used__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_used__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$limit = 56; // int | Number of results to return per page.
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$user = array('user_example'); // string[] | User (name)
$user__n = array('user__n_example'); // string[] | User (name)
$user_id = array(56); // int[] | User
$user_id__n = array(56); // int[] | User
$write_enabled = True; // bool

try {
    $result = $apiInstance->usersTokensList($created, $created__gte, $created__lte, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $expires, $expires__gte, $expires__lte, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $key, $key__empty, $key__ic, $key__ie, $key__iew, $key__isw, $key__n, $key__nic, $key__nie, $key__niew, $key__nisw, $last_used, $last_used__empty, $last_used__gt, $last_used__gte, $last_used__lt, $last_used__lte, $last_used__n, $limit, $offset, $ordering, $q, $user, $user__n, $user_id, $user_id__n, $write_enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersTokensList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **created** | **\DateTime**|  | [optional] |
| **created__gte** | **\DateTime**|  | [optional] |
| **created__lte** | **\DateTime**|  | [optional] |
| **description** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__empty** | **bool**|  | [optional] |
| **description__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **description__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **expires** | **\DateTime**|  | [optional] |
| **expires__gte** | **\DateTime**|  | [optional] |
| **expires__lte** | **\DateTime**|  | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **key** | [**string[]**](../Model/string.md)|  | [optional] |
| **key__empty** | **bool**|  | [optional] |
| **key__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **key__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **key__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **key__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **key__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **key__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **key__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **key__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **key__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_used** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_used__empty** | **bool**|  | [optional] |
| **last_used__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_used__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_used__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_used__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_used__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **user** | [**string[]**](../Model/string.md)| User (name) | [optional] |
| **user__n** | [**string[]**](../Model/string.md)| User (name) | [optional] |
| **user_id** | [**int[]**](../Model/int.md)| User | [optional] |
| **user_id__n** | [**int[]**](../Model/int.md)| User | [optional] |
| **write_enabled** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedTokenList**](../Model/PaginatedTokenList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTokensPartialUpdate()`

```php
usersTokensPartialUpdate($id, $patched_token_request): \OpenAPI\Client\Model\Token
```



Patch a token object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this token.
$patched_token_request = new \OpenAPI\Client\Model\PatchedTokenRequest(); // \OpenAPI\Client\Model\PatchedTokenRequest

try {
    $result = $apiInstance->usersTokensPartialUpdate($id, $patched_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersTokensPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this token. | |
| **patched_token_request** | [**\OpenAPI\Client\Model\PatchedTokenRequest**](../Model/PatchedTokenRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Token**](../Model/Token.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTokensProvisionCreate()`

```php
usersTokensProvisionCreate($token_provision_request): \OpenAPI\Client\Model\TokenProvision
```



Non-authenticated REST API endpoint via which a user may create a Token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_provision_request = new \OpenAPI\Client\Model\TokenProvisionRequest(); // \OpenAPI\Client\Model\TokenProvisionRequest

try {
    $result = $apiInstance->usersTokensProvisionCreate($token_provision_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersTokensProvisionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_provision_request** | [**\OpenAPI\Client\Model\TokenProvisionRequest**](../Model/TokenProvisionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TokenProvision**](../Model/TokenProvision.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTokensRetrieve()`

```php
usersTokensRetrieve($id): \OpenAPI\Client\Model\Token
```



Get a token object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this token.

try {
    $result = $apiInstance->usersTokensRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersTokensRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this token. | |

### Return type

[**\OpenAPI\Client\Model\Token**](../Model/Token.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTokensUpdate()`

```php
usersTokensUpdate($id, $token_request): \OpenAPI\Client\Model\Token
```



Put a token object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this token.
$token_request = new \OpenAPI\Client\Model\TokenRequest(); // \OpenAPI\Client\Model\TokenRequest

try {
    $result = $apiInstance->usersTokensUpdate($id, $token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersTokensUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this token. | |
| **token_request** | [**\OpenAPI\Client\Model\TokenRequest**](../Model/TokenRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Token**](../Model/Token.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUsersBulkDestroy()`

```php
usersUsersBulkDestroy($user_request)
```



Delete a list of user objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_request = array(new \OpenAPI\Client\Model\UserRequest()); // \OpenAPI\Client\Model\UserRequest[]

try {
    $apiInstance->usersUsersBulkDestroy($user_request);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUsersBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_request** | [**\OpenAPI\Client\Model\UserRequest[]**](../Model/UserRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUsersBulkPartialUpdate()`

```php
usersUsersBulkPartialUpdate($user_request): \OpenAPI\Client\Model\User[]
```



Patch a list of user objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_request = array(new \OpenAPI\Client\Model\UserRequest()); // \OpenAPI\Client\Model\UserRequest[]

try {
    $result = $apiInstance->usersUsersBulkPartialUpdate($user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUsersBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_request** | [**\OpenAPI\Client\Model\UserRequest[]**](../Model/UserRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUsersBulkUpdate()`

```php
usersUsersBulkUpdate($user_request): \OpenAPI\Client\Model\User[]
```



Put a list of user objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_request = array(new \OpenAPI\Client\Model\UserRequest()); // \OpenAPI\Client\Model\UserRequest[]

try {
    $result = $apiInstance->usersUsersBulkUpdate($user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUsersBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_request** | [**\OpenAPI\Client\Model\UserRequest[]**](../Model/UserRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUsersCreate()`

```php
usersUsersCreate($user_request): \OpenAPI\Client\Model\User
```



Post a list of user objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_request = new \OpenAPI\Client\Model\UserRequest(); // \OpenAPI\Client\Model\UserRequest

try {
    $result = $apiInstance->usersUsersCreate($user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUsersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_request** | [**\OpenAPI\Client\Model\UserRequest**](../Model/UserRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUsersDestroy()`

```php
usersUsersDestroy($id)
```



Delete a user object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this user.

try {
    $apiInstance->usersUsersDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUsersDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this user. | |

### Return type

void (empty response body)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUsersList()`

```php
usersUsersList($date_joined, $date_joined__empty, $date_joined__gt, $date_joined__gte, $date_joined__lt, $date_joined__lte, $date_joined__n, $email, $email__empty, $email__ic, $email__ie, $email__iew, $email__isw, $email__n, $email__nic, $email__nie, $email__niew, $email__nisw, $first_name, $first_name__empty, $first_name__ic, $first_name__ie, $first_name__iew, $first_name__isw, $first_name__n, $first_name__nic, $first_name__nie, $first_name__niew, $first_name__nisw, $group, $group__n, $group_id, $group_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $is_active, $is_staff, $is_superuser, $last_login, $last_login__empty, $last_login__gt, $last_login__gte, $last_login__lt, $last_login__lte, $last_login__n, $last_name, $last_name__empty, $last_name__ic, $last_name__ie, $last_name__iew, $last_name__isw, $last_name__n, $last_name__nic, $last_name__nie, $last_name__niew, $last_name__nisw, $limit, $notification_group_id, $notification_group_id__n, $offset, $ordering, $permission_id, $permission_id__n, $q, $username, $username__empty, $username__ic, $username__ie, $username__iew, $username__isw, $username__n, $username__nic, $username__nie, $username__niew, $username__nisw): \OpenAPI\Client\Model\PaginatedUserList
```



Get a list of user objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_joined = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$date_joined__empty = True; // bool
$date_joined__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$date_joined__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$date_joined__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$date_joined__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$date_joined__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$email = array('email_example'); // string[]
$email__empty = True; // bool
$email__ic = array('email__ic_example'); // string[]
$email__ie = array('email__ie_example'); // string[]
$email__iew = array('email__iew_example'); // string[]
$email__isw = array('email__isw_example'); // string[]
$email__n = array('email__n_example'); // string[]
$email__nic = array('email__nic_example'); // string[]
$email__nie = array('email__nie_example'); // string[]
$email__niew = array('email__niew_example'); // string[]
$email__nisw = array('email__nisw_example'); // string[]
$first_name = array('first_name_example'); // string[]
$first_name__empty = True; // bool
$first_name__ic = array('first_name__ic_example'); // string[]
$first_name__ie = array('first_name__ie_example'); // string[]
$first_name__iew = array('first_name__iew_example'); // string[]
$first_name__isw = array('first_name__isw_example'); // string[]
$first_name__n = array('first_name__n_example'); // string[]
$first_name__nic = array('first_name__nic_example'); // string[]
$first_name__nie = array('first_name__nie_example'); // string[]
$first_name__niew = array('first_name__niew_example'); // string[]
$first_name__nisw = array('first_name__nisw_example'); // string[]
$group = array('group_example'); // string[] | Group (name)
$group__n = array('group__n_example'); // string[] | Group (name)
$group_id = array(56); // int[] | Group
$group_id__n = array(56); // int[] | Group
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$is_active = True; // bool
$is_staff = True; // bool
$is_superuser = True; // bool
$last_login = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_login__empty = True; // bool
$last_login__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_login__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_login__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_login__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_login__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_name = array('last_name_example'); // string[]
$last_name__empty = True; // bool
$last_name__ic = array('last_name__ic_example'); // string[]
$last_name__ie = array('last_name__ie_example'); // string[]
$last_name__iew = array('last_name__iew_example'); // string[]
$last_name__isw = array('last_name__isw_example'); // string[]
$last_name__n = array('last_name__n_example'); // string[]
$last_name__nic = array('last_name__nic_example'); // string[]
$last_name__nie = array('last_name__nie_example'); // string[]
$last_name__niew = array('last_name__niew_example'); // string[]
$last_name__nisw = array('last_name__nisw_example'); // string[]
$limit = 56; // int | Number of results to return per page.
$notification_group_id = array(56); // int[] | Notification group (ID)
$notification_group_id__n = array(56); // int[] | Notification group (ID)
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$permission_id = array(56); // int[] | Permission (ID)
$permission_id__n = array(56); // int[] | Permission (ID)
$q = 'q_example'; // string | Search
$username = array('username_example'); // string[]
$username__empty = True; // bool
$username__ic = array('username__ic_example'); // string[]
$username__ie = array('username__ie_example'); // string[]
$username__iew = array('username__iew_example'); // string[]
$username__isw = array('username__isw_example'); // string[]
$username__n = array('username__n_example'); // string[]
$username__nic = array('username__nic_example'); // string[]
$username__nie = array('username__nie_example'); // string[]
$username__niew = array('username__niew_example'); // string[]
$username__nisw = array('username__nisw_example'); // string[]

try {
    $result = $apiInstance->usersUsersList($date_joined, $date_joined__empty, $date_joined__gt, $date_joined__gte, $date_joined__lt, $date_joined__lte, $date_joined__n, $email, $email__empty, $email__ic, $email__ie, $email__iew, $email__isw, $email__n, $email__nic, $email__nie, $email__niew, $email__nisw, $first_name, $first_name__empty, $first_name__ic, $first_name__ie, $first_name__iew, $first_name__isw, $first_name__n, $first_name__nic, $first_name__nie, $first_name__niew, $first_name__nisw, $group, $group__n, $group_id, $group_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $is_active, $is_staff, $is_superuser, $last_login, $last_login__empty, $last_login__gt, $last_login__gte, $last_login__lt, $last_login__lte, $last_login__n, $last_name, $last_name__empty, $last_name__ic, $last_name__ie, $last_name__iew, $last_name__isw, $last_name__n, $last_name__nic, $last_name__nie, $last_name__niew, $last_name__nisw, $limit, $notification_group_id, $notification_group_id__n, $offset, $ordering, $permission_id, $permission_id__n, $q, $username, $username__empty, $username__ic, $username__ie, $username__iew, $username__isw, $username__n, $username__nic, $username__nie, $username__niew, $username__nisw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUsersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_joined** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **date_joined__empty** | **bool**|  | [optional] |
| **date_joined__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **date_joined__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **date_joined__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **date_joined__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **date_joined__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **email** | [**string[]**](../Model/string.md)|  | [optional] |
| **email__empty** | **bool**|  | [optional] |
| **email__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **email__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **email__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **email__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **email__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **email__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **email__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **email__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **email__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **first_name** | [**string[]**](../Model/string.md)|  | [optional] |
| **first_name__empty** | **bool**|  | [optional] |
| **first_name__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **first_name__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **first_name__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **first_name__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **first_name__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **first_name__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **first_name__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **first_name__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **first_name__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **group** | [**string[]**](../Model/string.md)| Group (name) | [optional] |
| **group__n** | [**string[]**](../Model/string.md)| Group (name) | [optional] |
| **group_id** | [**int[]**](../Model/int.md)| Group | [optional] |
| **group_id__n** | [**int[]**](../Model/int.md)| Group | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **is_active** | **bool**|  | [optional] |
| **is_staff** | **bool**|  | [optional] |
| **is_superuser** | **bool**|  | [optional] |
| **last_login** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_login__empty** | **bool**|  | [optional] |
| **last_login__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_login__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_login__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_login__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_login__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_name** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name__empty** | **bool**|  | [optional] |
| **last_name__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **last_name__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **notification_group_id** | [**int[]**](../Model/int.md)| Notification group (ID) | [optional] |
| **notification_group_id__n** | [**int[]**](../Model/int.md)| Notification group (ID) | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **permission_id** | [**int[]**](../Model/int.md)| Permission (ID) | [optional] |
| **permission_id__n** | [**int[]**](../Model/int.md)| Permission (ID) | [optional] |
| **q** | **string**| Search | [optional] |
| **username** | [**string[]**](../Model/string.md)|  | [optional] |
| **username__empty** | **bool**|  | [optional] |
| **username__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **username__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **username__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **username__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **username__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **username__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **username__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **username__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **username__nisw** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedUserList**](../Model/PaginatedUserList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUsersPartialUpdate()`

```php
usersUsersPartialUpdate($id, $patched_user_request): \OpenAPI\Client\Model\User
```



Patch a user object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this user.
$patched_user_request = new \OpenAPI\Client\Model\PatchedUserRequest(); // \OpenAPI\Client\Model\PatchedUserRequest

try {
    $result = $apiInstance->usersUsersPartialUpdate($id, $patched_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUsersPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this user. | |
| **patched_user_request** | [**\OpenAPI\Client\Model\PatchedUserRequest**](../Model/PatchedUserRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUsersRetrieve()`

```php
usersUsersRetrieve($id): \OpenAPI\Client\Model\User
```



Get a user object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this user.

try {
    $result = $apiInstance->usersUsersRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUsersRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this user. | |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersUsersUpdate()`

```php
usersUsersUpdate($id, $user_request): \OpenAPI\Client\Model\User
```



Put a user object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: cookieAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('sessionid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sessionid', 'Bearer');

// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this user.
$user_request = new \OpenAPI\Client\Model\UserRequest(); // \OpenAPI\Client\Model\UserRequest

try {
    $result = $apiInstance->usersUsersUpdate($id, $user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersUsersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this user. | |
| **user_request** | [**\OpenAPI\Client\Model\UserRequest**](../Model/UserRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
