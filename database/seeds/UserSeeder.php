<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(User::class)->create([
        'name' => 'Sebastian Canio',
        'password' => bcrypt('8913lunf'),
        'rut' => '19276033-k',
        'perfil' => 'Empleado',
        'email' => 'slcaniob@gmail.com',
        'phone_number' => '+569 56439919',
       ]);
       factory(User::class)->create([
        'name' => 'Carlos Gonzalez',
        'password' => bcrypt('8913lunf'),
        'rut' => '12511828-3',
        'perfil' => 'Cliente',
       ]);
    }
}
