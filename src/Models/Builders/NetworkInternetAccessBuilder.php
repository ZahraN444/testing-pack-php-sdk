<?php

declare(strict_types=1);

/*
 * MistAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MistAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use MistAPILib\Models\NetworkInternetAccess;

/**
 * Builder for model NetworkInternetAccess
 *
 * @see NetworkInternetAccess
 */
class NetworkInternetAccessBuilder
{
    /**
     * @var NetworkInternetAccess
     */
    private $instance;

    private function __construct(NetworkInternetAccess $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new network internet access Builder object.
     */
    public static function init(): self
    {
        return new self(new NetworkInternetAccess());
    }

    /**
     * Sets create simple service policy field.
     */
    public function createSimpleServicePolicy(?bool $value): self
    {
        $this->instance->setCreateSimpleServicePolicy($value);
        return $this;
    }

    /**
     * Sets destination nat field.
     */
    public function destinationNat(?array $value): self
    {
        $this->instance->setDestinationNat($value);
        return $this;
    }

    /**
     * Sets enabled field.
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Sets restricted field.
     */
    public function restricted(?bool $value): self
    {
        $this->instance->setRestricted($value);
        return $this;
    }

    /**
     * Sets static nat field.
     */
    public function staticNat(?array $value): self
    {
        $this->instance->setStaticNat($value);
        return $this;
    }

    /**
     * Initializes a new network internet access object.
     */
    public function build(): NetworkInternetAccess
    {
        return CoreHelper::clone($this->instance);
    }
}