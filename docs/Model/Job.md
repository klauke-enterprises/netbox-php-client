# # Job

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**object_type** | **string** |  | [readonly]
**object_id** | **int** |  | [optional]
**name** | **string** |  |
**status** | [**\OpenAPI\Client\Model\BriefJobStatus**](BriefJobStatus.md) |  |
**created** | **\DateTime** |  | [readonly]
**scheduled** | **\DateTime** |  | [optional]
**interval** | **int** | Recurrence interval (in minutes) | [optional]
**started** | **\DateTime** |  | [optional]
**completed** | **\DateTime** |  | [optional]
**user** | [**\OpenAPI\Client\Model\BriefUser**](BriefUser.md) |  | [readonly]
**data** | **mixed** |  | [optional]
**error** | **string** |  | [readonly]
**job_id** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
