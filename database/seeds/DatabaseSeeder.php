<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'nome' => 'pedroo',
        'login' => 'pedro',
        'email' => 'pedrooocferreira@gmail.com',
        'empresa_id' => 1,
        'password' => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',
        'tipo_user' => 0,
        
            ]);
    }
}
