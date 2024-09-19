# # PatchedWebhookRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**payload_url** | **string** | This URL will be called using the HTTP method defined when the webhook is called. Jinja2 template processing is supported with the same context as the request body. | [optional]
**http_method** | **string** | * &#x60;GET&#x60; - GET * &#x60;POST&#x60; - POST * &#x60;PUT&#x60; - PUT * &#x60;PATCH&#x60; - PATCH * &#x60;DELETE&#x60; - DELETE | [optional]
**http_content_type** | **string** | The complete list of official content types is available &lt;a href&#x3D;\&quot;https://www.iana.org/assignments/media-types/media-types.xhtml\&quot;&gt;here&lt;/a&gt;. | [optional]
**additional_headers** | **string** | User-supplied HTTP headers to be sent with the request in addition to the HTTP content type. Headers should be defined in the format &lt;code&gt;Name: Value&lt;/code&gt;. Jinja2 template processing is supported with the same context as the request body (below). | [optional]
**body_template** | **string** | Jinja2 template for a custom request body. If blank, a JSON object representing the change will be included. Available context data includes: &lt;code&gt;event&lt;/code&gt;, &lt;code&gt;model&lt;/code&gt;, &lt;code&gt;timestamp&lt;/code&gt;, &lt;code&gt;username&lt;/code&gt;, &lt;code&gt;request_id&lt;/code&gt;, and &lt;code&gt;data&lt;/code&gt;. | [optional]
**secret** | **string** | When provided, the request will include a &lt;code&gt;X-Hook-Signature&lt;/code&gt; header containing a HMAC hex digest of the payload body using the secret as the key. The secret is not transmitted in the request. | [optional]
**ssl_verification** | **bool** | Enable SSL certificate verification. Disable with caution! | [optional]
**ca_file_path** | **string** | The specific CA certificate file to use for SSL verification. Leave blank to use the system defaults. | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTagRequest[]**](NestedTagRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
