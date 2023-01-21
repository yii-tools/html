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
        $this->assertSame(['autofocus' => true], $widget->getattributes());
    }

    public function testClass(): void
    {
        $widget = $this->widget()->class('test-class');
        $this->assertSame(['class' => 'test-class'], $widget->getattributes());
    }

    public function testDisabled(): void
    {
        $widget = $this->widget()->disabled();
        $this->assertSame(['disabled' => true], $widget->getattributes());
    }

    public function testFormnovalidate(): void
    {
        $widget = $this->widget()->formnovalidate();
        $this->assertSame(['formnovalidate' => true], $widget->getattributes());
    }

    public function testMultiple(): void
    {
        $widget = $this->widget()->multiple();
        $this->assertSame(['multiple' => true], $widget->getattributes());
    }

    public function testReadOnly(): void
    {
        $widget = $this->widget()->readonly();
        $this->assertSame(['readonly' => true], $widget->getattributes());
    }

    public function testReadOnlyWithFalse(): void
    {
        $widget = $this->widget()->readonly(false);
        $this->assertSame(['readonly' => false], $widget->getattributes());
    }

    public function testReadOnlyWithTrue(): void
    {
        $widget = $this->widget()->readonly(true);
        $this->assertSame(['readonly' => true], $widget->getattributes());
    }

    public function testRequired(): void
    {
        $widget = $this->widget()->required();
        $this->assertSame(['required' => true], $widget->getattributes());
    }

    private function widget(): object
    {
        return new class () {
            use Attribute\CanBeAutofocus;
            use Attribute\CanBeDisabled;
            use Attribute\CanBeFormnovalidate;
            use Attribute\CanBeMultiple;
            use Attribute\CanBeReadonly;
            use Attribute\CanBeRequired;
            use Attribute\HasClass;

            protected array $attributes = [];

            public function getAttributes(): array
            {
                return $this->attributes;
            }
        };
    }
}
