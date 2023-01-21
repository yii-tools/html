<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

/**
 * Name trait is used to set the name of the element.
 */
trait Name
{
    /**
     * Returns a new instance with the specified the name part of the name/value pair associated with this element for
     * the purposes of form submission.
     *
     * @param string|null $value The name of the widget.
     *
     * @link https://html.spec.whatwg.org/multipage/form-control-infrastructure.html#attr-fe-name
     */
    public function name(?string $value): static
    {
        $new = clone $this;
        $new->attributes['name'] = $value;

        return $new;
    }
}
