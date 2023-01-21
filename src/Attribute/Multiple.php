<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

/**
 * Multiple trait is used to set the multiple attribute value of the input element.
 */
trait Multiple
{
    /**
     * Returns a new instances specifying the element allows multiple values.
     *
     * @param bool $value Whether the element allows multiple values.
     *
     * @link https://html.spec.whatwg.org/multipage/input.html#attr-input-multiple
     */
    public function multiple(bool $value = true): static
    {
        $new = clone $this;
        $new->attributes['multiple'] = $value;

        return $new;
    }
}
