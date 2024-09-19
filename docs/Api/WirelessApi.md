# OpenAPI\Client\WirelessApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**wirelessWirelessLanGroupsBulkDestroy()**](WirelessApi.md#wirelessWirelessLanGroupsBulkDestroy) | **DELETE** /api/wireless/wireless-lan-groups/ |  |
| [**wirelessWirelessLanGroupsBulkPartialUpdate()**](WirelessApi.md#wirelessWirelessLanGroupsBulkPartialUpdate) | **PATCH** /api/wireless/wireless-lan-groups/ |  |
| [**wirelessWirelessLanGroupsBulkUpdate()**](WirelessApi.md#wirelessWirelessLanGroupsBulkUpdate) | **PUT** /api/wireless/wireless-lan-groups/ |  |
| [**wirelessWirelessLanGroupsCreate()**](WirelessApi.md#wirelessWirelessLanGroupsCreate) | **POST** /api/wireless/wireless-lan-groups/ |  |
| [**wirelessWirelessLanGroupsDestroy()**](WirelessApi.md#wirelessWirelessLanGroupsDestroy) | **DELETE** /api/wireless/wireless-lan-groups/{id}/ |  |
| [**wirelessWirelessLanGroupsList()**](WirelessApi.md#wirelessWirelessLanGroupsList) | **GET** /api/wireless/wireless-lan-groups/ |  |
| [**wirelessWirelessLanGroupsPartialUpdate()**](WirelessApi.md#wirelessWirelessLanGroupsPartialUpdate) | **PATCH** /api/wireless/wireless-lan-groups/{id}/ |  |
| [**wirelessWirelessLanGroupsRetrieve()**](WirelessApi.md#wirelessWirelessLanGroupsRetrieve) | **GET** /api/wireless/wireless-lan-groups/{id}/ |  |
| [**wirelessWirelessLanGroupsUpdate()**](WirelessApi.md#wirelessWirelessLanGroupsUpdate) | **PUT** /api/wireless/wireless-lan-groups/{id}/ |  |
| [**wirelessWirelessLansBulkDestroy()**](WirelessApi.md#wirelessWirelessLansBulkDestroy) | **DELETE** /api/wireless/wireless-lans/ |  |
| [**wirelessWirelessLansBulkPartialUpdate()**](WirelessApi.md#wirelessWirelessLansBulkPartialUpdate) | **PATCH** /api/wireless/wireless-lans/ |  |
| [**wirelessWirelessLansBulkUpdate()**](WirelessApi.md#wirelessWirelessLansBulkUpdate) | **PUT** /api/wireless/wireless-lans/ |  |
| [**wirelessWirelessLansCreate()**](WirelessApi.md#wirelessWirelessLansCreate) | **POST** /api/wireless/wireless-lans/ |  |
| [**wirelessWirelessLansDestroy()**](WirelessApi.md#wirelessWirelessLansDestroy) | **DELETE** /api/wireless/wireless-lans/{id}/ |  |
| [**wirelessWirelessLansList()**](WirelessApi.md#wirelessWirelessLansList) | **GET** /api/wireless/wireless-lans/ |  |
| [**wirelessWirelessLansPartialUpdate()**](WirelessApi.md#wirelessWirelessLansPartialUpdate) | **PATCH** /api/wireless/wireless-lans/{id}/ |  |
| [**wirelessWirelessLansRetrieve()**](WirelessApi.md#wirelessWirelessLansRetrieve) | **GET** /api/wireless/wireless-lans/{id}/ |  |
| [**wirelessWirelessLansUpdate()**](WirelessApi.md#wirelessWirelessLansUpdate) | **PUT** /api/wireless/wireless-lans/{id}/ |  |
| [**wirelessWirelessLinksBulkDestroy()**](WirelessApi.md#wirelessWirelessLinksBulkDestroy) | **DELETE** /api/wireless/wireless-links/ |  |
| [**wirelessWirelessLinksBulkPartialUpdate()**](WirelessApi.md#wirelessWirelessLinksBulkPartialUpdate) | **PATCH** /api/wireless/wireless-links/ |  |
| [**wirelessWirelessLinksBulkUpdate()**](WirelessApi.md#wirelessWirelessLinksBulkUpdate) | **PUT** /api/wireless/wireless-links/ |  |
| [**wirelessWirelessLinksCreate()**](WirelessApi.md#wirelessWirelessLinksCreate) | **POST** /api/wireless/wireless-links/ |  |
| [**wirelessWirelessLinksDestroy()**](WirelessApi.md#wirelessWirelessLinksDestroy) | **DELETE** /api/wireless/wireless-links/{id}/ |  |
| [**wirelessWirelessLinksList()**](WirelessApi.md#wirelessWirelessLinksList) | **GET** /api/wireless/wireless-links/ |  |
| [**wirelessWirelessLinksPartialUpdate()**](WirelessApi.md#wirelessWirelessLinksPartialUpdate) | **PATCH** /api/wireless/wireless-links/{id}/ |  |
| [**wirelessWirelessLinksRetrieve()**](WirelessApi.md#wirelessWirelessLinksRetrieve) | **GET** /api/wireless/wireless-links/{id}/ |  |
| [**wirelessWirelessLinksUpdate()**](WirelessApi.md#wirelessWirelessLinksUpdate) | **PUT** /api/wireless/wireless-links/{id}/ |  |


## `wirelessWirelessLanGroupsBulkDestroy()`

```php
wirelessWirelessLanGroupsBulkDestroy($wireless_lan_group_request)
```



Delete a list of wireless LAN group objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wireless_lan_group_request = array(new \OpenAPI\Client\Model\WirelessLANGroupRequest()); // \OpenAPI\Client\Model\WirelessLANGroupRequest[]

try {
    $apiInstance->wirelessWirelessLanGroupsBulkDestroy($wireless_lan_group_request);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLanGroupsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wireless_lan_group_request** | [**\OpenAPI\Client\Model\WirelessLANGroupRequest[]**](../Model/WirelessLANGroupRequest.md)|  | |

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

## `wirelessWirelessLanGroupsBulkPartialUpdate()`

```php
wirelessWirelessLanGroupsBulkPartialUpdate($wireless_lan_group_request): \OpenAPI\Client\Model\WirelessLANGroup[]
```



Patch a list of wireless LAN group objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wireless_lan_group_request = array(new \OpenAPI\Client\Model\WirelessLANGroupRequest()); // \OpenAPI\Client\Model\WirelessLANGroupRequest[]

try {
    $result = $apiInstance->wirelessWirelessLanGroupsBulkPartialUpdate($wireless_lan_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLanGroupsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wireless_lan_group_request** | [**\OpenAPI\Client\Model\WirelessLANGroupRequest[]**](../Model/WirelessLANGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WirelessLANGroup[]**](../Model/WirelessLANGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLanGroupsBulkUpdate()`

```php
wirelessWirelessLanGroupsBulkUpdate($wireless_lan_group_request): \OpenAPI\Client\Model\WirelessLANGroup[]
```



Put a list of wireless LAN group objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wireless_lan_group_request = array(new \OpenAPI\Client\Model\WirelessLANGroupRequest()); // \OpenAPI\Client\Model\WirelessLANGroupRequest[]

try {
    $result = $apiInstance->wirelessWirelessLanGroupsBulkUpdate($wireless_lan_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLanGroupsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wireless_lan_group_request** | [**\OpenAPI\Client\Model\WirelessLANGroupRequest[]**](../Model/WirelessLANGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WirelessLANGroup[]**](../Model/WirelessLANGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLanGroupsCreate()`

```php
wirelessWirelessLanGroupsCreate($writable_wireless_lan_group_request): \OpenAPI\Client\Model\WirelessLANGroup
```



Post a list of wireless LAN group objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_wireless_lan_group_request = new \OpenAPI\Client\Model\WritableWirelessLANGroupRequest(); // \OpenAPI\Client\Model\WritableWirelessLANGroupRequest

try {
    $result = $apiInstance->wirelessWirelessLanGroupsCreate($writable_wireless_lan_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLanGroupsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_wireless_lan_group_request** | [**\OpenAPI\Client\Model\WritableWirelessLANGroupRequest**](../Model/WritableWirelessLANGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WirelessLANGroup**](../Model/WirelessLANGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLanGroupsDestroy()`

```php
wirelessWirelessLanGroupsDestroy($id)
```



Delete a wireless LAN group object.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this wireless LAN group.

try {
    $apiInstance->wirelessWirelessLanGroupsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLanGroupsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this wireless LAN group. | |

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

## `wirelessWirelessLanGroupsList()`

```php
wirelessWirelessLanGroupsList($ancestor, $ancestor__n, $ancestor_id, $ancestor_id__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $parent, $parent__n, $parent_id, $parent_id__n, $q, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $tag, $tag__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedWirelessLANGroupList
```



Get a list of wireless LAN group objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ancestor = array('ancestor_example'); // string[]
$ancestor__n = array('ancestor__n_example'); // string[]
$ancestor_id = array('ancestor_id_example'); // string[]
$ancestor_id__n = array('ancestor_id__n_example'); // string[]
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
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
$last_updated = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$limit = 56; // int | Number of results to return per page.
$modified_by_request = 'modified_by_request_example'; // string
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
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$parent = array('parent_example'); // string[]
$parent__n = array('parent__n_example'); // string[]
$parent_id = array(56); // int[]
$parent_id__n = array(56); // int[]
$q = 'q_example'; // string | Search
$slug = array('slug_example'); // string[]
$slug__empty = True; // bool
$slug__ic = array('slug__ic_example'); // string[]
$slug__ie = array('slug__ie_example'); // string[]
$slug__iew = array('slug__iew_example'); // string[]
$slug__isw = array('slug__isw_example'); // string[]
$slug__n = array('slug__n_example'); // string[]
$slug__nic = array('slug__nic_example'); // string[]
$slug__nie = array('slug__nie_example'); // string[]
$slug__niew = array('slug__niew_example'); // string[]
$slug__nisw = array('slug__nisw_example'); // string[]
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->wirelessWirelessLanGroupsList($ancestor, $ancestor__n, $ancestor_id, $ancestor_id__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $parent, $parent__n, $parent_id, $parent_id__n, $q, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $tag, $tag__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLanGroupsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ancestor** | [**string[]**](../Model/string.md)|  | [optional] |
| **ancestor__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **ancestor_id** | [**string[]**](../Model/string.md)|  | [optional] |
| **ancestor_id__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
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
| **last_updated** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **modified_by_request** | **string**|  | [optional] |
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
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **parent** | [**string[]**](../Model/string.md)|  | [optional] |
| **parent__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **parent_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **parent_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **q** | **string**| Search | [optional] |
| **slug** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug__empty** | **bool**|  | [optional] |
| **slug__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **slug__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedWirelessLANGroupList**](../Model/PaginatedWirelessLANGroupList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLanGroupsPartialUpdate()`

```php
wirelessWirelessLanGroupsPartialUpdate($id, $patched_writable_wireless_lan_group_request): \OpenAPI\Client\Model\WirelessLANGroup
```



Patch a wireless LAN group object.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this wireless LAN group.
$patched_writable_wireless_lan_group_request = new \OpenAPI\Client\Model\PatchedWritableWirelessLANGroupRequest(); // \OpenAPI\Client\Model\PatchedWritableWirelessLANGroupRequest

try {
    $result = $apiInstance->wirelessWirelessLanGroupsPartialUpdate($id, $patched_writable_wireless_lan_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLanGroupsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this wireless LAN group. | |
| **patched_writable_wireless_lan_group_request** | [**\OpenAPI\Client\Model\PatchedWritableWirelessLANGroupRequest**](../Model/PatchedWritableWirelessLANGroupRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WirelessLANGroup**](../Model/WirelessLANGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLanGroupsRetrieve()`

```php
wirelessWirelessLanGroupsRetrieve($id): \OpenAPI\Client\Model\WirelessLANGroup
```



Get a wireless LAN group object.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this wireless LAN group.

try {
    $result = $apiInstance->wirelessWirelessLanGroupsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLanGroupsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this wireless LAN group. | |

### Return type

[**\OpenAPI\Client\Model\WirelessLANGroup**](../Model/WirelessLANGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLanGroupsUpdate()`

```php
wirelessWirelessLanGroupsUpdate($id, $writable_wireless_lan_group_request): \OpenAPI\Client\Model\WirelessLANGroup
```



Put a wireless LAN group object.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this wireless LAN group.
$writable_wireless_lan_group_request = new \OpenAPI\Client\Model\WritableWirelessLANGroupRequest(); // \OpenAPI\Client\Model\WritableWirelessLANGroupRequest

try {
    $result = $apiInstance->wirelessWirelessLanGroupsUpdate($id, $writable_wireless_lan_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLanGroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this wireless LAN group. | |
| **writable_wireless_lan_group_request** | [**\OpenAPI\Client\Model\WritableWirelessLANGroupRequest**](../Model/WritableWirelessLANGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WirelessLANGroup**](../Model/WirelessLANGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLansBulkDestroy()`

```php
wirelessWirelessLansBulkDestroy($wireless_lan_request)
```



Delete a list of wireless LAN objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wireless_lan_request = array(new \OpenAPI\Client\Model\WirelessLANRequest()); // \OpenAPI\Client\Model\WirelessLANRequest[]

try {
    $apiInstance->wirelessWirelessLansBulkDestroy($wireless_lan_request);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLansBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wireless_lan_request** | [**\OpenAPI\Client\Model\WirelessLANRequest[]**](../Model/WirelessLANRequest.md)|  | |

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

## `wirelessWirelessLansBulkPartialUpdate()`

```php
wirelessWirelessLansBulkPartialUpdate($wireless_lan_request): \OpenAPI\Client\Model\WirelessLAN[]
```



Patch a list of wireless LAN objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wireless_lan_request = array(new \OpenAPI\Client\Model\WirelessLANRequest()); // \OpenAPI\Client\Model\WirelessLANRequest[]

try {
    $result = $apiInstance->wirelessWirelessLansBulkPartialUpdate($wireless_lan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLansBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wireless_lan_request** | [**\OpenAPI\Client\Model\WirelessLANRequest[]**](../Model/WirelessLANRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WirelessLAN[]**](../Model/WirelessLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLansBulkUpdate()`

```php
wirelessWirelessLansBulkUpdate($wireless_lan_request): \OpenAPI\Client\Model\WirelessLAN[]
```



Put a list of wireless LAN objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wireless_lan_request = array(new \OpenAPI\Client\Model\WirelessLANRequest()); // \OpenAPI\Client\Model\WirelessLANRequest[]

try {
    $result = $apiInstance->wirelessWirelessLansBulkUpdate($wireless_lan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLansBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wireless_lan_request** | [**\OpenAPI\Client\Model\WirelessLANRequest[]**](../Model/WirelessLANRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WirelessLAN[]**](../Model/WirelessLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLansCreate()`

```php
wirelessWirelessLansCreate($writable_wireless_lan_request): \OpenAPI\Client\Model\WirelessLAN
```



Post a list of wireless LAN objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_wireless_lan_request = new \OpenAPI\Client\Model\WritableWirelessLANRequest(); // \OpenAPI\Client\Model\WritableWirelessLANRequest

try {
    $result = $apiInstance->wirelessWirelessLansCreate($writable_wireless_lan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLansCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_wireless_lan_request** | [**\OpenAPI\Client\Model\WritableWirelessLANRequest**](../Model/WritableWirelessLANRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WirelessLAN**](../Model/WirelessLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLansDestroy()`

```php
wirelessWirelessLansDestroy($id)
```



Delete a wireless LAN object.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this wireless LAN.

try {
    $apiInstance->wirelessWirelessLansDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLansDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this wireless LAN. | |

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

## `wirelessWirelessLansList()`

```php
wirelessWirelessLansList($auth_cipher, $auth_cipher__n, $auth_psk, $auth_psk__empty, $auth_psk__ic, $auth_psk__ie, $auth_psk__iew, $auth_psk__isw, $auth_psk__n, $auth_psk__nic, $auth_psk__nie, $auth_psk__niew, $auth_psk__nisw, $auth_type, $auth_type__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $group, $group__n, $group_id, $group_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface_id, $interface_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $q, $ssid, $ssid__empty, $ssid__ic, $ssid__ie, $ssid__iew, $ssid__isw, $ssid__n, $ssid__nic, $ssid__nie, $ssid__niew, $ssid__nisw, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $vlan_id, $vlan_id__n): \OpenAPI\Client\Model\PaginatedWirelessLANList
```



Get a list of wireless LAN objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_cipher = array('auth_cipher_example'); // string[]
$auth_cipher__n = array('auth_cipher__n_example'); // string[]
$auth_psk = array('auth_psk_example'); // string[]
$auth_psk__empty = True; // bool
$auth_psk__ic = array('auth_psk__ic_example'); // string[]
$auth_psk__ie = array('auth_psk__ie_example'); // string[]
$auth_psk__iew = array('auth_psk__iew_example'); // string[]
$auth_psk__isw = array('auth_psk__isw_example'); // string[]
$auth_psk__n = array('auth_psk__n_example'); // string[]
$auth_psk__nic = array('auth_psk__nic_example'); // string[]
$auth_psk__nie = array('auth_psk__nie_example'); // string[]
$auth_psk__niew = array('auth_psk__niew_example'); // string[]
$auth_psk__nisw = array('auth_psk__nisw_example'); // string[]
$auth_type = array('auth_type_example'); // string[]
$auth_type__n = array('auth_type__n_example'); // string[]
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
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
$group = array('group_example'); // string[]
$group__n = array('group__n_example'); // string[]
$group_id = array('group_id_example'); // string[]
$group_id__n = array('group_id__n_example'); // string[]
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$interface_id = array(56); // int[]
$interface_id__n = array(56); // int[]
$last_updated = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$limit = 56; // int | Number of results to return per page.
$modified_by_request = 'modified_by_request_example'; // string
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$ssid = array('ssid_example'); // string[]
$ssid__empty = True; // bool
$ssid__ic = array('ssid__ic_example'); // string[]
$ssid__ie = array('ssid__ie_example'); // string[]
$ssid__iew = array('ssid__iew_example'); // string[]
$ssid__isw = array('ssid__isw_example'); // string[]
$ssid__n = array('ssid__n_example'); // string[]
$ssid__nic = array('ssid__nic_example'); // string[]
$ssid__nie = array('ssid__nie_example'); // string[]
$ssid__niew = array('ssid__niew_example'); // string[]
$ssid__nisw = array('ssid__nisw_example'); // string[]
$status = array('status_example'); // string[]
$status__n = array('status__n_example'); // string[]
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array('tenant_group_example'); // string[]
$tenant_group__n = array('tenant_group__n_example'); // string[]
$tenant_group_id = array('tenant_group_id_example'); // string[]
$tenant_group_id__n = array('tenant_group_id__n_example'); // string[]
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string
$vlan_id = array(56); // int[]
$vlan_id__n = array(56); // int[]

try {
    $result = $apiInstance->wirelessWirelessLansList($auth_cipher, $auth_cipher__n, $auth_psk, $auth_psk__empty, $auth_psk__ic, $auth_psk__ie, $auth_psk__iew, $auth_psk__isw, $auth_psk__n, $auth_psk__nic, $auth_psk__nie, $auth_psk__niew, $auth_psk__nisw, $auth_type, $auth_type__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $group, $group__n, $group_id, $group_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface_id, $interface_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $q, $ssid, $ssid__empty, $ssid__ic, $ssid__ie, $ssid__iew, $ssid__isw, $ssid__n, $ssid__nic, $ssid__nie, $ssid__niew, $ssid__nisw, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $vlan_id, $vlan_id__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLansList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_cipher** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_cipher__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__empty** | **bool**|  | [optional] |
| **auth_psk__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_type** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_type__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
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
| **group** | [**string[]**](../Model/string.md)|  | [optional] |
| **group__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_id** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_id__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **last_updated** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **modified_by_request** | **string**|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **ssid** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__empty** | **bool**|  | [optional] |
| **ssid__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | [**string[]**](../Model/string.md)|  | [optional] |
| **status__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant_group__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant_group_id** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant_group_id__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **vlan_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **vlan_id__n** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedWirelessLANList**](../Model/PaginatedWirelessLANList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLansPartialUpdate()`

```php
wirelessWirelessLansPartialUpdate($id, $patched_writable_wireless_lan_request): \OpenAPI\Client\Model\WirelessLAN
```



Patch a wireless LAN object.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this wireless LAN.
$patched_writable_wireless_lan_request = new \OpenAPI\Client\Model\PatchedWritableWirelessLANRequest(); // \OpenAPI\Client\Model\PatchedWritableWirelessLANRequest

try {
    $result = $apiInstance->wirelessWirelessLansPartialUpdate($id, $patched_writable_wireless_lan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLansPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this wireless LAN. | |
| **patched_writable_wireless_lan_request** | [**\OpenAPI\Client\Model\PatchedWritableWirelessLANRequest**](../Model/PatchedWritableWirelessLANRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WirelessLAN**](../Model/WirelessLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLansRetrieve()`

```php
wirelessWirelessLansRetrieve($id): \OpenAPI\Client\Model\WirelessLAN
```



Get a wireless LAN object.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this wireless LAN.

try {
    $result = $apiInstance->wirelessWirelessLansRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLansRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this wireless LAN. | |

### Return type

[**\OpenAPI\Client\Model\WirelessLAN**](../Model/WirelessLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLansUpdate()`

```php
wirelessWirelessLansUpdate($id, $writable_wireless_lan_request): \OpenAPI\Client\Model\WirelessLAN
```



Put a wireless LAN object.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this wireless LAN.
$writable_wireless_lan_request = new \OpenAPI\Client\Model\WritableWirelessLANRequest(); // \OpenAPI\Client\Model\WritableWirelessLANRequest

try {
    $result = $apiInstance->wirelessWirelessLansUpdate($id, $writable_wireless_lan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLansUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this wireless LAN. | |
| **writable_wireless_lan_request** | [**\OpenAPI\Client\Model\WritableWirelessLANRequest**](../Model/WritableWirelessLANRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WirelessLAN**](../Model/WirelessLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLinksBulkDestroy()`

```php
wirelessWirelessLinksBulkDestroy($wireless_link_request)
```



Delete a list of wireless link objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wireless_link_request = array(new \OpenAPI\Client\Model\WirelessLinkRequest()); // \OpenAPI\Client\Model\WirelessLinkRequest[]

try {
    $apiInstance->wirelessWirelessLinksBulkDestroy($wireless_link_request);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLinksBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wireless_link_request** | [**\OpenAPI\Client\Model\WirelessLinkRequest[]**](../Model/WirelessLinkRequest.md)|  | |

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

## `wirelessWirelessLinksBulkPartialUpdate()`

```php
wirelessWirelessLinksBulkPartialUpdate($wireless_link_request): \OpenAPI\Client\Model\WirelessLink[]
```



Patch a list of wireless link objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wireless_link_request = array(new \OpenAPI\Client\Model\WirelessLinkRequest()); // \OpenAPI\Client\Model\WirelessLinkRequest[]

try {
    $result = $apiInstance->wirelessWirelessLinksBulkPartialUpdate($wireless_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLinksBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wireless_link_request** | [**\OpenAPI\Client\Model\WirelessLinkRequest[]**](../Model/WirelessLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WirelessLink[]**](../Model/WirelessLink.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLinksBulkUpdate()`

```php
wirelessWirelessLinksBulkUpdate($wireless_link_request): \OpenAPI\Client\Model\WirelessLink[]
```



Put a list of wireless link objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wireless_link_request = array(new \OpenAPI\Client\Model\WirelessLinkRequest()); // \OpenAPI\Client\Model\WirelessLinkRequest[]

try {
    $result = $apiInstance->wirelessWirelessLinksBulkUpdate($wireless_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLinksBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wireless_link_request** | [**\OpenAPI\Client\Model\WirelessLinkRequest[]**](../Model/WirelessLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WirelessLink[]**](../Model/WirelessLink.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLinksCreate()`

```php
wirelessWirelessLinksCreate($writable_wireless_link_request): \OpenAPI\Client\Model\WirelessLink
```



Post a list of wireless link objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_wireless_link_request = new \OpenAPI\Client\Model\WritableWirelessLinkRequest(); // \OpenAPI\Client\Model\WritableWirelessLinkRequest

try {
    $result = $apiInstance->wirelessWirelessLinksCreate($writable_wireless_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLinksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_wireless_link_request** | [**\OpenAPI\Client\Model\WritableWirelessLinkRequest**](../Model/WritableWirelessLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WirelessLink**](../Model/WirelessLink.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLinksDestroy()`

```php
wirelessWirelessLinksDestroy($id)
```



Delete a wireless link object.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this wireless link.

try {
    $apiInstance->wirelessWirelessLinksDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLinksDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this wireless link. | |

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

## `wirelessWirelessLinksList()`

```php
wirelessWirelessLinksList($auth_cipher, $auth_cipher__n, $auth_psk, $auth_psk__empty, $auth_psk__ic, $auth_psk__ie, $auth_psk__iew, $auth_psk__isw, $auth_psk__n, $auth_psk__nic, $auth_psk__nie, $auth_psk__niew, $auth_psk__nisw, $auth_type, $auth_type__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $distance, $distance__empty, $distance__gt, $distance__gte, $distance__lt, $distance__lte, $distance__n, $distance_unit, $distance_unit__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface_a_id, $interface_a_id__n, $interface_b_id, $interface_b_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $q, $ssid, $ssid__empty, $ssid__ic, $ssid__ie, $ssid__iew, $ssid__isw, $ssid__n, $ssid__nic, $ssid__nie, $ssid__niew, $ssid__nisw, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedWirelessLinkList
```



Get a list of wireless link objects.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_cipher = array('auth_cipher_example'); // string[]
$auth_cipher__n = array('auth_cipher__n_example'); // string[]
$auth_psk = array('auth_psk_example'); // string[]
$auth_psk__empty = True; // bool
$auth_psk__ic = array('auth_psk__ic_example'); // string[]
$auth_psk__ie = array('auth_psk__ie_example'); // string[]
$auth_psk__iew = array('auth_psk__iew_example'); // string[]
$auth_psk__isw = array('auth_psk__isw_example'); // string[]
$auth_psk__n = array('auth_psk__n_example'); // string[]
$auth_psk__nic = array('auth_psk__nic_example'); // string[]
$auth_psk__nie = array('auth_psk__nie_example'); // string[]
$auth_psk__niew = array('auth_psk__niew_example'); // string[]
$auth_psk__nisw = array('auth_psk__nisw_example'); // string[]
$auth_type = array('auth_type_example'); // string[]
$auth_type__n = array('auth_type__n_example'); // string[]
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
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
$distance = array(3.4); // float[]
$distance__empty = True; // bool
$distance__gt = array(3.4); // float[]
$distance__gte = array(3.4); // float[]
$distance__lt = array(3.4); // float[]
$distance__lte = array(3.4); // float[]
$distance__n = array(3.4); // float[]
$distance_unit = 'distance_unit_example'; // string | * `km` - Kilometers * `m` - Meters * `mi` - Miles * `ft` - Feet
$distance_unit__n = 'distance_unit__n_example'; // string | * `km` - Kilometers * `m` - Meters * `mi` - Miles * `ft` - Feet
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$interface_a_id = array(56); // int[]
$interface_a_id__n = array(56); // int[]
$interface_b_id = array(56); // int[]
$interface_b_id__n = array(56); // int[]
$last_updated = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$limit = 56; // int | Number of results to return per page.
$modified_by_request = 'modified_by_request_example'; // string
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$ssid = array('ssid_example'); // string[]
$ssid__empty = True; // bool
$ssid__ic = array('ssid__ic_example'); // string[]
$ssid__ie = array('ssid__ie_example'); // string[]
$ssid__iew = array('ssid__iew_example'); // string[]
$ssid__isw = array('ssid__isw_example'); // string[]
$ssid__n = array('ssid__n_example'); // string[]
$ssid__nic = array('ssid__nic_example'); // string[]
$ssid__nie = array('ssid__nie_example'); // string[]
$ssid__niew = array('ssid__niew_example'); // string[]
$ssid__nisw = array('ssid__nisw_example'); // string[]
$status = array('status_example'); // string[]
$status__n = array('status__n_example'); // string[]
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array('tenant_group_example'); // string[]
$tenant_group__n = array('tenant_group__n_example'); // string[]
$tenant_group_id = array('tenant_group_id_example'); // string[]
$tenant_group_id__n = array('tenant_group_id__n_example'); // string[]
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->wirelessWirelessLinksList($auth_cipher, $auth_cipher__n, $auth_psk, $auth_psk__empty, $auth_psk__ic, $auth_psk__ie, $auth_psk__iew, $auth_psk__isw, $auth_psk__n, $auth_psk__nic, $auth_psk__nie, $auth_psk__niew, $auth_psk__nisw, $auth_type, $auth_type__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $distance, $distance__empty, $distance__gt, $distance__gte, $distance__lt, $distance__lte, $distance__n, $distance_unit, $distance_unit__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface_a_id, $interface_a_id__n, $interface_b_id, $interface_b_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $q, $ssid, $ssid__empty, $ssid__ic, $ssid__ie, $ssid__iew, $ssid__isw, $ssid__n, $ssid__nic, $ssid__nie, $ssid__niew, $ssid__nisw, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLinksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_cipher** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_cipher__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__empty** | **bool**|  | [optional] |
| **auth_psk__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_psk__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_type** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_type__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
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
| **distance** | [**float[]**](../Model/float.md)|  | [optional] |
| **distance__empty** | **bool**|  | [optional] |
| **distance__gt** | [**float[]**](../Model/float.md)|  | [optional] |
| **distance__gte** | [**float[]**](../Model/float.md)|  | [optional] |
| **distance__lt** | [**float[]**](../Model/float.md)|  | [optional] |
| **distance__lte** | [**float[]**](../Model/float.md)|  | [optional] |
| **distance__n** | [**float[]**](../Model/float.md)|  | [optional] |
| **distance_unit** | **string**| * &#x60;km&#x60; - Kilometers * &#x60;m&#x60; - Meters * &#x60;mi&#x60; - Miles * &#x60;ft&#x60; - Feet | [optional] |
| **distance_unit__n** | **string**| * &#x60;km&#x60; - Kilometers * &#x60;m&#x60; - Meters * &#x60;mi&#x60; - Miles * &#x60;ft&#x60; - Feet | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_a_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_a_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_b_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_b_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **last_updated** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **modified_by_request** | **string**|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **ssid** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__empty** | **bool**|  | [optional] |
| **ssid__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssid__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | [**string[]**](../Model/string.md)|  | [optional] |
| **status__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant_group__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant_group_id** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant_group_id__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedWirelessLinkList**](../Model/PaginatedWirelessLinkList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLinksPartialUpdate()`

```php
wirelessWirelessLinksPartialUpdate($id, $patched_writable_wireless_link_request): \OpenAPI\Client\Model\WirelessLink
```



Patch a wireless link object.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this wireless link.
$patched_writable_wireless_link_request = new \OpenAPI\Client\Model\PatchedWritableWirelessLinkRequest(); // \OpenAPI\Client\Model\PatchedWritableWirelessLinkRequest

try {
    $result = $apiInstance->wirelessWirelessLinksPartialUpdate($id, $patched_writable_wireless_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLinksPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this wireless link. | |
| **patched_writable_wireless_link_request** | [**\OpenAPI\Client\Model\PatchedWritableWirelessLinkRequest**](../Model/PatchedWritableWirelessLinkRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\WirelessLink**](../Model/WirelessLink.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLinksRetrieve()`

```php
wirelessWirelessLinksRetrieve($id): \OpenAPI\Client\Model\WirelessLink
```



Get a wireless link object.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this wireless link.

try {
    $result = $apiInstance->wirelessWirelessLinksRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLinksRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this wireless link. | |

### Return type

[**\OpenAPI\Client\Model\WirelessLink**](../Model/WirelessLink.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `wirelessWirelessLinksUpdate()`

```php
wirelessWirelessLinksUpdate($id, $writable_wireless_link_request): \OpenAPI\Client\Model\WirelessLink
```



Put a wireless link object.

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


$apiInstance = new OpenAPI\Client\Api\WirelessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this wireless link.
$writable_wireless_link_request = new \OpenAPI\Client\Model\WritableWirelessLinkRequest(); // \OpenAPI\Client\Model\WritableWirelessLinkRequest

try {
    $result = $apiInstance->wirelessWirelessLinksUpdate($id, $writable_wireless_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WirelessApi->wirelessWirelessLinksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this wireless link. | |
| **writable_wireless_link_request** | [**\OpenAPI\Client\Model\WritableWirelessLinkRequest**](../Model/WritableWirelessLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\WirelessLink**](../Model/WirelessLink.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
