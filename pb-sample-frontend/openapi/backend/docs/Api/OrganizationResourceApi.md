# Backend\Client\OrganizationResourceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**create()**](OrganizationResourceApi.md#create) | **POST** /api/v1/organization | Create new Organization |
| [**getAll()**](OrganizationResourceApi.md#getAll) | **GET** /api/v1/organization | Get all organizations |
| [**getById()**](OrganizationResourceApi.md#getById) | **GET** /api/v1/organization/{id} | Get Organization by Id |
| [**getFilterByCountry()**](OrganizationResourceApi.md#getFilterByCountry) | **GET** /api/v1/organization/filter | Get organizations filter by country |


## `create()`

```php
create($organization)
```

Create new Organization

createOrganization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Backend\Client\Api\OrganizationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization = new \Backend\Client\Model\Organization(); // \Backend\Client\Model\Organization

try {
    $apiInstance->create($organization);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationResourceApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | [**\Backend\Client\Model\Organization**](../Model/Organization.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAll()`

```php
getAll(): \Backend\Client\Model\OrganizationsModel
```

Get all organizations

Retrieves a list of organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Backend\Client\Api\OrganizationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationResourceApi->getAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Backend\Client\Model\OrganizationsModel**](../Model/OrganizationsModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getById()`

```php
getById($id): \Backend\Client\Model\Organization
```

Get Organization by Id

Retrieves one organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Backend\Client\Api\OrganizationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->getById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationResourceApi->getById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Backend\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilterByCountry()`

```php
getFilterByCountry($country)
```

Get organizations filter by country

Retrieves a list of organization for Country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Backend\Client\Api\OrganizationResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country = 'country_example'; // string

try {
    $apiInstance->getFilterByCountry($country);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationResourceApi->getFilterByCountry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
