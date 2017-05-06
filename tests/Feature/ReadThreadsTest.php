<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadTest extends TestCase
{
    
    use DatabaseMigrations;
    
    /** @test */
    public function a_user_can_browse_threads()
    {
        $thread = factory('App\Thread')->create();
        $response = $this->get('/threads');
        $response->assertSee($thread->title);
    }
    
    /** @test */
    public function a_user_can_read_a_thread()
    {
        $thread = factory('App\Thread')->create();
        $response = $this->get('/threads/'. $thread->id);
        $response->assertSee($thread->title);
    }
}