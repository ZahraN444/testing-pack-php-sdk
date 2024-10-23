
# Nac Crl File

## Structure

`NacCrlFile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `createdTime` | `?float` | Optional | Time at which the file was first uploaded, in epoch | getCreatedTime(): ?float | setCreatedTime(?float createdTime): void |
| `id` | `?string` | Optional | ID for file upload, used to identify file even for deletion | getId(): ?string | setId(?string id): void |
| `modifiedTime` | `?float` | Optional | Time at which the file was last updated, in epoch | getModifiedTime(): ?float | setModifiedTime(?float modifiedTime): void |
| `name` | `?string` | Optional | Name for the .crl file issuer if set | getName(): ?string | setName(?string name): void |
| `url` | `?string` | Optional | Download URL for the .crl file | getUrl(): ?string | setUrl(?string url): void |

## Example (as JSON)

```json
{
  "created_time": 1698099079.0,
  "id": "a1ca26f3-44dd-4833-9a7b-97bbb2ab5230",
  "modified_time": 1698099079.0,
  "name": "SampleCertificateSigner",
  "url": "http://url/to/crl_file.crl"
}
```

