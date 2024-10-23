
# Response Sso Failure Search

## Structure

`ResponseSsoFailureSearch`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `results` | [`ResponseSsoFailureSearchItem[]`](../../doc/models/response-sso-failure-search-item.md) | Required | **Constraints**: *Unique Items Required* | getResults(): array | setResults(array results): void |

## Example (as JSON)

```json
{
  "results": [
    {
      "detail": "detail2",
      "saml_assertion_xml": "saml_assertion_xml0",
      "timestamp": 2.64
    }
  ]
}
```

