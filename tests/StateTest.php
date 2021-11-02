<?php

namespace InternationalInfo\Tests;

use \InternationalInfo\InternationalInfo;

class StateTest extends TestCase
{

    /** @test */
    public function has_list()
    {
        $state = InternationalInfo::state();

        $this->assertIsArray($state->list());

        $this->assertIsArray($state->list('AU'));
        $this->assertEquals('New South Wales', InternationalInfo::state()->list('AU')['NSW']);
    }
}
