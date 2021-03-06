<?php

namespace TraderInteractive\Util;

/**
 * Static class for time based functions.
 */
final class Time
{
    /**
     * Converts unix timestamp into an ansi sql timestamp literal
     *
     * @param int $unixTimestamp
     *
     * @return string ansi sql timestamp surrounded with parenthesis
     */
    public static function getAnsiSqlTimestamp(int $unixTimestamp) : string
    {
        return "(TIMESTAMP'" . date('Y-m-d H:i:s', $unixTimestamp) . "')";
    }

    /**
     * Get current unix time in milliseconds
     *
     * @return int the current unix time
     */
    public static function inMillis() : int
    {
        return (int)(microtime(true) * 1000);
    }
}
