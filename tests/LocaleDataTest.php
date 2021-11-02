<?php

namespace InternationalInfo\Tests;

use \InternationalInfo\InternationalInfo;

class LocaleDataTest extends TestCase
{

    /** @test */
    public function has_list()
    {
        $localeData = InternationalInfo::localeData();

        $this->assertIsArray($localeData->list());

        $this->assertIsArray($localeData->list('BA'));
        $this->assertEquals('BAM', InternationalInfo::localeData()->list('BA')['currency_code']);
    }
}
