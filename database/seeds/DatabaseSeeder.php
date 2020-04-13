<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TemaSeeder::class);
        $this->call(TipoTableSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(EntidadeSeeder::class);
    }
}
