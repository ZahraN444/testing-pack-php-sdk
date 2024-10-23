<?php

declare(strict_types=1);

/*
 * MistAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MistAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use MistAPILib\Models\NacPortalSsoRoleMatching;

/**
 * Builder for model NacPortalSsoRoleMatching
 *
 * @see NacPortalSsoRoleMatching
 */
class NacPortalSsoRoleMatchingBuilder
{
    /**
     * @var NacPortalSsoRoleMatching
     */
    private $instance;

    private function __construct(NacPortalSsoRoleMatching $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new nac portal sso role matching Builder object.
     */
    public static function init(): self
    {
        return new self(new NacPortalSsoRoleMatching());
    }

    /**
     * Sets assigned field.
     */
    public function assigned(?string $value): self
    {
        $this->instance->setAssigned($value);
        return $this;
    }

    /**
     * Sets match field.
     */
    public function match(?string $value): self
    {
        $this->instance->setMatch($value);
        return $this;
    }

    /**
     * Initializes a new nac portal sso role matching object.
     */
    public function build(): NacPortalSsoRoleMatching
    {
        return CoreHelper::clone($this->instance);
    }
}
