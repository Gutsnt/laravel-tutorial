<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $professions = DB::select('SELECT id FROM professions LIMIT 0,1', ['Desarrollador back-end']);

        $professionId = DB::table('professions')
        ->where('title', 'Desarrollador back-end')
        ->value('id');
        DB::table('users')->insert([
           'name' => 'Dulio Palacios',
           'email' => 'deulios.net',
           'password' => bcrypt('laravel'),
           'profession_id' => $professionId,

         ]);
    }
}
