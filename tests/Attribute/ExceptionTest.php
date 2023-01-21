<?php

declare(strict_types=1);

namespace Yii\Form\Tests\Base;

use Yii\Html\Attribute;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class ExceptionTest extends TestCase
{
    public function testAutocomplete(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Autocomplete must be "on" or "off".');
        $this->widget()->autocomplete('');
    }

    public function testDirname(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The value cannot be empty.');
        $this->widget()->dirname('');
    }

    public function testFormaction(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The formaction attribute must be empty.');
        $this->widget()->formaction('');
    }

    public function testFormenctype(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            'The formenctype attribute must be one of the following values: "multipart/form-data", "application/x-www-form-urlencoded", "text/plain".',
        );
        $this->widget()->formenctype('');
    }

    public function testFormmethod(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The formnMethod attribute must be either "get" or "post".');
        $this->widget()->formmethod('');
    }

    public function testFormtarget(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The formtarget attribute value must be one of "_blank", "_self", "_parent" or "_top"');
        $this->widget()->formtarget('');
    }

    public function testList(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The value cannot be empty.');
        $this->widget()->list('');
    }

    public function testStep(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The value must be a number.');
        $this->widget()->step('');
    }

    private function widget(): object
    {
        return new class () {
            use Attribute\CanBeDisabled;
            use Attribute\HasAutocomplete;
            use Attribute\HasDirname;
            use Attribute\HasFormaction;
            use Attribute\HasFormenctype;
            use Attribute\HasFormmethod;
            use Attribute\HasFormtarget;
            use Attribute\HasLists;
            use Attribute\HasStep;

            protected array $attributes = [];
        };
    }
}
