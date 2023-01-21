<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

use Yii\Html\Helper\CssClass;

/**
 * Classes traits is used to add the class attribute to an element.
 */
trait Classes
{
    /**
     * Returns a new instance with the specified class added.
     *
     * @param string $value The class value to add.
     *
     * @link https://html.spec.whatwg.org/#classes
     */
    public function class(string $value): static
    {
        $new = clone $this;
        CssClass::add($new->attributes, $value);

        return $new;
    }
}
