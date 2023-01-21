<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

/**
 * Formnovalidate trait is used by elements that have a formnovalidate attribute.
 */
trait Formnovalidate
{
    /**
     * Returns a new instances specifies that the element represents a control whose value is not meant to be validated
     * during form submission.
     */
    public function formnovalidate(): static
    {
        $new = clone $this;
        $new->attributes['formnovalidate'] = true;

        return $new;
    }
}
