<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

use InvalidArgumentException;

/**
 * HasStep is used by elements that have a step attribute.
 */
trait HasStep
{
    protected array $attributes = [];

    /**
     * Returns a new instances specifying the value granularity of the element’s value.
     *
     * @param float|int|string $value The value granularity of the element’s value.
     */
    public function step(int|float|string $value): static
    {
        if (!is_numeric($value)) {
            throw new InvalidArgumentException('The value must be a number.');
        }

        $new = clone $this;
        $new->attributes['step'] = $value;

        return $new;
    }
}
