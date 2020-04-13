<?php

use App\Models\Tema;
use Illuminate\Database\Seeder;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function criarTemas() {
            $temas = [
                "Direito Civil",
                "Direito Ambiental",
                "Direito Comercial",
                "Direito Digital",
                "Direito do Consumidor",
                "Direito Contratual",
                "Direito Penal",
                "Direito Trabalhista"
            ];
            foreach($temas as $tema){
                Tema::create([
                    'tema' => $tema,
                ]);
            }
        }
        return criarTemas();
    }
}
