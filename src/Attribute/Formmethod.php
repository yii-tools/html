<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

use InvalidArgumentException;

/**
 * Formmethod trait is used by elements that have a formmethod attribute.
 */
trait Formmethod
{
    /**
     * Returns a new instances specifies the HTTP method with which a UA is meant to associate this element for form
     * submission.
     *
     * @param string $value The HTTP method.
     */
    public function formmethod(string $value): static
    {
        if ($value !== 'get' && $value !== 'post') {
            throw new InvalidArgumentException('The formnMethod attribute must be either "get" or "post".');
        }

        $new = clone $this;
        $new->attributes['formn-method'] = $value;

        return $new;
    }
}
