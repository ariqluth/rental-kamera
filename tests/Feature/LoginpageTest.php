<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginpageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    
    {
        // setup
        // do somethinng 
        $response = $this->get('/login');

        //assert 
        $response->assertStatus(200);
        $response->assertSeeText('Email');
        $response->assertSeeText('Password');
// email 
        $response->assertSee('placeholder="Enter your email"', false);
// password
        $response->assertSee('placeholder="Enter your password" ', false);
    }
}
