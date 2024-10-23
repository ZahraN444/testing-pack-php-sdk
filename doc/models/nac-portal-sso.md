
# Nac Portal Sso

## Structure

`NacPortalSso`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idpCert` | `?string` | Optional | - | getIdpCert(): ?string | setIdpCert(?string idpCert): void |
| `idpSignAlgo` | `?string` | Optional | - | getIdpSignAlgo(): ?string | setIdpSignAlgo(?string idpSignAlgo): void |
| `idpSsoUrl` | `?string` | Optional | - | getIdpSsoUrl(): ?string | setIdpSsoUrl(?string idpSsoUrl): void |
| `issuer` | `?string` | Optional | - | getIssuer(): ?string | setIssuer(?string issuer): void |
| `nameidFormat` | `?string` | Optional | - | getNameidFormat(): ?string | setNameidFormat(?string nameidFormat): void |
| `ssoRoleMatching` | [`?(NacPortalSsoRoleMatching[])`](../../doc/models/nac-portal-sso-role-matching.md) | Optional | - | getSsoRoleMatching(): ?array | setSsoRoleMatching(?array ssoRoleMatching): void |
| `useSsoRoleForCert` | `?bool` | Optional | if it's desired to inject a role into Cert's Subject (so it can be used later on in policy) | getUseSsoRoleForCert(): ?bool | setUseSsoRoleForCert(?bool useSsoRoleForCert): void |

## Example (as JSON)

```json
{
  "idp_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
  "idp_sign_algo": "sha256",
  "idp_sso_url": "https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130",
  "issuer": "https://app.onelogin.com/saml/metadata/138130",
  "nameid_format": "email"
}
```

