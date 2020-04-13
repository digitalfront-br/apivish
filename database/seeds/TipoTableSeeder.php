<?php

use App\Models\Tipo;
use Illuminate\Database\Seeder;

class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function createTipos() {
            $tipos = ["Video", "Podcast"];
            foreach($tipos as $tipo) {
                Tipo::create([
                    "nome"  =>  $tipo
                ]);
            }
        }
        return createTipos();
    }
}
