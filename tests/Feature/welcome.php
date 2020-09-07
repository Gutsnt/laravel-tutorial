<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class welcome extends TestCase
{
    /**@test*/
  function it_welcome_users_with_nickname()
    {
        $this->get('/saludo/Charlie/Preacher')
             ->assertStatus(200)
             ->assertSee('Bienvenido Charlie, su apodo es Preacher');
    }
/**@test*/
function it_welcome_users_without_nickname()
{
    $this->get('/saludo/Charlie')
         ->assertStatus(200)
         ->assertSee('Bienvenido Charlie');
}
}
