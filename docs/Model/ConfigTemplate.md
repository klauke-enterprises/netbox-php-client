# # ConfigTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**name** | **string** |  |
**description** | **string** |  | [optional]
**environment_params** | **mixed** | Any &lt;a href&#x3D;\&quot;https://jinja.palletsprojects.com/en/3.1.x/api/#jinja2.Environment\&quot;&gt;additional parameters&lt;/a&gt; to pass when constructing the Jinja2 environment. | [optional]
**template_code** | **string** | Jinja2 template code. |
**data_source** | [**\OpenAPI\Client\Model\BriefDataSource**](BriefDataSource.md) |  | [optional]
**data_path** | **string** | Path to remote file (relative to data source root) | [readonly]
**data_file** | [**\OpenAPI\Client\Model\BriefDataFile**](BriefDataFile.md) |  | [optional]
**data_synced** | **\DateTime** |  | [readonly]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
