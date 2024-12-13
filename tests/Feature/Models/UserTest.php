<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;    

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {

        User::factory()->create([
            'name' => 'admin',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'admin',
        ]);

        $this->assertDatabaseMissing('users', [
            'name' => 'admin2',
        ]);
    }
}
