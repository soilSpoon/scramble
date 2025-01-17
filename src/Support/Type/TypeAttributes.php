<?php

namespace Dedoc\Scramble\Support\Type;

trait TypeAttributes
{
    /** @var array<string, mixed> */
    private $attributes = [];

    /**
     * @param  mixed  $value
     */
    public function setAttribute(string $key, $value): void
    {
        $this->attributes[$key] = $value;
    }

    public function hasAttribute(string $key): bool
    {
        return array_key_exists($key, $this->attributes);
    }

    /**
     * @return mixed
     */
    public function getAttribute(string $key)
    {
        if ($this->hasAttribute($key)) {
            return $this->attributes[$key];
        }

        return null;
    }
}
