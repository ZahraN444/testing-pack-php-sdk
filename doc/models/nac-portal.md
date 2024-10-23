
# Nac Portal

## Structure

`NacPortal`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accessType` | [`?string(NacPortalAccessTypeEnum)`](../../doc/models/nac-portal-access-type-enum.md) | Optional | - | getAccessType(): ?string | setAccessType(?string accessType): void |
| `bgImageUrl` | `?string` | Optional | background image | getBgImageUrl(): ?string | setBgImageUrl(?string bgImageUrl): void |
| `certExpireTime` | `?int` | Optional | in days | getCertExpireTime(): ?int | setCertExpireTime(?int certExpireTime): void |
| `enableTelemetry` | `?bool` | Optional | model, version, fingering, events (connecting, disconnect, roaming), which ap | getEnableTelemetry(): ?bool | setEnableTelemetry(?bool enableTelemetry): void |
| `expiryNotificationTime` | `?int` | Optional | in days | getExpiryNotificationTime(): ?int | setExpiryNotificationTime(?int expiryNotificationTime): void |
| `guestPortalConfig` | [`?NacPortalSso`](../../doc/models/nac-portal-sso.md) | Optional | - | getGuestPortalConfig(): ?NacPortalSso | setGuestPortalConfig(?NacPortalSso guestPortalConfig): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `notifyExpiry` | `?bool` | Optional | phase 2 | getNotifyExpiry(): ?bool | setNotifyExpiry(?bool notifyExpiry): void |
| `ssid` | `?string` | Optional | - | getSsid(): ?string | setSsid(?string ssid): void |
| `sso` | [`?NacPortalSso`](../../doc/models/nac-portal-sso.md) | Optional | - | getSso(): ?NacPortalSso | setSso(?NacPortalSso sso): void |
| `templateUrl` | `?string` | Optional | - | getTemplateUrl(): ?string | setTemplateUrl(?string templateUrl): void |
| `thumbnailUrl` | `?string` | Optional | - | getThumbnailUrl(): ?string | setThumbnailUrl(?string thumbnailUrl): void |
| `tos` | `?string` | Optional | - | getTos(): ?string | setTos(?string tos): void |
| `type` | [`?string(NacPortalTypeEnum)`](../../doc/models/nac-portal-type-enum.md) | Optional | - | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "cert_expire_time": 365,
  "name": "get-wifi",
  "ssid": "Corp",
  "access_type": "wireless",
  "bg_image_url": "bg_image_url2",
  "enable_telemetry": false,
  "expiry_notification_time": 2
}
```

