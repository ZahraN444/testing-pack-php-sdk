<?php

declare(strict_types=1);

/*
 * MistAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MistAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use MistAPILib\Models\NacPortal;
use MistAPILib\Models\NacPortalSso;

/**
 * Builder for model NacPortal
 *
 * @see NacPortal
 */
class NacPortalBuilder
{
    /**
     * @var NacPortal
     */
    private $instance;

    private function __construct(NacPortal $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new nac portal Builder object.
     */
    public static function init(): self
    {
        return new self(new NacPortal());
    }

    /**
     * Sets access type field.
     */
    public function accessType(?string $value): self
    {
        $this->instance->setAccessType($value);
        return $this;
    }

    /**
     * Sets bg image url field.
     */
    public function bgImageUrl(?string $value): self
    {
        $this->instance->setBgImageUrl($value);
        return $this;
    }

    /**
     * Sets cert expire time field.
     */
    public function certExpireTime(?int $value): self
    {
        $this->instance->setCertExpireTime($value);
        return $this;
    }

    /**
     * Sets enable telemetry field.
     */
    public function enableTelemetry(?bool $value): self
    {
        $this->instance->setEnableTelemetry($value);
        return $this;
    }

    /**
     * Sets expiry notification time field.
     */
    public function expiryNotificationTime(?int $value): self
    {
        $this->instance->setExpiryNotificationTime($value);
        return $this;
    }

    /**
     * Sets guest portal config field.
     */
    public function guestPortalConfig(?NacPortalSso $value): self
    {
        $this->instance->setGuestPortalConfig($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets notify expiry field.
     */
    public function notifyExpiry(?bool $value): self
    {
        $this->instance->setNotifyExpiry($value);
        return $this;
    }

    /**
     * Sets ssid field.
     */
    public function ssid(?string $value): self
    {
        $this->instance->setSsid($value);
        return $this;
    }

    /**
     * Sets sso field.
     */
    public function sso(?NacPortalSso $value): self
    {
        $this->instance->setSso($value);
        return $this;
    }

    /**
     * Sets template url field.
     */
    public function templateUrl(?string $value): self
    {
        $this->instance->setTemplateUrl($value);
        return $this;
    }

    /**
     * Sets thumbnail url field.
     */
    public function thumbnailUrl(?string $value): self
    {
        $this->instance->setThumbnailUrl($value);
        return $this;
    }

    /**
     * Sets tos field.
     */
    public function tos(?string $value): self
    {
        $this->instance->setTos($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Initializes a new nac portal object.
     */
    public function build(): NacPortal
    {
        return CoreHelper::clone($this->instance);
    }
}