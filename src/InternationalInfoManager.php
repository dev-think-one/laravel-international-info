<?php

namespace InternationalInfo;

class InternationalInfoManager
{
    protected array $instances = [];

    public function storageFile(string $name): string
    {
        $file = config('international-info.storage_path') . '/' . $name;
        if (file_exists($file)) {
            return $file;
        }

        return __DIR__ . '/../storage/international-info/' . $name;
    }

    public function continent(): Continent
    {
        if (!empty($this->instances[ __FUNCTION__ ])) {
            return $this->instances[ __FUNCTION__ ];
        }

        return $this->instances[ __FUNCTION__ ] = new Continent(include($this->storageFile('continents.php')));
    }

    public function country(): Country
    {
        if (!empty($this->instances[ __FUNCTION__ ])) {
            return $this->instances[ __FUNCTION__ ];
        }

        return $this->instances[ __FUNCTION__ ] = new Country(include($this->storageFile('countries.php')));
    }

    public function localeData(): LocaleData
    {
        if (!empty($this->instances[ __FUNCTION__ ])) {
            return $this->instances[ __FUNCTION__ ];
        }

        return $this->instances[ __FUNCTION__ ] = new LocaleData(include($this->storageFile('locale-data.php')));
    }

    public function phoneCode(): PhoneCode
    {
        if (!empty($this->instances[ __FUNCTION__ ])) {
            return $this->instances[ __FUNCTION__ ];
        }

        return $this->instances[ __FUNCTION__ ] = new PhoneCode(include($this->storageFile('phone-codes.php')));
    }

    public function state(): State
    {
        if (!empty($this->instances[ __FUNCTION__ ])) {
            return $this->instances[ __FUNCTION__ ];
        }

        return $this->instances[ __FUNCTION__ ] = new State(include($this->storageFile('states.php')));
    }
}
