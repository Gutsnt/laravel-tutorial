<?php

namespace Tests\Feature;
use App\User;
use Tests\TestCase;
// use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;


class UsersModuleTest extends TestCase
{

       use RefreshDatabase;
    /**@test*/
  function it_shows_the_users_list()
    {
        factory(User::class)->create([
              'name' => 'Jose',


]);
        factory(User::class)->create([
               'name' => 'ellie',
]);

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertStatus('Listado de usuarios')
            ->assertStatus('joel')
            ->assertStatus('ellie');
      }
   /** @test */
   function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('No hay usuarios registrados');
    }


    /** @test */
   function it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5')
             ->assertStatus(200)
             ->assertSee('Mostrar detalles del usuario: 5');
    }
/**@test*/
   function it_loads_the_new_users_page()
 {
     $this->get('/usuarios/nuevo')
          ->assertStatus(200)
          ->assertSee('Crear nuevo usuario');
 }

}
