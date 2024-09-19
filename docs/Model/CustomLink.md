# # CustomLink

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**object_types** | **string[]** |  |
**name** | **string** |  |
**enabled** | **bool** |  | [optional]
**link_text** | **string** | Jinja2 template code for link text |
**link_url** | **string** | Jinja2 template code for link URL |
**weight** | **int** |  | [optional]
**group_name** | **string** | Links with the same group will appear as a dropdown menu | [optional]
**button_class** | **string** | The class of the first link in a group will be used for the dropdown button  * &#x60;default&#x60; - Default * &#x60;blue&#x60; - Blue * &#x60;indigo&#x60; - Indigo * &#x60;purple&#x60; - Purple * &#x60;pink&#x60; - Pink * &#x60;red&#x60; - Red * &#x60;orange&#x60; - Orange * &#x60;yellow&#x60; - Yellow * &#x60;green&#x60; - Green * &#x60;teal&#x60; - Teal * &#x60;cyan&#x60; - Cyan * &#x60;gray&#x60; - Gray * &#x60;black&#x60; - Black * &#x60;white&#x60; - White * &#x60;ghost-dark&#x60; - Link | [optional]
**new_window** | **bool** | Force link to open in a new window | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
