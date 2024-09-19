# OpenAPI\Client\IpamApi

All URIs are relative to https://netbox.demodash.at/api/schema, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ipamAggregatesBulkDestroy()**](IpamApi.md#ipamAggregatesBulkDestroy) | **DELETE** /api/ipam/aggregates/ |  |
| [**ipamAggregatesBulkPartialUpdate()**](IpamApi.md#ipamAggregatesBulkPartialUpdate) | **PATCH** /api/ipam/aggregates/ |  |
| [**ipamAggregatesBulkUpdate()**](IpamApi.md#ipamAggregatesBulkUpdate) | **PUT** /api/ipam/aggregates/ |  |
| [**ipamAggregatesCreate()**](IpamApi.md#ipamAggregatesCreate) | **POST** /api/ipam/aggregates/ |  |
| [**ipamAggregatesDestroy()**](IpamApi.md#ipamAggregatesDestroy) | **DELETE** /api/ipam/aggregates/{id}/ |  |
| [**ipamAggregatesList()**](IpamApi.md#ipamAggregatesList) | **GET** /api/ipam/aggregates/ |  |
| [**ipamAggregatesPartialUpdate()**](IpamApi.md#ipamAggregatesPartialUpdate) | **PATCH** /api/ipam/aggregates/{id}/ |  |
| [**ipamAggregatesRetrieve()**](IpamApi.md#ipamAggregatesRetrieve) | **GET** /api/ipam/aggregates/{id}/ |  |
| [**ipamAggregatesUpdate()**](IpamApi.md#ipamAggregatesUpdate) | **PUT** /api/ipam/aggregates/{id}/ |  |
| [**ipamAsnRangesAvailableAsnsCreate()**](IpamApi.md#ipamAsnRangesAvailableAsnsCreate) | **POST** /api/ipam/asn-ranges/{id}/available-asns/ |  |
| [**ipamAsnRangesAvailableAsnsList()**](IpamApi.md#ipamAsnRangesAvailableAsnsList) | **GET** /api/ipam/asn-ranges/{id}/available-asns/ |  |
| [**ipamAsnRangesBulkDestroy()**](IpamApi.md#ipamAsnRangesBulkDestroy) | **DELETE** /api/ipam/asn-ranges/ |  |
| [**ipamAsnRangesBulkPartialUpdate()**](IpamApi.md#ipamAsnRangesBulkPartialUpdate) | **PATCH** /api/ipam/asn-ranges/ |  |
| [**ipamAsnRangesBulkUpdate()**](IpamApi.md#ipamAsnRangesBulkUpdate) | **PUT** /api/ipam/asn-ranges/ |  |
| [**ipamAsnRangesCreate()**](IpamApi.md#ipamAsnRangesCreate) | **POST** /api/ipam/asn-ranges/ |  |
| [**ipamAsnRangesDestroy()**](IpamApi.md#ipamAsnRangesDestroy) | **DELETE** /api/ipam/asn-ranges/{id}/ |  |
| [**ipamAsnRangesList()**](IpamApi.md#ipamAsnRangesList) | **GET** /api/ipam/asn-ranges/ |  |
| [**ipamAsnRangesPartialUpdate()**](IpamApi.md#ipamAsnRangesPartialUpdate) | **PATCH** /api/ipam/asn-ranges/{id}/ |  |
| [**ipamAsnRangesRetrieve()**](IpamApi.md#ipamAsnRangesRetrieve) | **GET** /api/ipam/asn-ranges/{id}/ |  |
| [**ipamAsnRangesUpdate()**](IpamApi.md#ipamAsnRangesUpdate) | **PUT** /api/ipam/asn-ranges/{id}/ |  |
| [**ipamAsnsBulkDestroy()**](IpamApi.md#ipamAsnsBulkDestroy) | **DELETE** /api/ipam/asns/ |  |
| [**ipamAsnsBulkPartialUpdate()**](IpamApi.md#ipamAsnsBulkPartialUpdate) | **PATCH** /api/ipam/asns/ |  |
| [**ipamAsnsBulkUpdate()**](IpamApi.md#ipamAsnsBulkUpdate) | **PUT** /api/ipam/asns/ |  |
| [**ipamAsnsCreate()**](IpamApi.md#ipamAsnsCreate) | **POST** /api/ipam/asns/ |  |
| [**ipamAsnsDestroy()**](IpamApi.md#ipamAsnsDestroy) | **DELETE** /api/ipam/asns/{id}/ |  |
| [**ipamAsnsList()**](IpamApi.md#ipamAsnsList) | **GET** /api/ipam/asns/ |  |
| [**ipamAsnsPartialUpdate()**](IpamApi.md#ipamAsnsPartialUpdate) | **PATCH** /api/ipam/asns/{id}/ |  |
| [**ipamAsnsRetrieve()**](IpamApi.md#ipamAsnsRetrieve) | **GET** /api/ipam/asns/{id}/ |  |
| [**ipamAsnsUpdate()**](IpamApi.md#ipamAsnsUpdate) | **PUT** /api/ipam/asns/{id}/ |  |
| [**ipamFhrpGroupAssignmentsBulkDestroy()**](IpamApi.md#ipamFhrpGroupAssignmentsBulkDestroy) | **DELETE** /api/ipam/fhrp-group-assignments/ |  |
| [**ipamFhrpGroupAssignmentsBulkPartialUpdate()**](IpamApi.md#ipamFhrpGroupAssignmentsBulkPartialUpdate) | **PATCH** /api/ipam/fhrp-group-assignments/ |  |
| [**ipamFhrpGroupAssignmentsBulkUpdate()**](IpamApi.md#ipamFhrpGroupAssignmentsBulkUpdate) | **PUT** /api/ipam/fhrp-group-assignments/ |  |
| [**ipamFhrpGroupAssignmentsCreate()**](IpamApi.md#ipamFhrpGroupAssignmentsCreate) | **POST** /api/ipam/fhrp-group-assignments/ |  |
| [**ipamFhrpGroupAssignmentsDestroy()**](IpamApi.md#ipamFhrpGroupAssignmentsDestroy) | **DELETE** /api/ipam/fhrp-group-assignments/{id}/ |  |
| [**ipamFhrpGroupAssignmentsList()**](IpamApi.md#ipamFhrpGroupAssignmentsList) | **GET** /api/ipam/fhrp-group-assignments/ |  |
| [**ipamFhrpGroupAssignmentsPartialUpdate()**](IpamApi.md#ipamFhrpGroupAssignmentsPartialUpdate) | **PATCH** /api/ipam/fhrp-group-assignments/{id}/ |  |
| [**ipamFhrpGroupAssignmentsRetrieve()**](IpamApi.md#ipamFhrpGroupAssignmentsRetrieve) | **GET** /api/ipam/fhrp-group-assignments/{id}/ |  |
| [**ipamFhrpGroupAssignmentsUpdate()**](IpamApi.md#ipamFhrpGroupAssignmentsUpdate) | **PUT** /api/ipam/fhrp-group-assignments/{id}/ |  |
| [**ipamFhrpGroupsBulkDestroy()**](IpamApi.md#ipamFhrpGroupsBulkDestroy) | **DELETE** /api/ipam/fhrp-groups/ |  |
| [**ipamFhrpGroupsBulkPartialUpdate()**](IpamApi.md#ipamFhrpGroupsBulkPartialUpdate) | **PATCH** /api/ipam/fhrp-groups/ |  |
| [**ipamFhrpGroupsBulkUpdate()**](IpamApi.md#ipamFhrpGroupsBulkUpdate) | **PUT** /api/ipam/fhrp-groups/ |  |
| [**ipamFhrpGroupsCreate()**](IpamApi.md#ipamFhrpGroupsCreate) | **POST** /api/ipam/fhrp-groups/ |  |
| [**ipamFhrpGroupsDestroy()**](IpamApi.md#ipamFhrpGroupsDestroy) | **DELETE** /api/ipam/fhrp-groups/{id}/ |  |
| [**ipamFhrpGroupsList()**](IpamApi.md#ipamFhrpGroupsList) | **GET** /api/ipam/fhrp-groups/ |  |
| [**ipamFhrpGroupsPartialUpdate()**](IpamApi.md#ipamFhrpGroupsPartialUpdate) | **PATCH** /api/ipam/fhrp-groups/{id}/ |  |
| [**ipamFhrpGroupsRetrieve()**](IpamApi.md#ipamFhrpGroupsRetrieve) | **GET** /api/ipam/fhrp-groups/{id}/ |  |
| [**ipamFhrpGroupsUpdate()**](IpamApi.md#ipamFhrpGroupsUpdate) | **PUT** /api/ipam/fhrp-groups/{id}/ |  |
| [**ipamIpAddressesBulkDestroy()**](IpamApi.md#ipamIpAddressesBulkDestroy) | **DELETE** /api/ipam/ip-addresses/ |  |
| [**ipamIpAddressesBulkPartialUpdate()**](IpamApi.md#ipamIpAddressesBulkPartialUpdate) | **PATCH** /api/ipam/ip-addresses/ |  |
| [**ipamIpAddressesBulkUpdate()**](IpamApi.md#ipamIpAddressesBulkUpdate) | **PUT** /api/ipam/ip-addresses/ |  |
| [**ipamIpAddressesCreate()**](IpamApi.md#ipamIpAddressesCreate) | **POST** /api/ipam/ip-addresses/ |  |
| [**ipamIpAddressesDestroy()**](IpamApi.md#ipamIpAddressesDestroy) | **DELETE** /api/ipam/ip-addresses/{id}/ |  |
| [**ipamIpAddressesList()**](IpamApi.md#ipamIpAddressesList) | **GET** /api/ipam/ip-addresses/ |  |
| [**ipamIpAddressesPartialUpdate()**](IpamApi.md#ipamIpAddressesPartialUpdate) | **PATCH** /api/ipam/ip-addresses/{id}/ |  |
| [**ipamIpAddressesRetrieve()**](IpamApi.md#ipamIpAddressesRetrieve) | **GET** /api/ipam/ip-addresses/{id}/ |  |
| [**ipamIpAddressesUpdate()**](IpamApi.md#ipamIpAddressesUpdate) | **PUT** /api/ipam/ip-addresses/{id}/ |  |
| [**ipamIpRangesAvailableIpsCreate()**](IpamApi.md#ipamIpRangesAvailableIpsCreate) | **POST** /api/ipam/ip-ranges/{id}/available-ips/ |  |
| [**ipamIpRangesAvailableIpsList()**](IpamApi.md#ipamIpRangesAvailableIpsList) | **GET** /api/ipam/ip-ranges/{id}/available-ips/ |  |
| [**ipamIpRangesBulkDestroy()**](IpamApi.md#ipamIpRangesBulkDestroy) | **DELETE** /api/ipam/ip-ranges/ |  |
| [**ipamIpRangesBulkPartialUpdate()**](IpamApi.md#ipamIpRangesBulkPartialUpdate) | **PATCH** /api/ipam/ip-ranges/ |  |
| [**ipamIpRangesBulkUpdate()**](IpamApi.md#ipamIpRangesBulkUpdate) | **PUT** /api/ipam/ip-ranges/ |  |
| [**ipamIpRangesCreate()**](IpamApi.md#ipamIpRangesCreate) | **POST** /api/ipam/ip-ranges/ |  |
| [**ipamIpRangesDestroy()**](IpamApi.md#ipamIpRangesDestroy) | **DELETE** /api/ipam/ip-ranges/{id}/ |  |
| [**ipamIpRangesList()**](IpamApi.md#ipamIpRangesList) | **GET** /api/ipam/ip-ranges/ |  |
| [**ipamIpRangesPartialUpdate()**](IpamApi.md#ipamIpRangesPartialUpdate) | **PATCH** /api/ipam/ip-ranges/{id}/ |  |
| [**ipamIpRangesRetrieve()**](IpamApi.md#ipamIpRangesRetrieve) | **GET** /api/ipam/ip-ranges/{id}/ |  |
| [**ipamIpRangesUpdate()**](IpamApi.md#ipamIpRangesUpdate) | **PUT** /api/ipam/ip-ranges/{id}/ |  |
| [**ipamPrefixesAvailableIpsCreate()**](IpamApi.md#ipamPrefixesAvailableIpsCreate) | **POST** /api/ipam/prefixes/{id}/available-ips/ |  |
| [**ipamPrefixesAvailableIpsList()**](IpamApi.md#ipamPrefixesAvailableIpsList) | **GET** /api/ipam/prefixes/{id}/available-ips/ |  |
| [**ipamPrefixesAvailablePrefixesCreate()**](IpamApi.md#ipamPrefixesAvailablePrefixesCreate) | **POST** /api/ipam/prefixes/{id}/available-prefixes/ |  |
| [**ipamPrefixesAvailablePrefixesList()**](IpamApi.md#ipamPrefixesAvailablePrefixesList) | **GET** /api/ipam/prefixes/{id}/available-prefixes/ |  |
| [**ipamPrefixesBulkDestroy()**](IpamApi.md#ipamPrefixesBulkDestroy) | **DELETE** /api/ipam/prefixes/ |  |
| [**ipamPrefixesBulkPartialUpdate()**](IpamApi.md#ipamPrefixesBulkPartialUpdate) | **PATCH** /api/ipam/prefixes/ |  |
| [**ipamPrefixesBulkUpdate()**](IpamApi.md#ipamPrefixesBulkUpdate) | **PUT** /api/ipam/prefixes/ |  |
| [**ipamPrefixesCreate()**](IpamApi.md#ipamPrefixesCreate) | **POST** /api/ipam/prefixes/ |  |
| [**ipamPrefixesDestroy()**](IpamApi.md#ipamPrefixesDestroy) | **DELETE** /api/ipam/prefixes/{id}/ |  |
| [**ipamPrefixesList()**](IpamApi.md#ipamPrefixesList) | **GET** /api/ipam/prefixes/ |  |
| [**ipamPrefixesPartialUpdate()**](IpamApi.md#ipamPrefixesPartialUpdate) | **PATCH** /api/ipam/prefixes/{id}/ |  |
| [**ipamPrefixesRetrieve()**](IpamApi.md#ipamPrefixesRetrieve) | **GET** /api/ipam/prefixes/{id}/ |  |
| [**ipamPrefixesUpdate()**](IpamApi.md#ipamPrefixesUpdate) | **PUT** /api/ipam/prefixes/{id}/ |  |
| [**ipamRirsBulkDestroy()**](IpamApi.md#ipamRirsBulkDestroy) | **DELETE** /api/ipam/rirs/ |  |
| [**ipamRirsBulkPartialUpdate()**](IpamApi.md#ipamRirsBulkPartialUpdate) | **PATCH** /api/ipam/rirs/ |  |
| [**ipamRirsBulkUpdate()**](IpamApi.md#ipamRirsBulkUpdate) | **PUT** /api/ipam/rirs/ |  |
| [**ipamRirsCreate()**](IpamApi.md#ipamRirsCreate) | **POST** /api/ipam/rirs/ |  |
| [**ipamRirsDestroy()**](IpamApi.md#ipamRirsDestroy) | **DELETE** /api/ipam/rirs/{id}/ |  |
| [**ipamRirsList()**](IpamApi.md#ipamRirsList) | **GET** /api/ipam/rirs/ |  |
| [**ipamRirsPartialUpdate()**](IpamApi.md#ipamRirsPartialUpdate) | **PATCH** /api/ipam/rirs/{id}/ |  |
| [**ipamRirsRetrieve()**](IpamApi.md#ipamRirsRetrieve) | **GET** /api/ipam/rirs/{id}/ |  |
| [**ipamRirsUpdate()**](IpamApi.md#ipamRirsUpdate) | **PUT** /api/ipam/rirs/{id}/ |  |
| [**ipamRolesBulkDestroy()**](IpamApi.md#ipamRolesBulkDestroy) | **DELETE** /api/ipam/roles/ |  |
| [**ipamRolesBulkPartialUpdate()**](IpamApi.md#ipamRolesBulkPartialUpdate) | **PATCH** /api/ipam/roles/ |  |
| [**ipamRolesBulkUpdate()**](IpamApi.md#ipamRolesBulkUpdate) | **PUT** /api/ipam/roles/ |  |
| [**ipamRolesCreate()**](IpamApi.md#ipamRolesCreate) | **POST** /api/ipam/roles/ |  |
| [**ipamRolesDestroy()**](IpamApi.md#ipamRolesDestroy) | **DELETE** /api/ipam/roles/{id}/ |  |
| [**ipamRolesList()**](IpamApi.md#ipamRolesList) | **GET** /api/ipam/roles/ |  |
| [**ipamRolesPartialUpdate()**](IpamApi.md#ipamRolesPartialUpdate) | **PATCH** /api/ipam/roles/{id}/ |  |
| [**ipamRolesRetrieve()**](IpamApi.md#ipamRolesRetrieve) | **GET** /api/ipam/roles/{id}/ |  |
| [**ipamRolesUpdate()**](IpamApi.md#ipamRolesUpdate) | **PUT** /api/ipam/roles/{id}/ |  |
| [**ipamRouteTargetsBulkDestroy()**](IpamApi.md#ipamRouteTargetsBulkDestroy) | **DELETE** /api/ipam/route-targets/ |  |
| [**ipamRouteTargetsBulkPartialUpdate()**](IpamApi.md#ipamRouteTargetsBulkPartialUpdate) | **PATCH** /api/ipam/route-targets/ |  |
| [**ipamRouteTargetsBulkUpdate()**](IpamApi.md#ipamRouteTargetsBulkUpdate) | **PUT** /api/ipam/route-targets/ |  |
| [**ipamRouteTargetsCreate()**](IpamApi.md#ipamRouteTargetsCreate) | **POST** /api/ipam/route-targets/ |  |
| [**ipamRouteTargetsDestroy()**](IpamApi.md#ipamRouteTargetsDestroy) | **DELETE** /api/ipam/route-targets/{id}/ |  |
| [**ipamRouteTargetsList()**](IpamApi.md#ipamRouteTargetsList) | **GET** /api/ipam/route-targets/ |  |
| [**ipamRouteTargetsPartialUpdate()**](IpamApi.md#ipamRouteTargetsPartialUpdate) | **PATCH** /api/ipam/route-targets/{id}/ |  |
| [**ipamRouteTargetsRetrieve()**](IpamApi.md#ipamRouteTargetsRetrieve) | **GET** /api/ipam/route-targets/{id}/ |  |
| [**ipamRouteTargetsUpdate()**](IpamApi.md#ipamRouteTargetsUpdate) | **PUT** /api/ipam/route-targets/{id}/ |  |
| [**ipamServiceTemplatesBulkDestroy()**](IpamApi.md#ipamServiceTemplatesBulkDestroy) | **DELETE** /api/ipam/service-templates/ |  |
| [**ipamServiceTemplatesBulkPartialUpdate()**](IpamApi.md#ipamServiceTemplatesBulkPartialUpdate) | **PATCH** /api/ipam/service-templates/ |  |
| [**ipamServiceTemplatesBulkUpdate()**](IpamApi.md#ipamServiceTemplatesBulkUpdate) | **PUT** /api/ipam/service-templates/ |  |
| [**ipamServiceTemplatesCreate()**](IpamApi.md#ipamServiceTemplatesCreate) | **POST** /api/ipam/service-templates/ |  |
| [**ipamServiceTemplatesDestroy()**](IpamApi.md#ipamServiceTemplatesDestroy) | **DELETE** /api/ipam/service-templates/{id}/ |  |
| [**ipamServiceTemplatesList()**](IpamApi.md#ipamServiceTemplatesList) | **GET** /api/ipam/service-templates/ |  |
| [**ipamServiceTemplatesPartialUpdate()**](IpamApi.md#ipamServiceTemplatesPartialUpdate) | **PATCH** /api/ipam/service-templates/{id}/ |  |
| [**ipamServiceTemplatesRetrieve()**](IpamApi.md#ipamServiceTemplatesRetrieve) | **GET** /api/ipam/service-templates/{id}/ |  |
| [**ipamServiceTemplatesUpdate()**](IpamApi.md#ipamServiceTemplatesUpdate) | **PUT** /api/ipam/service-templates/{id}/ |  |
| [**ipamServicesBulkDestroy()**](IpamApi.md#ipamServicesBulkDestroy) | **DELETE** /api/ipam/services/ |  |
| [**ipamServicesBulkPartialUpdate()**](IpamApi.md#ipamServicesBulkPartialUpdate) | **PATCH** /api/ipam/services/ |  |
| [**ipamServicesBulkUpdate()**](IpamApi.md#ipamServicesBulkUpdate) | **PUT** /api/ipam/services/ |  |
| [**ipamServicesCreate()**](IpamApi.md#ipamServicesCreate) | **POST** /api/ipam/services/ |  |
| [**ipamServicesDestroy()**](IpamApi.md#ipamServicesDestroy) | **DELETE** /api/ipam/services/{id}/ |  |
| [**ipamServicesList()**](IpamApi.md#ipamServicesList) | **GET** /api/ipam/services/ |  |
| [**ipamServicesPartialUpdate()**](IpamApi.md#ipamServicesPartialUpdate) | **PATCH** /api/ipam/services/{id}/ |  |
| [**ipamServicesRetrieve()**](IpamApi.md#ipamServicesRetrieve) | **GET** /api/ipam/services/{id}/ |  |
| [**ipamServicesUpdate()**](IpamApi.md#ipamServicesUpdate) | **PUT** /api/ipam/services/{id}/ |  |
| [**ipamVlanGroupsAvailableVlansCreate()**](IpamApi.md#ipamVlanGroupsAvailableVlansCreate) | **POST** /api/ipam/vlan-groups/{id}/available-vlans/ |  |
| [**ipamVlanGroupsAvailableVlansList()**](IpamApi.md#ipamVlanGroupsAvailableVlansList) | **GET** /api/ipam/vlan-groups/{id}/available-vlans/ |  |
| [**ipamVlanGroupsBulkDestroy()**](IpamApi.md#ipamVlanGroupsBulkDestroy) | **DELETE** /api/ipam/vlan-groups/ |  |
| [**ipamVlanGroupsBulkPartialUpdate()**](IpamApi.md#ipamVlanGroupsBulkPartialUpdate) | **PATCH** /api/ipam/vlan-groups/ |  |
| [**ipamVlanGroupsBulkUpdate()**](IpamApi.md#ipamVlanGroupsBulkUpdate) | **PUT** /api/ipam/vlan-groups/ |  |
| [**ipamVlanGroupsCreate()**](IpamApi.md#ipamVlanGroupsCreate) | **POST** /api/ipam/vlan-groups/ |  |
| [**ipamVlanGroupsDestroy()**](IpamApi.md#ipamVlanGroupsDestroy) | **DELETE** /api/ipam/vlan-groups/{id}/ |  |
| [**ipamVlanGroupsList()**](IpamApi.md#ipamVlanGroupsList) | **GET** /api/ipam/vlan-groups/ |  |
| [**ipamVlanGroupsPartialUpdate()**](IpamApi.md#ipamVlanGroupsPartialUpdate) | **PATCH** /api/ipam/vlan-groups/{id}/ |  |
| [**ipamVlanGroupsRetrieve()**](IpamApi.md#ipamVlanGroupsRetrieve) | **GET** /api/ipam/vlan-groups/{id}/ |  |
| [**ipamVlanGroupsUpdate()**](IpamApi.md#ipamVlanGroupsUpdate) | **PUT** /api/ipam/vlan-groups/{id}/ |  |
| [**ipamVlansBulkDestroy()**](IpamApi.md#ipamVlansBulkDestroy) | **DELETE** /api/ipam/vlans/ |  |
| [**ipamVlansBulkPartialUpdate()**](IpamApi.md#ipamVlansBulkPartialUpdate) | **PATCH** /api/ipam/vlans/ |  |
| [**ipamVlansBulkUpdate()**](IpamApi.md#ipamVlansBulkUpdate) | **PUT** /api/ipam/vlans/ |  |
| [**ipamVlansCreate()**](IpamApi.md#ipamVlansCreate) | **POST** /api/ipam/vlans/ |  |
| [**ipamVlansDestroy()**](IpamApi.md#ipamVlansDestroy) | **DELETE** /api/ipam/vlans/{id}/ |  |
| [**ipamVlansList()**](IpamApi.md#ipamVlansList) | **GET** /api/ipam/vlans/ |  |
| [**ipamVlansPartialUpdate()**](IpamApi.md#ipamVlansPartialUpdate) | **PATCH** /api/ipam/vlans/{id}/ |  |
| [**ipamVlansRetrieve()**](IpamApi.md#ipamVlansRetrieve) | **GET** /api/ipam/vlans/{id}/ |  |
| [**ipamVlansUpdate()**](IpamApi.md#ipamVlansUpdate) | **PUT** /api/ipam/vlans/{id}/ |  |
| [**ipamVrfsBulkDestroy()**](IpamApi.md#ipamVrfsBulkDestroy) | **DELETE** /api/ipam/vrfs/ |  |
| [**ipamVrfsBulkPartialUpdate()**](IpamApi.md#ipamVrfsBulkPartialUpdate) | **PATCH** /api/ipam/vrfs/ |  |
| [**ipamVrfsBulkUpdate()**](IpamApi.md#ipamVrfsBulkUpdate) | **PUT** /api/ipam/vrfs/ |  |
| [**ipamVrfsCreate()**](IpamApi.md#ipamVrfsCreate) | **POST** /api/ipam/vrfs/ |  |
| [**ipamVrfsDestroy()**](IpamApi.md#ipamVrfsDestroy) | **DELETE** /api/ipam/vrfs/{id}/ |  |
| [**ipamVrfsList()**](IpamApi.md#ipamVrfsList) | **GET** /api/ipam/vrfs/ |  |
| [**ipamVrfsPartialUpdate()**](IpamApi.md#ipamVrfsPartialUpdate) | **PATCH** /api/ipam/vrfs/{id}/ |  |
| [**ipamVrfsRetrieve()**](IpamApi.md#ipamVrfsRetrieve) | **GET** /api/ipam/vrfs/{id}/ |  |
| [**ipamVrfsUpdate()**](IpamApi.md#ipamVrfsUpdate) | **PUT** /api/ipam/vrfs/{id}/ |  |


## `ipamAggregatesBulkDestroy()`

```php
ipamAggregatesBulkDestroy($aggregate_request)
```



Delete a list of aggregate objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aggregate_request = array(new \OpenAPI\Client\Model\AggregateRequest()); // \OpenAPI\Client\Model\AggregateRequest[]

try {
    $apiInstance->ipamAggregatesBulkDestroy($aggregate_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAggregatesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **aggregate_request** | [**\OpenAPI\Client\Model\AggregateRequest[]**](../Model/AggregateRequest.md)|  | |

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

## `ipamAggregatesBulkPartialUpdate()`

```php
ipamAggregatesBulkPartialUpdate($aggregate_request): \OpenAPI\Client\Model\Aggregate[]
```



Patch a list of aggregate objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aggregate_request = array(new \OpenAPI\Client\Model\AggregateRequest()); // \OpenAPI\Client\Model\AggregateRequest[]

try {
    $result = $apiInstance->ipamAggregatesBulkPartialUpdate($aggregate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAggregatesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **aggregate_request** | [**\OpenAPI\Client\Model\AggregateRequest[]**](../Model/AggregateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Aggregate[]**](../Model/Aggregate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAggregatesBulkUpdate()`

```php
ipamAggregatesBulkUpdate($aggregate_request): \OpenAPI\Client\Model\Aggregate[]
```



Put a list of aggregate objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aggregate_request = array(new \OpenAPI\Client\Model\AggregateRequest()); // \OpenAPI\Client\Model\AggregateRequest[]

try {
    $result = $apiInstance->ipamAggregatesBulkUpdate($aggregate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAggregatesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **aggregate_request** | [**\OpenAPI\Client\Model\AggregateRequest[]**](../Model/AggregateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Aggregate[]**](../Model/Aggregate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAggregatesCreate()`

```php
ipamAggregatesCreate($writable_aggregate_request): \OpenAPI\Client\Model\Aggregate
```



Post a list of aggregate objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_aggregate_request = new \OpenAPI\Client\Model\WritableAggregateRequest(); // \OpenAPI\Client\Model\WritableAggregateRequest

try {
    $result = $apiInstance->ipamAggregatesCreate($writable_aggregate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAggregatesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_aggregate_request** | [**\OpenAPI\Client\Model\WritableAggregateRequest**](../Model/WritableAggregateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Aggregate**](../Model/Aggregate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAggregatesDestroy()`

```php
ipamAggregatesDestroy($id)
```



Delete a aggregate object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this aggregate.

try {
    $apiInstance->ipamAggregatesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAggregatesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this aggregate. | |

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

## `ipamAggregatesList()`

```php
ipamAggregatesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $date_added, $date_added__empty, $date_added__gt, $date_added__gte, $date_added__lt, $date_added__lte, $date_added__n, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $family, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $prefix, $q, $rir, $rir__n, $rir_id, $rir_id__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedAggregateList
```



Get a list of aggregate objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
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
$date_added = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$date_added__empty = True; // bool
$date_added__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$date_added__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$date_added__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$date_added__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$date_added__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
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
$family = 3.4; // float
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
$prefix = 'prefix_example'; // string | Prefix
$q = 'q_example'; // string | Search
$rir = array('rir_example'); // string[] | RIR (slug)
$rir__n = array('rir__n_example'); // string[] | RIR (slug)
$rir_id = array(56); // int[] | RIR (ID)
$rir_id__n = array(56); // int[] | RIR (ID)
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array(56); // int[] | Tenant Group (slug)
$tenant_group__n = array(56); // int[] | Tenant Group (slug)
$tenant_group_id = array(56); // int[] | Tenant Group (ID)
$tenant_group_id__n = array(56); // int[] | Tenant Group (ID)
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->ipamAggregatesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $date_added, $date_added__empty, $date_added__gt, $date_added__gte, $date_added__lt, $date_added__lte, $date_added__n, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $family, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $prefix, $q, $rir, $rir__n, $rir_id, $rir_id__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAggregatesList: ', $e->getMessage(), PHP_EOL;
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
| **date_added** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **date_added__empty** | **bool**|  | [optional] |
| **date_added__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **date_added__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **date_added__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **date_added__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **date_added__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
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
| **family** | **float**|  | [optional] |
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
| **prefix** | **string**| Prefix | [optional] |
| **q** | **string**| Search | [optional] |
| **rir** | [**string[]**](../Model/string.md)| RIR (slug) | [optional] |
| **rir__n** | [**string[]**](../Model/string.md)| RIR (slug) | [optional] |
| **rir_id** | [**int[]**](../Model/int.md)| RIR (ID) | [optional] |
| **rir_id__n** | [**int[]**](../Model/int.md)| RIR (ID) | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group__n** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedAggregateList**](../Model/PaginatedAggregateList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAggregatesPartialUpdate()`

```php
ipamAggregatesPartialUpdate($id, $patched_writable_aggregate_request): \OpenAPI\Client\Model\Aggregate
```



Patch a aggregate object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this aggregate.
$patched_writable_aggregate_request = new \OpenAPI\Client\Model\PatchedWritableAggregateRequest(); // \OpenAPI\Client\Model\PatchedWritableAggregateRequest

try {
    $result = $apiInstance->ipamAggregatesPartialUpdate($id, $patched_writable_aggregate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAggregatesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this aggregate. | |
| **patched_writable_aggregate_request** | [**\OpenAPI\Client\Model\PatchedWritableAggregateRequest**](../Model/PatchedWritableAggregateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Aggregate**](../Model/Aggregate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAggregatesRetrieve()`

```php
ipamAggregatesRetrieve($id): \OpenAPI\Client\Model\Aggregate
```



Get a aggregate object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this aggregate.

try {
    $result = $apiInstance->ipamAggregatesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAggregatesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this aggregate. | |

### Return type

[**\OpenAPI\Client\Model\Aggregate**](../Model/Aggregate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAggregatesUpdate()`

```php
ipamAggregatesUpdate($id, $writable_aggregate_request): \OpenAPI\Client\Model\Aggregate
```



Put a aggregate object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this aggregate.
$writable_aggregate_request = new \OpenAPI\Client\Model\WritableAggregateRequest(); // \OpenAPI\Client\Model\WritableAggregateRequest

try {
    $result = $apiInstance->ipamAggregatesUpdate($id, $writable_aggregate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAggregatesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this aggregate. | |
| **writable_aggregate_request** | [**\OpenAPI\Client\Model\WritableAggregateRequest**](../Model/WritableAggregateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Aggregate**](../Model/Aggregate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnRangesAvailableAsnsCreate()`

```php
ipamAsnRangesAvailableAsnsCreate($id, $asn_request): \OpenAPI\Client\Model\ASN[]
```



Post a ASN object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$asn_request = array(new \OpenAPI\Client\Model\ASNRequest()); // \OpenAPI\Client\Model\ASNRequest[]

try {
    $result = $apiInstance->ipamAsnRangesAvailableAsnsCreate($id, $asn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnRangesAvailableAsnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **asn_request** | [**\OpenAPI\Client\Model\ASNRequest[]**](../Model/ASNRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ASN[]**](../Model/ASN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnRangesAvailableAsnsList()`

```php
ipamAsnRangesAvailableAsnsList($id): \OpenAPI\Client\Model\AvailableASN[]
```



Get a ASN object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->ipamAsnRangesAvailableAsnsList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnRangesAvailableAsnsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\AvailableASN[]**](../Model/AvailableASN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnRangesBulkDestroy()`

```php
ipamAsnRangesBulkDestroy($asn_range_request)
```



Delete a list of ASN range objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asn_range_request = array(new \OpenAPI\Client\Model\ASNRangeRequest()); // \OpenAPI\Client\Model\ASNRangeRequest[]

try {
    $apiInstance->ipamAsnRangesBulkDestroy($asn_range_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnRangesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asn_range_request** | [**\OpenAPI\Client\Model\ASNRangeRequest[]**](../Model/ASNRangeRequest.md)|  | |

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

## `ipamAsnRangesBulkPartialUpdate()`

```php
ipamAsnRangesBulkPartialUpdate($asn_range_request): \OpenAPI\Client\Model\ASNRange[]
```



Patch a list of ASN range objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asn_range_request = array(new \OpenAPI\Client\Model\ASNRangeRequest()); // \OpenAPI\Client\Model\ASNRangeRequest[]

try {
    $result = $apiInstance->ipamAsnRangesBulkPartialUpdate($asn_range_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnRangesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asn_range_request** | [**\OpenAPI\Client\Model\ASNRangeRequest[]**](../Model/ASNRangeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ASNRange[]**](../Model/ASNRange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnRangesBulkUpdate()`

```php
ipamAsnRangesBulkUpdate($asn_range_request): \OpenAPI\Client\Model\ASNRange[]
```



Put a list of ASN range objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asn_range_request = array(new \OpenAPI\Client\Model\ASNRangeRequest()); // \OpenAPI\Client\Model\ASNRangeRequest[]

try {
    $result = $apiInstance->ipamAsnRangesBulkUpdate($asn_range_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnRangesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asn_range_request** | [**\OpenAPI\Client\Model\ASNRangeRequest[]**](../Model/ASNRangeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ASNRange[]**](../Model/ASNRange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnRangesCreate()`

```php
ipamAsnRangesCreate($asn_range_request): \OpenAPI\Client\Model\ASNRange
```



Post a list of ASN range objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asn_range_request = new \OpenAPI\Client\Model\ASNRangeRequest(); // \OpenAPI\Client\Model\ASNRangeRequest

try {
    $result = $apiInstance->ipamAsnRangesCreate($asn_range_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnRangesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asn_range_request** | [**\OpenAPI\Client\Model\ASNRangeRequest**](../Model/ASNRangeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ASNRange**](../Model/ASNRange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnRangesDestroy()`

```php
ipamAsnRangesDestroy($id)
```



Delete a ASN range object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this ASN range.

try {
    $apiInstance->ipamAsnRangesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnRangesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this ASN range. | |

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

## `ipamAsnRangesList()`

```php
ipamAsnRangesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $end, $end__empty, $end__gt, $end__gte, $end__lt, $end__lte, $end__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $rir, $rir__n, $rir_id, $rir_id__n, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $start, $start__empty, $start__gt, $start__gte, $start__lt, $start__lte, $start__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedASNRangeList
```



Get a list of ASN range objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
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
$end = array(56); // int[]
$end__empty = True; // bool
$end__gt = array(56); // int[]
$end__gte = array(56); // int[]
$end__lt = array(56); // int[]
$end__lte = array(56); // int[]
$end__n = array(56); // int[]
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
$q = 'q_example'; // string | Search
$rir = array('rir_example'); // string[] | RIR (slug)
$rir__n = array('rir__n_example'); // string[] | RIR (slug)
$rir_id = array(56); // int[] | RIR (ID)
$rir_id__n = array(56); // int[] | RIR (ID)
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
$start = array(56); // int[]
$start__empty = True; // bool
$start__gt = array(56); // int[]
$start__gte = array(56); // int[]
$start__lt = array(56); // int[]
$start__lte = array(56); // int[]
$start__n = array(56); // int[]
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array(56); // int[] | Tenant Group (slug)
$tenant_group__n = array(56); // int[] | Tenant Group (slug)
$tenant_group_id = array(56); // int[] | Tenant Group (ID)
$tenant_group_id__n = array(56); // int[] | Tenant Group (ID)
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->ipamAsnRangesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $end, $end__empty, $end__gt, $end__gte, $end__lt, $end__lte, $end__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $rir, $rir__n, $rir_id, $rir_id__n, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $start, $start__empty, $start__gt, $start__gte, $start__lt, $start__lte, $start__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnRangesList: ', $e->getMessage(), PHP_EOL;
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
| **end** | [**int[]**](../Model/int.md)|  | [optional] |
| **end__empty** | **bool**|  | [optional] |
| **end__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **end__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **end__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **end__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **end__n** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **q** | **string**| Search | [optional] |
| **rir** | [**string[]**](../Model/string.md)| RIR (slug) | [optional] |
| **rir__n** | [**string[]**](../Model/string.md)| RIR (slug) | [optional] |
| **rir_id** | [**int[]**](../Model/int.md)| RIR (ID) | [optional] |
| **rir_id__n** | [**int[]**](../Model/int.md)| RIR (ID) | [optional] |
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
| **start** | [**int[]**](../Model/int.md)|  | [optional] |
| **start__empty** | **bool**|  | [optional] |
| **start__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **start__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **start__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **start__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **start__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group__n** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedASNRangeList**](../Model/PaginatedASNRangeList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnRangesPartialUpdate()`

```php
ipamAsnRangesPartialUpdate($id, $patched_asn_range_request): \OpenAPI\Client\Model\ASNRange
```



Patch a ASN range object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this ASN range.
$patched_asn_range_request = new \OpenAPI\Client\Model\PatchedASNRangeRequest(); // \OpenAPI\Client\Model\PatchedASNRangeRequest

try {
    $result = $apiInstance->ipamAsnRangesPartialUpdate($id, $patched_asn_range_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnRangesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this ASN range. | |
| **patched_asn_range_request** | [**\OpenAPI\Client\Model\PatchedASNRangeRequest**](../Model/PatchedASNRangeRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ASNRange**](../Model/ASNRange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnRangesRetrieve()`

```php
ipamAsnRangesRetrieve($id): \OpenAPI\Client\Model\ASNRange
```



Get a ASN range object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this ASN range.

try {
    $result = $apiInstance->ipamAsnRangesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnRangesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this ASN range. | |

### Return type

[**\OpenAPI\Client\Model\ASNRange**](../Model/ASNRange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnRangesUpdate()`

```php
ipamAsnRangesUpdate($id, $asn_range_request): \OpenAPI\Client\Model\ASNRange
```



Put a ASN range object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this ASN range.
$asn_range_request = new \OpenAPI\Client\Model\ASNRangeRequest(); // \OpenAPI\Client\Model\ASNRangeRequest

try {
    $result = $apiInstance->ipamAsnRangesUpdate($id, $asn_range_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnRangesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this ASN range. | |
| **asn_range_request** | [**\OpenAPI\Client\Model\ASNRangeRequest**](../Model/ASNRangeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ASNRange**](../Model/ASNRange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnsBulkDestroy()`

```php
ipamAsnsBulkDestroy($asn_request)
```



Delete a list of ASN objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asn_request = array(new \OpenAPI\Client\Model\ASNRequest()); // \OpenAPI\Client\Model\ASNRequest[]

try {
    $apiInstance->ipamAsnsBulkDestroy($asn_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asn_request** | [**\OpenAPI\Client\Model\ASNRequest[]**](../Model/ASNRequest.md)|  | |

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

## `ipamAsnsBulkPartialUpdate()`

```php
ipamAsnsBulkPartialUpdate($asn_request): \OpenAPI\Client\Model\ASN[]
```



Patch a list of ASN objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asn_request = array(new \OpenAPI\Client\Model\ASNRequest()); // \OpenAPI\Client\Model\ASNRequest[]

try {
    $result = $apiInstance->ipamAsnsBulkPartialUpdate($asn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asn_request** | [**\OpenAPI\Client\Model\ASNRequest[]**](../Model/ASNRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ASN[]**](../Model/ASN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnsBulkUpdate()`

```php
ipamAsnsBulkUpdate($asn_request): \OpenAPI\Client\Model\ASN[]
```



Put a list of ASN objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asn_request = array(new \OpenAPI\Client\Model\ASNRequest()); // \OpenAPI\Client\Model\ASNRequest[]

try {
    $result = $apiInstance->ipamAsnsBulkUpdate($asn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asn_request** | [**\OpenAPI\Client\Model\ASNRequest[]**](../Model/ASNRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ASN[]**](../Model/ASN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnsCreate()`

```php
ipamAsnsCreate($asn_request): \OpenAPI\Client\Model\ASN
```



Post a list of ASN objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asn_request = new \OpenAPI\Client\Model\ASNRequest(); // \OpenAPI\Client\Model\ASNRequest

try {
    $result = $apiInstance->ipamAsnsCreate($asn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asn_request** | [**\OpenAPI\Client\Model\ASNRequest**](../Model/ASNRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ASN**](../Model/ASN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnsDestroy()`

```php
ipamAsnsDestroy($id)
```



Delete a ASN object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this ASN.

try {
    $apiInstance->ipamAsnsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this ASN. | |

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

## `ipamAsnsList()`

```php
ipamAsnsList($asn, $asn__empty, $asn__gt, $asn__gte, $asn__lt, $asn__lte, $asn__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $provider, $provider__n, $provider_id, $provider_id__n, $q, $rir, $rir__n, $rir_id, $rir_id__n, $site, $site__n, $site_id, $site_id__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedASNList
```



Get a list of ASN objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asn = array(56); // int[]
$asn__empty = True; // bool
$asn__gt = array(56); // int[]
$asn__gte = array(56); // int[]
$asn__lt = array(56); // int[]
$asn__lte = array(56); // int[]
$asn__n = array(56); // int[]
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
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$provider = array('provider_example'); // string[] | Provider (slug)
$provider__n = array('provider__n_example'); // string[] | Provider (slug)
$provider_id = array(56); // int[] | Provider (ID)
$provider_id__n = array(56); // int[] | Provider (ID)
$q = 'q_example'; // string | Search
$rir = array('rir_example'); // string[] | RIR (slug)
$rir__n = array('rir__n_example'); // string[] | RIR (slug)
$rir_id = array(56); // int[] | RIR (ID)
$rir_id__n = array(56); // int[] | RIR (ID)
$site = array('site_example'); // string[] | Site (slug)
$site__n = array('site__n_example'); // string[] | Site (slug)
$site_id = array(56); // int[] | Site (ID)
$site_id__n = array(56); // int[] | Site (ID)
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array(56); // int[] | Tenant Group (slug)
$tenant_group__n = array(56); // int[] | Tenant Group (slug)
$tenant_group_id = array(56); // int[] | Tenant Group (ID)
$tenant_group_id__n = array(56); // int[] | Tenant Group (ID)
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->ipamAsnsList($asn, $asn__empty, $asn__gt, $asn__gte, $asn__lt, $asn__lte, $asn__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $provider, $provider__n, $provider_id, $provider_id__n, $q, $rir, $rir__n, $rir_id, $rir_id__n, $site, $site__n, $site_id, $site_id__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asn** | [**int[]**](../Model/int.md)|  | [optional] |
| **asn__empty** | **bool**|  | [optional] |
| **asn__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **asn__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **asn__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **asn__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **asn__n** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **provider** | [**string[]**](../Model/string.md)| Provider (slug) | [optional] |
| **provider__n** | [**string[]**](../Model/string.md)| Provider (slug) | [optional] |
| **provider_id** | [**int[]**](../Model/int.md)| Provider (ID) | [optional] |
| **provider_id__n** | [**int[]**](../Model/int.md)| Provider (ID) | [optional] |
| **q** | **string**| Search | [optional] |
| **rir** | [**string[]**](../Model/string.md)| RIR (slug) | [optional] |
| **rir__n** | [**string[]**](../Model/string.md)| RIR (slug) | [optional] |
| **rir_id** | [**int[]**](../Model/int.md)| RIR (ID) | [optional] |
| **rir_id__n** | [**int[]**](../Model/int.md)| RIR (ID) | [optional] |
| **site** | [**string[]**](../Model/string.md)| Site (slug) | [optional] |
| **site__n** | [**string[]**](../Model/string.md)| Site (slug) | [optional] |
| **site_id** | [**int[]**](../Model/int.md)| Site (ID) | [optional] |
| **site_id__n** | [**int[]**](../Model/int.md)| Site (ID) | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group__n** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedASNList**](../Model/PaginatedASNList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnsPartialUpdate()`

```php
ipamAsnsPartialUpdate($id, $patched_asn_request): \OpenAPI\Client\Model\ASN
```



Patch a ASN object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this ASN.
$patched_asn_request = new \OpenAPI\Client\Model\PatchedASNRequest(); // \OpenAPI\Client\Model\PatchedASNRequest

try {
    $result = $apiInstance->ipamAsnsPartialUpdate($id, $patched_asn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this ASN. | |
| **patched_asn_request** | [**\OpenAPI\Client\Model\PatchedASNRequest**](../Model/PatchedASNRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ASN**](../Model/ASN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnsRetrieve()`

```php
ipamAsnsRetrieve($id): \OpenAPI\Client\Model\ASN
```



Get a ASN object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this ASN.

try {
    $result = $apiInstance->ipamAsnsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this ASN. | |

### Return type

[**\OpenAPI\Client\Model\ASN**](../Model/ASN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamAsnsUpdate()`

```php
ipamAsnsUpdate($id, $asn_request): \OpenAPI\Client\Model\ASN
```



Put a ASN object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this ASN.
$asn_request = new \OpenAPI\Client\Model\ASNRequest(); // \OpenAPI\Client\Model\ASNRequest

try {
    $result = $apiInstance->ipamAsnsUpdate($id, $asn_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamAsnsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this ASN. | |
| **asn_request** | [**\OpenAPI\Client\Model\ASNRequest**](../Model/ASNRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ASN**](../Model/ASN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupAssignmentsBulkDestroy()`

```php
ipamFhrpGroupAssignmentsBulkDestroy($fhrp_group_assignment_request)
```



Delete a list of FHRP group assignment objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fhrp_group_assignment_request = array(new \OpenAPI\Client\Model\FHRPGroupAssignmentRequest()); // \OpenAPI\Client\Model\FHRPGroupAssignmentRequest[]

try {
    $apiInstance->ipamFhrpGroupAssignmentsBulkDestroy($fhrp_group_assignment_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupAssignmentsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fhrp_group_assignment_request** | [**\OpenAPI\Client\Model\FHRPGroupAssignmentRequest[]**](../Model/FHRPGroupAssignmentRequest.md)|  | |

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

## `ipamFhrpGroupAssignmentsBulkPartialUpdate()`

```php
ipamFhrpGroupAssignmentsBulkPartialUpdate($fhrp_group_assignment_request): \OpenAPI\Client\Model\FHRPGroupAssignment[]
```



Patch a list of FHRP group assignment objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fhrp_group_assignment_request = array(new \OpenAPI\Client\Model\FHRPGroupAssignmentRequest()); // \OpenAPI\Client\Model\FHRPGroupAssignmentRequest[]

try {
    $result = $apiInstance->ipamFhrpGroupAssignmentsBulkPartialUpdate($fhrp_group_assignment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupAssignmentsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fhrp_group_assignment_request** | [**\OpenAPI\Client\Model\FHRPGroupAssignmentRequest[]**](../Model/FHRPGroupAssignmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FHRPGroupAssignment[]**](../Model/FHRPGroupAssignment.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupAssignmentsBulkUpdate()`

```php
ipamFhrpGroupAssignmentsBulkUpdate($fhrp_group_assignment_request): \OpenAPI\Client\Model\FHRPGroupAssignment[]
```



Put a list of FHRP group assignment objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fhrp_group_assignment_request = array(new \OpenAPI\Client\Model\FHRPGroupAssignmentRequest()); // \OpenAPI\Client\Model\FHRPGroupAssignmentRequest[]

try {
    $result = $apiInstance->ipamFhrpGroupAssignmentsBulkUpdate($fhrp_group_assignment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupAssignmentsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fhrp_group_assignment_request** | [**\OpenAPI\Client\Model\FHRPGroupAssignmentRequest[]**](../Model/FHRPGroupAssignmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FHRPGroupAssignment[]**](../Model/FHRPGroupAssignment.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupAssignmentsCreate()`

```php
ipamFhrpGroupAssignmentsCreate($fhrp_group_assignment_request): \OpenAPI\Client\Model\FHRPGroupAssignment
```



Post a list of FHRP group assignment objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fhrp_group_assignment_request = new \OpenAPI\Client\Model\FHRPGroupAssignmentRequest(); // \OpenAPI\Client\Model\FHRPGroupAssignmentRequest

try {
    $result = $apiInstance->ipamFhrpGroupAssignmentsCreate($fhrp_group_assignment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupAssignmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fhrp_group_assignment_request** | [**\OpenAPI\Client\Model\FHRPGroupAssignmentRequest**](../Model/FHRPGroupAssignmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FHRPGroupAssignment**](../Model/FHRPGroupAssignment.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupAssignmentsDestroy()`

```php
ipamFhrpGroupAssignmentsDestroy($id)
```



Delete a FHRP group assignment object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this FHRP group assignment.

try {
    $apiInstance->ipamFhrpGroupAssignmentsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupAssignmentsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this FHRP group assignment. | |

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

## `ipamFhrpGroupAssignmentsList()`

```php
ipamFhrpGroupAssignmentsList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $device, $device_id, $group_id, $group_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface_id, $interface_id__empty, $interface_id__gt, $interface_id__gte, $interface_id__lt, $interface_id__lte, $interface_id__n, $interface_type, $interface_type__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $priority, $priority__empty, $priority__gt, $priority__gte, $priority__lt, $priority__lte, $priority__n, $updated_by_request, $virtual_machine, $virtual_machine_id): \OpenAPI\Client\Model\PaginatedFHRPGroupAssignmentList
```



Get a list of FHRP group assignment objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
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
$device = array('device_example'); // string[]
$device_id = array(56); // int[]
$group_id = array(56); // int[] | Group (ID)
$group_id__n = array(56); // int[] | Group (ID)
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$interface_id = array(56); // int[]
$interface_id__empty = True; // bool
$interface_id__gt = array(56); // int[]
$interface_id__gte = array(56); // int[]
$interface_id__lt = array(56); // int[]
$interface_id__lte = array(56); // int[]
$interface_id__n = array(56); // int[]
$interface_type = 'interface_type_example'; // string
$interface_type__n = 'interface_type__n_example'; // string
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
$priority = array(56); // int[]
$priority__empty = True; // bool
$priority__gt = array(56); // int[]
$priority__gte = array(56); // int[]
$priority__lt = array(56); // int[]
$priority__lte = array(56); // int[]
$priority__n = array(56); // int[]
$updated_by_request = 'updated_by_request_example'; // string
$virtual_machine = array('virtual_machine_example'); // string[]
$virtual_machine_id = array(56); // int[]

try {
    $result = $apiInstance->ipamFhrpGroupAssignmentsList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $device, $device_id, $group_id, $group_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface_id, $interface_id__empty, $interface_id__gt, $interface_id__gte, $interface_id__lt, $interface_id__lte, $interface_id__n, $interface_type, $interface_type__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $priority, $priority__empty, $priority__gt, $priority__gte, $priority__lt, $priority__lte, $priority__n, $updated_by_request, $virtual_machine, $virtual_machine_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupAssignmentsList: ', $e->getMessage(), PHP_EOL;
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
| **device** | [**string[]**](../Model/string.md)|  | [optional] |
| **device_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **group_id** | [**int[]**](../Model/int.md)| Group (ID) | [optional] |
| **group_id__n** | [**int[]**](../Model/int.md)| Group (ID) | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_id__empty** | **bool**|  | [optional] |
| **interface_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface_type** | **string**|  | [optional] |
| **interface_type__n** | **string**|  | [optional] |
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
| **priority** | [**int[]**](../Model/int.md)|  | [optional] |
| **priority__empty** | **bool**|  | [optional] |
| **priority__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **priority__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **priority__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **priority__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **priority__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **virtual_machine** | [**string[]**](../Model/string.md)|  | [optional] |
| **virtual_machine_id** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedFHRPGroupAssignmentList**](../Model/PaginatedFHRPGroupAssignmentList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupAssignmentsPartialUpdate()`

```php
ipamFhrpGroupAssignmentsPartialUpdate($id, $patched_fhrp_group_assignment_request): \OpenAPI\Client\Model\FHRPGroupAssignment
```



Patch a FHRP group assignment object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this FHRP group assignment.
$patched_fhrp_group_assignment_request = new \OpenAPI\Client\Model\PatchedFHRPGroupAssignmentRequest(); // \OpenAPI\Client\Model\PatchedFHRPGroupAssignmentRequest

try {
    $result = $apiInstance->ipamFhrpGroupAssignmentsPartialUpdate($id, $patched_fhrp_group_assignment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupAssignmentsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this FHRP group assignment. | |
| **patched_fhrp_group_assignment_request** | [**\OpenAPI\Client\Model\PatchedFHRPGroupAssignmentRequest**](../Model/PatchedFHRPGroupAssignmentRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FHRPGroupAssignment**](../Model/FHRPGroupAssignment.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupAssignmentsRetrieve()`

```php
ipamFhrpGroupAssignmentsRetrieve($id): \OpenAPI\Client\Model\FHRPGroupAssignment
```



Get a FHRP group assignment object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this FHRP group assignment.

try {
    $result = $apiInstance->ipamFhrpGroupAssignmentsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupAssignmentsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this FHRP group assignment. | |

### Return type

[**\OpenAPI\Client\Model\FHRPGroupAssignment**](../Model/FHRPGroupAssignment.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupAssignmentsUpdate()`

```php
ipamFhrpGroupAssignmentsUpdate($id, $fhrp_group_assignment_request): \OpenAPI\Client\Model\FHRPGroupAssignment
```



Put a FHRP group assignment object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this FHRP group assignment.
$fhrp_group_assignment_request = new \OpenAPI\Client\Model\FHRPGroupAssignmentRequest(); // \OpenAPI\Client\Model\FHRPGroupAssignmentRequest

try {
    $result = $apiInstance->ipamFhrpGroupAssignmentsUpdate($id, $fhrp_group_assignment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupAssignmentsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this FHRP group assignment. | |
| **fhrp_group_assignment_request** | [**\OpenAPI\Client\Model\FHRPGroupAssignmentRequest**](../Model/FHRPGroupAssignmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FHRPGroupAssignment**](../Model/FHRPGroupAssignment.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupsBulkDestroy()`

```php
ipamFhrpGroupsBulkDestroy($fhrp_group_request)
```



Delete a list of FHRP group objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fhrp_group_request = array(new \OpenAPI\Client\Model\FHRPGroupRequest()); // \OpenAPI\Client\Model\FHRPGroupRequest[]

try {
    $apiInstance->ipamFhrpGroupsBulkDestroy($fhrp_group_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fhrp_group_request** | [**\OpenAPI\Client\Model\FHRPGroupRequest[]**](../Model/FHRPGroupRequest.md)|  | |

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

## `ipamFhrpGroupsBulkPartialUpdate()`

```php
ipamFhrpGroupsBulkPartialUpdate($fhrp_group_request): \OpenAPI\Client\Model\FHRPGroup[]
```



Patch a list of FHRP group objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fhrp_group_request = array(new \OpenAPI\Client\Model\FHRPGroupRequest()); // \OpenAPI\Client\Model\FHRPGroupRequest[]

try {
    $result = $apiInstance->ipamFhrpGroupsBulkPartialUpdate($fhrp_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fhrp_group_request** | [**\OpenAPI\Client\Model\FHRPGroupRequest[]**](../Model/FHRPGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FHRPGroup[]**](../Model/FHRPGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupsBulkUpdate()`

```php
ipamFhrpGroupsBulkUpdate($fhrp_group_request): \OpenAPI\Client\Model\FHRPGroup[]
```



Put a list of FHRP group objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fhrp_group_request = array(new \OpenAPI\Client\Model\FHRPGroupRequest()); // \OpenAPI\Client\Model\FHRPGroupRequest[]

try {
    $result = $apiInstance->ipamFhrpGroupsBulkUpdate($fhrp_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fhrp_group_request** | [**\OpenAPI\Client\Model\FHRPGroupRequest[]**](../Model/FHRPGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FHRPGroup[]**](../Model/FHRPGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupsCreate()`

```php
ipamFhrpGroupsCreate($fhrp_group_request): \OpenAPI\Client\Model\FHRPGroup
```



Post a list of FHRP group objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fhrp_group_request = new \OpenAPI\Client\Model\FHRPGroupRequest(); // \OpenAPI\Client\Model\FHRPGroupRequest

try {
    $result = $apiInstance->ipamFhrpGroupsCreate($fhrp_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fhrp_group_request** | [**\OpenAPI\Client\Model\FHRPGroupRequest**](../Model/FHRPGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FHRPGroup**](../Model/FHRPGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupsDestroy()`

```php
ipamFhrpGroupsDestroy($id)
```



Delete a FHRP group object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this FHRP group.

try {
    $apiInstance->ipamFhrpGroupsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this FHRP group. | |

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

## `ipamFhrpGroupsList()`

```php
ipamFhrpGroupsList($auth_key, $auth_key__empty, $auth_key__ic, $auth_key__ie, $auth_key__iew, $auth_key__isw, $auth_key__n, $auth_key__nic, $auth_key__nie, $auth_key__niew, $auth_key__nisw, $auth_type, $auth_type__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $group_id, $group_id__empty, $group_id__gt, $group_id__gte, $group_id__lt, $group_id__lte, $group_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $protocol, $protocol__n, $q, $related_ip, $tag, $tag__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedFHRPGroupList
```



Get a list of FHRP group objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_key = array('auth_key_example'); // string[]
$auth_key__empty = True; // bool
$auth_key__ic = array('auth_key__ic_example'); // string[]
$auth_key__ie = array('auth_key__ie_example'); // string[]
$auth_key__iew = array('auth_key__iew_example'); // string[]
$auth_key__isw = array('auth_key__isw_example'); // string[]
$auth_key__n = array('auth_key__n_example'); // string[]
$auth_key__nic = array('auth_key__nic_example'); // string[]
$auth_key__nie = array('auth_key__nie_example'); // string[]
$auth_key__niew = array('auth_key__niew_example'); // string[]
$auth_key__nisw = array('auth_key__nisw_example'); // string[]
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
$group_id = array(56); // int[]
$group_id__empty = True; // bool
$group_id__gt = array(56); // int[]
$group_id__gte = array(56); // int[]
$group_id__lt = array(56); // int[]
$group_id__lte = array(56); // int[]
$group_id__n = array(56); // int[]
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
$protocol = array('protocol_example'); // string[]
$protocol__n = array('protocol__n_example'); // string[]
$q = 'q_example'; // string | Search
$related_ip = array('related_ip_example'); // string[]
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->ipamFhrpGroupsList($auth_key, $auth_key__empty, $auth_key__ic, $auth_key__ie, $auth_key__iew, $auth_key__isw, $auth_key__n, $auth_key__nic, $auth_key__nie, $auth_key__niew, $auth_key__nisw, $auth_type, $auth_type__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $group_id, $group_id__empty, $group_id__gt, $group_id__gte, $group_id__lt, $group_id__lte, $group_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $protocol, $protocol__n, $q, $related_ip, $tag, $tag__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_key** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_key__empty** | **bool**|  | [optional] |
| **auth_key__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_key__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_key__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_key__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_key__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_key__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_key__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_key__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **auth_key__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **group_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **group_id__empty** | **bool**|  | [optional] |
| **group_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **group_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **group_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **group_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **group_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **protocol** | [**string[]**](../Model/string.md)|  | [optional] |
| **protocol__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**| Search | [optional] |
| **related_ip** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedFHRPGroupList**](../Model/PaginatedFHRPGroupList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupsPartialUpdate()`

```php
ipamFhrpGroupsPartialUpdate($id, $patched_fhrp_group_request): \OpenAPI\Client\Model\FHRPGroup
```



Patch a FHRP group object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this FHRP group.
$patched_fhrp_group_request = new \OpenAPI\Client\Model\PatchedFHRPGroupRequest(); // \OpenAPI\Client\Model\PatchedFHRPGroupRequest

try {
    $result = $apiInstance->ipamFhrpGroupsPartialUpdate($id, $patched_fhrp_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this FHRP group. | |
| **patched_fhrp_group_request** | [**\OpenAPI\Client\Model\PatchedFHRPGroupRequest**](../Model/PatchedFHRPGroupRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\FHRPGroup**](../Model/FHRPGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupsRetrieve()`

```php
ipamFhrpGroupsRetrieve($id): \OpenAPI\Client\Model\FHRPGroup
```



Get a FHRP group object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this FHRP group.

try {
    $result = $apiInstance->ipamFhrpGroupsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this FHRP group. | |

### Return type

[**\OpenAPI\Client\Model\FHRPGroup**](../Model/FHRPGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamFhrpGroupsUpdate()`

```php
ipamFhrpGroupsUpdate($id, $fhrp_group_request): \OpenAPI\Client\Model\FHRPGroup
```



Put a FHRP group object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this FHRP group.
$fhrp_group_request = new \OpenAPI\Client\Model\FHRPGroupRequest(); // \OpenAPI\Client\Model\FHRPGroupRequest

try {
    $result = $apiInstance->ipamFhrpGroupsUpdate($id, $fhrp_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamFhrpGroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this FHRP group. | |
| **fhrp_group_request** | [**\OpenAPI\Client\Model\FHRPGroupRequest**](../Model/FHRPGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FHRPGroup**](../Model/FHRPGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpAddressesBulkDestroy()`

```php
ipamIpAddressesBulkDestroy($ip_address_request)
```



Delete a list of IP address objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_address_request = array(new \OpenAPI\Client\Model\IPAddressRequest()); // \OpenAPI\Client\Model\IPAddressRequest[]

try {
    $apiInstance->ipamIpAddressesBulkDestroy($ip_address_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpAddressesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ip_address_request** | [**\OpenAPI\Client\Model\IPAddressRequest[]**](../Model/IPAddressRequest.md)|  | |

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

## `ipamIpAddressesBulkPartialUpdate()`

```php
ipamIpAddressesBulkPartialUpdate($ip_address_request): \OpenAPI\Client\Model\IPAddress[]
```



Patch a list of IP address objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_address_request = array(new \OpenAPI\Client\Model\IPAddressRequest()); // \OpenAPI\Client\Model\IPAddressRequest[]

try {
    $result = $apiInstance->ipamIpAddressesBulkPartialUpdate($ip_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpAddressesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ip_address_request** | [**\OpenAPI\Client\Model\IPAddressRequest[]**](../Model/IPAddressRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IPAddress[]**](../Model/IPAddress.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpAddressesBulkUpdate()`

```php
ipamIpAddressesBulkUpdate($ip_address_request): \OpenAPI\Client\Model\IPAddress[]
```



Put a list of IP address objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_address_request = array(new \OpenAPI\Client\Model\IPAddressRequest()); // \OpenAPI\Client\Model\IPAddressRequest[]

try {
    $result = $apiInstance->ipamIpAddressesBulkUpdate($ip_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpAddressesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ip_address_request** | [**\OpenAPI\Client\Model\IPAddressRequest[]**](../Model/IPAddressRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IPAddress[]**](../Model/IPAddress.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpAddressesCreate()`

```php
ipamIpAddressesCreate($writable_ip_address_request): \OpenAPI\Client\Model\IPAddress
```



Post a list of IP address objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_ip_address_request = new \OpenAPI\Client\Model\WritableIPAddressRequest(); // \OpenAPI\Client\Model\WritableIPAddressRequest

try {
    $result = $apiInstance->ipamIpAddressesCreate($writable_ip_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpAddressesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_ip_address_request** | [**\OpenAPI\Client\Model\WritableIPAddressRequest**](../Model/WritableIPAddressRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IPAddress**](../Model/IPAddress.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpAddressesDestroy()`

```php
ipamIpAddressesDestroy($id)
```



Delete a IP address object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this IP address.

try {
    $apiInstance->ipamIpAddressesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpAddressesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this IP address. | |

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

## `ipamIpAddressesList()`

```php
ipamIpAddressesList($address, $assigned, $assigned_object_id, $assigned_object_id__empty, $assigned_object_id__gt, $assigned_object_id__gte, $assigned_object_id__lt, $assigned_object_id__lte, $assigned_object_id__n, $assigned_object_type, $assigned_object_type__n, $assigned_to_interface, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device, $device_id, $dns_name, $dns_name__empty, $dns_name__ic, $dns_name__ie, $dns_name__iew, $dns_name__isw, $dns_name__n, $dns_name__nic, $dns_name__nie, $dns_name__niew, $dns_name__nisw, $family, $fhrpgroup_id, $fhrpgroup_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface, $interface__n, $interface_id, $interface_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $mask_length, $mask_length__gte, $mask_length__lte, $modified_by_request, $nat_inside_id, $nat_inside_id__n, $offset, $ordering, $parent, $present_in_vrf, $present_in_vrf_id, $q, $role, $role__n, $service_id, $service_id__n, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $virtual_machine, $virtual_machine_id, $vminterface, $vminterface__n, $vminterface_id, $vminterface_id__n, $vrf, $vrf__n, $vrf_id, $vrf_id__n): \OpenAPI\Client\Model\PaginatedIPAddressList
```



Get a list of IP address objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = array('address_example'); // string[]
$assigned = True; // bool | Is assigned
$assigned_object_id = array(56); // int[]
$assigned_object_id__empty = True; // bool
$assigned_object_id__gt = array(56); // int[]
$assigned_object_id__gte = array(56); // int[]
$assigned_object_id__lt = array(56); // int[]
$assigned_object_id__lte = array(56); // int[]
$assigned_object_id__n = array(56); // int[]
$assigned_object_type = 56; // int
$assigned_object_type__n = 56; // int
$assigned_to_interface = True; // bool | Is assigned to an interface
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
$device = array('device_example'); // string[]
$device_id = array(56); // int[]
$dns_name = array('dns_name_example'); // string[]
$dns_name__empty = True; // bool
$dns_name__ic = array('dns_name__ic_example'); // string[]
$dns_name__ie = array('dns_name__ie_example'); // string[]
$dns_name__iew = array('dns_name__iew_example'); // string[]
$dns_name__isw = array('dns_name__isw_example'); // string[]
$dns_name__n = array('dns_name__n_example'); // string[]
$dns_name__nic = array('dns_name__nic_example'); // string[]
$dns_name__nie = array('dns_name__nie_example'); // string[]
$dns_name__niew = array('dns_name__niew_example'); // string[]
$dns_name__nisw = array('dns_name__nisw_example'); // string[]
$family = 3.4; // float
$fhrpgroup_id = array(56); // int[] | FHRP group (ID)
$fhrpgroup_id__n = array(56); // int[] | FHRP group (ID)
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$interface = array('interface_example'); // string[] | Interface (name)
$interface__n = array('interface__n_example'); // string[] | Interface (name)
$interface_id = array(56); // int[] | Interface (ID)
$interface_id__n = array(56); // int[] | Interface (ID)
$last_updated = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$limit = 56; // int | Number of results to return per page.
$mask_length = array(56); // int[]
$mask_length__gte = 3.4; // float
$mask_length__lte = 3.4; // float
$modified_by_request = 'modified_by_request_example'; // string
$nat_inside_id = array(56); // int[] | NAT inside IP address (ID)
$nat_inside_id__n = array(56); // int[] | NAT inside IP address (ID)
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$parent = array('parent_example'); // string[]
$present_in_vrf = 'present_in_vrf_example'; // string
$present_in_vrf_id = 'present_in_vrf_id_example'; // string
$q = 'q_example'; // string | Search
$role = array('role_example'); // string[] | The functional role of this IP
$role__n = array('role__n_example'); // string[] | The functional role of this IP
$service_id = array(56); // int[] | Service (ID)
$service_id__n = array(56); // int[] | Service (ID)
$status = array('status_example'); // string[] | The operational status of this IP
$status__n = array('status__n_example'); // string[] | The operational status of this IP
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array(56); // int[] | Tenant Group (slug)
$tenant_group__n = array(56); // int[] | Tenant Group (slug)
$tenant_group_id = array(56); // int[] | Tenant Group (ID)
$tenant_group_id__n = array(56); // int[] | Tenant Group (ID)
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string
$virtual_machine = array('virtual_machine_example'); // string[]
$virtual_machine_id = array(56); // int[]
$vminterface = array('vminterface_example'); // string[] | VM interface (name)
$vminterface__n = array('vminterface__n_example'); // string[] | VM interface (name)
$vminterface_id = array(56); // int[] | VM interface (ID)
$vminterface_id__n = array(56); // int[] | VM interface (ID)
$vrf = array('vrf_example'); // string[] | VRF (RD)
$vrf__n = array('vrf__n_example'); // string[] | VRF (RD)
$vrf_id = array(56); // int[] | VRF
$vrf_id__n = array(56); // int[] | VRF

try {
    $result = $apiInstance->ipamIpAddressesList($address, $assigned, $assigned_object_id, $assigned_object_id__empty, $assigned_object_id__gt, $assigned_object_id__gte, $assigned_object_id__lt, $assigned_object_id__lte, $assigned_object_id__n, $assigned_object_type, $assigned_object_type__n, $assigned_to_interface, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device, $device_id, $dns_name, $dns_name__empty, $dns_name__ic, $dns_name__ie, $dns_name__iew, $dns_name__isw, $dns_name__n, $dns_name__nic, $dns_name__nie, $dns_name__niew, $dns_name__nisw, $family, $fhrpgroup_id, $fhrpgroup_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $interface, $interface__n, $interface_id, $interface_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $mask_length, $mask_length__gte, $mask_length__lte, $modified_by_request, $nat_inside_id, $nat_inside_id__n, $offset, $ordering, $parent, $present_in_vrf, $present_in_vrf_id, $q, $role, $role__n, $service_id, $service_id__n, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $virtual_machine, $virtual_machine_id, $vminterface, $vminterface__n, $vminterface_id, $vminterface_id__n, $vrf, $vrf__n, $vrf_id, $vrf_id__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpAddressesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | [**string[]**](../Model/string.md)|  | [optional] |
| **assigned** | **bool**| Is assigned | [optional] |
| **assigned_object_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__empty** | **bool**|  | [optional] |
| **assigned_object_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_type** | **int**|  | [optional] |
| **assigned_object_type__n** | **int**|  | [optional] |
| **assigned_to_interface** | **bool**| Is assigned to an interface | [optional] |
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
| **device** | [**string[]**](../Model/string.md)|  | [optional] |
| **device_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **dns_name** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__empty** | **bool**|  | [optional] |
| **dns_name__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **dns_name__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **family** | **float**|  | [optional] |
| **fhrpgroup_id** | [**int[]**](../Model/int.md)| FHRP group (ID) | [optional] |
| **fhrpgroup_id__n** | [**int[]**](../Model/int.md)| FHRP group (ID) | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **interface** | [**string[]**](../Model/string.md)| Interface (name) | [optional] |
| **interface__n** | [**string[]**](../Model/string.md)| Interface (name) | [optional] |
| **interface_id** | [**int[]**](../Model/int.md)| Interface (ID) | [optional] |
| **interface_id__n** | [**int[]**](../Model/int.md)| Interface (ID) | [optional] |
| **last_updated** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **mask_length** | [**int[]**](../Model/int.md)|  | [optional] |
| **mask_length__gte** | **float**|  | [optional] |
| **mask_length__lte** | **float**|  | [optional] |
| **modified_by_request** | **string**|  | [optional] |
| **nat_inside_id** | [**int[]**](../Model/int.md)| NAT inside IP address (ID) | [optional] |
| **nat_inside_id__n** | [**int[]**](../Model/int.md)| NAT inside IP address (ID) | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **parent** | [**string[]**](../Model/string.md)|  | [optional] |
| **present_in_vrf** | **string**|  | [optional] |
| **present_in_vrf_id** | **string**|  | [optional] |
| **q** | **string**| Search | [optional] |
| **role** | [**string[]**](../Model/string.md)| The functional role of this IP | [optional] |
| **role__n** | [**string[]**](../Model/string.md)| The functional role of this IP | [optional] |
| **service_id** | [**int[]**](../Model/int.md)| Service (ID) | [optional] |
| **service_id__n** | [**int[]**](../Model/int.md)| Service (ID) | [optional] |
| **status** | [**string[]**](../Model/string.md)| The operational status of this IP | [optional] |
| **status__n** | [**string[]**](../Model/string.md)| The operational status of this IP | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group__n** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **virtual_machine** | [**string[]**](../Model/string.md)|  | [optional] |
| **virtual_machine_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **vminterface** | [**string[]**](../Model/string.md)| VM interface (name) | [optional] |
| **vminterface__n** | [**string[]**](../Model/string.md)| VM interface (name) | [optional] |
| **vminterface_id** | [**int[]**](../Model/int.md)| VM interface (ID) | [optional] |
| **vminterface_id__n** | [**int[]**](../Model/int.md)| VM interface (ID) | [optional] |
| **vrf** | [**string[]**](../Model/string.md)| VRF (RD) | [optional] |
| **vrf__n** | [**string[]**](../Model/string.md)| VRF (RD) | [optional] |
| **vrf_id** | [**int[]**](../Model/int.md)| VRF | [optional] |
| **vrf_id__n** | [**int[]**](../Model/int.md)| VRF | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedIPAddressList**](../Model/PaginatedIPAddressList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpAddressesPartialUpdate()`

```php
ipamIpAddressesPartialUpdate($id, $patched_writable_ip_address_request): \OpenAPI\Client\Model\IPAddress
```



Patch a IP address object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this IP address.
$patched_writable_ip_address_request = new \OpenAPI\Client\Model\PatchedWritableIPAddressRequest(); // \OpenAPI\Client\Model\PatchedWritableIPAddressRequest

try {
    $result = $apiInstance->ipamIpAddressesPartialUpdate($id, $patched_writable_ip_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpAddressesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this IP address. | |
| **patched_writable_ip_address_request** | [**\OpenAPI\Client\Model\PatchedWritableIPAddressRequest**](../Model/PatchedWritableIPAddressRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\IPAddress**](../Model/IPAddress.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpAddressesRetrieve()`

```php
ipamIpAddressesRetrieve($id): \OpenAPI\Client\Model\IPAddress
```



Get a IP address object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this IP address.

try {
    $result = $apiInstance->ipamIpAddressesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpAddressesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this IP address. | |

### Return type

[**\OpenAPI\Client\Model\IPAddress**](../Model/IPAddress.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpAddressesUpdate()`

```php
ipamIpAddressesUpdate($id, $writable_ip_address_request): \OpenAPI\Client\Model\IPAddress
```



Put a IP address object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this IP address.
$writable_ip_address_request = new \OpenAPI\Client\Model\WritableIPAddressRequest(); // \OpenAPI\Client\Model\WritableIPAddressRequest

try {
    $result = $apiInstance->ipamIpAddressesUpdate($id, $writable_ip_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpAddressesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this IP address. | |
| **writable_ip_address_request** | [**\OpenAPI\Client\Model\WritableIPAddressRequest**](../Model/WritableIPAddressRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IPAddress**](../Model/IPAddress.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpRangesAvailableIpsCreate()`

```php
ipamIpRangesAvailableIpsCreate($id, $ip_address_request): \OpenAPI\Client\Model\IPAddress[]
```



Post a IP address object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$ip_address_request = array(new \OpenAPI\Client\Model\IPAddressRequest()); // \OpenAPI\Client\Model\IPAddressRequest[]

try {
    $result = $apiInstance->ipamIpRangesAvailableIpsCreate($id, $ip_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpRangesAvailableIpsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **ip_address_request** | [**\OpenAPI\Client\Model\IPAddressRequest[]**](../Model/IPAddressRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IPAddress[]**](../Model/IPAddress.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpRangesAvailableIpsList()`

```php
ipamIpRangesAvailableIpsList($id): \OpenAPI\Client\Model\AvailableIP[]
```



Get a IP address object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->ipamIpRangesAvailableIpsList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpRangesAvailableIpsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\AvailableIP[]**](../Model/AvailableIP.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpRangesBulkDestroy()`

```php
ipamIpRangesBulkDestroy($ip_range_request)
```



Delete a list of IP range objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_range_request = array(new \OpenAPI\Client\Model\IPRangeRequest()); // \OpenAPI\Client\Model\IPRangeRequest[]

try {
    $apiInstance->ipamIpRangesBulkDestroy($ip_range_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpRangesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ip_range_request** | [**\OpenAPI\Client\Model\IPRangeRequest[]**](../Model/IPRangeRequest.md)|  | |

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

## `ipamIpRangesBulkPartialUpdate()`

```php
ipamIpRangesBulkPartialUpdate($ip_range_request): \OpenAPI\Client\Model\IPRange[]
```



Patch a list of IP range objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_range_request = array(new \OpenAPI\Client\Model\IPRangeRequest()); // \OpenAPI\Client\Model\IPRangeRequest[]

try {
    $result = $apiInstance->ipamIpRangesBulkPartialUpdate($ip_range_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpRangesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ip_range_request** | [**\OpenAPI\Client\Model\IPRangeRequest[]**](../Model/IPRangeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IPRange[]**](../Model/IPRange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpRangesBulkUpdate()`

```php
ipamIpRangesBulkUpdate($ip_range_request): \OpenAPI\Client\Model\IPRange[]
```



Put a list of IP range objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_range_request = array(new \OpenAPI\Client\Model\IPRangeRequest()); // \OpenAPI\Client\Model\IPRangeRequest[]

try {
    $result = $apiInstance->ipamIpRangesBulkUpdate($ip_range_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpRangesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ip_range_request** | [**\OpenAPI\Client\Model\IPRangeRequest[]**](../Model/IPRangeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IPRange[]**](../Model/IPRange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpRangesCreate()`

```php
ipamIpRangesCreate($writable_ip_range_request): \OpenAPI\Client\Model\IPRange
```



Post a list of IP range objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_ip_range_request = new \OpenAPI\Client\Model\WritableIPRangeRequest(); // \OpenAPI\Client\Model\WritableIPRangeRequest

try {
    $result = $apiInstance->ipamIpRangesCreate($writable_ip_range_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpRangesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_ip_range_request** | [**\OpenAPI\Client\Model\WritableIPRangeRequest**](../Model/WritableIPRangeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IPRange**](../Model/IPRange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpRangesDestroy()`

```php
ipamIpRangesDestroy($id)
```



Delete a IP range object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this IP range.

try {
    $apiInstance->ipamIpRangesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpRangesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this IP range. | |

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

## `ipamIpRangesList()`

```php
ipamIpRangesList($contains, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $end_address, $family, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $mark_utilized, $modified_by_request, $offset, $ordering, $parent, $q, $role, $role__n, $role_id, $role_id__n, $size, $size__empty, $size__gt, $size__gte, $size__lt, $size__lte, $size__n, $start_address, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $vrf, $vrf__n, $vrf_id, $vrf_id__n): \OpenAPI\Client\Model\PaginatedIPRangeList
```



Get a list of IP range objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contains = 'contains_example'; // string | Ranges which contain this prefix or IP
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
$end_address = array('end_address_example'); // string[]
$family = 3.4; // float
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
$mark_utilized = True; // bool
$modified_by_request = 'modified_by_request_example'; // string
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$parent = array('parent_example'); // string[]
$q = 'q_example'; // string | Search
$role = array('role_example'); // string[] | Role (slug)
$role__n = array('role__n_example'); // string[] | Role (slug)
$role_id = array(56); // int[] | Role (ID)
$role_id__n = array(56); // int[] | Role (ID)
$size = array(56); // int[]
$size__empty = True; // bool
$size__gt = array(56); // int[]
$size__gte = array(56); // int[]
$size__lt = array(56); // int[]
$size__lte = array(56); // int[]
$size__n = array(56); // int[]
$start_address = array('start_address_example'); // string[]
$status = array('status_example'); // string[] | Operational status of this range
$status__n = array('status__n_example'); // string[] | Operational status of this range
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array(56); // int[] | Tenant Group (slug)
$tenant_group__n = array(56); // int[] | Tenant Group (slug)
$tenant_group_id = array(56); // int[] | Tenant Group (ID)
$tenant_group_id__n = array(56); // int[] | Tenant Group (ID)
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string
$vrf = array('vrf_example'); // string[] | VRF (RD)
$vrf__n = array('vrf__n_example'); // string[] | VRF (RD)
$vrf_id = array(56); // int[] | VRF
$vrf_id__n = array(56); // int[] | VRF

try {
    $result = $apiInstance->ipamIpRangesList($contains, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $end_address, $family, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $mark_utilized, $modified_by_request, $offset, $ordering, $parent, $q, $role, $role__n, $role_id, $role_id__n, $size, $size__empty, $size__gt, $size__gte, $size__lt, $size__lte, $size__n, $start_address, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $vrf, $vrf__n, $vrf_id, $vrf_id__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpRangesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contains** | **string**| Ranges which contain this prefix or IP | [optional] |
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
| **end_address** | [**string[]**](../Model/string.md)|  | [optional] |
| **family** | **float**|  | [optional] |
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
| **mark_utilized** | **bool**|  | [optional] |
| **modified_by_request** | **string**|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **parent** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**| Search | [optional] |
| **role** | [**string[]**](../Model/string.md)| Role (slug) | [optional] |
| **role__n** | [**string[]**](../Model/string.md)| Role (slug) | [optional] |
| **role_id** | [**int[]**](../Model/int.md)| Role (ID) | [optional] |
| **role_id__n** | [**int[]**](../Model/int.md)| Role (ID) | [optional] |
| **size** | [**int[]**](../Model/int.md)|  | [optional] |
| **size__empty** | **bool**|  | [optional] |
| **size__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **size__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **size__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **size__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **size__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **start_address** | [**string[]**](../Model/string.md)|  | [optional] |
| **status** | [**string[]**](../Model/string.md)| Operational status of this range | [optional] |
| **status__n** | [**string[]**](../Model/string.md)| Operational status of this range | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group__n** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **vrf** | [**string[]**](../Model/string.md)| VRF (RD) | [optional] |
| **vrf__n** | [**string[]**](../Model/string.md)| VRF (RD) | [optional] |
| **vrf_id** | [**int[]**](../Model/int.md)| VRF | [optional] |
| **vrf_id__n** | [**int[]**](../Model/int.md)| VRF | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedIPRangeList**](../Model/PaginatedIPRangeList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpRangesPartialUpdate()`

```php
ipamIpRangesPartialUpdate($id, $patched_writable_ip_range_request): \OpenAPI\Client\Model\IPRange
```



Patch a IP range object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this IP range.
$patched_writable_ip_range_request = new \OpenAPI\Client\Model\PatchedWritableIPRangeRequest(); // \OpenAPI\Client\Model\PatchedWritableIPRangeRequest

try {
    $result = $apiInstance->ipamIpRangesPartialUpdate($id, $patched_writable_ip_range_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpRangesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this IP range. | |
| **patched_writable_ip_range_request** | [**\OpenAPI\Client\Model\PatchedWritableIPRangeRequest**](../Model/PatchedWritableIPRangeRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\IPRange**](../Model/IPRange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpRangesRetrieve()`

```php
ipamIpRangesRetrieve($id): \OpenAPI\Client\Model\IPRange
```



Get a IP range object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this IP range.

try {
    $result = $apiInstance->ipamIpRangesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpRangesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this IP range. | |

### Return type

[**\OpenAPI\Client\Model\IPRange**](../Model/IPRange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamIpRangesUpdate()`

```php
ipamIpRangesUpdate($id, $writable_ip_range_request): \OpenAPI\Client\Model\IPRange
```



Put a IP range object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this IP range.
$writable_ip_range_request = new \OpenAPI\Client\Model\WritableIPRangeRequest(); // \OpenAPI\Client\Model\WritableIPRangeRequest

try {
    $result = $apiInstance->ipamIpRangesUpdate($id, $writable_ip_range_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamIpRangesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this IP range. | |
| **writable_ip_range_request** | [**\OpenAPI\Client\Model\WritableIPRangeRequest**](../Model/WritableIPRangeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IPRange**](../Model/IPRange.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamPrefixesAvailableIpsCreate()`

```php
ipamPrefixesAvailableIpsCreate($id, $ip_address_request): \OpenAPI\Client\Model\IPAddress[]
```



Post a IP address object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$ip_address_request = array(new \OpenAPI\Client\Model\IPAddressRequest()); // \OpenAPI\Client\Model\IPAddressRequest[]

try {
    $result = $apiInstance->ipamPrefixesAvailableIpsCreate($id, $ip_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesAvailableIpsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **ip_address_request** | [**\OpenAPI\Client\Model\IPAddressRequest[]**](../Model/IPAddressRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IPAddress[]**](../Model/IPAddress.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamPrefixesAvailableIpsList()`

```php
ipamPrefixesAvailableIpsList($id): \OpenAPI\Client\Model\AvailableIP[]
```



Get a IP address object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->ipamPrefixesAvailableIpsList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesAvailableIpsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\AvailableIP[]**](../Model/AvailableIP.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamPrefixesAvailablePrefixesCreate()`

```php
ipamPrefixesAvailablePrefixesCreate($id, $prefix_request): \OpenAPI\Client\Model\Prefix[]
```



Post a prefix object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$prefix_request = array(new \OpenAPI\Client\Model\PrefixRequest()); // \OpenAPI\Client\Model\PrefixRequest[]

try {
    $result = $apiInstance->ipamPrefixesAvailablePrefixesCreate($id, $prefix_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesAvailablePrefixesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **prefix_request** | [**\OpenAPI\Client\Model\PrefixRequest[]**](../Model/PrefixRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Prefix[]**](../Model/Prefix.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamPrefixesAvailablePrefixesList()`

```php
ipamPrefixesAvailablePrefixesList($id): \OpenAPI\Client\Model\AvailablePrefix[]
```



Get a prefix object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->ipamPrefixesAvailablePrefixesList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesAvailablePrefixesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\AvailablePrefix[]**](../Model/AvailablePrefix.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamPrefixesBulkDestroy()`

```php
ipamPrefixesBulkDestroy($prefix_request)
```



Delete a list of prefix objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prefix_request = array(new \OpenAPI\Client\Model\PrefixRequest()); // \OpenAPI\Client\Model\PrefixRequest[]

try {
    $apiInstance->ipamPrefixesBulkDestroy($prefix_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prefix_request** | [**\OpenAPI\Client\Model\PrefixRequest[]**](../Model/PrefixRequest.md)|  | |

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

## `ipamPrefixesBulkPartialUpdate()`

```php
ipamPrefixesBulkPartialUpdate($prefix_request): \OpenAPI\Client\Model\Prefix[]
```



Patch a list of prefix objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prefix_request = array(new \OpenAPI\Client\Model\PrefixRequest()); // \OpenAPI\Client\Model\PrefixRequest[]

try {
    $result = $apiInstance->ipamPrefixesBulkPartialUpdate($prefix_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prefix_request** | [**\OpenAPI\Client\Model\PrefixRequest[]**](../Model/PrefixRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Prefix[]**](../Model/Prefix.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamPrefixesBulkUpdate()`

```php
ipamPrefixesBulkUpdate($prefix_request): \OpenAPI\Client\Model\Prefix[]
```



Put a list of prefix objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$prefix_request = array(new \OpenAPI\Client\Model\PrefixRequest()); // \OpenAPI\Client\Model\PrefixRequest[]

try {
    $result = $apiInstance->ipamPrefixesBulkUpdate($prefix_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prefix_request** | [**\OpenAPI\Client\Model\PrefixRequest[]**](../Model/PrefixRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Prefix[]**](../Model/Prefix.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamPrefixesCreate()`

```php
ipamPrefixesCreate($writable_prefix_request): \OpenAPI\Client\Model\Prefix
```



Post a list of prefix objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_prefix_request = new \OpenAPI\Client\Model\WritablePrefixRequest(); // \OpenAPI\Client\Model\WritablePrefixRequest

try {
    $result = $apiInstance->ipamPrefixesCreate($writable_prefix_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_prefix_request** | [**\OpenAPI\Client\Model\WritablePrefixRequest**](../Model/WritablePrefixRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Prefix**](../Model/Prefix.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamPrefixesDestroy()`

```php
ipamPrefixesDestroy($id)
```



Delete a prefix object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this prefix.

try {
    $apiInstance->ipamPrefixesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this prefix. | |

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

## `ipamPrefixesList()`

```php
ipamPrefixesList($children, $children__empty, $children__gt, $children__gte, $children__lt, $children__lte, $children__n, $contains, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $depth, $depth__empty, $depth__gt, $depth__gte, $depth__lt, $depth__lte, $depth__n, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $family, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $is_pool, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $mark_utilized, $mask_length, $mask_length__gte, $mask_length__lte, $modified_by_request, $offset, $ordering, $prefix, $present_in_vrf, $present_in_vrf_id, $q, $region, $region__n, $region_id, $region_id__n, $role, $role__n, $role_id, $role_id__n, $site, $site__n, $site_group, $site_group__n, $site_group_id, $site_group_id__n, $site_id, $site_id__n, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $vlan_id, $vlan_id__n, $vlan_vid, $vlan_vid__empty, $vlan_vid__gt, $vlan_vid__gte, $vlan_vid__lt, $vlan_vid__lte, $vlan_vid__n, $vrf, $vrf__n, $vrf_id, $vrf_id__n, $within, $within_include): \OpenAPI\Client\Model\PaginatedPrefixList
```



Get a list of prefix objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$children = array(56); // int[]
$children__empty = array(56); // int[]
$children__gt = array(56); // int[]
$children__gte = array(56); // int[]
$children__lt = array(56); // int[]
$children__lte = array(56); // int[]
$children__n = array(56); // int[]
$contains = 'contains_example'; // string | Prefixes which contain this prefix or IP
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
$depth = array(56); // int[]
$depth__empty = array(56); // int[]
$depth__gt = array(56); // int[]
$depth__gte = array(56); // int[]
$depth__lt = array(56); // int[]
$depth__lte = array(56); // int[]
$depth__n = array(56); // int[]
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
$family = 3.4; // float
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$is_pool = True; // bool
$last_updated = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$limit = 56; // int | Number of results to return per page.
$mark_utilized = True; // bool
$mask_length = array(56); // int[]
$mask_length__gte = 3.4; // float
$mask_length__lte = 3.4; // float
$modified_by_request = 'modified_by_request_example'; // string
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$prefix = array('prefix_example'); // string[]
$present_in_vrf = 'present_in_vrf_example'; // string
$present_in_vrf_id = 'present_in_vrf_id_example'; // string
$q = 'q_example'; // string | Search
$region = array(56); // int[] | Region (slug)
$region__n = array(56); // int[] | Region (slug)
$region_id = array(56); // int[] | Region (ID)
$region_id__n = array(56); // int[] | Region (ID)
$role = array('role_example'); // string[] | Role (slug)
$role__n = array('role__n_example'); // string[] | Role (slug)
$role_id = array(56); // int[] | Role (ID)
$role_id__n = array(56); // int[] | Role (ID)
$site = array('site_example'); // string[] | Site (slug)
$site__n = array('site__n_example'); // string[] | Site (slug)
$site_group = array(56); // int[] | Site group (slug)
$site_group__n = array(56); // int[] | Site group (slug)
$site_group_id = array(56); // int[] | Site group (ID)
$site_group_id__n = array(56); // int[] | Site group (ID)
$site_id = array(56); // int[] | Site (ID)
$site_id__n = array(56); // int[] | Site (ID)
$status = array('status_example'); // string[] | Operational status of this prefix
$status__n = array('status__n_example'); // string[] | Operational status of this prefix
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array(56); // int[] | Tenant Group (slug)
$tenant_group__n = array(56); // int[] | Tenant Group (slug)
$tenant_group_id = array(56); // int[] | Tenant Group (ID)
$tenant_group_id__n = array(56); // int[] | Tenant Group (ID)
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string
$vlan_id = array(56); // int[] | VLAN (ID)
$vlan_id__n = array(56); // int[] | VLAN (ID)
$vlan_vid = 56; // int | VLAN number (1-4094)
$vlan_vid__empty = 56; // int | VLAN number (1-4094)
$vlan_vid__gt = 56; // int | VLAN number (1-4094)
$vlan_vid__gte = 56; // int | VLAN number (1-4094)
$vlan_vid__lt = 56; // int | VLAN number (1-4094)
$vlan_vid__lte = 56; // int | VLAN number (1-4094)
$vlan_vid__n = 56; // int | VLAN number (1-4094)
$vrf = array('vrf_example'); // string[] | VRF (RD)
$vrf__n = array('vrf__n_example'); // string[] | VRF (RD)
$vrf_id = array(56); // int[] | VRF
$vrf_id__n = array(56); // int[] | VRF
$within = 'within_example'; // string | Within prefix
$within_include = 'within_include_example'; // string | Within and including prefix

try {
    $result = $apiInstance->ipamPrefixesList($children, $children__empty, $children__gt, $children__gte, $children__lt, $children__lte, $children__n, $contains, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $depth, $depth__empty, $depth__gt, $depth__gte, $depth__lt, $depth__lte, $depth__n, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $family, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $is_pool, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $mark_utilized, $mask_length, $mask_length__gte, $mask_length__lte, $modified_by_request, $offset, $ordering, $prefix, $present_in_vrf, $present_in_vrf_id, $q, $region, $region__n, $region_id, $region_id__n, $role, $role__n, $role_id, $role_id__n, $site, $site__n, $site_group, $site_group__n, $site_group_id, $site_group_id__n, $site_id, $site_id__n, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $vlan_id, $vlan_id__n, $vlan_vid, $vlan_vid__empty, $vlan_vid__gt, $vlan_vid__gte, $vlan_vid__lt, $vlan_vid__lte, $vlan_vid__n, $vrf, $vrf__n, $vrf_id, $vrf_id__n, $within, $within_include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **children** | [**int[]**](../Model/int.md)|  | [optional] |
| **children__empty** | [**int[]**](../Model/int.md)|  | [optional] |
| **children__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **children__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **children__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **children__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **children__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **contains** | **string**| Prefixes which contain this prefix or IP | [optional] |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
| **depth** | [**int[]**](../Model/int.md)|  | [optional] |
| **depth__empty** | [**int[]**](../Model/int.md)|  | [optional] |
| **depth__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **depth__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **depth__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **depth__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **depth__n** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **family** | **float**|  | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **is_pool** | **bool**|  | [optional] |
| **last_updated** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **mark_utilized** | **bool**|  | [optional] |
| **mask_length** | [**int[]**](../Model/int.md)|  | [optional] |
| **mask_length__gte** | **float**|  | [optional] |
| **mask_length__lte** | **float**|  | [optional] |
| **modified_by_request** | **string**|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **prefix** | [**string[]**](../Model/string.md)|  | [optional] |
| **present_in_vrf** | **string**|  | [optional] |
| **present_in_vrf_id** | **string**|  | [optional] |
| **q** | **string**| Search | [optional] |
| **region** | [**int[]**](../Model/int.md)| Region (slug) | [optional] |
| **region__n** | [**int[]**](../Model/int.md)| Region (slug) | [optional] |
| **region_id** | [**int[]**](../Model/int.md)| Region (ID) | [optional] |
| **region_id__n** | [**int[]**](../Model/int.md)| Region (ID) | [optional] |
| **role** | [**string[]**](../Model/string.md)| Role (slug) | [optional] |
| **role__n** | [**string[]**](../Model/string.md)| Role (slug) | [optional] |
| **role_id** | [**int[]**](../Model/int.md)| Role (ID) | [optional] |
| **role_id__n** | [**int[]**](../Model/int.md)| Role (ID) | [optional] |
| **site** | [**string[]**](../Model/string.md)| Site (slug) | [optional] |
| **site__n** | [**string[]**](../Model/string.md)| Site (slug) | [optional] |
| **site_group** | [**int[]**](../Model/int.md)| Site group (slug) | [optional] |
| **site_group__n** | [**int[]**](../Model/int.md)| Site group (slug) | [optional] |
| **site_group_id** | [**int[]**](../Model/int.md)| Site group (ID) | [optional] |
| **site_group_id__n** | [**int[]**](../Model/int.md)| Site group (ID) | [optional] |
| **site_id** | [**int[]**](../Model/int.md)| Site (ID) | [optional] |
| **site_id__n** | [**int[]**](../Model/int.md)| Site (ID) | [optional] |
| **status** | [**string[]**](../Model/string.md)| Operational status of this prefix | [optional] |
| **status__n** | [**string[]**](../Model/string.md)| Operational status of this prefix | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group__n** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **vlan_id** | [**int[]**](../Model/int.md)| VLAN (ID) | [optional] |
| **vlan_id__n** | [**int[]**](../Model/int.md)| VLAN (ID) | [optional] |
| **vlan_vid** | **int**| VLAN number (1-4094) | [optional] |
| **vlan_vid__empty** | **int**| VLAN number (1-4094) | [optional] |
| **vlan_vid__gt** | **int**| VLAN number (1-4094) | [optional] |
| **vlan_vid__gte** | **int**| VLAN number (1-4094) | [optional] |
| **vlan_vid__lt** | **int**| VLAN number (1-4094) | [optional] |
| **vlan_vid__lte** | **int**| VLAN number (1-4094) | [optional] |
| **vlan_vid__n** | **int**| VLAN number (1-4094) | [optional] |
| **vrf** | [**string[]**](../Model/string.md)| VRF (RD) | [optional] |
| **vrf__n** | [**string[]**](../Model/string.md)| VRF (RD) | [optional] |
| **vrf_id** | [**int[]**](../Model/int.md)| VRF | [optional] |
| **vrf_id__n** | [**int[]**](../Model/int.md)| VRF | [optional] |
| **within** | **string**| Within prefix | [optional] |
| **within_include** | **string**| Within and including prefix | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedPrefixList**](../Model/PaginatedPrefixList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamPrefixesPartialUpdate()`

```php
ipamPrefixesPartialUpdate($id, $patched_writable_prefix_request): \OpenAPI\Client\Model\Prefix
```



Patch a prefix object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this prefix.
$patched_writable_prefix_request = new \OpenAPI\Client\Model\PatchedWritablePrefixRequest(); // \OpenAPI\Client\Model\PatchedWritablePrefixRequest

try {
    $result = $apiInstance->ipamPrefixesPartialUpdate($id, $patched_writable_prefix_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this prefix. | |
| **patched_writable_prefix_request** | [**\OpenAPI\Client\Model\PatchedWritablePrefixRequest**](../Model/PatchedWritablePrefixRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Prefix**](../Model/Prefix.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamPrefixesRetrieve()`

```php
ipamPrefixesRetrieve($id): \OpenAPI\Client\Model\Prefix
```



Get a prefix object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this prefix.

try {
    $result = $apiInstance->ipamPrefixesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this prefix. | |

### Return type

[**\OpenAPI\Client\Model\Prefix**](../Model/Prefix.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamPrefixesUpdate()`

```php
ipamPrefixesUpdate($id, $writable_prefix_request): \OpenAPI\Client\Model\Prefix
```



Put a prefix object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this prefix.
$writable_prefix_request = new \OpenAPI\Client\Model\WritablePrefixRequest(); // \OpenAPI\Client\Model\WritablePrefixRequest

try {
    $result = $apiInstance->ipamPrefixesUpdate($id, $writable_prefix_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamPrefixesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this prefix. | |
| **writable_prefix_request** | [**\OpenAPI\Client\Model\WritablePrefixRequest**](../Model/WritablePrefixRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Prefix**](../Model/Prefix.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRirsBulkDestroy()`

```php
ipamRirsBulkDestroy($rir_request)
```



Delete a list of RIR objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rir_request = array(new \OpenAPI\Client\Model\RIRRequest()); // \OpenAPI\Client\Model\RIRRequest[]

try {
    $apiInstance->ipamRirsBulkDestroy($rir_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRirsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rir_request** | [**\OpenAPI\Client\Model\RIRRequest[]**](../Model/RIRRequest.md)|  | |

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

## `ipamRirsBulkPartialUpdate()`

```php
ipamRirsBulkPartialUpdate($rir_request): \OpenAPI\Client\Model\RIR[]
```



Patch a list of RIR objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rir_request = array(new \OpenAPI\Client\Model\RIRRequest()); // \OpenAPI\Client\Model\RIRRequest[]

try {
    $result = $apiInstance->ipamRirsBulkPartialUpdate($rir_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRirsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rir_request** | [**\OpenAPI\Client\Model\RIRRequest[]**](../Model/RIRRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RIR[]**](../Model/RIR.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRirsBulkUpdate()`

```php
ipamRirsBulkUpdate($rir_request): \OpenAPI\Client\Model\RIR[]
```



Put a list of RIR objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rir_request = array(new \OpenAPI\Client\Model\RIRRequest()); // \OpenAPI\Client\Model\RIRRequest[]

try {
    $result = $apiInstance->ipamRirsBulkUpdate($rir_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRirsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rir_request** | [**\OpenAPI\Client\Model\RIRRequest[]**](../Model/RIRRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RIR[]**](../Model/RIR.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRirsCreate()`

```php
ipamRirsCreate($rir_request): \OpenAPI\Client\Model\RIR
```



Post a list of RIR objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rir_request = new \OpenAPI\Client\Model\RIRRequest(); // \OpenAPI\Client\Model\RIRRequest

try {
    $result = $apiInstance->ipamRirsCreate($rir_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRirsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rir_request** | [**\OpenAPI\Client\Model\RIRRequest**](../Model/RIRRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RIR**](../Model/RIR.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRirsDestroy()`

```php
ipamRirsDestroy($id)
```



Delete a RIR object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this RIR.

try {
    $apiInstance->ipamRirsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRirsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this RIR. | |

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

## `ipamRirsList()`

```php
ipamRirsList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $is_private, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $tag, $tag__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedRIRList
```



Get a list of RIR objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
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
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$is_private = True; // bool
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
    $result = $apiInstance->ipamRirsList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $is_private, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $tag, $tag__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRirsList: ', $e->getMessage(), PHP_EOL;
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
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **is_private** | **bool**|  | [optional] |
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

[**\OpenAPI\Client\Model\PaginatedRIRList**](../Model/PaginatedRIRList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRirsPartialUpdate()`

```php
ipamRirsPartialUpdate($id, $patched_rir_request): \OpenAPI\Client\Model\RIR
```



Patch a RIR object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this RIR.
$patched_rir_request = new \OpenAPI\Client\Model\PatchedRIRRequest(); // \OpenAPI\Client\Model\PatchedRIRRequest

try {
    $result = $apiInstance->ipamRirsPartialUpdate($id, $patched_rir_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRirsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this RIR. | |
| **patched_rir_request** | [**\OpenAPI\Client\Model\PatchedRIRRequest**](../Model/PatchedRIRRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RIR**](../Model/RIR.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRirsRetrieve()`

```php
ipamRirsRetrieve($id): \OpenAPI\Client\Model\RIR
```



Get a RIR object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this RIR.

try {
    $result = $apiInstance->ipamRirsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRirsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this RIR. | |

### Return type

[**\OpenAPI\Client\Model\RIR**](../Model/RIR.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRirsUpdate()`

```php
ipamRirsUpdate($id, $rir_request): \OpenAPI\Client\Model\RIR
```



Put a RIR object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this RIR.
$rir_request = new \OpenAPI\Client\Model\RIRRequest(); // \OpenAPI\Client\Model\RIRRequest

try {
    $result = $apiInstance->ipamRirsUpdate($id, $rir_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRirsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this RIR. | |
| **rir_request** | [**\OpenAPI\Client\Model\RIRRequest**](../Model/RIRRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RIR**](../Model/RIR.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRolesBulkDestroy()`

```php
ipamRolesBulkDestroy($role_request)
```



Delete a list of role objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_request = array(new \OpenAPI\Client\Model\RoleRequest()); // \OpenAPI\Client\Model\RoleRequest[]

try {
    $apiInstance->ipamRolesBulkDestroy($role_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRolesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_request** | [**\OpenAPI\Client\Model\RoleRequest[]**](../Model/RoleRequest.md)|  | |

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

## `ipamRolesBulkPartialUpdate()`

```php
ipamRolesBulkPartialUpdate($role_request): \OpenAPI\Client\Model\Role[]
```



Patch a list of role objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_request = array(new \OpenAPI\Client\Model\RoleRequest()); // \OpenAPI\Client\Model\RoleRequest[]

try {
    $result = $apiInstance->ipamRolesBulkPartialUpdate($role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRolesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_request** | [**\OpenAPI\Client\Model\RoleRequest[]**](../Model/RoleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Role[]**](../Model/Role.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRolesBulkUpdate()`

```php
ipamRolesBulkUpdate($role_request): \OpenAPI\Client\Model\Role[]
```



Put a list of role objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_request = array(new \OpenAPI\Client\Model\RoleRequest()); // \OpenAPI\Client\Model\RoleRequest[]

try {
    $result = $apiInstance->ipamRolesBulkUpdate($role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRolesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_request** | [**\OpenAPI\Client\Model\RoleRequest[]**](../Model/RoleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Role[]**](../Model/Role.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRolesCreate()`

```php
ipamRolesCreate($role_request): \OpenAPI\Client\Model\Role
```



Post a list of role objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_request = new \OpenAPI\Client\Model\RoleRequest(); // \OpenAPI\Client\Model\RoleRequest

try {
    $result = $apiInstance->ipamRolesCreate($role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRolesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_request** | [**\OpenAPI\Client\Model\RoleRequest**](../Model/RoleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Role**](../Model/Role.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRolesDestroy()`

```php
ipamRolesDestroy($id)
```



Delete a role object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this role.

try {
    $apiInstance->ipamRolesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRolesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this role. | |

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

## `ipamRolesList()`

```php
ipamRolesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $tag, $tag__n, $updated_by_request, $weight, $weight__empty, $weight__gt, $weight__gte, $weight__lt, $weight__lte, $weight__n): \OpenAPI\Client\Model\PaginatedRoleList
```



Get a list of role objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
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
$weight = array(56); // int[]
$weight__empty = True; // bool
$weight__gt = array(56); // int[]
$weight__gte = array(56); // int[]
$weight__lt = array(56); // int[]
$weight__lte = array(56); // int[]
$weight__n = array(56); // int[]

try {
    $result = $apiInstance->ipamRolesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $tag, $tag__n, $updated_by_request, $weight, $weight__empty, $weight__gt, $weight__gte, $weight__lt, $weight__lte, $weight__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRolesList: ', $e->getMessage(), PHP_EOL;
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
| **weight** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__empty** | **bool**|  | [optional] |
| **weight__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__n** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedRoleList**](../Model/PaginatedRoleList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRolesPartialUpdate()`

```php
ipamRolesPartialUpdate($id, $patched_role_request): \OpenAPI\Client\Model\Role
```



Patch a role object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this role.
$patched_role_request = new \OpenAPI\Client\Model\PatchedRoleRequest(); // \OpenAPI\Client\Model\PatchedRoleRequest

try {
    $result = $apiInstance->ipamRolesPartialUpdate($id, $patched_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRolesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this role. | |
| **patched_role_request** | [**\OpenAPI\Client\Model\PatchedRoleRequest**](../Model/PatchedRoleRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Role**](../Model/Role.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRolesRetrieve()`

```php
ipamRolesRetrieve($id): \OpenAPI\Client\Model\Role
```



Get a role object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this role.

try {
    $result = $apiInstance->ipamRolesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRolesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this role. | |

### Return type

[**\OpenAPI\Client\Model\Role**](../Model/Role.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRolesUpdate()`

```php
ipamRolesUpdate($id, $role_request): \OpenAPI\Client\Model\Role
```



Put a role object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this role.
$role_request = new \OpenAPI\Client\Model\RoleRequest(); // \OpenAPI\Client\Model\RoleRequest

try {
    $result = $apiInstance->ipamRolesUpdate($id, $role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRolesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this role. | |
| **role_request** | [**\OpenAPI\Client\Model\RoleRequest**](../Model/RoleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Role**](../Model/Role.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRouteTargetsBulkDestroy()`

```php
ipamRouteTargetsBulkDestroy($route_target_request)
```



Delete a list of route target objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$route_target_request = array(new \OpenAPI\Client\Model\RouteTargetRequest()); // \OpenAPI\Client\Model\RouteTargetRequest[]

try {
    $apiInstance->ipamRouteTargetsBulkDestroy($route_target_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRouteTargetsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **route_target_request** | [**\OpenAPI\Client\Model\RouteTargetRequest[]**](../Model/RouteTargetRequest.md)|  | |

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

## `ipamRouteTargetsBulkPartialUpdate()`

```php
ipamRouteTargetsBulkPartialUpdate($route_target_request): \OpenAPI\Client\Model\RouteTarget[]
```



Patch a list of route target objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$route_target_request = array(new \OpenAPI\Client\Model\RouteTargetRequest()); // \OpenAPI\Client\Model\RouteTargetRequest[]

try {
    $result = $apiInstance->ipamRouteTargetsBulkPartialUpdate($route_target_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRouteTargetsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **route_target_request** | [**\OpenAPI\Client\Model\RouteTargetRequest[]**](../Model/RouteTargetRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RouteTarget[]**](../Model/RouteTarget.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRouteTargetsBulkUpdate()`

```php
ipamRouteTargetsBulkUpdate($route_target_request): \OpenAPI\Client\Model\RouteTarget[]
```



Put a list of route target objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$route_target_request = array(new \OpenAPI\Client\Model\RouteTargetRequest()); // \OpenAPI\Client\Model\RouteTargetRequest[]

try {
    $result = $apiInstance->ipamRouteTargetsBulkUpdate($route_target_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRouteTargetsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **route_target_request** | [**\OpenAPI\Client\Model\RouteTargetRequest[]**](../Model/RouteTargetRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RouteTarget[]**](../Model/RouteTarget.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRouteTargetsCreate()`

```php
ipamRouteTargetsCreate($route_target_request): \OpenAPI\Client\Model\RouteTarget
```



Post a list of route target objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$route_target_request = new \OpenAPI\Client\Model\RouteTargetRequest(); // \OpenAPI\Client\Model\RouteTargetRequest

try {
    $result = $apiInstance->ipamRouteTargetsCreate($route_target_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRouteTargetsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **route_target_request** | [**\OpenAPI\Client\Model\RouteTargetRequest**](../Model/RouteTargetRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RouteTarget**](../Model/RouteTarget.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRouteTargetsDestroy()`

```php
ipamRouteTargetsDestroy($id)
```



Delete a route target object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this route target.

try {
    $apiInstance->ipamRouteTargetsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRouteTargetsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this route target. | |

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

## `ipamRouteTargetsList()`

```php
ipamRouteTargetsList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $exporting_l2vpn, $exporting_l2vpn__n, $exporting_l2vpn_id, $exporting_l2vpn_id__n, $exporting_vrf, $exporting_vrf__n, $exporting_vrf_id, $exporting_vrf_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $importing_l2vpn, $importing_l2vpn__n, $importing_l2vpn_id, $importing_l2vpn_id__n, $importing_vrf, $importing_vrf__n, $importing_vrf_id, $importing_vrf_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedRouteTargetList
```



Get a list of route target objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
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
$exporting_l2vpn = array(56); // int[] | Exporting L2VPN (identifier)
$exporting_l2vpn__n = array(56); // int[] | Exporting L2VPN (identifier)
$exporting_l2vpn_id = array(56); // int[] | Exporting L2VPN
$exporting_l2vpn_id__n = array(56); // int[] | Exporting L2VPN
$exporting_vrf = array('exporting_vrf_example'); // string[] | Export VRF (RD)
$exporting_vrf__n = array('exporting_vrf__n_example'); // string[] | Export VRF (RD)
$exporting_vrf_id = array(56); // int[] | Exporting VRF
$exporting_vrf_id__n = array(56); // int[] | Exporting VRF
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$importing_l2vpn = array(56); // int[] | Importing L2VPN (identifier)
$importing_l2vpn__n = array(56); // int[] | Importing L2VPN (identifier)
$importing_l2vpn_id = array(56); // int[] | Importing L2VPN
$importing_l2vpn_id__n = array(56); // int[] | Importing L2VPN
$importing_vrf = array('importing_vrf_example'); // string[] | Import VRF (RD)
$importing_vrf__n = array('importing_vrf__n_example'); // string[] | Import VRF (RD)
$importing_vrf_id = array(56); // int[] | Importing VRF
$importing_vrf_id__n = array(56); // int[] | Importing VRF
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
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array(56); // int[] | Tenant Group (slug)
$tenant_group__n = array(56); // int[] | Tenant Group (slug)
$tenant_group_id = array(56); // int[] | Tenant Group (ID)
$tenant_group_id__n = array(56); // int[] | Tenant Group (ID)
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->ipamRouteTargetsList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $exporting_l2vpn, $exporting_l2vpn__n, $exporting_l2vpn_id, $exporting_l2vpn_id__n, $exporting_vrf, $exporting_vrf__n, $exporting_vrf_id, $exporting_vrf_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $importing_l2vpn, $importing_l2vpn__n, $importing_l2vpn_id, $importing_l2vpn_id__n, $importing_vrf, $importing_vrf__n, $importing_vrf_id, $importing_vrf_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRouteTargetsList: ', $e->getMessage(), PHP_EOL;
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
| **exporting_l2vpn** | [**int[]**](../Model/int.md)| Exporting L2VPN (identifier) | [optional] |
| **exporting_l2vpn__n** | [**int[]**](../Model/int.md)| Exporting L2VPN (identifier) | [optional] |
| **exporting_l2vpn_id** | [**int[]**](../Model/int.md)| Exporting L2VPN | [optional] |
| **exporting_l2vpn_id__n** | [**int[]**](../Model/int.md)| Exporting L2VPN | [optional] |
| **exporting_vrf** | [**string[]**](../Model/string.md)| Export VRF (RD) | [optional] |
| **exporting_vrf__n** | [**string[]**](../Model/string.md)| Export VRF (RD) | [optional] |
| **exporting_vrf_id** | [**int[]**](../Model/int.md)| Exporting VRF | [optional] |
| **exporting_vrf_id__n** | [**int[]**](../Model/int.md)| Exporting VRF | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **importing_l2vpn** | [**int[]**](../Model/int.md)| Importing L2VPN (identifier) | [optional] |
| **importing_l2vpn__n** | [**int[]**](../Model/int.md)| Importing L2VPN (identifier) | [optional] |
| **importing_l2vpn_id** | [**int[]**](../Model/int.md)| Importing L2VPN | [optional] |
| **importing_l2vpn_id__n** | [**int[]**](../Model/int.md)| Importing L2VPN | [optional] |
| **importing_vrf** | [**string[]**](../Model/string.md)| Import VRF (RD) | [optional] |
| **importing_vrf__n** | [**string[]**](../Model/string.md)| Import VRF (RD) | [optional] |
| **importing_vrf_id** | [**int[]**](../Model/int.md)| Importing VRF | [optional] |
| **importing_vrf_id__n** | [**int[]**](../Model/int.md)| Importing VRF | [optional] |
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
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group__n** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedRouteTargetList**](../Model/PaginatedRouteTargetList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRouteTargetsPartialUpdate()`

```php
ipamRouteTargetsPartialUpdate($id, $patched_route_target_request): \OpenAPI\Client\Model\RouteTarget
```



Patch a route target object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this route target.
$patched_route_target_request = new \OpenAPI\Client\Model\PatchedRouteTargetRequest(); // \OpenAPI\Client\Model\PatchedRouteTargetRequest

try {
    $result = $apiInstance->ipamRouteTargetsPartialUpdate($id, $patched_route_target_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRouteTargetsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this route target. | |
| **patched_route_target_request** | [**\OpenAPI\Client\Model\PatchedRouteTargetRequest**](../Model/PatchedRouteTargetRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RouteTarget**](../Model/RouteTarget.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRouteTargetsRetrieve()`

```php
ipamRouteTargetsRetrieve($id): \OpenAPI\Client\Model\RouteTarget
```



Get a route target object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this route target.

try {
    $result = $apiInstance->ipamRouteTargetsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRouteTargetsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this route target. | |

### Return type

[**\OpenAPI\Client\Model\RouteTarget**](../Model/RouteTarget.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamRouteTargetsUpdate()`

```php
ipamRouteTargetsUpdate($id, $route_target_request): \OpenAPI\Client\Model\RouteTarget
```



Put a route target object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this route target.
$route_target_request = new \OpenAPI\Client\Model\RouteTargetRequest(); // \OpenAPI\Client\Model\RouteTargetRequest

try {
    $result = $apiInstance->ipamRouteTargetsUpdate($id, $route_target_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamRouteTargetsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this route target. | |
| **route_target_request** | [**\OpenAPI\Client\Model\RouteTargetRequest**](../Model/RouteTargetRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RouteTarget**](../Model/RouteTarget.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServiceTemplatesBulkDestroy()`

```php
ipamServiceTemplatesBulkDestroy($service_template_request)
```



Delete a list of service template objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_template_request = array(new \OpenAPI\Client\Model\ServiceTemplateRequest()); // \OpenAPI\Client\Model\ServiceTemplateRequest[]

try {
    $apiInstance->ipamServiceTemplatesBulkDestroy($service_template_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServiceTemplatesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_template_request** | [**\OpenAPI\Client\Model\ServiceTemplateRequest[]**](../Model/ServiceTemplateRequest.md)|  | |

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

## `ipamServiceTemplatesBulkPartialUpdate()`

```php
ipamServiceTemplatesBulkPartialUpdate($service_template_request): \OpenAPI\Client\Model\ServiceTemplate[]
```



Patch a list of service template objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_template_request = array(new \OpenAPI\Client\Model\ServiceTemplateRequest()); // \OpenAPI\Client\Model\ServiceTemplateRequest[]

try {
    $result = $apiInstance->ipamServiceTemplatesBulkPartialUpdate($service_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServiceTemplatesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_template_request** | [**\OpenAPI\Client\Model\ServiceTemplateRequest[]**](../Model/ServiceTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceTemplate[]**](../Model/ServiceTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServiceTemplatesBulkUpdate()`

```php
ipamServiceTemplatesBulkUpdate($service_template_request): \OpenAPI\Client\Model\ServiceTemplate[]
```



Put a list of service template objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_template_request = array(new \OpenAPI\Client\Model\ServiceTemplateRequest()); // \OpenAPI\Client\Model\ServiceTemplateRequest[]

try {
    $result = $apiInstance->ipamServiceTemplatesBulkUpdate($service_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServiceTemplatesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_template_request** | [**\OpenAPI\Client\Model\ServiceTemplateRequest[]**](../Model/ServiceTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceTemplate[]**](../Model/ServiceTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServiceTemplatesCreate()`

```php
ipamServiceTemplatesCreate($writable_service_template_request): \OpenAPI\Client\Model\ServiceTemplate
```



Post a list of service template objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_service_template_request = new \OpenAPI\Client\Model\WritableServiceTemplateRequest(); // \OpenAPI\Client\Model\WritableServiceTemplateRequest

try {
    $result = $apiInstance->ipamServiceTemplatesCreate($writable_service_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServiceTemplatesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_service_template_request** | [**\OpenAPI\Client\Model\WritableServiceTemplateRequest**](../Model/WritableServiceTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceTemplate**](../Model/ServiceTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServiceTemplatesDestroy()`

```php
ipamServiceTemplatesDestroy($id)
```



Delete a service template object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this service template.

try {
    $apiInstance->ipamServiceTemplatesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServiceTemplatesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this service template. | |

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

## `ipamServiceTemplatesList()`

```php
ipamServiceTemplatesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $port, $protocol, $protocol__n, $q, $tag, $tag__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedServiceTemplateList
```



Get a list of service template objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
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
$port = 3.4; // float
$protocol = 'protocol_example'; // string | * `tcp` - TCP * `udp` - UDP * `sctp` - SCTP
$protocol__n = 'protocol__n_example'; // string | * `tcp` - TCP * `udp` - UDP * `sctp` - SCTP
$q = 'q_example'; // string | Search
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->ipamServiceTemplatesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $port, $protocol, $protocol__n, $q, $tag, $tag__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServiceTemplatesList: ', $e->getMessage(), PHP_EOL;
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
| **port** | **float**|  | [optional] |
| **protocol** | **string**| * &#x60;tcp&#x60; - TCP * &#x60;udp&#x60; - UDP * &#x60;sctp&#x60; - SCTP | [optional] |
| **protocol__n** | **string**| * &#x60;tcp&#x60; - TCP * &#x60;udp&#x60; - UDP * &#x60;sctp&#x60; - SCTP | [optional] |
| **q** | **string**| Search | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedServiceTemplateList**](../Model/PaginatedServiceTemplateList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServiceTemplatesPartialUpdate()`

```php
ipamServiceTemplatesPartialUpdate($id, $patched_writable_service_template_request): \OpenAPI\Client\Model\ServiceTemplate
```



Patch a service template object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this service template.
$patched_writable_service_template_request = new \OpenAPI\Client\Model\PatchedWritableServiceTemplateRequest(); // \OpenAPI\Client\Model\PatchedWritableServiceTemplateRequest

try {
    $result = $apiInstance->ipamServiceTemplatesPartialUpdate($id, $patched_writable_service_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServiceTemplatesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this service template. | |
| **patched_writable_service_template_request** | [**\OpenAPI\Client\Model\PatchedWritableServiceTemplateRequest**](../Model/PatchedWritableServiceTemplateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceTemplate**](../Model/ServiceTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServiceTemplatesRetrieve()`

```php
ipamServiceTemplatesRetrieve($id): \OpenAPI\Client\Model\ServiceTemplate
```



Get a service template object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this service template.

try {
    $result = $apiInstance->ipamServiceTemplatesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServiceTemplatesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this service template. | |

### Return type

[**\OpenAPI\Client\Model\ServiceTemplate**](../Model/ServiceTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServiceTemplatesUpdate()`

```php
ipamServiceTemplatesUpdate($id, $writable_service_template_request): \OpenAPI\Client\Model\ServiceTemplate
```



Put a service template object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this service template.
$writable_service_template_request = new \OpenAPI\Client\Model\WritableServiceTemplateRequest(); // \OpenAPI\Client\Model\WritableServiceTemplateRequest

try {
    $result = $apiInstance->ipamServiceTemplatesUpdate($id, $writable_service_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServiceTemplatesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this service template. | |
| **writable_service_template_request** | [**\OpenAPI\Client\Model\WritableServiceTemplateRequest**](../Model/WritableServiceTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceTemplate**](../Model/ServiceTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServicesBulkDestroy()`

```php
ipamServicesBulkDestroy($service_request)
```



Delete a list of service objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_request = array(new \OpenAPI\Client\Model\ServiceRequest()); // \OpenAPI\Client\Model\ServiceRequest[]

try {
    $apiInstance->ipamServicesBulkDestroy($service_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServicesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_request** | [**\OpenAPI\Client\Model\ServiceRequest[]**](../Model/ServiceRequest.md)|  | |

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

## `ipamServicesBulkPartialUpdate()`

```php
ipamServicesBulkPartialUpdate($service_request): \OpenAPI\Client\Model\Service[]
```



Patch a list of service objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_request = array(new \OpenAPI\Client\Model\ServiceRequest()); // \OpenAPI\Client\Model\ServiceRequest[]

try {
    $result = $apiInstance->ipamServicesBulkPartialUpdate($service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServicesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_request** | [**\OpenAPI\Client\Model\ServiceRequest[]**](../Model/ServiceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Service[]**](../Model/Service.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServicesBulkUpdate()`

```php
ipamServicesBulkUpdate($service_request): \OpenAPI\Client\Model\Service[]
```



Put a list of service objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_request = array(new \OpenAPI\Client\Model\ServiceRequest()); // \OpenAPI\Client\Model\ServiceRequest[]

try {
    $result = $apiInstance->ipamServicesBulkUpdate($service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServicesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_request** | [**\OpenAPI\Client\Model\ServiceRequest[]**](../Model/ServiceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Service[]**](../Model/Service.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServicesCreate()`

```php
ipamServicesCreate($writable_service_request): \OpenAPI\Client\Model\Service
```



Post a list of service objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_service_request = new \OpenAPI\Client\Model\WritableServiceRequest(); // \OpenAPI\Client\Model\WritableServiceRequest

try {
    $result = $apiInstance->ipamServicesCreate($writable_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServicesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_service_request** | [**\OpenAPI\Client\Model\WritableServiceRequest**](../Model/WritableServiceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Service**](../Model/Service.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServicesDestroy()`

```php
ipamServicesDestroy($id)
```



Delete a service object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this service.

try {
    $apiInstance->ipamServicesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServicesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this service. | |

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

## `ipamServicesList()`

```php
ipamServicesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device, $device__n, $device_id, $device_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $ip_address, $ip_address__n, $ip_address_id, $ip_address_id__n, $ipaddress, $ipaddress__n, $ipaddress_id, $ipaddress_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $port, $protocol, $protocol__n, $q, $tag, $tag__n, $updated_by_request, $virtual_machine, $virtual_machine__n, $virtual_machine_id, $virtual_machine_id__n): \OpenAPI\Client\Model\PaginatedServiceList
```



Get a list of service objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
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
$device = array('device_example'); // string[] | Device (name)
$device__n = array('device__n_example'); // string[] | Device (name)
$device_id = array(56); // int[] | Device (ID)
$device_id__n = array(56); // int[] | Device (ID)
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$ip_address = array('ip_address_example'); // string[] | IP address
$ip_address__n = array('ip_address__n_example'); // string[] | IP address
$ip_address_id = array(56); // int[] | IP address (ID)
$ip_address_id__n = array(56); // int[] | IP address (ID)
$ipaddress = array('ipaddress_example'); // string[] | IP address
$ipaddress__n = array('ipaddress__n_example'); // string[] | IP address
$ipaddress_id = array(56); // int[] | IP address (ID)
$ipaddress_id__n = array(56); // int[] | IP address (ID)
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
$port = 3.4; // float
$protocol = 'protocol_example'; // string | * `tcp` - TCP * `udp` - UDP * `sctp` - SCTP
$protocol__n = 'protocol__n_example'; // string | * `tcp` - TCP * `udp` - UDP * `sctp` - SCTP
$q = 'q_example'; // string | Search
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$updated_by_request = 'updated_by_request_example'; // string
$virtual_machine = array('virtual_machine_example'); // string[] | Virtual machine (name)
$virtual_machine__n = array('virtual_machine__n_example'); // string[] | Virtual machine (name)
$virtual_machine_id = array(56); // int[] | Virtual machine (ID)
$virtual_machine_id__n = array(56); // int[] | Virtual machine (ID)

try {
    $result = $apiInstance->ipamServicesList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device, $device__n, $device_id, $device_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $ip_address, $ip_address__n, $ip_address_id, $ip_address_id__n, $ipaddress, $ipaddress__n, $ipaddress_id, $ipaddress_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $port, $protocol, $protocol__n, $q, $tag, $tag__n, $updated_by_request, $virtual_machine, $virtual_machine__n, $virtual_machine_id, $virtual_machine_id__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServicesList: ', $e->getMessage(), PHP_EOL;
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
| **device** | [**string[]**](../Model/string.md)| Device (name) | [optional] |
| **device__n** | [**string[]**](../Model/string.md)| Device (name) | [optional] |
| **device_id** | [**int[]**](../Model/int.md)| Device (ID) | [optional] |
| **device_id__n** | [**int[]**](../Model/int.md)| Device (ID) | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **ip_address** | [**string[]**](../Model/string.md)| IP address | [optional] |
| **ip_address__n** | [**string[]**](../Model/string.md)| IP address | [optional] |
| **ip_address_id** | [**int[]**](../Model/int.md)| IP address (ID) | [optional] |
| **ip_address_id__n** | [**int[]**](../Model/int.md)| IP address (ID) | [optional] |
| **ipaddress** | [**string[]**](../Model/string.md)| IP address | [optional] |
| **ipaddress__n** | [**string[]**](../Model/string.md)| IP address | [optional] |
| **ipaddress_id** | [**int[]**](../Model/int.md)| IP address (ID) | [optional] |
| **ipaddress_id__n** | [**int[]**](../Model/int.md)| IP address (ID) | [optional] |
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
| **port** | **float**|  | [optional] |
| **protocol** | **string**| * &#x60;tcp&#x60; - TCP * &#x60;udp&#x60; - UDP * &#x60;sctp&#x60; - SCTP | [optional] |
| **protocol__n** | **string**| * &#x60;tcp&#x60; - TCP * &#x60;udp&#x60; - UDP * &#x60;sctp&#x60; - SCTP | [optional] |
| **q** | **string**| Search | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **virtual_machine** | [**string[]**](../Model/string.md)| Virtual machine (name) | [optional] |
| **virtual_machine__n** | [**string[]**](../Model/string.md)| Virtual machine (name) | [optional] |
| **virtual_machine_id** | [**int[]**](../Model/int.md)| Virtual machine (ID) | [optional] |
| **virtual_machine_id__n** | [**int[]**](../Model/int.md)| Virtual machine (ID) | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedServiceList**](../Model/PaginatedServiceList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServicesPartialUpdate()`

```php
ipamServicesPartialUpdate($id, $patched_writable_service_request): \OpenAPI\Client\Model\Service
```



Patch a service object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this service.
$patched_writable_service_request = new \OpenAPI\Client\Model\PatchedWritableServiceRequest(); // \OpenAPI\Client\Model\PatchedWritableServiceRequest

try {
    $result = $apiInstance->ipamServicesPartialUpdate($id, $patched_writable_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServicesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this service. | |
| **patched_writable_service_request** | [**\OpenAPI\Client\Model\PatchedWritableServiceRequest**](../Model/PatchedWritableServiceRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Service**](../Model/Service.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServicesRetrieve()`

```php
ipamServicesRetrieve($id): \OpenAPI\Client\Model\Service
```



Get a service object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this service.

try {
    $result = $apiInstance->ipamServicesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServicesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this service. | |

### Return type

[**\OpenAPI\Client\Model\Service**](../Model/Service.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamServicesUpdate()`

```php
ipamServicesUpdate($id, $writable_service_request): \OpenAPI\Client\Model\Service
```



Put a service object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this service.
$writable_service_request = new \OpenAPI\Client\Model\WritableServiceRequest(); // \OpenAPI\Client\Model\WritableServiceRequest

try {
    $result = $apiInstance->ipamServicesUpdate($id, $writable_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamServicesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this service. | |
| **writable_service_request** | [**\OpenAPI\Client\Model\WritableServiceRequest**](../Model/WritableServiceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Service**](../Model/Service.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlanGroupsAvailableVlansCreate()`

```php
ipamVlanGroupsAvailableVlansCreate($id, $vlan_request): \OpenAPI\Client\Model\VLAN[]
```



Post a VLAN object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$vlan_request = array(new \OpenAPI\Client\Model\VLANRequest()); // \OpenAPI\Client\Model\VLANRequest[]

try {
    $result = $apiInstance->ipamVlanGroupsAvailableVlansCreate($id, $vlan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlanGroupsAvailableVlansCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **vlan_request** | [**\OpenAPI\Client\Model\VLANRequest[]**](../Model/VLANRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VLAN[]**](../Model/VLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlanGroupsAvailableVlansList()`

```php
ipamVlanGroupsAvailableVlansList($id): \OpenAPI\Client\Model\AvailableVLAN[]
```



Get a VLAN object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->ipamVlanGroupsAvailableVlansList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlanGroupsAvailableVlansList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\AvailableVLAN[]**](../Model/AvailableVLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlanGroupsBulkDestroy()`

```php
ipamVlanGroupsBulkDestroy($vlan_group_request)
```



Delete a list of VLAN group objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vlan_group_request = array(new \OpenAPI\Client\Model\VLANGroupRequest()); // \OpenAPI\Client\Model\VLANGroupRequest[]

try {
    $apiInstance->ipamVlanGroupsBulkDestroy($vlan_group_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlanGroupsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vlan_group_request** | [**\OpenAPI\Client\Model\VLANGroupRequest[]**](../Model/VLANGroupRequest.md)|  | |

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

## `ipamVlanGroupsBulkPartialUpdate()`

```php
ipamVlanGroupsBulkPartialUpdate($vlan_group_request): \OpenAPI\Client\Model\VLANGroup[]
```



Patch a list of VLAN group objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vlan_group_request = array(new \OpenAPI\Client\Model\VLANGroupRequest()); // \OpenAPI\Client\Model\VLANGroupRequest[]

try {
    $result = $apiInstance->ipamVlanGroupsBulkPartialUpdate($vlan_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlanGroupsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vlan_group_request** | [**\OpenAPI\Client\Model\VLANGroupRequest[]**](../Model/VLANGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VLANGroup[]**](../Model/VLANGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlanGroupsBulkUpdate()`

```php
ipamVlanGroupsBulkUpdate($vlan_group_request): \OpenAPI\Client\Model\VLANGroup[]
```



Put a list of VLAN group objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vlan_group_request = array(new \OpenAPI\Client\Model\VLANGroupRequest()); // \OpenAPI\Client\Model\VLANGroupRequest[]

try {
    $result = $apiInstance->ipamVlanGroupsBulkUpdate($vlan_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlanGroupsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vlan_group_request** | [**\OpenAPI\Client\Model\VLANGroupRequest[]**](../Model/VLANGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VLANGroup[]**](../Model/VLANGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlanGroupsCreate()`

```php
ipamVlanGroupsCreate($vlan_group_request): \OpenAPI\Client\Model\VLANGroup
```



Post a list of VLAN group objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vlan_group_request = new \OpenAPI\Client\Model\VLANGroupRequest(); // \OpenAPI\Client\Model\VLANGroupRequest

try {
    $result = $apiInstance->ipamVlanGroupsCreate($vlan_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlanGroupsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vlan_group_request** | [**\OpenAPI\Client\Model\VLANGroupRequest**](../Model/VLANGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VLANGroup**](../Model/VLANGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlanGroupsDestroy()`

```php
ipamVlanGroupsDestroy($id)
```



Delete a VLAN group object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this VLAN group.

try {
    $apiInstance->ipamVlanGroupsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlanGroupsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this VLAN group. | |

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

## `ipamVlanGroupsList()`

```php
ipamVlanGroupsList($cluster, $cluster_group, $clustergroup, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $location, $max_vid, $max_vid__empty, $max_vid__gt, $max_vid__gte, $max_vid__lt, $max_vid__lte, $max_vid__n, $min_vid, $min_vid__empty, $min_vid__gt, $min_vid__gte, $min_vid__lt, $min_vid__lte, $min_vid__n, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $rack, $region, $scope_id, $scope_id__empty, $scope_id__gt, $scope_id__gte, $scope_id__lt, $scope_id__lte, $scope_id__n, $scope_type, $scope_type__n, $site, $site_group, $sitegroup, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $tag, $tag__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedVLANGroupList
```



Get a list of VLAN group objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster = 56; // int
$cluster_group = 56; // int
$clustergroup = 56; // int
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
$location = 56; // int
$max_vid = array(56); // int[]
$max_vid__empty = True; // bool
$max_vid__gt = array(56); // int[]
$max_vid__gte = array(56); // int[]
$max_vid__lt = array(56); // int[]
$max_vid__lte = array(56); // int[]
$max_vid__n = array(56); // int[]
$min_vid = array(56); // int[]
$min_vid__empty = True; // bool
$min_vid__gt = array(56); // int[]
$min_vid__gte = array(56); // int[]
$min_vid__lt = array(56); // int[]
$min_vid__lte = array(56); // int[]
$min_vid__n = array(56); // int[]
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
$rack = 56; // int
$region = 56; // int
$scope_id = array(56); // int[]
$scope_id__empty = True; // bool
$scope_id__gt = array(56); // int[]
$scope_id__gte = array(56); // int[]
$scope_id__lt = array(56); // int[]
$scope_id__lte = array(56); // int[]
$scope_id__n = array(56); // int[]
$scope_type = 'scope_type_example'; // string
$scope_type__n = 'scope_type__n_example'; // string
$site = 56; // int
$site_group = 56; // int
$sitegroup = 56; // int
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
    $result = $apiInstance->ipamVlanGroupsList($cluster, $cluster_group, $clustergroup, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $location, $max_vid, $max_vid__empty, $max_vid__gt, $max_vid__gte, $max_vid__lt, $max_vid__lte, $max_vid__n, $min_vid, $min_vid__empty, $min_vid__gt, $min_vid__gte, $min_vid__lt, $min_vid__lte, $min_vid__n, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $rack, $region, $scope_id, $scope_id__empty, $scope_id__gt, $scope_id__gte, $scope_id__lt, $scope_id__lte, $scope_id__n, $scope_type, $scope_type__n, $site, $site_group, $sitegroup, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $tag, $tag__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlanGroupsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster** | **int**|  | [optional] |
| **cluster_group** | **int**|  | [optional] |
| **clustergroup** | **int**|  | [optional] |
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
| **location** | **int**|  | [optional] |
| **max_vid** | [**int[]**](../Model/int.md)|  | [optional] |
| **max_vid__empty** | **bool**|  | [optional] |
| **max_vid__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **max_vid__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **max_vid__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **max_vid__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **max_vid__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **min_vid** | [**int[]**](../Model/int.md)|  | [optional] |
| **min_vid__empty** | **bool**|  | [optional] |
| **min_vid__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **min_vid__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **min_vid__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **min_vid__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **min_vid__n** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **rack** | **int**|  | [optional] |
| **region** | **int**|  | [optional] |
| **scope_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **scope_id__empty** | **bool**|  | [optional] |
| **scope_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **scope_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **scope_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **scope_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **scope_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **scope_type** | **string**|  | [optional] |
| **scope_type__n** | **string**|  | [optional] |
| **site** | **int**|  | [optional] |
| **site_group** | **int**|  | [optional] |
| **sitegroup** | **int**|  | [optional] |
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

[**\OpenAPI\Client\Model\PaginatedVLANGroupList**](../Model/PaginatedVLANGroupList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlanGroupsPartialUpdate()`

```php
ipamVlanGroupsPartialUpdate($id, $patched_vlan_group_request): \OpenAPI\Client\Model\VLANGroup
```



Patch a VLAN group object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this VLAN group.
$patched_vlan_group_request = new \OpenAPI\Client\Model\PatchedVLANGroupRequest(); // \OpenAPI\Client\Model\PatchedVLANGroupRequest

try {
    $result = $apiInstance->ipamVlanGroupsPartialUpdate($id, $patched_vlan_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlanGroupsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this VLAN group. | |
| **patched_vlan_group_request** | [**\OpenAPI\Client\Model\PatchedVLANGroupRequest**](../Model/PatchedVLANGroupRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VLANGroup**](../Model/VLANGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlanGroupsRetrieve()`

```php
ipamVlanGroupsRetrieve($id): \OpenAPI\Client\Model\VLANGroup
```



Get a VLAN group object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this VLAN group.

try {
    $result = $apiInstance->ipamVlanGroupsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlanGroupsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this VLAN group. | |

### Return type

[**\OpenAPI\Client\Model\VLANGroup**](../Model/VLANGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlanGroupsUpdate()`

```php
ipamVlanGroupsUpdate($id, $vlan_group_request): \OpenAPI\Client\Model\VLANGroup
```



Put a VLAN group object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this VLAN group.
$vlan_group_request = new \OpenAPI\Client\Model\VLANGroupRequest(); // \OpenAPI\Client\Model\VLANGroupRequest

try {
    $result = $apiInstance->ipamVlanGroupsUpdate($id, $vlan_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlanGroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this VLAN group. | |
| **vlan_group_request** | [**\OpenAPI\Client\Model\VLANGroupRequest**](../Model/VLANGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VLANGroup**](../Model/VLANGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlansBulkDestroy()`

```php
ipamVlansBulkDestroy($vlan_request)
```



Delete a list of VLAN objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vlan_request = array(new \OpenAPI\Client\Model\VLANRequest()); // \OpenAPI\Client\Model\VLANRequest[]

try {
    $apiInstance->ipamVlansBulkDestroy($vlan_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlansBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vlan_request** | [**\OpenAPI\Client\Model\VLANRequest[]**](../Model/VLANRequest.md)|  | |

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

## `ipamVlansBulkPartialUpdate()`

```php
ipamVlansBulkPartialUpdate($vlan_request): \OpenAPI\Client\Model\VLAN[]
```



Patch a list of VLAN objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vlan_request = array(new \OpenAPI\Client\Model\VLANRequest()); // \OpenAPI\Client\Model\VLANRequest[]

try {
    $result = $apiInstance->ipamVlansBulkPartialUpdate($vlan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlansBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vlan_request** | [**\OpenAPI\Client\Model\VLANRequest[]**](../Model/VLANRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VLAN[]**](../Model/VLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlansBulkUpdate()`

```php
ipamVlansBulkUpdate($vlan_request): \OpenAPI\Client\Model\VLAN[]
```



Put a list of VLAN objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vlan_request = array(new \OpenAPI\Client\Model\VLANRequest()); // \OpenAPI\Client\Model\VLANRequest[]

try {
    $result = $apiInstance->ipamVlansBulkUpdate($vlan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlansBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vlan_request** | [**\OpenAPI\Client\Model\VLANRequest[]**](../Model/VLANRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VLAN[]**](../Model/VLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlansCreate()`

```php
ipamVlansCreate($writable_vlan_request): \OpenAPI\Client\Model\VLAN
```



Post a list of VLAN objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_vlan_request = new \OpenAPI\Client\Model\WritableVLANRequest(); // \OpenAPI\Client\Model\WritableVLANRequest

try {
    $result = $apiInstance->ipamVlansCreate($writable_vlan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlansCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_vlan_request** | [**\OpenAPI\Client\Model\WritableVLANRequest**](../Model/WritableVLANRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VLAN**](../Model/VLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlansDestroy()`

```php
ipamVlansDestroy($id)
```



Delete a VLAN object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this VLAN.

try {
    $apiInstance->ipamVlansDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlansDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this VLAN. | |

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

## `ipamVlansList()`

```php
ipamVlansList($available_at_site, $available_on_device, $available_on_virtualmachine, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $group, $group__n, $group_id, $group_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $l2vpn, $l2vpn__n, $l2vpn_id, $l2vpn_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $region, $region__n, $region_id, $region_id__n, $role, $role__n, $role_id, $role_id__n, $site, $site__n, $site_group, $site_group__n, $site_group_id, $site_group_id__n, $site_id, $site_id__n, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $vid, $vid__empty, $vid__gt, $vid__gte, $vid__lt, $vid__lte, $vid__n): \OpenAPI\Client\Model\PaginatedVLANList
```



Get a list of VLAN objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$available_at_site = 'available_at_site_example'; // string
$available_on_device = 'available_on_device_example'; // string
$available_on_virtualmachine = 'available_on_virtualmachine_example'; // string
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
$group = array('group_example'); // string[] | Group
$group__n = array('group__n_example'); // string[] | Group
$group_id = array(56); // int[] | Group (ID)
$group_id__n = array(56); // int[] | Group (ID)
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$l2vpn = array(56); // int[] | L2VPN
$l2vpn__n = array(56); // int[] | L2VPN
$l2vpn_id = array(56); // int[] | L2VPN (ID)
$l2vpn_id__n = array(56); // int[] | L2VPN (ID)
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
$region = array(56); // int[] | Region (slug)
$region__n = array(56); // int[] | Region (slug)
$region_id = array(56); // int[] | Region (ID)
$region_id__n = array(56); // int[] | Region (ID)
$role = array('role_example'); // string[] | Role (slug)
$role__n = array('role__n_example'); // string[] | Role (slug)
$role_id = array(56); // int[] | Role (ID)
$role_id__n = array(56); // int[] | Role (ID)
$site = array('site_example'); // string[] | Site (slug)
$site__n = array('site__n_example'); // string[] | Site (slug)
$site_group = array(56); // int[] | Site group (slug)
$site_group__n = array(56); // int[] | Site group (slug)
$site_group_id = array(56); // int[] | Site group (ID)
$site_group_id__n = array(56); // int[] | Site group (ID)
$site_id = array(56); // int[] | Site (ID)
$site_id__n = array(56); // int[] | Site (ID)
$status = array('status_example'); // string[] | Operational status of this VLAN
$status__n = array('status__n_example'); // string[] | Operational status of this VLAN
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array(56); // int[] | Tenant Group (slug)
$tenant_group__n = array(56); // int[] | Tenant Group (slug)
$tenant_group_id = array(56); // int[] | Tenant Group (ID)
$tenant_group_id__n = array(56); // int[] | Tenant Group (ID)
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string
$vid = array(56); // int[]
$vid__empty = True; // bool
$vid__gt = array(56); // int[]
$vid__gte = array(56); // int[]
$vid__lt = array(56); // int[]
$vid__lte = array(56); // int[]
$vid__n = array(56); // int[]

try {
    $result = $apiInstance->ipamVlansList($available_at_site, $available_on_device, $available_on_virtualmachine, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $group, $group__n, $group_id, $group_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $l2vpn, $l2vpn__n, $l2vpn_id, $l2vpn_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $region, $region__n, $region_id, $region_id__n, $role, $role__n, $role_id, $role_id__n, $site, $site__n, $site_group, $site_group__n, $site_group_id, $site_group_id__n, $site_id, $site_id__n, $status, $status__n, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $vid, $vid__empty, $vid__gt, $vid__gte, $vid__lt, $vid__lte, $vid__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlansList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **available_at_site** | **string**|  | [optional] |
| **available_on_device** | **string**|  | [optional] |
| **available_on_virtualmachine** | **string**|  | [optional] |
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
| **group** | [**string[]**](../Model/string.md)| Group | [optional] |
| **group__n** | [**string[]**](../Model/string.md)| Group | [optional] |
| **group_id** | [**int[]**](../Model/int.md)| Group (ID) | [optional] |
| **group_id__n** | [**int[]**](../Model/int.md)| Group (ID) | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **l2vpn** | [**int[]**](../Model/int.md)| L2VPN | [optional] |
| **l2vpn__n** | [**int[]**](../Model/int.md)| L2VPN | [optional] |
| **l2vpn_id** | [**int[]**](../Model/int.md)| L2VPN (ID) | [optional] |
| **l2vpn_id__n** | [**int[]**](../Model/int.md)| L2VPN (ID) | [optional] |
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
| **region** | [**int[]**](../Model/int.md)| Region (slug) | [optional] |
| **region__n** | [**int[]**](../Model/int.md)| Region (slug) | [optional] |
| **region_id** | [**int[]**](../Model/int.md)| Region (ID) | [optional] |
| **region_id__n** | [**int[]**](../Model/int.md)| Region (ID) | [optional] |
| **role** | [**string[]**](../Model/string.md)| Role (slug) | [optional] |
| **role__n** | [**string[]**](../Model/string.md)| Role (slug) | [optional] |
| **role_id** | [**int[]**](../Model/int.md)| Role (ID) | [optional] |
| **role_id__n** | [**int[]**](../Model/int.md)| Role (ID) | [optional] |
| **site** | [**string[]**](../Model/string.md)| Site (slug) | [optional] |
| **site__n** | [**string[]**](../Model/string.md)| Site (slug) | [optional] |
| **site_group** | [**int[]**](../Model/int.md)| Site group (slug) | [optional] |
| **site_group__n** | [**int[]**](../Model/int.md)| Site group (slug) | [optional] |
| **site_group_id** | [**int[]**](../Model/int.md)| Site group (ID) | [optional] |
| **site_group_id__n** | [**int[]**](../Model/int.md)| Site group (ID) | [optional] |
| **site_id** | [**int[]**](../Model/int.md)| Site (ID) | [optional] |
| **site_id__n** | [**int[]**](../Model/int.md)| Site (ID) | [optional] |
| **status** | [**string[]**](../Model/string.md)| Operational status of this VLAN | [optional] |
| **status__n** | [**string[]**](../Model/string.md)| Operational status of this VLAN | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group__n** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **vid** | [**int[]**](../Model/int.md)|  | [optional] |
| **vid__empty** | **bool**|  | [optional] |
| **vid__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **vid__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **vid__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **vid__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **vid__n** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedVLANList**](../Model/PaginatedVLANList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlansPartialUpdate()`

```php
ipamVlansPartialUpdate($id, $patched_writable_vlan_request): \OpenAPI\Client\Model\VLAN
```



Patch a VLAN object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this VLAN.
$patched_writable_vlan_request = new \OpenAPI\Client\Model\PatchedWritableVLANRequest(); // \OpenAPI\Client\Model\PatchedWritableVLANRequest

try {
    $result = $apiInstance->ipamVlansPartialUpdate($id, $patched_writable_vlan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlansPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this VLAN. | |
| **patched_writable_vlan_request** | [**\OpenAPI\Client\Model\PatchedWritableVLANRequest**](../Model/PatchedWritableVLANRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VLAN**](../Model/VLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlansRetrieve()`

```php
ipamVlansRetrieve($id): \OpenAPI\Client\Model\VLAN
```



Get a VLAN object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this VLAN.

try {
    $result = $apiInstance->ipamVlansRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlansRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this VLAN. | |

### Return type

[**\OpenAPI\Client\Model\VLAN**](../Model/VLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVlansUpdate()`

```php
ipamVlansUpdate($id, $writable_vlan_request): \OpenAPI\Client\Model\VLAN
```



Put a VLAN object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this VLAN.
$writable_vlan_request = new \OpenAPI\Client\Model\WritableVLANRequest(); // \OpenAPI\Client\Model\WritableVLANRequest

try {
    $result = $apiInstance->ipamVlansUpdate($id, $writable_vlan_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVlansUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this VLAN. | |
| **writable_vlan_request** | [**\OpenAPI\Client\Model\WritableVLANRequest**](../Model/WritableVLANRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VLAN**](../Model/VLAN.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVrfsBulkDestroy()`

```php
ipamVrfsBulkDestroy($vrf_request)
```



Delete a list of VRF objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vrf_request = array(new \OpenAPI\Client\Model\VRFRequest()); // \OpenAPI\Client\Model\VRFRequest[]

try {
    $apiInstance->ipamVrfsBulkDestroy($vrf_request);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVrfsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vrf_request** | [**\OpenAPI\Client\Model\VRFRequest[]**](../Model/VRFRequest.md)|  | |

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

## `ipamVrfsBulkPartialUpdate()`

```php
ipamVrfsBulkPartialUpdate($vrf_request): \OpenAPI\Client\Model\VRF[]
```



Patch a list of VRF objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vrf_request = array(new \OpenAPI\Client\Model\VRFRequest()); // \OpenAPI\Client\Model\VRFRequest[]

try {
    $result = $apiInstance->ipamVrfsBulkPartialUpdate($vrf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVrfsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vrf_request** | [**\OpenAPI\Client\Model\VRFRequest[]**](../Model/VRFRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VRF[]**](../Model/VRF.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVrfsBulkUpdate()`

```php
ipamVrfsBulkUpdate($vrf_request): \OpenAPI\Client\Model\VRF[]
```



Put a list of VRF objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vrf_request = array(new \OpenAPI\Client\Model\VRFRequest()); // \OpenAPI\Client\Model\VRFRequest[]

try {
    $result = $apiInstance->ipamVrfsBulkUpdate($vrf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVrfsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vrf_request** | [**\OpenAPI\Client\Model\VRFRequest[]**](../Model/VRFRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VRF[]**](../Model/VRF.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVrfsCreate()`

```php
ipamVrfsCreate($vrf_request): \OpenAPI\Client\Model\VRF
```



Post a list of VRF objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vrf_request = new \OpenAPI\Client\Model\VRFRequest(); // \OpenAPI\Client\Model\VRFRequest

try {
    $result = $apiInstance->ipamVrfsCreate($vrf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVrfsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vrf_request** | [**\OpenAPI\Client\Model\VRFRequest**](../Model/VRFRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VRF**](../Model/VRF.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVrfsDestroy()`

```php
ipamVrfsDestroy($id)
```



Delete a VRF object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this VRF.

try {
    $apiInstance->ipamVrfsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVrfsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this VRF. | |

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

## `ipamVrfsList()`

```php
ipamVrfsList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $enforce_unique, $export_target, $export_target__n, $export_target_id, $export_target_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $import_target, $import_target__n, $import_target_id, $import_target_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $rd, $rd__empty, $rd__ic, $rd__ie, $rd__iew, $rd__isw, $rd__n, $rd__nic, $rd__nie, $rd__niew, $rd__nisw, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedVRFList
```



Get a list of VRF objects.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
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
$enforce_unique = True; // bool
$export_target = array('export_target_example'); // string[] | Export target (name)
$export_target__n = array('export_target__n_example'); // string[] | Export target (name)
$export_target_id = array(56); // int[] | Export target
$export_target_id__n = array(56); // int[] | Export target
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$import_target = array('import_target_example'); // string[] | Import target (name)
$import_target__n = array('import_target__n_example'); // string[] | Import target (name)
$import_target_id = array(56); // int[] | Import target
$import_target_id__n = array(56); // int[] | Import target
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
$rd = array('rd_example'); // string[]
$rd__empty = True; // bool
$rd__ic = array('rd__ic_example'); // string[]
$rd__ie = array('rd__ie_example'); // string[]
$rd__iew = array('rd__iew_example'); // string[]
$rd__isw = array('rd__isw_example'); // string[]
$rd__n = array('rd__n_example'); // string[]
$rd__nic = array('rd__nic_example'); // string[]
$rd__nie = array('rd__nie_example'); // string[]
$rd__niew = array('rd__niew_example'); // string[]
$rd__nisw = array('rd__nisw_example'); // string[]
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array(56); // int[] | Tenant Group (slug)
$tenant_group__n = array(56); // int[] | Tenant Group (slug)
$tenant_group_id = array(56); // int[] | Tenant Group (ID)
$tenant_group_id__n = array(56); // int[] | Tenant Group (ID)
$tenant_id = array(56); // int[] | Tenant (ID)
$tenant_id__n = array(56); // int[] | Tenant (ID)
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->ipamVrfsList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $enforce_unique, $export_target, $export_target__n, $export_target_id, $export_target_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $import_target, $import_target__n, $import_target_id, $import_target_id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $rd, $rd__empty, $rd__ic, $rd__ie, $rd__iew, $rd__isw, $rd__n, $rd__nic, $rd__nie, $rd__niew, $rd__nisw, $tag, $tag__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVrfsList: ', $e->getMessage(), PHP_EOL;
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
| **enforce_unique** | **bool**|  | [optional] |
| **export_target** | [**string[]**](../Model/string.md)| Export target (name) | [optional] |
| **export_target__n** | [**string[]**](../Model/string.md)| Export target (name) | [optional] |
| **export_target_id** | [**int[]**](../Model/int.md)| Export target | [optional] |
| **export_target_id__n** | [**int[]**](../Model/int.md)| Export target | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **import_target** | [**string[]**](../Model/string.md)| Import target (name) | [optional] |
| **import_target__n** | [**string[]**](../Model/string.md)| Import target (name) | [optional] |
| **import_target_id** | [**int[]**](../Model/int.md)| Import target | [optional] |
| **import_target_id__n** | [**int[]**](../Model/int.md)| Import target | [optional] |
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
| **rd** | [**string[]**](../Model/string.md)|  | [optional] |
| **rd__empty** | **bool**|  | [optional] |
| **rd__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **rd__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **rd__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **rd__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **rd__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **rd__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **rd__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **rd__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **rd__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group__n** | [**int[]**](../Model/int.md)| Tenant Group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant Group (ID) | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant (ID) | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedVRFList**](../Model/PaginatedVRFList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVrfsPartialUpdate()`

```php
ipamVrfsPartialUpdate($id, $patched_vrf_request): \OpenAPI\Client\Model\VRF
```



Patch a VRF object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this VRF.
$patched_vrf_request = new \OpenAPI\Client\Model\PatchedVRFRequest(); // \OpenAPI\Client\Model\PatchedVRFRequest

try {
    $result = $apiInstance->ipamVrfsPartialUpdate($id, $patched_vrf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVrfsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this VRF. | |
| **patched_vrf_request** | [**\OpenAPI\Client\Model\PatchedVRFRequest**](../Model/PatchedVRFRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VRF**](../Model/VRF.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVrfsRetrieve()`

```php
ipamVrfsRetrieve($id): \OpenAPI\Client\Model\VRF
```



Get a VRF object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this VRF.

try {
    $result = $apiInstance->ipamVrfsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVrfsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this VRF. | |

### Return type

[**\OpenAPI\Client\Model\VRF**](../Model/VRF.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipamVrfsUpdate()`

```php
ipamVrfsUpdate($id, $vrf_request): \OpenAPI\Client\Model\VRF
```



Put a VRF object.

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


$apiInstance = new OpenAPI\Client\Api\IpamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this VRF.
$vrf_request = new \OpenAPI\Client\Model\VRFRequest(); // \OpenAPI\Client\Model\VRFRequest

try {
    $result = $apiInstance->ipamVrfsUpdate($id, $vrf_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpamApi->ipamVrfsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this VRF. | |
| **vrf_request** | [**\OpenAPI\Client\Model\VRFRequest**](../Model/VRFRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VRF**](../Model/VRF.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
