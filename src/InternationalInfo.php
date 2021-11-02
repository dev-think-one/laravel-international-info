<?php

namespace InternationalInfo;

class InternationalInfo extends \Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return InternationalInfoManager::class;
    }
}
