<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Tag;

class TagControllerTest extends TestCase
{
    use RefreshDatabase;
    public function testStore()
    {
        $this->post('tags' , ['name' => 'test'])
            ->assertRedirect('/');
        
        $this->assertDatabaseHas('tags', ['name' => 'test']);
    }

    public function testDelete()
    {
        $tag = Tag::factory()->create();

        $this->delete('tags/' . $tag->id)->assertRedirect('/');

        $this->assertDatabaseMissing('tags', ['id' => $tag->name]);
    }

    public function testValidate(){
        $this->post('tags', ['name' => ''])->assertSessionHasErrors('name');
    }


}
