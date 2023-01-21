<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

use InvalidArgumentException;

/**
 * Formaction trait is used by elements that have a formaction attribute.
 */
trait Formaction
{
    protected array $attributes = [];

    /**
     * Returns a new instances specifies the form-submission action for the element.
     *
     * @param string $value The form-submission action.
     */
    public function formaction(string $value): static
    {
        if ($value === '') {
            throw new InvalidArgumentException('The formaction attribute must be empty.');
        }

        $new = clone $this;
        $new->attributes['formaction'] = $value;

        return $new;
    }
}
