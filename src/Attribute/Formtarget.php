<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

use InvalidArgumentException;

/**
 * Formtarget trait is used to set the formtarget attribute value.
 */
trait Formtarget
{
    protected array $attributes = [];

    /**
     * Returns a new instances specifies a browsing context name or keyword that represents the target of the control.
     *
     * @param string $value The browsing context name or keyword.
     */
    public function formtarget(string $value): static
    {
        if ($value !== '_blank' && $value !== '_self' && $value !== '_parent' && $value !== '_top') {
            throw new InvalidArgumentException(
                'The formtarget attribute value must be one of "_blank", "_self", "_parent" or "_top"'
            );
        }

        $new = clone $this;
        $new->attributes['formtarget'] = $value;

        return $new;
    }
}
