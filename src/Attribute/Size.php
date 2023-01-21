<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

/**
 * Size trait is used by elements that have a size attribute.
 */
trait Size
{
    /**
     * Returns a new instance with the number of options meant to be shown by the control represented by its element.
     *
     * @param int $value The number of options meant to be shown by the control represented by its element.
     *
     * @link https://html.spec.whatwg.org/multipage/input.html#attr-input-size
     */
    public function size(int $value): static
    {
        $new = clone $this;
        $new->attributes['size'] = $value;

        return $new;
    }
}
