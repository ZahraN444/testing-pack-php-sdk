<?php

declare(strict_types=1);

/*
 * MistAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MistAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use MistAPILib\Models\NetworkInternalAccess;

/**
 * Builder for model NetworkInternalAccess
 *
 * @see NetworkInternalAccess
 */
class NetworkInternalAccessBuilder
{
    /**
     * @var NetworkInternalAccess
     */
    private $instance;

    private function __construct(NetworkInternalAccess $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new network internal access Builder object.
     */
    public static function init(): self
    {
        return new self(new NetworkInternalAccess());
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
     * Initializes a new network internal access object.
     */
    public function build(): NetworkInternalAccess
    {
        return CoreHelper::clone($this->instance);
    }
}
