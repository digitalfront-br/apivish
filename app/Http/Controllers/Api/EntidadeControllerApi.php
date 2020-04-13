<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\EntidadeResource;
use App\Http\Resources\EntidadeResourceSingle;
use App\Models\Entidade;
use Illuminate\Http\Request;

class EntidadeControllerApi extends CrudControllerApi
{
    public function __construct()
    {
        $this->objeto = Entidade::class;
        $this->resources =   EntidadeResource::class;
        $this->resource =   EntidadeResourceSingle::class;
    }
}
