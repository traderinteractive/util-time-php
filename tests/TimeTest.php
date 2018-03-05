<?php

namespace TraderInteractive\Util;

use TraderInteractive\Util\Time as TimeUtil;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \TraderInteractive\Util\Time
 */
final class TimeTest extends TestCase
{
    /**
     * @test
     * @covers ::getAnsiSqlTimestamp
     */
    public function getAnsiSqlTimestampBasic()
    {
        date_default_timezone_set('America/New_York');
        $this->assertSame("(TIMESTAMP'2013-05-02 10:57:08')", TimeUtil::getAnsiSqlTimestamp(1367506628));
    }

    /**
     * @test
     * @covers ::inMillis
     */
    public function inMillis()
    {
        $beforeSeconds = time();
        $milliseconds = TimeUtil::inMillis();
        $afterSecondsPlus = time() + 1;

        $this->assertGreaterThanOrEqual($beforeSeconds * 1000, $milliseconds);
        $this->assertLessThanOrEqual($afterSecondsPlus * 1000, $milliseconds);
    }
}
