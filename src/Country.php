<?php

namespace InternationalInfo;

use Illuminate\Support\Arr;

class Country
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

    /**
     * Find correct ISO code.
     *
     * @param string|null $string $string
     *
     * @return string|null
     */
    public function findISOCode(?string $string = null): ?string
    {
        $string = (string) $string;
        if (($key = array_search($string, $this->list))) {
            return $key;
        }
        $string = strtoupper($string);
        if (array_key_exists($string, $this->list)) {
            return $string;
        }

        return null;
    }
}
