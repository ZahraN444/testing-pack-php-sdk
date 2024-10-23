
# Network Destination Nat Property

## Structure

`NetworkDestinationNatProperty`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `internalIp` | `?string` | Optional | - | getInternalIp(): ?string | setInternalIp(?string internalIp): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `port` | `?int` | Optional | - | getPort(): ?int | setPort(?int port): void |

## Example (as JSON)

```json
{
  "internal_ip": "192.168.70.30",
  "name": "web server",
  "port": 443
}
```

