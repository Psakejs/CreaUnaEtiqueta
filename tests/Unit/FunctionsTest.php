<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmail()
    {
        $result = Validate_email('i@gmail.com');
        $this->assertTrue($result);

        $result = Validate_email('i@@gmail');
        $this->assertFalse($result);
    }
}
