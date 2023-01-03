<?php

declare(strict_types=1);

namespace Yii\Form\Tests\Base;

use Yii\Html\Attribute;
use PHPUnit\Framework\TestCase;

final class MutationTest extends TestCase
{
    public function testAutofocus(): void
    {
        $widget = $this->widget()->autofocus();
        $this->assertSame(['autofocus' => true], $widget->attributes);
    }

    public function testClass(): void
    {
        $widget = $this->widget()->class('test-class');
        $this->assertSame(['class' => 'test-class'], $widget->attributes);
    }

    public function testDisabled(): void
    {
        $widget = $this->widget()->disabled();
        $this->assertSame(['disabled' => true], $widget->attributes);
    }

    public function testFormnovalidate(): void
    {
        $widget = $this->widget()->formnovalidate();
        $this->assertSame(['formnovalidate' => true], $widget->attributes);
    }

    public function testMultiple(): void
    {
        $widget = $this->widget()->multiple();
        $this->assertSame(['multiple' => true], $widget->attributes);
    }

    public function testReadOnly(): void
    {
        $widget = $this->widget()->readonly();
        $this->assertSame(['readonly' => true], $widget->attributes);
    }

    public function testReadOnlyWithFalse(): void
    {
        $widget = $this->widget()->readonly(false);
        $this->assertSame(['readonly' => false], $widget->attributes);
    }

    public function testReadOnlyWithTrue(): void
    {
        $widget = $this->widget()->readonly(true);
        $this->assertSame(['readonly' => true], $widget->attributes);
    }

    public function testRequired(): void
    {
        $widget = $this->widget()->required();
        $this->assertSame(['required' => true], $widget->attributes);
    }

    private function widget(): object
    {
        return new class () {
            use Attribute\Autofocus;
            use Attribute\Classes;
            use Attribute\Disabled;
            use Attribute\Formnovalidate;
            use Attribute\Multiple;
            use Attribute\Readonlys;
            use Attribute\Required;

            public array $attributes = [];
        };
    }
}