
# Nac Portal Template

## Structure

`NacPortalTemplate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `alignment` | [`?string(NacPortalTypeEnum1Enum)`](../../doc/models/nac-portal-type-enum-1-enum.md) | Optional | - | getAlignment(): ?string | setAlignment(?string alignment): void |
| `color` | `?string` | Optional | **Default**: `'#1074bc'` | getColor(): ?string | setColor(?string color): void |
| `logo` | `?string` | Optional | custom logo custom logo with â€œdata:image/png;base64,â€ format. default null, uses Juniper Mist Logo. | getLogo(): ?string | setLogo(?string logo): void |
| `poweredBy` | `?bool` | Optional | whether to hide â€œPowered by Juniper Mistâ€ and email footers<br>**Default**: `false` | getPoweredBy(): ?bool | setPoweredBy(?bool poweredBy): void |

## Example (as JSON)

```json
{
  "color": "#1074bc",
  "poweredBy": false,
  "alignment": "marvis_client",
  "logo": "logo6"
}
```

