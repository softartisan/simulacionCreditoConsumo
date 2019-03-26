<?php

use Illuminate\Database\Seeder;
use App\Credito;

class CreditoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Credito::class,10)->create();
    }
}
