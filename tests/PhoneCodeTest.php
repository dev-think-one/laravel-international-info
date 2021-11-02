<?php

namespace InternationalInfo\Tests;

use \InternationalInfo\InternationalInfo;

class PhoneCodeTest extends TestCase
{

    /** @test */
    public function has_list()
    {
        $phoneCode = InternationalInfo::phoneCode();

        $this->assertIsArray($phoneCode->list());

        $this->assertEquals('+1441', InternationalInfo::phoneCode()->list('BM'));
    }
}
