<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

use InvalidArgumentException;

/**
 * Dirname trait is used to set the name of the field that contains the directionality of the element.
 */
trait Dirname
{
    protected array $attributes = [];

    /**
     * Returns a new instance with enables submission of a value for the directionality of the element, and gives the
     * name of the field that contains that value.
     *
     * @param string $value The name of the field that contains the directionality of the element.
     *
     * @link https://html.spec.whatwg.org/multipage/form-control-infrastructure.html#attr-fe-dirname
     */
    public function dirname(string $value): static
    {
        if ($value === '') {
            throw new InvalidArgumentException('The value cannot be empty.');
        }

        $new = clone $this;
        $new->attributes['dirname'] = $value;

        return $new;
    }
}
