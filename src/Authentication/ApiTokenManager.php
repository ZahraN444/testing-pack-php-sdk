<?php

declare(strict_types=1);

/*
 * MistAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MistAPILib\Authentication;

use Core\Authentication\CoreAuth;
use MistAPILib\ConfigurationDefaults;
use Core\Request\Parameters\HeaderParam;

/**
 * Utility class for authorization and token management.
 */
class ApiTokenManager extends CoreAuth implements ApiTokenCredentials
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
        parent::__construct(HeaderParam::init('Authorization', $this->getAuthorization())->requiredNonEmpty());
    }

    /**
     * String value for authorization.
     */
    public function getAuthorization(): string
    {
        return $this->config['authorization'] ?? ConfigurationDefaults::AUTHORIZATION;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $authorization Like many other API providers, itâ€™s also possible to generate
     *        API Tokens to be used (in HTTP Header) for authentication. An API token ties to a
     *        Admin with equal or less privileges.
     *
     *        **Format**:
     *        API Token value format is `Token {apitoken}`
     *
     *        **Notes**:
     *        * an API token generated for a specific admin has the same privilege as the user
     *        * an API token will be automatically removed if not used for > 90 days
     *        * SSO admins cannot generate these API tokens. Refer Org level API tokens which can
     *        have privileges of a specific Org/Site for more information.
     */
    public function equals(string $authorization): bool
    {
        return $authorization == $this->getAuthorization();
    }
}
