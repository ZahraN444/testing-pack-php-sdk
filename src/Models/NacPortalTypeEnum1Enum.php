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
 * defines alignment on portal. enum: `center`, `left`, `right`
 */
class NacPortalTypeEnum1Enum
{
    public const MARVIS_CLIENT = 'marvis_client';

    public const GUEST = 'guest';

    private const _ALL_VALUES = [self::MARVIS_CLIENT, self::GUEST];

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
        throw new Exception("$value is invalid for NacPortalTypeEnum1Enum.");
    }
}
