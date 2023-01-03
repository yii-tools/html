<?php

declare(strict_types=1);

namespace Yii\Html\Attribute;

use Yii\Html\Helper\CssClass;

trait Classes
{
    /**
     * Returns a new instance with the specified the widget class.
     *
     * @param string $class The widget class.
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
