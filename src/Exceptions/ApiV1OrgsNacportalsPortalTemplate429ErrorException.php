<?php

declare(strict_types=1);

/*
 * MistAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MistAPILib\Exceptions;

class ApiV1OrgsNacportalsPortalTemplate429ErrorException extends ApiException
{
    /**
     * @var string|null
     */
    private $detail;

    /**
     * Returns Detail.
     */
    public function getDetail(): ?string
    {
        return $this->detail;
    }

    /**
     * Sets Detail.
     *
     * @maps detail
     */
    public function setDetail(?string $detail): void
    {
        $this->detail = $detail;
    }
}
