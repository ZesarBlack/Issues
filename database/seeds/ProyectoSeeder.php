<?php

use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     

    public function run()
    {
        factory(App\Proyecto::class,30)->create();
    }
}
