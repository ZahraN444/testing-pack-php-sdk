
# Getting Started with Mist API

## Introduction

> Version: **2408.1.0**
> 
> Date: **August 1, 2024**

---


### Additional Documentation

* [Mist Automation Guide](https://www.juniper.net/documentation/us/en/software/mist/automation-integration/index.html)
* [Mist Location SDK](https://www.juniper.net/documentation/us/en/software/mist/location_services/topics/concept/mist-how-get-mist-sdk.html)
* [Mist Product Updates](https://www.mist.com/documentation/category/product-updates/)

---


### Helpful Resources

* [API Sandbox and Exercises](https://api-class.mist.com/)
* [Postman Collection, Runners and Webhook Samples](https://www.postman.com/juniper-mist/workspace/mist-systems-s-public-workspace)
* [API Demo Apps](https://apps.mist-lab.fr/)
* [Juniper Blog](https://blogs.juniper.net/)

---


## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "apimatictestttttt/testing-pack-sdk:4.6.6"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "apimatictestttttt/testing-pack-sdk": "4.6.6"
}
```

You can also view the package at:
https://packagist.org/packages/apimatictestttttt/testing-pack-sdk#4.6.6

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | `Environment` | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `apiTokenCredentials` | [`ApiTokenCredentials`](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/auth/custom-header-signature.md) | The Credentials Setter for Custom Header Signature |
| `basicAuthCredentials` | [`BasicAuthCredentials`](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/auth/basic-authentication.md) | The Credentials Setter for Basic Authentication |
| `csrfTokenCredentials` | [`CsrfTokenCredentials`](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/auth/custom-header-signature-1.md) | The Credentials Setter for Custom Header Signature |

The API client can be initialized as follows:

```php
$client = MistAPIClientBuilder::init()
    ->apiTokenCredentials(
        ApiTokenCredentialsBuilder::init(
            'Authorization'
        )
    )
    ->basicAuthCredentials(
        BasicAuthCredentialsBuilder::init(
            'Username',
            'Password'
        )
    )
    ->csrfTokenCredentials(
        CsrfTokenCredentialsBuilder::init(
            'X-CSRFToken'
        )
    )
    ->environment(Environment::PRODUCTION)
    ->build();
```

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| production | **Default** |
| environment2 | - |
| environment3 | - |
| environment4 | - |
| environment5 | - |
| environment6 | - |
| environment7 | - |
| environment8 | - |

## Authorization

This API uses the following authentication schemes.

* [`apiToken (Custom Header Signature)`](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/auth/custom-header-signature.md)
* [`basicAuth (Basic Authentication)`](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/auth/basic-authentication.md)
* [`csrfToken (Custom Header Signature)`](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/auth/custom-header-signature-1.md)

## List of APIs

* [Orgs NAC Tags](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/controllers/orgs-nac-tags.md)
* [Orgs NAC Portals](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/controllers/orgs-nac-portals.md)

## Classes Documentation

* [Utility Classes](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/utility-classes.md)
* [ApiException](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/api-exception.md)
* [HttpRequest](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/http-request.md)
* [HttpResponse](https://www.github.com/ZahraN444/testing-pack-php-sdk/tree/4.6.6/doc/http-response.md)

