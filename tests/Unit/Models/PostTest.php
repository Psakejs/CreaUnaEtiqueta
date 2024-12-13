<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Post;
class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_set_name_in_lowercase()
    {   
        $post= new Post;
        $post->name='Proyecto en PHP';
        $this->assertEquals('proyecto en php', $post->name);


    }

    public function test_slug()
    {
        $post= new Post;
        $post->name='Proyecto en PHP';
        $this->assertEquals('proyecto-en-php', $post->slug);
    }


    public function test_get_hrref()
    {
        $post= new Post;
        $post->name='Proyecto en PHP';
        $this->assertEquals('posts/proyecto-en-php', $post->href());
        
    }
}
