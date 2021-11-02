<?php

namespace InternationalInfo\Tests;

use \InternationalInfo\InternationalInfo;
use Illuminate\Support\Facades\File;

class PublishTest extends TestCase
{

    /** @test */
    public function has_list()
    {
        File::ensureDirectoryExists(config('international-info.storage_path'));
        File::copy(__DIR__ . '/Fixtures/states.php', config('international-info.storage_path') . '/' . 'states.php');

        $this->assertEquals('MY_STATE', InternationalInfo::state()->list('MY_COUNTRY')['STATE']);

        File::delete(config('international-info.storage_path') . '/' . 'states.php');
    }
}
