# Orgs NAC Portals

```php
$orgsNACPortalsController = $client->getOrgsNACPortalsController();
```

## Class Name

`OrgsNACPortalsController`

## Methods

* [List Org Nac Portals](../../doc/controllers/orgs-nac-portals.md#list-org-nac-portals)
* [Create Org Nac Portal](../../doc/controllers/orgs-nac-portals.md#create-org-nac-portal)
* [Delete Org Nac Portal](../../doc/controllers/orgs-nac-portals.md#delete-org-nac-portal)
* [Get Org Nac Portal](../../doc/controllers/orgs-nac-portals.md#get-org-nac-portal)
* [Update Org Nac Portal](../../doc/controllers/orgs-nac-portals.md#update-org-nac-portal)
* [List Org Nac Portal Sso Latest Failures](../../doc/controllers/orgs-nac-portals.md#list-org-nac-portal-sso-latest-failures)
* [Delete Org Nac Portal Image](../../doc/controllers/orgs-nac-portals.md#delete-org-nac-portal-image)
* [Upload Org Nac Portal Image](../../doc/controllers/orgs-nac-portals.md#upload-org-nac-portal-image)
* [Update Org Nac Portal Tempalte](../../doc/controllers/orgs-nac-portals.md#update-org-nac-portal-tempalte)


# List Org Nac Portals

List Org NAC Portals

```php
function listOrgNacPortals(string $orgId, ?int $page = 1, ?int $limit = 100): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `page` | `?int` | Query, Optional | **Default**: `1`<br>**Constraints**: `>= 1` |
| `limit` | `?int` | Query, Optional | **Default**: `100`<br>**Constraints**: `>= 0` |

## Response Type

[`NacPortal[]`](../../doc/models/nac-portal.md)

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$page = 1;

$limit = 100;

$result = $orgsNACPortalsController->listOrgNacPortals(
    $orgId,
    $page,
    $limit
);
```

## Example Response *(as JSON)*

```json
[
  {
    "access_type": "wireless",
    "cert_expire_time": 365,
    "enable_telemetry": true,
    "expiry_notification_time": 2,
    "name": "get-wifi",
    "notify_expiry": true,
    "ssid": "Corp",
    "sso": {
      "idp_cert": "-----BEGIN CERTIFICATE-----\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\n-----END CERTIFICATE-----",
      "idp_sign_algo": "sha256",
      "idp_sso_url": "https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130",
      "issuer": "https://app.onelogin.com/saml/metadata/138130",
      "nameid_format": "email",
      "sso_role_matching": [
        {
          "assigned": "user",
          "match": "Student"
        }
      ],
      "use_sso_role_for_cert": true
    }
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNacportals400ErrorException`](../../doc/models/api-v1-orgs-nacportals-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNacportals401ErrorException`](../../doc/models/api-v1-orgs-nacportals-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNacportals403ErrorException`](../../doc/models/api-v1-orgs-nacportals-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNacportals429ErrorException`](../../doc/models/api-v1-orgs-nacportals-429-error-exception.md) |


# Create Org Nac Portal

Create Org NAC Portal

```php
function createOrgNacPortal(string $orgId, ?NacPortal $body = null): NacPortal
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `body` | [`?NacPortal`](../../doc/models/nac-portal.md) | Body, Optional | - |

## Response Type

[`NacPortal`](../../doc/models/nac-portal.md)

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$body = NacPortalBuilder::init()
    ->certExpireTime(365)
    ->name('get-wifi')
    ->ssid('Corp')
    ->build();

$result = $orgsNACPortalsController->createOrgNacPortal(
    $orgId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "access_type": "wireless",
  "cert_expire_time": 365,
  "enable_telemetry": true,
  "expiry_notification_time": 2,
  "name": "get-wifi",
  "notify_expiry": true,
  "ssid": "Corp",
  "sso": {
    "idp_cert": "-----BEGIN CERTIFICATE-----\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\n-----END CERTIFICATE-----",
    "idp_sign_algo": "sha256",
    "idp_sso_url": "https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130",
    "issuer": "https://app.onelogin.com/saml/metadata/138130",
    "nameid_format": "email",
    "sso_role_matching": [
      {
        "assigned": "user",
        "match": "Student"
      }
    ],
    "use_sso_role_for_cert": true
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNacportals400ErrorException`](../../doc/models/api-v1-orgs-nacportals-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNacportals401ErrorException`](../../doc/models/api-v1-orgs-nacportals-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNacportals403ErrorException`](../../doc/models/api-v1-orgs-nacportals-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNacportals429ErrorException`](../../doc/models/api-v1-orgs-nacportals-429-error-exception.md) |


# Delete Org Nac Portal

Delete Org NAC Portal

```php
function deleteOrgNacPortal(string $orgId, string $nacportalId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `nacportalId` | `string` | Template, Required | - |

## Response Type

`void`

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';

$orgsNACPortalsController->deleteOrgNacPortal(
    $orgId,
    $nacportalId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNacportals400ErrorException`](../../doc/models/api-v1-orgs-nacportals-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNacportals401ErrorException`](../../doc/models/api-v1-orgs-nacportals-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNacportals403ErrorException`](../../doc/models/api-v1-orgs-nacportals-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNacportals429ErrorException`](../../doc/models/api-v1-orgs-nacportals-429-error-exception.md) |


# Get Org Nac Portal

Get Org NAC Portal

```php
function getOrgNacPortal(string $orgId, string $nacportalId): NacPortal
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `nacportalId` | `string` | Template, Required | - |

## Response Type

[`NacPortal`](../../doc/models/nac-portal.md)

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';

$result = $orgsNACPortalsController->getOrgNacPortal(
    $orgId,
    $nacportalId
);
```

## Example Response *(as JSON)*

```json
{
  "access_type": "wireless",
  "cert_expire_time": 365,
  "enable_telemetry": true,
  "expiry_notification_time": 2,
  "name": "get-wifi",
  "notify_expiry": true,
  "ssid": "Corp",
  "sso": {
    "idp_cert": "-----BEGIN CERTIFICATE-----\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\n-----END CERTIFICATE-----",
    "idp_sign_algo": "sha256",
    "idp_sso_url": "https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130",
    "issuer": "https://app.onelogin.com/saml/metadata/138130",
    "nameid_format": "email",
    "sso_role_matching": [
      {
        "assigned": "user",
        "match": "Student"
      }
    ],
    "use_sso_role_for_cert": true
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNacportals400ErrorException`](../../doc/models/api-v1-orgs-nacportals-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNacportals401ErrorException`](../../doc/models/api-v1-orgs-nacportals-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNacportals403ErrorException`](../../doc/models/api-v1-orgs-nacportals-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNacportals429ErrorException`](../../doc/models/api-v1-orgs-nacportals-429-error-exception.md) |


# Update Org Nac Portal

Update Org NAC Portal

```php
function updateOrgNacPortal(string $orgId, string $nacportalId, ?NacPortal $body = null): NacPortal
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `nacportalId` | `string` | Template, Required | - |
| `body` | [`?NacPortal`](../../doc/models/nac-portal.md) | Body, Optional | - |

## Response Type

[`NacPortal`](../../doc/models/nac-portal.md)

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';

$body = NacPortalBuilder::init()
    ->certExpireTime(365)
    ->name('get-wifi')
    ->ssid('Corp')
    ->build();

$result = $orgsNACPortalsController->updateOrgNacPortal(
    $orgId,
    $nacportalId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "access_type": "wireless",
  "cert_expire_time": 365,
  "enable_telemetry": true,
  "expiry_notification_time": 2,
  "name": "get-wifi",
  "notify_expiry": true,
  "ssid": "Corp",
  "sso": {
    "idp_cert": "-----BEGIN CERTIFICATE-----\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\n-----END CERTIFICATE-----",
    "idp_sign_algo": "sha256",
    "idp_sso_url": "https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130",
    "issuer": "https://app.onelogin.com/saml/metadata/138130",
    "nameid_format": "email",
    "sso_role_matching": [
      {
        "assigned": "user",
        "match": "Student"
      }
    ],
    "use_sso_role_for_cert": true
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNacportals400ErrorException`](../../doc/models/api-v1-orgs-nacportals-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNacportals401ErrorException`](../../doc/models/api-v1-orgs-nacportals-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNacportals403ErrorException`](../../doc/models/api-v1-orgs-nacportals-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNacportals429ErrorException`](../../doc/models/api-v1-orgs-nacportals-429-error-exception.md) |


# List Org Nac Portal Sso Latest Failures

Get List of Org NAC Portal SSO Latest Failures

```php
function listOrgNacPortalSsoLatestFailures(
    string $orgId,
    string $nacportalId,
    ?int $page = 1,
    ?int $limit = 100,
    ?int $start = null,
    ?int $end = null,
    ?string $duration = '1d'
): ResponseSsoFailureSearch
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `nacportalId` | `string` | Template, Required | - |
| `page` | `?int` | Query, Optional | **Default**: `1`<br>**Constraints**: `>= 1` |
| `limit` | `?int` | Query, Optional | **Default**: `100`<br>**Constraints**: `>= 0` |
| `start` | `?int` | Query, Optional | start datetime, can be epoch or relative time like -1d, -1w; -1d if not specified |
| `end` | `?int` | Query, Optional | end datetime, can be epoch or relative time like -1d, -2h; now if not specified |
| `duration` | `?string` | Query, Optional | duration like 7d, 2w<br>**Default**: `'1d'` |

## Response Type

[`ResponseSsoFailureSearch`](../../doc/models/response-sso-failure-search.md)

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';

$page = 1;

$limit = 100;

$duration = '10m';

$result = $orgsNACPortalsController->listOrgNacPortalSsoLatestFailures(
    $orgId,
    $nacportalId,
    $page,
    $limit,
    null,
    null,
    $duration
);
```

## Example Response *(as JSON)*

```json
{
  "results": [
    {
      "detail": "string",
      "saml_assertion_xml": "string",
      "timestamp": 0
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNacportalsFailures400ErrorException`](../../doc/models/api-v1-orgs-nacportals-failures-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNacportalsFailures401ErrorException`](../../doc/models/api-v1-orgs-nacportals-failures-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNacportalsFailures403ErrorException`](../../doc/models/api-v1-orgs-nacportals-failures-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNacportalsFailures429ErrorException`](../../doc/models/api-v1-orgs-nacportals-failures-429-error-exception.md) |


# Delete Org Nac Portal Image

Delete background image for NAC Portal

If image is not uploaded or is deleted, NAC Portal will use default image.

```php
function deleteOrgNacPortalImage(string $orgId, string $nacportalId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `nacportalId` | `string` | Template, Required | - |

## Response Type

`void`

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';

$orgsNACPortalsController->deleteOrgNacPortalImage(
    $orgId,
    $nacportalId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNacportalsPortalImage400ErrorException`](../../doc/models/api-v1-orgs-nacportals-portal-image-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNacportalsPortalImage401ErrorException`](../../doc/models/api-v1-orgs-nacportals-portal-image-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNacportalsPortalImage403ErrorException`](../../doc/models/api-v1-orgs-nacportals-portal-image-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNacportalsPortalImage429ErrorException`](../../doc/models/api-v1-orgs-nacportals-portal-image-429-error-exception.md) |


# Upload Org Nac Portal Image

Upload background image for NAC Portal

```php
function uploadOrgNacPortalImage(
    string $orgId,
    string $nacportalId,
    ?FileWrapper $file = null,
    ?string $json = null
): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `nacportalId` | `string` | Template, Required | - |
| `file` | `?FileWrapper` | Form, Optional | Binary file |
| `json` | `?string` | Form, Optional | JSON string describing the upload |

## Response Type

`void`

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';

$orgsNACPortalsController->uploadOrgNacPortalImage(
    $orgId,
    $nacportalId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNacportalsPortalImage400ErrorException`](../../doc/models/api-v1-orgs-nacportals-portal-image-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNacportalsPortalImage401ErrorException`](../../doc/models/api-v1-orgs-nacportals-portal-image-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNacportalsPortalImage403ErrorException`](../../doc/models/api-v1-orgs-nacportals-portal-image-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNacportalsPortalImage429ErrorException`](../../doc/models/api-v1-orgs-nacportals-portal-image-429-error-exception.md) |


# Update Org Nac Portal Tempalte

Update Org NAC Portal Template

```php
function updateOrgNacPortalTempalte(string $orgId, string $nacportalId, ?NacPortalTemplate $body = null): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `orgId` | `string` | Template, Required | - |
| `nacportalId` | `string` | Template, Required | - |
| `body` | [`?NacPortalTemplate`](../../doc/models/nac-portal-template.md) | Body, Optional | - |

## Response Type

`void`

## Example Usage

```php
$orgId = '000000ab-00ab-00ab-00ab-0000000000ab';

$nacportalId = '000000ab-00ab-00ab-00ab-0000000000ab';

$body = NacPortalTemplateBuilder::init()
    ->color('#1074bc')
    ->poweredBy(false)
    ->build();

$orgsNACPortalsController->updateOrgNacPortalTempalte(
    $orgId,
    $nacportalId,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Syntax | [`ApiV1OrgsNacportalsPortalTemplate400ErrorException`](../../doc/models/api-v1-orgs-nacportals-portal-template-400-error-exception.md) |
| 401 | Unauthorized | [`ApiV1OrgsNacportalsPortalTemplate401ErrorException`](../../doc/models/api-v1-orgs-nacportals-portal-template-401-error-exception.md) |
| 403 | Permission Denied | [`ApiV1OrgsNacportalsPortalTemplate403ErrorException`](../../doc/models/api-v1-orgs-nacportals-portal-template-403-error-exception.md) |
| 404 | Not found. The API endpoint doesnâ€™t exist or resource doesnâ€™ t exist | [`ResponseHttp404Exception`](../../doc/models/response-http-404-exception.md) |
| 429 | Too Many Request. The API Token used for the request reached the 5000 API Calls per hour threshold | [`ApiV1OrgsNacportalsPortalTemplate429ErrorException`](../../doc/models/api-v1-orgs-nacportals-portal-template-429-error-exception.md) |

