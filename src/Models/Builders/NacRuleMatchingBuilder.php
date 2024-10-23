<?php

declare(strict_types=1);

/*
 * MistAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MistAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use MistAPILib\Models\NacRuleMatching;

/**
 * Builder for model NacRuleMatching
 *
 * @see NacRuleMatching
 */
class NacRuleMatchingBuilder
{
    /**
     * @var NacRuleMatching
     */
    private $instance;

    private function __construct(NacRuleMatching $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new nac rule matching Builder object.
     */
    public static function init(): self
    {
        return new self(new NacRuleMatching());
    }

    /**
     * Sets auth type field.
     */
    public function authType(?string $value): self
    {
        $this->instance->setAuthType($value);
        return $this;
    }

    /**
     * Sets nactags field.
     */
    public function nactags(?array $value): self
    {
        $this->instance->setNactags($value);
        return $this;
    }

    /**
     * Sets port types field.
     */
    public function portTypes(?array $value): self
    {
        $this->instance->setPortTypes($value);
        return $this;
    }

    /**
     * Sets site ids field.
     */
    public function siteIds(?array $value): self
    {
        $this->instance->setSiteIds($value);
        return $this;
    }

    /**
     * Sets sitegroup ids field.
     */
    public function sitegroupIds(?array $value): self
    {
        $this->instance->setSitegroupIds($value);
        return $this;
    }

    /**
     * Sets vendor field.
     */
    public function vendor(?array $value): self
    {
        $this->instance->setVendor($value);
        return $this;
    }

    /**
     * Initializes a new nac rule matching object.
     */
    public function build(): NacRuleMatching
    {
        return CoreHelper::clone($this->instance);
    }
}