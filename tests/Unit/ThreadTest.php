<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadTest extends TestCase
{
    
    use DatabaseMigrations;
    
    public $thread;
    public $reply;
    
    public function setUp()
    {
        parent::setUp();
        $this->thread = factory('App\Thread')->create();
        $this->reply = factory('App\Reply', 10)->create(['thread_id' => $this->thread->id]);
    }
    
    /** @test */
    public function a_thread_has_replies()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->thread->replies);
        $this->assertInstanceOf('App\Reply', $this->thread->replies->first());
    }
    
    /** @test */
    public function a_thread_has_a_creator()
    {
        $this->assertInstanceOf('App\User', $this->thread->creator);
    }
    
    
    
}
