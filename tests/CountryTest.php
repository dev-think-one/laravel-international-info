<?php

namespace InternationalInfo\Tests;

use \InternationalInfo\InternationalInfo;

class CountryTest extends TestCase
{

    /** @test */
    public function has_list()
    {
        $country = InternationalInfo::country();

        $this->assertIsArray($country->list());

        $this->assertEquals('Anguilla', InternationalInfo::country()->list('AI'));
    }

    /** @test */
    public function find_iso_code()
    {
        $country = InternationalInfo::country();

        $this->assertNull($country->findISOCode('UK'));
        $this->assertEquals('GB', $country->findISOCode('GB'));
        $this->assertEquals('GB', $country->findISOCode('United Kingdom (UK)'));
    }
}
