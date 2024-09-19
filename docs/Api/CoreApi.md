# OpenAPI\Client\CoreApi

All URIs are relative to https://demo.netbox.dev/api/schema, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**coreDataFilesList()**](CoreApi.md#coreDataFilesList) | **GET** /api/core/data-files/ |  |
| [**coreDataFilesRetrieve()**](CoreApi.md#coreDataFilesRetrieve) | **GET** /api/core/data-files/{id}/ |  |
| [**coreDataSourcesBulkDestroy()**](CoreApi.md#coreDataSourcesBulkDestroy) | **DELETE** /api/core/data-sources/ |  |
| [**coreDataSourcesBulkPartialUpdate()**](CoreApi.md#coreDataSourcesBulkPartialUpdate) | **PATCH** /api/core/data-sources/ |  |
| [**coreDataSourcesBulkUpdate()**](CoreApi.md#coreDataSourcesBulkUpdate) | **PUT** /api/core/data-sources/ |  |
| [**coreDataSourcesCreate()**](CoreApi.md#coreDataSourcesCreate) | **POST** /api/core/data-sources/ |  |
| [**coreDataSourcesDestroy()**](CoreApi.md#coreDataSourcesDestroy) | **DELETE** /api/core/data-sources/{id}/ |  |
| [**coreDataSourcesList()**](CoreApi.md#coreDataSourcesList) | **GET** /api/core/data-sources/ |  |
| [**coreDataSourcesPartialUpdate()**](CoreApi.md#coreDataSourcesPartialUpdate) | **PATCH** /api/core/data-sources/{id}/ |  |
| [**coreDataSourcesRetrieve()**](CoreApi.md#coreDataSourcesRetrieve) | **GET** /api/core/data-sources/{id}/ |  |
| [**coreDataSourcesSyncCreate()**](CoreApi.md#coreDataSourcesSyncCreate) | **POST** /api/core/data-sources/{id}/sync/ |  |
| [**coreDataSourcesUpdate()**](CoreApi.md#coreDataSourcesUpdate) | **PUT** /api/core/data-sources/{id}/ |  |
| [**coreJobsList()**](CoreApi.md#coreJobsList) | **GET** /api/core/jobs/ |  |
| [**coreJobsRetrieve()**](CoreApi.md#coreJobsRetrieve) | **GET** /api/core/jobs/{id}/ |  |
| [**coreObjectChangesList()**](CoreApi.md#coreObjectChangesList) | **GET** /api/core/object-changes/ |  |
| [**coreObjectChangesRetrieve()**](CoreApi.md#coreObjectChangesRetrieve) | **GET** /api/core/object-changes/{id}/ |  |


## `coreDataFilesList()`

```php
coreDataFilesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $hash, $hash__empty, $hash__ic, $hash__ie, $hash__iew, $hash__isw, $hash__n, $hash__nic, $hash__nie, $hash__niew, $hash__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $path, $path__empty, $path__ic, $path__ie, $path__iew, $path__isw, $path__n, $path__nic, $path__nie, $path__niew, $path__nisw, $q, $size, $size__empty, $size__gt, $size__gte, $size__lt, $size__lte, $size__n, $source, $source__n, $source_id, $source_id__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedDataFileList
```



Get a list of data file objects.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
$hash = array('hash_example'); // string[]
$hash__empty = True; // bool
$hash__ic = array('hash__ic_example'); // string[]
$hash__ie = array('hash__ie_example'); // string[]
$hash__iew = array('hash__iew_example'); // string[]
$hash__isw = array('hash__isw_example'); // string[]
$hash__n = array('hash__n_example'); // string[]
$hash__nic = array('hash__nic_example'); // string[]
$hash__nie = array('hash__nie_example'); // string[]
$hash__niew = array('hash__niew_example'); // string[]
$hash__nisw = array('hash__nisw_example'); // string[]
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
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$path = array('path_example'); // string[]
$path__empty = True; // bool
$path__ic = array('path__ic_example'); // string[]
$path__ie = array('path__ie_example'); // string[]
$path__iew = array('path__iew_example'); // string[]
$path__isw = array('path__isw_example'); // string[]
$path__n = array('path__n_example'); // string[]
$path__nic = array('path__nic_example'); // string[]
$path__nie = array('path__nie_example'); // string[]
$path__niew = array('path__niew_example'); // string[]
$path__nisw = array('path__nisw_example'); // string[]
$q = 'q_example'; // string
$size = array(56); // int[]
$size__empty = True; // bool
$size__gt = array(56); // int[]
$size__gte = array(56); // int[]
$size__lt = array(56); // int[]
$size__lte = array(56); // int[]
$size__n = array(56); // int[]
$source = array('source_example'); // string[] | Data source (name)
$source__n = array('source__n_example'); // string[] | Data source (name)
$source_id = array(56); // int[] | Data source (ID)
$source_id__n = array(56); // int[] | Data source (ID)
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->coreDataFilesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $hash, $hash__empty, $hash__ic, $hash__ie, $hash__iew, $hash__isw, $hash__n, $hash__nic, $hash__nie, $hash__niew, $hash__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $path, $path__empty, $path__ic, $path__ie, $path__iew, $path__isw, $path__n, $path__nic, $path__nie, $path__niew, $path__nisw, $q, $size, $size__empty, $size__gt, $size__gte, $size__lt, $size__lte, $size__n, $source, $source__n, $source_id, $source_id__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDataFilesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
| **hash** | [**string[]**](../Model/string.md)|  | [optional] |
| **hash__empty** | **bool**|  | [optional] |
| **hash__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **hash__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **hash__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **hash__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **hash__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **hash__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **hash__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **hash__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **hash__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **path** | [**string[]**](../Model/string.md)|  | [optional] |
| **path__empty** | **bool**|  | [optional] |
| **path__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **path__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **path__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **path__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **path__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **path__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **path__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **path__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **path__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**|  | [optional] |
| **size** | [**int[]**](../Model/int.md)|  | [optional] |
| **size__empty** | **bool**|  | [optional] |
| **size__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **size__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **size__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **size__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **size__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **source** | [**string[]**](../Model/string.md)| Data source (name) | [optional] |
| **source__n** | [**string[]**](../Model/string.md)| Data source (name) | [optional] |
| **source_id** | [**int[]**](../Model/int.md)| Data source (ID) | [optional] |
| **source_id__n** | [**int[]**](../Model/int.md)| Data source (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedDataFileList**](../Model/PaginatedDataFileList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreDataFilesRetrieve()`

```php
coreDataFilesRetrieve($id): \OpenAPI\Client\Model\DataFile
```



Get a data file object.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this data file.

try {
    $result = $apiInstance->coreDataFilesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDataFilesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this data file. | |

### Return type

[**\OpenAPI\Client\Model\DataFile**](../Model/DataFile.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreDataSourcesBulkDestroy()`

```php
coreDataSourcesBulkDestroy($data_source_request)
```



Delete a list of data source objects.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_source_request = array(new \OpenAPI\Client\Model\DataSourceRequest()); // \OpenAPI\Client\Model\DataSourceRequest[]

try {
    $apiInstance->coreDataSourcesBulkDestroy($data_source_request);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDataSourcesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_source_request** | [**\OpenAPI\Client\Model\DataSourceRequest[]**](../Model/DataSourceRequest.md)|  | |

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

## `coreDataSourcesBulkPartialUpdate()`

```php
coreDataSourcesBulkPartialUpdate($data_source_request): \OpenAPI\Client\Model\DataSource[]
```



Patch a list of data source objects.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_source_request = array(new \OpenAPI\Client\Model\DataSourceRequest()); // \OpenAPI\Client\Model\DataSourceRequest[]

try {
    $result = $apiInstance->coreDataSourcesBulkPartialUpdate($data_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDataSourcesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_source_request** | [**\OpenAPI\Client\Model\DataSourceRequest[]**](../Model/DataSourceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DataSource[]**](../Model/DataSource.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreDataSourcesBulkUpdate()`

```php
coreDataSourcesBulkUpdate($data_source_request): \OpenAPI\Client\Model\DataSource[]
```



Put a list of data source objects.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_source_request = array(new \OpenAPI\Client\Model\DataSourceRequest()); // \OpenAPI\Client\Model\DataSourceRequest[]

try {
    $result = $apiInstance->coreDataSourcesBulkUpdate($data_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDataSourcesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data_source_request** | [**\OpenAPI\Client\Model\DataSourceRequest[]**](../Model/DataSourceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DataSource[]**](../Model/DataSource.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreDataSourcesCreate()`

```php
coreDataSourcesCreate($writable_data_source_request): \OpenAPI\Client\Model\DataSource
```



Post a list of data source objects.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_data_source_request = new \OpenAPI\Client\Model\WritableDataSourceRequest(); // \OpenAPI\Client\Model\WritableDataSourceRequest

try {
    $result = $apiInstance->coreDataSourcesCreate($writable_data_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDataSourcesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_data_source_request** | [**\OpenAPI\Client\Model\WritableDataSourceRequest**](../Model/WritableDataSourceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DataSource**](../Model/DataSource.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreDataSourcesDestroy()`

```php
coreDataSourcesDestroy($id)
```



Delete a data source object.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this data source.

try {
    $apiInstance->coreDataSourcesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDataSourcesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this data source. | |

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

## `coreDataSourcesList()`

```php
coreDataSourcesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $enabled, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_synced, $last_synced__empty, $last_synced__gt, $last_synced__gte, $last_synced__lt, $last_synced__lte, $last_synced__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $source_url, $source_url__empty, $source_url__ic, $source_url__ie, $source_url__iew, $source_url__isw, $source_url__n, $source_url__nic, $source_url__nie, $source_url__niew, $source_url__nisw, $status, $status__n, $tag, $tag__n, $type, $type__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedDataSourceList
```



Get a list of data source objects.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
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
$enabled = True; // bool
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$last_synced = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_synced__empty = True; // bool
$last_synced__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_synced__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_synced__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_synced__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_synced__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
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
$q = 'q_example'; // string | Search
$source_url = array('source_url_example'); // string[]
$source_url__empty = True; // bool
$source_url__ic = array('source_url__ic_example'); // string[]
$source_url__ie = array('source_url__ie_example'); // string[]
$source_url__iew = array('source_url__iew_example'); // string[]
$source_url__isw = array('source_url__isw_example'); // string[]
$source_url__n = array('source_url__n_example'); // string[]
$source_url__nic = array('source_url__nic_example'); // string[]
$source_url__nie = array('source_url__nie_example'); // string[]
$source_url__niew = array('source_url__niew_example'); // string[]
$source_url__nisw = array('source_url__nisw_example'); // string[]
$status = array('status_example'); // string[]
$status__n = array('status__n_example'); // string[]
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$type = array('type_example'); // string[]
$type__n = array('type__n_example'); // string[]
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->coreDataSourcesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $enabled, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_synced, $last_synced__empty, $last_synced__gt, $last_synced__gte, $last_synced__lt, $last_synced__lte, $last_synced__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $source_url, $source_url__empty, $source_url__ic, $source_url__ie, $source_url__iew, $source_url__isw, $source_url__n, $source_url__nic, $source_url__nie, $source_url__niew, $source_url__nisw, $status, $status__n, $tag, $tag__n, $type, $type__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDataSourcesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
| **enabled** | **bool**|  | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **last_synced** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_synced__empty** | **bool**|  | [optional] |
| **last_synced__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_synced__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_synced__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_synced__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_synced__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
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
| **q** | **string**| Search | [optional] |
| **source_url** | [**string[]**](../Model/string.md)|  | [optional] |
| **source_url__empty** | **bool**|  | [optional] |
| **source_url__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **source_url__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **source_url__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **source_url__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **source_url__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **source_url__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **source_url__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **source_url__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **source_url__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | [**string[]**](../Model/string.md)|  | [optional] |
| **status__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **type** | [**string[]**](../Model/string.md)|  | [optional] |
| **type__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedDataSourceList**](../Model/PaginatedDataSourceList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreDataSourcesPartialUpdate()`

```php
coreDataSourcesPartialUpdate($id, $patched_writable_data_source_request): \OpenAPI\Client\Model\DataSource
```



Patch a data source object.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this data source.
$patched_writable_data_source_request = new \OpenAPI\Client\Model\PatchedWritableDataSourceRequest(); // \OpenAPI\Client\Model\PatchedWritableDataSourceRequest

try {
    $result = $apiInstance->coreDataSourcesPartialUpdate($id, $patched_writable_data_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDataSourcesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this data source. | |
| **patched_writable_data_source_request** | [**\OpenAPI\Client\Model\PatchedWritableDataSourceRequest**](../Model/PatchedWritableDataSourceRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DataSource**](../Model/DataSource.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreDataSourcesRetrieve()`

```php
coreDataSourcesRetrieve($id): \OpenAPI\Client\Model\DataSource
```



Get a data source object.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this data source.

try {
    $result = $apiInstance->coreDataSourcesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDataSourcesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this data source. | |

### Return type

[**\OpenAPI\Client\Model\DataSource**](../Model/DataSource.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreDataSourcesSyncCreate()`

```php
coreDataSourcesSyncCreate($id, $writable_data_source_request): \OpenAPI\Client\Model\DataSource
```



Enqueue a job to synchronize the DataSource.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this data source.
$writable_data_source_request = new \OpenAPI\Client\Model\WritableDataSourceRequest(); // \OpenAPI\Client\Model\WritableDataSourceRequest

try {
    $result = $apiInstance->coreDataSourcesSyncCreate($id, $writable_data_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDataSourcesSyncCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this data source. | |
| **writable_data_source_request** | [**\OpenAPI\Client\Model\WritableDataSourceRequest**](../Model/WritableDataSourceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DataSource**](../Model/DataSource.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreDataSourcesUpdate()`

```php
coreDataSourcesUpdate($id, $writable_data_source_request): \OpenAPI\Client\Model\DataSource
```



Put a data source object.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this data source.
$writable_data_source_request = new \OpenAPI\Client\Model\WritableDataSourceRequest(); // \OpenAPI\Client\Model\WritableDataSourceRequest

try {
    $result = $apiInstance->coreDataSourcesUpdate($id, $writable_data_source_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDataSourcesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this data source. | |
| **writable_data_source_request** | [**\OpenAPI\Client\Model\WritableDataSourceRequest**](../Model/WritableDataSourceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DataSource**](../Model/DataSource.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreJobsList()`

```php
coreJobsList($completed, $completed__after, $completed__before, $created, $created__after, $created__before, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interval, $interval__empty, $interval__gt, $interval__gte, $interval__lt, $interval__lte, $interval__n, $job_id, $limit, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_id, $object_id__empty, $object_id__gt, $object_id__gte, $object_id__lt, $object_id__lte, $object_id__n, $object_type, $object_type__n, $offset, $ordering, $q, $scheduled, $scheduled__after, $scheduled__before, $started, $started__after, $started__before, $status, $status__n, $user, $user__n): \OpenAPI\Client\Model\PaginatedJobList
```



Retrieve a list of job results

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$completed = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$completed__after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$completed__before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created__after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created__before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$interval = array(56); // int[]
$interval__empty = True; // bool
$interval__gt = array(56); // int[]
$interval__gte = array(56); // int[]
$interval__lt = array(56); // int[]
$interval__lte = array(56); // int[]
$interval__n = array(56); // int[]
$job_id = 'job_id_example'; // string
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
$object_id = array(56); // int[]
$object_id__empty = True; // bool
$object_id__gt = array(56); // int[]
$object_id__gte = array(56); // int[]
$object_id__lt = array(56); // int[]
$object_id__lte = array(56); // int[]
$object_id__n = array(56); // int[]
$object_type = 56; // int
$object_type__n = 56; // int
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$scheduled = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$scheduled__after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$scheduled__before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$started = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$started__after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$started__before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$status = array('status_example'); // string[]
$status__n = array('status__n_example'); // string[]
$user = 56; // int
$user__n = 56; // int

try {
    $result = $apiInstance->coreJobsList($completed, $completed__after, $completed__before, $created, $created__after, $created__before, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interval, $interval__empty, $interval__gt, $interval__gte, $interval__lt, $interval__lte, $interval__n, $job_id, $limit, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_id, $object_id__empty, $object_id__gt, $object_id__gte, $object_id__lt, $object_id__lte, $object_id__n, $object_type, $object_type__n, $offset, $ordering, $q, $scheduled, $scheduled__after, $scheduled__before, $started, $started__after, $started__before, $status, $status__n, $user, $user__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreJobsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **completed** | **\DateTime**|  | [optional] |
| **completed__after** | **\DateTime**|  | [optional] |
| **completed__before** | **\DateTime**|  | [optional] |
| **created** | **\DateTime**|  | [optional] |
| **created__after** | **\DateTime**|  | [optional] |
| **created__before** | **\DateTime**|  | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **interval** | [**int[]**](../Model/int.md)|  | [optional] |
| **interval__empty** | **bool**|  | [optional] |
| **interval__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **interval__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **interval__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **interval__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **interval__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **job_id** | **string**|  | [optional] |
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
| **object_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__empty** | **bool**|  | [optional] |
| **object_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type** | **int**|  | [optional] |
| **object_type__n** | **int**|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **scheduled** | **\DateTime**|  | [optional] |
| **scheduled__after** | **\DateTime**|  | [optional] |
| **scheduled__before** | **\DateTime**|  | [optional] |
| **started** | **\DateTime**|  | [optional] |
| **started__after** | **\DateTime**|  | [optional] |
| **started__before** | **\DateTime**|  | [optional] |
| **status** | [**string[]**](../Model/string.md)|  | [optional] |
| **status__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **user** | **int**|  | [optional] |
| **user__n** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedJobList**](../Model/PaginatedJobList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreJobsRetrieve()`

```php
coreJobsRetrieve($id): \OpenAPI\Client\Model\Job
```



Retrieve a list of job results

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this job.

try {
    $result = $apiInstance->coreJobsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreJobsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this job. | |

### Return type

[**\OpenAPI\Client\Model\Job**](../Model/Job.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreObjectChangesList()`

```php
coreObjectChangesList($action, $action__n, $changed_object_id, $changed_object_id__empty, $changed_object_id__gt, $changed_object_id__gte, $changed_object_id__lt, $changed_object_id__lte, $changed_object_id__n, $changed_object_type, $changed_object_type__n, $changed_object_type_id, $changed_object_type_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $limit, $object_repr, $object_repr__empty, $object_repr__ic, $object_repr__ie, $object_repr__iew, $object_repr__isw, $object_repr__n, $object_repr__nic, $object_repr__nie, $object_repr__niew, $object_repr__nisw, $offset, $ordering, $q, $related_object_id, $related_object_id__empty, $related_object_id__gt, $related_object_id__gte, $related_object_id__lt, $related_object_id__lte, $related_object_id__n, $related_object_type, $related_object_type__n, $request_id, $time_after, $time_before, $user, $user__n, $user_id, $user_id__n, $user_name, $user_name__empty, $user_name__ic, $user_name__ie, $user_name__iew, $user_name__isw, $user_name__n, $user_name__nic, $user_name__nie, $user_name__niew, $user_name__nisw): \OpenAPI\Client\Model\PaginatedObjectChangeList
```



Retrieve a list of recent changes.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action = 'action_example'; // string | * `create` - Created * `update` - Updated * `delete` - Deleted
$action__n = 'action__n_example'; // string | * `create` - Created * `update` - Updated * `delete` - Deleted
$changed_object_id = array(56); // int[]
$changed_object_id__empty = True; // bool
$changed_object_id__gt = array(56); // int[]
$changed_object_id__gte = array(56); // int[]
$changed_object_id__lt = array(56); // int[]
$changed_object_id__lte = array(56); // int[]
$changed_object_id__n = array(56); // int[]
$changed_object_type = 'changed_object_type_example'; // string
$changed_object_type__n = 'changed_object_type__n_example'; // string
$changed_object_type_id = array(56); // int[]
$changed_object_type_id__n = array(56); // int[]
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$limit = 56; // int | Number of results to return per page.
$object_repr = array('object_repr_example'); // string[]
$object_repr__empty = True; // bool
$object_repr__ic = array('object_repr__ic_example'); // string[]
$object_repr__ie = array('object_repr__ie_example'); // string[]
$object_repr__iew = array('object_repr__iew_example'); // string[]
$object_repr__isw = array('object_repr__isw_example'); // string[]
$object_repr__n = array('object_repr__n_example'); // string[]
$object_repr__nic = array('object_repr__nic_example'); // string[]
$object_repr__nie = array('object_repr__nie_example'); // string[]
$object_repr__niew = array('object_repr__niew_example'); // string[]
$object_repr__nisw = array('object_repr__nisw_example'); // string[]
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$related_object_id = array(56); // int[]
$related_object_id__empty = True; // bool
$related_object_id__gt = array(56); // int[]
$related_object_id__gte = array(56); // int[]
$related_object_id__lt = array(56); // int[]
$related_object_id__lte = array(56); // int[]
$related_object_id__n = array(56); // int[]
$related_object_type = 56; // int
$related_object_type__n = 56; // int
$request_id = 'request_id_example'; // string
$time_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$time_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$user = array('user_example'); // string[] | User name
$user__n = array('user__n_example'); // string[] | User name
$user_id = array(56); // int[] | User (ID)
$user_id__n = array(56); // int[] | User (ID)
$user_name = array('user_name_example'); // string[]
$user_name__empty = True; // bool
$user_name__ic = array('user_name__ic_example'); // string[]
$user_name__ie = array('user_name__ie_example'); // string[]
$user_name__iew = array('user_name__iew_example'); // string[]
$user_name__isw = array('user_name__isw_example'); // string[]
$user_name__n = array('user_name__n_example'); // string[]
$user_name__nic = array('user_name__nic_example'); // string[]
$user_name__nie = array('user_name__nie_example'); // string[]
$user_name__niew = array('user_name__niew_example'); // string[]
$user_name__nisw = array('user_name__nisw_example'); // string[]

try {
    $result = $apiInstance->coreObjectChangesList($action, $action__n, $changed_object_id, $changed_object_id__empty, $changed_object_id__gt, $changed_object_id__gte, $changed_object_id__lt, $changed_object_id__lte, $changed_object_id__n, $changed_object_type, $changed_object_type__n, $changed_object_type_id, $changed_object_type_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $limit, $object_repr, $object_repr__empty, $object_repr__ic, $object_repr__ie, $object_repr__iew, $object_repr__isw, $object_repr__n, $object_repr__nic, $object_repr__nie, $object_repr__niew, $object_repr__nisw, $offset, $ordering, $q, $related_object_id, $related_object_id__empty, $related_object_id__gt, $related_object_id__gte, $related_object_id__lt, $related_object_id__lte, $related_object_id__n, $related_object_type, $related_object_type__n, $request_id, $time_after, $time_before, $user, $user__n, $user_id, $user_id__n, $user_name, $user_name__empty, $user_name__ic, $user_name__ie, $user_name__iew, $user_name__isw, $user_name__n, $user_name__nic, $user_name__nie, $user_name__niew, $user_name__nisw);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreObjectChangesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **action** | **string**| * &#x60;create&#x60; - Created * &#x60;update&#x60; - Updated * &#x60;delete&#x60; - Deleted | [optional] |
| **action__n** | **string**| * &#x60;create&#x60; - Created * &#x60;update&#x60; - Updated * &#x60;delete&#x60; - Deleted | [optional] |
| **changed_object_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **changed_object_id__empty** | **bool**|  | [optional] |
| **changed_object_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **changed_object_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **changed_object_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **changed_object_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **changed_object_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **changed_object_type** | **string**|  | [optional] |
| **changed_object_type__n** | **string**|  | [optional] |
| **changed_object_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **changed_object_type_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **object_repr** | [**string[]**](../Model/string.md)|  | [optional] |
| **object_repr__empty** | **bool**|  | [optional] |
| **object_repr__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **object_repr__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **object_repr__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **object_repr__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **object_repr__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **object_repr__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **object_repr__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **object_repr__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **object_repr__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **related_object_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **related_object_id__empty** | **bool**|  | [optional] |
| **related_object_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **related_object_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **related_object_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **related_object_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **related_object_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **related_object_type** | **int**|  | [optional] |
| **related_object_type__n** | **int**|  | [optional] |
| **request_id** | **string**|  | [optional] |
| **time_after** | **\DateTime**|  | [optional] |
| **time_before** | **\DateTime**|  | [optional] |
| **user** | [**string[]**](../Model/string.md)| User name | [optional] |
| **user__n** | [**string[]**](../Model/string.md)| User name | [optional] |
| **user_id** | [**int[]**](../Model/int.md)| User (ID) | [optional] |
| **user_id__n** | [**int[]**](../Model/int.md)| User (ID) | [optional] |
| **user_name** | [**string[]**](../Model/string.md)|  | [optional] |
| **user_name__empty** | **bool**|  | [optional] |
| **user_name__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **user_name__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **user_name__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **user_name__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **user_name__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **user_name__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **user_name__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **user_name__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **user_name__nisw** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedObjectChangeList**](../Model/PaginatedObjectChangeList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coreObjectChangesRetrieve()`

```php
coreObjectChangesRetrieve($id): \OpenAPI\Client\Model\ObjectChange
```



Retrieve a list of recent changes.

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


$apiInstance = new OpenAPI\Client\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this object change.

try {
    $result = $apiInstance->coreObjectChangesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreObjectChangesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this object change. | |

### Return type

[**\OpenAPI\Client\Model\ObjectChange**](../Model/ObjectChange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
