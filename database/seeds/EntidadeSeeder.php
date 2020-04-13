<?php

use App\Models\Autor;
use App\Models\Entidade;
use App\Models\Tema;
use App\Models\Tipo;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function criaEntidade() {
            $faker = [
                'Spicy jalapeno bacon occaecat sausage',
                'ipsum dolor amet adipisicing short',
                'est pork swine occaecat sausage',
                'chop meatball ut chuck adipisicing',
                'cow pork occaecat sausage',
                'occaecat sausage swine occaecat sausage',
                'chislic cupidatat ut chuck adipisicing',
                'adipisicing short ut chuck adipisicing',
                'ribs eiusmod adipisicing short',
                'kevin ut chuck adipisicing short. ',
                'Jerky exercitation swine occaecat sausage',
                'do, deserunt swine occaecat sausage',
                'dolore ea flank bacon do qui occaecat',
                'ullamco adipisicing short',
                't-bone quis tail ut chuck adipisicing.',
                'Et sunt in occaecat sausage',
                'fatback aute bacon do qui occaecat',
                'pancet tabacon do qui occaecat',
                'officia ut bacon do qui occaecat',
                'reprehenderit ut chuck adipisicing',
                'sirloin adipisicing short',
                'tenderloin bacon do qui occaecat',
                'swine occaecat sausage.',
                'Short ribs bacon do qui occaecat',
                'bacon do qui occaecat sausage',
                'aliqua cupidatat ut chuck adipisicing.'
            ];
            foreach($faker as $item){
                $entidade = Entidade::create([
                    'titulo'    =>  $item,
                    'description'   =>  "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                    'capa'  =>  'https://picsum.photos/seed/picsum/900/' . rand(900, 930),
                    'mini'  =>  'https://picsum.photos/seed/picsum/300/300' . rand(300, 330),
                    "video" =>  "https://player.vimeo.com/video/357463901",
                    "audio" =>  "http://localhost/storage/assets/podcast.mp3",
                    'tipo_id'   =>  Tipo::all()->random()->id,
                    'tema_id'   =>  Tema::all()->random()->id,
                ])->id;

                DB::table('autor_entidade')->insert([
                    'autor_id'  =>  Autor::all()->random()->id,
                    'entidade_id'   =>  $entidade
                ]);
            }
        }
        return criaEntidade();
    }
}
