<?php

namespace Fidelopia\FirstPackage\Tests;

use Fidelopia\FirstPackage\Facades\FirstPackage;
use Orchestra\Testbench\TestCase;

class HelloTest extends TestCase
{
    /** @test */
    function it_returns_the_message()
    {
        $this->assertEquals(
            "Welcome John", FirstPackage::hello()
        );
    }
}
