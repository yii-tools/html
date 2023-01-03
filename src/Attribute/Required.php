<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

trait Required
{
    /**
     * Returns a new instance with if it is required to fill in a value in order to submit the form.
     *
     * @link https://www.w3.org/TR/html52/sec-forms.html#the-required-attribute
     */
    public function required(): static
    {
        $new = clone $this;
        $new->attributes['required'] = true;

        return $new;
    }
}
