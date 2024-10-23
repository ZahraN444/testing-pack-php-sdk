
# Custom Header Signature



Documentation for accessing and setting credentials for csrfToken.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| X-CSRFToken | `string` | This protects the website against [Cross Site Request Forgery](http://en.wikipedia.org/wiki/Cross-site_request_forgery), all the POST / PUT / DELETE APIs needs to have CSRF token in the AJAX Request header when using Login/Password authentication (with or without MFA)<br><br>The CSRF Token is sent back by Mist in the Cookies from the Login Response API Call:<br>`cookies[csrftoken]`<br><br>The CSRF Token must be added in the HTTP Request Headers:<br><br>```<br>X-CSRFToken: vwvBuq9qkqaKh7lu8tNc0gkvBfEaLAmx<br>``` | `xCSRFToken` | `getXCSRFToken()` |



**Note:** Auth credentials can be set using `CsrfTokenCredentialsBuilder::init()` in `csrfTokenCredentials` method in the client builder and accessed through `getCsrfTokenCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
$client = MistAPIClientBuilder::init()
    ->csrfTokenCredentials(
        CsrfTokenCredentialsBuilder::init(
            'X-CSRFToken'
        )
    )
    ->build();
```


