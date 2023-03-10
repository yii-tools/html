<?php

declare(strict_types=1);

namespace Yii\Html\Tests\Helper;

use Yii\Html\Helper\Encode;
use PHPUnit\Framework\TestCase;

final class EncodeTest extends TestCase
{
    public function encodeProvider(): array
    {
        return [
            ["a<>&\"'\x80", 'a&lt;&gt;&amp;&quot;&apos;�',],
            ['Sam & Dark', 'Sam &amp; Dark'],
        ];
    }

    /**
     * @dataProvider encodeProvider
     *
     * @param string $value Value to encode.
     * @param string $expected Expected result.
     */
    public function testEncode(string $value, string $expected): void
    {
        $this->assertSame($expected, Encode::content($value));
    }

    public function testEncodeDouble(): void
    {
        $this->assertSame('sam &amp;amp; dark', Encode::content('sam &amp; dark'));
    }
}
