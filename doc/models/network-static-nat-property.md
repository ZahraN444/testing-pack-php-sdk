
# Network Static Nat Property

## Structure

`NetworkStaticNatProperty`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `internalIp` | `?string` | Optional | - | getInternalIp(): ?string | setInternalIp(?string internalIp): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `wanName` | `?string` | Optional | If not set, we configure the nat policies against all WAN ports for simplicity | getWanName(): ?string | setWanName(?string wanName): void |

## Example (as JSON)

```json
{
  "internal_ip": "192.168.70.3",
  "name": "pos_station-1",
  "wan_name": "wan0"
}
```

