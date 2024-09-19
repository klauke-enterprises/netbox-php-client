# OpenAPIClient-php

Netbox Client generated from OpenAPI schema.

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/klauke-enterprises/netbox-php-client.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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


$apiInstance = new OpenAPI\Client\Api\CircuitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$circuit_group_assignment_request = array(new \OpenAPI\Client\Model\CircuitGroupAssignmentRequest()); // \OpenAPI\Client\Model\CircuitGroupAssignmentRequest[]

try {
    $apiInstance->circuitsCircuitGroupAssignmentsBulkDestroy($circuit_group_assignment_request);
} catch (Exception $e) {
    echo 'Exception when calling CircuitsApi->circuitsCircuitGroupAssignmentsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://demo.netbox.dev/api/schema*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CircuitsApi* | [**circuitsCircuitGroupAssignmentsBulkDestroy**](docs/Api/CircuitsApi.md#circuitscircuitgroupassignmentsbulkdestroy) | **DELETE** /api/circuits/circuit-group-assignments/ | 
*CircuitsApi* | [**circuitsCircuitGroupAssignmentsBulkPartialUpdate**](docs/Api/CircuitsApi.md#circuitscircuitgroupassignmentsbulkpartialupdate) | **PATCH** /api/circuits/circuit-group-assignments/ | 
*CircuitsApi* | [**circuitsCircuitGroupAssignmentsBulkUpdate**](docs/Api/CircuitsApi.md#circuitscircuitgroupassignmentsbulkupdate) | **PUT** /api/circuits/circuit-group-assignments/ | 
*CircuitsApi* | [**circuitsCircuitGroupAssignmentsCreate**](docs/Api/CircuitsApi.md#circuitscircuitgroupassignmentscreate) | **POST** /api/circuits/circuit-group-assignments/ | 
*CircuitsApi* | [**circuitsCircuitGroupAssignmentsDestroy**](docs/Api/CircuitsApi.md#circuitscircuitgroupassignmentsdestroy) | **DELETE** /api/circuits/circuit-group-assignments/{id}/ | 
*CircuitsApi* | [**circuitsCircuitGroupAssignmentsList**](docs/Api/CircuitsApi.md#circuitscircuitgroupassignmentslist) | **GET** /api/circuits/circuit-group-assignments/ | 
*CircuitsApi* | [**circuitsCircuitGroupAssignmentsPartialUpdate**](docs/Api/CircuitsApi.md#circuitscircuitgroupassignmentspartialupdate) | **PATCH** /api/circuits/circuit-group-assignments/{id}/ | 
*CircuitsApi* | [**circuitsCircuitGroupAssignmentsRetrieve**](docs/Api/CircuitsApi.md#circuitscircuitgroupassignmentsretrieve) | **GET** /api/circuits/circuit-group-assignments/{id}/ | 
*CircuitsApi* | [**circuitsCircuitGroupAssignmentsUpdate**](docs/Api/CircuitsApi.md#circuitscircuitgroupassignmentsupdate) | **PUT** /api/circuits/circuit-group-assignments/{id}/ | 
*CircuitsApi* | [**circuitsCircuitGroupsBulkDestroy**](docs/Api/CircuitsApi.md#circuitscircuitgroupsbulkdestroy) | **DELETE** /api/circuits/circuit-groups/ | 
*CircuitsApi* | [**circuitsCircuitGroupsBulkPartialUpdate**](docs/Api/CircuitsApi.md#circuitscircuitgroupsbulkpartialupdate) | **PATCH** /api/circuits/circuit-groups/ | 
*CircuitsApi* | [**circuitsCircuitGroupsBulkUpdate**](docs/Api/CircuitsApi.md#circuitscircuitgroupsbulkupdate) | **PUT** /api/circuits/circuit-groups/ | 
*CircuitsApi* | [**circuitsCircuitGroupsCreate**](docs/Api/CircuitsApi.md#circuitscircuitgroupscreate) | **POST** /api/circuits/circuit-groups/ | 
*CircuitsApi* | [**circuitsCircuitGroupsDestroy**](docs/Api/CircuitsApi.md#circuitscircuitgroupsdestroy) | **DELETE** /api/circuits/circuit-groups/{id}/ | 
*CircuitsApi* | [**circuitsCircuitGroupsList**](docs/Api/CircuitsApi.md#circuitscircuitgroupslist) | **GET** /api/circuits/circuit-groups/ | 
*CircuitsApi* | [**circuitsCircuitGroupsPartialUpdate**](docs/Api/CircuitsApi.md#circuitscircuitgroupspartialupdate) | **PATCH** /api/circuits/circuit-groups/{id}/ | 
*CircuitsApi* | [**circuitsCircuitGroupsRetrieve**](docs/Api/CircuitsApi.md#circuitscircuitgroupsretrieve) | **GET** /api/circuits/circuit-groups/{id}/ | 
*CircuitsApi* | [**circuitsCircuitGroupsUpdate**](docs/Api/CircuitsApi.md#circuitscircuitgroupsupdate) | **PUT** /api/circuits/circuit-groups/{id}/ | 
*CircuitsApi* | [**circuitsCircuitTerminationsBulkDestroy**](docs/Api/CircuitsApi.md#circuitscircuitterminationsbulkdestroy) | **DELETE** /api/circuits/circuit-terminations/ | 
*CircuitsApi* | [**circuitsCircuitTerminationsBulkPartialUpdate**](docs/Api/CircuitsApi.md#circuitscircuitterminationsbulkpartialupdate) | **PATCH** /api/circuits/circuit-terminations/ | 
*CircuitsApi* | [**circuitsCircuitTerminationsBulkUpdate**](docs/Api/CircuitsApi.md#circuitscircuitterminationsbulkupdate) | **PUT** /api/circuits/circuit-terminations/ | 
*CircuitsApi* | [**circuitsCircuitTerminationsCreate**](docs/Api/CircuitsApi.md#circuitscircuitterminationscreate) | **POST** /api/circuits/circuit-terminations/ | 
*CircuitsApi* | [**circuitsCircuitTerminationsDestroy**](docs/Api/CircuitsApi.md#circuitscircuitterminationsdestroy) | **DELETE** /api/circuits/circuit-terminations/{id}/ | 
*CircuitsApi* | [**circuitsCircuitTerminationsList**](docs/Api/CircuitsApi.md#circuitscircuitterminationslist) | **GET** /api/circuits/circuit-terminations/ | 
*CircuitsApi* | [**circuitsCircuitTerminationsPartialUpdate**](docs/Api/CircuitsApi.md#circuitscircuitterminationspartialupdate) | **PATCH** /api/circuits/circuit-terminations/{id}/ | 
*CircuitsApi* | [**circuitsCircuitTerminationsPathsRetrieve**](docs/Api/CircuitsApi.md#circuitscircuitterminationspathsretrieve) | **GET** /api/circuits/circuit-terminations/{id}/paths/ | 
*CircuitsApi* | [**circuitsCircuitTerminationsRetrieve**](docs/Api/CircuitsApi.md#circuitscircuitterminationsretrieve) | **GET** /api/circuits/circuit-terminations/{id}/ | 
*CircuitsApi* | [**circuitsCircuitTerminationsUpdate**](docs/Api/CircuitsApi.md#circuitscircuitterminationsupdate) | **PUT** /api/circuits/circuit-terminations/{id}/ | 
*CircuitsApi* | [**circuitsCircuitTypesBulkDestroy**](docs/Api/CircuitsApi.md#circuitscircuittypesbulkdestroy) | **DELETE** /api/circuits/circuit-types/ | 
*CircuitsApi* | [**circuitsCircuitTypesBulkPartialUpdate**](docs/Api/CircuitsApi.md#circuitscircuittypesbulkpartialupdate) | **PATCH** /api/circuits/circuit-types/ | 
*CircuitsApi* | [**circuitsCircuitTypesBulkUpdate**](docs/Api/CircuitsApi.md#circuitscircuittypesbulkupdate) | **PUT** /api/circuits/circuit-types/ | 
*CircuitsApi* | [**circuitsCircuitTypesCreate**](docs/Api/CircuitsApi.md#circuitscircuittypescreate) | **POST** /api/circuits/circuit-types/ | 
*CircuitsApi* | [**circuitsCircuitTypesDestroy**](docs/Api/CircuitsApi.md#circuitscircuittypesdestroy) | **DELETE** /api/circuits/circuit-types/{id}/ | 
*CircuitsApi* | [**circuitsCircuitTypesList**](docs/Api/CircuitsApi.md#circuitscircuittypeslist) | **GET** /api/circuits/circuit-types/ | 
*CircuitsApi* | [**circuitsCircuitTypesPartialUpdate**](docs/Api/CircuitsApi.md#circuitscircuittypespartialupdate) | **PATCH** /api/circuits/circuit-types/{id}/ | 
*CircuitsApi* | [**circuitsCircuitTypesRetrieve**](docs/Api/CircuitsApi.md#circuitscircuittypesretrieve) | **GET** /api/circuits/circuit-types/{id}/ | 
*CircuitsApi* | [**circuitsCircuitTypesUpdate**](docs/Api/CircuitsApi.md#circuitscircuittypesupdate) | **PUT** /api/circuits/circuit-types/{id}/ | 
*CircuitsApi* | [**circuitsCircuitsBulkDestroy**](docs/Api/CircuitsApi.md#circuitscircuitsbulkdestroy) | **DELETE** /api/circuits/circuits/ | 
*CircuitsApi* | [**circuitsCircuitsBulkPartialUpdate**](docs/Api/CircuitsApi.md#circuitscircuitsbulkpartialupdate) | **PATCH** /api/circuits/circuits/ | 
*CircuitsApi* | [**circuitsCircuitsBulkUpdate**](docs/Api/CircuitsApi.md#circuitscircuitsbulkupdate) | **PUT** /api/circuits/circuits/ | 
*CircuitsApi* | [**circuitsCircuitsCreate**](docs/Api/CircuitsApi.md#circuitscircuitscreate) | **POST** /api/circuits/circuits/ | 
*CircuitsApi* | [**circuitsCircuitsDestroy**](docs/Api/CircuitsApi.md#circuitscircuitsdestroy) | **DELETE** /api/circuits/circuits/{id}/ | 
*CircuitsApi* | [**circuitsCircuitsList**](docs/Api/CircuitsApi.md#circuitscircuitslist) | **GET** /api/circuits/circuits/ | 
*CircuitsApi* | [**circuitsCircuitsPartialUpdate**](docs/Api/CircuitsApi.md#circuitscircuitspartialupdate) | **PATCH** /api/circuits/circuits/{id}/ | 
*CircuitsApi* | [**circuitsCircuitsRetrieve**](docs/Api/CircuitsApi.md#circuitscircuitsretrieve) | **GET** /api/circuits/circuits/{id}/ | 
*CircuitsApi* | [**circuitsCircuitsUpdate**](docs/Api/CircuitsApi.md#circuitscircuitsupdate) | **PUT** /api/circuits/circuits/{id}/ | 
*CircuitsApi* | [**circuitsProviderAccountsBulkDestroy**](docs/Api/CircuitsApi.md#circuitsprovideraccountsbulkdestroy) | **DELETE** /api/circuits/provider-accounts/ | 
*CircuitsApi* | [**circuitsProviderAccountsBulkPartialUpdate**](docs/Api/CircuitsApi.md#circuitsprovideraccountsbulkpartialupdate) | **PATCH** /api/circuits/provider-accounts/ | 
*CircuitsApi* | [**circuitsProviderAccountsBulkUpdate**](docs/Api/CircuitsApi.md#circuitsprovideraccountsbulkupdate) | **PUT** /api/circuits/provider-accounts/ | 
*CircuitsApi* | [**circuitsProviderAccountsCreate**](docs/Api/CircuitsApi.md#circuitsprovideraccountscreate) | **POST** /api/circuits/provider-accounts/ | 
*CircuitsApi* | [**circuitsProviderAccountsDestroy**](docs/Api/CircuitsApi.md#circuitsprovideraccountsdestroy) | **DELETE** /api/circuits/provider-accounts/{id}/ | 
*CircuitsApi* | [**circuitsProviderAccountsList**](docs/Api/CircuitsApi.md#circuitsprovideraccountslist) | **GET** /api/circuits/provider-accounts/ | 
*CircuitsApi* | [**circuitsProviderAccountsPartialUpdate**](docs/Api/CircuitsApi.md#circuitsprovideraccountspartialupdate) | **PATCH** /api/circuits/provider-accounts/{id}/ | 
*CircuitsApi* | [**circuitsProviderAccountsRetrieve**](docs/Api/CircuitsApi.md#circuitsprovideraccountsretrieve) | **GET** /api/circuits/provider-accounts/{id}/ | 
*CircuitsApi* | [**circuitsProviderAccountsUpdate**](docs/Api/CircuitsApi.md#circuitsprovideraccountsupdate) | **PUT** /api/circuits/provider-accounts/{id}/ | 
*CircuitsApi* | [**circuitsProviderNetworksBulkDestroy**](docs/Api/CircuitsApi.md#circuitsprovidernetworksbulkdestroy) | **DELETE** /api/circuits/provider-networks/ | 
*CircuitsApi* | [**circuitsProviderNetworksBulkPartialUpdate**](docs/Api/CircuitsApi.md#circuitsprovidernetworksbulkpartialupdate) | **PATCH** /api/circuits/provider-networks/ | 
*CircuitsApi* | [**circuitsProviderNetworksBulkUpdate**](docs/Api/CircuitsApi.md#circuitsprovidernetworksbulkupdate) | **PUT** /api/circuits/provider-networks/ | 
*CircuitsApi* | [**circuitsProviderNetworksCreate**](docs/Api/CircuitsApi.md#circuitsprovidernetworkscreate) | **POST** /api/circuits/provider-networks/ | 
*CircuitsApi* | [**circuitsProviderNetworksDestroy**](docs/Api/CircuitsApi.md#circuitsprovidernetworksdestroy) | **DELETE** /api/circuits/provider-networks/{id}/ | 
*CircuitsApi* | [**circuitsProviderNetworksList**](docs/Api/CircuitsApi.md#circuitsprovidernetworkslist) | **GET** /api/circuits/provider-networks/ | 
*CircuitsApi* | [**circuitsProviderNetworksPartialUpdate**](docs/Api/CircuitsApi.md#circuitsprovidernetworkspartialupdate) | **PATCH** /api/circuits/provider-networks/{id}/ | 
*CircuitsApi* | [**circuitsProviderNetworksRetrieve**](docs/Api/CircuitsApi.md#circuitsprovidernetworksretrieve) | **GET** /api/circuits/provider-networks/{id}/ | 
*CircuitsApi* | [**circuitsProviderNetworksUpdate**](docs/Api/CircuitsApi.md#circuitsprovidernetworksupdate) | **PUT** /api/circuits/provider-networks/{id}/ | 
*CircuitsApi* | [**circuitsProvidersBulkDestroy**](docs/Api/CircuitsApi.md#circuitsprovidersbulkdestroy) | **DELETE** /api/circuits/providers/ | 
*CircuitsApi* | [**circuitsProvidersBulkPartialUpdate**](docs/Api/CircuitsApi.md#circuitsprovidersbulkpartialupdate) | **PATCH** /api/circuits/providers/ | 
*CircuitsApi* | [**circuitsProvidersBulkUpdate**](docs/Api/CircuitsApi.md#circuitsprovidersbulkupdate) | **PUT** /api/circuits/providers/ | 
*CircuitsApi* | [**circuitsProvidersCreate**](docs/Api/CircuitsApi.md#circuitsproviderscreate) | **POST** /api/circuits/providers/ | 
*CircuitsApi* | [**circuitsProvidersDestroy**](docs/Api/CircuitsApi.md#circuitsprovidersdestroy) | **DELETE** /api/circuits/providers/{id}/ | 
*CircuitsApi* | [**circuitsProvidersList**](docs/Api/CircuitsApi.md#circuitsproviderslist) | **GET** /api/circuits/providers/ | 
*CircuitsApi* | [**circuitsProvidersPartialUpdate**](docs/Api/CircuitsApi.md#circuitsproviderspartialupdate) | **PATCH** /api/circuits/providers/{id}/ | 
*CircuitsApi* | [**circuitsProvidersRetrieve**](docs/Api/CircuitsApi.md#circuitsprovidersretrieve) | **GET** /api/circuits/providers/{id}/ | 
*CircuitsApi* | [**circuitsProvidersUpdate**](docs/Api/CircuitsApi.md#circuitsprovidersupdate) | **PUT** /api/circuits/providers/{id}/ | 
*CoreApi* | [**coreDataFilesList**](docs/Api/CoreApi.md#coredatafileslist) | **GET** /api/core/data-files/ | 
*CoreApi* | [**coreDataFilesRetrieve**](docs/Api/CoreApi.md#coredatafilesretrieve) | **GET** /api/core/data-files/{id}/ | 
*CoreApi* | [**coreDataSourcesBulkDestroy**](docs/Api/CoreApi.md#coredatasourcesbulkdestroy) | **DELETE** /api/core/data-sources/ | 
*CoreApi* | [**coreDataSourcesBulkPartialUpdate**](docs/Api/CoreApi.md#coredatasourcesbulkpartialupdate) | **PATCH** /api/core/data-sources/ | 
*CoreApi* | [**coreDataSourcesBulkUpdate**](docs/Api/CoreApi.md#coredatasourcesbulkupdate) | **PUT** /api/core/data-sources/ | 
*CoreApi* | [**coreDataSourcesCreate**](docs/Api/CoreApi.md#coredatasourcescreate) | **POST** /api/core/data-sources/ | 
*CoreApi* | [**coreDataSourcesDestroy**](docs/Api/CoreApi.md#coredatasourcesdestroy) | **DELETE** /api/core/data-sources/{id}/ | 
*CoreApi* | [**coreDataSourcesList**](docs/Api/CoreApi.md#coredatasourceslist) | **GET** /api/core/data-sources/ | 
*CoreApi* | [**coreDataSourcesPartialUpdate**](docs/Api/CoreApi.md#coredatasourcespartialupdate) | **PATCH** /api/core/data-sources/{id}/ | 
*CoreApi* | [**coreDataSourcesRetrieve**](docs/Api/CoreApi.md#coredatasourcesretrieve) | **GET** /api/core/data-sources/{id}/ | 
*CoreApi* | [**coreDataSourcesSyncCreate**](docs/Api/CoreApi.md#coredatasourcessynccreate) | **POST** /api/core/data-sources/{id}/sync/ | 
*CoreApi* | [**coreDataSourcesUpdate**](docs/Api/CoreApi.md#coredatasourcesupdate) | **PUT** /api/core/data-sources/{id}/ | 
*CoreApi* | [**coreJobsList**](docs/Api/CoreApi.md#corejobslist) | **GET** /api/core/jobs/ | 
*CoreApi* | [**coreJobsRetrieve**](docs/Api/CoreApi.md#corejobsretrieve) | **GET** /api/core/jobs/{id}/ | 
*CoreApi* | [**coreObjectChangesList**](docs/Api/CoreApi.md#coreobjectchangeslist) | **GET** /api/core/object-changes/ | 
*CoreApi* | [**coreObjectChangesRetrieve**](docs/Api/CoreApi.md#coreobjectchangesretrieve) | **GET** /api/core/object-changes/{id}/ | 
*DcimApi* | [**dcimCableTerminationsBulkDestroy**](docs/Api/DcimApi.md#dcimcableterminationsbulkdestroy) | **DELETE** /api/dcim/cable-terminations/ | 
*DcimApi* | [**dcimCableTerminationsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimcableterminationsbulkpartialupdate) | **PATCH** /api/dcim/cable-terminations/ | 
*DcimApi* | [**dcimCableTerminationsBulkUpdate**](docs/Api/DcimApi.md#dcimcableterminationsbulkupdate) | **PUT** /api/dcim/cable-terminations/ | 
*DcimApi* | [**dcimCableTerminationsCreate**](docs/Api/DcimApi.md#dcimcableterminationscreate) | **POST** /api/dcim/cable-terminations/ | 
*DcimApi* | [**dcimCableTerminationsDestroy**](docs/Api/DcimApi.md#dcimcableterminationsdestroy) | **DELETE** /api/dcim/cable-terminations/{id}/ | 
*DcimApi* | [**dcimCableTerminationsList**](docs/Api/DcimApi.md#dcimcableterminationslist) | **GET** /api/dcim/cable-terminations/ | 
*DcimApi* | [**dcimCableTerminationsPartialUpdate**](docs/Api/DcimApi.md#dcimcableterminationspartialupdate) | **PATCH** /api/dcim/cable-terminations/{id}/ | 
*DcimApi* | [**dcimCableTerminationsRetrieve**](docs/Api/DcimApi.md#dcimcableterminationsretrieve) | **GET** /api/dcim/cable-terminations/{id}/ | 
*DcimApi* | [**dcimCableTerminationsUpdate**](docs/Api/DcimApi.md#dcimcableterminationsupdate) | **PUT** /api/dcim/cable-terminations/{id}/ | 
*DcimApi* | [**dcimCablesBulkDestroy**](docs/Api/DcimApi.md#dcimcablesbulkdestroy) | **DELETE** /api/dcim/cables/ | 
*DcimApi* | [**dcimCablesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimcablesbulkpartialupdate) | **PATCH** /api/dcim/cables/ | 
*DcimApi* | [**dcimCablesBulkUpdate**](docs/Api/DcimApi.md#dcimcablesbulkupdate) | **PUT** /api/dcim/cables/ | 
*DcimApi* | [**dcimCablesCreate**](docs/Api/DcimApi.md#dcimcablescreate) | **POST** /api/dcim/cables/ | 
*DcimApi* | [**dcimCablesDestroy**](docs/Api/DcimApi.md#dcimcablesdestroy) | **DELETE** /api/dcim/cables/{id}/ | 
*DcimApi* | [**dcimCablesList**](docs/Api/DcimApi.md#dcimcableslist) | **GET** /api/dcim/cables/ | 
*DcimApi* | [**dcimCablesPartialUpdate**](docs/Api/DcimApi.md#dcimcablespartialupdate) | **PATCH** /api/dcim/cables/{id}/ | 
*DcimApi* | [**dcimCablesRetrieve**](docs/Api/DcimApi.md#dcimcablesretrieve) | **GET** /api/dcim/cables/{id}/ | 
*DcimApi* | [**dcimCablesUpdate**](docs/Api/DcimApi.md#dcimcablesupdate) | **PUT** /api/dcim/cables/{id}/ | 
*DcimApi* | [**dcimConnectedDeviceList**](docs/Api/DcimApi.md#dcimconnecteddevicelist) | **GET** /api/dcim/connected-device/ | 
*DcimApi* | [**dcimConsolePortTemplatesBulkDestroy**](docs/Api/DcimApi.md#dcimconsoleporttemplatesbulkdestroy) | **DELETE** /api/dcim/console-port-templates/ | 
*DcimApi* | [**dcimConsolePortTemplatesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimconsoleporttemplatesbulkpartialupdate) | **PATCH** /api/dcim/console-port-templates/ | 
*DcimApi* | [**dcimConsolePortTemplatesBulkUpdate**](docs/Api/DcimApi.md#dcimconsoleporttemplatesbulkupdate) | **PUT** /api/dcim/console-port-templates/ | 
*DcimApi* | [**dcimConsolePortTemplatesCreate**](docs/Api/DcimApi.md#dcimconsoleporttemplatescreate) | **POST** /api/dcim/console-port-templates/ | 
*DcimApi* | [**dcimConsolePortTemplatesDestroy**](docs/Api/DcimApi.md#dcimconsoleporttemplatesdestroy) | **DELETE** /api/dcim/console-port-templates/{id}/ | 
*DcimApi* | [**dcimConsolePortTemplatesList**](docs/Api/DcimApi.md#dcimconsoleporttemplateslist) | **GET** /api/dcim/console-port-templates/ | 
*DcimApi* | [**dcimConsolePortTemplatesPartialUpdate**](docs/Api/DcimApi.md#dcimconsoleporttemplatespartialupdate) | **PATCH** /api/dcim/console-port-templates/{id}/ | 
*DcimApi* | [**dcimConsolePortTemplatesRetrieve**](docs/Api/DcimApi.md#dcimconsoleporttemplatesretrieve) | **GET** /api/dcim/console-port-templates/{id}/ | 
*DcimApi* | [**dcimConsolePortTemplatesUpdate**](docs/Api/DcimApi.md#dcimconsoleporttemplatesupdate) | **PUT** /api/dcim/console-port-templates/{id}/ | 
*DcimApi* | [**dcimConsolePortsBulkDestroy**](docs/Api/DcimApi.md#dcimconsoleportsbulkdestroy) | **DELETE** /api/dcim/console-ports/ | 
*DcimApi* | [**dcimConsolePortsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimconsoleportsbulkpartialupdate) | **PATCH** /api/dcim/console-ports/ | 
*DcimApi* | [**dcimConsolePortsBulkUpdate**](docs/Api/DcimApi.md#dcimconsoleportsbulkupdate) | **PUT** /api/dcim/console-ports/ | 
*DcimApi* | [**dcimConsolePortsCreate**](docs/Api/DcimApi.md#dcimconsoleportscreate) | **POST** /api/dcim/console-ports/ | 
*DcimApi* | [**dcimConsolePortsDestroy**](docs/Api/DcimApi.md#dcimconsoleportsdestroy) | **DELETE** /api/dcim/console-ports/{id}/ | 
*DcimApi* | [**dcimConsolePortsList**](docs/Api/DcimApi.md#dcimconsoleportslist) | **GET** /api/dcim/console-ports/ | 
*DcimApi* | [**dcimConsolePortsPartialUpdate**](docs/Api/DcimApi.md#dcimconsoleportspartialupdate) | **PATCH** /api/dcim/console-ports/{id}/ | 
*DcimApi* | [**dcimConsolePortsRetrieve**](docs/Api/DcimApi.md#dcimconsoleportsretrieve) | **GET** /api/dcim/console-ports/{id}/ | 
*DcimApi* | [**dcimConsolePortsTraceRetrieve**](docs/Api/DcimApi.md#dcimconsoleportstraceretrieve) | **GET** /api/dcim/console-ports/{id}/trace/ | 
*DcimApi* | [**dcimConsolePortsUpdate**](docs/Api/DcimApi.md#dcimconsoleportsupdate) | **PUT** /api/dcim/console-ports/{id}/ | 
*DcimApi* | [**dcimConsoleServerPortTemplatesBulkDestroy**](docs/Api/DcimApi.md#dcimconsoleserverporttemplatesbulkdestroy) | **DELETE** /api/dcim/console-server-port-templates/ | 
*DcimApi* | [**dcimConsoleServerPortTemplatesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimconsoleserverporttemplatesbulkpartialupdate) | **PATCH** /api/dcim/console-server-port-templates/ | 
*DcimApi* | [**dcimConsoleServerPortTemplatesBulkUpdate**](docs/Api/DcimApi.md#dcimconsoleserverporttemplatesbulkupdate) | **PUT** /api/dcim/console-server-port-templates/ | 
*DcimApi* | [**dcimConsoleServerPortTemplatesCreate**](docs/Api/DcimApi.md#dcimconsoleserverporttemplatescreate) | **POST** /api/dcim/console-server-port-templates/ | 
*DcimApi* | [**dcimConsoleServerPortTemplatesDestroy**](docs/Api/DcimApi.md#dcimconsoleserverporttemplatesdestroy) | **DELETE** /api/dcim/console-server-port-templates/{id}/ | 
*DcimApi* | [**dcimConsoleServerPortTemplatesList**](docs/Api/DcimApi.md#dcimconsoleserverporttemplateslist) | **GET** /api/dcim/console-server-port-templates/ | 
*DcimApi* | [**dcimConsoleServerPortTemplatesPartialUpdate**](docs/Api/DcimApi.md#dcimconsoleserverporttemplatespartialupdate) | **PATCH** /api/dcim/console-server-port-templates/{id}/ | 
*DcimApi* | [**dcimConsoleServerPortTemplatesRetrieve**](docs/Api/DcimApi.md#dcimconsoleserverporttemplatesretrieve) | **GET** /api/dcim/console-server-port-templates/{id}/ | 
*DcimApi* | [**dcimConsoleServerPortTemplatesUpdate**](docs/Api/DcimApi.md#dcimconsoleserverporttemplatesupdate) | **PUT** /api/dcim/console-server-port-templates/{id}/ | 
*DcimApi* | [**dcimConsoleServerPortsBulkDestroy**](docs/Api/DcimApi.md#dcimconsoleserverportsbulkdestroy) | **DELETE** /api/dcim/console-server-ports/ | 
*DcimApi* | [**dcimConsoleServerPortsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimconsoleserverportsbulkpartialupdate) | **PATCH** /api/dcim/console-server-ports/ | 
*DcimApi* | [**dcimConsoleServerPortsBulkUpdate**](docs/Api/DcimApi.md#dcimconsoleserverportsbulkupdate) | **PUT** /api/dcim/console-server-ports/ | 
*DcimApi* | [**dcimConsoleServerPortsCreate**](docs/Api/DcimApi.md#dcimconsoleserverportscreate) | **POST** /api/dcim/console-server-ports/ | 
*DcimApi* | [**dcimConsoleServerPortsDestroy**](docs/Api/DcimApi.md#dcimconsoleserverportsdestroy) | **DELETE** /api/dcim/console-server-ports/{id}/ | 
*DcimApi* | [**dcimConsoleServerPortsList**](docs/Api/DcimApi.md#dcimconsoleserverportslist) | **GET** /api/dcim/console-server-ports/ | 
*DcimApi* | [**dcimConsoleServerPortsPartialUpdate**](docs/Api/DcimApi.md#dcimconsoleserverportspartialupdate) | **PATCH** /api/dcim/console-server-ports/{id}/ | 
*DcimApi* | [**dcimConsoleServerPortsRetrieve**](docs/Api/DcimApi.md#dcimconsoleserverportsretrieve) | **GET** /api/dcim/console-server-ports/{id}/ | 
*DcimApi* | [**dcimConsoleServerPortsTraceRetrieve**](docs/Api/DcimApi.md#dcimconsoleserverportstraceretrieve) | **GET** /api/dcim/console-server-ports/{id}/trace/ | 
*DcimApi* | [**dcimConsoleServerPortsUpdate**](docs/Api/DcimApi.md#dcimconsoleserverportsupdate) | **PUT** /api/dcim/console-server-ports/{id}/ | 
*DcimApi* | [**dcimDeviceBayTemplatesBulkDestroy**](docs/Api/DcimApi.md#dcimdevicebaytemplatesbulkdestroy) | **DELETE** /api/dcim/device-bay-templates/ | 
*DcimApi* | [**dcimDeviceBayTemplatesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimdevicebaytemplatesbulkpartialupdate) | **PATCH** /api/dcim/device-bay-templates/ | 
*DcimApi* | [**dcimDeviceBayTemplatesBulkUpdate**](docs/Api/DcimApi.md#dcimdevicebaytemplatesbulkupdate) | **PUT** /api/dcim/device-bay-templates/ | 
*DcimApi* | [**dcimDeviceBayTemplatesCreate**](docs/Api/DcimApi.md#dcimdevicebaytemplatescreate) | **POST** /api/dcim/device-bay-templates/ | 
*DcimApi* | [**dcimDeviceBayTemplatesDestroy**](docs/Api/DcimApi.md#dcimdevicebaytemplatesdestroy) | **DELETE** /api/dcim/device-bay-templates/{id}/ | 
*DcimApi* | [**dcimDeviceBayTemplatesList**](docs/Api/DcimApi.md#dcimdevicebaytemplateslist) | **GET** /api/dcim/device-bay-templates/ | 
*DcimApi* | [**dcimDeviceBayTemplatesPartialUpdate**](docs/Api/DcimApi.md#dcimdevicebaytemplatespartialupdate) | **PATCH** /api/dcim/device-bay-templates/{id}/ | 
*DcimApi* | [**dcimDeviceBayTemplatesRetrieve**](docs/Api/DcimApi.md#dcimdevicebaytemplatesretrieve) | **GET** /api/dcim/device-bay-templates/{id}/ | 
*DcimApi* | [**dcimDeviceBayTemplatesUpdate**](docs/Api/DcimApi.md#dcimdevicebaytemplatesupdate) | **PUT** /api/dcim/device-bay-templates/{id}/ | 
*DcimApi* | [**dcimDeviceBaysBulkDestroy**](docs/Api/DcimApi.md#dcimdevicebaysbulkdestroy) | **DELETE** /api/dcim/device-bays/ | 
*DcimApi* | [**dcimDeviceBaysBulkPartialUpdate**](docs/Api/DcimApi.md#dcimdevicebaysbulkpartialupdate) | **PATCH** /api/dcim/device-bays/ | 
*DcimApi* | [**dcimDeviceBaysBulkUpdate**](docs/Api/DcimApi.md#dcimdevicebaysbulkupdate) | **PUT** /api/dcim/device-bays/ | 
*DcimApi* | [**dcimDeviceBaysCreate**](docs/Api/DcimApi.md#dcimdevicebayscreate) | **POST** /api/dcim/device-bays/ | 
*DcimApi* | [**dcimDeviceBaysDestroy**](docs/Api/DcimApi.md#dcimdevicebaysdestroy) | **DELETE** /api/dcim/device-bays/{id}/ | 
*DcimApi* | [**dcimDeviceBaysList**](docs/Api/DcimApi.md#dcimdevicebayslist) | **GET** /api/dcim/device-bays/ | 
*DcimApi* | [**dcimDeviceBaysPartialUpdate**](docs/Api/DcimApi.md#dcimdevicebayspartialupdate) | **PATCH** /api/dcim/device-bays/{id}/ | 
*DcimApi* | [**dcimDeviceBaysRetrieve**](docs/Api/DcimApi.md#dcimdevicebaysretrieve) | **GET** /api/dcim/device-bays/{id}/ | 
*DcimApi* | [**dcimDeviceBaysUpdate**](docs/Api/DcimApi.md#dcimdevicebaysupdate) | **PUT** /api/dcim/device-bays/{id}/ | 
*DcimApi* | [**dcimDeviceRolesBulkDestroy**](docs/Api/DcimApi.md#dcimdevicerolesbulkdestroy) | **DELETE** /api/dcim/device-roles/ | 
*DcimApi* | [**dcimDeviceRolesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimdevicerolesbulkpartialupdate) | **PATCH** /api/dcim/device-roles/ | 
*DcimApi* | [**dcimDeviceRolesBulkUpdate**](docs/Api/DcimApi.md#dcimdevicerolesbulkupdate) | **PUT** /api/dcim/device-roles/ | 
*DcimApi* | [**dcimDeviceRolesCreate**](docs/Api/DcimApi.md#dcimdevicerolescreate) | **POST** /api/dcim/device-roles/ | 
*DcimApi* | [**dcimDeviceRolesDestroy**](docs/Api/DcimApi.md#dcimdevicerolesdestroy) | **DELETE** /api/dcim/device-roles/{id}/ | 
*DcimApi* | [**dcimDeviceRolesList**](docs/Api/DcimApi.md#dcimdeviceroleslist) | **GET** /api/dcim/device-roles/ | 
*DcimApi* | [**dcimDeviceRolesPartialUpdate**](docs/Api/DcimApi.md#dcimdevicerolespartialupdate) | **PATCH** /api/dcim/device-roles/{id}/ | 
*DcimApi* | [**dcimDeviceRolesRetrieve**](docs/Api/DcimApi.md#dcimdevicerolesretrieve) | **GET** /api/dcim/device-roles/{id}/ | 
*DcimApi* | [**dcimDeviceRolesUpdate**](docs/Api/DcimApi.md#dcimdevicerolesupdate) | **PUT** /api/dcim/device-roles/{id}/ | 
*DcimApi* | [**dcimDeviceTypesBulkDestroy**](docs/Api/DcimApi.md#dcimdevicetypesbulkdestroy) | **DELETE** /api/dcim/device-types/ | 
*DcimApi* | [**dcimDeviceTypesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimdevicetypesbulkpartialupdate) | **PATCH** /api/dcim/device-types/ | 
*DcimApi* | [**dcimDeviceTypesBulkUpdate**](docs/Api/DcimApi.md#dcimdevicetypesbulkupdate) | **PUT** /api/dcim/device-types/ | 
*DcimApi* | [**dcimDeviceTypesCreate**](docs/Api/DcimApi.md#dcimdevicetypescreate) | **POST** /api/dcim/device-types/ | 
*DcimApi* | [**dcimDeviceTypesDestroy**](docs/Api/DcimApi.md#dcimdevicetypesdestroy) | **DELETE** /api/dcim/device-types/{id}/ | 
*DcimApi* | [**dcimDeviceTypesList**](docs/Api/DcimApi.md#dcimdevicetypeslist) | **GET** /api/dcim/device-types/ | 
*DcimApi* | [**dcimDeviceTypesPartialUpdate**](docs/Api/DcimApi.md#dcimdevicetypespartialupdate) | **PATCH** /api/dcim/device-types/{id}/ | 
*DcimApi* | [**dcimDeviceTypesRetrieve**](docs/Api/DcimApi.md#dcimdevicetypesretrieve) | **GET** /api/dcim/device-types/{id}/ | 
*DcimApi* | [**dcimDeviceTypesUpdate**](docs/Api/DcimApi.md#dcimdevicetypesupdate) | **PUT** /api/dcim/device-types/{id}/ | 
*DcimApi* | [**dcimDevicesBulkDestroy**](docs/Api/DcimApi.md#dcimdevicesbulkdestroy) | **DELETE** /api/dcim/devices/ | 
*DcimApi* | [**dcimDevicesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimdevicesbulkpartialupdate) | **PATCH** /api/dcim/devices/ | 
*DcimApi* | [**dcimDevicesBulkUpdate**](docs/Api/DcimApi.md#dcimdevicesbulkupdate) | **PUT** /api/dcim/devices/ | 
*DcimApi* | [**dcimDevicesCreate**](docs/Api/DcimApi.md#dcimdevicescreate) | **POST** /api/dcim/devices/ | 
*DcimApi* | [**dcimDevicesDestroy**](docs/Api/DcimApi.md#dcimdevicesdestroy) | **DELETE** /api/dcim/devices/{id}/ | 
*DcimApi* | [**dcimDevicesList**](docs/Api/DcimApi.md#dcimdeviceslist) | **GET** /api/dcim/devices/ | 
*DcimApi* | [**dcimDevicesPartialUpdate**](docs/Api/DcimApi.md#dcimdevicespartialupdate) | **PATCH** /api/dcim/devices/{id}/ | 
*DcimApi* | [**dcimDevicesRenderConfigCreate**](docs/Api/DcimApi.md#dcimdevicesrenderconfigcreate) | **POST** /api/dcim/devices/{id}/render-config/ | 
*DcimApi* | [**dcimDevicesRetrieve**](docs/Api/DcimApi.md#dcimdevicesretrieve) | **GET** /api/dcim/devices/{id}/ | 
*DcimApi* | [**dcimDevicesUpdate**](docs/Api/DcimApi.md#dcimdevicesupdate) | **PUT** /api/dcim/devices/{id}/ | 
*DcimApi* | [**dcimFrontPortTemplatesBulkDestroy**](docs/Api/DcimApi.md#dcimfrontporttemplatesbulkdestroy) | **DELETE** /api/dcim/front-port-templates/ | 
*DcimApi* | [**dcimFrontPortTemplatesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimfrontporttemplatesbulkpartialupdate) | **PATCH** /api/dcim/front-port-templates/ | 
*DcimApi* | [**dcimFrontPortTemplatesBulkUpdate**](docs/Api/DcimApi.md#dcimfrontporttemplatesbulkupdate) | **PUT** /api/dcim/front-port-templates/ | 
*DcimApi* | [**dcimFrontPortTemplatesCreate**](docs/Api/DcimApi.md#dcimfrontporttemplatescreate) | **POST** /api/dcim/front-port-templates/ | 
*DcimApi* | [**dcimFrontPortTemplatesDestroy**](docs/Api/DcimApi.md#dcimfrontporttemplatesdestroy) | **DELETE** /api/dcim/front-port-templates/{id}/ | 
*DcimApi* | [**dcimFrontPortTemplatesList**](docs/Api/DcimApi.md#dcimfrontporttemplateslist) | **GET** /api/dcim/front-port-templates/ | 
*DcimApi* | [**dcimFrontPortTemplatesPartialUpdate**](docs/Api/DcimApi.md#dcimfrontporttemplatespartialupdate) | **PATCH** /api/dcim/front-port-templates/{id}/ | 
*DcimApi* | [**dcimFrontPortTemplatesRetrieve**](docs/Api/DcimApi.md#dcimfrontporttemplatesretrieve) | **GET** /api/dcim/front-port-templates/{id}/ | 
*DcimApi* | [**dcimFrontPortTemplatesUpdate**](docs/Api/DcimApi.md#dcimfrontporttemplatesupdate) | **PUT** /api/dcim/front-port-templates/{id}/ | 
*DcimApi* | [**dcimFrontPortsBulkDestroy**](docs/Api/DcimApi.md#dcimfrontportsbulkdestroy) | **DELETE** /api/dcim/front-ports/ | 
*DcimApi* | [**dcimFrontPortsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimfrontportsbulkpartialupdate) | **PATCH** /api/dcim/front-ports/ | 
*DcimApi* | [**dcimFrontPortsBulkUpdate**](docs/Api/DcimApi.md#dcimfrontportsbulkupdate) | **PUT** /api/dcim/front-ports/ | 
*DcimApi* | [**dcimFrontPortsCreate**](docs/Api/DcimApi.md#dcimfrontportscreate) | **POST** /api/dcim/front-ports/ | 
*DcimApi* | [**dcimFrontPortsDestroy**](docs/Api/DcimApi.md#dcimfrontportsdestroy) | **DELETE** /api/dcim/front-ports/{id}/ | 
*DcimApi* | [**dcimFrontPortsList**](docs/Api/DcimApi.md#dcimfrontportslist) | **GET** /api/dcim/front-ports/ | 
*DcimApi* | [**dcimFrontPortsPartialUpdate**](docs/Api/DcimApi.md#dcimfrontportspartialupdate) | **PATCH** /api/dcim/front-ports/{id}/ | 
*DcimApi* | [**dcimFrontPortsPathsRetrieve**](docs/Api/DcimApi.md#dcimfrontportspathsretrieve) | **GET** /api/dcim/front-ports/{id}/paths/ | 
*DcimApi* | [**dcimFrontPortsRetrieve**](docs/Api/DcimApi.md#dcimfrontportsretrieve) | **GET** /api/dcim/front-ports/{id}/ | 
*DcimApi* | [**dcimFrontPortsUpdate**](docs/Api/DcimApi.md#dcimfrontportsupdate) | **PUT** /api/dcim/front-ports/{id}/ | 
*DcimApi* | [**dcimInterfaceTemplatesBulkDestroy**](docs/Api/DcimApi.md#dciminterfacetemplatesbulkdestroy) | **DELETE** /api/dcim/interface-templates/ | 
*DcimApi* | [**dcimInterfaceTemplatesBulkPartialUpdate**](docs/Api/DcimApi.md#dciminterfacetemplatesbulkpartialupdate) | **PATCH** /api/dcim/interface-templates/ | 
*DcimApi* | [**dcimInterfaceTemplatesBulkUpdate**](docs/Api/DcimApi.md#dciminterfacetemplatesbulkupdate) | **PUT** /api/dcim/interface-templates/ | 
*DcimApi* | [**dcimInterfaceTemplatesCreate**](docs/Api/DcimApi.md#dciminterfacetemplatescreate) | **POST** /api/dcim/interface-templates/ | 
*DcimApi* | [**dcimInterfaceTemplatesDestroy**](docs/Api/DcimApi.md#dciminterfacetemplatesdestroy) | **DELETE** /api/dcim/interface-templates/{id}/ | 
*DcimApi* | [**dcimInterfaceTemplatesList**](docs/Api/DcimApi.md#dciminterfacetemplateslist) | **GET** /api/dcim/interface-templates/ | 
*DcimApi* | [**dcimInterfaceTemplatesPartialUpdate**](docs/Api/DcimApi.md#dciminterfacetemplatespartialupdate) | **PATCH** /api/dcim/interface-templates/{id}/ | 
*DcimApi* | [**dcimInterfaceTemplatesRetrieve**](docs/Api/DcimApi.md#dciminterfacetemplatesretrieve) | **GET** /api/dcim/interface-templates/{id}/ | 
*DcimApi* | [**dcimInterfaceTemplatesUpdate**](docs/Api/DcimApi.md#dciminterfacetemplatesupdate) | **PUT** /api/dcim/interface-templates/{id}/ | 
*DcimApi* | [**dcimInterfacesBulkDestroy**](docs/Api/DcimApi.md#dciminterfacesbulkdestroy) | **DELETE** /api/dcim/interfaces/ | 
*DcimApi* | [**dcimInterfacesBulkPartialUpdate**](docs/Api/DcimApi.md#dciminterfacesbulkpartialupdate) | **PATCH** /api/dcim/interfaces/ | 
*DcimApi* | [**dcimInterfacesBulkUpdate**](docs/Api/DcimApi.md#dciminterfacesbulkupdate) | **PUT** /api/dcim/interfaces/ | 
*DcimApi* | [**dcimInterfacesCreate**](docs/Api/DcimApi.md#dciminterfacescreate) | **POST** /api/dcim/interfaces/ | 
*DcimApi* | [**dcimInterfacesDestroy**](docs/Api/DcimApi.md#dciminterfacesdestroy) | **DELETE** /api/dcim/interfaces/{id}/ | 
*DcimApi* | [**dcimInterfacesList**](docs/Api/DcimApi.md#dciminterfaceslist) | **GET** /api/dcim/interfaces/ | 
*DcimApi* | [**dcimInterfacesPartialUpdate**](docs/Api/DcimApi.md#dciminterfacespartialupdate) | **PATCH** /api/dcim/interfaces/{id}/ | 
*DcimApi* | [**dcimInterfacesRetrieve**](docs/Api/DcimApi.md#dciminterfacesretrieve) | **GET** /api/dcim/interfaces/{id}/ | 
*DcimApi* | [**dcimInterfacesTraceRetrieve**](docs/Api/DcimApi.md#dciminterfacestraceretrieve) | **GET** /api/dcim/interfaces/{id}/trace/ | 
*DcimApi* | [**dcimInterfacesUpdate**](docs/Api/DcimApi.md#dciminterfacesupdate) | **PUT** /api/dcim/interfaces/{id}/ | 
*DcimApi* | [**dcimInventoryItemRolesBulkDestroy**](docs/Api/DcimApi.md#dciminventoryitemrolesbulkdestroy) | **DELETE** /api/dcim/inventory-item-roles/ | 
*DcimApi* | [**dcimInventoryItemRolesBulkPartialUpdate**](docs/Api/DcimApi.md#dciminventoryitemrolesbulkpartialupdate) | **PATCH** /api/dcim/inventory-item-roles/ | 
*DcimApi* | [**dcimInventoryItemRolesBulkUpdate**](docs/Api/DcimApi.md#dciminventoryitemrolesbulkupdate) | **PUT** /api/dcim/inventory-item-roles/ | 
*DcimApi* | [**dcimInventoryItemRolesCreate**](docs/Api/DcimApi.md#dciminventoryitemrolescreate) | **POST** /api/dcim/inventory-item-roles/ | 
*DcimApi* | [**dcimInventoryItemRolesDestroy**](docs/Api/DcimApi.md#dciminventoryitemrolesdestroy) | **DELETE** /api/dcim/inventory-item-roles/{id}/ | 
*DcimApi* | [**dcimInventoryItemRolesList**](docs/Api/DcimApi.md#dciminventoryitemroleslist) | **GET** /api/dcim/inventory-item-roles/ | 
*DcimApi* | [**dcimInventoryItemRolesPartialUpdate**](docs/Api/DcimApi.md#dciminventoryitemrolespartialupdate) | **PATCH** /api/dcim/inventory-item-roles/{id}/ | 
*DcimApi* | [**dcimInventoryItemRolesRetrieve**](docs/Api/DcimApi.md#dciminventoryitemrolesretrieve) | **GET** /api/dcim/inventory-item-roles/{id}/ | 
*DcimApi* | [**dcimInventoryItemRolesUpdate**](docs/Api/DcimApi.md#dciminventoryitemrolesupdate) | **PUT** /api/dcim/inventory-item-roles/{id}/ | 
*DcimApi* | [**dcimInventoryItemTemplatesBulkDestroy**](docs/Api/DcimApi.md#dciminventoryitemtemplatesbulkdestroy) | **DELETE** /api/dcim/inventory-item-templates/ | 
*DcimApi* | [**dcimInventoryItemTemplatesBulkPartialUpdate**](docs/Api/DcimApi.md#dciminventoryitemtemplatesbulkpartialupdate) | **PATCH** /api/dcim/inventory-item-templates/ | 
*DcimApi* | [**dcimInventoryItemTemplatesBulkUpdate**](docs/Api/DcimApi.md#dciminventoryitemtemplatesbulkupdate) | **PUT** /api/dcim/inventory-item-templates/ | 
*DcimApi* | [**dcimInventoryItemTemplatesCreate**](docs/Api/DcimApi.md#dciminventoryitemtemplatescreate) | **POST** /api/dcim/inventory-item-templates/ | 
*DcimApi* | [**dcimInventoryItemTemplatesDestroy**](docs/Api/DcimApi.md#dciminventoryitemtemplatesdestroy) | **DELETE** /api/dcim/inventory-item-templates/{id}/ | 
*DcimApi* | [**dcimInventoryItemTemplatesList**](docs/Api/DcimApi.md#dciminventoryitemtemplateslist) | **GET** /api/dcim/inventory-item-templates/ | 
*DcimApi* | [**dcimInventoryItemTemplatesPartialUpdate**](docs/Api/DcimApi.md#dciminventoryitemtemplatespartialupdate) | **PATCH** /api/dcim/inventory-item-templates/{id}/ | 
*DcimApi* | [**dcimInventoryItemTemplatesRetrieve**](docs/Api/DcimApi.md#dciminventoryitemtemplatesretrieve) | **GET** /api/dcim/inventory-item-templates/{id}/ | 
*DcimApi* | [**dcimInventoryItemTemplatesUpdate**](docs/Api/DcimApi.md#dciminventoryitemtemplatesupdate) | **PUT** /api/dcim/inventory-item-templates/{id}/ | 
*DcimApi* | [**dcimInventoryItemsBulkDestroy**](docs/Api/DcimApi.md#dciminventoryitemsbulkdestroy) | **DELETE** /api/dcim/inventory-items/ | 
*DcimApi* | [**dcimInventoryItemsBulkPartialUpdate**](docs/Api/DcimApi.md#dciminventoryitemsbulkpartialupdate) | **PATCH** /api/dcim/inventory-items/ | 
*DcimApi* | [**dcimInventoryItemsBulkUpdate**](docs/Api/DcimApi.md#dciminventoryitemsbulkupdate) | **PUT** /api/dcim/inventory-items/ | 
*DcimApi* | [**dcimInventoryItemsCreate**](docs/Api/DcimApi.md#dciminventoryitemscreate) | **POST** /api/dcim/inventory-items/ | 
*DcimApi* | [**dcimInventoryItemsDestroy**](docs/Api/DcimApi.md#dciminventoryitemsdestroy) | **DELETE** /api/dcim/inventory-items/{id}/ | 
*DcimApi* | [**dcimInventoryItemsList**](docs/Api/DcimApi.md#dciminventoryitemslist) | **GET** /api/dcim/inventory-items/ | 
*DcimApi* | [**dcimInventoryItemsPartialUpdate**](docs/Api/DcimApi.md#dciminventoryitemspartialupdate) | **PATCH** /api/dcim/inventory-items/{id}/ | 
*DcimApi* | [**dcimInventoryItemsRetrieve**](docs/Api/DcimApi.md#dciminventoryitemsretrieve) | **GET** /api/dcim/inventory-items/{id}/ | 
*DcimApi* | [**dcimInventoryItemsUpdate**](docs/Api/DcimApi.md#dciminventoryitemsupdate) | **PUT** /api/dcim/inventory-items/{id}/ | 
*DcimApi* | [**dcimLocationsBulkDestroy**](docs/Api/DcimApi.md#dcimlocationsbulkdestroy) | **DELETE** /api/dcim/locations/ | 
*DcimApi* | [**dcimLocationsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimlocationsbulkpartialupdate) | **PATCH** /api/dcim/locations/ | 
*DcimApi* | [**dcimLocationsBulkUpdate**](docs/Api/DcimApi.md#dcimlocationsbulkupdate) | **PUT** /api/dcim/locations/ | 
*DcimApi* | [**dcimLocationsCreate**](docs/Api/DcimApi.md#dcimlocationscreate) | **POST** /api/dcim/locations/ | 
*DcimApi* | [**dcimLocationsDestroy**](docs/Api/DcimApi.md#dcimlocationsdestroy) | **DELETE** /api/dcim/locations/{id}/ | 
*DcimApi* | [**dcimLocationsList**](docs/Api/DcimApi.md#dcimlocationslist) | **GET** /api/dcim/locations/ | 
*DcimApi* | [**dcimLocationsPartialUpdate**](docs/Api/DcimApi.md#dcimlocationspartialupdate) | **PATCH** /api/dcim/locations/{id}/ | 
*DcimApi* | [**dcimLocationsRetrieve**](docs/Api/DcimApi.md#dcimlocationsretrieve) | **GET** /api/dcim/locations/{id}/ | 
*DcimApi* | [**dcimLocationsUpdate**](docs/Api/DcimApi.md#dcimlocationsupdate) | **PUT** /api/dcim/locations/{id}/ | 
*DcimApi* | [**dcimManufacturersBulkDestroy**](docs/Api/DcimApi.md#dcimmanufacturersbulkdestroy) | **DELETE** /api/dcim/manufacturers/ | 
*DcimApi* | [**dcimManufacturersBulkPartialUpdate**](docs/Api/DcimApi.md#dcimmanufacturersbulkpartialupdate) | **PATCH** /api/dcim/manufacturers/ | 
*DcimApi* | [**dcimManufacturersBulkUpdate**](docs/Api/DcimApi.md#dcimmanufacturersbulkupdate) | **PUT** /api/dcim/manufacturers/ | 
*DcimApi* | [**dcimManufacturersCreate**](docs/Api/DcimApi.md#dcimmanufacturerscreate) | **POST** /api/dcim/manufacturers/ | 
*DcimApi* | [**dcimManufacturersDestroy**](docs/Api/DcimApi.md#dcimmanufacturersdestroy) | **DELETE** /api/dcim/manufacturers/{id}/ | 
*DcimApi* | [**dcimManufacturersList**](docs/Api/DcimApi.md#dcimmanufacturerslist) | **GET** /api/dcim/manufacturers/ | 
*DcimApi* | [**dcimManufacturersPartialUpdate**](docs/Api/DcimApi.md#dcimmanufacturerspartialupdate) | **PATCH** /api/dcim/manufacturers/{id}/ | 
*DcimApi* | [**dcimManufacturersRetrieve**](docs/Api/DcimApi.md#dcimmanufacturersretrieve) | **GET** /api/dcim/manufacturers/{id}/ | 
*DcimApi* | [**dcimManufacturersUpdate**](docs/Api/DcimApi.md#dcimmanufacturersupdate) | **PUT** /api/dcim/manufacturers/{id}/ | 
*DcimApi* | [**dcimModuleBayTemplatesBulkDestroy**](docs/Api/DcimApi.md#dcimmodulebaytemplatesbulkdestroy) | **DELETE** /api/dcim/module-bay-templates/ | 
*DcimApi* | [**dcimModuleBayTemplatesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimmodulebaytemplatesbulkpartialupdate) | **PATCH** /api/dcim/module-bay-templates/ | 
*DcimApi* | [**dcimModuleBayTemplatesBulkUpdate**](docs/Api/DcimApi.md#dcimmodulebaytemplatesbulkupdate) | **PUT** /api/dcim/module-bay-templates/ | 
*DcimApi* | [**dcimModuleBayTemplatesCreate**](docs/Api/DcimApi.md#dcimmodulebaytemplatescreate) | **POST** /api/dcim/module-bay-templates/ | 
*DcimApi* | [**dcimModuleBayTemplatesDestroy**](docs/Api/DcimApi.md#dcimmodulebaytemplatesdestroy) | **DELETE** /api/dcim/module-bay-templates/{id}/ | 
*DcimApi* | [**dcimModuleBayTemplatesList**](docs/Api/DcimApi.md#dcimmodulebaytemplateslist) | **GET** /api/dcim/module-bay-templates/ | 
*DcimApi* | [**dcimModuleBayTemplatesPartialUpdate**](docs/Api/DcimApi.md#dcimmodulebaytemplatespartialupdate) | **PATCH** /api/dcim/module-bay-templates/{id}/ | 
*DcimApi* | [**dcimModuleBayTemplatesRetrieve**](docs/Api/DcimApi.md#dcimmodulebaytemplatesretrieve) | **GET** /api/dcim/module-bay-templates/{id}/ | 
*DcimApi* | [**dcimModuleBayTemplatesUpdate**](docs/Api/DcimApi.md#dcimmodulebaytemplatesupdate) | **PUT** /api/dcim/module-bay-templates/{id}/ | 
*DcimApi* | [**dcimModuleBaysBulkDestroy**](docs/Api/DcimApi.md#dcimmodulebaysbulkdestroy) | **DELETE** /api/dcim/module-bays/ | 
*DcimApi* | [**dcimModuleBaysBulkPartialUpdate**](docs/Api/DcimApi.md#dcimmodulebaysbulkpartialupdate) | **PATCH** /api/dcim/module-bays/ | 
*DcimApi* | [**dcimModuleBaysBulkUpdate**](docs/Api/DcimApi.md#dcimmodulebaysbulkupdate) | **PUT** /api/dcim/module-bays/ | 
*DcimApi* | [**dcimModuleBaysCreate**](docs/Api/DcimApi.md#dcimmodulebayscreate) | **POST** /api/dcim/module-bays/ | 
*DcimApi* | [**dcimModuleBaysDestroy**](docs/Api/DcimApi.md#dcimmodulebaysdestroy) | **DELETE** /api/dcim/module-bays/{id}/ | 
*DcimApi* | [**dcimModuleBaysList**](docs/Api/DcimApi.md#dcimmodulebayslist) | **GET** /api/dcim/module-bays/ | 
*DcimApi* | [**dcimModuleBaysPartialUpdate**](docs/Api/DcimApi.md#dcimmodulebayspartialupdate) | **PATCH** /api/dcim/module-bays/{id}/ | 
*DcimApi* | [**dcimModuleBaysRetrieve**](docs/Api/DcimApi.md#dcimmodulebaysretrieve) | **GET** /api/dcim/module-bays/{id}/ | 
*DcimApi* | [**dcimModuleBaysUpdate**](docs/Api/DcimApi.md#dcimmodulebaysupdate) | **PUT** /api/dcim/module-bays/{id}/ | 
*DcimApi* | [**dcimModuleTypesBulkDestroy**](docs/Api/DcimApi.md#dcimmoduletypesbulkdestroy) | **DELETE** /api/dcim/module-types/ | 
*DcimApi* | [**dcimModuleTypesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimmoduletypesbulkpartialupdate) | **PATCH** /api/dcim/module-types/ | 
*DcimApi* | [**dcimModuleTypesBulkUpdate**](docs/Api/DcimApi.md#dcimmoduletypesbulkupdate) | **PUT** /api/dcim/module-types/ | 
*DcimApi* | [**dcimModuleTypesCreate**](docs/Api/DcimApi.md#dcimmoduletypescreate) | **POST** /api/dcim/module-types/ | 
*DcimApi* | [**dcimModuleTypesDestroy**](docs/Api/DcimApi.md#dcimmoduletypesdestroy) | **DELETE** /api/dcim/module-types/{id}/ | 
*DcimApi* | [**dcimModuleTypesList**](docs/Api/DcimApi.md#dcimmoduletypeslist) | **GET** /api/dcim/module-types/ | 
*DcimApi* | [**dcimModuleTypesPartialUpdate**](docs/Api/DcimApi.md#dcimmoduletypespartialupdate) | **PATCH** /api/dcim/module-types/{id}/ | 
*DcimApi* | [**dcimModuleTypesRetrieve**](docs/Api/DcimApi.md#dcimmoduletypesretrieve) | **GET** /api/dcim/module-types/{id}/ | 
*DcimApi* | [**dcimModuleTypesUpdate**](docs/Api/DcimApi.md#dcimmoduletypesupdate) | **PUT** /api/dcim/module-types/{id}/ | 
*DcimApi* | [**dcimModulesBulkDestroy**](docs/Api/DcimApi.md#dcimmodulesbulkdestroy) | **DELETE** /api/dcim/modules/ | 
*DcimApi* | [**dcimModulesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimmodulesbulkpartialupdate) | **PATCH** /api/dcim/modules/ | 
*DcimApi* | [**dcimModulesBulkUpdate**](docs/Api/DcimApi.md#dcimmodulesbulkupdate) | **PUT** /api/dcim/modules/ | 
*DcimApi* | [**dcimModulesCreate**](docs/Api/DcimApi.md#dcimmodulescreate) | **POST** /api/dcim/modules/ | 
*DcimApi* | [**dcimModulesDestroy**](docs/Api/DcimApi.md#dcimmodulesdestroy) | **DELETE** /api/dcim/modules/{id}/ | 
*DcimApi* | [**dcimModulesList**](docs/Api/DcimApi.md#dcimmoduleslist) | **GET** /api/dcim/modules/ | 
*DcimApi* | [**dcimModulesPartialUpdate**](docs/Api/DcimApi.md#dcimmodulespartialupdate) | **PATCH** /api/dcim/modules/{id}/ | 
*DcimApi* | [**dcimModulesRetrieve**](docs/Api/DcimApi.md#dcimmodulesretrieve) | **GET** /api/dcim/modules/{id}/ | 
*DcimApi* | [**dcimModulesUpdate**](docs/Api/DcimApi.md#dcimmodulesupdate) | **PUT** /api/dcim/modules/{id}/ | 
*DcimApi* | [**dcimPlatformsBulkDestroy**](docs/Api/DcimApi.md#dcimplatformsbulkdestroy) | **DELETE** /api/dcim/platforms/ | 
*DcimApi* | [**dcimPlatformsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimplatformsbulkpartialupdate) | **PATCH** /api/dcim/platforms/ | 
*DcimApi* | [**dcimPlatformsBulkUpdate**](docs/Api/DcimApi.md#dcimplatformsbulkupdate) | **PUT** /api/dcim/platforms/ | 
*DcimApi* | [**dcimPlatformsCreate**](docs/Api/DcimApi.md#dcimplatformscreate) | **POST** /api/dcim/platforms/ | 
*DcimApi* | [**dcimPlatformsDestroy**](docs/Api/DcimApi.md#dcimplatformsdestroy) | **DELETE** /api/dcim/platforms/{id}/ | 
*DcimApi* | [**dcimPlatformsList**](docs/Api/DcimApi.md#dcimplatformslist) | **GET** /api/dcim/platforms/ | 
*DcimApi* | [**dcimPlatformsPartialUpdate**](docs/Api/DcimApi.md#dcimplatformspartialupdate) | **PATCH** /api/dcim/platforms/{id}/ | 
*DcimApi* | [**dcimPlatformsRetrieve**](docs/Api/DcimApi.md#dcimplatformsretrieve) | **GET** /api/dcim/platforms/{id}/ | 
*DcimApi* | [**dcimPlatformsUpdate**](docs/Api/DcimApi.md#dcimplatformsupdate) | **PUT** /api/dcim/platforms/{id}/ | 
*DcimApi* | [**dcimPowerFeedsBulkDestroy**](docs/Api/DcimApi.md#dcimpowerfeedsbulkdestroy) | **DELETE** /api/dcim/power-feeds/ | 
*DcimApi* | [**dcimPowerFeedsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimpowerfeedsbulkpartialupdate) | **PATCH** /api/dcim/power-feeds/ | 
*DcimApi* | [**dcimPowerFeedsBulkUpdate**](docs/Api/DcimApi.md#dcimpowerfeedsbulkupdate) | **PUT** /api/dcim/power-feeds/ | 
*DcimApi* | [**dcimPowerFeedsCreate**](docs/Api/DcimApi.md#dcimpowerfeedscreate) | **POST** /api/dcim/power-feeds/ | 
*DcimApi* | [**dcimPowerFeedsDestroy**](docs/Api/DcimApi.md#dcimpowerfeedsdestroy) | **DELETE** /api/dcim/power-feeds/{id}/ | 
*DcimApi* | [**dcimPowerFeedsList**](docs/Api/DcimApi.md#dcimpowerfeedslist) | **GET** /api/dcim/power-feeds/ | 
*DcimApi* | [**dcimPowerFeedsPartialUpdate**](docs/Api/DcimApi.md#dcimpowerfeedspartialupdate) | **PATCH** /api/dcim/power-feeds/{id}/ | 
*DcimApi* | [**dcimPowerFeedsRetrieve**](docs/Api/DcimApi.md#dcimpowerfeedsretrieve) | **GET** /api/dcim/power-feeds/{id}/ | 
*DcimApi* | [**dcimPowerFeedsTraceRetrieve**](docs/Api/DcimApi.md#dcimpowerfeedstraceretrieve) | **GET** /api/dcim/power-feeds/{id}/trace/ | 
*DcimApi* | [**dcimPowerFeedsUpdate**](docs/Api/DcimApi.md#dcimpowerfeedsupdate) | **PUT** /api/dcim/power-feeds/{id}/ | 
*DcimApi* | [**dcimPowerOutletTemplatesBulkDestroy**](docs/Api/DcimApi.md#dcimpoweroutlettemplatesbulkdestroy) | **DELETE** /api/dcim/power-outlet-templates/ | 
*DcimApi* | [**dcimPowerOutletTemplatesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimpoweroutlettemplatesbulkpartialupdate) | **PATCH** /api/dcim/power-outlet-templates/ | 
*DcimApi* | [**dcimPowerOutletTemplatesBulkUpdate**](docs/Api/DcimApi.md#dcimpoweroutlettemplatesbulkupdate) | **PUT** /api/dcim/power-outlet-templates/ | 
*DcimApi* | [**dcimPowerOutletTemplatesCreate**](docs/Api/DcimApi.md#dcimpoweroutlettemplatescreate) | **POST** /api/dcim/power-outlet-templates/ | 
*DcimApi* | [**dcimPowerOutletTemplatesDestroy**](docs/Api/DcimApi.md#dcimpoweroutlettemplatesdestroy) | **DELETE** /api/dcim/power-outlet-templates/{id}/ | 
*DcimApi* | [**dcimPowerOutletTemplatesList**](docs/Api/DcimApi.md#dcimpoweroutlettemplateslist) | **GET** /api/dcim/power-outlet-templates/ | 
*DcimApi* | [**dcimPowerOutletTemplatesPartialUpdate**](docs/Api/DcimApi.md#dcimpoweroutlettemplatespartialupdate) | **PATCH** /api/dcim/power-outlet-templates/{id}/ | 
*DcimApi* | [**dcimPowerOutletTemplatesRetrieve**](docs/Api/DcimApi.md#dcimpoweroutlettemplatesretrieve) | **GET** /api/dcim/power-outlet-templates/{id}/ | 
*DcimApi* | [**dcimPowerOutletTemplatesUpdate**](docs/Api/DcimApi.md#dcimpoweroutlettemplatesupdate) | **PUT** /api/dcim/power-outlet-templates/{id}/ | 
*DcimApi* | [**dcimPowerOutletsBulkDestroy**](docs/Api/DcimApi.md#dcimpoweroutletsbulkdestroy) | **DELETE** /api/dcim/power-outlets/ | 
*DcimApi* | [**dcimPowerOutletsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimpoweroutletsbulkpartialupdate) | **PATCH** /api/dcim/power-outlets/ | 
*DcimApi* | [**dcimPowerOutletsBulkUpdate**](docs/Api/DcimApi.md#dcimpoweroutletsbulkupdate) | **PUT** /api/dcim/power-outlets/ | 
*DcimApi* | [**dcimPowerOutletsCreate**](docs/Api/DcimApi.md#dcimpoweroutletscreate) | **POST** /api/dcim/power-outlets/ | 
*DcimApi* | [**dcimPowerOutletsDestroy**](docs/Api/DcimApi.md#dcimpoweroutletsdestroy) | **DELETE** /api/dcim/power-outlets/{id}/ | 
*DcimApi* | [**dcimPowerOutletsList**](docs/Api/DcimApi.md#dcimpoweroutletslist) | **GET** /api/dcim/power-outlets/ | 
*DcimApi* | [**dcimPowerOutletsPartialUpdate**](docs/Api/DcimApi.md#dcimpoweroutletspartialupdate) | **PATCH** /api/dcim/power-outlets/{id}/ | 
*DcimApi* | [**dcimPowerOutletsRetrieve**](docs/Api/DcimApi.md#dcimpoweroutletsretrieve) | **GET** /api/dcim/power-outlets/{id}/ | 
*DcimApi* | [**dcimPowerOutletsTraceRetrieve**](docs/Api/DcimApi.md#dcimpoweroutletstraceretrieve) | **GET** /api/dcim/power-outlets/{id}/trace/ | 
*DcimApi* | [**dcimPowerOutletsUpdate**](docs/Api/DcimApi.md#dcimpoweroutletsupdate) | **PUT** /api/dcim/power-outlets/{id}/ | 
*DcimApi* | [**dcimPowerPanelsBulkDestroy**](docs/Api/DcimApi.md#dcimpowerpanelsbulkdestroy) | **DELETE** /api/dcim/power-panels/ | 
*DcimApi* | [**dcimPowerPanelsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimpowerpanelsbulkpartialupdate) | **PATCH** /api/dcim/power-panels/ | 
*DcimApi* | [**dcimPowerPanelsBulkUpdate**](docs/Api/DcimApi.md#dcimpowerpanelsbulkupdate) | **PUT** /api/dcim/power-panels/ | 
*DcimApi* | [**dcimPowerPanelsCreate**](docs/Api/DcimApi.md#dcimpowerpanelscreate) | **POST** /api/dcim/power-panels/ | 
*DcimApi* | [**dcimPowerPanelsDestroy**](docs/Api/DcimApi.md#dcimpowerpanelsdestroy) | **DELETE** /api/dcim/power-panels/{id}/ | 
*DcimApi* | [**dcimPowerPanelsList**](docs/Api/DcimApi.md#dcimpowerpanelslist) | **GET** /api/dcim/power-panels/ | 
*DcimApi* | [**dcimPowerPanelsPartialUpdate**](docs/Api/DcimApi.md#dcimpowerpanelspartialupdate) | **PATCH** /api/dcim/power-panels/{id}/ | 
*DcimApi* | [**dcimPowerPanelsRetrieve**](docs/Api/DcimApi.md#dcimpowerpanelsretrieve) | **GET** /api/dcim/power-panels/{id}/ | 
*DcimApi* | [**dcimPowerPanelsUpdate**](docs/Api/DcimApi.md#dcimpowerpanelsupdate) | **PUT** /api/dcim/power-panels/{id}/ | 
*DcimApi* | [**dcimPowerPortTemplatesBulkDestroy**](docs/Api/DcimApi.md#dcimpowerporttemplatesbulkdestroy) | **DELETE** /api/dcim/power-port-templates/ | 
*DcimApi* | [**dcimPowerPortTemplatesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimpowerporttemplatesbulkpartialupdate) | **PATCH** /api/dcim/power-port-templates/ | 
*DcimApi* | [**dcimPowerPortTemplatesBulkUpdate**](docs/Api/DcimApi.md#dcimpowerporttemplatesbulkupdate) | **PUT** /api/dcim/power-port-templates/ | 
*DcimApi* | [**dcimPowerPortTemplatesCreate**](docs/Api/DcimApi.md#dcimpowerporttemplatescreate) | **POST** /api/dcim/power-port-templates/ | 
*DcimApi* | [**dcimPowerPortTemplatesDestroy**](docs/Api/DcimApi.md#dcimpowerporttemplatesdestroy) | **DELETE** /api/dcim/power-port-templates/{id}/ | 
*DcimApi* | [**dcimPowerPortTemplatesList**](docs/Api/DcimApi.md#dcimpowerporttemplateslist) | **GET** /api/dcim/power-port-templates/ | 
*DcimApi* | [**dcimPowerPortTemplatesPartialUpdate**](docs/Api/DcimApi.md#dcimpowerporttemplatespartialupdate) | **PATCH** /api/dcim/power-port-templates/{id}/ | 
*DcimApi* | [**dcimPowerPortTemplatesRetrieve**](docs/Api/DcimApi.md#dcimpowerporttemplatesretrieve) | **GET** /api/dcim/power-port-templates/{id}/ | 
*DcimApi* | [**dcimPowerPortTemplatesUpdate**](docs/Api/DcimApi.md#dcimpowerporttemplatesupdate) | **PUT** /api/dcim/power-port-templates/{id}/ | 
*DcimApi* | [**dcimPowerPortsBulkDestroy**](docs/Api/DcimApi.md#dcimpowerportsbulkdestroy) | **DELETE** /api/dcim/power-ports/ | 
*DcimApi* | [**dcimPowerPortsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimpowerportsbulkpartialupdate) | **PATCH** /api/dcim/power-ports/ | 
*DcimApi* | [**dcimPowerPortsBulkUpdate**](docs/Api/DcimApi.md#dcimpowerportsbulkupdate) | **PUT** /api/dcim/power-ports/ | 
*DcimApi* | [**dcimPowerPortsCreate**](docs/Api/DcimApi.md#dcimpowerportscreate) | **POST** /api/dcim/power-ports/ | 
*DcimApi* | [**dcimPowerPortsDestroy**](docs/Api/DcimApi.md#dcimpowerportsdestroy) | **DELETE** /api/dcim/power-ports/{id}/ | 
*DcimApi* | [**dcimPowerPortsList**](docs/Api/DcimApi.md#dcimpowerportslist) | **GET** /api/dcim/power-ports/ | 
*DcimApi* | [**dcimPowerPortsPartialUpdate**](docs/Api/DcimApi.md#dcimpowerportspartialupdate) | **PATCH** /api/dcim/power-ports/{id}/ | 
*DcimApi* | [**dcimPowerPortsRetrieve**](docs/Api/DcimApi.md#dcimpowerportsretrieve) | **GET** /api/dcim/power-ports/{id}/ | 
*DcimApi* | [**dcimPowerPortsTraceRetrieve**](docs/Api/DcimApi.md#dcimpowerportstraceretrieve) | **GET** /api/dcim/power-ports/{id}/trace/ | 
*DcimApi* | [**dcimPowerPortsUpdate**](docs/Api/DcimApi.md#dcimpowerportsupdate) | **PUT** /api/dcim/power-ports/{id}/ | 
*DcimApi* | [**dcimRackReservationsBulkDestroy**](docs/Api/DcimApi.md#dcimrackreservationsbulkdestroy) | **DELETE** /api/dcim/rack-reservations/ | 
*DcimApi* | [**dcimRackReservationsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimrackreservationsbulkpartialupdate) | **PATCH** /api/dcim/rack-reservations/ | 
*DcimApi* | [**dcimRackReservationsBulkUpdate**](docs/Api/DcimApi.md#dcimrackreservationsbulkupdate) | **PUT** /api/dcim/rack-reservations/ | 
*DcimApi* | [**dcimRackReservationsCreate**](docs/Api/DcimApi.md#dcimrackreservationscreate) | **POST** /api/dcim/rack-reservations/ | 
*DcimApi* | [**dcimRackReservationsDestroy**](docs/Api/DcimApi.md#dcimrackreservationsdestroy) | **DELETE** /api/dcim/rack-reservations/{id}/ | 
*DcimApi* | [**dcimRackReservationsList**](docs/Api/DcimApi.md#dcimrackreservationslist) | **GET** /api/dcim/rack-reservations/ | 
*DcimApi* | [**dcimRackReservationsPartialUpdate**](docs/Api/DcimApi.md#dcimrackreservationspartialupdate) | **PATCH** /api/dcim/rack-reservations/{id}/ | 
*DcimApi* | [**dcimRackReservationsRetrieve**](docs/Api/DcimApi.md#dcimrackreservationsretrieve) | **GET** /api/dcim/rack-reservations/{id}/ | 
*DcimApi* | [**dcimRackReservationsUpdate**](docs/Api/DcimApi.md#dcimrackreservationsupdate) | **PUT** /api/dcim/rack-reservations/{id}/ | 
*DcimApi* | [**dcimRackRolesBulkDestroy**](docs/Api/DcimApi.md#dcimrackrolesbulkdestroy) | **DELETE** /api/dcim/rack-roles/ | 
*DcimApi* | [**dcimRackRolesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimrackrolesbulkpartialupdate) | **PATCH** /api/dcim/rack-roles/ | 
*DcimApi* | [**dcimRackRolesBulkUpdate**](docs/Api/DcimApi.md#dcimrackrolesbulkupdate) | **PUT** /api/dcim/rack-roles/ | 
*DcimApi* | [**dcimRackRolesCreate**](docs/Api/DcimApi.md#dcimrackrolescreate) | **POST** /api/dcim/rack-roles/ | 
*DcimApi* | [**dcimRackRolesDestroy**](docs/Api/DcimApi.md#dcimrackrolesdestroy) | **DELETE** /api/dcim/rack-roles/{id}/ | 
*DcimApi* | [**dcimRackRolesList**](docs/Api/DcimApi.md#dcimrackroleslist) | **GET** /api/dcim/rack-roles/ | 
*DcimApi* | [**dcimRackRolesPartialUpdate**](docs/Api/DcimApi.md#dcimrackrolespartialupdate) | **PATCH** /api/dcim/rack-roles/{id}/ | 
*DcimApi* | [**dcimRackRolesRetrieve**](docs/Api/DcimApi.md#dcimrackrolesretrieve) | **GET** /api/dcim/rack-roles/{id}/ | 
*DcimApi* | [**dcimRackRolesUpdate**](docs/Api/DcimApi.md#dcimrackrolesupdate) | **PUT** /api/dcim/rack-roles/{id}/ | 
*DcimApi* | [**dcimRackTypesBulkDestroy**](docs/Api/DcimApi.md#dcimracktypesbulkdestroy) | **DELETE** /api/dcim/rack-types/ | 
*DcimApi* | [**dcimRackTypesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimracktypesbulkpartialupdate) | **PATCH** /api/dcim/rack-types/ | 
*DcimApi* | [**dcimRackTypesBulkUpdate**](docs/Api/DcimApi.md#dcimracktypesbulkupdate) | **PUT** /api/dcim/rack-types/ | 
*DcimApi* | [**dcimRackTypesCreate**](docs/Api/DcimApi.md#dcimracktypescreate) | **POST** /api/dcim/rack-types/ | 
*DcimApi* | [**dcimRackTypesDestroy**](docs/Api/DcimApi.md#dcimracktypesdestroy) | **DELETE** /api/dcim/rack-types/{id}/ | 
*DcimApi* | [**dcimRackTypesList**](docs/Api/DcimApi.md#dcimracktypeslist) | **GET** /api/dcim/rack-types/ | 
*DcimApi* | [**dcimRackTypesPartialUpdate**](docs/Api/DcimApi.md#dcimracktypespartialupdate) | **PATCH** /api/dcim/rack-types/{id}/ | 
*DcimApi* | [**dcimRackTypesRetrieve**](docs/Api/DcimApi.md#dcimracktypesretrieve) | **GET** /api/dcim/rack-types/{id}/ | 
*DcimApi* | [**dcimRackTypesUpdate**](docs/Api/DcimApi.md#dcimracktypesupdate) | **PUT** /api/dcim/rack-types/{id}/ | 
*DcimApi* | [**dcimRacksBulkDestroy**](docs/Api/DcimApi.md#dcimracksbulkdestroy) | **DELETE** /api/dcim/racks/ | 
*DcimApi* | [**dcimRacksBulkPartialUpdate**](docs/Api/DcimApi.md#dcimracksbulkpartialupdate) | **PATCH** /api/dcim/racks/ | 
*DcimApi* | [**dcimRacksBulkUpdate**](docs/Api/DcimApi.md#dcimracksbulkupdate) | **PUT** /api/dcim/racks/ | 
*DcimApi* | [**dcimRacksCreate**](docs/Api/DcimApi.md#dcimrackscreate) | **POST** /api/dcim/racks/ | 
*DcimApi* | [**dcimRacksDestroy**](docs/Api/DcimApi.md#dcimracksdestroy) | **DELETE** /api/dcim/racks/{id}/ | 
*DcimApi* | [**dcimRacksElevationRetrieve**](docs/Api/DcimApi.md#dcimrackselevationretrieve) | **GET** /api/dcim/racks/{id}/elevation/ | 
*DcimApi* | [**dcimRacksList**](docs/Api/DcimApi.md#dcimrackslist) | **GET** /api/dcim/racks/ | 
*DcimApi* | [**dcimRacksPartialUpdate**](docs/Api/DcimApi.md#dcimrackspartialupdate) | **PATCH** /api/dcim/racks/{id}/ | 
*DcimApi* | [**dcimRacksRetrieve**](docs/Api/DcimApi.md#dcimracksretrieve) | **GET** /api/dcim/racks/{id}/ | 
*DcimApi* | [**dcimRacksUpdate**](docs/Api/DcimApi.md#dcimracksupdate) | **PUT** /api/dcim/racks/{id}/ | 
*DcimApi* | [**dcimRearPortTemplatesBulkDestroy**](docs/Api/DcimApi.md#dcimrearporttemplatesbulkdestroy) | **DELETE** /api/dcim/rear-port-templates/ | 
*DcimApi* | [**dcimRearPortTemplatesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimrearporttemplatesbulkpartialupdate) | **PATCH** /api/dcim/rear-port-templates/ | 
*DcimApi* | [**dcimRearPortTemplatesBulkUpdate**](docs/Api/DcimApi.md#dcimrearporttemplatesbulkupdate) | **PUT** /api/dcim/rear-port-templates/ | 
*DcimApi* | [**dcimRearPortTemplatesCreate**](docs/Api/DcimApi.md#dcimrearporttemplatescreate) | **POST** /api/dcim/rear-port-templates/ | 
*DcimApi* | [**dcimRearPortTemplatesDestroy**](docs/Api/DcimApi.md#dcimrearporttemplatesdestroy) | **DELETE** /api/dcim/rear-port-templates/{id}/ | 
*DcimApi* | [**dcimRearPortTemplatesList**](docs/Api/DcimApi.md#dcimrearporttemplateslist) | **GET** /api/dcim/rear-port-templates/ | 
*DcimApi* | [**dcimRearPortTemplatesPartialUpdate**](docs/Api/DcimApi.md#dcimrearporttemplatespartialupdate) | **PATCH** /api/dcim/rear-port-templates/{id}/ | 
*DcimApi* | [**dcimRearPortTemplatesRetrieve**](docs/Api/DcimApi.md#dcimrearporttemplatesretrieve) | **GET** /api/dcim/rear-port-templates/{id}/ | 
*DcimApi* | [**dcimRearPortTemplatesUpdate**](docs/Api/DcimApi.md#dcimrearporttemplatesupdate) | **PUT** /api/dcim/rear-port-templates/{id}/ | 
*DcimApi* | [**dcimRearPortsBulkDestroy**](docs/Api/DcimApi.md#dcimrearportsbulkdestroy) | **DELETE** /api/dcim/rear-ports/ | 
*DcimApi* | [**dcimRearPortsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimrearportsbulkpartialupdate) | **PATCH** /api/dcim/rear-ports/ | 
*DcimApi* | [**dcimRearPortsBulkUpdate**](docs/Api/DcimApi.md#dcimrearportsbulkupdate) | **PUT** /api/dcim/rear-ports/ | 
*DcimApi* | [**dcimRearPortsCreate**](docs/Api/DcimApi.md#dcimrearportscreate) | **POST** /api/dcim/rear-ports/ | 
*DcimApi* | [**dcimRearPortsDestroy**](docs/Api/DcimApi.md#dcimrearportsdestroy) | **DELETE** /api/dcim/rear-ports/{id}/ | 
*DcimApi* | [**dcimRearPortsList**](docs/Api/DcimApi.md#dcimrearportslist) | **GET** /api/dcim/rear-ports/ | 
*DcimApi* | [**dcimRearPortsPartialUpdate**](docs/Api/DcimApi.md#dcimrearportspartialupdate) | **PATCH** /api/dcim/rear-ports/{id}/ | 
*DcimApi* | [**dcimRearPortsPathsRetrieve**](docs/Api/DcimApi.md#dcimrearportspathsretrieve) | **GET** /api/dcim/rear-ports/{id}/paths/ | 
*DcimApi* | [**dcimRearPortsRetrieve**](docs/Api/DcimApi.md#dcimrearportsretrieve) | **GET** /api/dcim/rear-ports/{id}/ | 
*DcimApi* | [**dcimRearPortsUpdate**](docs/Api/DcimApi.md#dcimrearportsupdate) | **PUT** /api/dcim/rear-ports/{id}/ | 
*DcimApi* | [**dcimRegionsBulkDestroy**](docs/Api/DcimApi.md#dcimregionsbulkdestroy) | **DELETE** /api/dcim/regions/ | 
*DcimApi* | [**dcimRegionsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimregionsbulkpartialupdate) | **PATCH** /api/dcim/regions/ | 
*DcimApi* | [**dcimRegionsBulkUpdate**](docs/Api/DcimApi.md#dcimregionsbulkupdate) | **PUT** /api/dcim/regions/ | 
*DcimApi* | [**dcimRegionsCreate**](docs/Api/DcimApi.md#dcimregionscreate) | **POST** /api/dcim/regions/ | 
*DcimApi* | [**dcimRegionsDestroy**](docs/Api/DcimApi.md#dcimregionsdestroy) | **DELETE** /api/dcim/regions/{id}/ | 
*DcimApi* | [**dcimRegionsList**](docs/Api/DcimApi.md#dcimregionslist) | **GET** /api/dcim/regions/ | 
*DcimApi* | [**dcimRegionsPartialUpdate**](docs/Api/DcimApi.md#dcimregionspartialupdate) | **PATCH** /api/dcim/regions/{id}/ | 
*DcimApi* | [**dcimRegionsRetrieve**](docs/Api/DcimApi.md#dcimregionsretrieve) | **GET** /api/dcim/regions/{id}/ | 
*DcimApi* | [**dcimRegionsUpdate**](docs/Api/DcimApi.md#dcimregionsupdate) | **PUT** /api/dcim/regions/{id}/ | 
*DcimApi* | [**dcimSiteGroupsBulkDestroy**](docs/Api/DcimApi.md#dcimsitegroupsbulkdestroy) | **DELETE** /api/dcim/site-groups/ | 
*DcimApi* | [**dcimSiteGroupsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimsitegroupsbulkpartialupdate) | **PATCH** /api/dcim/site-groups/ | 
*DcimApi* | [**dcimSiteGroupsBulkUpdate**](docs/Api/DcimApi.md#dcimsitegroupsbulkupdate) | **PUT** /api/dcim/site-groups/ | 
*DcimApi* | [**dcimSiteGroupsCreate**](docs/Api/DcimApi.md#dcimsitegroupscreate) | **POST** /api/dcim/site-groups/ | 
*DcimApi* | [**dcimSiteGroupsDestroy**](docs/Api/DcimApi.md#dcimsitegroupsdestroy) | **DELETE** /api/dcim/site-groups/{id}/ | 
*DcimApi* | [**dcimSiteGroupsList**](docs/Api/DcimApi.md#dcimsitegroupslist) | **GET** /api/dcim/site-groups/ | 
*DcimApi* | [**dcimSiteGroupsPartialUpdate**](docs/Api/DcimApi.md#dcimsitegroupspartialupdate) | **PATCH** /api/dcim/site-groups/{id}/ | 
*DcimApi* | [**dcimSiteGroupsRetrieve**](docs/Api/DcimApi.md#dcimsitegroupsretrieve) | **GET** /api/dcim/site-groups/{id}/ | 
*DcimApi* | [**dcimSiteGroupsUpdate**](docs/Api/DcimApi.md#dcimsitegroupsupdate) | **PUT** /api/dcim/site-groups/{id}/ | 
*DcimApi* | [**dcimSitesBulkDestroy**](docs/Api/DcimApi.md#dcimsitesbulkdestroy) | **DELETE** /api/dcim/sites/ | 
*DcimApi* | [**dcimSitesBulkPartialUpdate**](docs/Api/DcimApi.md#dcimsitesbulkpartialupdate) | **PATCH** /api/dcim/sites/ | 
*DcimApi* | [**dcimSitesBulkUpdate**](docs/Api/DcimApi.md#dcimsitesbulkupdate) | **PUT** /api/dcim/sites/ | 
*DcimApi* | [**dcimSitesCreate**](docs/Api/DcimApi.md#dcimsitescreate) | **POST** /api/dcim/sites/ | 
*DcimApi* | [**dcimSitesDestroy**](docs/Api/DcimApi.md#dcimsitesdestroy) | **DELETE** /api/dcim/sites/{id}/ | 
*DcimApi* | [**dcimSitesList**](docs/Api/DcimApi.md#dcimsiteslist) | **GET** /api/dcim/sites/ | 
*DcimApi* | [**dcimSitesPartialUpdate**](docs/Api/DcimApi.md#dcimsitespartialupdate) | **PATCH** /api/dcim/sites/{id}/ | 
*DcimApi* | [**dcimSitesRetrieve**](docs/Api/DcimApi.md#dcimsitesretrieve) | **GET** /api/dcim/sites/{id}/ | 
*DcimApi* | [**dcimSitesUpdate**](docs/Api/DcimApi.md#dcimsitesupdate) | **PUT** /api/dcim/sites/{id}/ | 
*DcimApi* | [**dcimVirtualChassisBulkDestroy**](docs/Api/DcimApi.md#dcimvirtualchassisbulkdestroy) | **DELETE** /api/dcim/virtual-chassis/ | 
*DcimApi* | [**dcimVirtualChassisBulkPartialUpdate**](docs/Api/DcimApi.md#dcimvirtualchassisbulkpartialupdate) | **PATCH** /api/dcim/virtual-chassis/ | 
*DcimApi* | [**dcimVirtualChassisBulkUpdate**](docs/Api/DcimApi.md#dcimvirtualchassisbulkupdate) | **PUT** /api/dcim/virtual-chassis/ | 
*DcimApi* | [**dcimVirtualChassisCreate**](docs/Api/DcimApi.md#dcimvirtualchassiscreate) | **POST** /api/dcim/virtual-chassis/ | 
*DcimApi* | [**dcimVirtualChassisDestroy**](docs/Api/DcimApi.md#dcimvirtualchassisdestroy) | **DELETE** /api/dcim/virtual-chassis/{id}/ | 
*DcimApi* | [**dcimVirtualChassisList**](docs/Api/DcimApi.md#dcimvirtualchassislist) | **GET** /api/dcim/virtual-chassis/ | 
*DcimApi* | [**dcimVirtualChassisPartialUpdate**](docs/Api/DcimApi.md#dcimvirtualchassispartialupdate) | **PATCH** /api/dcim/virtual-chassis/{id}/ | 
*DcimApi* | [**dcimVirtualChassisRetrieve**](docs/Api/DcimApi.md#dcimvirtualchassisretrieve) | **GET** /api/dcim/virtual-chassis/{id}/ | 
*DcimApi* | [**dcimVirtualChassisUpdate**](docs/Api/DcimApi.md#dcimvirtualchassisupdate) | **PUT** /api/dcim/virtual-chassis/{id}/ | 
*DcimApi* | [**dcimVirtualDeviceContextsBulkDestroy**](docs/Api/DcimApi.md#dcimvirtualdevicecontextsbulkdestroy) | **DELETE** /api/dcim/virtual-device-contexts/ | 
*DcimApi* | [**dcimVirtualDeviceContextsBulkPartialUpdate**](docs/Api/DcimApi.md#dcimvirtualdevicecontextsbulkpartialupdate) | **PATCH** /api/dcim/virtual-device-contexts/ | 
*DcimApi* | [**dcimVirtualDeviceContextsBulkUpdate**](docs/Api/DcimApi.md#dcimvirtualdevicecontextsbulkupdate) | **PUT** /api/dcim/virtual-device-contexts/ | 
*DcimApi* | [**dcimVirtualDeviceContextsCreate**](docs/Api/DcimApi.md#dcimvirtualdevicecontextscreate) | **POST** /api/dcim/virtual-device-contexts/ | 
*DcimApi* | [**dcimVirtualDeviceContextsDestroy**](docs/Api/DcimApi.md#dcimvirtualdevicecontextsdestroy) | **DELETE** /api/dcim/virtual-device-contexts/{id}/ | 
*DcimApi* | [**dcimVirtualDeviceContextsList**](docs/Api/DcimApi.md#dcimvirtualdevicecontextslist) | **GET** /api/dcim/virtual-device-contexts/ | 
*DcimApi* | [**dcimVirtualDeviceContextsPartialUpdate**](docs/Api/DcimApi.md#dcimvirtualdevicecontextspartialupdate) | **PATCH** /api/dcim/virtual-device-contexts/{id}/ | 
*DcimApi* | [**dcimVirtualDeviceContextsRetrieve**](docs/Api/DcimApi.md#dcimvirtualdevicecontextsretrieve) | **GET** /api/dcim/virtual-device-contexts/{id}/ | 
*DcimApi* | [**dcimVirtualDeviceContextsUpdate**](docs/Api/DcimApi.md#dcimvirtualdevicecontextsupdate) | **PUT** /api/dcim/virtual-device-contexts/{id}/ | 
*ExtrasApi* | [**extrasBookmarksBulkDestroy**](docs/Api/ExtrasApi.md#extrasbookmarksbulkdestroy) | **DELETE** /api/extras/bookmarks/ | 
*ExtrasApi* | [**extrasBookmarksBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrasbookmarksbulkpartialupdate) | **PATCH** /api/extras/bookmarks/ | 
*ExtrasApi* | [**extrasBookmarksBulkUpdate**](docs/Api/ExtrasApi.md#extrasbookmarksbulkupdate) | **PUT** /api/extras/bookmarks/ | 
*ExtrasApi* | [**extrasBookmarksCreate**](docs/Api/ExtrasApi.md#extrasbookmarkscreate) | **POST** /api/extras/bookmarks/ | 
*ExtrasApi* | [**extrasBookmarksDestroy**](docs/Api/ExtrasApi.md#extrasbookmarksdestroy) | **DELETE** /api/extras/bookmarks/{id}/ | 
*ExtrasApi* | [**extrasBookmarksList**](docs/Api/ExtrasApi.md#extrasbookmarkslist) | **GET** /api/extras/bookmarks/ | 
*ExtrasApi* | [**extrasBookmarksPartialUpdate**](docs/Api/ExtrasApi.md#extrasbookmarkspartialupdate) | **PATCH** /api/extras/bookmarks/{id}/ | 
*ExtrasApi* | [**extrasBookmarksRetrieve**](docs/Api/ExtrasApi.md#extrasbookmarksretrieve) | **GET** /api/extras/bookmarks/{id}/ | 
*ExtrasApi* | [**extrasBookmarksUpdate**](docs/Api/ExtrasApi.md#extrasbookmarksupdate) | **PUT** /api/extras/bookmarks/{id}/ | 
*ExtrasApi* | [**extrasConfigContextsBulkDestroy**](docs/Api/ExtrasApi.md#extrasconfigcontextsbulkdestroy) | **DELETE** /api/extras/config-contexts/ | 
*ExtrasApi* | [**extrasConfigContextsBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrasconfigcontextsbulkpartialupdate) | **PATCH** /api/extras/config-contexts/ | 
*ExtrasApi* | [**extrasConfigContextsBulkUpdate**](docs/Api/ExtrasApi.md#extrasconfigcontextsbulkupdate) | **PUT** /api/extras/config-contexts/ | 
*ExtrasApi* | [**extrasConfigContextsCreate**](docs/Api/ExtrasApi.md#extrasconfigcontextscreate) | **POST** /api/extras/config-contexts/ | 
*ExtrasApi* | [**extrasConfigContextsDestroy**](docs/Api/ExtrasApi.md#extrasconfigcontextsdestroy) | **DELETE** /api/extras/config-contexts/{id}/ | 
*ExtrasApi* | [**extrasConfigContextsList**](docs/Api/ExtrasApi.md#extrasconfigcontextslist) | **GET** /api/extras/config-contexts/ | 
*ExtrasApi* | [**extrasConfigContextsPartialUpdate**](docs/Api/ExtrasApi.md#extrasconfigcontextspartialupdate) | **PATCH** /api/extras/config-contexts/{id}/ | 
*ExtrasApi* | [**extrasConfigContextsRetrieve**](docs/Api/ExtrasApi.md#extrasconfigcontextsretrieve) | **GET** /api/extras/config-contexts/{id}/ | 
*ExtrasApi* | [**extrasConfigContextsSyncCreate**](docs/Api/ExtrasApi.md#extrasconfigcontextssynccreate) | **POST** /api/extras/config-contexts/{id}/sync/ | 
*ExtrasApi* | [**extrasConfigContextsUpdate**](docs/Api/ExtrasApi.md#extrasconfigcontextsupdate) | **PUT** /api/extras/config-contexts/{id}/ | 
*ExtrasApi* | [**extrasConfigTemplatesBulkDestroy**](docs/Api/ExtrasApi.md#extrasconfigtemplatesbulkdestroy) | **DELETE** /api/extras/config-templates/ | 
*ExtrasApi* | [**extrasConfigTemplatesBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrasconfigtemplatesbulkpartialupdate) | **PATCH** /api/extras/config-templates/ | 
*ExtrasApi* | [**extrasConfigTemplatesBulkUpdate**](docs/Api/ExtrasApi.md#extrasconfigtemplatesbulkupdate) | **PUT** /api/extras/config-templates/ | 
*ExtrasApi* | [**extrasConfigTemplatesCreate**](docs/Api/ExtrasApi.md#extrasconfigtemplatescreate) | **POST** /api/extras/config-templates/ | 
*ExtrasApi* | [**extrasConfigTemplatesDestroy**](docs/Api/ExtrasApi.md#extrasconfigtemplatesdestroy) | **DELETE** /api/extras/config-templates/{id}/ | 
*ExtrasApi* | [**extrasConfigTemplatesList**](docs/Api/ExtrasApi.md#extrasconfigtemplateslist) | **GET** /api/extras/config-templates/ | 
*ExtrasApi* | [**extrasConfigTemplatesPartialUpdate**](docs/Api/ExtrasApi.md#extrasconfigtemplatespartialupdate) | **PATCH** /api/extras/config-templates/{id}/ | 
*ExtrasApi* | [**extrasConfigTemplatesRenderCreate**](docs/Api/ExtrasApi.md#extrasconfigtemplatesrendercreate) | **POST** /api/extras/config-templates/{id}/render/ | 
*ExtrasApi* | [**extrasConfigTemplatesRetrieve**](docs/Api/ExtrasApi.md#extrasconfigtemplatesretrieve) | **GET** /api/extras/config-templates/{id}/ | 
*ExtrasApi* | [**extrasConfigTemplatesSyncCreate**](docs/Api/ExtrasApi.md#extrasconfigtemplatessynccreate) | **POST** /api/extras/config-templates/{id}/sync/ | 
*ExtrasApi* | [**extrasConfigTemplatesUpdate**](docs/Api/ExtrasApi.md#extrasconfigtemplatesupdate) | **PUT** /api/extras/config-templates/{id}/ | 
*ExtrasApi* | [**extrasCustomFieldChoiceSetsBulkDestroy**](docs/Api/ExtrasApi.md#extrascustomfieldchoicesetsbulkdestroy) | **DELETE** /api/extras/custom-field-choice-sets/ | 
*ExtrasApi* | [**extrasCustomFieldChoiceSetsBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrascustomfieldchoicesetsbulkpartialupdate) | **PATCH** /api/extras/custom-field-choice-sets/ | 
*ExtrasApi* | [**extrasCustomFieldChoiceSetsBulkUpdate**](docs/Api/ExtrasApi.md#extrascustomfieldchoicesetsbulkupdate) | **PUT** /api/extras/custom-field-choice-sets/ | 
*ExtrasApi* | [**extrasCustomFieldChoiceSetsChoicesRetrieve**](docs/Api/ExtrasApi.md#extrascustomfieldchoicesetschoicesretrieve) | **GET** /api/extras/custom-field-choice-sets/{id}/choices/ | 
*ExtrasApi* | [**extrasCustomFieldChoiceSetsCreate**](docs/Api/ExtrasApi.md#extrascustomfieldchoicesetscreate) | **POST** /api/extras/custom-field-choice-sets/ | 
*ExtrasApi* | [**extrasCustomFieldChoiceSetsDestroy**](docs/Api/ExtrasApi.md#extrascustomfieldchoicesetsdestroy) | **DELETE** /api/extras/custom-field-choice-sets/{id}/ | 
*ExtrasApi* | [**extrasCustomFieldChoiceSetsList**](docs/Api/ExtrasApi.md#extrascustomfieldchoicesetslist) | **GET** /api/extras/custom-field-choice-sets/ | 
*ExtrasApi* | [**extrasCustomFieldChoiceSetsPartialUpdate**](docs/Api/ExtrasApi.md#extrascustomfieldchoicesetspartialupdate) | **PATCH** /api/extras/custom-field-choice-sets/{id}/ | 
*ExtrasApi* | [**extrasCustomFieldChoiceSetsRetrieve**](docs/Api/ExtrasApi.md#extrascustomfieldchoicesetsretrieve) | **GET** /api/extras/custom-field-choice-sets/{id}/ | 
*ExtrasApi* | [**extrasCustomFieldChoiceSetsUpdate**](docs/Api/ExtrasApi.md#extrascustomfieldchoicesetsupdate) | **PUT** /api/extras/custom-field-choice-sets/{id}/ | 
*ExtrasApi* | [**extrasCustomFieldsBulkDestroy**](docs/Api/ExtrasApi.md#extrascustomfieldsbulkdestroy) | **DELETE** /api/extras/custom-fields/ | 
*ExtrasApi* | [**extrasCustomFieldsBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrascustomfieldsbulkpartialupdate) | **PATCH** /api/extras/custom-fields/ | 
*ExtrasApi* | [**extrasCustomFieldsBulkUpdate**](docs/Api/ExtrasApi.md#extrascustomfieldsbulkupdate) | **PUT** /api/extras/custom-fields/ | 
*ExtrasApi* | [**extrasCustomFieldsCreate**](docs/Api/ExtrasApi.md#extrascustomfieldscreate) | **POST** /api/extras/custom-fields/ | 
*ExtrasApi* | [**extrasCustomFieldsDestroy**](docs/Api/ExtrasApi.md#extrascustomfieldsdestroy) | **DELETE** /api/extras/custom-fields/{id}/ | 
*ExtrasApi* | [**extrasCustomFieldsList**](docs/Api/ExtrasApi.md#extrascustomfieldslist) | **GET** /api/extras/custom-fields/ | 
*ExtrasApi* | [**extrasCustomFieldsPartialUpdate**](docs/Api/ExtrasApi.md#extrascustomfieldspartialupdate) | **PATCH** /api/extras/custom-fields/{id}/ | 
*ExtrasApi* | [**extrasCustomFieldsRetrieve**](docs/Api/ExtrasApi.md#extrascustomfieldsretrieve) | **GET** /api/extras/custom-fields/{id}/ | 
*ExtrasApi* | [**extrasCustomFieldsUpdate**](docs/Api/ExtrasApi.md#extrascustomfieldsupdate) | **PUT** /api/extras/custom-fields/{id}/ | 
*ExtrasApi* | [**extrasCustomLinksBulkDestroy**](docs/Api/ExtrasApi.md#extrascustomlinksbulkdestroy) | **DELETE** /api/extras/custom-links/ | 
*ExtrasApi* | [**extrasCustomLinksBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrascustomlinksbulkpartialupdate) | **PATCH** /api/extras/custom-links/ | 
*ExtrasApi* | [**extrasCustomLinksBulkUpdate**](docs/Api/ExtrasApi.md#extrascustomlinksbulkupdate) | **PUT** /api/extras/custom-links/ | 
*ExtrasApi* | [**extrasCustomLinksCreate**](docs/Api/ExtrasApi.md#extrascustomlinkscreate) | **POST** /api/extras/custom-links/ | 
*ExtrasApi* | [**extrasCustomLinksDestroy**](docs/Api/ExtrasApi.md#extrascustomlinksdestroy) | **DELETE** /api/extras/custom-links/{id}/ | 
*ExtrasApi* | [**extrasCustomLinksList**](docs/Api/ExtrasApi.md#extrascustomlinkslist) | **GET** /api/extras/custom-links/ | 
*ExtrasApi* | [**extrasCustomLinksPartialUpdate**](docs/Api/ExtrasApi.md#extrascustomlinkspartialupdate) | **PATCH** /api/extras/custom-links/{id}/ | 
*ExtrasApi* | [**extrasCustomLinksRetrieve**](docs/Api/ExtrasApi.md#extrascustomlinksretrieve) | **GET** /api/extras/custom-links/{id}/ | 
*ExtrasApi* | [**extrasCustomLinksUpdate**](docs/Api/ExtrasApi.md#extrascustomlinksupdate) | **PUT** /api/extras/custom-links/{id}/ | 
*ExtrasApi* | [**extrasDashboardDestroy**](docs/Api/ExtrasApi.md#extrasdashboarddestroy) | **DELETE** /api/extras/dashboard/ | 
*ExtrasApi* | [**extrasDashboardPartialUpdate**](docs/Api/ExtrasApi.md#extrasdashboardpartialupdate) | **PATCH** /api/extras/dashboard/ | 
*ExtrasApi* | [**extrasDashboardRetrieve**](docs/Api/ExtrasApi.md#extrasdashboardretrieve) | **GET** /api/extras/dashboard/ | 
*ExtrasApi* | [**extrasDashboardUpdate**](docs/Api/ExtrasApi.md#extrasdashboardupdate) | **PUT** /api/extras/dashboard/ | 
*ExtrasApi* | [**extrasEventRulesBulkDestroy**](docs/Api/ExtrasApi.md#extraseventrulesbulkdestroy) | **DELETE** /api/extras/event-rules/ | 
*ExtrasApi* | [**extrasEventRulesBulkPartialUpdate**](docs/Api/ExtrasApi.md#extraseventrulesbulkpartialupdate) | **PATCH** /api/extras/event-rules/ | 
*ExtrasApi* | [**extrasEventRulesBulkUpdate**](docs/Api/ExtrasApi.md#extraseventrulesbulkupdate) | **PUT** /api/extras/event-rules/ | 
*ExtrasApi* | [**extrasEventRulesCreate**](docs/Api/ExtrasApi.md#extraseventrulescreate) | **POST** /api/extras/event-rules/ | 
*ExtrasApi* | [**extrasEventRulesDestroy**](docs/Api/ExtrasApi.md#extraseventrulesdestroy) | **DELETE** /api/extras/event-rules/{id}/ | 
*ExtrasApi* | [**extrasEventRulesList**](docs/Api/ExtrasApi.md#extraseventruleslist) | **GET** /api/extras/event-rules/ | 
*ExtrasApi* | [**extrasEventRulesPartialUpdate**](docs/Api/ExtrasApi.md#extraseventrulespartialupdate) | **PATCH** /api/extras/event-rules/{id}/ | 
*ExtrasApi* | [**extrasEventRulesRetrieve**](docs/Api/ExtrasApi.md#extraseventrulesretrieve) | **GET** /api/extras/event-rules/{id}/ | 
*ExtrasApi* | [**extrasEventRulesUpdate**](docs/Api/ExtrasApi.md#extraseventrulesupdate) | **PUT** /api/extras/event-rules/{id}/ | 
*ExtrasApi* | [**extrasExportTemplatesBulkDestroy**](docs/Api/ExtrasApi.md#extrasexporttemplatesbulkdestroy) | **DELETE** /api/extras/export-templates/ | 
*ExtrasApi* | [**extrasExportTemplatesBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrasexporttemplatesbulkpartialupdate) | **PATCH** /api/extras/export-templates/ | 
*ExtrasApi* | [**extrasExportTemplatesBulkUpdate**](docs/Api/ExtrasApi.md#extrasexporttemplatesbulkupdate) | **PUT** /api/extras/export-templates/ | 
*ExtrasApi* | [**extrasExportTemplatesCreate**](docs/Api/ExtrasApi.md#extrasexporttemplatescreate) | **POST** /api/extras/export-templates/ | 
*ExtrasApi* | [**extrasExportTemplatesDestroy**](docs/Api/ExtrasApi.md#extrasexporttemplatesdestroy) | **DELETE** /api/extras/export-templates/{id}/ | 
*ExtrasApi* | [**extrasExportTemplatesList**](docs/Api/ExtrasApi.md#extrasexporttemplateslist) | **GET** /api/extras/export-templates/ | 
*ExtrasApi* | [**extrasExportTemplatesPartialUpdate**](docs/Api/ExtrasApi.md#extrasexporttemplatespartialupdate) | **PATCH** /api/extras/export-templates/{id}/ | 
*ExtrasApi* | [**extrasExportTemplatesRetrieve**](docs/Api/ExtrasApi.md#extrasexporttemplatesretrieve) | **GET** /api/extras/export-templates/{id}/ | 
*ExtrasApi* | [**extrasExportTemplatesSyncCreate**](docs/Api/ExtrasApi.md#extrasexporttemplatessynccreate) | **POST** /api/extras/export-templates/{id}/sync/ | 
*ExtrasApi* | [**extrasExportTemplatesUpdate**](docs/Api/ExtrasApi.md#extrasexporttemplatesupdate) | **PUT** /api/extras/export-templates/{id}/ | 
*ExtrasApi* | [**extrasImageAttachmentsBulkDestroy**](docs/Api/ExtrasApi.md#extrasimageattachmentsbulkdestroy) | **DELETE** /api/extras/image-attachments/ | 
*ExtrasApi* | [**extrasImageAttachmentsBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrasimageattachmentsbulkpartialupdate) | **PATCH** /api/extras/image-attachments/ | 
*ExtrasApi* | [**extrasImageAttachmentsBulkUpdate**](docs/Api/ExtrasApi.md#extrasimageattachmentsbulkupdate) | **PUT** /api/extras/image-attachments/ | 
*ExtrasApi* | [**extrasImageAttachmentsCreate**](docs/Api/ExtrasApi.md#extrasimageattachmentscreate) | **POST** /api/extras/image-attachments/ | 
*ExtrasApi* | [**extrasImageAttachmentsDestroy**](docs/Api/ExtrasApi.md#extrasimageattachmentsdestroy) | **DELETE** /api/extras/image-attachments/{id}/ | 
*ExtrasApi* | [**extrasImageAttachmentsList**](docs/Api/ExtrasApi.md#extrasimageattachmentslist) | **GET** /api/extras/image-attachments/ | 
*ExtrasApi* | [**extrasImageAttachmentsPartialUpdate**](docs/Api/ExtrasApi.md#extrasimageattachmentspartialupdate) | **PATCH** /api/extras/image-attachments/{id}/ | 
*ExtrasApi* | [**extrasImageAttachmentsRetrieve**](docs/Api/ExtrasApi.md#extrasimageattachmentsretrieve) | **GET** /api/extras/image-attachments/{id}/ | 
*ExtrasApi* | [**extrasImageAttachmentsUpdate**](docs/Api/ExtrasApi.md#extrasimageattachmentsupdate) | **PUT** /api/extras/image-attachments/{id}/ | 
*ExtrasApi* | [**extrasJournalEntriesBulkDestroy**](docs/Api/ExtrasApi.md#extrasjournalentriesbulkdestroy) | **DELETE** /api/extras/journal-entries/ | 
*ExtrasApi* | [**extrasJournalEntriesBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrasjournalentriesbulkpartialupdate) | **PATCH** /api/extras/journal-entries/ | 
*ExtrasApi* | [**extrasJournalEntriesBulkUpdate**](docs/Api/ExtrasApi.md#extrasjournalentriesbulkupdate) | **PUT** /api/extras/journal-entries/ | 
*ExtrasApi* | [**extrasJournalEntriesCreate**](docs/Api/ExtrasApi.md#extrasjournalentriescreate) | **POST** /api/extras/journal-entries/ | 
*ExtrasApi* | [**extrasJournalEntriesDestroy**](docs/Api/ExtrasApi.md#extrasjournalentriesdestroy) | **DELETE** /api/extras/journal-entries/{id}/ | 
*ExtrasApi* | [**extrasJournalEntriesList**](docs/Api/ExtrasApi.md#extrasjournalentrieslist) | **GET** /api/extras/journal-entries/ | 
*ExtrasApi* | [**extrasJournalEntriesPartialUpdate**](docs/Api/ExtrasApi.md#extrasjournalentriespartialupdate) | **PATCH** /api/extras/journal-entries/{id}/ | 
*ExtrasApi* | [**extrasJournalEntriesRetrieve**](docs/Api/ExtrasApi.md#extrasjournalentriesretrieve) | **GET** /api/extras/journal-entries/{id}/ | 
*ExtrasApi* | [**extrasJournalEntriesUpdate**](docs/Api/ExtrasApi.md#extrasjournalentriesupdate) | **PUT** /api/extras/journal-entries/{id}/ | 
*ExtrasApi* | [**extrasNotificationGroupsBulkDestroy**](docs/Api/ExtrasApi.md#extrasnotificationgroupsbulkdestroy) | **DELETE** /api/extras/notification-groups/ | 
*ExtrasApi* | [**extrasNotificationGroupsBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrasnotificationgroupsbulkpartialupdate) | **PATCH** /api/extras/notification-groups/ | 
*ExtrasApi* | [**extrasNotificationGroupsBulkUpdate**](docs/Api/ExtrasApi.md#extrasnotificationgroupsbulkupdate) | **PUT** /api/extras/notification-groups/ | 
*ExtrasApi* | [**extrasNotificationGroupsCreate**](docs/Api/ExtrasApi.md#extrasnotificationgroupscreate) | **POST** /api/extras/notification-groups/ | 
*ExtrasApi* | [**extrasNotificationGroupsDestroy**](docs/Api/ExtrasApi.md#extrasnotificationgroupsdestroy) | **DELETE** /api/extras/notification-groups/{id}/ | 
*ExtrasApi* | [**extrasNotificationGroupsList**](docs/Api/ExtrasApi.md#extrasnotificationgroupslist) | **GET** /api/extras/notification-groups/ | 
*ExtrasApi* | [**extrasNotificationGroupsPartialUpdate**](docs/Api/ExtrasApi.md#extrasnotificationgroupspartialupdate) | **PATCH** /api/extras/notification-groups/{id}/ | 
*ExtrasApi* | [**extrasNotificationGroupsRetrieve**](docs/Api/ExtrasApi.md#extrasnotificationgroupsretrieve) | **GET** /api/extras/notification-groups/{id}/ | 
*ExtrasApi* | [**extrasNotificationGroupsUpdate**](docs/Api/ExtrasApi.md#extrasnotificationgroupsupdate) | **PUT** /api/extras/notification-groups/{id}/ | 
*ExtrasApi* | [**extrasNotificationsBulkDestroy**](docs/Api/ExtrasApi.md#extrasnotificationsbulkdestroy) | **DELETE** /api/extras/notifications/ | 
*ExtrasApi* | [**extrasNotificationsBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrasnotificationsbulkpartialupdate) | **PATCH** /api/extras/notifications/ | 
*ExtrasApi* | [**extrasNotificationsBulkUpdate**](docs/Api/ExtrasApi.md#extrasnotificationsbulkupdate) | **PUT** /api/extras/notifications/ | 
*ExtrasApi* | [**extrasNotificationsCreate**](docs/Api/ExtrasApi.md#extrasnotificationscreate) | **POST** /api/extras/notifications/ | 
*ExtrasApi* | [**extrasNotificationsDestroy**](docs/Api/ExtrasApi.md#extrasnotificationsdestroy) | **DELETE** /api/extras/notifications/{id}/ | 
*ExtrasApi* | [**extrasNotificationsList**](docs/Api/ExtrasApi.md#extrasnotificationslist) | **GET** /api/extras/notifications/ | 
*ExtrasApi* | [**extrasNotificationsPartialUpdate**](docs/Api/ExtrasApi.md#extrasnotificationspartialupdate) | **PATCH** /api/extras/notifications/{id}/ | 
*ExtrasApi* | [**extrasNotificationsRetrieve**](docs/Api/ExtrasApi.md#extrasnotificationsretrieve) | **GET** /api/extras/notifications/{id}/ | 
*ExtrasApi* | [**extrasNotificationsUpdate**](docs/Api/ExtrasApi.md#extrasnotificationsupdate) | **PUT** /api/extras/notifications/{id}/ | 
*ExtrasApi* | [**extrasObjectTypesList**](docs/Api/ExtrasApi.md#extrasobjecttypeslist) | **GET** /api/extras/object-types/ | 
*ExtrasApi* | [**extrasObjectTypesRetrieve**](docs/Api/ExtrasApi.md#extrasobjecttypesretrieve) | **GET** /api/extras/object-types/{id}/ | 
*ExtrasApi* | [**extrasSavedFiltersBulkDestroy**](docs/Api/ExtrasApi.md#extrassavedfiltersbulkdestroy) | **DELETE** /api/extras/saved-filters/ | 
*ExtrasApi* | [**extrasSavedFiltersBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrassavedfiltersbulkpartialupdate) | **PATCH** /api/extras/saved-filters/ | 
*ExtrasApi* | [**extrasSavedFiltersBulkUpdate**](docs/Api/ExtrasApi.md#extrassavedfiltersbulkupdate) | **PUT** /api/extras/saved-filters/ | 
*ExtrasApi* | [**extrasSavedFiltersCreate**](docs/Api/ExtrasApi.md#extrassavedfilterscreate) | **POST** /api/extras/saved-filters/ | 
*ExtrasApi* | [**extrasSavedFiltersDestroy**](docs/Api/ExtrasApi.md#extrassavedfiltersdestroy) | **DELETE** /api/extras/saved-filters/{id}/ | 
*ExtrasApi* | [**extrasSavedFiltersList**](docs/Api/ExtrasApi.md#extrassavedfilterslist) | **GET** /api/extras/saved-filters/ | 
*ExtrasApi* | [**extrasSavedFiltersPartialUpdate**](docs/Api/ExtrasApi.md#extrassavedfilterspartialupdate) | **PATCH** /api/extras/saved-filters/{id}/ | 
*ExtrasApi* | [**extrasSavedFiltersRetrieve**](docs/Api/ExtrasApi.md#extrassavedfiltersretrieve) | **GET** /api/extras/saved-filters/{id}/ | 
*ExtrasApi* | [**extrasSavedFiltersUpdate**](docs/Api/ExtrasApi.md#extrassavedfiltersupdate) | **PUT** /api/extras/saved-filters/{id}/ | 
*ExtrasApi* | [**extrasScriptsCreate**](docs/Api/ExtrasApi.md#extrasscriptscreate) | **POST** /api/extras/scripts/ | 
*ExtrasApi* | [**extrasScriptsDestroy**](docs/Api/ExtrasApi.md#extrasscriptsdestroy) | **DELETE** /api/extras/scripts/{id}/ | 
*ExtrasApi* | [**extrasScriptsList**](docs/Api/ExtrasApi.md#extrasscriptslist) | **GET** /api/extras/scripts/ | 
*ExtrasApi* | [**extrasScriptsPartialUpdate**](docs/Api/ExtrasApi.md#extrasscriptspartialupdate) | **PATCH** /api/extras/scripts/{id}/ | 
*ExtrasApi* | [**extrasScriptsRetrieve**](docs/Api/ExtrasApi.md#extrasscriptsretrieve) | **GET** /api/extras/scripts/{id}/ | 
*ExtrasApi* | [**extrasScriptsUpdate**](docs/Api/ExtrasApi.md#extrasscriptsupdate) | **PUT** /api/extras/scripts/{id}/ | 
*ExtrasApi* | [**extrasSubscriptionsBulkDestroy**](docs/Api/ExtrasApi.md#extrassubscriptionsbulkdestroy) | **DELETE** /api/extras/subscriptions/ | 
*ExtrasApi* | [**extrasSubscriptionsBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrassubscriptionsbulkpartialupdate) | **PATCH** /api/extras/subscriptions/ | 
*ExtrasApi* | [**extrasSubscriptionsBulkUpdate**](docs/Api/ExtrasApi.md#extrassubscriptionsbulkupdate) | **PUT** /api/extras/subscriptions/ | 
*ExtrasApi* | [**extrasSubscriptionsCreate**](docs/Api/ExtrasApi.md#extrassubscriptionscreate) | **POST** /api/extras/subscriptions/ | 
*ExtrasApi* | [**extrasSubscriptionsDestroy**](docs/Api/ExtrasApi.md#extrassubscriptionsdestroy) | **DELETE** /api/extras/subscriptions/{id}/ | 
*ExtrasApi* | [**extrasSubscriptionsList**](docs/Api/ExtrasApi.md#extrassubscriptionslist) | **GET** /api/extras/subscriptions/ | 
*ExtrasApi* | [**extrasSubscriptionsPartialUpdate**](docs/Api/ExtrasApi.md#extrassubscriptionspartialupdate) | **PATCH** /api/extras/subscriptions/{id}/ | 
*ExtrasApi* | [**extrasSubscriptionsRetrieve**](docs/Api/ExtrasApi.md#extrassubscriptionsretrieve) | **GET** /api/extras/subscriptions/{id}/ | 
*ExtrasApi* | [**extrasSubscriptionsUpdate**](docs/Api/ExtrasApi.md#extrassubscriptionsupdate) | **PUT** /api/extras/subscriptions/{id}/ | 
*ExtrasApi* | [**extrasTagsBulkDestroy**](docs/Api/ExtrasApi.md#extrastagsbulkdestroy) | **DELETE** /api/extras/tags/ | 
*ExtrasApi* | [**extrasTagsBulkPartialUpdate**](docs/Api/ExtrasApi.md#extrastagsbulkpartialupdate) | **PATCH** /api/extras/tags/ | 
*ExtrasApi* | [**extrasTagsBulkUpdate**](docs/Api/ExtrasApi.md#extrastagsbulkupdate) | **PUT** /api/extras/tags/ | 
*ExtrasApi* | [**extrasTagsCreate**](docs/Api/ExtrasApi.md#extrastagscreate) | **POST** /api/extras/tags/ | 
*ExtrasApi* | [**extrasTagsDestroy**](docs/Api/ExtrasApi.md#extrastagsdestroy) | **DELETE** /api/extras/tags/{id}/ | 
*ExtrasApi* | [**extrasTagsList**](docs/Api/ExtrasApi.md#extrastagslist) | **GET** /api/extras/tags/ | 
*ExtrasApi* | [**extrasTagsPartialUpdate**](docs/Api/ExtrasApi.md#extrastagspartialupdate) | **PATCH** /api/extras/tags/{id}/ | 
*ExtrasApi* | [**extrasTagsRetrieve**](docs/Api/ExtrasApi.md#extrastagsretrieve) | **GET** /api/extras/tags/{id}/ | 
*ExtrasApi* | [**extrasTagsUpdate**](docs/Api/ExtrasApi.md#extrastagsupdate) | **PUT** /api/extras/tags/{id}/ | 
*ExtrasApi* | [**extrasWebhooksBulkDestroy**](docs/Api/ExtrasApi.md#extraswebhooksbulkdestroy) | **DELETE** /api/extras/webhooks/ | 
*ExtrasApi* | [**extrasWebhooksBulkPartialUpdate**](docs/Api/ExtrasApi.md#extraswebhooksbulkpartialupdate) | **PATCH** /api/extras/webhooks/ | 
*ExtrasApi* | [**extrasWebhooksBulkUpdate**](docs/Api/ExtrasApi.md#extraswebhooksbulkupdate) | **PUT** /api/extras/webhooks/ | 
*ExtrasApi* | [**extrasWebhooksCreate**](docs/Api/ExtrasApi.md#extraswebhookscreate) | **POST** /api/extras/webhooks/ | 
*ExtrasApi* | [**extrasWebhooksDestroy**](docs/Api/ExtrasApi.md#extraswebhooksdestroy) | **DELETE** /api/extras/webhooks/{id}/ | 
*ExtrasApi* | [**extrasWebhooksList**](docs/Api/ExtrasApi.md#extraswebhookslist) | **GET** /api/extras/webhooks/ | 
*ExtrasApi* | [**extrasWebhooksPartialUpdate**](docs/Api/ExtrasApi.md#extraswebhookspartialupdate) | **PATCH** /api/extras/webhooks/{id}/ | 
*ExtrasApi* | [**extrasWebhooksRetrieve**](docs/Api/ExtrasApi.md#extraswebhooksretrieve) | **GET** /api/extras/webhooks/{id}/ | 
*ExtrasApi* | [**extrasWebhooksUpdate**](docs/Api/ExtrasApi.md#extraswebhooksupdate) | **PUT** /api/extras/webhooks/{id}/ | 
*IpamApi* | [**ipamAggregatesBulkDestroy**](docs/Api/IpamApi.md#ipamaggregatesbulkdestroy) | **DELETE** /api/ipam/aggregates/ | 
*IpamApi* | [**ipamAggregatesBulkPartialUpdate**](docs/Api/IpamApi.md#ipamaggregatesbulkpartialupdate) | **PATCH** /api/ipam/aggregates/ | 
*IpamApi* | [**ipamAggregatesBulkUpdate**](docs/Api/IpamApi.md#ipamaggregatesbulkupdate) | **PUT** /api/ipam/aggregates/ | 
*IpamApi* | [**ipamAggregatesCreate**](docs/Api/IpamApi.md#ipamaggregatescreate) | **POST** /api/ipam/aggregates/ | 
*IpamApi* | [**ipamAggregatesDestroy**](docs/Api/IpamApi.md#ipamaggregatesdestroy) | **DELETE** /api/ipam/aggregates/{id}/ | 
*IpamApi* | [**ipamAggregatesList**](docs/Api/IpamApi.md#ipamaggregateslist) | **GET** /api/ipam/aggregates/ | 
*IpamApi* | [**ipamAggregatesPartialUpdate**](docs/Api/IpamApi.md#ipamaggregatespartialupdate) | **PATCH** /api/ipam/aggregates/{id}/ | 
*IpamApi* | [**ipamAggregatesRetrieve**](docs/Api/IpamApi.md#ipamaggregatesretrieve) | **GET** /api/ipam/aggregates/{id}/ | 
*IpamApi* | [**ipamAggregatesUpdate**](docs/Api/IpamApi.md#ipamaggregatesupdate) | **PUT** /api/ipam/aggregates/{id}/ | 
*IpamApi* | [**ipamAsnRangesAvailableAsnsCreate**](docs/Api/IpamApi.md#ipamasnrangesavailableasnscreate) | **POST** /api/ipam/asn-ranges/{id}/available-asns/ | 
*IpamApi* | [**ipamAsnRangesAvailableAsnsList**](docs/Api/IpamApi.md#ipamasnrangesavailableasnslist) | **GET** /api/ipam/asn-ranges/{id}/available-asns/ | 
*IpamApi* | [**ipamAsnRangesBulkDestroy**](docs/Api/IpamApi.md#ipamasnrangesbulkdestroy) | **DELETE** /api/ipam/asn-ranges/ | 
*IpamApi* | [**ipamAsnRangesBulkPartialUpdate**](docs/Api/IpamApi.md#ipamasnrangesbulkpartialupdate) | **PATCH** /api/ipam/asn-ranges/ | 
*IpamApi* | [**ipamAsnRangesBulkUpdate**](docs/Api/IpamApi.md#ipamasnrangesbulkupdate) | **PUT** /api/ipam/asn-ranges/ | 
*IpamApi* | [**ipamAsnRangesCreate**](docs/Api/IpamApi.md#ipamasnrangescreate) | **POST** /api/ipam/asn-ranges/ | 
*IpamApi* | [**ipamAsnRangesDestroy**](docs/Api/IpamApi.md#ipamasnrangesdestroy) | **DELETE** /api/ipam/asn-ranges/{id}/ | 
*IpamApi* | [**ipamAsnRangesList**](docs/Api/IpamApi.md#ipamasnrangeslist) | **GET** /api/ipam/asn-ranges/ | 
*IpamApi* | [**ipamAsnRangesPartialUpdate**](docs/Api/IpamApi.md#ipamasnrangespartialupdate) | **PATCH** /api/ipam/asn-ranges/{id}/ | 
*IpamApi* | [**ipamAsnRangesRetrieve**](docs/Api/IpamApi.md#ipamasnrangesretrieve) | **GET** /api/ipam/asn-ranges/{id}/ | 
*IpamApi* | [**ipamAsnRangesUpdate**](docs/Api/IpamApi.md#ipamasnrangesupdate) | **PUT** /api/ipam/asn-ranges/{id}/ | 
*IpamApi* | [**ipamAsnsBulkDestroy**](docs/Api/IpamApi.md#ipamasnsbulkdestroy) | **DELETE** /api/ipam/asns/ | 
*IpamApi* | [**ipamAsnsBulkPartialUpdate**](docs/Api/IpamApi.md#ipamasnsbulkpartialupdate) | **PATCH** /api/ipam/asns/ | 
*IpamApi* | [**ipamAsnsBulkUpdate**](docs/Api/IpamApi.md#ipamasnsbulkupdate) | **PUT** /api/ipam/asns/ | 
*IpamApi* | [**ipamAsnsCreate**](docs/Api/IpamApi.md#ipamasnscreate) | **POST** /api/ipam/asns/ | 
*IpamApi* | [**ipamAsnsDestroy**](docs/Api/IpamApi.md#ipamasnsdestroy) | **DELETE** /api/ipam/asns/{id}/ | 
*IpamApi* | [**ipamAsnsList**](docs/Api/IpamApi.md#ipamasnslist) | **GET** /api/ipam/asns/ | 
*IpamApi* | [**ipamAsnsPartialUpdate**](docs/Api/IpamApi.md#ipamasnspartialupdate) | **PATCH** /api/ipam/asns/{id}/ | 
*IpamApi* | [**ipamAsnsRetrieve**](docs/Api/IpamApi.md#ipamasnsretrieve) | **GET** /api/ipam/asns/{id}/ | 
*IpamApi* | [**ipamAsnsUpdate**](docs/Api/IpamApi.md#ipamasnsupdate) | **PUT** /api/ipam/asns/{id}/ | 
*IpamApi* | [**ipamFhrpGroupAssignmentsBulkDestroy**](docs/Api/IpamApi.md#ipamfhrpgroupassignmentsbulkdestroy) | **DELETE** /api/ipam/fhrp-group-assignments/ | 
*IpamApi* | [**ipamFhrpGroupAssignmentsBulkPartialUpdate**](docs/Api/IpamApi.md#ipamfhrpgroupassignmentsbulkpartialupdate) | **PATCH** /api/ipam/fhrp-group-assignments/ | 
*IpamApi* | [**ipamFhrpGroupAssignmentsBulkUpdate**](docs/Api/IpamApi.md#ipamfhrpgroupassignmentsbulkupdate) | **PUT** /api/ipam/fhrp-group-assignments/ | 
*IpamApi* | [**ipamFhrpGroupAssignmentsCreate**](docs/Api/IpamApi.md#ipamfhrpgroupassignmentscreate) | **POST** /api/ipam/fhrp-group-assignments/ | 
*IpamApi* | [**ipamFhrpGroupAssignmentsDestroy**](docs/Api/IpamApi.md#ipamfhrpgroupassignmentsdestroy) | **DELETE** /api/ipam/fhrp-group-assignments/{id}/ | 
*IpamApi* | [**ipamFhrpGroupAssignmentsList**](docs/Api/IpamApi.md#ipamfhrpgroupassignmentslist) | **GET** /api/ipam/fhrp-group-assignments/ | 
*IpamApi* | [**ipamFhrpGroupAssignmentsPartialUpdate**](docs/Api/IpamApi.md#ipamfhrpgroupassignmentspartialupdate) | **PATCH** /api/ipam/fhrp-group-assignments/{id}/ | 
*IpamApi* | [**ipamFhrpGroupAssignmentsRetrieve**](docs/Api/IpamApi.md#ipamfhrpgroupassignmentsretrieve) | **GET** /api/ipam/fhrp-group-assignments/{id}/ | 
*IpamApi* | [**ipamFhrpGroupAssignmentsUpdate**](docs/Api/IpamApi.md#ipamfhrpgroupassignmentsupdate) | **PUT** /api/ipam/fhrp-group-assignments/{id}/ | 
*IpamApi* | [**ipamFhrpGroupsBulkDestroy**](docs/Api/IpamApi.md#ipamfhrpgroupsbulkdestroy) | **DELETE** /api/ipam/fhrp-groups/ | 
*IpamApi* | [**ipamFhrpGroupsBulkPartialUpdate**](docs/Api/IpamApi.md#ipamfhrpgroupsbulkpartialupdate) | **PATCH** /api/ipam/fhrp-groups/ | 
*IpamApi* | [**ipamFhrpGroupsBulkUpdate**](docs/Api/IpamApi.md#ipamfhrpgroupsbulkupdate) | **PUT** /api/ipam/fhrp-groups/ | 
*IpamApi* | [**ipamFhrpGroupsCreate**](docs/Api/IpamApi.md#ipamfhrpgroupscreate) | **POST** /api/ipam/fhrp-groups/ | 
*IpamApi* | [**ipamFhrpGroupsDestroy**](docs/Api/IpamApi.md#ipamfhrpgroupsdestroy) | **DELETE** /api/ipam/fhrp-groups/{id}/ | 
*IpamApi* | [**ipamFhrpGroupsList**](docs/Api/IpamApi.md#ipamfhrpgroupslist) | **GET** /api/ipam/fhrp-groups/ | 
*IpamApi* | [**ipamFhrpGroupsPartialUpdate**](docs/Api/IpamApi.md#ipamfhrpgroupspartialupdate) | **PATCH** /api/ipam/fhrp-groups/{id}/ | 
*IpamApi* | [**ipamFhrpGroupsRetrieve**](docs/Api/IpamApi.md#ipamfhrpgroupsretrieve) | **GET** /api/ipam/fhrp-groups/{id}/ | 
*IpamApi* | [**ipamFhrpGroupsUpdate**](docs/Api/IpamApi.md#ipamfhrpgroupsupdate) | **PUT** /api/ipam/fhrp-groups/{id}/ | 
*IpamApi* | [**ipamIpAddressesBulkDestroy**](docs/Api/IpamApi.md#ipamipaddressesbulkdestroy) | **DELETE** /api/ipam/ip-addresses/ | 
*IpamApi* | [**ipamIpAddressesBulkPartialUpdate**](docs/Api/IpamApi.md#ipamipaddressesbulkpartialupdate) | **PATCH** /api/ipam/ip-addresses/ | 
*IpamApi* | [**ipamIpAddressesBulkUpdate**](docs/Api/IpamApi.md#ipamipaddressesbulkupdate) | **PUT** /api/ipam/ip-addresses/ | 
*IpamApi* | [**ipamIpAddressesCreate**](docs/Api/IpamApi.md#ipamipaddressescreate) | **POST** /api/ipam/ip-addresses/ | 
*IpamApi* | [**ipamIpAddressesDestroy**](docs/Api/IpamApi.md#ipamipaddressesdestroy) | **DELETE** /api/ipam/ip-addresses/{id}/ | 
*IpamApi* | [**ipamIpAddressesList**](docs/Api/IpamApi.md#ipamipaddresseslist) | **GET** /api/ipam/ip-addresses/ | 
*IpamApi* | [**ipamIpAddressesPartialUpdate**](docs/Api/IpamApi.md#ipamipaddressespartialupdate) | **PATCH** /api/ipam/ip-addresses/{id}/ | 
*IpamApi* | [**ipamIpAddressesRetrieve**](docs/Api/IpamApi.md#ipamipaddressesretrieve) | **GET** /api/ipam/ip-addresses/{id}/ | 
*IpamApi* | [**ipamIpAddressesUpdate**](docs/Api/IpamApi.md#ipamipaddressesupdate) | **PUT** /api/ipam/ip-addresses/{id}/ | 
*IpamApi* | [**ipamIpRangesAvailableIpsCreate**](docs/Api/IpamApi.md#ipamiprangesavailableipscreate) | **POST** /api/ipam/ip-ranges/{id}/available-ips/ | 
*IpamApi* | [**ipamIpRangesAvailableIpsList**](docs/Api/IpamApi.md#ipamiprangesavailableipslist) | **GET** /api/ipam/ip-ranges/{id}/available-ips/ | 
*IpamApi* | [**ipamIpRangesBulkDestroy**](docs/Api/IpamApi.md#ipamiprangesbulkdestroy) | **DELETE** /api/ipam/ip-ranges/ | 
*IpamApi* | [**ipamIpRangesBulkPartialUpdate**](docs/Api/IpamApi.md#ipamiprangesbulkpartialupdate) | **PATCH** /api/ipam/ip-ranges/ | 
*IpamApi* | [**ipamIpRangesBulkUpdate**](docs/Api/IpamApi.md#ipamiprangesbulkupdate) | **PUT** /api/ipam/ip-ranges/ | 
*IpamApi* | [**ipamIpRangesCreate**](docs/Api/IpamApi.md#ipamiprangescreate) | **POST** /api/ipam/ip-ranges/ | 
*IpamApi* | [**ipamIpRangesDestroy**](docs/Api/IpamApi.md#ipamiprangesdestroy) | **DELETE** /api/ipam/ip-ranges/{id}/ | 
*IpamApi* | [**ipamIpRangesList**](docs/Api/IpamApi.md#ipamiprangeslist) | **GET** /api/ipam/ip-ranges/ | 
*IpamApi* | [**ipamIpRangesPartialUpdate**](docs/Api/IpamApi.md#ipamiprangespartialupdate) | **PATCH** /api/ipam/ip-ranges/{id}/ | 
*IpamApi* | [**ipamIpRangesRetrieve**](docs/Api/IpamApi.md#ipamiprangesretrieve) | **GET** /api/ipam/ip-ranges/{id}/ | 
*IpamApi* | [**ipamIpRangesUpdate**](docs/Api/IpamApi.md#ipamiprangesupdate) | **PUT** /api/ipam/ip-ranges/{id}/ | 
*IpamApi* | [**ipamPrefixesAvailableIpsCreate**](docs/Api/IpamApi.md#ipamprefixesavailableipscreate) | **POST** /api/ipam/prefixes/{id}/available-ips/ | 
*IpamApi* | [**ipamPrefixesAvailableIpsList**](docs/Api/IpamApi.md#ipamprefixesavailableipslist) | **GET** /api/ipam/prefixes/{id}/available-ips/ | 
*IpamApi* | [**ipamPrefixesAvailablePrefixesCreate**](docs/Api/IpamApi.md#ipamprefixesavailableprefixescreate) | **POST** /api/ipam/prefixes/{id}/available-prefixes/ | 
*IpamApi* | [**ipamPrefixesAvailablePrefixesList**](docs/Api/IpamApi.md#ipamprefixesavailableprefixeslist) | **GET** /api/ipam/prefixes/{id}/available-prefixes/ | 
*IpamApi* | [**ipamPrefixesBulkDestroy**](docs/Api/IpamApi.md#ipamprefixesbulkdestroy) | **DELETE** /api/ipam/prefixes/ | 
*IpamApi* | [**ipamPrefixesBulkPartialUpdate**](docs/Api/IpamApi.md#ipamprefixesbulkpartialupdate) | **PATCH** /api/ipam/prefixes/ | 
*IpamApi* | [**ipamPrefixesBulkUpdate**](docs/Api/IpamApi.md#ipamprefixesbulkupdate) | **PUT** /api/ipam/prefixes/ | 
*IpamApi* | [**ipamPrefixesCreate**](docs/Api/IpamApi.md#ipamprefixescreate) | **POST** /api/ipam/prefixes/ | 
*IpamApi* | [**ipamPrefixesDestroy**](docs/Api/IpamApi.md#ipamprefixesdestroy) | **DELETE** /api/ipam/prefixes/{id}/ | 
*IpamApi* | [**ipamPrefixesList**](docs/Api/IpamApi.md#ipamprefixeslist) | **GET** /api/ipam/prefixes/ | 
*IpamApi* | [**ipamPrefixesPartialUpdate**](docs/Api/IpamApi.md#ipamprefixespartialupdate) | **PATCH** /api/ipam/prefixes/{id}/ | 
*IpamApi* | [**ipamPrefixesRetrieve**](docs/Api/IpamApi.md#ipamprefixesretrieve) | **GET** /api/ipam/prefixes/{id}/ | 
*IpamApi* | [**ipamPrefixesUpdate**](docs/Api/IpamApi.md#ipamprefixesupdate) | **PUT** /api/ipam/prefixes/{id}/ | 
*IpamApi* | [**ipamRirsBulkDestroy**](docs/Api/IpamApi.md#ipamrirsbulkdestroy) | **DELETE** /api/ipam/rirs/ | 
*IpamApi* | [**ipamRirsBulkPartialUpdate**](docs/Api/IpamApi.md#ipamrirsbulkpartialupdate) | **PATCH** /api/ipam/rirs/ | 
*IpamApi* | [**ipamRirsBulkUpdate**](docs/Api/IpamApi.md#ipamrirsbulkupdate) | **PUT** /api/ipam/rirs/ | 
*IpamApi* | [**ipamRirsCreate**](docs/Api/IpamApi.md#ipamrirscreate) | **POST** /api/ipam/rirs/ | 
*IpamApi* | [**ipamRirsDestroy**](docs/Api/IpamApi.md#ipamrirsdestroy) | **DELETE** /api/ipam/rirs/{id}/ | 
*IpamApi* | [**ipamRirsList**](docs/Api/IpamApi.md#ipamrirslist) | **GET** /api/ipam/rirs/ | 
*IpamApi* | [**ipamRirsPartialUpdate**](docs/Api/IpamApi.md#ipamrirspartialupdate) | **PATCH** /api/ipam/rirs/{id}/ | 
*IpamApi* | [**ipamRirsRetrieve**](docs/Api/IpamApi.md#ipamrirsretrieve) | **GET** /api/ipam/rirs/{id}/ | 
*IpamApi* | [**ipamRirsUpdate**](docs/Api/IpamApi.md#ipamrirsupdate) | **PUT** /api/ipam/rirs/{id}/ | 
*IpamApi* | [**ipamRolesBulkDestroy**](docs/Api/IpamApi.md#ipamrolesbulkdestroy) | **DELETE** /api/ipam/roles/ | 
*IpamApi* | [**ipamRolesBulkPartialUpdate**](docs/Api/IpamApi.md#ipamrolesbulkpartialupdate) | **PATCH** /api/ipam/roles/ | 
*IpamApi* | [**ipamRolesBulkUpdate**](docs/Api/IpamApi.md#ipamrolesbulkupdate) | **PUT** /api/ipam/roles/ | 
*IpamApi* | [**ipamRolesCreate**](docs/Api/IpamApi.md#ipamrolescreate) | **POST** /api/ipam/roles/ | 
*IpamApi* | [**ipamRolesDestroy**](docs/Api/IpamApi.md#ipamrolesdestroy) | **DELETE** /api/ipam/roles/{id}/ | 
*IpamApi* | [**ipamRolesList**](docs/Api/IpamApi.md#ipamroleslist) | **GET** /api/ipam/roles/ | 
*IpamApi* | [**ipamRolesPartialUpdate**](docs/Api/IpamApi.md#ipamrolespartialupdate) | **PATCH** /api/ipam/roles/{id}/ | 
*IpamApi* | [**ipamRolesRetrieve**](docs/Api/IpamApi.md#ipamrolesretrieve) | **GET** /api/ipam/roles/{id}/ | 
*IpamApi* | [**ipamRolesUpdate**](docs/Api/IpamApi.md#ipamrolesupdate) | **PUT** /api/ipam/roles/{id}/ | 
*IpamApi* | [**ipamRouteTargetsBulkDestroy**](docs/Api/IpamApi.md#ipamroutetargetsbulkdestroy) | **DELETE** /api/ipam/route-targets/ | 
*IpamApi* | [**ipamRouteTargetsBulkPartialUpdate**](docs/Api/IpamApi.md#ipamroutetargetsbulkpartialupdate) | **PATCH** /api/ipam/route-targets/ | 
*IpamApi* | [**ipamRouteTargetsBulkUpdate**](docs/Api/IpamApi.md#ipamroutetargetsbulkupdate) | **PUT** /api/ipam/route-targets/ | 
*IpamApi* | [**ipamRouteTargetsCreate**](docs/Api/IpamApi.md#ipamroutetargetscreate) | **POST** /api/ipam/route-targets/ | 
*IpamApi* | [**ipamRouteTargetsDestroy**](docs/Api/IpamApi.md#ipamroutetargetsdestroy) | **DELETE** /api/ipam/route-targets/{id}/ | 
*IpamApi* | [**ipamRouteTargetsList**](docs/Api/IpamApi.md#ipamroutetargetslist) | **GET** /api/ipam/route-targets/ | 
*IpamApi* | [**ipamRouteTargetsPartialUpdate**](docs/Api/IpamApi.md#ipamroutetargetspartialupdate) | **PATCH** /api/ipam/route-targets/{id}/ | 
*IpamApi* | [**ipamRouteTargetsRetrieve**](docs/Api/IpamApi.md#ipamroutetargetsretrieve) | **GET** /api/ipam/route-targets/{id}/ | 
*IpamApi* | [**ipamRouteTargetsUpdate**](docs/Api/IpamApi.md#ipamroutetargetsupdate) | **PUT** /api/ipam/route-targets/{id}/ | 
*IpamApi* | [**ipamServiceTemplatesBulkDestroy**](docs/Api/IpamApi.md#ipamservicetemplatesbulkdestroy) | **DELETE** /api/ipam/service-templates/ | 
*IpamApi* | [**ipamServiceTemplatesBulkPartialUpdate**](docs/Api/IpamApi.md#ipamservicetemplatesbulkpartialupdate) | **PATCH** /api/ipam/service-templates/ | 
*IpamApi* | [**ipamServiceTemplatesBulkUpdate**](docs/Api/IpamApi.md#ipamservicetemplatesbulkupdate) | **PUT** /api/ipam/service-templates/ | 
*IpamApi* | [**ipamServiceTemplatesCreate**](docs/Api/IpamApi.md#ipamservicetemplatescreate) | **POST** /api/ipam/service-templates/ | 
*IpamApi* | [**ipamServiceTemplatesDestroy**](docs/Api/IpamApi.md#ipamservicetemplatesdestroy) | **DELETE** /api/ipam/service-templates/{id}/ | 
*IpamApi* | [**ipamServiceTemplatesList**](docs/Api/IpamApi.md#ipamservicetemplateslist) | **GET** /api/ipam/service-templates/ | 
*IpamApi* | [**ipamServiceTemplatesPartialUpdate**](docs/Api/IpamApi.md#ipamservicetemplatespartialupdate) | **PATCH** /api/ipam/service-templates/{id}/ | 
*IpamApi* | [**ipamServiceTemplatesRetrieve**](docs/Api/IpamApi.md#ipamservicetemplatesretrieve) | **GET** /api/ipam/service-templates/{id}/ | 
*IpamApi* | [**ipamServiceTemplatesUpdate**](docs/Api/IpamApi.md#ipamservicetemplatesupdate) | **PUT** /api/ipam/service-templates/{id}/ | 
*IpamApi* | [**ipamServicesBulkDestroy**](docs/Api/IpamApi.md#ipamservicesbulkdestroy) | **DELETE** /api/ipam/services/ | 
*IpamApi* | [**ipamServicesBulkPartialUpdate**](docs/Api/IpamApi.md#ipamservicesbulkpartialupdate) | **PATCH** /api/ipam/services/ | 
*IpamApi* | [**ipamServicesBulkUpdate**](docs/Api/IpamApi.md#ipamservicesbulkupdate) | **PUT** /api/ipam/services/ | 
*IpamApi* | [**ipamServicesCreate**](docs/Api/IpamApi.md#ipamservicescreate) | **POST** /api/ipam/services/ | 
*IpamApi* | [**ipamServicesDestroy**](docs/Api/IpamApi.md#ipamservicesdestroy) | **DELETE** /api/ipam/services/{id}/ | 
*IpamApi* | [**ipamServicesList**](docs/Api/IpamApi.md#ipamserviceslist) | **GET** /api/ipam/services/ | 
*IpamApi* | [**ipamServicesPartialUpdate**](docs/Api/IpamApi.md#ipamservicespartialupdate) | **PATCH** /api/ipam/services/{id}/ | 
*IpamApi* | [**ipamServicesRetrieve**](docs/Api/IpamApi.md#ipamservicesretrieve) | **GET** /api/ipam/services/{id}/ | 
*IpamApi* | [**ipamServicesUpdate**](docs/Api/IpamApi.md#ipamservicesupdate) | **PUT** /api/ipam/services/{id}/ | 
*IpamApi* | [**ipamVlanGroupsAvailableVlansCreate**](docs/Api/IpamApi.md#ipamvlangroupsavailablevlanscreate) | **POST** /api/ipam/vlan-groups/{id}/available-vlans/ | 
*IpamApi* | [**ipamVlanGroupsAvailableVlansList**](docs/Api/IpamApi.md#ipamvlangroupsavailablevlanslist) | **GET** /api/ipam/vlan-groups/{id}/available-vlans/ | 
*IpamApi* | [**ipamVlanGroupsBulkDestroy**](docs/Api/IpamApi.md#ipamvlangroupsbulkdestroy) | **DELETE** /api/ipam/vlan-groups/ | 
*IpamApi* | [**ipamVlanGroupsBulkPartialUpdate**](docs/Api/IpamApi.md#ipamvlangroupsbulkpartialupdate) | **PATCH** /api/ipam/vlan-groups/ | 
*IpamApi* | [**ipamVlanGroupsBulkUpdate**](docs/Api/IpamApi.md#ipamvlangroupsbulkupdate) | **PUT** /api/ipam/vlan-groups/ | 
*IpamApi* | [**ipamVlanGroupsCreate**](docs/Api/IpamApi.md#ipamvlangroupscreate) | **POST** /api/ipam/vlan-groups/ | 
*IpamApi* | [**ipamVlanGroupsDestroy**](docs/Api/IpamApi.md#ipamvlangroupsdestroy) | **DELETE** /api/ipam/vlan-groups/{id}/ | 
*IpamApi* | [**ipamVlanGroupsList**](docs/Api/IpamApi.md#ipamvlangroupslist) | **GET** /api/ipam/vlan-groups/ | 
*IpamApi* | [**ipamVlanGroupsPartialUpdate**](docs/Api/IpamApi.md#ipamvlangroupspartialupdate) | **PATCH** /api/ipam/vlan-groups/{id}/ | 
*IpamApi* | [**ipamVlanGroupsRetrieve**](docs/Api/IpamApi.md#ipamvlangroupsretrieve) | **GET** /api/ipam/vlan-groups/{id}/ | 
*IpamApi* | [**ipamVlanGroupsUpdate**](docs/Api/IpamApi.md#ipamvlangroupsupdate) | **PUT** /api/ipam/vlan-groups/{id}/ | 
*IpamApi* | [**ipamVlansBulkDestroy**](docs/Api/IpamApi.md#ipamvlansbulkdestroy) | **DELETE** /api/ipam/vlans/ | 
*IpamApi* | [**ipamVlansBulkPartialUpdate**](docs/Api/IpamApi.md#ipamvlansbulkpartialupdate) | **PATCH** /api/ipam/vlans/ | 
*IpamApi* | [**ipamVlansBulkUpdate**](docs/Api/IpamApi.md#ipamvlansbulkupdate) | **PUT** /api/ipam/vlans/ | 
*IpamApi* | [**ipamVlansCreate**](docs/Api/IpamApi.md#ipamvlanscreate) | **POST** /api/ipam/vlans/ | 
*IpamApi* | [**ipamVlansDestroy**](docs/Api/IpamApi.md#ipamvlansdestroy) | **DELETE** /api/ipam/vlans/{id}/ | 
*IpamApi* | [**ipamVlansList**](docs/Api/IpamApi.md#ipamvlanslist) | **GET** /api/ipam/vlans/ | 
*IpamApi* | [**ipamVlansPartialUpdate**](docs/Api/IpamApi.md#ipamvlanspartialupdate) | **PATCH** /api/ipam/vlans/{id}/ | 
*IpamApi* | [**ipamVlansRetrieve**](docs/Api/IpamApi.md#ipamvlansretrieve) | **GET** /api/ipam/vlans/{id}/ | 
*IpamApi* | [**ipamVlansUpdate**](docs/Api/IpamApi.md#ipamvlansupdate) | **PUT** /api/ipam/vlans/{id}/ | 
*IpamApi* | [**ipamVrfsBulkDestroy**](docs/Api/IpamApi.md#ipamvrfsbulkdestroy) | **DELETE** /api/ipam/vrfs/ | 
*IpamApi* | [**ipamVrfsBulkPartialUpdate**](docs/Api/IpamApi.md#ipamvrfsbulkpartialupdate) | **PATCH** /api/ipam/vrfs/ | 
*IpamApi* | [**ipamVrfsBulkUpdate**](docs/Api/IpamApi.md#ipamvrfsbulkupdate) | **PUT** /api/ipam/vrfs/ | 
*IpamApi* | [**ipamVrfsCreate**](docs/Api/IpamApi.md#ipamvrfscreate) | **POST** /api/ipam/vrfs/ | 
*IpamApi* | [**ipamVrfsDestroy**](docs/Api/IpamApi.md#ipamvrfsdestroy) | **DELETE** /api/ipam/vrfs/{id}/ | 
*IpamApi* | [**ipamVrfsList**](docs/Api/IpamApi.md#ipamvrfslist) | **GET** /api/ipam/vrfs/ | 
*IpamApi* | [**ipamVrfsPartialUpdate**](docs/Api/IpamApi.md#ipamvrfspartialupdate) | **PATCH** /api/ipam/vrfs/{id}/ | 
*IpamApi* | [**ipamVrfsRetrieve**](docs/Api/IpamApi.md#ipamvrfsretrieve) | **GET** /api/ipam/vrfs/{id}/ | 
*IpamApi* | [**ipamVrfsUpdate**](docs/Api/IpamApi.md#ipamvrfsupdate) | **PUT** /api/ipam/vrfs/{id}/ | 
*SchemaApi* | [**schemaRetrieve**](docs/Api/SchemaApi.md#schemaretrieve) | **GET** /api/schema/ | 
*StatusApi* | [**statusRetrieve**](docs/Api/StatusApi.md#statusretrieve) | **GET** /api/status/ | 
*TenancyApi* | [**tenancyContactAssignmentsBulkDestroy**](docs/Api/TenancyApi.md#tenancycontactassignmentsbulkdestroy) | **DELETE** /api/tenancy/contact-assignments/ | 
*TenancyApi* | [**tenancyContactAssignmentsBulkPartialUpdate**](docs/Api/TenancyApi.md#tenancycontactassignmentsbulkpartialupdate) | **PATCH** /api/tenancy/contact-assignments/ | 
*TenancyApi* | [**tenancyContactAssignmentsBulkUpdate**](docs/Api/TenancyApi.md#tenancycontactassignmentsbulkupdate) | **PUT** /api/tenancy/contact-assignments/ | 
*TenancyApi* | [**tenancyContactAssignmentsCreate**](docs/Api/TenancyApi.md#tenancycontactassignmentscreate) | **POST** /api/tenancy/contact-assignments/ | 
*TenancyApi* | [**tenancyContactAssignmentsDestroy**](docs/Api/TenancyApi.md#tenancycontactassignmentsdestroy) | **DELETE** /api/tenancy/contact-assignments/{id}/ | 
*TenancyApi* | [**tenancyContactAssignmentsList**](docs/Api/TenancyApi.md#tenancycontactassignmentslist) | **GET** /api/tenancy/contact-assignments/ | 
*TenancyApi* | [**tenancyContactAssignmentsPartialUpdate**](docs/Api/TenancyApi.md#tenancycontactassignmentspartialupdate) | **PATCH** /api/tenancy/contact-assignments/{id}/ | 
*TenancyApi* | [**tenancyContactAssignmentsRetrieve**](docs/Api/TenancyApi.md#tenancycontactassignmentsretrieve) | **GET** /api/tenancy/contact-assignments/{id}/ | 
*TenancyApi* | [**tenancyContactAssignmentsUpdate**](docs/Api/TenancyApi.md#tenancycontactassignmentsupdate) | **PUT** /api/tenancy/contact-assignments/{id}/ | 
*TenancyApi* | [**tenancyContactGroupsBulkDestroy**](docs/Api/TenancyApi.md#tenancycontactgroupsbulkdestroy) | **DELETE** /api/tenancy/contact-groups/ | 
*TenancyApi* | [**tenancyContactGroupsBulkPartialUpdate**](docs/Api/TenancyApi.md#tenancycontactgroupsbulkpartialupdate) | **PATCH** /api/tenancy/contact-groups/ | 
*TenancyApi* | [**tenancyContactGroupsBulkUpdate**](docs/Api/TenancyApi.md#tenancycontactgroupsbulkupdate) | **PUT** /api/tenancy/contact-groups/ | 
*TenancyApi* | [**tenancyContactGroupsCreate**](docs/Api/TenancyApi.md#tenancycontactgroupscreate) | **POST** /api/tenancy/contact-groups/ | 
*TenancyApi* | [**tenancyContactGroupsDestroy**](docs/Api/TenancyApi.md#tenancycontactgroupsdestroy) | **DELETE** /api/tenancy/contact-groups/{id}/ | 
*TenancyApi* | [**tenancyContactGroupsList**](docs/Api/TenancyApi.md#tenancycontactgroupslist) | **GET** /api/tenancy/contact-groups/ | 
*TenancyApi* | [**tenancyContactGroupsPartialUpdate**](docs/Api/TenancyApi.md#tenancycontactgroupspartialupdate) | **PATCH** /api/tenancy/contact-groups/{id}/ | 
*TenancyApi* | [**tenancyContactGroupsRetrieve**](docs/Api/TenancyApi.md#tenancycontactgroupsretrieve) | **GET** /api/tenancy/contact-groups/{id}/ | 
*TenancyApi* | [**tenancyContactGroupsUpdate**](docs/Api/TenancyApi.md#tenancycontactgroupsupdate) | **PUT** /api/tenancy/contact-groups/{id}/ | 
*TenancyApi* | [**tenancyContactRolesBulkDestroy**](docs/Api/TenancyApi.md#tenancycontactrolesbulkdestroy) | **DELETE** /api/tenancy/contact-roles/ | 
*TenancyApi* | [**tenancyContactRolesBulkPartialUpdate**](docs/Api/TenancyApi.md#tenancycontactrolesbulkpartialupdate) | **PATCH** /api/tenancy/contact-roles/ | 
*TenancyApi* | [**tenancyContactRolesBulkUpdate**](docs/Api/TenancyApi.md#tenancycontactrolesbulkupdate) | **PUT** /api/tenancy/contact-roles/ | 
*TenancyApi* | [**tenancyContactRolesCreate**](docs/Api/TenancyApi.md#tenancycontactrolescreate) | **POST** /api/tenancy/contact-roles/ | 
*TenancyApi* | [**tenancyContactRolesDestroy**](docs/Api/TenancyApi.md#tenancycontactrolesdestroy) | **DELETE** /api/tenancy/contact-roles/{id}/ | 
*TenancyApi* | [**tenancyContactRolesList**](docs/Api/TenancyApi.md#tenancycontactroleslist) | **GET** /api/tenancy/contact-roles/ | 
*TenancyApi* | [**tenancyContactRolesPartialUpdate**](docs/Api/TenancyApi.md#tenancycontactrolespartialupdate) | **PATCH** /api/tenancy/contact-roles/{id}/ | 
*TenancyApi* | [**tenancyContactRolesRetrieve**](docs/Api/TenancyApi.md#tenancycontactrolesretrieve) | **GET** /api/tenancy/contact-roles/{id}/ | 
*TenancyApi* | [**tenancyContactRolesUpdate**](docs/Api/TenancyApi.md#tenancycontactrolesupdate) | **PUT** /api/tenancy/contact-roles/{id}/ | 
*TenancyApi* | [**tenancyContactsBulkDestroy**](docs/Api/TenancyApi.md#tenancycontactsbulkdestroy) | **DELETE** /api/tenancy/contacts/ | 
*TenancyApi* | [**tenancyContactsBulkPartialUpdate**](docs/Api/TenancyApi.md#tenancycontactsbulkpartialupdate) | **PATCH** /api/tenancy/contacts/ | 
*TenancyApi* | [**tenancyContactsBulkUpdate**](docs/Api/TenancyApi.md#tenancycontactsbulkupdate) | **PUT** /api/tenancy/contacts/ | 
*TenancyApi* | [**tenancyContactsCreate**](docs/Api/TenancyApi.md#tenancycontactscreate) | **POST** /api/tenancy/contacts/ | 
*TenancyApi* | [**tenancyContactsDestroy**](docs/Api/TenancyApi.md#tenancycontactsdestroy) | **DELETE** /api/tenancy/contacts/{id}/ | 
*TenancyApi* | [**tenancyContactsList**](docs/Api/TenancyApi.md#tenancycontactslist) | **GET** /api/tenancy/contacts/ | 
*TenancyApi* | [**tenancyContactsPartialUpdate**](docs/Api/TenancyApi.md#tenancycontactspartialupdate) | **PATCH** /api/tenancy/contacts/{id}/ | 
*TenancyApi* | [**tenancyContactsRetrieve**](docs/Api/TenancyApi.md#tenancycontactsretrieve) | **GET** /api/tenancy/contacts/{id}/ | 
*TenancyApi* | [**tenancyContactsUpdate**](docs/Api/TenancyApi.md#tenancycontactsupdate) | **PUT** /api/tenancy/contacts/{id}/ | 
*TenancyApi* | [**tenancyTenantGroupsBulkDestroy**](docs/Api/TenancyApi.md#tenancytenantgroupsbulkdestroy) | **DELETE** /api/tenancy/tenant-groups/ | 
*TenancyApi* | [**tenancyTenantGroupsBulkPartialUpdate**](docs/Api/TenancyApi.md#tenancytenantgroupsbulkpartialupdate) | **PATCH** /api/tenancy/tenant-groups/ | 
*TenancyApi* | [**tenancyTenantGroupsBulkUpdate**](docs/Api/TenancyApi.md#tenancytenantgroupsbulkupdate) | **PUT** /api/tenancy/tenant-groups/ | 
*TenancyApi* | [**tenancyTenantGroupsCreate**](docs/Api/TenancyApi.md#tenancytenantgroupscreate) | **POST** /api/tenancy/tenant-groups/ | 
*TenancyApi* | [**tenancyTenantGroupsDestroy**](docs/Api/TenancyApi.md#tenancytenantgroupsdestroy) | **DELETE** /api/tenancy/tenant-groups/{id}/ | 
*TenancyApi* | [**tenancyTenantGroupsList**](docs/Api/TenancyApi.md#tenancytenantgroupslist) | **GET** /api/tenancy/tenant-groups/ | 
*TenancyApi* | [**tenancyTenantGroupsPartialUpdate**](docs/Api/TenancyApi.md#tenancytenantgroupspartialupdate) | **PATCH** /api/tenancy/tenant-groups/{id}/ | 
*TenancyApi* | [**tenancyTenantGroupsRetrieve**](docs/Api/TenancyApi.md#tenancytenantgroupsretrieve) | **GET** /api/tenancy/tenant-groups/{id}/ | 
*TenancyApi* | [**tenancyTenantGroupsUpdate**](docs/Api/TenancyApi.md#tenancytenantgroupsupdate) | **PUT** /api/tenancy/tenant-groups/{id}/ | 
*TenancyApi* | [**tenancyTenantsBulkDestroy**](docs/Api/TenancyApi.md#tenancytenantsbulkdestroy) | **DELETE** /api/tenancy/tenants/ | 
*TenancyApi* | [**tenancyTenantsBulkPartialUpdate**](docs/Api/TenancyApi.md#tenancytenantsbulkpartialupdate) | **PATCH** /api/tenancy/tenants/ | 
*TenancyApi* | [**tenancyTenantsBulkUpdate**](docs/Api/TenancyApi.md#tenancytenantsbulkupdate) | **PUT** /api/tenancy/tenants/ | 
*TenancyApi* | [**tenancyTenantsCreate**](docs/Api/TenancyApi.md#tenancytenantscreate) | **POST** /api/tenancy/tenants/ | 
*TenancyApi* | [**tenancyTenantsDestroy**](docs/Api/TenancyApi.md#tenancytenantsdestroy) | **DELETE** /api/tenancy/tenants/{id}/ | 
*TenancyApi* | [**tenancyTenantsList**](docs/Api/TenancyApi.md#tenancytenantslist) | **GET** /api/tenancy/tenants/ | 
*TenancyApi* | [**tenancyTenantsPartialUpdate**](docs/Api/TenancyApi.md#tenancytenantspartialupdate) | **PATCH** /api/tenancy/tenants/{id}/ | 
*TenancyApi* | [**tenancyTenantsRetrieve**](docs/Api/TenancyApi.md#tenancytenantsretrieve) | **GET** /api/tenancy/tenants/{id}/ | 
*TenancyApi* | [**tenancyTenantsUpdate**](docs/Api/TenancyApi.md#tenancytenantsupdate) | **PUT** /api/tenancy/tenants/{id}/ | 
*UsersApi* | [**usersConfigRetrieve**](docs/Api/UsersApi.md#usersconfigretrieve) | **GET** /api/users/config/ | 
*UsersApi* | [**usersGroupsBulkDestroy**](docs/Api/UsersApi.md#usersgroupsbulkdestroy) | **DELETE** /api/users/groups/ | 
*UsersApi* | [**usersGroupsBulkPartialUpdate**](docs/Api/UsersApi.md#usersgroupsbulkpartialupdate) | **PATCH** /api/users/groups/ | 
*UsersApi* | [**usersGroupsBulkUpdate**](docs/Api/UsersApi.md#usersgroupsbulkupdate) | **PUT** /api/users/groups/ | 
*UsersApi* | [**usersGroupsCreate**](docs/Api/UsersApi.md#usersgroupscreate) | **POST** /api/users/groups/ | 
*UsersApi* | [**usersGroupsDestroy**](docs/Api/UsersApi.md#usersgroupsdestroy) | **DELETE** /api/users/groups/{id}/ | 
*UsersApi* | [**usersGroupsList**](docs/Api/UsersApi.md#usersgroupslist) | **GET** /api/users/groups/ | 
*UsersApi* | [**usersGroupsPartialUpdate**](docs/Api/UsersApi.md#usersgroupspartialupdate) | **PATCH** /api/users/groups/{id}/ | 
*UsersApi* | [**usersGroupsRetrieve**](docs/Api/UsersApi.md#usersgroupsretrieve) | **GET** /api/users/groups/{id}/ | 
*UsersApi* | [**usersGroupsUpdate**](docs/Api/UsersApi.md#usersgroupsupdate) | **PUT** /api/users/groups/{id}/ | 
*UsersApi* | [**usersPermissionsBulkDestroy**](docs/Api/UsersApi.md#userspermissionsbulkdestroy) | **DELETE** /api/users/permissions/ | 
*UsersApi* | [**usersPermissionsBulkPartialUpdate**](docs/Api/UsersApi.md#userspermissionsbulkpartialupdate) | **PATCH** /api/users/permissions/ | 
*UsersApi* | [**usersPermissionsBulkUpdate**](docs/Api/UsersApi.md#userspermissionsbulkupdate) | **PUT** /api/users/permissions/ | 
*UsersApi* | [**usersPermissionsCreate**](docs/Api/UsersApi.md#userspermissionscreate) | **POST** /api/users/permissions/ | 
*UsersApi* | [**usersPermissionsDestroy**](docs/Api/UsersApi.md#userspermissionsdestroy) | **DELETE** /api/users/permissions/{id}/ | 
*UsersApi* | [**usersPermissionsList**](docs/Api/UsersApi.md#userspermissionslist) | **GET** /api/users/permissions/ | 
*UsersApi* | [**usersPermissionsPartialUpdate**](docs/Api/UsersApi.md#userspermissionspartialupdate) | **PATCH** /api/users/permissions/{id}/ | 
*UsersApi* | [**usersPermissionsRetrieve**](docs/Api/UsersApi.md#userspermissionsretrieve) | **GET** /api/users/permissions/{id}/ | 
*UsersApi* | [**usersPermissionsUpdate**](docs/Api/UsersApi.md#userspermissionsupdate) | **PUT** /api/users/permissions/{id}/ | 
*UsersApi* | [**usersTokensBulkDestroy**](docs/Api/UsersApi.md#userstokensbulkdestroy) | **DELETE** /api/users/tokens/ | 
*UsersApi* | [**usersTokensBulkPartialUpdate**](docs/Api/UsersApi.md#userstokensbulkpartialupdate) | **PATCH** /api/users/tokens/ | 
*UsersApi* | [**usersTokensBulkUpdate**](docs/Api/UsersApi.md#userstokensbulkupdate) | **PUT** /api/users/tokens/ | 
*UsersApi* | [**usersTokensCreate**](docs/Api/UsersApi.md#userstokenscreate) | **POST** /api/users/tokens/ | 
*UsersApi* | [**usersTokensDestroy**](docs/Api/UsersApi.md#userstokensdestroy) | **DELETE** /api/users/tokens/{id}/ | 
*UsersApi* | [**usersTokensList**](docs/Api/UsersApi.md#userstokenslist) | **GET** /api/users/tokens/ | 
*UsersApi* | [**usersTokensPartialUpdate**](docs/Api/UsersApi.md#userstokenspartialupdate) | **PATCH** /api/users/tokens/{id}/ | 
*UsersApi* | [**usersTokensProvisionCreate**](docs/Api/UsersApi.md#userstokensprovisioncreate) | **POST** /api/users/tokens/provision/ | 
*UsersApi* | [**usersTokensRetrieve**](docs/Api/UsersApi.md#userstokensretrieve) | **GET** /api/users/tokens/{id}/ | 
*UsersApi* | [**usersTokensUpdate**](docs/Api/UsersApi.md#userstokensupdate) | **PUT** /api/users/tokens/{id}/ | 
*UsersApi* | [**usersUsersBulkDestroy**](docs/Api/UsersApi.md#usersusersbulkdestroy) | **DELETE** /api/users/users/ | 
*UsersApi* | [**usersUsersBulkPartialUpdate**](docs/Api/UsersApi.md#usersusersbulkpartialupdate) | **PATCH** /api/users/users/ | 
*UsersApi* | [**usersUsersBulkUpdate**](docs/Api/UsersApi.md#usersusersbulkupdate) | **PUT** /api/users/users/ | 
*UsersApi* | [**usersUsersCreate**](docs/Api/UsersApi.md#usersuserscreate) | **POST** /api/users/users/ | 
*UsersApi* | [**usersUsersDestroy**](docs/Api/UsersApi.md#usersusersdestroy) | **DELETE** /api/users/users/{id}/ | 
*UsersApi* | [**usersUsersList**](docs/Api/UsersApi.md#usersuserslist) | **GET** /api/users/users/ | 
*UsersApi* | [**usersUsersPartialUpdate**](docs/Api/UsersApi.md#usersuserspartialupdate) | **PATCH** /api/users/users/{id}/ | 
*UsersApi* | [**usersUsersRetrieve**](docs/Api/UsersApi.md#usersusersretrieve) | **GET** /api/users/users/{id}/ | 
*UsersApi* | [**usersUsersUpdate**](docs/Api/UsersApi.md#usersusersupdate) | **PUT** /api/users/users/{id}/ | 
*VirtualizationApi* | [**virtualizationClusterGroupsBulkDestroy**](docs/Api/VirtualizationApi.md#virtualizationclustergroupsbulkdestroy) | **DELETE** /api/virtualization/cluster-groups/ | 
*VirtualizationApi* | [**virtualizationClusterGroupsBulkPartialUpdate**](docs/Api/VirtualizationApi.md#virtualizationclustergroupsbulkpartialupdate) | **PATCH** /api/virtualization/cluster-groups/ | 
*VirtualizationApi* | [**virtualizationClusterGroupsBulkUpdate**](docs/Api/VirtualizationApi.md#virtualizationclustergroupsbulkupdate) | **PUT** /api/virtualization/cluster-groups/ | 
*VirtualizationApi* | [**virtualizationClusterGroupsCreate**](docs/Api/VirtualizationApi.md#virtualizationclustergroupscreate) | **POST** /api/virtualization/cluster-groups/ | 
*VirtualizationApi* | [**virtualizationClusterGroupsDestroy**](docs/Api/VirtualizationApi.md#virtualizationclustergroupsdestroy) | **DELETE** /api/virtualization/cluster-groups/{id}/ | 
*VirtualizationApi* | [**virtualizationClusterGroupsList**](docs/Api/VirtualizationApi.md#virtualizationclustergroupslist) | **GET** /api/virtualization/cluster-groups/ | 
*VirtualizationApi* | [**virtualizationClusterGroupsPartialUpdate**](docs/Api/VirtualizationApi.md#virtualizationclustergroupspartialupdate) | **PATCH** /api/virtualization/cluster-groups/{id}/ | 
*VirtualizationApi* | [**virtualizationClusterGroupsRetrieve**](docs/Api/VirtualizationApi.md#virtualizationclustergroupsretrieve) | **GET** /api/virtualization/cluster-groups/{id}/ | 
*VirtualizationApi* | [**virtualizationClusterGroupsUpdate**](docs/Api/VirtualizationApi.md#virtualizationclustergroupsupdate) | **PUT** /api/virtualization/cluster-groups/{id}/ | 
*VirtualizationApi* | [**virtualizationClusterTypesBulkDestroy**](docs/Api/VirtualizationApi.md#virtualizationclustertypesbulkdestroy) | **DELETE** /api/virtualization/cluster-types/ | 
*VirtualizationApi* | [**virtualizationClusterTypesBulkPartialUpdate**](docs/Api/VirtualizationApi.md#virtualizationclustertypesbulkpartialupdate) | **PATCH** /api/virtualization/cluster-types/ | 
*VirtualizationApi* | [**virtualizationClusterTypesBulkUpdate**](docs/Api/VirtualizationApi.md#virtualizationclustertypesbulkupdate) | **PUT** /api/virtualization/cluster-types/ | 
*VirtualizationApi* | [**virtualizationClusterTypesCreate**](docs/Api/VirtualizationApi.md#virtualizationclustertypescreate) | **POST** /api/virtualization/cluster-types/ | 
*VirtualizationApi* | [**virtualizationClusterTypesDestroy**](docs/Api/VirtualizationApi.md#virtualizationclustertypesdestroy) | **DELETE** /api/virtualization/cluster-types/{id}/ | 
*VirtualizationApi* | [**virtualizationClusterTypesList**](docs/Api/VirtualizationApi.md#virtualizationclustertypeslist) | **GET** /api/virtualization/cluster-types/ | 
*VirtualizationApi* | [**virtualizationClusterTypesPartialUpdate**](docs/Api/VirtualizationApi.md#virtualizationclustertypespartialupdate) | **PATCH** /api/virtualization/cluster-types/{id}/ | 
*VirtualizationApi* | [**virtualizationClusterTypesRetrieve**](docs/Api/VirtualizationApi.md#virtualizationclustertypesretrieve) | **GET** /api/virtualization/cluster-types/{id}/ | 
*VirtualizationApi* | [**virtualizationClusterTypesUpdate**](docs/Api/VirtualizationApi.md#virtualizationclustertypesupdate) | **PUT** /api/virtualization/cluster-types/{id}/ | 
*VirtualizationApi* | [**virtualizationClustersBulkDestroy**](docs/Api/VirtualizationApi.md#virtualizationclustersbulkdestroy) | **DELETE** /api/virtualization/clusters/ | 
*VirtualizationApi* | [**virtualizationClustersBulkPartialUpdate**](docs/Api/VirtualizationApi.md#virtualizationclustersbulkpartialupdate) | **PATCH** /api/virtualization/clusters/ | 
*VirtualizationApi* | [**virtualizationClustersBulkUpdate**](docs/Api/VirtualizationApi.md#virtualizationclustersbulkupdate) | **PUT** /api/virtualization/clusters/ | 
*VirtualizationApi* | [**virtualizationClustersCreate**](docs/Api/VirtualizationApi.md#virtualizationclusterscreate) | **POST** /api/virtualization/clusters/ | 
*VirtualizationApi* | [**virtualizationClustersDestroy**](docs/Api/VirtualizationApi.md#virtualizationclustersdestroy) | **DELETE** /api/virtualization/clusters/{id}/ | 
*VirtualizationApi* | [**virtualizationClustersList**](docs/Api/VirtualizationApi.md#virtualizationclusterslist) | **GET** /api/virtualization/clusters/ | 
*VirtualizationApi* | [**virtualizationClustersPartialUpdate**](docs/Api/VirtualizationApi.md#virtualizationclusterspartialupdate) | **PATCH** /api/virtualization/clusters/{id}/ | 
*VirtualizationApi* | [**virtualizationClustersRetrieve**](docs/Api/VirtualizationApi.md#virtualizationclustersretrieve) | **GET** /api/virtualization/clusters/{id}/ | 
*VirtualizationApi* | [**virtualizationClustersUpdate**](docs/Api/VirtualizationApi.md#virtualizationclustersupdate) | **PUT** /api/virtualization/clusters/{id}/ | 
*VirtualizationApi* | [**virtualizationInterfacesBulkDestroy**](docs/Api/VirtualizationApi.md#virtualizationinterfacesbulkdestroy) | **DELETE** /api/virtualization/interfaces/ | 
*VirtualizationApi* | [**virtualizationInterfacesBulkPartialUpdate**](docs/Api/VirtualizationApi.md#virtualizationinterfacesbulkpartialupdate) | **PATCH** /api/virtualization/interfaces/ | 
*VirtualizationApi* | [**virtualizationInterfacesBulkUpdate**](docs/Api/VirtualizationApi.md#virtualizationinterfacesbulkupdate) | **PUT** /api/virtualization/interfaces/ | 
*VirtualizationApi* | [**virtualizationInterfacesCreate**](docs/Api/VirtualizationApi.md#virtualizationinterfacescreate) | **POST** /api/virtualization/interfaces/ | 
*VirtualizationApi* | [**virtualizationInterfacesDestroy**](docs/Api/VirtualizationApi.md#virtualizationinterfacesdestroy) | **DELETE** /api/virtualization/interfaces/{id}/ | 
*VirtualizationApi* | [**virtualizationInterfacesList**](docs/Api/VirtualizationApi.md#virtualizationinterfaceslist) | **GET** /api/virtualization/interfaces/ | 
*VirtualizationApi* | [**virtualizationInterfacesPartialUpdate**](docs/Api/VirtualizationApi.md#virtualizationinterfacespartialupdate) | **PATCH** /api/virtualization/interfaces/{id}/ | 
*VirtualizationApi* | [**virtualizationInterfacesRetrieve**](docs/Api/VirtualizationApi.md#virtualizationinterfacesretrieve) | **GET** /api/virtualization/interfaces/{id}/ | 
*VirtualizationApi* | [**virtualizationInterfacesUpdate**](docs/Api/VirtualizationApi.md#virtualizationinterfacesupdate) | **PUT** /api/virtualization/interfaces/{id}/ | 
*VirtualizationApi* | [**virtualizationVirtualDisksBulkDestroy**](docs/Api/VirtualizationApi.md#virtualizationvirtualdisksbulkdestroy) | **DELETE** /api/virtualization/virtual-disks/ | 
*VirtualizationApi* | [**virtualizationVirtualDisksBulkPartialUpdate**](docs/Api/VirtualizationApi.md#virtualizationvirtualdisksbulkpartialupdate) | **PATCH** /api/virtualization/virtual-disks/ | 
*VirtualizationApi* | [**virtualizationVirtualDisksBulkUpdate**](docs/Api/VirtualizationApi.md#virtualizationvirtualdisksbulkupdate) | **PUT** /api/virtualization/virtual-disks/ | 
*VirtualizationApi* | [**virtualizationVirtualDisksCreate**](docs/Api/VirtualizationApi.md#virtualizationvirtualdiskscreate) | **POST** /api/virtualization/virtual-disks/ | 
*VirtualizationApi* | [**virtualizationVirtualDisksDestroy**](docs/Api/VirtualizationApi.md#virtualizationvirtualdisksdestroy) | **DELETE** /api/virtualization/virtual-disks/{id}/ | 
*VirtualizationApi* | [**virtualizationVirtualDisksList**](docs/Api/VirtualizationApi.md#virtualizationvirtualdiskslist) | **GET** /api/virtualization/virtual-disks/ | 
*VirtualizationApi* | [**virtualizationVirtualDisksPartialUpdate**](docs/Api/VirtualizationApi.md#virtualizationvirtualdiskspartialupdate) | **PATCH** /api/virtualization/virtual-disks/{id}/ | 
*VirtualizationApi* | [**virtualizationVirtualDisksRetrieve**](docs/Api/VirtualizationApi.md#virtualizationvirtualdisksretrieve) | **GET** /api/virtualization/virtual-disks/{id}/ | 
*VirtualizationApi* | [**virtualizationVirtualDisksUpdate**](docs/Api/VirtualizationApi.md#virtualizationvirtualdisksupdate) | **PUT** /api/virtualization/virtual-disks/{id}/ | 
*VirtualizationApi* | [**virtualizationVirtualMachinesBulkDestroy**](docs/Api/VirtualizationApi.md#virtualizationvirtualmachinesbulkdestroy) | **DELETE** /api/virtualization/virtual-machines/ | 
*VirtualizationApi* | [**virtualizationVirtualMachinesBulkPartialUpdate**](docs/Api/VirtualizationApi.md#virtualizationvirtualmachinesbulkpartialupdate) | **PATCH** /api/virtualization/virtual-machines/ | 
*VirtualizationApi* | [**virtualizationVirtualMachinesBulkUpdate**](docs/Api/VirtualizationApi.md#virtualizationvirtualmachinesbulkupdate) | **PUT** /api/virtualization/virtual-machines/ | 
*VirtualizationApi* | [**virtualizationVirtualMachinesCreate**](docs/Api/VirtualizationApi.md#virtualizationvirtualmachinescreate) | **POST** /api/virtualization/virtual-machines/ | 
*VirtualizationApi* | [**virtualizationVirtualMachinesDestroy**](docs/Api/VirtualizationApi.md#virtualizationvirtualmachinesdestroy) | **DELETE** /api/virtualization/virtual-machines/{id}/ | 
*VirtualizationApi* | [**virtualizationVirtualMachinesList**](docs/Api/VirtualizationApi.md#virtualizationvirtualmachineslist) | **GET** /api/virtualization/virtual-machines/ | 
*VirtualizationApi* | [**virtualizationVirtualMachinesPartialUpdate**](docs/Api/VirtualizationApi.md#virtualizationvirtualmachinespartialupdate) | **PATCH** /api/virtualization/virtual-machines/{id}/ | 
*VirtualizationApi* | [**virtualizationVirtualMachinesRenderConfigCreate**](docs/Api/VirtualizationApi.md#virtualizationvirtualmachinesrenderconfigcreate) | **POST** /api/virtualization/virtual-machines/{id}/render-config/ | 
*VirtualizationApi* | [**virtualizationVirtualMachinesRetrieve**](docs/Api/VirtualizationApi.md#virtualizationvirtualmachinesretrieve) | **GET** /api/virtualization/virtual-machines/{id}/ | 
*VirtualizationApi* | [**virtualizationVirtualMachinesUpdate**](docs/Api/VirtualizationApi.md#virtualizationvirtualmachinesupdate) | **PUT** /api/virtualization/virtual-machines/{id}/ | 
*VpnApi* | [**vpnIkePoliciesBulkDestroy**](docs/Api/VpnApi.md#vpnikepoliciesbulkdestroy) | **DELETE** /api/vpn/ike-policies/ | 
*VpnApi* | [**vpnIkePoliciesBulkPartialUpdate**](docs/Api/VpnApi.md#vpnikepoliciesbulkpartialupdate) | **PATCH** /api/vpn/ike-policies/ | 
*VpnApi* | [**vpnIkePoliciesBulkUpdate**](docs/Api/VpnApi.md#vpnikepoliciesbulkupdate) | **PUT** /api/vpn/ike-policies/ | 
*VpnApi* | [**vpnIkePoliciesCreate**](docs/Api/VpnApi.md#vpnikepoliciescreate) | **POST** /api/vpn/ike-policies/ | 
*VpnApi* | [**vpnIkePoliciesDestroy**](docs/Api/VpnApi.md#vpnikepoliciesdestroy) | **DELETE** /api/vpn/ike-policies/{id}/ | 
*VpnApi* | [**vpnIkePoliciesList**](docs/Api/VpnApi.md#vpnikepolicieslist) | **GET** /api/vpn/ike-policies/ | 
*VpnApi* | [**vpnIkePoliciesPartialUpdate**](docs/Api/VpnApi.md#vpnikepoliciespartialupdate) | **PATCH** /api/vpn/ike-policies/{id}/ | 
*VpnApi* | [**vpnIkePoliciesRetrieve**](docs/Api/VpnApi.md#vpnikepoliciesretrieve) | **GET** /api/vpn/ike-policies/{id}/ | 
*VpnApi* | [**vpnIkePoliciesUpdate**](docs/Api/VpnApi.md#vpnikepoliciesupdate) | **PUT** /api/vpn/ike-policies/{id}/ | 
*VpnApi* | [**vpnIkeProposalsBulkDestroy**](docs/Api/VpnApi.md#vpnikeproposalsbulkdestroy) | **DELETE** /api/vpn/ike-proposals/ | 
*VpnApi* | [**vpnIkeProposalsBulkPartialUpdate**](docs/Api/VpnApi.md#vpnikeproposalsbulkpartialupdate) | **PATCH** /api/vpn/ike-proposals/ | 
*VpnApi* | [**vpnIkeProposalsBulkUpdate**](docs/Api/VpnApi.md#vpnikeproposalsbulkupdate) | **PUT** /api/vpn/ike-proposals/ | 
*VpnApi* | [**vpnIkeProposalsCreate**](docs/Api/VpnApi.md#vpnikeproposalscreate) | **POST** /api/vpn/ike-proposals/ | 
*VpnApi* | [**vpnIkeProposalsDestroy**](docs/Api/VpnApi.md#vpnikeproposalsdestroy) | **DELETE** /api/vpn/ike-proposals/{id}/ | 
*VpnApi* | [**vpnIkeProposalsList**](docs/Api/VpnApi.md#vpnikeproposalslist) | **GET** /api/vpn/ike-proposals/ | 
*VpnApi* | [**vpnIkeProposalsPartialUpdate**](docs/Api/VpnApi.md#vpnikeproposalspartialupdate) | **PATCH** /api/vpn/ike-proposals/{id}/ | 
*VpnApi* | [**vpnIkeProposalsRetrieve**](docs/Api/VpnApi.md#vpnikeproposalsretrieve) | **GET** /api/vpn/ike-proposals/{id}/ | 
*VpnApi* | [**vpnIkeProposalsUpdate**](docs/Api/VpnApi.md#vpnikeproposalsupdate) | **PUT** /api/vpn/ike-proposals/{id}/ | 
*VpnApi* | [**vpnIpsecPoliciesBulkDestroy**](docs/Api/VpnApi.md#vpnipsecpoliciesbulkdestroy) | **DELETE** /api/vpn/ipsec-policies/ | 
*VpnApi* | [**vpnIpsecPoliciesBulkPartialUpdate**](docs/Api/VpnApi.md#vpnipsecpoliciesbulkpartialupdate) | **PATCH** /api/vpn/ipsec-policies/ | 
*VpnApi* | [**vpnIpsecPoliciesBulkUpdate**](docs/Api/VpnApi.md#vpnipsecpoliciesbulkupdate) | **PUT** /api/vpn/ipsec-policies/ | 
*VpnApi* | [**vpnIpsecPoliciesCreate**](docs/Api/VpnApi.md#vpnipsecpoliciescreate) | **POST** /api/vpn/ipsec-policies/ | 
*VpnApi* | [**vpnIpsecPoliciesDestroy**](docs/Api/VpnApi.md#vpnipsecpoliciesdestroy) | **DELETE** /api/vpn/ipsec-policies/{id}/ | 
*VpnApi* | [**vpnIpsecPoliciesList**](docs/Api/VpnApi.md#vpnipsecpolicieslist) | **GET** /api/vpn/ipsec-policies/ | 
*VpnApi* | [**vpnIpsecPoliciesPartialUpdate**](docs/Api/VpnApi.md#vpnipsecpoliciespartialupdate) | **PATCH** /api/vpn/ipsec-policies/{id}/ | 
*VpnApi* | [**vpnIpsecPoliciesRetrieve**](docs/Api/VpnApi.md#vpnipsecpoliciesretrieve) | **GET** /api/vpn/ipsec-policies/{id}/ | 
*VpnApi* | [**vpnIpsecPoliciesUpdate**](docs/Api/VpnApi.md#vpnipsecpoliciesupdate) | **PUT** /api/vpn/ipsec-policies/{id}/ | 
*VpnApi* | [**vpnIpsecProfilesBulkDestroy**](docs/Api/VpnApi.md#vpnipsecprofilesbulkdestroy) | **DELETE** /api/vpn/ipsec-profiles/ | 
*VpnApi* | [**vpnIpsecProfilesBulkPartialUpdate**](docs/Api/VpnApi.md#vpnipsecprofilesbulkpartialupdate) | **PATCH** /api/vpn/ipsec-profiles/ | 
*VpnApi* | [**vpnIpsecProfilesBulkUpdate**](docs/Api/VpnApi.md#vpnipsecprofilesbulkupdate) | **PUT** /api/vpn/ipsec-profiles/ | 
*VpnApi* | [**vpnIpsecProfilesCreate**](docs/Api/VpnApi.md#vpnipsecprofilescreate) | **POST** /api/vpn/ipsec-profiles/ | 
*VpnApi* | [**vpnIpsecProfilesDestroy**](docs/Api/VpnApi.md#vpnipsecprofilesdestroy) | **DELETE** /api/vpn/ipsec-profiles/{id}/ | 
*VpnApi* | [**vpnIpsecProfilesList**](docs/Api/VpnApi.md#vpnipsecprofileslist) | **GET** /api/vpn/ipsec-profiles/ | 
*VpnApi* | [**vpnIpsecProfilesPartialUpdate**](docs/Api/VpnApi.md#vpnipsecprofilespartialupdate) | **PATCH** /api/vpn/ipsec-profiles/{id}/ | 
*VpnApi* | [**vpnIpsecProfilesRetrieve**](docs/Api/VpnApi.md#vpnipsecprofilesretrieve) | **GET** /api/vpn/ipsec-profiles/{id}/ | 
*VpnApi* | [**vpnIpsecProfilesUpdate**](docs/Api/VpnApi.md#vpnipsecprofilesupdate) | **PUT** /api/vpn/ipsec-profiles/{id}/ | 
*VpnApi* | [**vpnIpsecProposalsBulkDestroy**](docs/Api/VpnApi.md#vpnipsecproposalsbulkdestroy) | **DELETE** /api/vpn/ipsec-proposals/ | 
*VpnApi* | [**vpnIpsecProposalsBulkPartialUpdate**](docs/Api/VpnApi.md#vpnipsecproposalsbulkpartialupdate) | **PATCH** /api/vpn/ipsec-proposals/ | 
*VpnApi* | [**vpnIpsecProposalsBulkUpdate**](docs/Api/VpnApi.md#vpnipsecproposalsbulkupdate) | **PUT** /api/vpn/ipsec-proposals/ | 
*VpnApi* | [**vpnIpsecProposalsCreate**](docs/Api/VpnApi.md#vpnipsecproposalscreate) | **POST** /api/vpn/ipsec-proposals/ | 
*VpnApi* | [**vpnIpsecProposalsDestroy**](docs/Api/VpnApi.md#vpnipsecproposalsdestroy) | **DELETE** /api/vpn/ipsec-proposals/{id}/ | 
*VpnApi* | [**vpnIpsecProposalsList**](docs/Api/VpnApi.md#vpnipsecproposalslist) | **GET** /api/vpn/ipsec-proposals/ | 
*VpnApi* | [**vpnIpsecProposalsPartialUpdate**](docs/Api/VpnApi.md#vpnipsecproposalspartialupdate) | **PATCH** /api/vpn/ipsec-proposals/{id}/ | 
*VpnApi* | [**vpnIpsecProposalsRetrieve**](docs/Api/VpnApi.md#vpnipsecproposalsretrieve) | **GET** /api/vpn/ipsec-proposals/{id}/ | 
*VpnApi* | [**vpnIpsecProposalsUpdate**](docs/Api/VpnApi.md#vpnipsecproposalsupdate) | **PUT** /api/vpn/ipsec-proposals/{id}/ | 
*VpnApi* | [**vpnL2vpnTerminationsBulkDestroy**](docs/Api/VpnApi.md#vpnl2vpnterminationsbulkdestroy) | **DELETE** /api/vpn/l2vpn-terminations/ | 
*VpnApi* | [**vpnL2vpnTerminationsBulkPartialUpdate**](docs/Api/VpnApi.md#vpnl2vpnterminationsbulkpartialupdate) | **PATCH** /api/vpn/l2vpn-terminations/ | 
*VpnApi* | [**vpnL2vpnTerminationsBulkUpdate**](docs/Api/VpnApi.md#vpnl2vpnterminationsbulkupdate) | **PUT** /api/vpn/l2vpn-terminations/ | 
*VpnApi* | [**vpnL2vpnTerminationsCreate**](docs/Api/VpnApi.md#vpnl2vpnterminationscreate) | **POST** /api/vpn/l2vpn-terminations/ | 
*VpnApi* | [**vpnL2vpnTerminationsDestroy**](docs/Api/VpnApi.md#vpnl2vpnterminationsdestroy) | **DELETE** /api/vpn/l2vpn-terminations/{id}/ | 
*VpnApi* | [**vpnL2vpnTerminationsList**](docs/Api/VpnApi.md#vpnl2vpnterminationslist) | **GET** /api/vpn/l2vpn-terminations/ | 
*VpnApi* | [**vpnL2vpnTerminationsPartialUpdate**](docs/Api/VpnApi.md#vpnl2vpnterminationspartialupdate) | **PATCH** /api/vpn/l2vpn-terminations/{id}/ | 
*VpnApi* | [**vpnL2vpnTerminationsRetrieve**](docs/Api/VpnApi.md#vpnl2vpnterminationsretrieve) | **GET** /api/vpn/l2vpn-terminations/{id}/ | 
*VpnApi* | [**vpnL2vpnTerminationsUpdate**](docs/Api/VpnApi.md#vpnl2vpnterminationsupdate) | **PUT** /api/vpn/l2vpn-terminations/{id}/ | 
*VpnApi* | [**vpnL2vpnsBulkDestroy**](docs/Api/VpnApi.md#vpnl2vpnsbulkdestroy) | **DELETE** /api/vpn/l2vpns/ | 
*VpnApi* | [**vpnL2vpnsBulkPartialUpdate**](docs/Api/VpnApi.md#vpnl2vpnsbulkpartialupdate) | **PATCH** /api/vpn/l2vpns/ | 
*VpnApi* | [**vpnL2vpnsBulkUpdate**](docs/Api/VpnApi.md#vpnl2vpnsbulkupdate) | **PUT** /api/vpn/l2vpns/ | 
*VpnApi* | [**vpnL2vpnsCreate**](docs/Api/VpnApi.md#vpnl2vpnscreate) | **POST** /api/vpn/l2vpns/ | 
*VpnApi* | [**vpnL2vpnsDestroy**](docs/Api/VpnApi.md#vpnl2vpnsdestroy) | **DELETE** /api/vpn/l2vpns/{id}/ | 
*VpnApi* | [**vpnL2vpnsList**](docs/Api/VpnApi.md#vpnl2vpnslist) | **GET** /api/vpn/l2vpns/ | 
*VpnApi* | [**vpnL2vpnsPartialUpdate**](docs/Api/VpnApi.md#vpnl2vpnspartialupdate) | **PATCH** /api/vpn/l2vpns/{id}/ | 
*VpnApi* | [**vpnL2vpnsRetrieve**](docs/Api/VpnApi.md#vpnl2vpnsretrieve) | **GET** /api/vpn/l2vpns/{id}/ | 
*VpnApi* | [**vpnL2vpnsUpdate**](docs/Api/VpnApi.md#vpnl2vpnsupdate) | **PUT** /api/vpn/l2vpns/{id}/ | 
*VpnApi* | [**vpnTunnelGroupsBulkDestroy**](docs/Api/VpnApi.md#vpntunnelgroupsbulkdestroy) | **DELETE** /api/vpn/tunnel-groups/ | 
*VpnApi* | [**vpnTunnelGroupsBulkPartialUpdate**](docs/Api/VpnApi.md#vpntunnelgroupsbulkpartialupdate) | **PATCH** /api/vpn/tunnel-groups/ | 
*VpnApi* | [**vpnTunnelGroupsBulkUpdate**](docs/Api/VpnApi.md#vpntunnelgroupsbulkupdate) | **PUT** /api/vpn/tunnel-groups/ | 
*VpnApi* | [**vpnTunnelGroupsCreate**](docs/Api/VpnApi.md#vpntunnelgroupscreate) | **POST** /api/vpn/tunnel-groups/ | 
*VpnApi* | [**vpnTunnelGroupsDestroy**](docs/Api/VpnApi.md#vpntunnelgroupsdestroy) | **DELETE** /api/vpn/tunnel-groups/{id}/ | 
*VpnApi* | [**vpnTunnelGroupsList**](docs/Api/VpnApi.md#vpntunnelgroupslist) | **GET** /api/vpn/tunnel-groups/ | 
*VpnApi* | [**vpnTunnelGroupsPartialUpdate**](docs/Api/VpnApi.md#vpntunnelgroupspartialupdate) | **PATCH** /api/vpn/tunnel-groups/{id}/ | 
*VpnApi* | [**vpnTunnelGroupsRetrieve**](docs/Api/VpnApi.md#vpntunnelgroupsretrieve) | **GET** /api/vpn/tunnel-groups/{id}/ | 
*VpnApi* | [**vpnTunnelGroupsUpdate**](docs/Api/VpnApi.md#vpntunnelgroupsupdate) | **PUT** /api/vpn/tunnel-groups/{id}/ | 
*VpnApi* | [**vpnTunnelTerminationsBulkDestroy**](docs/Api/VpnApi.md#vpntunnelterminationsbulkdestroy) | **DELETE** /api/vpn/tunnel-terminations/ | 
*VpnApi* | [**vpnTunnelTerminationsBulkPartialUpdate**](docs/Api/VpnApi.md#vpntunnelterminationsbulkpartialupdate) | **PATCH** /api/vpn/tunnel-terminations/ | 
*VpnApi* | [**vpnTunnelTerminationsBulkUpdate**](docs/Api/VpnApi.md#vpntunnelterminationsbulkupdate) | **PUT** /api/vpn/tunnel-terminations/ | 
*VpnApi* | [**vpnTunnelTerminationsCreate**](docs/Api/VpnApi.md#vpntunnelterminationscreate) | **POST** /api/vpn/tunnel-terminations/ | 
*VpnApi* | [**vpnTunnelTerminationsDestroy**](docs/Api/VpnApi.md#vpntunnelterminationsdestroy) | **DELETE** /api/vpn/tunnel-terminations/{id}/ | 
*VpnApi* | [**vpnTunnelTerminationsList**](docs/Api/VpnApi.md#vpntunnelterminationslist) | **GET** /api/vpn/tunnel-terminations/ | 
*VpnApi* | [**vpnTunnelTerminationsPartialUpdate**](docs/Api/VpnApi.md#vpntunnelterminationspartialupdate) | **PATCH** /api/vpn/tunnel-terminations/{id}/ | 
*VpnApi* | [**vpnTunnelTerminationsRetrieve**](docs/Api/VpnApi.md#vpntunnelterminationsretrieve) | **GET** /api/vpn/tunnel-terminations/{id}/ | 
*VpnApi* | [**vpnTunnelTerminationsUpdate**](docs/Api/VpnApi.md#vpntunnelterminationsupdate) | **PUT** /api/vpn/tunnel-terminations/{id}/ | 
*VpnApi* | [**vpnTunnelsBulkDestroy**](docs/Api/VpnApi.md#vpntunnelsbulkdestroy) | **DELETE** /api/vpn/tunnels/ | 
*VpnApi* | [**vpnTunnelsBulkPartialUpdate**](docs/Api/VpnApi.md#vpntunnelsbulkpartialupdate) | **PATCH** /api/vpn/tunnels/ | 
*VpnApi* | [**vpnTunnelsBulkUpdate**](docs/Api/VpnApi.md#vpntunnelsbulkupdate) | **PUT** /api/vpn/tunnels/ | 
*VpnApi* | [**vpnTunnelsCreate**](docs/Api/VpnApi.md#vpntunnelscreate) | **POST** /api/vpn/tunnels/ | 
*VpnApi* | [**vpnTunnelsDestroy**](docs/Api/VpnApi.md#vpntunnelsdestroy) | **DELETE** /api/vpn/tunnels/{id}/ | 
*VpnApi* | [**vpnTunnelsList**](docs/Api/VpnApi.md#vpntunnelslist) | **GET** /api/vpn/tunnels/ | 
*VpnApi* | [**vpnTunnelsPartialUpdate**](docs/Api/VpnApi.md#vpntunnelspartialupdate) | **PATCH** /api/vpn/tunnels/{id}/ | 
*VpnApi* | [**vpnTunnelsRetrieve**](docs/Api/VpnApi.md#vpntunnelsretrieve) | **GET** /api/vpn/tunnels/{id}/ | 
*VpnApi* | [**vpnTunnelsUpdate**](docs/Api/VpnApi.md#vpntunnelsupdate) | **PUT** /api/vpn/tunnels/{id}/ | 
*WirelessApi* | [**wirelessWirelessLanGroupsBulkDestroy**](docs/Api/WirelessApi.md#wirelesswirelesslangroupsbulkdestroy) | **DELETE** /api/wireless/wireless-lan-groups/ | 
*WirelessApi* | [**wirelessWirelessLanGroupsBulkPartialUpdate**](docs/Api/WirelessApi.md#wirelesswirelesslangroupsbulkpartialupdate) | **PATCH** /api/wireless/wireless-lan-groups/ | 
*WirelessApi* | [**wirelessWirelessLanGroupsBulkUpdate**](docs/Api/WirelessApi.md#wirelesswirelesslangroupsbulkupdate) | **PUT** /api/wireless/wireless-lan-groups/ | 
*WirelessApi* | [**wirelessWirelessLanGroupsCreate**](docs/Api/WirelessApi.md#wirelesswirelesslangroupscreate) | **POST** /api/wireless/wireless-lan-groups/ | 
*WirelessApi* | [**wirelessWirelessLanGroupsDestroy**](docs/Api/WirelessApi.md#wirelesswirelesslangroupsdestroy) | **DELETE** /api/wireless/wireless-lan-groups/{id}/ | 
*WirelessApi* | [**wirelessWirelessLanGroupsList**](docs/Api/WirelessApi.md#wirelesswirelesslangroupslist) | **GET** /api/wireless/wireless-lan-groups/ | 
*WirelessApi* | [**wirelessWirelessLanGroupsPartialUpdate**](docs/Api/WirelessApi.md#wirelesswirelesslangroupspartialupdate) | **PATCH** /api/wireless/wireless-lan-groups/{id}/ | 
*WirelessApi* | [**wirelessWirelessLanGroupsRetrieve**](docs/Api/WirelessApi.md#wirelesswirelesslangroupsretrieve) | **GET** /api/wireless/wireless-lan-groups/{id}/ | 
*WirelessApi* | [**wirelessWirelessLanGroupsUpdate**](docs/Api/WirelessApi.md#wirelesswirelesslangroupsupdate) | **PUT** /api/wireless/wireless-lan-groups/{id}/ | 
*WirelessApi* | [**wirelessWirelessLansBulkDestroy**](docs/Api/WirelessApi.md#wirelesswirelesslansbulkdestroy) | **DELETE** /api/wireless/wireless-lans/ | 
*WirelessApi* | [**wirelessWirelessLansBulkPartialUpdate**](docs/Api/WirelessApi.md#wirelesswirelesslansbulkpartialupdate) | **PATCH** /api/wireless/wireless-lans/ | 
*WirelessApi* | [**wirelessWirelessLansBulkUpdate**](docs/Api/WirelessApi.md#wirelesswirelesslansbulkupdate) | **PUT** /api/wireless/wireless-lans/ | 
*WirelessApi* | [**wirelessWirelessLansCreate**](docs/Api/WirelessApi.md#wirelesswirelesslanscreate) | **POST** /api/wireless/wireless-lans/ | 
*WirelessApi* | [**wirelessWirelessLansDestroy**](docs/Api/WirelessApi.md#wirelesswirelesslansdestroy) | **DELETE** /api/wireless/wireless-lans/{id}/ | 
*WirelessApi* | [**wirelessWirelessLansList**](docs/Api/WirelessApi.md#wirelesswirelesslanslist) | **GET** /api/wireless/wireless-lans/ | 
*WirelessApi* | [**wirelessWirelessLansPartialUpdate**](docs/Api/WirelessApi.md#wirelesswirelesslanspartialupdate) | **PATCH** /api/wireless/wireless-lans/{id}/ | 
*WirelessApi* | [**wirelessWirelessLansRetrieve**](docs/Api/WirelessApi.md#wirelesswirelesslansretrieve) | **GET** /api/wireless/wireless-lans/{id}/ | 
*WirelessApi* | [**wirelessWirelessLansUpdate**](docs/Api/WirelessApi.md#wirelesswirelesslansupdate) | **PUT** /api/wireless/wireless-lans/{id}/ | 
*WirelessApi* | [**wirelessWirelessLinksBulkDestroy**](docs/Api/WirelessApi.md#wirelesswirelesslinksbulkdestroy) | **DELETE** /api/wireless/wireless-links/ | 
*WirelessApi* | [**wirelessWirelessLinksBulkPartialUpdate**](docs/Api/WirelessApi.md#wirelesswirelesslinksbulkpartialupdate) | **PATCH** /api/wireless/wireless-links/ | 
*WirelessApi* | [**wirelessWirelessLinksBulkUpdate**](docs/Api/WirelessApi.md#wirelesswirelesslinksbulkupdate) | **PUT** /api/wireless/wireless-links/ | 
*WirelessApi* | [**wirelessWirelessLinksCreate**](docs/Api/WirelessApi.md#wirelesswirelesslinkscreate) | **POST** /api/wireless/wireless-links/ | 
*WirelessApi* | [**wirelessWirelessLinksDestroy**](docs/Api/WirelessApi.md#wirelesswirelesslinksdestroy) | **DELETE** /api/wireless/wireless-links/{id}/ | 
*WirelessApi* | [**wirelessWirelessLinksList**](docs/Api/WirelessApi.md#wirelesswirelesslinkslist) | **GET** /api/wireless/wireless-links/ | 
*WirelessApi* | [**wirelessWirelessLinksPartialUpdate**](docs/Api/WirelessApi.md#wirelesswirelesslinkspartialupdate) | **PATCH** /api/wireless/wireless-links/{id}/ | 
*WirelessApi* | [**wirelessWirelessLinksRetrieve**](docs/Api/WirelessApi.md#wirelesswirelesslinksretrieve) | **GET** /api/wireless/wireless-links/{id}/ | 
*WirelessApi* | [**wirelessWirelessLinksUpdate**](docs/Api/WirelessApi.md#wirelesswirelesslinksupdate) | **PUT** /api/wireless/wireless-links/{id}/ | 

## Models

- [ASN](docs/Model/ASN.md)
- [ASNRange](docs/Model/ASNRange.md)
- [ASNRangeRequest](docs/Model/ASNRangeRequest.md)
- [ASNRequest](docs/Model/ASNRequest.md)
- [Aggregate](docs/Model/Aggregate.md)
- [AggregateFamily](docs/Model/AggregateFamily.md)
- [AggregateRequest](docs/Model/AggregateRequest.md)
- [AvailableASN](docs/Model/AvailableASN.md)
- [AvailableIP](docs/Model/AvailableIP.md)
- [AvailablePrefix](docs/Model/AvailablePrefix.md)
- [AvailableVLAN](docs/Model/AvailableVLAN.md)
- [Bookmark](docs/Model/Bookmark.md)
- [BookmarkRequest](docs/Model/BookmarkRequest.md)
- [BriefCable](docs/Model/BriefCable.md)
- [BriefCableRequest](docs/Model/BriefCableRequest.md)
- [BriefCircuit](docs/Model/BriefCircuit.md)
- [BriefCircuitGroup](docs/Model/BriefCircuitGroup.md)
- [BriefCircuitGroupAssignmentSerializer](docs/Model/BriefCircuitGroupAssignmentSerializer.md)
- [BriefCircuitGroupAssignmentSerializerPriority](docs/Model/BriefCircuitGroupAssignmentSerializerPriority.md)
- [BriefCircuitGroupAssignmentSerializerRequest](docs/Model/BriefCircuitGroupAssignmentSerializerRequest.md)
- [BriefCircuitGroupRequest](docs/Model/BriefCircuitGroupRequest.md)
- [BriefCircuitRequest](docs/Model/BriefCircuitRequest.md)
- [BriefCircuitType](docs/Model/BriefCircuitType.md)
- [BriefCircuitTypeRequest](docs/Model/BriefCircuitTypeRequest.md)
- [BriefCluster](docs/Model/BriefCluster.md)
- [BriefClusterGroup](docs/Model/BriefClusterGroup.md)
- [BriefClusterGroupRequest](docs/Model/BriefClusterGroupRequest.md)
- [BriefClusterRequest](docs/Model/BriefClusterRequest.md)
- [BriefClusterType](docs/Model/BriefClusterType.md)
- [BriefClusterTypeRequest](docs/Model/BriefClusterTypeRequest.md)
- [BriefConfigTemplate](docs/Model/BriefConfigTemplate.md)
- [BriefConfigTemplateRequest](docs/Model/BriefConfigTemplateRequest.md)
- [BriefContact](docs/Model/BriefContact.md)
- [BriefContactGroup](docs/Model/BriefContactGroup.md)
- [BriefContactGroupRequest](docs/Model/BriefContactGroupRequest.md)
- [BriefContactRequest](docs/Model/BriefContactRequest.md)
- [BriefContactRole](docs/Model/BriefContactRole.md)
- [BriefContactRoleRequest](docs/Model/BriefContactRoleRequest.md)
- [BriefCustomFieldChoiceSet](docs/Model/BriefCustomFieldChoiceSet.md)
- [BriefCustomFieldChoiceSetRequest](docs/Model/BriefCustomFieldChoiceSetRequest.md)
- [BriefDataFile](docs/Model/BriefDataFile.md)
- [BriefDataSource](docs/Model/BriefDataSource.md)
- [BriefDataSourceRequest](docs/Model/BriefDataSourceRequest.md)
- [BriefDevice](docs/Model/BriefDevice.md)
- [BriefDeviceRequest](docs/Model/BriefDeviceRequest.md)
- [BriefDeviceRole](docs/Model/BriefDeviceRole.md)
- [BriefDeviceRoleRequest](docs/Model/BriefDeviceRoleRequest.md)
- [BriefDeviceType](docs/Model/BriefDeviceType.md)
- [BriefDeviceTypeRequest](docs/Model/BriefDeviceTypeRequest.md)
- [BriefFHRPGroup](docs/Model/BriefFHRPGroup.md)
- [BriefFHRPGroupRequest](docs/Model/BriefFHRPGroupRequest.md)
- [BriefIKEPolicy](docs/Model/BriefIKEPolicy.md)
- [BriefIKEPolicyRequest](docs/Model/BriefIKEPolicyRequest.md)
- [BriefIPAddress](docs/Model/BriefIPAddress.md)
- [BriefIPAddressRequest](docs/Model/BriefIPAddressRequest.md)
- [BriefIPSecPolicy](docs/Model/BriefIPSecPolicy.md)
- [BriefIPSecPolicyRequest](docs/Model/BriefIPSecPolicyRequest.md)
- [BriefIPSecProfile](docs/Model/BriefIPSecProfile.md)
- [BriefIPSecProfileRequest](docs/Model/BriefIPSecProfileRequest.md)
- [BriefInterface](docs/Model/BriefInterface.md)
- [BriefInterfaceRequest](docs/Model/BriefInterfaceRequest.md)
- [BriefInventoryItemRole](docs/Model/BriefInventoryItemRole.md)
- [BriefInventoryItemRoleRequest](docs/Model/BriefInventoryItemRoleRequest.md)
- [BriefJob](docs/Model/BriefJob.md)
- [BriefJobRequest](docs/Model/BriefJobRequest.md)
- [BriefJobStatus](docs/Model/BriefJobStatus.md)
- [BriefL2VPN](docs/Model/BriefL2VPN.md)
- [BriefL2VPNRequest](docs/Model/BriefL2VPNRequest.md)
- [BriefL2VPNTermination](docs/Model/BriefL2VPNTermination.md)
- [BriefL2VPNTerminationRequest](docs/Model/BriefL2VPNTerminationRequest.md)
- [BriefL2VPNType](docs/Model/BriefL2VPNType.md)
- [BriefLocation](docs/Model/BriefLocation.md)
- [BriefLocationRequest](docs/Model/BriefLocationRequest.md)
- [BriefManufacturer](docs/Model/BriefManufacturer.md)
- [BriefManufacturerRequest](docs/Model/BriefManufacturerRequest.md)
- [BriefModule](docs/Model/BriefModule.md)
- [BriefModuleRequest](docs/Model/BriefModuleRequest.md)
- [BriefModuleType](docs/Model/BriefModuleType.md)
- [BriefModuleTypeRequest](docs/Model/BriefModuleTypeRequest.md)
- [BriefPlatform](docs/Model/BriefPlatform.md)
- [BriefPlatformRequest](docs/Model/BriefPlatformRequest.md)
- [BriefPowerPanel](docs/Model/BriefPowerPanel.md)
- [BriefPowerPanelRequest](docs/Model/BriefPowerPanelRequest.md)
- [BriefPowerPort](docs/Model/BriefPowerPort.md)
- [BriefPowerPortRequest](docs/Model/BriefPowerPortRequest.md)
- [BriefPowerPortTemplate](docs/Model/BriefPowerPortTemplate.md)
- [BriefPowerPortTemplateRequest](docs/Model/BriefPowerPortTemplateRequest.md)
- [BriefProvider](docs/Model/BriefProvider.md)
- [BriefProviderAccount](docs/Model/BriefProviderAccount.md)
- [BriefProviderAccountRequest](docs/Model/BriefProviderAccountRequest.md)
- [BriefProviderNetwork](docs/Model/BriefProviderNetwork.md)
- [BriefProviderNetworkRequest](docs/Model/BriefProviderNetworkRequest.md)
- [BriefProviderRequest](docs/Model/BriefProviderRequest.md)
- [BriefRIR](docs/Model/BriefRIR.md)
- [BriefRIRRequest](docs/Model/BriefRIRRequest.md)
- [BriefRack](docs/Model/BriefRack.md)
- [BriefRackRequest](docs/Model/BriefRackRequest.md)
- [BriefRackRole](docs/Model/BriefRackRole.md)
- [BriefRackRoleRequest](docs/Model/BriefRackRoleRequest.md)
- [BriefRackType](docs/Model/BriefRackType.md)
- [BriefRackTypeRequest](docs/Model/BriefRackTypeRequest.md)
- [BriefRearPortTemplate](docs/Model/BriefRearPortTemplate.md)
- [BriefRearPortTemplateRequest](docs/Model/BriefRearPortTemplateRequest.md)
- [BriefRegion](docs/Model/BriefRegion.md)
- [BriefRegionRequest](docs/Model/BriefRegionRequest.md)
- [BriefRole](docs/Model/BriefRole.md)
- [BriefRoleRequest](docs/Model/BriefRoleRequest.md)
- [BriefSite](docs/Model/BriefSite.md)
- [BriefSiteGroup](docs/Model/BriefSiteGroup.md)
- [BriefSiteGroupRequest](docs/Model/BriefSiteGroupRequest.md)
- [BriefSiteRequest](docs/Model/BriefSiteRequest.md)
- [BriefTenant](docs/Model/BriefTenant.md)
- [BriefTenantGroup](docs/Model/BriefTenantGroup.md)
- [BriefTenantGroupRequest](docs/Model/BriefTenantGroupRequest.md)
- [BriefTenantRequest](docs/Model/BriefTenantRequest.md)
- [BriefTunnel](docs/Model/BriefTunnel.md)
- [BriefTunnelGroup](docs/Model/BriefTunnelGroup.md)
- [BriefTunnelGroupRequest](docs/Model/BriefTunnelGroupRequest.md)
- [BriefTunnelRequest](docs/Model/BriefTunnelRequest.md)
- [BriefUser](docs/Model/BriefUser.md)
- [BriefUserRequest](docs/Model/BriefUserRequest.md)
- [BriefVLAN](docs/Model/BriefVLAN.md)
- [BriefVLANGroup](docs/Model/BriefVLANGroup.md)
- [BriefVLANGroupRequest](docs/Model/BriefVLANGroupRequest.md)
- [BriefVLANRequest](docs/Model/BriefVLANRequest.md)
- [BriefVRF](docs/Model/BriefVRF.md)
- [BriefVRFRequest](docs/Model/BriefVRFRequest.md)
- [BriefVirtualChassis](docs/Model/BriefVirtualChassis.md)
- [BriefVirtualChassisRequest](docs/Model/BriefVirtualChassisRequest.md)
- [BriefVirtualMachine](docs/Model/BriefVirtualMachine.md)
- [BriefVirtualMachineRequest](docs/Model/BriefVirtualMachineRequest.md)
- [BriefWirelessLANGroup](docs/Model/BriefWirelessLANGroup.md)
- [BriefWirelessLANGroupRequest](docs/Model/BriefWirelessLANGroupRequest.md)
- [Cable](docs/Model/Cable.md)
- [CableLengthUnit](docs/Model/CableLengthUnit.md)
- [CableRequest](docs/Model/CableRequest.md)
- [CableStatus](docs/Model/CableStatus.md)
- [CableTermination](docs/Model/CableTermination.md)
- [CableTerminationRequest](docs/Model/CableTerminationRequest.md)
- [Circuit](docs/Model/Circuit.md)
- [CircuitCircuitTermination](docs/Model/CircuitCircuitTermination.md)
- [CircuitCircuitTerminationRequest](docs/Model/CircuitCircuitTerminationRequest.md)
- [CircuitGroup](docs/Model/CircuitGroup.md)
- [CircuitGroupAssignment](docs/Model/CircuitGroupAssignment.md)
- [CircuitGroupAssignmentRequest](docs/Model/CircuitGroupAssignmentRequest.md)
- [CircuitGroupRequest](docs/Model/CircuitGroupRequest.md)
- [CircuitRequest](docs/Model/CircuitRequest.md)
- [CircuitStatus](docs/Model/CircuitStatus.md)
- [CircuitTermination](docs/Model/CircuitTermination.md)
- [CircuitTerminationRequest](docs/Model/CircuitTerminationRequest.md)
- [CircuitType](docs/Model/CircuitType.md)
- [CircuitTypeRequest](docs/Model/CircuitTypeRequest.md)
- [Cluster](docs/Model/Cluster.md)
- [ClusterGroup](docs/Model/ClusterGroup.md)
- [ClusterGroupRequest](docs/Model/ClusterGroupRequest.md)
- [ClusterRequest](docs/Model/ClusterRequest.md)
- [ClusterStatus](docs/Model/ClusterStatus.md)
- [ClusterType](docs/Model/ClusterType.md)
- [ClusterTypeRequest](docs/Model/ClusterTypeRequest.md)
- [ConfigContext](docs/Model/ConfigContext.md)
- [ConfigContextRequest](docs/Model/ConfigContextRequest.md)
- [ConfigTemplate](docs/Model/ConfigTemplate.md)
- [ConfigTemplateRequest](docs/Model/ConfigTemplateRequest.md)
- [ConsolePort](docs/Model/ConsolePort.md)
- [ConsolePortRequest](docs/Model/ConsolePortRequest.md)
- [ConsolePortSpeed](docs/Model/ConsolePortSpeed.md)
- [ConsolePortTemplate](docs/Model/ConsolePortTemplate.md)
- [ConsolePortTemplateRequest](docs/Model/ConsolePortTemplateRequest.md)
- [ConsolePortType](docs/Model/ConsolePortType.md)
- [ConsoleServerPort](docs/Model/ConsoleServerPort.md)
- [ConsoleServerPortRequest](docs/Model/ConsoleServerPortRequest.md)
- [ConsoleServerPortTemplate](docs/Model/ConsoleServerPortTemplate.md)
- [ConsoleServerPortTemplateRequest](docs/Model/ConsoleServerPortTemplateRequest.md)
- [Contact](docs/Model/Contact.md)
- [ContactAssignment](docs/Model/ContactAssignment.md)
- [ContactAssignmentRequest](docs/Model/ContactAssignmentRequest.md)
- [ContactGroup](docs/Model/ContactGroup.md)
- [ContactGroupRequest](docs/Model/ContactGroupRequest.md)
- [ContactRequest](docs/Model/ContactRequest.md)
- [ContactRole](docs/Model/ContactRole.md)
- [ContactRoleRequest](docs/Model/ContactRoleRequest.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFieldChoiceSet](docs/Model/CustomFieldChoiceSet.md)
- [CustomFieldChoiceSetBaseChoices](docs/Model/CustomFieldChoiceSetBaseChoices.md)
- [CustomFieldChoiceSetRequest](docs/Model/CustomFieldChoiceSetRequest.md)
- [CustomFieldFilterLogic](docs/Model/CustomFieldFilterLogic.md)
- [CustomFieldRequest](docs/Model/CustomFieldRequest.md)
- [CustomFieldType](docs/Model/CustomFieldType.md)
- [CustomFieldUiEditable](docs/Model/CustomFieldUiEditable.md)
- [CustomFieldUiVisible](docs/Model/CustomFieldUiVisible.md)
- [CustomLink](docs/Model/CustomLink.md)
- [CustomLinkRequest](docs/Model/CustomLinkRequest.md)
- [Dashboard](docs/Model/Dashboard.md)
- [DashboardRequest](docs/Model/DashboardRequest.md)
- [DataFile](docs/Model/DataFile.md)
- [DataSource](docs/Model/DataSource.md)
- [DataSourceRequest](docs/Model/DataSourceRequest.md)
- [DataSourceStatus](docs/Model/DataSourceStatus.md)
- [DataSourceType](docs/Model/DataSourceType.md)
- [Device](docs/Model/Device.md)
- [DeviceAirflow](docs/Model/DeviceAirflow.md)
- [DeviceBay](docs/Model/DeviceBay.md)
- [DeviceBayRequest](docs/Model/DeviceBayRequest.md)
- [DeviceBayTemplate](docs/Model/DeviceBayTemplate.md)
- [DeviceBayTemplateRequest](docs/Model/DeviceBayTemplateRequest.md)
- [DeviceFace](docs/Model/DeviceFace.md)
- [DeviceRole](docs/Model/DeviceRole.md)
- [DeviceRoleRequest](docs/Model/DeviceRoleRequest.md)
- [DeviceStatus](docs/Model/DeviceStatus.md)
- [DeviceType](docs/Model/DeviceType.md)
- [DeviceTypeAirflow](docs/Model/DeviceTypeAirflow.md)
- [DeviceTypeRequest](docs/Model/DeviceTypeRequest.md)
- [DeviceTypeSubdeviceRole](docs/Model/DeviceTypeSubdeviceRole.md)
- [DeviceTypeWeightUnit](docs/Model/DeviceTypeWeightUnit.md)
- [DeviceWithConfigContext](docs/Model/DeviceWithConfigContext.md)
- [DeviceWithConfigContextRequest](docs/Model/DeviceWithConfigContextRequest.md)
- [EventRule](docs/Model/EventRule.md)
- [EventRuleActionType](docs/Model/EventRuleActionType.md)
- [EventRuleRequest](docs/Model/EventRuleRequest.md)
- [ExportTemplate](docs/Model/ExportTemplate.md)
- [ExportTemplateRequest](docs/Model/ExportTemplateRequest.md)
- [FHRPGroup](docs/Model/FHRPGroup.md)
- [FHRPGroupAssignment](docs/Model/FHRPGroupAssignment.md)
- [FHRPGroupAssignmentRequest](docs/Model/FHRPGroupAssignmentRequest.md)
- [FHRPGroupRequest](docs/Model/FHRPGroupRequest.md)
- [FrontPort](docs/Model/FrontPort.md)
- [FrontPortRearPort](docs/Model/FrontPortRearPort.md)
- [FrontPortRearPortRequest](docs/Model/FrontPortRearPortRequest.md)
- [FrontPortRequest](docs/Model/FrontPortRequest.md)
- [FrontPortTemplate](docs/Model/FrontPortTemplate.md)
- [FrontPortTemplateRequest](docs/Model/FrontPortTemplateRequest.md)
- [FrontPortType](docs/Model/FrontPortType.md)
- [GenericObject](docs/Model/GenericObject.md)
- [GenericObjectRequest](docs/Model/GenericObjectRequest.md)
- [Group](docs/Model/Group.md)
- [GroupRequest](docs/Model/GroupRequest.md)
- [IKEPolicy](docs/Model/IKEPolicy.md)
- [IKEPolicyMode](docs/Model/IKEPolicyMode.md)
- [IKEPolicyRequest](docs/Model/IKEPolicyRequest.md)
- [IKEPolicyVersion](docs/Model/IKEPolicyVersion.md)
- [IKEProposal](docs/Model/IKEProposal.md)
- [IKEProposalAuthenticationAlgorithm](docs/Model/IKEProposalAuthenticationAlgorithm.md)
- [IKEProposalAuthenticationMethod](docs/Model/IKEProposalAuthenticationMethod.md)
- [IKEProposalEncryptionAlgorithm](docs/Model/IKEProposalEncryptionAlgorithm.md)
- [IKEProposalGroup](docs/Model/IKEProposalGroup.md)
- [IKEProposalRequest](docs/Model/IKEProposalRequest.md)
- [IPAddress](docs/Model/IPAddress.md)
- [IPAddressRequest](docs/Model/IPAddressRequest.md)
- [IPAddressRole](docs/Model/IPAddressRole.md)
- [IPAddressStatus](docs/Model/IPAddressStatus.md)
- [IPRange](docs/Model/IPRange.md)
- [IPRangeRequest](docs/Model/IPRangeRequest.md)
- [IPRangeStatus](docs/Model/IPRangeStatus.md)
- [IPSecPolicy](docs/Model/IPSecPolicy.md)
- [IPSecPolicyRequest](docs/Model/IPSecPolicyRequest.md)
- [IPSecProfile](docs/Model/IPSecProfile.md)
- [IPSecProfileMode](docs/Model/IPSecProfileMode.md)
- [IPSecProfileRequest](docs/Model/IPSecProfileRequest.md)
- [IPSecProposal](docs/Model/IPSecProposal.md)
- [IPSecProposalRequest](docs/Model/IPSecProposalRequest.md)
- [ImageAttachment](docs/Model/ImageAttachment.md)
- [ImageAttachmentRequest](docs/Model/ImageAttachmentRequest.md)
- [InterfaceDuplex](docs/Model/InterfaceDuplex.md)
- [InterfaceMode](docs/Model/InterfaceMode.md)
- [InterfacePoeMode](docs/Model/InterfacePoeMode.md)
- [InterfacePoeType](docs/Model/InterfacePoeType.md)
- [InterfaceRequest](docs/Model/InterfaceRequest.md)
- [InterfaceRfChannel](docs/Model/InterfaceRfChannel.md)
- [InterfaceRfRole](docs/Model/InterfaceRfRole.md)
- [InterfaceTemplate](docs/Model/InterfaceTemplate.md)
- [InterfaceTemplatePoeMode](docs/Model/InterfaceTemplatePoeMode.md)
- [InterfaceTemplatePoeType](docs/Model/InterfaceTemplatePoeType.md)
- [InterfaceTemplateRequest](docs/Model/InterfaceTemplateRequest.md)
- [InterfaceTemplateRfRole](docs/Model/InterfaceTemplateRfRole.md)
- [InterfaceType](docs/Model/InterfaceType.md)
- [InventoryItem](docs/Model/InventoryItem.md)
- [InventoryItemRequest](docs/Model/InventoryItemRequest.md)
- [InventoryItemRole](docs/Model/InventoryItemRole.md)
- [InventoryItemRoleRequest](docs/Model/InventoryItemRoleRequest.md)
- [InventoryItemTemplate](docs/Model/InventoryItemTemplate.md)
- [InventoryItemTemplateRequest](docs/Model/InventoryItemTemplateRequest.md)
- [Job](docs/Model/Job.md)
- [JournalEntry](docs/Model/JournalEntry.md)
- [JournalEntryKind](docs/Model/JournalEntryKind.md)
- [JournalEntryRequest](docs/Model/JournalEntryRequest.md)
- [L2VPN](docs/Model/L2VPN.md)
- [L2VPNRequest](docs/Model/L2VPNRequest.md)
- [L2VPNTermination](docs/Model/L2VPNTermination.md)
- [L2VPNTerminationRequest](docs/Model/L2VPNTerminationRequest.md)
- [Location](docs/Model/Location.md)
- [LocationRequest](docs/Model/LocationRequest.md)
- [LocationStatus](docs/Model/LocationStatus.md)
- [Manufacturer](docs/Model/Manufacturer.md)
- [ManufacturerRequest](docs/Model/ManufacturerRequest.md)
- [ModelInterface](docs/Model/ModelInterface.md)
- [Module](docs/Model/Module.md)
- [ModuleBay](docs/Model/ModuleBay.md)
- [ModuleBayRequest](docs/Model/ModuleBayRequest.md)
- [ModuleBayTemplate](docs/Model/ModuleBayTemplate.md)
- [ModuleBayTemplateRequest](docs/Model/ModuleBayTemplateRequest.md)
- [ModuleRequest](docs/Model/ModuleRequest.md)
- [ModuleStatus](docs/Model/ModuleStatus.md)
- [ModuleType](docs/Model/ModuleType.md)
- [ModuleTypeAirflow](docs/Model/ModuleTypeAirflow.md)
- [ModuleTypeRequest](docs/Model/ModuleTypeRequest.md)
- [NestedContactGroup](docs/Model/NestedContactGroup.md)
- [NestedContactGroupRequest](docs/Model/NestedContactGroupRequest.md)
- [NestedDevice](docs/Model/NestedDevice.md)
- [NestedDeviceRequest](docs/Model/NestedDeviceRequest.md)
- [NestedGroup](docs/Model/NestedGroup.md)
- [NestedIPAddress](docs/Model/NestedIPAddress.md)
- [NestedIPAddressRequest](docs/Model/NestedIPAddressRequest.md)
- [NestedInterface](docs/Model/NestedInterface.md)
- [NestedInterfaceRequest](docs/Model/NestedInterfaceRequest.md)
- [NestedInterfaceTemplate](docs/Model/NestedInterfaceTemplate.md)
- [NestedInterfaceTemplateRequest](docs/Model/NestedInterfaceTemplateRequest.md)
- [NestedLocation](docs/Model/NestedLocation.md)
- [NestedLocationRequest](docs/Model/NestedLocationRequest.md)
- [NestedModuleBay](docs/Model/NestedModuleBay.md)
- [NestedModuleBayRequest](docs/Model/NestedModuleBayRequest.md)
- [NestedProviderAccount](docs/Model/NestedProviderAccount.md)
- [NestedRegion](docs/Model/NestedRegion.md)
- [NestedRegionRequest](docs/Model/NestedRegionRequest.md)
- [NestedSiteGroup](docs/Model/NestedSiteGroup.md)
- [NestedSiteGroupRequest](docs/Model/NestedSiteGroupRequest.md)
- [NestedTag](docs/Model/NestedTag.md)
- [NestedTagRequest](docs/Model/NestedTagRequest.md)
- [NestedTenantGroup](docs/Model/NestedTenantGroup.md)
- [NestedTenantGroupRequest](docs/Model/NestedTenantGroupRequest.md)
- [NestedUser](docs/Model/NestedUser.md)
- [NestedVMInterface](docs/Model/NestedVMInterface.md)
- [NestedVMInterfaceRequest](docs/Model/NestedVMInterfaceRequest.md)
- [NestedVirtualMachine](docs/Model/NestedVirtualMachine.md)
- [NestedVirtualMachineRequest](docs/Model/NestedVirtualMachineRequest.md)
- [NestedWirelessLANGroup](docs/Model/NestedWirelessLANGroup.md)
- [NestedWirelessLANGroupRequest](docs/Model/NestedWirelessLANGroupRequest.md)
- [NestedWirelessLink](docs/Model/NestedWirelessLink.md)
- [NestedWirelessLinkRequest](docs/Model/NestedWirelessLinkRequest.md)
- [Notification](docs/Model/Notification.md)
- [NotificationGroup](docs/Model/NotificationGroup.md)
- [NotificationGroupRequest](docs/Model/NotificationGroupRequest.md)
- [NotificationRequest](docs/Model/NotificationRequest.md)
- [ObjectChange](docs/Model/ObjectChange.md)
- [ObjectChangeAction](docs/Model/ObjectChangeAction.md)
- [ObjectPermission](docs/Model/ObjectPermission.md)
- [ObjectPermissionRequest](docs/Model/ObjectPermissionRequest.md)
- [ObjectType](docs/Model/ObjectType.md)
- [PaginatedASNList](docs/Model/PaginatedASNList.md)
- [PaginatedASNRangeList](docs/Model/PaginatedASNRangeList.md)
- [PaginatedAggregateList](docs/Model/PaginatedAggregateList.md)
- [PaginatedBookmarkList](docs/Model/PaginatedBookmarkList.md)
- [PaginatedCableList](docs/Model/PaginatedCableList.md)
- [PaginatedCableTerminationList](docs/Model/PaginatedCableTerminationList.md)
- [PaginatedCircuitGroupAssignmentList](docs/Model/PaginatedCircuitGroupAssignmentList.md)
- [PaginatedCircuitGroupList](docs/Model/PaginatedCircuitGroupList.md)
- [PaginatedCircuitList](docs/Model/PaginatedCircuitList.md)
- [PaginatedCircuitTerminationList](docs/Model/PaginatedCircuitTerminationList.md)
- [PaginatedCircuitTypeList](docs/Model/PaginatedCircuitTypeList.md)
- [PaginatedClusterGroupList](docs/Model/PaginatedClusterGroupList.md)
- [PaginatedClusterList](docs/Model/PaginatedClusterList.md)
- [PaginatedClusterTypeList](docs/Model/PaginatedClusterTypeList.md)
- [PaginatedConfigContextList](docs/Model/PaginatedConfigContextList.md)
- [PaginatedConfigTemplateList](docs/Model/PaginatedConfigTemplateList.md)
- [PaginatedConsolePortList](docs/Model/PaginatedConsolePortList.md)
- [PaginatedConsolePortTemplateList](docs/Model/PaginatedConsolePortTemplateList.md)
- [PaginatedConsoleServerPortList](docs/Model/PaginatedConsoleServerPortList.md)
- [PaginatedConsoleServerPortTemplateList](docs/Model/PaginatedConsoleServerPortTemplateList.md)
- [PaginatedContactAssignmentList](docs/Model/PaginatedContactAssignmentList.md)
- [PaginatedContactGroupList](docs/Model/PaginatedContactGroupList.md)
- [PaginatedContactList](docs/Model/PaginatedContactList.md)
- [PaginatedContactRoleList](docs/Model/PaginatedContactRoleList.md)
- [PaginatedCustomFieldChoiceSetList](docs/Model/PaginatedCustomFieldChoiceSetList.md)
- [PaginatedCustomFieldList](docs/Model/PaginatedCustomFieldList.md)
- [PaginatedCustomLinkList](docs/Model/PaginatedCustomLinkList.md)
- [PaginatedDataFileList](docs/Model/PaginatedDataFileList.md)
- [PaginatedDataSourceList](docs/Model/PaginatedDataSourceList.md)
- [PaginatedDeviceBayList](docs/Model/PaginatedDeviceBayList.md)
- [PaginatedDeviceBayTemplateList](docs/Model/PaginatedDeviceBayTemplateList.md)
- [PaginatedDeviceRoleList](docs/Model/PaginatedDeviceRoleList.md)
- [PaginatedDeviceTypeList](docs/Model/PaginatedDeviceTypeList.md)
- [PaginatedDeviceWithConfigContextList](docs/Model/PaginatedDeviceWithConfigContextList.md)
- [PaginatedEventRuleList](docs/Model/PaginatedEventRuleList.md)
- [PaginatedExportTemplateList](docs/Model/PaginatedExportTemplateList.md)
- [PaginatedFHRPGroupAssignmentList](docs/Model/PaginatedFHRPGroupAssignmentList.md)
- [PaginatedFHRPGroupList](docs/Model/PaginatedFHRPGroupList.md)
- [PaginatedFrontPortList](docs/Model/PaginatedFrontPortList.md)
- [PaginatedFrontPortTemplateList](docs/Model/PaginatedFrontPortTemplateList.md)
- [PaginatedGroupList](docs/Model/PaginatedGroupList.md)
- [PaginatedIKEPolicyList](docs/Model/PaginatedIKEPolicyList.md)
- [PaginatedIKEProposalList](docs/Model/PaginatedIKEProposalList.md)
- [PaginatedIPAddressList](docs/Model/PaginatedIPAddressList.md)
- [PaginatedIPRangeList](docs/Model/PaginatedIPRangeList.md)
- [PaginatedIPSecPolicyList](docs/Model/PaginatedIPSecPolicyList.md)
- [PaginatedIPSecProfileList](docs/Model/PaginatedIPSecProfileList.md)
- [PaginatedIPSecProposalList](docs/Model/PaginatedIPSecProposalList.md)
- [PaginatedImageAttachmentList](docs/Model/PaginatedImageAttachmentList.md)
- [PaginatedInterfaceList](docs/Model/PaginatedInterfaceList.md)
- [PaginatedInterfaceTemplateList](docs/Model/PaginatedInterfaceTemplateList.md)
- [PaginatedInventoryItemList](docs/Model/PaginatedInventoryItemList.md)
- [PaginatedInventoryItemRoleList](docs/Model/PaginatedInventoryItemRoleList.md)
- [PaginatedInventoryItemTemplateList](docs/Model/PaginatedInventoryItemTemplateList.md)
- [PaginatedJobList](docs/Model/PaginatedJobList.md)
- [PaginatedJournalEntryList](docs/Model/PaginatedJournalEntryList.md)
- [PaginatedL2VPNList](docs/Model/PaginatedL2VPNList.md)
- [PaginatedL2VPNTerminationList](docs/Model/PaginatedL2VPNTerminationList.md)
- [PaginatedLocationList](docs/Model/PaginatedLocationList.md)
- [PaginatedManufacturerList](docs/Model/PaginatedManufacturerList.md)
- [PaginatedModuleBayList](docs/Model/PaginatedModuleBayList.md)
- [PaginatedModuleBayTemplateList](docs/Model/PaginatedModuleBayTemplateList.md)
- [PaginatedModuleList](docs/Model/PaginatedModuleList.md)
- [PaginatedModuleTypeList](docs/Model/PaginatedModuleTypeList.md)
- [PaginatedNotificationGroupList](docs/Model/PaginatedNotificationGroupList.md)
- [PaginatedNotificationList](docs/Model/PaginatedNotificationList.md)
- [PaginatedObjectChangeList](docs/Model/PaginatedObjectChangeList.md)
- [PaginatedObjectPermissionList](docs/Model/PaginatedObjectPermissionList.md)
- [PaginatedObjectTypeList](docs/Model/PaginatedObjectTypeList.md)
- [PaginatedPlatformList](docs/Model/PaginatedPlatformList.md)
- [PaginatedPowerFeedList](docs/Model/PaginatedPowerFeedList.md)
- [PaginatedPowerOutletList](docs/Model/PaginatedPowerOutletList.md)
- [PaginatedPowerOutletTemplateList](docs/Model/PaginatedPowerOutletTemplateList.md)
- [PaginatedPowerPanelList](docs/Model/PaginatedPowerPanelList.md)
- [PaginatedPowerPortList](docs/Model/PaginatedPowerPortList.md)
- [PaginatedPowerPortTemplateList](docs/Model/PaginatedPowerPortTemplateList.md)
- [PaginatedPrefixList](docs/Model/PaginatedPrefixList.md)
- [PaginatedProviderAccountList](docs/Model/PaginatedProviderAccountList.md)
- [PaginatedProviderList](docs/Model/PaginatedProviderList.md)
- [PaginatedProviderNetworkList](docs/Model/PaginatedProviderNetworkList.md)
- [PaginatedRIRList](docs/Model/PaginatedRIRList.md)
- [PaginatedRackList](docs/Model/PaginatedRackList.md)
- [PaginatedRackReservationList](docs/Model/PaginatedRackReservationList.md)
- [PaginatedRackRoleList](docs/Model/PaginatedRackRoleList.md)
- [PaginatedRackTypeList](docs/Model/PaginatedRackTypeList.md)
- [PaginatedRackUnitList](docs/Model/PaginatedRackUnitList.md)
- [PaginatedRearPortList](docs/Model/PaginatedRearPortList.md)
- [PaginatedRearPortTemplateList](docs/Model/PaginatedRearPortTemplateList.md)
- [PaginatedRegionList](docs/Model/PaginatedRegionList.md)
- [PaginatedRoleList](docs/Model/PaginatedRoleList.md)
- [PaginatedRouteTargetList](docs/Model/PaginatedRouteTargetList.md)
- [PaginatedSavedFilterList](docs/Model/PaginatedSavedFilterList.md)
- [PaginatedScriptList](docs/Model/PaginatedScriptList.md)
- [PaginatedServiceList](docs/Model/PaginatedServiceList.md)
- [PaginatedServiceTemplateList](docs/Model/PaginatedServiceTemplateList.md)
- [PaginatedSiteGroupList](docs/Model/PaginatedSiteGroupList.md)
- [PaginatedSiteList](docs/Model/PaginatedSiteList.md)
- [PaginatedSubscriptionList](docs/Model/PaginatedSubscriptionList.md)
- [PaginatedTagList](docs/Model/PaginatedTagList.md)
- [PaginatedTenantGroupList](docs/Model/PaginatedTenantGroupList.md)
- [PaginatedTenantList](docs/Model/PaginatedTenantList.md)
- [PaginatedTokenList](docs/Model/PaginatedTokenList.md)
- [PaginatedTunnelGroupList](docs/Model/PaginatedTunnelGroupList.md)
- [PaginatedTunnelList](docs/Model/PaginatedTunnelList.md)
- [PaginatedTunnelTerminationList](docs/Model/PaginatedTunnelTerminationList.md)
- [PaginatedUserList](docs/Model/PaginatedUserList.md)
- [PaginatedVLANGroupList](docs/Model/PaginatedVLANGroupList.md)
- [PaginatedVLANList](docs/Model/PaginatedVLANList.md)
- [PaginatedVMInterfaceList](docs/Model/PaginatedVMInterfaceList.md)
- [PaginatedVRFList](docs/Model/PaginatedVRFList.md)
- [PaginatedVirtualChassisList](docs/Model/PaginatedVirtualChassisList.md)
- [PaginatedVirtualDeviceContextList](docs/Model/PaginatedVirtualDeviceContextList.md)
- [PaginatedVirtualDiskList](docs/Model/PaginatedVirtualDiskList.md)
- [PaginatedVirtualMachineWithConfigContextList](docs/Model/PaginatedVirtualMachineWithConfigContextList.md)
- [PaginatedWebhookList](docs/Model/PaginatedWebhookList.md)
- [PaginatedWirelessLANGroupList](docs/Model/PaginatedWirelessLANGroupList.md)
- [PaginatedWirelessLANList](docs/Model/PaginatedWirelessLANList.md)
- [PaginatedWirelessLinkList](docs/Model/PaginatedWirelessLinkList.md)
- [PatchedASNRangeRequest](docs/Model/PatchedASNRangeRequest.md)
- [PatchedASNRequest](docs/Model/PatchedASNRequest.md)
- [PatchedBookmarkRequest](docs/Model/PatchedBookmarkRequest.md)
- [PatchedCableTerminationRequest](docs/Model/PatchedCableTerminationRequest.md)
- [PatchedCircuitGroupRequest](docs/Model/PatchedCircuitGroupRequest.md)
- [PatchedCircuitTerminationRequest](docs/Model/PatchedCircuitTerminationRequest.md)
- [PatchedCircuitTypeRequest](docs/Model/PatchedCircuitTypeRequest.md)
- [PatchedClusterGroupRequest](docs/Model/PatchedClusterGroupRequest.md)
- [PatchedClusterTypeRequest](docs/Model/PatchedClusterTypeRequest.md)
- [PatchedConfigContextRequest](docs/Model/PatchedConfigContextRequest.md)
- [PatchedConfigTemplateRequest](docs/Model/PatchedConfigTemplateRequest.md)
- [PatchedContactRequest](docs/Model/PatchedContactRequest.md)
- [PatchedContactRoleRequest](docs/Model/PatchedContactRoleRequest.md)
- [PatchedCustomLinkRequest](docs/Model/PatchedCustomLinkRequest.md)
- [PatchedDashboardRequest](docs/Model/PatchedDashboardRequest.md)
- [PatchedDeviceBayRequest](docs/Model/PatchedDeviceBayRequest.md)
- [PatchedDeviceBayTemplateRequest](docs/Model/PatchedDeviceBayTemplateRequest.md)
- [PatchedDeviceRoleRequest](docs/Model/PatchedDeviceRoleRequest.md)
- [PatchedExportTemplateRequest](docs/Model/PatchedExportTemplateRequest.md)
- [PatchedFHRPGroupAssignmentRequest](docs/Model/PatchedFHRPGroupAssignmentRequest.md)
- [PatchedFHRPGroupRequest](docs/Model/PatchedFHRPGroupRequest.md)
- [PatchedGroupRequest](docs/Model/PatchedGroupRequest.md)
- [PatchedImageAttachmentRequest](docs/Model/PatchedImageAttachmentRequest.md)
- [PatchedInventoryItemRequest](docs/Model/PatchedInventoryItemRequest.md)
- [PatchedInventoryItemRoleRequest](docs/Model/PatchedInventoryItemRoleRequest.md)
- [PatchedInventoryItemTemplateRequest](docs/Model/PatchedInventoryItemTemplateRequest.md)
- [PatchedL2VPNTerminationRequest](docs/Model/PatchedL2VPNTerminationRequest.md)
- [PatchedManufacturerRequest](docs/Model/PatchedManufacturerRequest.md)
- [PatchedModuleBayRequest](docs/Model/PatchedModuleBayRequest.md)
- [PatchedModuleBayTemplateRequest](docs/Model/PatchedModuleBayTemplateRequest.md)
- [PatchedNotificationGroupRequest](docs/Model/PatchedNotificationGroupRequest.md)
- [PatchedNotificationRequest](docs/Model/PatchedNotificationRequest.md)
- [PatchedObjectPermissionRequest](docs/Model/PatchedObjectPermissionRequest.md)
- [PatchedPlatformRequest](docs/Model/PatchedPlatformRequest.md)
- [PatchedPowerPanelRequest](docs/Model/PatchedPowerPanelRequest.md)
- [PatchedProviderAccountRequest](docs/Model/PatchedProviderAccountRequest.md)
- [PatchedProviderNetworkRequest](docs/Model/PatchedProviderNetworkRequest.md)
- [PatchedProviderRequest](docs/Model/PatchedProviderRequest.md)
- [PatchedRIRRequest](docs/Model/PatchedRIRRequest.md)
- [PatchedRackReservationRequest](docs/Model/PatchedRackReservationRequest.md)
- [PatchedRackRoleRequest](docs/Model/PatchedRackRoleRequest.md)
- [PatchedRoleRequest](docs/Model/PatchedRoleRequest.md)
- [PatchedRouteTargetRequest](docs/Model/PatchedRouteTargetRequest.md)
- [PatchedSavedFilterRequest](docs/Model/PatchedSavedFilterRequest.md)
- [PatchedScriptInputRequest](docs/Model/PatchedScriptInputRequest.md)
- [PatchedSubscriptionRequest](docs/Model/PatchedSubscriptionRequest.md)
- [PatchedTagRequest](docs/Model/PatchedTagRequest.md)
- [PatchedTenantRequest](docs/Model/PatchedTenantRequest.md)
- [PatchedTokenRequest](docs/Model/PatchedTokenRequest.md)
- [PatchedTunnelGroupRequest](docs/Model/PatchedTunnelGroupRequest.md)
- [PatchedUserRequest](docs/Model/PatchedUserRequest.md)
- [PatchedVLANGroupRequest](docs/Model/PatchedVLANGroupRequest.md)
- [PatchedVRFRequest](docs/Model/PatchedVRFRequest.md)
- [PatchedVirtualDiskRequest](docs/Model/PatchedVirtualDiskRequest.md)
- [PatchedWebhookRequest](docs/Model/PatchedWebhookRequest.md)
- [PatchedWritableAggregateRequest](docs/Model/PatchedWritableAggregateRequest.md)
- [PatchedWritableCableRequest](docs/Model/PatchedWritableCableRequest.md)
- [PatchedWritableCircuitGroupAssignmentRequest](docs/Model/PatchedWritableCircuitGroupAssignmentRequest.md)
- [PatchedWritableCircuitRequest](docs/Model/PatchedWritableCircuitRequest.md)
- [PatchedWritableClusterRequest](docs/Model/PatchedWritableClusterRequest.md)
- [PatchedWritableConsolePortRequest](docs/Model/PatchedWritableConsolePortRequest.md)
- [PatchedWritableConsolePortTemplateRequest](docs/Model/PatchedWritableConsolePortTemplateRequest.md)
- [PatchedWritableConsoleServerPortRequest](docs/Model/PatchedWritableConsoleServerPortRequest.md)
- [PatchedWritableConsoleServerPortTemplateRequest](docs/Model/PatchedWritableConsoleServerPortTemplateRequest.md)
- [PatchedWritableContactAssignmentRequest](docs/Model/PatchedWritableContactAssignmentRequest.md)
- [PatchedWritableContactGroupRequest](docs/Model/PatchedWritableContactGroupRequest.md)
- [PatchedWritableCustomFieldChoiceSetRequest](docs/Model/PatchedWritableCustomFieldChoiceSetRequest.md)
- [PatchedWritableCustomFieldRequest](docs/Model/PatchedWritableCustomFieldRequest.md)
- [PatchedWritableDataSourceRequest](docs/Model/PatchedWritableDataSourceRequest.md)
- [PatchedWritableDeviceTypeRequest](docs/Model/PatchedWritableDeviceTypeRequest.md)
- [PatchedWritableDeviceWithConfigContextRequest](docs/Model/PatchedWritableDeviceWithConfigContextRequest.md)
- [PatchedWritableEventRuleRequest](docs/Model/PatchedWritableEventRuleRequest.md)
- [PatchedWritableFrontPortRequest](docs/Model/PatchedWritableFrontPortRequest.md)
- [PatchedWritableFrontPortTemplateRequest](docs/Model/PatchedWritableFrontPortTemplateRequest.md)
- [PatchedWritableIKEPolicyRequest](docs/Model/PatchedWritableIKEPolicyRequest.md)
- [PatchedWritableIKEProposalRequest](docs/Model/PatchedWritableIKEProposalRequest.md)
- [PatchedWritableIPAddressRequest](docs/Model/PatchedWritableIPAddressRequest.md)
- [PatchedWritableIPRangeRequest](docs/Model/PatchedWritableIPRangeRequest.md)
- [PatchedWritableIPSecPolicyRequest](docs/Model/PatchedWritableIPSecPolicyRequest.md)
- [PatchedWritableIPSecProfileRequest](docs/Model/PatchedWritableIPSecProfileRequest.md)
- [PatchedWritableIPSecProposalRequest](docs/Model/PatchedWritableIPSecProposalRequest.md)
- [PatchedWritableInterfaceRequest](docs/Model/PatchedWritableInterfaceRequest.md)
- [PatchedWritableInterfaceTemplateRequest](docs/Model/PatchedWritableInterfaceTemplateRequest.md)
- [PatchedWritableJournalEntryRequest](docs/Model/PatchedWritableJournalEntryRequest.md)
- [PatchedWritableL2VPNRequest](docs/Model/PatchedWritableL2VPNRequest.md)
- [PatchedWritableLocationRequest](docs/Model/PatchedWritableLocationRequest.md)
- [PatchedWritableModuleRequest](docs/Model/PatchedWritableModuleRequest.md)
- [PatchedWritableModuleTypeRequest](docs/Model/PatchedWritableModuleTypeRequest.md)
- [PatchedWritablePowerFeedRequest](docs/Model/PatchedWritablePowerFeedRequest.md)
- [PatchedWritablePowerOutletRequest](docs/Model/PatchedWritablePowerOutletRequest.md)
- [PatchedWritablePowerOutletTemplateRequest](docs/Model/PatchedWritablePowerOutletTemplateRequest.md)
- [PatchedWritablePowerPortRequest](docs/Model/PatchedWritablePowerPortRequest.md)
- [PatchedWritablePowerPortTemplateRequest](docs/Model/PatchedWritablePowerPortTemplateRequest.md)
- [PatchedWritablePrefixRequest](docs/Model/PatchedWritablePrefixRequest.md)
- [PatchedWritableRackRequest](docs/Model/PatchedWritableRackRequest.md)
- [PatchedWritableRackTypeRequest](docs/Model/PatchedWritableRackTypeRequest.md)
- [PatchedWritableRearPortRequest](docs/Model/PatchedWritableRearPortRequest.md)
- [PatchedWritableRearPortTemplateRequest](docs/Model/PatchedWritableRearPortTemplateRequest.md)
- [PatchedWritableRegionRequest](docs/Model/PatchedWritableRegionRequest.md)
- [PatchedWritableServiceRequest](docs/Model/PatchedWritableServiceRequest.md)
- [PatchedWritableServiceTemplateRequest](docs/Model/PatchedWritableServiceTemplateRequest.md)
- [PatchedWritableSiteGroupRequest](docs/Model/PatchedWritableSiteGroupRequest.md)
- [PatchedWritableSiteRequest](docs/Model/PatchedWritableSiteRequest.md)
- [PatchedWritableTenantGroupRequest](docs/Model/PatchedWritableTenantGroupRequest.md)
- [PatchedWritableTunnelRequest](docs/Model/PatchedWritableTunnelRequest.md)
- [PatchedWritableTunnelTerminationRequest](docs/Model/PatchedWritableTunnelTerminationRequest.md)
- [PatchedWritableVLANRequest](docs/Model/PatchedWritableVLANRequest.md)
- [PatchedWritableVMInterfaceRequest](docs/Model/PatchedWritableVMInterfaceRequest.md)
- [PatchedWritableVirtualChassisRequest](docs/Model/PatchedWritableVirtualChassisRequest.md)
- [PatchedWritableVirtualDeviceContextRequest](docs/Model/PatchedWritableVirtualDeviceContextRequest.md)
- [PatchedWritableVirtualMachineWithConfigContextRequest](docs/Model/PatchedWritableVirtualMachineWithConfigContextRequest.md)
- [PatchedWritableWirelessLANGroupRequest](docs/Model/PatchedWritableWirelessLANGroupRequest.md)
- [PatchedWritableWirelessLANRequest](docs/Model/PatchedWritableWirelessLANRequest.md)
- [PatchedWritableWirelessLinkRequest](docs/Model/PatchedWritableWirelessLinkRequest.md)
- [Platform](docs/Model/Platform.md)
- [PlatformRequest](docs/Model/PlatformRequest.md)
- [PowerFeed](docs/Model/PowerFeed.md)
- [PowerFeedPhase](docs/Model/PowerFeedPhase.md)
- [PowerFeedRequest](docs/Model/PowerFeedRequest.md)
- [PowerFeedStatus](docs/Model/PowerFeedStatus.md)
- [PowerFeedSupply](docs/Model/PowerFeedSupply.md)
- [PowerFeedType](docs/Model/PowerFeedType.md)
- [PowerOutlet](docs/Model/PowerOutlet.md)
- [PowerOutletFeedLeg](docs/Model/PowerOutletFeedLeg.md)
- [PowerOutletRequest](docs/Model/PowerOutletRequest.md)
- [PowerOutletTemplate](docs/Model/PowerOutletTemplate.md)
- [PowerOutletTemplateRequest](docs/Model/PowerOutletTemplateRequest.md)
- [PowerOutletType](docs/Model/PowerOutletType.md)
- [PowerPanel](docs/Model/PowerPanel.md)
- [PowerPanelRequest](docs/Model/PowerPanelRequest.md)
- [PowerPort](docs/Model/PowerPort.md)
- [PowerPortRequest](docs/Model/PowerPortRequest.md)
- [PowerPortTemplate](docs/Model/PowerPortTemplate.md)
- [PowerPortTemplateRequest](docs/Model/PowerPortTemplateRequest.md)
- [PowerPortType](docs/Model/PowerPortType.md)
- [Prefix](docs/Model/Prefix.md)
- [PrefixRequest](docs/Model/PrefixRequest.md)
- [PrefixStatus](docs/Model/PrefixStatus.md)
- [Provider](docs/Model/Provider.md)
- [ProviderAccount](docs/Model/ProviderAccount.md)
- [ProviderAccountRequest](docs/Model/ProviderAccountRequest.md)
- [ProviderNetwork](docs/Model/ProviderNetwork.md)
- [ProviderNetworkRequest](docs/Model/ProviderNetworkRequest.md)
- [ProviderRequest](docs/Model/ProviderRequest.md)
- [RIR](docs/Model/RIR.md)
- [RIRRequest](docs/Model/RIRRequest.md)
- [Rack](docs/Model/Rack.md)
- [RackAirflow](docs/Model/RackAirflow.md)
- [RackFormFactor](docs/Model/RackFormFactor.md)
- [RackOuterUnit](docs/Model/RackOuterUnit.md)
- [RackRequest](docs/Model/RackRequest.md)
- [RackReservation](docs/Model/RackReservation.md)
- [RackReservationRequest](docs/Model/RackReservationRequest.md)
- [RackRole](docs/Model/RackRole.md)
- [RackRoleRequest](docs/Model/RackRoleRequest.md)
- [RackStatus](docs/Model/RackStatus.md)
- [RackType](docs/Model/RackType.md)
- [RackTypeRequest](docs/Model/RackTypeRequest.md)
- [RackUnit](docs/Model/RackUnit.md)
- [RackUnitFace](docs/Model/RackUnitFace.md)
- [RackWidth](docs/Model/RackWidth.md)
- [RearPort](docs/Model/RearPort.md)
- [RearPortRequest](docs/Model/RearPortRequest.md)
- [RearPortTemplate](docs/Model/RearPortTemplate.md)
- [RearPortTemplateRequest](docs/Model/RearPortTemplateRequest.md)
- [Region](docs/Model/Region.md)
- [RegionRequest](docs/Model/RegionRequest.md)
- [Role](docs/Model/Role.md)
- [RoleRequest](docs/Model/RoleRequest.md)
- [RouteTarget](docs/Model/RouteTarget.md)
- [RouteTargetRequest](docs/Model/RouteTargetRequest.md)
- [SavedFilter](docs/Model/SavedFilter.md)
- [SavedFilterRequest](docs/Model/SavedFilterRequest.md)
- [Script](docs/Model/Script.md)
- [ScriptInputRequest](docs/Model/ScriptInputRequest.md)
- [Service](docs/Model/Service.md)
- [ServiceProtocol](docs/Model/ServiceProtocol.md)
- [ServiceRequest](docs/Model/ServiceRequest.md)
- [ServiceTemplate](docs/Model/ServiceTemplate.md)
- [ServiceTemplateRequest](docs/Model/ServiceTemplateRequest.md)
- [Site](docs/Model/Site.md)
- [SiteGroup](docs/Model/SiteGroup.md)
- [SiteGroupRequest](docs/Model/SiteGroupRequest.md)
- [SiteRequest](docs/Model/SiteRequest.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionRequest](docs/Model/SubscriptionRequest.md)
- [Tag](docs/Model/Tag.md)
- [TagRequest](docs/Model/TagRequest.md)
- [Tenant](docs/Model/Tenant.md)
- [TenantGroup](docs/Model/TenantGroup.md)
- [TenantGroupRequest](docs/Model/TenantGroupRequest.md)
- [TenantRequest](docs/Model/TenantRequest.md)
- [Token](docs/Model/Token.md)
- [TokenProvision](docs/Model/TokenProvision.md)
- [TokenProvisionRequest](docs/Model/TokenProvisionRequest.md)
- [TokenRequest](docs/Model/TokenRequest.md)
- [Tunnel](docs/Model/Tunnel.md)
- [TunnelEncapsulation](docs/Model/TunnelEncapsulation.md)
- [TunnelGroup](docs/Model/TunnelGroup.md)
- [TunnelGroupRequest](docs/Model/TunnelGroupRequest.md)
- [TunnelRequest](docs/Model/TunnelRequest.md)
- [TunnelStatus](docs/Model/TunnelStatus.md)
- [TunnelTermination](docs/Model/TunnelTermination.md)
- [TunnelTerminationRequest](docs/Model/TunnelTerminationRequest.md)
- [TunnelTerminationRole](docs/Model/TunnelTerminationRole.md)
- [User](docs/Model/User.md)
- [UserRequest](docs/Model/UserRequest.md)
- [VLAN](docs/Model/VLAN.md)
- [VLANGroup](docs/Model/VLANGroup.md)
- [VLANGroupRequest](docs/Model/VLANGroupRequest.md)
- [VLANRequest](docs/Model/VLANRequest.md)
- [VMInterface](docs/Model/VMInterface.md)
- [VMInterfaceRequest](docs/Model/VMInterfaceRequest.md)
- [VRF](docs/Model/VRF.md)
- [VRFRequest](docs/Model/VRFRequest.md)
- [VirtualChassis](docs/Model/VirtualChassis.md)
- [VirtualChassisRequest](docs/Model/VirtualChassisRequest.md)
- [VirtualDeviceContext](docs/Model/VirtualDeviceContext.md)
- [VirtualDeviceContextRequest](docs/Model/VirtualDeviceContextRequest.md)
- [VirtualDeviceContextStatus](docs/Model/VirtualDeviceContextStatus.md)
- [VirtualDisk](docs/Model/VirtualDisk.md)
- [VirtualDiskRequest](docs/Model/VirtualDiskRequest.md)
- [VirtualMachineWithConfigContext](docs/Model/VirtualMachineWithConfigContext.md)
- [VirtualMachineWithConfigContextRequest](docs/Model/VirtualMachineWithConfigContextRequest.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookRequest](docs/Model/WebhookRequest.md)
- [WirelessLAN](docs/Model/WirelessLAN.md)
- [WirelessLANAuthCipher](docs/Model/WirelessLANAuthCipher.md)
- [WirelessLANAuthType](docs/Model/WirelessLANAuthType.md)
- [WirelessLANGroup](docs/Model/WirelessLANGroup.md)
- [WirelessLANGroupRequest](docs/Model/WirelessLANGroupRequest.md)
- [WirelessLANRequest](docs/Model/WirelessLANRequest.md)
- [WirelessLANStatus](docs/Model/WirelessLANStatus.md)
- [WirelessLink](docs/Model/WirelessLink.md)
- [WirelessLinkDistanceUnit](docs/Model/WirelessLinkDistanceUnit.md)
- [WirelessLinkRequest](docs/Model/WirelessLinkRequest.md)
- [WritableAggregateRequest](docs/Model/WritableAggregateRequest.md)
- [WritableCableRequest](docs/Model/WritableCableRequest.md)
- [WritableCircuitGroupAssignmentRequest](docs/Model/WritableCircuitGroupAssignmentRequest.md)
- [WritableCircuitRequest](docs/Model/WritableCircuitRequest.md)
- [WritableClusterRequest](docs/Model/WritableClusterRequest.md)
- [WritableConsolePortRequest](docs/Model/WritableConsolePortRequest.md)
- [WritableConsolePortTemplateRequest](docs/Model/WritableConsolePortTemplateRequest.md)
- [WritableConsoleServerPortRequest](docs/Model/WritableConsoleServerPortRequest.md)
- [WritableConsoleServerPortTemplateRequest](docs/Model/WritableConsoleServerPortTemplateRequest.md)
- [WritableContactAssignmentRequest](docs/Model/WritableContactAssignmentRequest.md)
- [WritableContactGroupRequest](docs/Model/WritableContactGroupRequest.md)
- [WritableCustomFieldChoiceSetRequest](docs/Model/WritableCustomFieldChoiceSetRequest.md)
- [WritableCustomFieldRequest](docs/Model/WritableCustomFieldRequest.md)
- [WritableDataSourceRequest](docs/Model/WritableDataSourceRequest.md)
- [WritableDeviceTypeRequest](docs/Model/WritableDeviceTypeRequest.md)
- [WritableDeviceWithConfigContextRequest](docs/Model/WritableDeviceWithConfigContextRequest.md)
- [WritableEventRuleRequest](docs/Model/WritableEventRuleRequest.md)
- [WritableFrontPortRequest](docs/Model/WritableFrontPortRequest.md)
- [WritableFrontPortTemplateRequest](docs/Model/WritableFrontPortTemplateRequest.md)
- [WritableIKEPolicyRequest](docs/Model/WritableIKEPolicyRequest.md)
- [WritableIKEProposalRequest](docs/Model/WritableIKEProposalRequest.md)
- [WritableIPAddressRequest](docs/Model/WritableIPAddressRequest.md)
- [WritableIPRangeRequest](docs/Model/WritableIPRangeRequest.md)
- [WritableIPSecPolicyRequest](docs/Model/WritableIPSecPolicyRequest.md)
- [WritableIPSecProfileRequest](docs/Model/WritableIPSecProfileRequest.md)
- [WritableIPSecProposalRequest](docs/Model/WritableIPSecProposalRequest.md)
- [WritableInterfaceRequest](docs/Model/WritableInterfaceRequest.md)
- [WritableInterfaceTemplateRequest](docs/Model/WritableInterfaceTemplateRequest.md)
- [WritableJournalEntryRequest](docs/Model/WritableJournalEntryRequest.md)
- [WritableL2VPNRequest](docs/Model/WritableL2VPNRequest.md)
- [WritableLocationRequest](docs/Model/WritableLocationRequest.md)
- [WritableModuleRequest](docs/Model/WritableModuleRequest.md)
- [WritableModuleTypeRequest](docs/Model/WritableModuleTypeRequest.md)
- [WritablePowerFeedRequest](docs/Model/WritablePowerFeedRequest.md)
- [WritablePowerOutletRequest](docs/Model/WritablePowerOutletRequest.md)
- [WritablePowerOutletTemplateRequest](docs/Model/WritablePowerOutletTemplateRequest.md)
- [WritablePowerPortRequest](docs/Model/WritablePowerPortRequest.md)
- [WritablePowerPortTemplateRequest](docs/Model/WritablePowerPortTemplateRequest.md)
- [WritablePrefixRequest](docs/Model/WritablePrefixRequest.md)
- [WritableRackRequest](docs/Model/WritableRackRequest.md)
- [WritableRackTypeRequest](docs/Model/WritableRackTypeRequest.md)
- [WritableRearPortRequest](docs/Model/WritableRearPortRequest.md)
- [WritableRearPortTemplateRequest](docs/Model/WritableRearPortTemplateRequest.md)
- [WritableRegionRequest](docs/Model/WritableRegionRequest.md)
- [WritableServiceRequest](docs/Model/WritableServiceRequest.md)
- [WritableServiceTemplateRequest](docs/Model/WritableServiceTemplateRequest.md)
- [WritableSiteGroupRequest](docs/Model/WritableSiteGroupRequest.md)
- [WritableSiteRequest](docs/Model/WritableSiteRequest.md)
- [WritableTenantGroupRequest](docs/Model/WritableTenantGroupRequest.md)
- [WritableTunnelRequest](docs/Model/WritableTunnelRequest.md)
- [WritableTunnelTerminationRequest](docs/Model/WritableTunnelTerminationRequest.md)
- [WritableVLANRequest](docs/Model/WritableVLANRequest.md)
- [WritableVMInterfaceRequest](docs/Model/WritableVMInterfaceRequest.md)
- [WritableVirtualChassisRequest](docs/Model/WritableVirtualChassisRequest.md)
- [WritableVirtualDeviceContextRequest](docs/Model/WritableVirtualDeviceContextRequest.md)
- [WritableVirtualMachineWithConfigContextRequest](docs/Model/WritableVirtualMachineWithConfigContextRequest.md)
- [WritableWirelessLANGroupRequest](docs/Model/WritableWirelessLANGroupRequest.md)
- [WritableWirelessLANRequest](docs/Model/WritableWirelessLANRequest.md)
- [WritableWirelessLinkRequest](docs/Model/WritableWirelessLinkRequest.md)

## Authorization

Authentication schemes defined for the API:
### cookieAuth

- **Type**: API key
- **API key parameter name**: sessionid
- **Location**: 


### tokenAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `4.1.1 (4.1)`
    - Generator version: `7.8.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
