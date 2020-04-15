<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\CrudController;
use App\Models\Autor;
use App\Models\Entidade;
use App\Models\Tema;
use Illuminate\Http\Request;

class EntidadeController extends CrudController
{
    public function __construct()
    {
        $this->entidade =   Entidade::class;
        $this->view =   'Entidade';
    }
    public function create()
    {
        $autores = Autor::get(['id', 'autor']);
        $temas  =   Tema::get(['id', 'tema']);
        return view('dashboard.'.$this->view.'.create')->with(['autores' => $autores, 'temas' => $temas ]);
    }
}
