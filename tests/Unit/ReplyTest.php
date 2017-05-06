<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ReplyTest extends TestCase
{
    
    use DatabaseMigrations;
    
    public $thread;
    
    public function setUp()
    {
        parent::setUp();
        $this->thread = factory('App\Thread')->create();
        
    }
    
    /** @test */
    public function it_has_an_owner()
    {
        $reply = factory('App\Reply')->create();
        $this->assertInstanceOf('App\User', $reply->owner);
    }
    
    
    
}
