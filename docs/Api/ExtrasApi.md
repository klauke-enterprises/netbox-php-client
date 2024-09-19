# OpenAPI\Client\ExtrasApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**extrasBookmarksBulkDestroy()**](ExtrasApi.md#extrasBookmarksBulkDestroy) | **DELETE** /api/extras/bookmarks/ |  |
| [**extrasBookmarksBulkPartialUpdate()**](ExtrasApi.md#extrasBookmarksBulkPartialUpdate) | **PATCH** /api/extras/bookmarks/ |  |
| [**extrasBookmarksBulkUpdate()**](ExtrasApi.md#extrasBookmarksBulkUpdate) | **PUT** /api/extras/bookmarks/ |  |
| [**extrasBookmarksCreate()**](ExtrasApi.md#extrasBookmarksCreate) | **POST** /api/extras/bookmarks/ |  |
| [**extrasBookmarksDestroy()**](ExtrasApi.md#extrasBookmarksDestroy) | **DELETE** /api/extras/bookmarks/{id}/ |  |
| [**extrasBookmarksList()**](ExtrasApi.md#extrasBookmarksList) | **GET** /api/extras/bookmarks/ |  |
| [**extrasBookmarksPartialUpdate()**](ExtrasApi.md#extrasBookmarksPartialUpdate) | **PATCH** /api/extras/bookmarks/{id}/ |  |
| [**extrasBookmarksRetrieve()**](ExtrasApi.md#extrasBookmarksRetrieve) | **GET** /api/extras/bookmarks/{id}/ |  |
| [**extrasBookmarksUpdate()**](ExtrasApi.md#extrasBookmarksUpdate) | **PUT** /api/extras/bookmarks/{id}/ |  |
| [**extrasConfigContextsBulkDestroy()**](ExtrasApi.md#extrasConfigContextsBulkDestroy) | **DELETE** /api/extras/config-contexts/ |  |
| [**extrasConfigContextsBulkPartialUpdate()**](ExtrasApi.md#extrasConfigContextsBulkPartialUpdate) | **PATCH** /api/extras/config-contexts/ |  |
| [**extrasConfigContextsBulkUpdate()**](ExtrasApi.md#extrasConfigContextsBulkUpdate) | **PUT** /api/extras/config-contexts/ |  |
| [**extrasConfigContextsCreate()**](ExtrasApi.md#extrasConfigContextsCreate) | **POST** /api/extras/config-contexts/ |  |
| [**extrasConfigContextsDestroy()**](ExtrasApi.md#extrasConfigContextsDestroy) | **DELETE** /api/extras/config-contexts/{id}/ |  |
| [**extrasConfigContextsList()**](ExtrasApi.md#extrasConfigContextsList) | **GET** /api/extras/config-contexts/ |  |
| [**extrasConfigContextsPartialUpdate()**](ExtrasApi.md#extrasConfigContextsPartialUpdate) | **PATCH** /api/extras/config-contexts/{id}/ |  |
| [**extrasConfigContextsRetrieve()**](ExtrasApi.md#extrasConfigContextsRetrieve) | **GET** /api/extras/config-contexts/{id}/ |  |
| [**extrasConfigContextsSyncCreate()**](ExtrasApi.md#extrasConfigContextsSyncCreate) | **POST** /api/extras/config-contexts/{id}/sync/ |  |
| [**extrasConfigContextsUpdate()**](ExtrasApi.md#extrasConfigContextsUpdate) | **PUT** /api/extras/config-contexts/{id}/ |  |
| [**extrasConfigTemplatesBulkDestroy()**](ExtrasApi.md#extrasConfigTemplatesBulkDestroy) | **DELETE** /api/extras/config-templates/ |  |
| [**extrasConfigTemplatesBulkPartialUpdate()**](ExtrasApi.md#extrasConfigTemplatesBulkPartialUpdate) | **PATCH** /api/extras/config-templates/ |  |
| [**extrasConfigTemplatesBulkUpdate()**](ExtrasApi.md#extrasConfigTemplatesBulkUpdate) | **PUT** /api/extras/config-templates/ |  |
| [**extrasConfigTemplatesCreate()**](ExtrasApi.md#extrasConfigTemplatesCreate) | **POST** /api/extras/config-templates/ |  |
| [**extrasConfigTemplatesDestroy()**](ExtrasApi.md#extrasConfigTemplatesDestroy) | **DELETE** /api/extras/config-templates/{id}/ |  |
| [**extrasConfigTemplatesList()**](ExtrasApi.md#extrasConfigTemplatesList) | **GET** /api/extras/config-templates/ |  |
| [**extrasConfigTemplatesPartialUpdate()**](ExtrasApi.md#extrasConfigTemplatesPartialUpdate) | **PATCH** /api/extras/config-templates/{id}/ |  |
| [**extrasConfigTemplatesRenderCreate()**](ExtrasApi.md#extrasConfigTemplatesRenderCreate) | **POST** /api/extras/config-templates/{id}/render/ |  |
| [**extrasConfigTemplatesRetrieve()**](ExtrasApi.md#extrasConfigTemplatesRetrieve) | **GET** /api/extras/config-templates/{id}/ |  |
| [**extrasConfigTemplatesSyncCreate()**](ExtrasApi.md#extrasConfigTemplatesSyncCreate) | **POST** /api/extras/config-templates/{id}/sync/ |  |
| [**extrasConfigTemplatesUpdate()**](ExtrasApi.md#extrasConfigTemplatesUpdate) | **PUT** /api/extras/config-templates/{id}/ |  |
| [**extrasCustomFieldChoiceSetsBulkDestroy()**](ExtrasApi.md#extrasCustomFieldChoiceSetsBulkDestroy) | **DELETE** /api/extras/custom-field-choice-sets/ |  |
| [**extrasCustomFieldChoiceSetsBulkPartialUpdate()**](ExtrasApi.md#extrasCustomFieldChoiceSetsBulkPartialUpdate) | **PATCH** /api/extras/custom-field-choice-sets/ |  |
| [**extrasCustomFieldChoiceSetsBulkUpdate()**](ExtrasApi.md#extrasCustomFieldChoiceSetsBulkUpdate) | **PUT** /api/extras/custom-field-choice-sets/ |  |
| [**extrasCustomFieldChoiceSetsChoicesRetrieve()**](ExtrasApi.md#extrasCustomFieldChoiceSetsChoicesRetrieve) | **GET** /api/extras/custom-field-choice-sets/{id}/choices/ |  |
| [**extrasCustomFieldChoiceSetsCreate()**](ExtrasApi.md#extrasCustomFieldChoiceSetsCreate) | **POST** /api/extras/custom-field-choice-sets/ |  |
| [**extrasCustomFieldChoiceSetsDestroy()**](ExtrasApi.md#extrasCustomFieldChoiceSetsDestroy) | **DELETE** /api/extras/custom-field-choice-sets/{id}/ |  |
| [**extrasCustomFieldChoiceSetsList()**](ExtrasApi.md#extrasCustomFieldChoiceSetsList) | **GET** /api/extras/custom-field-choice-sets/ |  |
| [**extrasCustomFieldChoiceSetsPartialUpdate()**](ExtrasApi.md#extrasCustomFieldChoiceSetsPartialUpdate) | **PATCH** /api/extras/custom-field-choice-sets/{id}/ |  |
| [**extrasCustomFieldChoiceSetsRetrieve()**](ExtrasApi.md#extrasCustomFieldChoiceSetsRetrieve) | **GET** /api/extras/custom-field-choice-sets/{id}/ |  |
| [**extrasCustomFieldChoiceSetsUpdate()**](ExtrasApi.md#extrasCustomFieldChoiceSetsUpdate) | **PUT** /api/extras/custom-field-choice-sets/{id}/ |  |
| [**extrasCustomFieldsBulkDestroy()**](ExtrasApi.md#extrasCustomFieldsBulkDestroy) | **DELETE** /api/extras/custom-fields/ |  |
| [**extrasCustomFieldsBulkPartialUpdate()**](ExtrasApi.md#extrasCustomFieldsBulkPartialUpdate) | **PATCH** /api/extras/custom-fields/ |  |
| [**extrasCustomFieldsBulkUpdate()**](ExtrasApi.md#extrasCustomFieldsBulkUpdate) | **PUT** /api/extras/custom-fields/ |  |
| [**extrasCustomFieldsCreate()**](ExtrasApi.md#extrasCustomFieldsCreate) | **POST** /api/extras/custom-fields/ |  |
| [**extrasCustomFieldsDestroy()**](ExtrasApi.md#extrasCustomFieldsDestroy) | **DELETE** /api/extras/custom-fields/{id}/ |  |
| [**extrasCustomFieldsList()**](ExtrasApi.md#extrasCustomFieldsList) | **GET** /api/extras/custom-fields/ |  |
| [**extrasCustomFieldsPartialUpdate()**](ExtrasApi.md#extrasCustomFieldsPartialUpdate) | **PATCH** /api/extras/custom-fields/{id}/ |  |
| [**extrasCustomFieldsRetrieve()**](ExtrasApi.md#extrasCustomFieldsRetrieve) | **GET** /api/extras/custom-fields/{id}/ |  |
| [**extrasCustomFieldsUpdate()**](ExtrasApi.md#extrasCustomFieldsUpdate) | **PUT** /api/extras/custom-fields/{id}/ |  |
| [**extrasCustomLinksBulkDestroy()**](ExtrasApi.md#extrasCustomLinksBulkDestroy) | **DELETE** /api/extras/custom-links/ |  |
| [**extrasCustomLinksBulkPartialUpdate()**](ExtrasApi.md#extrasCustomLinksBulkPartialUpdate) | **PATCH** /api/extras/custom-links/ |  |
| [**extrasCustomLinksBulkUpdate()**](ExtrasApi.md#extrasCustomLinksBulkUpdate) | **PUT** /api/extras/custom-links/ |  |
| [**extrasCustomLinksCreate()**](ExtrasApi.md#extrasCustomLinksCreate) | **POST** /api/extras/custom-links/ |  |
| [**extrasCustomLinksDestroy()**](ExtrasApi.md#extrasCustomLinksDestroy) | **DELETE** /api/extras/custom-links/{id}/ |  |
| [**extrasCustomLinksList()**](ExtrasApi.md#extrasCustomLinksList) | **GET** /api/extras/custom-links/ |  |
| [**extrasCustomLinksPartialUpdate()**](ExtrasApi.md#extrasCustomLinksPartialUpdate) | **PATCH** /api/extras/custom-links/{id}/ |  |
| [**extrasCustomLinksRetrieve()**](ExtrasApi.md#extrasCustomLinksRetrieve) | **GET** /api/extras/custom-links/{id}/ |  |
| [**extrasCustomLinksUpdate()**](ExtrasApi.md#extrasCustomLinksUpdate) | **PUT** /api/extras/custom-links/{id}/ |  |
| [**extrasDashboardDestroy()**](ExtrasApi.md#extrasDashboardDestroy) | **DELETE** /api/extras/dashboard/ |  |
| [**extrasDashboardPartialUpdate()**](ExtrasApi.md#extrasDashboardPartialUpdate) | **PATCH** /api/extras/dashboard/ |  |
| [**extrasDashboardRetrieve()**](ExtrasApi.md#extrasDashboardRetrieve) | **GET** /api/extras/dashboard/ |  |
| [**extrasDashboardUpdate()**](ExtrasApi.md#extrasDashboardUpdate) | **PUT** /api/extras/dashboard/ |  |
| [**extrasEventRulesBulkDestroy()**](ExtrasApi.md#extrasEventRulesBulkDestroy) | **DELETE** /api/extras/event-rules/ |  |
| [**extrasEventRulesBulkPartialUpdate()**](ExtrasApi.md#extrasEventRulesBulkPartialUpdate) | **PATCH** /api/extras/event-rules/ |  |
| [**extrasEventRulesBulkUpdate()**](ExtrasApi.md#extrasEventRulesBulkUpdate) | **PUT** /api/extras/event-rules/ |  |
| [**extrasEventRulesCreate()**](ExtrasApi.md#extrasEventRulesCreate) | **POST** /api/extras/event-rules/ |  |
| [**extrasEventRulesDestroy()**](ExtrasApi.md#extrasEventRulesDestroy) | **DELETE** /api/extras/event-rules/{id}/ |  |
| [**extrasEventRulesList()**](ExtrasApi.md#extrasEventRulesList) | **GET** /api/extras/event-rules/ |  |
| [**extrasEventRulesPartialUpdate()**](ExtrasApi.md#extrasEventRulesPartialUpdate) | **PATCH** /api/extras/event-rules/{id}/ |  |
| [**extrasEventRulesRetrieve()**](ExtrasApi.md#extrasEventRulesRetrieve) | **GET** /api/extras/event-rules/{id}/ |  |
| [**extrasEventRulesUpdate()**](ExtrasApi.md#extrasEventRulesUpdate) | **PUT** /api/extras/event-rules/{id}/ |  |
| [**extrasExportTemplatesBulkDestroy()**](ExtrasApi.md#extrasExportTemplatesBulkDestroy) | **DELETE** /api/extras/export-templates/ |  |
| [**extrasExportTemplatesBulkPartialUpdate()**](ExtrasApi.md#extrasExportTemplatesBulkPartialUpdate) | **PATCH** /api/extras/export-templates/ |  |
| [**extrasExportTemplatesBulkUpdate()**](ExtrasApi.md#extrasExportTemplatesBulkUpdate) | **PUT** /api/extras/export-templates/ |  |
| [**extrasExportTemplatesCreate()**](ExtrasApi.md#extrasExportTemplatesCreate) | **POST** /api/extras/export-templates/ |  |
| [**extrasExportTemplatesDestroy()**](ExtrasApi.md#extrasExportTemplatesDestroy) | **DELETE** /api/extras/export-templates/{id}/ |  |
| [**extrasExportTemplatesList()**](ExtrasApi.md#extrasExportTemplatesList) | **GET** /api/extras/export-templates/ |  |
| [**extrasExportTemplatesPartialUpdate()**](ExtrasApi.md#extrasExportTemplatesPartialUpdate) | **PATCH** /api/extras/export-templates/{id}/ |  |
| [**extrasExportTemplatesRetrieve()**](ExtrasApi.md#extrasExportTemplatesRetrieve) | **GET** /api/extras/export-templates/{id}/ |  |
| [**extrasExportTemplatesSyncCreate()**](ExtrasApi.md#extrasExportTemplatesSyncCreate) | **POST** /api/extras/export-templates/{id}/sync/ |  |
| [**extrasExportTemplatesUpdate()**](ExtrasApi.md#extrasExportTemplatesUpdate) | **PUT** /api/extras/export-templates/{id}/ |  |
| [**extrasImageAttachmentsBulkDestroy()**](ExtrasApi.md#extrasImageAttachmentsBulkDestroy) | **DELETE** /api/extras/image-attachments/ |  |
| [**extrasImageAttachmentsBulkPartialUpdate()**](ExtrasApi.md#extrasImageAttachmentsBulkPartialUpdate) | **PATCH** /api/extras/image-attachments/ |  |
| [**extrasImageAttachmentsBulkUpdate()**](ExtrasApi.md#extrasImageAttachmentsBulkUpdate) | **PUT** /api/extras/image-attachments/ |  |
| [**extrasImageAttachmentsCreate()**](ExtrasApi.md#extrasImageAttachmentsCreate) | **POST** /api/extras/image-attachments/ |  |
| [**extrasImageAttachmentsDestroy()**](ExtrasApi.md#extrasImageAttachmentsDestroy) | **DELETE** /api/extras/image-attachments/{id}/ |  |
| [**extrasImageAttachmentsList()**](ExtrasApi.md#extrasImageAttachmentsList) | **GET** /api/extras/image-attachments/ |  |
| [**extrasImageAttachmentsPartialUpdate()**](ExtrasApi.md#extrasImageAttachmentsPartialUpdate) | **PATCH** /api/extras/image-attachments/{id}/ |  |
| [**extrasImageAttachmentsRetrieve()**](ExtrasApi.md#extrasImageAttachmentsRetrieve) | **GET** /api/extras/image-attachments/{id}/ |  |
| [**extrasImageAttachmentsUpdate()**](ExtrasApi.md#extrasImageAttachmentsUpdate) | **PUT** /api/extras/image-attachments/{id}/ |  |
| [**extrasJournalEntriesBulkDestroy()**](ExtrasApi.md#extrasJournalEntriesBulkDestroy) | **DELETE** /api/extras/journal-entries/ |  |
| [**extrasJournalEntriesBulkPartialUpdate()**](ExtrasApi.md#extrasJournalEntriesBulkPartialUpdate) | **PATCH** /api/extras/journal-entries/ |  |
| [**extrasJournalEntriesBulkUpdate()**](ExtrasApi.md#extrasJournalEntriesBulkUpdate) | **PUT** /api/extras/journal-entries/ |  |
| [**extrasJournalEntriesCreate()**](ExtrasApi.md#extrasJournalEntriesCreate) | **POST** /api/extras/journal-entries/ |  |
| [**extrasJournalEntriesDestroy()**](ExtrasApi.md#extrasJournalEntriesDestroy) | **DELETE** /api/extras/journal-entries/{id}/ |  |
| [**extrasJournalEntriesList()**](ExtrasApi.md#extrasJournalEntriesList) | **GET** /api/extras/journal-entries/ |  |
| [**extrasJournalEntriesPartialUpdate()**](ExtrasApi.md#extrasJournalEntriesPartialUpdate) | **PATCH** /api/extras/journal-entries/{id}/ |  |
| [**extrasJournalEntriesRetrieve()**](ExtrasApi.md#extrasJournalEntriesRetrieve) | **GET** /api/extras/journal-entries/{id}/ |  |
| [**extrasJournalEntriesUpdate()**](ExtrasApi.md#extrasJournalEntriesUpdate) | **PUT** /api/extras/journal-entries/{id}/ |  |
| [**extrasNotificationGroupsBulkDestroy()**](ExtrasApi.md#extrasNotificationGroupsBulkDestroy) | **DELETE** /api/extras/notification-groups/ |  |
| [**extrasNotificationGroupsBulkPartialUpdate()**](ExtrasApi.md#extrasNotificationGroupsBulkPartialUpdate) | **PATCH** /api/extras/notification-groups/ |  |
| [**extrasNotificationGroupsBulkUpdate()**](ExtrasApi.md#extrasNotificationGroupsBulkUpdate) | **PUT** /api/extras/notification-groups/ |  |
| [**extrasNotificationGroupsCreate()**](ExtrasApi.md#extrasNotificationGroupsCreate) | **POST** /api/extras/notification-groups/ |  |
| [**extrasNotificationGroupsDestroy()**](ExtrasApi.md#extrasNotificationGroupsDestroy) | **DELETE** /api/extras/notification-groups/{id}/ |  |
| [**extrasNotificationGroupsList()**](ExtrasApi.md#extrasNotificationGroupsList) | **GET** /api/extras/notification-groups/ |  |
| [**extrasNotificationGroupsPartialUpdate()**](ExtrasApi.md#extrasNotificationGroupsPartialUpdate) | **PATCH** /api/extras/notification-groups/{id}/ |  |
| [**extrasNotificationGroupsRetrieve()**](ExtrasApi.md#extrasNotificationGroupsRetrieve) | **GET** /api/extras/notification-groups/{id}/ |  |
| [**extrasNotificationGroupsUpdate()**](ExtrasApi.md#extrasNotificationGroupsUpdate) | **PUT** /api/extras/notification-groups/{id}/ |  |
| [**extrasNotificationsBulkDestroy()**](ExtrasApi.md#extrasNotificationsBulkDestroy) | **DELETE** /api/extras/notifications/ |  |
| [**extrasNotificationsBulkPartialUpdate()**](ExtrasApi.md#extrasNotificationsBulkPartialUpdate) | **PATCH** /api/extras/notifications/ |  |
| [**extrasNotificationsBulkUpdate()**](ExtrasApi.md#extrasNotificationsBulkUpdate) | **PUT** /api/extras/notifications/ |  |
| [**extrasNotificationsCreate()**](ExtrasApi.md#extrasNotificationsCreate) | **POST** /api/extras/notifications/ |  |
| [**extrasNotificationsDestroy()**](ExtrasApi.md#extrasNotificationsDestroy) | **DELETE** /api/extras/notifications/{id}/ |  |
| [**extrasNotificationsList()**](ExtrasApi.md#extrasNotificationsList) | **GET** /api/extras/notifications/ |  |
| [**extrasNotificationsPartialUpdate()**](ExtrasApi.md#extrasNotificationsPartialUpdate) | **PATCH** /api/extras/notifications/{id}/ |  |
| [**extrasNotificationsRetrieve()**](ExtrasApi.md#extrasNotificationsRetrieve) | **GET** /api/extras/notifications/{id}/ |  |
| [**extrasNotificationsUpdate()**](ExtrasApi.md#extrasNotificationsUpdate) | **PUT** /api/extras/notifications/{id}/ |  |
| [**extrasObjectTypesList()**](ExtrasApi.md#extrasObjectTypesList) | **GET** /api/extras/object-types/ |  |
| [**extrasObjectTypesRetrieve()**](ExtrasApi.md#extrasObjectTypesRetrieve) | **GET** /api/extras/object-types/{id}/ |  |
| [**extrasSavedFiltersBulkDestroy()**](ExtrasApi.md#extrasSavedFiltersBulkDestroy) | **DELETE** /api/extras/saved-filters/ |  |
| [**extrasSavedFiltersBulkPartialUpdate()**](ExtrasApi.md#extrasSavedFiltersBulkPartialUpdate) | **PATCH** /api/extras/saved-filters/ |  |
| [**extrasSavedFiltersBulkUpdate()**](ExtrasApi.md#extrasSavedFiltersBulkUpdate) | **PUT** /api/extras/saved-filters/ |  |
| [**extrasSavedFiltersCreate()**](ExtrasApi.md#extrasSavedFiltersCreate) | **POST** /api/extras/saved-filters/ |  |
| [**extrasSavedFiltersDestroy()**](ExtrasApi.md#extrasSavedFiltersDestroy) | **DELETE** /api/extras/saved-filters/{id}/ |  |
| [**extrasSavedFiltersList()**](ExtrasApi.md#extrasSavedFiltersList) | **GET** /api/extras/saved-filters/ |  |
| [**extrasSavedFiltersPartialUpdate()**](ExtrasApi.md#extrasSavedFiltersPartialUpdate) | **PATCH** /api/extras/saved-filters/{id}/ |  |
| [**extrasSavedFiltersRetrieve()**](ExtrasApi.md#extrasSavedFiltersRetrieve) | **GET** /api/extras/saved-filters/{id}/ |  |
| [**extrasSavedFiltersUpdate()**](ExtrasApi.md#extrasSavedFiltersUpdate) | **PUT** /api/extras/saved-filters/{id}/ |  |
| [**extrasScriptsCreate()**](ExtrasApi.md#extrasScriptsCreate) | **POST** /api/extras/scripts/ |  |
| [**extrasScriptsDestroy()**](ExtrasApi.md#extrasScriptsDestroy) | **DELETE** /api/extras/scripts/{id}/ |  |
| [**extrasScriptsList()**](ExtrasApi.md#extrasScriptsList) | **GET** /api/extras/scripts/ |  |
| [**extrasScriptsPartialUpdate()**](ExtrasApi.md#extrasScriptsPartialUpdate) | **PATCH** /api/extras/scripts/{id}/ |  |
| [**extrasScriptsRetrieve()**](ExtrasApi.md#extrasScriptsRetrieve) | **GET** /api/extras/scripts/{id}/ |  |
| [**extrasScriptsUpdate()**](ExtrasApi.md#extrasScriptsUpdate) | **PUT** /api/extras/scripts/{id}/ |  |
| [**extrasSubscriptionsBulkDestroy()**](ExtrasApi.md#extrasSubscriptionsBulkDestroy) | **DELETE** /api/extras/subscriptions/ |  |
| [**extrasSubscriptionsBulkPartialUpdate()**](ExtrasApi.md#extrasSubscriptionsBulkPartialUpdate) | **PATCH** /api/extras/subscriptions/ |  |
| [**extrasSubscriptionsBulkUpdate()**](ExtrasApi.md#extrasSubscriptionsBulkUpdate) | **PUT** /api/extras/subscriptions/ |  |
| [**extrasSubscriptionsCreate()**](ExtrasApi.md#extrasSubscriptionsCreate) | **POST** /api/extras/subscriptions/ |  |
| [**extrasSubscriptionsDestroy()**](ExtrasApi.md#extrasSubscriptionsDestroy) | **DELETE** /api/extras/subscriptions/{id}/ |  |
| [**extrasSubscriptionsList()**](ExtrasApi.md#extrasSubscriptionsList) | **GET** /api/extras/subscriptions/ |  |
| [**extrasSubscriptionsPartialUpdate()**](ExtrasApi.md#extrasSubscriptionsPartialUpdate) | **PATCH** /api/extras/subscriptions/{id}/ |  |
| [**extrasSubscriptionsRetrieve()**](ExtrasApi.md#extrasSubscriptionsRetrieve) | **GET** /api/extras/subscriptions/{id}/ |  |
| [**extrasSubscriptionsUpdate()**](ExtrasApi.md#extrasSubscriptionsUpdate) | **PUT** /api/extras/subscriptions/{id}/ |  |
| [**extrasTagsBulkDestroy()**](ExtrasApi.md#extrasTagsBulkDestroy) | **DELETE** /api/extras/tags/ |  |
| [**extrasTagsBulkPartialUpdate()**](ExtrasApi.md#extrasTagsBulkPartialUpdate) | **PATCH** /api/extras/tags/ |  |
| [**extrasTagsBulkUpdate()**](ExtrasApi.md#extrasTagsBulkUpdate) | **PUT** /api/extras/tags/ |  |
| [**extrasTagsCreate()**](ExtrasApi.md#extrasTagsCreate) | **POST** /api/extras/tags/ |  |
| [**extrasTagsDestroy()**](ExtrasApi.md#extrasTagsDestroy) | **DELETE** /api/extras/tags/{id}/ |  |
| [**extrasTagsList()**](ExtrasApi.md#extrasTagsList) | **GET** /api/extras/tags/ |  |
| [**extrasTagsPartialUpdate()**](ExtrasApi.md#extrasTagsPartialUpdate) | **PATCH** /api/extras/tags/{id}/ |  |
| [**extrasTagsRetrieve()**](ExtrasApi.md#extrasTagsRetrieve) | **GET** /api/extras/tags/{id}/ |  |
| [**extrasTagsUpdate()**](ExtrasApi.md#extrasTagsUpdate) | **PUT** /api/extras/tags/{id}/ |  |
| [**extrasWebhooksBulkDestroy()**](ExtrasApi.md#extrasWebhooksBulkDestroy) | **DELETE** /api/extras/webhooks/ |  |
| [**extrasWebhooksBulkPartialUpdate()**](ExtrasApi.md#extrasWebhooksBulkPartialUpdate) | **PATCH** /api/extras/webhooks/ |  |
| [**extrasWebhooksBulkUpdate()**](ExtrasApi.md#extrasWebhooksBulkUpdate) | **PUT** /api/extras/webhooks/ |  |
| [**extrasWebhooksCreate()**](ExtrasApi.md#extrasWebhooksCreate) | **POST** /api/extras/webhooks/ |  |
| [**extrasWebhooksDestroy()**](ExtrasApi.md#extrasWebhooksDestroy) | **DELETE** /api/extras/webhooks/{id}/ |  |
| [**extrasWebhooksList()**](ExtrasApi.md#extrasWebhooksList) | **GET** /api/extras/webhooks/ |  |
| [**extrasWebhooksPartialUpdate()**](ExtrasApi.md#extrasWebhooksPartialUpdate) | **PATCH** /api/extras/webhooks/{id}/ |  |
| [**extrasWebhooksRetrieve()**](ExtrasApi.md#extrasWebhooksRetrieve) | **GET** /api/extras/webhooks/{id}/ |  |
| [**extrasWebhooksUpdate()**](ExtrasApi.md#extrasWebhooksUpdate) | **PUT** /api/extras/webhooks/{id}/ |  |


## `extrasBookmarksBulkDestroy()`

```php
extrasBookmarksBulkDestroy($bookmark_request)
```



Delete a list of bookmark objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bookmark_request = array(new \OpenAPI\Client\Model\BookmarkRequest()); // \OpenAPI\Client\Model\BookmarkRequest[]

try {
    $apiInstance->extrasBookmarksBulkDestroy($bookmark_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasBookmarksBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bookmark_request** | [**\OpenAPI\Client\Model\BookmarkRequest[]**](../Model/BookmarkRequest.md)|  | |

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

## `extrasBookmarksBulkPartialUpdate()`

```php
extrasBookmarksBulkPartialUpdate($bookmark_request): \OpenAPI\Client\Model\Bookmark[]
```



Patch a list of bookmark objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bookmark_request = array(new \OpenAPI\Client\Model\BookmarkRequest()); // \OpenAPI\Client\Model\BookmarkRequest[]

try {
    $result = $apiInstance->extrasBookmarksBulkPartialUpdate($bookmark_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasBookmarksBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bookmark_request** | [**\OpenAPI\Client\Model\BookmarkRequest[]**](../Model/BookmarkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Bookmark[]**](../Model/Bookmark.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasBookmarksBulkUpdate()`

```php
extrasBookmarksBulkUpdate($bookmark_request): \OpenAPI\Client\Model\Bookmark[]
```



Put a list of bookmark objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bookmark_request = array(new \OpenAPI\Client\Model\BookmarkRequest()); // \OpenAPI\Client\Model\BookmarkRequest[]

try {
    $result = $apiInstance->extrasBookmarksBulkUpdate($bookmark_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasBookmarksBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bookmark_request** | [**\OpenAPI\Client\Model\BookmarkRequest[]**](../Model/BookmarkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Bookmark[]**](../Model/Bookmark.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasBookmarksCreate()`

```php
extrasBookmarksCreate($bookmark_request): \OpenAPI\Client\Model\Bookmark
```



Post a list of bookmark objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bookmark_request = new \OpenAPI\Client\Model\BookmarkRequest(); // \OpenAPI\Client\Model\BookmarkRequest

try {
    $result = $apiInstance->extrasBookmarksCreate($bookmark_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasBookmarksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bookmark_request** | [**\OpenAPI\Client\Model\BookmarkRequest**](../Model/BookmarkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Bookmark**](../Model/Bookmark.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasBookmarksDestroy()`

```php
extrasBookmarksDestroy($id)
```



Delete a bookmark object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this bookmark.

try {
    $apiInstance->extrasBookmarksDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasBookmarksDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this bookmark. | |

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

## `extrasBookmarksList()`

```php
extrasBookmarksList($created, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $limit, $object_id, $object_id__empty, $object_id__gt, $object_id__gte, $object_id__lt, $object_id__lte, $object_id__n, $object_type, $object_type__n, $object_type_id, $object_type_id__empty, $object_type_id__gt, $object_type_id__gte, $object_type_id__lt, $object_type_id__lte, $object_type_id__n, $offset, $ordering, $user, $user__n, $user_id, $user_id__n): \OpenAPI\Client\Model\PaginatedBookmarkList
```



Get a list of bookmark objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$limit = 56; // int | Number of results to return per page.
$object_id = array(56); // int[]
$object_id__empty = True; // bool
$object_id__gt = array(56); // int[]
$object_id__gte = array(56); // int[]
$object_id__lt = array(56); // int[]
$object_id__lte = array(56); // int[]
$object_id__n = array(56); // int[]
$object_type = 'object_type_example'; // string
$object_type__n = 'object_type__n_example'; // string
$object_type_id = array(56); // int[]
$object_type_id__empty = array(56); // int[]
$object_type_id__gt = array(56); // int[]
$object_type_id__gte = array(56); // int[]
$object_type_id__lt = array(56); // int[]
$object_type_id__lte = array(56); // int[]
$object_type_id__n = array(56); // int[]
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$user = array('user_example'); // string[] | User (name)
$user__n = array('user__n_example'); // string[] | User (name)
$user_id = array(56); // int[] | User (ID)
$user_id__n = array(56); // int[] | User (ID)

try {
    $result = $apiInstance->extrasBookmarksList($created, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $limit, $object_id, $object_id__empty, $object_id__gt, $object_id__gte, $object_id__lt, $object_id__lte, $object_id__n, $object_type, $object_type__n, $object_type_id, $object_type_id__empty, $object_type_id__gt, $object_type_id__gte, $object_type_id__lt, $object_type_id__lte, $object_type_id__n, $offset, $ordering, $user, $user__n, $user_id, $user_id__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasBookmarksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **created** | **\DateTime**|  | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **object_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__empty** | **bool**|  | [optional] |
| **object_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type** | **string**|  | [optional] |
| **object_type__n** | **string**|  | [optional] |
| **object_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type_id__empty** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **user** | [**string[]**](../Model/string.md)| User (name) | [optional] |
| **user__n** | [**string[]**](../Model/string.md)| User (name) | [optional] |
| **user_id** | [**int[]**](../Model/int.md)| User (ID) | [optional] |
| **user_id__n** | [**int[]**](../Model/int.md)| User (ID) | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedBookmarkList**](../Model/PaginatedBookmarkList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasBookmarksPartialUpdate()`

```php
extrasBookmarksPartialUpdate($id, $patched_bookmark_request): \OpenAPI\Client\Model\Bookmark
```



Patch a bookmark object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this bookmark.
$patched_bookmark_request = new \OpenAPI\Client\Model\PatchedBookmarkRequest(); // \OpenAPI\Client\Model\PatchedBookmarkRequest

try {
    $result = $apiInstance->extrasBookmarksPartialUpdate($id, $patched_bookmark_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasBookmarksPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this bookmark. | |
| **patched_bookmark_request** | [**\OpenAPI\Client\Model\PatchedBookmarkRequest**](../Model/PatchedBookmarkRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Bookmark**](../Model/Bookmark.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasBookmarksRetrieve()`

```php
extrasBookmarksRetrieve($id): \OpenAPI\Client\Model\Bookmark
```



Get a bookmark object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this bookmark.

try {
    $result = $apiInstance->extrasBookmarksRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasBookmarksRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this bookmark. | |

### Return type

[**\OpenAPI\Client\Model\Bookmark**](../Model/Bookmark.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasBookmarksUpdate()`

```php
extrasBookmarksUpdate($id, $bookmark_request): \OpenAPI\Client\Model\Bookmark
```



Put a bookmark object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this bookmark.
$bookmark_request = new \OpenAPI\Client\Model\BookmarkRequest(); // \OpenAPI\Client\Model\BookmarkRequest

try {
    $result = $apiInstance->extrasBookmarksUpdate($id, $bookmark_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasBookmarksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this bookmark. | |
| **bookmark_request** | [**\OpenAPI\Client\Model\BookmarkRequest**](../Model/BookmarkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Bookmark**](../Model/Bookmark.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigContextsBulkDestroy()`

```php
extrasConfigContextsBulkDestroy($config_context_request)
```



Delete a list of config context objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_context_request = array(new \OpenAPI\Client\Model\ConfigContextRequest()); // \OpenAPI\Client\Model\ConfigContextRequest[]

try {
    $apiInstance->extrasConfigContextsBulkDestroy($config_context_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigContextsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_context_request** | [**\OpenAPI\Client\Model\ConfigContextRequest[]**](../Model/ConfigContextRequest.md)|  | |

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

## `extrasConfigContextsBulkPartialUpdate()`

```php
extrasConfigContextsBulkPartialUpdate($config_context_request): \OpenAPI\Client\Model\ConfigContext[]
```



Patch a list of config context objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_context_request = array(new \OpenAPI\Client\Model\ConfigContextRequest()); // \OpenAPI\Client\Model\ConfigContextRequest[]

try {
    $result = $apiInstance->extrasConfigContextsBulkPartialUpdate($config_context_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigContextsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_context_request** | [**\OpenAPI\Client\Model\ConfigContextRequest[]**](../Model/ConfigContextRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigContext[]**](../Model/ConfigContext.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigContextsBulkUpdate()`

```php
extrasConfigContextsBulkUpdate($config_context_request): \OpenAPI\Client\Model\ConfigContext[]
```



Put a list of config context objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_context_request = array(new \OpenAPI\Client\Model\ConfigContextRequest()); // \OpenAPI\Client\Model\ConfigContextRequest[]

try {
    $result = $apiInstance->extrasConfigContextsBulkUpdate($config_context_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigContextsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_context_request** | [**\OpenAPI\Client\Model\ConfigContextRequest[]**](../Model/ConfigContextRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigContext[]**](../Model/ConfigContext.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigContextsCreate()`

```php
extrasConfigContextsCreate($config_context_request): \OpenAPI\Client\Model\ConfigContext
```



Post a list of config context objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_context_request = new \OpenAPI\Client\Model\ConfigContextRequest(); // \OpenAPI\Client\Model\ConfigContextRequest

try {
    $result = $apiInstance->extrasConfigContextsCreate($config_context_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigContextsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_context_request** | [**\OpenAPI\Client\Model\ConfigContextRequest**](../Model/ConfigContextRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigContext**](../Model/ConfigContext.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigContextsDestroy()`

```php
extrasConfigContextsDestroy($id)
```



Delete a config context object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this config context.

try {
    $apiInstance->extrasConfigContextsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigContextsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this config context. | |

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

## `extrasConfigContextsList()`

```php
extrasConfigContextsList($auto_sync_enabled, $cluster_group, $cluster_group__n, $cluster_group_id, $cluster_group_id__n, $cluster_id, $cluster_id__n, $cluster_type, $cluster_type__n, $cluster_type_id, $cluster_type_id__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $data_file_id, $data_file_id__n, $data_source_id, $data_source_id__n, $data_synced, $data_synced__empty, $data_synced__gt, $data_synced__gte, $data_synced__lt, $data_synced__lte, $data_synced__n, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device_role, $device_role__n, $device_role_id, $device_role_id__n, $device_type_id, $device_type_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $is_active, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $location, $location__n, $location_id, $location_id__n, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $platform, $platform__n, $platform_id, $platform_id__n, $q, $region, $region__n, $region_id, $region_id__n, $site, $site__n, $site_group, $site_group__n, $site_group_id, $site_group_id__n, $site_id, $site_id__n, $tag, $tag__n, $tag_id, $tag_id__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $weight, $weight__empty, $weight__gt, $weight__gte, $weight__lt, $weight__lte, $weight__n): \OpenAPI\Client\Model\PaginatedConfigContextList
```



Get a list of config context objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auto_sync_enabled = True; // bool
$cluster_group = array('cluster_group_example'); // string[] | Cluster group (slug)
$cluster_group__n = array('cluster_group__n_example'); // string[] | Cluster group (slug)
$cluster_group_id = array(56); // int[] | Cluster group
$cluster_group_id__n = array(56); // int[] | Cluster group
$cluster_id = array(56); // int[] | Cluster
$cluster_id__n = array(56); // int[] | Cluster
$cluster_type = array('cluster_type_example'); // string[] | Cluster type (slug)
$cluster_type__n = array('cluster_type__n_example'); // string[] | Cluster type (slug)
$cluster_type_id = array(56); // int[] | Cluster type
$cluster_type_id__n = array(56); // int[] | Cluster type
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
$data_file_id = array(56); // int[] | Data file (ID)
$data_file_id__n = array(56); // int[] | Data file (ID)
$data_source_id = array(56); // int[] | Data source (ID)
$data_source_id__n = array(56); // int[] | Data source (ID)
$data_synced = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__empty = True; // bool
$data_synced__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
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
$device_role = array('device_role_example'); // string[] | Role (slug)
$device_role__n = array('device_role__n_example'); // string[] | Role (slug)
$device_role_id = array(56); // int[] | Role
$device_role_id__n = array(56); // int[] | Role
$device_type_id = array(56); // int[] | Device type
$device_type_id__n = array(56); // int[] | Device type
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$is_active = True; // bool
$last_updated = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$last_updated__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$limit = 56; // int | Number of results to return per page.
$location = array('location_example'); // string[] | Location (slug)
$location__n = array('location__n_example'); // string[] | Location (slug)
$location_id = array(56); // int[] | Location
$location_id__n = array(56); // int[] | Location
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
$platform = array('platform_example'); // string[] | Platform (slug)
$platform__n = array('platform__n_example'); // string[] | Platform (slug)
$platform_id = array(56); // int[] | Platform
$platform_id__n = array(56); // int[] | Platform
$q = 'q_example'; // string | Search
$region = array('region_example'); // string[] | Region (slug)
$region__n = array('region__n_example'); // string[] | Region (slug)
$region_id = array(56); // int[] | Region
$region_id__n = array(56); // int[] | Region
$site = array('site_example'); // string[] | Site (slug)
$site__n = array('site__n_example'); // string[] | Site (slug)
$site_group = array('site_group_example'); // string[] | Site group (slug)
$site_group__n = array('site_group__n_example'); // string[] | Site group (slug)
$site_group_id = array(56); // int[] | Site group
$site_group_id__n = array(56); // int[] | Site group
$site_id = array(56); // int[] | Site
$site_id__n = array(56); // int[] | Site
$tag = array('tag_example'); // string[] | Tag (slug)
$tag__n = array('tag__n_example'); // string[] | Tag (slug)
$tag_id = array(56); // int[] | Tag
$tag_id__n = array(56); // int[] | Tag
$tenant = array('tenant_example'); // string[] | Tenant (slug)
$tenant__n = array('tenant__n_example'); // string[] | Tenant (slug)
$tenant_group = array('tenant_group_example'); // string[] | Tenant group (slug)
$tenant_group__n = array('tenant_group__n_example'); // string[] | Tenant group (slug)
$tenant_group_id = array(56); // int[] | Tenant group
$tenant_group_id__n = array(56); // int[] | Tenant group
$tenant_id = array(56); // int[] | Tenant
$tenant_id__n = array(56); // int[] | Tenant
$updated_by_request = 'updated_by_request_example'; // string
$weight = array(56); // int[]
$weight__empty = True; // bool
$weight__gt = array(56); // int[]
$weight__gte = array(56); // int[]
$weight__lt = array(56); // int[]
$weight__lte = array(56); // int[]
$weight__n = array(56); // int[]

try {
    $result = $apiInstance->extrasConfigContextsList($auto_sync_enabled, $cluster_group, $cluster_group__n, $cluster_group_id, $cluster_group_id__n, $cluster_id, $cluster_id__n, $cluster_type, $cluster_type__n, $cluster_type_id, $cluster_type_id__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $data_file_id, $data_file_id__n, $data_source_id, $data_source_id__n, $data_synced, $data_synced__empty, $data_synced__gt, $data_synced__gte, $data_synced__lt, $data_synced__lte, $data_synced__n, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $device_role, $device_role__n, $device_role_id, $device_role_id__n, $device_type_id, $device_type_id__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $is_active, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $location, $location__n, $location_id, $location_id__n, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $platform, $platform__n, $platform_id, $platform_id__n, $q, $region, $region__n, $region_id, $region_id__n, $site, $site__n, $site_group, $site_group__n, $site_group_id, $site_group_id__n, $site_id, $site_id__n, $tag, $tag__n, $tag_id, $tag_id__n, $tenant, $tenant__n, $tenant_group, $tenant_group__n, $tenant_group_id, $tenant_group_id__n, $tenant_id, $tenant_id__n, $updated_by_request, $weight, $weight__empty, $weight__gt, $weight__gte, $weight__lt, $weight__lte, $weight__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigContextsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auto_sync_enabled** | **bool**|  | [optional] |
| **cluster_group** | [**string[]**](../Model/string.md)| Cluster group (slug) | [optional] |
| **cluster_group__n** | [**string[]**](../Model/string.md)| Cluster group (slug) | [optional] |
| **cluster_group_id** | [**int[]**](../Model/int.md)| Cluster group | [optional] |
| **cluster_group_id__n** | [**int[]**](../Model/int.md)| Cluster group | [optional] |
| **cluster_id** | [**int[]**](../Model/int.md)| Cluster | [optional] |
| **cluster_id__n** | [**int[]**](../Model/int.md)| Cluster | [optional] |
| **cluster_type** | [**string[]**](../Model/string.md)| Cluster type (slug) | [optional] |
| **cluster_type__n** | [**string[]**](../Model/string.md)| Cluster type (slug) | [optional] |
| **cluster_type_id** | [**int[]**](../Model/int.md)| Cluster type | [optional] |
| **cluster_type_id__n** | [**int[]**](../Model/int.md)| Cluster type | [optional] |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
| **data_file_id** | [**int[]**](../Model/int.md)| Data file (ID) | [optional] |
| **data_file_id__n** | [**int[]**](../Model/int.md)| Data file (ID) | [optional] |
| **data_source_id** | [**int[]**](../Model/int.md)| Data source (ID) | [optional] |
| **data_source_id__n** | [**int[]**](../Model/int.md)| Data source (ID) | [optional] |
| **data_synced** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__empty** | **bool**|  | [optional] |
| **data_synced__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
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
| **device_role** | [**string[]**](../Model/string.md)| Role (slug) | [optional] |
| **device_role__n** | [**string[]**](../Model/string.md)| Role (slug) | [optional] |
| **device_role_id** | [**int[]**](../Model/int.md)| Role | [optional] |
| **device_role_id__n** | [**int[]**](../Model/int.md)| Role | [optional] |
| **device_type_id** | [**int[]**](../Model/int.md)| Device type | [optional] |
| **device_type_id__n** | [**int[]**](../Model/int.md)| Device type | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **is_active** | **bool**|  | [optional] |
| **last_updated** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **last_updated__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **location** | [**string[]**](../Model/string.md)| Location (slug) | [optional] |
| **location__n** | [**string[]**](../Model/string.md)| Location (slug) | [optional] |
| **location_id** | [**int[]**](../Model/int.md)| Location | [optional] |
| **location_id__n** | [**int[]**](../Model/int.md)| Location | [optional] |
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
| **platform** | [**string[]**](../Model/string.md)| Platform (slug) | [optional] |
| **platform__n** | [**string[]**](../Model/string.md)| Platform (slug) | [optional] |
| **platform_id** | [**int[]**](../Model/int.md)| Platform | [optional] |
| **platform_id__n** | [**int[]**](../Model/int.md)| Platform | [optional] |
| **q** | **string**| Search | [optional] |
| **region** | [**string[]**](../Model/string.md)| Region (slug) | [optional] |
| **region__n** | [**string[]**](../Model/string.md)| Region (slug) | [optional] |
| **region_id** | [**int[]**](../Model/int.md)| Region | [optional] |
| **region_id__n** | [**int[]**](../Model/int.md)| Region | [optional] |
| **site** | [**string[]**](../Model/string.md)| Site (slug) | [optional] |
| **site__n** | [**string[]**](../Model/string.md)| Site (slug) | [optional] |
| **site_group** | [**string[]**](../Model/string.md)| Site group (slug) | [optional] |
| **site_group__n** | [**string[]**](../Model/string.md)| Site group (slug) | [optional] |
| **site_group_id** | [**int[]**](../Model/int.md)| Site group | [optional] |
| **site_group_id__n** | [**int[]**](../Model/int.md)| Site group | [optional] |
| **site_id** | [**int[]**](../Model/int.md)| Site | [optional] |
| **site_id__n** | [**int[]**](../Model/int.md)| Site | [optional] |
| **tag** | [**string[]**](../Model/string.md)| Tag (slug) | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)| Tag (slug) | [optional] |
| **tag_id** | [**int[]**](../Model/int.md)| Tag | [optional] |
| **tag_id__n** | [**int[]**](../Model/int.md)| Tag | [optional] |
| **tenant** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant__n** | [**string[]**](../Model/string.md)| Tenant (slug) | [optional] |
| **tenant_group** | [**string[]**](../Model/string.md)| Tenant group (slug) | [optional] |
| **tenant_group__n** | [**string[]**](../Model/string.md)| Tenant group (slug) | [optional] |
| **tenant_group_id** | [**int[]**](../Model/int.md)| Tenant group | [optional] |
| **tenant_group_id__n** | [**int[]**](../Model/int.md)| Tenant group | [optional] |
| **tenant_id** | [**int[]**](../Model/int.md)| Tenant | [optional] |
| **tenant_id__n** | [**int[]**](../Model/int.md)| Tenant | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **weight** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__empty** | **bool**|  | [optional] |
| **weight__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__n** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedConfigContextList**](../Model/PaginatedConfigContextList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigContextsPartialUpdate()`

```php
extrasConfigContextsPartialUpdate($id, $patched_config_context_request): \OpenAPI\Client\Model\ConfigContext
```



Patch a config context object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this config context.
$patched_config_context_request = new \OpenAPI\Client\Model\PatchedConfigContextRequest(); // \OpenAPI\Client\Model\PatchedConfigContextRequest

try {
    $result = $apiInstance->extrasConfigContextsPartialUpdate($id, $patched_config_context_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigContextsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this config context. | |
| **patched_config_context_request** | [**\OpenAPI\Client\Model\PatchedConfigContextRequest**](../Model/PatchedConfigContextRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConfigContext**](../Model/ConfigContext.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigContextsRetrieve()`

```php
extrasConfigContextsRetrieve($id): \OpenAPI\Client\Model\ConfigContext
```



Get a config context object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this config context.

try {
    $result = $apiInstance->extrasConfigContextsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigContextsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this config context. | |

### Return type

[**\OpenAPI\Client\Model\ConfigContext**](../Model/ConfigContext.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigContextsSyncCreate()`

```php
extrasConfigContextsSyncCreate($id, $config_context_request): \OpenAPI\Client\Model\ConfigContext
```



Provide a /sync API endpoint to synchronize an object's data from its associated DataFile (if any).

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this config context.
$config_context_request = new \OpenAPI\Client\Model\ConfigContextRequest(); // \OpenAPI\Client\Model\ConfigContextRequest

try {
    $result = $apiInstance->extrasConfigContextsSyncCreate($id, $config_context_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigContextsSyncCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this config context. | |
| **config_context_request** | [**\OpenAPI\Client\Model\ConfigContextRequest**](../Model/ConfigContextRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigContext**](../Model/ConfigContext.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigContextsUpdate()`

```php
extrasConfigContextsUpdate($id, $config_context_request): \OpenAPI\Client\Model\ConfigContext
```



Put a config context object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this config context.
$config_context_request = new \OpenAPI\Client\Model\ConfigContextRequest(); // \OpenAPI\Client\Model\ConfigContextRequest

try {
    $result = $apiInstance->extrasConfigContextsUpdate($id, $config_context_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigContextsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this config context. | |
| **config_context_request** | [**\OpenAPI\Client\Model\ConfigContextRequest**](../Model/ConfigContextRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigContext**](../Model/ConfigContext.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigTemplatesBulkDestroy()`

```php
extrasConfigTemplatesBulkDestroy($config_template_request)
```



Delete a list of config template objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_template_request = array(new \OpenAPI\Client\Model\ConfigTemplateRequest()); // \OpenAPI\Client\Model\ConfigTemplateRequest[]

try {
    $apiInstance->extrasConfigTemplatesBulkDestroy($config_template_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigTemplatesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_template_request** | [**\OpenAPI\Client\Model\ConfigTemplateRequest[]**](../Model/ConfigTemplateRequest.md)|  | |

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

## `extrasConfigTemplatesBulkPartialUpdate()`

```php
extrasConfigTemplatesBulkPartialUpdate($config_template_request): \OpenAPI\Client\Model\ConfigTemplate[]
```



Patch a list of config template objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_template_request = array(new \OpenAPI\Client\Model\ConfigTemplateRequest()); // \OpenAPI\Client\Model\ConfigTemplateRequest[]

try {
    $result = $apiInstance->extrasConfigTemplatesBulkPartialUpdate($config_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigTemplatesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_template_request** | [**\OpenAPI\Client\Model\ConfigTemplateRequest[]**](../Model/ConfigTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigTemplate[]**](../Model/ConfigTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigTemplatesBulkUpdate()`

```php
extrasConfigTemplatesBulkUpdate($config_template_request): \OpenAPI\Client\Model\ConfigTemplate[]
```



Put a list of config template objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_template_request = array(new \OpenAPI\Client\Model\ConfigTemplateRequest()); // \OpenAPI\Client\Model\ConfigTemplateRequest[]

try {
    $result = $apiInstance->extrasConfigTemplatesBulkUpdate($config_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigTemplatesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_template_request** | [**\OpenAPI\Client\Model\ConfigTemplateRequest[]**](../Model/ConfigTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigTemplate[]**](../Model/ConfigTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigTemplatesCreate()`

```php
extrasConfigTemplatesCreate($config_template_request): \OpenAPI\Client\Model\ConfigTemplate
```



Post a list of config template objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_template_request = new \OpenAPI\Client\Model\ConfigTemplateRequest(); // \OpenAPI\Client\Model\ConfigTemplateRequest

try {
    $result = $apiInstance->extrasConfigTemplatesCreate($config_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigTemplatesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_template_request** | [**\OpenAPI\Client\Model\ConfigTemplateRequest**](../Model/ConfigTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigTemplate**](../Model/ConfigTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigTemplatesDestroy()`

```php
extrasConfigTemplatesDestroy($id)
```



Delete a config template object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this config template.

try {
    $apiInstance->extrasConfigTemplatesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigTemplatesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this config template. | |

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

## `extrasConfigTemplatesList()`

```php
extrasConfigTemplatesList($auto_sync_enabled, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $data_file_id, $data_file_id__n, $data_source_id, $data_source_id__n, $data_synced, $data_synced__empty, $data_synced__gt, $data_synced__gte, $data_synced__lt, $data_synced__lte, $data_synced__n, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $tag, $tag__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedConfigTemplateList
```



Get a list of config template objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auto_sync_enabled = True; // bool
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
$data_file_id = array(56); // int[] | Data file (ID)
$data_file_id__n = array(56); // int[] | Data file (ID)
$data_source_id = array(56); // int[] | Data source (ID)
$data_source_id__n = array(56); // int[] | Data source (ID)
$data_synced = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__empty = True; // bool
$data_synced__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
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
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->extrasConfigTemplatesList($auto_sync_enabled, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $data_file_id, $data_file_id__n, $data_source_id, $data_source_id__n, $data_synced, $data_synced__empty, $data_synced__gt, $data_synced__gte, $data_synced__lt, $data_synced__lte, $data_synced__n, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q, $tag, $tag__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigTemplatesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auto_sync_enabled** | **bool**|  | [optional] |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
| **data_file_id** | [**int[]**](../Model/int.md)| Data file (ID) | [optional] |
| **data_file_id__n** | [**int[]**](../Model/int.md)| Data file (ID) | [optional] |
| **data_source_id** | [**int[]**](../Model/int.md)| Data source (ID) | [optional] |
| **data_source_id__n** | [**int[]**](../Model/int.md)| Data source (ID) | [optional] |
| **data_synced** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__empty** | **bool**|  | [optional] |
| **data_synced__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
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
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedConfigTemplateList**](../Model/PaginatedConfigTemplateList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigTemplatesPartialUpdate()`

```php
extrasConfigTemplatesPartialUpdate($id, $patched_config_template_request): \OpenAPI\Client\Model\ConfigTemplate
```



Patch a config template object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this config template.
$patched_config_template_request = new \OpenAPI\Client\Model\PatchedConfigTemplateRequest(); // \OpenAPI\Client\Model\PatchedConfigTemplateRequest

try {
    $result = $apiInstance->extrasConfigTemplatesPartialUpdate($id, $patched_config_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigTemplatesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this config template. | |
| **patched_config_template_request** | [**\OpenAPI\Client\Model\PatchedConfigTemplateRequest**](../Model/PatchedConfigTemplateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConfigTemplate**](../Model/ConfigTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigTemplatesRenderCreate()`

```php
extrasConfigTemplatesRenderCreate($id, $config_template_request, $format): \OpenAPI\Client\Model\ConfigTemplate
```



Render a ConfigTemplate using the context data provided (if any). If the client requests \"text/plain\" data, return the raw rendered content, rather than serialized JSON.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this config template.
$config_template_request = new \OpenAPI\Client\Model\ConfigTemplateRequest(); // \OpenAPI\Client\Model\ConfigTemplateRequest
$format = 'format_example'; // string

try {
    $result = $apiInstance->extrasConfigTemplatesRenderCreate($id, $config_template_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigTemplatesRenderCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this config template. | |
| **config_template_request** | [**\OpenAPI\Client\Model\ConfigTemplateRequest**](../Model/ConfigTemplateRequest.md)|  | |
| **format** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConfigTemplate**](../Model/ConfigTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigTemplatesRetrieve()`

```php
extrasConfigTemplatesRetrieve($id): \OpenAPI\Client\Model\ConfigTemplate
```



Get a config template object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this config template.

try {
    $result = $apiInstance->extrasConfigTemplatesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigTemplatesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this config template. | |

### Return type

[**\OpenAPI\Client\Model\ConfigTemplate**](../Model/ConfigTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigTemplatesSyncCreate()`

```php
extrasConfigTemplatesSyncCreate($id, $config_template_request): \OpenAPI\Client\Model\ConfigTemplate
```



Provide a /sync API endpoint to synchronize an object's data from its associated DataFile (if any).

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this config template.
$config_template_request = new \OpenAPI\Client\Model\ConfigTemplateRequest(); // \OpenAPI\Client\Model\ConfigTemplateRequest

try {
    $result = $apiInstance->extrasConfigTemplatesSyncCreate($id, $config_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigTemplatesSyncCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this config template. | |
| **config_template_request** | [**\OpenAPI\Client\Model\ConfigTemplateRequest**](../Model/ConfigTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigTemplate**](../Model/ConfigTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasConfigTemplatesUpdate()`

```php
extrasConfigTemplatesUpdate($id, $config_template_request): \OpenAPI\Client\Model\ConfigTemplate
```



Put a config template object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this config template.
$config_template_request = new \OpenAPI\Client\Model\ConfigTemplateRequest(); // \OpenAPI\Client\Model\ConfigTemplateRequest

try {
    $result = $apiInstance->extrasConfigTemplatesUpdate($id, $config_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasConfigTemplatesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this config template. | |
| **config_template_request** | [**\OpenAPI\Client\Model\ConfigTemplateRequest**](../Model/ConfigTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConfigTemplate**](../Model/ConfigTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldChoiceSetsBulkDestroy()`

```php
extrasCustomFieldChoiceSetsBulkDestroy($custom_field_choice_set_request)
```



Delete a list of custom field choice set objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_choice_set_request = array(new \OpenAPI\Client\Model\CustomFieldChoiceSetRequest()); // \OpenAPI\Client\Model\CustomFieldChoiceSetRequest[]

try {
    $apiInstance->extrasCustomFieldChoiceSetsBulkDestroy($custom_field_choice_set_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldChoiceSetsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_choice_set_request** | [**\OpenAPI\Client\Model\CustomFieldChoiceSetRequest[]**](../Model/CustomFieldChoiceSetRequest.md)|  | |

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

## `extrasCustomFieldChoiceSetsBulkPartialUpdate()`

```php
extrasCustomFieldChoiceSetsBulkPartialUpdate($custom_field_choice_set_request): \OpenAPI\Client\Model\CustomFieldChoiceSet[]
```



Patch a list of custom field choice set objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_choice_set_request = array(new \OpenAPI\Client\Model\CustomFieldChoiceSetRequest()); // \OpenAPI\Client\Model\CustomFieldChoiceSetRequest[]

try {
    $result = $apiInstance->extrasCustomFieldChoiceSetsBulkPartialUpdate($custom_field_choice_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldChoiceSetsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_choice_set_request** | [**\OpenAPI\Client\Model\CustomFieldChoiceSetRequest[]**](../Model/CustomFieldChoiceSetRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomFieldChoiceSet[]**](../Model/CustomFieldChoiceSet.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldChoiceSetsBulkUpdate()`

```php
extrasCustomFieldChoiceSetsBulkUpdate($custom_field_choice_set_request): \OpenAPI\Client\Model\CustomFieldChoiceSet[]
```



Put a list of custom field choice set objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_choice_set_request = array(new \OpenAPI\Client\Model\CustomFieldChoiceSetRequest()); // \OpenAPI\Client\Model\CustomFieldChoiceSetRequest[]

try {
    $result = $apiInstance->extrasCustomFieldChoiceSetsBulkUpdate($custom_field_choice_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldChoiceSetsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_choice_set_request** | [**\OpenAPI\Client\Model\CustomFieldChoiceSetRequest[]**](../Model/CustomFieldChoiceSetRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomFieldChoiceSet[]**](../Model/CustomFieldChoiceSet.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldChoiceSetsChoicesRetrieve()`

```php
extrasCustomFieldChoiceSetsChoicesRetrieve($id): \OpenAPI\Client\Model\CustomFieldChoiceSet
```



Provides an endpoint to iterate through each choice in a set.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom field choice set.

try {
    $result = $apiInstance->extrasCustomFieldChoiceSetsChoicesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldChoiceSetsChoicesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom field choice set. | |

### Return type

[**\OpenAPI\Client\Model\CustomFieldChoiceSet**](../Model/CustomFieldChoiceSet.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldChoiceSetsCreate()`

```php
extrasCustomFieldChoiceSetsCreate($writable_custom_field_choice_set_request): \OpenAPI\Client\Model\CustomFieldChoiceSet
```



Post a list of custom field choice set objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_custom_field_choice_set_request = new \OpenAPI\Client\Model\WritableCustomFieldChoiceSetRequest(); // \OpenAPI\Client\Model\WritableCustomFieldChoiceSetRequest

try {
    $result = $apiInstance->extrasCustomFieldChoiceSetsCreate($writable_custom_field_choice_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldChoiceSetsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_custom_field_choice_set_request** | [**\OpenAPI\Client\Model\WritableCustomFieldChoiceSetRequest**](../Model/WritableCustomFieldChoiceSetRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomFieldChoiceSet**](../Model/CustomFieldChoiceSet.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldChoiceSetsDestroy()`

```php
extrasCustomFieldChoiceSetsDestroy($id)
```



Delete a custom field choice set object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom field choice set.

try {
    $apiInstance->extrasCustomFieldChoiceSetsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldChoiceSetsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom field choice set. | |

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

## `extrasCustomFieldChoiceSetsList()`

```php
extrasCustomFieldChoiceSetsList($base_choices, $base_choices__n, $choice, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $order_alphabetically, $ordering, $q, $updated_by_request): \OpenAPI\Client\Model\PaginatedCustomFieldChoiceSetList
```



Get a list of custom field choice set objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_choices = 'base_choices_example'; // string | Base set of predefined choices (optional)  * `IATA` - IATA (Airport codes) * `ISO_3166` - ISO 3166 (Country codes) * `UN_LOCODE` - UN/LOCODE (Location codes)
$base_choices__n = 'base_choices__n_example'; // string | Base set of predefined choices (optional)  * `IATA` - IATA (Airport codes) * `ISO_3166` - ISO 3166 (Country codes) * `UN_LOCODE` - UN/LOCODE (Location codes)
$choice = array('choice_example'); // string[]
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
$order_alphabetically = True; // bool
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->extrasCustomFieldChoiceSetsList($base_choices, $base_choices__n, $choice, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $order_alphabetically, $ordering, $q, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldChoiceSetsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_choices** | **string**| Base set of predefined choices (optional)  * &#x60;IATA&#x60; - IATA (Airport codes) * &#x60;ISO_3166&#x60; - ISO 3166 (Country codes) * &#x60;UN_LOCODE&#x60; - UN/LOCODE (Location codes) | [optional] |
| **base_choices__n** | **string**| Base set of predefined choices (optional)  * &#x60;IATA&#x60; - IATA (Airport codes) * &#x60;ISO_3166&#x60; - ISO 3166 (Country codes) * &#x60;UN_LOCODE&#x60; - UN/LOCODE (Location codes) | [optional] |
| **choice** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **order_alphabetically** | **bool**|  | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedCustomFieldChoiceSetList**](../Model/PaginatedCustomFieldChoiceSetList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldChoiceSetsPartialUpdate()`

```php
extrasCustomFieldChoiceSetsPartialUpdate($id, $patched_writable_custom_field_choice_set_request): \OpenAPI\Client\Model\CustomFieldChoiceSet
```



Patch a custom field choice set object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom field choice set.
$patched_writable_custom_field_choice_set_request = new \OpenAPI\Client\Model\PatchedWritableCustomFieldChoiceSetRequest(); // \OpenAPI\Client\Model\PatchedWritableCustomFieldChoiceSetRequest

try {
    $result = $apiInstance->extrasCustomFieldChoiceSetsPartialUpdate($id, $patched_writable_custom_field_choice_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldChoiceSetsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom field choice set. | |
| **patched_writable_custom_field_choice_set_request** | [**\OpenAPI\Client\Model\PatchedWritableCustomFieldChoiceSetRequest**](../Model/PatchedWritableCustomFieldChoiceSetRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomFieldChoiceSet**](../Model/CustomFieldChoiceSet.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldChoiceSetsRetrieve()`

```php
extrasCustomFieldChoiceSetsRetrieve($id): \OpenAPI\Client\Model\CustomFieldChoiceSet
```



Get a custom field choice set object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom field choice set.

try {
    $result = $apiInstance->extrasCustomFieldChoiceSetsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldChoiceSetsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom field choice set. | |

### Return type

[**\OpenAPI\Client\Model\CustomFieldChoiceSet**](../Model/CustomFieldChoiceSet.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldChoiceSetsUpdate()`

```php
extrasCustomFieldChoiceSetsUpdate($id, $writable_custom_field_choice_set_request): \OpenAPI\Client\Model\CustomFieldChoiceSet
```



Put a custom field choice set object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom field choice set.
$writable_custom_field_choice_set_request = new \OpenAPI\Client\Model\WritableCustomFieldChoiceSetRequest(); // \OpenAPI\Client\Model\WritableCustomFieldChoiceSetRequest

try {
    $result = $apiInstance->extrasCustomFieldChoiceSetsUpdate($id, $writable_custom_field_choice_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldChoiceSetsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom field choice set. | |
| **writable_custom_field_choice_set_request** | [**\OpenAPI\Client\Model\WritableCustomFieldChoiceSetRequest**](../Model/WritableCustomFieldChoiceSetRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomFieldChoiceSet**](../Model/CustomFieldChoiceSet.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldsBulkDestroy()`

```php
extrasCustomFieldsBulkDestroy($custom_field_request)
```



Delete a list of custom field objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_request = array(new \OpenAPI\Client\Model\CustomFieldRequest()); // \OpenAPI\Client\Model\CustomFieldRequest[]

try {
    $apiInstance->extrasCustomFieldsBulkDestroy($custom_field_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_request** | [**\OpenAPI\Client\Model\CustomFieldRequest[]**](../Model/CustomFieldRequest.md)|  | |

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

## `extrasCustomFieldsBulkPartialUpdate()`

```php
extrasCustomFieldsBulkPartialUpdate($custom_field_request): \OpenAPI\Client\Model\CustomField[]
```



Patch a list of custom field objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_request = array(new \OpenAPI\Client\Model\CustomFieldRequest()); // \OpenAPI\Client\Model\CustomFieldRequest[]

try {
    $result = $apiInstance->extrasCustomFieldsBulkPartialUpdate($custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_request** | [**\OpenAPI\Client\Model\CustomFieldRequest[]**](../Model/CustomFieldRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomField[]**](../Model/CustomField.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldsBulkUpdate()`

```php
extrasCustomFieldsBulkUpdate($custom_field_request): \OpenAPI\Client\Model\CustomField[]
```



Put a list of custom field objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_request = array(new \OpenAPI\Client\Model\CustomFieldRequest()); // \OpenAPI\Client\Model\CustomFieldRequest[]

try {
    $result = $apiInstance->extrasCustomFieldsBulkUpdate($custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_field_request** | [**\OpenAPI\Client\Model\CustomFieldRequest[]**](../Model/CustomFieldRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomField[]**](../Model/CustomField.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldsCreate()`

```php
extrasCustomFieldsCreate($writable_custom_field_request): \OpenAPI\Client\Model\CustomField
```



Post a list of custom field objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_custom_field_request = new \OpenAPI\Client\Model\WritableCustomFieldRequest(); // \OpenAPI\Client\Model\WritableCustomFieldRequest

try {
    $result = $apiInstance->extrasCustomFieldsCreate($writable_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_custom_field_request** | [**\OpenAPI\Client\Model\WritableCustomFieldRequest**](../Model/WritableCustomFieldRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomField**](../Model/CustomField.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldsDestroy()`

```php
extrasCustomFieldsDestroy($id)
```



Delete a custom field object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom field.

try {
    $apiInstance->extrasCustomFieldsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom field. | |

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

## `extrasCustomFieldsList()`

```php
extrasCustomFieldsList($choice_set, $choice_set__n, $choice_set_id, $choice_set_id__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $filter_logic, $filter_logic__n, $group_name, $group_name__empty, $group_name__ic, $group_name__ie, $group_name__iew, $group_name__isw, $group_name__n, $group_name__nic, $group_name__nie, $group_name__niew, $group_name__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $is_cloneable, $label, $label__empty, $label__ic, $label__ie, $label__iew, $label__isw, $label__n, $label__nic, $label__nie, $label__niew, $label__nisw, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_type, $object_type__ic, $object_type__ie, $object_type__iew, $object_type__isw, $object_type__n, $object_type__nic, $object_type__nie, $object_type__niew, $object_type__nisw, $object_type_id, $object_type_id__n, $offset, $ordering, $q, $related_object_type, $related_object_type__n, $related_object_type_id, $related_object_type_id__n, $required, $search_weight, $search_weight__empty, $search_weight__gt, $search_weight__gte, $search_weight__lt, $search_weight__lte, $search_weight__n, $type, $type__n, $ui_editable, $ui_editable__n, $ui_visible, $ui_visible__n, $unique, $updated_by_request, $validation_maximum, $validation_maximum__empty, $validation_maximum__gt, $validation_maximum__gte, $validation_maximum__lt, $validation_maximum__lte, $validation_maximum__n, $validation_minimum, $validation_minimum__empty, $validation_minimum__gt, $validation_minimum__gte, $validation_minimum__lt, $validation_minimum__lte, $validation_minimum__n, $validation_regex, $validation_regex__empty, $validation_regex__ic, $validation_regex__ie, $validation_regex__iew, $validation_regex__isw, $validation_regex__n, $validation_regex__nic, $validation_regex__nie, $validation_regex__niew, $validation_regex__nisw, $weight, $weight__empty, $weight__gt, $weight__gte, $weight__lt, $weight__lte, $weight__n): \OpenAPI\Client\Model\PaginatedCustomFieldList
```



Get a list of custom field objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$choice_set = array('choice_set_example'); // string[]
$choice_set__n = array('choice_set__n_example'); // string[]
$choice_set_id = array(56); // int[]
$choice_set_id__n = array(56); // int[]
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
$filter_logic = 'filter_logic_example'; // string | Loose matches any instance of a given string; exact matches the entire field.  * `disabled` - Disabled * `loose` - Loose * `exact` - Exact
$filter_logic__n = 'filter_logic__n_example'; // string | Loose matches any instance of a given string; exact matches the entire field.  * `disabled` - Disabled * `loose` - Loose * `exact` - Exact
$group_name = array('group_name_example'); // string[]
$group_name__empty = True; // bool
$group_name__ic = array('group_name__ic_example'); // string[]
$group_name__ie = array('group_name__ie_example'); // string[]
$group_name__iew = array('group_name__iew_example'); // string[]
$group_name__isw = array('group_name__isw_example'); // string[]
$group_name__n = array('group_name__n_example'); // string[]
$group_name__nic = array('group_name__nic_example'); // string[]
$group_name__nie = array('group_name__nie_example'); // string[]
$group_name__niew = array('group_name__niew_example'); // string[]
$group_name__nisw = array('group_name__nisw_example'); // string[]
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$is_cloneable = True; // bool
$label = array('label_example'); // string[]
$label__empty = True; // bool
$label__ic = array('label__ic_example'); // string[]
$label__ie = array('label__ie_example'); // string[]
$label__iew = array('label__iew_example'); // string[]
$label__isw = array('label__isw_example'); // string[]
$label__n = array('label__n_example'); // string[]
$label__nic = array('label__nic_example'); // string[]
$label__nie = array('label__nie_example'); // string[]
$label__niew = array('label__niew_example'); // string[]
$label__nisw = array('label__nisw_example'); // string[]
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
$object_type = 'object_type_example'; // string
$object_type__ic = 'object_type__ic_example'; // string
$object_type__ie = 'object_type__ie_example'; // string
$object_type__iew = 'object_type__iew_example'; // string
$object_type__isw = 'object_type__isw_example'; // string
$object_type__n = 'object_type__n_example'; // string
$object_type__nic = 'object_type__nic_example'; // string
$object_type__nie = 'object_type__nie_example'; // string
$object_type__niew = 'object_type__niew_example'; // string
$object_type__nisw = 'object_type__nisw_example'; // string
$object_type_id = array(56); // int[]
$object_type_id__n = array(56); // int[]
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$related_object_type = 'related_object_type_example'; // string
$related_object_type__n = 'related_object_type__n_example'; // string
$related_object_type_id = array(56); // int[]
$related_object_type_id__n = array(56); // int[]
$required = True; // bool
$search_weight = array(56); // int[]
$search_weight__empty = True; // bool
$search_weight__gt = array(56); // int[]
$search_weight__gte = array(56); // int[]
$search_weight__lt = array(56); // int[]
$search_weight__lte = array(56); // int[]
$search_weight__n = array(56); // int[]
$type = array('type_example'); // string[] | The type of data this custom field holds
$type__n = array('type__n_example'); // string[] | The type of data this custom field holds
$ui_editable = 'ui_editable_example'; // string | Specifies whether the custom field value can be edited in the UI  * `yes` - Yes * `no` - No * `hidden` - Hidden
$ui_editable__n = 'ui_editable__n_example'; // string | Specifies whether the custom field value can be edited in the UI  * `yes` - Yes * `no` - No * `hidden` - Hidden
$ui_visible = 'ui_visible_example'; // string | Specifies whether the custom field is displayed in the UI  * `always` - Always * `if-set` - If set * `hidden` - Hidden
$ui_visible__n = 'ui_visible__n_example'; // string | Specifies whether the custom field is displayed in the UI  * `always` - Always * `if-set` - If set * `hidden` - Hidden
$unique = True; // bool
$updated_by_request = 'updated_by_request_example'; // string
$validation_maximum = array(56); // int[]
$validation_maximum__empty = True; // bool
$validation_maximum__gt = array(56); // int[]
$validation_maximum__gte = array(56); // int[]
$validation_maximum__lt = array(56); // int[]
$validation_maximum__lte = array(56); // int[]
$validation_maximum__n = array(56); // int[]
$validation_minimum = array(56); // int[]
$validation_minimum__empty = True; // bool
$validation_minimum__gt = array(56); // int[]
$validation_minimum__gte = array(56); // int[]
$validation_minimum__lt = array(56); // int[]
$validation_minimum__lte = array(56); // int[]
$validation_minimum__n = array(56); // int[]
$validation_regex = array('validation_regex_example'); // string[]
$validation_regex__empty = True; // bool
$validation_regex__ic = array('validation_regex__ic_example'); // string[]
$validation_regex__ie = array('validation_regex__ie_example'); // string[]
$validation_regex__iew = array('validation_regex__iew_example'); // string[]
$validation_regex__isw = array('validation_regex__isw_example'); // string[]
$validation_regex__n = array('validation_regex__n_example'); // string[]
$validation_regex__nic = array('validation_regex__nic_example'); // string[]
$validation_regex__nie = array('validation_regex__nie_example'); // string[]
$validation_regex__niew = array('validation_regex__niew_example'); // string[]
$validation_regex__nisw = array('validation_regex__nisw_example'); // string[]
$weight = array(56); // int[]
$weight__empty = True; // bool
$weight__gt = array(56); // int[]
$weight__gte = array(56); // int[]
$weight__lt = array(56); // int[]
$weight__lte = array(56); // int[]
$weight__n = array(56); // int[]

try {
    $result = $apiInstance->extrasCustomFieldsList($choice_set, $choice_set__n, $choice_set_id, $choice_set_id__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $filter_logic, $filter_logic__n, $group_name, $group_name__empty, $group_name__ic, $group_name__ie, $group_name__iew, $group_name__isw, $group_name__n, $group_name__nic, $group_name__nie, $group_name__niew, $group_name__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $is_cloneable, $label, $label__empty, $label__ic, $label__ie, $label__iew, $label__isw, $label__n, $label__nic, $label__nie, $label__niew, $label__nisw, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_type, $object_type__ic, $object_type__ie, $object_type__iew, $object_type__isw, $object_type__n, $object_type__nic, $object_type__nie, $object_type__niew, $object_type__nisw, $object_type_id, $object_type_id__n, $offset, $ordering, $q, $related_object_type, $related_object_type__n, $related_object_type_id, $related_object_type_id__n, $required, $search_weight, $search_weight__empty, $search_weight__gt, $search_weight__gte, $search_weight__lt, $search_weight__lte, $search_weight__n, $type, $type__n, $ui_editable, $ui_editable__n, $ui_visible, $ui_visible__n, $unique, $updated_by_request, $validation_maximum, $validation_maximum__empty, $validation_maximum__gt, $validation_maximum__gte, $validation_maximum__lt, $validation_maximum__lte, $validation_maximum__n, $validation_minimum, $validation_minimum__empty, $validation_minimum__gt, $validation_minimum__gte, $validation_minimum__lt, $validation_minimum__lte, $validation_minimum__n, $validation_regex, $validation_regex__empty, $validation_regex__ic, $validation_regex__ie, $validation_regex__iew, $validation_regex__isw, $validation_regex__n, $validation_regex__nic, $validation_regex__nie, $validation_regex__niew, $validation_regex__nisw, $weight, $weight__empty, $weight__gt, $weight__gte, $weight__lt, $weight__lte, $weight__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **choice_set** | [**string[]**](../Model/string.md)|  | [optional] |
| **choice_set__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **choice_set_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **choice_set_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **filter_logic** | **string**| Loose matches any instance of a given string; exact matches the entire field.  * &#x60;disabled&#x60; - Disabled * &#x60;loose&#x60; - Loose * &#x60;exact&#x60; - Exact | [optional] |
| **filter_logic__n** | **string**| Loose matches any instance of a given string; exact matches the entire field.  * &#x60;disabled&#x60; - Disabled * &#x60;loose&#x60; - Loose * &#x60;exact&#x60; - Exact | [optional] |
| **group_name** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__empty** | **bool**|  | [optional] |
| **group_name__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **is_cloneable** | **bool**|  | [optional] |
| **label** | [**string[]**](../Model/string.md)|  | [optional] |
| **label__empty** | **bool**|  | [optional] |
| **label__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **label__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **label__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **label__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **label__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **label__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **label__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **label__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **label__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **object_type** | **string**|  | [optional] |
| **object_type__ic** | **string**|  | [optional] |
| **object_type__ie** | **string**|  | [optional] |
| **object_type__iew** | **string**|  | [optional] |
| **object_type__isw** | **string**|  | [optional] |
| **object_type__n** | **string**|  | [optional] |
| **object_type__nic** | **string**|  | [optional] |
| **object_type__nie** | **string**|  | [optional] |
| **object_type__niew** | **string**|  | [optional] |
| **object_type__nisw** | **string**|  | [optional] |
| **object_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **related_object_type** | **string**|  | [optional] |
| **related_object_type__n** | **string**|  | [optional] |
| **related_object_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **related_object_type_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **required** | **bool**|  | [optional] |
| **search_weight** | [**int[]**](../Model/int.md)|  | [optional] |
| **search_weight__empty** | **bool**|  | [optional] |
| **search_weight__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **search_weight__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **search_weight__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **search_weight__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **search_weight__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **type** | [**string[]**](../Model/string.md)| The type of data this custom field holds | [optional] |
| **type__n** | [**string[]**](../Model/string.md)| The type of data this custom field holds | [optional] |
| **ui_editable** | **string**| Specifies whether the custom field value can be edited in the UI  * &#x60;yes&#x60; - Yes * &#x60;no&#x60; - No * &#x60;hidden&#x60; - Hidden | [optional] |
| **ui_editable__n** | **string**| Specifies whether the custom field value can be edited in the UI  * &#x60;yes&#x60; - Yes * &#x60;no&#x60; - No * &#x60;hidden&#x60; - Hidden | [optional] |
| **ui_visible** | **string**| Specifies whether the custom field is displayed in the UI  * &#x60;always&#x60; - Always * &#x60;if-set&#x60; - If set * &#x60;hidden&#x60; - Hidden | [optional] |
| **ui_visible__n** | **string**| Specifies whether the custom field is displayed in the UI  * &#x60;always&#x60; - Always * &#x60;if-set&#x60; - If set * &#x60;hidden&#x60; - Hidden | [optional] |
| **unique** | **bool**|  | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **validation_maximum** | [**int[]**](../Model/int.md)|  | [optional] |
| **validation_maximum__empty** | **bool**|  | [optional] |
| **validation_maximum__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **validation_maximum__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **validation_maximum__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **validation_maximum__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **validation_maximum__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **validation_minimum** | [**int[]**](../Model/int.md)|  | [optional] |
| **validation_minimum__empty** | **bool**|  | [optional] |
| **validation_minimum__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **validation_minimum__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **validation_minimum__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **validation_minimum__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **validation_minimum__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **validation_regex** | [**string[]**](../Model/string.md)|  | [optional] |
| **validation_regex__empty** | **bool**|  | [optional] |
| **validation_regex__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **validation_regex__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **validation_regex__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **validation_regex__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **validation_regex__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **validation_regex__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **validation_regex__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **validation_regex__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **validation_regex__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **weight** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__empty** | **bool**|  | [optional] |
| **weight__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__n** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedCustomFieldList**](../Model/PaginatedCustomFieldList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldsPartialUpdate()`

```php
extrasCustomFieldsPartialUpdate($id, $patched_writable_custom_field_request): \OpenAPI\Client\Model\CustomField
```



Patch a custom field object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom field.
$patched_writable_custom_field_request = new \OpenAPI\Client\Model\PatchedWritableCustomFieldRequest(); // \OpenAPI\Client\Model\PatchedWritableCustomFieldRequest

try {
    $result = $apiInstance->extrasCustomFieldsPartialUpdate($id, $patched_writable_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom field. | |
| **patched_writable_custom_field_request** | [**\OpenAPI\Client\Model\PatchedWritableCustomFieldRequest**](../Model/PatchedWritableCustomFieldRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomField**](../Model/CustomField.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldsRetrieve()`

```php
extrasCustomFieldsRetrieve($id): \OpenAPI\Client\Model\CustomField
```



Get a custom field object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom field.

try {
    $result = $apiInstance->extrasCustomFieldsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom field. | |

### Return type

[**\OpenAPI\Client\Model\CustomField**](../Model/CustomField.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomFieldsUpdate()`

```php
extrasCustomFieldsUpdate($id, $writable_custom_field_request): \OpenAPI\Client\Model\CustomField
```



Put a custom field object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom field.
$writable_custom_field_request = new \OpenAPI\Client\Model\WritableCustomFieldRequest(); // \OpenAPI\Client\Model\WritableCustomFieldRequest

try {
    $result = $apiInstance->extrasCustomFieldsUpdate($id, $writable_custom_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomFieldsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom field. | |
| **writable_custom_field_request** | [**\OpenAPI\Client\Model\WritableCustomFieldRequest**](../Model/WritableCustomFieldRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomField**](../Model/CustomField.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomLinksBulkDestroy()`

```php
extrasCustomLinksBulkDestroy($custom_link_request)
```



Delete a list of custom link objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_link_request = array(new \OpenAPI\Client\Model\CustomLinkRequest()); // \OpenAPI\Client\Model\CustomLinkRequest[]

try {
    $apiInstance->extrasCustomLinksBulkDestroy($custom_link_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomLinksBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_link_request** | [**\OpenAPI\Client\Model\CustomLinkRequest[]**](../Model/CustomLinkRequest.md)|  | |

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

## `extrasCustomLinksBulkPartialUpdate()`

```php
extrasCustomLinksBulkPartialUpdate($custom_link_request): \OpenAPI\Client\Model\CustomLink[]
```



Patch a list of custom link objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_link_request = array(new \OpenAPI\Client\Model\CustomLinkRequest()); // \OpenAPI\Client\Model\CustomLinkRequest[]

try {
    $result = $apiInstance->extrasCustomLinksBulkPartialUpdate($custom_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomLinksBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_link_request** | [**\OpenAPI\Client\Model\CustomLinkRequest[]**](../Model/CustomLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomLink[]**](../Model/CustomLink.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomLinksBulkUpdate()`

```php
extrasCustomLinksBulkUpdate($custom_link_request): \OpenAPI\Client\Model\CustomLink[]
```



Put a list of custom link objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_link_request = array(new \OpenAPI\Client\Model\CustomLinkRequest()); // \OpenAPI\Client\Model\CustomLinkRequest[]

try {
    $result = $apiInstance->extrasCustomLinksBulkUpdate($custom_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomLinksBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_link_request** | [**\OpenAPI\Client\Model\CustomLinkRequest[]**](../Model/CustomLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomLink[]**](../Model/CustomLink.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomLinksCreate()`

```php
extrasCustomLinksCreate($custom_link_request): \OpenAPI\Client\Model\CustomLink
```



Post a list of custom link objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_link_request = new \OpenAPI\Client\Model\CustomLinkRequest(); // \OpenAPI\Client\Model\CustomLinkRequest

try {
    $result = $apiInstance->extrasCustomLinksCreate($custom_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomLinksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_link_request** | [**\OpenAPI\Client\Model\CustomLinkRequest**](../Model/CustomLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomLink**](../Model/CustomLink.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomLinksDestroy()`

```php
extrasCustomLinksDestroy($id)
```



Delete a custom link object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom link.

try {
    $apiInstance->extrasCustomLinksDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomLinksDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom link. | |

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

## `extrasCustomLinksList()`

```php
extrasCustomLinksList($button_class, $button_class__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $enabled, $group_name, $group_name__empty, $group_name__ic, $group_name__ie, $group_name__iew, $group_name__isw, $group_name__n, $group_name__nic, $group_name__nie, $group_name__niew, $group_name__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $link_text, $link_text__ic, $link_text__ie, $link_text__iew, $link_text__isw, $link_text__n, $link_text__nic, $link_text__nie, $link_text__niew, $link_text__nisw, $link_url, $link_url__ic, $link_url__ie, $link_url__iew, $link_url__isw, $link_url__n, $link_url__nic, $link_url__nie, $link_url__niew, $link_url__nisw, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $new_window, $object_type, $object_type__ic, $object_type__ie, $object_type__iew, $object_type__isw, $object_type__n, $object_type__nic, $object_type__nie, $object_type__niew, $object_type__nisw, $object_type_id, $object_type_id__n, $offset, $ordering, $q, $updated_by_request, $weight, $weight__empty, $weight__gt, $weight__gte, $weight__lt, $weight__lte, $weight__n): \OpenAPI\Client\Model\PaginatedCustomLinkList
```



Get a list of custom link objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$button_class = 'button_class_example'; // string | The class of the first link in a group will be used for the dropdown button  * `default` - Default * `blue` - Blue * `indigo` - Indigo * `purple` - Purple * `pink` - Pink * `red` - Red * `orange` - Orange * `yellow` - Yellow * `green` - Green * `teal` - Teal * `cyan` - Cyan * `gray` - Gray * `black` - Black * `white` - White * `ghost-dark` - Link
$button_class__n = 'button_class__n_example'; // string | The class of the first link in a group will be used for the dropdown button  * `default` - Default * `blue` - Blue * `indigo` - Indigo * `purple` - Purple * `pink` - Pink * `red` - Red * `orange` - Orange * `yellow` - Yellow * `green` - Green * `teal` - Teal * `cyan` - Cyan * `gray` - Gray * `black` - Black * `white` - White * `ghost-dark` - Link
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
$enabled = True; // bool
$group_name = array('group_name_example'); // string[]
$group_name__empty = True; // bool
$group_name__ic = array('group_name__ic_example'); // string[]
$group_name__ie = array('group_name__ie_example'); // string[]
$group_name__iew = array('group_name__iew_example'); // string[]
$group_name__isw = array('group_name__isw_example'); // string[]
$group_name__n = array('group_name__n_example'); // string[]
$group_name__nic = array('group_name__nic_example'); // string[]
$group_name__nie = array('group_name__nie_example'); // string[]
$group_name__niew = array('group_name__niew_example'); // string[]
$group_name__nisw = array('group_name__nisw_example'); // string[]
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
$link_text = 'link_text_example'; // string
$link_text__ic = 'link_text__ic_example'; // string
$link_text__ie = 'link_text__ie_example'; // string
$link_text__iew = 'link_text__iew_example'; // string
$link_text__isw = 'link_text__isw_example'; // string
$link_text__n = 'link_text__n_example'; // string
$link_text__nic = 'link_text__nic_example'; // string
$link_text__nie = 'link_text__nie_example'; // string
$link_text__niew = 'link_text__niew_example'; // string
$link_text__nisw = 'link_text__nisw_example'; // string
$link_url = 'link_url_example'; // string
$link_url__ic = 'link_url__ic_example'; // string
$link_url__ie = 'link_url__ie_example'; // string
$link_url__iew = 'link_url__iew_example'; // string
$link_url__isw = 'link_url__isw_example'; // string
$link_url__n = 'link_url__n_example'; // string
$link_url__nic = 'link_url__nic_example'; // string
$link_url__nie = 'link_url__nie_example'; // string
$link_url__niew = 'link_url__niew_example'; // string
$link_url__nisw = 'link_url__nisw_example'; // string
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
$new_window = True; // bool
$object_type = 'object_type_example'; // string
$object_type__ic = 'object_type__ic_example'; // string
$object_type__ie = 'object_type__ie_example'; // string
$object_type__iew = 'object_type__iew_example'; // string
$object_type__isw = 'object_type__isw_example'; // string
$object_type__n = 'object_type__n_example'; // string
$object_type__nic = 'object_type__nic_example'; // string
$object_type__nie = 'object_type__nie_example'; // string
$object_type__niew = 'object_type__niew_example'; // string
$object_type__nisw = 'object_type__nisw_example'; // string
$object_type_id = array(56); // int[]
$object_type_id__n = array(56); // int[]
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$updated_by_request = 'updated_by_request_example'; // string
$weight = array(56); // int[]
$weight__empty = True; // bool
$weight__gt = array(56); // int[]
$weight__gte = array(56); // int[]
$weight__lt = array(56); // int[]
$weight__lte = array(56); // int[]
$weight__n = array(56); // int[]

try {
    $result = $apiInstance->extrasCustomLinksList($button_class, $button_class__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $enabled, $group_name, $group_name__empty, $group_name__ic, $group_name__ie, $group_name__iew, $group_name__isw, $group_name__n, $group_name__nic, $group_name__nie, $group_name__niew, $group_name__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $link_text, $link_text__ic, $link_text__ie, $link_text__iew, $link_text__isw, $link_text__n, $link_text__nic, $link_text__nie, $link_text__niew, $link_text__nisw, $link_url, $link_url__ic, $link_url__ie, $link_url__iew, $link_url__isw, $link_url__n, $link_url__nic, $link_url__nie, $link_url__niew, $link_url__nisw, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $new_window, $object_type, $object_type__ic, $object_type__ie, $object_type__iew, $object_type__isw, $object_type__n, $object_type__nic, $object_type__nie, $object_type__niew, $object_type__nisw, $object_type_id, $object_type_id__n, $offset, $ordering, $q, $updated_by_request, $weight, $weight__empty, $weight__gt, $weight__gte, $weight__lt, $weight__lte, $weight__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomLinksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **button_class** | **string**| The class of the first link in a group will be used for the dropdown button  * &#x60;default&#x60; - Default * &#x60;blue&#x60; - Blue * &#x60;indigo&#x60; - Indigo * &#x60;purple&#x60; - Purple * &#x60;pink&#x60; - Pink * &#x60;red&#x60; - Red * &#x60;orange&#x60; - Orange * &#x60;yellow&#x60; - Yellow * &#x60;green&#x60; - Green * &#x60;teal&#x60; - Teal * &#x60;cyan&#x60; - Cyan * &#x60;gray&#x60; - Gray * &#x60;black&#x60; - Black * &#x60;white&#x60; - White * &#x60;ghost-dark&#x60; - Link | [optional] |
| **button_class__n** | **string**| The class of the first link in a group will be used for the dropdown button  * &#x60;default&#x60; - Default * &#x60;blue&#x60; - Blue * &#x60;indigo&#x60; - Indigo * &#x60;purple&#x60; - Purple * &#x60;pink&#x60; - Pink * &#x60;red&#x60; - Red * &#x60;orange&#x60; - Orange * &#x60;yellow&#x60; - Yellow * &#x60;green&#x60; - Green * &#x60;teal&#x60; - Teal * &#x60;cyan&#x60; - Cyan * &#x60;gray&#x60; - Gray * &#x60;black&#x60; - Black * &#x60;white&#x60; - White * &#x60;ghost-dark&#x60; - Link | [optional] |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
| **enabled** | **bool**|  | [optional] |
| **group_name** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__empty** | **bool**|  | [optional] |
| **group_name__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **group_name__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **link_text** | **string**|  | [optional] |
| **link_text__ic** | **string**|  | [optional] |
| **link_text__ie** | **string**|  | [optional] |
| **link_text__iew** | **string**|  | [optional] |
| **link_text__isw** | **string**|  | [optional] |
| **link_text__n** | **string**|  | [optional] |
| **link_text__nic** | **string**|  | [optional] |
| **link_text__nie** | **string**|  | [optional] |
| **link_text__niew** | **string**|  | [optional] |
| **link_text__nisw** | **string**|  | [optional] |
| **link_url** | **string**|  | [optional] |
| **link_url__ic** | **string**|  | [optional] |
| **link_url__ie** | **string**|  | [optional] |
| **link_url__iew** | **string**|  | [optional] |
| **link_url__isw** | **string**|  | [optional] |
| **link_url__n** | **string**|  | [optional] |
| **link_url__nic** | **string**|  | [optional] |
| **link_url__nie** | **string**|  | [optional] |
| **link_url__niew** | **string**|  | [optional] |
| **link_url__nisw** | **string**|  | [optional] |
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
| **new_window** | **bool**|  | [optional] |
| **object_type** | **string**|  | [optional] |
| **object_type__ic** | **string**|  | [optional] |
| **object_type__ie** | **string**|  | [optional] |
| **object_type__iew** | **string**|  | [optional] |
| **object_type__isw** | **string**|  | [optional] |
| **object_type__n** | **string**|  | [optional] |
| **object_type__nic** | **string**|  | [optional] |
| **object_type__nie** | **string**|  | [optional] |
| **object_type__niew** | **string**|  | [optional] |
| **object_type__nisw** | **string**|  | [optional] |
| **object_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **updated_by_request** | **string**|  | [optional] |
| **weight** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__empty** | **bool**|  | [optional] |
| **weight__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__n** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedCustomLinkList**](../Model/PaginatedCustomLinkList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomLinksPartialUpdate()`

```php
extrasCustomLinksPartialUpdate($id, $patched_custom_link_request): \OpenAPI\Client\Model\CustomLink
```



Patch a custom link object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom link.
$patched_custom_link_request = new \OpenAPI\Client\Model\PatchedCustomLinkRequest(); // \OpenAPI\Client\Model\PatchedCustomLinkRequest

try {
    $result = $apiInstance->extrasCustomLinksPartialUpdate($id, $patched_custom_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomLinksPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom link. | |
| **patched_custom_link_request** | [**\OpenAPI\Client\Model\PatchedCustomLinkRequest**](../Model/PatchedCustomLinkRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomLink**](../Model/CustomLink.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomLinksRetrieve()`

```php
extrasCustomLinksRetrieve($id): \OpenAPI\Client\Model\CustomLink
```



Get a custom link object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom link.

try {
    $result = $apiInstance->extrasCustomLinksRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomLinksRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom link. | |

### Return type

[**\OpenAPI\Client\Model\CustomLink**](../Model/CustomLink.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasCustomLinksUpdate()`

```php
extrasCustomLinksUpdate($id, $custom_link_request): \OpenAPI\Client\Model\CustomLink
```



Put a custom link object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this custom link.
$custom_link_request = new \OpenAPI\Client\Model\CustomLinkRequest(); // \OpenAPI\Client\Model\CustomLinkRequest

try {
    $result = $apiInstance->extrasCustomLinksUpdate($id, $custom_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasCustomLinksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this custom link. | |
| **custom_link_request** | [**\OpenAPI\Client\Model\CustomLinkRequest**](../Model/CustomLinkRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CustomLink**](../Model/CustomLink.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasDashboardDestroy()`

```php
extrasDashboardDestroy()
```



Delete a list of dashboard objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->extrasDashboardDestroy();
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasDashboardDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `extrasDashboardPartialUpdate()`

```php
extrasDashboardPartialUpdate($patched_dashboard_request): \OpenAPI\Client\Model\Dashboard
```



Patch a list of dashboard objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patched_dashboard_request = new \OpenAPI\Client\Model\PatchedDashboardRequest(); // \OpenAPI\Client\Model\PatchedDashboardRequest

try {
    $result = $apiInstance->extrasDashboardPartialUpdate($patched_dashboard_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasDashboardPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **patched_dashboard_request** | [**\OpenAPI\Client\Model\PatchedDashboardRequest**](../Model/PatchedDashboardRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Dashboard**](../Model/Dashboard.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasDashboardRetrieve()`

```php
extrasDashboardRetrieve(): \OpenAPI\Client\Model\Dashboard
```



Get a list of dashboard objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->extrasDashboardRetrieve();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasDashboardRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Dashboard**](../Model/Dashboard.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasDashboardUpdate()`

```php
extrasDashboardUpdate($dashboard_request): \OpenAPI\Client\Model\Dashboard
```



Put a list of dashboard objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dashboard_request = new \OpenAPI\Client\Model\DashboardRequest(); // \OpenAPI\Client\Model\DashboardRequest

try {
    $result = $apiInstance->extrasDashboardUpdate($dashboard_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasDashboardUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dashboard_request** | [**\OpenAPI\Client\Model\DashboardRequest**](../Model/DashboardRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Dashboard**](../Model/Dashboard.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasEventRulesBulkDestroy()`

```php
extrasEventRulesBulkDestroy($event_rule_request)
```



Delete a list of event rule objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_rule_request = array(new \OpenAPI\Client\Model\EventRuleRequest()); // \OpenAPI\Client\Model\EventRuleRequest[]

try {
    $apiInstance->extrasEventRulesBulkDestroy($event_rule_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasEventRulesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_rule_request** | [**\OpenAPI\Client\Model\EventRuleRequest[]**](../Model/EventRuleRequest.md)|  | |

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

## `extrasEventRulesBulkPartialUpdate()`

```php
extrasEventRulesBulkPartialUpdate($event_rule_request): \OpenAPI\Client\Model\EventRule[]
```



Patch a list of event rule objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_rule_request = array(new \OpenAPI\Client\Model\EventRuleRequest()); // \OpenAPI\Client\Model\EventRuleRequest[]

try {
    $result = $apiInstance->extrasEventRulesBulkPartialUpdate($event_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasEventRulesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_rule_request** | [**\OpenAPI\Client\Model\EventRuleRequest[]**](../Model/EventRuleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EventRule[]**](../Model/EventRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasEventRulesBulkUpdate()`

```php
extrasEventRulesBulkUpdate($event_rule_request): \OpenAPI\Client\Model\EventRule[]
```



Put a list of event rule objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_rule_request = array(new \OpenAPI\Client\Model\EventRuleRequest()); // \OpenAPI\Client\Model\EventRuleRequest[]

try {
    $result = $apiInstance->extrasEventRulesBulkUpdate($event_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasEventRulesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_rule_request** | [**\OpenAPI\Client\Model\EventRuleRequest[]**](../Model/EventRuleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EventRule[]**](../Model/EventRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasEventRulesCreate()`

```php
extrasEventRulesCreate($writable_event_rule_request): \OpenAPI\Client\Model\EventRule
```



Post a list of event rule objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_event_rule_request = new \OpenAPI\Client\Model\WritableEventRuleRequest(); // \OpenAPI\Client\Model\WritableEventRuleRequest

try {
    $result = $apiInstance->extrasEventRulesCreate($writable_event_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasEventRulesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_event_rule_request** | [**\OpenAPI\Client\Model\WritableEventRuleRequest**](../Model/WritableEventRuleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EventRule**](../Model/EventRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasEventRulesDestroy()`

```php
extrasEventRulesDestroy($id)
```



Delete a event rule object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this event rule.

try {
    $apiInstance->extrasEventRulesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasEventRulesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this event rule. | |

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

## `extrasEventRulesList()`

```php
extrasEventRulesList($action_object_id, $action_object_id__empty, $action_object_id__gt, $action_object_id__gte, $action_object_id__lt, $action_object_id__lte, $action_object_id__n, $action_object_type, $action_object_type__n, $action_type, $action_type__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $enabled, $event_type, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_type, $object_type__ic, $object_type__ie, $object_type__iew, $object_type__isw, $object_type__n, $object_type__nic, $object_type__nie, $object_type__niew, $object_type__nisw, $object_type_id, $object_type_id__n, $offset, $ordering, $q, $tag, $tag__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedEventRuleList
```



Get a list of event rule objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action_object_id = array(56); // int[]
$action_object_id__empty = array(56); // int[]
$action_object_id__gt = array(56); // int[]
$action_object_id__gte = array(56); // int[]
$action_object_id__lt = array(56); // int[]
$action_object_id__lte = array(56); // int[]
$action_object_id__n = array(56); // int[]
$action_object_type = 'action_object_type_example'; // string
$action_object_type__n = 'action_object_type__n_example'; // string
$action_type = array('action_type_example'); // string[]
$action_type__n = array('action_type__n_example'); // string[]
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
$event_type = array('event_type_example'); // string[]
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
$object_type = 'object_type_example'; // string
$object_type__ic = 'object_type__ic_example'; // string
$object_type__ie = 'object_type__ie_example'; // string
$object_type__iew = 'object_type__iew_example'; // string
$object_type__isw = 'object_type__isw_example'; // string
$object_type__n = 'object_type__n_example'; // string
$object_type__nic = 'object_type__nic_example'; // string
$object_type__nie = 'object_type__nie_example'; // string
$object_type__niew = 'object_type__niew_example'; // string
$object_type__nisw = 'object_type__nisw_example'; // string
$object_type_id = array(56); // int[]
$object_type_id__n = array(56); // int[]
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->extrasEventRulesList($action_object_id, $action_object_id__empty, $action_object_id__gt, $action_object_id__gte, $action_object_id__lt, $action_object_id__lte, $action_object_id__n, $action_object_type, $action_object_type__n, $action_type, $action_type__n, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $enabled, $event_type, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_type, $object_type__ic, $object_type__ie, $object_type__iew, $object_type__isw, $object_type__n, $object_type__nic, $object_type__nie, $object_type__niew, $object_type__nisw, $object_type_id, $object_type_id__n, $offset, $ordering, $q, $tag, $tag__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasEventRulesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **action_object_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **action_object_id__empty** | [**int[]**](../Model/int.md)|  | [optional] |
| **action_object_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **action_object_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **action_object_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **action_object_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **action_object_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **action_object_type** | **string**|  | [optional] |
| **action_object_type__n** | **string**|  | [optional] |
| **action_type** | [**string[]**](../Model/string.md)|  | [optional] |
| **action_type__n** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **event_type** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **object_type** | **string**|  | [optional] |
| **object_type__ic** | **string**|  | [optional] |
| **object_type__ie** | **string**|  | [optional] |
| **object_type__iew** | **string**|  | [optional] |
| **object_type__isw** | **string**|  | [optional] |
| **object_type__n** | **string**|  | [optional] |
| **object_type__nic** | **string**|  | [optional] |
| **object_type__nie** | **string**|  | [optional] |
| **object_type__niew** | **string**|  | [optional] |
| **object_type__nisw** | **string**|  | [optional] |
| **object_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedEventRuleList**](../Model/PaginatedEventRuleList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasEventRulesPartialUpdate()`

```php
extrasEventRulesPartialUpdate($id, $patched_writable_event_rule_request): \OpenAPI\Client\Model\EventRule
```



Patch a event rule object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this event rule.
$patched_writable_event_rule_request = new \OpenAPI\Client\Model\PatchedWritableEventRuleRequest(); // \OpenAPI\Client\Model\PatchedWritableEventRuleRequest

try {
    $result = $apiInstance->extrasEventRulesPartialUpdate($id, $patched_writable_event_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasEventRulesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this event rule. | |
| **patched_writable_event_rule_request** | [**\OpenAPI\Client\Model\PatchedWritableEventRuleRequest**](../Model/PatchedWritableEventRuleRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EventRule**](../Model/EventRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasEventRulesRetrieve()`

```php
extrasEventRulesRetrieve($id): \OpenAPI\Client\Model\EventRule
```



Get a event rule object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this event rule.

try {
    $result = $apiInstance->extrasEventRulesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasEventRulesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this event rule. | |

### Return type

[**\OpenAPI\Client\Model\EventRule**](../Model/EventRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasEventRulesUpdate()`

```php
extrasEventRulesUpdate($id, $writable_event_rule_request): \OpenAPI\Client\Model\EventRule
```



Put a event rule object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this event rule.
$writable_event_rule_request = new \OpenAPI\Client\Model\WritableEventRuleRequest(); // \OpenAPI\Client\Model\WritableEventRuleRequest

try {
    $result = $apiInstance->extrasEventRulesUpdate($id, $writable_event_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasEventRulesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this event rule. | |
| **writable_event_rule_request** | [**\OpenAPI\Client\Model\WritableEventRuleRequest**](../Model/WritableEventRuleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EventRule**](../Model/EventRule.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasExportTemplatesBulkDestroy()`

```php
extrasExportTemplatesBulkDestroy($export_template_request)
```



Delete a list of export template objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_template_request = array(new \OpenAPI\Client\Model\ExportTemplateRequest()); // \OpenAPI\Client\Model\ExportTemplateRequest[]

try {
    $apiInstance->extrasExportTemplatesBulkDestroy($export_template_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasExportTemplatesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **export_template_request** | [**\OpenAPI\Client\Model\ExportTemplateRequest[]**](../Model/ExportTemplateRequest.md)|  | |

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

## `extrasExportTemplatesBulkPartialUpdate()`

```php
extrasExportTemplatesBulkPartialUpdate($export_template_request): \OpenAPI\Client\Model\ExportTemplate[]
```



Patch a list of export template objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_template_request = array(new \OpenAPI\Client\Model\ExportTemplateRequest()); // \OpenAPI\Client\Model\ExportTemplateRequest[]

try {
    $result = $apiInstance->extrasExportTemplatesBulkPartialUpdate($export_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasExportTemplatesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **export_template_request** | [**\OpenAPI\Client\Model\ExportTemplateRequest[]**](../Model/ExportTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ExportTemplate[]**](../Model/ExportTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasExportTemplatesBulkUpdate()`

```php
extrasExportTemplatesBulkUpdate($export_template_request): \OpenAPI\Client\Model\ExportTemplate[]
```



Put a list of export template objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_template_request = array(new \OpenAPI\Client\Model\ExportTemplateRequest()); // \OpenAPI\Client\Model\ExportTemplateRequest[]

try {
    $result = $apiInstance->extrasExportTemplatesBulkUpdate($export_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasExportTemplatesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **export_template_request** | [**\OpenAPI\Client\Model\ExportTemplateRequest[]**](../Model/ExportTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ExportTemplate[]**](../Model/ExportTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasExportTemplatesCreate()`

```php
extrasExportTemplatesCreate($export_template_request): \OpenAPI\Client\Model\ExportTemplate
```



Post a list of export template objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_template_request = new \OpenAPI\Client\Model\ExportTemplateRequest(); // \OpenAPI\Client\Model\ExportTemplateRequest

try {
    $result = $apiInstance->extrasExportTemplatesCreate($export_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasExportTemplatesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **export_template_request** | [**\OpenAPI\Client\Model\ExportTemplateRequest**](../Model/ExportTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ExportTemplate**](../Model/ExportTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasExportTemplatesDestroy()`

```php
extrasExportTemplatesDestroy($id)
```



Delete a export template object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this export template.

try {
    $apiInstance->extrasExportTemplatesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasExportTemplatesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this export template. | |

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

## `extrasExportTemplatesList()`

```php
extrasExportTemplatesList($as_attachment, $auto_sync_enabled, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $data_file_id, $data_file_id__n, $data_source_id, $data_source_id__n, $data_synced, $data_synced__empty, $data_synced__gt, $data_synced__gte, $data_synced__lt, $data_synced__lte, $data_synced__n, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $file_extension, $file_extension__empty, $file_extension__ic, $file_extension__ie, $file_extension__iew, $file_extension__isw, $file_extension__n, $file_extension__nic, $file_extension__nie, $file_extension__niew, $file_extension__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $mime_type, $mime_type__empty, $mime_type__ic, $mime_type__ie, $mime_type__iew, $mime_type__isw, $mime_type__n, $mime_type__nic, $mime_type__nie, $mime_type__niew, $mime_type__nisw, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_type, $object_type__ic, $object_type__ie, $object_type__iew, $object_type__isw, $object_type__n, $object_type__nic, $object_type__nie, $object_type__niew, $object_type__nisw, $object_type_id, $object_type_id__n, $offset, $ordering, $q, $updated_by_request): \OpenAPI\Client\Model\PaginatedExportTemplateList
```



Get a list of export template objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$as_attachment = True; // bool
$auto_sync_enabled = True; // bool
$created = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__empty = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$created_by_request = 'created_by_request_example'; // string
$data_file_id = array(56); // int[] | Data file (ID)
$data_file_id__n = array(56); // int[] | Data file (ID)
$data_source_id = array(56); // int[] | Data source (ID)
$data_source_id__n = array(56); // int[] | Data source (ID)
$data_synced = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__empty = True; // bool
$data_synced__gt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__gte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__lt = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__lte = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
$data_synced__n = array(new \DateTime("2013-10-20T19:20:30+01:00")); // \DateTime[]
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
$file_extension = array('file_extension_example'); // string[]
$file_extension__empty = True; // bool
$file_extension__ic = array('file_extension__ic_example'); // string[]
$file_extension__ie = array('file_extension__ie_example'); // string[]
$file_extension__iew = array('file_extension__iew_example'); // string[]
$file_extension__isw = array('file_extension__isw_example'); // string[]
$file_extension__n = array('file_extension__n_example'); // string[]
$file_extension__nic = array('file_extension__nic_example'); // string[]
$file_extension__nie = array('file_extension__nie_example'); // string[]
$file_extension__niew = array('file_extension__niew_example'); // string[]
$file_extension__nisw = array('file_extension__nisw_example'); // string[]
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
$mime_type = array('mime_type_example'); // string[]
$mime_type__empty = True; // bool
$mime_type__ic = array('mime_type__ic_example'); // string[]
$mime_type__ie = array('mime_type__ie_example'); // string[]
$mime_type__iew = array('mime_type__iew_example'); // string[]
$mime_type__isw = array('mime_type__isw_example'); // string[]
$mime_type__n = array('mime_type__n_example'); // string[]
$mime_type__nic = array('mime_type__nic_example'); // string[]
$mime_type__nie = array('mime_type__nie_example'); // string[]
$mime_type__niew = array('mime_type__niew_example'); // string[]
$mime_type__nisw = array('mime_type__nisw_example'); // string[]
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
$object_type = 'object_type_example'; // string
$object_type__ic = 'object_type__ic_example'; // string
$object_type__ie = 'object_type__ie_example'; // string
$object_type__iew = 'object_type__iew_example'; // string
$object_type__isw = 'object_type__isw_example'; // string
$object_type__n = 'object_type__n_example'; // string
$object_type__nic = 'object_type__nic_example'; // string
$object_type__nie = 'object_type__nie_example'; // string
$object_type__niew = 'object_type__niew_example'; // string
$object_type__nisw = 'object_type__nisw_example'; // string
$object_type_id = array(56); // int[]
$object_type_id__n = array(56); // int[]
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->extrasExportTemplatesList($as_attachment, $auto_sync_enabled, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $data_file_id, $data_file_id__n, $data_source_id, $data_source_id__n, $data_synced, $data_synced__empty, $data_synced__gt, $data_synced__gte, $data_synced__lt, $data_synced__lte, $data_synced__n, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $file_extension, $file_extension__empty, $file_extension__ic, $file_extension__ie, $file_extension__iew, $file_extension__isw, $file_extension__n, $file_extension__nic, $file_extension__nie, $file_extension__niew, $file_extension__nisw, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $mime_type, $mime_type__empty, $mime_type__ic, $mime_type__ie, $mime_type__iew, $mime_type__isw, $mime_type__n, $mime_type__nic, $mime_type__nie, $mime_type__niew, $mime_type__nisw, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_type, $object_type__ic, $object_type__ie, $object_type__iew, $object_type__isw, $object_type__n, $object_type__nic, $object_type__nie, $object_type__niew, $object_type__nisw, $object_type_id, $object_type_id__n, $offset, $ordering, $q, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasExportTemplatesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **as_attachment** | **bool**|  | [optional] |
| **auto_sync_enabled** | **bool**|  | [optional] |
| **created** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__empty** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **created_by_request** | **string**|  | [optional] |
| **data_file_id** | [**int[]**](../Model/int.md)| Data file (ID) | [optional] |
| **data_file_id__n** | [**int[]**](../Model/int.md)| Data file (ID) | [optional] |
| **data_source_id** | [**int[]**](../Model/int.md)| Data source (ID) | [optional] |
| **data_source_id__n** | [**int[]**](../Model/int.md)| Data source (ID) | [optional] |
| **data_synced** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__empty** | **bool**|  | [optional] |
| **data_synced__gt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__gte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__lt** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__lte** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
| **data_synced__n** | [**\DateTime[]**](../Model/\DateTime.md)|  | [optional] |
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
| **file_extension** | [**string[]**](../Model/string.md)|  | [optional] |
| **file_extension__empty** | **bool**|  | [optional] |
| **file_extension__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **file_extension__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **file_extension__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **file_extension__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **file_extension__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **file_extension__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **file_extension__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **file_extension__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **file_extension__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **mime_type** | [**string[]**](../Model/string.md)|  | [optional] |
| **mime_type__empty** | **bool**|  | [optional] |
| **mime_type__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **mime_type__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **mime_type__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **mime_type__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **mime_type__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **mime_type__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **mime_type__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **mime_type__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **mime_type__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **object_type** | **string**|  | [optional] |
| **object_type__ic** | **string**|  | [optional] |
| **object_type__ie** | **string**|  | [optional] |
| **object_type__iew** | **string**|  | [optional] |
| **object_type__isw** | **string**|  | [optional] |
| **object_type__n** | **string**|  | [optional] |
| **object_type__nic** | **string**|  | [optional] |
| **object_type__nie** | **string**|  | [optional] |
| **object_type__niew** | **string**|  | [optional] |
| **object_type__nisw** | **string**|  | [optional] |
| **object_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedExportTemplateList**](../Model/PaginatedExportTemplateList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasExportTemplatesPartialUpdate()`

```php
extrasExportTemplatesPartialUpdate($id, $patched_export_template_request): \OpenAPI\Client\Model\ExportTemplate
```



Patch a export template object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this export template.
$patched_export_template_request = new \OpenAPI\Client\Model\PatchedExportTemplateRequest(); // \OpenAPI\Client\Model\PatchedExportTemplateRequest

try {
    $result = $apiInstance->extrasExportTemplatesPartialUpdate($id, $patched_export_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasExportTemplatesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this export template. | |
| **patched_export_template_request** | [**\OpenAPI\Client\Model\PatchedExportTemplateRequest**](../Model/PatchedExportTemplateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExportTemplate**](../Model/ExportTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasExportTemplatesRetrieve()`

```php
extrasExportTemplatesRetrieve($id): \OpenAPI\Client\Model\ExportTemplate
```



Get a export template object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this export template.

try {
    $result = $apiInstance->extrasExportTemplatesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasExportTemplatesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this export template. | |

### Return type

[**\OpenAPI\Client\Model\ExportTemplate**](../Model/ExportTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasExportTemplatesSyncCreate()`

```php
extrasExportTemplatesSyncCreate($id, $export_template_request): \OpenAPI\Client\Model\ExportTemplate
```



Provide a /sync API endpoint to synchronize an object's data from its associated DataFile (if any).

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this export template.
$export_template_request = new \OpenAPI\Client\Model\ExportTemplateRequest(); // \OpenAPI\Client\Model\ExportTemplateRequest

try {
    $result = $apiInstance->extrasExportTemplatesSyncCreate($id, $export_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasExportTemplatesSyncCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this export template. | |
| **export_template_request** | [**\OpenAPI\Client\Model\ExportTemplateRequest**](../Model/ExportTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ExportTemplate**](../Model/ExportTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasExportTemplatesUpdate()`

```php
extrasExportTemplatesUpdate($id, $export_template_request): \OpenAPI\Client\Model\ExportTemplate
```



Put a export template object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this export template.
$export_template_request = new \OpenAPI\Client\Model\ExportTemplateRequest(); // \OpenAPI\Client\Model\ExportTemplateRequest

try {
    $result = $apiInstance->extrasExportTemplatesUpdate($id, $export_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasExportTemplatesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this export template. | |
| **export_template_request** | [**\OpenAPI\Client\Model\ExportTemplateRequest**](../Model/ExportTemplateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ExportTemplate**](../Model/ExportTemplate.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasImageAttachmentsBulkDestroy()`

```php
extrasImageAttachmentsBulkDestroy($image_attachment_request)
```



Delete a list of image attachment objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_attachment_request = array(new \OpenAPI\Client\Model\ImageAttachmentRequest()); // \OpenAPI\Client\Model\ImageAttachmentRequest[]

try {
    $apiInstance->extrasImageAttachmentsBulkDestroy($image_attachment_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasImageAttachmentsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **image_attachment_request** | [**\OpenAPI\Client\Model\ImageAttachmentRequest[]**](../Model/ImageAttachmentRequest.md)|  | |

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

## `extrasImageAttachmentsBulkPartialUpdate()`

```php
extrasImageAttachmentsBulkPartialUpdate($image_attachment_request): \OpenAPI\Client\Model\ImageAttachment[]
```



Patch a list of image attachment objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_attachment_request = array(new \OpenAPI\Client\Model\ImageAttachmentRequest()); // \OpenAPI\Client\Model\ImageAttachmentRequest[]

try {
    $result = $apiInstance->extrasImageAttachmentsBulkPartialUpdate($image_attachment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasImageAttachmentsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **image_attachment_request** | [**\OpenAPI\Client\Model\ImageAttachmentRequest[]**](../Model/ImageAttachmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImageAttachment[]**](../Model/ImageAttachment.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasImageAttachmentsBulkUpdate()`

```php
extrasImageAttachmentsBulkUpdate($image_attachment_request): \OpenAPI\Client\Model\ImageAttachment[]
```



Put a list of image attachment objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_attachment_request = array(new \OpenAPI\Client\Model\ImageAttachmentRequest()); // \OpenAPI\Client\Model\ImageAttachmentRequest[]

try {
    $result = $apiInstance->extrasImageAttachmentsBulkUpdate($image_attachment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasImageAttachmentsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **image_attachment_request** | [**\OpenAPI\Client\Model\ImageAttachmentRequest[]**](../Model/ImageAttachmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImageAttachment[]**](../Model/ImageAttachment.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasImageAttachmentsCreate()`

```php
extrasImageAttachmentsCreate($image_attachment_request): \OpenAPI\Client\Model\ImageAttachment
```



Post a list of image attachment objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image_attachment_request = new \OpenAPI\Client\Model\ImageAttachmentRequest(); // \OpenAPI\Client\Model\ImageAttachmentRequest

try {
    $result = $apiInstance->extrasImageAttachmentsCreate($image_attachment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasImageAttachmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **image_attachment_request** | [**\OpenAPI\Client\Model\ImageAttachmentRequest**](../Model/ImageAttachmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImageAttachment**](../Model/ImageAttachment.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasImageAttachmentsDestroy()`

```php
extrasImageAttachmentsDestroy($id)
```



Delete a image attachment object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this image attachment.

try {
    $apiInstance->extrasImageAttachmentsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasImageAttachmentsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this image attachment. | |

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

## `extrasImageAttachmentsList()`

```php
extrasImageAttachmentsList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $image_height, $image_height__empty, $image_height__gt, $image_height__gte, $image_height__lt, $image_height__lte, $image_height__n, $image_width, $image_width__empty, $image_width__gt, $image_width__gte, $image_width__lt, $image_width__lte, $image_width__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_id, $object_id__empty, $object_id__gt, $object_id__gte, $object_id__lt, $object_id__lte, $object_id__n, $object_type, $object_type__n, $object_type_id, $object_type_id__n, $offset, $ordering, $q, $updated_by_request): \OpenAPI\Client\Model\PaginatedImageAttachmentList
```



Get a list of image attachment objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
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
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$image_height = array(56); // int[]
$image_height__empty = True; // bool
$image_height__gt = array(56); // int[]
$image_height__gte = array(56); // int[]
$image_height__lt = array(56); // int[]
$image_height__lte = array(56); // int[]
$image_height__n = array(56); // int[]
$image_width = array(56); // int[]
$image_width__empty = True; // bool
$image_width__gt = array(56); // int[]
$image_width__gte = array(56); // int[]
$image_width__lt = array(56); // int[]
$image_width__lte = array(56); // int[]
$image_width__n = array(56); // int[]
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
$object_id = array(56); // int[]
$object_id__empty = True; // bool
$object_id__gt = array(56); // int[]
$object_id__gte = array(56); // int[]
$object_id__lt = array(56); // int[]
$object_id__lte = array(56); // int[]
$object_id__n = array(56); // int[]
$object_type = 'object_type_example'; // string
$object_type__n = 'object_type__n_example'; // string
$object_type_id = 56; // int
$object_type_id__n = 56; // int
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->extrasImageAttachmentsList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $image_height, $image_height__empty, $image_height__gt, $image_height__gte, $image_height__lt, $image_height__lte, $image_height__n, $image_width, $image_width__empty, $image_width__gt, $image_width__gte, $image_width__lt, $image_width__lte, $image_width__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_id, $object_id__empty, $object_id__gt, $object_id__gte, $object_id__lt, $object_id__lte, $object_id__n, $object_type, $object_type__n, $object_type_id, $object_type_id__n, $offset, $ordering, $q, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasImageAttachmentsList: ', $e->getMessage(), PHP_EOL;
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
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **image_height** | [**int[]**](../Model/int.md)|  | [optional] |
| **image_height__empty** | **bool**|  | [optional] |
| **image_height__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **image_height__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **image_height__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **image_height__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **image_height__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **image_width** | [**int[]**](../Model/int.md)|  | [optional] |
| **image_width__empty** | **bool**|  | [optional] |
| **image_width__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **image_width__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **image_width__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **image_width__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **image_width__n** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **object_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__empty** | **bool**|  | [optional] |
| **object_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type** | **string**|  | [optional] |
| **object_type__n** | **string**|  | [optional] |
| **object_type_id** | **int**|  | [optional] |
| **object_type_id__n** | **int**|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedImageAttachmentList**](../Model/PaginatedImageAttachmentList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasImageAttachmentsPartialUpdate()`

```php
extrasImageAttachmentsPartialUpdate($id, $patched_image_attachment_request): \OpenAPI\Client\Model\ImageAttachment
```



Patch a image attachment object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this image attachment.
$patched_image_attachment_request = new \OpenAPI\Client\Model\PatchedImageAttachmentRequest(); // \OpenAPI\Client\Model\PatchedImageAttachmentRequest

try {
    $result = $apiInstance->extrasImageAttachmentsPartialUpdate($id, $patched_image_attachment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasImageAttachmentsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this image attachment. | |
| **patched_image_attachment_request** | [**\OpenAPI\Client\Model\PatchedImageAttachmentRequest**](../Model/PatchedImageAttachmentRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ImageAttachment**](../Model/ImageAttachment.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasImageAttachmentsRetrieve()`

```php
extrasImageAttachmentsRetrieve($id): \OpenAPI\Client\Model\ImageAttachment
```



Get a image attachment object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this image attachment.

try {
    $result = $apiInstance->extrasImageAttachmentsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasImageAttachmentsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this image attachment. | |

### Return type

[**\OpenAPI\Client\Model\ImageAttachment**](../Model/ImageAttachment.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasImageAttachmentsUpdate()`

```php
extrasImageAttachmentsUpdate($id, $image_attachment_request): \OpenAPI\Client\Model\ImageAttachment
```



Put a image attachment object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this image attachment.
$image_attachment_request = new \OpenAPI\Client\Model\ImageAttachmentRequest(); // \OpenAPI\Client\Model\ImageAttachmentRequest

try {
    $result = $apiInstance->extrasImageAttachmentsUpdate($id, $image_attachment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasImageAttachmentsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this image attachment. | |
| **image_attachment_request** | [**\OpenAPI\Client\Model\ImageAttachmentRequest**](../Model/ImageAttachmentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImageAttachment**](../Model/ImageAttachment.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasJournalEntriesBulkDestroy()`

```php
extrasJournalEntriesBulkDestroy($journal_entry_request)
```



Delete a list of journal entry objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_entry_request = array(new \OpenAPI\Client\Model\JournalEntryRequest()); // \OpenAPI\Client\Model\JournalEntryRequest[]

try {
    $apiInstance->extrasJournalEntriesBulkDestroy($journal_entry_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasJournalEntriesBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journal_entry_request** | [**\OpenAPI\Client\Model\JournalEntryRequest[]**](../Model/JournalEntryRequest.md)|  | |

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

## `extrasJournalEntriesBulkPartialUpdate()`

```php
extrasJournalEntriesBulkPartialUpdate($journal_entry_request): \OpenAPI\Client\Model\JournalEntry[]
```



Patch a list of journal entry objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_entry_request = array(new \OpenAPI\Client\Model\JournalEntryRequest()); // \OpenAPI\Client\Model\JournalEntryRequest[]

try {
    $result = $apiInstance->extrasJournalEntriesBulkPartialUpdate($journal_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasJournalEntriesBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journal_entry_request** | [**\OpenAPI\Client\Model\JournalEntryRequest[]**](../Model/JournalEntryRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\JournalEntry[]**](../Model/JournalEntry.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasJournalEntriesBulkUpdate()`

```php
extrasJournalEntriesBulkUpdate($journal_entry_request): \OpenAPI\Client\Model\JournalEntry[]
```



Put a list of journal entry objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$journal_entry_request = array(new \OpenAPI\Client\Model\JournalEntryRequest()); // \OpenAPI\Client\Model\JournalEntryRequest[]

try {
    $result = $apiInstance->extrasJournalEntriesBulkUpdate($journal_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasJournalEntriesBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **journal_entry_request** | [**\OpenAPI\Client\Model\JournalEntryRequest[]**](../Model/JournalEntryRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\JournalEntry[]**](../Model/JournalEntry.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasJournalEntriesCreate()`

```php
extrasJournalEntriesCreate($writable_journal_entry_request): \OpenAPI\Client\Model\JournalEntry
```



Post a list of journal entry objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$writable_journal_entry_request = new \OpenAPI\Client\Model\WritableJournalEntryRequest(); // \OpenAPI\Client\Model\WritableJournalEntryRequest

try {
    $result = $apiInstance->extrasJournalEntriesCreate($writable_journal_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasJournalEntriesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **writable_journal_entry_request** | [**\OpenAPI\Client\Model\WritableJournalEntryRequest**](../Model/WritableJournalEntryRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\JournalEntry**](../Model/JournalEntry.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasJournalEntriesDestroy()`

```php
extrasJournalEntriesDestroy($id)
```



Delete a journal entry object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this journal entry.

try {
    $apiInstance->extrasJournalEntriesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasJournalEntriesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this journal entry. | |

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

## `extrasJournalEntriesList()`

```php
extrasJournalEntriesList($assigned_object_id, $assigned_object_id__empty, $assigned_object_id__gt, $assigned_object_id__gte, $assigned_object_id__lt, $assigned_object_id__lte, $assigned_object_id__n, $assigned_object_type, $assigned_object_type__n, $assigned_object_type_id, $assigned_object_type_id__n, $created_after, $created_before, $created_by, $created_by__n, $created_by_id, $created_by_id__n, $created_by_request, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $kind, $kind__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $q, $tag, $tag__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedJournalEntryList
```



Get a list of journal entry objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assigned_object_id = array(56); // int[]
$assigned_object_id__empty = True; // bool
$assigned_object_id__gt = array(56); // int[]
$assigned_object_id__gte = array(56); // int[]
$assigned_object_id__lt = array(56); // int[]
$assigned_object_id__lte = array(56); // int[]
$assigned_object_id__n = array(56); // int[]
$assigned_object_type = 'assigned_object_type_example'; // string
$assigned_object_type__n = 'assigned_object_type__n_example'; // string
$assigned_object_type_id = array(56); // int[]
$assigned_object_type_id__n = array(56); // int[]
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$created_by = array('created_by_example'); // string[] | User (name)
$created_by__n = array('created_by__n_example'); // string[] | User (name)
$created_by_id = array(56); // int[] | User (ID)
$created_by_id__n = array(56); // int[] | User (ID)
$created_by_request = 'created_by_request_example'; // string
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$kind = array('kind_example'); // string[]
$kind__n = array('kind__n_example'); // string[]
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
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->extrasJournalEntriesList($assigned_object_id, $assigned_object_id__empty, $assigned_object_id__gt, $assigned_object_id__gte, $assigned_object_id__lt, $assigned_object_id__lte, $assigned_object_id__n, $assigned_object_type, $assigned_object_type__n, $assigned_object_type_id, $assigned_object_type_id__n, $created_after, $created_before, $created_by, $created_by__n, $created_by_id, $created_by_id__n, $created_by_request, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $kind, $kind__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $offset, $ordering, $q, $tag, $tag__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasJournalEntriesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **assigned_object_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__empty** | **bool**|  | [optional] |
| **assigned_object_id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_type** | **string**|  | [optional] |
| **assigned_object_type__n** | **string**|  | [optional] |
| **assigned_object_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **assigned_object_type_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **created_after** | **\DateTime**|  | [optional] |
| **created_before** | **\DateTime**|  | [optional] |
| **created_by** | [**string[]**](../Model/string.md)| User (name) | [optional] |
| **created_by__n** | [**string[]**](../Model/string.md)| User (name) | [optional] |
| **created_by_id** | [**int[]**](../Model/int.md)| User (ID) | [optional] |
| **created_by_id__n** | [**int[]**](../Model/int.md)| User (ID) | [optional] |
| **created_by_request** | **string**|  | [optional] |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **kind** | [**string[]**](../Model/string.md)|  | [optional] |
| **kind__n** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedJournalEntryList**](../Model/PaginatedJournalEntryList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasJournalEntriesPartialUpdate()`

```php
extrasJournalEntriesPartialUpdate($id, $patched_writable_journal_entry_request): \OpenAPI\Client\Model\JournalEntry
```



Patch a journal entry object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this journal entry.
$patched_writable_journal_entry_request = new \OpenAPI\Client\Model\PatchedWritableJournalEntryRequest(); // \OpenAPI\Client\Model\PatchedWritableJournalEntryRequest

try {
    $result = $apiInstance->extrasJournalEntriesPartialUpdate($id, $patched_writable_journal_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasJournalEntriesPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this journal entry. | |
| **patched_writable_journal_entry_request** | [**\OpenAPI\Client\Model\PatchedWritableJournalEntryRequest**](../Model/PatchedWritableJournalEntryRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JournalEntry**](../Model/JournalEntry.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasJournalEntriesRetrieve()`

```php
extrasJournalEntriesRetrieve($id): \OpenAPI\Client\Model\JournalEntry
```



Get a journal entry object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this journal entry.

try {
    $result = $apiInstance->extrasJournalEntriesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasJournalEntriesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this journal entry. | |

### Return type

[**\OpenAPI\Client\Model\JournalEntry**](../Model/JournalEntry.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasJournalEntriesUpdate()`

```php
extrasJournalEntriesUpdate($id, $writable_journal_entry_request): \OpenAPI\Client\Model\JournalEntry
```



Put a journal entry object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this journal entry.
$writable_journal_entry_request = new \OpenAPI\Client\Model\WritableJournalEntryRequest(); // \OpenAPI\Client\Model\WritableJournalEntryRequest

try {
    $result = $apiInstance->extrasJournalEntriesUpdate($id, $writable_journal_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasJournalEntriesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this journal entry. | |
| **writable_journal_entry_request** | [**\OpenAPI\Client\Model\WritableJournalEntryRequest**](../Model/WritableJournalEntryRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\JournalEntry**](../Model/JournalEntry.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationGroupsBulkDestroy()`

```php
extrasNotificationGroupsBulkDestroy($notification_group_request)
```



Delete a list of notification group objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_group_request = array(new \OpenAPI\Client\Model\NotificationGroupRequest()); // \OpenAPI\Client\Model\NotificationGroupRequest[]

try {
    $apiInstance->extrasNotificationGroupsBulkDestroy($notification_group_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationGroupsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_group_request** | [**\OpenAPI\Client\Model\NotificationGroupRequest[]**](../Model/NotificationGroupRequest.md)|  | |

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

## `extrasNotificationGroupsBulkPartialUpdate()`

```php
extrasNotificationGroupsBulkPartialUpdate($notification_group_request): \OpenAPI\Client\Model\NotificationGroup[]
```



Patch a list of notification group objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_group_request = array(new \OpenAPI\Client\Model\NotificationGroupRequest()); // \OpenAPI\Client\Model\NotificationGroupRequest[]

try {
    $result = $apiInstance->extrasNotificationGroupsBulkPartialUpdate($notification_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationGroupsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_group_request** | [**\OpenAPI\Client\Model\NotificationGroupRequest[]**](../Model/NotificationGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NotificationGroup[]**](../Model/NotificationGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationGroupsBulkUpdate()`

```php
extrasNotificationGroupsBulkUpdate($notification_group_request): \OpenAPI\Client\Model\NotificationGroup[]
```



Put a list of notification group objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_group_request = array(new \OpenAPI\Client\Model\NotificationGroupRequest()); // \OpenAPI\Client\Model\NotificationGroupRequest[]

try {
    $result = $apiInstance->extrasNotificationGroupsBulkUpdate($notification_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationGroupsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_group_request** | [**\OpenAPI\Client\Model\NotificationGroupRequest[]**](../Model/NotificationGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NotificationGroup[]**](../Model/NotificationGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationGroupsCreate()`

```php
extrasNotificationGroupsCreate($notification_group_request): \OpenAPI\Client\Model\NotificationGroup
```



Post a list of notification group objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_group_request = new \OpenAPI\Client\Model\NotificationGroupRequest(); // \OpenAPI\Client\Model\NotificationGroupRequest

try {
    $result = $apiInstance->extrasNotificationGroupsCreate($notification_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationGroupsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_group_request** | [**\OpenAPI\Client\Model\NotificationGroupRequest**](../Model/NotificationGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NotificationGroup**](../Model/NotificationGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationGroupsDestroy()`

```php
extrasNotificationGroupsDestroy($id)
```



Delete a notification group object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this notification group.

try {
    $apiInstance->extrasNotificationGroupsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationGroupsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this notification group. | |

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

## `extrasNotificationGroupsList()`

```php
extrasNotificationGroupsList($limit, $offset, $ordering): \OpenAPI\Client\Model\PaginatedNotificationGroupList
```



Get a list of notification group objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Number of results to return per page.
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.

try {
    $result = $apiInstance->extrasNotificationGroupsList($limit, $offset, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationGroupsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedNotificationGroupList**](../Model/PaginatedNotificationGroupList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationGroupsPartialUpdate()`

```php
extrasNotificationGroupsPartialUpdate($id, $patched_notification_group_request): \OpenAPI\Client\Model\NotificationGroup
```



Patch a notification group object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this notification group.
$patched_notification_group_request = new \OpenAPI\Client\Model\PatchedNotificationGroupRequest(); // \OpenAPI\Client\Model\PatchedNotificationGroupRequest

try {
    $result = $apiInstance->extrasNotificationGroupsPartialUpdate($id, $patched_notification_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationGroupsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this notification group. | |
| **patched_notification_group_request** | [**\OpenAPI\Client\Model\PatchedNotificationGroupRequest**](../Model/PatchedNotificationGroupRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NotificationGroup**](../Model/NotificationGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationGroupsRetrieve()`

```php
extrasNotificationGroupsRetrieve($id): \OpenAPI\Client\Model\NotificationGroup
```



Get a notification group object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this notification group.

try {
    $result = $apiInstance->extrasNotificationGroupsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationGroupsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this notification group. | |

### Return type

[**\OpenAPI\Client\Model\NotificationGroup**](../Model/NotificationGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationGroupsUpdate()`

```php
extrasNotificationGroupsUpdate($id, $notification_group_request): \OpenAPI\Client\Model\NotificationGroup
```



Put a notification group object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this notification group.
$notification_group_request = new \OpenAPI\Client\Model\NotificationGroupRequest(); // \OpenAPI\Client\Model\NotificationGroupRequest

try {
    $result = $apiInstance->extrasNotificationGroupsUpdate($id, $notification_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationGroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this notification group. | |
| **notification_group_request** | [**\OpenAPI\Client\Model\NotificationGroupRequest**](../Model/NotificationGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NotificationGroup**](../Model/NotificationGroup.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationsBulkDestroy()`

```php
extrasNotificationsBulkDestroy($notification_request)
```



Delete a list of notification objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_request = array(new \OpenAPI\Client\Model\NotificationRequest()); // \OpenAPI\Client\Model\NotificationRequest[]

try {
    $apiInstance->extrasNotificationsBulkDestroy($notification_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_request** | [**\OpenAPI\Client\Model\NotificationRequest[]**](../Model/NotificationRequest.md)|  | |

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

## `extrasNotificationsBulkPartialUpdate()`

```php
extrasNotificationsBulkPartialUpdate($notification_request): \OpenAPI\Client\Model\Notification[]
```



Patch a list of notification objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_request = array(new \OpenAPI\Client\Model\NotificationRequest()); // \OpenAPI\Client\Model\NotificationRequest[]

try {
    $result = $apiInstance->extrasNotificationsBulkPartialUpdate($notification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_request** | [**\OpenAPI\Client\Model\NotificationRequest[]**](../Model/NotificationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Notification[]**](../Model/Notification.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationsBulkUpdate()`

```php
extrasNotificationsBulkUpdate($notification_request): \OpenAPI\Client\Model\Notification[]
```



Put a list of notification objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_request = array(new \OpenAPI\Client\Model\NotificationRequest()); // \OpenAPI\Client\Model\NotificationRequest[]

try {
    $result = $apiInstance->extrasNotificationsBulkUpdate($notification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_request** | [**\OpenAPI\Client\Model\NotificationRequest[]**](../Model/NotificationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Notification[]**](../Model/Notification.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationsCreate()`

```php
extrasNotificationsCreate($notification_request): \OpenAPI\Client\Model\Notification
```



Post a list of notification objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_request = new \OpenAPI\Client\Model\NotificationRequest(); // \OpenAPI\Client\Model\NotificationRequest

try {
    $result = $apiInstance->extrasNotificationsCreate($notification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_request** | [**\OpenAPI\Client\Model\NotificationRequest**](../Model/NotificationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Notification**](../Model/Notification.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationsDestroy()`

```php
extrasNotificationsDestroy($id)
```



Delete a notification object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this notification.

try {
    $apiInstance->extrasNotificationsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this notification. | |

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

## `extrasNotificationsList()`

```php
extrasNotificationsList($limit, $offset, $ordering): \OpenAPI\Client\Model\PaginatedNotificationList
```



Get a list of notification objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Number of results to return per page.
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.

try {
    $result = $apiInstance->extrasNotificationsList($limit, $offset, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedNotificationList**](../Model/PaginatedNotificationList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationsPartialUpdate()`

```php
extrasNotificationsPartialUpdate($id, $patched_notification_request): \OpenAPI\Client\Model\Notification
```



Patch a notification object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this notification.
$patched_notification_request = new \OpenAPI\Client\Model\PatchedNotificationRequest(); // \OpenAPI\Client\Model\PatchedNotificationRequest

try {
    $result = $apiInstance->extrasNotificationsPartialUpdate($id, $patched_notification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this notification. | |
| **patched_notification_request** | [**\OpenAPI\Client\Model\PatchedNotificationRequest**](../Model/PatchedNotificationRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Notification**](../Model/Notification.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationsRetrieve()`

```php
extrasNotificationsRetrieve($id): \OpenAPI\Client\Model\Notification
```



Get a notification object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this notification.

try {
    $result = $apiInstance->extrasNotificationsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this notification. | |

### Return type

[**\OpenAPI\Client\Model\Notification**](../Model/Notification.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasNotificationsUpdate()`

```php
extrasNotificationsUpdate($id, $notification_request): \OpenAPI\Client\Model\Notification
```



Put a notification object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this notification.
$notification_request = new \OpenAPI\Client\Model\NotificationRequest(); // \OpenAPI\Client\Model\NotificationRequest

try {
    $result = $apiInstance->extrasNotificationsUpdate($id, $notification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasNotificationsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this notification. | |
| **notification_request** | [**\OpenAPI\Client\Model\NotificationRequest**](../Model/NotificationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Notification**](../Model/Notification.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasObjectTypesList()`

```php
extrasObjectTypesList($app_label, $id, $limit, $model, $offset, $ordering, $q): \OpenAPI\Client\Model\PaginatedObjectTypeList
```



Read-only list of ObjectTypes.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_label = 'app_label_example'; // string
$id = 56; // int
$limit = 56; // int | Number of results to return per page.
$model = 'model_example'; // string
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search

try {
    $result = $apiInstance->extrasObjectTypesList($app_label, $id, $limit, $model, $offset, $ordering, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasObjectTypesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_label** | **string**|  | [optional] |
| **id** | **int**|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **model** | **string**|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedObjectTypeList**](../Model/PaginatedObjectTypeList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasObjectTypesRetrieve()`

```php
extrasObjectTypesRetrieve($id): \OpenAPI\Client\Model\ObjectType
```



Read-only list of ObjectTypes.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this object type.

try {
    $result = $apiInstance->extrasObjectTypesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasObjectTypesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this object type. | |

### Return type

[**\OpenAPI\Client\Model\ObjectType**](../Model/ObjectType.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSavedFiltersBulkDestroy()`

```php
extrasSavedFiltersBulkDestroy($saved_filter_request)
```



Delete a list of saved filter objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$saved_filter_request = array(new \OpenAPI\Client\Model\SavedFilterRequest()); // \OpenAPI\Client\Model\SavedFilterRequest[]

try {
    $apiInstance->extrasSavedFiltersBulkDestroy($saved_filter_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSavedFiltersBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **saved_filter_request** | [**\OpenAPI\Client\Model\SavedFilterRequest[]**](../Model/SavedFilterRequest.md)|  | |

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

## `extrasSavedFiltersBulkPartialUpdate()`

```php
extrasSavedFiltersBulkPartialUpdate($saved_filter_request): \OpenAPI\Client\Model\SavedFilter[]
```



Patch a list of saved filter objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$saved_filter_request = array(new \OpenAPI\Client\Model\SavedFilterRequest()); // \OpenAPI\Client\Model\SavedFilterRequest[]

try {
    $result = $apiInstance->extrasSavedFiltersBulkPartialUpdate($saved_filter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSavedFiltersBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **saved_filter_request** | [**\OpenAPI\Client\Model\SavedFilterRequest[]**](../Model/SavedFilterRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SavedFilter[]**](../Model/SavedFilter.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSavedFiltersBulkUpdate()`

```php
extrasSavedFiltersBulkUpdate($saved_filter_request): \OpenAPI\Client\Model\SavedFilter[]
```



Put a list of saved filter objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$saved_filter_request = array(new \OpenAPI\Client\Model\SavedFilterRequest()); // \OpenAPI\Client\Model\SavedFilterRequest[]

try {
    $result = $apiInstance->extrasSavedFiltersBulkUpdate($saved_filter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSavedFiltersBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **saved_filter_request** | [**\OpenAPI\Client\Model\SavedFilterRequest[]**](../Model/SavedFilterRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SavedFilter[]**](../Model/SavedFilter.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSavedFiltersCreate()`

```php
extrasSavedFiltersCreate($saved_filter_request): \OpenAPI\Client\Model\SavedFilter
```



Post a list of saved filter objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$saved_filter_request = new \OpenAPI\Client\Model\SavedFilterRequest(); // \OpenAPI\Client\Model\SavedFilterRequest

try {
    $result = $apiInstance->extrasSavedFiltersCreate($saved_filter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSavedFiltersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **saved_filter_request** | [**\OpenAPI\Client\Model\SavedFilterRequest**](../Model/SavedFilterRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SavedFilter**](../Model/SavedFilter.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSavedFiltersDestroy()`

```php
extrasSavedFiltersDestroy($id)
```



Delete a saved filter object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this saved filter.

try {
    $apiInstance->extrasSavedFiltersDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSavedFiltersDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this saved filter. | |

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

## `extrasSavedFiltersList()`

```php
extrasSavedFiltersList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $enabled, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_type, $object_type__ic, $object_type__ie, $object_type__iew, $object_type__isw, $object_type__n, $object_type__nic, $object_type__nie, $object_type__niew, $object_type__nisw, $object_type_id, $object_type_id__n, $offset, $ordering, $q, $shared, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $updated_by_request, $usable, $user, $user__n, $user_id, $user_id__n, $weight, $weight__empty, $weight__gt, $weight__gte, $weight__lt, $weight__lte, $weight__n): \OpenAPI\Client\Model\PaginatedSavedFilterList
```



Get a list of saved filter objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
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
$object_type = 'object_type_example'; // string
$object_type__ic = 'object_type__ic_example'; // string
$object_type__ie = 'object_type__ie_example'; // string
$object_type__iew = 'object_type__iew_example'; // string
$object_type__isw = 'object_type__isw_example'; // string
$object_type__n = 'object_type__n_example'; // string
$object_type__nic = 'object_type__nic_example'; // string
$object_type__nie = 'object_type__nie_example'; // string
$object_type__niew = 'object_type__niew_example'; // string
$object_type__nisw = 'object_type__nisw_example'; // string
$object_type_id = array(56); // int[]
$object_type_id__n = array(56); // int[]
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.
$q = 'q_example'; // string | Search
$shared = True; // bool
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
$updated_by_request = 'updated_by_request_example'; // string
$usable = True; // bool
$user = array('user_example'); // string[] | User (name)
$user__n = array('user__n_example'); // string[] | User (name)
$user_id = array(56); // int[] | User (ID)
$user_id__n = array(56); // int[] | User (ID)
$weight = array(56); // int[]
$weight__empty = True; // bool
$weight__gt = array(56); // int[]
$weight__gte = array(56); // int[]
$weight__lt = array(56); // int[]
$weight__lte = array(56); // int[]
$weight__n = array(56); // int[]

try {
    $result = $apiInstance->extrasSavedFiltersList($created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $enabled, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_type, $object_type__ic, $object_type__ie, $object_type__iew, $object_type__isw, $object_type__n, $object_type__nic, $object_type__nie, $object_type__niew, $object_type__nisw, $object_type_id, $object_type_id__n, $offset, $ordering, $q, $shared, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $updated_by_request, $usable, $user, $user__n, $user_id, $user_id__n, $weight, $weight__empty, $weight__gt, $weight__gte, $weight__lt, $weight__lte, $weight__n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSavedFiltersList: ', $e->getMessage(), PHP_EOL;
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
| **object_type** | **string**|  | [optional] |
| **object_type__ic** | **string**|  | [optional] |
| **object_type__ie** | **string**|  | [optional] |
| **object_type__iew** | **string**|  | [optional] |
| **object_type__isw** | **string**|  | [optional] |
| **object_type__n** | **string**|  | [optional] |
| **object_type__nic** | **string**|  | [optional] |
| **object_type__nie** | **string**|  | [optional] |
| **object_type__niew** | **string**|  | [optional] |
| **object_type__nisw** | **string**|  | [optional] |
| **object_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_type_id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |
| **q** | **string**| Search | [optional] |
| **shared** | **bool**|  | [optional] |
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
| **updated_by_request** | **string**|  | [optional] |
| **usable** | **bool**|  | [optional] |
| **user** | [**string[]**](../Model/string.md)| User (name) | [optional] |
| **user__n** | [**string[]**](../Model/string.md)| User (name) | [optional] |
| **user_id** | [**int[]**](../Model/int.md)| User (ID) | [optional] |
| **user_id__n** | [**int[]**](../Model/int.md)| User (ID) | [optional] |
| **weight** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__empty** | **bool**|  | [optional] |
| **weight__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **weight__n** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedSavedFilterList**](../Model/PaginatedSavedFilterList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSavedFiltersPartialUpdate()`

```php
extrasSavedFiltersPartialUpdate($id, $patched_saved_filter_request): \OpenAPI\Client\Model\SavedFilter
```



Patch a saved filter object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this saved filter.
$patched_saved_filter_request = new \OpenAPI\Client\Model\PatchedSavedFilterRequest(); // \OpenAPI\Client\Model\PatchedSavedFilterRequest

try {
    $result = $apiInstance->extrasSavedFiltersPartialUpdate($id, $patched_saved_filter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSavedFiltersPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this saved filter. | |
| **patched_saved_filter_request** | [**\OpenAPI\Client\Model\PatchedSavedFilterRequest**](../Model/PatchedSavedFilterRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SavedFilter**](../Model/SavedFilter.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSavedFiltersRetrieve()`

```php
extrasSavedFiltersRetrieve($id): \OpenAPI\Client\Model\SavedFilter
```



Get a saved filter object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this saved filter.

try {
    $result = $apiInstance->extrasSavedFiltersRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSavedFiltersRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this saved filter. | |

### Return type

[**\OpenAPI\Client\Model\SavedFilter**](../Model/SavedFilter.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSavedFiltersUpdate()`

```php
extrasSavedFiltersUpdate($id, $saved_filter_request): \OpenAPI\Client\Model\SavedFilter
```



Put a saved filter object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this saved filter.
$saved_filter_request = new \OpenAPI\Client\Model\SavedFilterRequest(); // \OpenAPI\Client\Model\SavedFilterRequest

try {
    $result = $apiInstance->extrasSavedFiltersUpdate($id, $saved_filter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSavedFiltersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this saved filter. | |
| **saved_filter_request** | [**\OpenAPI\Client\Model\SavedFilterRequest**](../Model/SavedFilterRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SavedFilter**](../Model/SavedFilter.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasScriptsCreate()`

```php
extrasScriptsCreate(): \OpenAPI\Client\Model\Script
```



Post a list of script objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->extrasScriptsCreate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasScriptsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Script**](../Model/Script.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasScriptsDestroy()`

```php
extrasScriptsDestroy($id)
```



Delete a script object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->extrasScriptsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasScriptsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `extrasScriptsList()`

```php
extrasScriptsList($id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $is_executable, $limit, $module_id, $module_id__n, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q): \OpenAPI\Client\Model\PaginatedScriptList
```



Get a list of script objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array(56); // int[]
$id__empty = True; // bool
$id__gt = array(56); // int[]
$id__gte = array(56); // int[]
$id__lt = array(56); // int[]
$id__lte = array(56); // int[]
$id__n = array(56); // int[]
$is_executable = True; // bool
$limit = 56; // int | Number of results to return per page.
$module_id = array(56); // int[] | Script module (ID)
$module_id__n = array(56); // int[] | Script module (ID)
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

try {
    $result = $apiInstance->extrasScriptsList($id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $is_executable, $limit, $module_id, $module_id__n, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasScriptsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__empty** | **bool**|  | [optional] |
| **id__gt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__gte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lt** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__lte** | [**int[]**](../Model/int.md)|  | [optional] |
| **id__n** | [**int[]**](../Model/int.md)|  | [optional] |
| **is_executable** | **bool**|  | [optional] |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **module_id** | [**int[]**](../Model/int.md)| Script module (ID) | [optional] |
| **module_id__n** | [**int[]**](../Model/int.md)| Script module (ID) | [optional] |
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

### Return type

[**\OpenAPI\Client\Model\PaginatedScriptList**](../Model/PaginatedScriptList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasScriptsPartialUpdate()`

```php
extrasScriptsPartialUpdate($id, $patched_script_input_request): \OpenAPI\Client\Model\Script
```



Patch a script object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$patched_script_input_request = new \OpenAPI\Client\Model\PatchedScriptInputRequest(); // \OpenAPI\Client\Model\PatchedScriptInputRequest

try {
    $result = $apiInstance->extrasScriptsPartialUpdate($id, $patched_script_input_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasScriptsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **patched_script_input_request** | [**\OpenAPI\Client\Model\PatchedScriptInputRequest**](../Model/PatchedScriptInputRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Script**](../Model/Script.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasScriptsRetrieve()`

```php
extrasScriptsRetrieve($id): \OpenAPI\Client\Model\Script
```



Get a script object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->extrasScriptsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasScriptsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\Script**](../Model/Script.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasScriptsUpdate()`

```php
extrasScriptsUpdate($id, $script_input_request): \OpenAPI\Client\Model\Script
```



Put a script object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$script_input_request = new \OpenAPI\Client\Model\ScriptInputRequest(); // \OpenAPI\Client\Model\ScriptInputRequest

try {
    $result = $apiInstance->extrasScriptsUpdate($id, $script_input_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasScriptsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **script_input_request** | [**\OpenAPI\Client\Model\ScriptInputRequest**](../Model/ScriptInputRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Script**](../Model/Script.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSubscriptionsBulkDestroy()`

```php
extrasSubscriptionsBulkDestroy($subscription_request)
```



Delete a list of subscription objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_request = array(new \OpenAPI\Client\Model\SubscriptionRequest()); // \OpenAPI\Client\Model\SubscriptionRequest[]

try {
    $apiInstance->extrasSubscriptionsBulkDestroy($subscription_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSubscriptionsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_request** | [**\OpenAPI\Client\Model\SubscriptionRequest[]**](../Model/SubscriptionRequest.md)|  | |

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

## `extrasSubscriptionsBulkPartialUpdate()`

```php
extrasSubscriptionsBulkPartialUpdate($subscription_request): \OpenAPI\Client\Model\Subscription[]
```



Patch a list of subscription objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_request = array(new \OpenAPI\Client\Model\SubscriptionRequest()); // \OpenAPI\Client\Model\SubscriptionRequest[]

try {
    $result = $apiInstance->extrasSubscriptionsBulkPartialUpdate($subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSubscriptionsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_request** | [**\OpenAPI\Client\Model\SubscriptionRequest[]**](../Model/SubscriptionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSubscriptionsBulkUpdate()`

```php
extrasSubscriptionsBulkUpdate($subscription_request): \OpenAPI\Client\Model\Subscription[]
```



Put a list of subscription objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_request = array(new \OpenAPI\Client\Model\SubscriptionRequest()); // \OpenAPI\Client\Model\SubscriptionRequest[]

try {
    $result = $apiInstance->extrasSubscriptionsBulkUpdate($subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSubscriptionsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_request** | [**\OpenAPI\Client\Model\SubscriptionRequest[]**](../Model/SubscriptionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSubscriptionsCreate()`

```php
extrasSubscriptionsCreate($subscription_request): \OpenAPI\Client\Model\Subscription
```



Post a list of subscription objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_request = new \OpenAPI\Client\Model\SubscriptionRequest(); // \OpenAPI\Client\Model\SubscriptionRequest

try {
    $result = $apiInstance->extrasSubscriptionsCreate($subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSubscriptionsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_request** | [**\OpenAPI\Client\Model\SubscriptionRequest**](../Model/SubscriptionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSubscriptionsDestroy()`

```php
extrasSubscriptionsDestroy($id)
```



Delete a subscription object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this subscription.

try {
    $apiInstance->extrasSubscriptionsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSubscriptionsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this subscription. | |

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

## `extrasSubscriptionsList()`

```php
extrasSubscriptionsList($limit, $offset, $ordering): \OpenAPI\Client\Model\PaginatedSubscriptionList
```



Get a list of subscription objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Number of results to return per page.
$offset = 56; // int | The initial index from which to return the results.
$ordering = 'ordering_example'; // string | Which field to use when ordering the results.

try {
    $result = $apiInstance->extrasSubscriptionsList($limit, $offset, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSubscriptionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of results to return per page. | [optional] |
| **offset** | **int**| The initial index from which to return the results. | [optional] |
| **ordering** | **string**| Which field to use when ordering the results. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedSubscriptionList**](../Model/PaginatedSubscriptionList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSubscriptionsPartialUpdate()`

```php
extrasSubscriptionsPartialUpdate($id, $patched_subscription_request): \OpenAPI\Client\Model\Subscription
```



Patch a subscription object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this subscription.
$patched_subscription_request = new \OpenAPI\Client\Model\PatchedSubscriptionRequest(); // \OpenAPI\Client\Model\PatchedSubscriptionRequest

try {
    $result = $apiInstance->extrasSubscriptionsPartialUpdate($id, $patched_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSubscriptionsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this subscription. | |
| **patched_subscription_request** | [**\OpenAPI\Client\Model\PatchedSubscriptionRequest**](../Model/PatchedSubscriptionRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSubscriptionsRetrieve()`

```php
extrasSubscriptionsRetrieve($id): \OpenAPI\Client\Model\Subscription
```



Get a subscription object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this subscription.

try {
    $result = $apiInstance->extrasSubscriptionsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSubscriptionsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this subscription. | |

### Return type

[**\OpenAPI\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasSubscriptionsUpdate()`

```php
extrasSubscriptionsUpdate($id, $subscription_request): \OpenAPI\Client\Model\Subscription
```



Put a subscription object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this subscription.
$subscription_request = new \OpenAPI\Client\Model\SubscriptionRequest(); // \OpenAPI\Client\Model\SubscriptionRequest

try {
    $result = $apiInstance->extrasSubscriptionsUpdate($id, $subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasSubscriptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this subscription. | |
| **subscription_request** | [**\OpenAPI\Client\Model\SubscriptionRequest**](../Model/SubscriptionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasTagsBulkDestroy()`

```php
extrasTagsBulkDestroy($tag_request)
```



Delete a list of tag objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_request = array(new \OpenAPI\Client\Model\TagRequest()); // \OpenAPI\Client\Model\TagRequest[]

try {
    $apiInstance->extrasTagsBulkDestroy($tag_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasTagsBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_request** | [**\OpenAPI\Client\Model\TagRequest[]**](../Model/TagRequest.md)|  | |

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

## `extrasTagsBulkPartialUpdate()`

```php
extrasTagsBulkPartialUpdate($tag_request): \OpenAPI\Client\Model\Tag[]
```



Patch a list of tag objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_request = array(new \OpenAPI\Client\Model\TagRequest()); // \OpenAPI\Client\Model\TagRequest[]

try {
    $result = $apiInstance->extrasTagsBulkPartialUpdate($tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasTagsBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_request** | [**\OpenAPI\Client\Model\TagRequest[]**](../Model/TagRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasTagsBulkUpdate()`

```php
extrasTagsBulkUpdate($tag_request): \OpenAPI\Client\Model\Tag[]
```



Put a list of tag objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_request = array(new \OpenAPI\Client\Model\TagRequest()); // \OpenAPI\Client\Model\TagRequest[]

try {
    $result = $apiInstance->extrasTagsBulkUpdate($tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasTagsBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_request** | [**\OpenAPI\Client\Model\TagRequest[]**](../Model/TagRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasTagsCreate()`

```php
extrasTagsCreate($tag_request): \OpenAPI\Client\Model\Tag
```



Post a list of tag objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_request = new \OpenAPI\Client\Model\TagRequest(); // \OpenAPI\Client\Model\TagRequest

try {
    $result = $apiInstance->extrasTagsCreate($tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasTagsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag_request** | [**\OpenAPI\Client\Model\TagRequest**](../Model/TagRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasTagsDestroy()`

```php
extrasTagsDestroy($id)
```



Delete a tag object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tag.

try {
    $apiInstance->extrasTagsDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasTagsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this tag. | |

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

## `extrasTagsList()`

```php
extrasTagsList($color, $color__empty, $color__ic, $color__ie, $color__iew, $color__isw, $color__n, $color__nic, $color__nie, $color__niew, $color__nisw, $content_type, $content_type_id, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $for_object_type_id, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_types, $object_types__n, $offset, $ordering, $q, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $updated_by_request): \OpenAPI\Client\Model\PaginatedTagList
```



Get a list of tag objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$color = array('color_example'); // string[]
$color__empty = True; // bool
$color__ic = array('color__ic_example'); // string[]
$color__ie = array('color__ie_example'); // string[]
$color__iew = array('color__iew_example'); // string[]
$color__isw = array('color__isw_example'); // string[]
$color__n = array('color__n_example'); // string[]
$color__nic = array('color__nic_example'); // string[]
$color__nie = array('color__nie_example'); // string[]
$color__niew = array('color__niew_example'); // string[]
$color__nisw = array('color__nisw_example'); // string[]
$content_type = array('content_type_example'); // string[]
$content_type_id = array(56); // int[]
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
$for_object_type_id = array(56); // int[]
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
$object_types = array(56); // int[]
$object_types__n = array(56); // int[]
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
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->extrasTagsList($color, $color__empty, $color__ic, $color__ie, $color__iew, $color__isw, $color__n, $color__nic, $color__nie, $color__niew, $color__nisw, $content_type, $content_type_id, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $for_object_type_id, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $object_types, $object_types__n, $offset, $ordering, $q, $slug, $slug__empty, $slug__ic, $slug__ie, $slug__iew, $slug__isw, $slug__n, $slug__nic, $slug__nie, $slug__niew, $slug__nisw, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasTagsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **color** | [**string[]**](../Model/string.md)|  | [optional] |
| **color__empty** | **bool**|  | [optional] |
| **color__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **color__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **color__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **color__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **color__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **color__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **color__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **color__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **color__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **content_type** | [**string[]**](../Model/string.md)|  | [optional] |
| **content_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **for_object_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **object_types** | [**int[]**](../Model/int.md)|  | [optional] |
| **object_types__n** | [**int[]**](../Model/int.md)|  | [optional] |
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
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedTagList**](../Model/PaginatedTagList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasTagsPartialUpdate()`

```php
extrasTagsPartialUpdate($id, $patched_tag_request): \OpenAPI\Client\Model\Tag
```



Patch a tag object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tag.
$patched_tag_request = new \OpenAPI\Client\Model\PatchedTagRequest(); // \OpenAPI\Client\Model\PatchedTagRequest

try {
    $result = $apiInstance->extrasTagsPartialUpdate($id, $patched_tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasTagsPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this tag. | |
| **patched_tag_request** | [**\OpenAPI\Client\Model\PatchedTagRequest**](../Model/PatchedTagRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasTagsRetrieve()`

```php
extrasTagsRetrieve($id): \OpenAPI\Client\Model\Tag
```



Get a tag object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tag.

try {
    $result = $apiInstance->extrasTagsRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasTagsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this tag. | |

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasTagsUpdate()`

```php
extrasTagsUpdate($id, $tag_request): \OpenAPI\Client\Model\Tag
```



Put a tag object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this tag.
$tag_request = new \OpenAPI\Client\Model\TagRequest(); // \OpenAPI\Client\Model\TagRequest

try {
    $result = $apiInstance->extrasTagsUpdate($id, $tag_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasTagsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this tag. | |
| **tag_request** | [**\OpenAPI\Client\Model\TagRequest**](../Model/TagRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasWebhooksBulkDestroy()`

```php
extrasWebhooksBulkDestroy($webhook_request)
```



Delete a list of webhook objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_request = array(new \OpenAPI\Client\Model\WebhookRequest()); // \OpenAPI\Client\Model\WebhookRequest[]

try {
    $apiInstance->extrasWebhooksBulkDestroy($webhook_request);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasWebhooksBulkDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_request** | [**\OpenAPI\Client\Model\WebhookRequest[]**](../Model/WebhookRequest.md)|  | |

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

## `extrasWebhooksBulkPartialUpdate()`

```php
extrasWebhooksBulkPartialUpdate($webhook_request): \OpenAPI\Client\Model\Webhook[]
```



Patch a list of webhook objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_request = array(new \OpenAPI\Client\Model\WebhookRequest()); // \OpenAPI\Client\Model\WebhookRequest[]

try {
    $result = $apiInstance->extrasWebhooksBulkPartialUpdate($webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasWebhooksBulkPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_request** | [**\OpenAPI\Client\Model\WebhookRequest[]**](../Model/WebhookRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasWebhooksBulkUpdate()`

```php
extrasWebhooksBulkUpdate($webhook_request): \OpenAPI\Client\Model\Webhook[]
```



Put a list of webhook objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_request = array(new \OpenAPI\Client\Model\WebhookRequest()); // \OpenAPI\Client\Model\WebhookRequest[]

try {
    $result = $apiInstance->extrasWebhooksBulkUpdate($webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasWebhooksBulkUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_request** | [**\OpenAPI\Client\Model\WebhookRequest[]**](../Model/WebhookRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasWebhooksCreate()`

```php
extrasWebhooksCreate($webhook_request): \OpenAPI\Client\Model\Webhook
```



Post a list of webhook objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_request = new \OpenAPI\Client\Model\WebhookRequest(); // \OpenAPI\Client\Model\WebhookRequest

try {
    $result = $apiInstance->extrasWebhooksCreate($webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasWebhooksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_request** | [**\OpenAPI\Client\Model\WebhookRequest**](../Model/WebhookRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasWebhooksDestroy()`

```php
extrasWebhooksDestroy($id)
```



Delete a webhook object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this webhook.

try {
    $apiInstance->extrasWebhooksDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasWebhooksDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this webhook. | |

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

## `extrasWebhooksList()`

```php
extrasWebhooksList($ca_file_path, $ca_file_path__empty, $ca_file_path__ic, $ca_file_path__ie, $ca_file_path__iew, $ca_file_path__isw, $ca_file_path__n, $ca_file_path__nic, $ca_file_path__nie, $ca_file_path__niew, $ca_file_path__nisw, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $http_content_type, $http_content_type__empty, $http_content_type__ic, $http_content_type__ie, $http_content_type__iew, $http_content_type__isw, $http_content_type__n, $http_content_type__nic, $http_content_type__nie, $http_content_type__niew, $http_content_type__nisw, $http_method, $http_method__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $payload_url, $q, $secret, $secret__empty, $secret__ic, $secret__ie, $secret__iew, $secret__isw, $secret__n, $secret__nic, $secret__nie, $secret__niew, $secret__nisw, $ssl_verification, $tag, $tag__n, $updated_by_request): \OpenAPI\Client\Model\PaginatedWebhookList
```



Get a list of webhook objects.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ca_file_path = array('ca_file_path_example'); // string[]
$ca_file_path__empty = True; // bool
$ca_file_path__ic = array('ca_file_path__ic_example'); // string[]
$ca_file_path__ie = array('ca_file_path__ie_example'); // string[]
$ca_file_path__iew = array('ca_file_path__iew_example'); // string[]
$ca_file_path__isw = array('ca_file_path__isw_example'); // string[]
$ca_file_path__n = array('ca_file_path__n_example'); // string[]
$ca_file_path__nic = array('ca_file_path__nic_example'); // string[]
$ca_file_path__nie = array('ca_file_path__nie_example'); // string[]
$ca_file_path__niew = array('ca_file_path__niew_example'); // string[]
$ca_file_path__nisw = array('ca_file_path__nisw_example'); // string[]
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
$http_content_type = array('http_content_type_example'); // string[]
$http_content_type__empty = True; // bool
$http_content_type__ic = array('http_content_type__ic_example'); // string[]
$http_content_type__ie = array('http_content_type__ie_example'); // string[]
$http_content_type__iew = array('http_content_type__iew_example'); // string[]
$http_content_type__isw = array('http_content_type__isw_example'); // string[]
$http_content_type__n = array('http_content_type__n_example'); // string[]
$http_content_type__nic = array('http_content_type__nic_example'); // string[]
$http_content_type__nie = array('http_content_type__nie_example'); // string[]
$http_content_type__niew = array('http_content_type__niew_example'); // string[]
$http_content_type__nisw = array('http_content_type__nisw_example'); // string[]
$http_method = array('http_method_example'); // string[]
$http_method__n = array('http_method__n_example'); // string[]
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
$payload_url = array('payload_url_example'); // string[]
$q = 'q_example'; // string | Search
$secret = array('secret_example'); // string[]
$secret__empty = True; // bool
$secret__ic = array('secret__ic_example'); // string[]
$secret__ie = array('secret__ie_example'); // string[]
$secret__iew = array('secret__iew_example'); // string[]
$secret__isw = array('secret__isw_example'); // string[]
$secret__n = array('secret__n_example'); // string[]
$secret__nic = array('secret__nic_example'); // string[]
$secret__nie = array('secret__nie_example'); // string[]
$secret__niew = array('secret__niew_example'); // string[]
$secret__nisw = array('secret__nisw_example'); // string[]
$ssl_verification = True; // bool
$tag = array('tag_example'); // string[]
$tag__n = array('tag__n_example'); // string[]
$updated_by_request = 'updated_by_request_example'; // string

try {
    $result = $apiInstance->extrasWebhooksList($ca_file_path, $ca_file_path__empty, $ca_file_path__ic, $ca_file_path__ie, $ca_file_path__iew, $ca_file_path__isw, $ca_file_path__n, $ca_file_path__nic, $ca_file_path__nie, $ca_file_path__niew, $ca_file_path__nisw, $created, $created__empty, $created__gt, $created__gte, $created__lt, $created__lte, $created__n, $created_by_request, $description, $description__empty, $description__ic, $description__ie, $description__iew, $description__isw, $description__n, $description__nic, $description__nie, $description__niew, $description__nisw, $http_content_type, $http_content_type__empty, $http_content_type__ic, $http_content_type__ie, $http_content_type__iew, $http_content_type__isw, $http_content_type__n, $http_content_type__nic, $http_content_type__nie, $http_content_type__niew, $http_content_type__nisw, $http_method, $http_method__n, $id, $id__empty, $id__gt, $id__gte, $id__lt, $id__lte, $id__n, $last_updated, $last_updated__empty, $last_updated__gt, $last_updated__gte, $last_updated__lt, $last_updated__lte, $last_updated__n, $limit, $modified_by_request, $name, $name__empty, $name__ic, $name__ie, $name__iew, $name__isw, $name__n, $name__nic, $name__nie, $name__niew, $name__nisw, $offset, $ordering, $payload_url, $q, $secret, $secret__empty, $secret__ic, $secret__ie, $secret__iew, $secret__isw, $secret__n, $secret__nic, $secret__nie, $secret__niew, $secret__nisw, $ssl_verification, $tag, $tag__n, $updated_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasWebhooksList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ca_file_path** | [**string[]**](../Model/string.md)|  | [optional] |
| **ca_file_path__empty** | **bool**|  | [optional] |
| **ca_file_path__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **ca_file_path__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **ca_file_path__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **ca_file_path__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **ca_file_path__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **ca_file_path__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **ca_file_path__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **ca_file_path__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **ca_file_path__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **http_content_type** | [**string[]**](../Model/string.md)|  | [optional] |
| **http_content_type__empty** | **bool**|  | [optional] |
| **http_content_type__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **http_content_type__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **http_content_type__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **http_content_type__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **http_content_type__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **http_content_type__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **http_content_type__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **http_content_type__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **http_content_type__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **http_method** | [**string[]**](../Model/string.md)|  | [optional] |
| **http_method__n** | [**string[]**](../Model/string.md)|  | [optional] |
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
| **payload_url** | [**string[]**](../Model/string.md)|  | [optional] |
| **q** | **string**| Search | [optional] |
| **secret** | [**string[]**](../Model/string.md)|  | [optional] |
| **secret__empty** | **bool**|  | [optional] |
| **secret__ic** | [**string[]**](../Model/string.md)|  | [optional] |
| **secret__ie** | [**string[]**](../Model/string.md)|  | [optional] |
| **secret__iew** | [**string[]**](../Model/string.md)|  | [optional] |
| **secret__isw** | [**string[]**](../Model/string.md)|  | [optional] |
| **secret__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **secret__nic** | [**string[]**](../Model/string.md)|  | [optional] |
| **secret__nie** | [**string[]**](../Model/string.md)|  | [optional] |
| **secret__niew** | [**string[]**](../Model/string.md)|  | [optional] |
| **secret__nisw** | [**string[]**](../Model/string.md)|  | [optional] |
| **ssl_verification** | **bool**|  | [optional] |
| **tag** | [**string[]**](../Model/string.md)|  | [optional] |
| **tag__n** | [**string[]**](../Model/string.md)|  | [optional] |
| **updated_by_request** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaginatedWebhookList**](../Model/PaginatedWebhookList.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasWebhooksPartialUpdate()`

```php
extrasWebhooksPartialUpdate($id, $patched_webhook_request): \OpenAPI\Client\Model\Webhook
```



Patch a webhook object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this webhook.
$patched_webhook_request = new \OpenAPI\Client\Model\PatchedWebhookRequest(); // \OpenAPI\Client\Model\PatchedWebhookRequest

try {
    $result = $apiInstance->extrasWebhooksPartialUpdate($id, $patched_webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasWebhooksPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this webhook. | |
| **patched_webhook_request** | [**\OpenAPI\Client\Model\PatchedWebhookRequest**](../Model/PatchedWebhookRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasWebhooksRetrieve()`

```php
extrasWebhooksRetrieve($id): \OpenAPI\Client\Model\Webhook
```



Get a webhook object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this webhook.

try {
    $result = $apiInstance->extrasWebhooksRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasWebhooksRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this webhook. | |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extrasWebhooksUpdate()`

```php
extrasWebhooksUpdate($id, $webhook_request): \OpenAPI\Client\Model\Webhook
```



Put a webhook object.

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


$apiInstance = new OpenAPI\Client\Api\ExtrasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this webhook.
$webhook_request = new \OpenAPI\Client\Model\WebhookRequest(); // \OpenAPI\Client\Model\WebhookRequest

try {
    $result = $apiInstance->extrasWebhooksUpdate($id, $webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtrasApi->extrasWebhooksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| A unique integer value identifying this webhook. | |
| **webhook_request** | [**\OpenAPI\Client\Model\WebhookRequest**](../Model/WebhookRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[cookieAuth](../../README.md#cookieAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
