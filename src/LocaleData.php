<?php

namespace InternationalInfo;

use Illuminate\Support\Arr;

class LocaleData
{
    protected array $list = [];

    public function __construct(array $name)
    {
        $this->list = $name;
    }

    public function list(?string $key = null, mixed $default = null): mixed
    {
        if ($key) {
            return Arr::get($this->list, $key, $default);
        }

        return $this->list;
    }
}
