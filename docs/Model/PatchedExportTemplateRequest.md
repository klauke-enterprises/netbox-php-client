# # PatchedExportTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object_types** | **string[]** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**template_code** | **string** | Jinja2 template code. The list of objects being exported is passed as a context variable named &lt;code&gt;queryset&lt;/code&gt;. | [optional]
**mime_type** | **string** | Defaults to &lt;code&gt;text/plain; charset&#x3D;utf-8&lt;/code&gt; | [optional]
**file_extension** | **string** | Extension to append to the rendered filename | [optional]
**as_attachment** | **bool** | Download file as attachment | [optional]
**data_source** | [**\OpenAPI\Client\Model\DataSourceRequest**](DataSourceRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
