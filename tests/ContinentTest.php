<?php

namespace InternationalInfo\Tests;

use \InternationalInfo\InternationalInfo;

class ContinentTest extends TestCase
{

    /** @test */
    public function has_list()
    {
        $continent = InternationalInfo::continent();

        $this->assertIsArray($continent->list());

        $this->assertIsArray($continent->list('AN'));
        $this->assertEquals('Antarctica', InternationalInfo::continent()->list('AN')['name']);
    }
}
