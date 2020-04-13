<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\AutorResource;
use App\Http\Resources\AutorResourceSingle;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorControllerApi extends CrudControllerApi
{
    public function __construct()
    {
        $this->objeto = Autor::class;
        $this->resources =   AutorResource::class;
        $this->resource =   AutorResourceSingle::class;
    }
}
