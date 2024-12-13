<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmail()
    {
        $email="i@admin.com";
        $result = Email::ValidateEmail($email);
        $this->assertTrue($result);


        $result = Email::ValidateEmail('juancho@@gmai.com');
        $this->assertFalse($result);
    }
}
