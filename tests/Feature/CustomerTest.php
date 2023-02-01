<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    
    public function only_logged_user()
    {
        $response = $this->get('/')
        ->assertRedirect('/login');
    }

    public function test_example()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

}
