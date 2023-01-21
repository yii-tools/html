<?php

declare(strict_types=1);

namespace Yii\Form\Tests\Base;

use Yii\Html\Attribute;
use PHPUnit\Framework\TestCase;

final class ImmutabilityTest extends TestCase
{
    public function testImmutability(): void
    {
        $widget = $this->widget();
        $this->assertNotSame($widget, $widget->accept(''));
        $this->assertNotSame($widget, $widget->ariaDescribedBy(''));
        $this->assertNotSame($widget, $widget->ariaLabel(''));
        $this->assertNotSame($widget, $widget->autocomplete('on'));
        $this->assertNotSame($widget, $widget->autofocus());
        $this->assertNotSame($widget, $widget->checked(false));
        $this->assertNotSame($widget, $widget->class(''));
        $this->assertNotSame($widget, $widget->dirname('test.dir'));
        $this->assertNotSame($widget, $widget->disabled());
        $this->assertNotSame($widget, $widget->form('test.form'));
        $this->assertNotSame($widget, $widget->formaction('test.formaction'));
        $this->assertNotSame($widget, $widget->formenctype('multipart/form-data'));
        $this->assertNotSame($widget, $widget->formmethod('post'));
        $this->assertNotSame($widget, $widget->formnovalidate());
        $this->assertNotSame($widget, $widget->formtarget('_blank'));
        $this->assertNotSame($widget, $widget->id('test.id'));
        $this->assertNotSame($widget, $widget->list('test.list'));
        $this->assertNotSame($widget, $widget->max(''));
        $this->assertNotSame($widget, $widget->maxlength(0));
        $this->assertNotSame($widget, $widget->min(''));
        $this->assertNotSame($widget, $widget->minLength(0));
        $this->assertNotSame($widget, $widget->multiple());
        $this->assertNotSame($widget, $widget->name('test.name'));
        $this->assertNotSame($widget, $widget->pattern(''));
        $this->assertNotSame($widget, $widget->placeholder(''));
        $this->assertNotSame($widget, $widget->readonly());
        $this->assertNotSame($widget, $widget->required());
        $this->assertNotSame($widget, $widget->size(0));
        $this->assertNotSame($widget, $widget->step(0));
        $this->assertNotSame($widget, $widget->tabindex(0));
        $this->assertNotSame($widget, $widget->title(''));
        $this->assertNotSame($widget, $widget->type(''));
        $this->assertNotSame($widget, $widget->value(''));
    }

    private function widget(): object
    {
        return new class () {
            use Attribute\CanBeAutofocus;
            use Attribute\CanBeChecked;
            use Attribute\CanBeDisabled;
            use Attribute\CanBeFormnovalidate;
            use Attribute\CanBeMultiple;
            use Attribute\CanBeReadonly;
            use Attribute\CanBeRequired;
            use Attribute\HasAccept;
            use Attribute\HasAriaDescribedBy;
            use Attribute\HasAriaLabel;
            use Attribute\HasAutocomplete;
            use Attribute\HasClass;
            use Attribute\HasDirname;
            use Attribute\HasForm;
            use Attribute\HasFormaction;
            use Attribute\HasFormenctype;
            use Attribute\HasFormmethod;
            use Attribute\HasFormtarget;
            use Attribute\HasId;
            use Attribute\HasLists;
            use Attribute\HasMax;
            use Attribute\HasMaxLength;
            use Attribute\HasMin;
            use Attribute\HasMinLength;
            use Attribute\HasName;
            use Attribute\HasPattern;
            use Attribute\HasPlaceholder;
            use Attribute\HasSize;
            use Attribute\HasStep;
            use Attribute\HasTabindex;
            use Attribute\HasTitle;
            use Attribute\HasType;
            use Attribute\HasValue;

            protected array $attributes = [];
        };
    }
}
