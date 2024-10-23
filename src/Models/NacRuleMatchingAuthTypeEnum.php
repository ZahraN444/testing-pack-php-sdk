<?php

declare(strict_types=1);

/*
 * MistAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MistAPILib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * enum: `cert`, `device-auth`, `eap-teap`, `eap-tls`, `eap-ttls`, `idp`, `mab`, `peap-tls`, `psk`
 */
class NacRuleMatchingAuthTypeEnum
{
    public const CERT = 'cert';

    public const DEVICEAUTH = 'device-auth';

    public const EAPTEAP = 'eap-teap';

    public const EAPTLS = 'eap-tls';

    public const EAPTTLS = 'eap-ttls';

    public const IDP = 'idp';

    public const MAB = 'mab';

    public const PEAPTLS = 'peap-tls';

    public const PSK = 'psk';

    private const _ALL_VALUES = [
        self::CERT,
        self::DEVICEAUTH,
        self::EAPTEAP,
        self::EAPTLS,
        self::EAPTTLS,
        self::IDP,
        self::MAB,
        self::PEAPTLS,
        self::PSK
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for NacRuleMatchingAuthTypeEnum.");
    }
}