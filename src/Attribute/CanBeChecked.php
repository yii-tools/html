<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

/**
 * CanBeChecked is used by elements that support the checked attribute.
 */
trait CanBeChecked
{
    private bool $checked = false;

    /**
     * Returns a new instance with specifies that the element represents a selected control.
     *
     * @param bool $value The value of the checked attribute.
     *
     * @link https://www.w3.org/TR/2012/WD-html-markup-20120329/input.radio.html#input.radio.attrs.checked
     */
    public function checked(bool $value): static
    {
        $new = clone $this;
        $new->checked = $value;

        return $new;
    }
}
