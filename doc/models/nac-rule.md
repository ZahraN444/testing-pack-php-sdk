
# Nac Rule

## Structure

`NacRule`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `action` | [`string(NacRuleActionEnum)`](../../doc/models/nac-rule-action-enum.md) | Required | - | getAction(): string | setAction(string action): void |
| `applyTags` | `?(string[])` | Optional | all optional, this goes into Access-Accept | getApplyTags(): ?array | setApplyTags(?array applyTags): void |
| `createdTime` | `?float` | Optional | - | getCreatedTime(): ?float | setCreatedTime(?float createdTime): void |
| `enabled` | `?bool` | Optional | enabled or not<br>**Default**: `true` | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `matching` | [`?NacRuleMatching`](../../doc/models/nac-rule-matching.md) | Optional | - | getMatching(): ?NacRuleMatching | setMatching(?NacRuleMatching matching): void |
| `modifiedTime` | `?float` | Optional | - | getModifiedTime(): ?float | setModifiedTime(?float modifiedTime): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `notMatching` | [`?NacRuleMatching`](../../doc/models/nac-rule-matching.md) | Optional | - | getNotMatching(): ?NacRuleMatching | setNotMatching(?NacRuleMatching notMatching): void |
| `order` | `?int` | Optional | the order of the rule, lower value implies higher priority<br>**Constraints**: `>= 0` | getOrder(): ?int | setOrder(?int order): void |
| `orgId` | `?string` | Optional | - | getOrgId(): ?string | setOrgId(?string orgId): void |

## Example (as JSON)

```json
{
  "action": "allow",
  "apply_tags": [
    "c049dfcd-0c73-5014-1c64-062e9903f1e5"
  ],
  "enabled": true,
  "name": "name0",
  "order": 1,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "created_time": 238.9,
  "id": "000004ec-0000-0000-0000-000000000000",
  "matching": {
    "auth_type": "cert",
    "nactags": [
      "nactags6"
    ],
    "port_types": [
      "wired"
    ],
    "site_ids": [
      "00000738-0000-0000-0000-000000000000"
    ],
    "sitegroup_ids": [
      "00002472-0000-0000-0000-000000000000",
      "00002473-0000-0000-0000-000000000000",
      "00002474-0000-0000-0000-000000000000"
    ]
  }
}
```

