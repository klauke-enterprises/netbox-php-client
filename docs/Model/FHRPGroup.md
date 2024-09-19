# # FHRPGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly]
**name** | **string** |  | [optional]
**url** | **string** |  | [readonly]
**display_url** | **string** |  | [readonly]
**display** | **string** |  | [readonly]
**protocol** | **string** | * &#x60;vrrp2&#x60; - VRRPv2 * &#x60;vrrp3&#x60; - VRRPv3 * &#x60;carp&#x60; - CARP * &#x60;clusterxl&#x60; - ClusterXL * &#x60;hsrp&#x60; - HSRP * &#x60;glbp&#x60; - GLBP * &#x60;other&#x60; - Other |
**group_id** | **int** |  |
**auth_type** | **string** | * &#x60;plaintext&#x60; - Plaintext * &#x60;md5&#x60; - MD5 | [optional]
**auth_key** | **string** |  | [optional]
**description** | **string** |  | [optional]
**comments** | **string** |  | [optional]
**tags** | [**\OpenAPI\Client\Model\NestedTag[]**](NestedTag.md) |  | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**created** | **\DateTime** |  | [readonly]
**last_updated** | **\DateTime** |  | [readonly]
**ip_addresses** | [**\OpenAPI\Client\Model\BriefIPAddress[]**](BriefIPAddress.md) |  | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
