# Orgs NAC Tags

```php
$orgsNACTagsController = $client->getOrgsNACTagsController();
```

## Class Name

`OrgsNACTagsController`

## Methods

* [Get Org Nac Tag](../../doc/controllers/orgs-nac-tags.md#get-org-nac-tag)
* [List Org Nac Tags](../../doc/controllers/orgs-nac-tags.md#list-org-nac-tags)
* [Delete Org Nac Tag](../../doc/controllers/orgs-nac-tags.md#delete-org-nac-tag)
* [Update Org Nac Tag](../../doc/controllers/orgs-nac-tags.md#update-org-nac-tag)
* [Create Org Nac Tag](../../doc/controllers/orgs-nac-tags.md#create-org-nac-tag)


# Get Org Nac Tag

Get Org NAC Tag

```php
function getOrgNacTag(string $orgId, string $nactagId): NacTag
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `nactagId` | `string` | Template, Required | - |

## Response Type

[`NacTag`](../../doc/models/nac-tag.md)

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$nactagId = '000000ab-00ab-00ab-00ab-0000000000ab';

$result = $orgsNACTagsController->getOrgNacTag(
    $orgId,
    $nactagId
);
```

## Example Response *(as JSON)*

```json
{
  "match": "client_mac",
  "name": "cameras",
  "type": "match",
  "values": [
    "010203040506",
    "abcdef*"
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNactags400ErrorException`](../../doc/models/api-v1-orgs-nactags-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNactags401ErrorException`](../../doc/models/api-v1-orgs-nactags-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNactags403ErrorException`](../../doc/models/api-v1-orgs-nactags-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNactags429ErrorException`](../../doc/models/api-v1-orgs-nactags-429-error-exception.md) |


# List Org Nac Tags

Get List of Org NAC Tags

```php
function listOrgNacTags(
    string $orgId,
    ?string $type = null,
    ?string $name = null,
    ?string $match = null,
    ?int $page = 1,
    ?int $limit = 100
): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `type` | `?string` | Query, Optional | Type of NAC Tag |
| `name` | `?string` | Query, Optional | Name of NAC Tag |
| `match` | `?string` | Query, Optional | Type of NAC Tag |
| `page` | `?int` | Query, Optional | **Default**: `1`<br>**Constraints**: `>= 1` |
| `limit` | `?int` | Query, Optional | **Default**: `100`<br>**Constraints**: `>= 0` |

## Response Type

[`NacTag[]`](../../doc/models/nac-tag.md)

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$page = 1;

$limit = 100;

$result = $orgsNACTagsController->listOrgNacTags(
    $orgId,
    null,
    null,
    null,
    $page,
    $limit
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNactags400ErrorException`](../../doc/models/api-v1-orgs-nactags-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNactags401ErrorException`](../../doc/models/api-v1-orgs-nactags-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNactags403ErrorException`](../../doc/models/api-v1-orgs-nactags-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNactags429ErrorException`](../../doc/models/api-v1-orgs-nactags-429-error-exception.md) |


# Delete Org Nac Tag

Delete Org NAC Tag

```php
function deleteOrgNacTag(string $orgId, string $nactagId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `nactagId` | `string` | Template, Required | - |

## Response Type

`void`

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$nactagId = '000000ab-00ab-00ab-00ab-0000000000ab';

$orgsNACTagsController->deleteOrgNacTag(
    $orgId,
    $nactagId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNactags400ErrorException`](../../doc/models/api-v1-orgs-nactags-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNactags401ErrorException`](../../doc/models/api-v1-orgs-nactags-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNactags403ErrorException`](../../doc/models/api-v1-orgs-nactags-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNactags429ErrorException`](../../doc/models/api-v1-orgs-nactags-429-error-exception.md) |


# Update Org Nac Tag

Update Org NAC Tag

```php
function updateOrgNacTag(string $orgId, string $nactagId, ?NacTag $body = null): NacTag
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `nactagId` | `string` | Template, Required | - |
| `body` | [`?NacTag`](../../doc/models/nac-tag.md) | Body, Optional | - |

## Response Type

[`NacTag`](../../doc/models/nac-tag.md)

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$nactagId = '000000ab-00ab-00ab-00ab-0000000000ab';

$body = NacTagBuilder::init(
    'name6',
    NacTagTypeEnum::USERNAME_ATTR
)
    ->allowUsermacOverride(false)
    ->egressVlanNames(
        [
            '1vlan-30',
            '1vlan-20',
            '2-vlan10'
        ]
    )
    ->matchAll(false)
    ->orgId('a97c1b22-a4e9-411e-9bfd-d8695a0f9e61')
    ->radiusAttrs(
        [
            'Idle-Timeout=600',
            'Termination-Action=RADIUS-Request'
        ]
    )
    ->radiusVendorAttrs(
        [
            'PaloAlto-Admin-Role=superuser',
            'PaloAlto-Panorama-Admin-Role=administrator'
        ]
    )
    ->sessionTimeout(86000)
    ->build();

$result = $orgsNACTagsController->updateOrgNacTag(
    $orgId,
    $nactagId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "match": "client_mac",
  "name": "cameras",
  "type": "match",
  "values": [
    "010203040506",
    "abcdef*"
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNactags400ErrorException`](../../doc/models/api-v1-orgs-nactags-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNactags401ErrorException`](../../doc/models/api-v1-orgs-nactags-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNactags403ErrorException`](../../doc/models/api-v1-orgs-nactags-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNactags429ErrorException`](../../doc/models/api-v1-orgs-nactags-429-error-exception.md) |


# Create Org Nac Tag

Create Org NAC Tag

```php
function createOrgNacTag(string $orgId, ?NacTag $body = null): NacTag
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `body` | [`?NacTag`](../../doc/models/nac-tag.md) | Body, Optional | - |

## Response Type

[`NacTag`](../../doc/models/nac-tag.md)

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$body = NacTagBuilder::init(
    'name6',
    NacTagTypeEnum::USERNAME_ATTR
)
    ->allowUsermacOverride(false)
    ->egressVlanNames(
        [
            '1vlan-30',
            '1vlan-20',
            '2-vlan10'
        ]
    )
    ->matchAll(false)
    ->orgId('a97c1b22-a4e9-411e-9bfd-d8695a0f9e61')
    ->radiusAttrs(
        [
            'Idle-Timeout=600',
            'Termination-Action=RADIUS-Request'
        ]
    )
    ->radiusVendorAttrs(
        [
            'PaloAlto-Admin-Role=superuser',
            'PaloAlto-Panorama-Admin-Role=administrator'
        ]
    )
    ->sessionTimeout(86000)
    ->build();

$result = $orgsNACTagsController->createOrgNacTag(
    $orgId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "match": "client_mac",
  "name": "cameras",
  "type": "match",
  "values": [
    "010203040506",
    "abcdef*"
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNactags400ErrorException`](../../doc/models/api-v1-orgs-nactags-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNactags401ErrorException`](../../doc/models/api-v1-orgs-nactags-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNactags403ErrorException`](../../doc/models/api-v1-orgs-nactags-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNactags429ErrorException`](../../doc/models/api-v1-orgs-nactags-429-error-exception.md) |

